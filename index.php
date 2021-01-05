<br><br>
<a href="index1.php" style="margin-left: 135;">
    <button>Masuk Print</button>
</a>
<html>

<body BACKGROUND="back.jpg">
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
    <h1 align="center" style="color:white">APLIKASI RENTAL MOBIL</h1>

    <center>
        <h3><a href="input.php" style="color:white">Tambah Data </a></h3>
    </center>
    <center>
        <h3><a href="list.php" style="color:white"> </a></h3>
    </center>
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
                    <td><?php echo $data['jaminan'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td align="center">
                        <a href="edit.php?id=<?php echo $data['id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                        &nbsp;&nbsp;
                        <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    </br>
    <fieldset style="width: 30%; margin-left: 135;">
        <legend style="color:white">Perhatian!!!</legend>
        <p style="color:white">1. bottom input data untuk menambah data pembeli<br>
            2. bottom edit untuk mengedit data yang salah pada tabel<br>
            3. bottom delete untuk menghapus data pada baris kolom</p>
    </fieldset>
    <br><br>
    <br><br><br><br><br><br><br><br><br>
</body>

</html>