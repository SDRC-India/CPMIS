
<?php 
session_start();
		if($_SESSION['user_id']=="")
			{
			header('Location: log_inmukhia.php');
			}else{
			$session_id=$_SESSION['user_id'] ;
			}






include 'header_top.php'; ?>
      <?php include 'other_top.php'; ?>      
        <?php include 'other_header.php'; ?>

  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>  
  <body class="page">	
				<section class="recent-causes section-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-breadcroumb">
									<p><a href="index.php">Home</a> / (Mukhia)</p>
								</div>
								<div class="inner-page-title">
									<h2>Registration</h2>
									<p class="page-subtitle">- (Mukhia) CPMIS/<a href="logout_mikhia.php"><span style="color:gray;float:right;">Logout</span></a> </p>
								</div>								
							</div>
						</div>
					<div class="container">
						<div class="col-xs-3"></div>								  
						<div class="col-xs-6">
									<div id="mukhia" name="mukhia" class="success"></div>
									  <ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#home">Mukhia</a></li>
										<!--<li><a data-toggle="tab" href="#menu2">Middle Men</a></li>-->
									  </ul>	
									
								 <div class="well" id="1stdiv" class="1stdiv">
								  <form id="mukhiareg" method="POST">
										<h4 class="newhding">New Mukhia Registration</h4>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>1. Name</label>
										  <input type="text" class="form-control" name="mukhianame" id="mukhianame" value="" required=""  title="Please enter your username" onkeypress="checkerror(this.value,'name_mukmsg1');"  maxlength="100" placeholder="username">
											<div id="name_mukmsg1" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>2. Contact number</label>
										  <input type="text" class="form-control" name="mukhiacontact" id="mukhiacontact" value="" required="" title="Please enter your Rgno." onblur="checkerror(this.value,'name_mukmsg2');" placeholder="Contact Number" maxlength="10" onkeypress="return isNumberKey(event)">
											<div id="name_mukmsg2" class="color-red"></div>
									  </div>
									   <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>3. Address of residence</label>
											  <textarea class="form-control" name="addressmukhia" id="addressmukhia" placeholder="Address" maxlength="250" onkeypress="checkerror(this.value,'name_mukmsg3');"></textarea>
											<div id="name_mukmsg3" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>4. District</label>
												<!--<select id="NameOfdist" name="NameOfdist" class="form-control" onchange="checkerror(this.value,'name_mukmsg4');">-->
												<select id="NameOfdist" name="NameOfdist" class="form-control" onchange="getblock_name(this.value,'name_mukmsg4');">
												<option value="0">Select</option>
												<?php
												$querydist=mysql_query("SELECT * from child_area_detail WHERE parent_id='IND010' order by area_name ASC");
												while($resdist=mysql_fetch_assoc($querydist))
												{
												?>
												<option value="<?php echo $resdist['area_id'] ; ?>"><?php echo $resdist['area_name'] ; ?></option>
												<?php } ?>
												</select>											
												<div id="name_mukmsg4" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry">*</span>5. Block Name</label>
												<!--<select id="NameOfdist" name="NameOfdist" class="form-control" onchange="checkerror(this.value,'name_mukmsg4');">-->
												<select id="nameofblock" name="nameofblock" class="form-control duration" onchange="getpanchayat_name(this.value,'name_mukmsg5');">
												<option value="">Select</option>
												</select>											
												<div id="name_mukmsg5" class="color-red"></div>
									  </div>
									  <div class="form-group">
										  <label for="username" class="control-label"><span class="mandtry" onchange="checkerror(this.value,'name_mukmsg4');">*</span>6. Panchayat Name</label>
												<!--<select id="NameOfdist" name="NameOfdist" class="form-control" onchange="checkerror(this.value,'name_mukmsg4');">-->
												<select id="panchayatname" name="panchayatname" class="form-control duration">
												<option value="">Select</option>
												</select>											
												<div id="name_mukmsg6" class="color-red"></div>
									  </div>
									  <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
									  <button type="button" value="submit" name="mukhiasubmit" onclick="return mukhia();" class="btn btn-success btn-block">Submit</button>
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
	
	if (name == '') {
	document.getElementById("name_msg1").innerHTML= "Please Enter Name" ;
	//alert("Please Enter Name");
	//document.getElementById('name').focus(); 
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


//NGO
  setTimeout(function() {
document.getElementById("elem").innerHTML = "";
}, 30000); // <-- time in milliseconds 


	//login error
  setTimeout(function() {
document.getElementById("errorlogin_msg").innerHTML = "";
}, 20000); // <-- time in milliseconds 

</script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');
$('#datetimepicker_mask').datetimepicker({
	timepicker:false,
	format:'Y-m-d'
	});

$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});

	
</script>

<script type="text/javascript" src="js/ngo_validation.js"></script>
<script type="text/javascript" src="js/get_block.js"></script>
<script type="text/javascript" src="js/get_panchayat_block.js"></script>
	<!--multipul add button-->