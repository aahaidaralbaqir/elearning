<?php 
	$id_ulangan = $_POST["id_ulangan"];
	$kode_token  = $_POST["kode_token"];
	$token = $_POST["token"];
	if($kode_token != $token){
		echo "<script>alert('kode token salah'); window.location='../../index.php?module=token&id_ulangan=".$id_ulangan."'</script>";
	}else{
		echo "
		<script>window.location='../../index.php?module=ulangan_ulangan&id_ulangan=".$id_ulangan."'</script>";
	}
 ?>