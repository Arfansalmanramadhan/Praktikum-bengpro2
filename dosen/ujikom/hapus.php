<?php
require 'functions.php';
$id = $_GET['id']; // untuk mengambil id di database
if(hapus($id)){
    echo "
        <script>
            alert('data berhasi dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
?>