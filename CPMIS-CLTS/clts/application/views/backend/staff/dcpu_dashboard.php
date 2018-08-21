

<style>
@media only screen and ( max-width: 1200px )
        {
        .chat_area {
        float:left;
        width:100%;
}

}
.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
    background: #fff;
     border: none;
    border-bottom: 0;
    padding: 15px 12px;
    height: 58px;
	width:0%;
}
.dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_paginate {
    padding: 10px 12px;
    border: none;
    border-top: 0;
    background: transparent;
    height: 47px;
	width: 44%;
}
.dataTables_wrapper {
    position: relative;
    clear: both;
    zoom: 1;
    border: 1px solid #ddd;
}
</style>

  <div style="float:left;">
    <h3>Rehabilitation</h3>
  </div>
  <div style="float:left; padding-top:13px; padding-left:10px;">
   			<select name="rehabilitation_section" class="form-control" id="rehabilitation_section">
					  <option value="Labour" selected="selected">Labour Resource Department</option>
					  <option value="Educational">Educational Department</option>
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

<div class="row" style=" margin:82px 0px 200px;">
	<div class="modal fade" id="loaderId" role="dialog">
	    <div class="modal-dialog">

	      <div class="loader"></div>

	    </div>
	  </div>
 <div class="col-md-12 " style="font-size:14px;font-style: italic;">
 Click on the values to view/modify the Rehabilitation details
 </div>


<!-----------------------------------------------Start of the table-------------------------------------------->
<!-----------------------------------------------Rehibilation Section-------------------------------------------->
<div class="col-md-12 chat_area" style="text-align:center;" id="Labour_table">
 <h2>Labour Resource Department (Number)</h2>
   <table id="reh1" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Rs 1800 Package</th>
	             	<th >Rs 5000 Deposited DCWRA</th>
                <th>Rehabilitation fund Rs. 20,000</th>
				<th style="text-align:center;">Rehabilitation fund Rs. 5000</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Educational_table">
 <h2>Educational Department (Number)</h2>
   <table id="reh2" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Enrolled in School</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Rural_table">
 <h2>Rural Development Department (Number)</h2>
   <table id="reh3" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Block Name</th>
                <th>MGNREGA</th>
	              <th >SGSY</th>
                <th >IAY</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Urban_table">
 <h2>Urban Development Department (Number)</h2>
   <table id="reh4" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >SJSRY</th>
	             <th >JNURM</th>
             </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Revenue_table">
 <h2>Revenue Department (Number)</h2>
   <table id="reh5" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Land Settlement Benefit</th>
           </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Health_table">
 <h2>Health Department (Number) </h2>
   <table id="reh6" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Block Name</th>
                <th >Health Card</th>
            </tr>
        </thead>

        <tbody>


        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="sc_st_table">
 <h2>SC & ST Welfare Department (Number)</h2>
   <table id="reh10" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Scholarship Benefit</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="food_table">
 <h2>Food & Civil Supplied Department (Number)</h2>
   <table id="reh7" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Ration Card</th>
	             <th >PDS Benefit</th>
             </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- Social_table--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Social_table">
 <h2>Social Welfare Department (Number)</h2>
   <table id="reh8" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Social Pension Scheme</th>
	             <th >Pravarish Scheme</th>
                <th >Sponsorship Benefits for Family</th>
				<th style="text-align:center;">Sponsorship Benefits for Child</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->
 <!---------------------------- education--------------------------->
 <div class="col-md-12 chat_area" style="text-align:center;" id="Minority_table">
 <h2>Minority Welfare Department (Number)</h2>
   <table id="reh9" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >Block Name</th>
                <th >Special Housing Scheme</th>
	             <th >Loan Benefit</th>
             </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
  </div>
 <!----------------------------end------------------------------------------->

