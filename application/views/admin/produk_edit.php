<?php
    $assets_location = base_url()."assets/admin/html";
    $file_location = base_url()."assets/admin/plugins";

    session_start();
    if ($_SESSION['login'] == false) {
        header("Location: login");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="png" sizes="16x16" href="<?php echo $file_location; ?> /images/favicon.png">
    <title>Muda Berkarya - Produk</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $assets_location ?> /bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo $file_location ?> /bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo $assets_location ?> /css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $assets_location ?> /css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo $assets_location ?> /css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?php echo base_url('index.php/Welcome/admin_home'); ?>">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo $file_location ?>/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo $file_location ?>/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo $file_location ?>/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo $file_location ?>/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo $file_location ?>/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION['username']; ?></b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo base_url('index.php/Welcome/admin_home'); ?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Admin/admin_profile/'). $_SESSION['username']; ?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Admin/admin_pesanan'); ?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Pesanan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Admin/admin_produk'); ?>" class="waves-effect"><i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i>Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/logout'); ?>" class="waves-effect"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Sign Out</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Produk</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('index.php/Welcome/admin_home'); ?>">Dashboard</a></li>
                            <li class="active">Produk</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="<?php echo base_url('index.php/Admin/do_edit'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Produk</label>
                                    <div class="col-md-12">
                                        <input name = "nama_produk" type="text" value="<?php echo $nama_produk?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Jenis Produk</label>
                                    <div class="col-md-12">
                                        <input name = "jenis" type="text" value="<?php echo $jenis?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Kode Produk</label>
                                    <div class="col-md-12">
                                        <input name = "kode" type="text" value="<?php echo $kode?>" class="form-control form-control-line" readonly> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Ukuran</label>
                                    <div class="col-md-12">
                                        <input name="ukuran" type="text" value="<?php echo $ukuran?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Harga</label>
                                    <div class="col-md-12">
                                        <input name ="harga" type="text" value="<?php echo $harga?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Deskripsi</label>
                                    <div class="col-md-12">
                                        <textarea name ="deskripsi" type="text" class="form-control form-control-line" rows="5"><?php echo $deskripsi?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Photo</label>
                                    <div class="col-md-12">
                                        <input name ="path" type="file" class="form-control form-control-line"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Produk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table">
                                        <tr>
                                            <th>ID PRODUK</th>
                                            <td> <?php echo $id_produk ?></td>
                                        </tr>
                                        <tr>
                                            <th>NAMA PRODUK</th>
                                            <td> <?php echo $nama_produk ?> </td>
                                        </tr>
                                        <tr>
                                            <th>JENIS PRODUK</th>
                                            <td> <?php echo $jenis ?> </td>
                                        </tr>
                                        <tr>
                                            <th>KODE PRODUK</th>
                                            <td> <?php echo $kode ?> </td>
                                        </tr>
                                        <tr>
                                            <th>UKURAN</th>
                                            <td> <?php echo $ukuran ?> </td>
                                        </tr>
                                        <tr>
                                            <th>HARGA</th>
                                            <td> <?php echo $harga ?> </td>
                                        </tr>
                                        <tr>
                                            <th>DESKRIPSI</th>
                                            <td> <?php echo $deskripsi ?> </td>
                                        </tr>
                                        <tr>
                                            <th>GAMBAR</th>
                                            <td> <img width="500" src="<?php echo base_url($path) ?> "></td>
                                        </tr>                                        
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Muda Berkarya Admin Panel</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo $file_location ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $assets_location ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo $file_location ?>/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo $assets_location ?>/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo $assets_location ?>/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $assets_location ?>/js/custom.min.js"></script>
</body>

</html>
