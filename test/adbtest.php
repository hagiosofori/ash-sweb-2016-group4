<?php

include_once("adb.php");

class adbtest extends PHPUnit_Framework_TestCase{
	public function testConnect(){
		include_once("adb.php");
		$a = new adb();
		$b = $a->connect();
		$this->assertTrue($b);
		
	}

	
	
}

?>