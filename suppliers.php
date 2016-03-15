<?php
include_once("adb.php");
	class Suppliers extends adb{
		
		function __constructor(){
			
		}
		
		function getSuppliers($filter=false){
			$strQuery = "SELECT suppliersId, supplierName, supplierLocation from suppliers";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
			}
			return $this->query($strQuery);
		}
		
		function editSuppliers(){
		
		}
		
		function deleteSupplier($supplierid){
			$strQuery = "DELETE from suppliers where supplierId = $supplierid";
			
			return $this->query($strQuery);
		}
		
		function searchSuppliers($text=false){
			$filter = "";
			if($text!=false){
				$filter = " where supplierName like '%$text%' or supplierLocation like '%$text%'";
				
			}
			return $this->getSuppliers($filter);
		}
	}
?>