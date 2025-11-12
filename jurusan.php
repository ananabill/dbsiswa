<?php
include "header.php";

?>

<div class="container-fluid mt-3">
    <h3>Jurusan</h3>
    <form action="proses2.php" method="POST">
        <div class="form-group">
            <label for="kode_progdi"> Kode_progdi :</label>
            <input type="text" class="form-control" id="kode_progdi" name="kode_progdi" placeholder="Masukkan Kode mu"
                required>
        </div>

        <div class="form-group">
            <label for="nama_progdi">Nama Progdi:</label>
            <input type="text" class="form-control" id="nama_progdi" name="nama_progdi" placeholder="Masukkan Nama"
                required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">simpan</button>
    </form>


</div>
</div>