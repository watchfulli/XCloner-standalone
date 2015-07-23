<?php
/**
* @version $Id: install.xcloner.php 57 2007-07-08 18:05:52Z soeren $
* @package XCloner
* @copyright (C) 2005-2007 JoomlaPlug.com
* @license JoomalPlug.com
* @author Ovidiu
*/
function com_install(){
	global $database;

    if( is_callable( array( 'JFactory', 'getDBO' ))) {
		$database = JFactory::getDBO();
		$database->setQuery("UPDATE #__menu SET alias = 'XCloner Backup and Restore' WHERE path = 'xcloner-backup-and-restore'");
		$database->query();
	}
    $mypath = dirname(__FILE__);
 
    error_reporting( E_ALL ^ E_NOTICE );

	//add new admin menu images
	
	
}
?>
