    <div class="col-xs-12">
    <?php 
      $id_ulangan = $_GET["id_ulangan"];
      $query =  $koneksi->prepare("SELECT * FROM `ulangan` WHERE `id_ulangan` = '$id_ulangan'");
      $query->execute();
      while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Ulangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/ulangan/proses_ubah_ulangan.php" method="POST">
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">ID ULANGAN</label>
                  <input type="text" readonly="" class="form-control" id="exampleInputPassword1" name="id_ulangan" placeholder="Id Ulangan" value="<?= $data["id_ulangan"] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">KODE TOKEN</label>
                  <input type="text" readonly="" class="form-control" id="exampleInputPassword1" name="kode_token" placeholder="Kode Token" value="<?= $data["kode_token"] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA ULANGAN</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_ulangan" placeholder="Nama Ulangan" value="<?= $data["nama_ulangan"] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">DURASI ULANGAN</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="durasi_ulangan" placeholder="Durasi Ulangan" value="<?= $data["durasi_ulangan"] ?>">
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