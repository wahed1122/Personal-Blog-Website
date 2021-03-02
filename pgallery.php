<?php

include"include/header.php";

?>
	<!------------ scrool Start -------------->


<!------------ all-page Start -------------->
<div class="all-page-section" style="background-image: url(image/personal.jpg);>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2" ">
        <div class="all-page-title">
          <a href="index.php"> Home</a>
        </div>
        <div class="all-page-content">
          Photo Gallery        </div>
      </div>
    </div>
  </div>
</div>
<!------------ all-page End -------------->

<div class="photo-gallery-section">
  <div class="container">
    <div class="biodata-section-wrpp">
      <div class="biodata-section-title">
        My Photo Gallery      </div>
      <div class="icons-image">
        <img src="image/icon-image.png" alt="">
      </div>
    </div>
    <div class="row">
<?php

$query = mysqli_query($con,"SELECT * FROM `pgallery`");
while($result = mysqli_fetch_array($query)){

?>
          <div class="col-md-4 col-sm-4 custom-padding">
            <div class="gallery-wrpp">
              <div class="gallery-image">
                <a href="admin/image/<?php echo $result['photo'] ?>" class="image-link">
                  <img src="admin/image/<?php echo $result['photo'] ?>" />
                </a>
               
              </div>
            </div>
          </div>
<?php }?>
       
          
    </div>
    <div class="custom-pagination">
                </div>
  </div>
</div>

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