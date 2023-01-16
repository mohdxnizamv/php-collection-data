<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="app/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit | Protocol Complain</title>
</head>

<body>
    <form action="" method="POST">
        <!-- Global Container -->
        <div class="flex min-h-screen items-center justify-center bg-gray-900">
            <!-- Card Container -->
            <div
                class="relative m-6 flex flex-col space-y-10 rounded-2xl bg-white shadow-2xl md:m-0 md:flex-row md:space-y-0">
                <!-- Left Side -->
                <div class="p-6 md:p-20">
                    <!-- Top Content -->
                    <h2 class="mb-5 font-Vampiro text-4xl font-bold">Customer Complain 2023</h2>
                    <p class="mb-12 max-w-sm font-sans font-light text-gray-600">
                        You can right all complain here, without miss!
                    </p>

                    <span class="flex flex-col space-x-0 space-y-6 md:flex-row md:space-x-4 md:space-y-0">
                        <input type="text" name="username" autofocus required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light"
                            placeholder="Enter your user nama" />

                        <input type="text" name="address" required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light"
                            placeholder="Enter your address" />

                        <input type="text" name="idnft" required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light"
                            placeholder="Enter your nft id" />
                    </span>
                    <br />
                    <span class="flex flex-col space-x-0 space-y-6 md:flex-row md:space-x-4 md:space-y-0">

                        <input type="text" name="example" required
                            class="w-full rounded-md border border-gray-300 p-6 placeholder:font-sans placeholder:font-light"
                            placeholder="Enter your rujukan" />
                    </span>

                    <!-- Middle Content -->
                    <div class="mt-6 flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0">
                        <div class="font-thin text-cyan-700">Forgot password</div>

                        <button type="submit" name="tambah"
                            class="flex w-full items-center justify-center space-x-4 rounded-full border bg-cyan-700 p-6 px-9 font-sans font-bold text-white shadow-lg shadow-sm shadow-cyan-100 transition duration-150 hover:-translate-y-0.5 hover:bg-opacity-90 hover:shadow-lg md:w-auto">
                            <span> Submit </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <line x1="13" y1="18" x2="19" y2="12" />
                                <line x1="13" y1="6" x2="19" y2="12" />
                            </svg>
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

                <!-- Right Side -->
                <!-- <img src="images/image.jpg" alt="" class="hidden w-[430px] md:block" /> -->

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