<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home | <?php echo $siteName; ?></title>

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
				<img src="assets/images/banners/home-banner.png" alt="Reload Page">
			</div>
			<div class="bannerText">
				<div class="container">
					<div class="bannerTextContainer">
						<h1 class="bannerHeading">Best Internet Services In Your Region</h1>
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

	<!--==== Action Section Start ====-->
	<section class="actionSection bg-grey-400">
		<div class="container py-md-4">
			<div class="row">
				<div class="col-md-4">
					<a href="#">
						<div tabindex="0" class="actionCard position-relative">
							<div class="icon_wrap mb-20">
								<img src="assets/images/icons/action-1.svg" alt="Action icon">
							</div>
							<h6 class="fw-400 fs-16 lh-1-3 fc-secondary mb-3">What Speed You Need?</h6>
							<p class="fw-300 fc-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt.</p>
							<img src="assets/images/icons/action-arrow.svg" class="actionArrow" alt="action-arrow">
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<div tabindex="0" class="actionCard position-relative">
							<div class="icon_wrap mb-20">
								<img src="assets/images/icons/action-2.svg" alt="Action icon">
							</div>
							<h6 class="fw-400 fs-16 lh-1-3 fc-secondary mb-3">What Speed You Need?</h6>
							<p class="fw-300 fc-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt.</p>
							<img src="assets/images/icons/action-arrow.svg" class="actionArrow" alt="action-arrow">
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<div tabindex="0" class="actionCard position-relative">
							<div class="icon_wrap mb-20">
								<img src="assets/images/icons/action-3.svg" alt="Action icon">
							</div>
							<h6 class="fw-400 fs-16 lh-1-3 fc-secondary mb-3">What Speed You Need?</h6>
							<p class="fw-300 fc-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt.</p>
							<img src="assets/images/icons/action-arrow.svg" class="actionArrow" alt="action-arrow">
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--==== Action Section end ====-->

	<!--==== About Our Company Start ====-->
	<section class="aboutCompany">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="img_wrap">
						<img src="assets/images/about-company.png" alt="About Our Company">
					</div>
				</div>
				<div class="col-md-6">
					<h6 class="section_label label-before">About Our Company</h6>
					<h4 class="section_heading">Discover The World’s Fastest Network Provider</h4>
					<p class="mb-md-4 mb-3 fc-neutral-400 fw-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt. Nunc ornare, lorem sed interdum fringilla, tellus leo hendrerit nisi, sed posuere quam enim sit amet purus.</p>
					<p class="mb-4 fc-neutral-400 fw-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt. Nunc ornare, lorem sed interdum fringilla, tellus leo hendrerit nisi, sed posuere quam enim sit amet purus.</p>


					<ul class="d-flex align-items-center flex-wrap column-gap-5 row-gap-4 mb-4 mb-md-5">
						<li class="d-flex align-items-center gap-2 fc-neutral-300 ff-primary fw-400 fs-20 lh-1-1">
							<img src="assets/images/icons/check-mark.svg" alt="Check Mark">
							StarNet Internet is providing
						</li>
						<li class="d-flex align-items-center gap-2 fc-neutral-300 ff-primary fw-400 fs-20 lh-1-1">
							<img src="assets/images/icons/check-mark.svg" alt="Check Mark">
							Internet is providing
						</li>
						<li class="d-flex align-items-center gap-2 fc-neutral-300 ff-primary fw-400 fs-20 lh-1-1">
							<img src="assets/images/icons/check-mark.svg" alt="Check Mark">
							Get a dedicated server
						</li>
						<li class="d-flex align-items-center gap-2 fc-neutral-300 ff-primary fw-400 fs-20 lh-1-1">
							<img src="assets/images/icons/check-mark.svg" alt="Check Mark">
							Reliable for both gamers
						</li>
					</ul>

					<div class="d-flex align-items-center gap-3 gap-md-5">
						<a href="" class="btn btn-primary btn-size-lg">View More <img src="assets/images/icons/arrow-right.svg" alt=""></a>

						<div class="d-flex align-items-center gap-3">
							<span class="icon_wrap flex-shrink-0">
								<img src="assets/images/icons/phone-ringing.svg" alt="Reload Page">
							</span>
							<span>
								<h6 class="fc-primary fs-18 fw-400">Call us Anytime</h6>
								<p><a href="tel: <?php echo $sitePhone; ?>" class="fs-20 fw-300 hover-opacity hover-text-decoration"><?php echo $sitePhone; ?></a></p>
							</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--==== About Our Company end ====-->

	<!--==== Features Start ====-->
	<section class="featureSection">
		<div class="container">
			<div class="section_text small mx-auto text-center mb-4 mb-md-5">
				<h4 class="section_heading">Find Perfect Network Solutions</h4>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="featureCard">
						<span class="icon_wrap mb-4 d-block">
							<img src="assets/images/icons/solution-1.svg" alt="Reload Page">
						</span>
						<h6 class="fw-400 fs-20 lh-1-3 fc-dark mb-2">Corporate Internet</h6>
						<p class="mb-3 fc-neutral-400 fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam.</p>
						<a href="" class="ff-primary fs-15 fw-600">Discover More <i class="ms-1 fa-solid fa-arrow-right-long"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="featureCard">
						<span class="icon_wrap mb-4 d-block">
							<img src="assets/images/icons/solution-2.svg" alt="Reload Page">
						</span>
						<h6 class="fw-400 fs-20 lh-1-3 fc-dark mb-2">Home Internet</h6>
						<p class="mb-3 fc-neutral-400 fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam.</p>
						<a href="" class="ff-primary fs-15 fw-600">Discover More <i class="ms-1 fa-solid fa-arrow-right-long"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="featureCard">
						<span class="icon_wrap mb-4 d-block">
							<img src="assets/images/icons/solution-3.svg" alt="Reload Page">
						</span>
						<h6 class="fw-400 fs-20 lh-1-3 fc-dark mb-2">Cable TV</h6>
						<p class="mb-3 fc-neutral-400 fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam.</p>
						<a href="" class="ff-primary fs-15 fw-600">Discover More <i class="ms-1 fa-solid fa-arrow-right-long"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="featureCard">
						<span class="icon_wrap mb-4 d-block">
							<img src="assets/images/icons/solution-4.svg" alt="Reload Page">
						</span>
						<h6 class="fw-400 fs-20 lh-1-3 fc-dark mb-2">Satellite Chanel </h6>
						<p class="mb-3 fc-neutral-400 fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam.</p>
						<a href="" class="ff-primary fs-15 fw-600">Discover More <i class="ms-1 fa-solid fa-arrow-right-long"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==== Features End ====-->



	<!--==== FOOTER START ====-->
	<?php include('includes/footer.php') ?>
	<!--==== FOOTER END ====-->

	<!--==== SCRIPTS START ====-->
	<?php include('includes/footer-scripts.php') ?>
	<!--==== SCRIPTS END ====-->
</body>

</html>