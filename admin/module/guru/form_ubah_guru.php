    <div class="col-xs-12">
    <?php 
      $nip = $_GET["nip"];
      $query =  $koneksi->prepare("SELECT * FROM `guru` WHERE `nip` = '$nip'");
      $query->execute();
      while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/guru/proses_ubah_guru.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" readonly="" class="form-control" value="<?= $data["nip"] ?>" id="exampleInputEmail1" name="nip" placeholder="Nip">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA GURU</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_guru" placeholder="Nama Guru" value="<?= $data["nama_guru"] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">JENIS KELAMIN</label>
                  <select name="jk_guru" class="form-control">
                    <option value="<?= $data["jk_siswa"]?>">[ Pilih Gender ]</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ALAMAT</label>
                 <textarea name="alamat_guru" class="form-control"><?= $data["alamat_guru"]; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">TELEPON</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tlp_guru" placeholder="Telepon" value="<?= $data["tlp_guru"] ?>">
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