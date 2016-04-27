<html>
  <head>
    <?php
      //Start session
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body class="checkered">
    <!--Ashesi Clinic Logo-->
    <div id='logo'>
      <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
      <a id='logout' href="logout.php">logout</a>
    </div>
    <!--Navigation bar-->
    <ul>
      <div id="links">
        <li><a href='hm.php'>Home</a></li>
        <li><a href='about.php'>About</a></li>
        <li><a href='#'>Team</a></li>
      </div>
      <!--Session Information-->
      <?php
        $firstname=$_SESSION["user"]["firstname"];
        $lastname=$_SESSION["user"]["lastname"];
        echo "<li id='name' style='float:right'>";
        echo  "Welcome: ".$firstname." ".$lastname;
        echo "</li>";
      ?>
    </ul>

    <!--Style for page-->
    <div style="position: absolute;
    background-color: #ffffff;
    top:35%;
    left:20%;
    width:65%;
    height:800px;
    opacity: 0.9;
    box-shadow: 0 12px 14px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); border-radius: 20px;">

    <!--Page Content-->
      <p style="font-family: helvetica; text-align: center; margin-bottom: 50px; margin-top: 50px;"><b>Ashesi Clinic Application</b></p>

      <p style="font-family: helvetica; text-align: center; margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">This application was developed to ease the task of tracking drugs, tools and suppliers.
        On a day to day basis, the nurse is left having to track these items manually. The Clinic Application eliminates this arduous task and presents the nurse with capabilities of no longer
        having to waste those precious minutes looking through the physical stack of drugs.
      </p>

      <img src='../img/homeimage.png'  style="margin-left:15%; margin-right: 1%; width: 35%; height: 30%;"/>
      <img src='../img/adddrugimage.png'  style="margin-left:1%; margin-right: 1%; width: 32%; height: 30%;"/>

      <p style="font-family: helvetica; text-align: center; margin-left: 50px; margin-right: 50px; margin-bottom: 50px; margin-top: 50px;">The nurse is met with 3 categories:
        drugs, tools and suppliers. Additionally, users can see a pre-formatted downloads on the nurse that is available in the clinic through the reports of the home screen.
        Additionally, users can download reports od drugs and tools avilable in the clinic for their supervisor without having to go through a copy and paste hassle. </p>

      <p style="font-family: helvetica; text-align: center; margin-left: 50px; margin-right: 50px; margin-bottom: 50px; margin-top: 50px;">Remember to leave  feedback on how you think we can improve
        the experience of the clinic application! <br>Thanks and enjoy!</p>

    </div>
    <!--Background for buttons-->
    <a href="#">
      <div id="secondback"></div>
    </a>

    <!-- Background for nurse button -->
    <div id="nurseinfoback"><p style= "padding-top: 70%; text-align: center;">Check out which nurse is available!</p></div>

    <!--Nurse button-->
    <a href="displayUser.php">
      <div id="nurse_info"></div>
    </a>'


    <!-- Background for report button-->
    <div id="reportback"><p style= "padding-top: 70%; text-align: center;">Generate reports for each inventory category!</p></div>
    <!--Report button-->
    <a href="reportpage.html">
      <div id="report"></div>
    </a>


    <!--Background for feedback button -->
    <div id="feedbackback"><p style= "padding-top: 70%; text-align: center;">Contact us and tell us how to improve the clinic application!</p></div>
    <!-- Feedback button -->
    <a href="https://docs.google.com/forms/d/1U013BGsh0eMU1gmtE1CXGdm2LttBRz_smlvUW6sE2MY/viewform?embedded=true%22">
      <div id="feedback"></div>
    </a>

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