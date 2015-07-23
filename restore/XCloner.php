<?php
/*
 *      XCloner.php
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

if(@is_file("../cloner.config.php")){

	echo "<h3>Access denied, if you are trying to restore a backup, please move the restore script in another directory!</h3>";

	exit;

}


@set_time_limit(3600);

@ini_set("error_reporting", E_ALL^E_NOTICE);

###################### Do not edit Below #############################

$g_pcltar_lib_dir = "./";

require "TAR.php";

$_CONFIG['my_version'] 		= "3.0.1";
$_CONFIG['script_name'] 	= "XCloner.php";
$_CONFIG['sql_usefile'] 	= "";
$_CONFIG['filesLimit'] 		= 100;
$_CONFIG['seek']			= 0;


if(isset($_REQUEST['sql_setfile']))
	$_CONFIG['sql_usefile'] = $_REQUEST['sql_setfile'];

if(trim($_CONFIG['sql_usefile']) == "")
	$_CONFIG['sql_usefile'] = "database-sql.sql";

if(isset($_REQUEST['strrep'])){
	setcookie ("strrep_c", "", time() - 3600);
	setcookie("strrep_c", str_replace("\r\n","*-*",stripslashes($_REQUEST['strrep'])), time()+3600);  /* expire in 1 hour */
}else{
	$_REQUEST['strrep'] = str_replace("*-*", "\r\n", $_COOKIE['strrep_c']);
}


if ($handle = opendir('./')) {
   /* This is the correct way to loop over the directory. */
	while (false !== ($file = readdir($handle))){
		$ext = substr($file,strlen($file)-4,strlen($file));
		if(($file!='XCloner.php')&&($file!='..')&&($file!='.')&&(($ext=='.tgz')||($ext=='.tar'))){
			$_CONFIG[versions][] = $file;
		}
   }
   closedir($handle);
}else{
	echo "Unable to open my directory for reading and listing!";exit;
}


######################################################################


$_CONFIG['output_path'] = $_REQUEST['output_path'];
$_CONFIG['output_url'] = $_REQUEST['output_url_pref']."://".$_REQUEST['output_url'];
$_REQUEST['output_url'] = str_replace("/###","",$_REQUEST['output_url']."###");
$_REQUEST['output_url'] = str_replace("###","",$_REQUEST['output_url']);

if(function_exists('filter_var')){
	$_CONFIG['output_url'] = filter_var($_CONFIG['output_url'], FILTER_SANITIZE_URL);
}
$_CONFIG['tmp'] = $_REQUEST['output_path'];


if($_REQUEST['files_skip'] == 1)
	$_REQUEST['do_database'] = 1;
if($_REQUEST['fpos'])
	$_CONFIG['seek'] = $_REQUEST['fpos'];

$filepath =$_SERVER["SCRIPT_FILENAME"];
$pathinfo = pathinfo($filepath);
$startscript = $pathinfo['dirname'];
$_CONFIG[group] = $groupinfo[name];
$_CONFIG[owner]  =$ownerinfo[name];

###################### FRONT AREA ###################################
//setCache();
?>

<!DOCTYPE html>

