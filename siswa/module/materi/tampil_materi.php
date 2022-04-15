      <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
            Untuk belajar materi silahkan pilih materi yang akan anda pelajari.
          </div>
    </div>
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data materi</h3>
            </div>
            <div class='box-body'>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama materi </th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM `materi`");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                         <td><?= $no; ?></td>
                         <td><?= $data["nama_materi"]; ?></td>
                        <td><a href="?module=belajar_materi&id_materi=<?= $data["id_materi"]; ?>" class="btn btn-primary"><i class="fa fa-eye"></i> BELAJAR</i></a></td>
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