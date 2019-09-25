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
	<h3>Input data baru</h3>
	<form method="post" action="input-aksi.php">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" pattern=".{6,}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>