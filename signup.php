<html>
  <head>
    <title>Sign Up</title>
  </head>
  <body>

    <!-- Form used to collect information about the user-->
    <form action="" method="GET" onsubmit='validate()'>
      <div>Username: <input type="text" name="username" value=""/></div>
      <div>Firstname: <input type="text" name="firstname" value=""/></div>
      <div>Lastname: <input type="text" name="lastname" value=""/></div>
      <div>Password: <input type="password" name="password" value=""/></div>
      <div>
        User Type: <input type="radio" name="userType" value="1"> Admin
        <input type="radio" name="userType" value="0"> User
      </div>
      <input type="submit" name="signUp" value="Sign Up">

      <?php
       //Included users class
        include_once("users.php");

        //Created instance of user object
        $user = new users();

        //Checks if username variable is available
	      if(!isset($_REQUEST['username'])){
	         exit();
	      }

        //Stores the basic user information
        $username=$_REQUEST['username'];
	      $firstname=$_REQUEST['firstname'];
	      $lastname=$_REQUEST['lastname'];
	      $password=$_REQUEST['password'];
        $type=$_REQUEST['userType'];

        //Calls the addNewUser method
        $verify = $user->addNewUser($username,$firstname,$lastname,$password,$type);

        //Displays verfication message based on result
        if($verify==true){
          echo "user added";
          /*header("Location:index.php?userType=$type");
          exit();*/
        }
        else{
          echo "User was not created";
        }
      ?>
    </form>
  </body>
</html>
