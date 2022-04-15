    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              Berikut data nilai yang berhasil kami simpan di sistem kami hingga saat ini.
              <h5><?php echo date('D d M Y h:i:s'); ?></h5>
          </div>
    </div>
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data nilai</h3>
            </div>
            <div class='box-body'>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Nama Ulangan</th>
                  <th>Nilai</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT `ulangan`.`nama_ulangan`,`siswa`.`nama_siswa`,`nilai`.*
                      FROM `ulangan`
                          INNER JOIN `nilai` ON `nilai`.`id_ulangan` = `ulangan`.`id_ulangan` JOIN `siswa` ON `nilai`.`nisn` = `siswa`.`nisn`");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                         <td><?= $no; ?></td>
                         <td><?= $data["nama_siswa"]; ?></td>
                         <<td><?= $data["nama_ulangan"]; ?></td>
                         <td><?= $data["nilai"]; ?></td>
                         <td>
                           <?php 
                              if($data["nilai"] >= 70){
                                echo "LULUS";
                              }else{
                                echo "REMEDIAL";
                              }
                            ?>
                         </td>

                        </tr>

                   <?php  $no++; }
                   ?>
                </tbody>
              </table><div class="col-xs-12">
              <a href="?module=index.php" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali </a>
            </div>
              <br>
              <br>
            </div>
          </div>
        </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->