<html>
    <?php
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      } else{
        session_destroy();
      }
    ?>
  <head>

    <link rel="stylesheet" type="text/css" href="../css/loading.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta http-equiv="refresh" content="4; url=../index.php"/ >
    <title>Logout</title>
  </head>

<body class="formpage">
     <h1>Redirecting...</h1>
     <div class="spinner"></div>
  </body>
</html>
