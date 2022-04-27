<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
 $image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	
	$insert_bed = "INSERT INTO  gallery(img) VALUES ('$image_name')";
	$conn->query($insert_bed);
	header("Location:../GALLERY.php");
}

?>