
<?php //print_r($childs_to_cci);?>

<?php

//echo Floor(Datediff(Date($date_of_rescue), Date($dob))/365);


?>

<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 || $role==13 || $role==20){
	
	if($type=="age" || $type=="caste" || $type=="inside_state" 
			|| $type=="cci" || $type=="cmrf_transaction" || $type=="child_cumulative" 
			|| $type=="cwc_working_status" || $type=="due_for_transfer" || $type=="education" ||
			$type=="order_after_production" || $type=="rescued_child" || $type=="outside_state"){
		       
				
	?>
<style>
/* table tbody tr:last-child {
   border-top: 1px solid #111!important;
   background:#ccc!important;
} 
table#table_export{
    border-collapse: collapse;
}
table#table_export tbody tr:last-child td{
    border-top: 1px solid #000;
}*/

table#table_export tbody tr:last-child td:first-child{
  color:#eaeaea !important;
  background-color: #eaeaea !important;
}
table#table_export tbody tr:last-child td:first-child {
   border-right: 0;
}
table#table_export tbody tr:last-child td:nth-child(2) {
   border-left: 0 !important;
   background-color: #eaeaea !important;
   
}
table#table_export tbody tr:last-child td:nth-child(2) strong{
  float: left;
}
table.dataTable thead .sorting {
   background-image: url(../uploads/sort_both.png);
}


</style>

<?php } }
	
if($type=="outside_state"){
	if(count($monthly_report_details)==1){?>
	<?php //echo "hhhhhh";?>
	<style>
	table#table_export tbody tr:last-child td:first-child{
  color:#000 !important;
  
}	

table#table_export tbody tr:last-child td:first-child{
   border-right: 1px solid #ccc!important;
}
table#table_export tbody tr:last-child td:nth-child(2) {
   border-left: 1px solid #ccc!important;
   
   
}

</style>	
	
<?php }}?>

<?php 
if($type=="cci"){
	if(count($childs_to_cci)==""){?>
	<?php //echo "hhhhhh";?>
	<style>
	table#table_export tbody tr:last-child td:first-child{
  color:#000 !important;
  
}	

table#table_export tbody tr:last-child td:first-child{
   border-right: 1px solid #ccc!important;
}
table#table_export tbody tr:last-child td:nth-child(2) {
    border-left: 1px solid #ccc!important;
   
   
}

</style>	
<?php }}?>

<?php 
if($type=="cci"){
	//echo "hiiii";
	//print_r($states_list);
	//echo $states_list[area_id];
	if(count($childs_to_cci)==1){?>
	<?php //echo "hhhhhh";?>
	<style>
	table#table_export tbody tr:last-child td:first-child{
  color:#000 !important;
  
}	

table#table_export tbody tr:last-child td:first-child{
   border-right: 1px solid #ccc!important;
}
table#table_export tbody tr:last-child td:nth-child(2) {
   border-left: 1px solid #ccc!important;
   
   
}

</style>	
<?php }}?>


 <?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 || $role==13 || $role==20){
	
	if($type=="Rehabilitation"){
		       
		if($sub_rehab=="Labour"|| $sub_rehab=="cm_relief" ||$sub_rehab=="Educational"||$sub_rehab=="Rural"||$sub_rehab=="Urban"||$sub_rehab=="Revenue"||$sub_rehab=="Health"
				||$sub_rehab=="sc_st"||$sub_rehab=="food" || $sub_rehab=="Minority" || $sub_rehab=="Social"){
	?>
<style>
/* table tbody tr:last-child {
   border-top: 1px solid #111!important;
   background:#ccc!important;
} 
table#table_export{
    border-collapse: collapse;
}
table#table_export tbody tr:last-child td{
    border-top: 1px solid #000;
}*/


table#table_export tbody tr:last-child td:first-child{
   color:#eaeaea !important;
   background-color: #eaeaea !important;
}
table#table_export tbody tr:last-child td:first-child {
    border-right: 0;
}
table#table_export tbody tr:last-child td:nth-child(2) {
    border-left: 0 !important;
    background-color: #eaeaea !important;
    
}
table#table_export tbody tr:last-child td:nth-child(2) strong{
   float: left;
}
table.dataTable thead .sorting {
    background-image: url(../uploads/sort_both.png);
}

</style>

<?php } }}?>
	
 
<section>


<div class="row">
         <div class="col-md-12" style="margin-bottom:5px;">
         <div class="row">
<form  action="<?php echo base_url(); ?>index.php?mis_reports/" method="post" >
			<div class="form-group">
			<div class="col-md-2" style="width:128px ;">
			<label class="" for="">Select Reports :</label>
			</div>
			<div class="col-md-5" style="width:355px;">			
				<select name="type" id="type" class="form-control dist"   data-validate="required" >
				      <?php if($role==10){?>
					 <option  <?php if($type=="lc_action") echo "selected" ;?> value="lc_action">Action Suggested By LC</option>
					 <?php  }?>
						          <option <?php if($type=="age") echo "selected" ; ?> value="age">Age-wise Break-up</option>
						          <option <?php if($type=="caste") echo "selected" ; ?> value="caste">Category-wise Break-up</option>
						          <option  <?php if($type=="rescued_repeatedly") echo "selected" ;?> value="rescued_repeatedly">Child Rescued Repeatedly</option>
						          <option  <?php if($type=="outside_state") echo "selected" ;?> value="outside_state">Child Rescued Outside State</option>
						           <option  <?php if($type=="inside_state") echo "selected" ;?> value="inside_state">Child Rescued Within State</option>
						           <option  <?php if($type=="cci") echo "selected" ;?> value="cci">Children Sent to CCI</option>
						           <option <?php if($type=="cmrf_transaction") echo "selected" ; ?> value="cmrf_transaction">CMRF Transaction Details</option>
						           <option  <?php if($type=="emp_amt") echo "selected" ;?> value="emp_amt">Collected Wage Amount</option>
						            <option  <?php if($type=="child_cumulative") echo "selected" ;?> value="child_cumulative">Cumulative Statistics</option>
						            								<option  <?php if($type=="cwc_working_status") echo "selected" ;?>  value="cwc_working_status" >CWC Working Status</option>
						           	 <option  <?php if($type=="cwc_delay") echo "selected" ;?> value="cwc_delay">Delay In CWC Order Passing</option>
						           	 <option <?php if($type=="due_for_transfer") echo "selected" ; ?> value="due_for_transfer">Transfer Status of Rescued Child Labourer</option>
					                 <?php if($role==10 || $role==11 || $role==9 || $role==12){?>
					
					 <option  <?php if($type=="trnsfr_status") echo "selected" ;?> value="trnsfr_status">Transfer Status State Wise</option>
					 <?php  }?>
						           	 <option <?php if($type=="education") echo "selected" ; ?> value="education">Education-wise Break-up</option>
						           	<option  <?php if($type=="entitlement_card_getnerated") echo "selected" ;?> value="entitlement_card_getnerated">Entitlement Card Generation Time Period</option> 
						      <option  <?php if($type=="last_login") echo "selected" ;?> value="last_login">Last Login Time Period</option>	
						      <?php if($role==2 || $role==5){?><option  <?php if($type=="middle_men") echo "selected" ;?> value="middle_men">Middlemen/Agents</option><?php } ?>
				       		   <option  <?php if($type=="order_after_production") echo "selected" ;?> value="order_after_production">Order After Production</option>
				 				 <option  <?php if($type=="Rehabilitation") echo "selected" ; ?> value="Rehabilitation">Rehabilitation</option>
							 	<option  <?php if($type=="rescued_child") echo "selected" ; ?> value="rescued_child">Rescued Child Labourer Registered By</option>
						 		 <option <?php if($type=="system_access") echo "selected" ;?> value="system_access">System Access</option>
								 <option  <?php if($type=="investigation") echo "selected" ;?> value="investigation">Time Taken For Investigation</option>

					
					
					 <!-- <option  <?php //if($type=="cwc_not_filling") echo "selected" ;?> value="cwc_not_filling">Status Of Additional Details</option>-->
					
					<!--   <option  <?php //if($type=="ngo_dubbious") echo "selected" ; ?> value="ngo_dubbious">Dubious NGO </option>-->
					 
                </select>
                </div>
				</div>
				<div class="col-md-2" style="width:71px;" >
		   	<label for="datepicker" >From <span style="color:red;">*</span></label>
				</div>
				<div class="col-md-2" >
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php echo $from?>"  data-validate="required"  >               	
				<input type="hidden" class="form-control" id="from_dt22" required="required" name="from_date"    value="<?php echo date("d-m-Y", strtotime($from));?>"  data-validate="required"  >
                	</div>
					<span id="error_from_dt" class="color-red"></span>
				</div>
				
		   <div class="col-md-1" style="width:57px;">
           	<label for="datepicker">To <span style="color:red;">*</span></label>
				</div>
		 		 <div class="col-md-2">
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="to_dt" required="required" name="to_date"   value="<?php echo $to;?>"  data-validate="required"  >	   
                 <input type="hidden" class="form-control" id="to_dt22" required="required" name="to_date"   value="<?php echo date("d-m-Y", strtotime($to));?>" data-validate="required"  >
                 </div>
				 <span id="error_to_dt" class="color-red"></span>
				 </div>
				<div class="col-md-1" id="new-button1">
				<button type="button"  data-type="view" id="mis_submit" class="mis_submit btn btn-info">Submit</button>
			  </div>
			</div>
			</div>
