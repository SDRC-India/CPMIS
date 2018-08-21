 <?php  //echo $type1;// print_r($inside_cci_detils) ; die(); ?>
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
		  
		   	//echo "Rehabilitation";
		   
		   
		  // }
		   //else if($type=="Rehabilitation"){ echo "Rehabilitation";}
		   //if($sub_rehab=="Labour"){
					?>
				</h5>
				
		<div class="col-md-3"></div>
		<div class="col-md-6 "> <p style="text-align:center;">From:<?php echo $from;?> To: <?php echo $to;?></p></div>
		<div class="col-md-3"></div>	
	<div class="col-md-12 chat_area pdf_export" id="child_table">
		  

		<table  class="display table table-bordered" style="border-collapse: collapse;" border="1" cellspacing="0"  width="100%" id="table_export">
		<?php if($type1=="outside-details"){?>
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
			<th class="table_td_width">
				Sl. No.
           	</th>
			<th><div>District Name</div></th>
			<th><div>Date of demand raised by DM </div></th>
			<th><div>Demand raised letter no</div></th>
			<th><div>No. of CL for whom demand raised</div></th>
			<th><div>Amount Raised</div></th>
			<th><div>Date of demand released</div></th>
			<th><div>Letter no. of demand released</div></th>
			<th><div>No. of CL for whom demand released</div></th>
			<th><div>Amount Released</div></th>
			<!--  <th><div>No. of CL due for whom demand not released</div></th>-->
			
			
	  
		</tr>
	</thead>
	<tbody>
		<?php
		$counter=1;
		foreach($cmrf_transaction_data as $row):

		?>
		<tr>
			<td class="table_td_width">
           		<?php echo $counter++;?>
           	</td>
			<td>

					<?php echo $row['area_name'];?>

           </td>
		   <td><?php echo $row['dr_date'];?></td>
			<td><?php echo $row['dr_letter_no'];?>
                    </td>
			<td><?php echo $row['dr_cl_no'];	?> </td>
			<td><?php echo $row['dr_amount'];	?> </td>
			<td><?php echo $row['drel_date'];	?> </td>
			<td><?php echo $row['drel_letter_no'];	?> </td>
			<td><?php echo $row['drel_cl_no'];	?> </td>
				
			<td><?php echo $row['drel_amount'];	?> </td>
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
				<td><?php echo $i;?></td>
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
				<td><?php echo $i;?></td>
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
				<td><?php echo $i;?></td>
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
				<td><?php echo $i;?></td>
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
				<td><?php echo $i;?></td>
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
      <th class="table_td_width">Sl. No.</th>
      <th ><div>Child ID</div></th>
	  <th ><div>Child Name</div></th>
     
      <th><div>Rs.<?php if($type==0){echo "1800"; }else{echo "3000";}?> Package	</div></th>
     
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($lrd_val as $row):?>
   <tr>
    <td class="table_td_width"><?php echo $counter++;?> </td>
    <td><?php echo $row['child_id'];?></td>
	 <td><?php echo $row['child_name'];?></td>
    
    </td>
    <td><?php 	echo $row['package'];	?>
    
    </td>
  </tr>
  <?php

		endforeach;?>
		
		
		<?php }if($type=="rehibilation_cmrf_relief"){?>
		<thead>
    <tr>
      <th style="color:#fff;" class="table_td_width">Sl. No.</th>
      <th style="color:#fff;"><div>Child ID</div></th>
	  <th style="color:#fff;"><div>Child Name</div></th>
      <th style="color:#fff;"><div>Physically Verified</div></th>
      <th style="color:#fff;"><div>Eligible For CM Relief Fund</div></th>
      <th style="color:#fff;"><div>Amount Transferred</div></th>
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($cm_relief_data as $row):?>
   <tr>
    <td class="table_td_width"><?php echo $counter++;?> </td>
    <td><?php echo $row['child_id'];?></td>
	 <td><?php echo $row['child_name'];?></td>
    <td><?php echo $row['physically_verified'];?>
    </td>
    <td><?php 	echo $row['eligible_cm_fund'];	?>
    <td><?php 	echo $row['mtransfer_proof'];	?>
    </td>
  </tr>
  <?php

		endforeach;?>
		
		<?php }?>
             </tbody>
	
			</tbody>

		</table>
	</div>

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
</section>

