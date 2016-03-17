<?php 
include_once("inventory.php");
 class drug extends inventory {
	 /**
	 *constructor
	 */
	 function _constructor(){
		 return $this->inventory();
	 }
	 
     /**
	 *method to add a new drug in the database
	 *@param[all the fields indise the drug table]
	 *@return boolean
	 */
	 function addDrug($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		$result =  $this->addNewInventory( $InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		return $result;
	
	}
	 /**
	 *method to edit a drug in the database
	 *@param[all the fields indise the drug table including the primary key]
	 *@return boolean
	 */
	 function editDrug($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $result=$this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		 return $result;
	 }
	 
	 function deleteDrug(){}
	 
	 function searchDrug(){}
	 
 }
 

?>