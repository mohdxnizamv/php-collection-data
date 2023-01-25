<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <form action="insert.php" method="post">

        <label>Nama</label><br />
        <input type="text" name="nama">
        <br /><br />


        <label>Negeri</label><br />
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
        <br /><br />


        <label>Umur</label><br />
        <input type="text" name="umur">
        <br /><br />


        <label>Jenis Kelamin</label><br />
        <select name="jantina">
            <option value="lelaki">lelaki</option>
            <option value="wanita">wanita</option>
        </select>
        <br /><br />

        <button type="submit">Tambah</button>
    </form>
</body>

</html>