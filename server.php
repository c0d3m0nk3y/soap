<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('soap.wsdl_cache_enabled', '0');

$quotes = array('ibm'=>182.0, 'abc'=>123);
$foo = array('foo'=>'foo');

function getQuote($symbol) {
	global $quotes;
	return $quotes[$symbol];
}

function getFoo($symbol) {
	global $foo;
	return $foo[$symbol];
}

$server = new SoapServer('stockquote.wsdl');
$server->addFunction('getQuote');
$server->addFunction('getFoo');
$server->handle();

?>