<html>
<head>
    <title>XCloner Restore - <?php echo $_SERVER['HTTP_HOST']?> - Backup and Restore Made Easy</title>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<link REL="SHORTCUT ICON" HREF="http://www.xcloner.com/images/favicon.ico">
	<style type="text/css" media="screen">
		@import url( http://www.xcloner.com/downloads/style.css );
		@import url( http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/start/jquery-ui.css );
	.error {
	    color: red;
		font-size: 15px;
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
</head>

<body>

<script>
$(function() {
	$( "#tabs-main" ).tabs();
});
</script>


<!-- section 1-->

  <table align='center' width='700' bgcolor='#eeeeee' style='padding: 0 5px 0 5px;'>

  <tr><td align='center'><h2><font color=red>XCloner</font> Automatic Restore! - <?php echo $_SERVER['HTTP_HOST']?></h2></td></tr>

  <tr><td align='left'>

  <form action='' method='GET' name='form'>

  <?php



switch ($_REQUEST[task]) {
	case 'step2':
		step2();
		break;
	case 'step1':
		step1();
		break;
	case 'getinfo':
		getPHPINFO();
		break;
	case 'info':
		echo phpinfo();
		break;
	default :
		start();
		break;
}

?>

</form>
  </td></tr>
  <tr><td>
	<hr />
	<small>XCloner Automatic Restore(<b><?php echo $_CONFIG['my_version']?></b>) - <a href='http://www.xcloner.com' title='XCloner.com - Website Backup Application'>Website Backup and Restore</a>
	</small>
	</td></tr>
  </table>

</body>

</html>





<?php

#####################################################################


##################### FUNCTIONS #####################################

function step2($file=""){

    global $_CONFIG,$filepath ;

    $DBcreated	= $_REQUEST[DBcreated];

    if ($DBcreated=='on'){
	    $DBhostname = $_REQUEST['mysql_server'];
		$DBuserName = $_REQUEST['mysql_username'];
		$DBpassword = $_REQUEST['mysql_pass'];
		$DBname  	= $_REQUEST['mysql_db'];

		$db = @mysql_connect($DBhostname, $DBuserName, $DBpassword) or die("<br />The database details provided are incorrect and/or empty. Unable to connect to mysql server");
		@mysql_query("CREATE database $DBname;");
		if (!@mysql_select_db($DBname)) {
			die("<br /><span class='error'>Could not connect to $DBname database! Please make sure the database exists and that you assigned the mysql user to it...</span>");
		}
		
		mysql_query("SET sql_mode='';");
		mysql_query("SET foreign_key_checks = 0;");
		
		if($_REQUEST['charset_of_file']!="")
			mysql_query("SET NAMES ".$_REQUEST['charset_of_file']."");
		else
			mysql_query("SET NAMES utf8;");
    }

if($_REQUEST['do_database'] != 1){

############ DATABASE ONLY RESTRICTION##################################################

########################### START FTP MODE #################################
  if($_REQUEST[transfer_mode]==2){

        $_CONFIG[output_path] = $_CONFIG[output_path]."/archive_tmp/";
        @mkdir($_CONFIG[output_path]);

        // set up basic connection
        $conn_id = @ftp_connect($_REQUEST[ftp_server], $_REQUEST[ftp_port]) or die("<span class='error'>Could not connect to $_REQUEST[ftp_server] on port $_REQUEST[ftp_port]! Ftp connection has failed!</span>");

        // login with username and password
        $login_result = @ftp_login($conn_id, $_REQUEST[ftp_user], $_REQUEST[ftp_pass]) or die("<span class='error'>Could not login to ftp server for user $_REQUEST[ftp_user] and provided pass! Ftp connection has failed!</span>");

        // check connection
        if ((!$conn_id) || (!$login_result)) {
               echo "<b  style='color:red'>FTP connection has failed!</b>";
               echo "<b  style='color:red'>Attempted to connect to ".$_REQUEST[ftp_server].":".$_REQUEST[ftp_port]." for user ".$_REQUEST[ftp_user]."</b>";
               return;
        } else {
       			echo "<br />Connected to $_REQUEST[ftp_server], for user $_REQUEST[ftp_user], starting transfer...<br />";
               }
        $ftp_dir_original = ftp_pwd($conn_id);
		@ftp_mkdir($conn_id,$_REQUEST[ftp_path]);

        // try to change the directory to somedir
		if (@ftp_chdir($conn_id, $_REQUEST[ftp_path])) {
		    echo "Current directory is now: <b>" . ftp_pwd($conn_id) . "</b>\n";
		} else {
		    echo "<b  style='color:red'>Couldn't change directory to <b>$_REQUEST[ftp_path]</b>, please verify that the ftp location exists or use the \"Install files directly\" option!</b><br />\n";
		    return;
		}
         @ftp_chdir($conn_id, $ftp_dir_original);

  }

########################## END FTP MODE ######################################



##### START extract ######
if($_REQUEST['refresh'] < 1){

    $ext = substr($file, strlen($file)-4, strlen($file));
    if($_REQUEST['file_utilities'] != '1'){
		$tar_object = new Archive_Tar($file);

		if($_REQUEST['manual_ftp']){

			$tar_object->_openRead();
			fseek($tar_object->_file, $_CONFIG['seek']);
			$seek =  $tar_object->_extractList($_CONFIG['output_path'], $return, "partial", "", "", $_CONFIG['filesLimit']);
			$seek = $seek - 512;//reverse 512 bytes
				if($seek > 0){
					$backupSize = filesize($file);

					$rurl = rurl($seek, $backupSize);
					$percent = sprintf("%.2f",($seek*100)/$backupSize);
					echo "<h3>Processing files - ".$percent."%</h3>";
					echo "<script> document.location='".$rurl."'</script>";
					return;
				}
			$_REQUEST['fpos'] = 0;
			$_REQUEST['chunk'] = 0;
		}
		else{
			$tar_object->extract($_CONFIG['output_path']);
			#$tar_object->extractList("backups/perm.txt", $_CONFIG['output_path']);
		}

	}else{
		if($ext == '.tgz') $compress = 'z';
		else $compress = '';
		shell_exec("tar -x".$compress."pf $file -C $_CONFIG[output_path]");
	}
}
##### END extract ######


    $new_arr = array();
    #@chmod($_CONFIG[output_path], 0777);
    $tran_file = $_CONFIG[output_path]."/transfer.txt";

    if($_REQUEST[transfer_mode]==2){
    # initialise list arrays, directories and files separately and array counters for them
		$excludedFolders = array();
		$d_arr  = array(); $d = 0;
		$ds_arr = array();
		$f_arr  = array(); $f = 0;
		$s_arr  = array(); $s = 0;
		$d_arr[$d] = $_CONFIG[output_path];

    if($_REQUEST['refresh'] < 1){
	# obtain the list of files by recursing the mambo file store
		recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $excludedFolders , '', $_CONFIG[output_path]);
		recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $d_arr , '', $_CONFIG[output_path]);
		sort($d_arr);
		sort($f_arr);
		$new_arr = array_merge($d_arr, $f_arr);

		if($_REQUEST[transfer_mode]==2)
			if($fp = fopen($tran_file, "w")){
				foreach($new_arr as $file){
					fwrite($fp, $file."\n");
				}
			fclose($fp);
			}else{
				echo "Unable to write to directory ".$_CONFIG[output_path]."! Please check that this directory is writeable!"; return;
			}
			else{};

		}else{
			$content = "";
			$new_arr = file($tran_file);
		}

		if(sizeof($new_arr) != 0 )
			$percn = sprintf("%.2f",($_REQUEST[next] * 100)/sizeof($new_arr));
		if($percn > sizeof($new_arr))
			$percn = sizeof($new_arr);

	}


	if($_REQUEST['refresh'] == 1){
		echo "<h3>Transfering $percn% of ".sizeof($new_arr)." files through ftp</h3>";
		echo "<textarea cols=70 rows=30 name='ftp_list'></textarea>";
	}
    elseif($_REQUEST['refresh'] == 2)
		echo "Files transfer finished!";

	$i = (int)$_REQUEST[next];
	$j = 0;

### MOVING THE FILES THROUGH FTP

   #foreach($new_arr as $key=>$file)
   for($key=$i;$key<=sizeof($new_arr);$key++){
        $file = str_replace(array("\r","\n"), array("",""), $new_arr[$key]);
		if($_REQUEST['manual_ftp'] == 1)
		if($j == 100){
			#echo "Transfering files from line: ". (int)$_REQUEST[next];
			$qstr = explode("&refresh=1&next=",$_SERVER['QUERY_STRING']);
			$rurl = "XCloner.php?".$qstr[0]."&refresh=1&next=".($_REQUEST[next]+100);
			ftp_close($conn_id);
			echo "<script> document.location='".$rurl."'</script>";
			exit;
		}

		$j++;
		$sfile = str_replace($_CONFIG[output_path],"",$file);
		$fsource = $_CONFIG[output_path]."/".$sfile;
		if(($sfile != "")&&($sfile!="/"))
		if($_REQUEST[transfer_mode]==2){
			$upload = 1;
			$ftarget = $_REQUEST[ftp_path]."/".$sfile;
			if(is_dir($fsource)){
				$upload1 = @ftp_mkdir($conn_id,$ftarget);
		}else{
			$upload = ftp_put($conn_id, $ftarget, $fsource, FTP_BINARY);
        }
	  #echo "$i <br >";

	  if(!$upload){
          echo "<br /><font color=red>Transfer fail for $fsource to $ftarget</font> <br />File already exists and/or doesn't have writing permissions!<br/>";
      }else{

			if($_REQUEST['manual_ftp'] == 1){
				$ftarget .= '\n';

			echo "<script>document.form.ftp_list.value = document.form.ftp_list.value + '".$ftarget."'; </script>";
		    #echo "$ftarget <br />\n";
			}
     }
    }
  }


	if($_REQUEST['refresh'] == 1){
		$qstr = explode("&refresh=1&next=",$_SERVER['QUERY_STRING']);
		$rurl = "XCloner.php?".$qstr[0]."&refresh=2&next=".($_REQUEST[next]+102);
		echo "<script> document.location='".$rurl."'</script>";
		exit;
	}

############### RESTORING HTACCESS AND CONFIGURATION PERM#####################################

 if($_REQUEST[transfer_mode]==2){
	$cmd = "CHMOD 0777 ".$_REQUEST[ftp_path]."/"."configuration.php";
	@ftp_site($conn_id, $cmd);
 }else{
	 @chmod($_CONFIG[output_path]."/"."configuration.php", 0777);
 }


#### CUSTOM PERMISSIONS #####
	if($_REQUEST['preserve_perm']){
		$perm_data = "";
		$perm_file = $_CONFIG[output_path]."/administrator/backups/perm.txt";
		$per = 1;

		@chmod($perm_file,0777);
		$fp = @fopen($perm_file,'r');
		if($fp){
			while(!feof($fp))
				$perm_data .= fread($fp, 1024);
			fclose($fp);
		}else{

			echo "Could not set permissions! Permissions file $perm_file not found!<br />";
			$per = 0;
		}

		$data = explode("\n",$perm_data);
		foreach($data as $value){
			$dir = explode("|", $value);
			if($dir[1]=="")
				$dir[1] = '0755';

		if(strstr($dir[0],"configuration.php"))
			$dir[1] = '0777';

			if($_REQUEST[transfer_mode]==2){
				$cmd = "CHMOD ".$dir[1]." ".$_REQUEST[ftp_path]."/".$dir[0];

			@ftp_site($conn_id, $cmd);

			}else{

				@chmod($_CONFIG[output_path]."/".$dir[0], octdec($dir[1]));

			}

		}

		if($per){
				echo "<h2>Permissions restored to their initial value...</h2>";
			}

	}
#### END CUSTOM PERMISSIONS #####

    $_CONFIG[output_path] = str_replace("/archive_tmp/","",$_CONFIG[output_path]);

    if($_REQUEST[transfer_mode]==2){

		// close the FTP stream
		@ftp_close($conn_id);
		recursive_remove_directory($_CONFIG[output_path]."/archive_tmp/");
		@unlink($_CONFIG[output_path]."/archive_tmp/");
		echo "<h2>Files succesfully copied to ".$_REQUEST[ftp_path]." on $_REQUEST[ftp_server] using FTP</h2>";

    }else{
         echo "<h2>Files succesfully copied to ".$_CONFIG[output_path]."</h2>";
        }

######### END DATABASE ONLY RESTRICT #########################################

}


##### RESTORE CONFIGURATION #####
    $update_config = 1;	

    if(($_REQUEST['files_skip']) and  (isset($_REQUEST['fpos']))){
    
    	$update_config = 0;	
    	
    }	

    if(($_REQUEST['do_database'] != 1) || ($_REQUEST['files_skip'] == 1)){
		$config_file = $_CONFIG[output_path]."/configuration.php";
		@chmod($config_file,0777);
		@unlink($_CONFIG[output_path]."/administrator/backups/perm.txt");
		if(($_CONFIG['sql_usefile'] == "database-sql.sql") and ($update_config))
			if(write_config($config_file)){
				echo "<H2>Configuration updated!</H2>";
			}else{
				echo "<span class='error'>Unable to write to configuration file $config_file... Aborting...</span>";return;
			}
		}


    ############ ATTEMPT DATABASE INSERT #####################################

    if($DBcreated!='on'){

	  echo "<h2>Database import skipped!</h2>";
	  echo "<a href='".$_CONFIG[output_url]."'><b>All should be done! Click here to continue...</b></a><br />";

	  return ;
	}

	if (($DBcreated=='on')&&($_REQUEST['do_database'] == 1)){

		$sqlfile = $_CONFIG[output_path]."/administrator/backups/".$_CONFIG['sql_usefile'];

		if(!file_exists($sqlfile)){
			echo "<span class='error'>Unable to read the database backup file $sqlfile , database was not imported!</span>";
		}else{

		if($_REQUEST['manual_sql'])
			$errors = populate_db_manual( $db, $sqlfile);
		else
			$errors = populate_db( $db, $sqlfile);

    if(sizeof($errors)>0){

		echo "There were some errors while importing the database:<br />";
		echo "<textarea cols=60 rows=30>".implode("\n",$errors)."</textarea>";
		exit;
    }else{

     	@unlink($_CONFIG[output_path]."/administrator/backups/".$_CONFIG['sql_usefile']);

 	 }


	 echo "<h2>Database populated...</h2>";

	 }
	}

    ###################################################################################

    if($_REQUEST['do_database'] != 1) {

    $vars = "";
	foreach($_REQUEST as $key=>$value)
           $vars .= $key.'='.@urlencode($value).'&';


	 #$href = "XCloner.php?".$vars."do_database=1";
	 $href  = rurl()."&do_database=1";
	 echo "<br /><a href='$href'>Please click here to continue with database import...</a>";

	 return;

	}else{

		echo "<br /><a href='".$_CONFIG[output_url]."'><b>All should be done! Click here to continue...<br /></a><br />";
		return ;
	}

}

