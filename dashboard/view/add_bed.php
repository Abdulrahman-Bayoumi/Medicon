<form action="function/insert_bed.php" method="POST">
<label>Choose Name patient</label>

	<select name="name_patient" class="form-control">
		<option selected="" disabled="">Choose</option>
		<?php 
		$select_cat = "SELECT * FROM patients";
		$result_cat = $conn->query($select_cat);
		foreach ($result_cat as $key) {
		?>
			<option value="<?php echo $array['name_patient']; ?>"><?php echo $key['Name']; ?></option>
		<?php 	
		}
		 ?>
		
	</select><br>
    <label>Choose Room</label>

	<select name="num_room" class="form-control">
		<option selected="" disabled="">Choose</option>
		<?php 
		$select_cat = "SELECT * FROM room";
		$result_cat = $conn->query($select_cat);
		foreach ($result_cat as $key) {
		?>
			<option value="<?php echo $key['num_room']; ?>"><?php echo $key['num_room']; ?></option>
		<?php 	
		}
		 ?>
		
	</select><br>
<input type="submit" class="btn btn-primary" name="submit" value="ADD">
				</form>