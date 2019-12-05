<?php 

class db {

	private $host     = "localhost";
	private $dbname   = "messenger";
	private $username = "root";
	private $password = "";
	protected $con;//change to protected

	public function __construct() {
		try {
			// new PDO("mysql:host=localhost;dbname=messenger","root","");
			$this->con = new PDO("mysql:host=". $this->host. ";dbname=". $this->dbname, $this->username, $this->password);
			
		}
		catch(Exception $e){
			echo "Database Connection Problem: ". $e->getMessage();
		}
	}
}



?>