<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pjdb');

if(isset($_POST['updatedata']))
{
    $id = $_POST['update_id'];
    $brand = $_POST['brand'];
    $machine_type = $_POST['machine_type'];
    $diameter = $_POST['diameter'];
    $gauge = $_POST['gauge'];
    $feeders = $_POST['feeders'];
    $needles = $_POST['needles'];
    $camtracks = $_POST['camtracks'];
    $belt = $_POST['belt'];
    $machine_nb = $_POST['machine_nb'];

    $query = "UPDATE machine_table SET brand='$brand', machine_type='$machine_type', diameter ='$diameter', gauge='$gauge', feeders ='$feeders', needles = '$needles', camtracks = '$camtracks', belt = '$belt', machine_nb = '$machine_nb' where id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: machines.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>