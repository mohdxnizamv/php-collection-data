<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
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
                                    class="border-b border-gray-200 px-5 py-3 text-left text-base font-bold uppercase text-gray-800">
                                    ID
                                </th>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-left text-base font-bold uppercase text-gray-800">
                                    User Name
                                </th>
                                <th scope="col"
                                    class="border-b border-gray-200 px-5 py-3 text-center text-base font-bold uppercase text-gray-800">
                                    Status
                                </th>
                            </tr>

                            <?php $i = 1;
                        foreach ($mahasiswa as $m) : ?>

                        </thead>

                        <tr class="text-gray-800 sm:text-xs md:text-base lg:text-base xl:text-base">
                            <td class="text-left"><?= $i++; ?></td>
                            <td class="text-left"><?= $m['username']; ?></td>
                            <td>
                                <div class="text-center">
                                    <a href="detail.php?id=<?= $m['id']; ?>" class="btn-primary">
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
        <a href="latihan1.php" class="btn-secondary">full
            details</a>
        <!--  -->

        <h1 class="pr-5 text-left text-gray-800"></h1>
    </div>

    <script src="./app/js/scripts.js"></script>
</body>

</html>