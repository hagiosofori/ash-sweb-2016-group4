<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/loading.css">
    <meta http-equiv="refresh" content="4; url=../index.php"/ >
    <?php
      session_start();
      session_destroy();
    ?>
    <title>Logout</title>
  </head>
  <body>
     <h1>Redirecting...</h1>
     <div class="spinner"></div>
  </body>
</html>
