<a href="loginuser.php" style="color:black" style="margin-left: 135;">&Lt; Back</a>
<br>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarRent</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<body>
    <form action="system/sistemdaftar.php" method="post">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Pelanggan</h3>
            </div>
        </div>
        <h1 align="center" style="color:blue">APLIKASI RENTAL MOBIL</h1>
        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="Nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</body>

</html>