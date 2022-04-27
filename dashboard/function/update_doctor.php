<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
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

	if(!empty($image_name)){
		$update_image = "UPDATE doctor SET image = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}
	
	$update_patients = "UPDATE doctor SET phone ='$phone',address='$address', name = '$name' , email = '$email' , facebook = '$facebook' , twitter = '$twitter',instgram ='$instgram' ,dateil='$dateil' WHERE id = $id";
	$conn->query($update_patients);
	
	header("Location:../doctor.php");

}

?>