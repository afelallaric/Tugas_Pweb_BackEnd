<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pendaftaran_siswa';

// Koneksi ke database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}