<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_bed = "DELETE FROM  gallery WHERE id = $id";
$conn->query($delete_bed);
header("Location:../GALLERY.php"); 

?>