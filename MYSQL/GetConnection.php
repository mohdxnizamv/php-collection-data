<?php

function getConnection(): PDO

{
    $host = "localhost";
    $port = 3306;
    $database = "pw_20230113";
    $username = "root";
    $password = "3333";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    
}