<html>
<head></head>
<body>
  <?php
  $Admin ="";
  if ($_REQUEST['userType']==1){
    $Admin = true;
  }
  else if($_REQUEST['userType']==0){

    $Admin = false;
  }



   //Included users class
    include_once("users.php");

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
          <td><a href='userDel.php?userID={$row["userID"]}'>
          Delete</a>
          <a href='editUser.php?userID={$row["userID"]}'>
          Edit</a>
          </td>
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
  ?>
</body>
</html>
