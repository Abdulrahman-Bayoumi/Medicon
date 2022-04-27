<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
    $name_patient =  $_POST['name_patient'];
    $room = $_POST['num_room'];
   
	$insert_bed = "INSERT INTO  bed(num_room , name_patient) VALUES ('$room' , '$name_patient')";
	$conn->query($insert_bed);
	header("Location:../bed.php");
}

?>