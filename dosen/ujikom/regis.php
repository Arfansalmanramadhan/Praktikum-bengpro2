<?php
require 'functions.php';
if(isset($_POST["submit"])){//isset : memerisak apakah suaru variabel di sete, yang berarti harus di deklarasikan dan bukan nul
    if(tambah($_POST) >0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
            </script>
        ";
    }   else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From data Mahasiswa</title>
    <link rel="stylesheet" href="css/css.css">

</head>
<body>
    <main class="main">
        <h1>From Mahasiswa Baru</h1>
        <br><br>
        <hr>
        <br>
        <section class="regis">
            <form method="post" action="">
            <label class="label">
                Nama Lengkap <br>
                <input type="text" name="nama_lengkap" class="input" placeholder="Nama Lengkap"  required="" >
            </label>
            <br>
            <label class="label">
                Tanggal lahir <br>
                <input type="date" name="tanggal_lahir" class="input" id="form2" placeholder="Tanggal Lahir"   required="">
            </label><br>
            <label class="label">
                Asal sekolah <br>
                <input type="text" name="asal_sekolah" class="input" id="form2" placeholder="Asal Sekolah"   required="">
            </label><br>
            <label class="form1">
                Peminatan <br>
                <input type="checkbox" name="peminatan"  value="Teknik Telekomunikasi"> <label for="">Teknik Telekomunikasi</label>    <br>
                <input type="checkbox" name="peminatan"  value="Teknik Informatika"> <label for="">Teknik Informatika</label>  
            </label>
            <br>
            <label class="label">
                Alamant <br>
                <input type="text" name="alamat" class="input" id="form2" placeholder="Alamat"   required="">
            </label>
            <br>
            <a href="index.php" class="btn jingga">Kembali</a>
            <button type="submit" name="submit" class="btn biru" >Daftar</button>
            </form>
        </section>
    </main>
</body>
</html> 