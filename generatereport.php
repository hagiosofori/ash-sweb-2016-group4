<!--
<?php
if(!isset($_GET['st'])){
$result=$mysqli->query("select * from userinfo");

}

//searching for a whole or part of a username within the database to select a record
if($id=$_GET['st']){
  $result=$mysqli->query("select drugID, drugName, quantity, supplierID, drugType from drugs");
}
//sorting the usernames in the database by alphabetical order. 1 for Ascending and 2 for Descending.
  if($id=$_GET['sort']){

   if($id==1){
     $result=$mysqli->query("select toolID, toolName, quantity, supplierID, toolType from Tools ");
   }
   if($id==2){
     echo "some stuff to add";
    //  $result=$mysqli->query("select * from USERS ORDER by USERNAME DESC");
   }
}

if ($result->num_rows > 0) {

echo "<table border = '1'>";

  while($row = $result->fetch_assoc()) {

    echo "<tr>
              <td style='background-color:#6699ee'>{$row['USERNAME']}</td>
              <td style='background-color:#6699ee'>{$row['FIRSTNAME']}</td>
              <td style='background-color:#6699ee'>{$row['LASTNAME']}</td>
              <td style='background-color:#6699ee'>{$row['USERGROUP']}</td>
              <td style='background-color:#6699ee'>{$row['STATUS']}</td>
          </tr>";

        }

echo "</table>";

  }


?> -->

<?php

include_once("report.php");
$obj = new users();
$r = $obj->getDrugs();
if(!$r){
  echo "error getting users";
}


?>
