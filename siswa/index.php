<?php 
    error_reporting(0);
    session_start();
    if(empty($_SESSION[ "username"])){
        echo "<script>alert('Login terlebih dahulu'); window.location='../log.php'</script>";
    }
    require_once '../config/koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Siswa | eLearing</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b>e</b>LEARNING</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> Beranda<span class="sr-only">(current)</span></a></li>
            <li><a href="?module=materi"><i class="fa fa-paperclip"></i> Belajar Materi</a></li>
            <li><a href="?module=ulangan"><i class="fa fa-pencil"></i> Ulangan</a></li>
            <li><a href="?module=nilai"><i class="fa fa-file-word-o"></i> Data Nilai</a></li>
            
          </ul>
         
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="../assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?= ucfirst($_SESSION["username"]); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <?= ucfirst($_SESSION["username"]); ?>                     
                    <small>Siswa</small>
                  </p>
                </li>
             
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Keluar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Lorem ipsum</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">
            <?php 
               error_reporting(0);
        $module = $_GET["module"];
        $isRemoveUnderScore = str_replace('_', ' ',$module );
        echo ucfirst($isRemoveUnderScore); 
            ?>
          </a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      <div class="row">
          <?php 
              $module = $_GET["module"];
             switch ($module) {
              case  'siswa':
                  include 'module/siswa/tampil_siswa.php';
                  break;
              case  'materi':
                  include 'module/materi/tampil_materi.php';
                  break;
              case  'ulangan':
                  include 'module/ulangan/tampil_ulangan.php';
                  break;
              case 'belajar_materi':
                  include 'module/materi/belajar_materi.php';
                  break; 
              case 'ulangan_ulangan':
                  include 'module/ulangan/ulangan_ulangan.php';
                  break; 
              case 'hasil':
                  include 'module/ulangan/hasil.php';
                  break;  
              case 'nilai':
                  include 'module/nilai/tampil_nilai.php';
                  break;
              case 'token':
                  include 'module/ulangan/token.php';
                  break;      
               default:
                  include 'default.php';
                  break;
             }
         ?>
      </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> v.1 - BETA
      </div>
      <strong>Copyright &copy; <?= date("Y"); ?> <a href="https://adminlte.io">NESKAR</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>
