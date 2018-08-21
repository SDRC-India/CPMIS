<style>
#error-img{
color:red;
}
#error-img_Parcha{
color:red;
}
#attach-img{
color:red;
}
#attach-img_Parcha{
color:red;
}
</style>


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


foreach ($revenue_department_data as $row): ?>
  <!----------------------start of revenue---------------------------->
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div style="float:right; margin-top:12px; margin-right:20px;"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?revenue_department">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>

          Revenue and Land Reform Department - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('revenue_department/revenue_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Is rescued child family benefiting under Land settlement / distribution ? <span style="color:red;">*</span></label>
              <div class="col-sm-6">
                <select name="is_benefited_landsettlement" class="form-control" data-validate="required" id="is_benefited_landsettlement">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['is_benefited_landsettlement']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['is_benefited_landsettlement']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['is_benefited_landsettlement']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-4" id="is_benefited_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 i. Proof<span style="color:red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
				  <?php if (file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/revenue/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/revenue/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/revenue/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span style="color:red;">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}
						else if (file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/revenue/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/revenue/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image"  accept="image/*" onchange="return ajaxFileUpload1(this)" id="image">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img"></div>
				<div id="attach-img"></div>
              </div>
            </div>
          </div> 
        </div>
		<div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Basgriha Parcha ? <span style="color:red;">*</span></label>
              <div class="col-sm-6">
                <select name="is_benefited_landsettlement_Parcha" class="form-control" data-validate="required" id="is_benefited_landsettlement_Parcha">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['is_benefited_landsettlement_Parcha']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['is_benefited_landsettlement_Parcha']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['is_benefited_landsettlement_Parcha']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-4" id="is_benefited_yes_Parcha">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 i. Proof<span style="color:red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
				  <?php if (file_exists('uploads/entitlement_proof/revenue/Parcha/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/revenue/Parcha/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/revenue/Parcha/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/revenue/Parcha/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/revenue/Parcha/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span style="color:red;">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}
						else if (file_exists('uploads/entitlement_proof/revenue/Parcha/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/revenue/Parcha/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/revenue/Parcha/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image1"  accept="image1/*" onchange="return ajaxFileUpload1_image(this)" id="image1">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img_Parcha"></div>
				<div id="attach-img_Parcha"></div>
              </div>
            </div>
          </div>		  
        </div>
        <h3 style="font-size:14px">&nbsp;</h3>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-8">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!-------------end of revenue------------------>
<?php endforeach;?>
<script>
    $(document).ready(function () {

	    $('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });

	   if($('#is_benefited_landsettlement').val() == 'Yes') {
            $('#is_benefited_yes').show();
       		 } else {
            $('#is_benefited_yes').hide();
       		 }
      
	   if($('#is_benefited_landsettlement_Parcha').val() == 'Yes') {
            $('#is_benefited_yes_Parcha').show();
       		 } else {
            $('#is_benefited_yes_Parcha').hide();
       		 }

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          $('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
	  
	  
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          $('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

    function validate_project_add(formData, jqForm, options) {

	if (!jqForm[0].is_benefited_landsettlement.value)
        {
            return false;
        }

		//image
		var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = jqForm[0].image.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
                return false;
            }else{
				$("#error-img").html("");
			}
		//end image
	var ben = (jqForm[0].is_benefited_landsettlement.value);
	if (ben == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.png'))) {  ?>
			return true;
		<?php } else {?>
			if( document.getElementById("image").files.length == 0 ){
   			 $("#attach-img").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img").html("");
			}
			<?php } ?>
		}
//land settlement parcha
	if (!jqForm[0].is_benefited_landsettlement_Parcha.value)
        {
            return false;
        }

		//image
		var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = jqForm[0].image1.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image1").focus();
                return false;
            }else{
				$("#error-img").html("");
			}
		//end image
	var ben1 = (jqForm[0].is_benefited_landsettlement_Parcha.value);
	//alert(ben1) ;
	if (ben1 == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/revenue/Parcha/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/revenue/Parcha/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/revenue/Parcha/' .$row['child_id'] . '.png'))) {  ?>
			return true;
		<?php } else {?>
			if( document.getElementById("image1").files.length == 0 ){
   			 $("#attach-img_Parcha").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img_Parcha").html("");
			}
			<?php } ?>
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
//$('#is_benefited_yes').hide();
   		 $('#is_benefited_landsettlement').change(function(){
        	if($('#is_benefited_landsettlement').val() == 'Yes') {
            $('#is_benefited_yes').show();
       		 } else {
            $('#is_benefited_yes').hide();
       		 }
    	});
		});
$(function() {
//$('#is_benefited_yes').hide();
   		 $('#is_benefited_landsettlement_Parcha').change(function(){
        	if($('#is_benefited_landsettlement_Parcha').val() == 'Yes') {
            $('#is_benefited_yes_Parcha').show();
       		 } else {
            $('#is_benefited_yes_Parcha').hide();
       		 }
    	});
		});

function ajaxFileUpload1(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
                return false;
            }else{
				$("#error-img").html("");
			}
			}
</script>
