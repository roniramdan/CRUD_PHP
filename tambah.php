<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Laptop</title>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<div class="row">
  <div class="col-md-12">
    <h1>Tambah Data Laptop</h1>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Merk Laptop</label>
        <input type="text" name="merk_laptop" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Spesifikasi</label>
        <textarea name="spesifikasi" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control-file" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
</div>
</body>
</html>
