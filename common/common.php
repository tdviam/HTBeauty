<?php
if(!isset($_SESSION)) { 
    session_start(); 
}
if (isset($_GET['lang']) && $_GET['lang']!='') {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
}elseif (isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
}else{
    // default language
    $lang = 'vn';
    $_SESSION['lang'] = 'vn';
}

switch ($lang) {
	case 'en':
		$lang_file = 'lang.en.php';
	break;
	 
	case 'vn':
		$lang_file = 'lang.vn.php';
	break;
	 
	default:
		$lang_file = 'lang.vn.php';
}
 include_once 'common/'.$lang_file;
?>