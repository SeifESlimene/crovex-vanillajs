<?php
$connection = mysqli_connect('localhost', 'root', '');
$db         = mysqli_select_db($connection, 'pjdb');

$result     = file_get_contents('php://input');
$jsonObject = json_decode($result);

$id = intval($jsonObject->id);

if ($jsonObject->view == 'stock-yarn') {
    $query     = "DELETE FROM stock_yarn WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        header('Location: stock-yarn.php');
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
} else if ($jsonObject->view == 'stock-fabric') {
    var_dump('hh');
    $query     = "DELETE FROM stock_fabric WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        header('Location: stock-fabric.php');
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
} else {
    $query     = "DELETE FROM order_fabric WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        header('Location: stock-orders.php');
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
