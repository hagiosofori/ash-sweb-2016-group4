<html>
<head></head>
<body>
  <?php
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
        echo"  <tr>
  					<td>{$row['username']}</td>
  					<td>{$row['firstname']}</td>
  					<td>{$row['lastname']}</td>
  					<td>{$row['userType']}</td>
  					<td><a href='userDel.php?usercode={$row["userID"]}'>
  					Delete</a>
            </td>
  					<td><a href='usersedit.php?usercode={$row["userID"]}'>
  					Edit</a>
  					</td>

  			</tr>";
  }
  echo"</table>";
  ?>
</body>
</html>
