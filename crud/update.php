<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//update data ke database
mysqli_query($koneksi,"UPDATE mahasiswa SET nama ='$nama',nim ='$nim', alamat = '$alamat' WHERE id ='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");
?>