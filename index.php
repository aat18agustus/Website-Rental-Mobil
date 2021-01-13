<?php
include("connect.php");
session_start();

if (!$_GET["page"]) {
    header("location:index.php?page=home");
}
?>
<a href="login.php">Logout</a>
<!DOCTYPE html>

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

<body background="icon/bg1.jpg">
    <br>
    <center>
        <img src="icon/logofix.jpg" style="width:400px;height:200px;">
    </center>>
    <h2 align="center" style="color:#00719C">APLIKASI RENTAL MOBIL</h2>


    <center>
        <h3><a href="list.php" style="color:white"> </a></h3>
    </center>
    <br />
    <?php
    include 'connect.php';
    ?>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Penyewa</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <a href="index1.php">
                                        <button>Rekap Data</button>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Jenis Kendaraan</th>
                                <th>No Hp</th>
                                <th>Tanggal Sewa</th>
                                <th>Jaminan</th>
                                <th>Harga</th>
                                <th>Durasi</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <title>Rentalmobil.com</title>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM tabel_biodata ORDER BY id";
                            $no  = 1;
                            foreach ($koneksidb->query($sql) as $data) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['jenis_kendaraan'] ?></td>
                                    <td><?php echo $data['no_hp'] ?></td>
                                    <td><?php echo $data['tanggal_sewa'] ?></td>
                                    <td><?php echo $data['jaminan'] ?></td>
                                    <td><?php echo $data['harga'] ?></td>
                                    <td><?php echo $data['durasi'] ?></td>
                                    <td align="center">
                                        <a href="edit.php?id=<?php echo $data['id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                                        &nbsp;&nbsp;
                                        <a href="system/hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    <fieldset style="width: 30%; margin-left: 135;">
        <legend style="color:red">Perhatian!!!</legend>
        <p style="color:black">
            1. Bottom edit untuk mengedit data yang salah pada tabel<br>
            2. Bottom delete untuk menghapus data pada baris kolom</p>
    </fieldset>
    <br><br>
    <br><br><br><br><br><br><br><br><br>
</body>

</html>