function write_config($file){

    global $_CONFIG;	

    if(@$fp = fopen($file, "r")){

		$config_data = "";

		while(!feof($fp))

      		$config_data .= fread($fp, 1024);

    	fclose($fp);

	}

	if ($_REQUEST[DBcreated] == 'on'){

		$config_data = str_replace('$'.'host =',"$"."host ='".$_REQUEST[mysql_server]."';#", $config_data);
		$config_data = str_replace('$'.'user =',"$"."user ='".$_REQUEST[mysql_username]."';#", $config_data);
		$config_data = str_replace('$'.'password =',"$"."password ='".$_REQUEST[mysql_pass]."';#", $config_data);
		$config_data = str_replace('$'.'db =',"$"."db ='".$_REQUEST[mysql_db]."';#", $config_data);

	}

	if($_REQUEST['transfer_mode'] == 2){

		$config_data = str_replace('$'.'ftp_host =',"$"."ftp_host ='".$_REQUEST[ftp_server]."';#", $config_data);
		$config_data = str_replace('$'.'ftp_port =',"$"."ftp_port ='".$_REQUEST[ftp_port]."';#", $config_data);
		$config_data = str_replace('$'.'ftp_user =',"$"."ftp_user ='".$_REQUEST[ftp_user]."';#", $config_data);
		$config_data = str_replace('$'.'ftp_pass =',"$"."ftp_pass ='".$_REQUEST[ftp_pass]."';#", $config_data);
		$config_data = str_replace('$'.'ftp_root =',"$"."ftp_root ='".$_REQUEST[ftp_path]."';#", $config_data);

	}else{
		$config_data = str_replace('$'.'ftp_enable =',"$"."ftp_enable ='0';#", $config_data);
	}

	$config_data = str_replace('$'.'live_site =',"$"."live_site ='".$_CONFIG[output_url]."';#", $config_data);
	$config_data = str_replace('$'.'absolute_path =',"$"."absolute_path ='".$_CONFIG[output_path]."';#", $config_data);

	if ($fp = fopen($file, "w")) {
		fwrite( $fp, $config_data);
		fclose( $fp );
	} else {
		return false;
	} // if

 return true;
}

