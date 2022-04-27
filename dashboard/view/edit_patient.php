<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom patients WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="function/update_patient.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="name"  value="<?php echo $array['Name'];?>" ><br>

		<input class="form-control" type="number" name="SSN" value="<?php echo $array['SSN'];?>"><br>

		<input class="form-control" type="number" name="Age" value="<?php echo $array['Age'];?>"><br>

		<input class="form-control" type="text" name="city"  value="<?php echo $array['city'];?>"><br>
		<input class="form-control" type="text" name="street"  value="<?php echo $array['street'];?>"><br>
		<input class="form-control" type="number" name="phone" value="<?php echo $array['phone'];?>"><br>
		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
		<input type="file" name="image"><br>
	 <textarea class="form-control" name="Description" value="<?php echo $array['Desciption'];?>"></textarea><br>

		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
	</form>