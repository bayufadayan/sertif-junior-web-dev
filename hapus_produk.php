<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id = $id";
mysqli_query($conn, $query);

header('Location: admin.php');
exit();
?>
