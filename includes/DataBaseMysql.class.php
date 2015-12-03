<?php

/*
 * Author: Rafael Rocha - www.rafaelrocha.net - info@rafaelrocha.net
 * 
 * Create Date: 3-12-2015
 * 
 * Version of MYSQL_to_PHP: 1.1
 * 
 * License: LGPL 
 * 
 */
		
Class DataBaseMysql {

	public $conn;

	public function DataBaseMysql(){
		$this->conn = new mysqli("127.0.0.1", "u358413504_user", "Eisa2015", "u358413504_bd");
		if($this->conn->connect_error){
			echo "Error connect to mysql";die;
		}
	}
	
	public function RunQuery($query_tag){
		$result = $this->conn->query($query_tag) or die("Erro SQL query-> $query_tag  ". mysql_error());
		return $result;
	}

	public function TotalOfRows($table_name){
		$result = $this->RunQuery("Select * from $table_name");
		return $result->num_rows;
	}

	public function CloseMysql(){
		$this->conn->close();
	}

}

?>