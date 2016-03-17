<?php
include_once("inventory.php");
	class Tools extends inventory{
		/**
		*constructor
		*/
		 function _constructor(){
		 return $this->inventory();
	 }
	 
	 /**
	 *method to add a new tool in the database
	 *@param[all the fields in the table]
	 *@return boolean
	 */
	 function addTool($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $result=$this->addNewInventory($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		 return $result;
	 }
	 
	  /**
	 *method to edit a new tool in the database
	 *@param[all the fields in the table]
	 *@return boolean
	 */
	 function editTool($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $result=$this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		 return $result;
	 }
	 
	 function deleteTool(){}
	 
	 function searchTool(){}
	 
 }
		
		
	

?>