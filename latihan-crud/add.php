<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h3>Tambah Personal Information</h3>
    <form action="insert.php" method="post">
        <ul>
            <li>
                Nama :
                <input type="text" name="nama">
            </li>

            <li>
                Negeri :
                <select name="negeri">
                    <option value="kuala lumpur">kuala lumpur</option>
                    <option value="putrajaya">putrajaya</option>
                    <option value="selangor">selangor</option>
                    <option value="johor">johor</option>
                    <option value="perak">perak</option>
                    <option value="kedah">kedah</option>
                    <option value="kelantan">kelantan</option>
                    <option value="perlis">perlis</option>
                    <option value="pahang">pahang</option>
                    <option value="pulau pinang">pulau pinang</option>
                    <option value="negeri sembilan">negeri sembilan</option>
                </select>
            </li>

            <li>
                Umur :
                <input type="text" name="umur">
            </li>

            <li>
                Jenis Jantina :
                <select name="jantina">
                    <option value="lelaki">lelaki</option>
                    <option value="wanita">wanita</option>
                </select>
            </li>

            <li>
                <button type="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>