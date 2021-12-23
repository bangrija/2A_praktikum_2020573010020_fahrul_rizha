<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
    <h1>Simpan Buku Tamu MySQL</h1>
	<?php 
	$con=mysqli_connect("localhost","root","","db_tamu")
	$hasil=mysqli_query($con,"select * from bukutamu");
	$jumlah=mysqli_num_rows($hasil);
	echo "<center>Daftar Pengunjung</center>";
	echo "Jumlah pengunjung : $jumlah";
	$a=1;
	while($baris=mysql_fetch_array($hasil))
	{
		echo"<br>";
		echo $a;
		echo "<br>"
		echo "Nama : ";
		echo $baris[0];
		echo "<br>";
		echo "Email : ";
		echo $baris[1];
		echo "<br>";
		echo "Komentar : ";
		echo $baris[2];
		echo "<br>";
		$a++;
	}
	?>
</body>
</html>