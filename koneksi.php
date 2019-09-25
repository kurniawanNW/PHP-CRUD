<?php
$koneksi = mysqli_connect("localhost","root","","profil");

if(mysqli_connect_errno()){
	echo "Koneksi gagal:".mysql_connect_error();
}

?>