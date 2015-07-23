<?php
/**
* XCloner
* Oficial website: http://www.joomlaplug.com/
* -------------------------------------------
* Creator: Liuta Romulus Ovidiu
* License: GNU/GPL
* Email: admin@joomlaplug.com
* Revision: 1.0
* Date: July 2007
**/


/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

require_once('toolbar.cloner.html.php' );

$html = new TOOLBAR_cloner();

switch ( $task ) {
  case 'help':
  case 'credits':
  case 'refresh':
  case 'generate':
    $html->_GENERATE();
    break;

  case 'rename_save':
  case 'rename':
    $html->_RENAME();
    break;
  case 'confirm':
    $html->_CONFIRM();
    break;
  case 'continue':
  case 'move':
  case 'clone':
    $html->_CLONE();
    break;
  case 'config':
    $html->_CONFIG();
    break;
  case 'show':
  case 'view':
    $html->_VIEW();
    break;


  case 'add_lang':
     $html->_LANG_ADD();
     break;
  case 'save_lang_apply':
  case 'edit_lang':
     $html->_LANG_EDIT();
     break;

  case 'del_lang':
  case 'lang':
    $html->_LANG();
    break;

  case 'login':
    $html->_LOGIN();
	break;

  default:
    $html->_DEFAULT();
    break;
}

?>
