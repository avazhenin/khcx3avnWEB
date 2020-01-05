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
    $index = '';
    $about = '';
    $feedback = '';
    $food = '';
    $facts = 'class= "active"';
    $landscape = '';
    $contact = '';
    include './navigation.php';
    ?>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Interesting facts about Kazakhstan</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active" style="color: yellow;">Interesting facts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="content" style="overflow: hidden;">
    <section class="text-info" style="text-align: center;">
        <div style="width: 100%; margin-top: 50px;"></div>
        <h3>Kazakhstan: 20 Cool Facts and Random Observations</h3>

        <div style="width: 100%; margin-top: 50px;"></div>
    </section>

    <section class="services">
        <?php

        include 'databaseParams.php';

        $conn = mysql_connect($databaseHost, $databaseUser, $databasePass);
        $selectedDB = mysql_select_db($databaseName, $conn);


        if ($conn) {
            $sql = "select title, brief, img from facts";
            if ($result = mysql_query($sql, $conn)) {
                while ($row = mysql_fetch_array($result)) {
                    $data[] = $row;
                }
            }
        }

        echo '<ul class="gallery col-4">';
        for ($i = 0; $i <= ($arraySize = count($data)); $i++) {
            echo '<div class="container">';
            echo '<div class="row-fluid">';
            //        first colum
            if (($i) < $arraySize) {

                echo '<li>';
                echo '<div class="preview" style="text-align: center;">';
                echo '<img alt=" " src="' . $data[$i]['img'] . '" style="width: 200px; height: 200px;">';
                echo '<div class="overlay">';
                echo '</div>';
                echo '<div class="links">';
                echo '<a data-toggle="modal" href="#modal-' . $i . '"><i class="icon-eye-open"></i></a><a href=""><i class="icon-link"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="desc" style="text-align: center">';
                echo '<h5>' . $data[$i]['title'] . '</h5>';
                echo '<p>' . $data[$i]['brief'] . '</p>';
                echo '</div>';
                echo '<div id="modal-' . $i . '" class="modal hide fade">';
                echo '<a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>';
                echo '<div class="modal-body">';
                echo '<img src="' . $data[$i]['img'] . '" alt=" " width="100%" style="max-height:400px">';
                echo '</div>';
                echo '</div>';
                echo '</li>';

            }
            //        second column
            if (($i + 1) < $arraySize) {
                $i += 1;
                echo '<li>';
                echo '<div class="preview" style="text-align: center;">';
                echo '<img alt=" " src="' . $data[$i]['img'] . '" style="width: 200px; height: 200px;">';
                echo '<div class="overlay">';
                echo '</div>';
                echo '<div class="links">';
                echo '<a data-toggle="modal" href="#modal-' . $i . '"><i class="icon-eye-open"></i></a><a href=""><i class="icon-link"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="desc" style="text-align: center">';
                echo '<h5>' . $data[$i]['title'] . '</h5>';
                echo '<p>' . $data[$i]['brief'] . '</p>';
                echo '</div>';
                echo '<div id="modal-' . $i . '" class="modal hide fade">';
                echo '<a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>';
                echo '<div class="modal-body">';
                echo '<img src="' . $data[$i]['img'] . '" alt=" " width="100%" style="max-height:400px">';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }
            //        third column
            if (($i + 2) < $arraySize) {
                $i += 2;
                echo '<li>';
                echo '<div class="preview" style="text-align: center;">';
                echo '<img alt=" " src="' . $data[$i]['img'] . '" style="width: 200px; height: 200px;">';
                echo '<div class="overlay">';
                echo '</div>';
                echo '<div class="links">';
                echo '<a data-toggle="modal" href="#modal-' . $i . '"><i class="icon-eye-open"></i></a><a href=""><i class="icon-link"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="desc" style="text-align: center">';
                echo '<h5>' . $data[$i]['title'] . '</h5>';
                echo '<p>' . $data[$i]['brief'] . '</p>';
                echo '</div>';
                echo '<div id="modal-' . $i . '" class="modal hide fade">';
                echo '<a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>';
                echo '<div class="modal-body">';
                echo '<img src="' . $data[$i]['img'] . '" alt=" " width="100%" style="max-height:400px">';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

//        $i += 2;
        }
        echo '</ul>';
        ?>


    </section>
</section>

<?php include './footer.php'; ?>
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>