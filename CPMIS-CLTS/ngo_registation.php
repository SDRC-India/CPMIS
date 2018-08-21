<?php
session_start();
/*		if($_SESSION['user_id']=="")
			{
			header('Location: login.php');
			}else{
			$session_id=$_SESSION['user_id'] ;
			}  */
 include 'header_top.php'; ?>
      <?php include 'other_top.php'; ?>      
        <?php include 'other_header.php'; ?>
	<script>

</script>	
  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>  
  <body class="page">	
				<section class="recent-causes section-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-breadcroumb">
									<p><a href="index.php">Home</a> / (NGO)</p>
								</div>
								<div class="inner-page-title">
									<h2>Registration</h2>
									<p class="page-subtitle">- (NGO) CPMIS /<a href="logout.php"><span style="color:gray;float:right;">Logout</span></a> </p>
								</div>								
							</div>
						</div>
					<div class="container">
						<div class="col-xs-3"></div>								  
							  <div class="col-xs-6">
							  	<div id="elem" name="elem" class="success"></div>
								  <ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#home">NGO</a></li>
									<!--<li><a data-toggle="tab" href="#menu2">Middle Men</a></li>-->
								  </ul>	
								
							 <div class="well" id="1stdiv" class="1stdiv">
							  <form id="regngoForm" method="POST" name="regngoForm" enctype="multipart/form-data">
										<h4 class="newhding">New NGO Registration</h4>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>1. Name</label>
										  <input type="text" class="form-control" name="regusername" id="regusername" value="" maxlength="100"  title="Please enter your username" placeholder="username"  onblur="return checkerror(this.value,'name_msg1');">
											<div id="name_msg1" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>2. Email</label>
											<input id="email_id" type="text" class="form-control" name="email_id" placeholder="Email" maxlength="100" onblur="checkexist(this.value,'name_msg4');">
											<div id="name_msg4" class="color-red"></div>
									  </div>
									   <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>3. Contact</label>
										  <input type="text" class="form-control" name="contact" id="contact" value=""  title="Please enter your Contact" placeholder="Contact" onblur="return checkerror(this.value,'name_msg5');" maxlength="10" onkeypress="return isNumberKey(event)">
										<div id="name_msg5" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>4. Registration Number</label>
										  <input type="text" class="form-control" name="rgno" id="rgno" value="" required="" title="Please enter your Rgno." maxlength="100" placeholder="Registration Number" onblur="checkerror(this.value,'name_msg2');">
											<div id="name_msg2" class="color-red"></div>
									  </div>
									   <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>5. Date of Registration</label>
												<input type="text" class="form-control" value="" name="dater"  id="datetimepicker_mask" onblur="checkerror(this.value,'name_msg3');" />
											<div id="name_msg3" class="color-red"></div>
									  </div>
									  <h4>6. Operational Details</h4>
									   <div class="form-group">
										  <label for="username" class="control-label">6.i. Geographic area of operation</label>
										  <input type="text" class="form-control" name="gao" id="gao" value=""  title="Please enter operation detaills" placeholder="Operational details" maxlength="100" >
											<div id="name_msg4" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label">6.ii. Thematic areas of operation</label>
										  <input type="text" class="form-control" name="tao" id="tao" value=""  title="Please enter operation detaills" placeholder="Operational details" maxlength="100">
										  <span class="help-block"></span>
											<div class=" col-md-offset-9">
											<button type="button" class="btn btn-info" id="show">Next Step</button>
											</div>
									  </div>
									  </div>
									  <div class="well" id="2stdiv" class="2stdiv" style="display:none;">
									 <h4>7. Financial details</h4>
									  <div class="form-group">
										  <label for="username" class="control-label">7.i. Income and expenditure statements</label>
										  <!--
											 <input type="text" class="form-control" name="ie_statement" id="ie_statement" value=""  title="Please enter Income and expenditure" placeholder="Income and expenditure" maxlength="100">
										  -->
										 <input type="file" name="ie_statement"  id="ie_statement" class="filestyle" data-icon="false">
										  
										  <span class="help-block"></span>
									  </div> 
									  <div class="form-group">
										  <label for="username" class="control-label">7.ii. Tax paid statement</label>
										  <!--<input type="text" class="form-control" name="taxtails" id="taxtails" value=""  title="Please enter Tax returns " placeholder="Tax returns filed" maxlength="100">-->
										  <input type="file" name="taxtails" id="taxtails" class="filestyle" data-icon="false">
										  <span class="help-block"></span>
									  </div>
										<div class="form-group">
										  <label for="username" class="control-label">7.iii. Trustees (if applicable)</label>
											<div class="row">
											<div class="col-md-10"><input type="text" class="form-control" name="trustdetails[]"  value=""  title="Please enter Trustees" placeholder="Trustees"></div>
											 <div class="col-md-2 text-right"><button id="btnAdd" type="button" class="btn btn-info" onclick="AddTextBox()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></div> 
												</div><div style="height:10px;"></div>	
													<div id="TextBoxContainer">
														<!--Textboxes will be added here -->
													</div>
												<div id="name_msg5" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label">8. Name Of Board Members</label>
											<div class="row">
											<div class="col-md-10"><input type="text" class="form-control" name="fndetails[]" value=""  title="Please enter board member" placeholder="Please enter board member name "></div>
											<div class="col-md-2 text-right"><button id="btnAddboard" type="button" class="btn btn-info"  onclick="AddboardBox()" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></div> 
											</div><div style="height:10px;"></div>
													<div id="TextboradContainer">
														<!--Textboxes will be added here -->
													</div>
												<div id="name_msg6" class="color-red"></div>
										</div>
									   <div class="form-group">
										  <label for="username" class="control-label">9. Name Of Chairperson </label>
										  <input type="text" class="form-control" name="chairman" id="chairman" value="" required="" title="Please enter chairman name" placeholder="Please enter Chairperson  name" maxlength="100">
										  <span class="help-block"></span>
									  </div>
										<div class="form-group">
										  <label for="username" class="control-label">10. Member secretary</label>
										  <input type="text" class="form-control" name="msecretary" id="msecretary" value="" required="" title="Please enter chairman name" placeholder="Member secretary" maxlength="100">
										  <span class="help-block"></span>
									  </div>
									  <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
										 <div class="row">
										<div class="col-md-6"><button type="button" class="btn btn-info" id="prevstep" >Prev Step</button></div>
										<div class="col-md-6 text-right"><button type="button" class="btn btn-info" id="submit-button" onclick="return ngoreg(1);">submit</button></div>
										</div>
							</form>
					 </div>
					 </div>
					 </div>																										                                             
        </div>
    </section>
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
 <script>
 
