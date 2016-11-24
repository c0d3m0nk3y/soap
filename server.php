<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('soap.wsdl_cache_enabled', '0');

$quotes = array('ibm'=>180.0);

function getQuote($symbol) {
	global $quotes;
	return $quotes[$symbol];
}

$server = new SoapServer('stockquote.wsdl');
$server->addFunction('getQuote');
$server->handle();

?>