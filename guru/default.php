<div class="col-xs-12 col-lg-12">
        <div class="col-xs-12 callout callout-info">
          <h4>Hi, Selamat datang <?= $_SESSION["username"]; ?></h4>
          <p>Selamat datang di eLearning Seni Budaya</p>
        </div>

 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahSiswa` FROM `siswa`");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahSiswa"];
                  }
                 ?>
              </h3>

              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="?module=siswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahMateri` FROM `materi`");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahMateri"];
                  }
                 ?>
            </h3>

              <p>Materi</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="?module=materi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahUlangan` FROM `ulangan`");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahUlangan"];
                  }
                 ?>
              </h3>

              <p>Ulangan</p>
            </div>
            <div class="icon">
              <i class="fa fa-pencil"></i>
            </div>
            <a href="?module=ulangan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahSoal` FROM `soal`");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahSoal"];
                  }
                 ?>
                   
                 </h3>

            <p>Soal</p>
            </div>
            <div class="icon">
              <i class="fa fa-sticky-note"></i>
            </div>
            <a href="?module=soal" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </div>