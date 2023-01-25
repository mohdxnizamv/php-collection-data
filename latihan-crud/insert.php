<?php

include('connection.php');

$nama = $_POST['nama']; 
$negeri = $_POST['negeri'];
$umur = $_POST['umur'];
$jantina = $_POST['jantina'];

$insert = mysqli_query($connect,"INSERT INTO karyawan SET nama='$nama', negeri='$negeri', umur='$umur', jantina='$jantina' "); 

if($insert) 
    header('Location:list.php');
else
    echo 'Input data gagal';