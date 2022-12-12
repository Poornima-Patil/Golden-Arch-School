<?php session_start();
if (!isset($_SESSION['login'])) {
   header("Location: admin-login.php");
}
include('database-helper.php');
$data = fetchData('notices', 'id=1');
$notices = $data[0];
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
   <script src="https://cdn.tiny.cloud/1/ulm8fmu3kk3ykbdc2b29dxz66fqupcs5d7nva8ib58q9q9sr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <script>
      tinymce.init({
         selector: 'textarea',
         plugins: 'image',
         image_uploadtab: true,
         images_upload_url: 'notice-image-upload.php',
         content_css: 'https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css, styles.css, tinymce.css'
      });
   </script>
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
               <a href="admin-gallery.php" class="text-blue-700 hover:text-blue-800">
                  Upload Photos
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
            Update Notice Board
         </h1>
         <form action="action-update-notice.php" class="max-w-5xl" method="post">
            <label class="block text-2xl font-bold mb-3">General Notice</label>
            <textarea class="w-full bg-white border-0 outline-none p-6" name="general" id="general" rows="10">
                    <?php echo $notices['general']; ?>
                </textarea>
            <label class="block text-2xl font-bold mt-8 mb-3">Pre-Primary</label>
            <textarea class="w-full bg-white border-0 outline-none p-6" name="pre_primary" id="pre_primary" rows="20">
                <?php echo $notices['pre_primary']; ?>
                </textarea>
            <label class="block text-2xl font-bold mt-8 mb-3">Elementary</label>
            <textarea class="w-full bg-white border-0 outline-none p-6" name="elementary" id="elementary" rows="20">
                <?php echo $notices['elementary']; ?>
                </textarea>
            <button type="submit" id="submit" class="bg-yellow-700 text-white px-8 py-2 mt-5">Save Changes</button>
         </form>
      </div>
   </section>
</body>

</html>
