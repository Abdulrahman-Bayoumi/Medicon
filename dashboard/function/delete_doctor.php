<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_product = "DELETE FROM doctor WHERE id = $id";
$conn->query($delete_product);
header("Location:../doctor.php"); 

?>