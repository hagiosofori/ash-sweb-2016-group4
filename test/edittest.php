<?php
require_once("drug.php");
require_once("tools.php");
require_once("inventory.php");
require_once("suppliers.php");
class editmethods extends PHPUnit_Framework_TestCase{
	
private $drug ;
 private $tools ;
private $inventory_drug;
private $inventory_tool;
private $supplier;
protected function setupDrug(){
	$drug = new drug();
}	


protected function setupTool(){
	$tools = new tools();	
}

public function testEditDrug(){
	$this->setupDrug();
	$drug = new drug();
	$drug->connect();
	$result = $drug->editDrug(1,"DrugsG",3,1,"Tablet","Drug");
	$this->assertTrue($result);
	
}

public function testEditTool(){
	$this->setupTool();
	$tool = new tools();
	$tool->connect();
	$result = $tool->editTool(1,"ToolG",3,1,"Sachet","Tool");
	$this->assertTrue($result);
	
}

public function testEditInventory_as_drug(){
	$inventory_drug = new inventory();
	$inventory_drug->connect();
	$result = $inventory_drug->editInventory(2,"Drug2",3,1,"","Drug");
	$this->assertTrue($result);
}

public function testEditInventory_as_tool(){
	$inventory_tool = new inventory();
	$inventory_tool->connect();
	$result = $inventory_tool->editInventory(2,"Tool2",3,1,"Syrup","Tool");
	$this->assertTrue($result);
}
public function testEditSupplier(){
	$supplier = new Suppliers();
	$supplier->connect();
	$result=$supplier->editSuppliers(1,"Marechal","Accra");
	$this->assertTrue($result);
}

}
?>