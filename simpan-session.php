<?php
include ("koneksi.php");
$user = $_POST['nama'];
$umur = $_POST['umur'];
$asal_sekolah = $_POST['asal_sekolah'];

    session_start(); 
    $_SESSION['nama'] = $user;//nyimpen session nama
    $_SESSION['umur'] = $umur; //nyimpen session umur
    $_SESSION['asal_sekolah'] = $asal_sekolah; //nyimpen session sekolah

    
    header('location:soal.php');
?>