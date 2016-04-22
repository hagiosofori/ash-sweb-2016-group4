<html>
<!--Author: Kwabena Boohene-->
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body class="Home">
      <div class="col-3 col-offset-6">
          <!--Form to collect information to login-->
            <form class="login" style="margin-top:30%;height:58%" action="" method="GET" onsubmit='validate()'>
              <img src="../img/logo.png" style="margin-left:30%;">
              <input type="text" name="username" placeholder="Username"/>
              <input type="password" name="password" placeholder="Password"/>
              <button type="submit" name="Login">Log In</button>

            <!--  <?php

                //Included the user class
                include_once("Model/users.php");

                //Created a user object
                $user = new users();

                if(!isset($_REQUEST['username'])){
                  exit();		//if no data, exit
                }

                //Stores the users information
                $username=$_REQUEST['username'];
                $password=$_REQUEST['password'];

                //Calls the login methods
                $verify=$user->login($username,$password);

                $email = $user->getEmail($username);
                $email = $user->fetch();

                echo"
                  <br> <a class='forgot' href ='Controller/email.php?email={$email['email']}'>
                  Forgot your password?</a><br>
                ";

                //Displays the whether user exists or not
                if($verify==false){
                  echo"User does not exist";
                }
                else{
                  echo "verified";
                  header("Location:View/homepage.php");
                  exit();
                }

                ?>-->
              </form>

            </div>
  </body>
</html>
