<?php
include_once("adb.php");
	class Suppliers extends adb{
		
		function __constructor(){
			
		}
		
		function getSuppliers($filter=false){
			$strQuery = "SELECT * from suppliers";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
			}
			return $this->query($strQuery);
		}
		
		function editSuppliers(){
		
		}
		
		function deleteSuppliers($supplierid){
			$strQuery = "DELETE from suppliers where supplierid = $supplierid";
			
			return $this->query($strQuery);
		}
	}
?>