<!-----------------------------------------------end of the table-------------------------------------------->
</div>
<!-----------------------------------------------end of the table-------------------------------------------->
<script>
$(document).ready(function() {

 hideReh();
	//$('#child_table').show();
	var data;
	$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>index.php?dashboard/get_lrd_data",
		dataType: "json",
		contentType: "application/json; charset=utf-8",
		success: function(msg){
			//console.log(msg);
		buildDataTable('#reh1',msg);
		$('#Labour_table').show();
	}});
} );
 $(function() {

 	$('#rehabilitation_section').change(function(){

 	$('#loaderId').modal('show');
 		if($('#rehabilitation_section').val() == 'Labour') {
			console.log("sdfchgvdf");
 			//hideAllChildDetail();
 			hideReh();
 			//$('#child_table').show();
 			var data;
 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_lrd_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
 					//console.log(msg);
 				buildDataTable('#reh1',msg);
 				$('#Labour_table').show();
 			}});
 		}

 		else if($('#rehabilitation_section').val() == 'Educational') {

 			hideReh();

 			//var data;
 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_education_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
					console.log(msg);
 				buildDataTable('#reh2',msg);
 				$('#Educational_table').show();
 			}});
 		}

 		else if($('#rehabilitation_section').val() == 'Rural') {

 			hideReh();

 			//var data;
 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_rural_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
					//console.log(msg);
 				buildDataTable('#reh3', msg);
 				$('#Rural_table').show();
 			}});
 		}

 		else if($('#rehabilitation_section').val() == 'Urban') {

 			hideReh();
 			//$('#education_table').show();
 			//var data;
 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_urban_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
 				buildDataTable('#reh4',msg);
 				$('#Urban_table').show();
 			}});
 		}
		else if($('#rehabilitation_section').val() == 'Revenue') {

 			hideReh();

 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_revenue_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
 				buildDataTable('#reh5',msg);
 				$('#Revenue_table').show();
 			}});
 		}
		else if($('#rehabilitation_section').val() == 'Health') {

 			hideReh();

 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_health_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
 				buildDataTable('#reh6',msg);
 				$('#Health_table').show();
 			}});
 		}
		else if($('#rehabilitation_section').val() == 'sc_st') {

 			hideReh();

 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_sc_st_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
					//console.log(msg);
 				buildDataTable('#reh10',msg);
 				$('#sc_st_table').show();
 			}});
 		}
		else if($('#rehabilitation_section').val() == 'food') {

 			hideReh();

 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_food_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
 				buildDataTable('#reh7',msg);
 				$('#food_table').show();
 			}});
 		}
		else if($('#rehabilitation_section').val() == 'Minority') {

 			hideReh();
 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_minority_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
 				buildDataTable('#reh9',msg);
 				$('#Minority_table').show();
 			}});
 		}
		else if($('#rehabilitation_section').val() == 'Social') {
 			hideReh();
 			$.ajax({
 				type: "POST",
 				url: "<?php echo base_url();?>index.php?dashboard/get_social_data",
 				dataType: "json",
 				contentType: "application/json; charset=utf-8",
 				success: function(msg){
					console.log(msg);
 				buildDataTable('#reh8',msg);

 				$('#Social_table').show();
 			}});
 		}
		});



} );
function buildDataTable(myTable,data){
 		$(myTable).DataTable({
                 destroy: true,
                 ordering: false,
 		 pageLength : 20,
 		lengthMenu: [ [10,20,-1],[10,20,"All"]]
 		});
 		$(myTable).DataTable().clear();


 		for (var i=0;i<data.length;i++){

 			$(myTable).dataTable().fnAddData (
 			data[i]);
 		}
 		$('#loaderId').modal('hide');
 	}

		$(function() {
   		 $('#rehabilitation_section').change(function(){
        	if($('#rehabilitation_section').val() == 'Labour') {
					 hideReh();
				 $('#Labour_table').show();
       		 } else if($('#rehabilitation_section').val() == 'Educational') {
			 			 hideReh();
					 $('#Educational_table').show();
       		 } else if($('#rehabilitation_section').val() == 'Rural') {
			 			 hideReh();
					 $('#Rural_table').show();
			 } else if($('#rehabilitation_section').val() == 'Urban') {
			 		 hideReh();
					$('#Urban_table').show();
       		 }else if($('#rehabilitation_section').val() == 'Revenue') {
			 		 hideReh();
					$('#Revenue_table').show();
			}else if($('#rehabilitation_section').val() == 'Health') {
					hideReh();
					$('#Health_table').show();
			}else if($('#rehabilitation_section').val() == 'sc_st') {
					hideReh();
					$('#sc_st_table').show();
			}else if($('#rehabilitation_section').val() == 'food') {
				 	 hideReh();
					$('#food_table').show();
			}else if($('#rehabilitation_section').val() == 'Minority') {
				 	 hideReh();
					$('#Minority_table').show();
			}else if($('#rehabilitation_section').val() == 'Social') {
				 	 hideReh();
					$('#Social_table').show();

			}else{
			 		hideReh();
			 }
    	});
		});

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
</script>
