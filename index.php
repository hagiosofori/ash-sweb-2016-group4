<html>
<!--Author: Kwabena Boohene-->
  <head>
    <title>Login</title>
  </head>

  <body>
        <h2>Ashesi Clinic</h2>
        <h5>Inventory Management System</h5>
          <!--Form to collect information to login-->
            <form action="" method="GET" onsubmit='validate()'>
              <div class="username">Username: <input type="text" name="username" value=""/>  </div>
              <div class="password">Password:<input type="password" name="password" value=""/></div>
              <button class="btn waves-effect waves-light" type="submit" name="Login">Log In</button>


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

                echo"<button class='btn waves-effect waves-light' type='submit' name='Password'>
                  <a class='bt' href ='Controller/email.php?email={$email['email']}'>
                  Forgot your password?</a>
                </button>";

                //Displays the whether user exists or not
                if($verify==false){
                  echo"User does not exist";
                }
                else{
                  echo "verified";
                  header("Location:View/homepage.php");
                  exit();
                }

                ?>
              </form>
  </body>
</html>
