<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$firstname = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$date = date("Y-m-d");
	
	
	$insert_users = "INSERT INTO users(name,email,phone,gender,password,u_date)VALUES('$firstname' ,'$email','$phone','$gender' ,'$password','$date')";
	$conn->query($insert_users);
	header("Location:../users.php");
}

?>