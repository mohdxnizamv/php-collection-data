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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
    body {
        background-image: url(./svg/Sprinkle.svg);
        background-repeat: repeat;
        background-size: cover;
    }
    </style>

    <title>Daftar Customer User</title>
</head>

<body class="font-Josefin">
    <div class="container mx-auto max-w-3xl px-4 sm:px-2">
        <div class="py-8">
            <div class="-mx-4 overflow-x-auto px-4 py-4 sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow-lg">
                    <table class="min-w-full leading-normal" border="1" cellpadding="10" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-left text-base font-bold uppercase text-gray-500">
                                    ID
                                </th>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-left text-base font-bold uppercase text-gray-500">
                                    User Name
                                </th>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-left text-base font-bold uppercase text-gray-500">
                                    Status
                                </th>
                            </tr>

                            <?php $i = 1;
                        foreach ($mahasiswa as $m) : ?>

                        </thead>

                        <tr class="text-gray-400">
                            <td class="pl-6"><?= $i++; ?></td>
                            <td><?= $m['username']; ?></td>
                            <td>
                                <a href="detail.php?id=<?= $m['id']; ?>"
                                    class="px-4 py-2 mt-10 sm:text-xs md:text-xs lg:text-sm xl:text-sm font-semibold text-white bg-gray-800 hover:bg-gray-900">
                                    click detail
                                </a>
                            </td>
                        </tr>

                        <?php endforeach; ?>

                        <!--  -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>