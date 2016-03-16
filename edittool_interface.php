
<?php

echo"<form action=\"editdrug_interface.php\" method=\"GET\">";
echo"<input type=\"hidden\" name=\"toolId\Id\" value=  >";
echo"<input type=\"hidden\" name=\"toolName\" value=  >";
echo"<input type=\"text\" name=\"quantity\" value=  >";
echo"<input type=\"text\" name=\"supplierId\" value=  >";
echo"<input type=\"text\" name=\"toolType\" value=  >";
echo"<input type=\"submit\" name=\"submit\" value=\"ClicktoEdit\">";

if(isset($_REQUEST['submit'])){
$toolId = $_REQUEST['toolId'];
$toolname = $_REQUEST['toolName'];	
$quantity = $_REQUEST['quantity'];
$suppliers = $_REQUEST['suppliersId'];
$toolType = $_REQUEST['toolType'];

$tool  = new tools();
$tool->editTool($toolId,$toolName,$quantity,$suppliers,$toolType,"toolType");	
}

?>