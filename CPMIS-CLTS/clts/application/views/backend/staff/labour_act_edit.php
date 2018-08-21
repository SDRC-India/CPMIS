<style>
.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
z-index: 99999;
}


</style>
<?php
include "modal_msg_labouract.php";

foreach ($labour_act_data as $row):

?>

<div class="row">
  <?php $this->load->view("backend/staff/acttab.php");?>
  <!------------------------------------start of labour act ------------------------------------------->
 <!--for getting the dob -->
		<?php

						?>
		<!--end-->
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?labour_act">Back to list</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Labour Act - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('labour_act/labouract_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Has Notice been Issued for Compensation of Rs.20,000</label>
              <div class="col-sm-6">
                <select name="compensation_notice_issued" class="form-control" id="compensation_notice_issued">
                  <option value=""> Select</option>
                  <option value="Yes" <?php if($row['compensation_notice_issued']=='Yes') echo 'selected'; ?>>Yes </option>
                  <option value="No" <?php if($row['compensation_notice_issued']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-3" id="letterno" <?php if($row['compensation_notice_issued']!='Yes'){ ?> style='display:none;' <?php } ?>>
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 i. Letter no.</label>
              <div class="col-sm-6">
               <div class="input-group date">
                  <input type="text" class="form-control" name="letterno" id="letterno" maxlength="25"
                                value="<?php echo $row['compensation_letter']; ?>"    >
                </div>
				
              </div>
            </div>
          </div>
          <div class="col-sm-4" id="compensation_notice_issued_yes" <?php if($row['compensation_notice_issued']!='Yes'){ ?> style='display:none;' <?php } ?>>
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 ii. Date of issue</label>
              <div class="col-sm-6">
               <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_issue" id="date_of_issue"
                                value="<?php echo $row['date_of_issue'] ; ?>"  readonly  >
                                
                                
                </div>
				<span id="error_msg1"></span>
              </div>
            </div>
          </div>
        </div>
        <!--end of notice been issued row-->
        <div class="row" id='compensation' <?php if($row['compensation_notice_issued']!="Yes"){ ?>style='display:none;' <?php } ?>>
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Has Compensation of Rs.20,000 been Deposited </label>
              <div class="col-sm-3">
                <select name="compensation_deposited"   class="form-control" id="compensation_deposited">
                  <option value=""> Select</option>
                  <option value="Yes" <?php if($row['compensation_deposited']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['compensation_deposited']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
              <div class="col-sm-5" >
            <div class="form-group" id='compensation_date' <?php if($row['compensation_deposited']!='Yes'){ ?> style='display:none;' <?php } ?>>
              <label for="field-1" class="col-sm-6 control-label">2 i. Date of Deposited</label>
              <div class="col-sm-6">
               <div class="input-group date" id="datepicker9"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="compensation_certificate_date" id="compensation_certificate_date"
                                value="<?php echo $row['compansation_date']; ?>"  readonly  >
                </div>
				<span id="error_msg2"></span>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
		 <!--end of Has compensation row-->
		  <!--start of Was poceeding of certificate initiated row-->

        <div id="no_value">
          <div class="row" >
            <div class="col-sm-6">
              <label for="field-1" class="col-sm-6 control-label">2 i. Was Proceeding of Certificate initiated</label>
              <div class="form-group">
                <div class="col-sm-6">
                  <select name="poceeding_certificate_initiated"   class="form-control" id="poceeding_certificate_initiated">
                    <option value=""> Select </option>
                    <option value="Yes" <?php if($row['poceeding_certificate_initiated']=='Yes') echo 'selected'; ?>> Yes </option>
                    <option value="No" <?php if($row['poceeding_certificate_initiated']=='No') echo 'selected'; ?>> No </option>
                  </select>
                </div>
              </div>
            </div>
          </div>
		  <!---->
          <div id="certificate_initiated_yes">
            <div class="row">
              <div class="col-sm-6">
                <label for="field-1" class="col-sm-6 control-label">2.i.a. Name and place of authority to whom the Certificate was filed</label>
                <div class="form-group">
                  <div class="col-sm-6" >
                    <select name="poceeding_certificate_authority"   class="form-control" id="poceeding_certificate_authority">
                      <option value=""> Select </option>
                      <option value="District Certificate Officer" <?php if($row['poceeding_certificate_authority']=='District Certificate Officer') echo 'selected'; ?>> District Certificate Officer </option>
                      <option value="Other" <?php if($row['poceeding_certificate_authority']=='Other') echo 'selected'; ?>> Other </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" id="certificate_filed_othervalue">
                <label for="field-1" class="col-sm-4 control-label">2.i.a.i Others</label>
                <div class="form-group">
                  <div id="poceeding_certificate_authority_other_fr_grp" class="col-sm-6" >
                    <input type="text" class="form-control poceeding_certificate_authority_other"
					name="poceeding_certificate_authority_other" id="poceeding_certificate_authority_other"
					 value="<?php echo $row['poceeding_certificate_authority_other']; ?>" >
            <span class="poceeding_certificate_authority_other_msg color-red"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="field-1" class="col-sm-6 control-label">2.i.b. Place</label>
                <div class="form-group">
                  <div class="col-sm-6" >
                    <select name="poceeding_certificate_place" id="poceeding_certificate_place" class="form-control">
                       <option value="">Select Districts</option>
                  <?php
								          foreach($districts as $distrow):
                                  ?>
                  <option value="<?php echo $distrow['area_id'];?>" <?php if($row['poceeding_certificate_place']==$distrow['area_id']){ echo 'selected'; }  ?>><?php echo $distrow['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                      <!-- js populates -->
                    </select>
                  </div>
                </div>
              </div>           
            </div>
            <div class="row">           
            <div class="col-sm-12">
                <label for="field-1" class="col-sm-3 control-label">2.i.c. Date on which Certificate was issued </label>
                <div class="form-group col-sm-9">
                <div class="row" style="padding-left:7px;">
                <div class="col-sm-4">
                    <label for="field-1" class="control-label">Case No</label>              
                    <input type="text" class="form-control " name="certificate_case_no" id="certificate_case_no" value="<?php echo $row['certificate_issue_caseno'] ; ?>" maxlength="15" >
					<span id="error_msg5"></span>
                  </div>
                  <div class="col-sm-4">
                     <label for="field-1" class="control-label">Date</label>
                     <div class="input-group date" id="datepicker1"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                      <input type="text" class="form-control" name="poceeding_certificate_date" id="poceeding_certificate_date" value="<?php echo $row['poceeding_certificate_date']; ?>"  readonly  >
                    </div>
					<span id="error_msg3"></span>
                  </div>
                   <div class="col-sm-4" style="width:200px;position: absolute;right: 0;">
                   <div class="fileinput fileinput-new" data-provides="fileinput" id="labproof1" data-validate="required">
                     	 <div class="fileinput-new thumbnail thumb-img" style="width: 103px;"  >
							<?php if (file_exists('uploads/entitlement_proof/labour/act/' .$row['child_id'] . '.jpg')) {
							echo '<a href="uploads/entitlement_proof/labour/act/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/labour/act/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
							}else if (file_exists('uploads/entitlement_proof/labour/act/' .$row['child_id'] . '.pdf')){
							echo '<a href="uploads/entitlement_proof/labour/act/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
							}else if (file_exists('uploads/entitlement_proof/labour/act/' .$row['child_id'] . '.png')){
							echo '<a href="uploads/entitlement_proof/labour/act/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/labour/act/'.$row['child_id'].'.png" width="150" height="100" /></a>';
							}else if (file_exists('uploads/entitlement_proof/labour/act/' .$row['child_id'] . '.pdf')){
							echo '<a href="uploads/entitlement_proof/labour/act/'.$row['child_id'].'.pdf"><img src="uploads/pdf-image" width="150" height="100" /></a>';
							}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
							}
						?>		
										</div>
						<div class="pdf_viewq2"></div>
                    <div class="thumb-img1 fileinput-preview fileinput-exists thumbnail " ></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image2" id="image2" accept="image/*"  onchange="return ajaxFileUpload2(this)">
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>                
					</div><br> 
					<span id="img_msg2" style="color:red;"></span>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <label for="field-1" class="col-sm-6 control-label">2.i.d. Is certificate case disposed</label>
                <div class="form-group">
                  <div id="poceeding_certificate_orderno_fr_grp" class="col-sm-6" >
	                  <select name="poceeding_certificate_case_disposed"   class="form-control" id="poceeding_certificate_case_disposed">
	                    <option value=""> Select </option>
	                    <option value="Yes" <?php if($row['certificate_case_dispose']=='Yes') echo 'selected'; ?>> Yes </option>
	                    <option value="No" <?php if($row['certificate_case_dispose']=='No') echo 'selected'; ?>> No </option>
	                  </select>
                  </div>
                </div>
              </div>
            </div>
            <div <?php if($row['certificate_case_dispose']=='No'){ ?> style="display:none;" <?php } ?> id="certificate_case">
            <div class="row">           
            <div class="col-sm-6" >
                <label for="field-1" class="col-sm-6 control-label">2.i.d.a. Order Number </label>
                <div class="form-group "> 
               <div class="col-sm-6" > 
                    <input type="text" class="form-control " name="poceeding_certificate_orderno" id="poceeding_certificate_orderno" value="<?php echo $row['poceeding_certificate_orderno']; ?>"  maxlength="15"  >
					<span id="error_msg51"></span>
					</div>
                </div> 
              </div>
            </div>
            <div class="row">
               <div class="col-sm-6" >
	            	<label for="field-1" class="col-sm-6 control-label">2.i.d.b. Date </label>
	                <div class="form-group ">            
	                   <div class="input-group date col-sm-6" id="datepicker7"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
	               		   <input type="text" class="form-control" name="date_certificate_case" id="date_certificate_case"
	                                value="<?php echo $row['procedding_date_iniciated']; ?>"  readonly  >
	                                <span id="error_msg5"></span>
	               		 </div>	                 
	                </div>
                </div>
            </div>
            </div>
          </div>
          <!--certificate_initiated_yes end-->
        </div>
		<!--no_value end-->
        <div class="row"  id='prosecution' <?php if($row['poceeding_certificate_case_disposed']=='Yes'){ ?> style='display:block;' <?php } ?> >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3. Has prosecution been filed (under Child Labour Act)</label>
              <div class="col-sm-6">
                <select name="has_prosecution_file"   class="form-control" id="has_prosecution_file">
                  <option value=""> Select</option>
                  <option value="Yes" <?php if($row['has_prosecution_file']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['has_prosecution_file']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
        </div>
		<!--value yes start-->
        <div id="value_yes" <?php if($row['has_prosecution_file']=='No'){ ?> style="display:none;" <?php } else if($row['poceeding_certificate_initiated']=='No'){ ?> style="display:none;" <?php } ?> >
          <div class="row">
            <div class="col-sm-6">
              <label for="field-1" class="col-sm-6 control-label">3 i. Name of authority by whom prosecution was filed</label>
              <div class="form-group">
                <div class="col-sm-6" >
                  <select name="prosecution_file_authority"  class="form-control" id="prosecution_file_authority">
                    <option value=""> Select </option>
                    <option value="SDJM" <?php if($row['prosecution_file_authority']=='SDJM') echo 'selected'; ?>> SDJM </option>
                    <option value="CJM" <?php if($row['prosecution_file_authority']=='CJM') echo 'selected'; ?>> CJM </option>
                    <option value="Others" <?php if($row['prosecution_file_authority']=='Others') echo 'selected'; ?>> Others </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="filed_prosecution_other">
              <label for="field-1" class="col-sm-6 control-label">i a. Others</label>
              <div class="form-group">
                <div id="prosecution_file_other_fr_grp"  class="col-sm-6" >
                  <input type="text" class="form-control prosecution_file_other" name="prosecution_file_other" id="prosecution_file_other"
                               value="<?php echo $row['prosecution_file_other']; ?>"    >
                               <span class="prosecution_file_other_msg color-red"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="field-1" class="col-sm-6 control-label">3 ii. Place</label>
              <div class="form-group">
                <div class="col-sm-6" >
                    <select name="prosecution_file_place" id="prosecution_file_place" class="form-control">
                      <option value="">Select Districts</option>
                        <?php	foreach($districts as $distrow):?>
                        <option value="<?php echo $distrow['area_id'];?>" <?php if($row['prosecution_file_place']==$distrow['area_id']){ echo 'selected'; }  ?>><?php echo $distrow['area_name']; ?></option>
                        <?php endforeach; ?>
                      <!-- js populates -->
                    </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">3 iii. Date on which prosecution was filed</label>
                <div class="col-sm-6">
                  <div class="input-group date" id="datepicker2"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                    <input type="text" class="form-control" name="prosecution_file_date" id="prosecution_file_date"
                                value="<?php echo $row['prosecution_file_date']; ?>"  readonly  >
                  </div>
				  <span id="error_msg3"></span>
                </div>
              </div>
            </div>
            <?php echo $row['prosecution_file_date_disposed']; ?>

          </div> <!--end of row-->
        </div><!--end yes value-->
        <!--Start Status of Order-->
        <div class="row" id='status' <?php if($row['certificate_case_dispose']=='No' && $row['poceeding_certificate_initiated']=='No' &&  $row['compensation_deposited']=='No' && $row['compensation_notice_issued']=='No'){ ?> style="display:none;" <?php } ?>>
          <div class="col-sm-6">
            <label for="field-1" class="col-sm-6 control-label" style="padding-left:0px;">4. Status of Case </label>
            <div class="form-group">
              <div class="col-sm-6">
                <select name="status_of_cases" class="form-control"  id="status_of_cases">
                  <option value=""> Select </option>

                  <option value="Disposed" <?php if($row['status_of_cases']=='Disposed') echo 'selected'; ?>> Disposed </option>
                  <option value="Pending" <?php if($row['status_of_cases']=='Pending') echo 'selected'; ?> > Pending </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row"  id="disposed"   <?php if($row['poceeding_certificate_initiated']=='No'){ ?> style="display:none;" <?php }else if($row['certificate_case_dispose']=='No' && $row['poceeding_certificate_initiated']=='No' &&  $row['compensation_deposited']=='No' && $row['compensation_notice_issued']=='No'){ ?> style="display:none;" <?php } ?>>
          <div class="col-sm-6" >
            <label for="field-1" class="col-sm-6 control-label">4 i. Date of Disposal</label>
            <div class="form-group">
              <div class="col-sm-6">
               <div class="input-group date" id="datepicker6"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_disposed" id="date_of_disposed"
                                value="<?php echo $row['date_of_disposed']; ?>"  readonly  >
                </div>
				<span id="error_msg5"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-5" >
            <label for="field-1" class="col-sm-6 control-label"> 4 ii. Type of Disposal</label>
            <div class="form-group">
              <div class="col-sm-6">
                <select name="type_of_disposed" class="form-control"  id="type_of_disposed">
                  <option value="">Select </option>
                  <option <?php if($row['type_of_disposed']=='Acquittals')  echo 'Selected'?> value="Acquittals"> Acquittals </option>
                  <option <?php if($row['type_of_disposed']=='Imprisonment')  echo 'Selected'?> value="Imprisonment" > Imprisonment </option>
                  <option  <?php if($row['type_of_disposed']=='Fine')  echo 'Selected'?> value="Fine"> Fine </option>
                  <option <?php if($row['type_of_disposed']=='both')  echo 'Selected'?> value="both" > Both(Imprisonment and Fine) </option>
                  <option <?php if($row['type_of_disposed']=='Others')  echo 'Selected'?> value="Others"> Others </option>
                </select>
              </div>
            </div>
          </div>
		  <div class="col-sm-6" id='order_numprosecution' >
              <label for="field-1" class="col-sm-6 control-label">4 iii. Order Number / Amount</label>
              <div class="form-group">
                <div id="prosecution_file_orderno_fr_grp" class="col-sm-6">
                  <input  type="text" class="form-control prosecution_file_orderno" name="prosecution_file_orderno" id="prosecution_file_orderno"
                                value="<?php echo $row['prosecution_file_orderno']; ?>" maxlength="15" >
                              <span class="prosecution_file_orderno_msg color-red"></span>
                </div>
              </div>
            </div>
          <div class="col-sm-6" id="type_other">
            <label for="field-1" class="col-sm-5 control-label">4.ii.a. Please Specify</label>
            <div class="form-group">
              <div  id="type_of_disposed_other_fr_grp" class="col-sm-5">
                <input type="text" class="form-control type_of_disposed_other" name="type_of_disposed_other" id="type_of_disposed_other"
                                value="<?php echo $row['type_of_disposed_other']; ?>"   >
                                   <span class="type_of_disposed_other_msg color-red"></span>
              </div>
            </div>
          </div>

        </div> <!--end of dis[osed-->
        <!--  <div class="row" id="pending">
          <div class="col-sm-6" >
            <label for="field-1" class="col-sm-6 control-label">4 i. Reason for Pendency</label>
            <div class="form-group">
              <div id="reason_pendency_fr_grp" class="col-sm-6">
                <input   type="text" class="form-control reason_pendency" name="reason_pendency" id="reason_pendency"
                                value="<?php //echo $row['reason_pendency']; ?>"   >
                                 <span class="reason_pendency_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>-->
        <div class="row" id="pending">           
            <div class="col-sm-12" >
                <label for="field-1" class="col-sm-2 control-label">4 i. Case No</label>
                <div class="form-group col-sm-4">                           
                   <div class="col-sm-9">
                <input type="text" class="form-control reason_pendency" name="reason_pendency" id="reason_pendency"
                                value="<?php echo $row['reason_pendency']; ?>" maxlength="15"  >
                                 <span class="reason_pendency_msg color-red"></span>
              </div>
                </div>
                <label for="field-1" class="col-sm-2 control-label">4.ii. Date </label>
                <div class="form-group col-sm-3">            
                   <div class="input-group date" id="datepicker8"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
               		   <input type="text" class="form-control" name="date_of_satus" id="date_of_satus"
                                value="<?php echo $row['pendency_date']; ?>"  readonly  >
               		 </div>	                 
                </div>
              </div>
            </div>

  <!--End Status of Order-->
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-7">
      <button type="submit" class="btn btn-info" id="submit-button"> Update </button>
      <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
       </div>
  </div>
  <?php echo form_close(); ?> </div>
</div>
</div>
</div>
<!---------------------------------end of labour act --------------------------------------->
<?php endforeach;?>
<script>
function ajaxFileUpload2(upload_field)
{
    var re_text = /\.jpg|\.png|\.pdf|\.jpeg/i;
    var filename = upload_field.value;
    //var imagename = filename.replace("C:\\fakepath\\","");
    if (filename.search(re_text) == -1 && filename !='')
    {
        //alert("File must be an image");
		$("#img_msg2").html("File format error...Please provide a jpg/jpeg/png/pdf format");
		document.getElementById("image2").focus();
		 $("#image1").addClass("newClass");
        upload_field.form.reset();
        return false;
    }
	}





    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});


		

		if($('#prosecution_file_authority').val() == 'Others') {
            $('#filed_prosecution_other').show();

       		 } else {
			  $('#filed_prosecution_other').hide();

       		 }

		if($('#poceeding_certificate_initiated').val() == 'Yes') {
            $('#certificate_initiated_yes').show();
          //added by 05-09-17
           // $('#status_of_cases').hide();
            //$('#status').hide();
           // $('#prosecution').hide();
           // $('#has_prosecution_file').hide();
    
            if($('#has_prosecution_file').val() == 'Yes') {
                //$('#value_yes').show();

           		 } else {
              //  $('#value_yes').hide();

           		 }

            if($('#poceeding_certificate_case_disposed').val() == 'Yes') {
	            $('#certificate_case').show();
	            $('#prosecution').show();
	              $('#status').show();
	              $('#status_of_cases').show(); 
	              $('#prosecution').show();
	              $('#has_prosecution_file').show(); 	           
	             // $('#reason_pendency').hide();
	              $('#pending').hide();
	              $('#date_of_satus').hide();
	              if($('#has_prosecution_file').val() == 'Yes') {
	                  $('#value_yes').show();

	             		 } else {
	                  $('#value_yes').hide();

	             		 }

	       		 } else {
				  $('#certificate_case').hide();
				  $('#prosecution').hide();
	              $('#status').hide();
	              $('#disposed').hide();
	              $('#value_yes').hide();
	              $('#pending').hide();

	       		 }
      		 
       		 } else { 
       			$("html, body").animate({
    				scrollTop: 100
    	   	   		 })
			  $('#certificate_initiated_yes').hide();
	            $('#value_yes').hide();
	            //added by 05-09-17
	            $('#status_of_cases').hide();
	            $('#status').hide(); 
	            $('#value_yes').hide();
	            $('#prosecution').hide();
	            $('#has_prosecution_file').hide();
	           // $('#reason_pendency').hide();
	            $('#pending').hide(); 
	            $('#disposed').hide();

	         
	        	
       		 }

		if($('#poceeding_certificate_authority').val() == 'Other') {
            $('#certificate_filed_othervalue').show();
			$
       		 } else {
			  $('#certificate_filed_othervalue').hide();

       		 }

		

		if($('#type_of_disposed').val() == 'Others') {
            $('#type_other').show();
			$
       		 } else {
			  $('#type_other').hide();

       		 }

			 if($('#status_of_cases').val() == 'Disposed') {
            $('#disposed').show();
			//$('#pending').hide();
			//$('#reason_pendency').hide();
			$('#order_numprosecution').show();
			$('#date_of_satus').hide();
			$('#prosecution_file_orderno').show();
			//$('#date_of_satus').show();
       		 }
       		 
			 if($('#status_of_cases').val() == 'Pending') {
			 $('#pending').show();
			$('#pending').hide();
            $('#disposed').hide();
            $('#date_of_satus').show();
			}
       		 

			if($('#compensation_deposited').val() == 'No') {
            $('#no_value').show(); 
            //added 06.09.17
            // $('#reason_pendency').show();
             $('#date_of_satus').show();
	         $('#pending').hide();

            
            if(($('#poceeding_certificate_initiated').val() == 'Yes') && ($('#poceeding_certificate_case_disposed').val() == 'Yes')){
            	//hide by 05-09-17	
            
            //hide by 05-09-17
            $('#status').show(); 
            $('#status_of_cases').show(); 
            $('#prosecution').show();
            $('#has_prosecution_file').show();
            }
       // POOJA
           /* if(($('#poceeding_certificate_initiated').val() == 'No') && ($('#poceeding_certificate_case_disposed').val() == 'No')){
            	//hide by 05-09-17	
            
            //hide by 05-09-17

            	$('#pending').hide(); 
            	$('#reason_pendency').hide(); 
            	$('#status_of_cases').hide(); 
            	$('#order_numprosecution').hide();
    			$('#date_of_satus').hide();
    			$('#prosecution_file_orderno').hide();
    			$('#type_of_disposed').hide();
    			$('#date_of_disposed').hide();
    			$('#disposed').hide();
            }*/



            
           // $('#value_yes').hide();
            $('#disposed').hide();
            if($('#status_of_cases').val()=='Disposed'){
    			$('#disposed').show();
    			
                }
            if($('#status_of_cases').val()=='Pending'){
            	$('#pending').show(); 
            	//$('#reason_pendency').show(); 
            }
       		 } else {
            $('#no_value').hide();  
            $('#prosecution').hide();
            $('#value_yes').hide();
            $('#disposed').hide();
			//$('#pending').hide();
			$('#status').hide();
			
			
       		 }

		


        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: false
        };
        $('.project-add').submit(function () {
            $("body").scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });

