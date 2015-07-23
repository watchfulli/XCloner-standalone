<?php
/**
* XCloner
* Oficial website: http://www.xcloner.com/
* -------------------------------------------
* Creator: Liuta Romulus Ovidiu
* License: GNU/GPL
* Email: admin@xcloner.com
* Revision: 1.0
* Date: July 2007
**/

#if( php_sapi_name() != 'cli' ){
	#echo "<h2>Please run this script from a terminal or through a cron scheduler interface</h2>";
	#exit;
	#}

$topErrorLine1 = "To run this script you need to create a custom config file inside XCloner Config, and call the script using php cli command like this:";
$topErrorLine2 = "php ".__FILE__." mycustomconfig.php";

if(!isset($argv[1]) ) {
	echo  "<h2>".$topErrorLine1."</h2>\n";
	echo "<strong>".$topErrorLine2."</strong>\n";
	exit;
	}
	

// Set flag that this is a parent file
@error_reporting(E_ALL^E_NOTICE);
@set_time_limit('3600');
define( '_VALID_MOS', 1 );
header('Content-Type: text/html; charset=utf-8');

include_once("admin.cloner.html.php");
include_once("cloner.functions.php");

require_once( 'cloner.config.php' );

####### VERIFY IP ACCESS
function check_user_ip($current_ip, $ip_list)
{
	$valid = FALSE;

	foreach ($ip_list as $ip){
		$ip_or_name = gethostbyname($ip);
		if ($current_ip == $ip_or_name) {
			$valid = TRUE;
			break;	
		} 
	}

	return $valid;
}

$ip_list = @explode("\r\n", $_CONFIG['cron_ip']);
$ip_list[] = $_SERVER['SERVER_ADDR'];
$curent_ip = $_SERVER["REMOTE_ADDR"];

if (check_user_ip($curent_ip, $ip_list) == FALSE) {
	echo "Access Denied for ip $curent_ip!";
	exit;
}
#########################

$script_dir = str_replace("\\","/",dirname(__FILE__));
if(is_dir($script_dir)){
 
 chdir($script_dir);

 }

if($_REQUEST['config'] == ""){
	
	if($argv[1] != ""){
	
		$_REQUEST['config'] = $argv[1];	
	}
}

//filter the config request path
$_REQUEST['config'] = str_replace(array("..","/","\\"), array("","",""), trim($_REQUEST['config']));

if($_REQUEST['config'] != ""){
	
	require_once( './configs/'.$_REQUEST['config'] );
	
	$smsg = "Using configs/".$_REQUEST['config']." as configuration file";
	
}
else{

    @require_once( './cloner.config.php' );
    
    $smsg = "Using default configuration file";

}

require_once("common.php");
require_once("restore/TAR.php");

$mosConfig_live_site = $_CONFIG['mosConfig_live_site'];

logxx($smsg);





logxx("Starting ".$script_dir."/cloner.cron.php");




# load language
if($_CONFIG['select_lang']!="")
 $mosConfig_lang = $_CONFIG['select_lang'];
if (file_exists( "language/".$mosConfig_lang.".php" )) {
    include_once( "language/".$mosConfig_lang.".php" );
    @include_once( "language/english.php" );
} 
else{
	include_once( "language/english.php" );
}



####### VERIFY IP ACCESS
/*$ip_list = @explode("\r\n", $_CONFIG['cron_ip']);
$ip_list[] = $_SERVER['SERVER_ADDR'];
$curent_ip = $_SERVER["REMOTE_ADDR"];

if(!in_array($curent_ip, $ip_list)){
	
	echo "Access Denied for ip $curent_ip!";
	exit;
	
}*/
#########################

$access=1;
$_REQUEST[cron_dbonly] = 0;
$_REQUEST[cron_access] = 1;
$_REQUEST['databases_incl'] = @explode(",",$_CONFIG[databases_incl_list]);




if($_CONFIG[cron_bname]!="")
 $_REQUEST['bname'] = $_CONFIG[cron_bname];
 
  
function logxx($string = ""){
 
    global $mail_log; 

    $return = "<b>$string</b><br />\r\n";
    
    $mail_log .= $return;

    echo $return;
    return;
    }

$clonerPath = $_CONFIG['clonerPath'];
logxx("Starting XCloner for site $mosConfig_live_site at ".date("Y-m-d H:i"));

    $excludedFolders = array();
    $d_arr = array(); $d = 0;
    $ds_arr = array();
    $f_arr = array(); $f = 0;
    $s_arr = array(); $s = 0;
    $d_arr[$d] = $_CONFIG['backup_path'];
    #logxx("Reading the file structure");
    #recurseFiles($d_arr, $ds_arr, $f_arr, $s_arr, $d, $f, $s, $excludefolders, '');
    #$excludedFolders = confirmBackup('nohtml');
    #logxx("Done");
    
    

