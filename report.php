<?php

/**
 *
 * @author  Ryan Moujaled <ryjaled@gmail.com>
 */

include_once("adb.php");

/**
 * The report class
 * The class is used to populate the reports that are automatically downloaded to the users download folder
 */
class report extends adb {


/**
* Holds a query to retrieve drugs information from the database
* queries the database
* @return database query
*/
  function getDrugs(){
		$strQuery='select drugId,drugName, quantity, supplierID, drugType from drugs';


		return $this->query($strQuery);
	}


  /**
  * Holds a query to retrieve tools information from the database
  * queries the database
  * @return database query
  */
  function getTools(){
    $strQuery='select toolId, toolName, quantity, supplierId, toolType from Tools';

    return $this->query($strQuery);
  }

  /**
  * Holds a query to retrieve availability information from the database
  * queries the database
  * @return database query
  */
  function getAvailability(){
    $strQuery="select userID, firstname, lastname, availability from userinfo";

    return $this->query($strQuery);
  }

}
 ?>
