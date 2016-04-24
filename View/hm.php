<html>
  <head>

    <?php
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>Home</title>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/tablestyle.css">

  </head>

  <body class="checkered">
    <div id='logo'>
      <a href="logout.php">logout</a>
      <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
    </div>

       <ul>
         <div id="links">
         <li><a href='hm.php'>Home</a></li>
         <li><a href='#'>Person</a></li>
         <li><a href='#'>People</a></li>
       </div>
         <?php
          $firstname=$_SESSION["user"]["firstname"];
          $lastname=$_SESSION["user"]["lastname"];
           echo "<li id='name' style='float:right'>";
           echo  "Welcome: ".$firstname." ".$lastname;
           echo "</li>";
         ?>
       </ul>

    <div id="backrectangle"></div>
    <div id="rectangle"></div>

    <a href="tablepage.php">
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


    <a href="#">
      <div id="secondback"></div>
    </a>

    <!-- <a href="#"> -->
      <div id="nurseinfoback"><p style= "padding-top: 70%; text-align: center;">Check out which nurse is available!</p></div>
    <!-- </a> -->


    <a href="displayUser.php">
      <div id="nurse_info"></div>
    </a>'


    <!-- <a href="#"> -->
      <div id="reportback"><p style= "padding-top: 70%; text-align: center;">Generate reports for each inventory category!</p></div>
    <!-- </a> -->
    <a href="reportpage.html">
      <div id="report"></div>
    </a>


    <!-- <a href="#"> -->
      <div id="feedbackback"><p style= "padding-top: 70%; text-align: center;">Contact us and tell us how to improve the clinic application!</p></div>
    <!-- </a> -->

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

          <span style="color:#fffff;padding-left:2%;">All rights reserved<span>
      </div>


    </footer>
  </body>
</html>
