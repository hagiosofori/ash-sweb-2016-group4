<?php
include_once("adb.php");
		
	class drugs extends adb{
		
		
		function __constructor()
		{
			
		}
		
		/*
		* comments here
		*/
		function deleteDrug( $primaryKey/*the primary key of the inventory*/)
		{
			$sql = "Delete from drugs where drugId = $primaryKey";
			return $this->query($sql);
		}
		
		/*
		* comments here
		*/
		function getDrugs($filter=false)
		{
			$sql = "select drugId, drugName, quantity, supplierName, drugType from drugs, suppliers where suppliers.suppliersId = drugs.supplierId";
			
			if($filter!=false){
				$sql = $sql.$filter;
			}
			return $this->query($sql);
		}
		
		function searchDrugs($text = false){
			$filter = "";
			if($text!=false){
				$filter = " and (drugName like '%$text%' or suppliers.supplierName like '%$text%')";
				
			}
			return $this->getDrugs($filter);
		}
	}

?>