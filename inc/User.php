<?php
include_once 'inc/Session.php';
include 'inc/Database.php';
class User
{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}
	public function userRegitration($data)
	{
		$name = $data['name'];
		$mobile = $data['mobile'];
		$gender = $data['gender'];
		$address = $data['address'];
		$email = $data['email'];
		$password = md5($data['password']);
		$confirm_password = md5($data['confirm_password']);
		$check_email = $this->emailCheck($email);
		if ($name == "" OR $mobile == "" OR $gender == "" OR $address == "" OR $email == "" OR  $password == "") {
			$msg = "<div class='alert alert-danger'><strong>Error ! Please fillup the field.</strong></div>";
			return $msg;
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$msg = "<div class='alert alert-danger'><strong>Error ! Email not valid.</strong></div>";
			return $msg;
		}
		if ($check_email == true) {
			$msg = "<div class='alert alert-danger'><strong>Error ! Email Already Exists.</strong></div>";
			return $msg;
		}
			$sql = "INSERT INTO tb_register(name, mobile, gender, address, email, password, confirm_password) VALUES (:name, :mobile, :gender, :address, :email, :password, :confirm_password)";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':name', $name);
			$query->bindValue(':mobile', $mobile);
			$query->bindValue(':gender', $gender);
			$query->bindValue(':address', $address);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', $password);
			$query->bindValue(':confirm_password', $confirm_password);
			$result = $query->execute();
			if ($result) {
				$msg = "<div class='alert alert-success'><strong>Now you are registerd.</strong></div>";
			return $msg;
			}
			else{
			$msg = "<div class='alert alert-danger'><strong>Error ! Not registerd.</strong></div>";
			return $msg;	
			}

		}
		public function emailCheck($email)
		{
			$sql = "SELECT email FROM tb_register WHERE email = :email";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':email', $email);
			$query->execute();
			if ($query->rowCount() > 0) {
				return true;
			}
			else{
				return false;
			}
		}
	
}
 ?>