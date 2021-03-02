<?php
include "../connection.php";

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="image/favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />

	<title>About Me &#8211; A Premium PHP Theme
</title>


		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-block-library-css'  href='css/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet'   href='css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='css/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='menu-css'  href='css/manu.css' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='aboutme-style-css'  href='css/about.css' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css-css'  href='css/responsive.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.min.js'></script>
<meta name="generator" content="WordPress 5.0.10" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		</head>

	<?php
	
	$query = "SELECT * FROM `about`";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	
	
	?>
		
<body class="home blog hfeed no-sidebar">
	<!------------ Menu & Search section Start -------------->

	<section class="menu_section" id="myHeader">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="logo">
					<a href="about.php"><img src="../admin/about/<?php echo $row['photo']?>" /></a>
											</div>
					<div class="name">
						<a href="about.php">Ab Wahed </a>
					</div>

					

				</div>
				<div class="col-xs-12 col-md-8 col-sm-8">
					<div id="menu-area">
						<div class="menu_bottom">
							<nav role="navigation" class="navbar navbar-default mainmenu">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collection of nav links and other content for toggling -->
								<div id="navbarCollapse" class="collapse navbar-collapse">
<div class="menu-main-menu-container">
	<ul id="menu-main-menu" class="nav navbar-nav">
		<li itemscope="itemscope"  id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-81 "><a title="Home" href="../index.php">Home</a></li>
		
		<li itemscope="itemscope"  id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82 "><a title="About Me" href="../about.php">About Me</a></li>
		
		<li itemscope="itemscope"  id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"><a title="Career Info" href="../career_info.php">Career Info</a></li>
		<li itemscope="itemscope"  id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a title="Educational Info" href="../educational-info.php">Educational Info</a></li>
		
		<li itemscope="itemscope"  id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a title="Photo Gallery" href="../pgallery.php">Photo Gallery</a></li>
		
		<li itemscope="itemscope"  id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a title="Video Gallery" href="../video-gallery.php">Video Gallery</a></li>
		
		<li itemscope="itemscope"  id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a title="Blog" href="../blog.php">Blog</a></li>
		
		<li itemscope="itemscope"  id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a title="Contact" href="../contact.php">Contact</a></li>
	</ul>
</div>
									
									

								</div>
							</nav>

						</div><!-- /.header_bottom -->

					</div>
				</div>

			</div>
		</div>
	</section>