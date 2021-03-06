<!DOCTYPE html>

<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kazakhstan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
<section class="header">
    <?php
    $index = 'class = "active"';
    $about = '';
    $feedback = '';
    $food = '';
    $facts = '';
    $landscape = '';
    $contact = '';
    include './navigation.php';
    ?>
</section>

<section class="content">
    <?php include './slider.php'; ?>

    <?php include './HomeBrief1.php'; ?>
</section>

<?php include './footer.php'; ?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript">
    $(function () {
        var Page = (function () {

            var $navArrows = $('#nav-arrows'),
                slitslider = $('#slider').slitslider({
                    autoplay: true
                }),
                init = function () {
                    initEvents();
                },
                initEvents = function () {
                    $navArrows.children(':last').on('click', function () {
                        slitslider.next();
                        return false;
                    });

                    $navArrows.children(':first').on('click', function () {
                        slitslider.previous();
                        return false;
                    });
                };

            return {init: init};

        })();

        Page.init();
    });
</script>
<!-- /SL Slider -->
</body>
</html>