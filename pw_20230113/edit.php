<?php 

include('connection.php');

$id = $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php

$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE id='$id' LIMIT 1"); //mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit / Update | Mahasiswa</title>
</head>

<body>
    <h4>Edit Personal Information</h4>
    <form action="update.php" method="post">
        <ul>
            <li>
                <input type="hidden" name="id" value=<?php echo $result[0]['id']?>>
                <!--untuk menyimpan id tanpa menampilkan data id pada form-->
            </li>
            <!--  -->

            <li>
                Nama :
                <input type="text" name="nama" value="<?php echo $result[0]['nama']?>" />
                <!--menampilkan data sesuai dr variabel $result diatas-->
            </li>
            <!--  -->

            <li>
                Negeri :
                <select name="negeri">
                    <option value="kuala lumpur"
                        <?php echo ($result[0]['negeri'] == 'kuala lumpur') ? 'selected' : '';?>>
                        kuala
                        lumpur
                    </option>
                    <option value="putrajaya" <?php echo ($result[0]['negeri'] == 'putrajaya') ? 'selected' : '';?>>
                        putrajaya
                    </option>
                    <option value="selangor" <?php echo ($result[0]['negeri'] == 'selangor') ? 'selected' : '';?>>
                        selangor
                    </option>
                    <option value="johor" <?php echo ($result[0]['negeri'] == 'johor') ? 'selected' : '';?>>johor
                    </option>
                    <option value="perak" <?php echo ($result[0]['negeri'] == 'perak') ? 'selected' : '';?>>perak
                    </option>
                    <option value="kedah" <?php echo ($result[0]['negeri'] == 'kedah') ? 'selected' : '';?>>kedah
                    </option>
                    <option value="kelantan" <?php echo ($result[0]['negeri'] == 'kelantan') ? 'selected' : '';?>>
                        kelantan
                    </option>
                    <option value="perlis" <?php echo ($result[0]['negeri'] == 'perlis') ? 'selected' : '';?>>perlis
                    </option>
                    <option value="pahang" <?php echo ($result[0]['negeri'] == 'pahang') ? 'selected' : '';?>>pahang
                    </option>
                    <option value="pulau pinang"
                        <?php echo ($result[0]['negeri'] == 'pulau pinang') ? 'selected' : '';?>>
                        pulau
                        pinang
                    </option>
                    <option value="negeri sembilan"
                        <?php echo ($result[0]['negeri'] == 'negeri sembilan') ? 'selected' : '';?>>
                        negeri sembilan
                    </option>
                    <option value="sabah"
                        <?php echo ($result[0]['negeri'] == 'sabah') ? 'selected' : '';?>>
                        sabah
                    </option>
                    <option value="sarawak"
                        <?php echo ($result[0]['negeri'] == 'sarawak') ? 'selected' : '';?>>
                        sarawak
                    </option>
                </select>
            </li>
            <!--  -->

            <li>
                Umur :
                <input type="text" name="umur" value="<?php echo $result[0]['umur']?>">
            </li>
            <!--  -->

            <li>
                Jenis Jantina :
                <select name="jantina">
                    <option value="lelaki" <?php echo ($result[0]['jantina'] == 'lelaki') ? 'selected' : '';?>>lelaki
                    </option>
                    <option value="wanita" <?php echo ($result[0]['jantina'] == 'wanita') ? 'selected' : '';?>>wanita
                    </option>
                </select>
            </li>
            <!--  -->

            <button type="submit">Update</button>
        </ul>
    </form>
</body>

</html>