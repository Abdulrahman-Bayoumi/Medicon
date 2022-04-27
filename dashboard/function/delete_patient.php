<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_product = "DELETE FROM patients WHERE id = $id";
$conn->query($delete_product);
header("Location:../patient.php"); 

?>