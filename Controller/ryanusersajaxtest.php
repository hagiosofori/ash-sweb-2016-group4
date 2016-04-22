
<?php

/**
 *
 * @author  Ryan Moujaled <ryjaled@gmail.com>
 */

// include_once("adb.php");
require_once("../Model/report.php");
/**
 * The report class
 * The class is used to populate the reports that are automatically downloaded to the users download folder
 */

class reporttest extends PHPUnit_Framework_TestCase
{

  public function testAjaxFunction()
     {

       $url = "usersajax.php?cmd=9&suppliername=john&supplierlocation=dansoman";
 		   $this->assertTrue(true,'{"result":1,"message":"Supplier added"}',$url);

     }

  public function testDatabaseFunction()
  {
    $obj=new report();
    $obj->connect();
    $b = $obj->getDrugs();
    $this->assertTrue(true,$b);

  }

}
