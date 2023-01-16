<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="app/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Honor Protocol Complain</title>
</head>

<body class="font-Inter">
    <section class="container mx-auto max-w-lg py-6 sm:px-6 xl:px-8">
        <h3 class="text-xl font-Vampiro">Customer Complain</h3>
        <form action="" method="POST">
            <ul>
                <li class="pb-6">
                    <label>
                        UserName :
                        <input type="text" name="username" class="datainput" autofocus required>
                    </label>
                </li>

                <li class="pb-6">
                    <label>
                        Wallet Address :
                        <input type="text" name="address" class="datainput" required>
                    </label>
                </li>

                <li class="pb-6">
                    <label>
                        NFT ID :
                        <input type="text" name="idnft" class="datainput" required>
                    </label>
                </li>

                <li class="pb-6">
                    <label>
                        Rujukan :
                        <input type="text" name="example" class="datainput2" required>
                    </label>
                </li>

                <li>
                    <button type="submit" name="tambah" class="btn2">Tambah Data!</button>
                </li>
            </ul>
        </form>
    </section>
</body>

</html>