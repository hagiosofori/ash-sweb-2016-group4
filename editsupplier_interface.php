<?php
	$supplierName ='';
	$supplierLocation = '';
	

	
	 include("suppliers.php");
	 
	 //displays the interface when the edit page is launched
	 
	if(isset($_REQUEST['id'])){
		$supplier = new suppliers();
		$id = $_REQUEST['id'];
		$supplier->searchSuppliers($id);
		$row =$supplier->fetch();
		$supplierName =$row['supplierName'];
	  
	    $supplierLocation=$row['supplierLocation'];
	    
		
	echo"<form action=\"editsupplier_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"supplierId\"  ></div>";
	echo"<div>supplierName<input type=\"text\" name=\"supplierName\" value= $supplierName ></div>";
	echo"<div>supplierLocation<input type=\"text\" name=\"supplierLocation\" value= $supplierLocation ></div>";
	
	echo"<input type=\"submit\" name=\"submit\" value=\"Edit\"></div>";
		
		
	}
//edits the value the drug with new content when the button is pressed
	if(isset($_REQUEST['submit'])){
		if(isset($_REQUEST['supplierLocation'])){$supplierLocation = $_REQUEST['supplierLocation'];}
		if(isset($_REQUEST['supplierId'])){$supplierId = $_REQUEST['supplierId'];}
		if(isset($_REQUEST['supplierName'])){$supplierName = $_REQUEST['supplierName'];	}
		

	$supplier  = new Suppliers();

	$supplier->editSuppliers($supplierid,$supplierName,$supplierLocation);
		
	echo"<form action=\"editsupplier_interface.php\" method=\"GET\"></div>";
	echo"<div><input type=\"hidden\" name=\"drugId\"  ></div>";
	echo"<div>supplierName<input type=\"text\" name=\"supplierName\" value= $supplierName ></div>";
	echo"<div>supplierLocation<input type=\"text\" name=\"supplierLocation\" value= $supplierLocation ></div>";
	echo"<input type=\"submit\" name=\"submit\" value=\"Edit\"></div>";
	}

	?>