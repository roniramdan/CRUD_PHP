<?php
include 'koneksi.php';

$id_laptop = $_GET['id'];
$query = "SELECT * FROM laptop WHERE id_laptop='$id_laptop'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
$gambar = $data['gambar'];
// ronniramdani
if(unlink("gambar/".$gambar)){
  $query = "DELETE FROM laptop WHERE id_laptop='$id_laptop'";
  $result = mysqli_query($koneksi, $query);
  if($result){
    header("location: index.php");
  }else{
    echo "Gagal menghapus data";
  }
}else{
  echo "Gagal menghapus gambar";
}
?>
