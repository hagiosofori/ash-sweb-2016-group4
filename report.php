
<html>
<?php
$myfile = fopen("report.txt", "w") or die("Unable to open file!");


function drugReport(){
$r = $obj->getDrugs();
if(!$r){
  echo "error getting drugs";
}

$myfile = fopen("report.txt", "a") or die("Unable to open file!");

while($row=$obj->fetch()){
  $drug = "{$row['drugID']}"+"{$row['drugName']}"+"{$row['quantity']}"+"{$row['supplierID']}"+"{$row['drugType']}";
  fwrite($myfile, $drug);
  }
  fclose($myfile)
}

function toolReport(){
$r = $obj->getTools();
if(!$r){
  echo "error getting tools";
}

$myfile = fopen("report.txt", "a") or die("Unable to open file!");

while($row=$obj->fetch()){
  $tool = "{$row['toolID']}"+"{$row['toolName']}"+"{$row['quantity']}"+"{$row['supplierID']}"+"{$row['toolType']}";
  fwrite($myfile, $tool);
  }
  fclose($myfile)
}


//might be redundant
if(isset($_GET['hello'])){
  runMyFunction();
}


function runMyFunction(){
  $myfile = fopen("report.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  $txt = "Jane Doe\n";
  fwrite($myfile, $txt);
  fclose($myfile);
}




  function getDrugs($filter=false){
		$strQuery="select drugID, drugName, quantity, supplierID, drugType from drugs ";
			// $strQuery="select * from users";
		if($filter!=false){
			$strQuery=$strQuery . " where $filter";
		}
		return $this->query($strQuery);
	}


  //He has this as a capital leter TOOLS which is different form drugs verify this.
  function getTools($filter=false){
    $strQuery="select toolID, toolName, quantity, supplierID, toolType from Tools ";
      // $strQuery="select * from users";
    if($filter!=false){
      $strQuery=$strQuery . " where $filter";
    }
    return $this->query($strQuery);
  }


  function getAvailability($filter=false){
    $strQuery="select available from userinfo";
      // $strQuery="select * from users";
    if($filter!=false){
      $strQuery=$strQuery . " where $filter";
    }
    return $this->query($strQuery);
  }


 <a href ='report.php?hello=true'>Generate</a>
</html>
