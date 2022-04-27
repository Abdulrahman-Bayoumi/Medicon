<?php 

	include 'connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $conn->real_escape_string($_POST['message']);
	$date = date("Y-m-d h:m:s");

	$insert_message = "INSERT INTO `message`(`name`, `email`, `subject`, `message`, `m_date`)
	VALUES ('$name ','$email','$subject','$message','$date')";
	$conn->query($insert_message);
header("Location:../Contant.php");

?>