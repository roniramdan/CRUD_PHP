<!DOCTYPE html>
<html>
<head>
  <title>E-commerce Laptop RoniPedia</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h1>E-commerce Laptop RoniPedia</h1>
      <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID Laptop</th>
            <th>Merk Laptop</th>
            <th>Spesifikasi</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'koneksi.php';
          $query = "SELECT * FROM laptop";
          $result = mysqli_query($koneksi, $query);
          while($row = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <td><?php echo $row['id_laptop']; ?></td>
            <td><?php echo $row['merk_laptop']; ?></td>
            <td><?php echo $row['spesifikasi']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><img src="gambar/<?php echo $row['gambar']; ?>" width="100"></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id_laptop']; ?>" class="btn btn-warning">Edit</a>
              <a href="hapus.php?id=<?php echo $row['id_laptop']; ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>

