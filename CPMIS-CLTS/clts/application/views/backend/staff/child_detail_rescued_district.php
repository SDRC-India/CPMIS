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
            <button type="button" class="btn btn-info pull-right" id="cancel-button1"> Back to List</button>
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
			  $qry = $this->db->get_where('caste_list',array('id'=>$row['cast']))->result_array();
			  foreach($qry as $cast):
			  $dsts=$cast['caste_name'];
			  endforeach;
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
			    <td class="t-title">13. Police sation</td>
                <td class="t-description"><?php echo $row['police_station']; ?></td>
                <td class="t-title">14. Pincode</td>
                <td class="t-description"><?php echo $row['pincode'];  ?></td>
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
			  $qry3 = $this->db->get_where('child_area_detail',array('area_id'=>$row['block']))->result_array();
			  foreach($qry3 as $blk):
			  $block=$blk['area_name'];
			  endforeach;
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
                <td class="t-title">21. Rescue by</td>
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
                <td class="t-description" colspan="3"><?php echo $wrow['name_policestation']; ?></td>
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
			  $qry315 = $this->db->get_where('child_area_detail',array('area_id'=>$orow['outside_block']))->result_array();
			  foreach($qry315 as $blk):
			  $block1=$blk['area_name'];
			  endforeach;
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
                <td class="t-description" colspan="3"><?php echo $orow['policestation_name']; ?></td>
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

</script>
