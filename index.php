<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="relative h-screen overflow-hidden bg-indigo-900">
        <img src="./svg/rainbow-vortex.svg" class="absolute object-cover w-full h-full" />

        <header class="absolute top-0 left-0 right-0 z-20">
            <nav class="container px-6 py-4 mx-auto md:px-12">
                <div class="items-center justify-center md:flex">

                    <div class="items-center hidden md:flex">
                        <a class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300">
                            How To Buy
                        </a>
                        <a class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300">
                            Info
                        </a>
                        <a class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300">
                            About Us
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container relative z-10 flex items-center px-6 py-32 mx-auto md:px-12 xl:py-40">
            <div class="relative z-10 flex flex-col items-center w-full">
                <h1 class="mt-4 font-extrabold leading-tight text-center text-white text-7xl sm:text-8xl">
                    Life-changing
                </h1>
                <a href="latihan1.php"
                    class="block px-4 py-3 mt-10 text-lg font-bold text-white uppercase bg-gray-800 hover:bg-gray-900">
                    Start Now
                </a>
            </div>
        </div>
    </div>

</body>

</html>