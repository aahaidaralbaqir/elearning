    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              Berikut data guru yang berhasil kami simpan di sistem kami hingga saat ini.
              <h5><?php echo date('D d M Y h:i:s'); ?></h5>
          </div>
        </div>
    <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?module=AhjsIX" class="btn btn-primary"><i class="fa fa-print"></i> Tambah Siswa</a>
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nisn </th>
                  <th>Nama siswa</th>
                  <th>Username</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM siswa");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $data["nisn"]; ?></td>
                          <td><?= $data["nama_siswa"]; ?></td>
                          <td><?= $data["username"]; ?></td>
                          <td><?= $data["kelas"]; ?></td>
                          <td><?= $data["jk_siswa"]; ?></td>
                          <td><?= $data["alamat_siswa"]; ?></td>
                          <td><a href="module/siswa/proses_hapus_siswa.php?nisn=<?= $data['nisn']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> <a href="?module=CvRXE&nisn=<?= $data["nisn"]; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                        </tr>
                   <?php  $no++; }
                   ?>
                </tbody>
              </table>
              <br>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->