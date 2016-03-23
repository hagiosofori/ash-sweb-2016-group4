<?php
require_once("drug.php");
require_once("tools.php");
class addmethods extends PHPUnit_Framework_TestCase{
	
private $drug ;
 private $tools ;
	
protected function setupDrug(){
	$drug = new drug();
}	


protected function setupTool(){
	$tools = new tools();	
}

public function testAddDrug(){
	
}
}



?>