
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
		<div class="banner-title-content">
			<div class="text-center">
				<h2>Login</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item text-white" aria-current="page">Login</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<section id="main-container">
		<div class="container">
			<div class=" form-group row " >
				<div class="col-md-3 "></div>
				<div class="col-md-6 col-md-offset-6">
					<?php echo form_open('?baseController/loginuser' , array('class' =>'form-horizontal','id' => 'loginform'));?>
					
					<input name="EmailId" id="EmailId" onclick="removeerr('EmailId_err')" placeholder="Email Id / Username" type="text" class="form-control">
					<span id="EmailId_err" class="text-danger"></span><br />
					
					<input name="password" id="password" onclick="removeerr('password_err')" placeholder="Password" type="password" class="form-control"><span id="password_err" class="text-danger"></span><br>
					<button type="button" onclick="user_login()" class="btn btn-lg btn-success btn-block"> Login</i></button>
					</form>
					<br>
	            <center><h5>You are not registered ?</h5><h5><a href="<?php echo base_url('web/register/signup'); ?>">Register here</a></h5></center>
	            </div>
	        </div>
		</div>
	</section>
</div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</body>

<script type="text/javascript">
	function removeerr(errid){
		$('#'+errid).html('');	
	}
	function user_login(){
		if(validateloginform()){
		 	$.blockUI
	        ({ 
	          css: 
	          { 
	                border: 'none', 
	                padding: '15px', 
	                backgroundColor: '#000', 
	                '-webkit-border-radius': '10px', 
	                '-moz-border-radius': '10px', 
	                opacity: .5, 
	                color: '#fff' 
	          } 
	        });
	       $('#loginform').submit();
	       
		}
	}
	function validateloginform(){
		var retuva=true;
		if($('#EmailId').val()==""){
			$('#EmailId_err').html('* Email Id/Username is required');	
			retuva=false;
		}
		if($('#password').val()==""){
			$('#password_err').html('* Password is required');	
			retuva=false;
		}
		return retuva;
	}
</script>