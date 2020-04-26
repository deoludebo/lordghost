<?php
    $pagetitle = 'Our Partners';
    $currentPage = 'partners';

    include('php/header.php');
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/Blur.jpg);">
  <div class="container">
    <h1 class="title-line-left">Our Partners</h1>
    <div class="breadcrumbs">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li>Our Partners</li>
      </ul>
    </div>
  </div>
</div>
<!--================= PAGE-TITLE END =================-->
<!--=================== S-OUR-TEAM ===================-->
<section class="s-our-team about-team speakers-our-team">
  <div class="our-team-bg" style="background-image: url(assets/img/bg-team-about.svg);"></div>
  <div class="container">
    <h2 class="title-line">Our Partners</h2>
    <div class="row team-cover" style="margin-top: 30px">
      <div class="col-6 col-sm-3 team-item">
        <a href="#" class="team-img">
          <img src="assets/img/ms-icon-310x310.png" alt="partner">
        </a>
      </div>
      <div class="col-6 col-sm-3 team-item">
        <a href="#" class="team-img">
          <img src="assets/img/ms-icon-310x310.png" alt="partner">
        </a>
      </div>
      <div class="col-6 col-sm-3 team-item">
        <a href="#" class="team-img">
          <img src="assets/img/ms-icon-310x310.png" alt="partner">
        </a>
      </div>
      <div class="col-6 col-sm-3 team-item">
        <a href="#" class="team-img">
          <img src="assets/img/ms-icon-310x310.png" alt="partner">
        </a>
      </div>
    </div>
  </div>
</section>
<!--================= S-OUR-TEAM END =================-->
<section>
  <div class="container" style="padding-top: 50px">
    <div class="row">
      <div class="col-12 col-md-4 about-info">
        <div class="col-lg-12 col-md-12">
          <h2 class="title-line-left">OUR STATES</h2>
          <a href="states.php" class="btn btn-yellow">EXPLORE STATES</a>
        </div>
        <div class="col-lg-12 col-md-12">
          <button style="color: white; background: #88a4bc; padding: 10px 40px">OTHER STATES</button>
        </div>
        <div class="col-lg-12 col-md-12">
          <button style="color: white; background: #07923c; padding: 10px 40px">PDP STATES</button>
        </div>
      </div>
      <div class="col-12 col-md-8" id="map" align="center" style="margin-top: 10px">
      </div>
      <style>
        tspan {
          display: none
        }
      </style>
    </div>
  </div>
</section>

	<?php

    include('php/footer.php');
?>
