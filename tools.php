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
			if(text!=false){
				$filter = "WHERE toolid like '%$text%' or toolname like '%$text%'";
				return getTools($filter);
			}
		}
	}

?>