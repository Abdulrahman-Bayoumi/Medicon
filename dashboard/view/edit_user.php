<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom users WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="function/update_user.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="firstname"  value="<?php echo $array['name'];?>" ><br>


		<input class="form-control" type="email" name="email"  value="<?php echo $array['email'];?>" ><br>

		<input class="form-control" type="password" name="password"  value="<?php echo $array['password'];?>" ><br>


		<input class="form-control" type="text" name="phone"  value="<?php echo $array['phone'];?>" ><br>


		
		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>