<?php

/**
* main file responsible for all deleting in the database
*/
	include_once('drugs.php');
	include_once('suppliers.php');
	include_once('tools.php');
	
	//take the item id, and the itemtype, and delete accordingly
	//print_r($_REQUEST);
	
	//retrieving id and object type from request array, and storing in variables
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$type = $_REQUEST['item'];
		echo $id;
		echo $type;
	}
	
	//determining which table the delete query should be run on

	
	//take the item id, and the itemtype, and delete accordingly
	
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$type = $_REQUEST['item'];
	}
	

	if($type=='drug'){
		$drug = new drugs();
		$drug->deleteDrug($id);
		
	}else if($type=='tool'){

		echo "<br>deleting tool";


		$tool = new tools();
		$tool->deleteTool($id);
		
	}else if($type=='supplier'){
		$supplier = new suppliers();
		$supplier->deleteSupplier($id);
		
	}
	

	//returning to home page
	header("Location:homepage.php");

	//header("Location:index.php");

	
?>