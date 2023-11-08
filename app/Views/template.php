<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tautan ke Bootstrap CSS -->
  <link href="<?= site_url("assets/bootstrap.css"); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('bootstrap-5.3.2-dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <title><?= $title ?></title>
</head>

<body>
  <?= $this->include("navbar"); ?>
  <?= $this->renderSection('content') ?>
</body>

<script type="text/javascript" src="<?= site_url("assets/bootstrap.js"); ?>"></script>

<script>
  // codingan javascript
</script>

</html>