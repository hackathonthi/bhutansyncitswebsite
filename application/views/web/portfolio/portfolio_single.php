
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
			<h2>Service Single</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Service Single</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="post-content">
					<div class="post-image-wrapper">
						<img src="images/pages/service-single.jpg" class="img-fluid" alt="" />
					</div><!-- post image end -->
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec mi eleifend, iaculis nisi sit amet,
						interdum ex. Suspendisse vel volutpat risus, eget semper orci. Integer ut ex et ex scelerisque venenatis nec
						id erat. Curabitur laoreet rutrum est at sagittis. Fusce lectus est, mattis in pretium eu, dapibus at diam.
						Suspendisse in dolor libero. Vivamus placerat est vel condimentum dignissim. Pellentesque eget dictum neque.
						Phasellus sit amet facilisis arcu. Integer vulputate eros sit amet eros blandit aliquam. Integer sed
						hendrerit est, in cursus magna.</p>

					<div class="gap-20"></div>

					<div class="row">
						<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
							<span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
							<div class="feature-content">
								<h3>Clean &amp; Modern Design</h3>
								<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
							</div>
						</div>
						<!--/ End first featurebox -->

						<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
							<span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
							<div class="feature-content">
								<h3>Useful Shortcodes</h3>
								<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
							</div>
						</div>
						<!--/ End 2nd featurebox -->
					</div>

					<div class="gap-20"></div>

					<div class="row">

						<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
							<span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
							<div class="feature-content">
								<h3>Multipurpose Concept</h3>
								<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
							</div>
						</div>
						<!--/ End 1st featurebox -->

						<div class="feature-box col-sm-6 wow fadeInDown" data-wow-delay=".5s">
							<span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
							<div class="feature-content">
								<h3>Responsive Layout</h3>
								<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
							</div>
						</div>
						<!--/ End 2nd featurebox -->
					</div>
				</div>
				<!--/ post content end -->
			</div>
			<!--/ Content col end -->

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar sidebar-right">
					<!-- category start -->
					<div class="widget widget-categories">
						<h3 class="widget-title">Categories</h3>
						<ul class="category-list clearfix">
							<li><a href="#">Objects</a><span class="posts-count"> (19)</span></li>
							<li><a href="#">Technology</a><span class="posts-count"> (09)</span></li>
							<li><a href="#">Photography</a><span class="posts-count"> (13)</span></li>
							<li><a href="#">Fashion</a><span class="posts-count"> (10)</span></li>
							<li><a href="#">Realtough</a><span class="posts-count"> (14)</span></li>
							<li><a href="#">Architecture</a><span class="posts-count"> (11)</span></li>
						</ul>
					</div><!-- category end -->

					<!-- tags start -->
					<div class="widget widget-tags">
						<h3 class="widget-title">Tags</h3>
						<ul class="unstyled clearfix">
							<li><a href="#">iMac</a></li>
							<li><a href="#">Black and Green</a></li>
							<li><a href="#">Crative</a></li>
							<li><a href="#">Momentum</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Cellular</a></li>
							<li><a href="#">Niche</a></li>
						</ul>
					</div><!-- tags end -->
				</div>
				<!--/ Sidebar end -->
			</div>
			<!--/ Sidebar col end -->
		</div>
		<!--/ row end -->
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->

<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Join with BizCraft and Give Your Website a Brand New Look</h3>
				<a href="#" class="float-right btn btn-primary white">Purchase Now</a>
			</div>
		</div>
	</div>
</section>
  </div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</body>
