<?php
require "proses/session.php";
require "proses/koneksi.php";

$select = mysqli_query($conn, "SELECT * FROM tb_barang");

?>
<!doctype html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>STOK PRODUK</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/sidebars.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <?php
        require "navbar.php";
        ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php

                ?>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                        <div class="card  em-1 mt-5">
                    <!-- isi konten -->
                        <div class="card">
                            <h5 class="card-header">Data Barang</h5>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" name="tambah" data-bs-toggle="modal" data-bs-target="#Modaltambah">
                                    tambah data barang
                                </button>
                                <!-- modal tambah -->
                                <div class="modal fade" id="Modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="proses/proses_tambah_barang.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="id_produk" id="floatingInput" value="" autofocus>
                                                        <label for="floatingInput">ID_Produk</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="nama_produk" id="floatingInput" value="" autofocus>
                                                        <label for="floatingInput">Nama Produk</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="jenis" id="floatingPassword" value="">
                                                        <label for="floatingPassword">jenis</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="harga_ecer" id="floatingPassword" value="">
                                                        <label for="floatingPassword">Harga Ecer</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="harga_reseller" id="floatingPassword" value="">
                                                        <label for="floatingPassword">Harga Reseller</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="grosir" id="floatingPassword" value="">
                                                        <label for="floatingPassword">Grosir</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="stok" id="floatingPassword" value="">
                                                        <label for="floatingPassword">stok</label>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir modal tambah -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">id produk</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">jenis</th>
                                            <th scope="col">harga Ecer</th>
                                            <th scope="col">harga Reseller</th>
                                            <th scope="col">Grosir</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($query = mysqli_fetch_array($select)) {
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $query['id_produk']; ?></th>
                                                <td><?= $query['nama_produk'] ?></td>
                                                <td><?= $query['jenis'] ?></td>
                                                <td><?= $query['harga_ecer'] ?></td>
                                                <td><?= $query['harga_reseller'] ?></td>
                                                <td><?= $query['grosir'] ?></td>
                                                <td><?= $query['stok'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" name="edit" data-bs-toggle="modal" data-bs-target="#ModalEdit<?= $query['id_produk']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" name="delete" data-bs-toggle="modal" data-bs-target="#ModalDelete<?= $query['id_produk']; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                                                            <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z" />
                                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                        </svg>
                                                    </button>
                                                    <!-- modal edit -->
                                                    <div class="modal fade" id="ModalEdit<?= $query['id_produk']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="proses/proses_edit_barang.php" method="POST" enctype="multipart/form-data">
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="id_produk" id="floatingInput" value="<?= $query['id_produk'] ?>" readonly>
                                                                            <label for="floatingInput">ID Produk</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="nm_produk" id="floatingInput" value="<?= $query['nama_produk'] ?>" autofocus>
                                                                            <label for="floatingInput">Nama Produk</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="jenis" id="floatingPassword" value="<?= $query['jenis'] ?>">
                                                                            <label for="floatingPassword">Jenis</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="harga_ecer" id="floatingPassword" value="<?= $query['harga_ecer'] ?>">
                                                                            <label for="floatingPassword">Harga Ecer</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="harga_reseller" id="floatingPassword" value="<?= $query['harga_reseller'] ?>">
                                                                            <label for="floatingPassword">Harga Reseller</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="grosir" id="floatingPassword" value="<?= $query['grosir'] ?>">
                                                                            <label for="floatingPassword">Harga Reseller</label>
                                                                        </div>
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control" name="stok" id="floatingPassword" value="<?= $query['stok'] ?>">
                                                                            <label for="floatingPassword">stok</label>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <input type="submit" class="btn btn-primary" name="edit" value="EDIT">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- akhir modal edit -->

                                                    <!-- modal hapus -->
                                                    <div class="modal fade" id="ModalDelete<?= $query['kode_barang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="proses/proses_hapus_barang.php" method="POST">
                                                                        <input type="hidden" name="kode_barang" value="<?= $query['kode_barang']; ?>">
                                                                        <input type="hidden" name="gambar" value="<?= $query['gambar']; ?>">
                                                                        <p style="color: red;">Apakah anda akan menghapus data "<?= $query['nama_barang']; ?>"</p>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <!-- <input type="submit" class="btn btn-primary" name="hapus" value="DELETE"> -->
                                                                            <input type="submit" class="btn btn-secondary" name="hapus" value="Delete">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- akhir modal hapus -->

                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- akhir isi konten -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</body>

</html>