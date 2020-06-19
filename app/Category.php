<?php

namespace App;

class Category extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input() {

		$name = $_POST['cat_name'];
		$text = $_POST['cat_text'];

		$sql = " INSERT INTO tb_category (cat_name, cat_text) VALUES 
									  (:cat_name, :cat_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("cat_name", $name);
		$stmt->bindParam("cat_text", $text);
		$stmt->execute();

		return false;
		
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_category";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data =[];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$name = $_POST['cat_name'];
		$text = $_POST['cat_text'];
		$id = $_POST['cat_id'];

		$sql = "UPDATE tb_category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $name);
		$stmt->bindParam(":cat_text", $text);
		$stmt->bindParam(":cat_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		return false;
	}
}