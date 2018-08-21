<?php

foreach ($view_child_data as $row):
?>
<!-- Start of code -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="panel-title left_float" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Child Basic Information - Child ID: <?php echo $row['child_id']; ?> </div>
        <div class="right_float">
          <div class="print_button">
            <button type="submit" class="btn btn-info" id='prnt1'> <i class="entypo-print"></i>Print</button>&nbsp;
            <button type="button" class="btn btn-info pull-right" id="track_childs"><a href="<?php echo base_url(); ?>index.php?/track_the_child" style="color:#fff;" >Back to List</a></button>
          </div>
        </div>
        <div style="clear:both;"></div>
      </div>
    </div>
    <div class="panel-body">
      <div id="printable">
        <div class="tarea">
          <div class="print_logo"> <img src="assets/images/bihar_logo_red.jpg" alt="Bihar Government" align="left" width="150"> <img src="assets/images/unicef_logo.jpg" alt="Unicef" align="right" width="120" > </div>
          <!-- Table for Basic Information Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Rescued Child Basic Information</h3></th>
              </tr>
              <tr>
                <td colspan="4"><img src="<?php if(file_exists($upload_path.$row['child_id'].'.jpg')) { echo $upload_path.$row['child_id'].'.jpg'; }else{ echo $default;} ?>" alt="..." class="child_img"></td>
              </tr>
              <tr>
                <td class="t-title">2. Date &amp; Time of Rescue</td>
                <td class="t-description"><?php echo $row['idate_of_rescue']; ?></td>
                <td class="t-title">3. Name of the Child</td>
                <td class="t-description"><?php echo $row['child_name']; ?></td>
              </tr>
              <tr>
                <td class="t-title">4. Sex</td>
                <td class="t-description"><?php echo $row['sex']; ?></td>
                <td class="t-title">5. Is Date of Birth present ?</td>
                <td class="t-description"><?php echo $row['isdob']; ?></td>
              </tr>
              <!-------- start of dob show and hide------------------->
              <?php  if($row['isdob']=='Yes') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">5.b. Date of Birth</td>
                <td class="t-description"><?php echo $row['dob'];?></td>
              </tr>
              <?php }?>
              <?php if($row['isdob']=='No') {?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">5.b.i. Years and Months</td>
                <td class="t-description"><?php echo $row['year']; ?> Year(s) and <?php echo $row['month']; ?> Month(s)</td>
              </tr>
              <?php } ?>
              <!-- ---------------end of dob show and hide---------------->
              <tr>
                <td class="t-title">6. Education</td>
                <td class="t-description"><?php echo $row['education']; ?></td>
                <td class="t-title">7. Marital Status</td>
                <td class="t-description"><?php echo $row['material_status']; ?></td>
              </tr>
              <tr>
                <td class="t-title">8. Religion</td>
                <td class="t-description"><?php echo $row['religion']; ?></td>
                <td class="t-title">9. a.Category</td>
                <td class="t-description"><?php echo $row['category']; ?></td>
              </tr>
              <tr>
                <!--catagory other-->
                <?php  if($row['religion']=='other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $row['other_religion']; ?></td>
                <?php }?>
                <!--cend catagory other-->
                <?php  if($row['category']=='other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $row['other_cast']; ?></td>
                <?php }?>
              </tr>
              <tr>
                <td class="t-title">9. b. Caste Name</td>
                <td class="t-description"><?php 
					$cast_value=$row['cast'] ;
                $query=mysql_fetch_assoc(mysql_query("select caste_name from caste_list where id='$cast_value' ")) ;
                echo $query['caste_name'] ;			

		/*	$qry = $this->db->get_where('caste_list',array('id'=>$row['cast']))->result_array();
			  foreach($qry as $cast):
			  $dsts=$cast['caste_name'];
			  endforeach; */
			?></td>
                <td class="t-title">10. Father's Name</td>
                <td class="t-description"><?php echo $row['father_name']; ?></td>
              </tr>
              <tr>
                <td class="t-title">11. Mother's Name</td>
                <td class="t-description"><?php echo $row['mother_name']; ?></td>
                <td class="t-title">12. Address</td>
                <td class="t-description"><?php echo $row['postal_address']; 
					
				?></td>
              </tr>
			  
			  	  <tr>
			    <td class="t-title">13. Police station</td>
                <td class="t-description"><?php
if($row['state']=='IND010'){
$polic_station=$row['police_station'] ;
		$query_polic=mysql_fetch_assoc(mysql_query("select police_station_name from police_stations where id='$polic_station'")) ;
		echo $query_polic['police_station_name'] ;}else{
	echo $row['police_station'] ;	
	
}
				?></td>
                <td class="t-title">14. Pincode</td>
                <td class="t-description">
				<?php
