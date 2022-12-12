<?php include('database-helper.php');
$albumId = $_GET['album'];
$albumData = fetchData("albums", "id = $albumId");
if (count($albumData) == 0)
   header('Location:student-gallery.php');
$album = $albumData[0];
$albumTitle = $album['title'];
$photos = fetchData("gallery", "album = $albumId");
$photoCount = count($photos);
$photosPerPage = 16;
$pages = ceil($photoCount / $photosPerPage);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
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
   <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=0c2a8e351b2f6' async='true'></script>
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
   <link rel="stylesheet" href="assets/lightbox/simple-lightbox.min.css" />
   <style type="text/css">
   </style>
   <title>Student Gallery | Golden Arch Montessori School</title>
</head>

<body class="text-gray-800">
   <?php include('header.php') ?>
   <section class="py-6 bg-yellow-200">
      <div class="wrapper">
         <h1 class="text-center md:text-left text-2xl sm:text-3xl lg:text-4xl">
            <?php echo $albumTitle ?>
         </h1>
      </div>
   </section>
   <section>
      <div class="wrapper">
         <div class="mt-8 flex justify-between items-center">
            <nobr><a class="inline-block bg-yellow-600 rounded-full lg:px-8 md:px-6 px-4 py-1 text-white text-base mb-2" href="student-gallery.php">Back to albums</a></nobr>
            <div class="text-right">
               <?php if ($currentPage > 1) : ?>
                  <a href="student-photos.php?album=<?php echo $albumId ?>&page=<?php echo $currentPage - 1; ?>">&lt; Prev</a>
               <?php endif;
               if ($currentPage < $pages) : ?>
                  &nbsp;&nbsp;
                  <a href="student-photos.php?album=<?php echo $albumId ?>&page=<?php echo $currentPage + 1; ?>">Next &gt;</a>
               <?php endif; ?>
               <p class="text-sm text-gray-700">Showing Page <?php echo $currentPage ?> of <?php echo $pages; ?></p>
            </div>
         </div>
         <div class="gallery py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
            $photos = array_slice($photos, ($currentPage - 1) * $photosPerPage, $photosPerPage);
            foreach ($photos as $photo) { ?>
               <a class="justify-self-center w-full max-w-sm" href="<?php echo $photo['file']; ?>">
                  <img src="<?php echo $photo['file']; ?>" class="w-full sm:h-48 md:h-56 object-cover">
               </a>
            <?php } ?>
         </div>
      </div>
   </section>
   <section class="py-4 bg-yellow-200"></section>
   <?php include('footer.php'); ?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="assets/JS/main.js"></script>
   <script src="assets/lightbox/simple-lightbox.js"></script>
   <script>
      (function() {
         var $gallery = new SimpleLightbox('.gallery a', {});
      })();
   </script>
</body>

</html>
