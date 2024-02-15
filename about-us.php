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
	<section class="banner p-0 ">
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
		<div class="container pt-lg-5">
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
	<?php include("sections/company-section.php") ?>
	<!--==== Company Section end ====-->

	<!--==== Promotion Section start ====-->
	<section class="promotionSection">
		<div class="container">
			<div class="text-center mb-4 mb-md-5">
				<h6 class="section_label mb-2">Promotion Video</h6>
				<h4 class="section_heading">Ultra fast internet</h4>
			</div>
			<div class="position-relative">
				<div class="promotionSlider">
					<div class="item">
						<div class="promotionCard position-relative text-center">
							<div class="playButton position-absolute top-50 start-50 translate-middle">
								<img class="mb-2" src="assets/images/icons/play-icon.svg" alt="Play Video">
								<h6 class="fs-25 lh-1 fw-400 fc-white">Just in <span class="fc-primary">$60</span> a month</h6>
							</div>
							<img src="assets/images/promotion-video-thumbnail.png" alt="Reload Page">
						</div>
					</div>

					<div class="promotionButtons promotionLeftButton">
						<p class="fs-25 lh-1 orientation-90 fc-white d-flex align-items-center justify-content-center fw-600">Ultra-Reliable</p>
						<button>
							<img src="assets/images/icons/arrow-left-white.svg" alt="Reload Page">
						</button>
					</div>
					<div class="promotionButtons promotionRightButton">
						<p class="fs-25 lh-1 orientation-90 fc-white d-flex align-items-center justify-content-center fw-600">Value Bundles</p>
						<button>
							<img src="assets/images/icons/arrow-right-white.svg" alt="Reload Page">
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Promotion Section end ====-->

	<!--==== Limitless Service Section start ====-->
	<section class="limitlessServiceSection bg-grey-500">
		<div class="container">
			<div class="section_text text-center small mx-auto mb-4 mb-lg-5">
				<h6 class="section_label">Our services</h6>
				<h4 class="section_heading">Discover Our Limitless
					Service</h4>
			</div>
			<div class="row">
				<div class="col-md-6 col-xl-4 mb-4">
					<div class="limitlessCards">
						<div class="icon_wrap">
							<img src="assets/images/icons/limitless-1.svg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="ff-primary fs-20 fw-700 fc-dark-700 text-capitalize mb-1">Broadband Connection</h6>
							<p class="lh-1-2 fs-14 fw-400 lh-1-3">Consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 mb-4">
					<div class="limitlessCards">
						<div class="icon_wrap">
							<img src="assets/images/icons/limitless-2.svg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="ff-primary fs-20 fw-700 fc-dark-700 text-capitalize mb-1">DTH TV Connections</h6>
							<p class="lh-1-2 fs-14 fw-400 lh-1-3">Consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 mb-4">
					<div class="limitlessCards">
						<div class="icon_wrap">
							<img src="assets/images/icons/limitless-3.svg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="ff-primary fs-20 fw-700 fc-dark-700 text-capitalize mb-1">Wifi Connection</h6>
							<p class="lh-1-2 fs-14 fw-400 lh-1-3">Consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 mb-4">
					<div class="limitlessCards">
						<div class="icon_wrap">
							<img src="assets/images/icons/limitless-4.svg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="ff-primary fs-20 fw-700 fc-dark-700 text-capitalize mb-1">Business Plans</h6>
							<p class="lh-1-2 fs-14 fw-400 lh-1-3">Consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 mb-4">
					<div class="limitlessCards">
						<div class="icon_wrap">
							<img src="assets/images/icons/limitless-5.svg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="ff-primary fs-20 fw-700 fc-dark-700 text-capitalize mb-1">Postpaid & Prepaid Sim</h6>
							<p class="lh-1-2 fs-14 fw-400 lh-1-3">Consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 mb-4">
					<div class="limitlessCards">
						<div class="icon_wrap">
							<img src="assets/images/icons/limitless-6.svg" alt="Reload Page">
						</div>
						<div class="text_wrap">
							<h6 class="ff-primary fs-20 fw-700 fc-dark-700 text-capitalize mb-1">5G Updations</h6>
							<p class="lh-1-2 fs-14 fw-400 lh-1-3">Consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Limitless Service Section end ====-->

	<!--==== Testimonial start ====-->
	<?php include("sections/testimonial-section.php") ?>
	<!--==== Testimonial End ====-->

	<!--==== Globe Section start ====-->
	<section class="globeSection">
		<div class="container">
			<div class="section_text text-center small mx-auto mb-4 mb-lg-5">
				<h6 class="section_label">BEST NETWORK CONNECTIONS</h6>
				<h4 class="section_heading">Better Connectivity For Your
					Digital Journey</h4>
			</div>
		</div>
		<div class="img_wrap text-center">
			<img src="assets/images/globe-image.png" alt="Reload Page">
		</div>
		<div class="container pb-lg-5">
			<div class="row justify-content-center align-items-center">
				<div class="col-auto">
					<div class="counterCards d-flex align-items-center">
						<h6 class="fs-60 fw-400 lh-1 fc-primary">
							75K
						</h6>
						<p class="fs-22 lh-1-1 fw-300 fc-grey-600 ">SATISFIED
							CLIENTS</p>
					</div>
				</div>
				<div class="col-auto">
					<div class="counterCards d-flex align-items-center">
						<h6 class="fs-60 fw-400 lh-1 fc-primary">
							50
						</h6>
						<p class="fs-22 lh-1-1 fw-300 fc-grey-600 ">BRANCHES
							GLOBALLY</p>
					</div>
				</div>
				<div class="col-auto">
					<div class="counterCards d-flex align-items-center">
						<h6 class="fs-60 fw-400 lh-1 fc-primary">
							32
						</h6>
						<p class="fs-22 lh-1-1 fw-300 fc-grey-600 ">EXPERT INSTRUCTORS</p>
					</div>
				</div>
				<div class="col-auto">
					<div class="counterCards d-flex align-items-center">
						<h6 class="fs-60 fw-400 lh-1 fc-primary">
							75
						</h6>
						<p class="fs-22 lh-1-1 fw-300 fc-grey-600 ">YEARS <br> FIELD EXPERIENCE</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Globe Section end ====-->


	<!--==== FOOTER START ====-->
	<?php include('includes/footer.php') ?>
	<!--==== FOOTER END ====-->

	<!--==== SCRIPTS START ====-->
	<?php include('includes/footer-scripts.php') ?>
	<!--==== SCRIPTS END ====-->
</body>

</html>