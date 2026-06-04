<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="Assets/style.css">
</head>
<body>
    <h1 align="center">
            CIAO!
        </h1>

     <table border="1" align="center" cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href="index.html">Home</a></td>
                <td><a href="profile.html">Profile</a></td>
                <td><a href="contact.html">Contact</a></td>
                <td><a href="data-mahasiswa.html">Data Mahasiswa</a></td>
                <td><a href="form-mahasiswa.html">Form Mahasiswa</a></td>
                <td><a href="tugastabel.html">Tugas Tabel</a></td>
            </tr>
        </table>
<h2>Form Data Mahasiswa</h2>

<form>
    <!-- Nama -->
    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <!-- NIM -->
    <label>NIM:</label><br>
    <input type="number" name="nim"><br><br>

    <!-- Password -->
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <!-- Email -->
    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <!-- No HP -->
    <label>No HP:</label><br>
    <input type="tel" name="nohp"><br><br>

    <!-- Website -->
    <label>Website Pribadi:</label><br>
    <input type="url" name="website"><br><br>

    <!-- Tanggal Lahir -->
    <label>Tanggal Lahir:</label><br>
    <input type="date" name="ttl"><br><br>

    <!-- Warna Favorit -->
    <label>Warna Favorit:</label><br>
    <input type="color" name="warna"><br><br>

    <!-- Tingkat Kepuasan -->
    <label>Tingkat Kepuasan:</label><br>
    <input type="range" name="kepuasan" min="1" max="100"><br><br>

    <!-- Jenis Kelamin -->
    <label>Jenis Kelamin:</label><br>
    <input type="radio" name="jk" value="laki-laki"> Laki-laki<br>
    <input type="radio" name="jk" value="perempuan"> Perempuan<br><br>

    <!-- Hobi -->
    <label>Hobi:</label><br>
    <input type="checkbox" name="hobi" value="membaca"> Membaca<br>
    <input type="checkbox" name="hobi" value="olahraga"> Olahraga<br>
    <input type="checkbox" name="hobi" value="musik"> Musik<br><br>

    <!-- Upload Foto -->
    <label>Upload Foto:</label><br>
    <input type="file" name="foto"><br><br>

    <!-- Alamat -->
    <label>Alamat:</label><br>
    <textarea name="alamat" rows="4" cols="30"></textarea><br><br>

    <!-- Jurusan -->
    <label>Jurusan:</label><br>
    <select name="jurusan">
        <option value="ti">Teknologi Informasi</option>
        <option value="si">Sistem Informasi</option>
        <option value="tk">Teknik Komputer</option>
    </select><br><br>

    <!-- Tombol Submit -->
    <input type="submit" value="Kirim">

</form>

</body>
</html>