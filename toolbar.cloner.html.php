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

function button($action, $text='', $js=''){
	if($action == "cancel")
		$icon = "ui-icon-cancel";
	elseif($action == "generate")
		$icon = "ui-icon-arrowthick-1-e";
	elseif($action == "config")
		$icon = "ui-icon-circle-check";
	else
		$icon = "ui-icon-arrowreturnthick-1-e";
	?>
	<script>
	$(function() {
		$( "#<?php echo $text?>" ).button({
										icons:{
											primary: '<?php echo $icon;?>'
											}
									})
									.click(function(){
											document.adminForm.task.value='<?php echo $action?>';document.adminForm.submit();
											})
									.css({ 'text-transform':'uppercase', width: '110px', 'padding-top': '10px', 'padding-bottom': '10px' });
	});
	</script>

	<button id="<?php echo $text?>"><?php echo $text?></button>

	<?php

}

class TOOLBAR_cloner {

  function _LOGIN() {
    button('dologin','Login',false);
    button('cancel','Cancel',false);
  }
  function _GENERATE() {
    button('clone','Clone',false);
    button('move','Move',false);
    button('view','Back',false);
  }
  function _CONFIRM() {
    button('generate','Continue',false);
    button('cancel','Cancel',false);
  }
  function _CLONE() {
    button('continue','Continue',false);
    button('view','Cancel',false);
  }
  function _CONFIG() {
    button('config', 'Save');
    button('cancel', 'Cancel');
  }

  function _LANG_EDIT() {
    button('save_lang_apply','Apply');
    button('save_lang', 'Save');
    button('cancel_lang', 'Cancel');
  }

  function _LANG_ADD() {
    button('add_lang_new', 'New');
    button('cancel_lang', 'Cancel');
  }

  function _LANG() {
    button('add_lang','New');
	button('edit_lang', 'Edit');
    button('del_lang', 'Delete');
    button('cancel','Cancel');
  }

  function _RENAME() {
    button('rename_save', 'Save');
    button('rename_cancel', 'Cancel');
  }
  function _VIEW() {
    button('clone','Clone',true);
    button('move','Move',true);
    button('rename','Rename',true);
    button('remove','Delete');
    button('cancel','Cancel');
  }
  function _DEFAULT() {

    button('logout','Logout');
    button('cancel','Cancel');

  }
}
?>
