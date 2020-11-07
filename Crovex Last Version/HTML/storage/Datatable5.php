<?php

$primaryKey = 'id';
$columns    = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'invoice_id', 'dt' => 1),
    array('db' => 'customer', 'dt' => 2),
    array('db' => 'address', 'dt' => 3),
    array('db' => 'city', 'dt' => 4),
    array('db' => 'zip_code', 'dt' => 5),
    array('db' => 'ship_via', 'dt' => 6),
    array('db' => 'invoice_date', 'dt' => 7),
    array('db' => 'product', 'dt' => 8),
    array('db' => 'quantity', 'dt' => 9),
    array('db' => 'weight', 'dt' => 10),
    array('db' => 'price', 'dt' => 11),
    array('db' => 'total', 'dt' => 12),
    array('db' => 'subtotal', 'dt' => 13),
    array('db' => 'tax', 'dt' => 14),
    array('db' => 'freight', 'dt' => 15),
    array('db' => 'invoice_total', 'dt' => 16),
    array('db' => 'action', 'dt' => 17),
);

// Database Connection Info
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'pjdb',
    'host' => 'localhost',
);
//DB Table
$table = 'invoices';

// HELPER
require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
