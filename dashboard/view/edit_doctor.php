<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom doctor WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="function/update_doctor.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="name"  value="<?php echo $array['name'];?>" ><br>
		<input class="form-control" type="number" name="phone" value="<?php echo $array['phone'];?>"><br>
		<input class="form-control" type="text" name="email" value="<?php echo $array['email'];?>"><br>
     	<input class="form-control" type="text" name="address" value="<?php echo $array['address'];?>"><br>
		<input class="form-control" type="text" name="facebook"  value="<?php echo $array['facebook'];?>"><br>
		<input class="form-control" type="text" name="instgram"  value="<?php echo $array['instgram'];?>"><br>
		<input class="form-control" type="text" name="twitter" value="<?php echo $array['twitter'];?>"><br>
		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
		<input type="file" name="image"><br>
     	<input class="form-control" type="text" name="dateil" value="<?php echo $array['dateil'];?>"><br>

		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
	</form>