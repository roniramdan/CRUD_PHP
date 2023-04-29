<?php
include 'koneksi.php';

$id_laptop = $_POST['id_laptop'];
$merk_laptop = $_POST['merk_laptop'];
$spesifikasi = $_POST['spesifikasi'];
$harga = $_POST['harga'];
$gambar_lama = $_POST['gambar_lama'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
// roniramdani
if($gambar){
  $path = "gambar/".$gambar;
  if(move_uploaded_file($tmp, $path)){
    unlink("gambar/".$gambar_lama);
  }else{
    echo "Gagal upload gambar";
  }
}else{
  $gambar = $gambar_lama;
}

$query = "UPDATE laptop SET merk_laptop='$merk_laptop', spesifikasi='$spesifikasi', harga='$harga', gambar='$gambar' WHERE id_laptop='$id_laptop'";
$result = mysqli_query($koneksi, $query);
if($result){
  header("location: index.php");
}else{
  echo "Gagal memperbarui data";
}
?>
