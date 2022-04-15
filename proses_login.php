<?php 		
			// error_reporting(0);
			require_once 'config/koneksi.php';
 			$username = $_POST["username"];
 			$password = md5($_POST["password"]);

			$query = $koneksi->prepare("SELECT * FROM `t_user` WHERE `username`= '$username' AND `password` = '$password'");
			$query->execute();
			session_start();
			if($query->rowCount() >= 1){
					while($data = $query->fetch(PDO::FETCH_LAZY)){
							$_SESSION['username'] = $data['name'];
							$_SESSION['role']	= $data['role'];
					}

					if (!in_array($_SESSION['role'], [0,1,2]))
					{
						session_destroy();
						echo "<script>alert('Gagal Login -- Role user tidak terdaftar'); window.location='login.html'</script>";
					}
					
					
					switch ($_SESSION['role'])
					{
						case 0:
							header('location: admin/index.php');
						break;
						case 1:
							header('location: guru/index.php');
						break;
						case 2:
							header('location: siswa/index.php');
						break;
					}
			}else{
				echo "<script>alert('Gagal Login -- Username atau Password salah'); window.location='login.html'</script>";
			}
	 			
 ?>