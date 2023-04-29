<?php
include 'koneksi.php';

$merk_laptop = $_POST['merk_laptop'];
$spesifikasi = $_POST['spesifikasi'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

$path = "gambar/".$gambar;

if(move_uploaded_file($tmp, $path)){
  $query = "INSERT INTO laptop (merk_laptop, spesifikasi, harga, gambar) VALUES ('$merk_laptop', '$spesifikasi', '$harga', '$gambar')";
  $result = mysqli_query($koneksi, $query);
  if($result){
    header("location: index.php");
  }else{
    echo "Gagal menyimpan data";
  }
}else{
  echo "Gagal upload gambar";
}
?>
