



<?php

echo"<form action=\"editdrug_interface.php\" method=\"GET\">";
echo"<input type=\"hidden\" name=\"drugId\" value=  >";
echo"<input type=\"hidden\" name=\"drugName\" value=  >";
echo"<input type=\"text\" name=\"quantity\" value=  >";
echo"<input type=\"text\" name=\"supplierId\" value=  >";
echo"<input type=\"text\" name=\"drugType\" value=  >";
echo"<input type=\"submit\" name=\"submit\" value=\"ClicktoEdit\">";

if(isset($_REQUEST['submit'])){
$drugId = $_REQUEST['drugId'];
$drugname = $_REQUEST['drugName'];	
$quantity = $_REQUEST['quantity'];
$suppliers = $_REQUEST['suppliersId'];
$drugType = $_REQUEST['drugType'];

$drug  = new drug();
$drug->editDrug($drugId,$drugName,$quantity,$suppliers,$drugType,"Drugs");	
}

?>