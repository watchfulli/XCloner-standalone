<?php

// --- FRONT AREA---//
define("LM_FRONT_CHOOSE_PACKAGE","<b>Choose the package to install:</b>");
define("LM_FRONT_CHOOSE_PACKAGE_SUB","<small>Please select your Joomla version you wish to install</small>");
define("LM_FRONT_TOP","<span colspan='2' class='contentheading'>Install Joomla Software Online</span>");
define("LM_FRONT_TOP_FTP_DETAILS","<h2>Provide your ftp details below:</h2>");
define("LM_FRONT_WEBSITE_URL","<b>Website Url:</b>");
define("LM_FRONT_WEBSITE_URL_SUB","<small>Please provide the website url where Joomla will be installed, example http://www.sitename.com/Joomla</small>");
define("LM_FRONT_FTP_HOST","<b>Ftp hostname:</b>");
define("LM_FRONT_FTP_HOST_SUB","<small>example ftp.sitename.com</small>");
define("LM_FRONT_FTP_USER","<b>Ftp username:</b>");
define("LM_FRONT_FTP_USER_SUB","<small>example john</small>");
define("LM_FRONT_FTP_PASS","<b>Ftp password:</b>");
define("LM_FRONT_FTP_PASS_SUB","<small>example johnpass</small>");
define("LM_FRONT_FTP_DIR","<b>Ftp directory:</b>");
define("LM_FRONT_FTP_DIR_SUB","<small>Please provide the ftp directory of where you would like to install Joomla, example public_html/Joomla/ or htdocs/Joomla/ and make sure it has write permissions for everybody</small>");
define("LM_TRANSFER_FTP_INCT","Incremental transfer: ");
define("LM_TRANSFER_FTP_INCT_SUB","will attempt to transfer the files over ftp in an incremental mode to avoid any blank pages or timeouts ");
define("LM_FRONT_BOTTOM","Didn't work for you? Please tell us what happened -> <a href='http://www.xcloner.com/contact/'>Contact page</a><br />
                         Powered by <a href='http://www.xcloner.com'>XCloner</a>");
define("LM_FRONT_MSG_OK","We have uploaded the Package Restore Utility on your ftp site, to continue click here");
define("LM_NOPAKCAGE_ERROR","There is no package selected, aborting...!");

// --- BACKEND AREA---//

//Amazon S3
define("LM_AMAZON_S3", "Amazon S3 Storage");
define("LM_AMAZON_S3_ACTIVATE", "Activate");
define("LM_AMAZON_S3_AWSACCESSKEY", "AWS Access Key:");
define("LM_AMAZON_S3_AWSSECRETKEY", "AWS Secret Key:");
define("LM_AMAZON_S3_BUCKET", "Bucket name:");
define("LM_AMAZON_S3_DIRNAME", "Upload Directory:");
define("LM_AMAZON_S3_SSL","Enable SSL transfer");

//Dropbox
define("LM_DROPBOX", "DropBox Storage");
define("LM_DROPBOX_ACTIVATE", "Activate");
define("LM_DROPBOX_AWSACCESSKEY", "Application Key:");
define("LM_DROPBOX_AWSSECRETKEY", "Application Secret:");
define("LM_DROPBOX_DIRNAME", "Upload Directory:");


define("LM_DATABASE_EXCLUDE_TABLES","Select tables to exclude from backup:");
define("LM_CONFIG_SYSTEM_FOLDER","Folders display:");
define("LM_CONFIG_SYSTEM_FOLDER_SUB","please select the mode you would like to select the exclude folders from 'Generate Backup' section");
define("LM_CONFIG_SYSTEM_LANG","System Language:");
define("LM_CONFIG_SYSTEM_LANG_SUB","configures the XCloner language, if set to default it will display the default language of Joomla if available");
define("LM_CONFIG_SYSTEM_LANG_DEFAULT","System Default");
define("LM_CONFIG_SYSTEM_DOWNLOAD","Enable Direct Download link:");
define("LM_CONFIG_SYSTEM_DOWNLOAD_SUB","if this is checked, in the 'View Backups' screen, the download link will be a direct link from your server to download the package, please note that the backup path must be within the Joomla root path");
define("LM_CONFIG_DISPLAY","Display Settings");
define("LM_CONFIG_SYSTEM","System Settings");
define("LM_CONFIG_SYSTEM_FTP","FTP Transfer Mode");
define("LM_CONFIG_SYSTEM_FTP_SUB","select how the files will be transfered from server to server when using ftp protocol");
define("LM_CONFIG_MEM","Backup using Server Functions");
define("LM_CONFIG_MEM_SUB","<small>If set to Active, you will be required to have on your server support for <b>zip or tar</b> and/or <b>mysqldump</b> commands and specify their paths, and also <b>exec()</b> access in your php</small>");
define("LM_CRON_DB_BACKUP","Enable Database backup:");
define("LM_CRON_DB_BACKUP_SUB","<small>Select this option to include mysql data in the backup.</small>");
define("LM_CONFIG_SYSTEM_MBACKUP","Include backups directory in clone:");
define("LM_CONFIG_SYSTEM_MBACKUP_SUB","<small>If selected, each backup will also include the previous backup files, hence increasing its size each time.</small>");

define("LM_TAB_MYSQL","MYSQL");
define("LM_CONFIG_MYSQL","MYSQL Connection Settings:");
define("LM_CONFIG_MYSQLH","Mysql hostname:");
define("LM_CONFIG_MYSQLU","Mysql username:");
define("LM_CONFIG_MYSQLP","Mysql password:");
define("LM_CONFIG_MYSQLD","Mysql database:");
define("LM_CONFIG_MYSQLH_SUB","");
define("LM_CONFIG_MYSQLU_SUB","");
define("LM_CONFIG_MYSQLP_SUB","");
define("LM_CONFIG_MYSQLD_SUB","");

define("LM_TAB_AUTH","Authentication");
define("LM_CONFIG_AUTH","User Authentication Area");
define("LM_CONFIG_AUTH_USER","Login Username:");
define("LM_CONFIG_AUTH_PASS","Login Password:");
define("LM_CONFIG_AUTH_USER_SUB","this will be your default login user to XCloner");
define("LM_CONFIG_AUTH_PASS_SUB", "your default login password, leave blank if you don't want to change it");

define("LM_YES","Yes");
define("LM_NO", "No");
define("LM_ACTIVE","Active");
define("LM_TAR_PATH","Tar path or command:");
define("LM_TAR_PATH_SUB","(required if archive type is Tar and Active box checked)");
define("LM_ZIP_PATH","Zip path or command:");
define("LM_ZIP_PATH_SUB","(required if archive type is Zip and Active box checked)");
define("LM_MYSQLDUMP_PATH","Mysqldump path or command: (required if  Active box checked)<br /> For large mysql dumps please use
<br /><b><small>mysqldump --quote-names --quick --single-transaction --skip-comments</b></small>");

// --- CONFIG ---//
define("LM_CONFIG_MANUAL","Backup Manual Process");
define("LM_CONFIG_MANUAL_BACKUP","Manual backup:");
define("LM_CONFIG_MANUAL_BACKUP_SUB","Select this option if you have php time execution limitations on your server. This will require javascript activated in your browser");
define("LM_CONFIG_MANUAL_FILES","Files to process per request:");
define("LM_CONFIG_DB_RECORDS", "Database records per request");
define("LM_CONFIG_MANUAL_REFRESH","Time between requests:");
define("LM_CONFIG_SYSTEM_MDATABASES","Backup Multiple Databases:");
define("LM_CONFIG_SYSTEM_MDATABASES_SUB","this option controls whether XCloner may backup multiple databases");
define("LM_CONFIG_EXCLUDE_FILES_SIZE","Exclude files larger than:");

define("LM_CONFIG_CRON_LOCAL","Local server*");
define("LM_CONFIG_CRON_REMOTE","Remote ftp account");
define("LM_CONFIG_CRON_EMAIL","Email**");
define("LM_CONFIG_CRON_FULL","Full (files + database)");
define("LM_CONFIG_CRON_FILES","Files only");
define("LM_CONFIG_CRON_DATABASE","Database only");

define("LM_CONFIG_EDIT","Editing config file:");
define("LM_CONFIG_BSETTINGS","Backup Path Settings");
define("LM_CONFIG_BSETTINGS_OPTIONS","Backup Generator Options");
define("LM_CONFIG_BSETTINGS_SERVER","Server Use Options");
define("LM_CONFIG_BPATH","Backup Store Path:");
define("LM_CONFIG_UBPATH","Backup Start Path:");
define("LM_CONFIG_BPATH_SUB","<small>this is the path where all backups will be stored</small>");
define("LM_CONFIG_UBPATH_SUB","<small>this is the base path that XCloner will use to select the backup files and directories</small>");
define("LM_CRON_EXCLUDE","Excluded Directories");
define("LM_CRON_EXCLUDE_DIR","Excluded directories list one per line:<br>please use full path of the server directory");
define("LM_CRON_BNAME","Backup Name:");
define("LM_CRON_BNAME_SUB","<small>if left blank we will generate a name by default each time a new cron backup is made</small>");
define("LM_CRON_IP","Cron Allowed IP's:");
define("LM_CRON_IP_SUB","<small>by default, only the local server will have access to the cron job, but you may enter also other IP's one per line</small>");
define("LM_CRON_DELETE_FILES","Delete Old Backups");
define("LM_CRON_DELETE_FILES_SUB","Delete backups older than: ");
define("LM_CRON_DELETE_FILES_SUB_ACTIVE"," Activate");
define("LM_CRON_SEMAIL","Email cron log to: ");
define("LM_CRON_SEMAIL_SUB","If an email address is set, after running a cron job, the cron log will be emailed to this address; multiple addresses can be added separated by ;");
define("LM_CRON_FROMEMAIL","Email cron log from: ");
define("LM_CRON_FROMEMAIL_SUB","If an email address is set, after running a cron job, the cron log will be emailed from this address");
define("LM_CRON_MCRON","Configuration Name:");
define("LM_CRON_MCRON_AVAIL","Available Configurations:");
define("LM_CRON_MCRON_R","please provide a simple name for your new cron configuration");
define("LM_CRON_MCRON_SUB","with this option you will be able to save the current configuration in a separate file and use it for running multiple cronjobs");
define("LM_CRON_SETTINGS_M","Multiple CronJobs Configuration");
define("LM_CONFIG_SPLIT_BACKUP_SIZE", "Split Backup Archive if size larger than:");

// --- MENU ---//
define("LM_MENU_OPEN_ALL", "open all");
define("LM_MENU_CLOSE_ALL", "close all");
define("LM_MENU_ADMINISTRATION","Administration");
define("LM_MENU_CLONER","XCloner");
define("LM_MENU_CONFIGURATION","Configuration");
define("LM_MENU_CRON","Cron");
define("LM_MENU_LANG","Translator");
define("LM_MENU_ACTIONS","Actions");
define("LM_MENU_Generate_backup","Generate Backup");
define("LM_MENU_Restore_backup","Restore Backup");
define("LM_MENU_View_backups","View Backups");
define("LM_MENU_Documentation","Help");
define("LM_MENU_ABOUT","About");
define("LM_DELETE_FILE_FAILED","Delete Failed, please check the file permissions");
define("LM_JOOMLAPLUG_CP","XCloner - Your site backup and restore solution");
define("LM_MENU_FORUM","Forums");
define("LM_MENU_SUPPORT","Support");
define("LM_MENU_WEBSITE","Website");

define("LM_MAIN_Settings","Settings");
define("LM_MAIN_View_Backups","View Backups");
define("LM_MAIN_Generate_Backup","Generate Backup");
define("LM_MAIN_Help","Help");
define("LM_FTP_TRANSFER_MORE","FTP Connection Mode");
define("LM_REFRESH_MODE","Backup Refresh Mode");
define("LM_DEBUG_MODE","Enable log:");
define("LM_REFRESH_ERROR","There was an error retrieving the JSON data from the server, try again or contact the developers!");


// --- LANGUAGE --//
define("LM_LANG_NAME", "Language Name");
define("LM_LANG_MSG_DEL", "Language(s) succesfully deleted!");
define("LM_LANG_NEW","New Language Name:");
define("LM_LANG_EDIT_FILE","Editing File:");
define("LM_LANG_EDIT_FILE_SUB","Do not forget to save your translation every 5 minutes, just hit the Apply button to update");


// --- TABS --//
define("LM_TAB_GENERAL","General");
define("LM_TAB_G_STRUCTURE","Structure");
define("LM_TAB_SYSTEM","System");
define("LM_TAB_CRON","Cron");
define("LM_TAB_INFO","Info");
define("LM_TAB_G_DATABASE","Database Options");
define("LM_TAB_G_FILES","Files Options");
define("LM_TAB_G_COMMENTS","Backup Comments");
define("LM_G_EXCLUDE_COMMENT","<br>Please enter here the excluded folders, each one per line!
    <br><b>you may want to disable the cache feature when doing a backup, or if not exlude the cache folder from the backup</b>");
define("LM_TAB_G_COMMENTS_H2", "Enter below any additional comments to archive:");
define("LM_TAB_G_COMMENTS_NOTE","Please note, the comments are stored inside the archive, file <b>administrator/backups/.comments</b>");

// --- MESSAGES --//
// front end
define("LM_MSG_FRONT_1","No package avalaible");
define("LM_MSG_FRONT_2","FTP upload has failed for destination");
define("LM_MSG_FRONT_3","Uploaded done for");
define("LM_MSG_FRONT_4","FTP connection has failed!");
define("LM_MSG_FRONT_5","Attempted to connect to");
define("LM_MSG_FRONT_6","for user");

//backend
define("LM_MSG_BACK_1","Config succesfully updated...");
define("LM_MSG_BACK_2","FTP connection has failed!");
define("LM_MSG_BACK_3","Backup move DONE! The select backup should now be available on the provided location!");
define("LM_MSG_BACK_4","Moving done, starting the Clone process on the remote host");
define("LM_MSG_BACK_5","Succesfully unpublished from frontend");
define("LM_MSG_BACK_6","Unpublishing failed! Please check your paths!");
define("LM_MSG_BACK_7","Succesfully published to frontend");
define("LM_MSG_BACK_8","Publishing failed! Please check your paths!");
define("LM_MSG_BACK_9","Clones succesfully renamed!");
define("LM_MSG_BACK_10","The Joomla path is not within your backup path! Could not use the direct download mode! You should edit your Configuration->System Tab and set 'Direct Download link' to No");
define("LM_MSG_BACK_11","All done! Manual Backup process finished! <a href='index2.php?option=com_cloner&task=view'>Click here to continue</a>");
define("LM_MSG_BACK_12","<h2>Backup failed! Please check that you have support for the zip utility(/usr/bin/zip or /usr/local/bin/zip) on your server and the path you set it's corect in Configuration, or choose the Tar archive type!</h2>");
define("LM_MSG_BACK_13","<h2>Backup failed! Please check that you have support for the tar utility(/usr/bin/tar or /usr/local/bin/tar) on your server and the path you set it's corect in Configuration,  or choose the Zip archive type!</h2>");
define("LM_MSG_BACK_14","<font color='red'>There was a problem in generating the database backup, please check your mysqldump server path!</font>");



define("LM_CRON_TOP","Cron Command Setup");
define("LM_CRON_SUB","<b>Using the cron function you can setup an automated backup generator for your website!</b>
<br />To set it up, you need to add in your control panel crontab one of the following commands:");
define("LM_CRON_HELP","Notes:
 - if your php location is diferent than /usr/bin/php, please use that one, format /$"."php_path/php


For more info on how to setup a cron for
 - Cpanel <a href='http://www.cpanel.net/docs/cpanel/' target='_blank'>click here</a>
 - Plesk <a href='http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm' target='_blank'>click here</a>
 - Interworx <a href='http://www.sagonet.com/interworx/tutorials/siteworx/cron.php' target='_blank'>click here</a>
 - General Linux crontab info <a href='http://www.computerhope.com/unix/ucrontab.htm#01' target='_blank'>click here</a>

If you need help setting up your cron job, please visit our forums <a href='http://www.xcloner.com/support/forums/'>http://www.xcloner.com/support/forums/</a>");
define("LM_CRON_SETTINGS","Cron settings");
define("LM_CRON_MODE","Backup store mode:");
define("LM_CRON_MODE_INFO"," <br />
      <small> please note:* if local server is chosen, we will use the default backup path from the General section to store the backup</small>
      <br />
      <small> please note:** if email mode is used, we do not guarantee that the backup will reach the mail account due to provider limitations</small>
     ");
define("LM_CRON_TYPE_INFO","<small><br /> please choose the backup type you would like to create</small>");
define("LM_CRON_MYSQL_DETAILS","Mysql Options");
define("LM_CRON_MYSQL_DROP","Add Mysql Drop");
define("LM_CRON_TYPE","Backup type:");
define("LM_CRON_FTP_DETAILS","Ftp store mode details:");
define("LM_CRON_FTP_SERVER","Ftp server:");
define("LM_CRON_FTP_USER","Ftp username:");
define("LM_CRON_FTP_PASS","Ftp password:");
define("LM_CRON_FTP_PATH","Ftp path:");
define("LM_CRON_FTP_DELB","Delete backup after transfer");
define("LM_CRON_EMAIL_DETAILS","Email mode details:");
define("LM_CRON_EMAIL_ACCOUNT","Email account:");
define("LM_CRON_COMPRESS","Compress backup files:");
define("LM_RESTORE_TOP","Restoring your backups info");
define("LM_CREDIT_TOP","About XCloner");
define("LM_CLONE_FORM_TOP","<h2>Provide your ftp details below:</h2>");

// --- Info Tab ---//

define("LM_CONFIG_INFO_T_SAFEMODE","Php Safe_mode:");
define("LM_CONFIG_INFO_T_VERSION","PHP Version Check:");
define("LM_CONFIG_INFO_T_MTIME","Php max_execution_time:");
define("LM_CONFIG_INFO_T_MEML","Php memory_limit:");
define("LM_CONFIG_INFO_T_BDIR","Php open_basedir:");
define("LM_CONFIG_INFO_T_EXEC","exec() function support:");
define("LM_CONFIG_INFO_T_TAR","Tar utility server path:");
define("LM_CONFIG_INFO_T_ZIP","Zip utility server path:");
define("LM_CONFIG_INFO_T_MSQL","Mysqldump utility server path:");
define("LM_CONFIG_INFO_T_BPATH","Backup Path:");
define ("LM_CONFIG_INFO_ROOT_BPATH","Backup Start Path");
define("LM_CONFIG_INFO_ROOT_PATH_SUB","the backup start path needs to exist and be readable in order for XCloner to start the backup process");
define("LM_CONFIG_INFO_ROOT_BPATH_TMP", "Temporary Folder");
define("LM_CONFIG_INFO_ROOT_PATH_TMP_SUB","the path <i>[Backup Start Path/administrator/backups]</i> needs to be created and be writeable in order for XCloner to work properly");


define("LM_CONFIG_INFO","This tab will show general system info and paths");
define("LM_CONFIG_INFO_PATHS","General paths info:");
define("LM_CONFIG_INFO_PHP","Php Configuration Information:");
define("LM_CONFIG_INFO_TIME","<small>This controls the maximum time (in seconds) your script is allowed to run on server</small>");
define("LM_CONFIG_INFO_MEMORY","<small>This controls the maximum memory the script may allocate for it's processes</small>");
define("LM_CONFIG_INFO_BASEDIR","<small>This controls the paths your script is allowed to access, no value means it can access any path </small>");
define("LM_CONFIG_INFO_SAFEMODE","<small>safe mode will need to be set to Off in order for XCloner to work properly </small>");
define("LM_CONFIG_INFO_VERSION","<small>PHP >=5.2.3 is required to enjoy all features</small>");
define("LM_CONFIG_INFO_TAR","<small>If the script is unable to determine the tar path automatically, you might need to uncheck the 'Active' checkbox near TAR line in General Tab</small>");
define("LM_CONFIG_INFO_ZIP","<small>If the script is unable to determine the zip path automatically, you might need to uncheck the 'Active' checkbox near ZIP line in General Tab</small>");
define("LM_CONFIG_INFO_MSQL","<small>If the script is unable to determine the mysqldump path automatically, you might need to uncheck the 'Active' checkbox near MYSQLDUMP line in General Tab</small>");
define("LM_CONFIG_INFO_EXEC","<small>If this function is disabled, you might want to uncheck Both 'Active' checkboxes from the General Tab</small>");
define("LM_CONFIG_INFO_BPATH","<small>needs to be writeable in order for XCloner to archive backups</small>");


// --- TRANSFER DETAILS---//

define("LM_TRANSFER_URL","Website Url:");
define("LM_TRANSFER_URL_SUB","<small>Please provide the website url to where backup will be moved, example http://www.sitename.com/, we need this because we will direct you there to access the restore script</small>");
define("LM_TRANSFER_FTP_HOST","Ftp hostname:");
define("LM_TRANSFER_FTP_HOST_SUB","example ftp.sitename.com");
define("LM_TRANSFER_FTP_USER","Ftp username:");
define("LM_TRANSFER_FTP_USER_SUB","example 'john'");
define("LM_TRANSFER_FTP_PASS","Ftp password:");
define("LM_TRANSFER_FTP_PASS_SUB","example 'johnpass'");
define("LM_TRANSFER_FTP_DIR","Ftp directory:");
define("LM_TRANSFER_FTP_DIR_SUB","Please provide the ftp directory of where you would like to move the backup, example public_html/ or htdocs/ and make sure it has write permissions for everybody");


// --- GENERATE BACKUP---//

define("LM_BACKUP_NAME","<b>Please choose your backup name</b>");
define("LM_BACKUP_NAME_SUB","<small>if left blank we will generate a name by default!</small>");


// -- General --//
define("LM_COM_TITLE","XCloner Manager - ");
define("LM_COM_TITLE_CONFIRM","Confirm Folder Selection");

define("LM_COL_FILENAME","Backup Set");
define("LM_COL_DOWNLOAD","Download");
define("LM_COL_AVALAIBLE","Frontend Package");
define("LM_COL_SIZE","Size of Set");
define("LM_COL_DATE","Date of Backup");
define("LM_COL_FOLDER","<b>Excluded Folders and/or files</b>");

define("LM_DELETE_FILE_SUCCESS", "Files Deleted");
define("LM_DOWNLOAD_TITLE", "Download");


define("LM_ARCHIVE_NAME","Archive Name");
define("LM_NUMBER_FOLDERS","Number of Folders");
define("LM_NUMBER_FILES","Number of Files");
define("LM_SIZE_ORIGINAL","Size of Original File");
define("LM_SIZE_ARCHIVE","Size of Archive");
define("LM_DATABASE_ARCHIVE","Database Backup");

define("LM_CONFIRM_INSTRUCTIONS","<b>Please select the folders you wish to exclude from the archive</b>
<br />- by default all folders are included, if you wish to exclude a folder and it's subfolders just check the box next to it");
define("LM_CONFIRM_DATABASE","Backup Database");


define("LM_DATABASE_EXCLUDED", "Excluded");
define("LM_DATABASE_CURRENT","Current database:");
define("LM_DATABASE_INCLUDE_DATABASES","Include Extra Databases");
define("LM_DATABASE_INCLUDE_DATABASES_SUB","you can select multiple databases to include in the backup by holding down the CTRL key and selecting the desired items with your mouse<br />
the databases will be stored in administrator/backups directory in your archive");

define("LM_DATABASE_MISSING_TABLES", "Error: Table Definitions Not Found");
define("LM_DATABASE_BACKUP_FAILED", "Backup FAILED, please check that administrator/backups directory is writeable!");
define("LM_DATABASE_BACKUP_COMPLETED", "Backup Completed");
define("LM_RENAME_TOP","Rename selected clones");
define("LM_RENAME","Rename clone ");
define("LM_RENAME_TO"," to ");
// --- CLONER RESTORE--- //

define("LM_CLONER_RESTORE","<h2>How to restore a backup on different locations INFO!</h2><br />
<pre>
   Restoring your backups has never been easier!
   With the help of our cloning function from the <a href='index2.php?option=com_cloner&task=view'>View Backups</a> screen
   you will be able to move your website backup to anywhere on the Internet.

   Here is  what you have to do:

   <b>Step 1 - move your backup to the restore host</b>

    - go into the XCloner 'View Backups' area
    - after you have selected your backup click on the 'Clone it' button
    - enter the ftp details of where you would like to Clone the backup
    - after hitting submit the backup and the restore script will be transfered to the new host and you will be given a url to access the next step based on the url you provided for the remote location
    - after you click on the provided link you will be taken to the new location, sample url <b>http://my_restore_site.com/XCloner.php</b>

   <b>Note:</b> if this process fails for any reason, you need to do this:
   	1. Download the backup on your computer
   	2. Download the restore script, all files from directory:
		Joomla : administrator/components/com_xcloner-backupandrestore/restore/
		Wordpress : wp-content/plugins/xcloner-backup-and-restore/
		Standalone: restore/
   	3. Upload both backup and restore script to your restore location
   	4. Launch XCloner.php in your browser and follow the restore screen as specified below

   <b>Step 2 - the XCloner.php restore screen:</b>

   <b>XCloner.php - the restore script</b>
    - at this step you already should have in place the backup you created and the Restore script
    - enter your new mysql access details, this includes your new mysql hostname, user and password, and a new database if different from the original one
    - enter your new location Url and Path
    - to restore the files you have <b>2 options:</b>

       	- 1. restore the files through ftp, the script will simulate a ftp upload process on your server, this will
       	fix the permissions problem from step 2.
       	- 2. restore the files directly, this will unarchive the files on your server, will work faster but it might
       	result in some permission problems if you use your ftp a lot to make changes to the site

    - after you hit submit the script will attempt to move the files to the new path, directly or using ftp and
    will install the database
    - if everything goes ok your new site clone is up and running on the new location

    For support please consult our forums <a href='http://www.xcloner.com/support/forums/' target='_blank'>http://www.xcloner.com/support/forums/</a>
    or email us at <a href='mailto:info@xcloner.com'>info@xcloner.com</a>


</pre>");


// --- ABOUT CLONER---//

define("LM_CLONER_ABOUT","<h2>XCloner Backup</h2>
      XCloner is a tool that wil help you manage your website backups, Generate/Restore/Move so your website will be always secured!
	  <br /><br />
      Features:
       <ul>
			<li>cron script to generate automatic backups</li>
			<li>multiple backup options</li>
			<li>restore tool to move the website rapidly to other locations</li>
			<li>store the backup locally, on remotely</li>
			<li>AJAX/JSON backup interface</li>
			<li>standalone code, can backup any PHP/Mysql website</li>
			<li>incremental database and files backup</li>
			<li>incremental file system scanning</li>
			<li>amazon S3 support</li>
       </ul>
	   <br />

       For reports and suggestions please contact us at info@xcloner.com or visit us on <a href='http://www.xcloner.com'>http://www.xcloner.com</a>

      <br/><br/>

      XCloner.com &copy; 2004-2011 | <a href=\"http://www.xcloner.com\">www.xcloner.com</a>
      <br/><p/><br/>
");

define("LM_LOGIN_TEXT","
<pre>
<b>Notes:</b>
 1. If you are on this screen for the first time, your default
    username is '<i>admin</i>' and password '<i>admin</i>', you should change them after login

 2. If you've forgot your password, to reset it you need to add
    this code:

	<b>$"."_CONFIG[\"jcpass\"] = md5(\"my_new_pass\");</b>

    at the end of the config file cloner.config.php just
    before line ?>
    Don't forget to replace my_new_pass with the actual password
  
  3. The username and password are Case-Sensitive  
</pre>
");
?>
