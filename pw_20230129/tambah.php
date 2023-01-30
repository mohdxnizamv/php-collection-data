<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tambah.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maklumat Customer</title>
</head>

<body>
    <h4>Form Maklumat Customer</h4>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="name" autofocus required>
                </label>
            </li>
            <li>
                City :
                <select name="city">
                    <option value="malaysia">malaysia</option>
                    <option value="singapura">singapura</option>
                    <option value="brunei">brunei</option>
                    <option value="indonesia">indonesia</option>
                    <option value="Amerika Syarikat">Amerika Syarikat</option>
                    <option value="Afrika Selatan">Afrika Selatan</option>
                    <option value="Arab Saudi">Arab Saudi</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Belanda">Belanda</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Chad">Chad</option>
                    <option value="China">China</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Denmark">Denmark</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Filipina">Filipina</option>
                    <option value="Republik India">Republik India</option>
                    <option value="Republik Itali">Republik Itali</option>
                    <option value="Jepun">Jepun</option>
                    <option value="Jerman">Jerman</option>
                </select>
            </li>
            <li>
                <label>
                    Country :
                    <input type="text" name="country" required>
                </label>
            </li>
            
            <!--  -->
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>