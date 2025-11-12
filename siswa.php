<?php
include "header.php";

?>

<div class="container-fluid mt-3">
     <h3>Siswa</h3>
    <form action="proses4.php" method="POST">
        <div class="form-group">
            <label for="nis">NIS :</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required>
        </div>

        <div class="form-group">
            <label for="nama_siswa"> Nama siswa :</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan ID mu"
                required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis kelamin :</label>
            <input type="text" class="form-control" id="jenis_kalamin" name="jenis_kelamin" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
        </div>

        <div class="form-group">
            <label for="asal_sekolah">Asal sekolah :</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan asal sekolah"
                required>
        </div>


        <div class="form-group">
            <label for="kode_progdi">kode progdi :</label>
            <input type="text" class="form-control" id="kode_progdi" name="kode_progdi" placeholder="Masukkan kode"
                required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>


</div>
</div>