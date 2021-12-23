<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="CSS/sidebars.css" rel="stylesheet">
    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
  </head>
  <body>

	<div class="container-fluid">
        <!-- Header -->
        <?php
        require "navbar.php";
        ?>
        <!-- Akhir Header -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <!-- Sidebar -->
                    <?php
                    require "sidebar.php";
                    ?>
                    <!-- Akhir Sidebar -->
                </div>
                <!-- Isi Konten -->
                <div class="col-9 ">
                <br>
                <div class="card ms-1 mt-4">
                    <div class="card-body">
                        Mahasiswa dapat meminjam barang yang ada dibawah ini
                    </div>
                </div>
                <div class="row">
                    <div class="card ms-1 mt-4" style="width: 18rem;">
                        <img src="https://dealharga.com/wp-content/uploads/2018/03/BenQ-MX611-a.jpg" class="card-img-top" alt="center">
                        <div class="card-body">
                            <h5 class="card-title">Proyektor<h5>
                                    <p class="card-text"></p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Pinjam</button>
                        </div>
                    </div>

                    <div class="card ms-1 mt-4" style="width: 18rem;">
                        <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/2/22/484880/484880_1b39c91d-b18a-4e1c-b9dd-61123124ca45_700_700.jpg" class="card-img-top" alt="rigth">
                        <div class="card-body">
                            <h5 class="card-title">Stop Kontak</h5>
                            <p class="card-text"></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Pinjam</button>
                        </div>
                    </div>
					
					<div class="card ms-1 mt-4" style="width: 25rem;">
                        <img src="https://kuncirumahku.com/wp-content/uploads/2018/08/akses-rumah-tanpa-kunci.png" class="card-img-top" alt="rigth">
                        <div class="card-body">
                            <h5 class="card-title">Kunci Lab</h5>
                            <p class="card-text"></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Pinjam</button>
                        </div>
                    </div>
					
                </div>
            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Isi Nama dan Kelas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-text" class="col-form-label">Kelas:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-text" class="col-form-label">Catatan:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Input</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <!-- Akhir Isi Konten -->
            </div>
        </div>
    </div>
	
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="JS/sidebars.js"></script>
	
  </body>
</html>