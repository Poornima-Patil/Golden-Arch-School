<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: admin-dashboard.php");
}
if (isset($_GET['Message'])) {
    $message = $_GET['Message'];
}
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
    <?php include('header.php') ?>
    <section class="py-16 bg-yellow-200">
        <div class="wrapper">
            <h1 class="my-3 text-left text-3xl font-bold leading-snug">
                Admin Login
            </h1>
            <form action="login.php" method="post" class="mt-4 h-64 text-lg">
                <div class="sm:flex items-baseline">
                    <span class="block w-24">Username : </span>
                    <input class="w-64 sm:ml-3 mb-4" type="text" name="username"></td>
                </div>
                <div class="sm:flex items-baseline">
                    <span class="block w-24">Password : </span>
                    <input class="w-64 sm:ml-3 mb-4" type="password" name="password"></td>
                </div>
                <button class="bg-yellow-700 text-white px-6 py-1 mt-3" type="submit" value="Submit" name="submit">Submit</button>
                <div class="mt-4 text-base text-gray-700">
                    <?php
                    if (isset($message))
                        echo $message;
                    ?>
                </div>
            </form>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/JS/main.js"></script>
</body>

</html>