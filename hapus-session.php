
 <?php
 include 'koneksi.php';
include 'fungsi.php';
 
session_start();
//ambil nama dan umur
$nama=$_SESSION['nama'];
$umur=$_SESSION['umur'];
$asal_sekolah=$_SESSION['asal_sekolah'];

 
//ambil jurusan
$jurusan = ($_GET['jurusan']);


//insert data
mysqli_query($c,"INSERT INTO pilihanjurusan (nama,umur,asal_sekolah,jurusan) values ('$nama','$umur','$asal_sekolah','$jurusan')");
unset($_SESSION['nama']);
unset($_SESSION['umur']); //matiin session username nya penulis
unset($_SESSION['asal_sekolah']); //matiin session username nya penulis

header('location:index.php'); //direct ke index.php
?>