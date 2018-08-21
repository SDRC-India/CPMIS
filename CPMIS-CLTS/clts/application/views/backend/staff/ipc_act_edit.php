<?php
include "modal_msg_labouract.php";
foreach ($ipc_act_data as $row):


?>

<div class="row">
<?php $this->load->view("backend/staff/acttab.php") ;?>

<!-----------------------------ipc act edit page started------------------------------------>
<div class="col-md-12">
  <div class="panel panel-primary" data-collapsed="0">
    <div class="panel-heading">
      <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?ipc_act">List/Edit</a> </div>
      <div class="panel-title" > <i class="entypo-plus-circled"></i>
        <?php /*echo get_phrase('project_form');*/ ?>
        IPC Act - Child ID: <?php echo $row['child_id']; ?> </div>
    </div>
    <div class="panel-body"> <?php echo form_open('ipc_act/ipcact_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
      <!--  Start Of Row -->
      <div class="row">
        <div class="panel-title ptitle"  > </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label">1. Name of Section/<br/>
            Subsection </label>
            <div id="name_section_fr_grp" class="col-sm-8">
			<select name="name_section"  class="form-control" id="name_section" data-validate="required">
			    <option value="">Select</option>
                  <?php foreach($sections as $crow1):  ?>
                  <option value="<?php echo $crow1['id'];?>" <?php if($row['name_section']==$crow1['id']) echo 'selected' ;?>> <?php echo $crow1['section_name']; ?></option>
                  <?php  endforeach;?>
                </select>
             
        <span class="name_section_msg color-red"></span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label">2. Remarks</label>
            <div id="remarks_fr_grp" class="col-sm-8">
              <textarea name="remarks" id="remarks" class="form-control resize-none"><?php echo $row['remarks'] ?></textarea>
              <span class="remarks_msg color-red"></span>
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
<!--------------------------ipc act end ---------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

	$('button[type="submit"]').prop('disabled', true);
	$(':input', this).change(function() {
	 if($(this).val() != '') {
	$('button[type="submit"]').prop('disabled', false);
	  }
	});
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: false
        };
        $('.project-add').submit(function () {
          //$('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {

        /*if (!jqForm[0].title.value)
        {
            return false;
        }*/
        if(jqForm[0].name_section.value.length>120)
        {
          flag=1;
          $("#name_section_fr_grp").addClass("validate-has-error");
          $( ".name_section" ).focus();
          $(".name_section_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#name_section_fr_grp").removeClass("validate-has-error");
         $(".name_section_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].name_section.value)){
          flag=1;

               $("#name_section_fr_grp").addClass("validate-has-error");
               $( ".name_section" ).focus();
               $(".name_section_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#name_section_fr_grp").removeClass("validate-has-error");
          $(".name_section_msg").html("");
        }
        if(jqForm[0].remarks.value.length>120)
        {
          flag=1;
          $("#remarks_fr_grp").addClass("validate-has-error");
          $( ".remarks" ).focus();
          $(".remarks_msg").html("This field  should be less than 120 characters");
         return false;

        }
        else{
          $("#remarks_fr_grp").removeClass("validate-has-error");
         $(".remarks_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].remarks.value)){
          flag=1;

               $("#remarks_fr_grp").addClass("validate-has-error");
               $( ".remarks" ).focus();
               $(".remarks_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#remarks_fr_grp").removeClass("validate-has-error");
          $(".remarks_msg").html("");
        }
    $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
    document.getElementById("submit-button").disabled = true;
}
    function show_response_project_add(responseText, statusText, xhr, $form) {
		$('html, body').animate({ scrollTop: 0 }, 0);

	   $('#preloader-form').html('');
		 /*window.location.reload();
        toastr.success("Information Updated Successfully", "Success");*/
	
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ( (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            //document.getElementById("error").style.display = ret ? "none" : "inline";
           return ret;
		  // return false;
        }

</script>
