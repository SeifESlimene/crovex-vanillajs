<?php
$connection = mysqli_connect('localhost', 'root', '');
$db         = mysqli_select_db($connection, 'pjdb');

$result     = file_get_contents('php://input');
$jsonObject = json_decode($result, true);

var_dump($jsonObject['0']);

if ($jsonObject['view'] === 'stock-yarn') {
    $id              = intval($jsonObject[0]);
    $customer        = trim($jsonObject[1]);
    $yarn_type       = trim($jsonObject[2]);
    $yarn_count      = trim($jsonObject[3]);
    $yarn_color      = trim($jsonObject[4]);
    $delivery_date   = trim($jsonObject[5]);
    $yarn_lot        = trim($jsonObject[6]);
    $yarn_weight     = trim($jsonObject[7]);
    $yarn_unit_price = trim($jsonObject[8]);

    if ($delivery_date === '') {
        // $delivery_date = '1970-01-01';
        $delivery_date = date('Y-m-d');
    }

    if ($yarn_unit_price === '') {
        $yarn_unit_price .= '0 TND';
    } else {
        if (strpos($yarn_unit_price, 'TND') === false) {
            $yarn_unit_price .= ' TND';
        }
    }

    if ($yarn_weight === '') {
        $yarn_weight .= '0 KG';
    } else {
        if (strpos($yarn_weight, 'KG') === false) {
            $yarn_weight .= ' KG';
        }
    }

    $query     = "UPDATE stock_yarn SET customer='$customer', yarn_type='$yarn_type', yarn_count='$yarn_count', yarn_color='$yarn_color', delivery_date='$delivery_date', yarn_lot='$yarn_lot', yarn_weight='$yarn_weight', yarn_unit_price='$yarn_unit_price'  where id='$id' ";
    $query_run = mysqli_query($connection, $query);

    var_dump($query_run);

    if ($query_run) {
        header('Location: stock-yarn.php');
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} else if ($jsonObject['view'] === 'stock-fabric') {
    $id                = intval($jsonObject[0]);
    $customer          = trim($jsonObject[1]);
    $fabric_type       = trim($jsonObject[2]);
    $machine           = trim($jsonObject[3]);
    $fabric_weight     = trim($jsonObject[4]);
    $cut_date          = trim($jsonObject[5]);
    $fabric_color      = trim($jsonObject[6]);
    $fabric_unit_price = trim($jsonObject[7]);
    $yarn_lot          = trim($jsonObject[8]);
    $yarn_count        = trim($jsonObject[9]);
    $gauge             = trim($jsonObject[10]);

    if ($delivery_date === '') {
        // $delivery_date = '1970-01-01';
        $delivery_date = date('Y-m-d');
    }

    if ($fabric_unit_price === '') {
        $fabric_unit_price .= '0 TND';
    } else {
        if (strpos($fabric_unit_price, 'TND') === false) {
            $fabric_unit_price .= ' TND';
        }
    }

    if ($fabric_weight === '') {
        $fabric_weight .= '0 KG';
    } else {
        if (strpos($fabric_weight, 'KG') === false) {
            $fabric_weight .= ' KG';
        }
    }

    $query     = "UPDATE stock_fabric SET customer='$customer', fabric_type='$fabric_type', machine='$machine', fabric_weight='$fabric_weight', cut_date='$cut_date', fabric_color='$fabric_color', fabric_unit_price='$fabric_unit_price', yarn_lot='$yarn_lot',yarn_count='$yarn_count', gauge='$gauge'   where id='$id' ";
    $query_run = mysqli_query($connection, $query);

    var_dump($query_run);

    if ($query_run) {
        header('Location: stock-fabric.php');
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} else {
    $id             = intval($jsonObject[0]);
    $order_id       = trim($jsonObject[1]);
    $customer       = trim($jsonObject[2]);
    $fabric_type    = trim($jsonObject[3]);
    $machine_number = trim($jsonObject[4]);
    $roll_quantity  = trim($jsonObject[5]);
    $fabric_weight  = trim($jsonObject[6]);
    $yarn_lot       = trim($jsonObject[7]);
    $fabric_color   = trim($jsonObject[8]);
    $order_date     = trim($jsonObject[9]);
    $order_price    = trim($jsonObject[10]);
    $unit_price     = trim($jsonObject[11]);
    $status         = trim($jsonObject[12]);

    if ($delivery_date === '') {
        // $delivery_date = '1970-01-01';
        $delivery_date = date('Y-m-d');
    }

    if ($order_price === '') {
        $order_price .= '0 TND';
    } else {
        if (strpos($order_price, 'TND') === false) {
            $order_price .= ' TND';
        }
    }

    if ($unit_price === '') {
        $unit_price .= '0 TND';
    } else {
        if (strpos($unit_price, 'TND') === false) {
            $unit_price .= ' TND';
        }
    }

    if ($fabric_weight === '') {
        $fabric_weight .= '0 KG';
    } else {
        if (strpos($fabric_weight, 'KG') === false) {
            $fabric_weight .= ' KG';
        }
    }

    $query     = "UPDATE order_fabric SET customer='$customer', order_id='$order_id', customer='$customer', fabric_type='$fabric_type', machine_number='$machine_number', roll_quantity='$roll_quantity', fabric_weight='$fabric_weight', yarn_lot='$yarn_lot',fabric_color='$fabric_color', order_date='$order_date', order_price='$order_price',unit_price='$unit_price',status='$status' where id='$id' ";
    $query_run = mysqli_query($connection, $query);

    var_dump($query_run);

    if ($query_run) {
        header('Location: stock-orders.php');
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
