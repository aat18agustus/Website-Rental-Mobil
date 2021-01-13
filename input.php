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
            <h3 class="card-title">Tambah Data</h3>
        </div>
    </div>
    <!-- /.card -->
    <h1 align="center" style="color:black">Input Data Pelanggan</h1>
    <fieldset style="width: 50%; margin: auto;">
        <legend style="color:white">Form Input Data</legend>

        <form action="system/simpan.php" method="post" style="color:black">
            <p>
                Nama Lengkap<br />
                <input type="text" name="nama" required />
            </p>

            <p>
                Jenis Kelamin<br />
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
                <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
            </p>

            <p>
                Alamat Lengkap<br />
                <textarea name="alamat" cols="50" required></textarea>
            </p>

            <p>
                Jenis kendaraan<br />
                <input type="radio" name="jenis_kendaraan" value="Kijang Inova" id="mobil1" onclick="sum()" /><label for="Honda Jazz">Honda Jazz</label>
                <input type="radio" name="jenis_kendaraan" value="honda Jazz" id="mobil2" onclick="sum()" /><label for="honda Jazz">honda Jazz</label>
                <input type="radio" name="jenis_kendaraan" value="Daihatsu Senia" id="mobil3" onclick="sum()" /><label for="Daihatsu Xenia">Daihatsu Xenia</label>
            </p>

            <p>
                Nomor Handphone<br />
                <input type="text" name="no_hp" required />
            </p>
            <p>
                <tr>
                    <td>Tanggal Sewa</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
            </p>
            <p>
                Jaminan<br />
                <input type="text" name="jaminan" required />
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
                <td><input type="text" name="durasi" id="durasi" onkeyup="sum()"></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><input type="text" name="totalharga" id="totalharga"></td>
            </tr>
            <p>
                <input type="submit" value="Simpan" />
                <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
            </p>
        </form>
    </fieldset>
    <br />
    <center><a href="index.php" style="color:white">&Lt; Back Tabel Data Pelanggan</a></center>

</html>
</body>