if($row['state']=='IND010'){
$pincode=$row['pincode'] ;
		$query_pincod=mysql_fetch_assoc(mysql_query("select pincode from pincode_list where id='$pincode'")) ;
		echo $query_pincod['pincode'] ;}else{
	echo $row['pincode'] ;		
}
				?>
				 </td>
			  </tr>
              <tr>
                <td class="t-title">15. Contact No.</td>
                <td class="t-description"><?php echo $row['contact_no']; ?></td>
                <td class="t-title">16. State</td>
                <td class="t-description"><?php
			  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$row['state']))->result_array();
			  foreach($qry2 as $dst):
			  $stat=$dst['area_name'];
			  endforeach;
			?>
                  <?php echo $stat;?></td>
              </tr>
              <tr>
                <td class="t-title">17. District</td>
                <td class="t-description"><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['district']))->result_array();
			  foreach($qry as $dss):
			  $dsts=$dss['area_name'];
			  endforeach;
			?>
                  <?php echo $dsts;?> </td>
                <td class="t-title">18. Block</td>
                <td class="t-description"><?php
                if($row['state']=='IND010'){
			  $qry3 = $this->db->get_where('child_area_detail',array('area_id'=>$row['block']))->result_array();
			  foreach($qry3 as $blk):
			  $block=$blk['area_name'];
			  endforeach;
                }else{
                	echo $row['block'] ;
                }
			?>
                  <?php echo $block;?> </td>
              </tr>
              <tr>
                <td class="t-title">19. Birth Registered</td>
                <td class="t-description"><?php echo $row['is_birth_registered']; ?></td>
                <td class="t-title">20. Adhar Card ID</td>
                <td class="t-description"><?php echo $row['adhar_card']; ?></td>
              </tr>
              <tr>
                <td class="t-title">21. Rescued by</td>
                <td class="t-description"><?php echo $row['rescue_by']; ?></td>
                <td class="t-title">22. Place of Rescue</td>
                <td class="t-description"><?php echo $row['basic_place_of_rescue']; ?></td>
              </tr>
              <!-- place of rescue other-->
              <?php  if($row['rescue_by']=='Others') { ?>
              <tr>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $row['rescue_by_other']; ?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <?php }?>
              <!-- end-->
              <tr>
                <td class="t-title">23. Remarks</td>
                <td class="t-description"><?php echo $row['other']; ?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- Row for Within State Block Starts -->
              <?php  if($row['basic_place_of_rescue']=='Within') {

	  $row2	=	$this->db->get_where('child_within_state' , array('child_id' => $row['child_id']))->result_array();

		  foreach($row2	as $wrow):?>
              <tr>
                <th colspan="4" class="bg-navy" colspan="4">
                <h5>Within State</h5>
                </th>
              </tr>
              <tr>
            <tbody>
              <tr>
                <td class="t-title">1. Employer Name</td>
                <td class="t-description"><?php echo $wrow['employer_name']; ?></td>
                <td class="t-title">2. Employer Address</td>
                <td class="t-description"><?php echo $wrow['employer_detail_address']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Contact No</td>
                <td class="t-description"><?php echo $wrow['wcontact_no']; ?></td>
                <td class="t-title">4 i. Place of Rescue</td>
                <td class="t-description"><?php echo $wrow['place_of_rescue']; ?></td>
              </tr>
              <tr>
                <td class="t-title">4 ii. State</td>
                <td class="t-description"><?php
                print_r($wrow['state']);
			  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$wrow['within_state']))->result_array();
			  foreach($qry2 as $dst):
			  $stat3=$dst['area_name'];
			  endforeach;
			?>
                  <?php echo $stat3;?></td>
                <td class="t-title">4 iii. District</td>
                <td class="t-description"><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$wrow['within_district']))->result_array();
			  foreach($qry as $dss):
			  $dsts3=$dss['area_name'];
			  endforeach;
			?>
                  <?php echo $dsts3;?></td>
              </tr>
              <tr>
                <td class="t-title">4 iv. Block</td>
                <td class="t-description"><?php
			  $qry3 = $this->db->get_where('child_area_detail',array('area_id'=>$wrow['within_block']))->result_array();
			  foreach($qry3 as $blk):
			  $block3=$blk['area_name'];
			  endforeach;
			?>
                  <?php echo $block3;?></td>
                <td class="t-title">5. Work involved in</td>
                <td class="t-description">
					<?php
					if($wrow['work_involved']=="Other")
					{
					echo $wrow['work_involved'] ; 
					}else{
					  $qrywags3 = $this->db->get_where('wages',array('id'=>$wrow['work_involved']))->result_array();
					  foreach($qrywags3 as $wagsbl):
					  $wages1=$wagsbl['sector'];
					  endforeach;
					?>				
				<?php echo $wages1 ; } ?></td>				
              </tr>
              <!--work involed other-->
              <?php  if($wrow['work_involved']=='Other') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $wrow['period_work']; ?></td>
              </tr>
              <?php }?>
              <!--end work involed other-->
              <tr>
                <td class="t-title">6. Duration of Work</td>
                <td class="t-description"><?php echo $wrow['wyears']; ?> Year(s) &nbsp; <?php echo $wrow['wmonths']; ?> Months(s) &nbsp; <?php echo $wrow['wdays']; ?> Day(s)</td>
                <td class="t-title">7. By Whom Child was Deployed</td>
                <td class="t-description"><?php echo $wrow['by_whom_deployed']; ?></td>
              </tr>
			 <!-- By Whom Child was deployed other starts-->
			  <?php  if($wrow['by_whom_deployed']=='Other') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $wrow['by_whom_deployed_other']; ?></td>
              </tr>
			  <?php }?>
			  <!-- By Whom Child was deployed other ends-->
              <tr>
                <td class="t-title">8. Working Environment</td>
                <td class="t-description"><?php echo $wrow['environment_in']; ?></td>
                <td class="t-title">9. Behaviour of Employer</td>
                <td class="t-description"><?php echo $wrow['behaviour_of_employer']; ?></td>
              </tr>
              <tr>
			   <!--Working Environment other starts-->
			    <?php  if($wrow['environment_in']=='Other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $wrow['environment_in_other']; ?></td>
				<?php }?>
				<!--Working Environment other ends-->
				<!--Behaviour other starts-->
			    <?php  if($wrow['behaviour_of_employer']=='Other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $wrow['behaviour_of_employer_other']; ?></td>
				<?php } ?>
				<!--Behaviour other end-->
              </tr>
              <tr>
                <td class="t-title">10. Any Complaint lodged at Police Station</td>
                <td class="t-description" colspan="3"><?php echo $wrow['complaint_lodge']; ?></td>
              </tr>
              <!-- if FIR value = Yes Code Starts-->
			   <?php  if($wrow['complaint_lodge']=='Yes') { ?>
              <tr>
                <td class="t-title">10. i. FIR Number</td>
                <td class="t-description"><?php echo $wrow['fir_no']; ?></td>
                <td class="t-title">10. ii. Date of FIR</td>
                <td class="t-description"><?php echo $wrow['fir_date']; ?></td>
              </tr>
              <tr>
                <td class="t-title">10. iii. Name of Police Station</td>
                <td class="t-description" colspan="3"><?php
			if($row['state']=='IND010'){
$name_policestation=$wrow['name_policestation'] ;
		$query_policstation=mysql_fetch_assoc(mysql_query("select police_station_name from police_stations where id='$name_policestation'")) ;
		//print_r($query_policstation);
		echo $query_policstation['police_station_name'] ;}else{
	echo $wrow['name_policestation'] ;	
	
}
?></td>
              </tr>
			  <?php } ?>
              <!-- if FIR value = Yes Code Ends-->
              <tr>
                <td class="t-title">11. Total no. of Working Days in a week and Hour(s) per day</td>
                <td class="t-description"><?php echo $wrow['working_days']; ?> Day(s) <?php echo $wrow['working_hours']; ?> Hour(s)</td>
                <td class="t-title">12. Salary/ Honorarium (Per month)</td>
                <td class="t-description"><?php echo $wrow['salary']; ?> (In Rs.)</td>
              </tr>

            </tbody>
            </td>

            </tr>

            <?php
	 endforeach;
	}?>
            <!-- Row for Within State Block Ends -->
            <!-- Row for Outside State Block Starts -->
            <?php  if($row['basic_place_of_rescue']!='Within') {
			$row3	=	$this->db->get_where('child_outside_state' , array('child_id' => $row['child_id']))->result_array();

		   foreach($row3 as $orow):
			?>
            <tr>
              <th colspan="4" class="bg-navy" colspan="4">
              <h5>Outside State</h5>
              </th>
            </tr>
            <tr>
            <tbody>
              <tr>
                <td class="t-title">1. Employer Name</td>
                <td class="t-description"><?php echo $orow['employer_name']; ?></td>
                <td class="t-title">2. Employer Address</td>
                <td class="t-description"><?php echo $orow['employer_address']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Contact No.</td>
                <td class="t-description"><?php echo $orow['ocontact_no']; ?></td>
                <td class="t-title">4 i. Place of Rescue</td>
                <td class="t-description"><?php echo $orow['place_of_rescue_out']; ?></td>
              </tr>
              <tr>
                <td class="t-title">4 ii. State</td>
                <td class="t-description"><?php
			  $qry215 = $this->db->get_where('child_area_detail',array('area_id'=>$orow['outside_state']))->result_array();

        foreach($qry215 as $dst):
			$stat1=$dst['area_name'];

			  endforeach;
        //print_r($orow['outside_state']);
			?>
                  <?php echo $stat1;?></td>
                <td class="t-title">4 iii. District</td>
                <td class="t-description"><?php
			  $qry216 = $this->db->get_where('child_area_detail',array('area_id'=>$orow['outside_district']))->result_array();
			  foreach($qry216 as $dss):
			  $dsts1=$dss['area_name'];
			  endforeach;
			?><?php echo $dsts1;?></td>
              </tr>
              <tr>
                <td class="t-title">4 iv. Block</td>
                <td class="t-description"><?php
                if($orow['outside_state']=='IND010'){
			  $qry315 = $this->db->get_where('child_area_detail',array('area_id'=>$orow['outside_block']))->result_array();
			  foreach($qry315 as $blk):
			  $block1=$blk['area_name'];
			  endforeach;
                }else{
                	echo $orow['outside_block'] ;
                }
			?>
                  <?php echo $block1;?></td>
                <td class="t-title">5. Work involved in</td>
                <td class="t-description">
				<?php
				if($orow['work_involved_outside']=="Other")
				{
				echo $orow['work_involved_outside'] ;
				}
				else{
			  $qrywags315 = $this->db->get_where('wages',array('id'=>$orow['work_involved_outside']))->result_array();
			  foreach($qrywags315 as $wagsblk):
			  $wages=$wagsblk['sector'];
			  endforeach;
			?>				
				<?php echo $wages ;  } ?></td>
              </tr>
			   <?php  if($orow['work_involved_outside']=='Other') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orow['work_involved_outside_other']; ?></td>
              </tr>
			  <?php }?>
              <tr>
                <td class="t-title">6. Date of production before CWC</td>
                <td class="t-description"><?php echo $orow['date_of_production']; ?></td>
                <td class="t-title">7. Name of CWC</td>
                <td class="t-description"><?php echo $orow['name_of_cwc']; ?></td>
              </tr>
              <tr>
                <td class="t-title">8. Location of concerned CWC</td>
                <td class="t-description">
				<?php echo $orow['location_concern']; ?>
				<?php /*?><?php
			  $qry216 = $this->db->get_where('child_area_detail',array('area_id'=>$orow['location_concern']))->result_array();
			  foreach($qry216 as $dss):
			  $dsts=$dss['area_name'];
			  endforeach;
			?><?php echo $dsts;?><?php */?>
			</td>
                <td class="t-title">9. Details of Certificate, if any</td>
                <td class="t-description"><?php echo $orow['details_of_certificate']; ?></td>
              </tr>
			  <?php  if($orow['details_of_certificate']=='Other') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orow['details_of_certificate_other']; ?></td>
              </tr>
			  <?php }?>
              <tr>
                <td class="t-title">10. By Whom Child was Deployed</td>
                <td class="t-description"><?php echo $orow['oby_whom_deployed']; ?></td>
                <td class="t-title">11. Working Environment</td>
                <td class="t-description"><?php echo $orow['oenvironment_in']; ?></td>
              </tr>
              <tr>
			   <?php  if($orow['oby_whom_deployed']=='Other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orow['by_whom_deployed_other']; ?></td>
				<?php } ?>
				 <?php  if($orow['oenvironment_in']=='Other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orow['oenvironment_in_other']; ?></td>
				<?php } ?>
              </tr>
              <tr>
                <td class="t-title">12. Behaviour of Employer</td>
                <td class="t-description"><?php echo $orow['obehaviour_of_employer']; ?></td>
                <td class="t-title">13. Any complaint lodge at Police Station</td>
                <td class="t-description"><?php echo $orow['ocomplaint_lodge']; ?></td>
              </tr>
              <tr>
			   <?php  if($orow['obehaviour_of_employer']=='Other') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orow['obehaviour_of_employer_other']; ?></td>
				<?php } ?>
				<!-- if FIR value = Yes Code Starts-->
				<?php  if($orow['ocomplaint_lodge']=='Yes') { ?>
                <td class="t-title">13. i. FIR Number</td>
                <td class="t-description"><?php echo $orow['ofir_no']; ?></td>
              </tr>

              <tr>
                <td class="t-title">13. ii. Date of FIR</td>
                <td class="t-description"><?php echo $orow['ofir_date']; ?></td>
                <td class="t-title">13. iii. Name of Police Station</td>
                <td class="t-description" colspan="3"><?php
			if($row['state']=='IND010'){
$name_policestation=$orow['name_policestation'] ;
		$query_policstation=mysql_fetch_assoc(mysql_query("select police_station_name from police_stations where id='$name_policestation'")) ;
		echo $query_policstation['police_station_name'] ;}else{
	echo $orow['name_policestation'] ;	
	
}
?></td>
              </tr>
			  <?php } ?>
			  <!-- if FIR value = Yes Code end-->
              <tr>
                <td class="t-title">14. Total no. of Working Days in a Week and Hour</td>
                <td class="t-description"><?php echo $orow['oworking_days']; ?> Day(s) <?php echo $orow['oworking_hours']; ?> Hour(s)</td>
                <td class="t-title">15. Salary/ Honorarium (Per month)</td>
                <td class="t-description"><?php echo $orow['osalary']; ?> (In Rs)</td>
              </tr>
              <!-- if FIR value = Yes Code Ends-->
            </tbody>
            </td>

            </tr>

            <?php
			 endforeach;
			}?>
            <!-- Row for Outside State Block Ends -->
            </tbody>

          </table>
          <!-- Table for Basic Information Ends -->
          <!-- Table for Order After Production Starts -->
		  <?php

		  $row4	=	$this->db->get_where('order_after_production' , array('child_id' => $row['child_id']))->result_array();
		  foreach($row4 as $orderrow):
		  ?>
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Order After Production</h3></th>
              </tr>
              <tr>
                <td class="t-title">1. Produced by</td>
                <td class="t-description"><?php echo $orderrow['produced']; ?></td>
				 <?php  if($orderrow['produced']=='Others') { ?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orderrow['produced_other']; ?></td>
				<?php } ?>
              </tr>
              <tr>
                <td class="t-title">2. Type of Order issued after production</td>
                <td class="t-description"><?php echo get_phrase($orderrow['order_type']); ?></td>
                <?php if($orderrow['other']){?>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $orderrow['other']; ?></td>
                  <?php }else{?>
                  <td class="t-title"></td>
                  <td class="t-description"></td>
                    <?php }?>
              </tr>
			  <tr>
                <td class="t-title">3. Produced Date Before CWC</td>
                <td class="t-description"><?php if($orderrow['date_of_production']!="0000-00-00"){ echo get_phrase($orderrow['date_of_production']); }else{ echo "Not Available" ;} ?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			<!-- -------- order type parents---------------------->
			  <?php  if($orderrow['order_type']=='Parents') { ?>
              <tr>
                <th colspan="4"><h4>Handed over to Parents/Guardian</h4></th>
              </tr>
              <tr>
			  <td class="t-title">i. District</td>
                <td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$orderrow['parent_dist']))->result_array();
					  foreach($qry2 as $dst1):
					  $stat1=$dst1['area_name'];
					  endforeach;
					?>
					<?php echo $stat1;?></td>
                <td class="t-title">ii. Name of Parents/Gaurdian</td>
                <td class="t-description"><?php echo $orderrow['parents_name']; ?></td>

              </tr>

              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description"><?php echo $orderrow['parent_address']; ?></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"><?php echo $orderrow['parent_date']; ?></td>
              </tr>
			    <?php } ?>
			  <!-- -------- end order type parents---------------------->
			  <!-- -------- order type cci---------------------->
			  <?php  if($orderrow['order_type']=='cci') { ?>
              <tr>
                <th colspan="4"><h4>Handed over to CCI</h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. District</td>
                <td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$orderrow['cci_dist']))->result_array();
					  foreach($qry2 as $dst1):
					  $stat1=$dst1['area_name'];
					  endforeach;
					?>
					<?php echo $stat1;?></td>
                <td class="t-title">ii. Name of CCIs</td>
                <td class="t-description"><?php $cci_area = $this->db->select('area_name')->where('id',$orderrow['ccis_name'])->get('cci_area')->result_array();

			  foreach($cci_area as $crow2):
				echo $crow2['area_name']."</br>";
			  endforeach;
			   ?></td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No</td>
                <td class="t-description"><?php echo $orderrow['cci_address']; ?></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"><?php echo $orderrow['cci_date']; ?></td>
              </tr>
			    <?php } ?>
			  <!-- -------- order type cci---------------------->
			  <!-- -------- order type parents---------------------->
			  <?php  if($orderrow['order_type']=='fit_person') { ?>
              <tr>
                <th colspan="4"><h4>Handed over to Fit Person</h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. District</td>
                <td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$orderrow['fitperson_dist']))->result_array();
					  foreach($qry2 as $dst1):
					  $stat1=$dst1['area_name'];
					  endforeach;
					?>
					<?php echo $stat1;?></td>
                <td class="t-title">ii. Name of the Fit Person</td>
                <td class="t-description"><?php echo $orderrow['fitperson_name']; ?></td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description"><?php echo $orderrow['fitperson_address']; ?></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"><?php echo $orderrow['fitperson_date']; ?></td>
              </tr>
			   <?php } ?>
			  <!-- -------- order type fit_person---------------------->
			  <!-- -------- order type fit_institution---------------------->
			  <?php  if($orderrow['order_type']=='fit_institution') { ?>
              <tr>
                <th colspan="4"><h4>Handed over to Fit Institution</h4></th>
              </tr>
              <tr>
			  <td class="t-title">i. District</td>
                <td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$orderrow['fitinstitution_dist']))->result_array();
					  foreach($qry2 as $dst1):
					  $stat1=$dst1['area_name'];
					  endforeach;
					?>
					<?php echo $stat1;?></td>
                <td class="t-title">ii.  Name of the Fit Institution</td>
                <td class="t-description"><?php echo $orderrow['fitinstitution_name']; ?></td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description"><?php echo $orderrow['fitinstitution_address']; ?></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"><?php echo $orderrow['fitinstitution_date']; ?></td>
              </tr>
			    <?php } ?>
			  <!-- -------- order type fit_institution---------------------->
			  <!-- -------- order type other_place---------------------->
			  <?php  if($orderrow['order_type']=='other_place') { ?>
              <tr>
                <th colspan="4"><h4>Handed over to Other Place</h4></th>
              </tr>
              <tr>

                <td class="t-title">i. District</td>
               <td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$orderrow['otherplace_dist']))->result_array();
					  foreach($qry2 as $dst1):
					  $stat1=$dst1['area_name'];
					  endforeach;
					?>
					<?php echo $stat1;?></td>
				<td class="t-title">ii. Name of Other Place</td>
                <td class="t-description"><?php echo $orderrow['otherplace_name']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No</td>
                <td class="t-description"><?php echo $orderrow['otherplace_address']; ?></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"><?php echo $orderrow['otherplace_date']; ?></td>
              </tr>
			  <?php } ?>
			  <!-- -------- order type other_place---------------------->
              <tr>
                <td class="t-title">3. Whether registered to Track Child Portal</td>
                <td class="t-description"><?php echo $orderrow['wheather_linked']; ?></td>
				<?php /*?><?php if($orderrow['wheather_linked']=='Yes') { ?><?php */?>
                <td class="t-title">3. i. Profile id Number (if Yes)</td>
                <td class="t-description"><?php echo $orderrow['profile_id']; ?></td>
				<?php /*?><?php } ?><?php */?>
              </tr>

            </tbody>
          </table>
		  <?php endforeach; ?>
          <!-- Table for Order After Production Ends -->
          <!-- Table for Additional Detail Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Additional Detail</h3></th>
              </tr>
              <!-- Education Section Starts -->
			  <?php

		  $row5	=	$this->db->get_where('child_educational_detail' , array('child_id' => $row['child_id']))->result_array();
		  foreach($row5 as $edurow):
		  ?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>1. Educational History</h5></th>
              </tr>
              <tr>
                <td class="t-title">1 a. School Attended</td>
                <td class="t-description"><?php echo $edurow['school_attended']; ?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <?php if($edurow['school_attended'] == 'Yes'){?>
			  <tr>
                <td class="t-title">1 b. Select Education Level</td>
                <td class="t-description"><?php echo $edurow['education_level']; ?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">i. School Details</td>
                <td class="t-description"><?php echo $edurow['details_of_school']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $edurow['school_detail_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Medium of Study</td>
                <td class="t-description"><?php echo $edurow['medium_of_study']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $edurow['medium_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Reason for Leaving School</td>
                <td class="t-description"><?php echo $edurow['reason_for_leaving']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $edurow['reason_other']; ?></td>
              </tr>
			  <?php } ?>
              <tr>
                <td class="t-title">2. Vocational Training</td>
                <td class="t-description"><?php echo $edurow['vocational_training']; ?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			 <!-- vocational training yes value-->
			  <?php  if($edurow['vocational_training']=='Yes') { ?>
              <tr>
                <td class="t-title">i. Name of Vocational Trade</td>
                <td class="t-description"><?php echo $edurow['vocational_trade_name']; ?></td>
                <td class="t-title">ii. No. of Years</td>
                <td class="t-description"><?php echo $edurow['no_of_years']; ?></td>
              </tr>
			  <?php } ?>
			  <!-- vocational training yes value end-->
              <tr>
                <td class="t-title">3. Others (If Any)</td>
                <td class="t-description" colspan="3"><?php echo $edurow['other']; ?></td>
              </tr>
			  <?php endforeach;?>
              <!-- Education Section Ends -->
              <!-- Health Section Starts -->
			   <?php

		  $row6	=	$this->db->get_where('child_health_detail' , array('child_id' => $row['child_id']))->result_array();
		  foreach($row6 as $healthrow):
		  ?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>2. Health Status</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Height(in cm)</td>
                <td class="t-description"><?php echo $healthrow['height']; ?></td>
                <td class="t-title">2. Weight(in kg)</td>
                <td class="t-description"><?php echo $healthrow['weight']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Details of Handicap/Disability </td>
                <td class="t-description"><?php echo $healthrow['details_of_handicap']; ?></td>
                <td class="t-title">3 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $healthrow['details_of_handicap_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">4. Blood Group</td>
                <td class="t-description"><?php echo $healthrow['blood_group']; ?></td>
                <td class="t-title">5. Health Card Issued</td>
                <td class="t-description"><?php echo $healthrow['health_card_issued']; ?></td>
              </tr>
			  <!--Health Card issued yes-->
			  <?php  if($healthrow['health_card_issued']=='Yes') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">Please Specify</td>
                <td class="t-description"><?php echo $healthrow['health_card_issued_yes']; ?></td>
              </tr>
			  <?php }?>
			   <!--Health Card issued yes end-->
              <tr>
                <td colspan="4" ><h4>6. Details Of Health Condition of the Child</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Respiratory Disorders</td>
                <td class="t-description"><?php echo $healthrow['respiratory_disorders']; ?></td>
                <td class="t-title">ii. Hearing Impairment</td>
                <td class="t-description"><?php echo $healthrow['hearing_impairment']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Eye Diseases</td>
                <td class="t-description"><?php echo $healthrow['eye_diseases']; ?></td>
                <td class="t-title">iv. Dental Diseases</td>
                <td class="t-description"><?php echo $healthrow['dental_disease']; ?></td>
              </tr>
              <tr>
                <td class="t-title">v. Cardiac Diseases</td>
                <td class="t-description"><?php echo $healthrow['cardiac_diseases']; ?></td>
                <td class="t-title">vi. Skin Diseases</td>
                <td class="t-description"><?php echo $healthrow['skin_disease']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vii. Sexually Transmitted Diseases</td>
                <td class="t-description"><?php echo $healthrow['sexually_transmitted_diseases']; ?></td>
                <td class="t-title">viii. Neurological Disorders</td>
                <td class="t-description"><?php echo $healthrow['neurological_disorders']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ix. Mentally Challenged</td>
                <td class="t-description"><?php echo $healthrow['mental_handicap']; ?></td>
                <td class="t-title">x. Physically Challenged</td>
                <td class="t-description"><?php echo $healthrow['physical_handicap']; ?></td>
              </tr>
              <tr>
                <td class="t-title">7. Others (If Any)</td>
                <td class="t-description" colspan="3"><?php echo $healthrow['other_specify']; ?></td>
              </tr>
			  <?php endforeach;?>
              <!-- Health Section Ends -->
              <!-- Family Section Starts -->
			  <?php
		  $row7	=	$this->db->get_where('child_family_detail' , array('child_id' => $row['child_id']))->result_array();
		  foreach($row7 as $familyrow):
		  ?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>3. Family Details</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Type of Family</td>
                <td class="t-description"><?php echo $familyrow['type_of_family']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $familyrow['type_of_family_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">2. Has Family Migrated?</td>
                <td class="t-description"><?php echo $familyrow['is_family_migrate']; ?></td>
                <td class="t-title">2. i. Type of Migration</td>
                <td class="t-description"><?php echo $familyrow['type_migration']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Total no. of Family Members</td>
                <td class="t-description">Male: <?php echo $familyrow['total_no_family_male']; ?> &nbsp;&nbsp; Female: <?php echo $familyrow['total_no_family_female']; ?></td>
                <td class="t-title">4. No of Persons who have not completed 18 years of age</td>
                <td class="t-description">Male: <?php echo $familyrow['not_completed_18yrs_male']; ?> &nbsp;&nbsp; Female: <?php echo $familyrow['not_completed_18yrs_female']; ?></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>5. Relationship Among the Family Members</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Father &amp; Mother</td>
                <td class="t-description"><?php echo $familyrow['father_mother']; ?></td>
                <td class="t-title">ii. Father &amp; Child</td>
                <td class="t-description"><?php echo $familyrow['father_child']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Mother &amp; Child</td>
                <td class="t-description"><?php echo $familyrow['mother_child']; ?></td>
                <td class="t-title">iv. Father &amp; Siblings</td>
                <td class="t-description"><?php echo $familyrow['father_sibling']; ?></td>
              </tr>
              <tr>
                <td class="t-title">v. Mother &amp; Siblings</td>
                <td class="t-description"><?php echo $familyrow['mother_sibling']; ?></td>
                <td class="t-title">vi. Rescued Child and Siblings</td>
                <td class="t-description"><?php echo $familyrow['rescue_child_siblings']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vii. Overal relationship among the family members</td>
                <td class="t-description"><?php echo $familyrow['overal_relationship']; ?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php endforeach;?>
              <!-- Family Section Ends -->
              <!-- Economic condition Section Starts -->
			  <?php
		 	 $row8	=	$this->db->get_where('child_family_economy' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row8 as $ecorow):
		  		?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>4. Economic Condition of the Family</h5></th>
              </tr>
              <tr>
                <td colspan="4" ><h4>1. Description of Dwelling</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Type of Structure</td>
                <td class="t-description"><?php echo $ecorow['structure_type']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['structure_type_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Roofing Quality</td>
                <td class="t-description"><?php echo $ecorow['roofing_quality']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['roofing_quality_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Toilet Facilities in/ outside the Home</td>
                <td class="t-description"><?php echo $ecorow['toilet_facilities']; ?></td>
                <td class="t-title">iv. Electricity Facility </td>
                <td class="t-description"><?php echo $ecorow['electricity_facilities']; ?></td>
              </tr>
              <tr>
                <td class="t-title">v. Water Facility in/ outside Home</td>
                <td class="t-description"><?php echo $ecorow['water_facility']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['water_facility_other']; ?></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>2. Properties Owned by the Family</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Land Available</td>
                <td class="t-description"><?php echo $ecorow['land_available']; ?></td>
                <td class="t-title">i a.Specify Area with Unit</td>
                <td class="t-description"><?php echo $ecorow['land_area']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Household Assets</td>
                <td class="t-description"><?php echo $ecorow['household_articles']; ?></td>
                <td class="t-title">iii. Vehicles</td>
                <td class="t-description"><?php echo $ecorow['vehicles_type']; ?></td>
              </tr>
			   <?php  if($ecorow['vehicles_type']=='Other') { ?>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">iii a. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['other_vehcle']; ?></td>
              </tr>
			  <?php } ?>
              <tr>
                <td class="t-title">iv. BPL Card</td>
                <td class="t-description"><?php echo $ecorow['bpl_card']; ?></td>
                <td class="t-title">iv a. Provide the No.</td>
                <td class="t-description"><?php echo $ecorow['bpl_no']; ?></td>
              </tr>
			  <tr>
                <td class="t-title">v.  Ration Card</td>
                <td class="t-description"><?php echo $ecorow['ration_card']; ?></td>
                <td class="t-title">v a. Provide the No.</td>
                <td class="t-description"><?php echo $ecorow['ration_card_no']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vi. Indira Awaas</td>
                <td class="t-description"><?php echo $ecorow['indira_awas']; ?></td>
                <td class="t-title">vi a. Provide the no.</td>
                <td class="t-description"><?php echo $ecorow['indira_awas_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vii. Job Card available under MGNREGA</td>
                <td class="t-description"><?php echo $ecorow['job_card']; ?></td>
                <td class="t-title">vii a. Provide the no.</td>
                <td class="t-description"><?php echo $ecorow['card_no']; ?></td>
              </tr>
              <tr>
                <td class="t-title">viii. RSBY Card</td>
                <td class="t-description"><?php echo $ecorow['rsby_card']; ?></td>
                <td class="t-title">viii a. Provide the no.</td>
                <td class="t-description"><?php echo $ecorow['rsby_no']; ?></td>
              </tr>
              <tr>

                <td class="t-title">ix. Comes under Food Security Scheme</td>
                <td class="t-description"><?php echo $ecorow['food_security']; ?></td>
				 <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <?php endforeach;?>
              <!-- Economic condition Section Ends -->
              <!-- Reasons for involved in child labour Section Starts -->
			  <?php
		 	 $row9	=	$this->db->get_where('child_reason_labour' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row9 as $resrow):
		  		?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>5. Reasons for Involved in Child Labour</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Reason for Leaving family</td>
                <td class="t-description"><?php echo $resrow['reason_for_leaving'];?> </td>
                <td class="t-title">2. With whom was the child staying prior to rescue </td>
                <td class="t-description"><?php echo $resrow['staying_prior_rescue'];?></td>
              </tr>
              <tr>
                <?php if($resrow['guardian_rel']){ ?>
                <td class="t-title" >Guardian relation </td>
                <td class="t-description"> <?php echo $resrow['guardian_rel']?> </td>
                <?php }else if($resrow['friends_rel']){?>
                  <td class="t-title">Friend Name</td>
                  <td class="t-description" > <?php echo $resrow['friends_rel']?> </td>
                  <?php } else{?>
                    <td class="t-title" > </td>
                    <td class="t-description" >  </td>
                    <?php }?>
                <td class="t-title">3. Parental care towards the child before rescue</td>
                <td class="t-description"><?php echo $resrow['care_before_rescue'];?></td>

              </tr>
              <tr>
                <td colspan="4" ><h4>Frequency of visit of parent(s)</h4></td>
              </tr>
              <tr>
                <td class="t-title">4. i. Prior to Institutionalization</td>
                <td class="t-description"><?php echo $resrow['parent_prior_institute'];?></td>
                <td class="t-title">4. ii. After Institutionalization</td>
                <td class="t-description"><?php echo $resrow['parent_after_institute'];?></td>
              </tr>
			  <?php endforeach;?>
              <!-- Reasons for involved in child labour Section Ends -->
              <!-- Status Section Starts -->
			   <?php
		 	 $row10	=	$this->db->get_where('child_employment_status' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row10 as $starow):
		  		?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>6. Status During the Employment of the Child and Nature of the Employer </h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Duration of Working Hours</td>
                <td class="t-description"><?php echo $starow['working_hours'];?></td>
                <td class="t-title">2. Reason Due to which the child had to work</td>
                <td class="t-description"><?php echo $starow['income_utilization'];?></td>
              </tr>
              <tr>
                <td class="t-title">3. Details of Savings </td>
                <td class="t-description"><?php echo $starow['savings'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['savings_other'];?></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>4. Type of Child Abuse (if any)</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Verbal Abuse</td>
                <td class="t-description"><?php echo $starow['abuse_met'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['verbal_abuse_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Physical Abuse</td>
                <td class="t-description"><?php echo $starow['physical_abuse'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['physical_abuse_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Sexual Abuse</td>
                <td class="t-description"><?php echo $starow['sexual_abuse'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['sexual_abuse_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">iv. Any other Abuse (Please Specify)</td>
                <td class="t-description"><?php echo $starow['other_plz_specify'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>5. Difficulties Faced</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Denial of Food</td>
                <td class="t-description"><?php echo $starow['denial_food'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['denial_food_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Beaten Mercilessly</td>
                <td class="t-description"><?php echo $starow['beaten_mercilessly'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['beaten_mercilessly_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Causing Injury</td>
                <td class="t-description"><?php echo $starow['causing_injury'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['causing_injury_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">6. Exploitation Faced by the Child</td>
                <td class="t-description"><?php echo $starow['exploitation_faced'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['exploitation_other'];?></td>
              </tr>
			  <?php endforeach;?>
              <!-- Status Section Starts -->
              <!-- Habit Section Starts -->
			  <?php
		 	 $row11	=	$this->db->get_where('child_habit_detail' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row11 as $habrow):
		  		?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>7. Habit of the Child</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Details of Delinquent Behaviour, if any</td>
                <td class="t-description"><?php echo $habrow['detail_delinquent'];?></td>
                <td class="t-title">1 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['detail_delinquent_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">2. Reason for Delinquent Behaviour</td>
                <td class="t-description"><?php echo $habrow['reason_delinquent'];?></td>
                <td class="t-title">2 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['reason_delinquent_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">3. Nature</td>
                <td class="t-description"><?php echo $habrow['nature'];?></td>
                <td class="t-title">3 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['nature_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">4. Habit of Child</td>
                <td class="t-description"><?php echo $habrow['habit'];?></td>
                <td class="t-title">4 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['habit_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">5. Hobbies</td>
                <td class="t-description"><?php echo $habrow['hobbies'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php endforeach;?>
              <!-- Habit Section Ends -->
              <!-- Social History Section Starts -->
			   <?php
		 	 $row12	=	$this->db->get_where('child_social_history' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row12 as $sorow):
		  		?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>8. Social History</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Details of Friendship Prior to Rescue</td>
                <td class="t-description"><?php echo $sorow['details_friendship'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $sorow['details_friendship_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">2. Details of Membership in Group</td>
                <td class="t-description"><?php echo $sorow['details_membership'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $sorow['details_membership_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">3. Majority of the Friends are</td>
                <td class="t-description"><?php echo $sorow['majority_friends'];?></td>
                <td class="t-title">4. The Position of the Child in the Groups/League</td>
                <td class="t-description"><?php echo $sorow['position_child'];?></td>
              </tr>
              <tr>
                <td class="t-title">5. Purpose of Being a Member of the Group</td>
                <td class="t-description"><?php echo $sorow['purpose_membership'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $sorow['purpose_member_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">6. Attitude of the Group/League</td>
                <td class="t-description"><?php echo $sorow['attitude_group'];?></td>
                <td class="t-title">7. Venue of Group Meetings</td>
                <td class="t-description"><?php echo $sorow['location_meeting'];?></td>
              </tr>
              <tr>
                <td class="t-title">8. The Reaction of the Society When the Child First Left the Family</td>
                <td class="t-description"><?php echo $sorow['reaction_society'];?></td>
                <td class="t-title">9. The Reaction of the Police Towards the Rescued Child</td>
                <td class="t-description"><?php echo $sorow['reaction_police'];?></td>
              </tr>
              <tr>
                <td class="t-title">10. Social Acceptance of Family in their Community</td>
                <td class="t-description"><?php echo $sorow['social_acceptance'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php endforeach;?>
              <!-- Social History Section Ends -->
            </tbody>
          </table>
          <!-- Table for Additional Detail Ends -->
          <!-- Table for Rescue Starts -->
		  <?php
		 	 $row13	=	$this->db->get_where('final_order' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row13 as $aftrow):
		  		?>
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Final Order</h3></th>
              </tr>
              <tr>
                <td class="t-title">1. Final Order Passed</td>
                <td class="t-description"><?php echo $aftrow['final_ordered'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			 <?php if($aftrow['final_ordered'] =='Yes') {?>
			  <tr>
                <td class="t-title">1 i. Date of Final Order</td>
                <td class="t-description"><?php echo $aftrow['final_order_date'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">1 ii. Type of Final Order</td>
                <td class="t-description"><?php echo $aftrow['type_order'];?></td>
                <td class="t-title">1 ii a. Please Specify</td>
                <td class="t-description"><?php echo $aftrow['type_order_other'];?></td>
              </tr>
			  <?php if($aftrow['type_order'] =='Cases transferred to other Dist/State/Country') {?>
			 <!-- final order state value-->
			 	<tr>
					<td class="t-title">2.Country</td>
					<td class="t-description"><?php echo $aftrow['country'];?></td>
					<td class="t-title">2 i. Please Specify</td>
					<td class="t-description"><?php echo $aftrow['other_country'];?></td>
              	</tr>
					<!--if counrty india-->
					 <?php if($aftrow['country'] =='India') {?>
					<tr>
					<td class="t-title">3.State</td>
					<!--<td class="t-description"><?php echo $aftrow['state'];?>-->
					<td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$aftrow['state']))->result_array();
					  foreach($qry2 as $dst):
					  $stat=$dst['area_name'];
					  endforeach;
					?>
                  <?php echo $stat;?>
					</td>
					<td class="t-title">4.District</td>
					<td class="t-description"><?php
					  $qry2 = $this->db->get_where('child_area_detail',array('area_id'=>$aftrow['dist']))->result_array();
					  foreach($qry2 as $dst1):
					  $stat1=$dst1['area_name'];
					  endforeach;
					?>
					<?php echo $stat1;?></td>
					<?php }?>
              		</tr>
					<!--end-->
			  <!--end-->
			  <?php  } ?>
			  <?php  } ?>
            </tbody>
          </table>
		  <?php endforeach;?>
          <!-- Table for Rescue Ends -->
          <!-- Table for Act/Compliance Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="6" class="bg-navy"><h3>Act/Compliance</h3></th>
              </tr>
              <!-- Labour Act Detail Section Starts -->
			  <?php
		 	 	$row14	=	$this->db->get_where('labour_act' , array('child_id' => $row['child_id']))->result_array();
		 	 	foreach($row14 as $labactrow):
		  		?>
              <tr>
                <th colspan="6" class="bg-navy"><h5>Compliance by LRD under CLPRA/Apex Court</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has Notice been Issued for Compensation of Rs.20,000</td>
                <td class="t-description"><?php echo $labactrow['compensation_notice_issued'];?></td>
                 <td class="t-title">1 i. Letter no.</td>
                <td class="t-description"><?php echo $labactrow['compensation_letter'];?></td>
              </tr>
              <tr>
                <td class="t-title">1 ii. Date of issue</td>
                <td class="t-description"><?php echo $labactrow['date_of_issue'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">2. Has Compensation of Rs.20,000 been Deposited</td>
                <td class="t-description"><?php echo $labactrow['compensation_deposited'];?></td>
                <td class="t-title">2.i. Date of issue (If Yes)</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_date'];?></td>
              </tr>
			   <?php if($labactrow['compensation_deposited'] =="No") {?>
			  <tr>
                <td class="t-title">2 i. Was Poceeding of Certificate initiated</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_initiated'];?></td>
				 <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if($labactrow['poceeding_certificate_initiated'] =="Yes") {?>
              <tr>
                <td class="t-title">2.i.a. Name and place of authority to whom the Certificate was filed</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_authority'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_authority_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">2.i.b. Place</td>
                <td class="t-description"><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$labactrow['poceeding_certificate_place']))->result_array();
			  foreach($qry as $dss):
			  $dsts=$dss['area_name'];
			  endforeach;
			?><?php echo $dsts;?></td>
                <td class="t-title">2.i.c. Date on which Certificate was Issued </td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_date'];?></td>
              </tr>
              <tr>
                <td class="t-title">2.i.d. Is certificate case disposed</td>
                <td class="t-description"><?php echo $labactrow['certificate_case_dispose'];?></td>
                 <td class="t-title">2.i.d.a. Order Number</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_orderno'];?></td>
                 <td class="t-title">2.i.d.b. Date</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_date'];?></td>
              </tr>
			  <?php }
			  }?>
              <tr>
                <td class="t-title">3. Has prosecution been filed(under Child Labour Act)</td>
                <td class="t-description"><?php echo $labactrow['has_prosecution_file'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php
			  if($labactrow['has_prosecution_file'] =="Yes") {?>
              <tr>
                <td class="t-title">3 i. Name of authority to whom prosecution was filed</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_authority'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_other'];?></td>
              </tr>
              <tr>

                <td class="t-title">3 ii. Place</td>
                <td class="t-description"><?php
					  $qry1 = $this->db->get_where('child_area_detail',array('area_id'=>$labactrow['prosecution_file_place']))->result_array();
					  foreach($qry1 as $dss1):
					  $dsts1=$dss1['area_name'];
					  endforeach;
					?><?php echo $dsts1;?>
				</td>
				 <td class="t-title">3 iii. Date on which prosecution was filed</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_date'];?></td>
              </tr>

              <tr>
			  <?php } ?>
                <td class="t-title">4. Status of Case</td>
                <td class="t-description"><?php echo $labactrow['status_of_cases'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if disposed -->
			 <?php  if($labactrow['status_of_cases'] =="Disposed") {?>
              <tr>
                <td class="t-title">4 i. Date of Disposal</td>
                <td class="t-description"><?php echo $labactrow['date_of_disposed'];?></td>
                <td class="t-title">4 ii. Type of Disposal</td>
                <td class="t-description"><?php echo $labactrow['type_of_disposed'];?></td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['type_of_disposed_other'];?></td>
              </tr>
			  <tr>

                <td class="t-title">iii. Order Number</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_orderno'];?></td>
				<td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <?php } ?>
              <!-- if pending -->
			 <?php  if($labactrow['status_of_cases'] =="Pending") {?>
              <tr>
                <td class="t-title">4 i. Reason for Pendency (If pending)</td>
                <td class="t-description" colspan="3"><?php echo $labactrow['reason_pendency'];?></td>
              </tr>
			  <?php } ?>
			  <?php endforeach;?>
              <!-- Labour Act Detail Section Ends -->
              <!-- Wages Act Detail Section Starts -->
			  <?php
		 	 	$row15	=	$this->db->get_where('child_wages', array('child_id' => $row['child_id']))->result_array();
		 	 	foreach($row15 as $wactrow):
				
					$wages_type = $wactrow['wages_type'];
					$wages_name	=	$this->db->get_where('wages', array('id' => 1))->result_array();
					//print_r($wages_name) ;
					$wages_amount = $wactrow['wages_amount'];
					$total_work = $wactrow['total_work'];
					$no_of_days = $wactrow['no_of_days'];
					
		  		?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Compliance by LRD on Minimum Wages Act</h5></th>
              </tr>
              <tr>
			  <?php $row151	=	$this->db->get_where('child_basic_detail', array('child_id' => $row['child_id']))->result_array();
			  foreach($row151 as $data):
				if($data['basic_place_of_rescue'] == 'Within'){
					$row152 =	$this->db->get_where('child_within_state', array('child_id' => $row['child_id']))->result_array();
					foreach($row152 as $x):
					$wd = $x['working_days'];
					$wh = $x['working_hours'];
					$sal = $x['salary'];
					endforeach;
				}else{
					$row152 =	$this->db->get_where('child_outside_state', array('child_id' => $row['child_id']))->result_array();
					foreach($row152 as $x):
					$wd = $x['oworking_days'];
					$wh = $x['oworking_hours'];
					$sal = $x['osalary'];
					endforeach;
				}
				endforeach;?>
				
				
			

                <td class="t-title">1. Total no. of Working Days in a Week and Hours per day</td>
                <td class="t-description"><?php echo $wd ." Days and ".$wh." Hours";?></td>
               <?php foreach($wages_name as $wages_row): ?>
				<td class="t-title">2.Types of Sectors/Indurstries </td>
                <td class="t-description"><?php echo $wages_row['sector'] ;?></td>
				<?php endforeach;  ?>
              </tr>
              <tr>
			    <td class="t-title">3. Wages Amount</td>
                <td class="t-description"><?php echo $wages_amount ;?></td>
				<td class="t-title">4.No of days Work</td>
                <td class="t-description"><?php echo $no_of_days ; ?></td>
              </tr>
			   <tr>
			    <td class="t-title">5. Total work amount </td>
                <td class="t-description"><?php echo $total_work ;?></td>
				 <td class="t-title">6. Salary/Honorarium (Per month)</td>
                <td class="t-description"><?php if($sal!=""){ echo "INR ".$sal; }else{ echo "Not Available" ; } ?></td>     
              </tr>
			  <tr>
                <td class="t-title">7. Minimum Wages paid by the employer?</td>
                <td class="t-description"><?php echo $wactrow['mnimum_wages'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if($wactrow['mnimum_wages'] =="No"){?>
              <tr>
                <td class="t-title">7 i. Has claim been filed?</td>
                <td class="t-description"><?php echo $wactrow['has_claim'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			   <?php if($wactrow['has_claim']=="Yes"){?>
              <tr>
                <td class="t-title">7 ii. Date on which the claim was filed</td>
                <td class="t-description"><?php echo $wactrow['date_claim'];?></td>
                <td class="t-title">7 iii. Date on which the claim was disposed off</td>
                <td class="t-description"><?php echo $wactrow['date_disposed'];?></td>
              </tr>
              <tr>
                <td class="t-title">7 iv.  Has the claim amount been deposited by the employer?</td>
                <td class="t-description"><?php echo $wactrow['has_claim_amount'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if Yes -->
			  <?php if($wactrow['has_claim_amount']=="Yes"){?>
              <tr>
                <td class="t-title">7 v. Amount of claim received in Rupees</td>
                <td class="t-description"><?php echo $wactrow['claim_amount'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php } ?>
              <!-- if No -->
			  <?php if($wactrow['has_claim_amount']=="No"){?>
              <tr>
                <td class="t-title">7 v. Has prosecution been filed?</td>
                <td class="t-description"><?php echo $wactrow['prosecution_field'];?></td>
                <td class="t-description" colspan="2"></td>
              </tr>
			  	<?php if($wactrow['prosecution_field']=="Yes"){?>
				  <tr>
					<td class="t-title">7.v.a. Name and Place of authority to whom prosecution was filed</td>
					<td class="t-description"><?php echo $wactrow['place_authority'];?></td>
					<td class="t-title">7.v.b. Date on which prosecution was filed</td>
					<td class="t-description"><?php echo $wactrow['prosecution_date'];?></td>
				  </tr>
				  <tr>
					<td class="t-title">7.v.c. Date on which prosecution was disposed off</td>
					<td class="t-description"><?php echo $wactrow['date_prosecution_disposed'];?></td>
					<td class="t-title">7.v.d. Order Number</td>
					<td class="t-description"><?php echo $wactrow['order_number'];?></td>
				  </tr>
				  <?php } ?>

			  <?php
			  }
			  }
			  } ?>
              <tr>
                <td class="t-title">8. Status of Case</td>
                <td class="t-description"><?php echo $wactrow['status_of_cases'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if disposed -->
			  <?php if($wactrow['status_of_cases'] == 'disposed') { ?>
              <tr>
                <td class="t-title">4 i. Date of Disposal</td>
                <td class="t-description"><?php echo $wactrow['date_of_disposed'];?></td>
                <td class="t-title">4 ii. Type of Disposal</td>
                <td class="t-description"><?php echo $wactrow['type_disposed'];?></td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">4.ii.a. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $wactrow['type_disposed_other'];?></td>
              </tr>
			   <?php } if($wactrow['status_of_cases'] == 'pending') { ?>
              <!-- if pending -->
              <tr>
                <td class="t-title">Reason for Pendency (If Pending)</td>
                <td class="t-description" colspan="3"><?php echo $wactrow['reason_pendency'];?></td>
              </tr>
			   <?php }?>
			  <?php endforeach;?>
              <!-- Wages Act Detail Section Ends -->
              <!-- IPC Act Detail Section Starts -->
			   <?php

		 	 $row16	=	$this->db->get_where('child_ipc_act' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row16 as $ipcrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>IPC Act</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Name of Section/Subsection</td>
				<?php
					$section_id=$ipcrow['name_section'] ;
			 $section_newid	=	$this->db->get_where('sections' , array('id' => $section_id))->result_array();
			
			
					?>
				
                <td class="t-description"><?php foreach($section_newid as $section_row):  if($section_row['section_name']!=""){ echo $section_row['section_name']; }else{ echo "Not Available" ; }?></td>
				<?php endforeach ?>
                <td class="t-title">2. Remarks</td>
                <td class="t-description"><?php echo $ipcrow['remarks'];?></td>
              </tr>
			  <?php endforeach;?>
              <!-- IPC Act Detail Section Ends -->
              <!-- Other Act Detail Section Starts -->
			  <?php

		 	 $row17	=	$this->db->get_where('child_otherlaws_act' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row17 as $otherrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Other Laws Act</h5></th>
              </tr>
              <tr>
                <td class="t-title">1 i. Name of Act</td>
                <td class="t-description"><?php echo $otherrow['act_name1'];?></td>
                <td class="t-title">1 ii. Section/Subsection</td>
                <td class="t-description"><?php echo $otherrow['section_name1'];?></td>
              </tr>
              <tr>
                <td class="t-title">2 i. Name of Act</td>
                <td class="t-description"><?php echo $otherrow['act_name2'];?></td>
                <td class="t-title">2 ii. Section/Subsection</td>
                <td class="t-description"><?php echo $otherrow['section_name2'];?></td>
              </tr>
              <tr>
                <td class="t-title">3 i. Name of Act</td>
                <td class="t-description"><?php echo $otherrow['act_name3'];?></td>
                <td class="t-title">3 ii. Section/Subsection</td>
                <td class="t-description"><?php echo $otherrow['section_name3'];?></td>
              </tr>
			  <?php endforeach;?>
              <!-- Other Act Detail Section Ends -->
            </tbody>
          </table>
          <!-- Table for Act/Compliance Ends -->
          <!-- Table for Rehabilitation Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Rehabilitation</h3></th>
              </tr>
              <!-- Labour Resource Department Section Starts -->
			  <?php
		 		 $row30=$this->db->get_where('child_labour_resource_department' , array('child_id' => $row['child_id']))->result_array();
		 	 	foreach($row30 as $lrdeptrow):
		  		?>
            
              
              
              <tr>
                <th colspan="4" class="bg-navy"><h5>Labour Resource Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has Package of Rs.<?php if($lrdeptrow['package_type']==0){ echo '1800'; } else if($lrdeptrow['package_type']==1){echo '3000';} ?> been Provided ?</td>
                <td class="t-description"><?php echo $lrdeptrow['package'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if ($lrdeptrow['package'] == "No"){?>
              <tr>
                <td class="t-title">1. i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['package_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php } ?>
			  <?php if ($lrdeptrow['package'] == "Yes"){?>
              <tr>
                <td class="t-title">1. i. If yes, date of Package provided</td>
                <td class="t-description"><?php echo $lrdeptrow['package_yes'];?></td>
                <td class="t-title">ii. Details of Mode of Payment</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_of_payment'];?></td>
              </tr>
              <tr>
                <?php if($lrdeptrow['mode_of_payment']=='cheque'){?>
                <td class="t-title">ii. a. Cheque (Cheque No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_cheque'];?></td>
                <td class="t-title">iii.Proof</td>
               
					
					<?php } ?>
					<?php if($lrdeptrow['mode_of_payment']=='cash'){?>
                <td class="t-title">ii. a. Cash </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_cash'];?></td>
                <td class="t-title">iii.Proof</td>
                
					<?php } ?>
						<?php if($lrdeptrow['mode_of_payment']=='Account'){?>
                <td class="t-title">ii. a. Account Transfer(Account no) </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_account'];?></td>
                <td class="t-title">iii.Proof</td>
                	
					<?php } ?>
					<?php if($lrdeptrow['mode_of_payment']=='Draft'){?>
                <td class="t-title">ii. a.Draft(Draft no) </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_draft'];?></td>
                <td class="t-title">iii.Proof</td>
                
					
					<?php } ?>
					<?php if($lrdeptrow['mode_of_payment']=='Others'){?>
                <td class="t-title">ii. a. Other (Please specify) </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_other'];?></td>
                <td class="t-title">iii.Proof</td>
                
					
					<?php } ?>
					<td class="t-description">
				 <?php if (file_exists('uploads/entitlement_proof/labour/q1/'.$lrdeptrow['child_id'].'.jpg')) {
						echo "<a href='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".jpg' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".jpg'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q1/'.$lrdeptrow['child_id'].'.pdf')){
							echo  "<a href='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".pdf' target='_blank'><img width='100px' src='assets/images/pdf.png'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q1/'.$lrdeptrow['child_id'].'.png')){
							echo  "<a href='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".png' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".png'  /></a>";
						}else{
						echo 'No Proof Attached';
						}

					?></td>
              </tr>
			  <?php } ?>

              <tr>
                <td class="t-title">2. Has Rs.5000/- been Deposited in the District Child Welfare-Cum-Rehabilitation Account ?</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if ($lrdeptrow['deposited'] == "No"){ ?>
              <tr>
                <td class="t-title">2. i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php } ?>
			  <?php if ($lrdeptrow['deposited'] == "Yes"){ ?>
              <tr>
                <td class="t-title">2 i. If Yes, Date of Deposit</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited_yes'];?></td>
                <td class="t-title">ii. Detail of mode of deposit in account</td>
                <td class="t-description"><?php 
                if($lrdeptrow['mode_of_deposit']=='account_no')
                {
                echo "Account Transfer";
                }
                else if($lrdeptrow['mode_of_deposit']=='sanction_no')
                {
                	echo "Sanction order";
                }
                else{
                	echo "Others";
                }
                ?></td>
              </tr>
              <tr>
			  <?php if ( $lrdeptrow['mode_of_deposit'] == 'account_no'){ ?>
                <td class="t-title">ii. a. Account Transfer (Account No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_account'];?></td>
				<?php  }  ?>
				 <?php if ( $lrdeptrow['mode_of_deposit'] == 'sanction_no'){ ?>
                <td class="t-title">ii. a.  Sanction Order No.</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_sanction'];?></td>
				<?php  }  ?>
				 <?php if ( $lrdeptrow['mode_of_deposit'] == 'other_sanction'){ ?>
                <td class="t-title">ii. a.Other  (Account No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_other'];?></td>
				<?php  }  ?>
                <td class="t-title">iii. Attach Proof</td>
                <td class="t-description">
				<?php if (file_exists('uploads/entitlement_proof/labour/q2/'.$lrdeptrow['child_id'].'.jpg')) {
						echo "<a href='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".jpg' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".jpg'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q2/'.$lrdeptrow['child_id'].'.pdf')){
							echo  "<a href='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".pdf' target='_blank'><img width='100px' src='assets/images/pdf.png'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q2/'.$lrdeptrow['child_id'].'.png')){
							echo  "<a href='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".png' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".png'  /></a>";
						}else{
						echo 'No Proof Attached';
						}

					?>
				</td>
              </tr>
			   <?php } ?>
              <tr>
                <td class="t-title">3 a. Whether the Rescued Child benefited from the Rehabilitation Fund of Rs.20,000 from employer?</td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if ($lrdeptrow['interest_of_rehabilitation'] == "No"){ ?>
              <tr>
                <td class="t-title">3.a.i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			   <?php } ?>
			    <?php if ($lrdeptrow['interest_of_rehabilitation'] == "Yes"){ ?>
              <tr>
                <td class="t-title">3.a.i. Attach Proof</td>
                <td class="t-description">
				<?php if (file_exists('uploads/entitlement_proof/labour/q3/'.$lrdeptrow['child_id'].'.jpg')) {
						echo "<a href='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".jpg' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".jpg'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q3/'.$lrdeptrow['child_id'].'.pdf')){
							echo  "<a href='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".pdf' target='_blank'><img width='100px' src='assets/images/pdf.png'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q3/'.$lrdeptrow['child_id'].'.png')){
							echo  "<a href='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".png' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".png'  /></a>";
						}else{
						echo 'No Proof Attached';
						}

					?>
				</td>
                <td class="t-title" colspan="2"></td>
              </tr>

			   <?php } ?>
			 
			  <?php endforeach;?>
              <!-- Labour Resource Department Section Starts -->
              <!--  Education Department Section Starts -->
			   <?php
		 	 $row18=$this->db->get_where('child_education_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row18 as $edudeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Education Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has rescued child been enrolled in school ?</td>
                <td class="t-description"><?php echo $edudeptrow['enrolled_school'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>

              <tr>
                <td colspan="4" ><h4>If yes please provide some details</h4></td>
              </tr>
			  <?php if($edudeptrow['enrolled_school'] == "Yes"){?>
              <tr>
                <td class="t-title">School Type</td>
                <td class="t-description"><?php echo $edudeptrow['school_type'];?></td>
                <td class="t-title">In which class rescued child enrolled</td>
                <td class="t-description"><?php echo $edudeptrow['class_enrolled'];?></td>
              </tr>
			  <tr>
                <td class="t-title">Contact No.</td>
                <td class="t-description"><?php echo $edudeptrow['contact_no'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">School Name</td>
                <td class="t-description"><?php echo $edudeptrow['school_name'];?></td>
                <td class="t-title">District</td>
                <td class="t-description"><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$edudeptrow['dist']))->result_array();
			  foreach($qry as $dss):
			  $dsts=$dss['area_name'];
			  endforeach;

			?>
                  <?php echo $dsts;?></td>
              </tr>
              <tr>
                <td class="t-title">Block</td>
                <td class="t-description"><?php
			  $qry1 = $this->db->get_where('child_area_detail',array('area_id'=>$edudeptrow['block']))->result_array();
			  foreach($qry1 as $dsb):
			  $blk=$dsb['area_name'];
			  endforeach;
			?>
                  <?php echo $blk;?></td>
                <td class="t-title">Is rescued child getting free uniforms?</td>
                <td class="t-description"><?php echo $edudeptrow['free_cloths'];?></td>
              </tr>
              <tr>
                <td class="t-title">Is rescued Child getting free bag &amp; Books</td>
                <td class="t-description"><?php echo $edudeptrow['free_bag_books'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if (file_exists('uploads/entitlement_proof/edu_image/' .$edudeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/edu_image/' .$edudeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/edu_image/' .$edudeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}

					?>

				</td>
              </tr>
			  <?php } ?>
			  <?php endforeach;?>
              <!--  Education Department Section Ends -->
              <!--  Rural Development Department Starts -->
			  <?php
		 	 $row19	=$this->db->get_where('child_rural_development_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row19 as $ruraldeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Rural Development Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child's family benefiting under MGNREGA ?</td>
                <td class="t-description"><?php echo $ruraldeptrow['is_mgnrega'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				<?php if($ruraldeptrow['is_mgnrega']== 'Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/rural/q1/' .$ruraldeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/rural/q1/' .$ruraldeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/rural/q1/' .$ruraldeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
					}
					?></td>
              </tr>
              <tr>
                <td class="t-title">2. Is rescued child's family benefiting under SGSY ?</td>
                <td class="t-description"><?php echo $ruraldeptrow['is_sgsy'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($ruraldeptrow['is_sgsy']== 'Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/rural/q2/' .$ruraldeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/rural/q2/' .$ruraldeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/rural/q2/' .$ruraldeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}
					}
					?></td>
              </tr>
              <tr>
                <td class="t-title">3. Is rescued child's family benefiting under IAY ?</td>
                <td class="t-description"><?php echo $ruraldeptrow['is_iay'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($ruraldeptrow['is_iay']== 'Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/rural/q3/' .$ruraldeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/rural/q3/' .$ruraldeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/rural/q3/' .$ruraldeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
			  <?php endforeach;?>
              <!--  Rural Development Department Ends -->
              <!--  Urban Development Department Starts -->
			  <?php
		 	 $row20	=$this->db->get_where('child_urban_development_deoartment' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row20 as $urdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Urban Development Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child family benefited under SJSRY ?</td>
                <td class="t-description"><?php echo $urdeptrow['is_sjsry'];?></td>
                <td class="t-title">Attach Proof</td>

                <td class="t-description">
				<?php if($urdeptrow['is_sjsry'] == 'Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/urban/q1/' .$urdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/urban/q1/' .$urdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/urban/q1/' .$urdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}

					?>
					<?php } ?>
				</td>

              </tr>
              <tr>
                <td class="t-title">2. Is rescued child's family benefiting under JNURM (Urban area only) ?</td>
                <td class="t-description"><?php echo $urdeptrow['is_jnrum'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($urdeptrow['is_jnrum'] == 'Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/urban/q2/' .$urdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/urban/q2/' .$urdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/urban/q2/' .$urdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}

					?>
					<?php } ?>
					</td>
              </tr>
			  <?php endforeach;?>
              <!--  Urban Development Department Ends -->
              <!--  Revenue and Land Reform Department Starts -->
			  <?php
		 	 $row21	=	$this->db->get_where('child_revenue_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row21 as $revdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Revenue and Land Reform Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child family benefiting under Land settlement / distribution ?</td>
                <td class="t-description"><?php echo $revdeptrow['is_benefited_landsettlement'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($revdeptrow['is_benefited_landsettlement'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/revenue/' .$revdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/revenue/' .$revdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/revenue/' .$revdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Basgriha Parcha ?</td>
                <td class="t-description"><?php echo $revdeptrow['is_benefited_landsettlement'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($revdeptrow['is_benefited_landsettlement'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/revenue/parcha/' .$revdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/revenue/parcha/' .$revdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/revenue/parcha/' .$revdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
			  <?php endforeach;?>
              <!-- Revenue and Land Reform Department Ends -->
              <!-- Health Department Starts -->
			  <?php

		 	 $row22	=	$this->db->get_where('child_health_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row22 as $hdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Health Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child family getting Health Cards ?</td>
                <td class="t-description"><?php echo $hdeptrow['is_health_cards'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($hdeptrow['is_health_cards'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/health/' .$hdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/health/' .$hdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/health/' .$hdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
					}
					?>
					</td>
              </tr>
			  <?php endforeach;?>
              <!-- Health Department Ends -->
              <!--  SC & ST Welfare, Backward and Extremely Backward classes Welfare Departments Starts -->
			  <?php

		 	 $row23	=	$this->db->get_where('child_scst_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row23 as $scdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>SC &amp; ST Welfare, Backward and Extremely Backward classes Welfare Departments</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has rescued child been benefited by scholarships ?</td>
                <td class="t-description"><?php echo $scdeptrow['benefited_scholarships'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($scdeptrow['benefited_scholarships'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/scst/' .$scdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/scst/' .$scdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/scst/' .$scdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
			  <?php endforeach;?>
              <!--  SC & ST Welfare, Backward and Extremely Backward classes Welfare Departments Ends -->
              <!-- Food & Civil Supply Department Starts -->
			   <?php

		 	 $row24	=	$this->db->get_where('child_food_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row24 as $fdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Food &amp; Civil Supply Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has rescued child's family been provided with Ration Card ?</td>
                <td class="t-description"><?php echo $fdeptrow['is_ration_card'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($fdeptrow['is_ration_card'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/food/q1/' .$fdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/food/q1/' .$fdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/food/q1/' .$fdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}
						else{
						echo 'No';
						}
						}
					?>
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Is rescued child's family benefiting under PDS ?</td>
                <td class="t-description"><?php echo $fdeptrow['id_pds'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				<?php if($fdeptrow['id_pds'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/food/q2/' .$fdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/food/q2/' .$fdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/food/q2/' .$fdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
			   <?php endforeach;?>
              <!-- Food & Civil Supply Department Ends -->
              <!-- Minority Welfare Department Starts -->
			   <?php

		 	 $row25	=	$this->db->get_where('child_minority_welfare_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row25 as $mdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Minority Welfare Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child's family benefiting under special housing scheme ?</td>
                <td class="t-description"><?php echo $mdeptrow['is_housing_scheme'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($mdeptrow['is_housing_scheme'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/minority/q1/' .$mdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/minority/q1/' .$mdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/minority/q1/' .$mdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Is the rescued child's family getting loans if they are willing to take it ?</td>
                <td class="t-description"><?php echo $mdeptrow['is_loan'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				<?php if($mdeptrow['is_loan'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/minority/q2/' .$mdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/minority/q2/' .$mdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/minority/q2/' .$mdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
						}
					?>
				</td>
              </tr>
			  <?php endforeach;?>
              <!-- Minority Welfare Department Ends -->
              <!-- Social Welfare Departments Starts -->
			  <?php

		 	 $row26	=	$this->db->get_where('child_social_welfare_department' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row26 as $sdeptrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Social Welfare Departments</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Are the family members of the rescued child eligible for getting benefit under social pension scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['social_pension_eligible'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if Yes -->
			  <?php if($sdeptrow['social_pension_eligible'] =="Yes"){?>
              <tr>
                <td class="t-title">1 i. Is the family of the rescued child benefitting under any pension scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['social_pension_availed'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				<?php if($sdeptrow['social_pension_availed'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/social/q1/' .$sdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q1/' .$sdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q1/' .$sdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
					}
					?>
				</td>
              </tr>
			  <?php } ?>
              <!-- if Yes -->
              <tr>
                <td class="t-title">2. Is the rescued child eligible for getting benefit under Pravarish Scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['parvarish_scheme_eligible'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <!-- if Yes -->
			  <?php if($sdeptrow['parvarish_scheme_eligible'] =="Yes"){?>
              <tr>
                <td class="t-title">2 i. Is the rescued child getting benefit under Pravarish Scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['parvarish_scheme_availed'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				<?php if($sdeptrow['parvarish_scheme_availed'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/social/q2/' .$sdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q2/' .$sdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q2/' .$sdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
						}
					?>
				</td>
              </tr>
			  <?php } ?>
              <tr>
                <td class="t-title">3. Is the family of the rescued child benefitting under Sponsorship ?</td>
                <td class="t-description"><?php echo $sdeptrow['family_availed_sponsorship'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				<?php if($sdeptrow['family_availed_sponsorship'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/social/q3/' .$sdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q3/' .$sdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q3/' .$sdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
						}
					?>
				</td>
              </tr>
              <tr>
                <td class="t-title">4. Is the rescued child getting benefit under Sponsorship ?</td>
                <td class="t-description"><?php echo $sdeptrow['is_child_sponsorship'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				<?php if($sdeptrow['is_child_sponsorship'] =='Yes') { ?>
				<?php if (file_exists('uploads/entitlement_proof/social/q4/' .$sdeptrow['child_id'] . '.jpg')) {
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q4/' .$sdeptrow['child_id'] . '.pdf')){
						echo 'Yes';
						}else if (file_exists('uploads/entitlement_proof/social/q4/' .$sdeptrow['child_id'] . '.png')){
						echo 'Yes';
						}else{
						echo 'No';
						}
						}
					?></td>
              </tr>
			  <?php endforeach; ?>
              <!-- Social Welfare Departments Ends -->
			    <!-- Restoration Status Starts -->
			 <?php

		 	 $row221	=	$this->db->get_where('child_restoration_status' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row221 as $restorrow):
		  	?>
              <tr>
                <th colspan="4" class="bg-navy"><h5>Restoration Status </h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Whether Child is residing at place where restored</td>
                <td class="t-description"><?php echo $restorrow['place_restored'];?></td>
                <td class="t-title">2. Last Date of Verification </td>
				<td class="t-description"><?php echo $restorrow['date_of_varifiaction'];?></td>
              </tr>
              <!-- if Yes -->
			  <?php if($restorrow['place_restored'] =="No"){?>
              <tr>
                <td class="t-title">1 i. Reason for missing</td>
                <td class="t-description"><?php echo $restorrow['reason_for_missing'];?></td>
                <td class="t-title">1 ii. Date of missing</td>
                <td class="t-description"><?php echo $restorrow['date_of_missing'];?></td>
              </tr>
			  <?php } ?>

			  <?php endforeach; ?>
              <!-- Restoration Status Ends -->
              <!-- CM Relief  -->
			    <tr>
                <th colspan="4" class="bg-navy"><h5>CM Relief Fund</h5></th>
              </tr>
            
              <!-- CM Relief  -->
			   <?php
				
		 $cm_fund = $this->db->get_where('cm_fund_eligibility' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($cm_fund as $cm_fund_row):
			 $bank_id=$cm_fund_row['bank_details_id'] ;
			 $bank_details=mysql_fetch_assoc(mysql_query("select * from bank_account_details where id='$bank_id'"));
			 $block_id=$row['block'] ;
			 $district=$row['district'];
			 $state1=$row['state'] ;
			 $block_name=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$block_id'"));
			 $district=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$district'"));
			 $state=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$state1'"));
			 

		  	?>
              
              <tr>
                <td class="t-title"> Has Child physically Verified </td>
                <td class="t-description"><?php echo $cm_fund_row['physically_verified']; ?></td>
				<?php if($cm_fund_row['physically_verified']=="Yes"){ ?>
                <td class="t-title"> If yes, Date of verification</td>
				<td class="t-description"><?php echo $cm_fund_row['verification_date'];?></td>
				<?php } ?>
              </tr>            
              <tr>
                <td class="t-title">Current Address</td>
                <td class="t-description"><?php echo $row['postal_address'];?></td>
                <td class="t-title">Eligible for CM Relief</td>
                <td class="t-description"><?php echo $cm_fund_row['eligible_cm_fund'];?></td>
              </tr> 
			  <tr>
                <td class="t-title">Child  Address(If Differs)</td>
                <td class="t-description"><?php echo $cm_fund_row['child_address'];?></td>
                <td class="t-title">Panchayat Name</td>
                <td class="t-description"><?php
if($row['state']=='IND010'){
	$panchayat=$row['panchayat_name'];
	$query_panchayat=mysql_fetch_assoc(mysql_query("select name from panchayat_names where id='$panchayat'")) ;
		//print_r($query_polic);
		echo $query_panchayat['name'] ;}else{
	echo $row['panchayat_name'] ;	
	
}
				?></td>
              </tr> 
			 <tr>
			    <td class="t-title">Police station</td>
                <td class="t-description"><?php
if($row['state']=='IND010'){
$polic_station=$row['police_station'] ;
		$query_polic=mysql_fetch_assoc(mysql_query("select police_station_name from police_stations where id='$polic_station'")) ;
		echo $query_polic['police_station_name'] ;}else{
	echo $row['police_station'] ;	
	
}
				?></td>
                <td class="t-title">Pincode</td>
                <td class="t-description">
				<?php
if($row['state']=='IND010'){
$pincode=$row['pincode'] ;
		$query_pincod=mysql_fetch_assoc(mysql_query("select pincode from pincode_list where id='$pincode'")) ;
		echo $query_pincod['pincode'] ;}else{
	echo $row['pincode'] ;		
}
				?>
				 </td>
</tr>
              
			   <tr>
                <td class="t-title">Block</td>
                <td class="t-description"><?php echo $block_name['area_name']; ?></td>
                <td class="t-title">District</td>
                <td class="t-description"><?php echo $district['area_name'] ; ?></td>
              </tr>
			  <tr>
                <td class="t-title">State</td>
                <td class="t-description" colspan="3"><?php echo $state['area_name'] ;?></td>
                
              </tr
			  <tr>
                <td class="t-title">Eligible for CM Relief</td>
                <td class="t-description"><?php echo $cm_fund_row['eligible_cm_fund'];?></td>
                <td class="t-title">Demand Raised</td>
                <td class="t-description"><?php if($cm_fund_row['demand_raised']=='1'){ echo "Yes" ; }else{ echo "No" ; } ?></td>
              </tr>
			  <tr>
                <td class="t-title"> Demand Received</td>
                <td class="t-description"><?php if($cm_fund_row['demand_received']=='1'){ echo "Yes" ; }else{ echo "No" ; } ?> </td>
                <td class="t-title"> Letter no With amount </td>
                <td class="t-description"><?php echo $cm_fund_row['lettterno_amount'] ; ?> </td>
              </tr>
			  <tr>
                <td class="t-title"> Availability Of Bank Details </td>
                <td class="t-description" colspan="3"><?php if($cm_fund_row['availabil_bankdetails']=='1'){ echo "Yes" ; }else{ echo "No" ; } ?> </td>
               
              </tr>
			  <tr>
                <td class="t-title"> Bank Account No </td>
                <td class="t-description"><?php echo $bank_details['acc_no'];?></td>
                <td class="t-title"> IFSC Code </td>
                <td class="t-description"><?php echo $bank_details['ifsc_code'];?></td>
              </tr>
			  <tr>
                <td class="t-title"> Bank Name </td>
                <td class="t-description"><?php echo $bank_details['bank_name'];?></td>
                <td class="t-title">Bank Address </td>
                <td class="t-description"><?php echo $bank_details['bank_address'];?></td>
              </tr> 
               <tr>
                <td class="t-title">Has Money Transfered</td>
                <td class="t-description"><?php echo $cm_fund_row['mtransfer_proof'];?></td>
                <td class="t-title"> Proof </td>
                <td class="t-description">
						<?php 
						if (file_exists('uploads/entitlement_proof/cm_relief/' .$cm_fund_row['child_id'] . '.jpg')) {
							echo '<a href="uploads/entitlement_proof/cm_relief/'.$cm_fund_row['child_id'].'.jpg" target="_blank"><img src="uploads/entitlement_proof/cm_relief/'.$cm_fund_row['child_id'].'.jpg" width="150" height="90px" /></a>';
						}else if (file_exists('uploads/entitlement_proof/cm_relief/' .$cm_fund_row['child_id'] . '.pdf')){
							echo '<a href="uploads/entitlement_proof/cm_relief/'.$cm_fund_row['child_id'].'.pdf" target="_blank"><img src="assets/images/pdf.png" height="90px" /><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/cm_relief/' .$cm_fund_row['child_id'] . '.png')){
							echo '<a href="uploads/entitlement_proof/cm_relief/'.$cm_fund_row['child_id'].'.png" target="_blank"><img src="uploads/entitlement_proof/cm_relief/'.$cm_fund_row['child_id'].'.png" height="90px" /></a>';
						}
						else{
						echo 'No Proof Uploaded';
						}
						?>


				</td>
              </tr>

			  <?php endforeach; ?>
            </tbody>
          </table>
          <!-- Table for Rehabilitation Ends -->
          <?php endforeach;?>
        </div>
      </div>
      <div id="editor"></div>
      <div class="form-group print_button">
        <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
        <button type="submit" class="btn btn-info btn-login" id='prnt'> <i class="entypo-print"></i> Print </button>
      </div>
      <div class="left_float"> </div>
      <div style="clear:both"></div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function () {

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });

		 $('#prnt').on('click', function() {



	           $.print("#printable");

				});

		  $('#prnt1').on('click', function() {



	           $.print("#printable");

				});
    });
    function validate_project_add(formData, jqForm, options) {

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		 window.location.reload();
        toastr.success("Project updated successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }


	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
	 
//code added  by poojashree 
//for back button in mis report
$(function() {
  $( "#cancel-button1" ).click(function(){ window.history.back() });
 });


$(document).ready(function () {
$("#track_childs").on("click",function(){
			 $('#loading').show();
		 });
});

</script>
