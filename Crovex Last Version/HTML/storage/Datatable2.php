<?php

$primaryKey = 'id';
$columns    = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'customer', 'dt' => 1),
    array('db' => 'fabric_type', 'dt' => 2),
    array('db' => 'machine', 'dt' => 3),
    array('db' => 'fabric_weight', 'dt' => 4),
    array('db' => 'cut_date', 'dt' => 5),
    array('db' => 'fabric_color', 'dt' => 6),
    array('db' => 'fabric_unit_price', 'dt' => 7),
    array('db' => 'yarn_lot', 'dt' => 8),
    array('db' => 'yarn_count', 'dt' => 9),
    array('db' => 'gauge', 'dt' => 10),
    array('db' => 'action', 'dt' => 11),
);

// Database Connection Info
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'pjdb',
    'host' => 'localhost',
);
//DB Table
$table = 'stock_fabric';

// HELPER
require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);