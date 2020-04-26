
<?php
    $pagetitle = 'Secretariat | PDP Governors Forum';
    $currentPage = 'secretariat';

    include('php/header.php');
?>

	<!--=================== PAGE-TITLE ===================-->
	<div class="page-title" style="background-image: url(assets/img/Blur.jpg);">
		<div class="container">
			<h1 class="title-line-left">The Secretariat</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>Secretariat</li>
				</ul>
			</div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->

	<!--=================== OUR-SPEAKERS ===================-->
	<section class="our-speakers">
		<div class="container">

			<div class="our-speakers-cover row justify-content-center">
				<div class="speaker-item col-lg-10">
          <img src="assets/img/ConferenceRoom.jpg" alt="img" width="100%">
				</div>
				<div class="col-lg-10">
          <br><br>The Secretariat is the technical and administrative arm of the Nigeria Governors’ Forum, which oversees the daily operations of the Forum, giving direction and focus to the NGF by effectively engaging partners and stakeholders. It is a Policy Hub that provides administrative, research and technical support to the Forum in carrying out its strategic objectives. The Secretariat is also a Resource Centre that provides reliable and current information in relevant areas of policy making for the Forum.
          In 2009, in the wake of the emergence of Dr. Abubakar Bukola Saraki as Chairman of the Forum, the Secretariat went through a major restructuring, and re-positioned into an effective and functional policy hub, better able to drive the agenda of the Forum. The Secretariat’s capacity as the technical support engine and vehicle of NGF activities has evolved considerably over time.  <br><br>
          The Secretariat is headed by a Director General and supported by two Executive Directors in charge of Administration and Finance and Strategy and Research respectively. With the support of International Development Partners, the Secretariat has gradually evolved into a policy think-tank as well as a one-stop resource centre for the 36 States of Nigeria. The Secretariat has continued to increase its capacity to:
              <ul><br><li>⬤ Deepen its policy conception functions</li><li>
              ⬤ Ensure timely, reliable rendition of accurate data and research materials to the Forum</li><li>
              ⬤ Proactively build the capacity of state actors to ensure better service delivery at the sub-national level.</li></ul>
          <br>The policy areas include:
          <ul><li>
          1. Economic Research and Advisory</li><li>
          2. State Peer Review Mechanism</li><li>
          3. Policy Advisory</li><li>
          4. Public Financial Management and Development Policy Operations</li><li>
          5. Polio Eradication Initiative/Routine Immunization</li><li>
          6. Knowledge Management</li></ul>
				</div>
			</div>
		</div>
	</section>
	<!--================= OUR-SPEAKERS END =================-->
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