function step1(){

   global $_CONFIG;

   $ftarget = $_CONFIG[output_path]."/".$_REQUEST[ver];

   if($_REQUEST['refresh'] < 1)

   if(!is_writable($_CONFIG[output_path])){

       echo "<span class='error'>Directory ".$_CONFIG[output_path]." is not writeable or does not exists! Could not continue...</span>";

       return ;

       }



   $ftarget = $_REQUEST[ver];


   if((!file_exists($ftarget)) and (!$_REQUEST['files_skip'])){
		echo "<span class='error'>Could not continue, unable to read the clone backup file! Please make sure you copied the backup in the same directory as XCloner.php </span>";
		return;
	}

   step2($ftarget);

   return;

}



function start() {

  global $_CONFIG,$pathinfo;

	$pdir = str_replace($_CONFIG['script_name'], "", $_SERVER["SCRIPT_FILENAME"]);

	$purl = $_SERVER['HTTP_HOST'].str_replace($_CONFIG['script_name'],"", $_SERVER['SCRIPT_NAME']);

?>


<script>
$(function() {
	$( "#DBcreated" ).button();
	$( "#phpinfo").button();
	$( "#manual_sql" ).button();
	$( "#transfer_mode-ftp" ).button();
	$( "#transfer_mode-direct" ).button();
	$( "input:submit", ".form" ).button();
});
$(function() {
	$( "#tabs" ).tabs();
	$( "#tabs2" ).tabs();
});
</script>


<!-- section 1-->
<div id="tabs2">
	<ul>
		<li><a href="#tabs2-1">New Path & Url Configuration</a></li>
	</ul>
	<div id="tabs2-1">
		<table class="adminForm">

			<tr><td nowrap>
				1. Install directory: (server path where you want to restore your backup)<br />
				<input type=text size=80 name='output_path' value='<?php echo str_replace("\\", "/", $pdir);?>'><br >

		    </td></tr>
		    <tr><td>
				<br />2.Install Url: (the url correspondent of your Install directory:)<br />
				<div style="display:inline">
					<div style="float:left">
						<select name='output_url_pref'>
							<option selected value='http'>http://</option>
							<option value='https'>https://</option>
						</select>
					</div>
					<div style="float:left">
						<input type=text size=65 name='output_url' value='<?php  echo $purl?>'>
					</div>
				</div>

			</td></tr>
			<tr><td>
				<br />3. Choose backup archive to restore:
				<?php echo version_list('ver');?>
		    </td></tr>
		</table>
	</div>
</div>
<!-- end section 1-->

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">New Mysql Configuration</a></li>
		<li><a href="#tabs-2">File Restore Options</a></li>
	</ul>

	<div id="tabs-1">
	<!--start tabs 1 -->
		<table width="100%">
			    <tr><td>
					<!--<h3><a href="#">Mysql configuration: </a></h3>-->
					<input type=checkbox checked name='DBcreated' id="DBcreated"> <label  for="DBcreated">Import mysql database</label>
					<input type='checkbox' value='1' name='manual_sql' checked id="manual_sql"> <label for="manual_sql">Incremental sql import</label>
			    </td></tr>
			    <tr><td>
					<!-- mysql details -->
					<table width='100%'>
				    <tr>
						<td nowrap>Mysql server:</td>
						<td><input type=text size=40 name='mysql_server' value='localhost'></td>
				    <tr>
						<td>Mysql username:</td>
						<td><input type=text size=40 name='mysql_username' value=''></td>
				    </tr>
				    <tr>
						<td>Mysql password:</td>
						<td><input type=text size=40 name='mysql_pass' value=''></td>
				    </tr>
				    <tr>
						<td>Mysql database:</td>
						<td><input type=text size=40 name='mysql_db' value=''></td>
				   </tr>
				   <tr>
						<td>Data encoding:</td>
						<td>
						<select name="charset_of_file">

						    <option value="" selected="selected">Default</option>
						    <option value="big5" title="Big5 Traditional Chinese">big5</option>
						    <option value="binary" title="Binary pseudo charset">binary</option>
						    <option value="cp1250" title="Windows Central European">cp1250</option>
						    <option value="cp932" title="SJIS for Windows Japanese">cp932</option>
						    <option value="euckr" title="EUC-KR Korean">euckr</option>

						    <option value="gb2312" title="GB2312 Simplified Chinese">gb2312</option>
						    <option value="gbk" title="GBK Simplified Chinese">gbk</option>
						    <option value="latin1" title="cp1252 West European">latin1</option>
						    <option value="latin2" title="ISO 8859-2 Central European">latin2</option>
						    <option value="sjis" title="Shift-JIS Japanese">sjis</option>
						    <option value="tis620" title="TIS620 Thai">tis620</option>

						    <option value="ucs2" title="UCS-2 Unicode">ucs2</option>
						    <option value="ujis" title="EUC-JP Japanese">ujis</option>
						    <option value="utf8" title="UTF-8 Unicode" >utf8</option>
						</select>
						</td>
				   </tr>

				    <?php
				    $dir = "administrator/backups/";
				    $sql_files =array();
				    if(@is_dir($dir)){
				    	if ($handle = @opendir($dir)) {
				        /* This is the correct way to loop over the directory. */
				        while (false !== ($file = @readdir($handle))) {
							if(strstr($file, ".sql"))
								$sql_files[] = $file;
							}
							@closedir($handle);
				       }

				     if(sizeof($sql_files) > 0) {
						$list = "";
						for($i=0;$i<sizeof($sql_files);$i++){
							$list .= "<option value='$sql_files[$i]'>$sql_files[$i]</option>";
						}

				     echo "<tr><td>Import Mysql file:</td>
				     <td><select name='sql_setfile'><option value='database-sql.sql'>Default</option>$list</select></td>    </tr>";
				     }
				    }
				    ?>
					</table>
					</tr></td>
					<!-- end mysql details -->
		</table>
	<!--end tabs 1 -->
    </div>

	<div id="tabs-2">
	<!-- start tabs 2 -->
		<table width="100%">
		  <tr bgcolor='#dddddd'><td>
			<!--<h3><a href="#">Files transfer and configuration:</a></h3>-->
			  <input type=checkbox name='files_skip' value='1' > <font color='red'>Skip files restore</font><br />
			  <input type=checkbox name='preserve_perm' value='1'> Restore files permissions<br />
			  <input type=checkbox name='file_utilities' value='1' > Restore by using the server utilities(tar) <br />
			  <input type='checkbox' value='1' name='manual_ftp' checked> Incremental transfer
		  </td></tr>

		  <tr><td colspan=2>

			<table width='100%'>
				  <tr><td colspan='2'>
					<label for="transfer_mode-ftp">Install files throught ftp:</label>
					<input type=radio name=transfer_mode value=2 id="transfer_mode-ftp">
					<!--<small>this will attempt to transfer all files through ftp, so the owner keep it's permissions, can be used to send files to other hosts also, <font color=red>*recommended</font></small>-->
					<label for="transfer_mode-direct">Install files directly</label>
					<input type=radio name=transfer_mode value=1 checked id="transfer_mode-direct"><br />
					<!--<small>transfering the files directly will cause some permissions problems in some cases, but it's faster than the other option </small>-->
				 </td></tr>
				 <tr>
				   <td  valign="top" nowrap>Ftp server:</td>
				   <td><input type=text size=30 name='ftp_server' value='localhost'> : <input type=text size=3 name='ftp_port' value='21'></td>
				  </tr>
				  <tr>
				   <td valign="top">Ftp username:</td>
				   <td><input type=text size=30 name='ftp_user'></td>
				  </tr>
				  <tr>
				   <td valign="top">Ftp password:</td>
				   <td><input type=text size=30 name='ftp_pass'></td>
				  </tr>
				  <tr>
				   <td valign="top">Ftp upload path:</td>
				   <td><input type=text size=30 name='ftp_path'>
				    <br><small>ftp root path of where the backup will be restored</small>
				   </td>
				  </tr>
			  </table>

		</td></tr>
		</table>
		<!--end tabs 2-->
	</div>
</div>

<br />
<div class="form">
	<input type=hidden name='task' value='step1'>
	<input type=submit name=submit value='Start install' >
	<button onclick="window.open('XCloner.php?task=getinfo', 'getInfo', 'toolbar,width=750,height=400'); return false;" id="phpinfo">phpinfo()</button>
</div>
<small>*after hitting submit please wait for the package to get unarchived and transfered through ftp if it is the case!</small>

<br />
<span class="ui-state-highlight">
	<span style='color:red'>Security Note:</span> After restore <b>delete the XCloner.php</b> script from your server</span>
</span>

<?php

}

