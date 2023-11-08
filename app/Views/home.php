<?= $this->extend("template"); ?>

<?= $this->section("content"); ?>
<?php $session = session(); ?>
<div class="container">
  <?php if ($session->getFlashdata("success")) : ?>
    <div class="alert alert-success" role="alert">

      <?= $session->getFlashdata("success"); ?>
    </div>
  <?php endif; ?>
  <h1><?= $title; ?></h1>
  <table class="table caption-top">
    <caption>List Keranjang Belanja</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($mahasiswa as $m) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $m["nama"]; ?></td>
          <td><?= $m["harga"]; ?></td>
          <td><?= $m["lokasi"]; ?></td>
          <td><a href="<?= site_url("/" . $m["id"]); ?>" class="btn btn-primary btn-sm">Checkout</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>