<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <form action="proses-pendaftaran.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="agama">Agama:</label>
        <input type="text" name="agama" id="agama" required><br>

        <label for="sekolah_asal">Sekolah Asal:</label>
        <input type="text" name="sekolah_asal" id="sekolah_asal" required><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>