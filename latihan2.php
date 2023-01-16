<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="app/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Honor Protocol</title>
</head>

<body class="font-Poppins bg-gray-900 text-white">
    <section class="container mx-auto max-w-7xl py-6 sm:text-xs md:text-xs lg:text-sm xl:text-base">

        <h3 class="text-xl font-Vampiro">Daftar Honor Protocol</h3>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>UserName</th>
                <th>Wallet Address</th>
                <th>NFT ID</th>
                <th>EX</th>
            </tr>

            <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $m['username']; ?></td>
                <td><?= $m['address']; ?></td>
                <td><?= $m['idnft']; ?></td>
                <td><?= $m['example']; ?></td>
                <td>
                    <!-- <a href="">ubah</a> | <a href="">hapus</a> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>

</html>