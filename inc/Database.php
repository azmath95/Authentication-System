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
		        $dbconect = new PDO('mysql:host='. $this->$host .',dbname='.$this->$db_name, $this->$db_username, $this->$db_password);	
		        $dbconect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $dbconect->exec("Set charecter set uf8");
		        $this->pdo = $dbconect;

		    }
		    catch (PDOException $e)
		    {
		        die('Error Connecting To DataBase'.$e->getMessage);
		    }
		}
	}
}
 ?>