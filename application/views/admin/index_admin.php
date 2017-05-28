<?php
    $assets_location = base_url()."assets/admin/html";
    $file_location = base_url()."assets/admin/plugins";


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
    <title>Muda Berkarya - Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $assets_location ?> /bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo $file_location; ?>/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo $file_location; ?>/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href=".<?php echo $file_location; ?>/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo $file_location; ?>/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo $file_location; ?>/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo $assets_location; ?> /css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $assets_location; ?> /css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo $assets_location; ?> /css/colors/default.css" id="theme" rel="stylesheet">
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
                        <a class="profile-pic" href="#"> <img src="<?php echo $file_location ?>/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION['username'];?></b></a>
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
                        <h4 class="page-title">Dashboard</h4> </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->

                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>March 2017</option>
                                    <option>April 2017</option>
                                    <option>May 2017</option>
                                    <option>June 2017</option>
                                    <option>July 2017</option>
                                </select>
                            </div>
                            <h3 class="box-title">List Pemesanan</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID PESAN</th>
                                            <th>NAMA</th>
                                            <th>EMAIL</th>
                                            <th>NO. HP</th>
                                            <th>JUMLAH</th>
                                            <th>SPESIFIKASI</th>
                                            <th>ALAMAT PEMESAN</th>
                                            <th>TANGGAL PEMESANAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach($data['pesanan'] as $x) { ?>
                                            <td> <?php echo $x['id_pesan'] ?> </td>
                                            <td> <?php echo $x['nama'] ?> </td>
                                            <td> <?php echo $x['email'] ?> </td>
                                            <td> <?php echo $x['phone'] ?> </td>
                                            <td> <?php echo $x['jumlah'] ?> </td>
                                            <td> <?php echo $x['spesifikasi'] ?> </td>
                                            <td> <?php echo $x['alamat'] ?> </td>
                                            <td> <?php echo $x['tgl_pesan'] ?> </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">List Produk</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID PRODUK</th>
                                            <th>NAMA PRODUK</th>
                                            <th>JENIS PRODUK</th>
                                            <th>KODE PRODUK</th>
                                            <th>UKURAN</th>
                                            <th>HARGA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach($data['produk'] as $x) { ?>
                                            <td> <?php echo $x['id_produk'] ?> </td>
                                            <td> <?php echo $x['nama_produk'] ?> </td>
                                            <td> <?php echo $x['jenis'] ?> </td>
                                            <td> <?php echo $x['kode'] ?> </td>
                                            <td> <?php echo $x['ukuran'] ?> </td>
                                            <td> <?php echo $x['harga'] ?> </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Muda Berkarya Admin Panel </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo $file_location; ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $assets_location; ?> /bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo $file_location; ?>/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo $assets_location; ?>/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo $assets_location; ?>/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo $file_location; ?>/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo $file_location; ?>/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo $file_location; ?>/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo $file_location; ?>/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo $file_location; ?>/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $assets_location; ?>/js/custom.min.js"></script>
    <script src="<?php echo $assets_location; ?>/js/dashboard1.js"></script>
    <script src="<?php echo $file_location; ?>/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
