<?php
include( "includes/site-info.php" );
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


<!--==== FOOTER START ====-->
<?php include('includes/footer.php') ?>
<!--==== FOOTER END ====--> 

<!--==== SCRIPTS START ====-->
<?php include('includes/footer-scripts.php') ?>
<!--==== SCRIPTS END ====-->
</body>
</html>