function getPHPINFO(){

?>

  <table width='100%'>
	<tr bgcolor='#dddddd'><td>
		<b>PHP Configuration: <a target='_blank' href='XCloner.php?task=info'> phpinfo()</a></b>
	</td></tr>

	<tr><td>
		<table bgcolor='#dddddd' width='65%' style='text-align:center;' border='1'>
		<tr>
			<td><b style='color:red'>PHP Setting</b></td>
			<td><b style='color:orange'>Current Value</b></td>
			<td><b style='color:green'>Recomemnded</b></td>
		</tr>
	<tr>
		<td><b>Open_Basedir:</b> </td>
		<td>
		<?php  echo (@ini_get('open_basedir') ? @ini_get('open_basedir') : 'No value')?>
		</td>
		<td><b>No Value</b></td>
	</tr>
	<tr>
		<td><b>Max Execution Time:</b> </td>
		<td>
		<?php  echo (@ini_get('max_execution_time') ? @ini_get('max_execution_time') : 'No value')?>
		</td>
		<td><b>>30</b></td>
	</tr>
	<tr>
		<td><b>Safe mode:</b> </td>
		<td>
		<?php  echo (@ini_get('safe_mode') ? @ini_get('safe_mode') : 'Off')?>
		</td>
		<td><b>Off</b></td>
	</tr>
   </table>
  </td></tr>
  </table>

<?php
}


