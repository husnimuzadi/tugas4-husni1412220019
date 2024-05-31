<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ubah Barang</title>
<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Ubah Barang</h2>
    <form action="<?php echo site_url('barang/update'); ?>" method="post">
        <input type="hidden" name="ID_Barang" value="<?php echo $barang['ID_Barang']; ?>">

        <div class="row mb-3">
            <label for="Kode_Barang" class="col-sm-2 col-form-label">Kode Barang:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Kode_Barang" id="Kode_Barang" value="<?php echo $barang['Kode_Barang']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Nama_Barang" class="col-sm-2 col-form-label">Nama Barang:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Nama_Barang" id="Nama_Barang" value="<?php echo $barang['Nama_Barang']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Kategori_Barang" class="col-sm-2 col-form-label">Kategori Barang:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Kategori_Barang" id="Kategori_Barang" value="<?php echo $barang['Kategori_Barang']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Deskripsi_Barang" class="col-sm-2 col-form-label">Deskripsi Barang:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Deskripsi_Barang" id="Deskripsi_Barang" value="<?php echo $barang['Deskripsi_Barang']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Harga_Jual" class="col-sm-2 col-form-label">Harga Jual:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Harga_Jual" id="Harga_Jual" value="<?php echo $barang['Harga_Jual']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Stok_Barang" class="col-sm-2 col-form-label">Stok Barang:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Stok_Barang" id="Stok_Barang" value="<?php echo $barang['Stok_Barang']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Supplier_Barang" class="col-sm-2 col-form-label">Supplier Barang:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Supplier_Barang" id="Supplier_Barang" value="<?php echo $barang['Supplier_Barang']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Tanggal_Masuk" class="col-sm-2 col-form-label">Tanggal Masuk:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="Tanggal_Masuk" id="Tanggal_Masuk" value="<?php echo $barang['Tanggal_Masuk']; ?>">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
