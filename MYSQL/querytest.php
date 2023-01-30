<?php
$title = "Hello World";
$body = "Ini Adalah Body";


require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM karyawan";
$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id = $row["id"];
    $nama = $row["nama"];
    $negeri = $row["negeri"];
    $umur = $row["umur"];
    $jantina = $row["jantina"];
    
    echo "Id : $id" . PHP_EOL;
    echo "Nama : $nama" . PHP_EOL;
    echo "Negeri : $negeri" . PHP_EOL;
    echo "Umur : $umur" . PHP_EOL;
    echo "Jantina : $jantina" . PHP_EOL;
   
}

$connection = null;

?>

<html>

<head>
    <title><?= $title ?></title>
</head>

<body>
    <h1><?= $body ?></h1>

    <table border="1">
        <?php foreach ($_SERVER as $key => $value){ ?>
        <tr>
            <td><?= $id ?></td>
            <td><?= $nama ?></td>
            <td><?= $negeri ?></td>
            <td><?= $umur ?></td>
            <td><?= $jantina ?></td>
            
        </tr>
        <?php } ?>
    </table>
</body>

</html>