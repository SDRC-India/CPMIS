


	<div class="row">
	
		<div class="col-md-5">
		<label for="cumulative Statistics" >Select to view analyzed data</label>
           	 
            
				<select name="table_selection" class="form-control" id="table_selection" >
			  <option value="child_resistration" selected="selected">Cumulative Statistics</option>
			  <option value="caste">Caste-wise Break-up</option>
			  <option value="age">Age-wise Break-up</option>
			  <option value="education">Education-wise Break-up</option>
			  <option value="Rehabilitation">Rehabilitation</option>
			</select>
	
	<div id="rehabilitation_details">
	<label>Select Rehabilitation type</label>
		
			<select name="rehabilitation_section" class="form-control" id="rehabilitation_section">
				<option value="Labour" selected="selected">Labour Resource Department</option>
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
                  <input type="text" class="form-control from_date" name="from_date" id="from_dt" onchange="return checkerror()"   value="<?php echo $from?>"  required   >
                	</div>
			<span id="error_frm_dt" class="color-red"></span>
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
	

<div class="row" style=" margin:80px 0px 200px;">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">

      <div class="loader"></div>

    </div>
  </div>
  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" style="text-align:center;" id="child_table">
		<h2>Cumulative Statistics</h2>
		<table id="example1" class="display" cellspacing="0" width="100%">
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
	<div class="col-md-12 chat_area" style="text-align:center;" id="caste_table">
		<h2>Caste-wise Break-up</h2>
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
	<div class="col-md-12 chat_area" style="text-align:center;" id="age_table">
 <h2>Age-wise Break-up</h2>
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
	<div class="col-md-12 chat_area" style="text-align:center;" id="education_table">
 <h2>Educational Qualification</h2>
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
	<!-----------------------------------------------Labour_table Section-------------------------------------------->
<div class="col-md-12 chat_area" style="text-align:center;" id="Labour_table">
 <h2>Labour Resource Department</h2>
   <table id="reh1" class="display" cellspacing="0" width="100%">
        <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Rs 1800 Package</th>
	             <th>Rs 5000 Deposited DCWRA</th>
                <th>Rehabilitation fund Rs. 20,000</th>
				<th>Rehabilitation fund Rs. 5000</th>
				<th>Total</th>
            </tr>
        </thead>
  		 <tbody>
		 </tbody>
		</table>
	</div>
