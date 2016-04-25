<?php
	//check command
	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			editUserName();		//if cmd=1 the call delete
			break;
    case 2:
      editFirstName();
      break;
		case 3:
			editLastName();
			break;
		case 4:
		  deleteUser();
		  break;
		case 5:
			addNewUser();
			break;
		case 6:
			login();
			break;
		case 7:
			addNewDrug();
			break;
		case 8:
			addNewTool();
			break;
		case 9:
			addNewSupplier();
			break;
		default:
			echo "wrong cmd";	//change to json message
			break;
	}

/**
*	@return echo's JSON for confirmation of a drug added or a drug not added.
* The function, when called, adds drug information to the database.
**/
		function addNewDrug(){
				include("../Model/drugs.php");
				$drug=new drugs();
				if(!isset($_REQUEST['drugname'])){
					echo "drugId not given";
					exit();
				}
				$drugname=$_REQUEST['drugname'];
				$drugquantity=$_REQUEST['drugquantity'];
				$drugsupplier=$_REQUEST['drugsupplier'];
				$drugtype=$_REQUEST['drugtype'];
				$verify=$drug->addDrug($drugname,$drugquantity,$drugsupplier,1,"Drugs");
				if($verify==false){
					echo'{"result":0,"message":"Drug not added"}';
				}
				else{
					echo'{"result":1,"message":"Drug added"}';
				}
			}

/**
*	@return echo's JSON for confirmation of a tool added or a tool not added.
* The function, when called, adds tool information to the database.
**/
		function addNewTool(){
			include("../Model/tools.php");
			$tool=new tools();
			if(!isset($_REQUEST['toolname'])){
				echo "Tool ID is not given";
				exit();
			}
			$toolname=$_REQUEST['toolname'];
			$toolquantity=$_REQUEST['toolquantity'];
			$toolsupplier=$_REQUEST['toolsupplier'];
			$verify=$tool->addTool($toolname,$toolquantity,$toolsupplier,"Tools","Tools");
			if($verify==false){
				echo'{"result":0,"message":"Tool not added"}';
			}
			else{
				echo'{"result":1,"message":"Tool added"}';
			}
		}

/**
*	@return echo's JSON for confirmation of a tool added or a tool not added.
* The function, when called, adds supplier information to the database.
**/
		function addNewSupplier(){
			include("../Model/suppliers.php");
			$suppliers=new suppliers();
			if(!isset($_REQUEST['suppliername'])){
				echo "Supplier ID is not given";
				exit();
			}
			$suppliername=$_REQUEST['suppliername'];
			$supplierlocation=$_REQUEST['supplierlocation'];
			$verify=$suppliers->addSuppliers($suppliername,$supplierlocation);
			if($verify==false){
				echo'{"result":0,"message":"Supplier not added"}';
			}
			else{
				echo'{"result":1,"message":"Supplier added"}';
			}
		}
?>
