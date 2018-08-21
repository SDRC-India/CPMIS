<style>
/* table tbody tr:last-child {
   border-top: 1px solid #111!important;
   background:#ccc!important;
} */
table#example1,table#example2,table#example3,table#example4,table#cmrf_trn_table,table#reh1 {
    border-collapse: collapse;
}
table#example1 tbody tr:last-child td, table#example2 tbody tr:last-child td, table#example3 tbody tr:last-child td, table#example4 tbody tr:last-child td, table#cmrf_trn_table tbody tr:last-child td,table#reh1 tbody tr:last-child td  {
    border-top: 1px solid #000;
}


</style>

          <h3 class="text-center" id="dahboard_head_title"  style="margin-top:-40px;"></h3>
		  
		  <br/>
		  <br/>
	<div class="row">
	
		<div class="col-md-5">
		<label for="cumulative Statistics" >Select to view analyzed data</label>
			<select name="table_selection" class="form-control" id="table_selection" >
			  <option value="child_resistration" selected="selected">Cumulative Statistics</option>
			  <option value="caste">Category-wise Break-up</option>
			  <option value="age">Age-wise Break-up</option>
			  <option value="education">Education-wise Break-up</option>
			  <option value="cmrf_trn">CMRF Transaction Details</option>
			  <option value="Rehabilitation">Rehabilitation</option>
		</select>
	
	<div id="rehabilitation_details" style="display:none;">
	<label>Select Rehabilitation type</label>
		
			<select name="rehabilitation_section" class="form-control" id="rehabilitation_section">
				<option value="Labour" selected="selected">Labour Resource Department</option>
				<option value="cm_relief" >CM Relief Fund</option>
				<option value="Educational">Education Department</option>
				<option value="Rural">Rural Development Department</option>
				<option value="Urban">Urban Development Department</option>
				<option value="Revenue">Revenue Department</option>
				<option value="Health">Health Department</option>
				<option value="sc_st">SC & ST Welfare Department</option>
				<option value="food">Food & Civil Supplied Department</option>
				<option value="Minority">Minority Welfare Department</option>
				<option value="Social">Social Welfare Department</option>
			</select>
			

	</div>
		</div>
		<div class="col-md-3 " >
		   	<label for="datepicker" >From</label>
           	 
                <div class="input-group date" > <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control from_date" name="from_date" id="from_dt"  value="<?php echo $from?>"  required   >
                	</div>
			<span id="error_from_dt" class="color-red"></span>
            </div>
		   <div class="col-md-3">
        		
           	<label for="datepicker">To</label>
           	
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control to_date" name="to_date" id="to_dt"  value="<?php echo $to;?>"  required   >
                
                 </div>
				  <span id="error_to_dt" class="color-red"></span>
		  </div>
		   
  			<div class="col-md-1">
        
  			<button type="submit" id="submit" style="margin-top:20px;" class="btn btn-info">Submit</button>
  			</div>



</div>
	<div style="float:left;">
		</div>
		<br/>
	

<div class="row" style="min-height:600px;	">

<div class="modal fade" id="loaderId" data-keyboard="false" data-backdrop="static" role="dialog">
    <div class="modal-dialog">

      <div class="loader"></div>

    </div>
  </div>
  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area none" style="text-align:center;" id="child_table">
	
		<table id="example1" class="display" cellspacing="0" width="100%" >
			<thead>
				<tr class="report_head">
					<th>District Name</th>
					<th>Child Rescued</th>
					<th>Investigation on Going</th>
					<th>Final Order Passed</th>
					<th>Entitlement Card Generated</th>
					<!--<th>Total</th>-->
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
<!-----------------------------------------------end of the table-------------------------------------------->
	<div class="col-md-12 chat_area none" style="text-align:center;" id="caste_table">
		<!--<h2>Caste-wise Break-up</h2>-->
		<table id="example2" class="display" cellspacing="0" width="100%">
			<thead>
				<tr class="report_head">
					<th>District Name</th>
					<th>SC</th>
					<th>ST</th>
					<th>OBC</th>
					<th>General</th>
					<th>EBC</th>
					<th>Other</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<!-----------------------------------------------end of the table-------------------------------------------->
	<div class="col-md-12 chat_area none" style="text-align:center;" id="age_table">
 <!--<h2>Age-wise Break-up</h2>-->
   <table id="example3" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Below 10 Years </th>
	             <th>10 to 14 years</th>
                <th>15 to 18 years</th>
                <th>Total</th>
				 </tr>
        </thead>

        <tbody>

			</tbody>
		</table>
	</div>
