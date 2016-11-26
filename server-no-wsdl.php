<?php
header('Content-Type: text/html; charset=utf-8');

class ServerNoWSDL {
	public function add($x, $y) {
		return x + y;
	}
}

$options = array(
	'uri' => 'http://localhost/soap',
	'location' => 'http://localhost/soap/server.php'
);

$server = new SoapServer(null, $options);
$server->setObject(new ServerNoWSDL());
$server->handle()

?>