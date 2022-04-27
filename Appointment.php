<?php
    include_once 'include/header.php';
   ?>
<br><br><br><br><br><br><br><br><br><br><br>
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="fun/insert_appointment.php" method="post" enctype="multipart/form-data" >
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
                       <div class="col-md-4 form-group">
              <select name="doctor" id="do" class="form-control">
                <option value="">Select Doctor</option>
               	<?php 
		            $select_cat = "SELECT * FROM doctor";
		            $result_cat = $conn->query($select_cat);
		                 foreach ($result_cat as $key) {
	                   	?>
		              	<option value="<?php echo $key['id']; ?>" id="name_d" class="d"><?php echo $key['name']; ?></option>
		                   <?php 	
	                       	}
		                      ?>
               </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="appointment" id="appointment" class="form-control ">
                <option value="">Select Appointment</option>
                 	<?php
                  $name = $_POST['f_name'];
		            $select_cat = "SELECT * FROM apointment where name_doctor = $name";
		            $result_cat = $conn->query($select_cat);
		                 foreach ($result_cat as $key) {
	                   	?>
		              	<option value=""><?php echo $key['day_apointment']; ?></option>
		                   <?php 	
	                       	}
		                      ?>
              </select>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><input type="submit" name="submit" value="Make an Appointment"></input></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1>Gallery</h1>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
          <?php 
$select_gallery = "SELECT * FROM GALLERY";
$result_gallery = $conn->query($select_gallery);
foreach ($result_gallery as $key) {
	?>
          <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/<?php echo $key['img']; ?>" alt=""></a>
<?php 	
}
?>  	

        </div>

      </div>
    </section><!-- End Gallery Section -->

  
     <?php include_once 'include/footer.php';
  ?>