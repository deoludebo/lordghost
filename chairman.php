
<?php
    $pagetitle = 'Chairman | PDP Governors Forum';
    $currentPage = 'chairman';

    include('php/header.php');
?>

	<!--=================== PAGE-TITLE ===================-->
	<div class="page-title" style="background-image: url(assets/img/Blur.jpg);">
		<div class="container">
			<h1 class="title-line-left">The Chairman</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>Chairman</li>
				</ul>
			</div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->

	<!--=================== OUR-SPEAKERS ===================-->
	<section class="our-speakers">
		<div class="container">

			<div class="our-speakers-cover">
				<div class="speaker-item">
					<div class="speaker-item-img">
						<img src="assets/img/uploads/tambuwal.jpg" alt="img">
					</div>
					<div class="speaker-item-content">
						<h3>Aminu Waziri Tambuwal</h3>
						<div class="prof">The Chairman PDP Governors' Forum</div>
						<p>Rt Hon. Aminu Waziri Tambuwal was born on January 10, 1966 to Waziri Tambuwal in Tambuwal Village in Sokoto State.
He attended Tambuwal Primary School, Tambuwal, Sokoto State, where he obtained his First School Leaving Certificate in 1979. He proceeded to the Government Teachers’ College, Dogon-Daji, where he obtained the Teachers Grade 11 Certificate in 1984. He attended Usman Dan Fodio University, Sokoto, where he studied Law, graduating with an LLB (Hons) degree in 1991. He completed his one year compulsory legal studies at the Nigerian Law School, Lagos, obtained his BL and was called to the Bar in 1992. He also attended several courses abroad.</p>

					</div>
				</div>
				<div class="speaker-item col-lg-12">
					<div class="col-lg-6">
            His political career started in 1999, working as Personal Assistant on Legislative Affairs to Senator Abdullahi Wali, the then Senate Leader. In 2003, ran for a legislative seat as representative of the Kebbi/Tambuwal Federal Constituency. He was elected into the House of Representatives on the platform of the All Nigeria Peoples Party (ANPP). In 2007, he defected to the Peoples Democratic Party (PDP), alongside the former governor of Sokoto State, Attahiru Bafarawa. However, when the PDP denied return tickets to former ANPP legislators, Right Hon. Aminu Waziri Tambuwal swung back to the ANPP, where he eventually succeeded in picking up a ticket for the election. He has held several offices in the House. In 2005, he became the Minority Leader of the House until he defected to the PDP. Upon his re-election to the House in 2007, he was also elected the Deputy Chief Whip.
					</div>
          <div class="col-lg-6">
            Right Hon. Aminu Waziri Tambuwal has been a very active member of the Nigerian Bar Association (NBA), over the years. He began as a Public Relations Officer of the NBA, Sokoto State chapter between 1996 and 1997. He was a member of the Constitution Review Committee of the NBA (1997–1998) and the Sokoto branch Secretary of the Association (1997–1998). He was later appointed Assistant National Financial Secretary of the NBA (1998–2000). He was the first Assistant National Secretary of the Association (2000-2002). He is also a member of the Body of Benchers, Nigeria; International Bar Association, and the American Bar Association among others.
					</div>
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
