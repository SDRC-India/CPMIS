
<section>

<div class="row">
         <div class="col-md-6">
<form  action="<?php echo base_url(); ?>index.php?mis_reports/" method="post" >

		<!-- 	<div class="form-group">
			<label class="" for="">Select Reports</label>
				<select name="type" id="type" class="form-control dist"   data-validate="required" >
					 <option  <?php if($type=="entitlement_card_getnerated") echo "selected" ;?> value="entitlement_card_getnerated">Entitlement Card Generation Time Period</option>
					 <option  <?php if($type=="investigation") echo "selected" ;?> value="investigation">Time Taken For Investigation</option>
					 <option  <?php if($type=="inside_state") echo "selected" ;?> value="inside_state">Child Rescued Within State</option>
					 <option  <?php if($type=="outside_state") echo "selected" ;?> value="outside_state">Child Rescued Outside State</option>
					 <option  <?php if($type=="cci") echo "selected" ;?> value="cci">Children Sent to CCI</option>
					 <option <?php if($type=="system_access") echo "selected" ;?> value="system_access">System Access</option>
					 <option  <?php if($type=="last_login") echo "selected" ;?> value="last_login">Last Login Time Period</option>
					 
					 <option  <?php if($type=="emp_amt") echo "selected" ;?> value="emp_amt">Collected Wage Amount</option>
					 <option  <?php if($type=="cwc_not_filling") echo "selected" ;?> value="cwc_not_filling">Status Of Additional Details</option>
					 <option  <?php if($type=="cwc_delay") echo "selected" ;?> value="cwc_delay">Delay In CWC Order Passing</option>
					 <option  <?php if($type=="middle_men") echo "selected" ;?> value="middle_men">Middle Men/Agents</option>
					 <option  <?php if($type=="rescued_repeatedly") echo "selected" ;?> value="rescued_repeatedly">Child Rescued Repeatedly</option>
					 <?php if($role==10){?>
					 <option  <?php if($type=="lc_action") echo "selected" ;?> value="lc_action">Action Suggested By LC</option>
					 <?php  }?>
					 <option  <?php if($type=="ngo_dubbious") echo "selected" ;?> value="ngo_dubbious">Dubious NGO </option>
					 <option  <?php if($type=="rescued_child") echo "selected" ;?> value="rescued_child">Rescued Child </option>
                </select>
		</div>-->
			</div>
			<div class="col-md-6"></div>
</div>

	<div class="row">
	      <?php //if($type=='system_access' || $type=="last_login"){?>
     <!-- <div class="col-md-2" id="user_grp_div" >
			<div class="form-group">
			<label >User Groups</label>
