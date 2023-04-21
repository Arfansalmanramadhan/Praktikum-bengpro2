<?php
require "functions.php";
$student = query("SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas4</title>
</head>
<body>
    <h1>Student</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    <?php $a = 1;?>
    <?php foreach($student as $row ):?>
    <tr>
        <td><?= $a; ?></td>
        <td><?= $row["firstname"]; ?></td>
        <td><?= $row["lastname"]; ?></td>
        <td><?= $row["age"]; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>    
        </td>
    </tr>
    <?php $a++;?>
    <?php endforeach;?>
    </table>
    <button><a href="index.php">Tambah data</a></button>
</body>
</html>