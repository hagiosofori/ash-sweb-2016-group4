<?php
include_once("adb.php");
	class Tools extends adb{
		
		
		function __constructor(){
			
		}
		
		function getTools($filter=false){
			$strQuery = "Select toolId, toolName, quantity, toolType, suppliers.supplierName from tools, suppliers where suppliers.suppliersId = tools.supplierId ";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
				
			}
			return $this->query($strQuery);
		}
		
		function deleteTool($toolid){
			$strQuery = "Delete from tools where toolId = $toolid";
		}
		
		function searchTools($text = false){
			$filter = "";
			if($text!=false){
				$filter = " and (toolId like '%$text%' or toolName like '%$text%' or suppliers.supplierName like '%$text%')";
				
			}
			return $this->getTools($filter);
		}
	}

?>