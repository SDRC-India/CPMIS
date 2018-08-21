<?php
include "modal_msg_labouract.php";
foreach ($other_laws_data as $row):
?>

<!------------------------------other laws edit start---------------------------->
<div class="row">
  <?php include "acttab.php" ?>

  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?other_laws">List/Edit</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Other Laws - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('other_laws/otherlawsact_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1 i. Name of Act </label>
              <div id="act_name1_fr_grp" class="col-sm-8">
                <input type="text" class="form-control act_name1" name="act_name1" id="act_name1"
                               value="<?php echo $row['act_name1']; ?>"   >
                               <span class="act_name1_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1 ii. Section/<br />
              Subsection </label>
              <div class="col-sm-8">
                <input id="section_name1_fr_grp"  type="text" class="form-control section_name1" name="section_name1" id="section_name1"
                               value="<?php echo $row['section_name1']; ?>"   >
                               <span class="section_name1_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>

        <!--  Start Of Row -->

        <!--  End Of Row -->
		 <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2 i. Name of Act </label>
              <div id="act_name2_fr_grp" class="col-sm-8">
                <input   type="text" class="form-control act_name2" name="act_name2" id="act_name2"
                               value="<?php echo $row['act_name2']; ?>"   >
                               <span class="act_name2_msg color-red"></span>

              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2 ii. Section/<br />
              Subsection </label>
              <div id="section_name2_fr_grp" class="col-sm-8">
                <input type="text" class="form-control section_name2 " name="section_name2" id="section_name2"
                               value="<?php echo $row['section_name2']; ?>"   >
                               <span class="section_name2_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
       <!-- end of 2nd div-->
	    <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3 i. Name of Act </label>
              <div  id="section_name2_fr_grp" class="col-sm-8">
                <input type="text" class="form-control act_name3 " name="act_name3" id="act_name3"
                               value="<?php echo $row['act_name3']; ?>"   >
                               <span class="act_name3_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3 ii. Section/<br />
              Subsection </label>
              <div id="section_name2_fr_grp" class="col-sm-8">
                <input type="text" class="form-control section_name3" name="section_name3" id="section_name3"
                               value="<?php echo $row['section_name3']; ?>"   >
                               <span class="section_name3_msg color-red"></span>
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
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: false
        };
        $('.project-add').submit(function () {
          $('body').scrollTop(0);

            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {
      if(jqForm[0].act_name1.value.length>120)
      {
        flag=1;
        $("#act_name1_fr_grp").addClass("validate-has-error");
        $( ".act_name1" ).focus();
        $(".act_name1_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#act_name1_fr_grp").removeClass("validate-has-error");
       $(".act_name1_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].act_name1.value)){
        flag=1;

             $("#act_name1_fr_grp").addClass("validate-has-error");
             $( ".act_name1" ).focus();
             $(".act_name1_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#act_name1_fr_grp").removeClass("validate-has-error");
        $(".act_name1_msg").html("");
      }
      if(jqForm[0].section_name1.value.length>120)
      {
        flag=1;
        $("#section_name1_fr_grp").addClass("validate-has-error");
        $( ".section_name1" ).focus();
        $(".section_name1_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#section_name1_fr_grp").removeClass("validate-has-error");
       $(".section_name1_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].section_name1.value)){
        flag=1;

             $("#section_name1_fr_grp").addClass("validate-has-error");
             $( ".section_name1" ).focus();
             $(".section_name1_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#section_name1_fr_grp").removeClass("validate-has-error");
        $(".section_name1_msg").html("");
      }
      //second sectionm
      if(jqForm[0].act_name2.value.length>120)
      {
        flag=1;
        $("#act_name2_fr_grp").addClass("validate-has-error");
        $( ".act_name2" ).focus();
        $(".act_name2_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#act_name2_fr_grp").removeClass("validate-has-error");
       $(".act_name2_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].act_name2.value)){
        flag=1;

             $("#act_name2_fr_grp").addClass("validate-has-error");
             $( ".act_name2" ).focus();
             $(".act_name2_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#act_name2_fr_grp").removeClass("validate-has-error");
        $(".act_name2_msg").html("");
      }
      if(jqForm[0].section_name2.value.length>120)
      {
        flag=1;
        $("#section_name2_fr_grp").addClass("validate-has-error");
        $( ".section_name2" ).focus();
        $(".section_name2_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#section_name2_fr_grp").removeClass("validate-has-error");
       $(".section_name2_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].section_name2.value)){
        flag=2;

             $("#section_name2_fr_grp").addClass("validate-has-error");
             $( ".section_name2" ).focus();
             $(".section_name2_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#section_name2_fr_grp").removeClass("validate-has-error");
        $(".section_name2_msg").html("");
      }
      ///third section
      if(jqForm[0].act_name3.value.length>120)
      {
        flag=1;
        $("#act_name3_fr_grp").addClass("validate-has-error");
        $( ".act_name3" ).focus();
        $(".act_name3_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#act_name3_fr_grp").removeClass("validate-has-error");
       $(".act_name3_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].act_name3.value)){
        flag=1;

             $("#act_name3_fr_grp").addClass("validate-has-error");
             $( ".act_name3" ).focus();
             $(".act_name3_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#act_name3_fr_grp").removeClass("validate-has-error");
        $(".act_name3_msg").html("");
      }
      if(jqForm[0].section_name3.value.length>120)
      {
        flag=1;
        $("#section_name3_fr_grp").addClass("validate-has-error");
        $( ".section_name3" ).focus();
        $(".section_name3_msg").html("This field  should be less than 120 characters");
       return false;

      }
      else{
        $("#section_name3_fr_grp").removeClass("validate-has-error");
       $(".section_name3_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].section_name3.value)){
        flag=1;

             $("#section_name3_fr_grp").addClass("validate-has-error");
             $( ".section_name3" ).focus();
             $(".section_name3_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#section_name3_fr_grp").removeClass("validate-has-error");
        $(".section_name3_msg").html("");
      }
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
	  $('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

</script>
