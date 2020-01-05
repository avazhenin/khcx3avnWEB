<?php
include 'databaseParams.php';

$conn = mysql_connect($databaseHost, $databaseUser, $databasePass);
$selectedDB = mysql_select_db($databaseName, $conn);

mysql_query("SET character_set_results = 'utf8'", $conn);


if ($conn) {
    $imgArray = array();
    $sql = "select path, imgDesc, param1 from imgs where path like '%HomeBrief%'";

    if ($result = mysql_query($sql, $conn)) {
        while ($row = mysql_fetch_array($result)) {
            $imgArray[] = $row;
        }
        echo '<section id="recent-works" style="text-align:center">';
        echo '<div class="container"  style="text-align:center">';
        echo '<div class="center">';
        echo '<h3>Quick look inside</h3>';
        echo '<p class="lead">Look at some interesting things we have</p>';
        echo '</div>     ';
        echo '<ul class="gallery col-4">';

        foreach ($imgArray as $key => $value) {
            echo '<li>';
            echo '<div class="preview">';
            echo '<img alt=" " src="' . $value['path'] . '" style="width: 350px; height: 200px;">';
            echo '<div class="overlay">';
            echo '</div>';
            echo '<div class="links">';
            echo '<a data-toggle="modal" href="#modal-' . $key . '"><i class="icon-eye-open"></i></a><a href="' . $value['param1'] . '"><i class="icon-link"></i></a>';
            echo '</div>';
            echo '</div>';
            echo '<div class="desc" style="text-align: center">';
            echo '<h5>' . $value['imgDesc'] . '</h5>';
            echo '</div>';
            echo '<div id="modal-' . $key . '" class="modal hide fade">';
            echo '<a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>';
            echo '<div class="modal-body">';
            echo '<img src="' . $value['path'] . '" alt=" " width="100%" style="max-height:400px">';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</section>';
    }
}
?>

