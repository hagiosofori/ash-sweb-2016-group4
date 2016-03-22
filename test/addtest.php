<?php
require_once("drug.php");
require_once("tools.php");
require_once("inventory.php");
require_once("suppliers.php");
class addmethods extends PHPUnit_Framework_TestCase{
	
private $drug ;
 private $tools ;
private $inventory_drug;
private $inventory_tool;
private $supplier;




public function testAddDrug(){
	
	$drug = new drug();
	$drug->connect();
	$result = $drug->addDrug("Drug1",3,1,"Tablet","Drug");
	$this->assertTrue($result);
	
}
public function testAddTool(){
	
	$tool = new tools();
	$tool->connect();
	$result = $tool->addTool("Tool1",3,1,"Syrup","Tool");
	$this->assertTrue($result);
	
}

public function testaddInventory_as_drug(){
	$inventory_drug = new inventory();
	$inventory_drug->connect();
	$result = $inventory_drug->addNewInventory("Drug2",3,1,"","Drug");
	$this->assertTrue($result);
}

public function testaddInventory_as_tool(){
	$inventory_tool = new inventory();
	$inventory_tool->connect();
	$result = $inventory_tool->addNewInventory("Tool2",3,1,"Syrup","Tool");
	$this->assertTrue($result);
}
public function testaddSupplier(){
	$supplier = new Suppliers();
	$supplier->connect();
	$result=$supplier->addSuppliers("Marechal","Accra");
	$this->assertTrue($result);
}

}





?>