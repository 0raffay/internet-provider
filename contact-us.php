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
  <section class="banner p-0">
    <div class="bannerMain position-relative">
      <div class="bannerImage"> <img src="assets/images/banners/contact-banner.png" alt="Reload Page"> </div>
      <div class="bannerText">
        <div class="container">
          <div class="bannerTextContainer">
            <h1 class="bannerHeading">Get In Touch With Us</h1>
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

  <!--==== Contact start ====-->
  <section class="contactSection">
    <div class="container py-lg-5">
      <div class="section_text mb-4">
        <h6 class="section_label label-before mb-2">Secure Connections</h6>
        <h4 class="section_heading">We Offer The Highest-<br>Quality Network Connections</h4>
        <p class="fc-neutral-400 fs-18 lh-1-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor risus id ante <br> blandit, ac rhoncus metus tincidunt. Nunc ornare.</p>
      </div>

      <div class="row">
        <div class="col-xl-6 order-xl-1 order-2">
          <ul class="contactInfoList list-unstyled">
            <li class="d-flex align-items-center gap-4">
              <span class="icon_wrap flex-shrink-0">
                <img src="assets/images/icons/location-white.svg" alt="Reload Page">
              </span>
              <div class="text_wrap pe-lg-5 me-lg-4">
                <h6 class="fs-22 lh-1 fw-400 fc-neutral-400 mb-2">Store Address</h6>
                <p class="fw-300 fs-18 fc-neutral-400">No: 58 A, East Madison Street, Baltimore, MD, USA 4508</p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-4">
              <span class="icon_wrap flex-shrink-0">
                <img src="assets/images/icons/email-icon.svg" alt="Reload Page">
              </span>
              <div class="text_wrap pe-lg-5 me-lg-4">
                <h6 class="fs-22 lh-1 fw-400 fc-neutral-400 mb-2">Send us a Mail</h6>
                <p class="fw-300 fs-18 fc-neutral-400">info@example.com</p>
              </div>
            </li>
            <li class="d-flex align-items-center gap-4">
              <span class="icon_wrap flex-shrink-0">
                <img src="assets/images/icons/location-white.svg" alt="Reload Page">
              </span>
              <div class="text_wrap pe-lg-5 me-lg-4">
                <h6 class="fs-22 lh-1 fw-400 fc-neutral-400 mb-2">Contact us</h6>
                <p class="fw-300 fs-18 fc-neutral-400">000 - 123 - 456789 </p>
                <p class="fw-300 fs-18 fc-neutral-400"> 000 - 123 - 456789</p>
              </div>
            </li>
          </ul>
          <div class="contactMapContainer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9581874.19203155!2d-15.000813138693676!3d54.10344657823548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1705928958963!5m2!1sen!2s" width="470" height="309" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-xl-6 mb-xl-0 mb-4 order-xl-2 order-1">
          <div class="contactFormContainer">
            <form action="" id="contactForm">
              <div class="row row-gap-4">
                <div class="col-12">
                  <input type="text" required placeholder="How we can help You?">
                </div>
                <div class="col-sm-6">
                  <input type="text" required placeholder="First Name">
                </div>
                <div class="col-sm-6">
                  <input type="text" required placeholder="Last Name">
                </div>
                <div class="col-sm-6">
                  <input type="email" required placeholder="Email Address">
                </div>
                <div class="col-sm-6">
                  <input type="tel" required placeholder="Mobile Number">
                </div>
                <div class="col-sm-12">
                  <input type="text" required placeholder="Your Address">
                </div>
                <div class="col-12">
                  <textarea placeholder="Message..."></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit Now<img src="assets/images/icons/arrow-right.svg" alt="Reload Page"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==== Contact end ====-->


  <!--==== FOOTER START ====-->
  <?php include('includes/footer.php') ?>
  <!--==== FOOTER END ====-->

  <!--==== SCRIPTS START ====-->
  <?php include('includes/footer-scripts.php') ?>
  <!--==== SCRIPTS END ====-->
</body>

</html>