<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '3333', 'pw_20230129');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

 
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $name = htmlspecialchars($data['name']);
  $city = htmlspecialchars($data['city']);
  $country = htmlspecialchars($data['country']);
  

  $query = "INSERT INTO
            customers
            VALUES
            (null, '$name', '$city', '$country');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}