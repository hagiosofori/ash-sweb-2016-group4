<html>
  <head>
    <?php
    //Session Start
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>Home</title>
    <!--Resources-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body class="checkered">
    <!--Ashesi Clinic Logo-->
    <div id='logo'>
      <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
      <a id='logout' href="logout.php">logout</a>
    </div>

    <!--Navbar-->
    <ul>
      <div id="links">
        <li><a href='hm.php'>Home</a></li>
        <li><a href='about.php'>About</a></li>
        <li><a href='teampage.php'>Team</a></li>
      </div>
      <?php
        $firstname=$_SESSION["user"]["firstname"];
        $lastname=$_SESSION["user"]["lastname"];
        echo "<li id='name' style='float:right'>";
        echo  "Welcome: ".$firstname." ".$lastname;
        echo "</li>";
      ?>
    </ul>

    <!--Sheet for buttons-->
    <div id="backrectangle"></div>
    <div id="rectangle"></div>

    <!--Button to view inventory-->
    <a href="tablepage.php">
      <div id="view_inventory"></div>
    </a>

    <!--Add drug Button-->
    <a href="adddrug_interface.php">
      <div id="add_drug"></div>
    </a>

    <!--Add tool button-->
    <a href="addtool_interface.php">
      <div id="add_tool"></div>
    </a>

    <!--Add supplier button-->
    <a href="addsupplier_interface.php">
      <div id="add_supplier"></div>
    </a>

    <!--Second background -->
    <a href="#">
      <div id="secondback"></div>
    </a>

    <!-- Background for nurse button -->
      <div id="nurseinfoback"><p style= "padding-top: 70%; text-align: center;">Check out which nurse is available!</p></div>
    <!-- </a> -->

    <!-- Nurse button-->
    <a href="displayUser.php">
      <div id="nurse_info"></div>
    </a>'


    <!-- Background for report button -->
      <div id="reportback"><p style= "padding-top: 70%; text-align: center;">Generate reports for each inventory category!</p></div>
    <!-- Report button -->
    <a href="reportpage.html">
      <div id="report"></div>
    </a>


    <!--Feedback background -->
      <div id="feedbackback"><p style= "padding-top: 70%; text-align: center;">Contact us and tell us how to improve the clinic application!</p></div>

    <!--Feedback button-->
    <a href="https://docs.google.com/forms/d/1U013BGsh0eMU1gmtE1CXGdm2LttBRz_smlvUW6sE2MY/viewform?embedded=true%22">
      <div id="feedback"></div>
    </a>

    <!--Footer-->
    <footer class = "footerB">
       <span style="float:left;margin-top:2%; margin-right:5%;"><img id="imageshape" src="../img/logo.png"/></span>
       <div>
         <span style="padding-top:10%;">
           Contact us <img style="margin-left:1%; margin-right: 1%; width: 2%; height: 15%; padding-left:60%;" src="../img/fb-art.jpg"/><br>
           Phone number:(00233)34-456-00-99<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:48%;" src="../img/NHIS.png" src= "../img/medx.jpg"/><br>
           Email: info@ashesiclinic.com<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:52%;" src="../img/medx.jpg"/> <br> </span>
          <span><br></span>
          <span><br></span>
       </div>
       <div>
         <span style="padding-left:2%; padding-left:25%;"> &copy; 2016 Copyright Clinic Tool</span>
         <span style="color:#fffff;padding-left:20%;">All rights reserved</span>
        </div>
    </footer>
  </body>
</html>
