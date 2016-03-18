<?php
	include_once("settings.php");
	class adb{
	
	var $conn= null;//the connection to the database
	var $data= null;
	/*
	* connects to database
	*/
	function connect()
	{
		$this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
		return $this->conn;
	}
	
	/*
	* queries the database
	* checks if the connection variable is not null first...
	* results of the query are stored in the data variable
	* @param string query
	* @return boolean indicating whether the query was successful or not
	*/
	function query($strQuery)
	{
		 echo " <br>";
		if($this->conn==null){
			$this->connect();
		}
		$this->data = $this->conn->query($strQuery);
		return $this->data;
	}
	
	/*
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