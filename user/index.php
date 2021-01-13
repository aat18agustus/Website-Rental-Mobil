<?php
include("../connect.php");
session_start();

if (!$_GET["page"]) {
    header("location:index.php?page=home");
}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarRent</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body background="../icon/1.jpg">
    <!-- /.row -->
    
    <div class="col-10 col-md-12">
        <nav class="navbar navbar-expand navbar-primary navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">

                <li class="nav-item d-none d-sm-inline-block">
                    <img src="../icon/logofix.jpg"  style="width:60px;height:40px;">

                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">KATEGORI MOBIL</a>

                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="stockmobil.php" class="nav-link" style=" color: white ">STOK MOBIL</a>

                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../loginuser.php" class="nav-link" style=" color: white ">LOGOUT</a>

                </li>
                
            </ul>



        </nav>

    </div>
    <!-- card box -->
    </div>
    <div class="card card-success">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../icon/inova.jpg" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-primary text-white">Kijang Inova </h5>
                            <p color="white">Harga Rp.600.000</p>
                            <h8 class="card-title text-primary text-white">&Lt;Kapasitas 7 orang&Lt;</h8>
                            <h8 class="card-title text-primary text-white">&Lt;Bensin&Lt;</h8>
                            <h8 class="card-title text-primary text-white">&Lt;Manual&Lt;</h8>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../icon/jazz.jpg" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-primary text-white">Honda Jazz</h5>
                            <p color="white">Harga Rp.375.000 </p>
                            <h8 class="card-title text-primary text-white">&Lt;Kapasitas 4 orang&Lt;</h8>
                            <h8 class="card-title text-primary text-white">&Lt;Bensin&Lt;</h8>
                            <h8 class="card-title text-primary text-white">&Lt;Matic&Lt;</h8>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../icon/xenia1.jpg" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-primary text-white">Daihatsu Xenia</h5>
                            <p color="white">Harga Rp.525.000 </p>
                            <h8 class="card-title text-primary text-white">&Lt;Kapasitas 7 orang&Lt;</h8>
                            <h8 class="card-title text-primary text-white">&Lt;Bensin&Lt;</h8>
                            <h8 class="card-title text-primary text-white">&Lt;Manual&Lt;</h8>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../icon/apv.jpg" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-primary text-white">Segera Hadir</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>