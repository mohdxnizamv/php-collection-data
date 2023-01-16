<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_20230113');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
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

  $username = htmlspecialchars($data['username']);
  $address = htmlspecialchars($data['address']);
  $idnft = htmlspecialchars($data['idnft']);
  $example = htmlspecialchars($data['example']);
  
  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$username', '$address', '$idnft', '$example');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
