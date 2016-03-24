<html>
  <head>
    <title>Verification</title>
  </head>

  <body>
    <!--Form to collect information to login-->
    <form action="" method="GET" onsubmit='validate()'>
      <div>Username: <input type="text" name="username" value=""/></div>
      <input type="submit" name="Verify" value="Verify">

      <?php
      //Included the user class
        include_once("users.php");

      //Created a user object
        $user = new users();

        if(!isset($_REQUEST['username'])){
          exit();		//if no data, exit
        }

        //Stores the users information
        $username=$_REQUEST['username'];

        //Calls the login methods
        $verify=$user->verifyData($username);
        $verify=$user->fetch();

        //Displays the whether user exists or not
        if($verify==false){
          echo"user does not exist";
        }
        else{
          echo "verified";
        header("Location:displayUser.php?userType={$verify["userType"]}");
        exit();
        }
      ?>
    </form>

  </body>
</html>
