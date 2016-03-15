<?php
	
	include_once("adb.php");
	class inventory extends adb
	{
		
		/*
		* constructor
		*/
		function __constructor()
		{
			
		}
		
		/*
		* adds new inventory to the inventory table of database
		* @param [all attributes/fields in the database]
		*/
		function addNewInventory(/* parameters undefined as at now*/)
		{
			
		}
		
		/*
		* edits already existing inventory 
		* @param [primary key of the inventory table]
		*/
		function editInventory( /*the primary key of the inventory*/)
		{
			
		}
		
		/*
		* comments here
		*/
		function deleteInventory( $primaryKey/*the primary key of the inventory*/)
		{
			$sql = "Delete from drugs where inventoryID = $primaryKey";
			return $this->query($sql);
		}
		
		/*
		* comments here
		*/
		function getAllInventory()
		{
			$sql = "select * from drugs";
			return $this->query($sql);
		}
	}
	
?>