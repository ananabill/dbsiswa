<?php
include "header.php";

?>

<div class="container-fluid mt-3">
    <h3>Panitia Pendaftaran</h3>
    <form action="proses3.php" method="POST">
        <div class="form-group">
            <label for="id_panitia"> ID panitia:</label>
            <input type="text" class="form-control" id="id_panitia" name="id_panitia" placeholder="Masukkan ID mu"
                required>
        </div>


        <div class="form-group">
            <label for="nama_panitia"> Nama Panitia :</label>
            <input type="text" class="form-control" id="nama_panitia" name="nama_panitia" placeholder="Masukkan ID mu"
                required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">jenis Kelamin :</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>


</div>
</div>