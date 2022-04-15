<div class="col-xs-12">
	      <div class="col-xs-12">
          <form action="?module=hasil" method="POST">
          <div class="box" style="padding: 20px; box-sizing: border-box;">
                <input type="hidden" name="id_ulangan" value="<?= $_GET["id_ulangan"]; ?>">
                  <?php 
                      $no =1;
                      $id_ulangan = $_GET["id_ulangan"];
                      $query = $koneksi->prepare("SELECT * FROM `soal` WHERE `id_ulangan` = '$id_ulangan'");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <div class="soal">
                          <p class="text-bold"><?= $no; ?>. &nbsp<?php echo $data["pertanyaan"]; ?></p>
                          <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspA. <input type="radio" name="jawabanSoal[<?= $data["id_soal"] ?>]" value="A"> 
                            <?= $data["pilihan_a"]; ?></p>
                          <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspB. <input type="radio" name="jawabanSoal[<?= $data["id_soal"] ?>]"  value="B"> 
                            <?= $data["pilihan_b"]; ?></p>
                          <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspC. <input type="radio" name="jawabanSoal[<?= $data["id_soal"] ?>]"  value="C"> 
                            <?= $data["pilihan_c"]; ?></p> 
                          <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspD. <input type="radio" name="jawabanSoal[<?= $data["id_soal"] ?>]"  value="D"> 
                            <?= $data["pilihan_d"]; ?></p>
                        </div>
                   <?php  $no++; }            
                   ?>    

                       <input type="submit" name="submitJawaban" class="btn btn-danger" value="Submit Jawaban" onclick= 'return confirm("Apakah anda yakin?")'>
            </div>
            <!-- /.box-body -->
</form>
          </div>
          <!-- /.box -->
 </div>
        <!-- /.col -->