<!-----------------------------------------------Rehibilation Section-------------------------------------------->
<!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Educational_table">
 <h2>Education Department</h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="Rural_table">
 <h2>Rural Development Department</h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="Urban_table">
 <h2>Urban Development Department</h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="Revenue_table">
 <h2>Revenue Department</h2>
   <table id="reh5" class="display" cellspacing="0" width="100%">
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="Health_table">
 <h2>Health Department </h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="sc_st_table">
 <h2>SC & ST Welfare Department</h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="food_table">
 <h2>Food & Civil Supplied Department</h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="Minority_table">
 <h2>Minority Welfare Department</h2>
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
 <div class="col-md-12 chat_area" style="text-align:center;" id="Social_table">
 <h2>Social Welfare Department</h2>
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
					$("#date_submit").attr("disabled","disabled");
					return false;
					}
					else{
						$("#date_submit").removeAttr('disabled');
						$("#error_to_dt").html("");
						$("#to_dt").removeClass("newClass");
					}
			});
  
    $("#from_dt").on("change",function(){
		
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
   var diffdate = copmareDates(to_date,frm_date);
   console.log(diffdate);
				if(diffdate <0 ){
                    //console.log("dytafd a");
					$("#error_from_dt").html("From date should be less than To date");
					document.getElementById("from_dt").focus();
					$("#from_dt").addClass("newClass");
					$("#date_submit").attr("disabled","disabled");
					return false;
					}
					else{
						$("#date_submit").removeAttr('disabled');
						$("#error_from_dt").html("");
						$("#from_dt").removeClass("newClass");
					}
			});

});
var copmareDates = function(dot,dof) {
			year1= new Date(dot);
			year2 = new Date(dof);
			console.log(year1);
			console.log(year2);
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
			url: "<?php echo base_url();?>index.php?dashboard/get_cumulative",
			data:data,
			//dataType: "JSON",
			//contentType: "application/json",
			success: function(msg){

			//console.log(msg);
			var res = jQuery.parseJSON(msg);
			//console.log(res);
			buildDataTable('#example1',res,'Cumulative Statistics');
			$('#child_table').show();
		}});
	} );

	$(function() {

		$('#submit').click(function(){
		        var from=$("#from_dt").val();
				var to=$("#to_dt").val();
			if(from=="")
			{
			document.getElementById("error_frm_dt").innerHTML="Plese select From date" ;
			return false ;
			}
			else if(to=="")
			{
			document.getElementById("error_to_dt").innerHTML="Plese select To date" ;
			return false ;
			}
				
		$('#loaderId').modal('show');
			if($('#table_selection').val() == 'child_resistration') {
				hideAllChildDetail();
				hideReh();
				//$('#child_table').show();
				
				
			var data={from:from,to:to};
		
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_cumulative",
					data:data,
					//dataType: "json",
					//contentType: "application/json;",
					success: function(msg){
						
					var res = jQuery.parseJSON(msg);
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
					buildDataTable('#example2',res,'Caste-wise Break-up');
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
					buildDataTable('#example4',res,'Educational Qualification');
					$('#education_table').show();
				}});
			}
			else if($('#table_selection').val() == 'Rehabilitation') {
			$('#loaderId').modal('show');
				hideAllChildDetail();
				$('#rehabilitation_details').show();
				//$("#rehabilitation_section").val("Labour");
				$('#Labour_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
			
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehLabour",
					data:data,
					success: function(msg){
				    var res = jQuery.parseJSON(msg);
					
					buildDataTable('#reh1',res);

					//$('#Labour_table').show();
				}});
				
			if($('#rehabilitation_section').val() == 'Labour') {
				//hideAllChildDetail();
				//$('#Labour_table').show();
				var from=$("#from_dt").val();
				var to=$("#to_dt").val();
				var data={from:from,to:to};
			
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php?dashboard/get_RehLabour",
					data:data,
					success: function(msg){
					var res = jQuery.parseJSON(msg);
					
					buildDataTable('#reh1',res,'Labour Resource Department');
					$('#Labour_table').show();
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
					buildDataTable('#reh2',res);
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
					buildDataTable('#reh3',res);
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
					
					buildDataTable('#reh4',res);
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
					buildDataTable('#reh5',res);
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
						
					buildDataTable('#reh6',res);
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
					buildDataTable('#reh10',res);
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
					buildDataTable('#reh7',res);
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
					buildDataTable('#reh9',res);
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
					buildDataTable('#reh8',res);
					$('#Social_table').show();
				}});
			}
				
				

			}
			
			
		});
		
		
	});


	


	function buildDataTable(myTable,data,header){
		$(myTable).DataTable({
         destroy: true,
	     sorting:false,
		pageLength : 50,
		"dom": 'Bfrtip',
        "buttons": [{
				extend: 'print',
				autoPrint: true,
				header: true,
				title: "Child Labour Tracking System "+header
			},
			{
			extend: 'pdf',
			autoPrint: true,
			header: true,
			title: "Child Labour Tracking System "+header
			},	
			{
			extend: 'excel',
			autoPrint: true,
			header: true,
			footer: true,
			title: "Child Labour Tracking System "+header
 		//$("#example1 thead").prepend("<tr class='hidden-heading'><th colspan='6' class='text-center'>cumulative statistics</th></tr>")

// sample usage
			}			    
        ],
		"columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ],
		lengthMenu: [ [10,20,-1],[10,20,"All"]]
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
	}
	
	function checkerror(){
var from=$("#from_dt").val();
	if(from!="")
		{
		document.getElementById("error_frm_dt").innerHTML="" ;
		}
	}
	
</script>
