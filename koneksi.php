
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "uts_2021320059_roniramdani";

$koneksi = mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>

//ronniramdani
