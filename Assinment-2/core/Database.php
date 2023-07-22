<?php 
class Database{
	public $conn;

	public function __construct()
	{
		$host = "localhost";
		$dbUser = "root";
		$dbPass = "";
		$dbName = "class7_php_crud";

		try {
		  $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPass);
		  // set the PDO error mode to exception
		
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}

	public function exec($sql)
	{
		$statement = $this->conn->prepare($sql);
		$statement->execute();
	}

	public function fetch($sql)
	{
		$statement = $this->conn->prepare($sql);
		$statement->execute();
		return $statement->fetchAll();
	}
}


 ?>