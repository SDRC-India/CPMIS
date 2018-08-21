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
          Child Basic Information - <b>Child ID:</b> <?php echo $row['child_id']; ?> (<?php echo $row['child_name']; ?>) </div>
        <div class="right_float">
          <div class="print_button">
            <button type="submit" class="btn btn-info" id='prnt1'> <i class="entypo-print"></i>Print</button>
          </div>
        </div>
        <div style="clear:both;"></div>
      </div>
    
    <div class="panel-body">
      <div id="printable">
        
          <div class="print_logo"> <img src="assets/images/bihar_logo_red.jpg" alt="Bihar Government" align="left" width="150"> <img src="assets/images/unicef_logo.jpg" alt="Unicef" align="right" width="120" > </div>
          <!-- Table for Basic Information Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h5  style="float:left;font-weight:bold;color: #f3f3f3;
    font-size: 16px;">CM Relief Fund</h5><span style="float:right;font-weight:bold;color:#FFF;> <button type="button" class="btn " id="cancel-button"> <u>Back to List</u></button></span></th>
              </tr>
              <tr>
                <td colspan="4"><img src="<?php if(file_exists($upload_path.$row['child_id'].'.jpg')) { echo $upload_path.$row['child_id'].'.jpg'; }else{ echo $default;} ?>" alt="..." class="child_img"></td>
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
                <td class="t-title"> Has Child physically Verified ? </td>
                <td class="t-description"><?php echo $cm_fund_row['physically_verified'];?></td>
				<?php if($cm_fund_row['physically_verified']=="Yes"){ ?>
                <td class="t-title"> If yes, Date of verification :</td>
				<td class="t-description"><?php echo $cm_fund_row['verification_date'];?></td>
				<?php } ?>
              </tr>            
              <tr>
                <td class="t-title">Current Address:</td>
                <td class="t-description"><?php echo $row['postal_address'];?></td>
                 <td class="t-title">Child  Address (If Differs):</td>
                <td class="t-description"><?php echo $cm_fund_row['child_address'];?></td>
              </tr> 
			  <tr>               
                <td class="t-title">Panchayat Name:</td>
                <td class="t-description"><?php echo $row['panchayat_name'];?></td>
                <td class="t-title">Pin Code:</td>
                <td class="t-description"><?php echo $row['pincode'];?></td>
              </tr> 
			  <tr>                
                <td class="t-title">Police Station:</td>
                <td class="t-description"><?php echo $row['police_station_name'];?></td>
                <td class="t-title">Block:</td>
                <td class="t-description"><?php echo $block_name['area_name']; ?></td>
              </tr>
			   <tr>                
                <td class="t-title">District:</td>
                <td class="t-description"><?php echo $district['area_name'] ; ?></td>
                 <td class="t-title">State:</td>
                <td class="t-description"><?php echo $state['area_name'] ;?></td>
              </tr>
			  <tr>
                <td class="t-title">Eligible for CM Relief:</td>
                <td class="t-description"><?php echo $cm_fund_row['eligible_cm_fund'];?></td>
                
                 <td class="t-title">If No, Specify the Reason:</td>
                <td class="t-description"><?php echo $cm_fund_row['reason_no'] ; ?></td>
              
               </tr>
			  <tr>
			    <td class="t-title">Demand Raised:</td>
                <td class="t-description"><?php if($cm_fund_row['demand_raised']=='1'){ echo "Yes" ; }else{ echo "No" ; } ?></td>
             
                <td class="t-title"> Demand Received:</td>
                <td class="t-description"><?php if($cm_fund_row['demand_received']=='1'){ echo "Yes" ; }else{ echo "No" ; } ?> </td>
               </tr>
			  <tr>
			   <td class="t-title"> Letter no With amount:</td>
                <td class="t-description"><?php echo $cm_fund_row['lettterno_amount'] ; ?> </td>
              
                <td class="t-title"> Availability Of Bank Details: </td>
                <td class="t-description"><?php if($cm_fund_row['availabil_bankdetails']=='1'){ echo "Yes" ; }else{ echo "No" ; } ?> </td>
               
              </tr>
			  <tr>
                <td class="t-title"> Bank Account No: </td>
                <td class="t-description"><?php echo $bank_details['acc_no'];?></td>
                <td class="t-title"> IFSC Code: </td>
                <td class="t-description"><?php echo $bank_details['ifsc_code'];?></td>
              </tr>
			  <tr>
                <td class="t-title"> Bank Name: </td>
                <td class="t-description"><?php echo $bank_details['bank_name'];?></td>
                <td class="t-title">Bank Address: </td>
                <td class="t-description"><?php echo $bank_details['bank_address'];?></td>
              </tr> 
               <tr>
                <td class="t-title">Has Money Transferred ?</td>
                <td class="t-description"><?php echo $cm_fund_row['mtransfer_proof'];?></td>
                <td class="t-title"> Proof: </td>
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
         
        </div>
      </div>
      <div id="editor"></div>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <div class="form-group print_button">
            <button type="button" class="btn btn-info" id="cancel-button1"> Cancel</button>
        <button type="submit" class="btn btn-info btn-login" id='prnt'> <i class="entypo-print"></i> Print </button>
      </div>
      </div>
       <div class="col-md-4"></div>
      </div>
      <div class="left_float"> </div>
      <div style="clear:both"></div>
    
  </div>
  </div>
</div>
 <?php endforeach;?>
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

	$(function() {
		  $( "#cancel-button1" ).click(function(){ window.history.back() });
		 });



</script>
