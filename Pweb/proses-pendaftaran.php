<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    if (mysqli_query($conn, $sql)) {
        echo "Pendaftaran berhasil! <a href='index.php'>Kembali ke halaman utama</a>";
    } else {
        echo "Pendaftaran gagal: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}