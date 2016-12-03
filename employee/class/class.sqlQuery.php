<?php
class sqlQuery{
			
		var $dbServer;
		var $dbUsername;
		var $dbPassword;
		var $dbName;
		var $dbLink;
	
		/*function sqlQuery($dbServer, $dbUsername, $dbPassword, $dbName)
		{
			$this->__construct($dbServer, $dbUsername, $dbPassword, $dbName);
		}*/
		
		function __construct($dbServer, $dbUsername, $dbPassword, $dbName)
		{
			$this->dbServer = $dbServer;
			$this->dbUsername = $dbUsername;
			$this->dbPassword = $dbPassword;
			$this->dbName = $dbName;
			/*
			try
			{
				if(!$this->connect())
					throw 'not connected';
			}
			catch (Exception $e)
			{
				echo 'database not connected';
			}
			*/
			if(!$this->connect())
			{
				echo 'Couldn\'t connect to database.';
				die();
			}	
		}
		
		function connect()
		{
			$this->dbLink = mysqli_connect($this->dbServer, $this->dbUsername, $this->dbPassword,$this->dbName);
			if(!$this->dbLink)
				return false;
			else
			{
				mysqli_select_db($this->dbLink,$this->dbName);
			}
			return true;
		}	
			//insert/delete/update function
			function insert($qry) {
				mysqli_query($this->dbLink,$qry);
			}
			
			function insertGetId($qry) {
				mysqli_query($this->dbLink,$qry);
				return mysqli_insert_id($this->dbLink);
			}
			
			function querySelect($qry)
			{
				$i=0;
				$data=array();

			  $qry_result=mysqli_query($this->dbLink,$qry) or die("Query ERRORSelect >>>".mysql_error());
			  //$qry_row=mysql_fetch_assoc($qry_result);
			  while ($row=mysqli_fetch_assoc($qry_result)) {
                          $data[$i] = $row;
                          $i++;
                        }
			  return $data;
			}
			
			
			function querySelectSingle($qry)
			{
			 $qry_result=mysqli_query($this->dbLink,$qry) or die("QUERY ERRORSingle=>".mysql_error());
			 $row=mysqli_fetch_assoc($qry_result);
			  return $row;
			}
			
			function numRows($qry)
			{
			$qry_result=mysqli_query($this->dbLink,$qry) or die("QUERY ERROR2=>".mysql_error());
			$num_row=mysqli_num_rows($qry_result);
			 return $num_row;
			}
			
			
}
//$objqry=new sqlQuery('localhost','root','','employee');
?>