


<?php
$parent=$ref;
include "modal_msg_labouract.php";?>

<div class="row">
  <?php
if($parent=='entitle'){
	include "entitled_child_detail.php";}
else{
foreach($edit_data as $x):
$row=$x;
endforeach;
include "rehilibitionTab.php";
}
foreach ($edit_data as $row): ?>
  <!----------------------start of revenue---------------------------->
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_head_list"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?staff/revenue_department">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Revenue and Land Reform Department - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('staff/revenue_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Is Rescued Child Family Benefited Under Land Settlement / Distribution ? <span class="color-red">*</span></label>
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
          <div class="col-sm-6" id="is_benefited_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 i. Proof<span class="color-red">*</span></label>
              <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
				  <?php if (file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/revenue/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/revenue/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/revenue/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}
						else if (file_exists('uploads/entitlement_proof/revenue/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/revenue/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/revenue/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
						echo '';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
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

		if($('#is_benefited_landsettlement').val() == 'Yes') {
            $('#is_benefited_yes').show();
       		 } else {
            $('#is_benefited_yes').hide();
       		 }
	    $('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });



        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
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
        }else{
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

function ajaxFileUpload1(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#error-img").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
                upload_field.form.reset();
                return false;
            }
			}
</script>
