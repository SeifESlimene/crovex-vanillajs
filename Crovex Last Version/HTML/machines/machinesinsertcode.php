<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pjdb');

if(isset($_POST['insertdata']))
{
 //   $id = $_POST['id'];
    $brand = $_POST['brand'];
    $machine_type = $_POST['machine_type'];
    $diameter = $_POST['diameter'];
    $gauge = $_POST['gauge'];
    $feeders = $_POST['feeders'];
    $needles = $_POST['needles'];
    $camtracks = $_POST['camtracks'];
    $belt = $_POST['belt'];
    $machine_nb = $_POST['machine_nb'];

    $query = "INSERT INTO machine_table (`brand`,`machine_type`,`diameter`,`gauge`,`feeders`,`needles`,`camtracks`,`belt`,`machine_nb`) VALUES ('$brand','$machine_type','$diameter','$gauge','$feeders','$needles','$camtracks','$belt','$machine_nb')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: machines.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>