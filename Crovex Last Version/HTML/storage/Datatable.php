<?php

$primaryKey = 'id';
$columns    = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'customer', 'dt' => 1),
    array('db' => 'yarn_type', 'dt' => 2),
    array('db' => 'yarn_count', 'dt' => 3),
    array('db' => 'yarn_color', 'dt' => 4),
    array('db' => 'delivery_date', 'dt' => 5),
    array('db' => 'yarn_lot', 'dt' => 6),
    array('db' => 'yarn_weight', 'dt' => 7),
    array('db' => 'yarn_unit_price', 'dt' => 8),
    array('db' => 'action', 'dt' => 9),
);

// Database Connection Info
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'pjdb',
    'host' => 'localhost',
);
//DB Table
$table = 'stock_yarn';

// HELPER
require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
