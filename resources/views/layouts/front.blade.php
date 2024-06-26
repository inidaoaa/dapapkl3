<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./front/assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus: Your One-Stop Destination for Fashion and Style</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="./front/css/swiper10-bundle.min.css">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="./front/css/bootstrap-5.3.2.min.css">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="css/front/nouislider.min.css">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="css/front/aos-3.0.0.css">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="./front/css/style.css">



</head>

<body>


    <!--------------- header-section --------------->
   @include('layouts.front.nav')
    <!--------------- header-section-end --------------->

<main>
    @yield('content')
</main>
    <!--------------- footer-section--------------->
 @include('layouts.front.footer')
    <!--------------- footer-section-end--------------->














    <!--------------- jQuery ---------------->
    <script src="front/assets/js/jquery_3.7.1.min.js"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="front/assets/js/bootstrap_5.3.2.bundle.min.js"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="front/assets/js/nouislider.min.js"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="front/assets/js/aos-3.0.0.js"></script>

    <!--------------- swiper-js ---------------->
    <script src="front/assets/js/swiper10-bundle.min.js"></script>

    <!--------------- additional-js ---------------->
    <script src="front/assets/js/shopus.js"></script>


</body>

</html>
