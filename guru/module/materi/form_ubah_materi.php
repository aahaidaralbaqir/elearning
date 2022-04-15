    <div class="col-xs-12">
    <?php 
      $id_materi = $_GET["id_materi"];
      $query =  $koneksi->prepare("SELECT * FROM `materi` WHERE `id_materi` = '$id_materi'");
      $query->execute();
      while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Materi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/materi/proses_ubah_materi.php" method="POST">
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">ID MATERI</label>
                  <input type="text" readonly="" class="form-control" id="exampleInputPassword1" name="id_materi" placeholder="Id Materi" value="<?= $data["id_materi"] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA MATERI</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_materi" placeholder="Nama Materi" value="<?= $data["nama_materi"] ?>">
                </div>  
                <div class="form-group">
                  <label for="exampleInputPassword1">ISI MATERI</label>
                 <textarea name="isi_materi" class="form-control" id="exampleInputPassword1"><?= $data["isi_materi"]; ?></textarea>
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