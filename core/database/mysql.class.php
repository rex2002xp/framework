<?php

namespace core\database;

/**
 *
 */
class MySQL {

	protected $_host;
	protected $_port;
	protected $_user;
	protected $_pass;

	function __construct($host, $port = 3306, $user = "root", $pass = "") {
		$this -> _host = $host;
		$this -> _port = $port;
		$this -> _user = $user;
		$this -> _pass = $pass;
	}

}
?>