<!-----------------------------------------------end of the table-------------------------------------------->
	<div class="col-md-12 chat_area none" style="text-align:center;" id="education_table">
 <!--<h2>Educational Qualification</h2>-->
   <table id="example4" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Illiterate</th>
	             <th>Upto primary ( I - V)</th>
                <th>Middle Level (VI - VII)</th>
				<th>Upper Primary ( VIII - X)</th>
				<th>Higher Secondary </th>
				<th>Not Specified </th>
				<th>Total </th>
            </tr>
        </thead>
		 <tbody>


			</tbody>
		</table>
	</div>
	<div class="col-md-12 chat_area none" style="text-align:center;" id="cmrf_trn_detail_table">
 <!--<h2>Educational Qualification</h2>-->
   <table id="cmrf_trn_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
               <th><div>District Name</div></th>
			<th><div>No Of Times CMRF Demanded </div></th>
			<th><div>No of CL whom demand raised</div></th>
			<th><div>No of time demand released</div></th>
			<th><div>No of CL whom demand released</div></th>
			<th><div>CMRF transferred to CL A/C </div></th>
			<th><div>No of CL whom CMRF yet to be transferred</div></th>
            </tr>
        </thead>
		 <tbody>


			</tbody>
		</table>
	</div>
	<!-----------------------------------------------Labour_table Section-------------------------------------------->
<div class="col-md-12 chat_area none" style="text-align:center;" id="Labour_table">
 <!--<h2>Labour Resource Department</h2>-->
   <table id="reh1" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Rs 1800 Package</th>
                <th>Rs 3000 Package</th>
	            <th>Rs 5000 Deposited DCWRA</th>
                <th>Compensation fund Rs. 20,000</th>
				<th>CMRF Transfered Rs. 25000</th>
				
            </tr>
        </thead>
  		 <tbody>
		 </tbody>
		</table>
	</div>
<!-----------------------------------------------Rehibilation Section-------------------------------------------->
	<!------------------------------------CM Relief Fund elegibility report-------------------------------------------->
<div class="col-md-12 chat_area none" style="text-align:center;" id="cm_relief_table">
 <!--<h2>Labour Resource Department</h2>-->
   <table id="rehCm" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Physically verified</th>                
	            <th>CL eligible for CMRF</th>
	            <th>CL not eligible for CMRF</th>
	            <th>Demand Raised </th>
	            <th>Demand Received</th>
	            <th>Bank details not available</th>
				<th>CMRF transferred to CL A/C</th>
			
				
            </tr>
        </thead>
  		 <tbody>
		 </tbody>
		</table>
	</div>
