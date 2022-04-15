      <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              untuk mengikuti ulangan silahkan klik tombol "Mulai Ulangan"
          </div>
    </div>
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ULANGAN !!!</h3>
              </div>
            <div class='box-body'>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama ulangan</th>
                  <th>Durasi ulangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM `ulangan`");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                         <td><?= $no; ?></td>
                         <td><?= $data["nama_ulangan"]; ?></td>
                         <td><?= $data["durasi_ulangan"]; ?></td>
                        <td>
                          <?php 
                          //cek apakah si siswa sudah mengerjakan ulangan atau belum
                            $cekUlangan = $koneksi->prepare("SELECT * FROM `nilai` WHERE `id_ulangan` = '$data[id_ulangan]' AND `nisn` = '$_SESSION[nisn]'");
                            $cekUlangan->execute();
                            if($cekUlangan->rowCount()){
                              echo 'Sudah Ulangan';
                            }else{
                              echo "<a href='?module=token&id_ulangan=$data[id_ulangan]' class='btn btn-primary'><i class='fa fa-pencil'></i> Mulai Ulangan</a>";
                            }
                           ?>
                        </td>
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