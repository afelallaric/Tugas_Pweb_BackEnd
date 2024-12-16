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
        exit(); // Selalu gunakan exit() setelah header untuk mencegah eksekusi lebih lanjut
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Calon Siswa</title>
</head>
<body>
    <h2>Edit Data Calon Siswa</h2>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="1"> <!-- Ganti '1' dengan ID siswa yang ingin diubah -->

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" value="Nama Lama"><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" id="alamat" value="Alamat Lama"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="agama">Agama:</label><br>
        <input type="text" name="agama" id="agama" value="Agama Lama"><br><br>

        <label for="sekolah_asal">Sekolah Asal:</label><br>
        <input type="text" name="sekolah_asal" id="sekolah_asal" value="Sekolah Asal Lama"><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
