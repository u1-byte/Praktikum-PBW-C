<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mahasiswa_db";

    $koneksi = mysqli_connect($server, $username, $password, $database);

    if (!$koneksi){
        echo "<h1>Koneksi Anda gagal!</h1>";
    }
?>