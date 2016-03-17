<?php
include_once("adb.php");
	class Suppliers extends adb{
		
		function __constructor(){
			
		}
		/**
		*@param[all the fields of the table needed to add a supplier]
		*@return boolean
		*/
		function addSuppliers($supplierName , $supplierLocation){
		$strQuery = "insert into Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation'";	
		return $this->query($strQuery);
		
		}
		
		/**
		*@param[all the fields of the table needed to edit a supplier]
		*@return boolean
		*/
		function editSuppliers($supplierid,$supplierName,$supplierLocation){
		$strQuery = "update Suppliers set supplierName='$supplierName', supplierLocation = '$supplierLocation' where suppliersid = $supplierid" ;	
		return $this->query($strQuery);	
		
		}
		
	}
?>