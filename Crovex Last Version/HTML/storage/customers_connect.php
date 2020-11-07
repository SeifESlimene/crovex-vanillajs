<?php
$connection = mysqli_connect('localhost', 'root', '');
$db         = mysqli_select_db($connection, 'pjdb');

$query     = 'select * from customer_table';
$query_run = mysqli_query($connection, $query);
$result    = [];

if ($query_run) {
    foreach ($query_run as $row) {
        $result[] = $row;
    }
}

echo json_encode($result);