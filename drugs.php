<?php
include_once("adb.php");
include_once ("inventory.php");	
	class drugs extends inventory{
		

		/**
		* constructor
		*/

		

		function __constructor()
		{
			
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

		/**
		* method to delete row from drug table with specified id
		* @param primaryKey			: the id of the row which should be deleted
		* @return 					: number of rows deleted

		/*
		* comments here

		/*
		* comments here

		*/
		function deleteDrug( $primaryKey/*the primary key of the inventory*/)
		{
			$sql = "Delete from drugs where drugId = $primaryKey";
			return $this->query($sql);
		}
		

		/**
		* method to fetch all rows of the drugs table which satisfy the filter
		* @param filter				: string containing criteria which the returned rows must satisfy
		* @return 					: dataset of rows that satisfy the filter, or false if no rows satisfy the criteria

		/*
		* comments here

		/*
		* comments here

		*/
		function getDrugs($filter=false)
		{
			$sql = "select drugId, drugName, quantity, supplierName,supplierID, drugType from drugs, suppliers where suppliers.suppliersId = drugs.supplierId";
			
			if($filter!=false){
				$sql = $sql.$filter;
			}
			
			return $this->query($sql);
			
		}
		

		/**
		* method to return rows in drug table that satisfy search term
		* @param text		: search term which returned rows must satisfy
		* @return 			: dataset of rows that satisfy the search term, or false if no rows satisfy the search term
		*/

		function searchDrugs($text = false){
			$filter = "";
			if($text!=false){
				$filter = " and (drugName like '%$text%' or suppliers.supplierName like '%$text%' or drugId = '$text')";
				
			}
			
			return $this->getDrugs($filter);
		}
	}

?>