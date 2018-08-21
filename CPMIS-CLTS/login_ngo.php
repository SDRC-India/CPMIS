<?php include 'header_top.php'; ?>
      <?php include 'other_top.php'; ?>      
        <?php include 'other_header.php';

 if(isset($_POST['remember'])){
           setcookie('name',$name,time() + (60*60*24*1));
           setcookie('pwd',$pwd,time() + (60*60*24*1));
		   
           }

		?>

  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>  
  <body class="page">	
					<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="page-breadcroumb">
											<p><a href="index.php">Home</a> / (NGO)</p>
										</div>
										<div class="inner-page-title">
											<h2>Login</h2>
											<p class="page-subtitle">- (NGO) CPMIS </p>
										</div>								
									</div>
								</div>														
									
									<div class="col-xs-12 col-md-offset-4 col-sm-5">
										<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">NGO</a></li>
										<!--<li><a data-toggle="tab" href="#menu2">Middle Men</a></li>-->
									  </ul>
									  <div class="well">
										<span id="name_status" class="mandtry"></span>
										<span id="errorlogin_msg" class="mandtry"></span>
										  <form id="loginFormngo" name="loginFormngo" method="POST">
												<h4 class="newhding">Login User</h4>
											  <div class="form-group">
												  <label for="username" class="control-label">Username</label>
												  <input type="text" class="form-control" name="username" id="username" value=""  title="Please enter your username" placeholder="username" onblur="return checkloginerror('username','password');">
												  <div id="name_msg"></div>
											  </div>
											  <div class="form-group">
												  <label for="password" class="control-label">Password</label>
												  <input type="password" class="form-control" name="password" id="password" placeholder="password" value=""  title="Please enter your password" onblur="return checkloginerror('username','password');">
												  <span class="help-block"></span>
											  </div>
											  <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="remember" id="remember" value="true"> Remember login
												  </label>
											  </div>						
											  <button type="submit" value="login" name="ngo_login" class="btn btn-info btn-block loginbutton"  onclick="return ngologin();" >Login</button>
												<div class="control-label">
													<a href="ngo_registation.php"><b>Register - NGO Registration</b></a>
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
	<script>
	//login
 
 
</script>
 <?php include 'footer.php'; ?>
 	<script type="text/javascript" src="js/ngo_validation.js"></script>

 
    
  