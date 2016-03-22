<?php
include_once("adb.php");
/**
* class representing tools

*/
	class Tools extends adb{
		
		/**
		* constructor
		*/
		function __constructor(){
			
		}
		
		/**
		* method to get all tools in the database which satisfy the filter criteria
		* @param filter		: the criteria which all returned terms must fulfill.
		* @return 			: result of the query; either false, or the dataset from the database
		*/
		function getTools($filter=false){
			$strQuery = "Select toolId, toolName, quantity, toolType, suppliers.supplierName from tools, suppliers where suppliers.suppliersId = tools.supplierId ";
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