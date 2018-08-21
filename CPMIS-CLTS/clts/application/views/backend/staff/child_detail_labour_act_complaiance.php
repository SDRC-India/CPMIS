<style>
td.t-description1 {
    min-width: 80px !important;
    color: #777;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
}

td.t-title1 {
    min-width: 120px !important;
    color: #333;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
}
.tarea table {
    margin-top: -17px;
}

</style>

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
          <!-- Table for Basic Information Ends -->
          <!-- Table for Order After Production Starts -->
		  <?php

		  $row4	=	$this->db->get_where('order_after_production' , array('child_id' => $row['child_id']))->result_array();
		  foreach($row4 as $orderrow):
		  ?>
          <table class="table table-bordered table-striped">
            
          </table>
		  <?php endforeach; ?>
          <!-- Table for Order After Production Ends -->
          <!-- Table for Additional Detail Starts -->
        <table class="table table-bordered table-striped">
            
          </table>
          <!-- Table for Additional Detail Ends -->
          <!-- Table for Rescue Starts -->
		  <?php
		 	 $row13	=	$this->db->get_where('final_order' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row13 as $aftrow):
		  		?>
          <table class="table table-bordered table-striped">
            
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
		 	 	//print_r($labactrow);
		  		?>
              <tr>
                <th colspan="6" class="bg-navy"><h5>Compliance by LRD under CLPRA/Apex Court</h5></th>
              </tr>
              <tr>
                <td class="t-title1">1. Has Notice been Issued for Compensation of Rs.20,000</td>
                <td class="t-description1"><?php echo $labactrow['compensation_notice_issued'];?></td>
                 <td class="t-title1">1 i. Letter no.</td>
                <td class="t-description1"><?php echo $labactrow['compensation_letter'];?></td>
                <td class="t-title1">1 ii. Date of issue</td>
                <td class="t-description1"><?php echo $labactrow['date_of_issue'];?></td>
              </tr>
              <tr>
                <td class="t-title">2. Has Compensation of Rs.20,000 been Deposited</td>
                <td class="t-description"><?php echo $labactrow['compensation_deposited'];?></td>
                
              <?php if($labactrow['compensation_deposited']=="Yes") { ?> 
                <td class="t-title1">2.i. Date of issue (If Yes)</td>
                <td class="t-description1"><?php echo $labactrow['poceeding_certificate_date'];?></td>
                <?php } ?>
              </tr>
			   <?php if($labactrow['compensation_deposited'] =="No") {?>
			  <tr>
                <td class="t-title">2 i. Was Poceeding of Certificate initiated</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_initiated'];?></td>
				 <td class="t-title" colspan="4"></td>
              </tr>
			  <?php if($labactrow['poceeding_certificate_initiated'] =="Yes") {?>
              <tr>
                <td class="t-title">2.i.a. Name and place of authority to whom the Certificate was filed</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_authority'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description" colspan="4" ><?php echo $labactrow['poceeding_certificate_authority_other'];?></td>
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
                <td class="t-description" colspan="4"><?php echo $labactrow['poceeding_certificate_date'];?></td>
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
			  
			<?php   if($labactrow['certificate_case_dispose'] =="Yes") {?>
			
              <tr>
                <td class="t-title">3. Has prosecution been filed(under Child Labour Act)</td>
                <td class="t-description" colspan="4"><?php echo $labactrow['has_prosecution_file'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <?php }?>
			  <?php
			  if($labactrow['has_prosecution_file'] =="Yes") {?>
              <tr>
                <td class="t-title">3 i. Name of authority to whom prosecution was filed</td>
                <td class="t-description" colspan="4"><?php echo $labactrow['prosecution_file_authority'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_other'];?></td>
              </tr>
              <tr>

                <td class="t-title">3 ii. Place</td>
                <td class="t-description" colspan="4"><?php
					  $qry1 = $this->db->get_where('child_area_detail',array('area_id'=>$labactrow['prosecution_file_place']))->result_array();
					  foreach($qry1 as $dss1):
					  $dsts1=$dss1['area_name'];
					  endforeach;
					?><?php echo $dsts1;?>
				</td>
				 <td class="t-title">3 iii. Date on which prosecution was filed</td>
                <td class="t-description" colspan="4"><?php echo $labactrow['prosecution_file_date'];?></td>
              </tr>

              <tr>
			  <?php } ?>
                <td class="t-title">4. Status of Case</td>
                <td class="t-description"><?php echo $labactrow['status_of_cases'];?></td>
                <td class="t-title" colspan="4"></td>
              </tr>
              <!-- if disposed -->
			 <?php  if($labactrow['status_of_cases'] =="Disposed") {?>
              <tr>
                <td class="t-title">4 i. Date of Disposal</td>
                <td class="t-description"><?php echo $labactrow['date_of_disposed'];?></td>
                <td class="t-title">4 ii. Type of Disposal</td>
                <td class="t-description" colspan="4"><?php echo $labactrow['type_of_disposed'];?></td>
              </tr>
              
             
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description" colspan="4"><?php echo $labactrow['type_of_disposed_other'];?></td>
              </tr>
			  <tr>

                <td class="t-title">4 iii. Order Number/Amount</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_orderno'];?></td>
				<td class="t-title"></td>
                <td class="t-description" colspan="4"></td>
              </tr>
              <?php  if($labactrow['type_of_disposed']="Others"){?>
             <tr>
              <td class="t-title">4.ii.a. Please Specify</td>
              <td class="t-description"><?php echo $labactrow['type_of_disposed_other'];?></td>
             
             </tr>
             
             <?php }?>
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
                <th colspan="6" class="bg-navy"><h5>Compliance by LRD on Minimum Wages Act</h5></th>
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
				<td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
			    <td class="t-title">3. Wages Amount</td>
                <td class="t-description"><?php echo $wages_amount ;?></td>
				<td class="t-title">4.No of days Work</td>
                <td class="t-description"><?php echo $no_of_days ; ?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			   <tr>
			    <td class="t-title">5. Total work amount </td>
                <td class="t-description"><?php echo $total_work ;?></td>
				 <td class="t-title">6. Salary/Honorarium (Per month)</td>
                <td class="t-description"><?php if($sal!=""){ echo "INR ".$sal; }else{ echo "Not Available" ; } ?></td> 
                <td class="t-title"></td>
                <td class="t-description"></td>    
              </tr>
			  <tr>
                <td class="t-title">7. Minimum Wages paid by the employer?</td>
                <td class="t-description"><?php echo $wactrow['mnimum_wages'];?></td>
                <td class="t-title" colspan="2"></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
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
                <td class="t-title"></td>
                <td class="t-description"></td>
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
                <th colspan="6" class="bg-navy"><h5>IPC Act</h5></th>
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
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <?php endforeach;?>
              <!-- IPC Act Detail Section Ends -->
              <!-- Other Act Detail Section Starts -->
			  <?php

		 	 $row17	=	$this->db->get_where('child_otherlaws_act' , array('child_id' => $row['child_id']))->result_array();
		 	 foreach($row17 as $otherrow):
		  	?>
              <tr>
                <th colspan="6" class="bg-navy"><h5>Other Laws Act</h5></th>
              </tr>
              <tr>
                <td class="t-title">1 i. Name of Act</td>
                <td class="t-description"><?php echo $otherrow['act_name1'];?></td>
                <td class="t-title">1 ii. Section/Subsection</td>
                <td class="t-description"><?php echo $otherrow['section_name1'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">2 i. Name of Act</td>
                <td class="t-description"><?php echo $otherrow['act_name2'];?></td>
                <td class="t-title">2 ii. Section/Subsection</td>
                <td class="t-description"><?php echo $otherrow['section_name2'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">3 i. Name of Act</td>
                <td class="t-description"><?php echo $otherrow['act_name3'];?></td>
                <td class="t-title">3 ii. Section/Subsection</td>
                <td class="t-description"><?php echo $otherrow['section_name3'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <?php endforeach;?>
              <!-- Other Act Detail Section Ends -->
            </tbody>
          </table>
          <!-- Table for Act/Compliance Ends -->
          <!-- Table for Rehabilitation Starts -->
        <table class="table table-bordered table-striped">
            
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

</script>
