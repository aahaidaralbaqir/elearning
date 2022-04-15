<?php 
	require_once  '../../config/koneksi.php';
	$id_materi = $_GET["id_materi"];
	$query = $koneksi->prepare("DELETE FROM `materi` WHERE `id_materi` = '$id_materi'");
	if($query->execute()){
		echo "<script>alert('Data materi berhasil di hapus '); window.location='../../index.php?module=materi'</script>";
	}
 ?>
