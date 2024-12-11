<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "UPDATE calon_siswa SET 
                nama = '$nama', 
                alamat = '$alamat', 
                jenis_kelamin = '$jenis_kelamin', 
                agama = '$agama', 
                sekolah_asal = '$sekolah_asal' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header('Location: list-siswa.php');
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}