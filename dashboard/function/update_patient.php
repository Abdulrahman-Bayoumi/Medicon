<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$SSN = $_POST['SSN'];
	$Age = $_POST['Age'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$phone = $_POST['phone'];
    $Desciption = $_POST['Description'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");

	if(!empty($image_name)){
		$update_image = "UPDATE patients SET image = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}
	
	$update_patients = "UPDATE patients SET SSN ='$SSN', name = '$name' , Age = '$Age' , city = '$city' , street = '$street',phone ='$phone' ,Description='$Desciption' WHERE id = $id";
	$conn->query($update_patients);
	
	header("Location:../patient.php");

}

?>