<?php include 'header_top.php'; ?>
      <?php include 'other_top.php'; ?>      
        <?php include 'other_header.php'; ?>
		
  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>  
  <body class="page">	
					<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="page-breadcroumb">
											<p><a href="index.php">Home</a> / (Mukhia)</p>
										</div>
										<div class="inner-page-title">
											<h2>Login</h2>
											<p class="page-subtitle">- (Mukhia) CPMIS </p>
										</div>								
									</div>
								</div>														
									<div class="col-xs-4"></div>
									<div class="col-xs-4">
										<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Mukhia</a></li>
										<!--<li><a data-toggle="tab" href="#menu2">Middle Men</a></li>-->
									  </ul>
									  <div class="well">
										<span id="name_status" class="mandtry"></span>
										<div id="errorlogin_msg" class="mandtry"></div>
										  <form id="loginForm" method="POST">
												<h4 class="newhding">Login User</h4>
											  <div class="form-group">
												  <label for="username" class="control-label">Request to OTP</label>
												 <!-- <input type="text" class="form-control" name="username" value="" required="" title="Please enter your username" placeholder="username">
												  <span class="help-block"></span>-->
											  </div>
											  <div class="form-group">
												  <label for="password" class="control-label">Moblie No.</label>
												  <input type="password" class="form-control" name="password" placeholder="Mobile number" value="" required="" title="Please enter your password">
												  <span class="help-block"></span>
											  </div>
											  <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
											  <div class="checkbox">
												  <!--<label>
													  <input type="checkbox" name="remember" id="remember"> Remember login
												  </label>-->
											  </div>
											  <button type="submit" value="Send" name="mukhialogin" class="btn btn-info btn-block loginbutton">Send</button>
											  <div class="control-label">
													<a href="mukhia_registation.php"><b>Register - Mukhia Registration</b></a>
												  </div>
										  </form>
									  </div>
								  </div>
				</div>
	<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}

</style>
 <?php include 'footer.php'; ?>
 	<script type="text/javascript" src="js/ngo_validation.js"></script>
<script>
	//login
  setTimeout(function() {
document.getElementById("name_status").innerHTML = "";
}, 20000); // <-- time in milliseconds 
</script>
 
    
  