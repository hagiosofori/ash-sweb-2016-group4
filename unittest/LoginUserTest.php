<?php
  include_once("..\Model\users.php");
  class loginUserTest extends PHPUnit_Framework_TestCase{


    public function testLoginUser(){
      $user = new users();
      $username="kwabena.boohene";
      $password="raika";
      $this->assertEquals(false, $user->login($username,$password));
    }

  }
?>
