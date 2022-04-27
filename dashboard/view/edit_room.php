<?php 
$num_room = $_GET['num_room'];
$select_update = "SELECT * FRom room WHERE num_room = $num_room";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>			
<form action="function/update_room.php" method="POST" >
<input type="hidden" name="num_room" value="<?php echo $num_room; ?>">	
<input class="form-control" type="number" name="num_floor"  value="<?php echo $array['num_floor'];?>" ><br>					
<input type="submit" class="btn btn-primary" name="submit" value="Edit">
</form>