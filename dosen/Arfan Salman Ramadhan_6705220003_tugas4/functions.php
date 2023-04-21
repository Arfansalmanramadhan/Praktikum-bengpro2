<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpcrued");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
    global $conn;

    $firstname = htmlspecialchars($data["firstname"]);
    $lastname = htmlspecialchars($data["lastname"]);
    $age = htmlspecialchars($data["age"]);
    
    $query = "INSERT INTO student VALUES
            ('', '$firstname', '$lastname', '$age   ')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;   
    mysqli_query($conn, "DELETE FROM student WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    
    $id = $data["id"];
    $firstname = htmlspecialchars($data["firstname"]);
    $lastname = htmlspecialchars($data["lastname"]);
    $age = htmlspecialchars($data["age"]);

    $query ="UPDATE student SET
            firstname = '$firstname',
            lastname = '$lastname',
            age = '$age'
           WHERE id = $id
           ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
