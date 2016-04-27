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
        <li><a href='teampage.php'>Team</a></li>
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
    <div class="teamitem"><img style="border-radius:6%;width:100%;margin-top:20%;  margin-left:40%;"src="../img/images.png"/><p style="margin-left:7%; width:22%; position: absolute; background-color:#dddddd;font-family:Verdana size: 40%; padding-top: 1%; padding-left: 1%; padding-bottom: 1%; border-radius: 5px;">Team Member1: Alvin Ofori<br>Computer Science student  at Ashesi University<br>Head of User Interface and User Experience<br></p></div>

    <div class="teamitem"><img style="border-radius:6%;width:100%;margin-left:20%;"src="../img/images.png"/><p style= " margin-left:3.5%; width:20%; position: absolute; background-color:#dddddd;font-family:Verdana size: 40%; padding-top: 1%; padding-left: 1%; padding-bottom: 1%; border-radius: 5px;">Team Member2: Ryan Moujaled<br>Computer Science student at Ashesi University<br>Head of Research and Development<br></p></div>

    <p></p>

    <div class="teamitem"  style="padding-top: 100px;"><img style="border-radius:6%;width:100%; margin-top:40%; margin-left:40%;"src="../img/images.png"/><p style="margin-left:7%; width:20%; position: absolute; background-color:#dddddd;font-family:Verdana  size: 40%; padding-top: 1%; padding-left: 1%; padding-bottom: 1%; border-radius: 5px;">Team Member4: Ephraim Ayite<br>M.I.S student at Ashesi University<br>Head Of Testing<br></p></div>
    <div class="teamitem"><img style="border-radius:6%;width:100%;margin-left:20%; "src="../img/images.png"/><p style="margin-left:3.5%; width:20%; position: absolute; background-color:#dddddd;font-family:Verdana  size: 40%; padding-top: 1%; padding-left: 1%; padding-bottom: 1%; border-radius: 5px;">Team Member3: Kwabena Boohene<br>M.I.S student at Ashesi University<br>Lead Project Coordinator and Product Manager<br></p></div>
    </div>

    <!--page footer-->
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
