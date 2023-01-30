<?php

include('connection.php'); // Mengkoneksikan dengan database

$id = $_POST['id'];
// Karena form menggunakan method post kita gunakan $_POST
$nama = $_POST['nama']; 
$negeri = $_POST['negeri'];
$umur = $_POST['umur'];
$jantina = $_POST['jantina'];

$update = mysqli_query($connect,"UPDATE karyawan SET nama='$nama', negeri='$negeri', umur='$umur', jantina='$jantina' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik

if($update) 
    header('Location:list.php'); // Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut
?>