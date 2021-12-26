<?php
require "session.php";

if (isset($_POST['edit'])) {
    require "koneksi.php";
    $id_produk = $_POST['id_produk'];
    $nm_produk = $_POST['nm_produk'];
    $jenis = $_POST['jenis'];
    $hargaE = $_POST['harga_ecer'];
    $hargaR = $_POST['harga_reseller'];
    $grosir = $_POST['grosir'];
    $stok = $_POST['stok'];

    $update = mysqli_query($conn, "UPDATE tb_barang SET id_produk='$id_produk',nama_produk='$nm_produk',jenis='$jenis',harga_ecer='$hargaE',harga_reseller='$hargaR',grosir='$grosir',stok='$stok' WHERE id_produk='$id_produk'");
    
    if ($update) {
        echo '<script>alert("EDIT data berhasil");</script>';
        echo '<script>window.location="../stok_produk.php";</script>';
    } else {
        echo '<script>alert("Edit data tidak berhasil, mohon kontak admin");</script>';
        echo '<script>window.location="../stok_produk.php";</script>';
    }
} else {
    echo '<script>alert("Edit data tidak berhasil, mohon kontak admin");</script>';
    echo '<script>window.location="../stok_produk.php";</script>';
}