if($_CONFIG['cron_btype']==0){
    $_REQUEST[dbbackup] = 1;

    logxx("Creating a fullbackup");
    $msg = 'full backup';
    }
if($_CONFIG['cron_btype']==1){
    $_REQUEST[dbbackup] = 0;

    logxx("Creating a files only backup");
    $msg = 'file backup';
    }
if($_CONFIG['cron_btype']==2){
    $_REQUEST[dbbackup] = 1;

    #for ($i=0, $n=count($excludedFolders); $i < $n; $i++) {
        $_CONFIG['cron_exclude'] = $_CONFIG['backup_path'];
        $GLOBALS['_CONFIG'] = $_CONFIG;
        $_REQUEST[cron_dbonly] = 1;
    #}
    
    logxx("Creating an sql only backup");
    $msg = "database backup";
   }


logxx("Generating Backup ...");
$file = generateBackup( $excludedFolders, 'nohtml' );
logxx("Backup Done");

$source_file = $clonerPath."/".$file;

logxx("Backup file: ".$source_file);
$bsize = getFileSizeText(filesize($source_file));

if($_CONFIG['cron_send']==1)
{
    ######################################STARTING FTP TRANSFER##################
    
    $source_files[] = $source_file;
    $destination_files[] = $_CONFIG[cron_ftp_path]."/".$file;
    
    // set up basic connection details
    list($fhost, $fport) = explode(":",$_CONFIG[cron_ftp_server]);
    if($fport == "")
        $fport = '21';
     
    $ftp_timeout = '3600';
    
    logxx("Starting ftp transfer:");
    if(!$_CONFIG[secure_ftp])
    {
        // set up basic connection
        $conn_id = ftp_connect($fhost, (int)$fport, (int)$ftp_timeout);
        $connect = "Normal";
        
        // login with username and password
        $login_result = ftp_login($conn_id, $_CONFIG[cron_ftp_user], $_CONFIG[cron_ftp_pass])
                        or die("Authentification failed when connecting to the ftp server for user ".$_CONFIG[cron_ftp_user]." with pass".$_CONFIG[cron_ftp_pass]);
        
        // check connection
        if ((!$conn_id) || (!$login_result)) {
               echo "<b  style='color:red'>FTP connection has failed!</b>";
               echo "<b  style='color:red'>Attempted to connect to ".$_CONFIG[cron_ftp_server]." for user ".$_CONFIG[cron_ftp_user]."</b>";
               return;
           } else {
               #echo "Connected to $_REQUEST[ftp_server], for user $_REQUEST[ftp_user]";
           }
        
        if($_CONFIG['system_ftptransfer']==1)
        {
            // turn passive mode on
            @ftp_pasv($conn_id, true);
            $mode = "Passive";
        }
        else
        {
            // turn passive mode off
            @ftp_pasv($conn_id, false);
            $mode = "Active";
        }
        echo "Connected to $connect <b>$_CONFIG[cron_ftp_server] Mode: $mode</b><br />";
        for($i=0;$i<sizeof($source_files);$i++)
        {
            // upload the file
            $upload = ftp_put($conn_id, $destination_files[$i], $source_files[$i], FTP_BINARY);
            
            // check upload status
            if (!$upload) {
                   echo "<b style='color:red'>FTP upload has failed for file $source_files[$i] ! Stopping ....<br /></b>";return;
               } else {
                   echo "<b>Upload success from file <i>$source_files[$i]</i> <br />to <i>$destination_files[$i]</i> ...<br /></b>";
               }
        }
        
        // close the FTP stream
        ftp_close($conn_id);
    }
    else //Use sftp
    {
        //set php path to include required sftp files
        set_include_path(get_include_path() . PATH_SEPARATOR .'classes/phpseclib');

        include('Net/SFTP.php');
        //define('NET_SFTP_LOGGING', NET_SFTP_LOG_COMPLEX); // or NET_SFTP_LOG_SIMPLE

        //connect to host and authenticate user
        $sftp = new Net_SFTP($fhost);
        if (!$sftp->login($_CONFIG[cron_ftp_user], $_CONFIG[cron_ftp_pass])) 
        {
            logxx('Login Failed');
            die("Login Failed");
        }
        logxx("Connected to $connect <b>$_CONFIG[cron_ftp_server] Successfully!><br />");
        
        //transfere files
        for($i=0;$i<sizeof($source_files);$i++)
        {
            // upload the file
            $upload = $sftp->put($destination_files[$i], $source_files[$i], NET_SFTP_LOCAL_FILE);
            
            // check upload status
            if (!$upload) {
                   logxx("<b style='color:red'>FTP upload has failed for file $source_files[$i] ! Stopping ....<br /></b>");return;
               } else {
                   logxx("<b>Upload success from file <i>$source_files[$i]</i> <br />to <i>$destination_files[$i]</i> ...<br /></b>");
               }
        }
        
        //disconnect from server
        unset($sftp);
    }
    
    logxx("Ftp transfer finished succesfully!");
    
    if($_CONFIG[cron_ftp_delb]==1)
    {
        @unlink($source_file);
        logxx("Backup succesfully deleted from the original server!");
    }
    ##############################################################################
}
else if($_CONFIG['cron_send']==2)
{
#######################################STARTING Email TRANSFER################
    logxx("Sending mail with backup");

    $date = date("Y-m-d H:i");
    $mode = '1';
    $message = "
    <pre>
    Attached is the backup generated on $date
    Source Filename: $source_file
    Server: $mosConfig_live_site
    
    Powered by http://www.xcloner.com - XCloner - Backup and Restore made easy!
    </pre>

    ";
    
	$ok = send_mail($mosConfig_mailfrom, "XCloner $msg", $message, $_CONFIG['cron_email_address'], $source_file);
	
	#echo mosMail( $mosConfig_mailfrom, $mosConfig_fromname, $_CONFIG['cron_email_address'], "XCloner $msg", $message, $mode, '', '' );
    if($ok)
	 logxx("Mail sent to ".$_CONFIG['cron_email_address']);
	else
     logxx("There was an error in sending the mail cron to ".$_CONFIG['cron_email_address']);   

##############################################################################
    }
