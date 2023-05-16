<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa"); // untuk melihat data tabel mahasiswa
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftara Mahasiswa Baru</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <main class="main"> <!-- membuat class main untuk menbuuselemen haml  -->
        <h1>Data Pendaftara Mahasiswa Baru</h1>
        <hr>
        <br>
        <a href="regis.php" class="btn biru"> New</a>
        <section class="tabel">
            <table border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal lahir</th>
                        <th>Asal Sekolah</th>
                        <th>Perminatan</th>
                        <th>Alamat</th>
                        <th rowspan="2" colspan="2">Aksis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a = 1; ?>
                    <?php foreach ($mahasiswa as $baris) : ?>
                        <tr>
                            <td><?= $a; ?></td>
                            <td><?= $baris["nama_lengkap"]; ?></td>
                            <!-- menampilkan data dari database -->
                            <td><?= $baris["tanggal_lahir"]; ?></td>
                            <td><?= $baris["asal_sekolah"]; ?></td>
                            <td><?= $baris["peminatan"]; ?></td>
                            <td><?= $baris["alamat"]; ?></td>
                            <td><a href="edit.php?id=<?= $baris["id"]; ?>" onclick="return confirm('yakin di edit?')">Edit</a></td>
                            <td><a href="hapus.php?id=<?= $baris["id"]; ?> " onclick="return confirm('yakin di hapus?')">Hapus</a></td>
                        </tr>
                        <?php $a++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>