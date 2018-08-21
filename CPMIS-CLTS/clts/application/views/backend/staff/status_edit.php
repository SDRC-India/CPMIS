<?php
include "modal_msg_labouract.php";
foreach ($status_add_data as $row):
?>
<!---------------------start of status edit------------------------------------->

<div class="row">
  <?php include "tabmenu.php" ?>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?status_add">List of Child Status  Information</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Status During the Employment of the Child and Nature of the Employer - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('status_add/status/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Duration of Working Hours </label>
              <div class="col-sm-8">
                <select name="working_hours" class="form-control" id="working_hours">
				<option value="">Select</option>
                  <option value="Less than Six Hours" <?php if($row['working_hours']=='Less than Six Hours') echo 'selected'; ?>> Less than Six Hours </option>
                  <option value="Between Six and Eight Hours" <?php if($row['working_hours']=='Between Six and Eight Hours') echo 'selected'; ?>> Between Six and Eight Hours </option>
                  <option value="More than Eight Hours" <?php if($row['working_hours']=='More than Eight Hours') echo 'selected'; ?>> More than Eight Hours </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Reason due to which the child had to work </label>
              <div class="col-sm-8">
                <select name="income_utilization" class="form-control" id="income_utilization">
				<option value="">Select</option>
                  <option value="To meet family need/ To take care of family" <?php if($row['income_utilization']=='To meet family need/ To take care of family') echo 'selected'; ?>> To meet family needs/To take care of family </option>
                  <option value="For dress materials" <?php if($row['income_utilization']=='For dress materials') echo 'selected'; ?>> For dress materials </option>
                  <option value="For gambling" <?php if($row['income_utilization']=='For gambling') echo 'selected'; ?>> For gambling </option>
                  <option value="For prostitution" <?php if($row['income_utilization']=='For prostitution') echo 'selected'; ?>> For prostitution </option>
                  <option value="For alcohol" <?php if($row['income_utilization']=='For alcohol') echo 'selected'; ?>> For alcohol </option>
                  <option value="For drugs" <?php if($row['income_utilization']=='For drugs') echo 'selected'; ?>> For drugs </option>
                  <option value="For smoking" <?php if($row['income_utilization']=='For smoking') echo 'selected'; ?>> For smoking </option>
                  <option value="Savings" <?php if($row['income_utilization']=='Savings') echo 'selected'; ?>> Savings </option>
				   <option value="None" <?php if($row['income_utilization']=='None') echo 'selected'; ?>> None </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">

            <div class="form-group">
			 <label for="field-1" class="col-sm-3 control-label">3. Details of Savings </label>
              <div class="col-sm-8">
                <select name="savings" class="form-control" id="savings">
				<option value="">Select</option>
                  <option value="With Employers" <?php if($row['savings']=='With Employers') echo 'selected'; ?>> With Employers </option>
                  <option value="With Friends" <?php if($row['savings']=='With Friends') echo 'selected'; ?>> With Friends </option>
                  <option value="Bank/Post Office" <?php if($row['savings']=='Bank/Post Office') echo 'selected'; ?>> Bank/Post Office </option>
                  <option value="Others" <?php if($row['savings']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="savingOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3.i. Please Specify</label>
              <div id="savings_other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control savings_other" name="savings_other" id="savings_other"  value="<?php echo $row['savings_other'];  ?>" autofocus>
                <span class="savings_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin1" >
          <div class="panel-title ptitle"  > </div>
          <div class="ptitle"></div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"  >4. Type of Child Abuse (if Any) </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.i. Verbal Abuse</label>
              <div class="col-sm-8">
                <select name="abuse_met" class="form-control" id="abuse_met">
				<option value="">Select</option>
                  <option value="Parents" <?php if($row['abuse_met']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['abuse_met']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['abuse_met']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['abuse_met']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id ="abuse_metOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.i a. Please Specify</label>
              <div id="verbal_abuse_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control verbal_abuse_other"
				name="verbal_abuse_other"  id="verbal_abuse_other"   value="<?php echo $row['verbal_abuse_other'];  ?>" autofocus>
            <span class="verbal_abuse_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.ii. Physical Abuse</label>
              <div class="col-sm-8">
			  <select name="physical_abuse" class="form-control" id="physical_abuse">
			 	<option value="">Select</option>
                  <option value="Parents" <?php if($row['physical_abuse']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['physical_abuse']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['physical_abuse']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['physical_abuse']=='Others') echo 'selected'; ?>> Others </option>
                </select>


              </div>
            </div>
          </div>
		  <div class="col-sm-6" id ="physical_abuseOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.ii a. Please Specify</label>
              <div id="physical_abuse_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control physical_abuse_other"
				name="physical_abuse_other"  id="physical_abuse_other"   value="<?php echo $row['physical_abuse_other'];  ?>" autofocus>
          <span class="physical_abuse_other_msg color-red"></span>
        </div>
            </div>
          </div>

		  </div>
		  <div class="row">
          <div class="col-sm-6">

            <div class="form-group">
			 <label for="field-1" class="col-sm-3 control-label">4.iii. Sexual Abuse</label>
              <div class="col-sm-8">
                <select name="sexual_abuse" class="form-control" id="sexual_abuse">
			 	<option value="">Select</option>
                  <option value="Parents" <?php if($row['sexual_abuse']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['sexual_abuse']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['sexual_abuse']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['sexual_abuse']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
		  <div class="col-sm-6" id ="sexual_abuseOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.iii a. Please Specify</label>
              <div id="sexual_abuse_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control sexual_abuse_other"
				name="sexual_abuse_other"  id="sexual_abuse_other"  value="<?php echo $row['sexual_abuse_other'];  ?>" autofocus>
                <span class="sexual_abuse_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.iv. Others (Please Specify)</label>
              <div id="other_plz_specify_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_plz_specify" name="other_plz_specify" id="other_plz_specify" value="<?php echo $row['other_plz_specify']; ?>" autofocus="autofocus"  />
                    <span class="other_plz_specify_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6"> </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"  >5. Difficulties Faced</div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.i. Denial of Food</label>
              <div class="col-sm-8">
                <select name="denial_food" class="form-control" id="denial_food">
			 	<option value="">Select</option>
                  <option value="Parents" <?php if($row['denial_food']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['denial_food']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['denial_food']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['denial_food']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="denial_foodOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.i a. Please Specify</label>
              <div id="denial_food_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control denial_food_other" name="denial_food_other"  id="denial_food_other"  value="<?php echo $row['denial_food_other'];  ?>" autofocus>
                <span class="denial_food_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.ii. Beaten Mercilessly</label>
              <div class="col-sm-8">
                <select name="beaten_mercilessly" class="form-control" id="beaten_mercilessly">
			 	<option value="">Select</option>
                  <option value="Parents" <?php if($row['beaten_mercilessly']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['beaten_mercilessly']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['beaten_mercilessly']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['beaten_mercilessly']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="beaten_mercilesslyOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.ii a. Please Specify</label>
              <div id="beaten_mercilessly_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control beaten_mercilessly_other" name="beaten_mercilessly_other"  id="beaten_mercilessly_other"   value="<?php echo $row['beaten_mercilessly_other'];  ?>" autofocus>
                <span class="beaten_mercilessly_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.iii. Causing Injury</label>
              <div class="col-sm-8">
                <select name="causing_injury" class="form-control" id="causing_injury">
			 	<option value="">Select</option>
                  <option value="Parents" <?php if($row['causing_injury']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['causing_injury']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['causing_injury']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['causing_injury']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="causing_InjuryOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.iii a. Please Specify</label>
              <div id="causing_injury_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control causing_injury_other" name="causing_injury_other" id="causing_injury_other" value="<?php echo $row['causing_injury_other'];  ?>" autofocus>
                <span class="causing_injury_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin">
          <div class="panel-title ptitle"  > 6. Exploitation Faced by the Child </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6.i. Exploitation Faced by the Child</label>
              <div class="col-sm-8">
                <select name="exploitation_faced" class="form-control" id="exploitation_faced">
			 	<option value="">Select</option>
                  <option value="Parents" <?php if($row['exploitation_faced']=='Parents') echo 'selected'; ?>> Parents </option>
                  <option value="Siblings" <?php if($row['exploitation_faced']=='Siblings') echo 'selected'; ?>> Siblings </option>
                  <option value="Employers" <?php if($row['exploitation_faced']=='Employers') echo 'selected'; ?> > Employers </option>
                  <option value="Others" <?php if($row['exploitation_faced']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group" id="exploitation_facedOther">
              <label for="field-1" class="col-sm-3 control-label">6.i a. Please Specify</label>
              <div id="exploitation_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control exploitation_other" name="exploitation_other" id="exploitation_other" value="<?php echo $row['exploitation_other'];  ?>" autofocus>
                  <span class="exploitation_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button" style="margin:3px;"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!-----------------------------status edit end---------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

	$('button[type="submit"]').prop('disabled', true);
	$(':input', this).change(function() {
	 if($(this).val() != '') {
	$('button[type="submit"]').prop('disabled', false);
	  }
	});

	if($('#physical_abuse').val() == 'Others') {
            $('#physical_abuseOther').show();
       		 } else {
            $('#physical_abuseOther').hide();
       		 }

if($('#sexual_abuse').val() == 'Others') {
            $('#sexual_abuseOther').show();
       		 } else {
            $('#sexual_abuseOther').hide();
       		 }

	if($('#exploitation_faced').val() == 'Others') {
            $('#exploitation_facedOther').show();
       		 } else {
            $('#exploitation_facedOther').hide();
       		 }

if($('#causing_injury').val() == 'Others') {
            $('#causing_InjuryOther').show();
       		 } else {
            $('#causing_InjuryOther').hide();
       		 }
if($('#beaten_mercilessly').val() == 'Others') {
            $('#beaten_mercilesslyOther').show();
       		 } else {
            $('#beaten_mercilesslyOther').hide();
       		 }
if($('#denial_food').val() == 'Others') {
            $('#denial_foodOther').show();
       		 } else {
            $('#denial_foodOther').hide();
       		 }

	if($('#savings').val() == 'Others') {
            $('#savingOther').show();

       		 } else {
            $('#savingOther').hide();

       		 }
	if($('#abuse_met').val() == 'Others') {
            $('#abuse_metOther').show();

       		 } else {
            $('#abuse_metOther').hide();

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

      //validation for savings other
      if(jqForm[0].savings.value =="Others")
      {
      if(jqForm[0].savings_other.value.length>120)
      {
        flag=1;
        $("#savings_other_fr_grp").addClass("validate-has-error");
        $(".savings_other").focus();
        $(".savings_other_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#savings_other_fr_grp").removeClass("validate-has-error");
       $(".savings_other_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].savings_other.value)){
        flag=1;
             $("#savings_other_fr_grp").addClass("validate-has-error");
             $(".savings_other_other").focus();
             $(".savings_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#savings_other_fr_grp").removeClass("validate-has-error");
        $(".savings_other_msg").html("");
      }
    }
    //validation of verval abuse
          if(jqForm[0].abuse_met.value =="Others")
          {
          if(jqForm[0].verbal_abuse_other.value.length>120)
          {
            flag=1;
            $("#verbal_abuse_other_fr_grp").addClass("validate-has-error");
            $(".verbal_abuse_other").focus();
            $(".verbal_abuse_other_msg").html("This field should be less than 120 characters");
           return false;

          }
          else{
            $("#verbal_abuse_other_fr_grp").removeClass("validate-has-error");
           $(".verbal_abuse_other_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].verbal_abuse_other.value)){
            flag=1;
                 $("#verbal_abuse_other_fr_grp").addClass("validate-has-error");
                 $(".verbal_abuse_other_other").focus();
                 $(".verbal_abuse_other_msg").html("Initially No space allowed");
                return false;
            }
            else{
             $("#verbal_abuse_other_fr_grp").removeClass("validate-has-error");
            $(".verbal_abuseother_msg").html("");
          }
        }
        //Validation of physical abusement


        if(jqForm[0].physical_abuse.value =="Others")
        {
        if(jqForm[0].physical_abuse_other.value.length>120)
        {
          flag=1;
          $("#physical_abuse_other_fr_grp").addClass("validate-has-error");
          $(".physical_abuse_other").focus();
          $(".physical_abuse_other_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#physical_abuse_other_fr_grp").removeClass("validate-has-error");
         $(".physical_abuse_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].physical_abuse_other.value)){
          flag=1;
               $("#physical_abuse_other_fr_grp").addClass("validate-has-error");
               $(".physical_abuse_other").focus();
               $(".physical_abuse_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#physical_abuse_other_fr_grp").removeClass("validate-has-error");
          $(".physical_abuse_other_msg").html("");
        }
      }
      //validation of sexual abusement other

      if(jqForm[0].sexual_abuse.value =="Others")
      {
      if(jqForm[0].sexual_abuse_other.value.length>120)
      {
        flag=1;
        $("#sexual_abuse_other_fr_grp").addClass("validate-has-error");
        $(".sexual_abuse_other").focus();
        $(".sexual_abuse_other_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#sexual_abuse_other_fr_grp").removeClass("validate-has-error");
       $(".sexual_abuse_other_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].sexual_abuse_other.value)){
        flag=1;
             $("#sexual_abuse_other_fr_grp").addClass("validate-has-error");
             $(".sexual_abuse_other").focus();
             $(".sexual_abuse_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#sexual_abuse_other_fr_grp").removeClass("validate-has-error");
        $(".sexual_abuse_other_msg").html("");
      }
    }
    //validation of other

        if(jqForm[0].other_plz_specify.value.length>120)
        {
          flag=1;
          $("#other_plz_specify_fr_grp").addClass("validate-has-error");
          $(".other_plz_specify").focus();
          $(".other_plz_specify_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#other_plz_specify_fr_grp").removeClass("validate-has-error");
         $(".other_plz_specify_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].other_plz_specify.value)){
          flag=1;
               $("#other_plz_specify_fr_grp").addClass("validate-has-error");
               $(".other_plz_specify").focus();
               $(".other_plz_specify_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#other_plz_specify_fr_grp").removeClass("validate-has-error");
          $(".other_plz_specify_msg").html("");
        }
        //validation of denial_food
            if(jqForm[0].denial_food.value=='Others')
            {
            if(jqForm[0].denial_food_other.value.length>120)
            {
              flag=1;
              $("#denial_food_other_fr_grp").addClass("validate-has-error");
              $(".denial_food_other").focus();
              $(".denial_food_other_msg").html("This field hould be less than 120 characters");
             return false;

            }
            else{
              $("#denial_food_other_fr_grp").removeClass("validate-has-error");
             $(".denial_food_other_msg").html("");
            }
            if(/^\s+$/.test(jqForm[0].denial_food_other.value)){
              flag=1;
                   $("#denial_food_other_fr_grp").addClass("validate-has-error");
                   $(".denial_food_other").focus();
                   $(".denial_food_other_msg").html("Initially No space allowed");
                  return false;
              }
              else{
               $("#denial_food_other_fr_grp").removeClass("validate-has-error");
              $(".denial_food_other_msg").html("");
            }
          }
          //validation of beaten_mercilessly_other


              if(jqForm[0].beaten_mercilessly.value=='Others')
              {
              if(jqForm[0].beaten_mercilessly_other.value.length>120)
              {
                flag=1;
                $("#beaten_mercilessly_other_fr_grp").addClass("validate-has-error");
                $(".beaten_mercilessly_other").focus();
                $(".beaten_mercilessly_other_msg").html("This field should be less than 120 characters");
               return false;

              }
              else{
                $("#beaten_mercilessly_other_fr_grp").removeClass("validate-has-error");
               $(".beaten_mercilessly_other_msg").html("");
              }
              if(/^\s+$/.test(jqForm[0].beaten_mercilessly_other.value)){
                flag=1;
                     $("#beaten_mercilessly_other_fr_grp").addClass("validate-has-error");
                     $(".beaten_mercilessly_other").focus();
                     $(".beaten_mercilessly_other_msg").html("Initially No space allowed");
                    return false;
                }
                else{
                 $("#beaten_mercilessly_other_fr_grp").removeClass("validate-has-error");
                $(".beaten_mercilessly_other_msg").html("");
              }
            }
            ///validation of causing_injury_other

            //exploitation_other
                if(jqForm[0].causing_injury.value=='Others')
                {
                if(jqForm[0].causing_injury_other.value.length>40)
                {
                  flag=1;
                  $("#causing_injury_other_fr_grp").addClass("validate-has-error");
                  $(".causing_injury_other").focus();
                  $(".causing_injury_other_msg").html("This field should be less than 120 characters");
                 return false;

                }
                else{
                  $("#causing_injury_other_fr_grp").removeClass("validate-has-error");
                 $(".causing_injury_other_msg").html("");
                }
                if(/^\s+$/.test(jqForm[0].causing_injury_other.value)){
                  flag=1;
                       $("#causing_injury_other_fr_grp").addClass("validate-has-error");
                       $(".causing_injury_other").focus();
                       $(".causing_injury_other_msg").html("Initially No space allowed");
                      return false;
                  }
                  else{
                   $("#causing_injury_other_fr_grp").removeClass("validate-has-error");
                  $(".causing_injury_other_msg").html("");
                }
              }
              ///validation of exploitation_other


                  if(jqForm[0].exploitation_faced.value=='Others')
                  {
                  if(jqForm[0].exploitation_other.value.length>40)
                  {
                    flag=1;
                    $("#exploitation_other_fr_grp").addClass("validate-has-error");
                    $(".exploitation_other").focus();
                    $(".exploitation_other_msg").html("This field should be less than 120 characters");
                   return false;

                  }
                  else{
                    $("#exploitation_other_fr_grp").removeClass("validate-has-error");
                   $(".exploitation_other_msg").html("");
                  }
                  if(/^\s+$/.test(jqForm[0].exploitation_other.value)){
                    flag=1;
                         $("#exploitation_other_fr_grp").addClass("validate-has-error");
                         $(".exploitation_other").focus();
                         $(".exploitation_other_msg").html("Initially No space allowed");
                        return false;
                    }
                    else{
                     $("#exploitation_other_fr_grp").removeClass("validate-has-error");
                    $(".exploitation_other_msg").html("");
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
	/*$('#savingOther').hide();*/
   		 $('#savings').change(function(){
        	if($('#savings').val() == 'Others') {
            $('#savingOther').show();
			document.getElementById('savings_other').disabled=false;
       		 } else {
            $('#savingOther').hide();

			document.getElementById('savings_other').disabled='disabled';

       		 }
    	});
		});
		$(function() {
	/*$('#abuse_metOther').hide(); */
   		 $('#abuse_met').change(function(){
        	if($('#abuse_met').val() == 'Others') {
            $('#abuse_metOther').show();

       		 } else {
            $('#abuse_metOther').hide();

       		 }
    	});
		});
	$(function() {

   		 $('#denial_food').change(function(){
        	if($('#denial_food').val() == 'Others') {
            $('#denial_foodOther').show();
       		 } else {
            $('#denial_foodOther').hide();
       		 }
    	});
		});
	$(function() {

   		 $('#beaten_mercilessly').change(function(){
        	if($('#beaten_mercilessly').val() == 'Others') {
            $('#beaten_mercilesslyOther').show();
       		 } else {
            $('#beaten_mercilesslyOther').hide();
       		 }
    	});
		});
	$(function() {

   		 $('#causing_injury').change(function(){
        	if($('#causing_injury').val() == 'Others') {
            $('#causing_InjuryOther').show();
       		 } else {
            $('#causing_InjuryOther').hide();
       		 }
    	});
		});
		$(function() {

   		 $('#exploitation_faced').change(function(){
        	if($('#exploitation_faced').val() == 'Others') {
            $('#exploitation_facedOther').show();
       		 } else {
            $('#exploitation_facedOther').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#physical_abuse').change(function(){
        	if($('#physical_abuse').val() == 'Others') {
            $('#physical_abuseOther').show();
       		 } else {
            $('#physical_abuseOther').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#sexual_abuse').change(function(){
        	if($('#sexual_abuse').val() == 'Others') {
            $('#sexual_abuseOther').show();
       		 } else {
            $('#sexual_abuseOther').hide();
       		 }
    	});
		});

		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

</script>
