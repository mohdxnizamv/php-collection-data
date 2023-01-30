<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Product Modal</title>
</head>

<body>
    <form action="insert.php" method="post">
        <!-- Global Container -->
        <div class="flex items-center justify-center min-h-screen bg-slate-100">
            <!-- Card Container -->
            <div class="flex flex-col p-6 m-3 space-y-10 bg-white rounded-2xl shadow-2xl md:flex-row md:space-y-0 md:space-x-10 md:m-0 md:p-16">
                <!-- Image Div -->
                <div>
                    <img src="./images/example 1.png" alt="#" class="mx-auto rounded-3xl duration-200 w-auto p-1 hover:scale-105" />
                </div>

                <!-- Content -->
                <div class="flex flex-col space-y-6">
                    <!-- Label & Title Container -->
                    <div class="flex flex-col mb-4 space-y-3 text-center md:text-left">
                        <div>
                            <div class="inline-block px-3 py-1 text-sm text-white bg-black rounded-full">
                                ODER DISINI
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="max-w-sm text-3xl font-bold">
                            RESTORAN MAIDIN PERIMBUN SDN BHD.
                        </div>
                        <!-- Price Container -->
                        <div class="flex flex-col mb-4 space-y-3 text-center md:text-left">
                            <p class="line-through">RM 11</p>
                            <p class="text-5xl font-bold">RM 9</p>
                            <p class="text-sm font-light text-gray-400">
                                This offer is valid until April 3rd !
                            </p>
                        </div>

                        <!-- Stock -->
                        <div class="flex items-center space-x-3 group">
                            <div class="w-3 h-3 bg-green-400 rounded-full group-hover:animate-ping"></div>
                            <div class="text-sm">50+ pcs. in stock</div>
                        </div>

                        <!-- Bottom Buttons Container -->
                        <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row">
                            <select name="nama_oder" class="flex items-center justify-center py-3 px-1.5 space-x-3 border-2 border-gray-300 rounded-lg shadow-sm hover:bg-opacity-30 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-150">
                                <option value="nasi ayam">nasi ayam</option>
                                <option value="nasi goreng ayam">n.goreng ayam</option>
                                <option value="nasi goreng kampung">n.goreng kampung</option>
                                <option value="nasi goreng cina">n.goreng cina</option>
                                <option value="nasi goreng bandar">n.goreng bandar</option>
                                <option value="nasi goreng usa">n.goreng usa</option>
                                <option value="nasi goreng cili padi">n.goreng cili padi</option>
                                <option value="nasi goreng daging">n.goreng daging</option>
                                <option value="nasi goreng daging merah">n.goreng daging merah</option>
                                <option value="nasi goreng biasa">n.goreng biasa</option>
                                <option value="nasi goreng ikan masin">n.goreng ikan masin</option>
                                <option value="nasi goreng sabah">n.goreng sabah</option>
                                <option value="nasi goreng merah">n.goreng merah</option>
                                <span>Add to cart</span>
                            </select>

                            <select name="nombor_oder" class="flex items-center justify-center py-3 px-5 space-x-3 border-2 border-gray-300 rounded-lg shadow-sm hover:bg-opacity-30 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-150">
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                                <option value="004">004</option>
                                <option value="005">005</option>
                                <option value="006">006</option>
                                <option value="007">007</option>
                                <span>Add to wishlist</span>
                            </select>
                        </div>
                        <!--  -->
                        
                        <div>
                            <input name="pesanan_oder" class="w-full flex-1 appearance-none rounded-lg border border-gray-300 bg-white px-4 py-6 text-base text-gray-800 placeholder-gray-400 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600" rows="5" cols="100" placeholder="your-information">
                        </div>
                        <!--  -->

                        <!-- Button Group -->
                        <div type="submit" class="group">
                            <button class="w-full transition-all duration-150 bg-blue-700 text-white border-b-8 border-b-blue-700 rounded-lg group-hover:border-t-8 group-hover:border-b-0 group-hover:bg-blue-700 group-hover:border-t-blue-700 group-hover:shadow-lg">
                                <div class="px-8 py-4 duration-150 bg-blue-500 rounded-lg group-hover:bg-blue-700">
                                    Add to cart
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>