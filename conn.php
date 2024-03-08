<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'euphoria';

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>