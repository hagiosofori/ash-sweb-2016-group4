<html>
  <head>
    <title>Sign Up</title>
      <link rel="stylesheet" type="text/css" href="../css/header.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body class="formpage">
    <div style="background-color">
			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
			<ul>
				<li><a href='#'>Home</a></li>
				<li><a href='#'>Person</a></li>
				<li><a href='#'>People</a></li>
			</ul>
		</div>
    <div><h1 class="instruction">Create a new User</h1></div>
        <div class="form_back">
          <!-- Form used to collect information about the user-->
          <form class="information"  action="" method="GET" onsubmit='validate()'>
            <input style="width:56%" type="text" name="username" placeholder="Username"/>
            <input style="width:45%" type="text" name="firstname" placeholder="Firstname"/>
            <input style="width:40%" type="text" name="lastname" placeholder="Lastname"/>
            <input style="width:48%" type="password" name="password" placeholder="Password"/>
            <input style="width:48%" type="text" name="email" placeholder="Email"/>
          <!--  <?php
              $adminID=$_REQUEST['adminID'];
              echo"<input type='hidden' name='adminID' value='$adminID'>";
            ?>-->

            <div class="input_options">
              User Type: <input type="radio" name="userType" value="1" >
              <label >Admin</label>
              <input  type="radio" name="userType" value="0" >
              <label >User</label>
            </div>
            <button class="buttonAdd" type="submit" name="signUp">Add User</button>
            <a class='button' href='displayUser.php'>Return to Users</a>
          </form>
        </div>

        <footer>
           <span style="float:left"><img id="imageshape" src="../img/logo.png"/></span>
           <span style="margin-bottom:4%; margin-top:4%;"><p style="padding-top:1%;">Contact us</p>
           <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
           </span>
        		 <div id="footertext" style="padding-left:2% float:right;">
                    &copy; 2016 Copyright Clinic Tool</span>
                    <span style="color:#515151;padding-left:2%;">All rights reserved<span>

                  	</div>

        		</footer>

  </body>
</html>
