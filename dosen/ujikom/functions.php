<?php
// koneksi ke database 
$database = mysqli_connect("localhost", "root", "", "phpcrued");

function query($query){
    global $database ;// untuk terkoneksi secala global
    $hasil = mysqli_query($database, $query); // melakukan query terhadap database
    $bariss = [];
    while($baris = mysqli_fetch_assoc($hasil)) { // assoc = mengabil baris hasil sebagai array asosiatif
        $bariss[] = $baris;
    }
    return $bariss;
}
function tambah($data){
    global $database;

    $namalengkap = htmlspecialchars($data["nama_lengkap"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $asalsekolah = htmlspecialchars($data["asal_sekolah"]);
    $peminatan = htmlspecialchars($data["peminatan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    
    $query  = "INSERT INTO mahasiswa VALUE
            ('', '$namalengkap', '$tanggallahir', '$asalsekolah', '$peminatan', '$alamat')";
    mysqli_query($database, $query);

    return mysqli_affected_rows($database); // mengembalikan jumlah baris
}
function hapus($id){
    global $database;
    mysqli_query($database, "DELETE FROM mahasiswa WHERE id = $id"); // mengambil id supaya bisa menghapus semua data 
    return mysqli_affected_rows($database);
}
function edit($data){
    global $database;

    $id = $data['id'] ;// mengambil data harus dari id 
    $namalengkap = htmlspecialchars($data["nama_lengkap"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $asalsekolah = htmlspecialchars($data["asal_sekolah"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "UPDATE mahasiswa SET
            nama_lengkap = '$namalengkap',
            tanggal_lahir = '$tanggallahir',
            asal_sekolah = '$asalsekolah',
            alamat = '$alamat'
            WHERE id = '$id'
            ";
    mysqli_query($database, $query);
    return mysqli_affected_rows($database);
}
?>