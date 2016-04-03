<html>
<!--Author: Kwabena Boohene-->
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
  </head>

  <body>

    <!--Form to collect information to login-->
    <form action="" method="GET" onsubmit='validate()'>
      <h1>Ashesi Clinic</h1>
      <h3>Inventory Management System</h3>

      <div class="username">Username: <input type="text" name="username" value=""/>  </div>
      <div class="password">Password:<input type="password" name="password" value=""/></div>
      <input type="submit" name="Login" id="submit" value="Log  In">

      <?php
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


        //Displays the whether user exists or not
        if($verify==false){
          echo"User does not exist";
        }
        else{
        echo "verified";
        header("Location:View/homepage.php");
        exit();
        }
        echo"<br><a href ='Controller/email.php?email={$email['email']}'>
          Forgot your password?</a></br>";
      ?>


    </form>
  </body>
</html>
