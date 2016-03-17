<?php
include_once("adb.php");
	class Suppliers extends adb{
		/**
		*constructor for the objecy Suppliers
		*/
		function __constructor(){
			
		}
		/**
		*method to add a new supplier to the database
		*@param[all the fields in the database]
		*/
		function addSuppliers($supplierName , $supplierLocation){
		$strQuery = "insert into Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation'";	
		return $this->query($strQuery);
		}
		
		/**
		*method to edit suppliers  from the database
		*@param[all the fields in the database]
		*/
		function editSuppliers($supplierid,$supplierName,$supplierLocation){
		$strQuery = "update Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation' where suppliersid = $supplierid" ;	
		return $this->query($strQuery);	
		
		}
		
		
	}
?>