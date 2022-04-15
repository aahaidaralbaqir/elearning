<?php 
	include '../../../config/koneksi.php';
	$id_soal = $_GET["id_soal"];
	$query = $koneksi->prepare("DELETE FROM `soal` WHERE `id_soal` = '$id_soal'");
	if($query->execute()){
		echo "<script>alert('Data soal berhasil di hapus '); window.location='../../index.php?module=soal'</script>";
	}
 ?>