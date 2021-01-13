<?php
include("../connect.php");
session_start();

$harga = $_POST["harga"];
$id = $_POST["id"];

$select = mysqli_query($koneksidb, "SELECT * FROM user WHERE $harga = 'harga' ");
$num = mysqli_num_rows($select);

if ($num == 0) {
?>
    <script>
        alert("Username atau Password Salah !");
        document.location = "../login.php";
    </script>
<?php
} else {
    while ($data = mysqli_fetch_array($select)) {
        $_SESSION["nama_lengkap"] = $data["nama"];
        $_SESSION["username"] = $data["username"];
    }
    header("location:../index.php");
}
?>