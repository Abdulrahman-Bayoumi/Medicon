
<form action="function/insert_user.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="firstname" placeholder="Name"><br>
	<input class="form-control" type="password" name="password" placeholder="Enter Password"><br>
	
	<input class="form-control" type="email" name="email" placeholder="Enter Email"><br>
	<input class="form-control" type="text" name="phone" placeholder="Enter Phone"><br>
	
	<select class="form-control" name="gender">
		<option disabled="" selected="">Choose</option>
		<option value="0">Male</option>
		<option value="1">Female</option>
	</select><br>

	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
				</form>
