<?php session_start();
if (!isset($_SESSION['login'])) {
   header("Location: admin-login.php");
}
$album = $_GET['album'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Golden Arch | Upload Photos</title>

   <meta charset="UTF-8" />
   <meta name="robots" content="noindex">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon" />
   <!-- fonts -->
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="styles.css?v=2" />
   <link href="dist/font/font-fileuploader.css" rel="stylesheet" />
   <!-- styles -->
   <link href="dist/jquery.fileuploader.min.css" media="all" rel="stylesheet" />
   <link href="css/jquery.fileuploader-theme-gallery.css" media="all" rel="stylesheet" />
   <!-- js -->
   <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
   <script src="dist/jquery.fileuploader.min.js" type="text/javascript"></script>
   <script type="text/javascript">
      var album = <?php echo $album; ?>
   </script>
   <script src="js/custom.js" type="text/javascript"></script>
   <style>
      .fileuploader {
         max-width: 100%;
      }
   </style>
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
         <a href="admin-gallery.php" class="text-blue-700">&lt; Back to Albums</a>
         <h1 class="my-3 text-left text-3xl md:text-4xl font-bold leading-snug">
            Upload Photos
         </h1>
         <div class="form">
            <input type="file" name="files" class="gallery_media" />
         </div>
      </div>
   </section>
</body>

</html>
