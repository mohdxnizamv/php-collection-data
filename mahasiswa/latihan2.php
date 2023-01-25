<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="./app/css/style.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="refresh" content="60" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Daftar Customer User</title>
</head>

<body>
    <div class="container mx-auto max-w-3xl px-4 sm:px-2">
        <div class="py-8">
            <div class="overflow-x-auto px-4 py-4">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow-lg">
                    <table class="min-w-full leading-normal" border="1" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-center text-base font-bold uppercase text-gray-500">
                                    ID
                                </th>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-center text-base font-bold uppercase text-gray-500">
                                    User Name
                                </th>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-center text-base font-bold uppercase text-gray-500">
                                    Status
                                </th>
                            </tr>

                            <?php $i = 1;
                        foreach ($mahasiswa as $m) : ?>

                        </thead>

                        <tr class="text-gray-400">
                            <td class="text-center"><?= $i++; ?></td>
                            <td class="text-center"><?= $m['username']; ?></td>
                            <td>
                                <div class="text-center">
                                    <a href="detail.php?id=<?= $m['id']; ?>"
                                        class="px-4 py-2 mt-10 sm:text-xs md:text-xs lg:text-sm xl:text-sm font-semibold text-white bg-gray-800 hover:bg-gray-900">
                                        click
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <div class="container mx-auto text-center">
        <a href="latihan1.php"
            class="px-4 py-3 mt-10 text-lg font-bold text-white uppercase bg-gray-800 hover:bg-gray-900">full
            details</a>
        <!--  -->

        <h1 class="pr-5 text-left text-black"></h1>
    </div>

    <script src="./app/js/scripts.js"></script>
</body>

</html>