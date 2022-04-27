<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$num_room= $_POST['num_room'];
	$num_floor = $_POST['num_floor'];
	$update_room = "UPDATE room SET num_floor = '$num_floor' WHERE num_room = $num_room";
	$conn->query($update_room);
	header("Location:../room.php");
}

?>