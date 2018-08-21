<?php
$this->load->view("backend/staff/modal_msg_labouract.php");
foreach ($health_add_data as $row):
?>
<!---------------------------start of health edit-------------------------------->

<div class="row">
  <?php include "tabmenu.php" ?>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?health_add">List of Health Information</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Health Status- Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('health_add/health/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Height (in cm)</label>
              <div id="height_fr_grp" class="col-sm-8">
                <input type="text" class="form-control height1" name="height" id="height" value="<?php echo $row['height']; ?>" onkeypress="return isNumberKey(event)" autofocus>
                <span class="height_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Weight (in kg)</label>
              <div id="weight_fr_grp" class="col-sm-8">
                <input type="text" class="form-control weight" name="weight" id="weight" value="<?php echo $row['weight']; ?>" onkeypress="return isNumberKey(event)" autofocus>
                  <span class="weight_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin1" >
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Details of Handicap/Disability </label>
              <div class="col-sm-8">
                <select name="details_of_handicap" class="form-control" id="details_of_handicap">
                  <option value=""> Select</option>
                  <option value="Hearing Impairment" <?php if($row['details_of_handicap']=='Hearing Impairment') echo 'selected'; ?>> Hearing Impairment </option>
                  <option value="Speech Impairment" <?php if($row['details_of_handicap']=='Speech Impairment') echo 'selected'; ?>> Speech Impairment </option>
                  <option value="Physical Handicap/Disability"
				   <?php if($row['details_of_handicap']=='Physical Handicap/Disability') echo 'selected'; ?>> Physical Handicap/Disability </option>
                  <option value="Mental Handicap/Disability"
				  <?php if($row['details_of_handicap']=='Mental Handicap/Disability') echo 'selected'; ?>> Mental Handicap/Disability </option>
                  <option value="Others" <?php if($row['details_of_handicap']=='Others') echo 'selected'; ?>> Others </option>
                  <option value="None" <?php if($row['details_of_handicap']=='None') echo 'selected'; ?>> None </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="otherHandicap">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3 i. Please Specify</label>
              <div id="details_of_handicap_other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control details_of_handicap_other" name="details_of_handicap_other"
				 id="details_of_handicap_other" value="<?php echo $row['details_of_handicap_other'];  ?>"  autofocus>
                <span class="details_of_handicap_other_msg color-red"></span>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4. Blood Group</label>
              <div class="col-sm-8">
				<select name="blood_group" class="form-control" id="blood_group">
					 <option value=""> Select</option>
					 <option  value="O+" <?php if($row['blood_group']=='O+') echo 'selected'; ?>> O+</option>
					 <option value="O-" <?php if($row['blood_group']=='O-') echo 'selected'; ?>>O-</option>
					 <option value="A+" <?php if($row['blood_group']=='A+') echo 'selected'; ?>>A+</option>
					<option value="A-" <?php if($row['blood_group']=='A-') echo 'selected'; ?>>A-</option>
						 <option value="B+" <?php if($row['blood_group']=='B+') echo 'selected'; ?>>B+</option>
						  <option value="B-" <?php if($row['blood_group']=='B-') echo 'selected'; ?>>B-</option>
						   <option value="AB+" <?php if($row['blood_group']=='AB+') echo 'selected'; ?>>AB+</option>
						  <option value="AB-" <?php if($row['blood_group']=='AB-') echo 'selected'; ?>>AB-</option>
					</select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Health Card Issued</label>
              <div class="col-sm-8">
                <select name="health_card_issued" class="form-control" id="health_card_issued">
				  <option value=""> Select</option>
                  <option value="Yes" <?php if($row['health_card_issued']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['health_card_issued']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
          <!--for health card no-->
          <div class="col-sm-6" id="healthcard_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5 i. Please Specify</label>
              <div id="health_card_issued_yes_fr_grp" class="col-sm-8">
                 <input type="text" class="form-control health_card_issued_yes" name="health_card_issued_yes" id="health_card_issued_yes" value="<?php echo $row['health_card_issued_yes']; ?>" autofocus>
                 <span class="health_card_issued_yes_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"  >6. Details of  Health Condition of the Child </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.i. Respiratory Disorders</label>
              <div class="col-sm-8">
                <select name="respiratory_disorders" id="respiratory_disorders" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['respiratory_disorders']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['respiratory_disorders']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['respiratory_disorders']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.ii. Hearing Impairment</label>
              <div class="col-sm-8">
                <select name="hearing_impairment" id="hearing_impairment" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['hearing_impairment']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['hearing_impairment']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['hearing_impairment']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.iii. Eye Diseases</label>
              <div class="col-sm-8">
                <select name="eye_diseases" id="eye_diseases" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['eye_diseases']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['eye_diseases']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['eye_diseases']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.iv. Dental Disease</label>
              <div class="col-sm-8">
                <select name="dental_disease" id="dental_disease" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['dental_disease']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['dental_disease']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['dental_disease']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin">
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.v. Cardiac Diseases</label>
              <div class="col-sm-8">
                <select name="cardiac_diseases" id="cardiac_diseases" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['cardiac_diseases']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['cardiac_diseases']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['cardiac_diseases']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.vi. Skin Disease</label>
              <div class="col-sm-8">
                <select name="skin_disease" id="skin_disease" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['skin_disease']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['skin_disease']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['skin_disease']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.vii. Sexually Transmitted Diseases</label>
              <div class="col-sm-8">
                <select name="sexually_transmitted_diseases" class="form-control" id="sexually_transmitted_diseases">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['sexually_transmitted_diseases']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['sexually_transmitted_diseases']=='Not known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['sexually_transmitted_diseases']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.viii. Neurological Disorders </label>
              <div class="col-sm-8">
                <select name="neurological_disorders"  id="neurological_disorders" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['neurological_disorders']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['neurological_disorders']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['neurological_disorders']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.ix. Mentally Challenged</label>
              <div class="col-sm-8">
                <select name="mental_handicap"  id="mental_handicap" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['mental_handicap']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['mental_handicap']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['mental_handicap']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.x. Physically Challenged</label>
              <div class="col-sm-8">
                <select name="physical_handicap" id="physical_handicap" class="form-control">
                  <option value=""> Select </option>
                  <option value="Present" <?php if($row['physical_handicap']=='Present') echo 'selected'; ?>> Present </option>
                  <option value="Not Known" <?php if($row['physical_handicap']=='Not Known') echo 'selected'; ?>> Not Known </option>
                  <option value="Absent" <?php if($row['physical_handicap']=='Absent') echo 'selected'; ?>> Absent </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. Others (Please specify)</label>
              <div id="other_specify_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_specify" name="other_specify" id="other_specify" value="<?php echo $row['other_specify']; ?>" autofocus>
                <span class="other_specify_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6"> </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-6">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!-------------------------end of health edit----------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

			$('button[type="submit"]').prop('disabled', true);
			$(':input', this).change(function() {
			 if($(this).val() != '') {
			$('button[type="submit"]').prop('disabled', false);
			  }
			});

			if($('#health_card_issued').val() == 'Yes') {
            $('#healthcard_yes').show();
			/* document.getElementById('other3').disabled=false; */
       		 } else {
            $('#healthcard_yes').hide();
			/* document.getElementById('other3').disabled='disabled';*/
       		 }
		if($('#details_of_handicap').val() == 'Others') {
            $('#otherHandicap').show();
			/* document.getElementById('other3').disabled=false; */
       		 } else {
            $('#otherHandicap').hide();
			/* document.getElementById('other3').disabled='disabled';*/
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
    function validate_project_add(formData, jqForm, options) {

      //height/weight/details_of_handicap_other/health_card_issued_yes/other_specify

        if(jqForm[0].height.value.length>3)
        {
          flag=1;
          $("#height_fr_grp").addClass("validate-has-error");
          $( ".height1" ).focus();
          $(".height_msg").html("This field should be less than 4 numeric characters");
         return false;

        }
        else{
          $("#height_fr_grp").removeClass("validate-has-error");
         $(".height_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].height.value)){
          flag=1;

               $("#height_fr_grp").addClass("validate-has-error");
               $( ".height1" ).focus();
               $(".height_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#height_fr_grp").removeClass("validate-has-error");
          $(".height_msg").html("");
        }
        if(jqForm[0].weight.value.length>3)
        {
          flag=1;
          $("#weight_fr_grp").addClass("validate-has-error");
          $( ".weight" ).focus();
          $(".weight_msg").html("This field should be less than 4 numeric characters");
         return false;

        }
        else{
          $("#weight_fr_grp").removeClass("validate-has-error");
         $(".weight_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].weight.value)){
          flag=1;

               $("#weight_fr_grp").addClass("validate-has-error");
               $( ".weight" ).focus();
               $(".weight_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#weight_fr_grp").removeClass("validate-has-error");
          $(".weight_msg").html("");
        }
        //validation for details handicaped/Disability
        if(jqForm[0].details_of_handicap.value =="Others")
        {
        if(jqForm[0].details_of_handicap_other.value.length>70)
        {
          flag=1;
          $("#details_of_handicap_other_fr_grp").addClass("validate-has-error");
          $( ".details_of_handicap_other" ).focus();
          $(".details_of_handicap_other_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#details_of_handicap_other_fr_grp").removeClass("validate-has-error");
         $(".details_of_handicap_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].details_of_handicap_other.value)){
          flag=1;

               $("#details_of_handicap_other_fr_grp").addClass("validate-has-error");
               $( ".details_of_handicap_other" ).focus();
               $(".details_of_handicap_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#details_of_handicap_other_fr_grp").removeClass("validate-has-error");
          $(".details_of_handicap_others_msg").html("");
        }
      }
      //validation for health card issued
      if(jqForm[0].health_card_issued.value =="Yes")
      {
      if(jqForm[0].health_card_issued_yes.value.length>40)
      {
        flag=1;
        $("#health_card_issued_yes_fr_grp").addClass("validate-has-error");
        $( ".health_card_issued_yes" ).focus();
        $(".health_card_issued_yes_msg").html("This field should be less than 40 characters");
       return false;

      }
      else{
        $("#health_card_issued_yes_fr_grp").removeClass("validate-has-error");
       $(".health_card_issued_yes_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].health_card_issued_yes.value)){
        flag=1;

             $("#health_card_issued_yes_fr_grp").addClass("validate-has-error");
             $( ".health_card_issued_yes" ).focus();
             $(".health_card_issued_yes_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#health_card_issued_yes_fr_grp").removeClass("validate-has-error");
        $(".health_card_issued_yes_msg").html("");
      }
    }
    //other validation

    if(jqForm[0].other_specify.value.length>120)
    {
      flag=1;
      $("#other_specify_fr_grp").addClass("validate-has-error");
      $( ".other_specify" ).focus();
      $(".other_specify_msg").html("This field should be less than 120 characters");
     return false;

    }
    else{
      $("#other_specify_fr_grp").removeClass("validate-has-error");
     $(".other_specify_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].other_specify.value)){
      flag=1;

           $("#other_specify_fr_grp").addClass("validate-has-error");
           $( ".other_specify" ).focus();
           $(".other_specify_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#other_specify_fr_grp").removeClass("validate-has-error");
      $(".other_specify_msg").html("");
    }
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('html, body').animate({ scrollTop: 0 }, 0);

		$('#preloader-form').html('');
 -
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

	$(function() {

   		 $('#details_of_handicap').change(function(){
        	if($('#details_of_handicap').val() == 'Others') {
            $('#otherHandicap').show();
			/* document.getElementById('other3').disabled=false; */
       		 } else {
            $('#otherHandicap').hide();
			/* document.getElementById('other3').disabled='disabled';*/
       		 }
    	});
		});

		$(function() {

   		 $('#health_card_issued').change(function(){
        	if($('#health_card_issued').val() == 'Yes') {
            $('#healthcard_yes').show();
			/* document.getElementById('other3').disabled=false; */
       		 } else {
            $('#healthcard_yes').hide();
			/* document.getElementById('other3').disabled='disabled';*/
       		 }
    	});
		});


function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<style>
div.msgBox{
background-color:#EAF5E6;
min-height:150px;
}
div.msgBoxTitle{
color:#009900;
}
div.msgBoxImage{
display:none;
}
</style>
