<?php 
include_once("inventory.php");
 class drug extends inventory {
	 
	 function _constructor(){
		 return $this->inventory();
	 }
	 
	// drugId int primary key auto_increment, drugName varchar(50), quantity int, supplierID int, 
      //             drugType enum ('Tablet','Syrup'), foreign key(supplierId) references Suppliers(suppliersId)) 
	 function addDrug($InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		$result =  $this->addNewInventory( $InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
		
	
	}
	 
	 function editDrug($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory){
		 $this->editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory);
	 }
	 
	 function deleteDrug(){}
	 
	 function searchDrug(){}
	 
 }
 

?>