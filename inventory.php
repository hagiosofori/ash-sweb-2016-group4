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
		function addNewInventory( $InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory)
		{
			$query=null;
			if(strcasecmp($InventoryCategory,"Tools")==0||(strpos($InventoryCategory, "Tool")!==false)){
			$query= "insert into Tools set toolName ='$InventoryName', toolType='$InventoryType', quantity=$Quantity,supplierID =$supplierID
			";
			
			}
			else if(strcasecmp($InventoryCategory,"Drugs")==0||(strpos($InventoryCategory, "Drug")!==false)){
			$query= "insert into drugs set drugName ='$InventoryName', drugType='$InventoryType', quantity=$Quantity,supplierID =$supplierID
			";
			}
			else{
				//does nothing
				
			}
			
			if($query!==null){
			$this->query($query);	
			}
			
		}
		
		/*
		* edits already existing inventory 
		* @param [primary key of the inventory table]
		*/
		function editInventory($primarykey,$InventoryName,$Quantity,$supplierID,$InventoryType,$InventoryCategory)
		{
			$query = null;
			if(strcasecmp($InventoryCategory,"Tools")==0||(strpos($InventoryCategory, "Tool")!==false)){
			$query= " update Tools set toolName ='$InventoryName', toolType='$InventoryType', quantity=$Quantity,supplierID =$supplierID where toolId =$primarykey
			";
			} else if(strcasecmp($InventoryCategory,"Drugs")==0||(strpos($InventoryCategory, "Drug")!==false)){
			$query= "update drugs set drugName ='$InventoryName', drugType='$InventoryType', quantity=$Quantity,supplierID =$supplierID where drugId=$primarykey
			";}
			else{
				//does nothing
			}
			
			if($query!==null){
				$this->query($query);	
			}
			
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