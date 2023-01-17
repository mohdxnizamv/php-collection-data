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
    <script src="https://cdn.tailwindcss.com"></script>
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
            <br />
            <a href="latihan3.php"
                class="px-4 py-3 mt-10 text-lg font-bold text-white uppercase bg-gray-800 hover:bg-gray-900">Back</a>
        </ul>
    </section>
</body>

</html>