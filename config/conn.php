<?php

define('db_host', 'localhost');
define('db_user', 'root');
define('db_password', '');
define('db_name', 'smogedutech');



class dbClass {

	public $host = db_host;
	public $user = db_user;
	public $password = db_password;
	public $dbname = db_name;
	public $conn;
	public $error;

	function dbConnect(){

		$this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
		if(!$this->conn){
			$this->error = 'No server connection '.$this->dbConnect()->connect_error();
		}
		// else{
		// 	echo 'Database Connection Established...';
		// }
	}
}


?>