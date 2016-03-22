<?php
include_once("adb.php");

class adbtest extends PHPUnit_Framework_TestCase
{
    public function testConnect()
    {

      include_once("adb.php");
        $a=new adb();
        $b = $a->connect();
        $this->assertTrue($b);
		  //  return $adb;

    }
	/**
	*@depends  testConnect
	*/
	// public function testQuery($adb)
	// {
	// 	$this->assertEquals(true,$adb->query("select * from users"));
	// 	return $adb;
	// }
  //
	// /**
	// *@depends testQuery
	// */
	// public function testFetch($adb)
	// {
	// 	$row=$adb->fetch();
	// 	$this->assertGreaterThan(0,count($row));
  //
	// }
}
