<?php
/*
 *      fileRecursion.php
 *
 *      Copyright 2011 Ovidiu Liuta <info@thinkovi.com>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */


class fileRecursion{

	public static 	$debug = 0;

	private static 	$fp;
	private static 	$fpd;
	private static  $fpe;
	private static 	$d_arr;
	private static 	$f_arr;
	private static	$BACKUP_EXTENSIONS = array("tar", "zip", "tgz", "tar.gz");
	private static	$INCL_EXTENSIONS = array("sql", "txt");

	public static 	$excludeList = array();
	public static 	$count;
	public static 	$TEMP_PERM = ".excl";
	public static 	$TEMP_D_ARR = "tmp/.dir";
	public static 	$TEMP_EXCL = "tmp/.excl";
	public static 	$TEMP_DIR = "/opt/lampp/htdocs/joomla/administrator/backups"; //exclude other backups
	public static 	$START_DIR = "/"; # Backups Start Dir
	public static 	$EXCLUDE_FILES_SIZE = -1; //disabled
	public static 	$TEMP_OVERSIZED_FILE = "tmp/.oversized_files";



	public static function setData($data) {

        self::$TEMP_PERM 			= $data['TEMP_PERM'];
        self::$TEMP_EXCL 			= $data['TEMP_EXCL'];
        self::$TEMP_D_ARR 			= $data['TEMP_D_ARR'];
        self::$TEMP_DIR 			= $data['TEMP_DIR'];
        self::$START_DIR			= $data['START_DIR'];
        self::$EXCLUDE_FILES_SIZE	= $data['EXCLUDE_FILES_SIZE'];
        self::$TEMP_OVERSIZED_FILE	= $data['TEMP_OVERSIZED_FILE'];
    }

	/*
	 * Init the recursion system
	 * name: init
	 * @param	string	$startDir	Initial directory
	 * @return
	 */
	public static function init($startDir = ""){

		///if(self::$init)
			//@unlink(PERM);

		if($startDir != ""){
			self::debug("Starting fresh, deleting ". self::$TEMP_PERM);
			@unlink(self::$TEMP_PERM);
			self::$d_arr[] = $startDir;
			}
		else{
			self::debug("Starting a new queue ". self::$TEMP_D_ARR);
			self::debug("Opened directory $dir");
			self::$d_arr = array_filter(explode("\n", file_get_contents(self::$TEMP_D_ARR)));
			}

		self::$fp 	= fopen(self::$TEMP_PERM, "a");
		self::$fpd 	= fopen(self::$TEMP_D_ARR, "w");
		self::$fpe	= fopen(self::$TEMP_OVERSIZED_FILE, "a");

		self::initEXCL();

		if($startDir != ""){
			$inclFiles = self::getInclFiles();
			self::writePermFiles($inclFiles, "F", 1);
		}

	}

	/*
	 * We close the stuff left opened
	 * name: close
	 * @param
	 * @return
	 */
	public static function close(){

		@fclose(self::$fp );
		@fclose(self::$fpd );
		@fclose(self::$fpe );

	}

	/*
	 * Count the number of files saved in TEMP_PERM
	 * name: countPermFiles
	 * @param
	 * @return array $return($num, $size) (number of files saved, size of total files)
	 */
	public static function countPermFiles(){

		$handle = fopen(self::$TEMP_PERM, "r");
		$return['count'] = 0;
		$return['size'] = 0;

		while (($buffer = fgets($handle, 4096)) !== false) {

			$return['count']++;

			$data = @explode("|", str_replace("\n", "", $buffer));
			//if($data[3] == 'F')
			$return['size'] = $return['size'] + $data[2];
		}
		fclose($handle);

		return $return;

	}

