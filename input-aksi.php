<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username','$password','$email')");

header("location:index.php");
?>