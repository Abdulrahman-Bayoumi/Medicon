<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$instgram = $_POST['instgram'];
	$dateil = $_POST['dateil'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	

	$insert_product = "INSERT INTO doctor(name, phone, email,address, facebook, twitter, instgram,image, dateil)
	VALUES('$name' ,'$phone' , '$email','$address','$facebook','$twitter','$instgram','$image_name','$dateil')";
	$conn->query($insert_product);
	header("Location:../doctor.php");
}

?>