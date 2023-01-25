<?php

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Mahasiswa</title>
</head>

<body>
    <a href="add.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>NAMA</th>
            <th>NEGERI</th>
            <th>UMUR</th>
            <th>JANTINA</th>
            <th>PILIHAN</th>
        </tr>

        <?php foreach($results as $result) : ?>

        <tr>
            <td><?php echo $result['nama']?> </td>
            <td><?php echo $result['negeri']?> </td>
            <td><?php echo $result['umur']?> </td>
            <td><?php echo $result['jantina']?> </td>
            <td>
                <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
                <a href="delete.php?id=<?php echo $result['id']?>">Delete</a>
            </td>
        </tr>

        <?php endforeach;?>

    </table>
</body>

</html>