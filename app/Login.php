<?php

namespace App;
class Login extends Controller {

	public function __construct() {
		parent:: __construct();
		session_start();
	}

	public function login()
	{
		$authorname = $_POST['iauthorname'];
		$authorpassword = $_POST['iauthorpassword'];

		$sql = "SELECT * FROM tb_author WHERE author_name = :author_name AND author_password = :author_password";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":author_name", $authorname);
		$stmt->bindParam(":author_password", $authorpassword);
		$stmt->execute();

		$data = $stmt->fetch();

		if ($stmt->rowCount() > 0){
			$_SESSION['author_name'] = $authorname;
			header("location:index.php");
		} else {
			echo "Gagal Masuk";
		}
	}
}