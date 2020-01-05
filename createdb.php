<?php
include 'databaseParams.php';

$dbuser = 'root';
$dbpass = 'root';
$script = "KazakhstanDB.sql";
$tables_count = 8;

$conn = mysql_connect($databaseHost, $databaseUser, $databasePass);

$command = "mysql -u " . $dbuser . " -p" . $dbpass . " < {$script}";

$output = null;
$err = null;

$msg = exec($command, $output, $err);

if ($err == 0) {
    echo 'command ' . $command . ' has been executed successfully' . '</br>';
} else {
    echo 'undefined error occured, while executing </br>' . $command . '</br>';
}

$sql = 'select count(*) as cnt from information_schema.TABLES sch where sch.TABLE_SCHEMA=\' ' . $databaseName . '\'';
if ($result = mysql_query($sql, $conn)) {
    $row = mysql_fetch_row($result);
    if ($row['cnt'] = $tables_count) {
        echo 'Database <b>' . $databaseName . '</b> created successfully' . '</br>';
    } else {
        echo 'Error in executing ' . $script . '</br>';
    }
} else {
    echo 'Error executing query ' . $sql . '</br>';

    $sql = 'DROP Database ' . $databaseName . '</br>';

    $retval = mysql_query($sql, $conn);

    if (!$retval) {
        die('Could not drop database: ' . mysql_error()) . '</br>';
        exit;
    } else {
        echo "Database " . $databaseName . " dropped successfully\n" . '</br>';
    }
}

mysql_close($conn);
