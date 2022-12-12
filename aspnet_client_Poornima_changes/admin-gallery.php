<?php session_start();
if (!isset($_SESSION['login'])) {
   header("Location: admin-login.php");
}
include('database-helper.php');
$albums = fetchData('albums');
$count = count($albums);
?>
<!DOCTYPE html>
<html>

<head>
   <title>Golden Arch | Upload Photos</title>
   <meta charset="utf-8">
   <meta name="robots" content="noindex">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon" />
   <link rel="stylesheet" type="text/css" href="css/reset.css" />
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="styles.css?v=2" />
</head>

<body class="text-gray-800">
   <header class="nav-container nav-container-white py-2 shadow-md">
      <div class="wrapper">
         <nav class="flex items-center bg-white flex-wrap">
            <div class="sm-logo mr-8 xl:mr-12">
               <a href="index.php">
                  <img class="about-us-logo" src="assets/Img/golden-arch-montessori-top-ten-hsr-layout-bangalore-logo.jpg" alt="Golden Arch Montessori Logo" /></a>
            </div>
            <div class="ml-auto mr-8">
               <a href="admin-dashboard.php" class="text-blue-700 hover:text-blue-800">
                  Update Notice Board
               </a>
            </div>
            <div>
               <a href="admin-logout.php" class="text-blue-700 hover:text-blue-800">
                  Logout
               </a>
            </div>
         </nav>
      </div>
   </header>
   <section class="py-16 bg-yellow-200">
      <div class="wrapper">
         <h1 class="my-3 text-left text-3xl md:text-4xl font-bold leading-snug">
            Upload Photos
         </h1>
         <a href="admin-create-album.php" class="inline-block bg-yellow-700 text-white px-8 py-2">+ Create new album</a>
         <h2 class="mt-5 text-2xl font-bold">Albums (<?php echo $count; ?>)</h2>
         <div class="mt-4 grid sm:grid-cols-2 md:grid-cols-3 gap-12">
            <?php
            foreach ($albums as $album) {
               $albumId = $album['id'];
            ?>
               <div>
                  <div class="p-4 bg-white max-w-sm">
                     <?php
                     $covers = fetchData("gallery", "album = $albumId ORDER BY is_main DESC, `index` ASC");
                     $cover = $covers[0];
                     $date = strtotime($album['date']);
                     $dateToDisplay = date("jS M, Y", $date);
                     ?>
                     <a href="admin-upload-photos.php?album=<?php echo $albumId; ?>">
                        <img src="<?php echo $cover['file']; ?>" class="w-full h-40 sm:h-40 md:h-56 object-cover mb-4" />
                     </a>
                     <p class="text-lg font-bold"><?php echo $album['title']; ?></p>
                     <p class="text-gray-700"><?php echo $dateToDisplay; ?></p>
                     <form action="action-delete-album.php" method="post">
                        <input type="hidden" name="album" value="<?php echo $albumId; ?>" />
                        <button type="submit" class="inline-block mt-2 bg-gray-200 px-4 py-1 text-sm" onclick="return confirm('Are you sure you want to delete this entire album with all the photos in it permanently?')">Delete album</button>
                     </form>
                  </div>
               </div>
            <?php
            }
            ?>
         </div>
      </div>
   </section>
</body>

</html>
