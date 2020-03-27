<?php

	class Database {

		private $host = 'localhost';
		private $db_name = 'wilayah';
		private $username = 'root';
		private $password = '';
		private $koneksi;


		//koneksi
		public function connect(){
			$this->koneksi = null;

			try {
				$this->koneksi = new PDO('mysql:host=' . $this->host . ';dbname' . $this->db_name,
				$this->username, $this->password);
				$this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo 'Koneksi Error : ' . $e->getMessage();
			}

		return $this->koneksi;
		}


	}



?>