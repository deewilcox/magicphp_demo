<?php 

function magicCallFunction ($functionName, $parameterArray) {
	$fileName = dirname(__FILE__) . '/../functions/' . $functionName . '.php';
	include_once($fileName);
	call_user_func($functionName,$parameterArray);
}
