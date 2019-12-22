<?php 
  session_start();
  if (!isset($_SESSION['email'])) {
    header('location:../index.php');
  }
 ?>

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
        Beranda post
        <small>Bikin Project CMS</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-user"></i>User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <td>No</td>
                  <td>Author</td>
                  <td>Title</td>
                  <td>Content</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
                <?php 
                  include '../config/koneksi.php';

                  $nomor      = 1;
                  $sql        = "SELECT * FROM post";
                  $result     = mysqli_query($konek, $sql);

                  if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['content'] ?></td>
                        <td><?= $row['status'] ?></td>
                        <td>
                          <a href="edit.php?id=<?= $row['id']?>" class="btn btn-primary btn-xs">Edit</a>
                          <a href="delete.php?id=<?= $row['id']?>" onclick="javascript:return confirm('Anda yakin!!!')" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                      </tr>
                 <?php     
                    }
                  }
                 ?>
              </table>
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