</div>

	<div class="row">
	      <?php //if($type=='system_access' || $type=="last_login"){?>
     <?php if($role!=2 && $role!=7 && $role!=8 && $role!=14 && $role!=19 && $role!=5 && $role!=6 && $role!=16 && $role!=18 && $role!=13 && $role!=20){ ?>
     <div class="col-md-12" id="user_grp_div" style="display:none;margin-bottom:5px;" >
     <div class="row">
			<div class="form-group">
			<div class="col-md-2" style="width:128px;">
			<label >User Groups</label>
			</div>
			<div class="col-md-5" style="width:355px;">
				<select name="user_grp" id="user_grp" class="form-control dist"  data-validate="required">
		<!--       <option value="">Select User Groups</option> --> 

                  <?php foreach($user_grps as $crow2):  ?>
			
                  <option <?php if($selected_user_grp==$crow2['name']){echo "selected";}?> value="<?php echo $crow2['name'];?>" ><?php echo $crow2['name']; ?></option>
                  <?php    endforeach;?>

                </select>
                </div>
			</div>
			</div>
		</div>
		 
		<div class="col-md-12" id="cci_dist_div" style="display:none;margin-bottom:5px;">
		<div class="row">
			<div class="form-group">
			<div class="col-md-2" style="width:128px;"><label >District</label></div>
   			<div class="col-md-5" style="width:355px;">
				<select name="district" id="cci_district" class="form-control dist"  data-validate="required">
				<option value="">Select District</option>

                  <?php foreach($district_list as $crow2):  ?>

                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
                </div>
			</div>
			</div>
		</div>
	<?php } //else if($type=='inside_state') {?>
								 				
	
	 <div id="inside_div" style="display:none;">
	 <?php if($dist_show){?>
		<div class="col-md-2" >
			<div class="form-group">
			<label >District</label>			
				<select name="district" id="district" class="form-control dist"  data-validate="required">
				<option value="">Select District</option>

                  <?php foreach($district_list as $crow2):  ?>
                  

                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<?php }?>
		 <?php if($role!=2 && $role!=7 && $role!=8 && $role!=14 && $role!=19 && $role!=5 && $role!=6 && $role!=16 && $role!=18){ ?>
		<div class="col-md-2">
			<div class="form-group">
			<label >Block</label>

				<select name="block" id="block" class="form-control dist"  data-validate="required">
				<option value="">Select Block</option>

                  <?php foreach($blocks_list as $crow2):  ?>

                  <option <?php if($selected_block==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>"><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<?php } ?>
		</div>

	<?php ///} else if($type=='outside_state' ) {?>
		<div class="col-md-12" id="outside_div" style="display:none;margin-bottom:5px;">
		<div class="row">
			<div class="form-group">
			<div class="col-md-2" style="width:128px;"><label >State</label></div>
				<div class="col-md-5" style="width:355px;">
				<select name="state" id="state" class="form-control dist"  data-validate="required">
				<option value="">Select State</option>
                  
                  <?php foreach($states_list as $crow2):   ?>
                   <?php if($crow2['area_id']!='IND010'){?>
                  <option <?php if($selected_state==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>"><?php echo $crow2['area_name']; ?></option>
				   <?php }   endforeach;  
				  
				  ?>

                </select>
                </div>
			</div>
			</div>
		</div>
		<!-- rehabilitaion type-->
		<div id="rehabilitation_details" class="col-md-12" <?php if($type!="Rehabilitation"){ ?>style="display:none;"<?php } ?>>
			<div class="row" style="margin-bottom:5px;">
			<div class="col-md-2" style="width:128px;"><label>Select Type</label></div>
			<div class="col-md-5" style="width:355px;">		
			<select name="rehabilitation_section" class="form-control" id="rehabilitation_section">
				<option <?php if($sub_rehab=="Labour"){ ?> selected <?php } ?> value="Labour" selected="selected">Labour Resource Department</option>
				<option <?php if($sub_rehab=="cm_relief"){ ?> selected <?php } ?> value="cm_relief" >CM Relief Fund</option>
				<option <?php if($sub_rehab=="Educational"){ ?> selected <?php } ?> value="Educational" >Education Department</option>
				<option <?php if($sub_rehab=="Rural"){ ?> selected <?php } ?> value="Rural" >Rural Development Department</option>
				<option <?php if($sub_rehab=="Urban"){ ?> selected <?php } ?> value="Urban" >Urban Development Department</option>
				<option <?php if($sub_rehab=="Revenue"){ ?> selected <?php } ?> value="Revenue" >Revenue Department</option>
				<option <?php if($sub_rehab=="Health"){ ?> selected <?php } ?> value="Health" >Health Department</option>
				<option <?php if($sub_rehab=="sc_st"){ ?> selected <?php } ?> value="sc_st" >SC & ST Welfare Department</option>
				<option <?php if($sub_rehab=="food"){ ?> selected <?php } ?> value="food" >Food & Civil Supplied Department</option>
				<option <?php if($sub_rehab=="Minority"){ ?> selected <?php } ?> value="Minority" >Minority Welfare Department</option>
				<option <?php if($sub_rehab=="Social"){ ?> selected <?php } ?> value="Social" >Social Welfare Department</option>
				
			</select>
			</div>
			
			</div>			
	</div>
	<?php //}?>
	<?php //if($type!='middle_men'){?>
	<!--<div id="from_to_div">
		<div class="col-md-12" >
		<div class="row">
		<div class="col-md-2" >
		   	<label for="datepicker" >From <span style="color:red;">*</span></label>
				</div>
				<div class="col-md-2" >
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php //echo $from?>"  data-validate="required"  >
                	</div>
					<span id="error_from_dt" class="color-red"></span>
				</div>
				
		   <div class="col-md-1">
           	<label for="datepicker">To <span style="color:red;">*</span></label>
				</div>
		 		 <div class="col-md-2">
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="to_dt" required="required" name="to_date"   value="<?php //echo $to;?>"  data-validate="required"  >	   
                 </div>
				 <span id="error_to_dt" class="color-red"></span>
				 </div>
				 <div class="col-md-2" id="new-button1" style="margin-left: -5px;">
  					<button type="button"  data-type="view" id="mis_submit" class="mis_submit btn btn-info">Submit</button>
  				</div>
		  </div>
		  </div>
		  </div>-->
	<?php //}
	//if($type=='middle_men'){?>
	<!--  	 <input type="hidden" class="form-control" required="required" name="from_date" id="datepicker"   value="<?php // echo $from?>"  data-validate="required"  >
		  <input type="hidden" class="form-control" required="required" name="to_date" id="datepickerTo"  value="<?php // echo $to;?>"  data-validate="required"  >-->
	<?php // }?>
  			
  		<!-- added by pooja -->	
  	<!-- 	<div class="col-md-6" id="new-button" style="display:none;">

  			<button type="button" style="margin-top:5px;" data-type="view" id="mis_submit" class="mis_submit btn btn-info pull-right">Submit</button>
  			</div>	 -->

	</form>
 
</div>
<script>
$(document).ready(function () {
$("#mis_submit").on("click",function(){
			 $('#loading').show();
		 });
});
 </script>

<div class="row">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">
      <div class="loader"></div>
    </div>
 </div>


  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" id="child_table">
	</br>
	<!--	<h2>Report Details </h2>-->

		<table  class="display table table-bordered" cellspacing="0" width="100%" id="table_export">
		<?php if($type=="entitlement_card_getnerated"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;color:#000;">Child Name</th>
					<th style="text-align:center;color:#000;">Child District</th>
					<th style="width:20%;text-align:center;color:#000;">Rescued Date</th>
					<th style="text-align:center;color:#000;">Entitlement Card Generation Date</th>
					<th style="text-align:center;color:#000;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1; if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td  style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['idate_of_rescue'] ;?></td>
				<td style="text-align:center;"><?php echo $row['final_order_date'] ;?></td>
				<td style="text-align:center;"><?php
				   if($row['idate_of_rescue']!="")
				   {
                   $your_date = strtotime($row['idate_of_rescue']);
				   $now = strtotime($row['final_order_date']);
				    
                   $datediff = $now - $your_date;
				   echo floor($datediff / (60 * 60 * 24));
				   }
				   else{
					   
					  echo $datediff='NA'; 
				   }
                    ?></td>
				</tr>


			<?php $i++;}}?>

			</tbody>
		<?php }else if($type== "investigation"){  ?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;color:#000;">Child Name</th>
					<th style="text-align:center;color:#000;">Date When Child Produced before CWC</th>
					<th style="text-align:center;color:#000;"> Entitlement Card Generation Date</th>
					<th style="text-align:center;color:#000;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1; if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php if($row['date_of_production']=='0000-00-00'){
					echo "NA";	
					}
					else if($row['date_of_production']=="")
					{
					    echo "NA";	
					}
					else {
					echo $row['date_of_production'] ;
				}?></td>
				<td style="text-align:center;"><?php echo $row['final_order_date'] ;?></td>
				<td style="text-align:center;"><?php
                    
					   if($row['date_of_production']=='0000-00-00')
					   {
						   $datediff =0 ;
					   }
					   else if($row['date_of_production']=="")
						{
							$datediff =0 ;
						}
					   else {
					   $your_date = strtotime($row['date_of_production']);

				       $now = strtotime($row['final_order_date']);
					   $datediff=$now - $your_date;
				   }
				  // echo $datediff;
                    echo abs(ceil($datediff / (60 * 60 * 24)));?></td>
				</tr>


			<?php $i++;}}?>

			</tbody>
		<?php }else if($type== "inside_state"){ 
      
		?>
			<thead>
				<tr>
					<th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;"><?php if($selected_dist==NULL)
					{echo 'District';} else {if($selected_block) { echo "Panchayat Name";} else {echo "District";}}?></th>
					<th style="text-align:center;color:#000;">No of Children Rescued</th>
					<th class="view-button" style="text-align:center;color:#000;">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php // print_r($monthly_report_details);?>
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['0']?></td>
				<td style="text-align:center;"><?php echo $row['1'] ;?></td>
				<?php  if($row['0']=='<strong>Total</strong>'){?>		
				<td></td>
						<?php }else {?>
						<td  class="view-button" style="text-align:center;"><a href="<?php

                     if($selected_dist==NULL)
					 {
						 $type_inside="dist";
						echo $view_url.$from.'/'.$to.'/'.$type_inside.'/'.$row['2'];
					 }
                     else{
						
						 if($selected_block!=NULL)
						 {
							 $type_inside="panchayat";
						 echo $view_url.$from.'/'.$to.'/'.$type_inside.'/'.$row['panchayat_id'].'/'.$selected_block;
						 }
						 else
						 {
							 $type_inside="block";
						 echo $view_url.$from.'/'.$to.'/'.$type_inside.'/'.$row['2'];

						 }
					 }
						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>
						<?php }?>
			</tr>


			<?php $i++;}}?>

			</tbody>
		<?php }else if($type== "outside_state"){ 
			
			
			
			?>
			<thead>
			
				<tr>
					<th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;"><?php if($selected_state==NULL)
					{echo 'State';}  else {echo "District";}?></th>
					
					<th style="text-align:center;color:#000;">No of Children Rescued</th>
					
					<th class="view-button" style="text-align:center;color:#000;">Action</th>
				</tr>
				
			</thead>
			<tbody>
		<?php  //print_r($monthly_report_details);?>	
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>
           
			<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php 
				echo $row['0'];?>
				</td>
				<td style="text-align:center;"><?php echo $row['1'] ;?></td>
		       <?php  if($row['0']=='<strong>Total</strong>'){?>		
				<td ></td>
					<?php }else {?>
					<td  class="view-button" style="text-align:center;"><a href="<?php

                     if($selected_state==NULL)
					 {
						 $type_outside="state";
						echo $view_url_outside.$from.'/'.$to.'/'.$type_outside.'/'.$row['2'].'/';
					 }
                     else{
							 $type_outside="state";
						 echo $view_url_outside.$from.'/'.$to.'/'.$type_outside.'/'.$row['2'].'/';

						 }

						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>
					
				<?php }?>	
					
			</tr>
			
			<?php $i++;}}?>
			
		<?php }else if($type== "cci"){  ?>
			<thead>
				<tr>
					<th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">CCI Name</th>
					<th style="text-align:center;color:#000;">CCI Disrtict</th>
					<th style="text-align:center;color:#000;">No of Children Sent</th>
					<th class="view-button" style="text-align:center;color:#000;">Action</th>
					
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($childs_to_cci){foreach($childs_to_cci as $row){?>
       
             
				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['0'];?></td>
				<?php  if($row['0']=='<strong>Total</strong>'){?>
				<td style="text-align:center;"></td>
				<?php } else {?>
								<td style="text-align:center;"><?php echo $row['1'];?></td>
				<?php } ?>
				<td style="text-align:center;"><?php echo $row['2'];?></td>
				<?php  if($row['0']=='<strong>Total</strong>'){?>
				<td></td>	
						<?php }else{?>
				<td  class="view-button" style="text-align:center;"><a href="<?php
				echo $view_url_cci.$from.'/'.$to.'/'.$row['3'].'/'.$row['4'];					 
						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>			
						
						
						<?php }?>		
			</tr>

           
			<?php $i++;}}?>


		<?php } else if($type=="system_access"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">User Name</th>
					<th style="text-align:center;color:#000;">District</th>
					<th style="text-align:center;color:#000;">No of times accessed</th>
					<th style="text-align:center;color:#000;">Last accessed Date</th>
				</tr>
			</thead>
			<tbody>

			<?php
        $i=1;
		foreach($sys_access_report as $row):
		?>
				<tr>
                  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['district'];?> </td>
				  <td style="text-align:center;"><?php echo $row['count'];?> </td>
				  <td style="text-align:center;"><?php echo $row['last_access'];?> </td>

				</tr>
	 <?php $i++; endforeach;?>
		<?php }else if($type=="last_login"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">User Name</th>
					<th style="text-align:center;color:#000;">District</th>
					<th style="text-align:center;color:#000;">No of times Login Into System</th>
					<th style="text-align:center;color:#000;">Ip Address</th>
					<th style="text-align:center;width:20%;color:#000;">Last Login Date</th>
					<th style="text-align:center;color:#000;">No Of Days From Last Login</th>
				</tr>
			</thead>
			<tbody>

			<?php
		$i=1;
		//print_r($last_login_report);
		foreach($last_login_report as $row):
		?>
				<tr>
                  <td style="text-align:center;"><?php echo $i;?></td>
				  <td ><?php echo $row['name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['district'];?> </td>
				  <td style="text-align:center;"><?php echo $row['count'];?> </td>
				  <td style="text-align:center;"><?php echo $row['ip'];?> </td>
				  <td style="text-align:center;"><?php echo $row['login_date'];?> </td>
				  <td style="text-align:center;"><?php
				  $your_date = strtotime($row['login_date']);


				   $now = strtotime(date("Y-m-d"));
				   if($your_date){
					    $datediff =  $now-$your_date ;
				   }else {
					   $datediff=0;
				   }

                    echo abs(ceil($datediff / (60 * 60 * 24)));?> </td>

				</tr>
	 <?php $i++; endforeach;?>

		<?php } else if($type=="cwc_delay"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;color:#000;">Child District</th>
					<th style="text-align:center;color:#000;">Date of Production</th>
					<th style="text-align:center;color:#000;">Interim Order Passed Date</th>
					<th style="text-align:center;color:#000;">Final Order Date</th>
					<th style="text-align:center;color:#000;">Days taken to Pass Interim Order</th>
					<th style="text-align:center;color:#000;">Days taken to Pass final Order</th>
				</tr>
			</thead>
			<tbody>

			<?php
        $i=1;
		foreach($cwc_delay as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td ><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td>
				   <td ><?php echo $row['child_dist'];?></td>
					<td style="text-align:center;"><?php if($row['date_of_production']=='0000-00-00') {echo 'NA';}else if($row['date_of_production']=="") {echo 'NA';} else {echo $row['date_of_production']; }?> </td>
					<td style="text-align:center;"><?php
					if($row['fitinstitution_date']){ echo $row['fitinstitution_date'];} 
					else if($row['parent_date']){echo $row['parent_date'];}
					else if($row['cci_date']){echo $row['cci_date'];}
					else if($row['otherplace_date']){ echo $row['otherplace_date'];} 
					else if($row['fitperson_date'])
					{echo $row['fitperson_date'];}
				       else {echo 'NA';}?> </td>
				  <td style="text-align:center;"><?php echo $row['final_order_date'];?> </td>
				  <td style="text-align:center;"><?php 
				    if($row['fitinstitution_date']){ 
					 if($row['fitinstitution_date']=="")
					 {
						 $datediff=0;
				     }
						 else{ 
						
						 if($row['date_of_production']=='0000-00-00')
						 {
					      $datediff=0;
					     }
					   else if($row['date_of_production']=="")
						   {
							$datediff=0;
						   }
					   else {
						    $datediff =  strtotime($row['fitinstitution_date'])-strtotime($row['date_of_production']);
					       } 
					 }
                    $diff= (ceil($datediff / (60 * 60 * 24)));
					} 
					else if($row['parent_date']){
						if($row['date_of_production']=='0000-00-00'){
					     $datediff=0;
						
						   }
						  else if($row['date_of_production']=="")
						  {
							 $datediff =0; 
						  }
					   else {
						  $datediff =  strtotime($row['parent_date'])-strtotime($row['date_of_production']) ;
					   }

                    $diff= (ceil($datediff / (60 * 60 * 24)));
						}
					else if($row['cci_date']){
						if($row['date_of_production']=='0000-00-00'){
						  $datediff=0;
						   }
						   else if($row['date_of_production']=="")
						   {
							   $datediff=0;
						   }
						   else {
							   
								$datediff =  strtotime($row['cci_date'])-strtotime($row['date_of_production']) ;
						   }

                    $diff= (ceil($datediff / (60 * 60 * 24)));
						}
						else if($row['otherplace_date']){ 
						if($row['date_of_production']=='0000-00-00'){
							$datediff=0;
					   }
					   else if($row['date_of_production']=="")
					   {
						 $datediff=0;  
					   }
					   else {
						   
						   $datediff =  strtotime($row['otherplace_date'])-strtotime($row['date_of_production']) ;
					   }

                    $diff= (ceil($datediff / (60 * 60 * 24)));
					} 
					else if($row['fitperson_date'])
					{
						if($row['date_of_production']=='0000-00-00'){
							$datediff=0;
					    
				   }
				   elseif($row['date_of_production']=="")
				   {
					  $datediff=0; 
					   
				   }
				   else {
					   $datediff =  strtotime($row['fitperson_date'])-strtotime($row['date_of_production']) ;
				   }

                   $diff= (ceil($datediff / (60 * 60 * 24)));
						
					}
					else{
					$diff='NA';	
					}
				  echo $diff;?> </td>
				  <!-- no of datys taken to pass final order starts-->
				  
				  <td style="text-align:center;"><?php if($row['fitinstitution_date']){ 
					 
				   if($row['fitinstitution_date']==""){
					  $diff_final='NA';
					  
				   }else {
					     $datediff =   strtotime($row['final_order_date'])-strtotime($row['fitinstitution_date']);
						$diff_final= (ceil($datediff / (60 * 60 * 24)));
					   
				   }
                 
                    
					} 
					else if($row['parent_date']){
						if($row['parent_date']==""){
							$diff_final='NA';
					   }else {
						   
							$datediff =  strtotime($row['final_order_date'])-strtotime($row['parent_date']) ;
							 $diff_final= (ceil($datediff / (60 * 60 * 24)));
					   }
				   }
					else if($row['cci_date']){
							if($row['cci_date']==""){
							 $diff_final='NA';
						   }else {
							  
							   $datediff =   strtotime($row['final_order_date'])-strtotime($row['cci_date']) ;
							$diff_final= (ceil($datediff / (60 * 60 * 24)));
							}
						}
					else if($row['otherplace_date']){ 
							if($row['otherplace_date']==""){
								$diff_final='NA';
						   }else {
							   
							   $datediff = strtotime($row['final_order_date'])-strtotime($row['otherplace_date']);
								$diff_final= (ceil($datediff / (60 * 60 * 24)));
						   }
					} 
					else if($row['fitperson_date'])
					{
						if($row['fitperson_date']==""){
					    $diff_final='NA';
					   }else {
						  
						    $datediff =  strtotime($row['final_order_date'])-strtotime($row['fitperson_date']);
						$diff_final=(ceil($datediff / (60 * 60 * 24)));
					   }

                    
						
					}
					else{
						$diff_final='NA';
						
					}
				  echo $diff_final;?>  </td>

				</tr>
	 <?php $i++; endforeach;?>
	 <?php } else if($type=="rescued_repeatedly"){ ?>
			<thead>
				<tr> 
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;color:#000;">Child Name</th>
					<th style="text-align:center;color:#000;">Child District</th>
					<th style="text-align:center;color:#000;">Father Name </th>
					<th style="text-align:center;color:#000;"> Postal Address</th>
					
				</tr>
			</thead>
			<tbody>

			<?php
		$i=1;
		foreach($rescued_repeatedly as $row):
		?>
				<tr>
                  <td style="text-align:center;"><?php echo $i;?></td>
				  <td ><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td></td>
				  <td ><?php echo $row['child_name'];?> </td>
				  <td ><?php echo $row['child_dist'];?> </td>
				  <td><?php echo $row['father_name'];?> </td>
				  <td><?php echo $row['postal_address'];?> </td>
				 

				</tr>
	 <?php $i++;
	 endforeach;
	 ?>
	 <?php }else if($type=="caste"){ ?>
			<thead>
				<tr class="report_head">
					<th style="text-align:center;color:#000;">Sl No.</th>
					<th style="text-align:center;color:#000;">District Name</th>
					<th style="text-align:center;color:#000;">SC</th>
					<th style="text-align:center;color:#000;">ST</th>
					<th style="text-align:center;color:#000;">OBC</th>
					<th style="text-align:center;color:#000;">General</th>
					<th style="text-align:center;color:#000;">EBC</th>
					<th style="text-align:center;color:#000;">Other</th>
				</tr>
			</thead>
			<tbody>
<?php 
$i=1;	foreach($castwiseb_brakeup as $row): ?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['1'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['2'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['3'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['4'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['5'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['6'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; ?>
	 <?php }else if($type=="middle_men"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Name</th>
					<th style="text-align:center;color:#000;">Alias </th>
					<th style="text-align:center;color:#000;"> Contact No</th>
					<th style="text-align:center;color:#000;"> Address</th>
					<th style="text-align:center;color:#000;"> Other Details</th>
					
				</tr>
			</thead>
			<tbody>

			<?php
		$i=1;
		foreach($middle_men as $row):
		?>
				<tr>
				  <td style="text-align:center;" ><?php echo $i; ?></td>
				  <td style="text-align:center;" ><?php echo $row['name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['alias'];?> </td>
				  <td style="text-align:center;"><?php echo $row['contact'];?> </td>
				  <td style="text-align:center;"><?php echo $row['address'];?> </td>
				  <td style="text-align:center;"><?php echo $row['other_details'];?> </td>
				 

				</tr>
	 <?php $i++;endforeach;?>
	 <?php } else if($type=="emp_amt"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child ID</th>
					<th style="text-align:center;color:#000;">Total Work Amount</th>
					<th style="text-align:center;color:#000;">Amount Collected</th>
					
					
				</tr>
			</thead>
			<tbody>
			

   <?php
		$i=1;
		foreach($amount_calculated as $row):
		?>
				<tr>
                  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td></td>
				  <td style="text-align:center;"><?php echo $row['total_work'];?> </td>
				  <td style="text-align:center;"><?php echo $row['amount_wages_collected'];?> </td>
				 
				 
				  
				</tr>
	 <?php $i++; endforeach;?>
		<?php }else if($type=="lc_action"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child ID</th>
					<th style="text-align:center;color:#000;">Designation</th>
			
					<th style="text-align:center;color:#000;">District</th>
					<th style="text-align:center;color:#000;">Message</th>
					<th style="text-align:center;color:#000;">Date Of Communication</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
        $i=1;
		foreach($communication as $row):
		?>
				<tr>
                  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['child_id'];?> </td>
				  <td style="text-align:center;"><?php echo $row['role_name'];?> </td>
				  
				  <td style="text-align:center;"><?php echo $row['area_name'];?> </td>
				  <td><?php echo $row['massage'];?> </td>
				  <td style="text-align:center;"><?php echo $row['created'];?> </td>
				 
				 
				  
				</tr>
	 <?php $i++; endforeach;?>
	 
	 <?php }else if($type=="trnsfr_status"){ ?>
	 
	 
			<thead>
            <tr class="report_head">
			<th style="text-align:center;color:#000;">SL No</th>
             <th style="text-align:center;color:#000;">State Name</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Transfer To Other State</th>
			<th style="text-align:center;color:#000;">No Of Children Sent To Other State</th>
            </tr>
			</thead>
			<tbody>
			
			<?php 
			$i=1;foreach($trnsfr_status as $row): ?>          
            <tr class="report_head">
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><a href="<?php echo $transfer_url_state;?><?php echo $from;?>/<?php echo $to;?>/<?php echo $row['4'];?>"><?php echo $row['1'];?></a></td>	
				   <td style="text-align:center;"><a href="<?php echo $transfer_url_state_sent;?><?php echo $from;?>/<?php echo $to;?>/<?php echo $row['4'];?>"><?php echo $row['2'];?></a></td>	
				 
				
				
				
			
				</tr>			   				
			<?php $i++; endforeach; ?>
<?php  }else if($type=="cwc_not_filling"){ ?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child ID</th>
					<th style="text-align:center;color:#000;">Data Available For</th>
					<th style="text-align:center;color:#000;">Final Order Date</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
			$i=1;
			foreach($additional_details as $row):
			?>
					<tr>
					  <td style="text-align:center;"><?php echo $i; ?></td>
					  <td ><?php echo $row['child_id'];?></td>
					  
					  <td>
					  <?php  if($row['tables']){print_r($row['tables']);} else{ echo "NA";}?> </td>
					  
					  <td ><?php print_r($row['final_order_date']);?></td>
					 
					  
					</tr>
		 <?php $i++; endforeach;?> 	 
		 <?php }else if($type=="ngo_dubbious"){?>
				 <thead>
					<tr>
					    <th style="text-align:center;color:#000;">Serial No</th>
						<th style="text-align:center;color:#000;">Name of NGO</th>
						<th style="text-align:center;color:#000;">Email</th>
						<th style="text-align:center;color:#000;">Contact</th>
						<th style="text-align:center;color:#000;">Registration Number</th>
						<th style="text-align:center;color:#000;">Date of Registration</th>
						<th style="text-align:center;color:#000;">Chief Of Organization</th>
					</tr>
				</thead>
				<tbody>
				
			<?php
		$i=1;
		foreach($dubbious_ngo as $row):
		?>
				<tr>
                  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['email'];?> </td>
				  <td><?php echo $row['contact'];?> </td>
				  <td><?php echo $row['regno'];?> </td>
				  <td><?php echo $row['date_reg'];?> </td>
				  <td><?php echo $row['chairman'];?> </td>
				  
				</tr>
	 <?php $i++; endforeach; ?>


<?php }else if($type=="rescued_child"){?>
				 <thead>
					<tr>
					<!-- FOR DISPLAYING DISTRICT WISE RESCUED CHILD -->
					<!-- ADDED POOJA -->
					    <th style="text-align:center;color:#000;">Sl No.</th>
					    <th style="text-align:center;color:#000;">District</th>
						<th style="text-align:center;color:#000;">LS</th>
						<th style="text-align:center;color:#000;">LEO</th>
						<!-- <th style="text-align:center;">DCPU</th>-->
						<th style="text-align:center;color:#000;">CWC</th>
						<th style="text-align:center;color:#000;">Total</th>
						<!--<th style="text-align:center;">Serial No</th>
						<th style="text-align:center;">Group Name</th>
						<th style="text-align:center;">No. Of Child Rescued</th>
						<th style="text-align:center;">Action</th>-->
					</tr>
				</thead>
				<tbody>
				
			<?php
        $i=1;
       //echo "<pre>"; print_r($resue_child); echo "</pre>"; 
		foreach($resue_child as $row):
		?>
				<tr>
					<td style="text-align:center;"><?php echo $i; ?></td>
				    <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;">
				  
				  <?php if($row['1']==0){
				  
				  echo $row['1'];?> 
				  
				  <?php }else{?>
				  
				  <a href="<?php echo $district_url;?><?php echo $from;?>/<?php echo $to;?>/LS/<?php echo $row['4'];?>"><?php echo $row['1'];?></a>
				  
				  <?php }?>
				  
				  
				  </td>
				  <td style="text-align:center;">
				  
				  
				 <?php if($row['2']==0){
				  
				  echo $row['2'];?> 
				  
				  <?php }else{?>
				  
				  <a href="<?php echo $district_url;?><?php echo $from;?>/<?php echo $to;?>/LEO/<?php echo $row['4'];?>"><?php echo $row['2'];?></a>
				  
				  <?php }?>
				  
				  
				  </td>
				
				  <td style="text-align:center;">
				  
				 <?php if($row['3']==0){
				  
				  echo $row['3'];?> 
				  
				  <?php }else{?>
				  
				  <a href="<?php echo $district_url;?><?php echo $from;?>/<?php echo $to;?>/CWC/<?php echo $row['4'];?>"><?php echo $row['3'];?></a>
				  
				  <?php }?>
				  
				   </td>
				   
		<?php  if($row['0']=="<strong>Total</strong>"){  ?>
				    
				  <td style="text-align:center;">
			      <?php echo $row['5'];?>
				  </td> 
				  
			<?php 	  }else{  ?>
				    
				  <td style="text-align:center;">
			<a href="<?php
      
			 echo  $user_details_manual.$from.'/'.$to.'/'.$row['4'].'/';
					 
						?>">  <?php echo  $row['3']+$row['1']+$row['2'];?></a>	 
				  </td> 
				  
		<?php }  ?>		  
				   
				   
				  
				   
				   
				   
			<!--  	 <td  class="view-button" style="text-align:center;"><a href="<?php

                     
			// echo  $user_details_manual.$from.'/'.$to.'/'.$row['area_id'].'/';
					 
					

					

						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>-->
				</tr>
	 <?php $i++; endforeach; ?>

<?php }else if($type=="Rehabilitation"){
	
	if($sub_rehab=="Labour"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Rs 1800 Package</th>
                <th style="text-align:center;color:#000;">Rs 3000 Package</th>
	            <th style="text-align:center;color:#000;">Rs 5000 Deposited DCWRA</th>
                <th style="text-align:center;color:#000;">Compensation fund Rs. 20,000</th>
				<th style="text-align:center;color:#000;">CMRF Transferred Rs. 25000</th>
				
            </tr>
            </thead>
				<tbody>				
			<?php
	}if($sub_rehab=="cm_relief"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Physically verified</th>                
	            <th style="text-align:center;color:#000;">CL eligible for CMRF</th>
	            <th style="text-align:center;color:#000;">CL not eligible for CMRF</th>
	            <th style="text-align:center;color:#000;">Demand Raised </th>
	            <th style="text-align:center;color:#000;">Demand Received</th>
	            <th style="text-align:center;color:#000;">Bank details not available</th>
				<th style="text-align:center;color:#000;">CMRF transferred to CL A/C</th>			
            </tr>
            </thead>
				<tbody>				
			<?php
	}
	
	if($sub_rehab=="Educational"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Enrolled in School</th>                
            </tr>
            </thead>
				<tbody>				
			<?php
			
}if($sub_rehab=="Rural"){
				?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">MGNREGA</th> 
                <th style="text-align:center;color:#000;">SGSY</th> 
                 <th style="text-align:center;color:#000;">IAY</th>                          
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="Urban"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">SJSRY</th> 
                <th style="text-align:center;color:#000;">JNURM</th> 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="Revenue"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">LAND SETTLEMENT BENIFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
	
}if($sub_rehab=="Health"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">HEALTH CARDS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
			
}if($sub_rehab=="sc_st"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">SCHOLARSHIPS BENEFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="food"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">RATION CARDS</th> 
                 <th style="text-align:center;color:#000;">PDS BENEFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="Minority"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">SPECIAL HOUSING SCHEME</th> 
                 <th style="text-align:center;color:#000;">LOAN BENEFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
	
}if($sub_rehab=="Social"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Social Pension Scheme</th> 
                 <th style="text-align:center;color:#000;">Pravarish Scheme</th>
                  <th style="text-align:center;color:#000;">Sponsorship Benefits for Family</th>
                   <th style="text-align:center;color:#000;">Sponsorship Benefits for Child</th>   
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php			
	}if($sub_rehab=="Labour"){
		$i=1;	foreach($Rehabilitation as $row):
		//print_r($row);
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  <td style="text-align:center;"><?php echo $row['4'];?> </td>
				  <td style="text-align:center;"><?php echo $row['5'];?> </td>	 
				</tr>
	 <?php $i++; endforeach; 
	}
	if($sub_rehab=="cm_relief"){
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  <td style="text-align:center;"><?php echo $row['4'];?> </td>
				  <td style="text-align:center;"><?php echo $row['5'];?> </td>
				   <td style="text-align:center;"><?php echo $row['6'];?> </td>
				    <td style="text-align:center;"><?php echo $row['7'];?> </td>
				 
				</tr>
	 <?php $i++; endforeach; 
	}
	if($sub_rehab=="Educational"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	if($sub_rehab=="Rural"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				   <td style="text-align:center;"><?php echo $row['2'];?> </td>
				   <td style="text-align:center;"><?php echo $row['3'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="Urban"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				   <td style="text-align:center;"><?php echo $row['2'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="Revenue"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="Health"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="sc_st"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="food"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	
	if($sub_rehab=="Minority"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="Social"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				   <td style="text-align:center;"><?php echo $row['3'];?> </td>
				   <td style="text-align:center;"><?php echo $row['4'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	} ?>

<?php }else if($type=="child_cumulative"){

		?>
			 <thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">SL No</th>
              		 <th style="text-align:center;color:#000;">District</th>
					<th style="text-align:center;color:#000;">Child Rescued</th>
					<th style="text-align:center;color:#000;"> Child Transfered To Other District</th>
					<th style="text-align:center;color:#000;"> Child Transfered From Other District</th>
					<th style="text-align:center;color:#000;">CL For Own District</th>
					<th style="text-align:center;color:#000;">Investigation on Going</th>
					<th style="text-align:center;color:#000;">Final Order Passed</th>
					<th style="text-align:center;color:#000;">Printed entitlement card</th>
					
				
            </tr>
            </thead>
				<tbody>
			<?php 
			$i=1;	
			
			foreach($resistration_details as $row):
						
			$result_new=($row['1']-$row['5'])+$row['6'] ;
			
			//$result_new=$row['1']-$row['5'] ;
			
			?>
<tr>
 <td style="text-align:center;"><?php echo $i;?></td>
 <td style="text-align:center;" ><?php echo $row['0'];?> </td>
 <td style="text-align:center;"><?php echo $row['1'];?> </td>
 <td style="text-align:center;"><?php echo $row['5'];?> </td>
  <td style="text-align:center;"><?php echo $row['6'];?> </td>
  <?php if($row['0']=="<strong>Total</strong>"){?>
  

  <td style="text-align:center;"><?php echo $row['8'];?></td>
 
  <?php }else{
  	$total_noCL=($row['1']-$row['5'])+$row['6']  ;
  	
  	?>
   <td style="text-align:center;"><?php echo $total_noCL ; ?> </td>
  <?php } ?>
 
  
 <td style="text-align:center;"><?php echo $total_noCL- $row['3']; ?> </td>
 <td style="text-align:center;"><?php echo $row['3'];?> </td>
 <td style="text-align:center;"><?php echo $row['4'];?> </td>
  
</tr>
	
				
			<?php $i++; endforeach; } else if($type=="order_after_production"){?>
<?php //echo "<pre>";print_r($monthly_report_details_mis);echo"</pre>"; ?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
				    <th style="text-align:center;color:#000;">District</th>
					<th style="text-align:center;color:#000;">Handed over to Parents/Gaurdian</th>
					<th style="text-align:center;color:#000;">Handed over to CCI</th>
					<th style="text-align:center;color:#000;">Handed over to Fit Person</th>
					<th style="text-align:center;color:#000;">Handed over to Fit Facility</th>
					<th style="text-align:center;color:#000;">Handed over to Other Place</th>
					<th style="text-align:center;color:#000;">Other Orders</th>
				</tr>
			</thead>
			<tbody>			
			<?php
        $i=1;
		foreach($monthly_report_details_mis as $row):
		?>
		
		
				<tr>
                  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <?php if($row['2']==0)
				  {?>
				  
				   <td style="text-align:center;"><?php echo $row['2'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td style="text-align:center;" ><a href="<?php echo $my_url;?><?php echo $from;?>/<?php echo $to;?>/Parents/<?php echo $row['7'];?>"><?php echo $row['2'];?></a></td>	
				  
				<?php }	 ?>  	  
				  
				  <?php 
				  if($row['1']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['1'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;"><a href="<?php echo $my_url;?><?php echo $from;?>/<?php echo $to;?>/cci/<?php echo $row['7'];?>"><?php echo $row['1'];?></a></td>	
				<?php  }?> 
				
				 <?php 
				  if($row['3']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['3'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;" ><a href="<?php echo $my_url;?><?php echo $from;?>/<?php echo $to;?>/fit_person/<?php echo $row['7'];?>"><?php echo $row['3'];?></a></td>	
				<?php  }?> 
				
				
				 <?php 
				  if($row['4']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['4'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;" ><a href="<?php echo $my_url;?><?php echo $from;?>/<?php echo $to;?>/fit_institution/<?php echo $row['7'];?>"><?php echo $row['4'];?></a></td>	
				<?php  }?> 
				
				<?php 
				  if($row['5']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['5'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;" ><a href="<?php echo $my_url;?><?php echo $from;?>/<?php echo $to;?>/other_place/<?php echo $row['7'];?>"><?php echo $row['5'];?></a></td>	
				<?php  }?> 
				
				<?php 
				  if($row['6']==0) {  ?>
				  <td  style="text-align:center;"><?php echo $row['6'];?> </td>
				<?php }else{?>
				   <td   style="text-align:center;"><a href="<?php echo $my_url;?><?php echo $from;?>/<?php echo $to;?>/Others/<?php echo $row['7'];?>"><?php echo $row['6'];?></a></td>	
				<?php  }?> 
				</tr>
	 <?php $i++; endforeach;?> 
<?php }else if($type=="education"){ ?>
<thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">SL No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Illiterate</th>
	             <th style="text-align:center;color:#000;">Upto primary ( I - V)</th>
                <th style="text-align:center;color:#000;">Middle Level (VI - VII)</th>
				<th style="text-align:center;color:#000;">Upper Primary (VIII - X)</th>
				<th style="text-align:center;color:#000;">Higher Secondary </th>
				<th style="text-align:center;color:#000;">Not Specified </th>
				<th style="text-align:center;color:#000;">Total </th>
				
            </tr>
            </thead>
				<tbody>
		



<?php 
$i=1;	foreach($educationwise_brakeup as $row): ?>

				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  <td style="text-align:center;"><?php echo $row['4'];?> </td>
				  <td style="text-align:center;"><?php echo $row['5'];?> </td>
				  <td style="text-align:center;"><?php echo $row['6'];?> </td>
				  <td style="text-align:center;"><?php echo $row['7'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; }else if($type=="age"){?>
			
			 <thead>
            <tr class="report_head">
                 <th style="text-align:center;color:#000;">SL No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Below 10 Years </th>
	             <th style="text-align:center;color:#000;">10 to 14 years</th>
                <th style="text-align:center;color:#000;">15 to 18 years</th>
				 </tr>
        </thead>
			<tbody>
		<?php 
		$i=1;	foreach($agewise_brakeup as $row): ?>
                <?php //print_r($row);?>
				<tr>
				  <td style="text-align:center;">
				  <?php echo $i;?>
				  </td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  
				   
				</tr>				
			<?php $i++; endforeach; }else if($type=="cmrf_transaction"){  ?>			
			<thead>
            <tr class="report_head">
			<th style="text-align:center;color:#000;">SL No</th>
             <th style="text-align:center;color:#000;">District Name</th>
			<th style="text-align:center;color:#000;">No Of Times CMRF Demanded</th>
			<th style="text-align:center;color:#000;">No of CL whom demand raised</th>
			<th style="text-align:center;color:#000;">No of time demand released</th>
			<th style="text-align:center;color:#000;">No of CL whom demand released</th>
			<th style="text-align:center;color:#000;">No of CL whom CMRF yet to be released from LRD to Dist</th>
			<th style="text-align:center;color:#000;">CMRF transferred to CL A/C</th>
			<th style="text-align:center;color:#000;">No of CL whom CMRF yet to be transferred</th>
            </tr>
			</thead>
			<tbody>
			
			<?php 
			$i=1;foreach($cmrf_transaction as $row): ?>          
            <tr class="report_head">
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				  <td><?php echo $row['5'];?> </td>
				  <td><?php echo $row['6'];?> </td>
				  <td><?php echo $row['7'];?> </td>
				</tr>			   				
			<?php $i++; endforeach; } else if($type=="due_for_transfer"){ ?>
			
			<thead>
            <tr class="report_head">
			<th style="text-align:center;color:#000;">SL No</th>
             <th style="text-align:center;color:#000;">District Name</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Transfer To Other District</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Transfer From Other District</th>
			<th style="text-align:center;color:#000;">Need To Forward To CWC</th>
            </tr>
			</thead>
			<tbody>
			
			<?php 
			$i=1;foreach($due_for_transfer as $row): ?>          
            <tr class="report_head">
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td><?php echo $row['0'];?> </td>
				 
				
				
				<?php if($row['1']==0)
				  {?>
				  
				   <td ><?php echo $row['1'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td ><a href="<?php echo $transfer_url;?><?php echo $from;?>/<?php echo $to;?>/<?php echo $row['4'];?>"><?php echo $row['1'];?></a></td>	
				  
				<?php }	 ?>  	  
				  
				<?php if($row['2']==0)
				  {?>
				  
				   <td ><?php echo $row['2'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td ><a href="<?php echo $transfer_form_url;?><?php echo $from;?>/<?php echo $to;?>/<?php echo $row['4'];?>"><?php echo $row['2'];?></a></td>	
				  
				<?php }	 ?>  	  
				    
				<?php if($row['3']==0)
				  {?>
				  
				   <td ><?php echo $row['3'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td ><a href="<?php echo $forward_cwc;?><?php echo $from;?>/<?php echo $to;?>/<?php echo $row['4'];?>"><?php echo $row['3'];?></a></td>	
				  
				<?php }	 ?>  	  
			
				</tr>			   				
			<?php $i++; endforeach; 
			} else if($type=="cwc_working_status"){							
			?>
			<thead>
            <tr class="report_head">
			<th style="text-align:center;color:#000;">SL No</th>
             <th style="text-align:center;color:#000;">District Name</th>
			<th style="text-align:center;color:#000;">CWC Name</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Processing By CWC</th>
            </tr>
			</thead>
			<?php 
			$i=1;foreach($cwc_working_status as $row): 
		
			?>          
            <tr class="report_head">
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?></td>
				</tr>			   				
			<?php 
			
			$i++; endforeach;
			 }	
			 
			 ?>  	  
            </tbody>
		</table>
		
	</div>

</div>

<!-----------------------------------------------end of Row-------------------------------------------->
</section>

<script type="text/javascript">
var title=$( "#type option:selected" ).text();
var type=$( "#rehabilitation_section option:selected" ).text();
	  var from=$("#from_dt").val();
	  var to=$("#to_dt").val();
     title=title+'\n'+'FROM-'+from+' '+'TO-'+to;
	jQuery(document).ready(function($)
	{
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

     
		// convert the datatable
		var datatable = $("#table_export").dataTable({

			
			"sPaginationType": "bootstrap",
			//code add by poojashree
			//for displaying all data in list table
			 "lengthMenu": [[50, 100, -1], [50, 100,"All"]],
			"paging": true,
			"dom": 'Blftrip',
			buttons: [ {
				
				text:'<i class="fa fa-file-excel-o button-excel"  ></i> Excel',
				title: "MIS Report-"+title,
				
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: "MIS Report-"+title
			},{
            extend: '',
            text: '<a href="#" data-type="pdf" class="mis_submit" style="color:#000;"><i class="fa fa-file-pdf-o"></i> PDF </a>',
			
        } ],
		
	
	
		});
		//by default all hidden
		        
			    var ex_type='<?php echo $type;?>';
				//console.log(ex_type);
				
		if(ex_type=='entitlement_card_getnerated' || ex_type=='investigation')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				// $("#new-button1").show();
				
			}
	if(ex_type=='inside_state')
			{
				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(ex_type=='outside_state')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").show();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(ex_type=='cci')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").show();
				 $("#from_to_div").show();
				
			}		
	if(ex_type=='system_access' || ex_type=='last_login' )
			{
				$("#user_grp_div").show();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}		
	if(ex_type=='emp_amt' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(ex_type=='cwc_not_filling' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
			}
			if(ex_type=='cwc_delay' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	
	if(ex_type=='rescued_repeatedly' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
			    $("#from_to_div").show();
				
			}
			if(ex_type=='middle_men')
				{
					$("#user_grp_div").hide();
				   $("#inside_div").hide();
				   $("#outside_div").hide();
				  $("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
				
				}
	if(ex_type=='lc_action' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
			    
				
			}
	if(ex_type=='ngo_dubbious' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
			   
				
			}
	if(ex_type=='trnsfr_status' )
	{
		$("#user_grp_div").hide();
		$("#inside_div").hide();
		$("#outside_div").hide();
		$("#cci_dist_div").hide();
		$("#from_to_div").show();
	    
		
	}
			
			
				
$("#type").on('change',function(){
	
	var type=$(this).val();
	//console.log(type);
	if(type=='entitlement_card_getnerated' || type=='investigation')
			{
		$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				 
			}
	if(type=='inside_state')
			{
		$("#rehabilitation_details").hide();				
				//console.log("inside");
				$("#user_grp_div").hide();
				//$("#inside_div").show();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
				
			}

	
	
	if(type=='outside_state')
			{
		$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").show();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				 
				 
			}
	if(type=='cci')
			{
		$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").show();
				 $("#from_to_div").show();
				 
				
			}		
	if(type=='system_access' || type=='last_login' )
			{
		$("#rehabilitation_details").hide();				
				$("#user_grp_div").show();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				 
				
			}		
	if(type=='emp_amt' )
			{
		$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
				 
			}
	if(type=='cwc_not_filling' )
			{
		$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
				
			}
			if(type=='cwc_delay' )
			{
				$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
				 
			}
	if(type=='middle_men' )
			{
		 $("#rehabilitation_details").hide();				
			$("#user_grp_div").hide();
			$("#inside_div").hide();
			$("#outside_div").hide();
			$("#cci_dist_div").hide();
			$("#from_to_div").show();
          	
			}
	if(type=='rescued_repeatedly' )
			{
				$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
			    $("#from_to_div").show();
			   
			   
				
			}
	if(type=='lc_action' )
			{
				$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
				
			    
				
			}
	if(type=='ngo_dubbious' )
			{
				$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
				
			   
				
			}
			
			if(type=='rescued_child' )
			{
				$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
				
				
			}
			if(type=='Rehabilitation' )
			{
				$("#rehabilitation_details").show();
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
			}

			//code added by poojashree
			if(type=='order_after_production')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}

			if(type=='due_for_transfer')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}


			if(type=='child_cumulative')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}


			if(type=='caste')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}

			if(type=='education')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}


			if(type=='age')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}

			if(type=='cmrf_transaction')
			{
			    $("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
		
			}
			

			if(type=='trnsfr_status' )
			{
				$("#rehabilitation_details").hide();				
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
				
			    
				
			}
			//ended by poojashree

			
});	
// Based on the filter URL chnage
		$(".mis_submit").on("click",function(){
			var export_type=$(this).attr("data-type");
		
			var type=$("#type").val(); 
			var user_grp=$("#user_grp").val();
			var rehabilitation_section=$("#rehabilitation_section").val();
			var from=$("#from_dt").val();
			var to=$("#to_dt").val();
			if(type =='middle_men')
			{
			if(!from)
			{
				$("#error_from_dt").html("From date should be required!");
				//console.log("asasd");
				return false;
			}
			if(!to)
			{
				$("#error_to_dt").html("To date should be required!");
				//console.log("asasd");
				return false;
			}
			}
			var dist="";
			var block="";
			var state="";

			
			//Main functionality
			if(type=='entitlement_card_getnerated')
			{
				
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}
			
			if(type=='investigation')
			{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}

			//code added by poojashree
			if(type=='order_after_production')
			{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}

			if(type=='due_for_transfer')
			{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}

			if(type=='cwc_working_status')
			{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}
           




			
			//ended by poojashree
			if(type=='inside_state')
			{
				 var block=$("#block").val();
			     var dist=$("#district").val();
				 
				
				 if(dist==undefined || dist==""  )
				 {
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				 }
				 else if(dist &&  block==undefined || block=="")
				 {
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+dist+'/'+block);
				 }
				 else if(dist &&  block)
				 {
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+dist+'/'+block); 
				 }
				
				
			}
			if(type=='outside_state')
			{
				 var state=$("#state").val();
				 //alert(state);
				 
			     if(state)
				 {
					
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+state);
				 }
				 else{
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				 }
			}
			if(type=='cci')
			{
				
			     var dist=$("#cci_district").val();
				 if(dist==undefined || dist=="" )
				 {
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				  
				 }
				if(dist)
				{
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+dist);
				}
				
			}
			if(type=='system_access')
			{
				 var user_grp=$("#user_grp").val();
				 
			     if(user_grp)
				 {
					 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+user_grp);
				 }
				 else{
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				 }
			}
			
			if(type=='last_login')
			{
				 var user_grp=$("#user_grp").val();
				 
			     if(user_grp)
				 {
					 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+user_grp);
				 }
				 else{
					 user_grp='LS';
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+user_grp);
				 
				 }
			}
			
			if(type=='emp_amt')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}
			if(type=='cwc_not_filling')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}
			if(type=='cwc_delay')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}
			if(type=='middle_men')
			{
				 
					//window.location.assign('<?php //echo base_url(); ?>//index.php?mis_reports/index/'+type);
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}
			if(type=='rescued_repeatedly')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}
			if(type=='lc_action')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}

			if(type=='trnsfr_status')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}
			if(type=='ngo_dubbious')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				 
				
			}
			
			if(type=='rescued_child')
			{
				 var user_grp=$("#user_grp").val();
				 
			     if(user_grp)
				 {
					 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+user_grp);
				 }
				 else{
					 user_grp=2;
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+user_grp);
				 
				 }
			}
			if(type=='Rehabilitation')
			{
								 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type+'/'+rehabilitation_section);				 
			}
			//cumulative statistics
			if(type=='child_cumulative')
				{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);				
				}
				if(type=='caste')
				{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);				
				}
				//code added by poojashree
				//for education wise break up
				if(type=='education')
				{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);				
				}
				//for age wise break up
				if(type=='age')
				{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);				
				}
				//for cmrf transaction
				if(type=='cmrf_transaction')
				{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);				
				}
				
				
			
		});	

	});
	
	
