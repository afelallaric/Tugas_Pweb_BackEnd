<?php

require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header('Location: list-siswa.php');
    } else {
        echo'Gagal menghapus data: '. mysqli_error($conn);
    }
}