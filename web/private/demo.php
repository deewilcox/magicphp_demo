<?php 
session_start();

global $objResponse;

/* Define constants */
define('PRIVATE_BASE',$_SERVER['DOCUMENT_ROOT'] . '/../private/');
define('PUBLIC_BASE',$_SERVER['DOCUMENT_ROOT'] . '/');

/* Load classes */
include(PRIVATE_BASE . 'includes/classes/mysql.php');

/* Load functions */
include(PRIVATE_BASE . 'includes/modules/core.php');

/* Manually load vendor/magicphp */
include(PRIVATE_BASE . 'vendor/magicphp/magic.php');

use Magic\Magic;

//$magicObject = new Magic();
//$magicResponse = $magicObject->magicResponseObject;

/* $objResponse->processRequest(); */

/* $magicJS = $magicResponse->getJavascript(); */
$magicJS = '';
/* Begin logging */

/* Load template contents */
$template = file_get_contents(PRIVATE_BASE . 'templates/index.html');
$templateContents = str_replace('<!-- MAGIC-JS -->',$magicJS,$template);

echo $templateContents;

if(!empty($_POST) && isset($_POST['requestFunction'])){
	$function = $_POST['requestFunction'];
	$parameters = json_decode($_POST['requestParameters']);
	magicCallFunction($function, $parameters);	
}

?>