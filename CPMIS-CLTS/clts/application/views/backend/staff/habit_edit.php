<?php
include "modal_msg_labouract.php";
foreach ($habit_add_data as $row):
?>
<!-------------------start of habit edit--------------------------->

<div class="row">
  <?php include "tabmenu.php" ?>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?habit_add">List of Child Habit Information</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Habit of the Child - Child ID: <?php echo $row['child_id']; ?> - </div>
      </div>
      <div class="panel-body"> <?php echo form_open('habit_add/habit/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Details of Delinquent Behaviour,if any</label>
              <div class="col-sm-8">
                <select name="detail_delinquent" class="form-control" id="detail_delinquent">
				<option value="">Select</option>
                  <option value="Stealing" <?php if($row['detail_delinquent']=='Stealing') echo 'selected'; ?>> Stealing </option>
                  <option value="Pick Pocketing" <?php if($row['detail_delinquent']=='Pick Pocketing') echo 'selected'; ?>> Pick Pocketing </option>
                  <option value="Arrack Selling" <?php if($row['detail_delinquent']=='Arrack Selling') echo 'selected'; ?>> Arrack Selling </option>
                  <option value="Drug Paddling" <?php if($row['detail_delinquent']=='Drug Paddling') echo 'selected'; ?>> Drug Paddling </option>
                  <option value="Petty Offences" <?php if($row['detail_delinquent']=='Petty Offences') echo 'selected'; ?>> Petty Offences </option>
                  <option value="Violent Crime" <?php if($row['detail_delinquent']=='Violent Crime') echo 'selected'; ?>> Violent Crime </option>
                  <option value="Rape" <?php if($row['detail_delinquent']=='Rape') echo 'selected'; ?>> Rape </option>
                  <option value="None" <?php if($row['detail_delinquent']=='None') echo 'selected'; ?>> None </option>
                  <option value="Others"  <?php if($row['detail_delinquent']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6"  id="delinquentother">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.i. Please Specify</label>
              <div id="detail_delinquent_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control detail_delinquent_other" name="detail_delinquent_other" id="detail_delinquent_other" value="<?php echo $row['detail_delinquent_other'];  ?>" autofocus>
                <span class="detail_delinquent_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Reason for Delinquent Behaviour </label>
              <div class="col-sm-8">
                <select name="reason_delinquent" class="form-control" id="reason_delinquent">
				<option value="">Select</option>
                  <option value="Parental Neglect" <?php if($row['reason_delinquent']=='Parental Neglect') echo 'selected'; ?>> Parental Neglect </option>
                  <option value="Parental Overprotection" <?php if($row['reason_delinquent']=='Parental Overprotection') echo 'selected'; ?>> Parental Overprotection </option>
                  <option value="Parents Criminal Behaviour" <?php if($row['reason_delinquent']=='Parents Criminal Behaviour') echo 'selected';?>> Parents Criminal Behaviour</option>
                  <option value="Parents Influence" <?php if($row['reason_delinquent']=='Parents Influence') echo 'selected'; ?>> Parents Influence (Negative) </option>
                  <option value="Peer Group Influence" <?php if($row['reason_delinquent']=='Peer Group Influence') echo 'selected'; ?>> Peer Group Influence </option>
                  <option value="To buy Drugs/Alcohol" <?php if($row['reason_delinquent']=='To buy Drugs/Alcohol') echo 'selected'; ?>> To buy Drugs/Alcohol </option>
                  <option value="None" <?php if($row['reason_delinquent']=='None') echo 'selected'; ?>> None </option>
                  <option value="Other" <?php if($row['reason_delinquent']=='Other') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="behaviour">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2 i. Please Specify</label>
              <div id="reason_delinquent_other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control reason_delinquent_other" name="reason_delinquent_other" id="reason_delinquent_other" value="<?php echo $row['reason_delinquent_other'];  ?>" autofocus>
                <span class="reason_delinquent_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Nature</label>
              <div class="col-sm-8">
                <select name="nature" class="form-control" id="nature">
				<option value="">Select</option>
                  <option value="Over protection" <?php if($row['nature']=='Over protection') echo 'selected'; ?>> Overprotective </option>
                  <option value="Affectionate" <?php if($row['nature']=='Affectionate') echo 'selected'; ?>> Affectionate </option>
                  <option value="Attentive" <?php if($row['nature']=='Attentive') echo 'selected'; ?>> Attentive </option>
                  <option value="Not Affectionate" <?php if($row['nature']=='Not Affectionate') echo 'selected'; ?>> Not Affectionate </option>
                  <option value="Not Attentive" <?php if($row['nature']=='Not Attentive') echo 'selected'; ?>> Not Attentive </option>
                  <option value="Rejection" <?php if($row['nature']=='Rejection') echo 'selected'; ?>> Rejective </option>
                  <option value="Emotional" <?php if($row['nature']=='Emotional') echo 'selected'; ?>> Emotional </option>
                  <option value="None" <?php if($row['nature']=='None') echo 'selected'; ?>> None </option>
                  <option value="Other" <?php if($row['nature']=='Other') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="habitother">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3 i. Please Specify</label>
              <div id="nature_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control nature_other" name="nature_other" id="nature_other" value="<?php echo $row['nature_other'];  ?>"  autofocus>
                  <span class="nature_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" ></div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4. Habit of Child</label>
              <div class="col-sm-8">
                <select name="habit" class="form-control" id="habit">
				<option value="">Select</option>
                  <option value="Smoking" <?php if($row['habit']=='Smoking') echo 'selected'; ?>> Smoking </option>
                  <option value="Alcohol consumption" <?php if($row['habit']=='Alcohol consumption') echo 'selected'; ?>> Alcohol Consumption </option>
                  <option value="Drug use" <?php if($row['habit']=='Drug use') echo 'selected'; ?>> Drug use </option>
                  <option value="Gambling" <?php if($row['habit']=='Gambling') echo 'selected'; ?>> Gambling </option>
                  <option value="Begging" <?php if($row['habit']=='Begging') echo 'selected'; ?>> Begging </option>
                  <option value="None" <?php if($row['habit']=='None') echo 'selected'; ?>> None </option>
                  <option value="Other" <?php if($row['habit']=='Other') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="habitbother">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4 i. Please specify</label>
              <div id="habit_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control habit_other" name="habit_other" id="habit_other" value="<?php echo $row['habit_other'];  ?>"  autofocus>
                  <span class="habit_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"  ></div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Hobbies</label>
              <div class="col-sm-8">
			  <?php $val=explode(",",$row['hobbies']);?>
                <input type="checkbox" name="hobbies[]"  value="Playing" <?php if(in_array('Playing',$val)) {echo "checked";}?>> <label>Playing</label><br>
                <input type="checkbox" name="hobbies[]" value="Indoor / Outdoor games"  <?php if(in_array('Indoor / Outdoor games',$val)) {echo "checked";}?>> <label> Indoor / Outdoor games</label><br />
                <input type="checkbox" name="hobbies[]" value="Music" <?php if(in_array('Music',$val)) {echo "checked";}?>> <label> Music</label><br />
                <input type="checkbox" name="hobbies[]" value="Acting" <?php if(in_array('Acting',$val)) {echo "checked";}?>> <label> Acting</label><br />
                <input type="checkbox" name="hobbies[]"  value="Art & Craft" <?php if(in_array('Art & Craft',$val)) {echo "checked";}?>> <label>Art &amp; Craft</label><br />
                <input type="checkbox" name="hobbies[]" value="Drawing"  <?php if(in_array('Drawing',$val)) {echo "checked";}?>> <label>Drawing</label><br />
                <input type="checkbox" name="hobbies[]" value="Others" <?php if(in_array('Others',$val)) {echo "checked";}?>> <label>Others</label><br />

              </div>
            </div>
          </div>
          <div class="col-sm-6" id="habitbother">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"></label>
              <div class="col-sm-8"> </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form "></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!----------------------end of habit edit---------------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});

			if($('#detail_delinquent').val() == 'Others') {
            $('#delinquentother').show();

       		 } else {
            $('#delinquentother').hide();

       		 }

			if($('#reason_delinquent').val() == 'Other') {
            $('#behaviour').show();

       		 } else {
            $('#behaviour').hide();

       		 }

			if($('#nature').val() == 'Other') {
            $('#habitother').show();
			document.getElementById('nature_other').disabled=false;
       		 } else {
            $('#habitother').hide();
			 document.getElementById('nature_other').disabled='disabled';
       		 }

			if($('#habit').val() == 'Other') {
            $('#habitbother').show();
			document.getElementById('habit_other').disabled=false;
       		 } else {
            $('#habitbother').hide();
			 document.getElementById('habit_other').disabled='disabled';
       		 }

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
         // $('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {
      if(jqForm[0].detail_delinquent.value =="Others")
        {
        if(jqForm[0].detail_delinquent_other.value.length>120)
        {
          flag=1;
          $("#detail_delinquent_other_fr_grp").addClass("validate-has-error");
          $(".detail_delinquent_other").focus();
          $(".detail_delinquent_other_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#detail_delinquent_other_fr_grp").removeClass("validate-has-error");
         $(".detail_delinquent_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].detail_delinquent_other.value)){
          flag=1;
               $("#detail_delinquent_other_fr_grp").addClass("validate-has-error");
               $(".detail_delinquent_other").focus();
               $(".detail_delinquent_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#detail_delinquent_other_fr_grp").removeClass("validate-has-error");
          $(".detail_delinquent_other_msg").html("");
        }
      }

        if(jqForm[0].reason_delinquent.value =="Other")
        {
        if(jqForm[0].reason_delinquent_other.value.length>120)
        {
          flag=1;
          $("#reason_delinquent_other_fr_grp").addClass("validate-has-error");
          $(".reason_delinquent_other").focus();
          $(".reason_delinquent_other_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#reason_delinquent_other_fr_grp").removeClass("validate-has-error");
         $(".reason_delinquent_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].reason_delinquent_other.value)){
          flag=1;
               $("#reason_delinquent_other_fr_grp").addClass("validate-has-error");
               $(".reason_delinquent_other").focus();
               $(".reason_delinquent_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#reason_delinquent_other_fr_grp").removeClass("validate-has-error");
          $(".reason_delinquent_other_msg").html("");
        }
      }

        if(jqForm[0].nature.value =="Other")
        {
        if(jqForm[0].nature_other.value.length>120)
        {
          flag=1;
          $("#nature_other_fr_grp").addClass("validate-has-error");
          $(".nature_other").focus();
          $(".nature_other_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#nature_other_fr_grp").removeClass("validate-has-error");
         $(".nature_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].nature_other.value)){
          flag=1;
               $("#nature_other_fr_grp").addClass("validate-has-error");
               $(".nature_other").focus();
               $(".nature_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#nature_other_fr_grp").removeClass("validate-has-error");
          $(".nature_other_msg").html("");
        }
      }
      ///habit_other
        if(jqForm[0].habit.value =="Other")
        {
        if(jqForm[0].habit_other.value.length>120)
        {
          flag=1;
          $("#habit_other_fr_grp").addClass("validate-has-error");
          $(".habit_other").focus();
          $(".habit_other_msg").html("This field  should be less than 120 characters");
         return false;

        }
        else{
          $("#habit_other_fr_grp").removeClass("validate-has-error");
         $(".habit_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].habit_other.value)){
          flag=1;
               $("#habit_other_fr_grp").addClass("validate-has-error");
               $(".habit_other").focus();
               $(".habit_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#habit_other_fr_grp").removeClass("validate-has-error");
          $(".habit_other_msg").html("");
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

   		 $('#detail_delinquent').change(function(){
        	if($('#detail_delinquent').val() == 'Others') {
            $('#delinquentother').show();
			document.getElementById('detail_delinquent_other').disabled=false;
       		 } else {
            $('#delinquentother').hide();
			 document.getElementById('detail_delinquent_other').disabled='disabled';
       		 }
    	});
		});
		$(function() {

   		 $('#reason_delinquent').change(function(){
        	if($('#reason_delinquent').val() == 'Other') {
            $('#behaviour').show();
			document.getElementById('reason_delinquent_other').disabled=false;
       		 } else {
            $('#behaviour').hide();
			 document.getElementById('reason_delinquent_other').disabled='disabled';
       		 }
    	});
		});
		$(function() {

   		 $('#nature').change(function(){
        	if($('#nature').val() == 'Other') {
            $('#habitother').show();
			document.getElementById('nature_other').disabled=false;
       		 } else {
            $('#habitother').hide();
			 document.getElementById('nature_other').disabled='disabled';
       		 }
    	});
		});
		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

		$(function() {

   		 $('#habit').change(function(){
        	if($('#habit').val() == 'Other') {
            $('#habitbother').show();
			document.getElementById('habit_other').disabled=false;
       		 } else {
            $('#habitbother').hide();
			 document.getElementById('habit_other').disabled='disabled';
       		 }
    	});
		});

</script>
