<?php
/**
*Database connection helper
*/
include_once("settings.php");
/**
* Database connection helper class
*/
class adb{
	var $db=null;
	var $result=null;
	function adb(){
	}
	/**
	*Connect to database
	*@return boolean ture if connected else false
	*/
	function connect(){

		//connect
		$this->db=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
		if($this->db->connect_errno){
			//no connection, exit
				return false;
			}
			return true;

		}
	/**
	* queries the database
	* checks if the connection variable is not null first...
	* results of the query are stored in the data variable
	* @param string query
	* @return boolean indicating whether the query was successful or not
	*/
	function query($strQuery)
	{
	//	echo $strQuery; echo " <br>";
		if($this->conn==null){
			$this->connect();
		}
		$this->data = $this->conn->query($strQuery);
		if($this->data!=null){
			return true;
		} else {
			return false;
		}
	}

	/**
	* @return one row of the results of the query
	*/
	function fetch()
	{
		if ($this->data!=null)
		{
			return $this->data->fetch_assoc();
		}else
		{
			return false;
		}
	}

	}


?>
