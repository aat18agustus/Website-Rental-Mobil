<?php
# Konek ke Web Server Lokal

$koneksidb = mysqli_connect("localhost", "root", "", "rental");
if (!$koneksidb) {
    echo "Failed Connection !";
}
