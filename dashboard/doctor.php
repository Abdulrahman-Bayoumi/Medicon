<?php
session_start();
if(!isset($_SESSION['username'])){

header("Location:login.php");

}else
{
	
include_once 'includes/header.php';
include_once 'includes/nav.php';
include_once 'includes/sidebar.php';
 ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Doctor</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Admin</h1> -->
	<?php
if(!$_GET['do']){
  include 'view/view_doctor.php';

}elseif($_GET['do'] == "add"){
  include 'view/add_doctor.php';

}elseif($_GET['do'] == "edit"){
  include 'view/edit_doctor.php';
} 
?>        

			</div>
		</div><!--/.row-->
				
		
<?php include_once 'includes/footer.php';
}


 