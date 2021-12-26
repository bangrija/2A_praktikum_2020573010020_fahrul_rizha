<?php
require "proses/session.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_user usr
      LEFT JOIN tb_pengguna pgn ON usr.id_user = pgn.id_user
      WHERE username='$_SESSION[username]' ");
$data = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Dashboard - SB Admin</title>
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
                            <div class="ibox-title">
                                <h3>Profil</h3>
                            </div>
                        </div>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" value="<?php echo $data['username'];?>"disabled>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">username</label>
                                <input type="text" class="form-control" id="inputusername" value="<?php echo $data[''];?>"disabled>
                            </div> -->
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="inputAddress" value="<?php echo $data['alamat'];?>"disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="inputCity" value="<?php echo $data['kota'];?>"disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="inputCity" value="<?php echo $data['provinsi'];?>"disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Toko</label>
                                <input type="text" class="form-control"value=" <?php echo $data['deskripsi_toko'];?>"disabled>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Ingat Saya
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

            <!-- Option 2: Separate Popper and Bootstrap JS -->

            <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="js/sidebars.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
</body>

</html>