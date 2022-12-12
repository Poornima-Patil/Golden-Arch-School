<?php include('database-helper.php');
$albums = fetchData('albums');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-67GM2WTJ1F"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-67GM2WTJ1F');
   </script>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet" />
   <link rel="apple-touch-icon" sizes="180x180" href="assets/Img/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/Img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/Img/favicon/favicon-16x16.png">
   <link rel="manifest" href="assets/Img/favicon/site.webmanifest">
   <link rel="stylesheet" href="styles.css?v=2" />
   <title>Student Gallery | Golden Arch Montessori School</title>
</head>

<body class="text-gray-800">
   <?php include('header.php') ?>
   <section class="py-6 bg-yellow-200">
      <div class="wrapper">
         <h1 class="text-center md:text-left text-2xl sm:text-3xl lg:text-4xl">
            Student Gallery
         </h1>
      </div>
   </section>
   <section>
      <div class="wrapper">
         <div class="py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
            foreach ($albums as $album) {
               $albumId = $album['id'];
            ?>
               <div>
                  <div class="p-4 shadow-md max-w-sm">
                     <?php
                     $covers = fetchData("gallery", "album = $albumId ORDER BY is_main DESC, `index` ASC");
                     $cover = $covers[0];
                     $date = strtotime($album['date']);
                     $dateToDisplay = date("jS M, Y", $date);
                     ?>
                     <a class="w-full" href="student-photos.php?album=<?php echo $albumId; ?>">
                        <img src="<?php echo $cover['file']; ?>" class="w-full h-40 sm:h-40 md:h-56 object-cover mb-4" />
                     </a>
                     <p class="text-lg font-bold"><?php echo $album['title']; ?></p>
                     <p class="text-gray-700"><?php echo $dateToDisplay; ?></p>
                  </div>
               </div>
            <?php
            }
            ?>
         </div>
      </div>
   </section>
   <section class="py-4 bg-yellow-200"></section>
   <?php include('footer.php'); ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="assets/JS/main.js"></script>
</body>

</html>
