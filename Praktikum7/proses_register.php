<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
	<?php 
	$username=$_POST["username"];
	$nama=$_POST["nama"];
	$lahir=$_POST["lahir"];
	$alamat=$_POST["alamat"];
	$password=$_POST["password"];
	$upassword=$_POST["upassword"];
	$con=mysqli_connect("localhost","root","","db_mahasiswa")
	or die("Koneksi Gagal");
	if($password != $upassword){
		echo"Password Tidak Sama";
	}
	else{
	echo "Username : $username <br>";
	echo "Nama : $nama <br>";
	echo "Tanggal Lahir : $lahir <br>";
	echo "Alamat : $alamat <br>";
	echo "Password : $password <br>";
	echo "Ulangi Password : $upassword <br>";
	echo "Pendaftaran Berhasil <br>";
	$sqlstr="insert into pengguna (username,password,nama,tanggal_lahir,alamat) 
	values('$username','$password','$nama','$lahir','$alamat')";
	$hasil=mysqli_query($con,$sqlstr);
	echo"Data berhasil dimasukan";
	}
	?>
</body>
</html>