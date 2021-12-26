<?php
session_start();
require "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password ='$password'");
$row = mysqli_fetch_array($hasil);
if ($hasil) {
    if (isset($row['username']) && isset($row['password']) && $row['username'] == $username && $row['password'] == $password) {
        echo '<script>alert("login berhasil");</script>';
        $_SESSION['username'] = $row['username'];
        echo "<script>window.location='../Dashboard.php';</script>";
    } else {
        echo '<script>alert("Mohon maaf username atau password yang anda masukkan salah");</script>';
        echo "<script>window.location='../sign-in/index.php';</script>";
    }
}