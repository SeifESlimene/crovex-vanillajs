<?php

// $connection = mysqli_connect('localhost', 'root', '');
// $db         = mysqli_select_db($connection, 'pjdb');

// if (isset($_POST['insertdata'])) {
//     //   $id = $_POST['id'];
//     $customer        = trim($_POST['customer']);
//     $yarn_type       = trim($_POST['yarn_type']);
//     $yarn_count      = trim($_POST['yarn_count']);
//     $yarn_color      = trim($_POST['yarn_color']);
//     $delivery_date   = trim($_POST['delivery_date']);
//     $yarn_lot        = trim($_POST['yarn_lot']);
//     $yarn_weight     = trim($_POST['yarn_weight']);
//     $yarn_unit_price = trim($_POST['yarn_unit_price']);
//     $action          = trim('<button id="bEdit" type="button" class="btn btn-sm btn-soft-success btn-circle mr-2" onclick="rowEdit(this);" style=""><i class="dripicons-pencil"></i></button><button id="bElim" type="button" class="btn btn-sm btn-soft-danger btn-circle" onclick="rowElim(this);" style=""><i class="dripicons-trash" aria-hidden="true"></i></button><button id="bAcep" type="button" class="btn btn-sm btn-soft-purple mr-2 btn-circle" style="display: none;" onclick="rowAcep(this);"><i class="dripicons-checkmark"></i></button><button id="bCanc" type="button" class="btn btn-sm btn-soft-info btn-circle" style="display: none;" onclick="rowCancel(this);"><i class="dripicons-cross" aria-hidden="true"></i></button>');

//     $query = "INSERT INTO stock_yarn (`customer`,`yarn_type`,`yarn_count`,`yarn_color`,`delivery_date`,`yarn_lot`,`yarn_weight`,`yarn_unit_price`, `action`) VALUES ('$customer','$yarn_type','$yarn_count','$yarn_color','$delivery_date','$yarn_lot','$yarn_weight','$yarn_unit_price','$action')";
//     // $query     = "INSERT INTO stock_yarn (`customer`,`yarn_type`,`yarn_count`,`yarn_color`,`delivery_date`,`yarn_lot`,`yarn_weight`,`yarn_unit_price`) VALUES ('$customer','$yarn_type','$yarn_count','$yarn_color','$delivery_date','$yarn_lot','$yarn_weight','$yarn_unit_price')";
//     $query_run = mysqli_query($connection, $query);

//     if ($query_run) {
//         header('Location: stock-yarn.php');
//     } else {
//         echo '<script> alert("Data Not Saved"); </script>';
//     }
// }

$connection = mysqli_connect('localhost', 'root', '');
$db         = mysqli_select_db($connection, 'pjdb');

$result     = file_get_contents('php://input');
$jsonObject = json_decode($result, true);

