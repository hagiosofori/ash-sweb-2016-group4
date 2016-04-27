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
    <!--Resources needed-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../Script/jquery-1.12.1.js"></script>
    <script type="text/javascript" src="../Script/Userajax.js"></script>
  </head>

  <body class="formpage">
    <div id="wrapper">
      <!--Ashesi Clinic Logo-->
      <div id='logo'>
        <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
        <a id='logout' href="logout.php">logout</a>
      </div>
      <!--Navbar-->
      <ul>
        <div id="links">
          <li><a href='hm.php'>Home</a></li>
          <li><a href='about.php'>About</a></li>
          <li><a href='teampage.php'>Team</a></li>
        </div>
        <!--Session Information-->
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
        echo"<table border='0' id='nurseTable' class='usertable'>
        <thead>
        <th id='head'>USERNAME</th>
        <th id='head'>FIRSTNAME</th>
        <th id='head'>LASTNAME</th>
        <th id='head'>USER TYPE</th>
        <th id='head'>EMAIL</th>
        <th id='head'>AVAILABILITY</th>
        <th id='head'>OPTIONS</th>
        </thead>";
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
          echo"<button  id='myBtn' name='signUp' style='margin-left:37%'>Add User</button>";
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

    <!--Script for popup-->
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
      <span style="float:left;margin-top:2%; margin-right:5%;"><img id="imageshape" src="../img/logo.png"/></span>
      <div>
        <span style="padding-top:10%;">
          Contact us <img style="margin-left:1%; margin-right: 1%; width: 2%; height: 15%; padding-left:60%;" src="../img/fb-art.jpg"/><br>
          Phone number:(00233)34-456-00-99<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:48%;" src="../img/NHIS.png" src= "../img/medx.jpg"/><br>
          Email: info@ashesiclinic.com<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:52%;" src="../img/medx.jpg"/> <br> </span>

        <span><br></span>
        <span><br></span>
      </div>

      <div> <span style="padding-left:2%; padding-left:25%;"> &copy; 2016 Copyright Clinic Tool</span>
        <span style="color:#fffff;padding-left:20%;">All rights reserved</span>
      </div>
    </div>
  </body>
</html>
