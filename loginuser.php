<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Mobil</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body background="icon/mobil.jpg" class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Selamat</b>Datang</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login</p>
                <form action="system/loginmasukuser.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
            <p class="login-box-msg">Belum mempunyai akun?</p>
            <a class="login-box-msg" type="submit" href="daftaruser.php" style="color:blue" style="margin-left: 135;"> Daftar Akun</a>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!-- /.login-box -->
    <div class="float-right d-none d-sm-inline-block">
        <b style="color:red;">Kelompok Mager</b>
    </div>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>