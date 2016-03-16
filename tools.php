<?php
include_once("inventory.php");
	class Tools extends inventory{
		
		 function _constructor(){
		 return $this->inventory();
	 }
	 
	 //fucntion to add a new tool
	 function addTool($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $this->addNewInventory($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
	 }
	 //function to edit a  tool
	 function editTool($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
	 }
	 
	 function deleteTool(){}
	 
	 function searchTool(){}
	 
 }
		
		
	

?>