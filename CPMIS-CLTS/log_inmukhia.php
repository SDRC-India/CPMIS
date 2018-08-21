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
											<p><a href="index.php">Home</a></p>
										</div>
										<div class="inner-page-title">
											<h2>Login</h2>
											<p class="page-subtitle">CPMIS </p>
										</div>								
									</div>
								</div>														
									
									<div class="col-xs-12 col-md-offset-4 col-sm-5">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Mukhia</a></li>
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
											  <button type="submit" value="login" name="ngo_login" class="btn btn-info btn-block loginbutton"  onclick="return loginuser();" >Login</button>
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
<script type="text/javascript">

function loginuser() {
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if((username=="")||(password==""))
{
document.getElementById("errorlogin_msg").innerHTML= "Username and password should not be blank" ; 
setTimeout(function() {
document.getElementById("errorlogin_msg").innerHTML = "";
}, 3000);
return false ;
}
else {
//document.getElementById("name_msg3").innerHTML="" ;
// AJAX code to submit form.

var json_data=JSON.stringify({username: username ,password: password });
$.ajax({
	type: "post",
	url: "action_all_login.php" ,
	data: {json_data:json_data},
	dataType: "json",
	success     :   function(response) {
	    //window.location = 'index.php';
   //$( '#name_status' ).html(response);
   if(response==0)
   {
   	document.getElementById("name_status").innerHTML = "<b>Invalid Username or password</b>";
	 setTimeout(function() {
	document.getElementById("name_status").innerHTML = "";
	}, 100000); // <-- time in milliseconds 
   }
   else{
      	//document.getElementById("ngo_id").innerHTML = response;
	   window.location = "mukhia_registation.php"; 
	   //location.replace('ngo_updated.php/id=' + response);
	  
   }
 //document.getElementById("regngoForm").reset();
		//document.getElementById("elem").innerHTML = "<b>Registration Successfully</b>";
		//document.getElementById("regngoForm").reset();
    }
});
return false ;

}
}
</script>
 
    
  