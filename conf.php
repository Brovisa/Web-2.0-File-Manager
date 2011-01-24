<?
/*************************************************************
*
*    This is a configuration file for Web 2.0 File Manager
*
*************************************************************/

// -- basic settions
$sys_home		= str_replace('conf.php', '', substr(__FILE__, strlen($_SERVER['DOCUMENT_ROOT'])));
$def_archive 	= 'zip'; // can be: zip, tar, tar.bz, tar.gz
$def_safeFiles  = ''; // if blank - all safe, otherwise safe file extanctions separated by comma for example 'jpg,gif,doc,xls'
$def_defaultCSS = 'simple-blue.css';
$def_dbSession  = false;
$def_dbUsers	= false;

// -- users
$def_users = Array();
$def_users['demo']	= 'demo';

// -- folders
$def_folders = Array();
$def_folders['Home'] 		= '/tmp/fm';
$def_folders['Documents'] 	= '/tmp/fm_docs';
$def_folders['Temp']	 	= '/tmp/fm_temp';
?>