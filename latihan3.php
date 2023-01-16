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
    <title>Daftar Customer User</title>
</head>

<body class="font-Poppins bg-gray-900 text-white">
    <section class="container mx-auto max-w-3xl py-6 sm:text-xs md:text-xs lg:text-sm xl:text-base">
        <h3 class="text-xl font-Vampiro">Daftar Customer User</h3>

        <!-- <a href="tambah.php">Tambah Data Customer User</a> -->
        <br />

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Wallet Address</th>
            </tr>

            <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $m['username']; ?></td>
                <td><?= $m['address']; ?></td>
                <td>
                    <a href="detail.php?id=<?= $m['id']; ?>"><strong> click detail </strong></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>

</html>