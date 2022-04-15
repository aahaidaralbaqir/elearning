<?php 
	include '../../../config/koneksi.php';
	$nip = $_GET["nip"];
	$query = $koneksi->prepare("DELETE FROM `guru` WHERE `nip` = '$nip'");
	if($query->execute()){
		echo "<script>alert('Data guru berhasil di hapus '); window.location='../../index.php?module=OpXit'</script>";
	}
 ?>