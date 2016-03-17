<?php
	//include_once("settings.php");

	/**
	* The class is used to connect and assit in retrieving data from the database for the report user requirements.
	*
	*/
	class adb{

	var $conn= null;//the connection to the database
	var $data= null;

	/**
	* This function is for connecting to the database
	*/
	function connect()
	{
		$this->conn = new mysqli('localhost', 'root', '', 'project');
		return $this->conn;
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
