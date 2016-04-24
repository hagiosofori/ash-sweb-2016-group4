<html>
  <head>

    <?php
    //Session Started
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>Users</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../Script/jquery-1.12.1.js"></script>
    <script type="text/javascript" src="../Script/Userajax.js"></script>
  </head>

  <body class="formpage">
    <div id="wrapper">

			     <div id='logo'>
             <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
           </div>

              <ul>
                <div id="links">
				        <li><a href='#'>Home</a></li>
				        <li><a href='#'>Person</a></li>
				        <li><a href='#'>People</a></li>
              </div>
                <?php
                 $firstname=$_SESSION["user"]["firstname"];
                 $lastname=$_SESSION["user"]["lastname"];
                  echo "<li id='name' style='float:right'>";
                  echo  "Welcome: ".$firstname." ".$lastname;
                  echo "</li>";
                ?>
			        </ul>



        <div class="form_backV3">
          <?php

          $Admin ="";

          if ($_SESSION['user']['userType']==1){
            $Admin = true;
          }
          else if($_SESSION['user']['userType']==0){
            $Admin = false;
          }

          //Included users class
          include_once("../Model/users.php");

          //Created a user object
          $user = new users();
          $temp= new users();

          //Obtains all users from the database
          $row = $user->getUser();

          //Displays all users
  	         echo"<table border='0' class='usertable'>
  				          <thead>
  					          <th id='head'>USERNAME</td>
  					          <th id='head'>FIRSTNAME</td>
            					<th id='head'>LASTNAME</td>
            					<th id='head'>USER TYPE</td>
                      <th id='head'>EMAIL</td>
                      <th id='head'>AVAILABILITY</td>
                      <th id='head'>OPTIONS</td>
            				</th>";
                	while($row=$user->fetch()){
                    if($_SESSION['user']['userID']==$row['userID']){
                      $available="Available";
                    }
                    else{
                      $available="Not Available";
                    }
                    if($Admin==true){
                      echo" <tr class='content'>
                          <td id='user'ondblclick='editUserName(this,{$row['userID']})'>{$row['username']}</td>
                          <td id='user'ondblclick='editFirstName(this,{$row['userID']})'>{$row['firstname']}</td>
                          <td id='user'ondblclick='editLastName(this,{$row['userID']})'>{$row['lastname']}</td>
                          <td id='user'>{$row['userType']}</td>
                          <td id='user'>{$row['email']}</td>
                          <td id='user'>$available</td>
                          <td id='user' ><button class='del' onclick='deleteUser(this,{$row['userID']})'>
                          Delete</button></td>
                      </tr>";

                    }
                    else{
                      echo"<tr class='content'>
                          <td id='user'>{$row['username']}</td>
                          <td id='user'>{$row['firstname']}</td>
                          <td id='user'>{$row['lastname']}</td>
                          <td id='user'>{$row['userType']}</td>
                          <td id='user'>{$row['email']}</td>
                          <td id='user'>$available</td>
                          <td id='user'>Delete</td>
                      </tr>";
                    }

                  }
                  echo"</table>";
                  if($Admin==true){
                    echo"<a class='button' href='signup.php'style='margin-left:35%'>Add new user</a>";
                  }
                  echo"<a class='button' href='hm.php'>Return to homepage</a>";


            ?>
        </div>
        <!--Tool tip for editing user-->
        <div id="edit_info">
          <p>Double click <br>to edit name information</p>
        </div>
        <div class="push"></div>
      </div>
      <!--Footer -->

      <div class ="footer">
         <span style="float:left;margin-top:2%"><img id="imageshape" src="../img/logo.png"/></span>
         <span style=" "><p style="padding-top:2%;">Contact us</p>
         <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
         </span>
          <div id="footertext" style="padding-left:2% float:right;">
            &copy; 2016 Copyright Clinic Tool</span>
            <span style="color:#515151;padding-left:2%;">All rights reserved<span>
          </div>
        </div>
  </body>
</html>