	/*
	 * Return the backup files from TEMP_DIR
	 * name: getBackupFiles
	 * @param
	 * @return array $backupFiles files list
	 */
	public static function getBackupFiles(){

		$files = scandir(self::$TEMP_DIR);
		$backupFiles = array();

		foreach($files as $file){
				$info = pathinfo(self::$TEMP_DIR."/".$file);

				if(in_array($info['extension'], self::$BACKUP_EXTENSIONS)){
						//self::debug("Found previous files: ".$info['basename']);
						$backupFiles[sizeof($backupFiles)] = $info['dirname']."/".$info['basename'];
					}
		}

		self::debug("Found previous backup: ".implode(".",$backupFiles));
		return $backupFiles;

	}

	/*
	 * Return the force include files from TEMP_DIR
	 * name: getInclFiles
	 * @param
	 * @return array $backupFiles files list
	 */
	public static function getInclFiles(){

		self::debug("Reading the ".self::$TEMP_DIR ." for inclusion files");
		if(self::isNotExcluded(self::$TEMP_DIR))
			return;

		$files = scandir(self::$TEMP_DIR);
		$backupFiles = array();

		foreach($files as $file){
				$info = pathinfo(self::$TEMP_DIR."/".$file);

				if(in_array($info['extension'], self::$INCL_EXTENSIONS)){
						self::debug("Found previous files: ".$info['basename']);
						$backupFiles[sizeof($backupFiles)] = $info['dirname']."/".$info['basename'];
					}
		}

		self::debug("Found previous backup: ".implode(".",$backupFiles));
		return $backupFiles;

	}

	/*
	 * Initialize the excluded file list
	 * name: initEXCL
	 * @param
	 * @return
	 */
	public static function initEXCL(){

		//adding files from the TEMP_EXCL file
		if(file_exists(self::$TEMP_EXCL))
			self::$excludeList = array_filter(explode("\n", file_get_contents(self::$TEMP_EXCL)));

		//excluding existing backup archives
		$excludeBackupFiles = self::getBackupFiles();
		foreach($excludeBackupFiles as $file){
			self::$excludeList[sizeof(self::$excludeList)] = $file;
		}
		//self::debug(self::$TEMP_EXCL);
		self::debug("Excluded list:".implode("\n", self::$excludeList));

	}

	/*
	 * Check if we processed the full directory
	 * name: isQueueFinished
	 * @param
	 * @return
	 */
	public static function isQueueFinished(){

		$return = true;

		if(sizeof(self::$d_arr) != 0){
			$return = false;
		}

		return $return;

	}

	/*
	 * End recursion file system
	 * name: end
	 * @param
	 * @return
	 */
	public static function end(){

		fclose(self::$fp);
		fclose(self::$fpd);

		self::debug("All done, existing... ");

	}

	/*
	 * Send debug messages
	 *
	 * name: debug
	 * @param string $message
	 * @return
	 */
	public static function debug($message, $force=0){

		if((self::$debug) || ($force)){
				print($message."<br />\n");
			}

		return;

	}

	/*
	 * Start the recursion
	 *
	 * name: start
	 * @param
	 * @return
	 */
	public static function start(){

		self::debug("Start  ");
		foreach(self::$d_arr as $key=>$startdir)
		if($startdir != ""){

			self::debug("Processing ". $startdir);

			unset(self::$d_arr[$key]);

			if(self::isNotExcluded($startdir)){
				self::writePermFile($startdir, "D");
				self::$count++;
				self::getDirectories($startdir);
			}else{

				self::debug("$startdir excluded");
				}

		}

		self::$d_arr = array_filter(self::$d_arr);
		if(sizeof(self::$d_arr) != 0){

			$data = implode("\n", self::$d_arr);
			fwrite(self::$fpd, $data);
			self::debug("Found $data");
			self::$count++;
			}
		else{
			self::debug("Queue finished");
			}

	}

	/*
	 * Check if the file is not in the exclusion list
	 *
	 * name:	isNotExcluded
	 * @param	string $file	System File
	 * @return
	 */
	public static function isNotExcluded($file){

		$excluded = true;

		foreach(self::$excludeList as $exclFile){
			$mfile = str_replace(array("/","\\","\n","\r"), array("",""), trim($file));
			$mexclFile = str_replace(array("/","\\","\n","\r"), array("",""), ($exclFile));

			self::debug("exclude:".$mfile."--".$mexclFile);
			$string = stristr($mfile, $mexclFile);
			if($string != ""){
					$excluded = false;
					self::debug("$file excluded");
					return $excluded;
				}else
					self::debug("$file not excluded # $string");
			}

		return $excluded;

	}


