<?php
require 'config.php';

// Pastikan ID tersedia di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data siswa berdasarkan ID
    $sql = "SELECT * FROM calon_siswa WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Cek jika data ditemukan
    if ($data = mysqli_fetch_assoc($result)) {
        // Lanjutkan menampilkan form dengan data lama
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak diberikan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="proses-edit.php" method="POST">
        <!-- Hidden input untuk ID -->
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($data['nama']) ?>"><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" id="alamat" value="<?= htmlspecialchars($data['alamat']) ?>"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select><br><br>

        <label for="agama">Agama:</label><br>
        <input type="text" name="agama" id="agama" value="<?= htmlspecialchars($data['agama']) ?>"><br><br>

        <label for="sekolah_asal">Sekolah Asal:</label><br>
        <input type="text" name="sekolah_asal" id="sekolah_asal" value="<?= htmlspecialchars($data['sekolah_asal']) ?>"><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
