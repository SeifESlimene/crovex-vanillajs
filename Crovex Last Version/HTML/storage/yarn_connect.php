<?php
$connection = mysqli_connect('localhost', 'root', '');
$db         = mysqli_select_db($connection, 'pjdb');

$result     = file_get_contents('php://input');
$jsonObject = json_decode($result, true);

$query     = "select yarn_type from stock_yarn where customer='$jsonObject'";
$query_run = mysqli_query($connection, $query);

$result    = [];

if ($query_run) {
    foreach ($query_run as $row) {
        $result[] = $row;
    }
}

echo json_encode($result);
