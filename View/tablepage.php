<html>
  <head>
    <?php
      //Start Session
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        exit();
      }
    ?>
    <title>Inventory</title>
    <!--Resources-->
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script type="text/javascript" src="../Script/jquery-1.12.1.js" > </script>
    <script type="text/javascript" src="../Script/displayscript.js"></script>

    <div style="background-color">
      <!--Ashesi Clinic Logo-->
      <div id='logo'>
        <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
        <a id='logout' href="logout.php">logout</a>
      </div>

      <!--Navbar links-->
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

    <div id="update"></div>
  </head>

  <body style="background-image: url('../img/clinicbackground.png');background-size: 200%;">
    <div id="rectangle"></div>
    <!--Buttons to display the right tables-->
    <div class="flat wrapper">
      <span onclick="getAllDrugs()"><button >Drugs</button></span>
      <span onclick="getAllTools()"><button>Tools</button></span>
      <span onclick="getAllSuppliers()"><button>Supplier</button></span>
    </div>
    <!--Search Box-->
    <div style=' width: 50%; padding-left: 40%;'>
      <input type='text' id= 'searchtxt' style='width: 25%; ' >
      <input type='submit' id='SearchButton' value = 'Search' name='searchbtn' onclick='search()'>
    </div>


    <div id="invrectangle">
      <!--Informative button-->
      <div class = "wrapper">
        <a id="addlink"> <button id="button">Please select an option above to proceed</button> </a>
      </div>
      <!--Table to display information-->
      <table id="results_table">
        <thead >
        </thead>
      </table>
      <div><form action="tablepage.php" id="displayform"></form></div>
    </div>

    <!--Footer design-->
    <footer class = "footerB">
      <span style="float:left;margin-top:2%; margin-right:5%;"><img id="imageshape" src="../img/logo.png"/></span>
      <div>
        <span style="padding-top:10%;">
          Contact us <img style="margin-left:1%; margin-right: 1%; width: 2%; height: 15%; padding-left:60%;" src="../img/fb-art.jpg"/><br>
          Phone number:(00233)34-456-00-99<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:48%;" src="../img/NHIS.png" src= "../img/medx.jpg"/><br>
          Email: info@ashesiclinic.com<img style="margin-left:1%; margin-right: 1%; width: 5%; height: 20%; padding-left:52%;" src="../img/medx.jpg"/> <br>
        </span>
        <span><br></span>
        <span><br></span>
      </div>
      <div>
        <span style="padding-left:2%; padding-left:25%;"> &copy; 2016 Copyright Clinic Tool</span>
        <span style="color:#fffff;padding-left:20%;">All rights reserved</span>
      </div>
    </div>
    </footer>
  </body>
</html>
