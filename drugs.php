<?php

	class drugs{
		include_once("adb.php");
		
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
		
	}

?>