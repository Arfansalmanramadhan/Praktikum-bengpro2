<?php
    require 'functions.php';

if ( isset($_POST["submit"]) ){
    if(tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'lihat.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'lihat.php';
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
    <title>Tambah Student</title>
</head>
<body>
    <h1>Tambah Data Strudent</h1>
    <form method="post" action="">
        <ul>
            <li>
                <label class="form1">
                    Nama Depan : <br>
                    <input type="text" name="firstname" class="form2">
                </label>
            </li>
            <li>
                <label class="form1">
                    Nama Belakang : <br>
                    <input type="text" name="lastname" class="form2">
                </label>
            </li>
            <li>
                <label class="form1">
                    Umur : <br>
                    <input type="text" name="age" class="form2">
                </label>
            </li>
            <li>
            <button type="submit" name="submit">Tambah Data!</button>
            </li>
            <li>
            <button><a href="lihat.php">Lihat</a></button>
            </li>
        </ul>
    </form>
</body>
</html>