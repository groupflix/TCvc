<?php
$baseUrl ='../';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <title>Transparent Collective // </title>
    <?php include $baseUrl . "meta-head.php" ?>

	<!-- Page Fonts / Pacifico-->
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<!-- Raleway-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,,200,300,600,700' rel='stylesheet' type='text/css'>

	<!-- End CSS Files -->
 <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>
</head>

<!-- Body Start -->
<body class="parallax">

	<!-- Page Loader -->
	<article id="pageloader" class="white-loader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</article>







<!-- Navigation - select your nav color - dark-nav or white-nav -->
	
	<?php include $baseUrl . "nav.php" ?>
	<!-- End Nav -->





	<!-- Page Header - litle-header - big-header or bigger-header -->
	<section id="page-header" class="background22 xxdark-bg parallax big-header">
		<!-- Page Header Inner -->
		<div class="page_header_inner clearfix white">
			<!-- Left -->
			<div class="left f-left">
				<!-- Header -->
				<h2 class="page_header thin">
					Create Change in Silicon Valley  
				</h2>
				<!-- Sub Page Text -->
				<h5 class="page_note extra-light">
					Help emerging entrepreneurs break down barriers, be a catalyst for change
				</h5>
			</div>
			
		</div>
		<!-- End Inner -->
	</section>
	<!-- End #page-header -->





	<!-- About Slider -->
	<section class="about_with_slider clearfix inner">
		<!-- Left -->
		<div class="col-md-12 no-padding">
			<iframe id="typeform-full" width="100%" height="800px" frameborder="0" src="https://howie13.typeform.com/to/JUT6Qy" scrolling="no"></iframe>
  
		</div>
		<!-- End Left -->

		<!-- Texts  -->
		<div class="right texts col-xs-6">
			<!-- Header  -->
			<h4 class="head">
				How To Get Involved
			</h4>
			<!-- Text  -->
			<p class="text">
				Diversity in tech is a hot topic throughout Silicon Valley these days.  Help us turn dialogue into action by joing TC as a sponsor.  Rome wasn't built in a day, and we don't anticipate the diversificiation of Silicon Valley to happen over night, but contributing is a step in the right direction.  Diversity will help to create better products, services, companies, and processes not only for Silicon Valley, but the world.  Be a part of this change. Join us today as a sponsor.  To learn more, contact us today.  
			</p>
            
            <button id="downloadPacket" class="btn download">Contact Us For Information</button>
			
			<!-- End List  -->
		</div>
		<!-- End Texts  -->
	</section>
	<!-- End About With Slider  -->

	
   





	<!-- Footer -->
	<?php include  $baseUrl. "footer.php" ?>



	<!-- JS Files -->
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/waypoint.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/modernizr-latest.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/SmoothScroll.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.superslides.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.simple-text-rotator.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.cubeportfolio.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/skrollr.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.mb.YTPlayer.js"></script>
	<!-- Revolution Slider -->
	<script type="text/javascript" src="<?php $baseUrl ?>js/rev_slider/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/rev_slider/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/rev_slider/rev_plugins.js"></script>
	<!-- Contact Form -->
	<script type="text/javascript" src="<?php $baseUrl ?>js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/contact-form.js"></script>
	<!-- Twitter -->
	<script type="text/javascript" src="<?php $baseUrl ?>js/tweecool.min.js"></script>
	<script type="text/javascript" src="<?php $baseUrl ?>js/tweecool.js"></script>
	<!-- Page Plugins -->
	<script type="text/javascript" src="<?php $baseUrl ?>js/plugins.js"></script>
	<!-- Portfolio Plugins -->
	<script type="text/javascript" src="<?php $baseUrl ?>js/portfolio.js"></script>

	<!-- End JS Files -->

	<script>
		$(document).ready(function() {
			$('#latest_tweets').tweecool({
				username : 'TCfounders'
			});
			
			document.getElementById('downloadPacket').addEventListener('click',function(){
				window.open('mailto:inquiry@transparentcollective.com?subject=Sponsor Inquiry');
			});
		});
	</script>


</body>
<!-- Body End -->
</html>