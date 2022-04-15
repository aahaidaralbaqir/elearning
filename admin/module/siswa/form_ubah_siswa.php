    <div class="col-xs-12">
    <?php 
      $nisn = $_GET["nisn"];
      $query =  $koneksi->prepare("SELECT * FROM `siswa` WHERE `nisn` = '$nisn'");
      $query->execute();
      while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/siswa/proses_ubah_siswa.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NISN</label>
                  <input type="text" readonly="" class="form-control" value="<?= $data["nisn"] ?>" id="exampleInputEmail1" name="nisn" placeholder="Nisn">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA SISWA</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_siswa" placeholder="Nama Siswa" value="<?= $data["nama_siswa"] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">KELAS</label>
                  <select name="kelas" class="form-control">
                    <option value="<?= $data["kelas"]?>">[ Pilih Kelas ]</option>
                    <option value="X RPL 1">X RPL 1</option>
                    <option value="X RPL 2">X RPL 2</option>
                    <option value="XI RPL 1">XI RPL 1</option>
                    <option value="XI RPL 2">XI RPL 2</option>
                    <option value="XII RPL 1">XII RPL 1</option>
                    <option value="XII RPL 2">XII RPL 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">JENIS KELAMIN</label>
                  <select name="jk" class="form-control">
                    <option value="<?= $data["jk_siswa"]?>">[ Pilih Gender ]</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ALAMAT</label>
                 <textarea name="alamat" class="form-control"><?= $data["alamat_siswa"]; ?></textarea>
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