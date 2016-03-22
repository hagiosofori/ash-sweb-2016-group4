<?php
include_once("adb.php");
/*
* class representing Suppliers in the database
*/
	class Suppliers extends adb{
		
		/**
		* constructor
		*/
		function __constructor(){
			
		}
		
		/**
		* method to fetch rows in the supplier table that satisfy the filter`
		* @param filter 		: the values  which the rows must satisfy in order to be fetched
		* @return 				: dataset of rows from the supplier table, or false [if no rows satisfy the filter]
		*/
		function getSuppliers($filter=false){
			$strQuery = "SELECT suppliersId, supplierName, supplierLocation from suppliers";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
			}
			return $this->query($strQuery);
		}
		
		
		function editSuppliers(){
		
		}
		
<<<<<<< HEAD
		/**
		* method to delete rows from the supplier table, which have the specified supplier id.
		* @param suppleirid		 : the id of the row(s) which should be deleted
		* @return 				 : number of rows deleted
		*/
=======
>>>>>>> search
		function deleteSupplier($supplierid){
			$strQuery = "DELETE from suppliers where supplierId = $supplierid";
			
			return $this->query($strQuery);
		}
		
<<<<<<< HEAD
		/**
		* method to search supplier table and return rows that have the specified search term
		* @param text			 : the search term which will be used to filter the rows of the supplier table
		* @return 				 : dataset of rows that satisfy the search term, or false if no data is returned
		*/
=======
>>>>>>> search
		function searchSuppliers($text=false){
			$filter = "";
			if($text!=false){
				$filter = " where supplierName like '%$text%' or supplierLocation like '%$text%'";
				
			}
			return $this->getSuppliers($filter);
		}
	}
?>