logxx("Total backup size:".$bsize);


####### STARING AMAZON S3 MODE
if($_CONFIG['cron_amazon_active']){

include_once("classes/S3.php");

logxx();

if(!$_CONFIG['cron_amazon_ssl'])
	$amazon_ssl = false;
else
	$amazon_ssl = true;

$s3 = new S3($_CONFIG['cron_amazon_awsAccessKey'], $_CONFIG['cron_amazon_awsSecretKey'], $amazon_ssl);

logxx("AMAZON S3: Starting communication with the Amazon S3 server...ssl mode ".(int)$amazon_ssl);

$buckets = $s3->listBuckets();

if (($s3->putBucket($_CONFIG['cron_amazon_bucket'], "private")) || (@in_array($_CONFIG['cron_amazon_bucket'], $buckets))) {


	if ($s3->putObjectFile($clonerPath."/".$file, $_CONFIG['cron_amazon_bucket'], $_CONFIG['cron_amazon_dirname']."/".baseName($file), "private")){

		logxx("AMAZON S3: File copied to {".$_CONFIG['cron_amazon_bucket']."}/".$_CONFIG['cron_amazon_dirname']."/".$file);

	}else {
		logxx("AMAZON S3: Failed to copy file to {".$_CONFIG['cron_amazon_bucket']."}/".$_CONFIG['cron_amazon_dirname']."/".$file);exit;

		}


}else{

	logxx("AMAZON S3: Unable to create bucket ".$_CONFIG['cron_amazon_bucket']." (it may already exist and/or be owned by someone else)!");exit;
}



}
###### END

####### STARING DROPBOX MODE
if($_CONFIG['cron_dropbox_active']){

include_once("classes/DropboxClient.php");

$dropbox = new DropboxClient(array(
	'app_key' => $_CONFIG['cron_dropbox_Key'], 
	'app_secret' => $_CONFIG['cron_dropbox_Secret'],
	'app_full_access' => false,
),'en');

logxx();

logxx("DROPBOX: Starting communication with the DropBox server...");

// first try to load existing access token
$access_token = load_token("access");
if(!empty($access_token)) {
	$dropbox->SetAccessToken($access_token);
	//print_r($access_token);
}
elseif(!empty($_GET['auth_callback'])) // are we coming from dropbox's auth page?
{
	// then load our previosly created request token
	$request_token = load_token($_GET['oauth_token']);
	if(empty($request_token)) die('Request token not found!');
	
	// get & store access token, the request token is not needed anymore
	$access_token = $dropbox->GetAccessToken($request_token);	
	store_token($access_token, "access");
	delete_token($_GET['oauth_token']);
}

// checks if access token is required
if(!$dropbox->IsAuthorized())
{
	// redirect user to dropbox auth page
	$return_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?auth_callback=1";
	$auth_url = $dropbox->BuildAuthorizeUrl($return_url);
	$request_token = $dropbox->GetRequestToken();
	store_token($request_token, $request_token['t']);
	die("Authentication required. <a href='$auth_url'>Click here.</a>");
}



$return = $dropbox->UploadFile($clonerPath."/".$file, $_CONFIG['cron_dropbox_dirname']."/".$file);
if($return->error)
	logxx($return->error);
else
	logxx("File copied to ".$return->path);
	
#print_r($return);

}
###### END


