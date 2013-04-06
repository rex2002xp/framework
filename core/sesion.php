<?php
namespace core;

class Sesion {
	private $_id;
	private $_userid;
	private $_time;
	
	function __construct() {
        $this->_id = session_id();
		$this->_time = time();
		if (isset($_SESSION['userid']))
		{
			$this->_userid = $_SESSION['userid'];
		}
    }
	
	function setUserID ($userid) {
		$this->_userid = $userid;
		$_SESSION['userid'] = $userid;
	}
	
	function getUserID()
	{
		return $this->_userid;
	}
	
	function isValid($time, $seconds)
	{
		$diff = $time - $this->_time;
		if ($diff <= $seconds)
		{
			return true;
		}
		return false;
	}
}
?>