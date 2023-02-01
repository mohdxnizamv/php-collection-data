<?php

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM makanoder");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="refresh" content="20" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <title>Restoran | View Card</title>
</head>

<body>

  <nav class="bg-slate-100 dark:bg-slate-900 dark:text-white p-4">
    <div class="container mx-auto flex items-center justify-between">
      <div class="font-bold text-lg">Restoran Maidin</div>
      <div class="flex items-center space-x-3">
        <a href="index.php" class="hover:text-gray-300">Home</a>
        <a href="#" class="hover:text-gray-300">About</a>
        <a href="#" class="hover:text-gray-300">Contact</a>

        <span class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
          <input type="checkbox" name="toggle" id="toggle" class="peer absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer checked:right-0 checked:border-green-500" />

          <label for="toggle" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer peer-checked:bg-green-500"></label>
        </span>
      </div>
    </div>
  </nav>

  <section class="bg-slate-100 dark:bg-slate-900 dark:text-white">
    <div class="container mx-auto max-w-6xl px-4 sm:px-2">
      <div class="flex flex-wrap -mx-3">
        <?php foreach ($results as $result) : ?>
          <div class="w-1/3 px-3 mb-6">
            <div class="bg-white dark:bg-slate-800 rounded shadow p-6">
              <img class="w-full rounded" src="images/nasi-goreng.png" alt="Card Image">
              <div class="pt-4">
                <h3 class="text-lg font-medium leading-tight underline"><?php echo $result['nama_oder'] ?></h3>
                <p class="text-gray-600 text-base mt-2">
                  Card description goes here. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit.
                </p>
              </div>
              <div class="my-1 grid grid-cols-3 gap-x-3 gap-y-3 py-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
                <span class="bg-gray-200 rounded-lg text-xs text-gray-700 text-center">ID : <?php echo $result['id'] ?></span>
                <span class="bg-gray-200 rounded-lg text-xs text-gray-700 text-center">No Oder : <?php echo $result['nombor_oder'] ?></span>
                <span class="bg-gray-200 rounded-lg text-xs text-gray-700 text-center"><?php echo $result['pesanan_oder'] ?></span>
                <span class="bg-blue-200 rounded-lg text-xs text-gray-700 text-center py-1 font-bold"><a href="delete.php?id=<?php echo $result['id'] ?>">hapus</a></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <!-- 
          Add more cards here 
        -->

      </div>
    </div>
  </section>
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