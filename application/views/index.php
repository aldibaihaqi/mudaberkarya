<?php
$assets_location = base_url()."assets/";
$file_location = base_url()."assets/img/";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="png" sizes="16x16" href="<?php echo $file_location; ?>favicon.png">

    <title>Muda Berkarya - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $assets_location?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo $assets_location?>css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $assets_location?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('index.php/Welcome/index'); ?>">Muda Berkarya</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/index'); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/produk'); ?>">Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/about'); ?>">Tentang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/pesan'); ?>">Pesan</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $file_location ?>bg-home.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Muda Berkarya</h1>
                        <hr class="small">
                        <span class="subheading">Jual bibit ikan koi super kualitas nomor 1</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
    <!-- Projects Row -->
        <div class="row">
            <div class="col-md-12 text-left">
                <h3>
                    <p> Produk Unggulan Kami </p>
                </h3>
            </div>
        </div>
        <div class="row" >
            <?php foreach ($data_produk as $a) { ?>
                <div class="col-md-4 portfolio-item">
                <a href="<?php echo base_url('index.php/Welcome/produk_item/') . $a['id_produk']; ?>">
                    <img class="img-responsive" src="<?php echo base_url($a['path']) ?>" alt="">
                </a>
                <h3 class='pull-right'><a href="<?php echo base_url('index.php/Welcome/produk_item/') . $a['id_produk']; ?>"><?php echo $a['nama_produk'] . ' ' . $a['jenis']; ?></h3>
                <h3><?php echo $a['kode']?></a></h3>
                <p><?php echo $a['nama_produk'] . ' jenis ' . $a['jenis'] . ' ukuran ' . $a['ukuran'] .' dengan harga Rp.  '.  $a['harga'] . ' per item' ?></p>
            </div>
            <?php } ?>
        </div>



    </div>
    <!-- /.container -->

    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo $file_location ?>bg-home.png');"></div>
                <div class="carousel-caption">
                    <h2>Kualitas Top</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo $file_location ?>bg-produk.png');"></div>
                <div class="carousel-caption">
                    <h2>Harga Terjangkau</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo $file_location ?>bg-pesan.png');"></div>
                <div class="carousel-caption">
                    <h2>Pengiriman Cepat</h2>
                </div>
            </div>
        </div>

                <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <br>
    <br>
    <br>

        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                    <h3>Tentang Kami</h3>
                    <p>Kami adalah kelompok budidaya ikan hias khususnya ikan koi yang berdomisili di daerah Ngadiluwih Kabupaten Kediri.
                    Produk kami tidak hanya ikan koi saja, kami juga membudidayakan ikan lainnya seperti ikan sumatera, ikan lele, ikan cupang, dan ikan gurameh. Kelompok kami berdiri sejak tahun 2016, dan terus berkembang seiring dengan berjalannya waktu.</p>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="<?php echo $file_location ?>logo-1.png" alt="">
                </div>
            </div>
        </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo base_url('index.php/Welcome/login'); ?>">
                        <p class="copyright text-muted">Copyright &copy; Muda Berkarya 2017</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo $assets_location ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $assets_location ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo $assets_location ?>js/jqBootstrapValidation.js"></script>
    <script src="<?php echo $assets_location ?>js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo $assets_location ?>js/clean-blog.min.js"></script>

</body>

</html>
