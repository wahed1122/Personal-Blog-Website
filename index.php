<?php
include "connection.php";
include ('include/header.php');

?>

	<?php
	
	$query = "SELECT * FROM `about`";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	
	
	?>
	<!------------ scrool Start -------------->

<div class="aboutme-section" style="background-image: url(image/personal.jpg);">
  <div class="container">
                    <div class="row">
          <div class="col-md-6 col-sm-4">
            <div class="aboutme-image">
              <img src="admin/about/<?php echo $row['photo']?>" alt="">
            </div>
          </div>
          <div class="col-md-6 col-sm-8">
            <div class="about-sub">
              Hi This Is Ab Wahed            </div>
            <span class="designation"> <?php echo $row['designation']?>         </span>

            <div class="about-content">
              <p>A professional Web Designer and web developer from Bangladesh and Expertise in HTML, CSS, PHP, Mysql, Bootstrap, JQuery. </p>
            </div>
<?php

$query = mysqli_query($con,"SELECT * FROM `cv`");
$result = mysqli_fetch_array($query);

?>
            <div class="about-btn">
              <ul>

                <li class="active"><a href="about.php">More About Me</a></li>

                <li><a href="admin/file/<?php echo $result['file']?>" target="_blank">Download CV</a></li>
              </ul>
            </div>

          </div>
        </div>

      </div>
</div>
<div class="biodata-section">
  <div class="container">
    <div class="biodata-section-wrpp">
      <div class="biodata-section-title">
        My Skills  </div>
      <div class="icons-image">
        <img src="image/icon-image.png" alt="">
      </div>
    </div>

    <div class="row">

        <div class="col-md-12 col-sm-12">
            <br /><br /><h4>HTML/CSS</h4>
<div class=" progress" >
	<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
</div>

<h4>JQuery</h4>
<div class=" progress" >
	<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="80" style="width:40%">
      40%
    </div>
</div>

<h4>PHP</h4>
<div class=" progress" >
	<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="80" style="width:72%">
      72%
    </div>
</div>

<h4>MySql</h4>
<div class=" progress" >
	<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="80" style="width:70%">
      70%
    </div>
</div>

<h4>Web Design</h4>
<div class=" progress" >
	<div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="80" style="width:80%">
      80%
    </div>
          </div>

      

    </div>


  </div>
</div>

<div class="biodata-section">
  <div class="container">
    <div class="biodata-section-wrpp">
      <div class="biodata-section-title">
        Educational Info
      </div>
      <div class="icons-image">
        <img src="image/icon-image.png" alt="">
      </div>
    </div>

    <div class="row">


                                     <div class="col-md-4 col-sm-4">
            <div class="biodata-wrpp">
              <div class="year">
                <span>2025</span>
              </div>
              <div class="bio-title">
                MSC Computer Science and Engineer</div>

              <div class="bio-title-sub">
                N/A
              </div>
            </div>
          </div>

                                     <div class="col-md-4 col-sm-4">
            <div class="biodata-wrpp">
              <div class="year">
                <span>2020</span>
              </div>
              <div class="bio-title">
                BSC Computer Science and Engineer </div>

              <div class="bio-title-sub">
                Varendra University
              </div>
            </div>
          </div>

                                     <div class="col-md-4 col-sm-4">
            <div class="biodata-wrpp">
              <div class="year">
                <span>20015</span>
              </div>
              <div class="bio-title">
                HSC              </div>

              <div class="bio-title-sub">
                Dastanabad Alim Madrasha
              </div>
            </div>
          </div>

                                     <div class="col-md-4 col-sm-4">
            <div class="biodata-wrpp">
              <div class="year">
                <span>20013</span>
              </div>
              <div class="bio-title">
                SSC              </div>

              <div class="bio-title-sub">
               Dastanabad Alim Madrasha
              </div>
            </div>
          </div>

                                     <div class="col-md-4 col-sm-4">
            <div class="biodata-wrpp">
              <div class="year">
                <span>2006</span>
              </div>
              <div class="bio-title">
                Primary Exam              </div>

              <div class="bio-title-sub">
                Dastanabad Alim Madrasha
              </div>
            </div>
          </div>

      
    </div>


  </div>
