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
    <meta http-equiv="refresh" content="60" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <style>
        .toggle-checkbox:checked {
            right: 0;
            border-color: #68d391;
        }

        .toggle-checkbox:checked+.toggle-label {
            background: #68d391;
        }
    </style>
    <title>Restoran | List</title>
</head>

<body class="bg-slate-100 dark:bg-slate-900 dark:text-white">

    <nav class="p-2">
        <div class="container mx-auto flex items-center justify-between">
            <div class="font-bold text-lg">Restoran Maidin</div>
            <div class="flex items-center space-x-3">
                <a href="index.php" class="hover:text-gray-300">Home</a>
                <a href="viewcards.php" class="hover:text-gray-300">View Oder</a>
                <a href="#" class="hover:text-gray-300">Contact</a>

                <span class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                    <input type="checkbox" name="toggle" id="toggle" class="peer absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer checked:right-0 checked:border-green-500" />

                    <label for="toggle" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer peer-checked:bg-green-500"></label>
                </span>
            </div>
        </div>
    </nav>

    <div class="container mx-auto max-w-6xl px-4 sm:px-2">
        <div class="py-8">
            <div class="overflow-x-auto px-4 py-4">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow-lg">
                    <table class="min-w-full leading-normal text-center" border="1" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    ID
                                </th>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Nombor Oder
                                </th>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Nama Oder
                                </th>
                                <th scope="col" class="border-b border-gray-200 px-5 py-3 text-base font-bold uppercase text-gray-800">
                                    Pesanan Tambahan
                                </th>

                            </tr>

                            <?php foreach ($results as $result) : ?>

                        </thead>

                        <tr class="text-gray sm:text-xs md:text-base lg:text-base xl:text-base">

                            <td><?php echo $result['id'] ?> </td>
                            <td><?php echo $result['nombor_oder'] ?> </td>
                            <td><?php echo $result['nama_oder'] ?> </td>
                            <td><?php echo $result['pesanan_oder'] ?> </td>
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
    <script>
        document.getElementById('toggle').addEventListener('change', function() {
            if (this.checked) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }

        })
    </script>
</body>

</html>