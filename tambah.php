<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan2.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="./app/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        background-image: url(./svg/Sprinkle.svg);
        background-repeat: repeat;
        background-size: cover;
    }
    </style>

    <title>Submit | Protocol Complain</title>
</head>

<body class="font-Signika">
    <form action="" method="POST">
        <!-- Global Container -->
        <div class="flex min-h-screen items-center justify-center">
            <!-- Card Container -->
            <div
                class="relative m-3 flex flex-col space-y-10 rounded-2xl bg-white shadow-2xl md:m-0 md:flex-row md:space-y-0">
                <!-- Left Side -->
                <div class="p-6 md:p-20">
                    <!-- Top Content -->
                    <h2 class="mb-5 font-Vampiro text-4xl font-bold">Customer Complain 2023</h2>
                    <p class="mb-12 max-w-lg text-gray-600">
                        * I am writing to express my disappointment and dissatisfaction with the product and service ..
                    </p>

                    <span class="flex flex-col space-x-0 space-y-6 md:flex-row md:space-x-4 md:space-y-0">
                        <input type="text" name="username" autofocus required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="user nama" maxlength="20" />

                        <input type="text" name="address" required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="address" maxlength="50" />

                        <input type="text" name="idnft" required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="nft id" maxlength="5" />
                    </span>

                    <br />

                    <div class="col-span-2">
                        <label class="text-gray-700">
                            <textarea name="example"
                                class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                 rows="5" cols="40">
                            </textarea>
                        </label>
                    </div>

                    <!-- Middle Content -->
                    <div class="mt-6 flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0">
                        <div class="font-thin text-cyan-700">Forgot password</div>

                        <button type="submit" name="tambah"
                            class="block px-4 py-3 mt-10 text-lg font-bold text-white uppercase bg-gray-800 hover:bg-gray-900">
                            <span> Submit </span>
                        </button>
                    </div>

                    <!-- Border -->
                    <div class="mt-12 border-b border-b-gray-300"></div>

                    <!-- Bottom Content -->
                    <p class="py-6 text-center text-sm font-thin text-gray-400">
                        or log in with
                    </p>

                    <!-- Bottom Buttons Container -->
                    <div class="flex flex-col space-x-0 space-y-6 md:flex-row md:space-x-4 md:space-y-0">
                        <button
                            class="flex items-center justify-center space-x-3 rounded border border-gray-300 py-2 shadow-sm transition duration-150 hover:-translate-y-0.5 hover:bg-opacity-30 hover:shadow-lg md:w-1/2">
                            <img src="images/facebook.png" alt="" class="w-9" />
                            <span class="font-thin">Facebook</span>
                        </button>
                        <button
                            class="flex items-center justify-center space-x-3 rounded border border-gray-300 py-2 shadow-sm transition duration-150 hover:-translate-y-0.5 hover:bg-opacity-30 hover:shadow-lg md:w-1/2">
                            <img src="images/google.png" alt="" class="w-9" />
                            <span class="font-thin">Google</span>
                        </button>
                    </div>
                </div>

                <!-- Close Button -->
                <div
                    class="group absolute -top-5 right-4 flex h-10 w-10 items-center justify-center rounded-full bg-gray-200 transition duration-150 hover:-translate-y-0.5 hover:cursor-pointer md:top-4 md:bg-white">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black group-hover:text-gray-600"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </div>
            </div>
        </div>
    </form>
</body>

</html>