$("#district").on("change",function(){
var dist=$(this).val();
	$.ajax({
					url: "<?php echo base_url();?>index.php?mis_reports/get_blocks_list/"+dist,
					dataType: "JSON",
					success: function(data){
						//console.log(data);
						$('#block').find('option').not(':first').remove();
							var toAppend = '';
						   $.each(data,function(i,o){
						   toAppend += '<option value="'+o.area_id+'">'+o.area_name+'</option>';
						  });
							$('#block').append(toAppend);
						}



			});

});
var FromEndDate = new Date();
$("#from_dt" ).datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true

});

$("#to_dt" ).datepicker({
format: 'yyyy-mm-dd',
autoclose: true

});

$(function() {
	
	//console.log("sdfsdfsdf");
  $("#to_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
   var diffdate = copmareDates(to_date,frm_date);
   //console.log(diffdate);
				if(diffdate <0 ){
					$("#error_to_dt").html("To date should be greater than From date");
					document.getElementById("to_dt").focus();
					$("#to_dt").addClass("newClass");
					$("#mis_submit").attr("disabled","disabled");
					return false;
					}
					else{
						
						$("#mis_submit").removeAttr('disabled');
						$("#error_to_dt").html("");
						$("#to_dt").removeClass("newClass");
					}
			});
  
    $("#from_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
   var diffdate = copmareDates(to_date,frm_date);
   //console.log(diffdate);
				if(diffdate <0 ){
                    //console.log("dytafd a");
					$("#error_from_dt").html("From date should be less than To date");
					document.getElementById("from_dt").focus();
					$("#from_dt").addClass("newClass");
					$("#mis_submit").attr("disabled","disabled");
					return false;
					}
					else{
						$("#mis_submit").removeAttr('disabled');
						$("#error_from_dt").html("");
						$("#from_dt").removeClass("newClass");
					}
			});

});
var copmareDates = function(dot,dof) {
			year1= new Date(dot);
			year2 = new Date(dof);
			//console.log(year1);
			//console.log(year2);
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
	
		  window.onhashchange = function() {
				 alert('back is clicked');
				}
		  
</script>
<script>
//=============================================Export table as excel =============================//

function fnExcelReport(id,type,to_date,frm_date,rehabilitation_section)
{



	

	if(type=='entitlement_card_getnerated')
	{
var type1='Entitlement Card Generation Time Period' ;
	}
	//code added by poojashree
	//dispaly heading in excel sheet
		if(type=='investigation')
		{
	 var type1='Time taken for investigation';		
		}

		if(type=='inside_state')
		{
	 var type1='Child Rescued Within State';		
		}

		if(type=='outside_state')
		{
	 var type1='Child Rescued Outside State';		
		}

		if(type=='cci')
		{
	 var type1='Children sent to CCI';		
		}

		if(type=='system_access')
		{
	 var type1='System access';		
		}

		if(type=='last_login')
		{
	 var type1='Last login Time Period';		
		}

		if(type=='cwc_delay')
		{
	 var type1='Delay In CWC Order Passing';		
		}
		if(type=='middle_men')
		{
	 var type1='Middlemen/Agents';		
		}

		if(type=='rescued_repeatedly')
		{
	 var type1='Child Rescued Repeatedly';		
		}
		if(type=='lc_action')
		{
	 var type1='Action Suggested By LC';		
		}
		if(type=='ngo_dubbious')
		{
	 var type1='Dubious NGO';		
		}
		if(type=='rescued_child')
		{
	var type1='Rescued Child Labourer Registered in Application';		
		}
		if(type=='cwc_working_status')
		{
	var type1='CWC Working Status';		
		}
		if(type=='Rehabilitation')
		{


			if(rehabilitation_section=="Labour")
			{
				 var type1='Rehabilitation Of Labour Resource Department';		
			}
			if(rehabilitation_section=="cm_relief")
			{
				 var type1='Rehabilitation Of CM Relief';		
			}
			if(rehabilitation_section=="Educational")
			{
				 var type1='Rehabilitation Of Educational Department';		
			}
			if(rehabilitation_section=="Rural")
			{
				 var type1='Rehabilitation Of Rural Development Department';		
			}
			if(rehabilitation_section=="Urban")
			{
				 var type1='Rehabilitation Of Urban Development Department';		
			}	
			if(rehabilitation_section=="Revenue")
			{
				 var type1='Rehabilitation Of Revenue Department';		
			}
			if(rehabilitation_section=="Health")
			{
				 var type1='Rehabilitation Of Health Department';		
			}
			if(rehabilitation_section=="sc_st")
			{
				 var type1='Rehabilitation Of SC & ST Welfare Department';		
			}

			if(rehabilitation_section=="food")
			{
				 var type1='Rehabilitation Of Food & Civil Supplied Department';		
			}
			if(rehabilitation_section=="Minority")
			{
				 var type1='Rehabilitation Of Minority Welfare Department';		
			}
			if(rehabilitation_section=="Social")
			{
				 var type1='Rehabilitation Of Social Welfare Departmentt';		
			}	
				
			
	 //var type1='Rehabilitation';	

		}
		if(type=='order_after_production')
		{
	 var type1='Order After Production';		
		}
		if(type=='child_cumulative')
		{
	 var type1='Cumulative Statistics';		
		}
		if(type=='caste')
		{
	 var type1='Category wise Break up';		
		}
		if(type=='education')
		{
	 var type1='Education wise Break up';		
		}
		if(type=='age')
		{
	 var type1='Age wise Break up';		
		}
		if(type=='cmrf_transaction')
		{
	 var type1='CMRF Transaction Details';		
		}				

		if(type=='emp_amt')
		{
	 var type1='Collected Wage Amount';		
		}

		if(type=='due_for_transfer')
		{
	 var type1='Transfer Status of Rescued Child Labourer';		
		}
		if(type=='trnsfr_status')
		{
	 var type1='Transfer Status State Wise';		
		}

			
//code added by poojashree
//for excel sheet name
		
								
	//code ended for excel heading	
	//code changed for excel sheet link removal
    var tab_text="<center><div style='color:#0054a5;font-size:20px;'><b>"+type1+"</b></div><div style='color:#0054a5;font-size:15px;'><b>From "+frm_date+" To "+to_date+"</b></div></center><table border='2px'>";
    var textRange; var j=0;
    tab = document.getElementById(id); // id of table
     var tabSelector = $("#"+id);
    var columnCount = $("#"+id).find("thead tr:first-child th").length;
    for(var i=1; i<=$("#"+id).find("thead tr:first-child th").length; i++){
    	if(!$("#"+id).find("thead tr:first-child th:nth-child(" + i +")").hasClass("view-button")){
    	 tab_text = tab_text + tabSelector.find("thead tr:first-child th:nth-child(" + i +")").get(0).outerHTML;
    	}
        }
//     for(j = 1; j<)
// 	tabSelector.find("a").parent().html(tabSelector.find("a").html())
     
    for(j = 1 ; j <= $("#"+id).find("tbody tr").length ; j++) 
    {     
        tab_text = tab_text + "<tr>"
        for(k = 1; k <= columnCount; k++){
            if(!$("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").hasClass("view-button")){
            	 if($("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").find("a").length){
                 	tab_text = tab_text + '<td style="">' + $("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").find("a").html() + "</td>";
                 }
                 else{
                 	tab_text=tab_text+$("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").get(0).outerHTML;
                     }
                }
           
        	
        }
        
        tab_text=tab_text+"</tr>";

        <?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 || $role==13 || $role==20){
        	
        	if($type=="age" || $type=="caste" || $type=="inside_state" 
        			|| $type=="cci" || $type=="cmrf_transaction" || $type=="child_cumulative" 
        			|| $type=="cwc_working_status" || $type=="due_for_transfer" || $type=="education" ||
        			$type=="order_after_production" || $type=="rescued_child" || $type=="outside_state"){
        		       
        				
        	?>


        
        $('tr:last-child td:nth-child(1)').css('color','white');

        <?php }}?>

        <?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 || $role==13 || $role==20){
        	
        	if($type=="Rehabilitation"){
        		       
        		if($sub_rehab=="Labour"|| $sub_rehab=="cm_relief" ||$sub_rehab=="Educational"||$sub_rehab=="Rural"||$sub_rehab=="Urban"||$sub_rehab=="Revenue"||$sub_rehab=="Health"
        				||$sub_rehab=="sc_st"||$sub_rehab=="food" || $sub_rehab=="Minority" || $sub_rehab=="Social"){
        	?>



        	 $('tr:last-child td:nth-child(1)').css('color','white');
             


        	<?php }}}?>

    }
    //tab_text=tab_text+"</tr>";
    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
    
    
    
    //tab_text1= tab_text.lastIndexOf(tab_text);
    //var n = tab_text.lastIndexOf(39);
     //alert(n);
     //$( "tab_text" ).last().addClass( "highlight" );
    
	//tab_text1= tab_text.replace('39',''); // reomves input params

	
	//tab_text=tab_text.replace(new RegExp("/", '39'));
	//tab_text=$( "<table>" ).last().css( "background-color", "red" );
   

    
	console.log(tab_text);    
    var ua = window.navigator.userAgent;
   var msie = ua.indexOf("MSIE "); 

   if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
  {
       txtArea1.document.open("txt/html","replace");
       txtArea1.document.write(tab_text);
       txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"gridTableData.xls");
   }  
   else                 //other browser not tested on IE 11
//         sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
   //code add by poojashree 
   //for naming excel sheet for mis report
        var link = document.createElement("a");
link.download = type1+".xls";
link.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tab_text);
link.click();
    
}
$(document).ready(function(){
	$(".button-excel").closest('.dt-button').on("click",function(e){
		var type=$("#type").val();
		var rehabilitation_section=$("#rehabilitation_section").val();
		//alert(rehabilitation_section);
		 var to_date=$("#to_dt22").val();
		var frm_date=$("#from_dt22").val();
		fnExcelReport("table_export",type,to_date,frm_date,rehabilitation_section);
	});
	
});



</script>
