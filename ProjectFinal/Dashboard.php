<!doctype html>
<html lang="en">

<>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
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
                <div class="col-9">
                    <div class="card  em-1 mt-5">
                        <div class="ibox-title">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="ibox-title">
                            <h5>Jumlah Transaksi Tahun 2021</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">0</h1>
                            <small><a href="https://rekap.in/report/sales">Klik untuk Melihat Detail</a></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="ibox float-e-margins mb-4">
                                <div class="ibox-title">
                                    <h5>Penjualan Hari Ini</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-right"><small>Penjualan</small>
                                            <h2> Rp 0</h2>
                                        </a>
                                        <a href="#" class="list-group-item text-left">Total dari 0 transaksi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Pending Bulan Ini</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-right"><small>Pending</small>
                                            <h2> Rp 0</h2>
                                        </a>
                                        <a href="#" class="list-group-item text-left">Total dari 0 transaksi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Penjualan Bulan Ini</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-right"><small>Penjualan</small>
                                            <h2> Rp 0</h2>
                                        </a>
                                        <a href="#" class="list-group-item text-left">Total dari 0 transaksi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Pengeluaran Bulan Ini</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-right"><small>Pengeluaran</small>
                                            <h2> Rp 0</h2>
                                        </a>
                                        <a href="#" class="list-group-item text-left">Total dari 0 transaksi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card em-1 mt-5">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Statistik
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/sidebars.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>

</html>