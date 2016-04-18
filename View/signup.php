<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../Script/jquery-1.12.1.js"></script>
    <script type="text/javascript" src="../Script/Userajax.js"></script>
    <?php session_start(); ?>
  </head>

  <body class="formpage">
      <div id="wrapper">
  			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
  			<ul>
  				<li><a href='#'>Home</a></li>
  				<li><a href='#'>Person</a></li>
  				<li><a href='#'>People</a></li>
  			</ul>

        <div class="form_back">
          <!-- Form used to collect information about the user-->
          <form class="information"  action="" method="POST" onsubmit='validate()'>
            <input id="username" style="width:56%" type="text" name="username" placeholder="Username"/>
            <input id="firstname" style="width:45%" type="text" name="firstname" placeholder="Firstname"/>
            <input id= "lastname" style="width:40%" type="text" name="lastname" placeholder="Lastname"/>
            <input id="password" style="width:48%" type="password" name="password" placeholder="Password"/>
            <input id="email" style="width:48%" type="text" name="email" placeholder="Email"/>
            <div class="input_options">
              User Type:
              <input id="Admin" type="radio" name="userType" >
              <label >Admin</label>
              <input id="User" type="radio" name="userType" >
              <label >User</label>
            </div>
          </form>
          <button ondblclick="addUser()" class="buttonAdd" name="signUp">Add User</button>
          <a class='button' href='displayUser.php'>Return to Users</a>
        </div>
        <div class="push"></div>
      </div>

      <div class ="footer">
       <span style="float:left;margin-top:2%"><img id="imageshape" src="../img/logo.png"/></span>
       <span style=" "><p style="padding-top:2%;">Contact us</p>
         <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
       </span>
       <div id="footertext" style="padding-left:2% float:right;">
            &copy; 2016 Copyright Clinic Tool</span>
          <span style="color:#515151;padding-left:2%;">All rights reserved<span>
       </div>
      </div>

  </body>
</html>
