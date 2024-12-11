<?php
require 'config.php';

$sql = "SELECT * FROM calon_siswa";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List siswa</title>
</head>

<body>
    <h1>Daftar Siswa</h1>
    <a href="form-daftar.php">[+] Tambah Siswa Baru</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['nama']) ?>
                </td>
                <td><?= htmlspecialchars($row['alamat']) ?>
                </td>
                <td><?= $row['jenis_kelamin'] ?>
                </td>
                <td><?= htmlspecialchars($row['agama']) ?>
                </td>
                <td><?= htmlspecialchars($row['sekolah_asal']) ?>
                </td>
                <td>
                    <a
                        href="hapus.php?id=<?= $row['id']?>"></a>
                </td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>

</html>