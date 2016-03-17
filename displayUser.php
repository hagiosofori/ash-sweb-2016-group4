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

  
  include_once("users.php");
  $user = new users();
  $row = $user->getUser();

  	echo"<table border=1>
  				<tr>
  					<td>USERNAME</td>
  					<td>FIRSTNAME</td>
  					<td>LASTNAME</td>
  					<td>USER TYPE</td>
            <td>OPTIONS</td>
  				</tr>";
	while($row=$user->fetch()){
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

      </tr>";
    }
    else{
      echo"<tr>
          <td>{$row['username']}</td>
          <td>{$row['firstname']}</td>
          <td>{$row['lastname']}</td>
          <td>{$row['userType']}</td>
          <td>Delete, Edit</td>
      </tr>";
    }

  }
  echo"</table>";
  ?>
</body>
</html>
