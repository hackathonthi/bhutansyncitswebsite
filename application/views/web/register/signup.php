
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?> 
<body class="">
  <?php $this->load->view('web/includes/nevagation.php'); ?> 
  <div id="mainpublicContent">
<div id="banner-area">
	<img src="<?php echo base_url();?>assest/images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Registration</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Registration</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<section id="main-container">
	<div class="container">
		<div class="row">
          <div class="col-md-6 col-md-offset-6">
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Please do Registration here</h3>
                  </div>
                  <div class="panel-body">
 
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Name" name="user_name" type="text" autofocus>
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Age" name="user_age" type="number" value="">
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter 10 diMobile No" name="user_mobile" type="number" value="">
                              </div>
 
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
 
                          </fieldset>
                      </form>
                      <center><b>You have Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>"> Please Login</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
        <div class="col-md-6">
				<div class="contact-info">
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna. Pellentesque justo
						ante</p>
					<p><i class="fa fa-home info"></i> 1102 Saint Marys, Junction City, KS </p>
					<p><i class="fa fa-phone info"></i> +(785) 238-4131 </p>
					<p><i class="fa fa-envelope-o info"></i> info@bizcraft.com</p>
					<p><i class="fa fa-globe info"></i> www.bizcraft.com</p>
				</div>
			</div>
    </div>
</div>
		
</div>
</section>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</body>

