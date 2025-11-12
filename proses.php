<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nis = $_POST['nis'];
    $id_panitia = $_POST['id_panitia'];
    $tgl_pendaftaran = $_POST['tgl_pendaftaran'];
    $kode_progdi = $_POST['kode_progdi'];

    $sql = "INSERT INTO pendaftaran (id_pendaftaran, nis, id_panitia, tgl_pendaftaran, kode_progdi) 
            VALUES ('$id_pendaftaran', '$nis', '$id_panitia', '$tgl_pendaftaran', '$kode_progdi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . $conn->error;
    }
}
?>