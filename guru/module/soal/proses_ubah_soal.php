<?php 

	include '../../../config/koneksi.php';
	$id_soal = $_POST["id_soal"];
	$pertanyaan = $_POST["pertanyaan"];
	$pilihan_a = $_POST["pilihan_a"];
	$pilihan_b = $_POST["pilihan_b"];
	$pilihan_c = $_POST["pilihan_c"];
	$pilihan_d = $_POST["pilihan_d"];
	$jawaban = $_POST["jawaban"];
	$query = $koneksi->prepare("UPDATE `soal` SET `pertanyaan` = '$pertanyaan', `pilihan_a` = '$pilihan_a', `pilihan_b` = '$pilihan_b', `pilihan_c` = '$pilihan_c', `pilihan_d` = '$pilihan_d', `jawaban` = '$jawaban' WHERE `id_soal` = '$id_soal'");
	if($query->execute()){
		echo "<script>alert('Soal berhasil diubah '); window.location='../../index.php?module=soal'</script>";
	}else{
		echo "Soal gagal diubah";
	}
 ?>