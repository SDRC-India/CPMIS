
<?php
$parent=$ref;
include "modal_msg_labouract.php";?>

<div class="row">
  <?php
if($parent=='entitle'){
	include "entitled_child_detail.php";}
else{

include "rehilibitionTab.php";
}
foreach ($social_welfare_department_data as $row): ?>
  <!----------------------------start of social dept edit------------------->
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?social_welfare_department">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Social Welfare Departments - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('social_welfare_department/socialdepartment_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Are the family members of the rescued child eligible for getting benefit under social pension scheme ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="social_pension_eligible" class="form-control" data-validate="required" id="social_pension_eligible">
                  <option value="">Select</option>
                  <option value="Yes"<?php if($row['social_pension_eligible']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No"<?php if($row['social_pension_eligible']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable"<?php if($row['social_pension_eligible']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div  id="social_pension_other">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 i. Is the family of the rescued child benefitting under any pension scheme</label>
                <div class="col-sm-6">
                  <select name="social_pension_availed" class="form-control" id="social_pension_availed">
				   <option>Select</option>
                    <option value="Yes" <?php if($row['social_pension_availed']=='Yes') echo 'selected'; ?> > Yes </option>
                    <option value="No" <?php if($row['social_pension_availed']=='No') echo 'selected'; ?>  > No </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="social_pension_availed_yes">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii. Proof <span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail thumb-img" >
                      <?php if (file_exists('uploads/entitlement_proof/social/q1/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/social/q1/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/social/q1/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q1/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/social/q1/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q1/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/social/q1/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/social/q1/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
					</div>
                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img" ></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image1" id="image1" accept="image/*" onchange="return ajaxFileUpload1(this)">
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>
				  <div id="error-img1"></div>
				  <div id="attach-img1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">2. Is the rescued child eligible for getting benefit under Pravarish Scheme ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="parvarish_scheme_eligible" class="form-control" data-validate="required" id="parvarish_scheme_eligible">
  				  <option value="">Select</option>
                  <option value="Yes"<?php if($row['parvarish_scheme_eligible']=='Yes') echo 'selected'; ?> >Yes</option>
                  <option value="No"<?php if($row['parvarish_scheme_eligible']=='No') echo 'selected'; ?> >No</option>
                  <option value="Not Applicable" <?php if($row['parvarish_scheme_eligible']=='Not Applicable') echo 'selected'; ?> >Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div id="pravarish_scheme_other">
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 i. Is the rescued child getting benefit under Pravarish Scheme?</label>
                <div class="col-sm-6">
                  <select name="parvarish_scheme_availed" class="form-control" id="parvarish_scheme_availed" >
				  <option value="">Select</option>
                    <option value="Yes" <?php if($row['parvarish_scheme_availed']=='Yes') echo 'selected'; ?>  > Yes </option>
                    <option value="No" <?php if($row['parvarish_scheme_availed']=='No') echo 'selected'; ?> > No </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="parvarish_scheme_availed_yes">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 ii. Proof <span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail thumb-img" >
                     <?php if (file_exists('uploads/entitlement_proof/social/q2/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/social/q2/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/social/q2/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q2/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/social/q2/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q2/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/social/q2/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/social/q2/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
					</div>
                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image2" id="image2" accept="image/*" onchange="return ajaxFileUpload2(this)">
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>
				  <div id="error-img2"></div>
				  <div id="attach-img2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3. Is the family of the rescued child benefitting under Sponsorship ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="family_availed_sponsorship" class="form-control" data-validate="required" id="family_availed_sponsorship">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['family_availed_sponsorship']=='Yes') echo 'selected'; ?> >Yes</option>
                  <option value="No" <?php if($row['family_availed_sponsorship']=='No') echo 'selected'; ?> >No</option>
                  <option value="Not Applicable" <?php if($row['family_availed_sponsorship']=='Not Applicable') echo 'selected'; ?> >Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="family_availed_sponsorship_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3 i. Proof <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
				   <?php if (file_exists('uploads/entitlement_proof/social/q3/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/social/q3/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/social/q3/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q3/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/social/q3/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q3/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/social/q3/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/social/q3/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image3" id="image3" accept="image/*" onchange="return ajaxFileUpload3(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img3"></div>
				<div id="attach-img3"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">4. Is the rescued child getting benefit under Sponsorship ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="is_child_sponsorship" class="form-control" data-validate="required" id="is_child_sponsorship">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['is_child_sponsorship']=='Yes') echo 'selected'; ?> >Yes</option>
                  <option value="No" <?php if($row['is_child_sponsorship']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['is_child_sponsorship']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="is_child_sponsorship_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">4 i. Proof<span class="color-red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
				  <?php if (file_exists('uploads/entitlement_proof/social/q4/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/social/q4/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/social/q4/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q4/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/social/q4/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/social/q4/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/social/q4/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/social/q4/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image4" id="image4" accept="image/*" onchange="return ajaxFileUpload4(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img4"></div>
				<div id="attach-img4"></div>
              </div>
            </div>
          </div>
        </div>
        <h3 style="font-size:14px">&nbsp;</h3>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!------------------------end of social dept----------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

			$('button[type="submit"]').prop('disabled', true);
			$(':input', this).change(function() {
			 if($(this).val() != '') {
			$('button[type="submit"]').prop('disabled', false);
			  }
			});

			if($('#social_pension_availed').val() == 'Yes') {
			$('#social_pension_other').show();
            $('#social_pension_availed_yes').show();
       		 } else {
			$('#social_pension_other').show();
            $('#social_pension_availed_yes').hide();
       		 }
			if($('#social_pension_eligible').val() == 'Yes') {
			 $('#social_pension_other').show();
       		 } else {
            $('#social_pension_other').hide();
       		 }

			 if($('#parvarish_scheme_eligible').val() == 'Yes') {
			 $('#pravarish_scheme_other').show();
			  //$('#parvarish_scheme_availed_yes').show();
       		 } else {
            $('#pravarish_scheme_other').hide();
			 //$('#parvarish_scheme_availed_yes').hide();
       		 }

			 if($('#parvarish_scheme_availed').val() == 'Yes') {
            $('#parvarish_scheme_availed_yes').show();

       		 } else {
            $('#parvarish_scheme_availed_yes').hide();

       		 }
			 //doubt

	if($('#family_availed_sponsorship').val() == 'Yes') {
            $('#family_availed_sponsorship_yes').show();

       		 } else {
            $('#family_availed_sponsorship_yes').hide();

       		 }

	if($('#is_child_sponsorship').val() == 'Yes') {
            $('#is_child_sponsorship_yes').show();

       		 } else {
            $('#is_child_sponsorship_yes').hide();

       		 }

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          //$('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


    function validate_project_add(formData, jqForm, options) {

		if (!jqForm[0].social_pension_eligible.value)
        {
            return false;
        }
		var pension = (jqForm[0].social_pension_eligible.value);
		var attach1 = (jqForm[0].social_pension_availed.value);
		if (pension == 'Yes'){
		if (attach1 == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/social/q1/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/social/q1/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/social/q1/' .$row['child_id'] . '.png'))) {  ?>
			return true;
		<?php } else {?>
			if( document.getElementById("image1").files.length == 0 ){
   			 $("#attach-img1").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img1").html("");
				}
			<?php } ?>
		}
		}
		//code for image
		var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename1 = jqForm[0].image1.value;
            if (filename1.search(re_text) == -1 && filename1 !='')
            {
				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img1").html("");
			}
			//2nd
            var filename2 = jqForm[0].image2.value;
            if (filename2.search(re_text) == -1 && filename2 !='')
            {
				$("#error-img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img2").html("");
			}
			//3rd
            var filename3 = jqForm[0].image3.value;
            if (filename3.search(re_text) == -1 && filename3 !='')
            {
				$("#error-img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img3").html("");
			}
			//4th
            var filename4 = jqForm[0].image4.value;
            if (filename4.search(re_text) == -1 && filename4 !='')
            {
				$("#error-img4").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img4").html("");
			}
		//end of code for iamge
		//end 1st qsn
		if (!jqForm[0].parvarish_scheme_eligible.value)
        {
            return false;
        }
		var par_scheme = (jqForm[0].parvarish_scheme_eligible.value);
		var attach2 = (jqForm[0].parvarish_scheme_availed.value);
		if (par_scheme == 'Yes'){
		if (attach2 == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/social/q2/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/social/q2/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/social/q2/' .$row['child_id'] . '.png'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image2").files.length == 0 ){
   			 $("#attach-img2").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img2").html("");
				}
			<?php } ?>
		}
		}
		//end 2nd qstn
		if (!jqForm[0].family_availed_sponsorship.value)
        {
            return false;
        }
		var attach3 = (jqForm[0].family_availed_sponsorship.value);
		if (attach3 == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/social/q3/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/social/q3/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/social/q3/' .$row['child_id'] . '.png'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image3").files.length == 0 ){
   			 $("#attach-img3").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img3").html("");
				}
			<?php } ?>
		}
		//end 3rd
		if (!jqForm[0].is_child_sponsorship.value)
        {
            return false;
        }
		var attach4 = (jqForm[0].is_child_sponsorship.value);
		if (attach4 == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/social/q4/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/social/q4/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/social/q4/' .$row['child_id'] . '.png'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image4").files.length == 0 ){
   			 $("#attach-img4").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img4").html("");
				}
			<?php } ?>
		}
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
		$('html, body').animate({ scrollTop: 0 }, 0);
		
        $('#preloader-form').html('');
		$('body').scrollTop(0);
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
$(function() {

   		 $('#social_pension_eligible').change(function(){
        	if($('#social_pension_eligible').val() == 'Yes') {
            $('#social_pension_other').show();

       		 } else {
            $('#social_pension_other').hide();
//			 $('#social_pension_availed_yes').val()='';
       		 }
    	});
		});

$(function() {

   		 $('#parvarish_scheme_eligible').change(function(){
        	if($('#parvarish_scheme_eligible').val() == 'Yes') {
            $('#pravarish_scheme_other').show();

       		 } else {
            $('#pravarish_scheme_other').hide();
	//		$('#parvarish_scheme_availed').val()='';
       		 }
    	});
		});
$(function() {

   		 $('#social_pension_availed').change(function(){
        	if($('#social_pension_availed').val() == 'Yes') {
            $('#social_pension_availed_yes').show();
       		 } else {
            $('#social_pension_availed_yes').hide();
       		 }
    	});
		});
		$(function() {

   		 $('#parvarish_scheme_availed').change(function(){
        	if($('#parvarish_scheme_availed').val() == 'Yes') {
            $('#parvarish_scheme_availed_yes').show();

       		 } else {
            $('#parvarish_scheme_availed_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#family_availed_sponsorship').change(function(){
        	if($('#family_availed_sponsorship').val() == 'Yes') {
            $('#family_availed_sponsorship_yes').show();

       		 } else {
            $('#family_availed_sponsorship_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#is_child_sponsorship').change(function(){
        	if($('#is_child_sponsorship').val() == 'Yes') {
            $('#is_child_sponsorship_yes').show();

       		 } else {
            $('#is_child_sponsorship_yes').hide();

       		 }
    	});
		});



		function ajaxFileUpload1(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img1").html("");
			}
		}

		function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img2").html("");
			}
		}
		function ajaxFileUpload3(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img3").html("");
			}
		}
		function ajaxFileUpload4(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img4").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img4").html("");
			}
		}
</script>
