<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$floor = $_POST['num_floor'];

	$insert_room = "INSERT INTO  room(num_floor)VALUES('$floor')";
	$conn->query($insert_room);
	header("Location:../room.php");
}

?>