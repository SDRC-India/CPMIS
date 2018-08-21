

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
foreach ($foodcivil_supplied_department_data as $row): ?>
<!---------------------------food department edit started------------------------------------->
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">

             <div class="child_list_head">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?foodcivil_supplied_department">Back to List</a>
                </div>


                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>

                    Food &amp; Civil Supply Department - Child ID: <?php echo $row['child_id']; ?>


                </div>

            </div>
            <div class="panel-body">

                <?php echo form_open('foodcivil_supplied_department/fooddepartment_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>


                <div class="row">
                <div class="panel-title ptitle"  >

                </div>
                <div class="col-sm-6">
               <div class="form-group"> <label for="field-1" class="col-sm-6 control-label">1. Has Rescued Child's Family been Provided with Ration Card ? <span class="color-red">*</span></label>
                 <div class="col-sm-6">
                   <select name="is_ration_card" class="form-control" data-validate="required" id="is_ration_card">
                     <option value="">Select</option>
                     <option value="Yes" <?php if($row['is_ration_card']=='Yes') echo 'selected'; ?>>Yes</option>
                     <option value="No" <?php if($row['is_ration_card']=='No') echo 'selected'; ?>>No</option>
                     <option value="Not Applicable" <?php if($row['is_ration_card']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                   </select>
                 </div>
                </div>

                </div>



                <div class="col-sm-6" id="is_ration_card_yes">

                 <div class="form-group">
                  <label for="field-1" class="col-sm-6 control-label">1 i. Proof<span class="color-red">*</span></label>

                    <div class="col-sm-6">


                   <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img">
				  <?php if (file_exists('uploads/entitlement_proof/food/q1/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/food/q1/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/food/q1/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/food/q1/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/food/q1/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/food/q1/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/food/q1/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/food/q1/'.$row['child_id'].'.png" width="150" height="100" /></a>';
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
              <div class="row">
                  <div class="panel-title ptitle"  ></div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-2" class="col-sm-6 control-label">2. Is Rescued Child's Family Benefited under PDS ? <span class="color-red">*</span></label>
                      <div class="col-sm-6">
                        <select name="id_pds" class="form-control" data-validate="required" id="id_pds">
                        <option value="">Select</option>
                        <option value="Yes" <?php if($row['id_pds']=='Yes') echo 'selected'; ?>>Yes</option>
                   	  	<option value="No" <?php if($row['id_pds']=='No') echo 'selected'; ?>>No</option>
                        <option value="Not Applicable" <?php if($row['id_pds']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" id="id_pds_yes">
                    <div class="form-group">
                  <label for="field-1" class="col-sm-6 control-label">2 i. Proof<span class="color-red">*</span></label>

                    <div class="col-sm-6">


                   <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
				  <?php if (file_exists('uploads/entitlement_proof/food/q2/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/food/q2/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/food/q2/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/food/q2/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/food/q2/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/food/q2/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/food/q2/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/food/q2/'.$row['child_id'].'.png" width="150" height="100" /></a>';
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
              <h3 style="font-size:14px">&nbsp;</h3>
                <div class="form-group">
              <div class="col-sm-offset-5 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">Update</button>
                        <button type="button" class="btn btn-info" id="cancel-button">Cancel</button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!----------------------------end-------------------------------------------------->
<?php endforeach;?>


<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });
	if($('#id_pds').val() == 'Yes') {
            $('#id_pds_yes').show();
       		 } else {
            $('#id_pds_yes').hide();
       		 }
		if($('#is_ration_card').val() == 'Yes') {
            $('#is_ration_card_yes').show();
       		 } else {
            $('#is_ration_card_yes').hide();
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

 	if (!jqForm[0].is_ration_card.value)
        {
            return false;
        }
	var des = (jqForm[0].is_ration_card.value);
		if (des == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/food/q1/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/food/q1/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/food/q1/' .$row['child_id'] . '.png'))) {  ?>
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
		//image
		var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
         var filename1 = jqForm[0].image2.value;
		if (filename1.search(re_text) == -1 && filename1 !='')
            {
				$("#error-img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img2").html("");
			}
			 var filename2 = jqForm[0].image1.value;
		if (filename2.search(re_text) == -1 && filename2 !='')
            {
				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img1").html("");
			}
		//end
	if (!jqForm[0].id_pds.value)
        {
            return false;
        }
		var des2 = (jqForm[0].id_pds.value);
		if (des2 == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/food/q2/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/food/q2/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/food/q2/' .$row['child_id'] . '.png'))) {  ?>
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

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
       $('html, body').animate({ scrollTop: 0 }, 0);
	   $('#preloader-form').html('');
		 //$('html, body').animate({ scrollTop: 0 }, 0);
	  
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;

    }
$(function() {
//$('#id_pds_yes').hide();
   		 $('#id_pds').change(function(){
        	if($('#id_pds').val() == 'Yes') {
            $('#id_pds_yes').show();
       		 } else {
            $('#id_pds_yes').hide();
       		 }
    	});
		});
		$(function() {
//$('#is_ration_card_yes').hide();
   		 $('#is_ration_card').change(function(){
        	if($('#is_ration_card').val() == 'Yes') {
            $('#is_ration_card_yes').show();
       		 } else {
            $('#is_ration_card_yes').hide();
       		 }
    	});
		});

		function ajaxFileUpload1(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
               // upload_field.form.reset();
                return false;
            }else{
				$("#error-img1").html("");
			}
			}

		function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
                return false;
            }else{
				$("#error-img2").html("");
			}
		}
/*		function ajaxFileUpload3(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
                return false;
            }else{
				$("#error-img3").html("");
			}
		}
	*/

</script>
