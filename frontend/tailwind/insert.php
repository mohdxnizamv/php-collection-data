<?php

include('connection.php');

$nombor_oder = $_POST['nombor_oder'];
$nama_oder = $_POST['nama_oder'];
$pesanan_oder = $_POST['pesanan_oder'];

$insert = mysqli_query($connect, "INSERT INTO makanoder SET nombor_oder='$nombor_oder', nama_oder='$nama_oder', pesanan_oder='$pesanan_oder' ");

if ($insert)
    header('Location:tambahoder.php');
else
    echo 'Input data gagal';
