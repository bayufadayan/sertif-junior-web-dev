<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM produk WHERE id = $id";
$result = mysqli_query($conn, $query);
$produk = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $thumbnail = $_POST['thumbnail'];
    $nama_produk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $query = "UPDATE produk SET thumbnail='$thumbnail', nama_produk='$nama_produk', kategori='$kategori', harga='$harga' WHERE id=$id";
    mysqli_query($conn, $query);

    header('Location: admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="container">
                        <h1 class="mt-5">Edit Produk</h1>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail (Link Gambar)</label>
                                <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?= $produk['thumbnail']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['produk']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $produk['kategori']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="<?= $produk['harga']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Produk</button>
                        </form>
                    </div>


                </div>

                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>