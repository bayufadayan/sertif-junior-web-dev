<?php
include 'koneksi.php';
// Jumlah Produk
$query_jumlah_produk = "SELECT COUNT(*) AS jumlah_produk FROM produk";
$result_jumlah_produk = mysqli_query($conn, $query_jumlah_produk);
$row_jumlah_produk = mysqli_fetch_assoc($result_jumlah_produk);
$jumlah_produk = $row_jumlah_produk['jumlah_produk'];

// Total Harga
$query_total_harga = "SELECT SUM(harga) AS total_harga FROM produk";
$result_total_harga = mysqli_query($conn, $query_total_harga);
$row_total_harga = mysqli_fetch_assoc($result_total_harga);
$total_harga = $row_total_harga['total_harga'];

// Rata Rata
$query_rata_rata_harga = "SELECT AVG(harga) AS rata_rata_harga FROM produk";
$result_rata_rata_harga = mysqli_query($conn, $query_rata_rata_harga);
$row_rata_rata_harga = mysqli_fetch_assoc($result_rata_rata_harga);
$rata_rata_harga = $row_rata_rata_harga['rata_rata_harga'];

// Mengambil jumlah kategori produk
$query_jumlah_kategori_unik = "SELECT COUNT(DISTINCT kategori) AS jumlah_kategori_unik FROM produk";
$result_jumlah_kategori_unik = mysqli_query($conn, $query_jumlah_kategori_unik);
$row_jumlah_kategori_unik = mysqli_fetch_assoc($result_jumlah_kategori_unik);
$jumlah_kategori_unik = $row_jumlah_kategori_unik['jumlah_kategori_unik'];

// Mengambil jumlah kategori produk
$query_jumlah_kategori = "SELECT kategori, COUNT(*) AS jumlah FROM produk GROUP BY kategori";
$result_jumlah_kategori = mysqli_query($conn, $query_jumlah_kategori);

$produk = [];
$harga = [];
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = $row['produk'];
    $harga[] = $row['harga'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Produk</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Wrapper -->
    <div id="wrapper">
        <?php include 'sidebar.php'; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include 'navbar.php'; ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Produk</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Card Jumlah Produk -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-full py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Produk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_produk; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-box fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Total Harga Produk -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-full py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Harga Produk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($total_harga, 0, ',', '.'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Rata-rata Harga Produk -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-full py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rata-rata Harga</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($rata_rata_harga, 0, ',', '.'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Jumlah Kategori Produk -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-full py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kategori Produk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $jumlah_kategori_unik; ?> Kategori Unik
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row for Charts -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Distribusi Kategori Produk</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Harga Produk</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var kategoriData = <?= json_encode(array_column(mysqli_fetch_all($result_jumlah_kategori, MYSQLI_ASSOC), 'jumlah')); ?>;
        var kategoriLabels = <?= json_encode(array_column(mysqli_fetch_all($result_jumlah_kategori, MYSQLI_ASSOC), 'kategori')); ?>;

        var ctxPie = document.getElementById('myPieChart');
        var myPieChart = new Chart(ctxPie, {
            type: 'doughnut',
            data: {
                labels: kategoriLabels, 
                datasets: [{
                    data: kategoriData,
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
                }],
            },
        });
    </script>

    <!-- Script for Area Chart -->
    <script>

    var produkLabels = <?= json_encode($produk); ?>; 
    var hargaData = <?= json_encode($harga); ?>; 

    var ctxArea = document.getElementById('myAreaChart');
    var myLineChart = new Chart(ctxArea, {
        type: 'line',
        data: {
            labels: produkLabels,
            datasets: [{
                label: "Harga",
                data: hargaData,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
            }],
        },
    });
</script>

</body>
</html>
