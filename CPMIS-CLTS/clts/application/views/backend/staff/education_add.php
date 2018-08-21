
<?php
 include "modal_msg_labouract.php";
foreach ($education_add_data as $row):
?>
<!----------------------------start of additional details/education---------------------------->

<div class="row">
  <?php include "tabmenu.php" ?>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?educational_add">List Educational Information</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Add Educational History - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('educational_add/education/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > 1. Education Status of the Child</div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">a. School Attended</label>
              <div class="col-sm-8">
                <select name="school_attended" class="form-control" id="school_attended">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['school_attended']=='Yes') echo 'selected'; ?>> Yes</option>
                  <option value="No" <?php if($row['school_attended']=='No') echo 'selected'; ?> > No</option>
                </select>
              </div>
            </div>
          </div>
		  </div>
		 <div id="school_attended_yes">
		  <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">b. Select Education Level </label>
              <div class="col-sm-8">
                <select name="edu2"  class="form-control" id="education">
                  <option value="">Select</option>
                  <option value="Illitrate" <?php if($row['education_level']=='Illitrate') echo 'selected'; ?>> Illiterate</option>
                  <option value="1st"  <?php if($row['education_level']=='1st') echo 'selected'; ?> > 1st</option>
                  <option value="2nd"  <?php if($row['education_level']=='2nd') echo 'selected'; ?> > 2nd</option>
                  <option value="3rd"  <?php if($row['education_level']=='3rd') echo 'selected'; ?> > 3rd</option>
                  <option value="4th"  <?php if($row['education_level']=='4th') echo 'selected'; ?> > 4th</option>
                  <option value="5th"  <?php if($row['education_level']=='5th') echo 'selected'; ?> > 5th</option>
                  <option value="6th"  <?php if($row['education_level']=='6th') echo 'selected'; ?> > 6th</option>
                  <option value="7th"  <?php if($row['education_level']=='7th') echo 'selected'; ?> > 7th</option>
                  <option value="8th"  <?php if($row['education_level']=='8th') echo 'selected'; ?> > 8th</option>
                  <option value="9th"  <?php if($row['education_level']=='9th') echo 'selected'; ?> > 9th</option>
                  <option value="10th"  <?php if($row['education_level']=='10th') echo 'selected'; ?> > 10th</option>
				  <option value="11th" <?php if($row['education_level']=='11th') echo 'selected'; ?>>11th</option>
				  <option value="12th" <?php if($row['education_level']=='12th') echo 'selected'; ?>>12th</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin1" >
          <div class="panel-title ptitle" > i. School Details</div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Please Select </label>
              <div class="col-sm-8">
                <select name="schooldetail" class="form-control" id="schooldetail">
                  <option value=""> Select</option>
                  <option value="Corporation/Municipal/Panchayat Union" <?php if($row['details_of_school']=='Corporation/Municipal/Panchayat Union') echo 'selected'; ?>> Corporation/Municipal/Panchayat Union </option>
                  <option value="Government/SC Welfare School/BC Welfare School" <?php if($row['details_of_school']=='Government/SC Welfare School/BC Welfare School') echo 'selected'; ?>> Government/SC Welfare School/BC Welfare School </option>
                  <option value="Private Management" <?php if($row['details_of_school']=='Private Management') echo 'selected'; ?>> Private Management </option>
                  <option value="Convent" <?php if($row['details_of_school']=='Convent') echo 'selected'; ?>> Convent </option>
                  <option value="Madarsa" <?php if($row['details_of_school']=='Madarsa') echo 'selected'; ?>  > Madarsa </option>
                  <option value="Others" <?php if($row['details_of_school']=='Others') echo 'selected'; ?> > Others </option>
                  <option value="None" <?php if($row['details_of_school']=='None') echo 'selected'; ?> > None </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="schooldetal_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> Please Specify</label>
              <div id="school_detail_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control school_detail_other" name="school_detail_other" id="schoolother" value="<?php echo $row['school_detail_other']; ?>" >
                  <span class="school_detail_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin1" >
          <div class="panel-title ptitle" > ii. Medium of Study</div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">i. Medium</label>
              <div class="col-sm-8">
                <select name="medium_of_study" class="form-control" id="medium_of_study">
				<option value="">Select</option>
                  <option value="Hindi"  <?php if($row['medium_of_study']=='Hindi') echo 'selected'; ?> > Hindi </option>
                  <option value="English"  <?php if($row['medium_of_study']=='English') echo 'selected'; ?> > English </option>
                  <option value="Urdu"  <?php if($row['medium_of_study']=='Urdu') echo 'selected'; ?> > Urdu </option>
                  <option value="Sanskrit"  <?php if($row['medium_of_study']=='Sanskrit') echo 'selected'; ?> > Sanskrit </option>
                  <option value="Other"  <?php if($row['medium_of_study']=='Other') echo 'selected'; ?> > Others </option>
                  <option value="None"  <?php if($row['medium_of_study']=='None') echo 'selected'; ?> > None </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id ="otherValue" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Please Specify</label>
              <div id="medium_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control" name="medium_other"  value="<?php echo $row['medium_other']; ?>" id="medium_other"  autofocus>
                <span class="medium_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin1" >
          <div class="panel-title ptitle"  > iii. Reason for Leaving School </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Reason</label>
              <div class="col-sm-8">
                <select name="edu5" class="form-control" id="reasonBox">
				<option value="">Select</option>
                  <option value="Failure in the Class Last Studied"
				  <?php if($row['reason_for_leaving']=='Failure in the Class Last Studied') echo 'selected'; ?> > Failure in the Class Last Studied </option>
                  <option value="Lack of Interest in the School Activities"
				  <?php if($row['reason_for_leaving']=='Lack of Interest in the School Activities') echo 'selected'; ?> > Lack of Interest in the School Activities </option>
                  <option value="Indifferent Attitude of the Teachers"
				  <?php if($row['reason_for_leaving']=='Indifferent Attitude of the Teachers') echo 'selected'; ?> > Indifferent Attitude of the Teachers </option>
                  <option value="Peer Group Influence"
				  <?php if($row['reason_for_leaving']=='Peer Group Influence') echo 'selected'; ?> > Peer Group Influence </option>
                  <option value="To Earn and Support the Family"
				  <?php if($row['reason_for_leaving']=='To Earn and Support the Family') echo 'selected'; ?>  > To Earn and Support the Family </option>
                  <option value="Sudden Demise of Parents"
				  <?php if($row['reason_for_leaving']=='Sudden Demise of Parents') echo 'selected'; ?> > Sudden Demise of Parents </option>
                  <option value="Rigid School Atmosphere"
				  <?php if($row['reason_for_leaving']=='Rigid School Atmosphere') echo 'selected'; ?> > Rigid School Atmosphere </option>
                  <option value="Absenteeism Followed by Running away from School"
				  <?php if($row['reason_for_leaving']=='Absenteeism followed by running away from school') echo 'selected'; ?>  > Absenteeism Followed by Running away from School </option>
                  <option value="Others"
				  <?php if($row['reason_for_leaving']=='Others') echo 'selected'; ?> > Others </option>
                  <option value="None"
				  <?php if($row['reason_for_leaving']=='None') echo 'selected'; ?> > None </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="reasonother">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Please specify</label>
              <div id="reason_other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control reason_other" name="reason_other" id="reason_other"   value="<?php echo $row['reason_other']; ?>" autofocus>
                <span class="reason_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
		</div>
        <div class="row top-margin1" >
          <div class="panel-title ptitle"  > 2. Vocational Training </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">a. Received Vocational Training</label>
              <div class="col-sm-8">
                <select name="vocational_training" class="form-control" id="vocational_training">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['vocational_training']=='Yes') echo 'selected'; ?> > Yes</option>
                  <option value="No" <?php if($row['vocational_training']=='No') echo 'selected'; ?> > No</option>
                </select>
              </div>
            </div>
          </div>
		  
		  
		   <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">b. Types Vocational Training</label>
              <div class="col-sm-8">
                <select name="vocational_type" class="form-control" id="vocational_type">
                  <option value="">Select</option>
                  <option value="need_based" <?php if($row['vocational_type']=='need_based') echo 'selected'; ?> > Need Based</option>
                  <option value="intrest_based" <?php if($row['vocational_type']=='intrest_based') echo 'selected'; ?> >Interest Based</option>
                </select>
              </div>
            </div>
          </div>
		  
		  
        </div>
        <div class="row" id="vocational_training_yes">
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">c. Name of Vocational Training</label>
              <div id="vocational_trade_name_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control vocational_trade_name" name="vocational_trade_name" id="vocational_trade_name" value="<?php echo $row['vocational_trade_name']; ?>" autofocus>
                <span class="vocational_trade_name_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">d. No. of Years</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="no_of_years" id="no_of_years" value="<?php echo $row['no_of_years']; ?>"
				onkeypress="return isNumberKey(event)"  onkeyup="this.value = minmax(this.value, 0, 17)"autofocus>
              </div>
            </div>
          </div>
        </div>
       <!-- <div class="row top-margin1">
		<div class="panel-title ptitle"> 3. Others </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Please Specify</label>
              <div id="other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control other" name="other" id="other" value="<?php echo $row['other']; ?>" >
                <span class="other_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6"  >
            <div class="form-group">
              <div class="col-sm-8"> </div>
            </div>
          </div>
        </div>-->
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
<!----------------------------------end of education add------------------------------------->
<?php endforeach;?>
<script>
   $(document).ready(function () {

			$('button[type="submit"]').prop('disabled', true);
			$(':input', this).change(function() {
			 if($(this).val() != '') {
			$('button[type="submit"]').prop('disabled', false);
			  }
			});

			$('button[type="submit"]').prop('disabled', true);
			$(':input', this).change(function() {
			 if($(this).val() != '') {
			$('button[type="submit"]').prop('disabled', false);
			  }
			});

			if($('#school_attended').val() == 'Yes') {
            $('#school_attended_yes').show();
       		 } else {
            $('#school_attended_yes').hide();
       		 }
			if($('#medium_of_study').val() == 'Other') {
            $('#otherValue').show();

       		 } else {
            $('#otherValue').hide();

       		 }

        	if($('#reasonBox').val() == 'Others') {
            $('#reasonother').show();

       		 } else {
            $('#reasonother').hide();

       		 }
		if($('#education_other').val() == 'Others') {
            $('#eduother').show();

       		 } else {
            $('#eduother').hide();

       		 }
		if($('#schooldetail').val() == 'Others') {
            $('#schooldetal_other').show();

       		 } else {
            $('#schooldetal_other').hide();

       		 }
		if($('#vocational_training').val() == 'Yes') {
            $('#vocational_training_yes').show();

       		 } else {
            $('#vocational_training_yes').hide();

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
    //validation function
    function validate_project_add(formData, jqForm, options) {

      if(jqForm[0].schooldetail.value=='Others')
      {
        if(jqForm[0].school_detail_other.value.length>70)
        {
          flag=1;
          $("#school_detail_other_fr_grp").addClass("validate-has-error");
          $( ".school_detail_other_other" ).focus();
          $(".school_detail_other_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#school_detail_other_fr_grp").removeClass("validate-has-error");
         $(".school_detail_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].school_detail_other.value)){
          flag=1;

               $("#school_detail_other_fr_grp").addClass("validate-has-error");
               $( ".school_detail_other" ).focus();
               $(".school_detail_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#school_detail_other_fr_grp").removeClass("validate-has-error");
          $(".school_detail_other_msg").html("");
        }
      }
      if(jqForm[0].medium_of_study.value=='Other')
      {
        if(jqForm[0].medium_other.value.length>70)
        {
          flag=1;
          $("#medium_other_fr_grp").addClass("validate-has-error");
          $( ".medium_other" ).focus();
          $(".medium_other_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#medium_other_fr_grp").removeClass("validate-has-error");
         $(".medium_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].medium_other.value)){
          flag=1;

               $("#medium_other_fr_grp").addClass("validate-has-error");
               $( ".medium_other" ).focus();
               $(".medium_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#medium_other_fr_grp").removeClass("validate-has-error");
          $(".medium_other_msg").html("");
        }
      }
      //reason of leaving school
      if(jqForm[0].edu5.value=='Others')
      {
        if(jqForm[0].reason_other.value.length>70)
        {
          flag=1;
          $("#reason_other_fr_grp").addClass("validate-has-error");
          $(".reason_other").focus();
          $(".reason_other_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#reason_other_fr_grp").removeClass("validate-has-error");
         $(".reason_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].reason_other.value)){
          flag=1;

               $("#reason_other_fr_grp").addClass("validate-has-error");
               $(".reason_other").focus();
               $(".reason_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#reason_other_fr_grp").removeClass("validate-has-error");
          $(".reason_other_msg").html("");
        }
      }
      //vocational_training
      //school_detail_other/medium_other/reason_other/vocational_trade_name/other
if(jqForm[0].vocational_training.value=='Yes')
      {
        if(jqForm[0].vocational_trade_name.value.length>70)
        {
          flag=1;
          $("#vocational_trade_name_fr_grp").addClass("validate-has-error");
          $(".vocational_trade_name").focus();
          $(".vocational_trade_name_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#vocational_trade_name_fr_grp").removeClass("validate-has-error");
         $(".vocational_trade_name_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].vocational_trade_name.value)){
          flag=1;

               $("#vocational_trade_name_fr_grp").addClass("validate-has-error");
               $(".vocational_trade_name").focus();
               $(".vocational_trade_name_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#vocational_trade_name_fr_grp").removeClass("validate-has-error");
          $(".vocational_trade_name_msg").html("");
        }
      }

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('html, body').animate({ scrollTop: 0 }, 0);

		$('#preloader-form').html('');

		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

	$(function() {

   		 $('#medium_of_study').change(function(){
        	if($('#medium_of_study').val() == 'Other') {
            $('#otherValue').show();

       		 } else {
            $('#otherValue').hide();

       		 }
    	});
		});

		$(function() {

   		 $('#reasonBox').change(function(){
        	if($('#reasonBox').val() == 'Others') {
            $('#reasonother').show();

       		 } else {
            $('#reasonother').hide();

       		 }
    	});
		});


		$(function() {

   		 $('#education_other').change(function(){
        	if($('#education_other').val() == 'Others') {
            $('#eduother').show();

       		 } else {
            $('#eduother').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#schooldetail').change(function(){
        	if($('#schooldetail').val() == 'Others') {
            $('#schooldetal_other').show();

       		 } else {
            $('#schooldetal_other').hide();

       		 }
    	});
		});

		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
		$(function() {

   		 $('#vocational_training').change(function(){
        	if($('#vocational_training').val() == 'Yes') {
            $('#vocational_training_yes').show();

       		 } else {
            $('#vocational_training_yes').hide();

       		 }
    	});
		});

		$(function() {

   		 $('#school_attended').change(function(){
        	if($('#school_attended').val() == 'Yes') {
            $('#school_attended_yes').show();
       		 } else {
            $('#school_attended_yes').hide();
       		 }
    	});
		});
$("#vocational_trade_name").on("keydown", function (e) {
			var charcode = e.which;
			if ( /*(charcode === 8) ||*/ // Backspace
				(charcode >= 48 && charcode <= 57) ||(charcode >= 96 && charcode <= 105)) /*|| // 0 - 9
				(charcode >= 65 && charcode <= 90) || // a - z
				(charcode >= 97 && charcode <= 122))*/ { // A - Z

		//alert(charcode);
				return false;
			} else {
				//e.preventDefault()
				//alert(charcode);
				return true;
			}
		});


function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function minmax(value, min, max)
{
    if(parseInt(value) < min || isNaN(value))
        return 0;
    else if(parseInt(value) > max)
        return 17;
    else return value;
}
</script>
