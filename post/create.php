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
        Tambah post
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
              <h3 class="box-title">Add Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="proses_create.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" id="author" placeholder="Nama Author">
                 </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Nama Title">
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
                  </div>
                 <div class="form-group">
                   <label for="status">Status</label><br>
                    <label><input type="radio" name="status" value="0"><br>Draft</label>
                    <label><input type="radio" name="status" value="1"><br>Publish</label>
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
             </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <a href="index.php" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i>Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i>Submit</button>
              </div>
            </form>
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