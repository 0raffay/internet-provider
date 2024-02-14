<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>About Us | <?php echo $siteName; ?></title>

	<?php include("includes/compatibility.php"); ?>
	<?php include("includes/og.php"); ?>

	<!-- META TITLE AND DESCRIPTION -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- META TITLE AND DESCRIPTION -->


	<!--==== STYLES START ====-->
	<?php include('includes/header-styles.php') ?>
	<!--==== STYLES END ====-->
</head>

<body>

	<!--==== HEADER START ====-->
	<?php include('includes/header.php') ?>
	<!--==== HEADER END ====-->

	<!--==== Banner Start ====-->
	<section class="banner p-0 bg-grey-400">
		<div class="bannerMain position-relative">
			<div class="bannerImage">
				<img src="assets/images/banners/about-banner.png" alt="Reload Page">
			</div>
			<div class="bannerText">
				<div class="container">
					<div class="bannerTextContainer">
						<h1 class="bannerHeading">Better Connections Start Here.</h1>
						<p class="bannerSubtitle">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt. Nunc ornare, lorem sed interdum fringilla, tellus leo hendrerit nisi, sed posuere quam enim sit amet purus. Maecenas luctus tortor eleifend ullamcorper aliquet.
						</p>
						<a href="" class="btn btn-primary btn-size-lg">Learn More <img src="assets/images/icons/arrow-right.svg" alt=""></a>
						<div class="bannerTip">
							<img src="assets/images/icons/banner-tip.svg" alt="tip icon">
							<p>Over 7,000,000 people use our free tool every year to search 1,600+ internet providers across the US.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Banner end ====-->

	<!--==== Best Company Start ====-->
	<section class="bestCompanySection">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6">
					<div class="img_wrap">
						<img src="assets/images/best-company.png" alt="Best Company">
					</div>
				</div>
				<div class="col-xl-6">
					<h6 class="section_label label-before">Digital Expertise</h6>
					<h4 class="section_heading">Best Internet
						Providing Agency In Town!</h4>
					<p class="mb-md-4 mb-3 fc-neutral-400 fw-300 pe-lg-4 me-lg-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt. Nunc ornare, lorem sed interdum fringilla, tellus leo hendrerit nisi, sed posuere quam enim sit amet purus.</p>
					<p class="mb-4 fc-neutral-400 fw-300 pe-lg-4 me-lg-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius dapibus leo, finibus rhoncus est sagittis nec. Etiam volutpat tellus sollicitudin, condimentum massa at, scelerisque erat.</p>


					<ul class="d-flex align-items-center flex-wrap column-gap-5 row-gap-4 mb-3 mb-md-4">
						<li class="d-flex align-items-center gap-3 ">
							<img class="flex-shrink-0" src="assets/images/icons/trophy.svg" alt="Trophy">
							<div class="text_wrap">
								<h6 class="fc-neutral-300 fw-400 fs-20 lh-1-1 mb-2">Award Winning</h6>
								<p class="fs-18 fw-300 lh-1-4">We won many awards.</p>
							</div>
						</li>
						<li class="d-flex align-items-center gap-3 ">
							<img class="flex-shrink-0" src="assets/images/icons/support-red.svg" alt="Support Icon">
							<div class="text_wrap">
								<h6 class="fc-neutral-300 fw-400 fs-20 lh-1-1 mb-2">Best Support</h6>
								<p class="fs-18 fw-300 lh-1-4">Get top support 365 days</p>
							</div>
						</li>
					</ul>

					<div class="button_wrap">
						<a href="" class="btn btn-primary btn-size-lg">Get Started <img src="assets/images/icons/arrow-right.svg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== About Our Company end ====-->

	<!--==== Company Section Start ====-->
	<section class="companySection">
		<div class="container">
			<ul class="d-flex align-items-center justify-content-between list-unstyled flex-wrap">
				<li>
					<img src="assets/images/company/1.png" alt="Reload Page">
				</li>
				<li>
					<img src="assets/images/company/2.png" alt="Reload Page">
				</li>
				<li>
					<img src="assets/images/company/3.png" alt="Reload Page">
				</li>
				<li>
					<img src="assets/images/company/4.png" alt="Reload Page">
				</li>
				<li>
					<img src="assets/images/company/5.png" alt="Reload Page">
				</li>
			</ul>
		</div>
	</section>
	<!--==== Company Section end ====-->



	<!--==== Testimonial start ====-->
	<?php include("sections/testimonial-section.php") ?>
	<!--==== Testimonial End ====-->


	<!--==== FOOTER START ====-->
	<?php include('includes/footer.php') ?>
	<!--==== FOOTER END ====-->

	<!--==== SCRIPTS START ====-->
	<?php include('includes/footer-scripts.php') ?>
	<!--==== SCRIPTS END ====-->
</body>

</html>