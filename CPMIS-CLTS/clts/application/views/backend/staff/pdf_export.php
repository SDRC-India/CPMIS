<?php //echo $type;?>
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
		   else if($type=="inside_state") {echo "<h2>Child Rescued Within State</h2>" ;}
		   else if($type=="order_after_production"){ echo "<h2>Order After Production</h2>";}
		   else if($type=="outside_state"){ echo "<h2>Child Rescued Outside State</h2>";}
		   else if($type=="cci") {echo "<h2>Children Sent to CCI</h2>";}
		   else if($type=="system_access"){ echo "<h2>System Access</h2>";}
		   else if($type=="last_login"){ echo "<h2>Last Login Time Period</h2>";}
		   else if($type=="emp_amt"){ echo "<h2>Collected Wage Amount</h2>";}
		   else if($type=="cwc_not_filling"){ echo "<h2>Status Of Additional Details</h2>";}
		   else if($type=="cwc_delay"){ echo "<h2>Delay In CWC Order Passing</h2>";}
		   else if($type=="middle_men"){ echo "<h2>Middlemen/Agents</h2>";}
		   else if($type=="rescued_repeatedly"){ echo "<h2>Child Rescued Repeatedly</h2>";}
		   else if($type=="lc_action" && $role==10){ echo "<h2>Action Suggested By LC</h2>";}
		   else if($type=="ngo_dubbious"){ echo "<h2>Dubious NGO</h2>";}
		   else if($type=="rescued_child"){ echo "<h2>Rescued Child Labourer Registered in Application</h2>";}
		   else if($type=="child_cumulative"){ echo "<h2>Cumulative Statistics</h2>";}
		   else if($type=="caste"){ echo "<h2>Category-wise Break-up</h2>";}
		   else if($type=="education"){ echo "<h2>Education-wise Break-up</h2>";}
		   else if($type=="age"){ echo "<h2>Age-wise Break-up</h2>";}
		   else if($type=="cmrf_transaction"){ echo "<h2>CMRF Transaction Details</h2>";}
		   else if($type=="cwc_working_status"){ echo "<h2>CWC Working Status</h2>";}
		   else if($type=="due_for_transfer"){ echo "<h2>Due For Transferring The Rescued Child Labourer</h2>";}
		   else if($type=="trnsfr_status"){ echo "<h2>Transfer Status State Wise</h2>";}
		   
		   
		   
		   else if($type=="Rehabilitation"){
		   	if($sub_rehab=="Labour"){
		   		
		   		echo "<h2>Rehabilitation Of Labour Resource Department</h2>";
		   		
		   	}else if($sub_rehab=="cm_relief"){
		   		
		   		echo "<h2>Rehabilitation Of CM Relief Fund</h2>";
		   		
		   	}if($sub_rehab=="Educational"){
		   		
		   		echo "<h2>Rehabilitation Of Educational Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="Rural"){
		   		
		   		echo "<h2>Rehabilitation Of Rural Development Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="Urban"){
		   		
		   		echo "<h2>Rehabilitation Of Urban Development Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="Revenue"){
		   		
		   		echo "<h2>Rehabilitation Of Revenue Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="Health"){
		   		
		   		echo "<h2>Rehabilitation Of Health Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="sc_st"){
		   		
		   		echo "<h2>Rehabilitation Of SC & ST Welfare Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="food"){
		   		
		   		echo "<h2>Rehabilitation Of Food & Civil Supplied Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="Minority"){
		   		
		   		echo "<h2>Rehabilitation Of Minority Welfare Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	if($sub_rehab=="Social"){
		   		
		   		echo "<h2>Rehabilitation Of Social Welfare Department</h2>";
		   		//echo "Rehabilitation";
		   	}
		   	
		   
		   }
		   //else if($type=="Rehabilitation"){ echo "Rehabilitation";}
		   //if($sub_rehab=="Labour"){
					?>
				</h5>
		<div class="col-md-3"></div>
		<div class="col-md-6 "> <p style="text-align:center;">From:<?php echo date("d-m-Y", strtotime($from));?> To: <?php echo  date("d-m-Y", strtotime($to));?></p></div>
		<div class="col-md-3"></div>	
	<div class="col-md-12 chat_area pdf_export" id="child_table">
		  

		<table  class="display table table-bordered" style="border-collapse: collapse;" border="1" cellspacing="0"  width="100%" id="table_export">
		<?php if($type=="entitlement_card_getnerated"){?>
			<thead >
				<tr >
				    <th style="text-align:center;color:#FFF;">Serial No</th>
					<th style="text-align:center;background-color:#bfaeae;color:#FFF;">Child Id</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Child Name</th>
					<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;">Child District</th>
					<th style="text-align:center;background-color:rgb(134, 74, 56);color:#FFF;">Rescued Date</th>
					<th style="text-align:center;background-color:rgb(56, 94, 134);color:#FFF;">Entitlement Card Generation Date</th>
					<th style="text-align:center;background-color:rgb(15, 19, 169);color:#FFF;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php if($monthly_report_details){ $i=1;foreach($monthly_report_details as $row){?>

				<tr>
				<th style="text-align:center;"><?php echo $i;?></th>
				<th style="text-align:center;background-color:#bfaeae;color:#FFF;"><?php echo $row['child_id'] ;?></th>
				<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;"><?php echo $row['child_name'] ;?></th>
				<th style="text-align:center;background-color:rgb(56, 134, 66);color:#FFF;"><?php echo $row['child_dist'] ;?></th>
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
					{echo 'District';} else {if($selected_block) { echo "Panchayat Name";} else {echo "District";}}?></th>
					<th style="text-align:center;color:#fff;">No of Children Rescued</th>
					
				</tr>
			</thead>
			<tbody>
			<?php // print_r($monthly_report_details);?>
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>
               
               
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  
				<td style="text-align:center;"><?php echo $row['1'] ;?></td>
				
			</tr>


			<?php $i++;}}?>
			
		<?php }else if($type== "outside_state"){  ?>
			<thead>
			
				<tr>
					<th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;"><?php if($selected_state==NULL)
					{echo 'State';}  else {echo "District";}?></th>
					<th style="text-align:center;color:#fff;">No of Children Rescued</th>
					
				</tr>
				
			</thead>
			<tbody>
		<?php  //print_r($monthly_report_details);?>	
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>
           
			<tr>
				<?php if($i<=27){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				<td style="text-align:center;"><?php echo $row['1'] ;?></td>
				
		       
					
				
					
			</tr>
			
			<?php $i++;}}?>
			
		<?php }else if($type== "cci"){  ?>
			<thead>
				<tr>
					<th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">CCI Name</th>
					<th style="text-align:center;color:#fff;">CCI Disrtict</th>
					<th style="text-align:center;color:#fff;">No of Children Sent</th>
										
					
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($childs_to_cci){foreach($childs_to_cci as $row){?>
       <?php      //echo "<pre>"; print_r($childs_to_cci);echo"</pre>"; ?> 
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=12){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=3){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				   
				  
				  
				  
				  
				<?php  if($row['0']=='<strong>Total</strong>'){?>
				<td style="text-align:center;"></td>
				<?php } else {?>
								<td style="text-align:center;"><?php echo $row['1'];?></td>
				<?php } ?>
				<td style="text-align:center;"><?php echo $row['2'];?></td>
				<?php  if($row['0']=='<strong>Total</strong>'){?>
				<td></td>	
						<?php }else{?>
				
						
						
						<?php }?>		
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
                  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['district'];?> </td>
				  <td style="text-align:center;"><?php echo $row['count'];?> </td>
				  <td style="text-align:center;"><?php echo $row['last_access'];?> </td>

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
                  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td style="text-align:center;"><?php echo $row['name'];?> </td>
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
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;color:#fff;">Child District</th>
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
                  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				  <td style="text-align:center;" ><?php echo $row['child_dist'];?></td>
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
	 <?php } else if($type=="rescued_repeatedly"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child Id</th>
					<th style="text-align:center;color:#fff;">Child Name</th>
					<th style="text-align:center;color:#fff;">Child District</th>
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
				  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td style="text-align:center;"><?php echo $row['child_id'] ;?></td></td>
				  <td style="text-align:center;"><?php echo $row['child_name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['child_dist'];?> </td>
				  <td style="text-align:center;"><?php echo $row['father_name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['postal_address'];?> </td>
				 

				</tr>
	 <?php $i++;endforeach;?>
	 <?php } else if($type=="middle_men"){?>
			<thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Name</th>
					<th style="text-align:center;color:#fff;">Alias </th>
					<th style="text-align:center;color:#fff;"> Contact No</th>
					<th style="text-align:center;color:#fff;"> Address</th>
					<th style="text-align:center;color:#fff;"> Other Details</th>
					
				</tr>
			</thead>
			<tbody>

			<?php
        $i=1;
		foreach($middle_men as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['alias'];?> </td>
				  <td style="text-align:center;"><?php echo $row['contact'];?> </td>
				  <td style="text-align:center;"><?php echo $row['address'];?> </td>
				   <td style="text-align:center;"><?php echo $row['other_details'];?> </td>
				 

				</tr>
	 <?php $i++;endforeach;?>
	 
	 
	 <?php }else if($type=="order_after_production"){?>
<?php //echo "<pre>";print_r($monthly_report_details_mis);echo"</pre>"; ?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#FFF;">Serial No</th>
				    <th style="text-align:center;color:#FFF;">District</th>
					<th style="text-align:center;color:#FFF;">Handed over to Parents/Gaurdian</th>
					<th style="text-align:center;color:#FFF;">Handed over to CCI</th>
					<th style="text-align:center;color:#FFF;">Handed over to Fit Person</th>
					<th style="text-align:center;color:#FFF;">Handed over to Fit Facility</th>
					<th style="text-align:center;color:#FFF;">Handed over to Other Place</th>
					<th style="text-align:center;color:#FFF;">Other Orders</th>
					
					
				</tr>
			</thead>
			<tbody>
			
			<?php
        $i=1;
		foreach($monthly_report_details_mis as $row):
		?>
		
		
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  
				  <?php if($row['2']==0)
				  {?>
				  
				   <td style="text-align:center;"><?php echo $row['2'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td style="text-align:center;" ><?php echo $row['2'];?></td>	
				  
				<?php }	 ?>  	  
				  
				  <?php 
				  if($row['1']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['1'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;"><?php echo $row['1'];?></td>	
				<?php  }?> 
				
				 <?php 
				  if($row['3']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['3'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;" ><?php echo $row['3'];?></td>	
				<?php  }?> 
				
				
				 <?php 
				  if($row['4']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['4'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;" ><?php echo $row['4'];?></td>	
				<?php  }?> 
				
				<?php 
				  if($row['5']==0) {  ?>
				  <td  style="text-align:center;" ><?php echo $row['5'];?> </td>
				<?php }else{?>
				   <td  style="text-align:center;" ><?php echo $row['5'];?></td>	
				<?php  }?> 
				
				<?php 
				  if($row['6']==0) {  ?>
				  <td  style="text-align:center;"><?php echo $row['6'];?> </td>
				<?php }else{?>
				   <td   style="text-align:center;"><?php echo $row['6'];?></td>	
				<?php  }?> 
				</tr>
	 <?php $i++; endforeach;?> 

	 
	 <?php } else if($type=="emp_amt"){?>
		     <thead>
				<tr>
				    <th style="text-align:center;color:#fff;">Serial No</th>
					<th style="text-align:center;color:#fff;">Child ID</th>
					<th style="text-align:center;color:#fff;">Total Work Amount</th>
					<th style="text-align:center;color:#fff;">Amount Collected</th>
					
					
				</tr>
			</thead>
			<tbody>
			

   <?php
        $i=1;
		foreach($amount_calculated as $row):
		?>
				<tr>
                   <td style="text-align:center;"><?php echo $i;?></td>
				   <td style="text-align:center;"><?php echo $row['child_id'] ;?></td></td>
				  <td style="text-align:center;"><?php echo $row['total_work'];?> </td>
				  <td style="text-align:center;"><?php echo $row['amount_wages_collected'];?> </td>
				 
				 
				  
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
				  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td style="text-align:center;"><?php echo $row['child_id'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['role_name'];?> </td>
				  
				  <td style="text-align:center;"><?php echo $row['area_name'];?> </td>
				  <td><?php echo $row['massage'];?> </td>
				  <td style="text-align:center;"><?php echo $row['created'];?> </td>
				 
				 
				  
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
					  <td style="text-align:center;"><?php echo $i; ?></td>
					  <td style="text-align:center;"><?php echo $row['child_id'];?></td>
					  
					  <td style="text-align:center;">
					  <?php  if($row['tables']){print_r($row['tables']);} else{ echo "NA";}?> </td>
					  
					  <td style="text-align:center;"><?php print_r($row['final_order_date']);?></td>
					 
					  
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
				  <td style="text-align:center;"><?php echo $i; ?></td>
				  <td style="text-align:center;"><?php echo $row['name'];?> </td>
				  <td style="text-align:center;"><?php echo $row['email'];?> </td>
				  <td style="text-align:center;"><?php echo $row['contact'];?> </td>
				  <td style="text-align:center;"><?php echo $row['regno'];?> </td>
				  <td style="text-align:center;"><?php echo $row['date_reg'];?> </td>
				  <td style="text-align:center;"><?php echo $row['chairman'];?> </td>
				  
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
						<!-- <th style="text-align:center;color:#fff;">DCPU</th>-->
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
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  <td style="text-align:center;">
				  
				  <?php if($row['1']==0){
				  
				  echo $row['1'];?> 
				  
				  <?php }else{?>
				  
				  <?php echo $row['1'];?>
				  
				  <?php }?>
				  
				  
				  </td>
				  <td style="text-align:center;">
				  
				  
				 <?php if($row['2']==0){
				  
				  echo $row['2'];?> 
				  
				  <?php }else{?>
				  
				 <?php echo $row['2'];?>
				  
				  <?php }?>
				  
				  
				  </td>
				
				  <td style="text-align:center;">
				  
				 <?php if($row['3']==0){
				  
				  echo $row['3'];?> 
				  
				  <?php }else{?>
				  
				  <?php echo $row['3'];?>
				  
				  <?php }?>
				  
				   </td>
				   
		<?php  if($row['0']=="<strong>Total</strong>"){  ?>
				    
				  <td style="text-align:center;">
			      <?php echo $row['5'];?>
				  </td> 
				  
			<?php 	  }else{  ?>
				    
				  <td style="text-align:center;">
			<?php echo  $row['3']+$row['1']+$row['2'];?>
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
			 <tr><td></td></tr>
            <tr class="report_head">
			    <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">Serial No</th>
                <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">District Name</th>
                <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">Rs 1800 Package</th>
                <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">Rs 3000 Package</th>
	            <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">Rs 5000 Deposited DCWRA</th>
                <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">Rehabilitation fund Rs. 20,000</th>
				<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">CMRF Transferred Rs. 25000</th>
				
            </tr>
            </thead>
				<tbody>				
			<?php
	}if($sub_rehab=="cm_relief"){
		?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">Physically verified</th>                
	            <th style="color:#fff;text-align:center;">CL eligible for CMRF</th>
	            <th style="color:#fff;text-align:center;">CL not eligible for CMRF</th>
	            <th style="color:#fff;text-align:center;">Demand Raised </th>
	            <th style="color:#fff;text-align:center;">Demand Received</th>
	            <th style="color:#fff;text-align:center;">Bank details available</th>
				<th style="color:#fff;text-align:center;">CMRF transferred to CL A/C</th>			
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
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">Enrolled in School</th>                
            </tr>
            </thead>
				<tbody>				
			<?php
			
}if($sub_rehab=="Rural"){
				?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">MGNREGA</th> 
                <th style="color:#fff;text-align:center;">SGSY</th> 
                 <th style="color:#fff;text-align:center;">IAY</th>                          
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="Urban"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">SJSRY</th> 
                <th style="color:#fff;text-align:center;">JNURM</th> 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="Revenue"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">LAND SETTLEMENT BENIFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
	
}if($sub_rehab=="Health"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">HEALTH CARDS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
			
}if($sub_rehab=="sc_st"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">SCHOLARSHIPS BENEFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="food"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">RATION CARDS</th> 
                 <th style="color:#fff;text-align:center;">PDS BENEFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
}if($sub_rehab=="Minority"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">SPECIAL HOUSING SCHEME</th> 
                 <th style="color:#fff;text-align:center;">LOAN BENEFITS</th> 
                 
                                       
            </tr>
            </thead>
				<tbody>				
			<?php
	
}if($sub_rehab=="Social"){
	?>
					<!-----------------------------------------------Labour_table Section-------------------------------------------->
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">Serial No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">Social Pension Scheme</th> 
                 <th style="color:#fff;text-align:center;">Pravarish Scheme</th>
                  <th style="color:#fff;text-align:center;">Sponsorship Benefits for Family</th>
                   <th style="color:#fff;text-align:center;">Sponsorship Benefits for Child</th>   
                 
                                       
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
				
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  
				  
				  <td style="text-align:center;"><?php echo strip_tags($row['1']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['2']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['3']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['4']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['5']);?> </td>	 
				</tr>
	 <?php $i++; endforeach; 
	}
	if($sub_rehab=="cm_relief"){
		$i=1;
		foreach($Rehabilitation as $row):
		?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  
				  <td style="text-align:center;"><?php echo strip_tags($row['1']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['2']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['3']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['4']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['5']);?> </td>
				   <td style="text-align:center;"><?php echo strip_tags($row['6']);?> </td>
				    <td style="text-align:center;"><?php echo strip_tags($row['7']);?> </td>
				 
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="Educational"){
		print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	if($sub_rehab=="Rural"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
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
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
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
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="Health"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="sc_st"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	if($sub_rehab=="food"){
		//print_r($Rehabilitation);
		$i=1;foreach($Rehabilitation as $row):
		?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
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
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
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
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				   <td style="text-align:center;"><?php echo $row['3'];?> </td>
				   <td style="text-align:center;"><?php echo $row['4'];?> </td>
				</tr>
	 <?php $i++; endforeach; 
	}
	
	 ?>

<?php }else if($type=="child_cumulative"){?>

?>
			 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">SL No</th>
              		 <th style="color:#fff;text-align:center;">District</th>
					<th style="color:#fff;text-align:center;">Child Rescued</th>
					<th style="color:#fff;text-align:center;">Child Transfer To Other District</th>
					<th style="color:#fff;text-align:center;">Child Transfer From Other District</th>
					<th style="color:#fff;text-align:center;">CL For Own District</th>
					<th style="color:#fff;text-align:center;">Investigation on Going</th>
					<th style="color:#fff;text-align:center;">Final Order Passed</th>
					<th style="color:#fff;text-align:center;">Printed entitlement card</th>
				
            </tr>
            </thead>
				<tbody>
			<?php 
			$i=1;	foreach($resistration_details as $row): ?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['5'];?> </td>
				   <td style="text-align:center;"><?php echo $row['6'];?> </td>
				   <td style="text-align:center;"><?php echo ($row['1']-$row['5'])+$row['6'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  <td style="text-align:center;"><?php echo $row['4'];?> </td>
				   
				</tr>
	
				
			<?php $i++; endforeach; }else if($type=="caste"){?>
			
			<thead>
				<tr class="report_head">
					<th style="color:#fff;text-align:center;">Sl No.</th>
					<th style="color:#fff;text-align:center;">District Name</th>
					<th style="color:#fff;text-align:center;">SC</th>
					<th style="color:#fff;text-align:center;">ST</th>
					<th style="color:#fff;text-align:center;">OBC</th>
					<th style="color:#fff;text-align:center;">General</th>
					<th style="color:#fff;text-align:center;">EBC</th>
					<th style="color:#fff;text-align:center;">Other</th>
				</tr>
			</thead>
			<tbody>
<?php 
$i=1;	foreach($castwiseb_brakeup as $row): ?>
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				  <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}?>
				  
				  
				   <?php if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}?>
				  
				  
				  
				  
				  <td style="text-align:center;" ><?php echo $row['1'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['2'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['3'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['4'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['5'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['6'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; ?>
	 <?php }else if($type=="education"){?>
	 
	 <thead>
            <tr class="report_head">
			    <th style="color:#fff;text-align:center;">SL No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">Illiterate</th>
	             <th style="color:#fff;text-align:center;">Upto primary ( I - V)</th>
                <th style="color:#fff;text-align:center;">Middle Level (VI - VII)</th>
				<th style="color:#fff;text-align:center;">Upper Primary ( VIII - X)</th>
				<th style="color:#fff;text-align:center;">Higher Secondary </th>
				<th style="color:#fff;text-align:center;">Not Specified </th>
				<th style="color:#fff;text-align:center;">Total </th>
				
            </tr>
            </thead>
				<tbody>
		



<?php 
$i=1;	foreach($educationwise_brakeup as $row): ?>

				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  <td style="text-align:center;"><?php echo $row['4'];?> </td>
				  <td style="text-align:center;"><?php echo $row['5'];?> </td>
				  <td style="text-align:center;"><?php echo $row['6'];?> </td>
				  <td style="text-align:center;"><?php echo $row['7'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; } else if($type=="age"){?>
			
			 <thead>
            <tr class="report_head">
                 <th style="color:#fff;text-align:center;">SL No</th>
                <th style="color:#fff;text-align:center;">District Name</th>
                <th style="color:#fff;text-align:center;">Below 10 Years </th>
	             <th style="color:#fff;text-align:center;">10 to 14 years</th>
                <th style="color:#fff;text-align:center;">15 to 18 years</th>
                
				 </tr>
        </thead>
			
		<?php 
		$i=1;	foreach($agewise_brakeup as $row): ?>

				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  
				</tr>
	
				
			<?php $i++; endforeach;  }else if($type=="cmrf_transaction"){?>
			
			<tr class="report_head">
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">SL No</th>
             <th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">District Name</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">No Of Times CMRF Demanded</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">No of CL whom demand raised</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">No of time demand released</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">No of CL whom demand released</div></th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;"><div>No of CL whom CMRF yet to be released from LRD to Dist</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">CMRF transferred to CL A/C</th>
			<th style="color:#fff;background-color:rgb(53, 86, 117);text-align:center;">No of CL whom CMRF yet to be transferred</th>
            </tr>
			
			
			<?php 
			$i=1;foreach($cmrf_transaction as $row): ?>
           
				<tr>
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  <td style="text-align:center;"><?php echo strip_tags($row['1']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['2']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['3']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['4']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['5']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['6']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['7']);?> </td>
				</tr>	
			<?php $i++; endforeach;}  else if($type=="due_for_transfer"){ ?>
			
			<thead>
            <tr class="report_head">
			<th style="color:#fff;text-align:center;">SL No</th>
             <th style="color:#fff;text-align:center;">District Name</th>
			<th style="color:#fff;text-align:center;">No Of Children Need To Transfer To Other District</th>
			<th style="color:#fff;text-align:center;">No Of Children Need To Transfer From Other District</th>
			<th style="color:#fff;text-align:center;">Forwarded To CWC</th>
            </tr>
			</thead>
			<tbody>
			
			<?php 
			$i=1;foreach($due_for_transfer as $row): ?>          
            <tr class="report_head">
            
           <?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td> 
				</tr>			   				
			<?php $i++; endforeach; 
			}  else if($type=="cwc_working_status"){ ?>
			
			<thead>
            <tr class="report_head">
			<th style="color:#fff;text-align:center;">SL No</th>
             <th style="color:#fff;text-align:center;">District Name</th>
			<th style="color:#fff;text-align:center;">CWC Name</th>
			<th style="color:#fff;text-align:center;">No Of Children Need To Processing By CWC</th>
            </tr>
			</thead>
			<tbody>
			
			<?php 
			$i=1;foreach($cwc_working_status as $row): ?>          
            <tr class="report_head">
            
           
				<?php if($role==10 || $role==11 || $role==21 || $role==12 || $role==22 ){?>
				 <?php if($i<=38){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }?>
				  
				  
				  
				   <?php }else if($role==13 || $role==20){?> 
				  <?php if($i<=6){ ?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td  style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }else{?>
				    <td colspan="2" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  <?php }}else{?>
				  <td  style="text-align:center;">				  
				  <?php echo $i;?>
				  </td>
				  <td colspan="" style="text-align:center;"> <?php echo $row['0'];?> </td>
				  
				  <?php }?>
				  
				  
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				</tr>			   				
			<?php $i++; endforeach; 
			}else if($type=="trnsfr_status"){ ?>
	 
	 
			<thead>
            <tr class="report_head">
			<th style="text-align:center;color:#fff;">SL No</th>
             <th style="text-align:center;color:#fff;">State Name</th>
			<th style="text-align:center;color:#fff;">No Of Children Need To Transfer To Other State</th>
			<th style="text-align:center;color:#fff;">No Of Children Sent To Other State</th>
            </tr>
			</thead>
			<tbody>
			
			<?php 
			$i=1;foreach($trnsfr_status as $row): ?>          
            <tr class="report_head">
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				 
				
				
				
			
				</tr>			   				
			<?php $i++; endforeach;}
			?>
			</tbody>

		</table>
	</div>

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
</section>

