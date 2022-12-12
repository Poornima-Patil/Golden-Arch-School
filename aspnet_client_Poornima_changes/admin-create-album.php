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
   <title>Golden Arch | Admin</title>
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
         <a href="admin-gallery.php" class="text-blue-700">&lt; Back to Albums</a>
         <h2 class="text-2xl font-bold py-3">Create new album</h2>
         <form action="action-create-album.php" class="mt-3 max-w-3xl" method="post">
            <label class="block text-lg">Album name</label>
            <input type="text" name="title" id="title" placeholder="Type album name" class="mt-2 w-full bg-white border border-yellow-500 outline-none px-4 py-2" />
            <button type="submit" class="inline-block -mt-8 bg-yellow-700 text-white px-8 py-2">Create</button>
         </form>
      </div>
   </section>
</body>

</html>
