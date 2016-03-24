<?php

$toolName ='';
$Quantity='';
$supplierId='';
$toolType='';

//checks the url to get values from it in order to let the values remain in the text fields
if(isset($_REQUEST['toolName'])){

$toolName=$_REQUEST['toolName'];
}
if(isset($_REQUEST['quantity'])){
$Quantity=$_REQUEST['quantity'];}
if(isset($_REQUEST['supplierId'])){
$supplierId =$_REQUEST['supplierId'];}


echo"<form action=\"addtool_interface.php\" method=\"GET\"></div>";

echo"<div>toolName<input type=\"text\" name=\"toolName\" value=$toolName ></div>";
echo"<div>Quantity<input type=\"text\" name=\"quantity\"  value= $Quantity  ></div>";
echo"<div>supplierId<input type=\"text\" name=\"supplierId\" value =$supplierId  ></div>";

echo"<input type=\"submit\" name=\"submit\" value=\"Add\"></div>";
echo "<div><a href=\"homepage.php\">Return to homepage<a/></div>";

//proceeds to  add new item in the database when the button is clicked

 if(isset($_REQUEST['submit'])){

	 $toolname = $_REQUEST['toolName'];
	 $toolQuantity = $_REQUEST['quantity'];
	 $toolSupplier=$_REQUEST['supplierId'];

	 include "../Model/tools.php";
	 $tool = new tools();
	$tool->addTool($toolname,$toolQuantity,$toolSupplier," ","Tools");


 }

?>
