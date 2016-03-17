<html>
<head>
</head>
<body>
<?php

include_once("report.php");
$obj = new report();

if($id = $_GET['preference']){

  if($id==1){
    $r = $obj->getDrugs();


    echo "<table width = 30% border='1'>";
    while($row=$obj->fetch()){
    // $row=$obj->fetch();


    echo"<tr>
        <td>{$row['drugID']}</td>
        <td>{$row['drugName']}</td>
        <td>{$row['quantity']}</td>
        <td>{$row['supplierID']}</td>
        <td>{$row['drugType']}</td>
        </tr>";

    }

    echo "</table>";

  }

  if($id==2){
    $r = $obj->getTools();


    echo "<table width = 30% border='1'>";
    while($row=$obj->fetch()){
    // $row=$obj->fetch();


    echo"<tr>
        <td>{$row['toolId']}</td>
        <td>{$row['toolName']}</td>
        <td>{$row['quantity']}</td>
        <td>{$row['supplierId']}</td>
        <td>{$row['toolType']}</td>
        </tr>";

    }

    echo "</table>";
  }

}
else if(!$r){
  echo "error getting data";
}

?>
</body>
</html>
