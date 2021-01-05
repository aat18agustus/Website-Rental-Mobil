<?php
include 'connect.php';

if (isset($_POST)) {
	$sql = "INSERT INTO tabel_biodata VALUES ('', '$_POST[nama]','$_POST[jenis_kelamin]','$_POST[alamat]', '$_POST[jenis_kendaraan]','$_POST[no_hp]','$_POST[jaminan]',  '$_POST[harga]')";
	$koneksidb->query($sql);
}

header("location:index.php");
