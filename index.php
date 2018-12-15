<?php
if(version_compare(PHP_VERSION,'5.4.0','<')){
	header("Content-Type: text/html; charset=UTF-8");
	die('HYPHP2.0 不支持 5.4以下的PHP版本.  当前你的PHP版本：' . PHP_VERSION);
}

define('HYBBS_V'			,'2.1.3');
define('INDEX_PATH' 		, str_replace('\\', '/', dirname(__FILE__)).'/');
define('DEBUG'      ,(is_file(INDEX_PATH . 'DEBUG'))?false:true);
define('PLUGIN_ON'  ,true);
define('PLUGIN_ON_FILE',true);
define('PLUGIN_MORE_LANG_ON',true);



require  'HY/HYPHP.php';
/*





 */
