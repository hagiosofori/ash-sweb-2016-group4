<?php
include_once("adb.php");
		
	class drugs extends adb{
		
<<<<<<< HEAD
		/**
		* constructor
		*/
=======
		
>>>>>>> delete
		function __constructor()
		{
			
		}
		
<<<<<<< HEAD
		/**
		* method to delete row from drug table with specified id
		* @param primaryKey			: the id of the row which should be deleted
		* @return 					: number of rows deleted
=======
		/*
		* comments here
>>>>>>> delete
		*/
		function deleteDrug( $primaryKey/*the primary key of the inventory*/)
		{
			$sql = "Delete from drugs where drugId = $primaryKey";
			return $this->query($sql);
		}
		
<<<<<<< HEAD
		/**
		* method to fetch all rows of the drugs table which satisfy the filter
		* @param filter				: string containing criteria which the returned rows must satisfy
		* @return 					: dataset of rows that satisfy the filter, or false if no rows satisfy the criteria
=======
		/*
		* comments here
>>>>>>> delete
		*/
		function getDrugs($filter=false)
		{
			$sql = "select drugId, drugName, quantity, supplierName, drugType from drugs, suppliers where suppliers.suppliersId = drugs.supplierId";
			
			if($filter!=false){
				$sql = $sql.$filter;
			}
			return $this->query($sql);
		}
		
<<<<<<< HEAD
		/**
		* method to return rows in drug table that satisfy search term
		* @param text		: search term which returned rows must satisfy
		* @return 			: dataset of rows that satisfy the search term, or false if no rows satisfy the search term
		*/
=======
>>>>>>> delete
		function searchDrugs($text = false){
			$filter = "";
			if($text!=false){
				$filter = " and (drugName like '%$text%' or suppliers.supplierName like '%$text%')";
				
			}
			return $this->getDrugs($filter);
		}
	}

?>