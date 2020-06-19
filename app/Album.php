<?php

namespace App;

class Album extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function input() {

		$nama = $_POST['album_nama'];
		$text = $_POST['album_text'];
		$photo_id = $_POST['photo_id'];

		$sql = " INSERT INTO tb_album (album_nama, album_text, photo_id) VALUES 
									  (:album_nama, :album_text, :photo_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("album_nama", $nama);
		$stmt->bindParam("album_text", $text);
		$stmt->bindParam("photo_id", $photo_id);
		$stmt->execute();

		return false;
		
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_album
		JOIN tb_photos ON tb_album.photo_id = tb_photos.photo_id";
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
		$sql = "SELECT * FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$nama = $_POST['album_nama'];
		$text = $_POST['album_text'];
		$photo_id = $_POST['photo_id'];
		$id = $_POST['album_id'];

		$sql = "UPDATE tb_album SET album_nama=:album_nama, album_text=:album_text, photo_id=:photo_id  WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_nama", $nama);
		$stmt->bindParam(":album_text", $text);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->bindParam(":album_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}