###END


###Starting the manual sql backup

function populate_db_manual( $db, $sqlfile='administrator/backups/database-sql.sql'){

	global $qstr;

	$extra_que = $qstr[0];

	$file = $sqlfile;

	define ('DATA_CHUNK_LENGTH',16384);  // How many chars are read per time

	define ('MAX_QUERY_LINES',300);      // How many lines may be considered to be one query (except text lines)

	$lines = "";

	$error = "";

	$error_status = 0;

	if((isset($_REQUEST['chunk']))&&((int)$_REQUEST['chunk'] != 0))

	 $chunk = $_REQUEST['chunk'];

	else

	 $chunk = DATA_CHUNK_LENGTH;

	if($_REQUEST['correct_query'] != 1){

	 $start_pos = (int)$_REQUEST['fpos'];

	 $fpos = read_file($file, MAX_QUERY_LINES, $start_pos, $chunk, $lines);

	}else{

	 $lines[0] =  stripslashes($_REQUEST['error_msg']);

	 $fpos = $_REQUEST['start_posf'] ;

	}

foreach($lines as $line)

if(trim($line) != ''){

	$query = $line;

	$line = $line .";\n";

	#$tmp = explode("DEFAULT CHARSET",$line);

    $line_tmp = $line;

	$start_pos = $start_pos + strlen($line);

	if(isset($_REQUEST['strrep']))

	 {

	  $strrep = explode("\r\n", stripslashes($_REQUEST['strrep']));

	  foreach($strrep as $value)

	   if(trim($value)!= ""){


		$tmp = explode("|", $value);


		$line_tmp = str_replace(trim($tmp[0]),trim($tmp[1]),$line_tmp);

		$query = str_replace(trim($tmp[0]),trim($tmp[1]),$query);

		}

	 }

	if(!mysql_query($line_tmp)){

       if($_REQUEST['correct_query'] != 1)

         $fpos = $start_pos ;

	   $form_url = rurl($fpos, $chunk);

	   echo "</form><form name='' action='".$form_url."' method='POST'>

	   <input type='hidden' name='correct_query' value = '1'>

	   <input type='hidden' name='start_pos' value='".$start_pos."'>

	   <input type='hidden' name='start_posf' value='".$fpos."'>

	   <input type='hidden' name='glen' value='".$qlen."'>

	   <center>";

	   echo sprintf("<b>###MYSQL error</b>\n<br /><font color='red'>".mysql_error()."</font><br />\n<b>###On Query:</b><br />\n<br /><textarea cols=70 rows=15 name='error_msg'>%s</textarea><br />", $query);

	   echo "<b>Search and replace in query:</b><br /><textarea cols=70 rows=5 name='strrep'>".stripslashes($_REQUEST[strrep])."</textarea><br />

	   <small>

	   enter a string, one per line, which you would like to replace in the query above, example <i>string_to_search|text_to_replace_with</i>

	   </small>";

	   echo "<br /> <input type=submit name=submit value='Correct Query &gt;&gt;'>";

	   echo "</center></form>";

	   $error_status = 1;

	   break;

       }

}


	$percent = sprintf("%.2f", (100*$fpos)/ filesize($file));

	if($fpos!='-1'){

	 echo "<h3>Processed $percent% from sql backup!</h3>";

    $red_url = rurl($fpos, $chunk);

    if($error_status == 1 ){

		echo "<h3><a href='".$red_url."'>To skip this query, click here to Continue</a></h3>";

		exit;

	}else{

	   echo "<h3><a href='".$red_url."'>Continue here</a></h3>";

	   echo "<script>window.location='".$red_url."'</script>";

	   exit;

	   }

	 } else {

		 echo "<h3>The sql import is finished!</h3>";

	 }

return;

}

