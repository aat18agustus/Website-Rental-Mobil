<?php
include '../connect.php';
if (isset($_GET['id'])) {
    $koneksidb->query("DELETE FROM tabel_biodata WHERE id = '$_GET[id]'");
}
header("location:../index.php");
