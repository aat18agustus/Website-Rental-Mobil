<a href="index.php" style="color:black" style="margin-left: 135;">&Lt; Back</a>
<br>
<a href="index1.php" style="margin-left: 5;">
    <button onClick="window.print();">Print</button>
</a>
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

<body background="icon/bg1.jpg">
    <?php
    include 'connect.php';
    ?>
    <style>
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            box-shadow: darkgrey 3px;
        }

        thead tr {
            background-color: #36c2ff;
        }
    </style>
    <br><br><br><br><br>
    <h1 align="center" style="color: #00719C">DATA PELANGGAN SEWA MOBIL</h1>
    <br />
    <table border="1" bgcolor="white">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenis Kendaraan</th>
                <th>No Hp</th>
                <th>Jaminan</th>
                <th>Harga</th>
                <th>Durasi Sewa</th>
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
                    <td><?php echo $data['jaminan'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['durasi'] ?></td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    </br>
    <br><br>
    <center>
        <p style="color:white">Copyright Kelompok saya|| Aplikasi Rental Mobil Sederhana</p>
    </center>
    <br><br><br><br><br><br><br><br><br>
</body>

</html>