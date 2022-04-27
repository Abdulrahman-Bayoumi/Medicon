
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/<?php echo $_SESSION['img']; ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['username'] ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em>Admin</a></li>
			
			<li><a href="users.php"><em class="fa fa-users">&nbsp;</em>Users</a></li>

			<li><a href="doctor.php"><em class="fa fa-users">&nbsp;</em>Dectors</a></li>
			<li><a href="patient.php"><em class="fa fa-product-hunt">&nbsp;</em>Patient</a></li>
			<li><a href="room.php"><em class="fa fa-product-hunt">&nbsp;</em>Room</a></li>
			<li><a href="bed.php"><em class="fa fa-product-hunt">&nbsp;</em>Beds</a></li>
			<li><a href="GALLERY.php"><em class="fa fa-product-hunt">&nbsp;</em>GALLERY</a></li>
        	<li><a href="Reciptionist.php"><em class="fa fa-product-hunt">&nbsp;</em>Reciptionist</a></li>
			<li><a href="site_info.php"><em class="fa fa-product-hunt">&nbsp;</em>Information Site</a></li>
          <li><a href="messages.php"><em class="fa fa-product-hunt">&nbsp;</em>Messages</a></li>
			<li><a href="function/logout.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
		</ul>
	</div><!--/.sidebar-->