<?php
header('Content-Type: text/html; charset=utf-8');

$options = array(
	'uri' => 'http://localhost/soap',
	'location' => 'http://localhost/soap/server.php'
);

$client = new SoapClient(null, $options);
echo $client->add(10, 10);