<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $kode_progdi = $_POST['kode_progdi'];
    
    $sql = "INSERT INTO siswa (nis, nama_siswa, jenis_kelamin, alamat, asal_sekolah, kode_progdi) 
            VALUES ('$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$asal_sekolah', '$kode_progdi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . $conn->error;
    }
}
?>