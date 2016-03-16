<?php 
include_once("inventory.php");
 class drug extends inventory {
	 
	 function _constructor(){
		 return $this->inventory();
	 }
	 
	//function to add drug
	 function addDrug($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		$result =  $this->addNewInventory( $InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		
	
	}
	 // function  to edit drug
	 function editDrug($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
	 }
	 
	 function deleteDrug(){}
	 
	 function searchDrug(){}
	 
 }
 

?>