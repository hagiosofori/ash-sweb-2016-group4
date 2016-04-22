<html>
  <head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body class="formpage">
    <div style="background-color">
			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
			<ul>
				<li><a href='#'>Home</a></li>
				<li><a href='#'>Person</a></li>
				<li><a href='#'>People</a></li>
			</ul>
		</div>
        <div class="form_backV3">

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
  	         echo"<table border='0'>
  				          <tr class='head'>
  					          <td>USERNAME</td>
  					          <td>FIRSTNAME</td>
            					<td>LASTNAME</td>
            					<td>USER TYPE</td>
                      <td>OPTIONS</td>
                      <td>EMAIL</td>
                      <td>AVAILABILITY</td>
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
                      echo"  <tr class='content'>
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
                      echo"<tr class='content'>
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
                  if($Admin==true){
                    echo"<a class='button' href='signup.php?adminID=$adminID'style='margin-left:35%'>Add new user</a>";
                  }
                  echo"<a class='button' href='homepage.php'>Return to homepage</a>";


            ?>
        </div>
      </div>
      <footer>
      	 <span style="float:left;margin-top:2%"><img id="imageshape" src="../img/logo.png"/></span>
      	 <span style=" "><p style="padding-top:2%;">Contact us</p>
      	 <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
      	 </span>
      		 <div id="footertext" style="padding-left:2% float:right;">
      						&copy; 2016 Copyright Clinic Tool</span>
      						<span style="color:#515151;padding-left:2%;">All rights reserved<span>

      						</div>

      		</footer>
  </body>
</html>
