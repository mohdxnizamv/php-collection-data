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
    <meta http-equiv="refresh" content="15" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Mahasiswa</title>
</head>

<body>
    <h2>Senarai Nama Peserta</h2>

    <a href="add.php" id="e">Tambah Data</a>

    <br /><br />

    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword .."
            value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : "" ?>">
        <button type="submit">Search</button>
    </form>

    <br></br>

    <table border="1" cellpadding="10" cellspacing="0">
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
            <td id="e"><?php echo $result['jantina']?> </td>
            <td id="e">
                <a href="edit.php?id=<?php echo $result['id']?>">ubah</a>
                <a href="delete.php?id=<?php echo $result['id']?>">hapus</a>
            </td>
        </tr>

        <?php endforeach;?>

    </table>

    <div id="i">
        Hakmilik Github. Selamat Belajar
    </div>

</body>

</html>