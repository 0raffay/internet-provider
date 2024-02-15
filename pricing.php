<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pricing | <?php echo $siteName; ?></title>
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
      <div class="bannerImage"> <img src="assets/images/banners/pricing-banner.png" alt="Reload Page"> </div>
      <div class="bannerText">
        <div class="container">
          <div class="bannerTextContainer">
            <h1 class="bannerHeading">Better Connections Start Here.</h1>
            <p class="bannerSubtitle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante blandit, ac rhoncus metus tincidunt. Nunc ornare, lorem sed interdum fringilla, tellus leo hendrerit nisi, sed posuere quam enim sit amet purus. Maecenas luctus tortor eleifend ullamcorper aliquet. </p>
            <a href="" class="btn btn-primary btn-size-lg">Learn More <img src="assets/images/icons/arrow-right.svg" alt=""></a>
            <div class="bannerTip"> <img src="assets/images/icons/banner-tip.svg" alt="tip icon">
              <p>Over 7,000,000 people use our free tool every year to search 1,600+ internet providers across the US.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Banner end ====-->

  <!--==== Pricing start ====-->
  <section class="pricingSection">
    <div class="container py-lg-5">
      <div class="section_text text-center mx-auto small mb-4 mb-md-5">
        <h6 class="section_label">Our SErvices Price</h6>
        <h4 class="section_heading">Choose Your Plan</h4>
      </div>
      <div class="row">
        <div class="col-md-6 col-xl-4 mb-4 mb-lg-0">
          <div class="pricingCard position-relative">
            <h3 class="pricingTitle">Fibre Unlimited</h3>
            <p class="pricingSubtitle">Average Speed</p>
            <span class="pricingPrice">
              £59
            </span>
            <ul class="pricingFeaturesList list-unstyled">
              <li>TV-Box</li>
              <li>Wifi Router</li>
              <li>Upto 65 MBPS</li>
              <li>Adult Channels</li>
              <li>Unlimited Rooms</li>
            </ul>

            <ul class="pricingIconList list-unstyled">
              <li>
                <img src="assets/images/icons/pricing-icon-1.svg" alt="reload page">
              </li>
            </ul>

            <a href="" class="btn btn-primary btn-size-lg">Choose Plan<img src="assets/images/icons/arrow-right.svg" alt=""></a>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4 mb-lg-0">
          <div class="pricingCard special position-relative">
            <div class="pricingLabel">Special Offer</div>
            <h3 class="pricingTitle">Easy Surfing</h3>
            <p class="pricingSubtitle">Average Speed</p>
            <span class="pricingPrice">
              £69
            </span>
            <ul class="pricingFeaturesList list-unstyled">
              <li>TV-Box</li>
              <li>Wifi Router</li>
              <li>Upto 65 MBPS</li>
              <li>Adult Channels</li>
              <li>Unlimited Rooms</li>
            </ul>

            <ul class="pricingIconList list-unstyled">
              <li>
                <img src="assets/images/icons/pricing-icon-1.svg" alt="reload page">
              </li>
              <li>
                <img src="assets/images/icons/pricing-icon-2.svg" alt="reload page">
              </li>
            </ul>

            <a href="" class="btn btn-primary btn-size-lg">Choose Plan<img src="assets/images/icons/arrow-right.svg" alt=""></a>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4 mb-lg-0">
          <div class="pricingCard position-relative">
            <h3 class="pricingTitle">Office Comfort</h3>
            <p class="pricingSubtitle">Average Speed</p>
            <span class="pricingPrice">
              £99
            </span>
            <ul class="pricingFeaturesList list-unstyled">
              <li>TV-Box</li>
              <li>Wifi Router</li>
              <li>Upto 65 MBPS</li>
              <li>Adult Channels</li>
              <li>Unlimited Rooms</li>
            </ul>

            <ul class="pricingIconList list-unstyled">
              <li>
                <img src="assets/images/icons/pricing-icon-1.svg" alt="reload page">
              </li>
              <li>
                <img src="assets/images/icons/pricing-icon-1.svg" alt="reload page">
              </li>
              <li>
                <img src="assets/images/icons/pricing-icon-3.svg" alt="reload page">
              </li>
            </ul>

            <a href="" class="btn btn-primary btn-size-lg">Choose Plan<img src="assets/images/icons/arrow-right.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Pricing end ====-->


  <!--==== Company Section Start ====-->
  <?php include("sections/company-section.php") ?>
  <!--==== Company Section end ====-->

  <!--==== Blog Start ====-->
  <?php include('sections/blog-section.php') ?>
  <!--==== Blog End ====-->

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