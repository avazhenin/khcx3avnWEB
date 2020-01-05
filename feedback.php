<!DOCTYPE html>
<html>
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

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src="js/popupDialog/popup.js"></script>

    <script type="text/javascript">
        function validateForm() {
            var username = document.forms["feedbackForm"]["username"].value;
            var email = document.forms["feedbackForm"]["email"].value;
            var feedback = document.forms["feedbackForm"]["feedback"].value;

            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");


            if (username == null || username == "") {
                alert("username field must be filled out");
                return false;
            }
            if (email == null || email == "") {
                alert("email field must be filled out");
                return false;
            }
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
                alert("Not a valid e-mail address");
                return false;
            }
            if (feedback == null || feedback == "") {
                alert("feedback field must be filled out");
                return false;
            }

            $('#submitFeedback').click(function () {
                $('#popup').fadeOut(300);
            });
        }
    </script>

</head>

<body>
<div id="popup">
    <form class="center" action='putfeedback.php' method="POST" name="feedbackForm"
          onsubmit="return validateForm()">
        <fieldset class="registration-form">
            <div class="control-group">
                <!-- Username -->
                <div class="controls">
                    <input type="text" id="username" name="username" placeholder="Username" class="input-xxlarge">
                </div>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="e-mail" class="input-xxlarge">
                </div>
                <div class="controls">
                    <textarea name="feedback" id="feedback" required="required" class="input-block-level"
                              rows="8"></textarea>
                    <!--                    <input type="text" id="feedback" name="feedback" placeholder="feedback" class="input-xxlarge">-->
                </div>
                <div class="controls">
                    <button class="btn btn-success btn-large btn-block" id="submitFeedback">Leave feedback</button>
                    <button class="btn btn-success btn-large btn-block" onclick="return false" id="close">Close
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<section class="header">

    <?php
    $index = '';
    $about = '';
    $feedback = 'class = "active"';
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
                    <button class="btn btn-large btn-warning open_popup">Leave feedback</button>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active" style="color: yellow;">Leave feedback</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div id="shadow"
         style="width: 100%; min-height: 100%; background-color: #000; position: absolute; left: 0; top: 0; z-index: 0; display: none;"></div>
</section>

<section class="content">

    <?php

    include 'databaseParams.php';

    $conn = mysql_connect($databaseHost, $databaseUser, $databasePass);
    $selectedDB = mysql_select_db($databaseName, $conn);


    if ($conn) {
        $sql = "select username, email, feedback, insertDate from feedback";
        if ($result = mysql_query($sql, $conn)) {
            $int = 0;
            echo '<div class="accordion" id="accordion2">';
            while ($row = mysql_fetch_array($result)) {
                echo '<div class="accordion-group">';

                echo '<div class="accordion-heading">';

                echo '<div style="position:relative;">'; //open Container for feedbacks

                echo '<div class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#' . $row['username'] . $int . '">';
                echo $row['username'];
                echo '<div class="accordion-toggle collapsed" style="position: absolute; right: 0; top: 0;">' . $row['insertDate'] . '</div>';
                echo '</div>';

                echo '</div>'; //close Container for feedbacks

                echo '</div>';

                echo '<div id="' . $row['username'] . $int . '" class="accordion-body collapse">';
                echo '<div class="accordion-inner">';
                echo $row['feedback'];
                echo '</div>';
                echo '</div>';

                echo '</div>';
                $int++;
            }
            echo '</div>';
        } else {
            mysql_close($conn);
        }
    }
    ?>
</section>

<?php include './footer.php'; ?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
