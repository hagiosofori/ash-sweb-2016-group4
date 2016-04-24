<html>
<!--Author: Kwabena Boohene-->
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="Script/jquery-1.12.1.js"></script>
    <script type="text/javascript" src="Script/Userajax.js"></script>
  </head>

  <body class="welcome">
      <div class="col-3 col-offset-6">
          <!--Form to collect information to login-->
            <form class="login" style="margin-top:30%;height:58%" action="" method="POST" onsubmit='validate()'>
              <img src="img/logo.png" style="margin-left:8%;">
              <input type="text" name="username" id="Username" placeholder="Username"/>
              <input type="password" name="password" id="Password" placeholder="Password"/>
              <input id="buttonAdd" type="button" onclick="LoginU()"  name="Login" value="Log In">
              <br><a style="margin-left:20%;" id="pwordForgot" href="" onclick="email()"></a>
              </form>
            </div>
  </body>
</html>
