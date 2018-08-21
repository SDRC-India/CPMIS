
<style> 
.pdf_export thead tr
{
background-color:#355675!important;
color:#fff !important;
}

</style>
<div class="row">
  <!-------------------------------start of the table-------------------------------------------------->
   <h5 style="text-align:center;font-weight:bold"> <?php 
		   if($type=="entitlement_card_getnerated") {
		   	echo "Entitlement Card Generation Time Period";
		   }
		   else if($type=="investigation") {echo "Time Taken For Investigation";
		   }
		   else if($type=="inside_state") {echo "Child Rescued Within State" ;}
		   else if($type=="outside_state"){ echo "Child Rescued Outside State";}
		   else if($type=="cci") {echo "Children Sent to CCI";}
		   else if($type=="system_access"){ echo "System Access";}
		   else if($type=="last_login"){ echo "Last Login Time Period";}
		   else if($type=="emp_amt"){ echo "Last Login Time Period";}
		   else if($type=="cwc_not_filling"){ echo "Status Of Additional Details";}
		   else if($type=="cwc_delay"){ echo "Delay In CWC Order Passing";}
		   else if($type=="middle_men"){ echo "Middle Men/Agents";}
		   else if($type=="rescued_repeatedly"){ echo "Child Rescued Repeatedly";}
		   else if($type=="lc_action" && $role==10){ echo "Action Suggested By LC";}
		   else if($type=="ngo_dubbious"){ echo "Dubious NGO";}
		   else if($type=="rescued_child"){ echo "Rescued Child";}
					?>
				</h5>
		<div class="col-md-3"></div>
		<div class="col-md-6 "> <p style="text-align:center;">From:<?php echo $from;?> To: <?php echo $to;?></p></div>
		<div class="col-md-3"></div>	
	<div class="col-md-12 chat_area pdf_export" id="child_table">
		  

		<table  class="display table table-bordered" style="border-collapse: collapse;" border="1" cellspacing="0"  width="100%" id="table_export">
		<?php if($type=="entitlement_card_getnerated"){?>
			<thead >
				<tr >
					<th style="text-align:center;background-color:#bfaeae;">Child Id</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Child Name</th>
					<th style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;">Rescued Date</th>
					<th style="text-align:center;background-color:rgb(56, 94, 134);color:#FFF;">Entitilement Card Generation Date</th>
					<th style="text-align:center;background-color:rgb(15, 19, 169);color:#FFF;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<th style="text-align:center;background-color:#bfaeae;color:#FFF;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></th>
				<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;"><?php echo $row['child_name'] ;?></th>
				<th style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;"><?php echo $row['idate_of_rescue'] ;?></th>
				<th style="text-align:center; background-color:rgb(56, 94, 134);color:#FFF;"><?php echo $row['final_order_date'] ;?></th>
				<th style="text-align:center;background-color:rgb(15, 19, 169);color:#FFF;"><?php
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
                    ?></th>
				</tr>


			<?php }}?>

			</tbody>
		<?php }else if($type== "investigation"){  ?>
			<thead>
				<tr>
					<th style="text-align:center;">Child Id</th>
					<th style="text-align:center;">Child Name</th>
					<th style="text-align:center;">Date When Child Produced before CWC</th>
					<th style="text-align:center;"> Entitlement Card Generation Date</th>
					<th style="text-align:center;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
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


			<?php }}?>

			</tbody>
		<?php }else if($type== "inside_state"){ 
      
		?>
			<thead>
				<tr>
					<th style="text-align:center;">Serial No</th>
					<th style="text-align:center;"><?php if($selected_dist==NULL)
					{echo 'District';} else {if($selected_block) { echo "Panchayat Name";} else {echo "Block";}}?></th>
					<th style="text-align:center;">No of Childrens Rescued</th>
				
					
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['area_name']?></td>
				<td style="text-align:center;"><?php echo $row['count'] ;?></td>
				
			</tr>


			<?php $i++;}}?>

			</tbody>
		<?php }else if($type== "outside_state"){  ?>
			<thead>
				<tr>
					<th style="text-align:center;">Serial No</th>
					<th style="text-align:center;"><?php if($selected_state==NULL)
					{echo 'State';}  else {echo "District";}?></th>
					<th style="text-align:center;">No of Childrens Rescued</th>
					<th style="text-align:center;">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['area_name']?></td>
				<td style="text-align:center;"><?php echo $row['count'] ;?></td>
				
			</tr>


			<?php $i++;}}?>

		<?php }else if($type== "cci"){  ?>
			<thead>
				<tr>
					<th style="text-align:center;">Serial No</th>
					<th style="text-align:center;">CCI Name</th>
					<th style="text-align:center;">CCI Disrtict</th>
					<th style="text-align:center;">CCI Address</th>
					<th style="text-align:center;">No of Childrens Sent</th>
					<!--<th style="text-align:center;">Action</th>-->
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($childs_to_cci){foreach($childs_to_cci as $row){?>

				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['cci_name']?></td>
				<td style="text-align:center;"><?php echo $row['cci_dist']?></td>
				<td style="text-align:center;"><?php echo $row['cci_address']?></td>
				<td style="text-align:center;"><?php echo $row['count'] ;?></td>
				
			</tr>


			<?php $i++;}}?>


		<?php } else if($type=="system_access"){?>
			<thead>
				<tr>
					<th style="text-align:center;">User Name</th>
					<th style="text-align:center;">District</th>
					<th style="text-align:center;">No of times accessed</th>
					<th style="text-align:center;">Last accessed Date</th>
				</tr>
			</thead>
			<tbody>

			<?php

		foreach($sys_access_report as $row):
		?>
				<tr>

				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['district'];?> </td>
				  <td><?php echo $row['count'];?> </td>
				  <td><?php echo $row['last_access'];?> </td>

				</tr>
	 <?php endforeach;?>
		<?php }else if($type=="last_login"){?>
		     <thead>
				<tr>
					<th style="text-align:center;">User Name</th>
					<th style="text-align:center;">District</th>
					<th style="text-align:center;">No of times Login Into System</th>
					<th style="text-align:center;">Ip Address</th>
					<th style="text-align:center;">Last Login Date</th>
					<th style="text-align:center;">No Of Days From Last Login</th>
				</tr>
			</thead>
			<tbody>

			<?php

		foreach($last_login_report as $row):
		?>
				<tr>

				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['district'];?> </td>
				  <td><?php echo $row['count'];?> </td>
				  <td><?php echo $row['ip'];?> </td>
				  <td><?php echo $row['login_date'];?> </td>
				  <td><?php
				  $your_date = strtotime($row['login_date']);


				   $now = strtotime(date("Y-m-d"));
				   if($your_date){
					    $datediff =  $now-$your_date ;
				   }else {
					   $datediff=0;
				   }

                    echo abs(ceil($datediff / (60 * 60 * 24)));?> </td>

				</tr>
	 <?php  endforeach;?>

		<?php } else if($type=="cwc_delay"){?>
			<thead>
				<tr>
					<th style="text-align:center;">Child Id</th>
					<th style="text-align:center;">Date of Production</th>
					<th style="text-align:center;">Interim Order Passed Date</th>
					<th style="text-align:center;">Final Order Date</th>
					<th style="text-align:center;">Days taken to Pass Interim Order</th>
					<th style="text-align:center;">Days taken to Pass final Order</th>
				</tr>
			</thead>
			<tbody>

			<?php

		foreach($cwc_delay as $row):
		?>
				<tr>

				  <td ><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td>
					<td><?php if($row['date_of_production']=='0000-00-00') {echo 'NA';}else if($row['date_of_production']=="") {echo 'NA';} else {echo $row['date_of_production']; }?> </td>
					<td><?php
					if($row['fitinstitution_date']){ echo $row['fitinstitution_date'];} 
					else if($row['parent_date']){echo $row['parent_date'];}
					else if($row['cci_date']){echo $row['cci_date'];}
					else if($row['otherplace_date']){ echo $row['otherplace_date'];} 
					else if($row['fitperson_date'])
					{echo $row['fitperson_date'];}
				       else {echo 'NA';}?> </td>
				  <td><?php echo $row['final_order_date'];?> </td>
				  <td><?php 
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
				  
				  <td><?php if($row['fitinstitution_date']){ 
					 
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
	 <?php endforeach;?>
	 <?php } else if($type=="rescued_repeatedly"){?>
			<thead>
				<tr>
					<th style="text-align:center;">Child Id</th>
					<th style="text-align:center;">Child Name</th>
					<th style="text-align:center;">Father Name </th>
					<th style="text-align:center;"> Postal Address</th>
					
				</tr>
			</thead>
			<tbody>

			<?php

		foreach($rescued_repeatedly as $row):
		?>
				<tr>

				  <td ><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td></td>
				  <td ><?php echo $row['child_name'];?> </td>
				  <td><?php echo $row['father_name'];?> </td>
				  <td><?php echo $row['postal_address'];?> </td>
				 

				</tr>
	 <?php endforeach;?>
	 <?php } else if($type=="middle_men"){?>
			<thead>
				<tr>
					<th style="text-align:center;">Name</th>
					<th style="text-align:center;">Alias </th>
					<th style="text-align:center;"> Conatct No</th>
					<th style="text-align:center;"> Address</th>
					
				</tr>
			</thead>
			<tbody>

			<?php

		foreach($middle_men as $row):
		?>
				<tr>

				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['alias'];?> </td>
				  <td><?php echo $row['conatact'];?> </td>
				  <td><?php echo $row['address'];?> </td>
				 

				</tr>
	 <?php endforeach;?>
	 <?php } else if($type=="emp_amt"){?>
		     <thead>
				<tr>
					<th style="text-align:center;">Child ID</th>
					<th style="text-align:center;">Total Work Amount</th>
					<th style="text-align:center;">Amount Collected</th>
					
					
				</tr>
			</thead>
			<tbody>
			

   <?php

		foreach($amount_calculated as $row):
		?>
				<tr>

				   <td ><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td></td>
				  <td><?php echo $row['total_work'];?> </td>
				  <td><?php echo $row['amount_wages_collected'];?> </td>
				 
				 
				  
				</tr>
	 <?php  endforeach;?>
		<?php }else if($type=="lc_action"){?>
		     <thead>
				<tr>
					<th style="text-align:center;">Child ID</th>
					<th style="text-align:center;">Designation</th>
			
					<th style="text-align:center;">District</th>
					<th style="text-align:center;">Message</th>
					<th style="text-align:center;">Date Of Communication</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php

		foreach($communication as $row):
		?>
				<tr>

				  <td ><?php echo $row['child_id'];?> </td>
				  <td ><?php echo $row['role_name'];?> </td>
				  
				  <td><?php echo $row['area_name'];?> </td>
				  <td><?php echo $row['massage'];?> </td>
				  <td><?php echo $row['created'];?> </td>
				 
				 
				  
				</tr>
	 <?php  endforeach;?>
	 <?php }else if($type=="cwc_not_filling"){?>
		     <thead>
				<tr>
					<th style="text-align:center;">Child ID</th>
					<th style="text-align:center;">Data Available For</th>
					<th style="text-align:center;">Final Order Date</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
			foreach($additional_details as $row):
			?>
					<tr>

					  <td ><?php echo $row['child_id'];?></td>
					  
					  <td>
					  <?php  if($row['tables']){print_r($row['tables']);} else{ echo "NA";}?> </td>
					  
					  <td ><?php print_r($row['final_order_date']);?></td>
					 
					  
					</tr>
		 <?php  endforeach;?> 	 
		 <?php }else if($type=="ngo_dubbious"){?>
				 <thead>
					<tr>
						<th style="text-align:center;">Name of NGO</th>
						<th style="text-align:center;">Email</th>
						<th style="text-align:center;">Contact</th>
						<th style="text-align:center;">Registration Number</th>
						<th style="text-align:center;">Date of Registration</th>
						<th style="text-align:center;">Chief Of Organization</th>
					</tr>
				</thead>
				<tbody>
				
			<?php

		foreach($dubbious_ngo as $row):
		?>
				<tr>

				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['email'];?> </td>
				  <td><?php echo $row['contact'];?> </td>
				  <td><?php echo $row['regno'];?> </td>
				  <td><?php echo $row['date_reg'];?> </td>
				  <td><?php echo $row['chairman'];?> </td>
				  
				</tr>
	 <?php  endforeach; ?>

<?php }else if($type=="rescued_child"){?>
				 <thead>
					<tr>
						<th style="text-align:center;">Group Name</th>
						<th style="text-align:center;">No of Children Rescued</th>
					</tr>
				</thead>
				<tbody>
				
			<?php

		foreach($resue_child as $row):
		?>
				<tr>

				    <td ><?php echo $row['groupname'];?> </td>
				  <td><?php echo $row['newcount'];?></td>
				</tr>
	 <?php  endforeach; ?>

<?php }else if($type=="Rehabilitation"){
	
	if($sub_rehab=="Labour"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
			 <tr><td></td></tr>
            <tr class="report_head">
                <th>District Name</th>
                <th>Rs 1800 Package</th>
                <th>Rs 3000 Package</th>
	            <th>Rs 5000 Deposited DCWRA</th>
                <th>Rehabilitation fund Rs. 20,000</th>
				<th>CMRF Transfered Rs. 25000</th>
				
            </tr>
            </thead>
				<tbody>				
			<?php
	}if($sub_rehab=="cm_relief"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
                <th>District Name</th>
                <th>Physically verified</th>                
	            <th>CL eligible for CMRF</th>
	            <th>CL not eligible for CMRF</th>
	            <th>Demand Raised </th>
	            <th>Demand Received</th>
	            <th>Bank details available</th>
				<th>CMRF transferred to CL A/C</th>			
            </tr>
            </thead>
				<tbody>				
			<?php
	}
	if($sub_rehab=="Labour"){
			foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				  <td><?php echo $row['5'];?> </td>	 
				</tr>
	 <?php  endforeach; 
	}
	if($sub_rehab=="cm_relief"){
		foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				  <td><?php echo $row['5'];?> </td>
				   <td><?php echo $row['6'];?> </td>
				    <td><?php echo $row['7'];?> </td>
				 
				</tr>
	 <?php  endforeach; 
	}
	 ?>

<?php } ?>
			</tbody>

		</table>
	</div>

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
</section>

