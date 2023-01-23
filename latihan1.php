<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', 'root', 'pw_20230113');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./app/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        background-image: url(./svg/Sprinkle.svg);
        background-repeat: repeat;
        background-size: cover;
    }
    </style>

    <title>Honor Protocol Complain</title>
</head>

<body id="e" class="font-Signika text-white">

    <h3 class="text-4xl text-center">Contoh
        Customer
        Complain</h3>

    <section class="container mx-auto max-w-7xl py-6 p-1 sm:text-xs md:text-base lg:text-lg xl:text-lg">

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>userNAME</th>
                <th>idNFT</th>
                <th>Rujukan</th>
            </tr>

            <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $m['username']; ?></td>
                <td><?= $m['idnft']; ?></td>
                <td class="mx-auto p-1"><?= $m['example']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </section>

    <script>
    document.querySelector("#e").addEventListener("selectstart", (e) => {
        e.preventDefault()
    })
    </script>

</body>

</html>