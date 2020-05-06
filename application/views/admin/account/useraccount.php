
<!---------------------------<section class="content">
  <div class="container-fluid">
	<div class="row">
      <div class="col-md-12">
		<div class="row">
			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adduserform', 'enctype' => 'multipart/form-data'));?>
		<div class="col-md-6">
				<h4 class="alert alert-info">Update your Profile</h4>
				<p class="text-center">
				<img src="<?php echo base_url();?>assest/images/team/team4.jpg" style="max-width: 150px; height: auto;" class="img img-circle img-thumbnail">
				</p>
			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">Name <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" name="name" id="Full_Name" class="form-control" placeholder="Name" value="<?=$userDetils->Full_Name?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">Email <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" name="email" id="User_Id" class="form-control" placeholder="Email" value="<?=$userDetils->User_Id?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">Phone <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="Number" name="Phone" id="Contact_Number" class="form-control" placeholder="Phone" value="<?=$userDetils->Contact_Number?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">Username <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" name="username" class="form-control" placeholder="Username" value="<?=$userDetils->User_Id?>" readonly disabled>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">CID <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" name="username" id="CID" class="form-control" placeholder="Username" value="<?=$userDetils->CID?>" readonly disabled>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">Access Rights Level <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" name="Access-Level" class="form-control" placeholder="Access Rights Level" value="<?=$userDetils->Role_Id?>" readonly disabled>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 control-label text-right">Upload Image</label>
				<div class="col-sm-9">

					<input type="file" name="image" id="image" class="form-control" placeholder="Image" value="<?=$userDetils->Image_Name?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 control-label text-right"></label>
				<div class="col-sm-9">
					<div class="form-group btn-group text-right">
						<button type="submit" name="submit" class="btn btn-success btn-lg" onclick="updateDetails()"><i class="fa fa-save"></i> Save Data</button>

						<button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>

						<a href="#" class="btn btn-danger btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Back</a>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-6">
			<h4 class="alert alert-info">Change Password</h4>
			<div class="form-group row">
				<label class="col-sm-4 control-label text-right">New Password <span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="password" name="password" id="password" class="form-control" placeholder="New Password" value="" minlength="6" maxlength="32" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 control-label text-right">Confirm Password <span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirm Password " value=" " minlength="6" maxlength="32" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 control-label text-right"></label>
				<div class="col-sm-8">
					<div class="form-group btn-group text-right">
						<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Change Password</button>

						<button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	 </div>
   </div>
 </div>
</section>
<script type="text/javascript">
  	function updateDetails(){
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
      	var url='<?php echo base_url();?>index.php?adminController/updateUser/';
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adduserform").serialize()}; 
      	$("#adduserform").ajaxSubmit(options);
      	setTimeout($.unblockUI, 600); 
  	}
  	
</script>-------------------------------------------------------->

<section class="content">
  <div class="container-fluid">
  	<div class="col-md-12">
  	<div class="row">
  	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="alert alert-info">Update User Details</h3>
    </div>
    <p class="text-center">
	<img src="<?php echo base_url();?>assest/admin/dist/img/user2-160x160.jpg"  style="max-width: 150px; height: auto;" class="img img-circle img-thumbnail">
	</p>
	<hr>
    <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adduserform', 'enctype' => 'multipart/form-data'));?>
        <div class="card-body">
          <div class="row">
          	
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Identity Number:</label>
                <input type="number" name="CID" value="<?=$userDetils->CID?>" id="CID" class="form-control">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>Name:</label>
                <input type="text" value="<?=$userDetils->Full_Name?>" name="Full_Name" id="Full_Name" class="form-control">
              </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label>E-mail / User Id:</label>
                <input type="text" value="<?=$userDetils->User_Id?>" name="User_Id" id="User_Id" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Contact Number:</label>
              <input type="text" value="<?=$userDetils->Contact_Number?>" name="Contact_Number" id="Contact_Number" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Role:</label>
              <input type="text" value="<?=$userDetils->Role_Name?>" class="form-control" readonly>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Upload Photo:</label>
              <input type="file" name="photo" id="photo" class="form-control" placeholder="Photo/Logo" value=" ">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <input type="hidden" name="userId" value="<?php echo $this->session->userdata('User_table_id');?>">
              <button class="btn btn-success pull-right" type="button" onclick="updateDetails()"> <i class="fa fa-edit"></i>Update</button>
            </div>
          </div> 
      </div>
    </form>
  </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  	<div class="card card-primary">
    <div class="card-header">
      <h3 class="alert alert-info">Change Password</h3>
    </div>
  	<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adduserform', 'enctype' => 'multipart/form-data'));?>
        <div class="card-body">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>Old Password:</label>
              <input type="text" value="<?=$userDetils->Password?>" class="form-control" readonly>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <label>New Password:</label>
              <input type="text" name="Password" value="" id="Password" class="form-control">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <input type="hidden" name="userId" value="<?php echo $this->session->userdata('User_table_id');?>">
              <button class="btn btn-success pull-right" type="button" onclick="updatepassword()"> <i class="fa fa-edit"></i>Update</button>
            </div>
          </div> 
      </div>
    </form>
  </div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
  	function updateDetails(){
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
      	var url='<?php echo base_url();?>index.php?adminController/updateUser/';
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adduserform").serialize()}; 
      	$("#adduserform").ajaxSubmit(options);
      	setTimeout($.unblockUI, 600); 
  	}
  	function updatepassword()
  	{
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
      	var url='<?php echo base_url();?>index.php?adminController/updatePassword/';
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adduserform").serialize()}; 
      	$("#adduserform").ajaxSubmit(options);
      	setTimeout($.unblockUI, 600);	
  	}
  	
</script>