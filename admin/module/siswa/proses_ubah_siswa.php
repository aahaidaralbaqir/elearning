<?php 

	include '../../../config/koneksi.php';
	$nisn = $_POST["nisn"];
	$nama_siswa = $_POST["nama_siswa"];
	$kelas = $_POST["kelas"];
	$jk = $_POST["jk"];
	$alamat = $_POST["alamat"];
	$query = $koneksi->prepare("UPDATE `siswa` SET `nama_siswa` = '$nama_siswa', `kelas` = '$kelas', `jk_siswa` = '$jk', `alamat_siswa` = '$alamat' WHERE `nisn` = '$nisn'");
	if($query->execute()){
		echo "<script>alert('Data siswa berhasil di ubah '); window.location='../../index.php?module=tuvbTR'</script>";
	}else{
		echo "Data siswa gagal di masukan";
	}
 ?>