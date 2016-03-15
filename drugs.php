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
			$sql = "Delete from drugs where inventoryID = $primaryKey";
			return $this->query($sql);
		}
		
		/*
		* comments here
		*/
		function getDrugs($filter=false)
		{
			$sql = "select * from drugs";
			
			if($filter!=false){
				$sql = $sql.$filter;
			}
			return $this->query($sql);
		}
		
		function searchDrugs($text = false){
			$filter = "";
			if($text!=false){
				$filter = " where drugName like '%$text%'";
				
			}
			return $this->getDrugs($filter);
		}
	}

?>