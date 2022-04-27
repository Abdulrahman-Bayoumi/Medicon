<?php
include_once 'connection.php';
$id = $_GET['num_room'];
$delete_room = "DELETE FROM room WHERE num_room = $id";
$conn->query($delete_room);
header("Location:../room.php"); 

?>