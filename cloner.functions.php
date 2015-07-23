<?php
  /*
   *      cloner.functions.php
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

  /** ensure this file is being included by a parent file */
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


  /*
   * Process the logout request
   * name: doLogout()
   * @param
   * @return
   */
  function doLogout()
  {
      if (function_exists('session_unregister')) {
          @session_unregister('clone');
      }

      unset($_SESSION['clone']);

      mosRedirect("index.php?option=com_cloner", "");
  }

  /*Error printing
   *
   * name: E_print
   * @param
   * @return
   */
  function E_print($message)
  {
      print "<center><font color='red' size='4'>$message</font></center>";
  }

/*
 * Will send a log output to file
 * name: addLog
 * @param
 * @return
 */
  function addXLog($message){

		global $flog, $_CONFIG;

		if($_CONFIG['debug']){

		$message = strip_tags($message);

		@fwrite($flog, $message."\n");

		}

	  }
  function openXLog(){

		global $flog, $_CONFIG;

		if($_CONFIG['debug']){

		$flog = @fopen($_CONFIG['logfile'],"a");

		addXLog("Log output started");

		}

	  }
  function closeXLog(){

	  global $flog, $_CONFIG;

	  if($_CONFIG['debug']){

	  addXLog("Log output finished");

	  @fclose($flog);

      }

  }
  function deleteXLog(){

	  global $_CONFIG;

	  if($_CONFIG['debug']){

	  @unlink($_CONFIG['logfile']);

	  }

  }

  /*Simple redirect function*/
  function mosRedirect($url, $msg = "")
  {
      echo "<script type=\"text/javascript\">

  window.location = \"$url&mosmsg=" . urlencode($msg) . "\";

  </script>";

      exit;
  }

  function fdefault()
  {
      $html = new HTML_cloner();
      $html->_FDefault();
  }

  function config($option)
  {
      global $mosConfig_absolute_path, $_CONFIG, $config_file;


      if (@$_REQUEST['action'] == 'save') {
          //print_r($_REQUEST);exit;
          $databases_incl_list = "";
          if (is_array($_REQUEST['databases_incl']))
              foreach ($_REQUEST['databases_incl'] as $database) {
                  $databases_incl_list .= $database . ",";
              }
          if ($fp = @fopen($config_file, 'w')) {
              $cfg = '<?' . 'php' . "\n";

              $cfg .= '$_CONFIG[\'license_code\']=\'' . $_REQUEST[license_code] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'backup_path\']="' . $_REQUEST[backup_path] . '";' . "\n";

              $cfg .= '$_CONFIG[\'clonerPath\']="' . $_REQUEST[clonerPath] . '";' . "\n";

              $cfg .= '$_CONFIG[\'jcuser\']=\'' . $_REQUEST[jcuser] . '\';' . "\n";

              if ($_REQUEST['jcpass'] == '') {
                  $jcpass = $_CONFIG['jcpass'];
              } else {


                  $jcpass = md5($_REQUEST['jcpass']);
              }

              $cfg .= '$_CONFIG[\'jcpass\']=\'' . $jcpass . '\';' . "\n";

              $cfg .= '$_CONFIG[\'mysql_host\']="' . $_REQUEST[mysql_host] . '";' . "\n";

              $cfg .= '$_CONFIG[\'mysql_user\']=\'' . $_REQUEST[mysql_user] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'mysql_pass\']=\'' . $_REQUEST[mysql_pass] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'mysql_database\']="' . $_REQUEST[mysql_database] . '";' . "\n";

              $cfg .= '$_CONFIG[\'select_folders\']="' . $_REQUEST[select_folders] . '";' . "\n";

              $cfg .= '$_CONFIG[\'select_lang\']="' . $_REQUEST[select_lang] . '";' . "\n";

              $cfg .= '$_CONFIG[\'secure_ftp\']="' . $_REQUEST[secure_ftp] . '";' . "\n";

              $cfg .= '$_CONFIG[\'backup_compress\']="' . $_REQUEST[backup_compress] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_logemail\']="' . $_REQUEST[cron_logemail] . '";' . "\n";
              
              $cfg .= '$_CONFIG[\'cron_fromlogemail\']="' . $_REQUEST[cron_fromlogemail] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_exclude\']="' . $_REQUEST[cron_exclude] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_send\']="' . $_REQUEST[cron_send] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_btype\']="' . $_REQUEST[cron_btype] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_bname\']="' . $_REQUEST[cron_bname] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_ip\']="' . $_REQUEST[cron_ip] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_ftp_server\']="' . $_REQUEST[cron_ftp_server] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_ftp_user\']=\'' . $_REQUEST[cron_ftp_user] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'cron_ftp_pass\']=\'' . $_REQUEST[cron_ftp_pass] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'cron_ftp_path\']="' . $_REQUEST[cron_ftp_path] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_ftp_delb\']="' . $_REQUEST[cron_ftp_delb] . '";' . "\n";

              $cfg .= '$_CONFIG[\'databases_incl_list\']="' . $databases_incl_list . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_sql_drop\']="' . $_REQUEST[cron_sql_drop] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_email_address\']="' . $_REQUEST[cron_email_address] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_file_delete\']="' . $_REQUEST[cron_file_delete] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_file_delete_act\']="' . $_REQUEST[cron_file_delete_act] . '";' . "\n";

              $cfg .= '$_CONFIG[\'mem\']="' . $_REQUEST[mem] . '";' . "\n";

              $cfg .= '$_CONFIG[\'backup_refresh\']="' . $_REQUEST[backup_refresh] . '";' . "\n";

              $cfg .= '$_CONFIG[\'refresh_time\']="' . $_REQUEST[refresh_time] . '";' . "\n";

              $cfg .= '$_CONFIG[\'refresh_mode\']="' . $_REQUEST[refresh_mode] . '";' . "\n";

              $cfg .= '$_CONFIG[\'recordsPerSession\']="' . $_REQUEST[recordsPerSession] . '";' . "\n";

              $cfg .= '$_CONFIG[\'excludeFilesSize\']="' . $_REQUEST[excludeFilesSize] . '";' . "\n";

              $cfg .= '$_CONFIG[\'splitBackupSize\']="' . $_REQUEST[splitBackupSize] . '";' . "\n";

              $cfg .= '$_CONFIG[\'backup_refresh_number\']="' . $_REQUEST[backup_refresh_number] . '";' . "\n";

              $cfg .= '$_CONFIG[\'sql_mem\']="' . $_REQUEST[sql_mem] . '";' . "\n";

              $cfg .= '$_CONFIG[\'enable_db_backup\']="' . $_REQUEST[enable_db_backup] . '";' . "\n";

              $cfg .= '$_CONFIG[\'zippath\']="' . $_REQUEST[zippath] . '";' . "\n";

              $cfg .= '$_CONFIG[\'tarpath\']="' . $_REQUEST[tarpath] . '";' . "\n";

              $cfg .= '$_CONFIG[\'sqldump\']="' . $_REQUEST[sqldump] . '";' . "\n";

              $cfg .= '$_CONFIG[\'system_dlink\']="' . $_REQUEST[system_dlink] . '";' . "\n";

              $cfg .= '$_CONFIG[\'mosConfig_live_site\']="' . $_SERVER['HTTP_HOST'] . '";' . "\n";

              $cfg .= '$_CONFIG[\'system_ftptransfer\']="' . $_REQUEST[system_ftptransfer] . '";' . "\n";

              $cfg .= '$_CONFIG[\'system_mdatabases\']="' . $_REQUEST[system_mdatabases] . '";' . "\n";

              $cfg .= '$_CONFIG[\'add_backups_dir\']="' . $_REQUEST[add_backups_dir] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_amazon_active\']="' . $_REQUEST[cron_amazon_active] . '";' . "\n";

              $cfg .= '$_CONFIG[\'cron_amazon_awsAccessKey\']=\'' . $_REQUEST[cron_amazon_awsAccessKey] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'cron_amazon_awsSecretKey\']=\'' . $_REQUEST[cron_amazon_awsSecretKey] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'cron_amazon_bucket\']=\'' . $_REQUEST[cron_amazon_bucket] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'cron_amazon_dirname\']=\'' . $_REQUEST[cron_amazon_dirname] . '\';' . "\n";
              
              $cfg .= '$_CONFIG[\'cron_amazon_ssl\']=\'' . $_REQUEST[cron_amazon_ssl] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'cron_dropbox_active\']=\'' . $_REQUEST[cron_dropbox_active] . '\';' . "\n";
              
              $cfg .= '$_CONFIG[\'cron_dropbox_Key\']=\'' . $_REQUEST[cron_dropbox_Key] . '\';' . "\n";
              
              $cfg .= '$_CONFIG[\'cron_dropbox_Secret\']=\'' . $_REQUEST[cron_dropbox_Secret] . '\';' . "\n";
              
              $cfg .= '$_CONFIG[\'cron_dropbox_dirname\']=\'' . $_REQUEST[cron_dropbox_dirname] . '\';' . "\n";

              $cfg .= '$_CONFIG[\'debug\']="' . $_REQUEST[debug] . '";' . "\n";


              $cfg .= '?' . '>';

              fwrite($fp, $cfg);

              fclose($fp);

              $msg = LM_MSG_BACK_1;

              if ($_REQUEST['cron_save_as'] != "") {
                  $fcron = $_CONFIG['multiple_config_dir'] . "/" . $_REQUEST['cron_save_as'] . ".php";

                  if ($fp = @fopen($fcron, "w")) {
                      fwrite($fp, $cfg);

                      fclose($fp);
                  } else {


                      $msg = "Unable to save  ".$fcron." file, please make sure the folder is writeable!";
                  }
              }


              //exit;
              mosRedirect('index2.php?option=' . $option . "&task=config", $msg);
          } else {
              $msg = "<font color='red'>ERROR... Unable to write to ".realpath($config_file).", please make it writeable!</font>";
              E_print($msg);
          }
      }
      $html = new HTML_cloner();
      $html->Config($option);
  }

  //## JoomlaCloner Language Manager
  function translator($option)
  {
      global $mosConfig_absolute_path, $lang_array, $lang_dir;

      $langs = array();
      $cid = $_REQUEST['cid'];
      $files = $_REQUEST['files'];

      if (is_array($cid))
          foreach ($cid as $value) {
              $langs[] = $files[$value];
          }

      if ($_REQUEST['task'] == 'del_lang') {
          foreach ($langs as $lang) {
              @unlink($lang_dir . "/" . $lang . ".php");
          }

          $msg = LM_LANG_MSG_DEL;
          mosRedirect('index2.php?option=' . $option . "&task=lang", $msg);
      }

      $html = new HTML_cloner();
      $html->Translator($option, $lang_array);
  }

  function translator_add($option, $task)
  {
      global $_CONFIG, $lang_array, $lang_dir;

      if ($task == 'add_lang_new') {
          $lfile = $lang_dir . "/" . strtolower($_REQUEST['lname']) . ".php";

          if (file_exists($lfile)) {
              $msg = "Language " . $_REQUEST['lname'] . " already exists!";
          } elseif ($fp = @fopen($lfile, 'w')) {
              fwrite($fp, "");

              fclose($fp);

              $msg = "Language " . ucfirst($_REQUEST['language']) . " successfully added!";
          } else {


              $msg = "File $lfile could not be updated, please check it's permissions'!";
          }

          mosRedirect('index2.php?option=' . $option . "&task=lang", $msg);
      }
	
	  $html = new HTML_cloner();
      $html->Translator_Add($option);
  }
  function translator_edit($option, $task)
  {
      global $_CONFIG, $lang_array, $lang_dir;

      if (($task == 'save_lang') || ($task == 'save_lang_apply')) {
          $lfile = $lang_dir . "/" . $_REQUEST['language'] . ".php";

          if ($_REQUEST['language'] == 'english') {
              if ($fp = @fopen($lfile, 'w')) {
                  fwrite($fp, stripslashes($_REQUEST['def_content']));

                  fclose($fp);

                  $msg = "Language " . ucfirst($_REQUEST['language']) . " successfully updated!";
              } else {


                  $msg = "File $lfile could not be created, please check it's permissions'!";
              }
              if ($task == 'save_lang_apply')
                  mosRedirect('index2.php?option=' . $option . "&task=edit_lang&langx=" . $_REQUEST['language'], $msg);
              else
                  mosRedirect('index2.php?option=' . $option . "&task=lang", $msg);
          } else {


              $lfile = $_REQUEST['lfile'];
              $ldata = $_REQUEST['lang'];

              if ($fp = @fopen($lfile, 'w')) {
                  fwrite($fp, "<" . "?php\n");
                  foreach ($ldata as $key => $value) {
                      fwrite($fp, "define(\"" . $key . "\",\"" . stripslashes($value) . "\");\n");
                  }

                  fwrite($fp, "?" . ">");

                  fclose($fp);

                  $msg = "Language " . ucfirst($_REQUEST['language']) . " successfully updated!";
              } else {


                  $msg = "File $lfile could not be updated, please check it's permissions'!";
              }
          }
          if ($task == 'save_lang_apply')
              mosRedirect('index2.php?option=' . $option . "&task=edit_lang&langx=" . $_REQUEST['language'], $msg);
          else
              mosRedirect('index2.php?option=' . $option . "&task=lang", $msg);
      }

      $content = "";
      $lang = "";
      $cid = $_REQUEST['cid'];
      $files = $_REQUEST['files'];

      if (is_array($cid))
          foreach ($cid as $value) {
              $lang = $files[$value];
          }

      if ($_REQUEST['langx']) {
          $lang = $_REQUEST['langx'];
      }

      if ($fp = fopen($lang_dir . "/english.php", 'r')) {
          while (!feof($fp)) {
              $content .= fread($fp, 1024);
          }

          fclose($fp);
      }

      $file = $lang_dir . "/" . $lang . ".php";
      $dfile = $lang_dir . "/english.php";



      if ($lang == 'english') {
          $html = new HTML_cloner();
          $html->Translator_Edit_DEFAULT($option, $content, $file, $lang);
      } else {
          $def_data = get_lang_data($dfile);
          $cur_data = get_lang_data($file);

          $data = array_merge($def_data, $cur_data);
		  $html = new HTML_cloner();
          $html->Translator_Edit($option, $data, $def_data, $file, $lang);
      }
  }

  function get_lang_data($file)
  {
      global $_CONFIG;

      if ($fp = fopen($file, 'r')) {
          while (!feof($fp)) {
              $content .= fread($fp, 1024);
          }

          fclose($fp);
      }

      $data = array();

      $tmp = explode("define(\"", $content);
      foreach ($tmp as $key => $value) {
          $temp = explode("\",", $value);

          $tst = explode("\");", $temp[1]);
          $data[$temp[0]] = substr(trim($tst[0]), 1, strlen($tst[0]));
      }

      return $data;
  }

  function get_avalaible_langs()
  {
      global $_CONFIG, $lang_dir;

      $lang_arr = array();

      if ($handle = @opendir($lang_dir)) {
          /* This is the correct way to loop over the directory. */
          while (false !== ($file = readdir($handle)))
              if (($file != 'index.html') && ($file != '..') && ($file != '.')) {
                  $lang_arr[] = str_replace(".php", "", $file);
              }

          closedir($handle);
      }

      return $lang_arr;
  }

  function goRecurseDatabases(){
	global $_CONFIG;

	include_once("classes/mysqlBackup.class.php");

	$return = array();

	$data['dbHostname'] 			= $_CONFIG['mysql_host'];
	$data['dbUsername'] 			= $_CONFIG['mysql_user'];
	$data['dbPassword'] 			= $_CONFIG['mysql_pass'];
	$data['dbDatabase'] 			= $_CONFIG['mysql_database'];
	$data['excludedTables']			= "";
	$data['recordsPerSession']		= $_CONFIG['recordsPerSession'];
	$data['dbCompatibility'] 		= $_REQUEST['dbbackup_comp']; //version compatibility
	$data['dbDropSyntax'] 			= $_REQUEST['dbbackup_drop']; //Add DROP Syntax

	$data['TEMP_DUMP_FILE'] 		= $_CONFIG['temp_dir']."/database-sql.sql";
	$data['TEMP_DBPROCESS_FILE'] 	= $_CONFIG['temp_dir']."/.database";

	if($_REQUEST['mode'] == "start"){
	//do the initial table readings

		//foreach($_REQUEST['excltables'] as $value) //check if any tables are excluded, we will only export their structure
		$data['excludedTables']	= $_REQUEST['excltables'];

		//foreach($_REQUEST['excltables'] as $value) //check if any other databases are included
		$extradb = $_REQUEST['databases_incl'];

		$db = new DB();
		$db->init($data, 1);
		$db->writeTempFile();
		$db->disconnect();

		//building the .database temp file
		if(is_array($extradb))
		foreach($extradb as $database){
			$data['dbDatabase'] = $database;
			$data['TEMP_DUMP_FILE'] = $_CONFIG['temp_dir']."/".$data['dbDatabase']."-sql.sql";
			$db = new DB();
			$db->init($data);
			$db->writeTempFile();
			$db->disconnect();

		}

		return;
	}

	//we start the backup process for the actual database

	$data['dbDatabase'] 		= "";
	$dumpfile 					= "";
	$data['dbCompatibility'] 	= $_REQUEST['dbbackup_comp']; //version compatibility
	$data['dbDropSyntax'] 		= $_REQUEST['dbbackup_drop']; //Add DROP Syntax
	$startAtLine 				= intval($_REQUEST['startAtLine']);
	$startAtRecord 				= intval($_REQUEST['startAtRecord']);
	$dumpfile 					= $_REQUEST['dumpfile'];

	$db = new DB();
	$db->init($data);

	$records = $db->resetcountRecords();

	while(($records < $_CONFIG['recordsPerSession']) and (!$return['finished']) and(!$return['newDump']) and(!$return['endDump'])){

		$return = $db->processIncremental($startAtLine, $startAtRecord, $dumpfile);

		$records = $db->getcountRecords();
		$startAtLine = $return['startAtLine'];
		$startAtRecord = $return['startAtRecord'];
		$dumpfile = $return['dumpfile'];

	}

	/*if($return['newDump'])
		print_r($return);*/
	/*$startAtLine = $return['startAtLine'];
	$startAtRecord = $return['startAtRecord'];
	$dumpfile = $return['dumpfile'];*/

	$return['dbbackup_comp'] = $_REQUEST['dbbackup_comp'];
	$return['dbbackup_drop'] = $_REQUEST['dbbackup_drop'];

	if($return['databaseName'] == "###enddump###")
		$return['databaseName'] = "";

	$db->disconnect();

	echo json_encode($return);
	exit;

  }

  function goRecurseFiles(){

	global $_CONFIG;

	include_once("classes/fileRecursion.php");

	$status['finished'] = "1";
	$status['task'] = $_REQUEST['task'];

	$handle = new fileRecursion();

	$dataInit['TEMP_PERM'] 				= $_CONFIG['temp_dir']."/perm.txt";
	$dataInit['TEMP_EXCL'] 				= $_CONFIG['exfile'];
	$dataInit['TEMP_D_ARR']				= $_CONFIG['temp_dir']."/.dir";
	$dataInit['TEMP_DIR']				= $_CONFIG['clonerPath'];
	$dataInit['START_DIR']				= $_CONFIG['backup_path'];
	$dataInit['EXCLUDE_FILES_SIZE']		= $_CONFIG['excludeFilesSize'];
	$dataInit['TEMP_OVERSIZED_FILE'] 	= $_CONFIG['temp_dir']."/.oversized_files";

	$handle->setData($dataInit);

	if($_REQUEST['mode'] == 'start')
		$handle->init($_CONFIG['backup_start_path']);
	else
		$handle->init();

	$handle->start();
	$handle->end();

	$data = $handle->countPermFiles();

	$status['size'] = $data['size'];
	$status['tfiles'] = $data['count'];
	$status['mode'] = "";

	if(!$handle->isQueueFinished())
		$status['finished'] = "0";
	else{
	//recurse finished, lets return the excluded files by size
		if(intval($_CONFIG['EXCLUDE_FILES_SIZE']) > -1){
			$status['overlimit'] = $handle->getOverLimitFiles();
			}
	}

	echo json_encode($status);
	$handle->close();
	exit;

  }

  function showBackups($option)
  {
      // ----------------------------------------------------------
      // Generate a selectable list of the files in Backup Folder
      // ----------------------------------------------------------
      global $_CONFIG;

      if (!is_dir($_CONFIG['clonerPath'])) {
          E_print("Your backup directory " . $_CONFIG['clonerPath'] . " is not correct! Unable to continue...");
          return;
      }

      // initialise list arrays, directories and files separately and array counters for them
      $d_arr = array();
      $d = 0;
      $f_arr = array();
      $f = 0;
      $s_arr = array();
      $s = 0;

      // obtain the list of backup archive files
      getBackupFiles($d_arr, $f_arr, $s_arr, $d, $f);

      // load presentation layer
      $html = new HTML_cloner();
      $html->showBackups($f_arr, $s_arr, $_CONFIG['clonerPath'], $option);
  }

  function moveBackup($option)
  {
      global $task;
      $files_out = array();
      if (is_array($_REQUEST[files])) {
          foreach ($_REQUEST[files] as $key => $value)
              if ($_REQUEST[cid][$key] != "")
                  $files_out[] = $value;
      }

      if ($_REQUEST['action'] == "connect") {
          $ret = start_connect($_REQUEST[files]);
      }
      if (!$ret){
		  $html = new HTML_cloner();
          $html->TransferForm($option, $files_out);
	  }
  }

  function start_connect($files)
  {
      global $task, $_CONFIG;


      if (($_REQUEST[task] == 'move') || ($_REQUEST[task2] == 'move')) {
      } else {

          $source_file[0] = "restore/XCloner.php";
          $destination_file[0] = $_REQUEST[ftp_dir] . "/XCloner.php";

          $source_file[1] = "restore/TAR.php";
          $destination_file[1] = $_REQUEST[ftp_dir] . "/TAR.php";
      }

      foreach ($files as $file) {
          $source_file[] = $_CONFIG['clonerPath'] . "/" . $file;
          $destination_file[] = $_REQUEST[ftp_dir] . "/" . $file;
      }



      list($fhost, $fport) = explode(":", $_REQUEST[ftp_server]);
      if ($fport == "")
          $fport = '21';

      $ftp_timeout = '3600';
      // set up basic connection
      if (!$_CONFIG[secure_ftp]) {
          $conn_id = ftp_connect($fhost, (int)$fport, (int)$ftp_timeout);
          $connect = "Normal";
      } else {

          $conn_id = ftp_ssl_connect($fhost, (int)$fport, (int)$ftp_timeout);
          $connect = "Secure";
      }

      // login with username and password
      $login_result = @ftp_login($conn_id, $_REQUEST[ftp_user], $_REQUEST[ftp_pass]);

      // check connection
      if ((!$conn_id) || (!$login_result)) {
          echo "<b  style='color:red'>" . LM_MSG_BACK_2 . "</b>";
          echo "<b  style='color:red'>Attempted to connect to " . $_REQUEST[ftp_server] . " for user " . $_REQUEST[ftp_user] . "</b>";
          return;
      } else {
          //echo "Connected to $_REQUEST[ftp_server], for user $_REQUEST[ftp_user]";
      }

      if ($_CONFIG[system_ftptransfer] == 1) {
          // turn passive mode on
          @ftp_pasv($conn_id, true);
          $mode = "Passive";
      } else {
          // turn passive mode off
          @ftp_pasv($conn_id, false);
          $mode = "Active";
      }

      echo "Connected to $connect ftp server <b>$_REQUEST[ftp_server] - $mode Mode</b><br />";
      for ($i = 0; $i < sizeof($source_file); $i++) {
          echo "<br />Moving source file <b>" . $source_file[$i] . "</b>";
          // upload the file
          if (!$_REQUEST['ftp_inct']) {
              $ret = ftp_put($conn_id, $destination_file[$i], $source_file[$i], FTP_BINARY);

              if ($ret)
                  echo "<br /><b>Upload success to <i>$destination_file[$i]</i> ...<br /></b>";
              else {
                  echo "<b style='color:red'>FTP upload has failed for file $destination_file[$i] ! Stopping ....<br /></b>";
                  return;
              }
          }

          if ($_REQUEST['ftp_inct']) {
              $size = get_filesize($source_file[$i]);
              $dsize = ftp_size($conn_id, $destination_file[$i]);
              $perc = sprintf("%.2f", ($dsize * 100) / $size);

              echo " - uploaded $perc% from $size bytes <br>";
              $ret = ftp_nb_put($conn_id, $destination_file[$i], $source_file[$i], FTP_BINARY, FTP_AUTORESUME);



              // check upload status
              if ($ret == FTP_FAILED) {
                  echo "<b style='color:red'>FTP upload has failed for file $destination_file[$i] ! Stopping ....<br /></b>";
                  return;
              } else {
                  $j = 1;

                  while ($ret == FTP_MOREDATA) {
                      // Do whatever you want
                      //echo ". ";


                      // Continue uploading...
                      $ret = ftp_nb_continue($conn_id);

                      if ($j++ % 500 == 0) {
                          @ftp_close($conn_id);

                          echo "<script>
    var sURL = unescape('" . $_SERVER[REQUEST_URI] . "');

      function refresh()
      {
      //  This version of the refresh function will cause a new
      //  entry in the visitor's history.  It is provided for
      //  those browsers that only support JavaScript 1.0.
      //
      window.location.href = sURL;
      }

    setTimeout( \"refresh()\", 2*1000 );

    </script>";
                          return 1;

                          break;
                      }
                  }
                  if ($ret == FTP_FINISHED) {
                      echo "<b>Upload success to <i>$destination_file[$i]</i> ...<br /></b>";
                  }
              }
          }
      }
      // close the FTP stream
      @ftp_close($conn_id);

      $redurl = $_REQUEST[ftp_url] . "/XCloner.php";

      if ((substr($redurl, 0, 7) != "http://") && (substr($redurl, 0, 8) != "https://"))
          $redurl = "http://" . trim($redurl);

      if ($_REQUEST['ftp_inct']) {
          if ($_REQUEST['refresh_done'] != 1) {
              echo "<script>
    var sURL = unescape('" . $_SERVER[REQUEST_URI] . "&refresh_done=1');

      function refresh()
      {
      //  This version of the refresh function will cause a new
      //  entry in the visitor's history.  It is provided for
      //  those browsers that only support JavaScript 1.0.
      //
      window.location.href = sURL;
      }

    setTimeout( \"refresh()\", 2*1000 );

    </script>";
              return 1;
          }
      } else {


          $_REQUEST['refresh_done'] = 1;
      }
      if ($_REQUEST['refresh_done'] == 1)
          if (($_REQUEST[task] == 'move') || ($_REQUEST[task2] == 'move')) {
              echo "<br><br><h2>" . LM_MSG_BACK_3 . "</h2>";
              return 1;
          } else {

              echo "<br><br><h2>" . LM_MSG_BACK_4 . " <br /><a href='" . $redurl . "'>click here to continue...</a></h2>";
              return 1;
          }


      return 0;
  }
  function copyls($source, $dest)
  {
      $handle = fopen($dest, "a");
      if ($handle) {
          fclose($handle);
          return 1;
      } else {

          return 0;
      }
  }

  function action($option)
  {
      global $_CONFIG;

      $userfile = $_CONFIG['baDownloadPath'] . "/" . $_REQUEST[file];
      $localfile = $_CONFIG['clonerPath'] . "/" . $_REQUEST[file];


      if ($_REQUEST[action] == 'delete') {
          if (@unlink($userfile))
              $msg = LM_MSG_BACK_5;
          else
              $msg = LM_MSG_BACK_6;
      } elseif ($_REQUEST[action] == 'copy') {
          if (@copyls($localfile, $userfile))
              $msg = LM_MSG_BACK_7;
          else
              $msg = LM_MSG_BACK_8;
      }
      mosRedirect('index2.php?option=' . $option . "&task=view", $msg);
  }

  function clone_rename($option)
  {
      global $_CONFIG;

      if ($_REQUEST[task] == 'rename_save') {
          $files = $_REQUEST['cfile'];
          foreach ($files as $key => $value) {
              @rename($_CONFIG[clonerPath] . "/" . $_REQUEST[cfile][$key], $_CONFIG[clonerPath] . "/" . $_REQUEST[dfile][$key]);
              @rename($_CONFIG[baDownloadPath] . "/" . $_REQUEST[cfile][$key], $_CONFIG[baDownloadPath] . "/" . $_REQUEST[dfile][$key]);
          }

          $msg = LM_MSG_BACK_9;
          mosRedirect('index2.php?option=' . $option . "&task=view", $msg);
      }

      $files = array();

      foreach ($_REQUEST[cid] as $key => $value) {
          $files[] = $_REQUEST[files][$key];
      }


	  $html = new HTML_cloner();
      $html->rename($files, $option);
  }
  function downloadBackup($file)
  {
      global $_CONFIG;

      $file = realpath($_CONFIG['clonerPath'] . "/$file");

      //First, see if the file exists
      if (!is_file($file)) {
          die("<b>404 File $file was not found!</b>");
      }

      //File Info
      $len = get_filesize($file);
      $filename = basename($file);
      $file_extension = strtolower(substr(strrchr($filename, "."), 1));

      //Setam Content-Type-urile pentru  fisierul in cauza
      switch ($file_extension) {
          default:
              $ctype = "application/force-download";
      }

	  smartReadFile($file, $filename);

      exit;
  }

function smartReadFile($location, $filename, $mimeType='application/octet-stream')
{ if(!file_exists($location))
  { header ("HTTP/1.0 404 Not Found");
    return;
  }

  $size=filesize($location);
  $time=date('r',filemtime($location));

  $fm=@fopen($location,'r');
  if(!$fm)
  { header ("HTTP/1.0 505 Internal server error");
    return;
  }

  $begin=0;
  $end=$size;

  if(isset($_SERVER['HTTP_RANGE']))
  { if(preg_match('/bytes=\h*(\d+)-(\d*)[\D.*]?/i', $_SERVER['HTTP_RANGE'], $matches))
    { $begin=intval($matches[0]);
      if(!empty($matches[1]))
        $end=intval($matches[1]);
    }
  }

  if($begin>0||$end<$size)
    header('HTTP/1.0 206 Partial Content');
  else
    header('HTTP/1.0 200 OK');

  header("Content-Type: $mimeType");
  header('Cache-Control: public, must-revalidate, max-age=0');
  header('Pragma: no-cache');
  header('Accept-Ranges: bytes');
  header('Content-Length:'.($end-$begin));
  header("Content-Range: bytes $begin-$end/$size");
  header("Content-Disposition: inline; filename=$filename");
  header("Content-Transfer-Encoding: binary\n");
  header("Last-Modified: $time");
  header('Connection: close');

  $cur=$begin;
  fseek($fm,$begin,0);

  while(!feof($fm)&&$cur<$end&&(connection_status()==0))
  { print fread($fm,min(1024*16,$end-$cur));
    $cur+=1024*16;
  }
}


  function confirmBackup($option)
  {
      // ----------------------------------------------------------
      // Routine to display a confirmation screen prior to backup
      // containing the selectable folders and a confirmation for
      // backing up the database
      // ----------------------------------------------------------
      global $_CONFIG;

      if (!is_writeable($_CONFIG['clonerPath'])) {
          E_print("Your backup directory $_CONFIG[clonerPath] is not writeable or does not exists(Backup Store Path:)! <br />Please note, the ./administrator/backups/ folder needs to be created and made writeable!");
          return;
      }

      // Initialise list arrays, directories and files separately and array counters for them
      $excludedFolders = array();
      $d_arr = array();
      $d = 0;
      $ds_arr = array();
      $f_arr = array();
      $f = 0;
      $s_arr = array();
      $s = 0;
      $d_arr[$d] = $_CONFIG['backup_path'];

      //if($_CONFIG['select_folders']==0){
      // obtain the list of folders by recursing the mambo file store
      //recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $excludedFolders, '');
      //}

      if ($_CONFIG['select_folders'] == 2)
          if ($fp = @fopen($_CONFIG['exfile'], 'w')) {
              $excl = explode("\r\n", $_CONFIG['cron_exclude']);
              foreach ($excl as $value)
                  if ($value != "") {
                      $value = str_replace($_CONFIG['backup_path'], "", $value);
                      if ($value[0] != '/')
                          $value = '/' . $value;

                      if ((substr($value, strlen($value) - 1, 1) == '/') && (strlen($value) != 1))
                          $value = substr($value, 0, strlen($value) - 1);

                      fwrite($fp, $value . "\r\n");
                  }
              fclose($fp);
          }

      // load presentation layer
      if ($option != 'nohtml'){
          $html = new HTML_cloner();
          $html->confirmBackups($d_arr, $ds_arr, $_CONFIG['clonerPath'], $option);
      }else
          return $d_arr;
  }


  function deleteBackups($cid, $option)
  {
      // ----------------------------------------------------------
      // Routine to delete the Backup Sets selected in the list
      // backup sets screen
      // ----------------------------------------------------------
      global $_CONFIG;


      // Cycle through all the selected Backups and Deleted them
      foreach ($cid as $key => $value) {
          $file = $_CONFIG['clonerPath'] . '/' . $_REQUEST['f' . $value];


          if (unlink($file)) {
              $msg .= $_REQUEST['f' . $value] . ' - ' . LM_DELETE_FILE_SUCCESS;
          } else {
              $msg .= $_REQUEST['f' . $value] . ' - ' . LM_DELETE_FILE_FAILED;
          }
      }

      // redirect to list screen
      //$msg = _DELETE_FILE_SUCCESS;
      mosRedirect('index2.php?option=' . $option . "&task=view", $msg);
  }

  function generateBackuprefresh($cid, $option, $backup_filename, $json = 0)
  {
      global $_CONFIG;
      global $databases_incl, $back_path, $sql_file, $perm_file, $htaccess;

      $log = "";

      $backup_file = $_CONFIG['backup_store_path']."/".$backup_filename;

      $perm_file = $_CONFIG['temp_dir'] . "/perm.txt";


      $lines = $_REQUEST['lines'];

      $fperm = fopen($perm_file, "r");


      $startf = (int)$_REQUEST['startf'];

      $endf = $startf + $_CONFIG['backup_refresh_number'];

      $excluded_cmd = "";

      if ($fp = @fopen($_REQUEST['excl_manual'], "r")) {
          while (!feof($fp))
              $excluded_cmd .= fread($fp, 1024);

          fclose($fp);
      }


      $url = "index2.php?option=com_cloner&task=refresh&json=$json&startf=$endf&lines=$lines&backup=$backup_filename&excl_manual=" . $_REQUEST['excl_manual'];

      if ($endf >= $lines)
          $endf = $lines;
      else
          $log .= "Continue link: <a href='$url'>click here&gt;&gt;</a><br />\n";

      if ((int)$lines != 0)
          $percent = sprintf("%d", ($endf * 100) / (int)$lines);

      $log .= "Total process: $percent% out of $lines files<br />\n";
      $log .= "Processing files $startf to $endf for backup file $backup_file!<br />\n";
      $log .= "Current backup size: " . getFileSizeText(get_filesize($backup_file)) . "<br /><br />\n";

      chdir($_CONFIG['backup_path']);

      if ($fperm) {
          while ((!feof($fperm)) && ($line < $endf)) {
              $line++;

              $buffer = explode("|", fgets($fperm, 4096));

              if (($line <= $endf) && ($line >= $startf)) {
                   $log .= "\n<br />$line. ";

                  if (($buffer[0] != "") && (is_file($buffer[0]))) {
                      $file = $buffer[0];

                      //## appending files
                      $log .= "file - $file";

                      if(intval($_CONFIG['splitBackupSize']) > 0){

						  $fileSize = intval($buffer[2]);
						  $backupSize = get_filesize($backup_file);
						  $limit = $_CONFIG['splitBackupSize']*1024*1024; //MB limit

						  //check if the size is bigger than $_CONFIF['splitBackupSize'] and split backup
						  if(($fileSize+$backupSize) > $limit){

								$backup_filename = getNewBackupName($backup_filename);
								//exit;
								$backup_file = $_CONFIG['backup_store_path']."/".$backup_filename;

							  }

						}


                      if (!$_CONFIG['mem']) {
                          //### CREATE BACKUP USING TAR LIBRARIES
                          $file_path_full = $buffer[0];

                          {
                              //$return = PclTarAddList($backup_file, array($file_path_full), '', $_CONFIG['backup_path'], "tar");
                              $tar_object = new Archive_Tar($backup_file);
                              $return = $tar_object->addModify(array($file_path_full), '', $_CONFIG['backup_path']);

                          }

                          //### END TAR #########################
                      } else {

                          //### CREATE BACKUP USING SERVER UTILITIES

                          $file = str_replace(" ", "\ ", $file);

                          exec($_CONFIG[tarpath] . " $excluded_cmd -" . $_CONFIG['tarcompress'] . "vf $backup_file --update $file");


                          //### END SERVER UTILITIES
                      }
                  } else {


                      $log .= "directory - <b>" . $buffer[0] . "</b>";
                  }
              }
          }

          //exit;
		  $newFileSize = get_filesize($backup_file);
          $log .= "\n<br />New backup size: " . $newFileSize . "<br />\n";

          addXLog($log);


          if ($endf >= $lines) {
              //# ALL DONE
              $log .= LM_MSG_BACK_11;
              @fclose($fperm);
          } else {

              //# REDIRECTING
              @fclose($fperm);

              $log .= "<br>All done, redirecting... or <a href='$url'>click here </a>";

              $log .= "
				      <script language='javascript'>
				      function redirect(){
				      window.location = '" . $url . "';
				      }

				      setTimeout(\"redirect()\",parseInt(" . $_CONFIG['refresh_time'] . "));
				      //redirect();

				      </script>";
          }

      } else {
          $log .= "Unable to continue, could not open file $perm_file for reading!";
      }

      if ($endf >= $lines) {
          $back_path = $_CONFIG['backups_dir'];
          @unlink($back_path . "/database-sql.sql");
          @unlink($back_path . "/perm.txt");
          @unlink($back_path . "/htaccess.txt");
          @unlink($back_path . "/.excl");
          @unlink($back_path . "/.excl_tar");
		$status['finished']  = 1;
      }

	  if(!$json){
			echo $log;
		}
	  else{
		$status['backupSize'] = $newFileSize;
		$status['percent'] = $percent;
		$status['option'] = 'com_cloner';
		$status['task'] = 'refresh';
		$status['json'] = $json;
		$status['startf'] = $endf;
		$status['lines'] = $lines;
		$status['backup'] = $backup_filename;
		$status['excl_manual'] = $_REQUEST['excl_manual'];

		echo json_encode($status);
		exit;

	  }

      return;
  }


  function generateBackup($cid, $option)
  {
      // ----------------------------------------------------------
      // Routine to generate recurse a folder structure and record
      // the files, their sizes and parent folders
      // ----------------------------------------------------------
      global $_CONFIG;

      // generate database backup if required

      if (!$_CONFIG['enable_db_backup']) {
          $backupDatabase = 0;
      } else {
   		  $backupDatabase = $_REQUEST['dbbackup'];
      }

      if ($_REQUEST[cron_access]) {
          $_CONFIG['backup_refresh'] = 0;

          $_REQUEST['dbbackup_drop'] = $_CONFIG['cron_sql_drop'];

          if ($_CONFIG[cron_btype] == '1')
              $backupDatabase = 0;
      }


      if (!is_writeable($_CONFIG['clonerPath'])) {
          E_print("Your backup directory " . $_CONFIG['clonerPath'] . " is not writeable or does not exists!");
          return;
      }
      if (!is_writeable($_CONFIG['backups_dir'])) {
          E_print("Required sql backup directory " . $_CONFIG['backups_dir'] . " is not writeable or does not exists!");
          return;
      }


      // generate the backup set filename
      //$urlinfo = parse_url($mosConfig_live_site);
      //$domainname = strtolower(str_replace('.','_',$urlinfo[host]));
      //$domainname= $_SERVER['HTTP_HOST'];
      $domainname = $_CONFIG['mosConfig_live_site'];


      if (($_CONFIG['mem']) && ($_CONFIG['backup_refresh'])) {
          $f_ext = '.tar';
          $_CONFIG['tarcompress'] = '';
      } elseif ($_CONFIG['backup_compress']) {
          $f_ext = '.tgz';
          $_CONFIG['tarcompress'] = 'z';
      } else {
          $f_ext = '.tar';
          $_CONFIG['tarcompress'] = '';
      }

      /*if($_CONFIG['backup_refresh']){
       $f_ext = ".tar";
       }
       elseif($_REQUEST[cron_dbonly]){
       $f_ext = ".tar";
       }
       else{
       $f_ext = ".tgz";
       }*/

      if ($_REQUEST['bname'] == "") {
          if ($backupDatabase == 1) {
              if ($_REQUEST['dbbackup_drop']) {
                  $filename1 = 'backup_' . date("Y-m-d_H-i") . '_' . $domainname . '-sql-drop' . $f_ext;
              } else {

                  $filename1 = 'backup_' . date("Y-m-d_H-i") . '_' . $domainname . '-sql-nodrop' . $f_ext;
              }
          } else
              $filename1 = 'backup_' . date("Y-m-d_H-i") . '_' . $domainname . '-nosql' . $f_ext;
      } else {

          $filename1 = $_REQUEST['bname'] . $f_ext;
      }

	  //check if comments are set
	  if($_REQUEST['backupComments'] != "")
		writeComments($_REQUEST['backupComments']);

	 //we created the backup name, but skip sql at this step, we will do it incrementally
		if(($_CONFIG['refresh_mode']) and (!$_REQUEST[cron_access]))
		//we skip the backup at this process,we will do it incrementally
			$backupDatabase = 0;

      $sql_file = array();

      if ($backupDatabase == 1) {
          $tables = array();
          $tables[0] = 'all';
          $excltables = $_REQUEST['excltables'];

          $sql_file[] = doBackup($tables, 'sql', 'local', 'both', $_SERVER['HTTP_USER_AGENT'], $_CONFIG['backups_dir'], $databaseResult, 'database', $excltables, $_CONFIG['mysql_database']);

          $databaseResult = "<b>" . $_CONFIG['mysql_database'] . ":</b> " . $databaseResult;
          //############# ADD multiple databases #######################
          $databases_incl = $_REQUEST['databases_incl'];

          if (is_array($databases_incl)) {
              foreach ($databases_incl as $database_name)
                  if ($database_name != '') {
                      $excltables = "";
                      mysql_query("USE  $database_name");

                      $sql_file[] = doBackup($tables, 'sql', 'local', 'both', $_SERVER['HTTP_USER_AGENT'], $_CONFIG['backups_dir'], $databaseResult_incl, $database_name, $excltables, $database_name);

                      $databaseResult .= "<br /> <b>$database_name:</b> " . $databaseResult_incl;
                  }

              mysql_query("USE  " . $_CONFIG['mysql_database']);
          }
      } else {
          #$databaseResult = LM_DATABASE_EXCLUDED;
      }


      $excluded = array();

      $data = "";

      $excluded[] = $_CONFIG['backups_dir'] . "/" . $filename1;

      if ($_REQUEST['cron_access']) {
          $data = $_CONFIG['cron_exclude'];
      } elseif ($_CONFIG[select_folders] == 1) {
          $data = $_REQUEST['exluded'];
      }

      //#### START THE EXCLUSION FILTER
      if (($fp = @fopen($_CONFIG['exfile'], "r")) && (!$_REQUEST['cron_access'])) {
          while (!feof($fp)) {
              $data .= fread($fp, 1024);
          }
          fclose($fp);
      }

      if (sizeof($_REQUEST[cid]) > 0)
          $data .= implode("\r\n", $_REQUEST[cid]);

      $_COOKIES = explode("\r\n", $data);


      if (is_array($_COOKIES))
          foreach ($_COOKIES as $key => $value)
              if ($value != "") {
                  $value = str_replace($_CONFIG['backup_path'], "", $value);
                  if ($value[0] != '/')
                      $value = '/' . $value;

                  if ((substr($value, strlen($value) - 1, 1) == '/') && (strlen($value) != 1))
                      $value = substr($value, 0, strlen($value) - 1);

                  if (($value != "") && ($value != '/administrator/backups')) {
                      if (trim($value) != '/administrator')
                          $excluded[] = str_replace("//", "/", $_CONFIG['backup_path'] . "/" . $value);
                      else {

                          if ($handle = opendir($_CONFIG['backup_path'] . '/administrator')) {
                              while (false !== ($file = readdir($handle))) {
                                  if ($file != "." && $file != ".." && $file != "backups") {
                                      $excluded[] = str_replace("//", "/", $_CONFIG['backup_path'] . "/administrator/" . $file);
                                  }
                              }
                              closedir($handle);
                          }
                      }
                  }
              }
      //### END EXCLUSION FILTER

      if (!$_CONFIG['add_backups_dir']) {
          // initialise list arrays, directories and files separately and array counters for them
          $d_arr = array();
          $d = 0;
          $f_arr = array();
          $f = 0;
          $s_arr = array();
          $s = 0;

          getBackupFiles($d_arr, $f_arr, $s_arr, $d, $f);
          $i = 0;
          while ($i < sizeof($f_arr)) {
              $excluded[] = $_CONFIG['clonerPath'] . "/" . $f_arr[$i];
              $i++;
          }
      }
      // obtain list of folders included in the backup
      $includeFolder = array();

      //print_r($excluded);exit;

      //$includeFolder = confirmBackup('nohtml');

      //initialise list arrays, directories and files separately and array counters for them
      $d_arr = array();
      $d = 0;
      $ds_arr = array();
      $f_arr = array();
      $f = 0;
      $s_arr = array();
      $s = 0;
      $mdir = 0;

      if(($_REQUEST['cron_access']) or (!$_CONFIG['refresh_mode'])){

			$perm_file = $_CONFIG['backups_dir'] . "/perm.txt";
			@unlink($perm_file);
			$fperm = fopen($perm_file, "w");

			for ($i = 0; $i < sizeof($excluded); $i++) {
			  $excluded[$i] = str_replace("//", "/", $excluded[$i]);
			}

			// obtain the list of files by recursing the mambo file store
			addXLog("Starting the file scanning process");

			recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $includeFolder, '', $excluded, $fperm);

			@fclose($fperm);

			@chmod($perm_file, 0777);

		}


      // format total archive size
      $originalSize = getFileSizeText($s);

      // extend the file locations to include the full path

      for ($i = 0; $i < count($f_arr); $i++) {
          if (!file_exists($f_arr[$i])) {
              unset($f_arr[$i]);
          }
      }

      //if((file_exists($perm_file))&&(!in_array($perm_file, $f_arr)))
      // $f_arr[] = $perm_file;


      // add sql file to the backup

      if ($_REQUEST[cron_access]) {
          if (is_array($sql_file))
              foreach ($sql_file as $key => $sqlfile)
                  if (($backupDatabase == 1) && (!in_array($_CONFIG['backups_dir'] . $sqlfile, $f_arr)))
                      $f_arr[] = $sqlfile;
      }



      $filename = $_CONFIG['clonerPath'] . '/' . $filename1;

      $f_arr = array_unique($f_arr);

      // create the Zip file from the fileset array
      @unlink($filename);

      $perm_lines = 0;

      $handle = @fopen($perm_file, "r");

      if ($handle) {
          while (!feof($handle)) {
              fgets($handle, 4096);
              $perm_lines++;
          }

          fclose($handle);
      }

	  addXLog("Done recursion, found ".  $perm_lines." files");

      if (!$_CONFIG['mem']) {
          //### START TAR MANUAL MODE ############################################################

          if ($_CONFIG['backup_refresh']) {
              $f_arr = array($_CONFIG['backups_dir'] . "/index.html");
              $fp=@fopen($_CONFIG['backups_dir'] . "/index.html" , "w");
              if($fp)
				fclose($fp);
          }


          if ($_CONFIG['backup_refresh'])
              $tar_type = "tar";
          else
              $tar_type = "tgz";


          $tar_object = new Archive_Tar($filename, compression($tar_type));
          //$tar_object->setErrorHandling(PEAR_ERROR_PRINT);  // Optional error handling
          $return = $tar_object->addModify($f_arr, '', $_CONFIG['backup_path']);


          if ($return != 1) {
              echo "Backup failed using tar mode, error code $return!";
          }



          if ($_CONFIG['backup_refresh']) {
             // echo "Starting the manual backup process!<br />";
              if((!$_CONFIG['refresh_mode']) and ($_CONFIG['enable_db_backup']))
				echo "<h2>Database backup: </h2>" . $databaseResult . "<br /><br />";
			  $html = new HTML_cloner();
              $html->goRefreshHtml($filename, $perm_lines, $excl_manual);
              return;
          }


          //### END TAR MODE ############################################################
      } else {

          //### CREATE BACKUP USING SERVER UTILITIES
          $i = 0;
          chdir($_CONFIG['backup_path']);

          $excl_files = "";
          while ($i < sizeof($excluded)) {
              $file = $excluded[$i];
              $file = str_replace($_CONFIG['backup_path'], "", $file);
              $file = "##" . $file;
              $file = str_replace("##//", "", $file);
              $file = str_replace("##/", "", $file);
              $file = str_replace("##", "", $file);

              $excl_files .= "/" . $file . "* ";

              $i++;
          }


          chdir($_CONFIG['backup_path']);

          $excl_cmd = "";

          if ($fp = fopen($_CONFIG['exfile_tar'], "w")) {
              $i = 0;
              while ($i < sizeof($excluded)) {
                  $file = $excluded[$i];
                  $file = str_replace($_CONFIG['backup_path'], "", $file);
                  $file = "##" . $file;
                  $file = str_replace("##//", "", $file);
                  $file = str_replace("##/", "", $file);
                  $file = str_replace("##", "", $file);

                  $excl_cmd .= " --exclude=./" . $file . " ";

                  $excl_files = "./" . $file . "\r\n";
                  fwrite($fp, $excl_files);
                  $i++;
              }

              fclose($fp);
          }



          if ($_CONFIG['backup_refresh']) {
              //######### STARTING THE MANUAL BACKUP ######################################################


              $exclude = $excl_cmd . " -X " . $_CONFIG['exfile_tar'];

              $excl_manual = $_CONFIG['exfile_tar'] . "_manual";

              if ($fp = fopen($excl_manual, "w")) {
                  fwrite($fp, $exclude);

                  fclose($fp);
              }



              echo "Starting the manual backup process!<br />";
              echo "Database backup: " . $databaseResult . "<br /><br />";

              chdir($_CONFIG['backup_path']);

              //$filename = str_replace(".tgz",".tar",$filename);

              exec($_CONFIG[tarpath] . " $exclude -c" . $_CONFIG['tarcompress'] . "vf $filename ./administrator/backups/index.html");
              exec($_CONFIG[tarpath] . " -" . $_CONFIG['tarcompress'] . "vf $filename --update ./administrator/backups/database-sql.sql");
              exec($_CONFIG[tarpath] . " -" . $_CONFIG['tarcompress'] . "vf $filename --update ./administrator/backups/htaccess.txt");
              exec($_CONFIG[tarpath] . " -" . $_CONFIG['tarcompress'] . "vf $filename --update ./administrator/backups/perm.txt");

              /*if (file_exists($filename)) {
                  echo "Backup $filename created, we may continue!<br />";
                  //echo "Database backup: ".$databaseResult."<br />" ;
                  echo "<a href='index2.php?option=com_cloner&lines=" . $perm_lines . "&task=refresh&backup=$filename&excl_manual=$excl_manual' id='cLink'>Please click here to continue!</a>";

                  return;
              } else {

                  E_print("Backup failed, please check your tar server utility support!");
                  return;
              }*/
			  $html = new HTML_cloner();
              $html->goRefreshHtml($filename, $perm_lines, $excl_manual);

              return;
          }


          if ($_REQUEST[cron_dbonly] != 1) {
              exec($_CONFIG[tarpath] . " $excl_cmd " . " -X " . $_CONFIG['exfile_tar'] . "  -chv" . $_CONFIG['tarcompress'] . "f $filename ./");
          } else {


              exec($_CONFIG[tarpath] . "  -" . $_CONFIG['tarcompress'] . "cvf $filename ./administrator/backups/database-sql.sql");

              if (is_array($databases_incl)) {
                  foreach ($databases_incl as $database_name)
                      if ($database_name != "") {
                          exec($_CONFIG[tarpath] . "  -" . $_CONFIG['tarcompress'] . "vf $filename --update  ./administrator/backups/" . $database_name . "-sql.sql");
                      }
              }
          }

          //######END


          chdir($_CONFIG['script_path']);
          //### END
      }

      if (!file_exists($filename)) {
          if ($_CONFIG[archive_type] == 1)
              echo LM_MSG_BACK_12;
          else
              echo LM_MSG_BACK_13;
          return;
      }
      // format the compressed size of the fileset
      $archiveSize = getFileSizeText(get_filesize($filename));



      // load presentation layer
      if ($option != 'nohtml') {
		  $html = new HTML_cloner();
          $html->generateBackup($filename1, $archiveSize, $originalSize, $mdir, $f, $databaseResult, $option);
      } else {

		  $html = new HTML_cloner();	
          logxx($html->generateBackup_text($filename1, $archiveSize, $originalSize, $mdir, $f, $databaseResult, $option));
      }

      if (is_array($databases_incl)) {
          foreach ($databases_incl as $database_name) {
              @unlink($_CONFIG['backups_dir'] . "/" . $database_name . "-sql.sql");
          }
      }
      @unlink($_CONFIG['backups_dir'] . "/database-sql.sql");
      @unlink($sql_file);
      @unlink($perm_file);
      @unlink($htaccess);
      @unlink($_CONFIG['exfile']);
      @unlink($_CONFIG['exfile_tar']);
      return $filename1;
  }

  function showHelp($option)
  {
      // ----------------------------------------------------------
      // Display the Help Screen
      // ----------------------------------------------------------

      // load presentation layer
      $html = new HTML_cloner();
      $html->showHelp($option);
  }


  function multidimsort(&$a)
  {
      sort($a);
      $c = count($a);
      for ($i = 0; $i < $c; $i++)
          if (is_array($a[$i]))
              multidimsort($a[$i]);
  }

  function compression($ext)
  {
      switch ($ext) {
          case 'tar':
              $compresion = 'false';
              break;

          case 'tgz':
              $compresion = 'true';
              break;

          default:
              $compresion = 'false';
              break;
      }

      return $compression;
  }

  function recurseFiles(&$d_arr, &$ds_arr, &$f_arr, &$s_arr, &$d, &$f, &$s, &$includedFolders, $path, $excluded = array(), $fperm = '')
  {
      // ----------------------------------------------------------
      // Routine to recurse a folder structure and record the files
      // their sizes and parent folders
      // ----------------------------------------------------------
      global $mdir, $_CONFIG;

      $currentfullpath = $_CONFIG['backup_path'] . $path;

      // Open possibly available directory
      if ((is_dir($currentfullpath)) && (!is_link($currentfullpath))) {
          if ($handle = @opendir($currentfullpath)) {
              while (false !== ($file = readdir($handle))) {
                  // Make sure we don't push parental directories or dotfiles (unix) into the arrays
                  if (($file != "." && $file != "..")) {
                      $exc = 0;
                      $cfile = $currentfullpath . "/" . $file;
                      if (sizeof($excluded) != 0) {
                          foreach ($excluded as $key => $value) {
                              if (($value != '') && (!$exc)) {
                                  $cfile = str_replace("//", "/", $cfile);
                                  if ((strstr($cfile, $value) != '') || (strstr($cfile . "/", $value) != '')) {
                                      $exc = 1;
                                      break;
                                  }
                              }
                          }
                      }
                      if ((@is_dir($cfile)) && (!@is_link($currentfullpath))) {
                          // Create array for directories
                          if (($fperm) && (!$exc)) {
                              $perm = substr(sprintf('%o', fileperms($cfile)), -4);

                              fwrite($fperm, str_replace($_CONFIG['backup_path'], "", $cfile) . "|" . $perm . "\n");
                          }

                          //$d_arr[++$d] = $cfile;

                          if (!$exc)
                              recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $includedFolders, $path . "/" . $file, $excluded, $fperm);
                      } else {
                          //if ( in_array($currentfullpath, $includedFolders) )
                          {
                              // Create array for files

                              if (($fperm) && (!$exc)) {
                                  $perm = substr(sprintf('%o', @fileperms($cfile)), -4);

                                  //$sfile = sprintf("%.2f",get_filesize($cfile)/1024);

                                  fwrite($fperm, str_replace($_CONFIG['backup_path'], "", $cfile) . "|" . $perm . "\n");
                              }
                              if (!$exc) {
                                  //$s_arr[$f] = @filesize($cfile);

                                  if ((!$_CONFIG['mem']) && ($_CONFIG['backup_refresh'] != 1)) {
                                      $f_arr[$f++] = $cfile;
                                  } else {


                                      $f++;
                                  }


                                  $s += get_filesize($cfile);
                              }
                          }
                      }
                  }
              }
          }
          // Wrap things up if we're in a directory
          //if( is_dir( $currentfullpath ) )
          @closedir($handle);
      }
  }

  //legacy function, use instead the fileRecursion::getFileSize()
  function get_filesize($path)
  {
      //$sizeInBytes = filesize($path);
      $sizeInBytes = sprintf("%u", filesize($path));
      if ((!$sizeInBytes) and (function_exists("exec"))){
          $command = "ls -l \"$path\" | cut -d \" \" -f 5";
          $sizeInBytes = @exec($command);
      }

      return $sizeInBytes;

  }

  function getBackupFiles(&$d_arr, &$f_arr, &$s_arr, &$d, &$f)
  {
      // ----------------------------------------------------------
      // Routine to list the existing backup files in the Component
      // Backup folder
      // ----------------------------------------------------------
      global $_CONFIG;

      $path = $_CONFIG['clonerPath'];
      // Open possibly available directory
      if (is_dir($path)) {
          if ($handle = opendir($path)) {
              while (false !== ($file = readdir($handle))) {
                  // Make sure we don't push parental directories or dotfiles (unix) into the arrays
                  if ($file != "." && $file != ".." && $file[0] != ".") {
                      if (is_dir($path . "/" . $file))
                          // Create array for directories
                          $d_arr[$d++] = $file;
                      elseif ((strstr($file, '.zip')) || (strstr($file, '.tgz')) || (strstr($file, '.tar'))) {
                          // Create array for files
                          $f_arr[$f++] = $file;
                      }
                  }
              }
          }
      }

      // Wrap things up if we're in a directory
      if (is_dir($path))
          closedir($handle);
      sort($f_arr);
      // Print file list
      for ($i = 0; $i < count($f_arr); $i++) {
          $s_arr[$i] = getFileSizeText(get_filesize($path . "/" . $f_arr[$i]));
      }
  }


  function getFileSizeText($filesize)
  {
      // ----------------------------------------------------------
      // Routine to display a formatted version of a filesize
      // ----------------------------------------------------------

      if ($filesize >= 1024 && $filesize < 1048576) {
          // Size in kilobytes
          return round($filesize / 1024, 2) . " KB";
      } elseif ($filesize >= 1048576) {
          // Size in megabytes
          return round($filesize / 1024 / 1024, 2) . " MB";
      } else {
          // Size in bytes
          return $filesize . " bytes";
      }
  }

  function doBackup($tables, $OutType, $OutDest, $toBackUp, $UserAgent, $local_backup_path, &$databaseResult, $backupname, $excltables = array(), $dbname)
  {
      global $database, $mosConfig_db, $mosConfig_sitename, $version, $option, $task, $mosConfig_dbprefix, $_CONFIG, $mosConfig_user, $mosConfig_password, $mosConfig_host;


      if (!$tables[0]) {
          $databaseResult = LM_DATABASE_MISSING_TABLES;
          return;
      }
	  addXLog("Exporting database `$dbname`");

      /* Determine the mime type and file extension for the output file */

      if ($OutType == "zip") {
          $filename = $backupname . "-sql" . ".zip";
      } elseif ($OutType == "html") {
          $filename = $backupname . "-sql" . ".html";
      } else {
          $filename = $backupname . "-sql" . ".sql";
      }


      $sqlfile = "$local_backup_path/$filename";
      addXLog("SQL file setup to: ".$sqlfile);

      @unlink($sqlfile);
      /* Store all the tables we want to back-up in variable $tables[] */

      if ($tables[0] == "all") {
          array_pop($tables);
          $query = mysql_query("SHOW tables");
          while ($row = mysql_fetch_array($query)) {
              $tables_list[] = $row[0];
          }


          $tables = array_merge($tables, $tables_list);
      }
      $newtables = array();

      //if(is_array($excltables))
      foreach ($tables as $key => $value) {
          if (is_array($excltables)) {
              if (!in_array($value, $excltables))
                  $newtables[] = $value;
          } else
              $newtables[] = $value;
      }

	  addXLog("Exporting tables: ");
	  addXLog(implode("\n", $newtables));

      if (sizeof($tables) == sizeof($newtables))
          $ex_dump = "";
      else
          $ex_dump = @implode(" ", $newtables);
      $tables = $newtables;

      if ($_REQUEST['dbbackup_drop']) {
          $drop = " --add-drop-table";
      } else {

          $drop = "";
      }

      if ($_REQUEST['dbbackup_comp']) {
          $drop .= " --compatible=" . strtolower($_REQUEST['dbbackup_comp']) . " ";
      }

      if ($_CONFIG['sql_mem']) {
          exec($_CONFIG[sqldump] . " -h " . $_CONFIG['mysql_host'] . " -u " . $_CONFIG['mysql_user'] . " -p" . $_CONFIG['mysql_pass'] . " " . $dbname . " > " . $sqlfile . " $drop --allow-keywords " . $ex_dump);

          if (get_filesize($sqlfile) > 0)
              $databaseResult = LM_DATABASE_BACKUP_COMPLETED . ' ( ' . getFileSizeText(get_filesize($sqlfile)) . ' )';
          else
              $databaseResult = LM_MSG_BACK_14;

          exec("chmod 777 $sqlfile");

          return $sqlfile;
      }

      /*Added some default values for quotes and auto_increment problems*/
      mysql_query("SET SQL_QUOTE_SHOW_CREATE=1;");
      mysql_query("SET sql_mode = 0;");

      if ($_REQUEST['dbbackup_comp']) {
          mysql_query("SET sql_mode=" . $_REQUEST['dbbackup_comp'] . ";");
      }


      /* Store the "Create Tables" SQL in variable $CreateTable[$tblval] */
      if ($toBackUp != "data") {
          foreach ($tables as $tblval) {
              $query = mysql_query("SHOW CREATE table `$tblval`");
              $row = mysql_fetch_array($query);
              $CreateTable[$tblval] = $row[1];
          }
      }

      /* Store all the FIELD TYPES being backed-up (text fields need to be delimited) in variable $FieldType*/
      if ($toBackUp != "structure") {
          foreach ($tables as $tblval) {
              $query = mysql_query("SHOW FIELDS FROM `$tblval`");
              while ($row = mysql_fetch_row($query)) {
                  $fields[] = $row[0];
              }
              foreach ($fields as $field) {
                  $FieldType[$tblval][$field->Field] = preg_replace("/[(0-9)]/", '', $field->Type);
              }
          }
      }


      if ($OutDest == "local") {
          $fp = fopen($sqlfile, "w");
          if (!$fp) {
              $databaseResult = LM_DATABASE_BACKUP_FAILED;
              return;
          }
      }

      /* Build the fancy header on the dump file */
      $OutBuffer = "";
      if ($OutType == 'html') {
      } else {
          $OutBuffer .= "#\n";
          $OutBuffer .= "# Powered by XCloner Site Backup\n";
          $OutBuffer .= "# http://www.xcloner.com\n";
          $OutBuffer .= "#\n";
          $OutBuffer .= "# Host: " . $_SERVER['HTTP_HOST'] . "\n";
          $OutBuffer .= "# Generation Time: " . date("M j, Y \a\\t H:i") . "\n";
          $OutBuffer .= "# Server version: " . getVersion() . "\n";
          $OutBuffer .= "# PHP Version: " . phpversion() . "\n";
          $OutBuffer .= "# Database : `" . $dbname . "`\n# --------------------------------------------------------\n";
      }
      fwrite($fp, $OutBuffer);
      unset($OutBuffer);

      /* Okay, here's the meat & potatoes */
      foreach ($tables as $tblval) {
          if ($toBackUp != "data") {
              if ($OutType == 'html') {
              } else {
                  $OutBuffer .= "#\n# Table structure for table `$tblval`\n#\n";
                  if ($_REQUEST['dbbackup_drop'])
                      $OutBuffer .= "#\nDROP table IF EXISTS `$tblval`;\n";

                  $OutBuffer .= $CreateTable[$tblval] . ";\r\n";
              }
          }
          fwrite($fp, $OutBuffer);
          unset($OutBuffer);


          if ($toBackUp != "structure") {
              $OutBuffer .= "#\n# Dumping data for table `$tblval`\n#\n";
              $query = @mysql_query("SELECT *  FROM `$tblval`");

              while ($row = @mysql_fetch_array($query, MYSQL_ASSOC)) {
                  $InsertDump = "INSERT INTO `$tblval` VALUES (";
                  $arr = $row;
                  foreach ($arr as $key => $value) {
                      $value = mysql_real_escape_string($value);
                      #$value = str_replace("\n", '\r\n', $value);
                      #$value = str_replace("\r", '', $value);
                      //if (@preg_match ("/\b" . $FieldType[$tblval][$key] . "\b/i", "DATE TIME DATETIME CHAR VARCHAR TEXT TINYTEXT MEDIUMTEXT LONGTEXT BLOB TINYBLOB MEDIUMBLOB LONGBLOB ENUM SET"))
                      {
                          $InsertDump .= "'$value',";
                      }
                      /*else
                       {
                       $InsertDump .= "'$value',";
                       } */
                  }
                  $OutBuffer .= rtrim($InsertDump, ',') . ");\n";
                  fwrite($fp, $OutBuffer);
                  unset($OutBuffer);
                  $i++;
              }
          }
      }

      if ($OutDest == "local") {
          //fwrite($fp, $OutBuffer);
          fclose($fp);

          @chmod($sqlfile, 0777);

          $databaseResult = LM_DATABASE_BACKUP_COMPLETED . ' ( ' . getFileSizeText(get_filesize($sqlfile)) . ' )';
          return $sqlfile;
      }
  }

	function getNewBackupName($backupFilename){

		$newFilename = $backupFilename;

		$tmp = explode(".",$backupFilename);
		$extension = $tmp[sizeof($tmp)-1];
		$inc = $tmp[sizeof($tmp)-2];

		if(strlen($inc)<3){
			$newinc = $inc+1;
			$newFilename = str_replace(".$inc.$extension", "", $backupFilename); //ex, replace .1.tar
			$newFilename = $newFilename .".$newinc.$extension";
		}else{
			//it is a first backup, no .0.tar
			$newFilename = str_replace(".".$extension, "", $backupFilename); //ex, replace .1.tar
			$newFilename = $newFilename .".1.". $extension;
			}

		return $newFilename;
	}

	function writeComments($comments){
	  global $_CONFIG;

	  $fp = @fopen($_CONFIG['commentsfile'], "w");
	  if($fp){
		fwrite($fp, stripcslashes($comments));
		fclose($fp);
	  }
	  else{
		addXLog("Unable to write comments to file ".$_CONFIG['commentsfile']);
	  }


	}

	function getVersion()
	{
	  $query = mysql_query("SELECT version()");
	  $row = mysql_fetch_array($query);
	  return $row[0];
	}
?>
