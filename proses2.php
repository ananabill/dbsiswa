<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $kode_progdi = $_POST['kode_progdi'];
    $nama_progdi = $_POST['nama_progdi'];
    
    $sqli = "INSERT INTO jurusan (kode_progdi, nama_progdi) 
            VALUES ('$kode_progdi', '$nama_progdi')";

    if ($conn->query($sqli) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sqli . $conn->error;
    }
}
?>