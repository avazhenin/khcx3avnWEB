<!DOCTYPE html>

<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kazakhstan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <script src="js/jquery-1.11.0.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <link rel="stylesheet" href="css/popupcss/popup.css">

    <script src="js/popupDialog/popup.js"></script>

    <!--    things to make slider work-->
    <link rel="stylesheet" href="css/detailedSlider/detailedSlider.css">
    <script type="text/javascript" src="js/detailedSlider/detailedSlider.js"></script>
    <!--    things to make slider work-->

    <!--    perform get to retrieve slides-->
    <script>
        function getFoodDetailed(id) {
            var url = "getFoodDetailed.php";
            var postData = {'food_id': id};
            var dataType = "json";


            function myFunc(data) {
                document.getElementById('description').innerHTML = data.food_desc;
                document.getElementById('slider').innerHTML = data.html;
                startSlider();
            }

            $.ajax({
                url: url,
                dataType: dataType,
                success: myFunc,
                data: postData
            });
        }
    </script>
</head>

<body>

<section class="header">
    <?php
    $index = '';
    $about = '';
    $feedback = '';
    $food = 'class = "active"';
    $facts = '';
    $landscape = '';
    $contact = '';
    include './navigation.php';
    ?>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>All about national food</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active" style="color: yellow;">Food</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div id="popup">
        <div id="slider"></div>
        <div
            style="text-align: left; background-color: #ffffff; top: 0; left: 0; position: relative; width: 100%; height: 100%;">
            <p id="description"></p>
        </div>
        <div style="z-index: 1; background-color: red">
            <button class="btn btn-large btn-info" id="close" style="width: 100%;" onclick="return false">Close</button>
        </div>
    </div>
    <div id="shadow"
         style="width: 100%; min-height: 100%; background-color: #000; position: absolute; left: 0; top: 0; z-index: 0; display: none;"></div>
</section>

<section class="content">
    <div class="row-fluid">

        <?php
        include 'databaseParams.php';

        $conn = mysql_connect($databaseHost, $databaseUser, $databasePass);
        $selectedDB = mysql_select_db($databaseName, $conn);

        mysql_query("SET character_set_results = 'utf8'", $conn);

        if ($conn) {
            $sql = "select f.food_id, f.food_title, f.img from food f";

            if ($result = mysql_query($sql, $conn)) {
                while ($row = mysql_fetch_array($result)) {
                    echo '<div class="span3">';
                    echo '<div class="box">';
                    echo '<p><img src="' . $row['img'] . '" style="height:250px; width:100%;"></p>';
                    echo '<h2 style="text-align:center;">' . $row['food_title'] . '</h2>';
                    echo '<button class="btn btn-large btn-info open_popup" style="width: 100%;"
                                    onclick="getFoodDetailed(' . $row['food_id'] . ')">';
                    echo 'View';
                    echo '</button>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                mysql_close($conn);
            }
        }

        ?>
    </div>
</section>

<?php include './footer.php'; ?>
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>