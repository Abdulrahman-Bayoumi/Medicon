<?php
include_once 'connection.php';
$id = $_GET['num_bed'];
$delete_bed = "DELETE FROM bed WHERE num_bed = $id";
$conn->query($delete_bed);
header("Location:../bed.php"); 

?>