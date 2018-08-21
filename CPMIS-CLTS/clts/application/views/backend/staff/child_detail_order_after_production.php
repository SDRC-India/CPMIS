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
          Child  Information order after production- Child ID: <?php echo $row['child_id']; ?> </div>
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
