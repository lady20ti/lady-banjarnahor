<?php 
include('../model/database2.php'); 
?>

<center>
    <font size="6">Form Peminjaman Buku</font>
</center>
<hr>
<form action="../controller/proses2.php?aksi=tambahbuku" method="post">

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Kode Buku</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="kode" class="form-control" size="4" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Judul Buku</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="judul" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Penerbit Buku</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="penerbit" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Peminjaman</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="date" name="tanggal" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            <a href="index.php?page=tampilbuku" class="btn btn-warning">Kembali</a>
        </div>
        <a href="../view/index.php?page=tampilbuku"></a>
</form>
</div>