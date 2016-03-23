<?php
include_once("adb.php");
include_once("inventory.php");
/**
* class representing tools

*/
	class Tools extends inventory{
		
		/**
		* constructor
		*/
		function __constructor(){
			
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
	 
		/**
		* method to get all tools in the database which satisfy the filter criteria
		* @param filter		: the criteria which all returned terms must fulfill.
		* @return 			: result of the query; either false, or the dataset from the database
		*/
		function getTools($filter=false){
			$strQuery = "Select toolId, toolName, quantity, toolType, suppliers.supplierName ,supplierId from tools, suppliers where suppliers.suppliersId = tools.supplierId ";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
				
			}
			return $this->query($strQuery);
		}
		
		/**
		* method to delete tool int the database with the specified idat
		* @param toolId		: the id of the tool which should be deleted
		* @return			: the number of rows deleted
		*/
		
		function deleteTool($toolid){
			$strQuery = "Delete from tools where toolId = $toolid";

			return $this->query($strQuery);

		}
		
		/**
		* method to search for tools with the search term in the database
		* @param text		: the search term which will be used to search the tools table
		*/
		function searchTools($text = false){
			$filter = "";
			if($text!=false){
				$filter = " and (toolId like '%$text%' or toolName like '%$text%' or suppliers.supplierName like '%$text%')";
				
			}
			return $this->getTools($filter);
		}
	}

?>