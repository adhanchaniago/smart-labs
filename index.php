<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SmartLabs - Ketahui Lab Penelitian Terbaik Untukmu!</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button> <a class="navbar-brand page-scroll" href="#page-top">Smart-Labs</a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li> <a class="page-scroll" href="#services">Lab Terbaikmu</a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Bingung pilih lab penelitian?</div>
                <div class="intro-lead-in">coba saran kami!</div> <a href="#services" class="page-scroll btn btn-xl">Masuk ke Sistem Rekomendasi Lab</a> </div>
        </div>
    </header>
    <!-- Services Section -->
    <section id="services" style="
    padding-top: 35px;
    padding-bottom: 10px;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Temukan Lab Terbaik untukmu!</h2>
                    <h2>Kami butuh data nilaimu untuk mata kuliah berikut</h2>
                    <h3 class="section-subheading text-muted">Tenang, data ini tidak pernah kami rekam dan tetap jadi milikmu sepenuhnya</h3> </div>
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="proses.php" method="post">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name-login">Rangkaian Digital</label>
                                    
                                    <select name="radig" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Organisasi Komputer</label>
                                    <select name="orkom" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Sistem Operasi</label>
                                    <select name="so" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Komunikasi Data dan Jaringan Komputer</label>
                                    <select name="komdat" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name-login">Rekayasa Perangkat Lunak</label>
                                    <select name="rpl" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Sistem Informasi</label>
                                    <select name="si" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Interaksi Manusia dan Komputer</label>
                                    <select name="imk" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Metode Kuantitatif</label>
                                    <select name="metkuan" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name-login">Kecerdasan Buatan</label>
                                    <select name="ai" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Data Mining</label>
                                    <select name="daming" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name-login">Sistem Pakar</label>
                                    <select name="sispak" class="form-control" required>
                                        <option disabled selected>Input Nilai</option>
                                        <option value="A">A</option>
                                        <option value="AB">AB</option>
                                        <option value="B">B</option>
                                        <option value="BC">BC</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                            <div align="center">
                                <button style="
    margin-top: 20px;
    width: 126px;
    height: 64px;" type="submit" value="Kalkulasi" class="btn btn-primary">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!-- Theme JavaScript -->
        <script src="js/agency.min.js"></script>
    </section>
</body>

</html>