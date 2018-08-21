
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
		   	echo "<h2>Entitlement Card Generation Time Period</h2>";
		   }
		   else if($type=="investigation") {echo "<h2>Time Taken For Investigation</h2>";
		   }
		   else if($type=="inside_state") {echo "Child Rescued Within State" ;}
		   else if($type=="order_after_production"){ echo "order_after_production";}
		   else if($type=="outside_state"){ echo "Child Rescued Outside State";}
		   else if($type=="cci") {echo "Children Sent to CCI";}
		   else if($type=="system_access"){ echo "System Access";}
		   else if($type=="last_login"){ echo "Last Login Time Period";}
		   else if($type=="emp_amt"){ echo "Collected Wage Amount";}
		   else if($type=="cwc_not_filling"){ echo "Status Of Additional Details";}
		   else if($type=="cwc_delay"){ echo "Delay In CWC Order Passing";}
		   else if($type=="middle_men"){ echo "Middle Men/Agents";}
		   else if($type=="rescued_repeatedly"){ echo "Child Rescued Repeatedly";}
		   else if($type=="lc_action" && $role==10){ echo "Action Suggested By LC";}
		   else if($type=="ngo_dubbious"){ echo "Dubious NGO";}
		   else if($type=="rescued_child"){ echo "Rescued Child";}
		   else if($type=="child_cumulative"){ echo "Cumulative Statistics";}
		   else if($type=="caste"){ echo "Category-wise Break-up";}
		   else if($type=="education"){ echo "Education-wise Break-up";}
		   else if($type=="age"){ echo "Age-wise Break-up";}
		   else if($type=="cmrf_transaction"){ echo "CMRF Transaction Details";}
		   else if($type=="Rehabilitation"){
		   	if($sub_rehab=="Labour"){
		   		
		   		echo "<h2>Rehabilitation of Labour Resource Department</h2>";
		   		
		   	}else{
		   		
		   		echo "<h2>Rehabilitation of CM Relief Fund</h2>";
		   		
		   	}
		   	//echo "Rehabilitation";
		   
		   
		   }
		   //else if($type=="Rehabilitation"){ echo "Rehabilitation";}
		   //if($sub_rehab=="Labour"){
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
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;background-color:#bfaeae;color:#FFF;">Child Id</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Child Name</th>
					<th style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;">Rescued Date</th>
					<th style="text-align:center;background-color:rgb(56, 94, 134);color:#FFF;">Entitilement Card Generation Date</th>
					<th style="text-align:center;background-color:rgb(15, 19, 169);color:#FFF;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php if($monthly_report_details){ $i=1;foreach($monthly_report_details as $row){?>

				<tr>
				<th style="text-align:center;"><?php echo $i;?></th>
				<th style="text-align:center;background-color:#bfaeae;color:#FFF;"><?php echo $row['child_id'] ;?></th>
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


			<?php $i++;}}?>

		<?php }else if($type== "investigation"){  ?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;color:#FFF;">Child Id</th>
					<th style="text-align:center;color:#FFF;">Child Name</th>
					<th style="text-align:center;color:#FFF;">Date When Child Produced before CWC</th>
					<th style="text-align:center;color:#FFF;"> Entitlement Card Generation Date</th>
					<th style="text-align:center;color:#FFF;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
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

		<?php }else if($type== "inside_state"){ 
      
		?>
			<thead>
				<tr>
					<th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;"><?php if($selected_dist==NULL)
					{echo 'District';} else {if($selected_block) { echo "Panchayat Name";} else {echo "Block";}}?></th>
					<th style="text-align:center;color:#fff;">No of Children Rescued</th>
				
					
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

		<?php }else if($type== "outside_state"){  ?>
			<thead>
				<tr>
					<th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;color:#FFF;"><?php if($selected_state==NULL)
					{echo 'State';}  else {echo "District";}?></th>
					<th style="text-align:center;color:#FFF;">No of Childrens Rescued</th>

					
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
					<th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;color:#FFF;">CCI Name</th>
					<th style="text-align:center;color:#FFF;">CCI Disrtict</th>
					<th style="text-align:center;color:#FFF;">No of Childrens Sent</th>
					<!--<th style="text-align:center;">Action</th>-->
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($childs_to_cci){foreach($childs_to_cci as $row){?>

				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['cci_name']?></td>
				<td style="text-align:center;"><?php echo $row['cci_dist']?></td>
				<td style="text-align:center;"><?php echo $row['count'] ;?></td>
				
			</tr>


			<?php $i++;}}?>


		<?php } else if($type=="system_access"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">User Name</th>
					<th style="text-align:center;color:#fff;">District</th>
					<th style="text-align:center;color:#fff;">No of times accessed</th>
					<th style="text-align:center;color:#fff;">Last accessed Date</th>
				</tr>
			</thead>
			<tbody>

			<?php
		$i=1;
		foreach($sys_access_report as $row):
		?>
				<tr>
                  <td><?php echo $i;?></td>
				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['district'];?> </td>
				  <td><?php echo $row['count'];?> </td>
				  <td><?php echo $row['last_access'];?> </td>

				</tr>
	 <?php $i++;endforeach;?>
		<?php }else if($type=="last_login"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">User Name</th>
					<th style="text-align:center;color:#fff;">District</th>
					<th style="text-align:center;color:#fff;">No of times Login Into System</th>
					<th style="text-align:center;color:#fff;">Ip Address</th>
					<th style="text-align:center;color:#fff;">Last Login Date</th>
					<th style="text-align:center;color:#fff;">No Of Days From Last Login</th>
				</tr>
			</thead>
			<tbody>

			<?php
        $i=1;
		foreach($last_login_report as $row):
		?>
				<tr>
                  <td><?php echo $i; ?></td>
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
	 <?php $i++; endforeach;?>

		<?php } else if($type=="cwc_delay"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;color:#fff;">Date of Production</th>
					<th style="text-align:center;color:#fff;">Interim Order Passed Date</th>
					<th style="text-align:center;color:#fff;">Final Order Date</th>
					<th style="text-align:center;color:#fff;">Days taken to Pass Interim Order</th>
					<th style="text-align:center;color:#fff;">Days taken to Pass final Order</th>
				</tr>
			</thead>
			<tbody>

			<?php
        $i=1;
		foreach($cwc_delay as $row):
		?>
				<tr>
                  <td><?php echo $i; ?></td>
				  <td ><?php echo $row['child_id'] ;?></td>
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
	 <?php $i++; endforeach;?>
	 <?php } else if($type=="rescued_repeatedly"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;color:#fff;">Child Name</th>
					<th style="text-align:center;color:#fff;">Father Name </th>
					<th style="text-align:center;color:#fff;"> Postal Address</th>
					
				</tr>
			</thead>
			<tbody>

			<?php
		$i=1;
		foreach($rescued_repeatedly as $row):
		?>
				<tr>
				  <td><?php echo $i; ?></td>
				  <td ><?php echo $row['child_id'] ;?></td></td>
				  <td ><?php echo $row['child_name'];?> </td>
				  <td><?php echo $row['father_name'];?> </td>
				  <td><?php echo $row['postal_address'];?> </td>
				 

				</tr>
	 <?php $i++;endforeach;?>
	 <?php } else if($type=="middle_men"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Name</th>
					<th style="text-align:center;color:#fff;">Alias </th>
					<th style="text-align:center;color:#fff;"> Conatct No</th>
					<th style="text-align:center;color:#fff;"> Address</th>
					
				</tr>
			</thead>
			<tbody>

			<?php
        $i=1;
		foreach($middle_men as $row):
		?>
				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['alias'];?> </td>
				  <td><?php echo $row['contact'];?> </td>
				  <td><?php echo $row['address'];?> </td>
				 

				</tr>
	 <?php $i++;endforeach;?>
	 
	 
	 <?php }else if($type=="order_after_production"){?>
<?php //echo "<pre>";print_r($monthly_report_details_mis);echo"</pre>"; ?>
		     <thead>
				<tr>
				    <th style="text-align:center;">Serial No</th>
				    <th style="text-align:center;background-color:#bfaeae;">District</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Handed over to Parents/Gaurdian</th>
					<th style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;">Handed over to CCI</th>
					<th style="text-align:center;background-color:rgb(56, 94, 134);color:#FFF;">Handed over to Fit Person</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Handed over to Fit Facility</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Handed over to Other Place</th>
					<th style="text-align:center;background-color:#bfaeae;">Other Orders</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
        $i=1;
		foreach($monthly_report_details_mis as $row):
		?>
		
		
				<tr>
                  <td><?php echo $i;?></td>
				  <td style="text-align:center;background-color:#bfaeae;"><?php echo $row['area_name'];?> </td>
				  <?php if($row['Parents']==0)
				  {?>
				  
				   <td style="text-align:center;background-color:#bfaeae;"><?php echo $row['Parents'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td style="text-align:center;background-color:#bfaeae;"><?php echo $row['Parents'];?></td>	
				  
				<?php }	 ?>  	  
				  
				  <?php 
				  if($row['cci']==0) {  ?>
				  <td style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;"><?php echo 0;?> </td>
				<?php }else{?>
				   <td style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;"><?php echo $row['cci'];?></td>	
				<?php  }?> 
				
				 <?php 
				  if($row['fitperson']==0) {  ?>
				  <td style="text-align:center;background-color:rgb(56, 94, 134);color:#FFF;" ><?php echo $row['fitperson'];?> </td>
				<?php }else{?>
				   <td style="text-align:center;background-color:rgb(56, 94, 134);color:#FFF;" ><?php echo $row['fitperson'];?></td>	
				<?php  }?> 
				
				
				 <?php 
				  if($row['fitfacility']==0) {  ?>
				  <td style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;"><?php echo $row['fitfacility'];?> </td>
				<?php }else{?>
				   <td style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;"><?php echo $row['fitfacility'];?></td>	
				<?php  }?> 
				
				<?php 
				  if($row['otherplace']==0) {  ?>
				  <td  style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;"><?php echo $row['otherplace'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;" ><?php echo $row['otherplace'];?></td>	
				<?php  }?> 
				
				<?php 
				  if($row['Others']==0) {  ?>
				  <td style="text-align:center;background-color:#bfaeae;" ><?php echo $row['Others'];?> </td>
				<?php }else{?>
				   <td style="text-align:center;background-color:#bfaeae;"  ><?php echo $row['Others'];?></td>	
				<?php  }?> 
				</tr>
	 <?php $i++; endforeach;?> 

	 
	 <?php } else if($type=="emp_amt"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;">Serial No</th>
					<th style="text-align:center;">Child ID</th>
					<th style="text-align:center;">Total Work Amount</th>
					<th style="text-align:center;">Amount Collected</th>
					
					
				</tr>
			</thead>
			<tbody>
			

   <?php
        $i=1;
		foreach($amount_calculated as $row):
		?>
				<tr>
                   <td><?php echo $i;?></td>
				   <td ><?php echo $row['child_id'] ;?></td></td>
				  <td><?php echo $row['total_work'];?> </td>
				  <td><?php echo $row['amount_wages_collected'];?> </td>
				 
				 
				  
				</tr>
	 <?php $i++; endforeach;?>
		<?php }else if($type=="lc_action"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child ID</th>
					<th style="text-align:center;color:#fff;">Designation</th>
			
					<th style="text-align:center;color:#fff;">District</th>
					<th style="text-align:center;color:#fff;">Message</th>
					<th style="text-align:center;color:#fff;">Date Of Communication</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
		$i=1;
		foreach($communication as $row):
		?>
				<tr>
				  <td><?php echo $i; ?></td>
				  <td ><?php echo $row['child_id'];?> </td>
				  <td ><?php echo $row['role_name'];?> </td>
				  
				  <td><?php echo $row['area_name'];?> </td>
				  <td><?php echo $row['massage'];?> </td>
				  <td><?php echo $row['created'];?> </td>
				 
				 
				  
				</tr>
	 <?php $i++; endforeach;?>
	 <?php }else if($type=="cwc_not_filling"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;">Serial No</th>
					<th style="text-align:center;">Child ID</th>
					<th style="text-align:center;">Data Available For</th>
					<th style="text-align:center;">Final Order Date</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
			$i=1;
			foreach($additional_details as $row):
			?>
					<tr>
					  <td><?php echo $i; ?></td>
					  <td ><?php echo $row['child_id'];?></td>
					  
					  <td>
					  <?php  if($row['tables']){print_r($row['tables']);} else{ echo "NA";}?> </td>
					  
					  <td ><?php print_r($row['final_order_date']);?></td>
					 
					  
					</tr>
		 <?php $i++; endforeach;?> 	 
		 <?php }else if($type=="ngo_dubbious"){?>
				 <thead>
					<tr>
					    <th style="text-align:center;">Serial No</th>
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
		$i=1;
		foreach($dubbious_ngo as $row):
		?>
				<tr>
				  <td><?php echo $i; ?></td>
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
					    <th style="text-align:center;color:#fff;">Sl No.</th>
					    <th style="text-align:center;color:#fff;">District</th>
						<th style="text-align:center;color:#fff;">LS</th>
						<th style="text-align:center;color:#fff;">LEO</th>
						<th style="text-align:center;color:#fff;">DCPU</th>
						<th style="text-align:center;color:#fff;">CWC</th>
						<th style="text-align:center;color:#fff;">Total</th>
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
				    <td style="text-align:center;"><?php echo $row['district'];?> </td>
				  <td style="text-align:center;">
				  
				  <?php if($row['LS']==0){
				  
				  echo $row['LS'];?> 
				  
				  <?php }else{?>
				  
				  <?php echo $row['LS'];?>
				  
				  <?php }?>
				  
				  
				  </td>
				  <td style="text-align:center;">
				  
				  
				 <?php if($row['LEO']==0){
				  
				  echo $row['LEO'];?> 
				  
				  <?php }else{?>
				  
				  <?php echo $row['LEO'];?>
				  
				  <?php }?>
				  
				  
				  </td>
					<td style="text-align:center;">
					
					<?php if($row['DCPU']==0){
				  
				  echo $row['DCPU'];?> 
				  
				  <?php }else{?>
				  
				  <?php echo $row['DCPU'];?>
				  
				  <?php }?>
					
					</td>
				  <td style="text-align:center;">
				  
				 <?php if($row['CWC']==0){
				  
				  echo $row['CWC'];?> 
				  
				  <?php }else{?>
				  
				 <?php echo $row['CWC'];?>
				  
				  <?php }?>
				  
				   </td>
				 <td>
				 <?php  $sum = 0;
				 
				 echo $sum += $row['LS']+$row['LEO']+$row['DCPU']+$row['CWC'];
				 
				 
				 ?>
				 
				 
				 
				 
				 
				 </td> 
				 
				</tr>
	 <?php $i++; endforeach; ?>

<?php }else if($type=="Rehabilitation"){
	
	if($sub_rehab=="Labour"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
			 <tr><td></td></tr>
            <tr class="report_head">
			    <th style="color:#fff;">Serial No</th>
                <th style="color:#fff;">District Name</th>
                <th style="color:#fff;">Rs 1800 Package</th>
                <th style="color:#fff;">Rs 3000 Package</th>
	            <th style="color:#fff;">Rs 5000 Deposited DCWRA</th>
                <th style="color:#fff;">Rehabilitation fund Rs. 20,000</th>
				<th style="color:#fff;">CMRF Transfered Rs. 25000</th>
				
            </tr>
            </thead>
				<tbody>				
			<?php
	}if($sub_rehab=="cm_relief"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;">Serial No</th>
                <th style="color:#fff;">District Name</th>
                <th style="color:#fff;">Physically verified</th>                
	            <th style="color:#fff;">CL eligible for CMRF</th>
	            <th style="color:#fff;">CL not eligible for CMRF</th>
	            <th style="color:#fff;">Demand Raised </th>
	            <th style="color:#fff;">Demand Received</th>
	            <th style="color:#fff;">Bank details available</th>
				<th style="color:#fff;">CMRF transferred to CL A/C</th>			
            </tr>
            </thead>
				<tbody>				
			<?php
	}
	if($sub_rehab=="Labour"){
		    $i=1;
			foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo strip_tags($row['1']);?> </td>
				  <td><?php echo strip_tags($row['2']);?> </td>
				  <td><?php echo strip_tags($row['3']);?> </td>
				  <td><?php echo strip_tags($row['4']);?> </td>
				  <td><?php echo strip_tags($row['5']);?> </td>	 
				</tr>
	 <?php $i++; endforeach; 
	}
	if($sub_rehab=="cm_relief"){
		$i=1;
		foreach($Rehabilitation as $row):
		?>
				<tr>
				  <td><?php echo $i;?></td>
				  <td><?php echo strip_tags($row['0']);?> </td>
				  <td><?php echo strip_tags($row['1']);?> </td>
				  <td><?php echo strip_tags($row['2']);?> </td>
				  <td><?php echo strip_tags($row['3']);?> </td>
				  <td><?php echo strip_tags($row['4']);?> </td>
				  <td><?php echo strip_tags($row['5']);?> </td>
				   <td><?php echo strip_tags($row['6']);?> </td>
				    <td><?php echo strip_tags($row['7']);?> </td>
				 
				</tr>
	 <?php $i++; endforeach; 
	}
	 ?>

<?php } else if($type=="child_cumulative"){?>

?>
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;">SL No</th>
              		 <th style="color:#fff;">District</th>
					<th style="color:#fff;">Child Rescued</th>
					<th style="color:#fff;">Investigation on Going</th>
					<th style="color:#fff;">Final Order Passed</th>
					<th style="color:#fff;">Entitlement Card Generated</th>
				
            </tr>
            </thead>
				<tbody>
			<?php 
			$i=1;	foreach($resistration_details as $row): ?>
				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; }else if($type=="caste"){?>
			
			<thead>
				<tr class="report_head">
					<th style="color:#fff;">Sl No.</th>
					<th style="color:#fff;">District Name</th>
					<th style="color:#fff;">SC</th>
					<th style="color:#fff;">ST</th>
					<th style="color:#fff;">OBC</th>
					<th style="color:#fff;">General</th>
					<th style="color:#fff;">EBC</th>
					<th style="color:#fff;">Other</th>
				</tr>
			</thead>
			<tbody>
<?php 
$i=1;	foreach($castwiseb_brakeup as $row): ?>
				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				  <td><?php echo $row['5'];?> </td>
				  <td><?php echo $row['6'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; ?>
	 <?php }else if($type=="education"){?>
	 
	 <thead>
            <tr class="report_head">
			    <th style="color:#fff;">SL No</th>
                <th style="color:#fff;">District Name</th>
                <th style="color:#fff;">Illiterate</th>
	             <th style="color:#fff;">Upto primary ( I - V)</th>
                <th style="color:#fff;">Middle Level (VI - VII)</th>
				<th style="color:#fff;">Upper Primary ( VIII - X)</th>
				<th style="color:#fff;">Higher Secondary </th>
				<th style="color:#fff;">Not Specified </th>
				<th style="color:#fff;">Total </th>
				
            </tr>
            </thead>
				<tbody>
		



<?php 
$i=1;	foreach($educationwise_brakeup as $row): ?>

				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				  <td><?php echo $row['5'];?> </td>
				  <td><?php echo $row['6'];?> </td>
				  <td><?php echo $row['7'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; } else if($type=="age"){?>
			
			 <thead>
            <tr class="report_head">
                 <th style="color:#fff;">SL No</th>
                <th style="color:#fff;">District Name</th>
                <th style="color:#fff;">Below 10 Years </th>
	             <th style="color:#fff;">10 to 14 years</th>
                <th style="color:#fff;">15 to 18 years</th>
                <th style="color:#fff;">Total</th>
				 </tr>
        </thead>
			
		<?php 
		$i=1;	foreach($agewise_brakeup as $row): ?>

				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo $row['0'];?> </td>
				  <td><?php echo $row['1'];?> </td>
				  <td><?php echo $row['2'];?> </td>
				  <td><?php echo $row['3'];?> </td>
				  <td><?php echo $row['4'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach;  }else if($type=="cmrf_transaction"){?>
			
			<tr class="report_head">
			<th style="color:#fff;background-color:#bfaeae;">SL No</th>
             <th style="color:#fff;background-color:#bfaeae;">District Name</th>
			<th style="color:#fff;background-color:#bfaeae;">No Of Times CMRF Demanded</th>
			<th style="color:#fff;background-color:#bfaeae;">No of CL whom demand raised</th>
			<th style="color:#fff;background-color:#bfaeae;">No of time demand released</th>
			<th style="color:#fff;background-color:#bfaeae;">No of CL whom demand released</div></th>
			<th style="color:#fff;background-color:#bfaeae;"><div>No of CL whom CMRF yet to be released from LRD to Dist</th>
			<th style="color:#fff;background-color:#bfaeae;">CMRF transferred to CL A/C</th>
			<th style="color:#fff;background-color:#bfaeae;">No of CL whom CMRF yet to be transferred</th>
            </tr>
			
			
			<?php 
			$i=1;foreach($cmrf_transaction as $row): ?>
           
				<tr>
				  <td><?php echo $i;?></td>
				  <td ><?php echo strip_tags($row['0']);?> </td>
				  <td><?php echo strip_tags($row['1']);?> </td>
				  <td><?php echo strip_tags($row['2']);?> </td>
				  <td><?php echo strip_tags($row['3']);?> </td>
				  <td><?php echo strip_tags($row['4']);?> </td>
				  <td><?php echo strip_tags($row['5']);?> </td>
				  <td><?php echo strip_tags($row['6']);?> </td>
				  <td><?php echo strip_tags($row['7']);?> </td>
				</tr>	
			<?php $i++; endforeach;}?>
			</tbody>

		</table>
	</div>

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
</section>

