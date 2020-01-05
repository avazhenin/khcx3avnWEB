<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>About Us | Nova</title>
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

<?php
$index = '';
$about = 'class = "active"';
$feedback = '';
$food = '';
$facts = '';
$landscape = '';
$contact = '';
include './navigation.php';
?>

<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>About Kazakhstan</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active" style="color: yellow;">About Kazakhstan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h2>Abstract</h2>

            <p>Kazakhstan (Listeni/ˌkɑːzəkˈstɑːn/ or /ˌkæzəkˈstæn/; Kazakh: Қазақстан Qazaqstan, قازاقستان, pronounced
                [qɑzɑqstɑ́n]; Russian: Казахстан [kəzɐxˈstan]), officially the Republic of Kazakhstan, is a contiguous
                transcontinental country in Central Asia, with its smaller part west of the Ural River in Europe.[2]
                Kazakhstan is the world's largest landlocked country by land area and the ninth largest country in the
                world; its territory of 2,727,300 square kilometres (1,053,000 sq mi) is larger than Western
                Europe.[2][6] It has borders with (clockwise from the north) Russia, China, Kyrgyzstan, Uzbekistan, and
                Turkmenistan, and also adjoins a large part of the Caspian Sea. The terrain of Kazakhstan includes
                flatlands, steppe, taiga, rock canyons, hills, deltas, snow-capped mountains, and deserts. With 17
                million people (2013 estimate)[7] Kazakhstan has the 62nd largest population in the world, though its
                population density is less than 6 people per square kilometre (15 people per sq. mi.). The capital is
                Astana, where it was moved from Almaty in 1997.</p>
        </div>
        <div class="span6" style="text-align: center;">
            <h2>Ethnic groups</h2>

            <div>
                <?php
                include 'databaseParams.php';

                $conn = mysql_connect($databaseHost, $databaseUser, $databasePass);
                $selectedDB = mysql_select_db($databaseName, $conn);

                mysql_query("SET character_set_results = 'utf8'", $conn);

                if ($conn) {
                    $imgArray = array();
                    $sql = "select nationality, percent from Ethnic_groups";

                    if ($result = mysql_query($sql, $conn)) {
                        while ($row = mysql_fetch_array($result)) {
                            $imgArray[] = $row;
                        }

                        foreach ($imgArray as $key => $value) {
                            $data = $value['nationality'] .'['. $value['percent'].']';
                            switch ($value['percent']) {
                                case $value['percent'] >= 30:
                                    echo '<div class="progress progress-success"><div class="bar" style="width: ' . $value['percent'] . '%; text-align:left; padding-left:10px;">' . $data . '%</div></div>';
                                    break;
                                case $value['percent'] >= 15 and $value['percent'] < 30:
                                    echo '<div class="progress progress-warning"><div class="bar" style="width: ' . $value['percent'] . '%; text-align:left; padding-left:10px;">' . $data . '%</div></div>';
                                    break;
                                case $value['percent'] >= 3 and $value['percent'] < 15:
                                    echo '<div class="progress progress-info"><div class="bar" style="width: ' . $value['percent'] . '%; text-align:left; padding-left:10px;">' . $data . '%</div></div>';
                                    break;
                                case $value['percent'] >= 0 and $value['percent'] < 3:
                                    echo '<div class="progress progress-danger"><div class="bar" style="width: ' . $value['percent'] . '%; text-align:left; padding-left:10px;">' . $data . '%</div></div>';
                                    break;
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="row-fluid">
        <div class="span6">
            <h2>Map</h2>

            <p>As it extends across both sides of the Ural River, Kazakhstan one of only two landlocked countries in the
                world that lies on two continents.
                With an area of 2,700,000 square kilometres (1,000,000 sq mi) – equivalent in size to Western Europe –
                Kazakhstan is the ninth-largest country and largest landlocked country in the world. While it was part
                of the Soviet Union, Kazakhstan lost some of its territory to China's Xinjiang[citation needed] and some
                to Uzbekistan's Karakalpakstan. It shares borders of 6,846 kilometres (4,254 mi) with Russia, 2,203
                kilometres (1,369 mi) with Uzbekistan, 1,533 kilometres (953 mi) with China, 1,051 kilometres (653 mi)
                with Kyrgyzstan, and 379 kilometres (235 mi) with Turkmenistan. Major cities include Astana, Almaty,
                Karagandy, Shymkent, Atyrau and Oskemen. It lies between latitudes 40° and 56° N, and longitudes 46° and
                88° E. While located primarily in Asia, a small portion of Kazakhstan is also located west of the Urals
                in Eastern Europe.</p>
        </div>
        <div class="span6" style="text-align: center;">
            <h2>Location on the map</h2>

            <div style="text-align: center; margin-top: 20px;">
                <img src="images/Landscape/Kazakhstan_(orthographic_projection).svg.png" width="250" height="200"/>
                <img src="images/HomeBrief/Provinces_du_Kazakhstan.png" width="250" height="200"/>
            </div>
        </div>
    </div>
    <hr>
    <div class="row-fluid">
        <div class="span6" style="width: 100%">
            <h3>Facts</h3>
            <table class="factsTable">
                <tr>
                    <td class="test">President</td>
                    <td>Nursultan A. Nazarbayev (1990)</td>
                </tr>
                <tr>
                    <td class="test">Prime Minister</td>
                    <td>Serik Akhmetov (2012)</td>
                </tr>
                <tr>
                    <td class="test">Land area</td>
                    <td>1,049,150 sq mi (2,717,300 sq km); total area: 1,049,150 sq mi (2,717,300 sq km)</td>
                </tr>
                <tr>
                    <td class="test">Population (2012 est.)</td>
                    <td>17,522,010 (growth rate: 1.235%); birth rate: 20.44/1000; infant mortality rate: 23.06/1000;
                        life expectancy: 69.63
                    </td>
                </tr>
                <tr>
                    <td class="test">Capital (2009 est.)</td>
                    <td>Astana 650,000</td>
                </tr>
                <tr>
                    <td class="test">Largest city</td>
                    <td>Almaty 1.383 million</td>
                </tr>
                <tr>
                    <td class="test">Monetary unit</td>
                    <td>Tenge</td>
                </tr>
            </table>
        </div>
    </div>

    <hr>
</section>
<?php include './footer.php'; ?>

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
