<?php 

	include '../../config/koneksi.php';
	$id_materi = $_POST["id_materi"];
	$nama_materi = $_POST["nama_materi"];
	$isi_materi = $_POST["isi_materi"];
	$query = $koneksi->prepare("UPDATE `materi` SET `nama_materi` = '$nama_materi', `isi_materi` = '$isi_materi' WHERE `id_materi` = '$id_materi'");
	if($query->execute()){
		echo "<script>alert('Materi berhasil diubah '); window.location='../../index.php?module=materi'</script>";
	}else{
		echo "Materi gagal diubah";
	}
 ?>