<?php
?
/*Author Kwabena Boohene*/
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "kwabena.boohene@ashesi.edu.gh";
  $email = $_REQUEST['email'];
  $subject = "Forgotten Password";
  $comment = "Good day Administrator, please I have forgotten my password";

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  header("Location:../index.php");
  exit();
  }
  ?>
