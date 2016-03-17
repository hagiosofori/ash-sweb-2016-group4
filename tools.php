<?php
include_once("inventory.php");
	class Tools extends inventory{
	
		/**
		* constructor
		*/
		 function _constructor(){
		 return $this->inventory();
	 }
	 /**
		* adds new tool to the database
		* @param [all attributes needed to create a new tool]
		* @returns boolean showing success or failure
		*/
	 
	 function addTool($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		$result = $this->addNewInventory($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		   if($result)
		  {
			  return true;
		  }else{
			  return false;
		  }
	 }
	 /**
		* edits tool in the database
		* @param [all attributes needed to edit a tool]
		* @returns boolean showing success or failure
		*/
	 
	 function editTool($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		$result = $this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		   if($result)
		  {
			  return true;
		  }else{
			  return false;
		  }
	 }
	 
	 function deleteTool(){}
	 
	 function searchTool(){}
	 
 }
		
		
	

?>