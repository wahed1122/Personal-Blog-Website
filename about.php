<?php

include "connection.php";
include "include/header.php";

?>
	<!------------ scrool Start -------------->

<!-- About Section Start -->
    
	<?php
	
	$query = "SELECT * FROM `about`";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	
	
	?>
	
	
	
<section class="section about-section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5">
            <div class="about-photo">
              <img src="admin/about/<?php echo $row['photo']?>" alt="" />
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-7 col-md-7">
            <div class="about-details section-title">
              <h4 class="title text-color mb-3"><?php echo $row['name']?> </h4>
              <h6 class="designation mb-3">
                <?php echo $row['designation']?>         
				</h6>
              <div class="text-muted">
                <p><?php echo $row['discription']?></p>
              </div>

			 <?php

			$query = mysqli_query($con,"SELECT * FROM `cv`");
			$result = mysqli_fetch_array($query);

			?>
              <a href="admin/file/<?php echo $result['file']?>" class="download-btn" target="_blank">Download CV</a>
          </div>
        </div>
    </div>
 </div>
      <!--end container-->

      
</section>
    <!-- Counter Section End -->

<!--================================
                              bottom-footer-start
	
															===============================-->
<div class="bottom-footer-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">


				<div class="copy-right">
					© All rights reserved © 2020
				</div>

			</div>

		</div>

		
	</div>
</div>

<!--================================
                              bottom-footer-End
                        ===============================-->



<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/jquery.magnific.min.js'></script>
<script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var data = {"one":""};
/* ]]> */
</script>
<script type='text/javascript' src='js/main.js'></script>
</body>

</html>