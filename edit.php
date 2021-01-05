<br><br>
<html>

<body BACKGROUND="back.jpg">
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
    <h1 align="center" style="color:white">Update Data Pelanggan</h1>
    <fieldset style="width: 50%; margin: auto;">
        <legend style="color:white">Form Edit Data</legend>

        <form action="update.php" method="post" style="color:white">
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
                <?php if ($data['jenis_kendaraan'] === "pickup") : ?>
                    <input type="radio" name="jenis_kendaraan" value="pickup" id="pickup" checked /><label for="pickup">Pick Up</label>
                    <input type="radio" name="jenis_kendaraan" value="minibus" id="minibus" /><label for="minibus">Mini Bus</label>
                    <input type="radio" name="jenis_kendaraan" value="mpv" id="mpv" /><label for="mpv">MPV</label>
                <?php else : ?>
                    <input type="radio" name="jenis_kendaraan" value="pickup" id="pickup" /><label for="pickup">Pick Up</label>
                    <input type="radio" name="jenis_kendaraan" value="minibus" id="minibus" checked /><label for="minibus">Mini Bus</label>
                    <input type="radio" name="jenis_kendaraan" value="mpv" id="mpv" checked /><label for="mpv">MPV</label>
                <?php endif; ?>
            </p>

            <p>
                Nomor Handphone<br />
                <input type="text" name="no_hp" required value="<?php echo $data['no_hp']; ?>" />
            </p>

            <p>
                Jaminan<br />
                <input type="text" name="jaminan" required value="<?php echo $data['jaminan']; ?>" />
            </p>

            <p>
                harga<br />
                <?php if ($data['harga'] === "RP.375.000") : ?>
                    <input type="radio" name="harga" value=375000 id="pickup" required /><label for="pickup">Sewa (pick Up)</label>
                    <input type="radio" name="harga" value=525000 id="minibus" /><label for="minibus">Sewa (Mini Bus)</label>
                    <input type="radio" name="harga" value=600000 id="mpv" /><label for="mpv">sewa (MPV)</label>
                <?php else : ?>
                    <input type="radio" name="harga" value=375000 id="pickup" /><label for="pickup">Sewa (pick Up)</label>
                    <input type="radio" name="harga" value=525000 id="minibus" required /><label for="minibus">Sewa (Mini Bus)</label>
                    <input type="radio" name="harga" value=600000 id="mpv" checked /><label for="mpv">sewa (MPV)</label>
                <?php endif; ?>
            </p>

            <p>
                <input type="submit" value="Simpan" />
                <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
            </p>
        </form>
    </fieldset>
    <br />
    <center><a href="index.php" style="color:white">&Lt; Back Tabel data Pelanggan</a></center>
</body>

</html>