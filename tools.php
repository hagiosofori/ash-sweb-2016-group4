<?php
include_once("adb.php");
	class Tools extends adb{
		
		
		function __constructor(){
			
		}
		
		function getTools($filter=false){
			$strQuery = "Select * from tools";
			if($filter!=false){
				$strQuery = $strQuery.$filter;
				
			}
			return $this->query($strQuery);
		}
		
		function deleteTool($toolid){
			$strQuery = "Delete from tools where toolid = $toolid";
		}
		
		function searchTools($text = false){
			$filter = "";
			if($text!=false){
				$filter = " WHERE toolId like '%$text%' or toolName like '%$text%'";
				
			}
			return $this->getTools($filter);
		}
	}

?>