$(document).ready(function(){
    $("#show").click(function(){
	var name = document.getElementById("regusername").value;
	var rgno = document.getElementById("rgno").value;
	var dater = document.getElementById("datetimepicker_mask").value;
	var email_id = document.getElementById("email_id").value;
	var contact = document.getElementById("contact").value;
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var phoneno = /^\d{10}$/;
	var letters = /^([a-zA-Z]+\s)*[a-zA-Z]+$/;
    isValid = letters.test(name);
	
	if (name == '') {
	document.getElementById("name_msg1").innerHTML= "Please Enter Name" ;
	//alert("Please Enter Name");
	//document.getElementById('name').focus(); 
	} 
	else if(isValid==false){
	document.getElementById("name_msg1").innerHTML = "Name only allowed character and space";
	return false ;
	} 
	else if (reg.test(email_id) == false) 
	{
		document.getElementById("name_msg4").innerHTML= "Please Enter valid Email" ;
	}	
	else if(!contact.match(phoneno)) {
	document.getElementById("name_msg5").innerHTML= "Please Enter valid Contact" ;
	//alert("Please Enter Name");
	//document.getElementById('name').focus(); 
	} 
	else if (rgno == '') {
	//document.getElementById("name_msg1").innerHTML= "" ;

	document.getElementById("name_msg2").innerHTML= "Please Enter registration number" ;
	//alert("Please Enter registration number");
	//document.getElementById('rgno').focus(); 
	} 
	else if (dater == '') {
	//document.getElementById("name_msg2").innerHTML="" ;
	document.getElementById("name_msg3").innerHTML="Please Enter date of registration" ;
	//alert("Please Enter date of registration");
	//document.getElementById('dater').focus(); 
	}
	else{
    $("#2stdiv").fadeIn("fast");
    $("#1stdiv").fadeOut("fast");
	}
    });
	$("#prevstep").click(function(){
    $("#1stdiv").fadeIn("fast");
    $("#2stdiv").fadeOut("fast");
    });
});




	
</script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');
$('#datetimepicker_mask').datetimepicker({
	timepicker:false,
	scrollInput : false,
	format:'Y-m-d'
	});
	


$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
	
</script>

	<script type="text/javascript" src="js/ngo_validation.js"></script>
	<!--multipul add button-->
 
    
  