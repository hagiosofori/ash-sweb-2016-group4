<?php
	$supplierName ='';
	$supplierLocation = '';
	$supplierId = '';

	
	 include("suppliers.php");
	 
	 //displays the interface when the edit page is launched
	 
	if(isset($_REQUEST['id'])){
		$supplier = new suppliers();
		$id = $_REQUEST['id'];
		$supplier->searchSuppliers($id);
		$row =$supplier->fetch();
		$supplierName =$row['supplierName'];
		
	    $supplierId = $_REQUEST['id'];
	    $supplierLocation=$row['supplierLocation'];
	    
		
	echo"<form action=\"editsupplier_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"supplierId\" value = $supplierId ></div>";
	echo"<div>supplierName<input type=\"text\" name=\"supplierName\" value= $supplierName ></div>";
	echo"<div>supplierLocation<input type=\"text\" name=\"supplierLocation\" value= $supplierLocation ></div>";
	
	echo"<input type=\"submit\" name=\"submit\" value=\"Edit\"></div>";
	echo"<div><a href=\"homepage.php\">Return to homepage</a></div>";		
		
	}
//edits the value the drug with new content when the button is pressed
	if(isset($_REQUEST['submit'])){
		if(isset($_REQUEST['supplierLocation'])){$supplierLocation = $_REQUEST['supplierLocation'];}
		if(isset($_REQUEST['supplierId'])){$supplierId = $_REQUEST['supplierId'];}
		if(isset($_REQUEST['supplierName'])){$supplierName = $_REQUEST['supplierName'];	}
		

	$supplier  = new Suppliers();

	$supplier->editSuppliers($supplierId,$supplierName,$supplierLocation);
		
	echo"<form action=\"editsupplier_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"supplierId\" value = $supplierId ></div>";
	echo"<div>supplierName<input type=\"text\" name=\"supplierName\" value= $supplierName ></div>";
	echo"<div>supplierLocation<input type=\"text\" name=\"supplierLocation\" value= $supplierLocation ></div>";
	echo"<input type=\"submit\" name=\"submit\" value=\"Edit\"></div>";
	echo"<div><a href=\"homepage.php\">Return to homepage</a></div>";	
	}

	?>