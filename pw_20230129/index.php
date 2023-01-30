<?php

$conn = mysqli_connect('localhost', 'root', '3333', 'pw_20230129');

$result = mysqli_query($conn, "SELECT * FROM customers");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$customers = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30" />
    <title>Maklumat Customer</title>
</head>

<body>
    <h3>Maklumat Customer</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            
        </tr>

        <?php $i = 1;
        foreach ($customers as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['name']; ?></td>
            <td><?= $m['city']; ?></td>
            <td><?= $m['country']; ?></td>
            
        </tr>

        <?php endforeach; ?>
    </table>

    <div id="e">
        Hakmilik Github. Selamat Belajar
    </div>
</body>

</html>