<?php
require 'functions.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0]; // mengambail id dari nol
if(isset($_POST["submit"])){
    if(edit($_POST)>0 ){
        echo "
            <script>
                alert('data berhasil diedit!');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diedit!');
            </script>
        ";

    }
}
?>
<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From edit  data mahasiswa</title>
    <link rel="stylesheet" href="css/css.css">

</head>
<body>
    <main class="main">
        <h1>From edit Mahasiswa Baru</h1>
        <br><br>
        <hr>
        <br>
        <section class="regis">
            <form method="post" action="">
            <input type="hidden" name="id"  value="<?= $mhs["id"]; ?>"> 
            <!-- untuk menampilkan data dari database -->
            <label class="label">
                Nama Lengkap <br>
                <input type="text" name="nama_lengkap" value="<?= $mhs["nama_lengkap"]; ?>" class="input" placeholder="Nama Lengkap"   >
                <!--// <?= $mhs["nama_lengkap"]; ?> untuk menampilkan data daru from utama -->
            </label>
            <br>
            <label class="label ">
                Tanggal lahir <br>
                <input type="date" name="tanggal_lahir" value="<?= $mhs["tanggal_lahir"]; ?>" class="input" id="form2" placeholder="Tanggal Lahir"   >
            </label><br>
            <label class="label">
                Asal sekolah <br>
                <input type="text" name="asal_sekolah" value="<?= $mhs["asal_sekolah"]; ?>" class="input" id="form2" placeholder="Asal Sekolah"   >
            </label><br>
            <label class="label">
                Alamant <br>
                <input type="text" name="alamat" value="<?= $mhs["alamat"]; ?>" class="input" id="form2" placeholder="Alamat"   >
            </label>
            <br>
            <a href="index.php" class="btn jingga">Kembali</a>
            <button type="submit" name="submit" class="btn biru" >Daftar</button>
            </form>
        </section>
    </main>
</body>
</htm>