    <div class="col-xs-12">
    <?php 
      $id_soal = $_GET["id_soal"];
      $query =  $koneksi->prepare("SELECT * FROM `soal` WHERE `id_soal` = '$id_soal'");
      $query->execute();
      while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Soal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/soal/proses_ubah_soal.php" method="POST">
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">ID SOAL</label>
                  <input type="text" readonly="" class="form-control" id="exampleInputPassword1" name="id_soal"  value="<?= $data["id_soal"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">PERTANYAAN</label>
                  <textarea class="form-control" id="exampleInputPassword1" name="pertanyaan"><?= $data["pertanyaan"] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">A</label>
                  <textarea class="form-control" id="exampleInputPassword1" name="pilihan_a"><?= $data["pilihan_a"] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">B</label>
                  <textarea class="form-control" id="exampleInputPassword1" name="pilihan_b"><?= $data["pilihan_b"] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">C</label>
                  <textarea class="form-control" id="exampleInputPassword1" name="pilihan_c"><?= $data["pilihan_c"] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">D</label>
                  <textarea class="form-control" id="exampleInputPassword1" name="pilihan_d"><?= $data["pilihan_d"] ?></textarea>
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">JAWABAN</label>
                  <textarea class="form-control" id="exampleInputPassword1" name="jawaban"><?= $data["jawaban"]; ?></textarea>
                </div>  
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      <?php }
     ?>
    
        </div>