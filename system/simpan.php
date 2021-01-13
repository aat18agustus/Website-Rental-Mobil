<?php
include '../connect.php';

$nama        = $_POST['nama'];
$jenis        = $_POST['jenis_kelamin'];
$alamat     = $_POST['alamat'];
$jeniskendaraan    = $_POST['jenis_kendaraan'];
$durasi      = $_POST['durasi'];
$nohp  = $_POST['no_hp'];
$harga = $_POST['totalharga'];
$jaminan = $_POST['jaminan'];
$tanggal = $_POST['tanggal'];


if (isset($_POST)) {
	$sql = "INSERT INTO tabel_biodata VALUES ('', '$nama' , '$jenis' , '$alamat' , '$jeniskendaraan' ,'$nohp' , '$jaminan' ,  '$harga' ,'$durasi','$tanggal' )";
	$koneksidb->query($sql);
}

header("location:../index.php");
