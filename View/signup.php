<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php session_start(); ?>
  </head>

  <body class="formpage">
      <div id="wrapper">
  			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
  			<ul>
  				<li><a href='#'>Home</a></li>
  				<li><a href='#'>Person</a></li>
  				<li><a href='#'>People</a></li>
  			</ul>

        <div class="form_back">
          <!-- Form used to collect information about the user-->
          <form class="information"  action="" method="GET" onsubmit='validate()'>
            <input style="width:56%" type="text" name="username" placeholder="Username"/>
            <input style="width:45%" type="text" name="firstname" placeholder="Firstname"/>
            <input style="width:40%" type="text" name="lastname" placeholder="Lastname"/>
            <input style="width:48%" type="password" name="password" placeholder="Password"/>
            <input style="width:48%" type="text" name="email" placeholder="Email"/>
            <div class="input_options">
              User Type: <input type="radio" name="userType" value="1" >
              <label >Admin</label>
              <input  type="radio" name="userType" value="0" >
              <label >User</label>
            </div>
            <button class="buttonAdd" type="submit" name="signUp">Add User</button>
            <a class='button' href='displayUser.php'>Return to Users</a>

          </form>
        </div>
        <div class="push"></div>
      </div>

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

            <?php
            //Included users class
            include_once("../Model/users.php");


            //Created instance of user object
            $user = new users();

            //Checks if username variable is available
            if(!isset($_REQUEST['username'])){
	             exit();
	            }
            else{
              if($_REQUEST['username']==""){
                echo"Please input data";
                exit();
              }
            }

            //Stores the basic user information
            $username=$_REQUEST['username'];
	          $firstname=$_REQUEST['firstname'];
	          $lastname=$_REQUEST['lastname'];
	          $password=$_REQUEST['password'];
            $email=$_REQUEST['email'];
            $type=$_REQUEST['userType'];
            $ID=$_REQUEST['adminID'];

            //Condition for pasword length
            $passwordReg="/[a-zA-Z0-9]{6,}/";

            //Checks if the password matches the condition given
            if(preg_match($passwordReg,$password)){
              //Calls the addNewUser method
              $verify = $user->addNewUser($username,$firstname,$lastname,$password,$email,$type);
            }
            else {
              $verify=false;
              //Echoes an error message
              echo'<span style="color:red;text-align:center;font-size:10pt;">
              <br>Password must be greater than 6 characters<br>
              It should contain only letters and numbers<br></span>';
            }
            if($verify!=false)
            {
              header("Location:displayUser.php?permission=1&adminID=".urlencode($ID));
              exit;
            }
            else{echo'User not added';}
            ?>


  </body>
</html>
