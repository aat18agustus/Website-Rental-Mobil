<?php
include("../connect.php");

$nama = $_POST["Nama"];
$username = $_POST["username"];
$password = $_POST["password"];

$insert = mysqli_query($koneksidb, "INSERT INTO user VALUES ('', '$nama', '$username', '$password')");

if ($insert) {
?>
    <script>
        alert("Pendaftaran Anggota Berhasil !");
        document.location = "../loginuser.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Pendaftaran Anggota Gagal !");
        document.location = "../daftaruser.php";
    </script>
<?php
}
?>