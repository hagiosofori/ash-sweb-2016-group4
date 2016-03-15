<?php
include_once("adb.php");
	class Suppliers extends adb{
		
		function __constructor(){
			
		}
		function addSuppliers($supplierName , $supplierLocation){
		$strQuery = "insert into Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation'";	
		return $this->query($strQuery);
		
		}
		function getSuppliers($filter=false){
			$strQuery = "SELECT * from suppliers";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
			}
			return $this->query($strQuery);
		}
		
		function editSuppliers($supplierid,$supplierName,$supplierLocation){
		$strQuery = "update Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation' where suppliersid = $supplierid" ;	
		return $this->query($strQuery);	
		
		}
		
		function deleteSuppliers($supplierid){
			$strQuery = "DELETE from suppliers where supplierid = $supplierid";
			
			return $this->query($strQuery);
		}
	}
?>