<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pjdb');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM sparepart_table WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<div class="alert alert-info" role="alert">
    <strong>Info!</strong> This is a info alert—check it out!
</div>';
        header("Location:sparepart.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
