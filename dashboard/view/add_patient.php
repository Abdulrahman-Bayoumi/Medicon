<form action="function/insert_patient.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" placeholder="Enter Name"><br>
	<input class="form-control" type="number" name="SSN" placeholder="Enter SSN"><br>
	<input class="form-control" type="number" name="Age" placeholder="Enter Age"><br>
	<input class="form-control" type="text" name="city" placeholder="Enter City"><br>
	<textarea class="form-control" name="street">Enter street</textarea><br>
	<input class="form-control" type="number" name="phone" placeholder="Enter phone"><br>
	<textarea class="form-control" name="description">Description</textarea><br>
<select class="form-control" name="gender">
		<option disabled="" selected="">Choose</option>
		<option value="0">Male</option>
		<option value="1">Female</option>
	</select><br>
	<!--
		<label>Choose Category</label>
      <select name="category" class="form-control">
		<option selected="" disabled="">Choose</option>
		<?php 
		/*$select_cat = "SELECT * FROM categories";
		$result_cat = $conn->query($select_cat);
		foreach ($result_cat as $key) {
		?>
			<option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
		<?php 	
		}*/
		 ?>
		
	</select><br>-->
	
	<label>Upload Image</label>
	<input type="file" name="image"><br>
	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
</form>