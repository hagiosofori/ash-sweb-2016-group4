<html>
    <?php
    //Session started
    error_reporting(0);
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      } else{
        //Session destroyed
        session_destroy();
      }
    ?>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--redirects to the login page after 3 seconds-->
    <title>Logout</title>
    <meta http-equiv="refresh" content="4; url=../index.php"/ >
  </head>

  <body class="formpage">
     <h1>Redirecting...</h1>
     <!--Spinner animation-->
     <div class="spinner"></div>
  </body>
</html>
