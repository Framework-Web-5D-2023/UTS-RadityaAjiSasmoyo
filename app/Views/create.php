<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<?php $session = session(); ?>
<div class="container">
  <?php if ($session->getFlashdata("success")) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $session->getFlashData("success"); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php elseif ($session->getFlashdata("error")) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $session->getFlashData("error"); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <h1><?= $title; ?></h1>
    <p>hindari menuliskan data yang sama di keranjang</p>
  <form action="<?= base_url("/create"); ?>" method="post">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputkan Nama Barang...">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Inputkan Harga..." required>
    </div>
    <div class="mb-3">
      <label for="lokasi" class="form-label">Lokasi</label>
      <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Inputkan Lokasi..." required>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
<?= $this->endSection(); ?>