########END



### STARTING THE AUTOMATIC BACKUP

function populate_db( $db, $sqlfile='administrator/backups/database-sql.sql') {

	global $errors, $_CONFIG;

	if($_REQUEST['use_mysqldump'] == 1){
		echo shell_exec($_REQUEST['mysqldump_path']." -u ".$_REQUEST[mysql_username]." -p".$_REQUEST[mysql_pass]." -h ".$_REQUEST[mysql_server]." ".$_REQUEST[mysql_db]." < ".$sqlfile);
		return;
    }

	$mqr = @get_magic_quotes_runtime();

	@set_magic_quotes_runtime(0);

    @chmod($sqlfile,0777);

    $query = fread( fopen( $sqlfile, 'r' ), filesize( $sqlfile ) );

	@set_magic_quotes_runtime($mqr);

	$pieces  = split_sql($query);



    for ($i=0; $i<count($pieces); $i++) {

		$pieces[$i] = trim($pieces[$i]);

        $tmp = explode("DEFAULT CHARSET",$pieces[$i]);

        $pieces[$i] = $tmp[0].";";

		if(!empty($pieces[$i]) && $pieces[$i] != "#") {

			if (!mysql_query($pieces[$i], $db)) {

                 $errors[] = "\n\n##Mysql Query: \n########\n".

				             $pieces[$i].

							 "\n########\n##Error message: ".

							 mysql_error();



			}

		}



   }

return $errors;

}


function rurl($fpos = 0, $chunk = 0){

	$get_query = "&";

	foreach($_REQUEST as $key=>$value){
		if(($key != 'fpos')&&($key != 'chunk')&&($key != 'strrep_c')&&($key != 'strrep'))
			$get_query .= $key."=".$value."&";
		}
	$url = $_SERVER['PHP_SELF']."?fpos=".$fpos."&chunk=".$chunk.$get_query;

	return $url;
}

