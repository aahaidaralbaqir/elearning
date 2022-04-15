<?php 
	include '../../../config/koneksi.php';
	$nisn = $_GET["nisn"];
	$query = $koneksi->prepare("DELETE FROM `siswa` WHERE `nisn` = '$nisn'");
	if($query->execute()){
		echo "<script>alert('Data siswa berhasil di hapus '); window.location='../../index.php?module=tuvbTR'</script>";
	}
 ?>