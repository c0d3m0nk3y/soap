<?php
header('Content-Type: text/html; charset=utf-8');

$client = new SoapClient('stockquote.wsdl');

print($client->getQuote('abc'));

?>