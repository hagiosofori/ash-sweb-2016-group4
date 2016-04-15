<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/home.css">
      <link rel="stylesheet" type="text/css" href="../css/tablestyle.css">
      
      <div style="background-color">
  			<div id='logo'><a href='#logo'><img src='../img/logo.png'/></a></div>
  			<ul>
  				<li><a href='#'>Home</a></li>
  				<li><a href='#'>Person</a></li>
  				<li><a href='#'>People</a></li>
  			</ul>
  		</div>
      <?php
        session_start();
      ?>
  </head>

  <body>
    <div id="backrectangle"></div>
    <div id="rectangle"></div>

    <a href="">
      <div id="view_inventory"></div>
    </a>

    <a href="adddrug_interface.php">
      <div id="add_drug"></div>
    </a>

    <a href="addtool_interface.php">
      <div id="add_tool"></div>
    </a>

    <a href="addsupplier_interface.php">
      <div id="add_supplier"></div>
    </a>

    <a href="displayUser.php">
      <div id="nurse_info"></div>
    </a>'

    <a href="../Controller/generatereport.php">
      <div id="report"></div>
    </a>

    <a href="">
      <div id="feedback"></div>
    </a>

    <footer class = "footerB">
       <span style="float:left;margin-top:2%"><img id="imageshape" src="../img/logo.png"/></span>
       <span style=" "><p style="padding-top:2%;">Contact us</p>
         <p>Phone number:(00233)34-456-00-99</p> <p>Email: info@ashesiclinic.com </p>
       </span>
       <div id="footertext" style="padding-left:2% float:right;">
          &copy; 2016 Copyright Clinic Tool</span>
          <span style="color:#515151;padding-left:2%;">All rights reserved<span>
      </div>
      <a href="logout.php">logout</a>
    </footer>
  </body>
</html>
