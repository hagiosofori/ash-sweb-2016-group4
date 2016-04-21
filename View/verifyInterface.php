<html>
  <head>
    <title>Verification</title>
  </head>

  <body>
    <!--Form to collect information to login-->
    <form action="" method="GET" onsubmit='validate()'>
      <div>Password: <input type="password" name="password" value=""/></div>
      <input type="submit" name="Verify" value="Verify">

      <?php
      //Included the user class
        include_once("../Model/users.php");

      //Created a user object
        $user = new users();

        if(!isset($_REQUEST['password'])){
          exit();		//if no data, exit
        }

        //Stores the users information
        $password=$_REQUEST['password'];

        //Calls the login methods
        $verify=$user->getType($password);
        $verify=$user->fetch();
        $user->toggleAvailability($verify['userID'],true);

        //Displays the whether user exists or not
        if($verify==false){
          echo"Wrong information";
        }
        else{
          echo "verified";
        header("Location:displayUser.php?permission={$verify["userType"]}&adminID={$verify["userID"]}");
        exit();
        }
      ?>
    </form>

  </body>
</html>
