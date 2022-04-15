    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
             Berikut data siswa yang berhasil kami simpan di sistem kami hingga saat ini.
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
