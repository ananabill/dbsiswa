<?php
include "header.php"; ?>
<div class="container-fluid mt-3">
    <h3>Pendaftaran</h3>
    <form action="proses.php" method="POST">
        <div class="form-group">
            <label for="id pendaftaran">ID Pendaftaran :</label>
            <input type="text" class="form-control" id="id_pendaftaran" name="id pendaftaran" placeholder="Masukkan id pendaftaran" required>
        </div>

        <div class="form-group">
            <label for="nis">NIS :</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan nis" required>
        </div>

        <div class="form-group">
            <label for="id panitia">ID Panitia :</label>
            <input type="text" class="form-control" id="id_panatia"  name="id panitia" placeholder="Masukkan id panitia" required>
        </div>

        <div class="form-group">
            <label for="tgl pendaftaran">Tgl Pendaftaran :</label>
            <input type="date" class="form-control" id="tgl_pendaftaran" name="tgl pendaftaran" placeholder="Masukkan Tgl Pendaftaran" required>
        </div>

           <div class="form-group">
            <label for="Kode Progdi">Kode Progdi :</label>
            <input type="text" class="form-control" id="kode_progdi" name="kode progdi" placeholder="Masukkan kode progdi" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>


</div>
</div>