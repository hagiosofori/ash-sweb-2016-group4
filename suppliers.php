git<?php
include_once("adb.php");
	class Suppliers extends adb{
		
		function __constructor(){
			
		}
		//function to add a new supplier
		function addSuppliers($supplierName , $supplierLocation){
		$strQuery = "insert into Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation'";	
		return $this->query($strQuery);
		
		}
		//function to return a supplier
		function getSuppliers(){
			
		}
		//function to edit a supplier
		function editSuppliers($supplierid,$supplierName,$supplierLocation){
		$strQuery = "update Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation' where suppliersid = $supplierid" ;	
		return $this->query($strQuery);	
		
		}
		// function to delete a supplier
		function deleteSuppliers(){
			
		}
	}
?>