<?php 
// koneksi database
include 'connection.php';

// menangkap data id yang di kirim dari url
$id_buku = $_GET['id_buku'];
    
    
// menghapus data dari database
mysqli_query($connect,"DELETE FROM buku_table WHERE id_buku ='$id_buku");

// mengalihkan halaman kembali ke index.php
header("location:home.php");

?>