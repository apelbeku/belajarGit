<!DOCTYPE html>
<html>
<head>
  <?php 
    include '../layout/link.php';
   ?>
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
                    include '../config/koneksi.php';

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
  <?php 
    include '../layout/script.php';
   ?>
</body>
</html>