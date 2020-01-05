<?php
include 'databaseParams.php';

$conn = mysql_connect($databaseHost, $databaseUser, $databasePass);
$selectedDB = mysql_select_db($databaseName, $conn);

mysql_query("SET character_set_results = 'utf8'", $conn);

//$re = mysql_query('SHOW VARIABLES LIKE "%character_set%";') or die(mysql_error());
//while ($r = mysql_fetch_assoc($re)) {
//    var_dump($r);
//    echo "<br />";
//}


$res = null;
if ($conn) {
    $sql = 'select fd.food_detail_img, f.description as food_desc from food f ' .
        'join food_detail fd on (f.food_id=fd.food_id) ' .
        'where f.food_id=' . $_GET['food_id'];
//    echo $sql;
    $res .= '<div id="slideshow">';
    $res .= '<div id="slidesContainer">';

    $text = 'empty';

    if ($result = mysql_query($sql, $conn)) {
        while ($row = mysql_fetch_array($result)) {
            if ($text == 'empty') {
                $text = $row['food_desc'];
            }
            $res .= '<div class="slide">';
            $res .= '<img src="' . $row['food_detail_img'] . '"/>';
            $res .= '</div>';
        }
    } else {
        mysql_close($conn);
    }

    $res .= '</div>';
    $res .= '</div>';
}

echo json_encode(array('html' => $res, 'food_desc' => $text));
?>