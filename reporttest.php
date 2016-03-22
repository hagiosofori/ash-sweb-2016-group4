<?php

/**
 *
 * @author  Ryan Moujaled <ryjaled@gmail.com>
 */

// include_once("adb.php");
require_once("report.php");
/**
 * The report class
 * The class is used to populate the reports that are automatically downloaded to the users download folder
 */

class reporttest extends PHPUnit_Framework_TestCase {

  public function testGetDrugs()
     {


    $obj=new report();
    $obj->connect();
 		$b = $obj->getDrugs();

 		$this->assertTrue($b);
     }


   public function testGetTools()
      {


     $obj=new report();
     $obj->connect();
      $b = $obj->getTools();

      $this->assertTrue($b);
      }

      public function testGetAvailability()
         {


        $obj=new report();
        $obj->connect();
         $b = $obj->getAvailability();

         $this->assertTrue($b);
         }
    }
 ?>
