<?php
    include_once 'include/header.php';
   ?>
 <!-- ======= Doctors Section ======= -->
 <br><br><br><br>
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
<?php 
$index = 1;
$select_doctor = "SELECT * FROM doctor";
$result_doctor = $conn->query($select_doctor);
foreach ($result_doctor as $key) {
  
	?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/doctors/<?php echo $key['image']; ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?php echo $key['twitter']; ?>"><i class="icofont-twitter"></i></a>
                  <a href="<?php echo $key['facebook']; ?>"><i class="icofont-facebook"></i></a>
                  <a href="<?php  echo $key['instgram']  ?>"><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $key['name']; ?></h4>
                <span><?php echo $key['dateil']; ?></span>
                <span><?php echo $key['phone']; ?></span>
                 <span><?php echo $key['address']; ?></span>
              </div>
            </div>
          </div>


<?php 	
}
?>  	

        </div>

      </div>
    </section><!-- End Doctors Section -->
      <?php include_once 'include/footer.php';

  ?>