<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="app/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Customer</title>
</head>

<body class="font-Poppins bg-gray-900 text-white">
    <section class="container mx-auto max-w-xl py-6 sm:px-6 xl:px-8">
        <h3 class="text-4xl font-Vampiro">Detail Customer</h3>
        <ul>
            <li>UserName : <?= $m['username']; ?></li>
            <li>Wallet Address : <?= $m['address']; ?></li>
            <li>NFT ID : <?= $m['idnft']; ?></li>
            <li>Rujukan : <?= $m['example']; ?></li>
            <br>
            <li><a href="latihan3.php"
                    class="items-center font-Vampiro hover:font-bold px-9 justify-center space-x-3 rounded border border-gray-300 py-2 shadow-sm transition duration-150 hover:-translate-y-0.5 hover:bg-opacity-30 hover:shadow-lg">
                    Back </a>
            </li>
        </ul>
    </section>
</body>

</html>