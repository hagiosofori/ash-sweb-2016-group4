<html>
  <head>
    <?php
    //Session Started
    error_reporting(0);
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>Users</title>
    <!--Imported the needed resources-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../Script/jquery-1.12.1.js"></script>
    <script type="text/javascript" src="../Script/Userajax.js"></script>
  </head>

<!--Body of the page-->
  <body class="formpage">
    <div id="wrapper">
			<div id='logo'>
       <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
      </div>
      <!--Navbar-->
      <ul>
        <div id="links">
  				  <li><a href='hm.php'>Home</a></li>
  				  <li><a href='#'>Person</a></li>
  				  <li><a href='#'>People</a></li>
        </div>
        <!--Verification -->
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
  	         echo"<table border='0' id='nurseTable'>
  				          <tr class='head'>
  					          <td>USERNAME</td>
  					          <td>FIRSTNAME</td>
            					<td>LASTNAME</td>
            					<td>USER TYPE</td>
                      <td>EMAIL</td>
                      <td>AVAILABILITY</td>
                      <td>OPTIONS</td>
            				</tr>";
                	while($row=$user->fetch()){
                    if($_SESSION['user']['userID']==$row['userID']){
                      $available="Available";
                    }
                    else{
                      $available="Not Available";
                    }
                    if($Admin==true){
                      echo"  <tr class='content'>
                          <td ondblclick='editUserName(this,{$row['userID']})'>{$row['username']}</td>
                          <td ondblclick='editFirstName(this,{$row['userID']})'>{$row['firstname']}</td>
                          <td ondblclick='editLastName(this,{$row['userID']})'>{$row['lastname']}</td>
                          <td>{$row['userType']}</td>
                          <td>{$row['email']}</td>
                          <td>$available</td>
                          <td ><button class='del' onclick='deleteUser(this,{$row['userID']})'>
                          Delete</button></td>
                      </tr>";

                    }
                    else{
                      echo"<tr class='content'>
                          <td>{$row['username']}</td>
                          <td>{$row['firstname']}</td>
                          <td>{$row['lastname']}</td>
                          <td>{$row['userType']}</td>
                          <td>{$row['email']}</td>
                          <td>$available</td>
                          <td>Delete</td>
                      </tr>";
                    }

                  }
                  echo"</table>";
                  if($Admin==true){
                    echo"<button  id='myBtn' name='signUp' style='margin-left:37%'>Add User</button>";
                  }
                  echo"<a class='button' href='hm.php' style='margin-left:1%'>Return to homepage</a>";


            ?>
        </div>
        <!--Tool tip for editing user-->
        <div id="edit_info">
          <p>Double click <br>to edit name information</p>
        </div>
        <div class="push"></div>
      </div>

      <div id="myModal" class="modal">
        <div class="form_back">

          <!-- Form used to collect information about the user-->
          <form class="information"  action="" method="POST" onsubmit='validate()'>
            <input id="username" style="width:56%" type="text" name="username" placeholder="Username"/>
            <input id="firstname" style="width:45%" type="text" name="firstname" placeholder="Firstname"/>
            <input id= "lastname" style="width:40%" type="text" name="lastname" placeholder="Lastname"/>
            <input id="password" style="width:48%" type="password" name="password" placeholder="Password"/>
            <input id="email" style="width:48%" type="text" name="email" placeholder="Email"/>
            <div class="input_options">
              User Type:
              <input id="Admin" type="radio" name="userType" >
              <label >Admin</label>
              <input id="User" type="radio" name="userType" >
              <label >User</label>
            </div>
            <input type="button" onclick="addUser()" id="buttonAdd" name="signUp" value="Add User">
            <a class='button' href='displayUser.php'>Return to Users</a>
          </form>
        </div>
      </div>

      <!--Popup box to pick user information-->
      <script>

      var popup = document.getElementById('myModal');
      var btn = document.getElementById("myBtn");
      btn.onclick= function() {
      popup.style.display = "block";
      }
      window.onclick = function(event) {
      if (event.target == popup) {
      popup.style.display = "none";
      }
      }
      </script>
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
