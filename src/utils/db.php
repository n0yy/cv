<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cv";

    $conn = new mysqli($host, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>