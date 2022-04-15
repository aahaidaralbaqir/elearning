    <div class="col-xs-12">
      
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Soal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
            <form role="form" action="module/soal/proses_tambah_soal.php" method="POST">  
              <div class="form-group">
                  <label for="exampleInputPassword1">ID ULANGAN</label>
                  <select class="form-control"  name="id_ulangan" >
                    <option selected="" disabled="">[ Pilih Ulangan ]</option>
                    <?php 
                      $query = $koneksi->prepare("SELECT * FROM ulangan");
                      $query->execute();
                      while($data = $query->fetch(PDO::FETCH_LAZY)){
                        echo "<option value=".$data['id_ulangan'].">".$data['nama_ulangan']."</option>";
                      }
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">PERTANYAAN</label>
                  <textarea class="form-control" name="pertanyaan" placeholder="Pertanyaan"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">A</label>
                  <textarea class="form-control" name="pilihan_a" placeholder="A"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">B</label>
                  <textarea class="form-control" name="pilihan_b" placeholder="B"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">C</label>
                  <textarea class="form-control" name="pilihan_c" placeholder="C"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">D</label>
                  <textarea class="form-control" name="pilihan_d" placeholder="D"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">JAWABAN</label>
                  <textarea class="form-control" name="jawaban" placeholder="Jawaban"></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </form>
            </div>
          </div>
          <!-- /.box -->
        </div>