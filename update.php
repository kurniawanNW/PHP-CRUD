<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', email='$email' WHERE id='$id'");

header("location:index.php?pesan=update");

?>