	/*
	 * Return the size of a file, tries to overcome the 4GB php filesize limitation
	 *
	 * name: getFileSize
	 * @param string $file file path
	 * @return	string $sizeInBytes return the size in bytes of the file, PHP only returns values up to 4GB
	 */
	public static function getFileSize($file){

      $sizeInBytes = sprintf("%u", filesize($file));
      if ((!$sizeInBytes) and (function_exists("exec"))){
          $command = "ls -l \"$file\" | cut -d \" \" -f 5";
          $sizeInBytes = @exec($command);
      }

      return $sizeInBytes;

	}

	public static function getOverLimitFiles(){
			@fclose(self::$fpe);
			$files = explode("\n", file_get_contents(self::$TEMP_OVERSIZED_FILE));

			return array_diff($files, array(""));
	}

	public static function writeExcludedFile($file, $fsize = 0){

		self::debug("Excluded $file from list as it is bigger than ". self::$EXCLUDE_FILES_SIZE." MB!!!");

		if(self::$fpe){
			fwrite(self::$fpe, $file."\t(".$fsize." bytes)\n");
		}

	}

	/*
	 * Writing file details(path, permissions, size) to file
	 *
	 * name:	writePermFile
	 * @param	file handler $fp file handler of where to write
	 * @param	string $file File to write
	 * @return
	 */
	public static function writePermFile($file, $append = "", $force = 0){

		$file = realpath($file);

		if((self::isNotExcluded($file)) or  ($force)){
		// we check if file is not excluded
			$fperm = substr(sprintf('%o', @fileperms($file)), -4);
			$fsize = self::getFileSize($file);
			$sizeLimit = (self::$EXCLUDE_FILES_SIZE)*1024*1024; // we limit by MB

			if(intval(self::$EXCLUDE_FILES_SIZE) > -1){
				if(($fsize > $sizeLimit) and is_file($file)){
				//we check if file is larger than $EXCLUDE_FILES_SIZE
					self::writeExcludedFile($file, $fsize);
					return;
				}
			}

			$file  = str_replace(self::$START_DIR, "", str_replace("\\","/", $file));

			fwrite(self::$fp, $file."|".$fperm."|".$fsize."|".$append."\n");
			self::debug($file ." added to list");
		}
		else{
			self::debug("$file excluded");
		}
		return;
	}

	/*
	 * Handle an array of files
	 *
	 * name:	writePermFiles
	 * @param	file handler $fp File handler of where to write
	 * @param	array $files The array of files
	 * @return
	 */
	public static function writePermFiles($files, $append = "", $force = 0){

		if(is_array($files)){
			foreach($files as $file){
					self::writePermFile($file, $append, $force);
			}
		}else{
			self::writePermFile($files, $append, $force);
		}
		return;
	}

	/*
	 * Recurse the directory $dir and get all files in it
	 *
	 * name:	getDirectories
	 * @param	string $dir Directory to scan
	 * @param	array &f_arr File list array
	 * @param	array &fd_arr Directory list array
	 * @return
	 */
	public static function getDirectories($dir){

		self::debug("Processing $dir");

		if(is_dir($dir)) {
			self::debug("OK directory $dir");
			if($dh = opendir($dir)) {

			self::debug("Opened directory $dir");

	        while(($file = readdir($dh)) !== false) {
	          if($file != "." && $file != "..") {

				  $cfile = $dir."/".$file;

				  if(@is_dir($cfile))
					self::$d_arr[] = $cfile;
				  else{

					self::writePermFile($cfile, "F");
					self::$count++;
				 }
	          }
			}
			@closedir($dh);
			}else{
				self::debug("Unable to open $dir");
				}
		}else{
			self::debug($dir." is not directory");
			}


		return;

	}

}
