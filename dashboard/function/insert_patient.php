<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$SSN = $_POST['SSN'];
	$Age = $_POST['Age'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$phone = $_POST['phone'];
	$gendar = $_POST['gender'];
	$description = $_POST['description'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	

	$insert_product = "INSERT INTO patients(SSN, Name, Gender, Age,city, street, image, phone, Description)
	VALUES('$SSN' ,'$name' , '$gendar','$Age','$city','$street','$image_name','$phone','$description')";
	$conn->query($insert_product);
	header("Location:../patient.php");
}

?>