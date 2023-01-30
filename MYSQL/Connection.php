<?php

$host = "localhost";
$port = 3306;
$database = "pw_20230113";
$username = "root";
$password = "3333";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database MySQL" . PHP_EOL;

    // menutup koneksi
    $connection = null;
}catch (PDOException $exception){
    echo "Gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}