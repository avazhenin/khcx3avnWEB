<?php
include 'databaseParams.php';

$conn = mysqli_connect($databaseHost, $databaseUser, $databasePass, $databaseName);
//$selectedDB = mysql_select_db($databaseName, $conn);

$Username = mysqli_real_escape_string($conn, $_POST['username']);
$Email = mysqli_real_escape_string($conn, $_POST['email']);
$Feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

if ($conn) {
    $sql = "insert into feedback(username, email, feedback, insertDate) values('$Username', '$Email', '$Feedback', now())";
    if (!mysqli_query($conn, $sql)) {
        echo mysqli_error($conn);
    } else {
        header('location: feedback.php?feedback=success');
    }
} else {
    mysqli_close($conn);
    echo mysqli_error($conn);
}
