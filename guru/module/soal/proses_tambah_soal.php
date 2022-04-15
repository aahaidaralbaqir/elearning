<?php 

	include '../../../config/koneksi.php';
	$id_ulangan = $_POST["id_ulangan"];
	$pertanyaan = $_POST["pertanyaan"];
	$pilihan_a = $_POST["pilihan_a"];
	$pilihan_b = $_POST["pilihan_b"];
	$pilihan_c = $_POST["pilihan_c"];
	$pilihan_d = $_POST["pilihan_d"];
	$jawaban = $_POST["jawaban"];
	$query = $koneksi->prepare("INSERT INTO `soal` (`id_soal`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `id_ulangan`) VALUES (NULL, '$pertanyaan', '$pilihan_a', '$pilihan_b', '$pilihan_c', '$pilihan_d', '$jawaban', '$id_ulangan')");
	if($query->execute()){
		echo "<script>alert('Soal berhasil ditambahkan '); window.location='../../index.php?module=soal'</script>";
	}else{
		echo "Soal gagal ditambahkan";
	}
 ?>