<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
    <h1>Form Register</h1>
	<form action="proses_register.php" method="POST">
	<table>
	<tr>
	<td>
	<label for="">Username</label>
	</td>
	<td>
	<input type="text" name="username" placeholder="Username">
	</td>
	</tr>
	<tr>
	<td>
	<label for="">Nama</label>
	</td>
	<td>
	<input type="text" name="nama" placeholder="Nama">
	</td>
	</tr>
	<tr>
	<td>
	<label for="">Tanggal Lahir</label>
	</td>
	<td>
	<input type="date" name="lahir">
	</td>
	</tr>
	<tr>
	<tr>
	<td>
	<label for="">Alamat</label>
	</td>
	<td>
	<input type="text" name="alamat" placeholder="Alamat">
	</td>
	</tr>
	<td>
	<label for="">Password</label>
	</td>
	<td>
	<input type="text" name="password" placeholder="Password">
	</td>
	</tr>
	<tr>
	<td>
	<label for="">Ulangi Password</label>
	</td>
	<td>
	<input type="text" name="upassword" placeholder="Ulangi Password">
	</td>
	</tr>
	</table>
	<input type="submit" value="simpan">
	</form>
</body>
</html>