<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pjdb');

if(isset($_POST['insertdata']))
{
 //   $id = $_POST['id'];
    $brand = $_POST['brand'];
    $machine_type = $_POST['machine_type'];
    $needle1 = $_POST['needle1'];
    $needle2 = $_POST['needle2'];
    $needle3 = $_POST['needle3'];
    $needle4 = $_POST['needle4'];
    $sinker = $_POST['sinker'];

    $query = "INSERT INTO sparepart_table (`brand`,`machine_type`,`needle1`,`needle2`,`needle3`,`needle4`,`sinker`) VALUES ('$brand','$machine_type','$needle1','$needle2','$needle3','$needle4','$sinker')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: sparepart.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>