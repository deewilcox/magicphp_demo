<?php 
session_start();

/* Define constants */
define('PRIVATE_BASE',$_SERVER['DOCUMENT_ROOT'] . '/../private/');
define('PUBLIC_BASE',$_SERVER['DOCUMENT_ROOT'] . '/');

/* Load functions */
include(PRIVATE_BASE . 'classes/mysql.php');

/* Manually load vendor/magicphp */
include(PRIVATE_BASE . 'vendor/magicphp/magic.php');

/* Begin logging */

/* Load template contents */

$template = file_get_contents(PRIVATE_BASE . 'templates/index.html');
echo $template;

?>