<?php print_r($selected_user_grp);?>
				<select name="user_grp" id="user_grp" class="form-control dist"  data-validate="required">
				<option value="">Select User Groups</option>

                  <?php foreach($user_grps as $crow2):  ?>
			
                  <option <?php if($selected_user_grp==$crow2['name']){echo "selected";}?> value="<?php echo $crow2['name'];?>" ><?php echo $crow2['name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<?php //} else if($type=='cci') {?>
		<div class="col-md-2" id="cci_dist_div" style="display:none;">
			<div class="form-group">
			<label >Districts</label>

				<select name="district" id="cci_district" class="form-control dist"  data-validate="required">
				<option value="">Select Districts</option>

                  <?php foreach($district_list as $crow2):  ?>

                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
	<?php //} else if($type=='inside_state') {?>
	 <div id="inside_div" style="display:none;">
		<div class="col-md-2" >
			<div class="form-group">
			<label >Districts</label>

				<select name="district" id="district" class="form-control dist"  data-validate="required">
				<option value="">Select Districts</option>

                  <?php foreach($district_list as $crow2):  ?>

                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
			<label >Blocks	</label>

				<select name="block" id="block" class="form-control dist"  data-validate="required">
				<option value="">Select Blocks</option>

                  <?php foreach($blocks_list as $crow2):  ?>

                  <option <?php if($selected_block==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>"><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		</div>

	<?php ///} else if($type=='outside_state' ) {?>
		<div class="col-md-2" id="outside_div" style="display:none;">
			<div class="form-group">
			<label >States</label>

				<select name="state" id="state" class="form-control dist"  data-validate="required">
				<option value="">Select States</option>
                  
                  <?php foreach($states_list as $crow2):   ?>
                   <?php if($crow2['area_id']!='IND010'){?>
                  <option <?php if($selected_state==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>"><?php echo $crow2['area_name']; ?></option>
				   <?php }   endforeach;  
				  
				  ?>

                </select>
			</div>
		</div>
		
	<?php //}?>
	<?php //if($type!='middle_men'){?>
	<div id="from_to_div">
		<div class="col-md-4" >
		   	<label for="datepicker" >From</label>

                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php echo $from?>"  data-validate="required"  >
                	</div>
					<span id="error_from_dt" class="color-red"></span>

            </div>
		   <div class="col-md-4">

           	<label for="datepicker">To</label>

                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="to_dt" required="required" name="to_date"   value="<?php echo $to;?>"  data-validate="required"  >
                  
				   
                 </div>
				 <span id="error_to_dt" class="color-red"></span>
		  </div>
		  </div>
	<?php //}
	if($type=='middle_men'){?>
		 <input type="hidden" class="form-control" required="required" name="from_date" id="datepicker"   value="<?php echo $from?>"  data-validate="required"  >
		  <input type="hidden" class="form-control" required="required" name="to_date" id="datepickerTo"  value="<?php echo $to;?>"  data-validate="required"  >
	<?php }?>
  			<div class="col-md-2">

  			<button type="button" style="margin-top:20px;" id="mis_submit" class="btn btn-info">Submit</button>
  			</div>
  			-->

	</form>

</div>

<div class="row">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">

      <div class="loader"></div>

    </div>
  </div>


  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" id="child_table">
	         <div class="col-md-2"><a class="btn btn-info"href="<?php echo base_url().'index.php?/mis_reports/index/rescued_child/2014-04-01/2017-06-19/view/2'?>">Back To List</a></div>
	
		<table  class="display table table-bordered" cellspacing="0" width="100%" id="table_export">
		<?php if($type=="entitlement_card_getnerated"){?>
			<thead>
				<tr>
					<th style="text-align:center;">Child Id</th>
					<th style="text-align:center;">Child Name</th>
					<th style="text-align:center;">Rescued Date</th>
					<th style="text-align:center;">Entitilement Card Generation Date</th>
					<th style="text-align:center;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<th style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></th>
				<th style="text-align:center;"><?php echo $row['child_name'] ;?></th>
				<th style="text-align:center;"><?php echo $row['idate_of_rescue'] ;?></th>
				<th style="text-align:center;"><?php echo $row['final_order_date'] ;?></th>
				<th style="text-align:center;"><?php
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
					<th style="text-align:center;">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['area_name']?></td>
				<td style="text-align:center;"><?php echo $row['count'] ;?></td>
				<td style="text-align:center;"><a href="<?php

                     if($selected_dist==NULL)
					 {
						 $type_inside="dist";
						echo $view_url.$from.'/'.$to.'/'.$type_inside.'/'.$row['area_id'];
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
						 echo $view_url.$from.'/'.$to.'/'.$type_inside.'/'.$row['area_id'];

						 }
					 }
						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>
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
				<td style="text-align:center;"><a href="<?php

                     if($selected_state==NULL)
					 {
						 $type_outside="state";
						echo $view_url_outside.$from.'/'.$to.'/'.$type_outside.'/'.$row['area_id'].'/';
					 }
                     else{
							 $type_outside="dist";
						 echo $view_url_outside.$from.'/'.$to.'/'.$type_outside.'/'.$row['area_id'].'/';

						 }

						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>
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
						<th style="text-align:center;">User Name</th>
						<th style="text-align:center;">Disrtict</th>
						<th style="text-align:center;">No of Children Rescued</th>
						<th style="text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
				
			<?php

		foreach($inside_accountroll_detils as $row):
		?>
				<tr>

				    <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['district'];?> </td>
				  <td><?php echo $row['count'];?> </td>
				  <td style="text-align:center;"><a href="<?php

                     if($selected_dist==NULL)
					 {
						 $type_inside="dist";
						echo $view_rescuechld.$from.'/'.$to.'/'.$type_inside.'/'.$row['userid'];
					 }
						?>" class="btn btn-info"> <span class="entypo-eye">  View Details </a></td>
				</tr>
	 <?php  endforeach; ?>

<?php }?>
			</tbody>

		</table>
	</div>

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
</section>

<script type="text/javascript">
var title=$( "#type option:selected" ).text();
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
			"paging": true,
			"dom": 'Blftrip',
			buttons: [ {extend: 'excelHtml5',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-file-excel-o"></i> Excel',
				title: "MIS Report-"+title
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: "MIS Report-"+title
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
			   
			   cols[1] = {text: 'Mis Report', alignment: 'right', margin:[10,10,20] };
			   var objHeader = {};
			   objHeader['columns'] = cols;
			   doc['header']=objHeader;
			   var cols = [];
			   cols[0] = {text: 'Supported By Unicef', alignment: 'left', margin:[20] };
			   cols[1] = {text: 'Printed ON:'+today+'from http://www.cpmis.org/clts ', alignment: 'center',};
			   cols[2] = {text: 'Powered By SDRC', alignment: 'right', margin:[0,0,20] };
			   var objFooter = {};
			   objFooter['columns'] = cols;
			   doc['footer']=objFooter;
               
               
                // Data URL generated by http://dataurl.net/#dataurlmaker
            }
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
				
			}
	if(ex_type=='inside_state')
			{
				
				$("#user_grp_div").hide();
				$("#inside_div").show();
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
				 $("#from_to_div").hide();	
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
			
			
				
$("#type").on('change',function(){
	
	var type=$(this).val();
	//console.log(type);
	if(type=='entitlement_card_getnerated' || type=='investigation')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(type=='inside_state')
			{
				//console.log("inside");
				$("#user_grp_div").hide();
				$("#inside_div").show();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(type=='outside_state')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").show();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(type=='cci')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").show();
				 $("#from_to_div").show();
				
			}		
	if(type=='system_access' || type=='last_login' )
			{
				$("#user_grp_div").show();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}		
	if(type=='emp_amt' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(type=='cwc_not_filling' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				
			}
			if(type=='cwc_delay' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				 $("#from_to_div").show();
				
			}
	if(type=='middle_men' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
			    $("#from_to_div").hide();
				
			}
	if(type=='rescued_repeatedly' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
			    $("#from_to_div").show();
				
			}
	if(type=='lc_action' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
			    
				
			}
	if(type=='ngo_dubbious' )
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
			   
				
			}
			
			if(type=='rescued_child' )
			{
				$("#user_grp_div").show();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
			   
				
			}
});	
// Based on the filter URL chnage
		$("#mis_submit").on("click",function(){
			var type=$("#type").val();
			var from=$("#from_dt").val();
			var to=$("#to_dt").val();
			if(type!=='middle_men')
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
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				
			}
			
			if(type=='investigation')
			{
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				
			}
			if(type=='inside_state')
			{
				 var block=$("#block").val();
			     var dist=$("#district").val();
				 
				
				 if(dist==undefined || dist==""  )
				 {
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				 }
				 else if(dist &&  block==undefined || block=="")
				 {
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+dist+'/'+block);
				 }
				 else if(dist &&  block)
				 {
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+dist+'/'+block); 
				 }
				
				
			}
			if(type=='outside_state')
			{
				 var state=$("#state").val();
				 
			     if(state)
				 {
					
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+state);
				 }
				 else{
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				 }
			}
			if(type=='cci')
			{
				
			     var dist=$("#cci_district").val();
				 if(dist==undefined || dist=="" )
				 {
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				  
				 }
				if(dist)
				{
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+dist);
				}
				
			}
			if(type=='system_access')
			{
				 var user_grp=$("#user_grp").val();
				 
			     if(user_grp)
				 {
					 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+user_grp);
				 }
				 else{
					 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				 }
			}
			
			if(type=='last_login')
			{
				 var user_grp=$("#user_grp").val();
				 
			     if(user_grp)
				 {
					 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+user_grp);
				 }
				 else{
					 user_grp=2;
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+user_grp);
				 
				 }
			}
			
			if(type=='emp_amt')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				
			}
			if(type=='cwc_not_filling')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				
			}
			if(type=='cwc_delay')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				
			}
			if(type=='middle_men')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type);
				 
				
			}
			if(type=='rescued_repeatedly')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				
			}
			if(type=='lc_action')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				
			}
			if(type=='ngo_dubbious')
			{
				 
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to);
				 
				
			}
			
			if(type=='rescued_child')
			{
				 var user_grp=$("#user_grp").val();
				 
			     if(user_grp)
				 {
					 
				  window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+user_grp);
				 }
				 else{
					 user_grp=2;
					window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+user_grp);
				 
				 }
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
					$("#error_to_dt").html("To date should be greter than From date");
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
