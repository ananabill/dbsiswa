<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $id_panitia = $_POST['id_panitia'];
    $nama_panitia = $_POST['nama_panitia'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    
    $sql = "INSERT INTO panitia_pendaftaran (id_panitia, nama_panitia, jenis_kelamin, alamat) 
            VALUES ('$id_panitia', '$nama_panitia', '$jenis_kelamin', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . $conn->error;
    }
}
?>