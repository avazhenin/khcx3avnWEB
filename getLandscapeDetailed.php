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
    $sql = 'select imgPath, description as descr from nature_detail nd join nature n on (n.nature_id=nd.nature_id) where n.nature_id=' . $_GET['nature_id'];

    $res .= '<div id="slideshow">';
    $res .= '<div id="slidesContainer">';

    $text = 'empty';

    if ($result = mysql_query($sql, $conn)) {
        while ($row = mysql_fetch_array($result)) {
            if ($text == 'empty') {
                $text = $row['descr'];
            }
            $res .= '<div class="slide">';
            $res .= '<img src="' . $row['imgPath'] . '"/>';
            $res .= '</div>';
        }
    } else {
        mysql_close($conn);
    }

    $res .= '</div>';
    $res .= '</div>';
}

echo json_encode(array('html' => $res, 'descr' => $text));
?>