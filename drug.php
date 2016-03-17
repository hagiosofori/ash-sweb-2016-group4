<?php 
include_once("inventory.php");
 class drug extends inventory {
	
	 
	 /**
		* constructor
		*/
	 
	 function _constructor(){
		 return $this->inventory();
	 }
	 
	/**
		* adds new drug to the database
		* @param [all attributes needed to create a new drug]
		* @returns boolean showing success or failure
		*/
	 function addDrug($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		$result =  $this->addNewInventory( $InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		  if($result)
		  {
			 
			  return true;
		  } else {
			  return false;
		  }
	
	}
	/**
		* edits a drug in the database
		* @param [all attributes needed to edit an exiting drug]
		* @returns boolean showing success or failure
		*/
	 
	 function editDrug($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $result = $this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		   if($result)
		  {
			  return true;
		  }else{
			  return false;
		  }
	 }
	 
	
	 
 }
 

?>