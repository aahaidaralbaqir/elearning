<?php 
	try {
		$koneksi = new PDO("mysql:host=127.0.0.1;dbname=ujian_online","root","password");		
	} catch (PDOException $e) {
		echo "Koneksi gagal".$e->getMessage();
	}

 ?>