</div>



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
<div class="video-gallery-section">
  <div class="container">
    <div class="biodata-section-wrpp">
      <div class="biodata-section-title">
        My Video Gallery     
		</div>
      <div class="icons-image">
        <img src="image/icon-image.png" alt="">
      </div>
    </div>

    <div class="row">
      <div class="cat-content">

                                <div class="cat_wrpp">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal-129">
                <div class="imagine-video-buttton">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="videoModal-129" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/-fBgA1bVjvc?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      </div>
                    </div>

                  </div>
                </div>
              </div>


    <div class="cat_image_images">
                <div class="cat_image_img">
                  <a href="#">
                    <img src="image/06-600x337.jpg" alt="">

                  </a>
                </div>
                <div class="cat_image_title">
                  <a href="">Video Example Six</a>

                </div>


              </div>

            </div>

                                  <div class="cat_wrpp">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal-127">
                <div class="imagine-video-buttton">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="videoModal-127" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/QA_SY4b1tNI?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="cat_image_images">
                <div class="cat_image_img">
                  <a href="#">
                    <img src="image/05-600x337.jpg" alt="">

                  </a>
                </div>
                <div class="cat_image_title">
                  <a href="">Video Example Five</a>

                </div>


              </div>

            </div>

                                  <div class="cat_wrpp">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal-125">
                <div class="imagine-video-buttton">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="videoModal-125" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/P5JnMJfa0HA?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="cat_image_images">
                <div class="cat_image_img">
                  <a href="#">
                    <img src="image/04-600x337.jpg" alt="">

                  </a>
                </div>
                <div class="cat_image_title">
                  <a href="">Video Example Four</a>

                </div>


              </div>

            </div>

                                  <div class="cat_wrpp">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal-123">
                <div class="imagine-video-buttton">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="videoModal-123" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/4FdlOJicGBk?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="cat_image_images">
                <div class="cat_image_img">
                  <a href="#">
                    <img src="image/03-600x337.jpg" alt="">

                  </a>
                </div>
                <div class="cat_image_title">
                  <a href="">Video Example Three</a>

                </div>


              </div>

            </div>

                                  <div class="cat_wrpp">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal-121">
                <div class="imagine-video-buttton">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="videoModal-121" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/aeEy4t8fDsw?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="cat_image_images">
                <div class="cat_image_img">
                  <a href="#">
                    <img src="image/02-600x337.png" alt="">

                  </a>
                </div>
                <div class="cat_image_title">
                  <a href="">Video Example Two</a>

                </div>


              </div>

            </div>

                                  <div class="cat_wrpp">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal-119">
                <div class="imagine-video-buttton">
                  <i class="fa fa-play" aria-hidden="true"></i>
                </div>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="videoModal-119" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/na9eBzLMhTg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="cat_image_images">
                <div class="cat_image_img">
                  <a href="#">
                    <img src="image/01-600x337.jpg" alt="">

                  </a>
                </div>
                <div class="cat_image_title">
                  <a href="">Video Example One</a>

                </div>


              </div>

    </div>

                </div>
    </div>
  </div>
</div>

<div class="news-section">
  <div class="container">
    <div class="biodata-section-wrpp">
      <div class="biodata-section-title">
        My Blog
      </div>
      <div class="icons-image">
        <img src="image/icon-image.png" alt="">
      </div>
    </div>
    <div class="row">
      <div class="news-content">

                                

            <div class="col-sm-4 news-wrpp">
              <div class="news-image">
                <a href=""><img src="blog/image/name-mesh-1024x283.jpg" style="height:200px;" alt="">
              </div></a>
              <div class="news-title">
                <a href="blog/namemesh.php">Name Mesh</a>
              </div>
            </div>

                                <div class="news-wrpp">
              <div class="news-image">
                <a href=""><img src="blog/image/NameStation.jpg" style="height:200px;"alt="">
              </div></a>
              <div class="news-title">
                <a href="blog/NameStation.php">NameStation </a>
              </div>
            </div>



      </div>
     

    </div>
  </div>
</div>
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