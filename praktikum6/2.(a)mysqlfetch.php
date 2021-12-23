<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
    <h1>MySQL fetch array</h1>
	<?php 
	$con=mysqli_connect("localhost","root","","db_negara")
	or die("Koneksi Gagal");
	$hasil=mysqli_query($con,"select * from liga");
	while($row=mysqli_fetch_array($hasil)){
		echo"Liga" . $row["negara"];//array asosiatif
		echo"mempunyai" . $row[2];//array numeris
		echo"wakil di liga champion <br>";
	}
	?>
</body>
</html>