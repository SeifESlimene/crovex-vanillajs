<?php

$primaryKey = 'id';
$columns    = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'order_id', 'dt' => 1),
    array('db' => 'customer', 'dt' => 2),
    array('db' => 'fabric_type', 'dt' => 3),
    array('db' => 'machine_number', 'dt' => 4),
    array('db' => 'roll_quantity', 'dt' => 5),
    array('db' => 'fabric_weight', 'dt' => 6),
    array('db' => 'yarn_lot', 'dt' => 7),
    array('db' => 'fabric_color', 'dt' => 8),
    array('db' => 'order_date', 'dt' => 9),
    array('db' => 'order_price', 'dt' => 10),
    array('db' => 'unit_price', 'dt' => 11),
    array('db' => 'status', 'dt' => 12),
    array('db' => 'action', 'dt' => 13),
);

// Database Connection Info
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'pjdb',
    'host' => 'localhost',
);
//DB Table
$table = 'order_fabric';

// HELPER
require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
