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
	$kolom=$_POST["kolom"];
	$cari=$_POST["cari"];
	$con=mysql_connect("localhost","root","","db_tamu");
	$hasil=mysql_query($con,"select * from bukutamu where $kolom like '%$cari'");
	$jumlah=mysql_num_rows($hasil);
	echo"<br>";
	echo"Ditemukan : $jumlah";
	echo"<br>";
	while($baris=mysql_fetch_array($hasil))
	{
		echo "Nama : ";
		echo $baris[0];
		echo "<br>"
		echo "Email : ";
		echo $baris[1];
		echo "<br>"
		echo "Komentar : ";
		echo $baris[2];
		echo "<br>"
	}
	?>
</body>
</html>