<?php

include"include/header.php";

?>
	<!------------ scrool Start -------------->
<!------------ scrool Start -------------->

<!------------ all-page Start -------------->
<div class="all-page-section" style="background-image: url(image/personal.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="all-page-title">
          <a href="index.php"> Home</a>
        </div>
        <div class="all-page-content">
          Contact </div>
      </div>
    </div>
  </div>
</div>
<!------------ all-page End -------------->

<!--==========================
                                 Contact page start ===========================-->

	<?php
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$message = $_POST['message'];
		
		$query = mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `phoneno`, `discription`) VALUES ('$name','$email','$number','$message')");
		
		if($query){
			
		}
	}
								 
 ?>
								 
              
<div class="page-contact-from">
<div class="container">
<div class="page-from-wpper">
      <div class="page-from-title">
        Leave a Message      </div>
	<h2>Leave massege</h2>
	<form method="post" class="wpcf7-form">
	<div class="row">
<div class="col-md-4 col-sm-4">
 <span class="wpcf7-form-control-wrap text-548"><input type="text" name="name" value="" size="40" class="wpcf7-form-control-wrap "  placeholder="Name" required=""/></span>
</div>
<div class="col-md-4 col-sm-4">
 <span class="wpcf7-form-control-wrap text-548"><input type="email" name="email" value="" size="40" class="wpcf7-form-control-wrap "  placeholder="E-mail" required=""/></span>
</div>
<div class="col-md-4 col-sm-4">
<span class="wpcf7-form-control-wrap text-548"><input type="number" name="number" value="" class="wpcf7-form-control-wrap "  placeholder="Phone No" required=""/></span>
</div>
</div>
<div class="row">
<div class="col-md-12">
<textarea name="message" cols="40" rows="10" class="form-control" id="messages" placeholder="Your Messages" required=""></textarea>
</div>
</div>
<div class="contact-from-btn">
<p><input type="submit" name="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
</p></div>
 
  </div>
</form>
</div>
</div>



<!--==========================
                                partner page End
                            ===========================-->





<!--================================
							footer-section-start
                      ===============================-->

<div class="footer-section">
  <div class="container">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="contact-wrpp">
          <div class="contact-title">
            Contact Me          </div>

          <div class="contact-dateils">
            Obviously I am Web Designer. Experienced with all stages of the development cycle for dynamic web projects.          </div>

        </div>
      </div>
      <div class="col-md-2"></div>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="footer-wrpp">
          <div class="footer-icon">
            <i class="fa fa-phone"></i>
          </div>
          <div class="footer-title">
            Phone          </div>
          <div class="footer-content">
                     </div>
          <div class="footer-title-sub">
            <a href="#">
              +8801733577800  </a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="footer-wrpp">
          <div class="footer-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="footer-title">
            Email          </div>
          
          <div class="footer-title-sub">
            <a href="#"> mdabdulwahed7@gmail.com</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="footer-wrpp">
          <div class="footer-icon">
            <i class="fa fa-map-marker"></i>
          </div>
          <div class="footer-title">
            Location          </div>
          <div class="footer-content">
            Puthia Kanthal Baria , Puthia Rajshahi, Bangladesh </div>

        </div>
      </div>

    </div>



  </div>
</div><!--================================
                              footer-section-End
                        ===============================-->




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