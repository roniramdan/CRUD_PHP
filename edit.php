<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Laptop</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data Laptop</h1>
      <?php
      include 'koneksi.php';
      $id_laptop = $_GET['id'];
      $query = "SELECT * FROM laptop WHERE id_laptop='$id_laptop'";
      $result = mysqli_query($koneksi, $query);
      $data = mysqli_fetch_assoc($result);
      ?>
      <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Merk Laptop</label>
          <input type="text" name="merk_laptop" class="form-control" value="<?php echo $data['merk_laptop']; ?>" required>
</div>
<div class="form-group">
<label>Spesifikasi</label>
<textarea name="spesifikasi" class="form-control" required><?php echo $data['spesifikasi']; ?></textarea>
</div>
<div class="form-group">
<label>Harga</label>
<input type="number" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
</div>
<div class="form-group">
<label>Gambar</label>
<input type="file" name="gambar" class="form-control-file">
<input type="hidden" name="gambar_lama" value="<?php echo $data['gambar']; ?>">
</div>
<input type="hidden" name="id_laptop" value="<?php echo $data['id_laptop']; ?>">
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

  </div>
</div>
</body>
</html>