<!-----------------------------------------------Rehibilation Section-------------------------------------------->
<!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Educational_table">
 <!--<h2>Education Department</h2>-->
   <table id="reh2" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Enrolled in School</th>
                <th>Total</th>
            </tr>
        </thead>
         <tbody>
		  </tbody>
		</table>
	</div>
	<!---------------------------- Rural_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Rural_table">
 <!--<h2>Rural Development Department</h2>-->
   <table id="reh3" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>MGNREGA</th>
	             <th>SGSY</th>
                <th>IAY</th>
                <th>Total</th>
            </tr>
        </thead>
          <tbody>
		  </tbody>
		</table>
	</div>
	<!----------------------------END Rural_table--------------------------->
	<!---------------------------- Urban_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Urban_table">
 <!--<h2>Urban Development Department</h2>-->
   <table id="reh4" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th> SJSRY</th>
	             <th>JNURM</th>
	             <th>Total</th>
             </tr>
        </thead>

       <tbody>
	     </tbody>
		</table>
	</div>
	<!----------------------------END Urban_table--------------------------->
	<!---------------------------- Revenue_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Revenue_table">
 <!--<h2>Revenue Department</h2>-->
   <table id="reh5" class="display " cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th> Land Settlement Benefits</th>
                <th> Total</th>
           </tr>
        </thead>

  <tbody>
	     </tbody>
		</table>
	</div>
	<!----------------------------END Urban_table--------------------------->
	<!---------------------------- Health_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Health_table">
 <!--<h2>Health Department </h2>-->
   <table id="reh6" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Health Cards</th>
                <th>Total</th>
            </tr>
        </thead>
         <tbody>
		 </tbody>
		</table>
	</div>
	<!----------------------------END Health_table--------------------------->
	<!---------------------------- sc_st_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="sc_st_table">
 <!--<h2>SC & ST Welfare Department</h2>-->
   <table id="reh10" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Scholarships Benefits</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
		 </tbody>
		</table>
	</div>
	<!----------------------------END sc_st_table--------------------------->
	<!---------------------------- food_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="food_table">
 <!--<h2>Food & Civil Supplied Department</h2>-->
   <table id="reh7" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Ration Card</th>
	             <th>PDS Benefits</th>
	             <th>Total</th>
             </tr>
        </thead>
         <tbody>
		  </tbody>
		</table>
	</div>
	<!----------------------------END food_table--------------------------->
	<!---------------------------- Minority_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Minority_table">
 <!--<h2>Minority Welfare Department</h2>-->
   <table id="reh9" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Special Housing Scheme</th>
	             <th>Loan Benefits</th>
	             <th>Total</th>
             </tr>
        </thead>
        <tbody>
		</tbody>
		</table>
	</div>
	<!----------------------------END food_table--------------------------->
	<!---------------------------- Social_table--------------------------->
 <div class="col-md-12 chat_area none" style="text-align:center;" id="Social_table">
 <!--<h2>Social Welfare Department</h2>--->
   <table id="reh8" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Social Pension Scheme</th>
	             <th>Pravarish Scheme</th>
                <th>Sponsorship Benefits for Family</th>
				<th>Sponsorship Benefits for Child</th>
				<th>Total</th>
            </tr>
        </thead>
         <tbody>
		 </tbody>
		</table>
	</div>
	<!----------------------------END Social_table--------------------------->
<!-----------------------------------------------Rehibilation Section-------------------------------------------->
<!-----------------------------------------------end of the table-------------------------------------------->


</div>
<!-----------------------------------------------end of Row-------------------------------------------->
<script>
	var FromEndDate = new Date(); 
$('#from_dt').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
"setDate": new Date()
});
</script>
	<script>
