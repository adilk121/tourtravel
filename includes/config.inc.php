<?php
if(!defined('LOCAL_MODE')) {
	die('<span style="font-family: tahoma, arial; font-size: 11px">config file cannot be included directly');
}

if (LOCAL_MODE) {
    // Settings for local midas server do not edit here
	
	// database settings 
    $ARR_CFGS["db_host"] = 'localhost';
	$ARR_CFGS["db_name"] = 'indiatourismincredible';
    $ARR_CFGS["db_user"] = 'root';
    $ARR_CFGS["db_pass"] = '';
	define('SITE_SUB_PATH', '/rehan/indiatourismincredible');
} else {
    // Server database settings
	$ARR_CFGS["db_host"] = 'localhost';
	$ARR_CFGS["db_name"] = 'indiatou_indiatou';
    $ARR_CFGS["db_user"] = 'indiatou_indiato';
    $ARR_CFGS["db_pass"] = 'sCju)F3JCD?a';
	define('SITE_SUB_PATH', '');
}

define('SITE_WS_PATH', 'http://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);
define('SITE_FS_PATH', 'http://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);
define('THUMB_CACHE_DIR', 'thumb_cache');
define('PLUGINS_DIR', 'includes/plugins');

define('UP_FILES_FS_PATH', SITE_FS_PATH.'/uploaded_files');
define('UP_FILES_WS_PATH', SITE_WS_PATH.'/uploaded_files');

define('DEFAULT_START_YEAR', 2012);
define('DEFAULT_END_YEAR', date('Y')+10);

define('SITE_NAME', 'IndiaTourismIncredible Admin');
define('TEST_MODE', false);

define('DEF_PAGE_SIZE', 25);
define('ADMIN_DIR', 'admin');
define('ADIM_EMAIL','info@webkeynetwork.com');

define('SITE_MAIN_PATH','http://'.$_SERVER['HTTP_HOST'].'/');
?>