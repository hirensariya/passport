<?php
include 'connection.php';

$id =$_GET['id'];

echo ("$id");

$delete = "delete from temp_passport where id = $id";

$quary= mysqli_query($con,$delete);
header("Location:table.php");
?>