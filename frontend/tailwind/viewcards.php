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
  <meta http-equiv="refresh" content="6" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Restoran Makan Perimbun</title>
</head>

<body>
  <section>
    <div class="container mx-auto max-w-6xl px-4 sm:px-2">
      <div class="flex flex-wrap -mx-3">
        <?php foreach ($results as $result) : ?>
          <div class="w-1/3 px-3 mb-6">
            <div class="bg-white rounded shadow p-6">
              <img class="w-full" src="https://via.placeholder.com/300x200" alt="Card Image">
              <div class="pt-4">
                <h3 class="text-lg font-medium leading-tight"><?php echo $result['nama_oder'] ?></h3>
                <p class="text-gray-600 text-base mt-2">
                  Card description goes here. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit.
                </p>
              </div>
              <div class="pt-4">
                <span class="inline-block bg-gray-200 rounded-full px-1.5 py-1 text-xs text-gray-700 mr-2"><?php echo $result['nombor_oder'] ?></span>
                <span class="inline-block bg-gray-200 rounded-full px-1.5 py-1 text-xs text-gray-700 mr-2"><?php echo $result['nama_oder'] ?></span>
                <span class="inline-block bg-gray-200 rounded-full px-1.5 py-1 text-xs text-gray-700"><?php echo $result['pesanan_oder'] ?></span>
                <span class="inline-block bg-gray-200 rounded-full px-1.5 py-1 text-xs text-gray-700"><?php echo $result['waktu_dibuat'] ?></span>
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
</body>

</html>