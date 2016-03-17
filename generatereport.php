<html>
<head>
</head>
<body>
  <table>
<?php

include_once("report.php");
$obj = new report();

if($id = $_GET['preference']){

  if($id==1){
    $r = $obj->getDrugs();

    echo "<table width = 50% border = '1'>

    <tr>
      <td style='background-color:#332266  ; color:white'><b>DRUG ID</b></td>
      <td style='background-color:#332266  ; color:white'><b>DRUG NAME</b></td>
      <td style='background-color:#332266  ; color:white'><b>DRUG QUANTITY</b></td>
      <td style='background-color:#332266  ; color:white'><b>DRUG SUPPLIER ID</b></td>
      <td style='background-color:#332266  ; color:white'><b>DRUG TYPE</b></td>
    </tr>";

  //  echo "<table width = 50% border='1'>";
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

      echo "<table width = 50% border = '1'>

    <tr>
      <td style='background-color:#332266  ; color:white'><b>TOOL ID</b></td>
      <td style='background-color:#332266  ; color:white'><b>TOOL NAME</b></td>
      <td style='background-color:#332266  ; color:white'><b>TOOL QUANTITY</b></td>
      <td style='background-color:#332266  ; color:white'><b>TOOL SUPPLIER</b></td>
      <td style='background-color:#332266  ; color:white'><b>TOOL TYPE</b></td>
    </tr>";


  //  echo "<table width = 50% border='2'>";
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


  if($id==3){

    $r = $obj->getAvailability();

     echo "<table width = 50% border = '1'>

    <tr>
      <td style='background-color:#332266  ; color:white'><b>AVAILABILITY/b></td>
      <td style='background-color:#332266  ; color:white'><b>USER ID</b></td>
      <td style='background-color:#332266  ; color:white'><b>FIRSTNAME</b></td>
      <td style='background-color:#332266  ; color:white'><b>LASTNAME</b></td>

    </tr>";


  //  echo "<table width = 50% border='2'>";
    while($row=$obj->fetch()){
    // $row=$obj->fetch();

    if ($row['availability'] == "0"){
      $available = "In the Clinic";
    }
    else {
      $available = "Not in the Clinic";
    }


    echo"<tr>

        <td>$available</td>
        <td>{$row['userID']}</td>
        <td>{$row['firstname']}</td>
        <td>{$row['lastname']}</td>

        </tr>";

    }

  //  echo "</table>";
  }


}
else if(!$r){
  echo "error getting data";
}

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
    header('Content-type: text/txt');
    header('Content-Disposition: attachment; filename="report.txt"');

    //echo $_POST['contents'];
// }


?>
</table>
</body>
</html>
