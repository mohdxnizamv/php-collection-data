<?php

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM makanoder");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="6" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Restoran Makan Perimbun</title>
</head>

<body>
    <div class="container mx-auto max-w-6xl px-4 sm:px-2">
        <div class="py-8">
            <div class="overflow-x-auto px-4 py-4">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow-lg">
                    <table class="min-w-full leading-normal text-center" border="1" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>

                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Nombor Oder
                                </th>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Nama Oder
                                </th>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Pesanan Tambahan
                                </th>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Masa Oder
                                </th>

                            </tr>

                            <?php foreach ($results as $result) : ?>

                        </thead>

                        <tr class="text-gray sm:text-xs md:text-base lg:text-base xl:text-base">

                            <td><?php echo $result['nombor_oder'] ?> </td>
                            <td><?php echo $result['nama_oder'] ?> </td>
                            <td><?php echo $result['pesanan_oder'] ?> </td>
                            <td><?php echo $result['waktu_dibuat'] ?> </td>
                            <td>
                                <a href="delete.php?id=<?php echo $result['id'] ?>">hapus</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>