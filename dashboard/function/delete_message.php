<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_message = "DELETE FROM message WHERE id = $id";
$conn->query($delete_message);
header("Location:../messages.php"); 

?>