<?php
require "session.php";

if (isset($_POST['tambah'])) {
    require "koneksi.php";

        $id_produk = $_POST['id_produk'];
        $nm_produk = $_POST['nama_produk'];
        $jenis = $_POST['jenis'];
        $hargaE = $_POST['harga_ecer'];
        $hargaR = $_POST['harga_reseller'];
        $grosir = $_POST['grosir'];
        $stok = $_POST['stok'];

        // operator ternary
        ($_POST['stok'] > 0) ? $stok = $_POST['stok'] : $stok = 0;


        if ($id_produk != "") {
            $cek = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_produk = '$id_produk'");
            $hasil = mysqli_fetch_array($cek);

            if (isset($hasil['id_produk'])) {
                echo '<script>alert("Data kode barang sudah ada");</script>';
                echo '<script>window.location="../stok_produk.php";</script>';
            } else {
                $tambah = mysqli_query($conn, "INSERT INTO tb_barang VALUES ('$id_produk', '$nm_produk', '$jenis', '$hargaE', '$hargaR','$grosir','$stok')");

                if ($tambah) {

                    echo '<script>alert("Penambahan data berhasil");</script>';
                    echo '<script>window.location="../stok_produk.php";</script>';
                } else {
                    echo '<script>alert("Penambahan data gagal, mohon kontak admin");</script>';
                    echo '<script>window.location="../stok_produk.php";</script>';
                }
            }
        } else {
            echo '<script>alert("Kode barang harus diisi");</script>';
            echo '<script>window.location="../stok_produk.php";</script>';
        }
} else {
    echo '<script>alert("Penambahan data gagal, mohon kontak admin");</script>';
    echo '<script>window.location="../stok_produk.php";</script>';
}