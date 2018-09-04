<?php //echo $type1;?>
<?php //print_r($details_state_transfer_need); ?>
<style> 
.pdf_export thead tr
{
background-color:#355675!important;
color:#fff !important;
}
.set-height{
font-size:15px;
margin-top:30px !important;
}
</style>
<div class="row" >
  <!-------------------------------start of the table-------------------------------------------------->
   <h5 style="text-align:center;font-weight:bold;"> <?php 
		   if($type1=="outside-details") {
		   	echo "<div class='set-height'>Outside State Child Details</div>";
		   }
		  else if($type=="inside-details") {echo "<h2>Within State Child Details</h2>";
		   }
		   else if($type1=="cci-details") {echo "<h2>Children Sent To CCI Details</h2>" ;}
		  else if($type=="CMRF_transaction_details"){ echo "<h2>CMRF Transaction Details</h2>";}
		  else if($type1=="report_deatails_order_after_production") {echo "<h2>Report Details Order After Production</h2>";}
		  else if($type1=="rehabilation_lrd"){ echo "<h2> Labour Resource Department</h2>";}
		  else if($type=="rehibilation_cmrf_relief"){ echo "<h2>CM Relief Fund</h2>";}
		  else if($type=="rehabilation_of_lrd2"){ echo "<h2>Labour Resource Department</h2>";}
		  else if($type=="rehabilation_of_lrd1"){ echo "<h2>Labour Resource Department</h2>";}
		  else if($type1=="Middle_Man_List"){ echo "<h2>Middle Men List</h2>";}
		  else if($type1=="List_of_own_cwc_member"){ echo "<h2>List Of Own CWC Member</h2>";}
		  else if($type1=="List_of_other_cwc_member"){ echo "<h2>List Of Other CWC Member</h2>";}
		  else if($type1=="Final_Order"){ echo "<h2> Final Order</h2>";}
		  else if($type1=="CMRF_Transaction_Details"){ echo "<h2>CMRF Transaction Details</h2>";}
		  else if($type1=="report_deatails_rescued_child"){ echo "<h2>Report Details Rescued Child</h2>";}
		  else if($type1=="district_wise_details_list_of_children"){ echo "<h2>District Wise Details List Of Children</h2>";}
		  else if($typee=="JLC"){ echo "<h2> JLC Communication</h2>";}
		  else if($typee=="ALC"){ echo "<h2> ALC Communication</h2>";}
		  else if($typee=="DLC"){ echo "<h2> DLC Communication</h2>";}
		  else if($typee=="LC"){ echo "<h2> LC Communication</h2>";}
		  else if($type1=="no_of_children_need_to_transfer"){ echo "<h2>No Of Children Need To Transfer To Other District</h2>";}
		  else if($type1=="no_of_children_need_to_transfer_from"){ echo "<h2>No Of Children Need To Transfer From Other District</h2>";}
		  else if($type1=="forward_to_cwc"){ echo "<h2>No Of Children Need To Forwarded To CWC</h2>";}
		  else if($type1=="no_of_children_need_to_transfer_state"){ echo "<h2>No Of Children Need To Tranfer To Other State</h2>";}
		  else if($type1=="no_of_children_sent_transfer_state"){ echo "<h2>No Of Children  Transferred To Other State</h2>";}
		  
		  
		  else if($type1=="cwc_working_status"){ echo "<h2>No Of Children Need To Progress</h2>";}
		  else if($typee==""){ echo "<h2> LC Communication</h2>";}
		 
		  
					?>
				</h5>
				
		<div class="col-md-3"></div>
		<div class="col-md-6 ">
		<div class="col-md-6 "> <p style="text-align:center;">From:<?php echo $from;?> To: <?php echo $to;?></p></div>
	<?php 	if(!$type1=="Middle_Man_List" || !$type1=="Final_Order" || !$type1=="CMRF_Transaction_Details" || !$type1=="Communication" || !$type1=="List_of_own_cwc_member"){ ?>
		
	<?php } ?>	
	

		<div class="col-md-3"></div>	
	<div class="col-md-12 chat_area pdf_export" id="child_table">
		  

		<table  class="display table table-bordered" style="border-collapse: collapse;" border="1" cellspacing="0"  width="100%" id="table_export">
		<?php if($type1=="outside-details"){?>
			<thead >
				<tr >
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="color:#FFF;">Child Id</th>
					<th style="color:#FFF;">Child Name</th>
					<th style="color:#FFF;">Child District</th>
					<th style="color:#FFF;">Father Name</th>
					<th style="color:#FFF;">Rescued Date</th>
					<th style="color:#FFF;">Postal Address</th>
					
				</tr>
			</thead>
			<tbody>
			<?php if($outside_state_detils){ $i=1;foreach($outside_state_detils as $row){
				if($row['district']){
					
					$district=",".$row['district'] ;
				}
				
				if($row['block']){
					
					$block=",".$row['block'] ;
				}
				
				if($row['pincode']){
					
					$pincode=",".$row['pincode'] ;
				}
				
				if($row['police_station']){
					
					$police_station=",".$row['police_station'] ;
				}
				
				if($row['panchyat_name']){
					
					$panchyat_name=",".$row['panchyat_name'] ;
				}
				?>
				
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;width:20%"><?php echo $row['idate_of_rescue'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] .$panchyat_name.$police_station.$block.$district.$pincode;?></td>
				
				

			<?php $i++;}}?>

		<?php }else if($type=="inside-details"){?>
		
		<thead >
				<tr >
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="color:#FFF;">Child Id</th>
					<th style="color:#FFF;">Child Name</th>
					<th style="color:#FFF;">Father Name</th>
					<th style="color:#FFF;">Rescued Date</th>
					<th style="color:#FFF;">Postal Address</th>
					
				</tr>
			</thead>
		<tbody>
		<?php if($inside_state_detils){ $i=1;foreach($inside_state_detils as $row){?>
          <?php   // echo"<pre>";print_r($inside_state_detils);echo"</pre>";  
          
                   if($row['district']){
					
					$district=",".$row['district'] ;
				}
				
				if($row['block']){
					
					$block=",".$row['block'] ;
				}
				
				if($row['pincode']){
					
					$pincode=",".$row['pincode'] ;
				}
				
				if($row['police_station']){
					
					$police_station=",".$row['police_station'] ;
				}
				
				if($row['panchyat_name']){
					
					$panchyat_name=",".$row['panchyat_name'] ;
				}
				?>
          
          
				<tr>
				<th style="text-align:center;"><?php echo $i;?></th>
				<th style="text-align:center;"><?php  echo $row['child_id'] ;?></th>
				<th style="text-align:center;"><?php echo $row['child_name'] ;?></th>
				<th style="text-align:center;"><?php echo $row['father_name'] ;?></th>
				<th style="text-align:center;"><?php echo $row['idate_of_rescue'] ;?></th>
				<th style="text-align:center;"><?php echo $row['postal_address'] .$panchyat_name.$police_station.$block.$district.$pincode ; ?></th>
				</tr>


			<?php $i++;}}?>
		
		
		<?php }else if($type1=="cci-details"){?>
		<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;color:#fff;">Child Name</th>
					<th style="text-align:center;color:#fff;">Father Name</th>
					<th style="text-align:center;color:#fff;">Rescued Date</th>
					<th style="text-align:center;color:#fff;">Postal Address</th>
				</tr>
			</thead>
			<tbody>
			<?php if($inside_cci_detils){ $i=1;foreach($inside_cci_detils as $row){?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;width:20%"><?php echo $row['idate_of_rescue'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] .$row['panchyat_name'].$row['police_station'].$row['block'].$row['district'].$row['pincode'] ;?></td>
				
				
				
			<?php $i++;}}?>
		
		
		
		
		<?php }else if($type=="CMRF_transaction_details"){?>
		<tr>
			<th class="table_td_width" style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;">
				Sl. No.
           	</th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>District Name</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Date of demand raised by DM </div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Demand raised letter no</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>No. of CL for whom demand raised</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Amount Raised</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Date of demand released</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Letter no. of demand released</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>No. of CL for whom demand released</div></th>
			<th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Amount Released</div></th>
			<!--  <th><div>No. of CL due for whom demand not released</div></th>-->
			
			
	  
		</tr>
	</thead>
	<tbody>
		<?php
		$counter=1;
		foreach($cmrf_transaction_data as $row):

		?>
		<tr>
			<td class="table_td_width" style="text-align:center;">
           		<?php echo $counter++;?>
           	</td>
			<td style="text-align:center;">

					<?php echo $row['area_name'];?>

           </td>
		  <td style="text-align:center;"><?php echo $row['dr_date'];?></td>
			<td style="text-align:center;"><?php echo $row['dr_letter_no'];?>
                    </td>
			<td style="text-align:center;"><?php echo $row['dr_cl_no'];	?> </td>
			<td style="text-align:center;"><?php echo $row['dr_amount'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_date'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_letter_no'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_cl_no'];	?> </td>
				
			<td style="text-align:center;"><?php echo $row['drel_amount'];	?> </td>
	      <!-- <td><?php //echo $row['dr_amount']-$row['drel_amount'];	?> </td>-->
			
			
		</tr>
		<?php endforeach;?>
		
		
		<?php }else if($type1=="report_deatails_order_after_production"){?>
		
		<?php  if($type==Parents){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;width:20%;color:#fff;">Child Name</th>
					<th style="text-align:center;width:20%;color:#fff;">Name of the parents</th>
					<th style="text-align:center;width:20%;color:#fff;">Parent Address</th>
					<th style="text-align:center;width:20%;color:#fff;">Date</th>
				</tr>
			</thead>
			<tbody>
			<?php   if($details_order_after_production){ $i=1;foreach($details_order_after_production as $row){?>
				<tr>
				<td style="text-align:center;><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['parents_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['parent_address'] ;?></td>
				<td style="text-align:center;"><?php echo $row['parent_date'];?></td>
				</tr>		
			<?php $i++;}}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>
		</tbody>
		<?php }else if($type==cci){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;width:20%;color:#fff;">Child Name</th>
					<th style="text-align:center;width:20%;color:#fff;">Name of the cci</th>
					<th style="text-align:center;width:20%;color:#fff;">cci Address</th>
					<th style="text-align:center;width:20%;color:#fff;">Date</th>
				</tr>
			</thead>
			<tbody>
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php
				echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php 
				
				$child_dist2 = $this->db->select('*')->where('id',$row['ccis_name'])->get('cci_area')->result_array();
				//print_r($child_dist2[0]);
				foreach($child_dist2 as $crow21):
				?>
                       
						<?php echo $crow21['area_name']; ?>
                        <?php
                              endforeach;
                         ?>
			
				</td>
				<td style="text-align:center;"><?php echo $row['cci_address'] ;?></td>
				<td style="text-align:center;"><?php echo $row['cci_date'];?></td>
				
				</tr>
				
			<?php $i++;}}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>

			
		
		
		<?php }else if($type==fit_person){?>
		
		
			<thead>
				<tr>
				     <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;width:20%;color:#fff;">Child Name</th>
					<th style="text-align:center;width:20%;color:#fff;">Name of the Fit Person</th>
					<th style="text-align:center;width:20%;color:#fff;">Fit Person Address</th>
					<th style="text-align:center;width:20%;color:#fff;">Date</th>
				</tr>
			</thead>
			
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['fitperson_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['fitperson_address'] ;?></td>
				<td style="text-align:center;"><?php echo $row['fitperson_date'];?></td>
				
				</tr>
				
			<?php $i++;}}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>

			
		
		
		
		<?php }else if($type==fit_institution){?>
		
		
		
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;width:20%;color:#fff;">Child Name</th>
					<th style="text-align:center;width:20%;color:#fff;">Name of the Fit facilityn</th>
					<th style="text-align:center;width:20%;color:#fff;">Fit facility Address</th>
					<th style="text-align:center;width:20%;color:#fff;">Date</th>
				</tr>
			</thead>
			
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['fitinstitution_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['fitinstitution_address'] ;?></td>
				<td style="text-align:center;"><?php echo $row['fitinstitution_date'];?></td>
				
				</tr>
				
			<?php $i++;}}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>

			
		
		
		
		
		<?php }else if($type==otherplace){?>
		
		
		
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;width:20%;color:#fff;">Child Name</th>
					<th style="text-align:center;width:20%;color:#fff;">Name of the otherplace</th>
					<th style="text-align:center;width:20%;color:#fff;">otherplace Address</th>
					<th style="text-align:center;width:20%;color:#fff;">Date</th>
				</tr>
			</thead>
			
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['otherplace_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['otherplace_address'] ;?></td>
				<td style="text-align:center;"><?php echo $row['otherplace_date'];?></td>
				
				</tr>
				
			<?php $i++;}}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>

			</tbody>
		<?php }?>
		
		
		<?php }else if($type1=="rehabilation_lrd"){?>
		
		<tr>
      <th class="table_td_width" style="background-color:rgb(53, 86, 117);color:#fff; text-align:center;">Sl. No.</th>
      <th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Child ID</div></th>
	  <th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Child Name</div></th>
     
      <th style="background-color:rgb(53, 86, 117);color:#fff;text-align:center;"><div>Rs.<?php if($type==0){echo "1800"; }else{echo "3000";}?> Package	</div></th>
     
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($lrd_val as $row):?>
   <tr>
    <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
    <td style="text-align:center;"><?php echo $row['child_id'];?></td>
	 <td style="text-align:center;"><?php echo $row['child_name'];?></td>
    
    </td>
    <td style="text-align:center;"><?php 	echo $row['package'];	?>
    
    </td>
  </tr>
  <?php

		endforeach;?>
		
		
		<?php }if($type=="rehibilation_cmrf_relief"){?>
		<thead>
   
      <tr>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;" class="table_td_width">Sl. No.</th>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Child ID</div></th>
	  <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Child Name</div></th>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Physically Verified</div></th>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Eligible For CM Relief Fund</div></th>
       <?php if($cond_val=="No"){ ?>
      <th style="color:#fff;background-color:rgb(53, 86, 117);width:20%;text-align:center;"><div>Reason</div></th>
        <?php }?>
    </tr> 
   
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($cm_relief_data as $row):?>
 
      <tr>
    <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
    <td style="text-align:center;"><?php echo $row['child_id'];?></td>
	 <td  style="text-align:center;"><?php echo $row['child_name'];?></td>
    <td  style="text-align:center;"><?php echo $row['physically_verified'];?>
    </td>
    <td  style="text-align:center;"><?php 	echo $row['eligible_cm_fund'];	?>
    
    <?php if($cond_val=="No"){ ?>
    <td  style="text-align:center;"><?php 	echo $row['reason_no'];	?>
    <?php }?>
    </td>
  </tr>
  <?php

		endforeach;?>
		
		<?php }else if($type=="rehabilation_of_lrd1"){?>
		 <thead>
    <tr>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;" class="table_td_width">Sl. No.</th>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Child ID</div></th>
	  <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Child Name</div></th>
     
      <th style="color:#fff;"><div>Rs 5000 Deposited DCWRA</div></th>
     
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($lrd_val as $row):?>
   <tr>
    <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
    <td style="text-align:center;"><?php echo $row['child_id'];?></td>
	 <td style="text-align:center;"><?php echo $row['child_name'];?></td>
    
    </td>
    <td style="text-align:center;"><?php 	echo $row['deposited'];	?>
    
    </td>
  </tr>
  <?php

		endforeach;?>
		
		<?php }else if($type=="rehabilation_of_lrd2"){?>
		<thead>
    <tr>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;" class="table_td_width">Sl. No.</th>
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Child ID</div></th>
	  <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Child Name</div></th>
     
      <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>Rehabilitation fund Rs. 20,000</div></th>
     
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($lrd_val as $row):?>
   <tr>
    <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
    <td style="text-align:center;"><?php echo $row['child_id'];?></td>
	 <td style="text-align:center;"><?php echo $row['child_name'];?></td>
    
    </td>
    <td style="text-align:center;"><?php 	echo $row['interest_of_rehabilitation'];	?>
    
    </td>
  </tr>
  <?php

		endforeach;?>
		
		<?php } else if($type1=="Middle_Man_List"){?>
		
		<thead>
		<tr>
			<th style="width:50px;color:#fff;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Name');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Aliases');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('address');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Contact_Number');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Other_Details');?></div></th>
			

		</tr>
	</thead>
	<tbody>
	<?php
	$counter=1;
		foreach($data_list as $row):
		
		?>
		<tr>
			<td style="width:30px;text-align:center;">
           		<?php echo $counter++;?>
           	</td>
			<td style="text-align:center;"><?php echo $row['name'];?></td>
			<td style="text-align:center;"><?php echo $row['alias'];?></td>
			<td style="text-align:center;"><?php echo $row['address'];?></td>
			<td style="text-align:center;"><?php echo $row['contact'];?></td>
			<td style="text-align:center;"><?php echo $row['other_details'];?></td>
		</tr>
		<?php endforeach;?>
		
		<?php }else if($type1=="List_of_own_cwc_member"){?>
		
		<thead>
		<tr>
			<th style="width:50px;color:#fff;background-color:rgb(53, 86, 117);text-align:center;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
           	<!-- <th><div><?php echo get_phrase('Photo');?></div></th>-->
           	<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Designation');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Name');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Age');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Professional Qualification');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Address');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Contact');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Joining Date');?></div></th>
			
			
			

		</tr>
	</thead>
	<tbody>
	<?php
	$counter=1;
		foreach($data_list as $row):
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<!-- <td><?php /* if (file_exists("./uploads/middle_men/".$row['middlemen_id'] .'.jpg')) {
				echo '<img src="'."./uploads/middle_men/".$row['middlemen_id'].'.jpg" width="150" height="100" />';
			}else{
				echo '<img src="'.$default
				.'" width="150" height="100" />';
			} */ ?></td>-->
			<?php $degn_id=$row['desg_id'];?>
			
			
			<?php
			  $qry2 = $this->db->get_where('designation_of_cwc',array('id'=>$row['desg_id']))->result_array();
			  foreach($qry2 as $dst):
			  $stat=$dst['name_of_designation'];
			  endforeach;
			?>
			
			
			
			<td><?php echo "<b>".$stat."</b>";?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['age'];?></td>
			<td><?php echo $row['professional_qualification'];?></td>
			<td><?php echo $row['personal_address'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td><?php echo $row['joining_date'];?></td>
			
			
		</tr>
		<?php endforeach;?>
		
		
		<?php }else if($type1=='List_of_other_cwc_member'){?>
		
		<thead>
		<tr>
			<th style="width:50px;color:#fff;background-color:rgb(53, 86, 117);text-align:center;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
           	<!-- <th><div><?php echo get_phrase('Photo');?></div></th>-->
           	<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Designation');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Name');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Age');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Professional Qualification');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Address');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Contact');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('Joining Date');?></div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div><?php echo get_phrase('District Name');?></div></th>
			

		</tr>
	</thead>
	<tbody>
	<?php
	$counter=1;
		foreach($data_list as $row):
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<!-- <td><?php /* if (file_exists("./uploads/middle_men/".$row['middlemen_id'] .'.jpg')) {
				echo '<img src="'."./uploads/middle_men/".$row['middlemen_id'].'.jpg" width="150" height="100" />';
			}else{
				echo '<img src="'.$default
				.'" width="150" height="100" />';
			} */ ?></td>-->
			<?php $degn_id=$row['desg_id'];?>
			
			
			<?php
			  $qry2 = $this->db->get_where('designation_of_cwc',array('id'=>$row['desg_id']))->result_array();
			  foreach($qry2 as $dst):
			  $stat=$dst['name_of_designation'];
			  endforeach;
			?>
			
			<?php $staff_id=$row['staff_id'];?>
			
			<?php
			  $qry3 = $this->db->get_where('staff',array('staff_id'=>$row['staff_id']))->result_array();
			  //print_r($qry3);
			  foreach($qry3 as $dst):
			  $stat1=$dst['district_id'];
			  $qry4 = $this->db->get_where('child_area_detail',array('area_id'=>$stat1))->result_array();
			  //print_r($qry4);
			  foreach($qry4 as $dst):
			  $stat2=$dst['area_name'];
			  endforeach;
			  
			  endforeach;
			?>
			
			<td><?php echo "<b>".$stat."</b>";?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['age'];?></td>
			<td><?php echo $row['professional_qualification'];?></td>
			<td><?php echo $row['personal_address'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td><?php echo $row['joining_date'];?></td>
			<td><?php echo $stat2;?></td>
			
		</tr>
		<?php endforeach;?>

	</tbody>
		
	
		<?php }else if($type1=="Final_Order"){?>
		
		<thead>
    <tr>
      <th class="table_td_width" style="color:#fff;text-align:center;">Sl. No.</th>
      <th style="color:#fff;text-align:center;"><div>Child ID</div></th>
      <th style="color:#fff;text-align:center;"><div>Child Name</div></th>
      <th style="color:#fff;text-align:center;"><div>Father Name</div></th>
      <th style="color:#fff;text-align:center;"><div>Produced by</div></th>
     
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($final_order_data as $row):
		?>
    <tr>
      <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
      <td style="text-align:center;"><?php echo $row['child_id'];?></td>
      <td style="text-align:center;"><?php 	echo $row['child_name'];	?></td>
      <td style="text-align:center;"><?php echo $row['father_name']; ?> </td>
      <td style="text-align:center;"><?php   echo $row['produced'];?></td>
      
    </tr>
    <?php

		endforeach;?>
		
		<?php } else if($type1=="CMRF_Transaction_Details"){?>
		
		<thead>
		<tr>
			<th class="table_td_width" style="color:#FFF;">
				Sl. No.
           	</th>
			<th style="color:#FFF;text-align:center;"><div>District Name</div></th>
			<th style="color:#FFF;width:20%;text-align:center;"><div>Date of demand raised by DM </div></th>
			<th style="color:#FFF;text-align:center;"><div>Demand raised letter no</div></th>
			<th style="color:#FFF;text-align:center;"><div>No. of CL for whom demand raised</div></th>
			<th style="color:#FFF;text-align:center;"><div>Amount Raised</div></th>
			<th style="color:#FFF;width:20%;text-align:center;"><div>Date of demand released</div></th>
			<th style="color:#FFF;text-align:center;"><div>Letter no. of demand released</div></th>
			<th style="color:#FFF;text-align:center;"><div>No. of CL for whom demand released</div></th>
			<th style="color:#FFF;text-align:center;"><div>Amount Released</div></th>
			<!--  <th><div>No. of CL due for whom demand not released</div></th>-->
			<!-- <th><div>Action</div></th>-->
			
	  
		</tr>
	</thead>
	<tbody>
		<?php
		$counter=1;
		foreach($cmrf_transaction as $row):

		?>
		<tr>
			<td class="table_td_width" style="text-align:center;">
           		<?php echo $counter++;?>
           	</td>
			<td style="text-align:center;">

					<?php echo $row['area_name'];?>

           </td>
		   <td style="width:20%;text-align:center;"><?php echo $row['dr_date'];?></td>
			<td><?php echo $row['dr_letter_no'];?>
                    </td>
			<td style="text-align:center;"><?php echo $row['dr_cl_no'];	?> </td>
			<td style="text-align:center;"><?php echo $row['dr_amount'];	?> </td>
			<td style="width:20%;text-align:center;"><?php echo $row['drel_date'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_letter_no'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_cl_no'];	?> </td>
				
			<td style="text-align:center;"><?php echo $row['drel_amount'];	?> </td>
	      <!-- <td><?php //echo $row['dr_amount']-$row['drel_amount'];	?> </td>-->
			<!--  <td> <a class="btn btn-info tooltip-primary edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php //	echo $edit_url.$row['cmrf_id'];?>" > <i class="entypo-pencil"></i> </a>
			-->
	  
			
		</tr>
		<?php endforeach;?>
		
		
		
		
		<?php }else if($type1=="Communication"){?>

<tr>
      <th class="table_td_width" style="text-align:center;"> Sl No</th>
	  <?php if($roles==10 || $roles==21 || $roles==12){?>
      <th style="text-align:center;"><div>Designation</div></th>
	  <th style="text-align:center;"><div>District</div></th>
	  <?php }  ?>
      <th style="text-align:center;"><div>Message</div></th>
	 <th style="text-align:center;"><div>child Id</div></th>
      <th style="text-align:center;"><div>Date Of communication</div></th>
      <th style="text-align:center;"><div>Reply Message</div></th>
	 
     <?php
     if ($roles==10 || $roles==21 || $roles==12 ) {?>
     
	 <?php }?>
	  <?php
     if ($roles==2 ) {?>
     
	 <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php 
    $counter = 1;
   //print_r($communication);
    foreach($communication as $row):

			?>
    <tr>
      <td class="table_td_width" style="text-align:center"><?php echo $counter++;?> </td>
	  <?php if($roles==10 || $roles==21 || $roles==12){?>
      <td style="text-align:center;"><?php echo $row['role_name'] ?></td>
	  <td style="text-align:center;"><?php echo $row['area_name'] ?></td>
	  <?php }  ?>
      <td style="text-align:center;"><?php echo $row['massage'] ?></td>
	  <td style="text-align:center;"><?php echo $row['child_id'] ?></td>
      <td style="text-align:center;"><?php echo $row['created'] ?></td>
        <td style="text-align:center;"><?php echo $row['reply_message']?></td>
	    
	 
	 
	
    </tr>
    <?php

		endforeach;?>







<?php }else if($type1=="no_of_children_need_to_transfer"){?>

<thead>
				<tr>
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;color:#FFF;">Child Id</th>
					<th style="text-align:center;width:20%;color:#FFF;">Child Name</th>
					<th style="text-align:center;width:20%;color:#FFF;">Name of Parent</th>
					<th style="text-align:center;width:20%;color:#FFF;">Address</th>
					
				</tr>
			</thead>
			
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){
			
				
				
				?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] ;?></td>
			
				
				</tr>
				
			<?php $i++;}?>
			
			<?php }}else if($type1=="no_of_children_need_to_transfer_from"){?>
			
			<thead>
				<tr>
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;color:#FFF;">Child Id</th>
					<th style="text-align:center;width:20%;color:#FFF;">Child Name</th>
					<th style="text-align:center;width:20%;color:#FFF;">Name of Parent</th>
					<th style="text-align:center;width:20%;color:#FFF;">Address</th>
					
				</tr>
			</thead>
			
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){
			
				
				
				?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] ;?></td>
			
				
				</tr>
				
			<?php $i++;}}
			
			
			
			
			
			 }else if($type1=="forward_to_cwc"){?>
			 
			 <thead>
				<tr>
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;color:#FFF;">Child Id</th>
					<th style="text-align:center;width:20%;color:#FFF;">Child Name</th>
					<th style="text-align:center;width:20%;color:#FFF;">Name of Parent</th>
					<th style="text-align:center;width:20%;color:#FFF;">Address</th>
					
				</tr>
			</thead>
			
			<?php if($details_order_after_production){$i=1;foreach($details_order_after_production as $row){
			
				
				
				?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] ;?></td>
			
				
				</tr>
				
			<?php $i++;}}
			 
			 
		 }else if($type1=="report_deatails_rescued_child"){?>
		 
		 <thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;color:#fff;">Child Name</th>
					<th style="text-align:center;color:#fff;">Father Name</th>
					<th style="text-align:center;width:20%;color:#fff;">Rescued Date</th>
					<th style="text-align:center;color:#fff;">Postal Address</th>
				</tr>
			</thead>
			<tbody>
			<?php  if($child_rescued_district){ $i=1;foreach($child_rescued_district as $row){?>
				
				
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['idate_of_rescue'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'];?></td>
				</tr>
				
				
			<?php $i++;}}
		 
		 }else if($type1=="district_wise_details_list_of_children"){?>
		 
		 <thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Login District</th>
					<th style="text-align:center;color:#fff;">Entered By</th>
					<th style="text-align:center;color:#fff;">Child Name</th>
					<th style="text-align:center;color:#fff;">Father's Name</th>
					<th style="text-align:center;color:#fff;">Sex</th>
					<th style="text-align:center;color:#fff;">Age/DOB</th>
					<th style="text-align:center;color:#fff;">Postal Address</th>
					<th style="text-align:center;color:#fff;">Child District</th>
					<th style="text-align:center;color:#fff;">Child Block</th>
					<th style="text-align:center;color:#fff;">Date and Time Of Rescue</th>
					<th style="text-align:center;color:#fff;">Bank Name And Branch</th>
					<th style="text-align:center;color:#fff;">Account No And IFSC Code</th>
				</tr>
			</thead>
			<tbody>
			<?php  if($child_rescued_district_manual){ $i=1;foreach($child_rescued_district_manual as $row){
				$child_id=$row['child_id'] ;
				$bank_query=mysql_fetch_assoc(mysql_query("select * from bank_account_details where child_id='$child_id' ")) ;
				?>
				
				
				
				<tr>
				<td style="text-align:center;" ><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['login_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['entered_by'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['sex'];?></td>
				<td style="text-align:center;"><?php echo $row['year'];echo $row['dob']?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'];?></td>
				<td style="text-align:center;"><?php echo $row['child_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_block'] ;?></td>
				<td style="text-align:center;"><?php echo $row['date_of_rescue'] ;?></td>
				 <td style="text-align:center;"><?php echo $bank_query['bank_name'] ;?></td>
				<td style="text-align:center;"><?php echo $bank_query['acc_no'] ;?></td>
				
				
				</tr>
				
				
			<?php $i++;}}
		  } else if($type1=="cwc_working_status"){?>
		 
			 <thead>
            <tr class="report_head">
			<th style="text-align:center;color:#000;">SL No</th>
             <th style="text-align:center;color:#000;">District Name</th>
			<th style="text-align:center;color:#000;">CWC Name</th>
			<th style="text-align:center;color:#000;">Name Of Parent</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Processing By CWC</th>
            </tr>
			</thead>
			 <?php
         $i=1;
    	$k = 0;
		foreach($percentage as $row):
			$complete = round(100 - $row['percentage']);
		?>				
				<tr>
					<td style="text-align:center;"><?php echo $i;?></td>
					<td style="text-align:center;"><?php echo $row['id'] ;?></td>
					<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
					<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
					<td style="text-align:center;">
					 <div class="progress">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
						  aria-valuemin="0" aria-valuemax="100" style="width:<?=$complete?>%">
						    <?=$complete?>% 
						  </div>
						</div>
					</td>
				</tr>				
			 <?php  $i++;
				endforeach;
		  }else if($type1=="no_of_children_need_to_transfer_state"){?>
		 <thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;width:20%;color:#000;">Child Name</th>
					<th style="text-align:center;width:20%;color:#000;">Name of Parent</th>
					<th style="text-align:center;width:20%;color:#000;">Address</th>
					
					
				</tr>
			</thead>
			
			<?php if($details_state_transfer_need){$i=1;foreach($details_state_transfer_need as $row){
			
				
				
				?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] ;?></td>
			
				
				</tr>
				
			<?php $i++;}}}else if($type1=="no_of_children_sent_transfer_state"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;width:20%;color:#000;">Child Name</th>
					<th style="text-align:center;width:20%;color:#000;">Name of Parent</th>
					<th style="text-align:center;width:20%;color:#000;">Address</th>
					
					
				</tr>
			</thead>
			
			<?php if($details_state_transfer_sent){$i=1;foreach($details_state_transfer_sent as $row){
			
				
				
				?>
				
				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'] ;?></td>
			
				
				</tr>
				
			<?php $i++;}}}?>
	
			</tbody>

		</table>
	</div>

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
</section>