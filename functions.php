<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","dbbarang");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nama = $data["nama"];
    $qty = $data["qty"];
    $harga = $data["harga"];

    $query = "INSERT INTO produk (nama, qty, harga) VALUES ('$nama', '$qty', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>