<html>
<head></head>
<body>
  <?php
  $Admin ="";

 /**
  *This aspect has been included for testing on the remote Server
  *This would be removed when final implementation occurs.
  */
  if(!isset($_REQUEST['userType'])){
      $Admin =true;
  }


  if ($_REQUEST['userType']==1){
    $Admin = true;
    $userType=1;
  }
  else if($_REQUEST['userType']==0){
    $userType = 0;
    $Admin = false;
  }


 //Included users class
  include_once("../Model/users.php");

  //Created a user object
  $user = new users();

  //Obtains all users from the database
  $row = $user->getUser();

  //Displays all users
  	echo"<table border=1>
  				<tr>
  					<td>USERNAME</td>
  					<td>FIRSTNAME</td>
  					<td>LASTNAME</td>
  					<td>USER TYPE</td>
            <td>OPTIONS</td>
            <td>EMAIL</td>
            <td>Availability</td>
  				</tr>";
	while($row=$user->fetch()){
    if($row['availability']==0){
      $available = "Available";
    }
    else{$available="Not available";}
    if($Admin==true){
      echo"  <tr>
          <td>{$row['username']}</td>
          <td>{$row['firstname']}</td>
          <td>{$row['lastname']}</td>
          <td>{$row['userType']}</td>
          <td><a href='../Controller/userDel.php?userID={$row["userID"]}'>
          Delete</a>
          <a href='editUser.php?userID={$row["userID"]}'>
          Edit</a>
          </td>
          <td>{$row['email']}</td>
          <td>$available</td>
      </tr>";
    }
    else{
      echo"<tr>
          <td>{$row['username']}</td>
          <td>{$row['firstname']}</td>
          <td>{$row['lastname']}</td>
          <td>{$row['userType']}</td>
          <td>Delete, Edit</td>
          <td>$available</td>
      </tr>";
    }

  }
  echo"</table>";
  echo"<div><a href='homepage.php'>Return to homepage</a></div>";
  ?>

</body>
</html>
