<?php 

	include '../../../config/koneksi.php';
	$nip = $_POST["nip"];
	$nama_guru = $_POST["nama_guru"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$jk_guru = $_POST["jk_guru"];
	$alamat_guru = $_POST["alamat_guru"];
	$tlp_guru= $_POST["tlp_guru"];
	$query = $koneksi->prepare("INSERT INTO `guru` (`nip`, `nama_guru`, `username`, `password`, `jk_guru`, `alamat_guru`,`tlp_guru`) VALUES ('$nip', '$nama_guru', '$username', '$password', '$jk_guru', '$alamat_guru', '$tlp_guru')");
	if($query->execute()){
		echo "<script>alert('Data guru berhasil di masukan '); window.location='../../index.php?module=OpXit'</script>";
	}else{
		echo "Data guru gagal di masukan";
	}
 ?>