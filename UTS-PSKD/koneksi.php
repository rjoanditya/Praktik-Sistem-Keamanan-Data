<?php
$koneksi = mysqli_connect("localhost", "root", "", "skd_utspskd");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}