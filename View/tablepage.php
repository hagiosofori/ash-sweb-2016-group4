<html>
<head>
  <?php
    session_start();
    if(!isset($_SESSION['user'])){
      header('Location:../index.php');
      exit();
    }
  ?>
<title>Welcome

</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script type="text/javascript" src="../Script/jquery-1.12.1.js" > </script>
    <script type="text/javascript" src="../Script/displayscript.js"></script>

  <div style="background-color">
    <div id='logo'>
      <a href='hm.php'><img src='../img/logo.png' height="95%" style="margin-left:1%;"/></a>
      <a id='logout' href="logout.php">logout</a>
    </div>

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

<div id="update"></div>
</head>
<body style="background-image: url('../img/clinicbackground.png');background-size: 200%;">
<div id="rectangle"></div>

<div class="flat wrapper">
  <span onclick="getAllDrugs()"><button >Drugs</button></span>
<span onclick="getAllTools()"><button>Tools</button></span>
 <span onclick="getAllSuppliers()"><button>Supplier</button></span>
</div>

<div style=' width: 50%; padding-left: 40%;'>
  <input type='text' id= 'searchtxt' style='width: 25%; ' >
  <input type='submit' id='SearchButton' value = 'Search' name='searchbtn' onclick='search()'>
 </div>


  <div id="invrectangle">
    <div class = "wrapper">
  <a id="addlink"> <button id="button">Please select an option above to proceed</button> </a>

 </div>

  <table id="results_table">
    <thead >
    </thead>
  </table>



<div><form action="tablepage.html" id="displayform"></form></div>
  </div>
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