######## DELETING OLDER BACKUPS ##############################################

if($_CONFIG['cron_file_delete_act']){

logxx("<br />\nDeleting older backups than ".$_CONFIG['cron_file_delete']." days: ");
delete_older_backups($clonerPath);

}


###################END OLDER BACKUPS

$logemail = explode(";", $_CONFIG['cron_logemail']);
if($_CONFIG['cron_fromlogemail'])
	$fromemail = $_CONFIG['cron_fromlogemail'];
else
	$fromemail = "nobody@noreply.com";
	
if(sizeof($logemail)>0){
	
	for($i=0; $i<sizeof($logemail);$i++){
		
		$email = trim($logemail[$i]);
		if($email != ""){
			
			$email_subject = "cron log ".time();
			
			$headers ="From: \"XCloner Cron Log Output\" <".$fromemail.">\n";

			if(mail($email, $email_subject, strip_tags($mail_log), $headers)){
			
				logxx ("Notification Mail was sent to $email");
				
			}
			
			
		}
		
	}
	
}

logxx("<br />\n\nALL DONE! I will exit now from cron.");
exit;

?>
<?php

function delete_older_backups($clonerPath){
  global $_CONFIG;
# initialise list arrays, directories and files separately and array counters for them
$d_arr = array(); $d = 0;
$f_arr = array(); $f = 0;
$s_arr = array(); $s = 0;

# obtain the list of backup archive files
getBackupFiles($d_arr, $f_arr, $s_arr, $d, $f);

if(is_array($f_arr))
foreach($f_arr as $file)
  if(($file!='.')&&($file != '..')){
   
    #logxx("Processing backup file $file");
	$cfile = $_CONFIG['clonerPath']."/".$file;
    
    $filemtime = filemtime($cfile) ;
    
    $ftime= $filemtime + $_CONFIG['cron_file_delete']*24*60*60;
    
    $ctime = time();
    
    if($ftime < $ctime){
		
	  if(unlink($cfile))
	  logxx("Deleted backup file $file created on ".date("Y-m-d",  $filemtime));
	  else
	  logxx("Could not delete backup file $file, please delete it manually");
	 	
	 }
       
}

}

function send_mail($email_from, $email_subject, $email_txt, $email_to, $fileatt){
$fileatt_type = "application/octet-stream"; // File Type 
$fileatt_name = basename($fileatt); // Filename that will be used for the file as the attachment 
$data = "";

$headers = "From: \"Cronbackup XCloner\" <".$email_from.">"; 

if($fileatt != ""){
	
if($file = @fopen($fileatt,'rb')){
	 
$data = fread($file,filesize($fileatt));
 
fclose($file);

} 
else{
	logxx("Unable to open file $fileatt");
}

}

$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
   
$headers .= "\nMIME-Version: 1.0\n" . 
            "Content-Type: multipart/mixed;\n" . 
            " boundary=\"{$mime_boundary}\""; 

$email_message .= "This is a multi-part message in MIME format.\n\n" . 
                "--{$mime_boundary}\n" . 
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
               "Content-Transfer-Encoding: 7bit\n\n" . 
$email_txt . "\n\n"; 

$data = chunk_split(base64_encode($data)); 

$email_message .= "--{$mime_boundary}\n" . 
                  "Content-Type: {$fileatt_type};\n" . 
                  " name=\"{$fileatt_name}\"\n" . 
                  //"Content-Disposition: attachment;\n" . 
                  //" filename=\"{$fileatt_name}\"\n" . 
                  "Content-Transfer-Encoding: base64\n\n" . 
                 $data . "\n\n" . 
                  "--{$mime_boundary}--\n"; 

$ok = mail($email_to, $email_subject, $email_message, $headers); 

return $ok;

}
?> 
<?php
function store_token($token, $name)
{
	if(!file_put_contents("tokens/$name.token", serialize($token)))
		die('<br />Could not store token! <b>Make sure that the directory `tokens` exists and is writable!</b>');
}

function load_token($name)
{
	if(!file_exists("tokens/$name.token")) return null;
	return @unserialize(@file_get_contents("tokens/$name.token"));
}

function delete_token($name)
{
	@unlink("tokens/$name.token");
}
?>
