<?php 

	include '../../../config/koneksi.php';
	$id_ulangan = $_POST["id_ulangan"];
	$nama_ulangan = $_POST["nama_ulangan"];
	$durasi_ulangan = $_POST["durasi_ulangan"];
	$query = $koneksi->prepare("UPDATE `ulangan` SET `nama_ulangan` = '$nama_ulangan', `durasi_ulangan` = '$durasi_ulangan' WHERE `id_ulangan` = '$id_ulangan'");
	if($query->execute()){
		echo "<script>alert('Ulangan berhasil diubah '); window.location='../../index.php?module=ulangan'</script>";
	}else{
		echo "Ulangan gagal diubah";
	}
 ?>