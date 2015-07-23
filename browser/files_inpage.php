<?php
@ini_set("error_reporting", "2");

define("_VALID_MOS", 1);

$thisApp=$_SERVER['PHP_SELF'] . "?browse=true";

$fp = @fopen($_CONFIG['exfile'], "w");
if($fp){
	@fwrite($fp, $_CONFIG['cron_exclude']);
	@fclose($fp);
}

if(isset($_GET['browse'])){
      $dir = isset($_GET['dir']) ? $_GET['dir'] : '/files';
      if(strpos($dir, "../")===true){
            exit;
           }
}else{

echo "Please wait... we are loading the folder structure";

}

?>
