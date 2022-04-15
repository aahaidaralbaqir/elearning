<?php 

	include '../../../config/koneksi.php';
	$nip = $_POST["nip"];
	$nama_guru = $_POST["nama_guru"];
	$jk_guru = $_POST["jk_guru"];
	$alamat_guru = $_POST["alamat_guru"];
	$tlp_guru = $_POST["tlp_guru"];
	$query = $koneksi->prepare("UPDATE `guru` SET `nama_guru` = '$nama_guru', `jk_guru` = '$jk_guru', `alamat_guru` = '$alamat_guru', `tlp_guru` = '$tlp_guru' WHERE `nip` = '$nip'");
	if($query->execute()){
		echo "<script>alert('Data guru berhasil diubah '); window.location='../../index.php?module=OpXit'</script>";
	}else{
		echo "Data guru gagal diubah";
	}
 ?>