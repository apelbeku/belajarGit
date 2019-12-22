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
        Edit Post
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
              <h3 class="box-title">Edit Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="proses_edit.php">
                  <?php 
                    include '../config/koneksi.php';

                    $id       = $_GET['id'];
                    $sql      = "SELECT * FROM post WHERE id='$id'";
                    $result   = mysqli_query($konek, $sql);

                    $row      = mysqli_fetch_assoc($result);
                  ?>
                  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" name="author" value="<?php echo $row['author'] ?>" class="form-control" id="author" placeholder="Nama author">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control" id="title" placeholder="Nama title">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea name="content" class="form-control" id="content" placeholder="content"><?php echo $row['content'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="status">Status</label><br>
                  <label><input type="radio" name="status" <?php echo ($row['status'])?"":"checked" ?> id="status" value="0"><br>Draft</label>
                  <label><input type="radio" name="status" <?php echo ($row['status'])?"checked":"" ?> id="status" value="1"><br>Publish</label>
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