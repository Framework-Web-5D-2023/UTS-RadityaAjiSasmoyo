<?= $this->extend("template"); ?>

<?= $this->section("content"); ?>
<div class="container">
  <div class="container">
    <h1><?= $title; ?></h1>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Nama Barang</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $mahasiswa["nama"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Harga</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $mahasiswa["harga"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Lokasi</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $mahasiswa["lokasi"]; ?></h3>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>