function read_file($file, $lines, $start_pos, &$chunk, &$text){

	   $cline = 0;

	   $fp = fopen($file, "r");
       fseek($fp, $start_pos);
       while((!feof($fp)) &&($cline <= $lines)){

			$btemp = fgets($fp, $chunk);
			$buffer .= $btemp;
			if(strstr($btemp, ";\n"))
				$cline++;
			$fpos = ftell($fp);
		}

       $buffer = str_replace(";\r", ";\n", $buffer);
	   $text = explode(";\n", $buffer);
       $fpos = $fpos - strlen($text[sizeof($text)-1]);
       if(sizeof($text) == 1)
			$chunk = DATA_CHUNK_LENGTH+$chunk;
       else
			$chunk = DATA_CHUNK_LENGTH;

       if(feof($fp))
			$fpos = '-1';
	   fclose ($fp);

	   return $fpos; // array_reverse is optional: you can also just return the $text array which consists of the file's lines.

}



/**

 * @param string

 */

function split_sql($sql) {

        $ret = array();
        $sql = str_replace("\n) ", "\n) ;\n#\n#", $sql);
        $sql = str_replace("\n--\n","\n#\n",$sql);
        $sql = str_replace("\n-- ","\n# ",$sql);
        $sql = str_replace("\n/*","\n#/*",$sql);
        $sql = str_replace("#\n", "#;\n", $sql);

	    // Processing the SQL file content

	    $file_content = explode("\n",$sql);
	    $query = "";
		  // Parsing the SQL file content
		  foreach($file_content as $key=>$sql_line) {

             if(substr($sql_line, 0, 2) == "--")
               $sql_line = "#".substr($sql_line, 2, strlen($sql_line));

             if(trim($sql_line) != "" ){

		        $query .= $sql_line;

			      // Checking whether the line is a valid statement
			      if(preg_match("/(.*);/", $sql_line)){

			         $query = substr($query, 0, strlen($query)-1);

				       //Executing the parsed string, returns the error code in failure
                       $ret[] = $query;
				       $query = "";
			      }
		     }
		  } //End of foreach

	return($ret);
}



function recurseFiles(&$d_arr, &$ds_arr, &$f_arr, &$s_arr, &$d, &$f, &$s, &$includedFolders, $path, $mosConfig_absolute_path) {

    $currentfullpath = $mosConfig_absolute_path.$path;

    # Open possibly available directory

    if( is_dir( $currentfullpath ) ) {

        if( $handle = opendir( $currentfullpath ) ) {

            while( false !== ( $file = readdir( $handle ) ) ) {

                # Make sure we don't push parental directories or dotfiles (unix) into the arrays

                if( $file != "." && $file != ".." ) {

                    if( is_dir( $currentfullpath . "/" . $file ) ) {

                        # Create array for directories

                        $d_arr[++$d] = $currentfullpath . "/" . $file;

                        recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $includedFolders, $path . "/" . $file, $mosConfig_absolute_path);

                    } else {

                        if ( in_array($currentfullpath, $includedFolders) ) {

                            # Create array for files

                            $s_arr[$f] = filesize($currentfullpath.'/'.$file);

                            $f_arr[$f++] = str_replace($mosConfig_absolute_path.'/', '', $currentfullpath.'/').$file;

                            $s += filesize($currentfullpath.'/'.$file);

                        }

                    }

                }

            }

        }

        # Wrap things up if we're in a directory

        if( is_dir( $handle ) )

            closedir( $handle );

    }

}





function version_list($fname) {

 global $_CONFIG;

 $return = "<select name='$fname'><option value=''>Choose local clone archive</option>";

 if(is_array($_CONFIG[versions])){

 foreach($_CONFIG[versions] as $key=>$value){

      $size = sprintf("%.2fM", filesize($value)/(1024*1024));

      $return .= "<option selected value='$value'>$value($size)</option>";

     }

 }

 $return .= "</select>";

return $return;

}


function recursive_remove_directory($directory, $empty=FALSE){

     // if the path has a slash at the end we remove it here
     if(substr($directory,-1) == '/'){
         $directory = substr($directory,0,-1);
     }

     // if the path is not valid or is not a directory ...
     if(!file_exists($directory) || !is_dir($directory)){
         // ... we return false and exit the function
         return FALSE;

     // ... if the path is not readable
     }elseif(!is_readable($directory)){
         // ... we return false and exit the function
         return FALSE;
     // ... else if the path is readable
     }else{
         // we open the directory
         $handle = opendir($directory);
         // and scan through the items inside
         while (FALSE !== ($item = readdir($handle))){
             // if the filepointer is not the current directory
             // or the parent directory
             if($item != '.' && $item != '..'){
                 // we build the new path to delete
                 $path = $directory.'/'.$item;
				 // if the new path is a directory
                 if(is_dir($path)){
                     // we call this function with the new path
                     recursive_remove_directory($path);
                 // if the new path is a file
                 }else{
                     // we remove the file
                     unlink($path);
                 }
             }
         }
         // close the directory
         closedir($handle);

         // if the option to empty is not set to true
         if($empty == FALSE){
             // try to delete the now empty directory
             if(!@rmdir($directory)){
                 // return false if not possible
                 return FALSE;
             }
         }
         // return success
         return TRUE;
     }
}


function setCache($time = 3600){

	$seconds_to_cache = $time;
	$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
	@header("Expires: $ts");
	@header("Pragma: cache");
	@header("Cache-Control: maxage=$seconds_to_cache");

}

?>
