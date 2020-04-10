
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?> 
<body class="">
  <?php $this->load->view('web/includes/nevagation.php'); ?> 
  <div id="mainpublicContent">
  	<div id="banner-area">
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Contact Us</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Contact Us</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Map start here -->
		<div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"
			data-marker="images/marker.png"></div>
		<!--/ Map end here -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="col-md-7">
				<form id="contact-form" action="contact-form.php" method="post" role="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" id="email" placeholder="" type="email" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Subject</label>
								<input class="form-control" name="subject" id="subject" placeholder="" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna. Pellentesque justo
						ante</p>
					<br>
					<p><i class="fa fa-home info"></i> 1102 Saint Marys, Junction City, KS </p>
					<p><i class="fa fa-phone info"></i> +(785) 238-4131 </p>
					<p><i class="fa fa-envelope-o info"></i> info@bizcraft.com</p>
					<p><i class="fa fa-globe info"></i> www.bizcraft.com</p>
				</div>
			</div>
		</div>
	</div>
	<!--/ container end -->
</section>
  </div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</body>
