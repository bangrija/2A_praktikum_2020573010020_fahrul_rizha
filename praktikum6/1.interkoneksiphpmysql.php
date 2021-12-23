<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
    <h1>Demo koneksi database MySQL</h1>
	<?php 
	$con=mysqli_connect("localhost","root","");
	if($con){
		echo"Server Terkoneksi";
	}
	else{
		echo"Server Tidak Terkoneksi";
	}
	?>
</body>
</html>