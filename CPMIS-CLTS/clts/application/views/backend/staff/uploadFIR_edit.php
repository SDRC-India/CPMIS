
<?php


include "modal_msg_labouract.php";
foreach ($uploadFir_data as $row):
?>

<!------------------------------other laws edit start---------------------------->
<div class="row">
 <?php include "acttab.php" ?>

  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"><a href="index.php?uploadFIR/download_fir/<?php echo $row['child_id'] ; ?>" type="button" class="btn btn-info" style="margin-bottom:5px;"> <i class="entypo-download"></i>Download the Proforma of FIR</a>
         <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?other_laws">Back to list</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
         Upload Fir - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> 
	  <?php echo form_open('uploadFIR/uploadfir_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"> </div>
           <div class="col-sm-6">
               <div class="form-group"> <label for="field-1" class="col-sm-6 control-label">1. Do you want to upload the original FIR copy ? <span class="color-red">*</span></label>
                 <div class="col-sm-6">
                   <select name="is_housing_scheme" class="form-control" data-validate="required" id="is_housing_scheme">
                   <option value="">Select</option>
                   <option value="Yes" <?php if($row['upload_fir_status']=='Yes') echo 'selected'; ?>>Yes</option>
                   <option value="No" <?php if($row['upload_fir_status']=='No') echo 'selected'; ?>>No</option>
                   <option value="Not Applicable" <?php if($row['upload_fir_status']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                   </select>
                 </div>
                </div>

                </div>
         
           <div class="col-sm-6" id="is_housing_scheme_yes">
                 <div class="form-group">
                  <label for="field-1" class="col-sm-6 control-label">1 i. Attach Proof<span class="color-red">*</span></label>

                    <div class="col-sm-6">


                   <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
						 <?php if (file_exists('uploads/entitlement_proof/Uploadfir/q1/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/Uploadfir/q1/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/Uploadfir/q1/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/Uploadfir/q1/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/Uploadfir/q1/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/Uploadfir/q1/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/Uploadfir/q1/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/Uploadfir/q1/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
							echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
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
      <div class="form-group">
        <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-info" id="submit-button"> Update </button>
          <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
          <span id="preloader-form"></span> </div>
      </div>
      <div class="height"></div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
<!----------------------------other laws edit------------------------------>
<?php endforeach;?>
<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });


    if($('#is_housing_scheme').val() == 'Yes') {
            $('#is_housing_scheme_yes').show();
       		 } else {
            $('#is_housing_scheme_yes').hide();
       		 }
			 
   
			 
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: false
        };
        $('.project-add').submit(function () {
            $('body').scrollTop(0);
            $(this).ajaxSubmit(options);
			 $('body').scrollTop(0);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {

	if (!jqForm[0].is_housing_scheme.value)
        {
            return false;
        }
		//image
			var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = jqForm[0].image1.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img1").html("");
			}
		
		//end
		var house = (jqForm[0].is_housing_scheme.value);
		if (house == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/Uploadfir/q1/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/Uploadfir/q1/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/Uploadfir/q1/' .$row['child_id'] . '.png'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image1").files.length == 0 ){
   			 $("#attach-img1").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img1").html("");
				}
			<?php } ?>
		}
		
		 $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
		
        document.getElementById("submit-button").disabled = true;
    }

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 })

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		 $('body').scrollTop(0);
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

		$(function() {
//$('#is_housing_scheme_yes').hide();
   		 $('#is_housing_scheme').change(function(){
        	if($('#is_housing_scheme').val() == 'Yes') {
            $('#is_housing_scheme_yes').show();
       		 } else {
            $('#is_housing_scheme_yes').hide();
       		 }
    	});
		});
//dipti
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

	
	
</script>
