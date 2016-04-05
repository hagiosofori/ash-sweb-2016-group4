<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body>

    <div class="row">
      <div class="col s4 offset-s4 ">
        <div class="card  z-depth-3">
          <div class="card-content">
          <!-- Form used to collect information about the user-->
          <form action="" method="GET" onsubmit='validate()'>
            <div>Username: <input type="text" name="username" value=""/></div>
            <div>Firstname: <input type="text" name="firstname" value=""/></div>
            <div>Lastname: <input type="text" name="lastname" value=""/></div>
            <div>Password: <input type="password" name="password" value=""/></div>
            <div>Email: <input type="text" name="email" value=""/></div>
            <?php
              $adminID=$_REQUEST['adminID'];
              echo"<input type='hidden' name='adminID' value='$adminID'>";
            ?>

            <div class="input_options">
              User Type: <input class="with-gap" type="radio" name="userType" value="1" id="test1">
              <label for="test1">Admin</label>
              <input class="with-gap" type="radio" name="userType" value="0" id="test2">
              <label for="test2">User</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="signUp">Add User</button>

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
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
