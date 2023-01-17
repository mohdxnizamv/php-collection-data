<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./app/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        background-image: url(./svg/Sprinkle.svg);
        background-repeat: repeat;
        background-size: cover;
    }
    </style>

    <title>Detail Customer</title>
</head>

<body>

    <div class="px-4 p-40">
        <div class="flex flex-col max-w-6xl mx-auto md:flex-row">

            <h2 class="w-full mr-8 text-3xl font-extrabold leading-9 md:w-1/3">
                Frequently-asked questions
            </h2>

            <dl class="w-full md:w-2/3">
                <dt class="mb-4">
                    <h3 class="text-xl font-extrabold">
                        User Name?
                    </h3>
                </dt>
                <dd class="mb-16">
                    <p>
                        <?= $m['username']; ?>
                    </p>
                </dd>
                <dt class="mb-4">
                    <h3 class="text-xl font-extrabold">
                        Wallet Address?
                    </h3>
                </dt>
                <dd class="mb-16">
                    <p>
                        <?= $m['address']; ?>
                    </p>
                </dd>
                <dt class="mb-4">
                    <h3 class="text-xl font-extrabold">
                        Rujukan?
                    </h3>
                </dt>
                <dd class="mb-16">
                    <p>
                        <?= $m['example']; ?>
                    </p>
                </dd>

                <a href="latihan2.php"
                    class="px-4 py-3 mt-10 text-lg font-bold text-white uppercase bg-gray-800 hover:bg-gray-900">Back</a>
            </dl>
        </div>
    </div>

</body>

</html>