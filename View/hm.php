<html>
  <head>
    <?php
      //Session started
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>Home</title>
    <!--Imported the required resources-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/tablestyle.css">

  </head>

  <body class="checkered">
    <!--Clinic Logo-->
    <div id='logo'>
      <a href="logout.php">logout</a>
      <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
    </div>
      <!--Navbar-->
       <ul>
         <div id="links">
           <li><a href='hm.php'>Home</a></li>
           <li><a href='#'>About</a></li>
           <li><a href='#'>Team</a></li>
         </div>
         <?php
          $firstname=$_SESSION["user"]["firstname"];
          $lastname=$_SESSION["user"]["lastname"];
           echo "<li id='name' style='float:right'>";
           echo  "Welcome: ".$firstname." ".$lastname;
           echo "</li>";
         ?>
       </ul>

    <!--Background for buttons-->
    <div id="backrectangle"></div>
    <div id="rectangle"></div>

    <!--link to view Inventory page-->
    <a href="">
      <div id="view_inventory"></div>
    </a>

    <!--link to add drug page-->
    <a href="adddrug_interface.php">
      <div id="add_drug"></div>
    </a>

    <!--Link to add user page-->
    <a href="addtool_interface.php">
      <div id="add_tool"></div>
    </a>

    <!--Link to add supplier page-->
    <a href="addsupplier_interface.php">
      <div id="add_supplier"></div>
    </a>

    <!--Background for second set of buttons-->
    <a href="#">
      <div id="secondback"></div>
    </a>

    <!-- Link to Users page -->
    <div id="nurseinfoback"><p style= "padding-top: 70%; text-align: center;">Check out which nurse is available!</p></div>
    <a href="displayUser.php">
      <div id="nurse_info"></div>
    </a>'

    <!-- Link to report page -->
    <div id="reportback"><p style= "padding-top: 70%; text-align: center;">Generate reports for each inventory category!</p></div>
    <a href="reportpage.html">
      <div id="report"></div>
    </a>


      <!-- Link to Feedback page -->
    <div id="feedbackback"><p style= "padding-top: 70%; text-align: center;">Contact us and tell us how to improve the clinic application!</p></div>
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