var FromEndDate1 = new Date();
$('#to_dt').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate1,
autoclose: true,
date:FromEndDate1
});
</script>
<script>
	$(document).ready(function() {
		
	$('#loaderId').modal('show');
	hideAllChildDetail();
	hideReh();
	
	$(function() {
	
	//console.log("sdfsdfsdf");
  $("#to_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
   var diffdate = copmareDates(to_date,frm_date);
   
				if(diffdate <0 ){
                    
					$("#error_to_dt").html("To date should be greter than From date");
					document.getElementById("to_dt").focus();
					$("#to_dt").addClass("newClass");
					$("#submit").attr("disabled","disabled");
					return false;
					}
					else{
						$("#date_submit").removeAttr('disabled');
						$("#submit").removeAttr("disabled");
						$("#error_to_dt").html("");
						$("#error_from_dt").html("");
						$("#to_dt").removeClass("newClass");
						$("#from_dt").removeClass("newClass");
					}
			});
  
    $("#from_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  console.log(frm_date);
	  console.log(to_date);
   var diffdate = copmareDates(to_date,frm_date);
				if(diffdate <0 ){
                    //console.log("dytafd a");
					$("#error_from_dt").html("From date should be less than To date");
					document.getElementById("from_dt").focus();
					$("#from_dt").addClass("newClass");
					$("#date_submit").attr("disabled","disabled");
					$("#submit").attr("disabled","disabled");

					return false;
					}
					else{
						$("#date_submit").removeAttr('disabled');
						$("#submit").removeAttr("disabled");
						$("#error_from_dt").html("");
						$("#error_to_dt").html("");
						$("#from_dt").removeClass("newClass");
						$("#to_dt").removeClass("newClass");

					}
			});

});
var copmareDates = function(dot,dof) {
			year1= new Date(dot);
			year2 = new Date(dof);
			
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
	//$('#child_table').show();
	var from="<?php echo $from;?>";
	var to="<?php echo $to;?>";
	
	
	
	
		var data={"from":from,"to":to};
	    //console.log(data);
		$.ajax({
			type: "POST",
			url: "<?php echo base_url();?>index.php?dashboard/get_cumulative/"+from+"/"+to+"/view",
			
			//dataType: "JSON",
			//contentType: "application/json",
			success: function(msg){

			//console.log(msg);
			var res = jQuery.parseJSON(msg);
			//console.log(res);
			$("#dahboard_head_title").html("Cumulative Statistics");
			
			buildDataTable('#example1',res,'Cumulative Statistics');
			$("#table_selection option[value='child_resistration']").prop('selected', true);
			
			$('#child_table').show().removeClass('none');
			
			
		}});
	} );

	$(function() {

		$('#submit').click(function(){
		        var from=$("#from_dt").val();
				var to=$("#to_dt").val();
			if(from=="")
			{
			document.getElementById("error_from_dt").innerHTML="Please select From date" ;
			return false ;
			}
			else if(to=="")
			{
			document.getElementById("error_to_dt").innerHTML="Please select To date" ;
			return false ;
			}
				console.log("modal before")
		$('#loaderId').modal({backdrop:'static', keyboard: false});
				console.log("modal after");
			if($('#table_selection').val() == 'child_resistration') {
				hideAllChildDetail();
				hideReh();
				//$('#child_table').show();
				
				
			var data={from:from,to:to};
		
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_cumulative/"+from+"/"+to+"/view",
					data:data,
					//dataType: "json",
					//contentType: "application/json;",
					success: function(msg){
						
					var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Cumulative Statistics");
					$('#example1').DataTable().clear();
					buildDataTable('#example1',res,'Cumulative Statistics');
					
					$('#child_table').show();
				}});
			}

			else if($('#table_selection').val() == 'caste') {
				hideAllChildDetail();
				hideReh();
				//$('#caste_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				
			var data={from:from,to:to};
				var data;
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_category",
					data:data,
					//dataType: "json",
					//contentType: "application/json; charset=utf-8",
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Category-wise Break-up");
					buildDataTable('#example2',res,'Category-wise Break-up');
					
					$('#caste_table').show();
				}});
			}

			else if($('#table_selection').val() == 'age') {
				hideAllChildDetail();
				hideReh();
				//$('#age_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_age",
					data:data,
					success: function(msg){
				    var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Age-wise Break-up");
					buildDataTable('#example3',res,'Age-wise Break-up');
					
					$('#age_table').show();
				}});
			}

			else if($('#table_selection').val() == 'education') {
				hideAllChildDetail();
				hideReh();
				//$('#age_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_education",
					data:data,					
					success: function(msg){
				    var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Educational Qualification");
					buildDataTable('#example4',res,'Educational Qualification');
					
					$('#education_table').show();
				}});
			}
			else if($('#table_selection').val() == 'cmrf_trn') {
				hideAllChildDetail();
				hideReh();
				//$('#age_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_cmrf_trn_details",
					data:data,					
					success: function(msg){
				    var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("CMRF Transaction Details");
					buildDataTable('#cmrf_trn_table',res,'CMRF Transaction Details');
					
					$('#cmrf_trn_detail_table').show();
				}});
			}
			
			else if($('#table_selection').val() == 'Rehabilitation') {
			$('#loaderId').modal({backdrop: 'static', keyboard: false});
				hideAllChildDetail();
				$('#rehabilitation_details').show();
				//$("#rehabilitation_section").val("Labour");
				//$('#Labour_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
			   console.log($('#rehabilitation_section').val());
				/*$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehLabour",
					data:data,
					success: function(msg){
				    var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Labour Resource Department");
					buildDataTable('#reh1',res);
					
					$('#Labour_table').show();
					$('#rehabilitation_details').show();
				}});*/
			
			if($('#rehabilitation_section').val() == 'Labour') {
				//hideAllChildDetail();
				//$('#Labour_table').show();
				//$("#dahboard_head_title").html("");
				hideReh();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
			
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehLabour",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					//console.log(res);
					$("#dahboard_head_title").html("Labour Resource Department");
					buildDataTable('#reh1',res,'Labour Resource Department');
					$('#Labour_table').show();
				}});
			} 
			else if($('#rehabilitation_section').val() == 'cm_relief') {
				//hideAllChildDetail();
				hideReh();
				//$('#Educational_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
			
				
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehCm_relief",
					data:data,
					success: function(msg){
						
				    var res = jQuery.parseJSON(msg);
					
					$("#dahboard_head_title").html("CM Relief Fund");
					buildDataTable('#rehCm',res,'CM Relief Fund');
					
					$('#cm_relief_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Educational') {
				//hideAllChildDetail();
				hideReh();
				//$('#Educational_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
			
				
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehEdu",
					data:data,
					success: function(msg){
				    var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Education Department");
					buildDataTable('#reh2',res,'Education Department');
					
					$('#Educational_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Rural') {
				//hideAllChildDetail();
				hideReh();
				//$('#Rural_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehRural",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					$("#dahboard_head_title").html("Rural Development Department");					
					buildDataTable('#reh3',res,'Rural Development Department');
					
					$('#Rural_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Urban') {
				//hideAllChildDetail();
				hideReh();
				//$('#Urban_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehUrb",
					data:data,
					success: function(msg){
				     var res = jQuery.parseJSON(msg);	
					
					buildDataTable('#reh4',res,'Urban Development Department');
					$("#dahboard_head_title").html("Urban Development Department");
					$('#Urban_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Revenue') {
				//hideAllChildDetail();
				hideReh();
				//$('#Revenue_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehRev",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					buildDataTable('#reh5',res,'Revenue Department');
					$("#dahboard_head_title").html("Revenue Department");
					$('#Revenue_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Health') {
				//hideAllChildDetail();
				hideReh();
				//$('#Health_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehHealth",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
						
					buildDataTable('#reh6',res,'Health Department');
					$("#dahboard_head_title").html("Health Department");
					$('#Health_table').show();
				}});
			}

			else if($('#rehabilitation_section').val() == 'sc_st') {
				//hideAllChildDetail();
				hideReh();
				//$('#sc_st_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehScSt",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					buildDataTable('#reh10',res,'SC & ST Welfare Department');
					$("#dahboard_head_title").html("SC & ST Welfare Department");
					$('#sc_st_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'food') {
				//hideAllChildDetail();
				hideReh();
				//$('#food_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehFood",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					buildDataTable('#reh7',res,'Food & Civil Supplied Department');
					$("#dahboard_head_title").html("Food & Civil Supplied Department");
					$('#food_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Minority') {
				//hideAllChildDetail();
				hideReh();
				//$('#Minority_table').show();
				var from=$("#from_date").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehMin",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);	
					buildDataTable('#reh9',res,'Minority Welfare Department');
					$("#dahboard_head_title").html("Minority Welfare Department");
					
					$('#Minority_table').show();
				}});
			}
			else if($('#rehabilitation_section').val() == 'Social') {
				//hideAllChildDetail();
				hideReh();
				//$('#Social_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehSoc",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					buildDataTable('#reh8',res,'Social Welfare Department');
					$("#dahboard_head_title").html("Social Welfare Department");
					
					$('#Social_table').show();
				}});
			}
				
				

			}
			
			
		});
		
		
	});


	


	function buildDataTable(myTable,data,header){
			var from=$("#from_dt").val();
			var to=$("#to_dt").val();
			
		var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) {
				dd='0'+dd
			} 

			if(mm<10) {
				mm='0'+mm
			} 

			today = dd+'-'+mm+'-'+yyyy;

		var title=header+'\n'+'FROM-'+from+' '+'TO-'+to;
		
		$(myTable).DataTable({
        sPaginationType: "bootstrap",
		"paging": true,
		"dom": 'Blftrip',
		sorting:false,
		destroy: true,
		pageLength : 50,
			buttons: [ {extend: 'excelHtml5',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-file-excel-o"></i> Excel',
				title: "MIS Report-"+title,
				customize: function( xlsx ) {
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
 
                $('row c[r^="C"]', sheet).attr( 's', '2' );
            }
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: "MIS Report-"+title,
				customize: function (win) {
                $(win.document.body).find('table').addClass('display').css('font-size', '10px','text-align','center');
                $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                    $(this).css('background-color','#D0D0D0');
                    $(this).css('text-align','center');
                });
				$(win.document.body).find('tr:nth-child(even) td').each(function(index){
                    
                    $(this).css('text-align','center');
                });
				
                $(win.document.body).find('h1').css('text-align','center');
            }
			},{
            extend: 'pdfHtml5',
            text: '<i class="fa fa-file-pdf-o"></i> PDF ',
			title:title,
           customize: function ( doc ) {
			   
			   	doc.styles.tableBodyEven={
		      
				
			    alignment: 'center'
			   };
				doc.styles.tableBodyOdd={
					
					alignment: 'center'
				};
				
			   var cols = [];
			   cols[0] = {image: 'data:image/png;base64,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', alignment: 'left', margin:[10,0,20] };
			   
			   cols[1] = {text: 'CLTS', alignment: 'right', margin:[10,10,20] };
			   var objHeader = {};
			   objHeader['columns'] = cols;
			   doc['header']=objHeader;
			   var cols = [];
			   cols[0] = {text: 'Supported By Unicef', alignment: 'left', margin:[20] };
			   cols[1] = {text: 'Printed ON:'+today+'\n from http://www.cpmis.org/clts ', alignment: 'center',};
			   cols[2] = {text: 'Powered By SDRC', alignment: 'right', margin:[0,0,20] };
			   var objFooter = {};
			   objFooter['columns'] = cols;
			   doc['footer']=objFooter;
               
               
                // Data URL generated by http://dataurl.net/#dataurlmaker
            }
        } ],
		
		"columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ]
	
		});
		$(myTable).DataTable().clear();
		for (var i=0;i<data.length;i++){
			$(myTable).dataTable().fnAddData (
			data[i]);
		}
		$('#loaderId').modal('hide');
	}

	function hideAllChildDetail(){
		$('#child_table').hide();
		$('#caste_table').hide();
		$('#age_table').hide();
		$('#education_table').hide();
		$('#cmrf_trn_detail_table').hide();
		$('#rehabilitation_details').hide();
	}
	function hideReh(){
		$('#Labour_table').hide();
		 $('#Educational_table').hide();
		 $('#Rural_table').hide();
		$('#Urban_table').hide();
		$('#Revenue_table').hide();
		$('#Health_table').hide();
		$('#food_table').hide();
		$('#sc_st_table').hide();
		$('#Social_table').hide();
		$('#Minority_table').hide();
		$('#cm_relief_table').hide();
	}
	
	function checkerror(){
var from=$("#from_dt").val();
	if(from!="")
		{
		document.getElementById("error_frm_dt").innerHTML="" ;
		}
	}
	
</script>
