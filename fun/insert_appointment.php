<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$doctor = $_POST['doctor'];
	$ap = $_POST['appointment'];
	$phone = $_POST['phone'];
	$massage= $_POST['message'];


	$insert_product = "INSERT INTO make_appointment(name_patient, email_patient, phone_patient, Doctor,appointment, massage )
	VALUES('$name' ,'$email' , '$phone ','$doctor','$ap','$massage')";
	$conn->query($insert_product);
	header("Location:../Appointment.php");
}

?>