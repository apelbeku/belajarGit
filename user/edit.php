<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../template/adminlte2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template/adminlte2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../template/adminlte2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/adminlte2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../template/adminlte2/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../template/adminlte2/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?php 
      include '../layout/navbar.php';
    ?>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php 
    include '../layout/sidebar.php';
  ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User
        <small>Mengedit Akun User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="index.php"><i class="fa fa-user"></i>User</a></li>
        <li class="active"><i class="fa fa-plus"></i>Tambah User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Akun User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="proses_edit.php">
                  <?php 
                    include '../koneksi.php';

                    $id       = $_GET['id'];
                    $sql      = "SELECT * FROM users WHERE id='$id'";
                    $result   = mysqli_query($konek, $sql);

                    $row      = mysqli_fetch_assoc($result);
                  ?>
                  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" id="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control" id="password" placeholder="Password">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                 </div> 
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                 </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="index.php" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i>Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i>Submit</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>  
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
    include '../layout/footer.php';
  ?>

  <!-- Control Sidebar -->


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->


<!-- ./wrapper -->

<!-- jQuery 3 -->
  <script src="../template/adminlte2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../template/adminlte2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../template/adminlte2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../template/adminlte2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../template/adminlte2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../template/adminlte2/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>