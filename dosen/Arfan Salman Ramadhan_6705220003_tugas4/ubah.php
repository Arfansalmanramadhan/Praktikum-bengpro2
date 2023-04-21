<?php
require 'functions.php';
$id = $_GET["id"];

$str =  query("SELECT * FROM student WHERE id = $id")[0];
if ( isset($_POST["submit"]) ){
    if(ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'lihat.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
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
    <title>ubah Data Student</title>
</head>
<body>
    <h1>Ubah Data Strudennt</h1>
    <form method="post" action="">
        <input type="hidden" name="id"  value="<?= $str["id"]; ?>">
        <ul>
            <li>
                <label class="form1">
                    Nama Depan : <br>
                    <input type="text" name="firstname" class="form2"  value="<?= $str["firstname"]; ?>">
                </label>
            </li>
            <li>
                <label class="form1">
                    Nama Belakang : <br>
                    <input type="text" name="lastname" class="form2"  value="<?= $str["lastname"]; ?>">
                </label>
            </li>
            <li>
                <label class="form1">
                    Umur : <br>
                    <input type="text" name="age" class="form2"  value="<?= $str["age"]; ?>">
                </label>
            </li>
            <li>
            <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>
