<?php 
 			$jawaban = $_POST["jawabanSoal"];
 			$id_ulangan = $_POST["id_ulangan"];
 			$nisn = $_SESSION["nisn"];
 			$benar = 0;
 			$salah = 0;
 			if(isset($_POST["submitJawaban"])){
 				if(count($_POST["jawabanSoal"]) <= 0){
 				echo "Mohon isi jawaban dengan benar";
		 		}else{
		 				//mengecek jawaban 
		 				foreach ($jawaban as $id_soal => $isi_jawaban) {
		 					$cekJawaban = $koneksi->prepare("SELECT * FROM `soal` WHERE `id_soal` = '$id_soal'");
		 					$cekJawaban->execute();
		 					while($data = $cekJawaban->fetch(PDO::FETCH_LAZY)){
		 						if($isi_jawaban == $data["jawaban"]){
		 							$benar = $benar + 1;
		 						}else{
		 							$salah = $salah + 1;
		 						}
		 					}

		 				}

		 				// menghitung nilai 
		 				$cekJumlahSoal = $koneksi->prepare("SELECT COUNT(*) AS `jumlahSoal` FROM `soal` WHERE `id_ulangan` = '$id_ulangan'");
		 				$cekJumlahSoal->execute();
		 				while($jumlahSoal = $cekJumlahSoal->fetch(PDO::FETCH_LAZY)){
		 					//rumus menghitung nilai ulangan
		 				$nilai = $benar / $jumlahSoal["jumlahSoal"] * 100;
		 				
		 					$masukanNilai = $koneksi->prepare("INSERT INTO `nilai` (`id_nilai`,`nilai`,`id_ulangan`,`nisn`)VALUES(NULL,'$nilai','$id_ulangan','$nisn')");
							if($masukanNilai->execute()){ 

								 echo "<script>window.location='index.php?module=nilai'</script>";
							 } 		


		 				}
		 				//memasukan nilai ke tabel nilai


		 			}	
 			}else{
 			}


 			

 ?>
 <div class="col-xs-12">
 	<div class="box">
 		<p>Nilai anda : <?php echo $nilai; ?></p>
 		<p>Jawaban benar : <?php echo $benar; ?></p>
 		<p>Jawaban salah : <?php echo $salah; ?></p>
 	
              <a href="?module=nilai" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali </a>
 	</div>
 </div>