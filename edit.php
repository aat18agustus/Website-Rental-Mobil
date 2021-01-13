<a href="index.php" style="color:black" style="margin-left: 135;">&Lt; Back</a>
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

<body background="icon/mobil.jpg">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Data</h3>
        </div>
    </div>
    <?php
    include 'connect.php';
    if (isset($_GET['id'])) {
        $query = $koneksidb->query("SELECT * FROM tabel_biodata WHERE id = '$_GET[id]'");
        $data  = $query->fetch_assoc();
    } else {
        echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
        exit();
    }

    if ($data === false) {
        echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
        exit();
    }
    ?>
    <h1 align="center" style="color:black">Ubah Data Pelanggan</h1>
    <fieldset style="width: 50%; margin: auto;">
        <legend style="color:white">Form Edit Data</legend>

        <form action="system/update.php" method="post" style="color:black">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <p>
                Nama Lengkap<br />
                <input type="text" name="nama" required value="<?php echo $data['nama']; ?>" />
            </p>

            <p>
                Jenis Kelamin<br />
                <?php if ($data['jenis_kelamin'] === "Laki-Laki") : ?>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" checked /><label for="laki-laki">Laki-Laki</label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
                <?php else : ?>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" checked /><label for="perempuan">Perempuan</label>
                <?php endif; ?>
            </p>

            <p>
                Alamat Lengkap<br />
                <textarea name="alamat" cols="50" required><?php echo $data['alamat']; ?></textarea>
            </p>

            <p>
                Jenis Kendaraan<br />
                <?php if ($data['jenis_kendaraan'] === "Kijang Inova") : ?>
                    <input type="radio" name="jenis_kendaraan" value="Kijang Inova" id="mobil1" onclick="sum()" checked /><label for="jazz">Kijang Inova</label>
                    <input type="radio" name="jenis_kendaraan" value="honda Jazz" id="mobil2" onclick="sum()" /><label for="honda Jazz">honda Jazz</label>
                    <input type="radio" name="jenis_kendaraan" value="Daihatsu Xenia" id="mobil3" onclick="sum()" /><label for="inova">Daihatsu Xenia</label>
                <?php else : ?>
                    <input type="radio" name="jenis_kendaraan" value="Kijang Inova" id="mobil1" onclick="sum()" /><label for="Kijang Inova">Kijang Inova</label>
                    <input type="radio" name="jenis_kendaraan" value="honda Jazz" id="mobil2" onclick="sum()" checked /><label for="honda Jazz">honda Jazz</label>
                    <input type="radio" name="jenis_kendaraan" value="Daihatsu Xenia" id="mobil3" onclick="sum()" checked /><label for="Daihatsu Xenia">Daihatsu Xenia</label>
                <?php endif; ?>
            </p>

            <p>
                Nomor Handphone<br />
                <input type="text" name="no_hp" required value="<?php echo $data['no_hp']; ?>" />
            </p>
            <p>
                <tr>
                    <td>Tanggal Sewa</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" value="<?php echo $data['tanggal_sewa']; ?>"></td>
                </tr>
            </p>
            <p>
                Jaminan<br />
                <input type="text" name="jaminan" required value="<?php echo $data['jaminan']; ?>" />
            </p>

            <script>
                function sum() {
                    var checkBox1 = document.getElementById("mobil1");
                    var checkBox2 = document.getElementById("mobil2");
                    var checkBox3 = document.getElementById("mobil3");
                    if (checkBox1.checked == true) {
                        var txtFirstNumberValue = document.getElementById('durasi').value;
                        var txtSecondNumberValue = 375000;
                        var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                        if (!isNaN(result)) {
                            document.getElementById('totalharga').value = result;
                        }
                    } else if (checkBox2.checked == true) {
                        var txtFirstNumberValue = document.getElementById('durasi').value;
                        var txtSecondNumberValue = 525000;
                        var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                        if (!isNaN(result)) {
                            document.getElementById('totalharga').value = result;
                        }
                    } else if (checkBox3.checked == true) {
                        var txtFirstNumberValue = document.getElementById('durasi').value;
                        var txtSecondNumberValue = 600000;
                        var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
                        if (!isNaN(result)) {
                            document.getElementById('totalharga').value = result;
                        }
                    }
                }
            </script>

            <tr>
                <td>Durasi Sewa/Hari</td>
                <td>:</td>
                <td><input type="text" name="durasi" id="durasi" value="<?php echo $data['durasi']; ?>" onkeyup="sum()"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><input type="text" name="totalharga" id="totalharga" value="<?php echo $data['harga']; ?>"></td>
            </tr>
            <p>
                <input type="submit" value="Simpan" />
            </p>
        </form>
    </fieldset>
    <br />
    <center><a href="index.php" style="color:white">&Lt; Back Tabel data Pelanggan</a></center>
</body>

</html>