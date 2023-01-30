<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO karyawan(nama, negeri, umur, jantina)
    VALUES ('nizamuddin mad yusof', 'johor bahru' , '35', 'lelaki');
SQL;

$connection->exec($sql);

$connection = null;