<?php 

	include '../../../config/koneksi.php';
	$nisn = $_POST["nisn"];
	$nama_siswa = $_POST["nama_siswa"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$kelas = $_POST["kelas"];
	$jk = $_POST["jk"];
	$alamat = $_POST["alamat"];
	$query = $koneksi->prepare("INSERT INTO `siswa` (`nisn`, `nama_siswa`, `username`, `password`, `kelas`, `jk_siswa`, `alamat_siswa`) VALUES ('$nisn', '$nama_siswa', '$username', '$password', '$kelas', '$jk', '$alamat')");
	if($query->execute()){
		echo "<script>alert('Data siswa berhasil di masukan '); window.location='../../index.php?module=tuvbTR'</script>";
	}else{
		echo "Data siswa gagal di masukan";
	}
 ?>