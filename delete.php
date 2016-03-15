<?php
	
	//take the item id, and the itemtype, and delete accordingly
	
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$type = $_REQUEST['item'];
	}
	
	if($type=='drug'){
		$drug = new drugs();
		$drug->deleteDrug($id);
		
	}else if($type=='tool'){
		$tool = new tools();
		$tool->deleteTool($id);
		
	}else if($type=='supplier'){
		$supplier = new suppliers();
		$supplier->deleteSupplier($id);
		
	}
	
	//header("Location:index.php");
	
?>