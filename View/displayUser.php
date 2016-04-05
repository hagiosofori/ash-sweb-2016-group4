<html>
  <head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body>
    <div class="row">
      <div class="col s10 offset-s1 ">
        <div class="card   z-depth-3">
          <div class="card-content">
           <?php
            $Admin ="";

            if(!isset($_REQUEST['permission'])){
              $Admin =true;
            }

            if ($_REQUEST['permission']==1){
              $Admin = true;
              $userType=1;
            }
            else if($_REQUEST['permission']==0){
              $userType = 0;
              $Admin = false;
            }

            $adminID=$_REQUEST['adminID'];

            //Included users class
            include_once("../Model/users.php");

            //Created a user object
            $user = new users();
            $temp= new users();

            //Obtains all users from the database
            $row = $user->getUser();

            //Displays all users
  	         echo"<table class='striped , highlight'>
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
                    if($adminID==$row['userID']){
                      $available = "Available";
                    }
                    else{
                      $available="Not available";
                      $temp->toggleAvailability($row['userID']);
                    }
                    if($Admin==true){
                      echo"  <tr>
                          <td>{$row['username']}</td>
                          <td>{$row['firstname']}</td>
                          <td>{$row['lastname']}</td>
                          <td>{$row['userType']}</td>
                          <td><a href='../Controller/userDel.php?userID={$row["userID"]}&adminID=$adminID'>
                          Delete</a>
                          <a href='editUser.php?userID={$row["userID"]}&adminID=$adminID'>
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
                          <td>{$row['email']}</td>
                          <td>$available</td>
                      </tr>";
                    }

                  }
                  echo"</table>";
                  echo"<div><a href='homepage.php'>Return to homepage</a></div>";
                  if($Admin==true){
                    echo"<div><a href='signup.php?adminID=$adminID'>Add new user</a></div>";
                  }

            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
