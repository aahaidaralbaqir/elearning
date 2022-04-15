    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              Berikut data guru yang berhasil kami simpan di sistem kami hingga saat ini.
              <h5><?php echo date('D d M Y h:i:s'); ?></h5>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?module=kjIop" class="btn btn-primary"><i class="fa fa-print"></i> Tambah Guru</a>
              <br><br>
              <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip </th>
                  <th>Nama guru</th>
                  <th>Username</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Telepon guru</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM guru");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $data["nip"]; ?></td>
                          <td><?= $data["nama_guru"]; ?></td>
                          <td><?= $data["username"]; ?></td>
                          <td><?= $data["jk_guru"]; ?></td>
                          <td><?= $data["alamat_guru"]; ?></td>
                          <td><?= $data["tlp_guru"]; ?></td>
                          <td><a href="module/guru/proses_hapus_guru.php?nip=<?= $data['nip']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> <a href="?module=kwaxAR&nip=<?= $data["nip"]; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                        </tr>
                   <?php  $no++; }
                   ?>
                </tbody>
              </table>
              <br>
              <br>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->