<?php 
	include '../../../config/koneksi.php';
	$kode_token = $_POST["kode_token"];
	$durasi_ulangan = $_POST["durasi_ulangan"];
	$nama_ulangan = $_POST["nama_ulangan"];
	$query = $koneksi->prepare("INSERT INTO `ulangan` (`id_ulangan`, `kode_token`, `durasi_ulangan`,`nama_ulangan`) VALUES (NULL, '$kode_token', '$durasi_ulangan','$nama_ulangan')");
	if($query->execute()){
		echo "<script>alert('Ulangan berhasil ditambahkan '); window.location='../../index.php?module=ulangan'</script>";
	}else{
		echo "Ulangan gagal ditambahkan";
	}
 ?>