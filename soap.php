<?php
header('Content-Type: text/html; charset=utf-8');

class Soap {
	public function boom($parameters) {
		return $parameters->first ." ".$parameters->last;
	}

	public function getDate() {
		return date('Y-m-d H:i:s');
	}
}