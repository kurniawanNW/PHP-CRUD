<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1></h1>
	</div>
	
	<br/>
	
	<a href="index.php">Home</a>

	<br/>
	<h3>Edit data</h3>
		<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
					<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $d['username'] ?>"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $d['password'] ?>"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $d['email'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
		<?php 
	}
	?>
</body>
</html>