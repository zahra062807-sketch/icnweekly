<!DOCTYPE html>
<html>
    <head>
        <title>
            WEB TI ICON - 2026 | SEMESTER 2
        </title>
        <link rel="stylesheet" href="Assets/style.css">
    </head>
    <body>
        <h1 align="center">
            CIAO!
        </h1>
        <table border="1" align="center" cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="data-mahasiswa.php">Data Mahasiswa</a></td>
                <td><a href="tugastabel.php">Tugas Tabel</a></td>
            </tr>
            </table>
            <table>
            <h2>
                Data Mahasiswa
            </h2>
            <a href="tambahdata.php"><button>Tambah Data</button></a>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Nomor Whatsapp</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Zahra Icon Cetta</td>
                <td>13242520070</td>
                <td>Teknologi Informasi</td>
                <td>zahra062807@gmail.com</td>
                <td>085966260219</td>
                <td><img src="/images/logo.jpg" alt="Foto Zahra Icon Cetta" width="100"></td>
                <td>
                    <a href="editdata.php"><button>Edit</button></a> |
                    <a href="hapusdata.php?id=1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        </table>
    </body>
</html>