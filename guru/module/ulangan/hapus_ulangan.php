<?php 
	include '../../../config/koneksi.php';
	$id_ulangan = $_GET["id_ulangan"];
	$query = $koneksi->prepare("DELETE FROM `ulangan` WHERE `id_ulangan` = '$id_ulangan'");
	if($query->execute()){
		echo "<script>alert('Data ulangan berhasil di hapus '); window.location='../../index.php?module=ulangan'</script>";
	}
 ?>