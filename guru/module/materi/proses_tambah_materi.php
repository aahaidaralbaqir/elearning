<?php 

	include '../../config/koneksi.php';
	$nama_materi = $_POST["nama_materi"];
	$isi_materi = $_POST["isi_materi"];
	$query = $koneksi->prepare("INSERT INTO `materi` SET `nama_materi` = '$nama_materi',`isi_materi` = '$isi_materi'");
	if($query->execute()){
		echo "<script>alert('Materi berhasil ditambahkan '); window.location='../../index.php?module=materi'</script>";
	}else{
		echo "Materi gagal ditambahkan";
	}
	var_dump($query);
 ?>