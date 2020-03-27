<?php

class Post {
	private $koneksi;
	private $table = 'wilayah_2018';

	public $id;
	public $kode;
	public $nama;

	public function __construct($db){
		$this->koneksi = $db;
	}

	public function read(){
		$query = 'SELECT * FROM wilayah.wilayah_2018';

	$stmt = $this->koneksi->prepare($query);
	
	$stmt->execute();

	return $stmt;

	} 

}


?>