if ($jsonObject['view'] === 'stock-yarn') {
    $id              = trim(intval($jsonObject[0]));
    $customer        = trim($jsonObject[1]);
    $yarn_type       = trim($jsonObject[2]);
    $yarn_count      = trim($jsonObject[3]);
    $yarn_color      = trim($jsonObject[4]);
    $delivery_date   = trim($jsonObject[5]);
    $yarn_lot        = trim($jsonObject[6]);
    $yarn_weight     = trim($jsonObject[7]);
    $yarn_unit_price = trim($jsonObject[8]);
    $action          = trim($jsonObject[9]);

    if ($delivery_date === '') {
        // $delivery_date = '1970-01-01';
        $delivery_date = date('Y-m-d');
    }

    if ($yarn_unit_price === '') {
        $yarn_unit_price .= '0 TND';
    } else {
        $yarn_unit_price .= ' TND';
    }

    if ($yarn_weight === '') {
        $yarn_weight .= '0 KG';
    } else {
        $yarn_weight .= ' KG';
    }

    $query = "INSERT INTO stock_yarn (`customer`,`yarn_type`,`yarn_count`,`yarn_color`,`delivery_date`,`yarn_lot`,`yarn_weight`,`yarn_unit_price`, `action`) VALUES ('$customer','$yarn_type','$yarn_count','$yarn_color','$delivery_date','$yarn_lot','$yarn_weight','$yarn_unit_price','$action')";
    // // $query     = "INSERT INTO stock_yarn (`customer`,`yarn_type`,`yarn_count`,`yarn_color`,`delivery_date`,`yarn_lot`,`yarn_weight`,`yarn_unit_price`) VALUES ('$customer','$yarn_type','$yarn_count','$yarn_color','$delivery_date','$yarn_lot','$yarn_weight','$yarn_unit_price')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        header('Location: stock-yarn.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
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
    $action            = trim($jsonObject[11]);

    if ($cut_date === '') {
        $cut_date = date('Y-m-d');
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

    $query     = "INSERT INTO stock_fabric (`customer`,`fabric_type`,`machine`,`fabric_weight`,`cut_date`,`fabric_color`,`fabric_unit_price`,`yarn_lot`, `yarn_count`,`gauge`, `action`) Values ('$customer','$fabric_type','$machine','$fabric_weight','$cut_date','$fabric_color','$fabric_unit_price','$yarn_lot','$yarn_count','$gauge','$action')";
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
    $action         = trim($jsonObject[13]);

    $order_price = intval($fabric_weight) * intval($unit_price);

    if ($order_date === '') {
        $order_date = date('Y-m-d');
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


    $query     = "INSERT INTO order_fabric (`order_id`,`customer`,`fabric_type`,`machine_number`,`roll_quantity`,`fabric_weight`,`yarn_lot`, `fabric_color`,`order_date`, `order_price`,`unit_price`, `status`, `action`) Values ('$order_id','$customer','$fabric_type','$machine_number','$roll_quantity','$fabric_weight','$yarn_lot','$fabric_color','$order_date','$order_price','$unit_price','$status','$action')";
    $query_run = mysqli_query($connection, $query);

    $query_sel_cus = 'SELECT * FROM customer_table';
    $query_run_cus = mysqli_query($connection, $query_sel_cus);

    if ($query_run_cus) {
        foreach ($query_run_cus as $row) {
            if ($customer === $row['first_name'] . ' ' . $row['last_name']) {
                $invoice_date    = $order_date;
                $invoice_id_date = substr($invoice_date, 2, 2);
                $invoiceId       = str_replace('OR', 'INV', $order_id);
                $customer        = $row['first_name'] . ' ' . $row['last_name'];
                $address         = $row['street'];
                $city            = $row['city'];
                $zip_code        = $row['zip_code'];
                $ship_via        = '';
                $invoice_date    = $order_date;
                $product         = $fabric_type . ' ' . $fabric_color;
                $quantity        = $roll_quantity;
                $weight          = $fabric_weight;
                $price           = $unit_price;
                $total           = (intval($price) * intval($weight)) . ' TND';
                $subtotal        = $total;
                $tax             = 15;
                $freight         = 5;
                $invoice_total   = $subtotal + $tax + $freight;
                $tax             = '15%';
                $freight         = '5 TND';
                $action          = '<button id="bEdit" type="button" class="btn btn-sm btn-soft-success btn-circle mr-2" onclick="rowEdit(this);" style="">' .
                    '<i class="dripicons-pencil"></i>' .
                    '</button>';
            }
        }
    }

    $query_inv = "INSERT INTO invoices (`invoice_id`,`customer`,`address`,`city`,`zip_code`,`ship_via`,`invoice_date`, `product`,`quantity`, `weight`,`price`, `total`, `subtotal`, `tax`,`freight`, `invoice_total`, `action`) Values ('$invoiceId','$customer','$address','$city','$zip_code','$ship_via','$invoice_date','$product','$quantity','$weight','$price','$total','$subtotal','$tax','$freight','$invoice_total','$action')";

    $query_run_inv = mysqli_query($connection, $query_inv);

    var_dump($query_run_inv);

    if ($query_run_inv) {
        header('Location: invoices.php');
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
