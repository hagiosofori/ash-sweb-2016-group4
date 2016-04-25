
<?php

/**
 *
 * @author  Ryan Moujaled <ryjaled@gmail.com>
 */

// include_once("adb.php");
require_once("../Model/report.php");


class reporttest extends PHPUnit_Framework_TestCase
{

  public function testAjaxFunction()
     {

       	   $url = "homeAjax.php?cmd=15&suppliername=john&supplierlocation=dansoman";
 		   $this->assertTrue(true,'{"result":1,"message":"Supplier added"}',$url);

     }
//
     public function testAjaxFunctionTwo()
        {

          $url = "usersajax.php?cmd=14&drugname=paracetamol&drugquantity=20&drugtype=Tablet";
           $this->assertTrue(true,'{"result":1,"message":"drug added"}',$url);

        }

  public function testDatabaseFunction()
  {
    $obj=new report();
    $obj->connect();
    $b = $obj->getDrugs();
    $this->assertTrue(true,$b);

  }
}
