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
      deleteUser();
      break;
		default:
			echo "wrong cmd";	//change to json message
			break;
	}

  function deleteUser(){
    if(!isset($_REQUEST['uc'])){
      echo "usercode is not given";
      exit();
    }

    $Id=$_REQUEST['uc'];
    include("../Model/users.php");
    $user=new users();
    //delete the user
    if($user->deleteUser($Id)){
      echo "User deleted";
    }else{
      echo "User was not deleted.";
    }
  }

  function editUserName(){
    include_once("../Model/users.php");

		if(!isset($_REQUEST['uc'])){
			echo"No user information";
		}
		$usercode=$_REQUEST['uc'];
		$username=$_REQUEST['username'];

		$user = new users();

		$verify = $user->editUserName($username,$usercode);
		if($verify==true){
			echo"User Changed";
		}
		else{
			echo"User not changed";
		}
  }
