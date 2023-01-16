<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_20230113');

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
  <link rel="stylesheet" href="app/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Honor Protocol Complain</title>
</head>

<body class="font-Inter">
<section class="container mx-auto max-w-7xl py-6 sm:text-xs md:text-xs lg:text-sm xl:text-base">
  <h3 class="text-xl font-Vampiro">Honor Protocol Complain</h3>

  <a href="tambah.php">Next | Page</a>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr class="font-bold font-Vampiro">
      <th>ID</th>
      <th>UserName</th>
      <th>NFT ID</th>
      <th>Rujukan</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['username']; ?></td>
        <td><?= $m['idnft']; ?></td>
        <td><?= $m['example']; ?></td>
        <!-- <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td> -->
      </tr>
    <?php endforeach; ?>
  </table>
</section>
<!--  -->

</body>

</html>