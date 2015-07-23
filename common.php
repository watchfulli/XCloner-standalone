<?php
/*
 *      common.php
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

if ((!extension_loaded('zlib')) &&(function_exists('ob_start'))) {
                ob_end_clean();
                ob_start('ob_gzhandler');
        }

####################################

$_CONFIG['multiple_config_dir'] = "configs";
//$strlen = strlen($_CONFIG['backup_path']);
//if((substr($_CONFIG['backup_path'], $strlen-1, $strlen) != '/') && (substr($_CONFIG['backup_path'], $strlen-1, $strlen) != '\\'))
//	$_CONFIG['backup_path'] .= "/";

#$_CONFIG['backup_path'] = realpath($_CONFIG['backup_path'])."/";
#$_CONFIG['backups_dir'] = realpath($_CONFIG['backup_path'])."/administrator/backups";
$_CONFIG['backup_path'] = ($_CONFIG['backup_path']);
$_CONFIG['backups_dir'] = str_replace("//administrator","/administrator",($_CONFIG['backup_path'])."/administrator/backups");

$_CONFIG['backup_path'] = str_replace("\\","/", $_CONFIG['backup_path']);
$_CONFIG['backups_dir'] = str_replace("\\","/", $_CONFIG['backups_dir']);


$_CONFIG['exfile'] = $_CONFIG['backups_dir']."/.excl";
$_CONFIG['exfile_tar'] = $_CONFIG['backups_dir']."/.excl_tar";

$_CONFIG['logfile'] = $_CONFIG['backups_dir']."/xcloner.log";
$_CONFIG['commentsfile'] = $_CONFIG['backups_dir']."/.comments"; #$_REQUEST['backupComments']

$_CONFIG['script_path'] = str_replace("\\","/",dirname(__FILE__));

$lang_dir =  "language";

$task = $_REQUEST['task'];
####################################


if($_CONFIG['enable_db_backup']){

### Connecting to the mysql server
$link = @mysql_connect($_CONFIG['mysql_host'], $_CONFIG['mysql_user'], $_CONFIG['mysql_pass']) or
    E_print("Could not connect: " . mysql_error());
@mysql_select_db($_CONFIG['mysql_database']) or E_print("Unable to select database ".$_CONFIG['mysql_database']);
@mysql_query("SET NAMES 'utf8'");
}


### loading language
if($_CONFIG['select_lang']!="")

    $mosConfig_lang = $_CONFIG['select_lang'];

if (file_exists( "language/".$mosConfig_lang.".php" )) {

    include_once( "language/".$mosConfig_lang.".php" );

    @include_once( "language/english.php" );

}

else{

	include_once( "language/english.php" );

}

$version = str_replace(".", "", phpversion());
if (version_compare(PHP_VERSION, '5.2.3') < 0) {
	$_CONFIG['refresh_mode']="0";
}

if (!$_CONFIG['backup_refresh']) {
	$_CONFIG['refresh_mode']="0";
}

$_CONFIG['backup_start_path'] 	= $_CONFIG['backup_path'];
$_CONFIG['backup_store_path'] 	= $_CONFIG['clonerPath'];
$_CONFIG['temp_dir'] 		= $_CONFIG['backups_dir'];

if(!ini_get('date.timezone'))
	date_default_timezone_set('America/Los_Angeles');
?>
