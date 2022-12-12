<?php
include('database-helper.php');
$data = fetchData('notices', 'id=1');
$notices = $data[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-67GM2WTJ1F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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
    <link rel="stylesheet" href="styles.css?v=4" />
    <title>Notice Board | Golden Arch Montessori School</title>
</head>

<body class="text-gray-800">
    <?php include('header.php') ?>
    <section class="pt-8 pb-16 bg-yellow-200">
        <div class="wrapper">
            <h1 class="my-3 text-center md:text-left uppercase text-3xl sm:text-4xl lg:text-5xl leading-snug">
                Notice Board
            </h1>
            <img src="assets/Img/board-top1.png" alt="" class="w-full mt-6">
            <div class="bg-contain bg-repeat-y relative" style="background-image: url('assets/Img/board.jpg');min-height:500px">
                <div class="relative">
                    <?php if ($notices['general'] !== "") { ?>
                        <div class="bg-white mb-10 mx-8 sm:mx-12 md:mx-16 lg:mx-20 xl:mx-24 p-6 md:p-10 shadow-xl">
                            <img src="assets/Img/push-pin.jpg" alt="" class="h-8 relative -ml-4 -mt-4 md:-ml-8 md:-mt-8">
                            <h2 class="relative -mt-2 text-2xl md:text-3xl font-bold uppercase" style="font-family: 'Alata',sans-serif;">
                                General Notice
                            </h2>
                            <div class="mt-3 notice-general">
                                <?php echo $notices['general']; ?>
                            </div>
                            <a id="btn-general" class="hidden inline-block bg-yellow-700 rounded-lg mt-3 py-1 px-4 sm:px-6 text-white cursor-pointer">View Full Notice</a>
                            <div id="generalModal" class="modal">
                                <div class="wrapper">
                                    <div class="relative bg-white p-8 mx-4 lg:mx-12">
                                        <span id="general-close" class="close close-notice">&times;</span>
                                        <h2 class="relative -mt-2 text-2xl md:text-3xl font-bold uppercase" style="font-family: 'Alata',sans-serif;">
                                            General Notice
                                        </h2>
                                        <div class="mt-3">
                                            <?php echo $notices['general']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="lg:flex mx-8 sm:mx-12 md:mx-16 lg:mx-20 xl:mx-24 lg:space-x-10">
                        <div class="bg-white flex-1 notice-preprimary-wrap p-6 md:p-10 shadow-xl mb-10 lg:mb-0">
                            <img src="assets/Img/push-pin.jpg" alt="" class="h-8 relative -ml-4 -mt-4 md:-ml-8 md:-mt-8">
                            <h2 class="relative -mt-2 text-2xl md:text-3xl font-bold uppercase" style="font-family: 'Alata',sans-serif;">
                                Pre-Primary
                            </h2>
                            <div class="mt-3 notice-preprimary">
                                <?php echo $notices['pre_primary']; ?>
                            </div>
                            <a id="btn-preprimary" class="hidden bg-yellow-700 rounded-lg mt-3 py-1 px-4 sm:px-6 text-white cursor-pointer">View Full Notice</a>
                            <div id="preprimaryModal" class="modal">
                                <div class="wrapper">
                                    <div class="relative bg-white p-8 mx-4 lg:mx-12">
                                        <span id="preprimary-close" class="close close-notice">&times;</span>
                                        <h2 class="relative -mt-2 text-2xl md:text-3xl font-bold uppercase" style="font-family: 'Alata',sans-serif;">
                                            Pre Primary Notice
                                        </h2>
                                        <div class="mt-3 overflow-x-scroll">
                                            <?php echo $notices['pre_primary']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white flex-1 notice-elementary-wrap p-6 md:p-10 shadow-xl">
                            <img src="assets/Img/push-pin.jpg" alt="" class="h-8 relative -ml-4 -mt-4 md:-ml-8 md:-mt-8">
                            <h2 class="relative -mt-2 text-2xl md:text-3xl font-bold uppercase" style="font-family: 'Alata',sans-serif;">
                                Elementary
                            </h2>
                            <div class="mt-3 notice-elementary">
                                <?php echo $notices['elementary']; ?>
                            </div>
                            <a id="btn-elementary" class="hidden inline-block bg-yellow-700 rounded-lg mt-3 py-1 px-4 sm:px-6 text-white cursor-pointer">View Full Notice</a>
                            <div id="elementaryModal" class="modal">
                                <div class="wrapper">
                                    <div class="relative bg-white p-8 mx-4 lg:mx-12">
                                        <span id="elementary-close" class="close close-notice">&times;</span>
                                        <h2 class="relative -mt-2 text-2xl md:text-3xl font-bold uppercase" style="font-family: 'Alata',sans-serif;">
                                            Elementary Notice
                                        </h2>
                                        <div class="mt-3 overflow-x-scroll">
                                            <?php echo $notices['elementary']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/Img/board-bottom1.png" alt="" class="w-full">
        </div>
    </section>
    <?php include('footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="assets/JS/main.js"></script>
    <script>
        $(document).ready(function() {
            var openModal;
            <?php if ($notices['general'] !== "") { ?>
                var generalNoticeHeight = $('.notice-general')[0].scrollHeight;
                if (generalNoticeHeight > 150) {
                    $('#btn-general').css('display', 'inline-block');
                }
                var modal = document.getElementById("generalModal");
                var btn = document.getElementById("btn-general");
                btn.onclick = function() {
                    modal.style.display = "block";
                    openModal = modal;
                };
                var span = document.getElementById("general-close");
                span.onclick = function() {
                    modal.style.display = "none";
                };
            <?php } ?>

            var preprimaryNoticeHeight = $('.notice-preprimary')[0].scrollHeight;
            if (preprimaryNoticeHeight > 250) {
                $('#btn-preprimary').css('display', 'inline-block');
            }
            var modal1 = document.getElementById("preprimaryModal");
            var btn1 = document.getElementById("btn-preprimary");
            btn1.onclick = function() {
                modal1.style.display = "block";
                openModal = modal1;
            };
            var span1 = document.getElementById("preprimary-close");
            span1.onclick = function() {
                modal1.style.display = "none";
            };

            var elementaryNoticeHeight = $('.notice-elementary')[0].scrollHeight;
            if (elementaryNoticeHeight > 250) {
                $('#btn-elementary').css('display', 'inline-block');
            }
            var modal2 = document.getElementById("elementaryModal");
            var btn2 = document.getElementById("btn-elementary");
            btn2.onclick = function() {
                modal2.style.display = "block";
                openModal = modal2;
            };
            var span2 = document.getElementById("elementary-close");
            span2.onclick = function() {
                modal2.style.display = "none";
            };
        });
    </script>
</body>

</html>