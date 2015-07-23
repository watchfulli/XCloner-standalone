<?php
/*
 *      main.class.php
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

class Main{

	public 	static $_CONFIG;


	/*
	 *
	 * name: init
	 * @param
	 * @return
	 */
	public static function init($_CONFIG){
		self::$_CONFIG = $_CONFIG;
	}

	/*
	 *
	 * name: unknown
	 * @param
	 * @return
	 */
	public static function initBackup($backupName){

		self::generateBackupName($backupName);

	}

	/*
	* Will cleanup the temporary directory
	*
	* name: cleanUp
	* @param
	* @return
	*/
	public static function cleanUp(){

		$dir = self::$_CONFIG['temp_dir'] ;

		if (@is_dir($dir)) {
			if ($dh = @opendir($dir)) {
				while (($file = @readdir($dh)) !== false) {
					if(($file!=".") and ($file!="..")){
						if(($file[0] == ".") and ($file[0] != ".htaccess"))
						//cleanup temp files
							@unlink($dir."/".$file);
						elseif(strstr( $file, "-sql.sql") != "")
						//cleanup sql files
							@unlink($dir."/".$file);

					}
			}
			closedir($dh);
			}
		}

	}

	public static function generateBackupName($backupName, $backupDatabase = 0, $dbbackup_drop = 0){

		$domainname = $_SERVER['HTTP_HOST'];

		if ((self::$_CONFIG['mem']) && ($_CONFIG['backup_refresh'])) {
			$f_ext = '.tar';
			$_CONFIG['tarcompress'] = '';
		} elseif (self::$_CONFIG['backup_compress']) {
			$f_ext = '.tgz';
			$_CONFIG['tarcompress'] = 'z';
		} else {
			$f_ext = '.tar';
			$_CONFIG['tarcompress'] = '';
		}


		if ($backupName == "") {
			if ($backupDatabase == 1) {
				if ($_REQUEST['dbbackup_drop']) {
					$filename = 'backup_' . date("Y-m-d_H-i") . '_' . $domainname . '-sql-drop' . $f_ext;
				} else {
					$filename = 'backup_' . date("Y-m-d_H-i") . '_' . $domainname . '-sql-nodrop' . $f_ext;
				}
			} else
				$filename = 'backup_' . date("Y-m-d_H-i") . '_' . $domainname . '-nosql' . $f_ext;
		} else {
		$filename = $_REQUEST['bname'] . $f_ext;
		}

	return $filename;

	}

}


?>
