<?php
class Database
{
	private $host = "localhost";
	private $db_username = "root";
	private $db_password = "";
	private $db_name = "oop_auth";
	public $pdo;

	public function __construct()
	{
		if (!isset($this->pdo)) {
			try
		    {
		        $dbconect = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->db_username, $this->db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));				
		    }
		    catch (PDOException $e)
		    {
				$error_message = $e->getMessage();
				echo $error_message;
				exit();
		    }
		}
	}
}
 ?>