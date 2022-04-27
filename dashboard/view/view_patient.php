<a href="?do=add" class="btn btn-info">Add New pationt</a>
				<br><br>
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">SSN</th>
      <th scope="col">Image</th>
      <th scope="col">City</th>
			<th scope="col">Street</th>
      <th scope="col">phone</th>
      <th scope="col">Gender</th>
			<th scope="col">Description</th>
      <th scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
<?php 
$index = 1;
$select_products = "SELECT * FROM patients";
$result_products = $conn->query($select_products);
foreach ($result_products as $key) {
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['Name']; ?></td>
      <td><?php echo $key['Age']; ?></td>
			<td><?php echo $key['SSN']; ?></td>
			<td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['image']; ?>"></td>
      <td><?php echo $key['city']; ?></td>
      <td><?php echo $key['street']; ?></td>
      <td><?php echo $key['phone']; ?></td>
      <td><?php if($key['Gender'] == "0"){echo "Male";}else{echo "Female";} ?></td>
      <td><?php echo $key['Description']; ?></td>

      <td>
      	<a href="?do=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
      	<!--- Delete  modal --->

      	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key['id'];?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete patient ( <span style="color: red;"><?php echo $key['Name']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_patient.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>

      </td>    
    </tr>
<?php 	
}
?>  	


  </tbody>
</table>