//prativa for issue date
		var copmareIssueDate = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
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
		//end of issue date
		//prativa for certificate date
		var copmareCertiDate = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
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
		//end of issue date
			//prativa for pro field date
		var copmareProFieldDate = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
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
		//end of issue date
			//prativa for disposed date
		var copmareDisDate = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
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


		var diff_prosecution_date_disposed = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
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
		//end of issue date
    function validate_project_add(formData, jqForm, options) {

		var issue_date = (jqForm[0].date_of_issue.value);
		var notice_issued = (jqForm[0].compensation_notice_issued.value);
		var certificate_initiated = (jqForm[0].poceeding_certificate_initiated.value);
		var certificate_date =  (jqForm[0].poceeding_certificate_date.value);
		var if_procecution_field =(jqForm[0].has_prosecution_file.value);
		var prosecution_filed=(jqForm[0].prosecution_file_date.value);
		//var prosecution_date_disposed=(jqForm[0].prosecution_file_date_disposed.value);
		var case_status = (jqForm[0].status_of_cases.value);
		var disposed_date =  (jqForm[0].date_of_disposed.value);  
		var compensation_deposited = (jqForm[0].compensation_deposited.value);
		var compensation_certificate_date =  (jqForm[0].compensation_certificate_date.value);   
		var date_certificate_case =  (jqForm[0].date_certificate_case.value);  
		var poceeding_certificate_case_disposed =  (jqForm[0].poceeding_certificate_case_disposed.value);  

		var date_of_birth = "<?php echo $dob;?>";
		var rescued_date = "<?php echo $date_rescued;?>";

    if(jqForm[0].poceeding_certificate_authority.value=='Other')
    {
    if(jqForm[0].poceeding_certificate_authority_other.value.length>40)
    {
      flag=1;
      $("#poceeding_certificate_authority_other_fr_grp").addClass("validate-has-error");
      $( ".poceeding_certificate_authority_other" ).focus();
      $(".poceeding_certificate_authority_other_msg").html("This field should be less than 40 characters");
     return false;

    }
    else{
      $("#poceeding_certificate_authority_other_fr_grp").removeClass("validate-has-error");
     $(".poceeding_certificate_authority_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].poceeding_certificate_authority_other.value)){
      flag=1;

           $("#poceeding_certificate_authority_other_fr_grp").addClass("validate-has-error");
           $( ".poceeding_certificate_authority_other" ).focus();
           $(".poceeding_certificate_authority_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#poceeding_certificate_authority_other_fr_grp").removeClass("validate-has-error");
      $(".poceeding_certificate_authority_other_msg").html("");
    }
    }
    if(jqForm[0].poceeding_certificate_initiated.value=='Yes')
    {
    if(jqForm[0].poceeding_certificate_orderno.value.length>50)
    {
      flag=1;
      $("#poceeding_certificate_orderno_fr_grp").addClass("validate-has-error");
      $( ".poceeding_certificate_orderno" ).focus();
      $(".poceeding_certificate_orderno_msg").html("This field should be less than 50 characters");
     return false;

    }
    else{
      $("#poceeding_certificate_orderno_fr_grp").removeClass("validate-has-error");
     $(".poceeding_certificate_orderno_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].poceeding_certificate_orderno.value)){
      flag=1;

           $("#poceeding_certificate_orderno_fr_grp").addClass("validate-has-error");
           $( ".poceeding_certificate_orderno" ).focus();
           $(".poceeding_certificate_orderno_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#poceeding_certificate_orderno_fr_grp").removeClass("validate-has-error");
      $(".poceeding_certificate_orderno_msg").html("");
    }
    }
    if(jqForm[0].prosecution_file_authority.value=='Others')
    {
    if(jqForm[0].prosecution_file_other.value.length>40)
    {
      flag=1;
      $("#prosecution_file_other_fr_grp").addClass("validate-has-error");
      $( ".prosecution_file_other" ).focus();
      $(".prosecution_file_other_msg").html("This field should be less than 40 characters");
     return false;

    }
    else{
      $("#prosecution_file_other_fr_grp").removeClass("validate-has-error");
     $(".prosecution_file_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].prosecution_file_other.value)){
      flag=1;

           $("#prosecution_file_other_fr_grp").addClass("validate-has-error");
           $( ".prosecution_file_other" ).focus();
           $(".prosecution_file_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#prosecution_file_other_fr_grp").removeClass("validate-has-error");
      $(".prosecution_file_other_msg").html("");
    }
    }
    if(jqForm[0].status_of_cases.value=='Disposed')
    {
    if(jqForm[0].prosecution_file_orderno.value.length>40)
    {
      flag=1;
      $("#prosecution_file_orderno_fr_grp").addClass("validate-has-error");
      $( ".prosecution_file_orderno" ).focus();
      $(".prosecution_file_orderno_msg").html("This field should be less than 40 characters");
     return false;

    }
    else{
      $("#prosecution_file_orderno_fr_grp").removeClass("validate-has-error");
     $(".prosecution_file_orderno_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].prosecution_file_orderno.value)){
      flag=1;

           $("#prosecution_file_orderno_fr_grp").addClass("validate-has-error");
           $( ".prosecution_file_orderno" ).focus();
           $(".prosecution_file_orderno_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#prosecution_file_orderno_fr_grp").removeClass("validate-has-error");
      $(".prosecution_file_orderno_msg").html("");
    }
    }
    if(jqForm[0].status_of_cases.value=='Pending')
    {
    if(jqForm[0].reason_pendency.value.length>40)
    {
      flag=1;
      $("#reason_pendency_fr_grp").addClass("validate-has-error");
      $( ".reason_pendency" ).focus();
      $(".reason_pendency_msg").html("This field should be less than 40 characters");
     return false;

    }
    else{
      $("#reason_pendency_fr_grp").removeClass("validate-has-error");
     $(".reason_pendency_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].reason_pendency.value)){
      flag=1;

           $("#reason_pendency_fr_grp").addClass("validate-has-error");
           $( ".reason_pendency" ).focus();
           $(".reason_pendency_msg").html("No space allowed");
          return false;
      }
      else{
       $("#reason_pendency_fr_grp").removeClass("validate-has-error");
      $(".reason_pendency_msg").html("");
    }
    }
    if(jqForm[0].status_of_cases.value=='disposed')
    {
    if(jqForm[0].type_of_disposed.value=='Others')
    {
    if(jqForm[0].type_of_disposed_other.value.length>40)
    {
      flag=1;
      $("#type_of_disposed_other_fr_grp").addClass("validate-has-error");
      $( ".type_of_disposed_other" ).focus();
      $(".type_of_disposed_other_msg").html("This field should be less than 40 characters");
     return false;

    }
    else{
      $("#type_of_disposed_other_fr_grp").removeClass("validate-has-error");
     $(".type_of_disposed_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].type_of_disposed_other.value)){
      flag=1;

           $("#type_of_disposed_other_fr_grp").addClass("validate-has-error");
           $( ".type_of_disposed_other" ).focus();
           $(".type_of_disposed_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#type_of_disposed_other_fr_grp").removeClass("validate-has-error");
      $(".type_of_disposed_other_msg").html("");
    }
    }
  }
	//var datevalue = copmareDate(prosecution_date,prosecution_date_disposed);
	<!--q1 -->
		if(notice_issued == "Yes"){
			if(issue_date != ""){ 
				var diffdate_issuedate = copmareIssueDate(issue_date,rescued_date);
				if(diffdate_issuedate<0){
					$("#error_msg1").html("Date of issue  should more than date of rescue");
					document.getElementById("date_of_issue").focus();
					$("#datepicker").addClass("newClass");
					return false;
				}else{
					$("#error_msg1").html("");
			        $("#datepicker").removeClass("newClass");
					 }
			}
		}
    else{
      	$("#error_msg1").html("");
        $("#datepicker").removeClass("newClass");
    }

	    if(compensation_deposited == "Yes"){
	    	if(compensation_certificate_date != ""){ 
				var diffdate_compensationdate = copmareIssueDate(compensation_certificate_date,rescued_date);
				if(diffdate_compensationdate<0){
					$("#error_msg2").html("Date of deposited should more than date of rescue");
					document.getElementById("compensation_certificate_date").focus();
					$("#datepicker9").addClass("newClass");
					return false;
				}else{
					$("#error_msg1").html("");
			        $("#datepicker").removeClass("newClass");
					}
			}
		    }else{

			    }
		<!--q2 -->
		if(certificate_initiated == "Yes"){
			if(certificate_date != ""){
			var diffdate_certificate = copmareCertiDate(certificate_date,rescued_date);
				if(diffdate_certificate<0){
					$("#error_msg3").html("Certificate issued date should more than date of rescue");
					document.getElementById("poceeding_certificate_date").focus();
					$("#datepicker1").addClass("newClass");
					return false;
				}
			}
		}
    else{
      $("#error_msg2").html("");
      	$("#datepicker1").removeClass("newClass");
    }
		<!--q3 ist -->
		if(if_procecution_field == "Yes"){
			if(prosecution_filed != ""){
			var diffdate_procecution_field = copmareProFieldDate(prosecution_filed,rescued_date);
				if(diffdate_procecution_field <0){
				//alert("certificate_date should after than date of birth");
					$("#error_msg3").html("Prosecution filed date should more than date of rescue");
					document.getElementById("prosecution_file_date").focus();
					$("#datepicker2").addClass("newClass");
					return false;
				}
			}
		}
    else{
      $("#error_msg3").html("");
      $("#datepicker2").removeClass("newClass");
    }
		<!--q4  -->
		if(case_status =="Disposed"){
			if(disposed_date != ""){
			var diffdate_disspossed = copmareDisDate(disposed_date,rescued_date);
				if(diffdate_disspossed < 0){
				//alert("certificate_date should after than date of birth");
					$("#error_msg5").html("Disposed date should be later or equal to date of rescue");
					document.getElementById("date_of_disposed").focus();
					$("#datepicker6").addClass("newClass");
					return false;
				}
        else{
          $("#error_msg5").html("");

					$("#datepicker6").removeClass("newClass");
        }
			}
		}

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

$(function() {

   		 $('#compensation_notice_issued').change(function(){
   			if($('#compensation_notice_issued').val() == 'Yes') {
  			  $('#compensation_notice_issued_yes').show();
  		    	$('#letterno').show();
              $('#school_attended_yes').show();
              $('#compensation').show();
              $('#status').hide();
              $('#prosecution').hide();
              $('#value_yes').hide();
              $('#no_value').hide();
              $('#disposed').hide();
              $('#pending').hide();
                           
         		 } else {
         		 $('#compensation_notice_issued_yes').hide();
              $('#school_attended_yes').hide();
              $('#compensation').hide();
              $('#prosecution').hide();
              $('#status').hide();
		    	$('#letterno').hide();
	              $('#value_yes').hide();
	              $('#no_value').hide();
	              $('#disposed').hide();
	              $('#pending').hide();
	              
         		 }

    	}); 

     	
      	
		});
		$(function() {

   		 $('#compensation_deposited').change(function(){
        	if($('#compensation_deposited').val() == 'No') {
            $('#no_value').show();  
           

       		 } else { 
            $('#no_value').hide();
            $('#prosecution').hide();
            $('#value_yes').hide(); 
       		 }
    	});
		});

		$(function(){
			 $('#compensation_deposited').change(function(){
	    		 if($('#compensation_notice_issued').val() == 'Yes') {
	    			 $('#compensation_date').show();
	    			  $('#status').hide(); 
	    			  $('#disposed').hide();
		    			 
	    		 }else{
	    			 $('#compensation_date').hide();
	    			  $('#status').hide();
	        		 } 
			 });
		});
			

		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


		$(function() {

   		 $('#has_prosecution_file').change(function(){
        	if($('#has_prosecution_file').val() == 'Yes') {
            $('#value_yes').show();

       		 } else {
            $('#value_yes').hide();

       		 }
    	});
		});

				$(function() {

   		 $('#status_of_cases').change(function(){
        	if($('#status_of_cases').val() == 'Disposed') {
            $('#disposed').show();
			$('#pending').hide();
			
			
       		 } else {
			 if($('#status_of_cases').val() == 'Pending') {  
			  $('#disposed').hide();
			 $('#pending').show();
           }else{
			$('#disposed').hide();
			$('#pending').hide();
			}

       		 }
    	});
		});

		$(function() {

   		 $('#type_of_disposed').change(function(){
        	if($('#type_of_disposed').val() == 'Others') {
            $('#type_other').show();
			$
       		 } else {
			  $('#type_other').hide();

       		 }
    	});
		});



		$(function() {

   		 $('#poceeding_certificate_initiated').change(function(){ 
   			$("html, body").animate({
				scrollTop: 200
	   	   		 })
        	if($('#poceeding_certificate_initiated').val() == 'Yes') { 
            $('#certificate_initiated_yes').show();  
            $('#prosecution').hide();
            $('#disposed').hide();
            if($('#poceeding_certificate_case_disposed').val() == 'Yes') {
            	 $('#prosecution').show();
            	 $('#status').show();
            	 
            	 if($('#has_prosecution_file').val() == 'Yes') {
            		 $('#value_yes').show();
                	 }else{
                		 $('#value_yes').hide();
                    	 }
            	 
            	 if($('#status_of_cases').val() == 'Disposed') {
            		 $('#disposed').show();
                	 }else if($('#status_of_cases').val() == 'Pending'){
                		 $('#pending').show();
                    	 }else{
                    		 $('#disposed').hide();
                    		 $('#pending').hide();
                        	 }
            	 
                }else{
               	 $('#prosecution').hide();
            	 $('#status').hide();
                    } 
            
       		 } else {
			  $('#certificate_initiated_yes').hide();
              $('#prosecution').hide();
              $('#status').hide(); 
              $('#pending').hide();  
              $('#disposed').hide();  
              $('#value_yes').hide(); 
       		 }
    	});
		});

		$(function() {

   		 $('#poceeding_certificate_authority').change(function(){
        	if($('#poceeding_certificate_authority').val() == 'Other') {
            $('#certificate_filed_othervalue').show();

       		 } else {
			  $('#certificate_filed_othervalue').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#prosecution_file_authority').change(function(){
        	if($('#prosecution_file_authority').val() == 'Others') {
            $('#filed_prosecution_other').show();

       		 } else {
			  $('#filed_prosecution_other').hide();

       		 }
    	});
		});

		/* Compensation of Rs.20,000 been Deposited */
		$(function() {

   		 $('#compensation_deposited').change(function(){
        	if($('#compensation_deposited').val() == 'Yes') {
            $('#compensation_date').show();
           
       		 } else {
			  $('#compensation_date').hide();
       		 }
    	});
		});

		$(function() {

	   		 $('#poceeding_certificate_case_disposed').change(function(){
	        	if($('#poceeding_certificate_case_disposed').val() == 'Yes') {
	            $('#certificate_case').show();
	           $('#prosecution').show();

	           $('#status_of_cases').show();

	           $('#has_prosecution_file').show();
	              $('#status').show(); 
	              $('#value_yes').hide();

	       		 } else {
				  $('#certificate_case').hide();
				  $('#prosecution').hide();
	              $('#status').hide();
	              $('#disposed').hide();
	              $('#value_yes').hide();
	              $('#pending').hide();

	       		 }
	    	});
			});  

		
		

</script>
<script>
var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker1').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker2').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker3').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker6').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker7').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker8').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
orientation: "top"
});  

var FromEndDate = new Date();
$('#datepicker9').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
orientation: "top"
});
</script>
