<?php 

	include '../../../config/koneksi.php';
	$nip = $_POST["nip"];
	$name = $_POST["name"];
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$telephone = $_POST["telephone"];
	$user_query = $koneksi->prepare("INSERT INTO `t_user` (`username`, `password`, `role`, `name`) VALUES('$username', '$password', '1', '$name')");
	if (!$user_query->execute())
	{
		echo "<script>alert('Data guru gagal di tambahkan '); window.location='../../index.php?module=kjIop'</script>";	
	}
	$id_user = $koneksi->lastInsertId();
	
	try {
		$query = $koneksi->prepare("INSERT INTO `t_teacher` (`id_user`, `nip`, `adress`, `phone`, `gender`) VALUES ('$id_user', '$nip', '$address', '$telephone', '$gender')");
		$query->execute();
		echo "<script>alert('Data guru berhasil di masukan '); window.location='../../index.php?module=OpXit'</script>";
	} catch (Exception $e) {
		echo "Data guru gagal di masukan ". $e->getMesssage();
	}
 ?>