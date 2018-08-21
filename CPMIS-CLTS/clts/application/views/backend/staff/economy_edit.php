<?php


include "modal_msg_labouract.php";

foreach($economy_add_data as $row):


?>
<!-------------------economy edit start-------------------------->

<div class="row">
  <?php include "tabmenu.php" ?>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head" > <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?economy_add">List of Economy Information</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Economic Condition of the Family - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('economy_add/economy/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > 1.Description of Dwelling </div>
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">i. Type of Structure</label>
              <div class="col-sm-8">
                <select name="structure_type" class="form-control" id="structure_type">
				  <option value="">Select</option>
                  <option value="Pucca" <?php if($row['structure_type']=='Pucca') echo 'selected'; ?>> Pucca </option>
                  <option value="Semi-pucca" <?php if($row['structure_type']=='Semi-pucca') echo 'selected'; ?>> Semi-pucca </option>
                  <option value="Katcha" <?php if($row['structure_type']=='Katcha') echo 'selected'; ?>> Katcha </option>
                  <option value="No House" <?php if($row['structure_type']=='No House') echo 'selected'; ?>> No House </option>
                  <option value="Others" <?php if($row['structure_type']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="buildingOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.i a. Please Specify</label>
              <div id="structure_type_other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control structure_type_other" name="structure_type_other" id="structure_type_other"   value="<?php echo $row['structure_type_other']; ?>" autofocus>
                  <span class="structure_type_other_msg color-red"></span>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.ii. Roofing Quality </label>
              <div class="col-sm-8">

                <select name="roofing_quality" class="form-control" id="roofing_quality">
				 <option value="">Select</option>
                  <option value="Tiled" <?php if($row['roofing_quality']=='Tiled') echo 'selected'; ?>> Tiled </option>
                  <option value="Straw" <?php if($row['roofing_quality']=='Straw') echo 'selected'; ?>> Straw </option>
                  <option value="Asbestos/Tin" <?php if($row['roofing_quality']=='Asbestos/Tin') echo 'selected'; ?>> Asbestos/Tin </option>
                  <option value="Concrete" <?php if($row['roofing_quality']=='Concrete') echo 'selected'; ?>> Concrete </option>
                  <option value="Others" <?php if($row['roofing_quality']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="Roofingother">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.ii a. Please Specify</label>
              <div id="roofing_quality_other_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control roofing_quality_other" name="roofing_quality_other" id="roofing_quality_other"   value="<?php echo $row['roofing_quality_other']; ?>" autofocus>
                <span class="roofing_quality_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.iii. Toilet Facilities in/ outside the Home</label>
              <div class="col-sm-8">
                <select name="toilet_facilities" class="form-control" id="toilet_facilities">
				 <option value="">Select</option>
                  <option value="Yes" <?php if($row['toilet_facilities']=='Yes') echo 'selected'; ?> > Yes </option>
                  <option value="No" <?php if($row['toilet_facilities']=='No') echo 'selected'; ?> > No </option>
                </select>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.iv. Water Facility in/ outside Home</label>
              <div class="col-sm-8">
                <select name="water_facility" class="form-control" id="water_facility">
				 <option value="">Select</option>
                  <option value="Hand Pump" <?php if($row['water_facility']=='Hand Pump') echo 'selected'; ?> > Hand Pump </option>
                  <option value="Supply water" <?php if($row['water_facility']=='Supply water') echo 'selected'; ?>> Supply water</option>
                  <option value="Well" <?php if($row['water_facility']=='Well') echo 'selected'; ?>> Well </option>
                  <option value="Others" <?php if($row['water_facility']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="other_facility">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.iv a. Please Specify</label>
              <div id="water_facility_other_fr_grp" class="col-sm-8">
                <input type="text" name="water_facility_other" id="water_facility_other" class="form-control water_facility_other"  value="<?php echo $row['water_facility_other']; ?>"/>
                <span class="water_facility_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
		 <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.v. Electricity Facility </label>
              <div class="col-sm-8">
                <select name="electricity_facilities" class="form-control" id="electricity_facilities">
				 <option value="">Select</option>
                  <option value="Yes" <?php if($row['electricity_facilities']=='Yes') echo 'selected'; ?> > Yes </option>
                  <option value="No" <?php if($row['electricity_facilities']=='No') echo 'selected'; ?> > No </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" >
            <div class="form-group">

              <div class="col-sm-8">

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > 2. Properties Owned by the Family </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">i. Land Available</label>
              <div class="col-sm-8">
                  <select name="land_available"  id="land_available" class="form-control" >
				 <option value="">Select</option>
                  <option value="Yes"  <?php if($row['land_available']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No"  <?php if($row['land_available']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
		  <div class="col-sm-6" id="land_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.i a.Specify Area with Unit</label>
              <div id="land_area_fr_grp" class="col-sm-8">
                <input  type="text" class="form-control land_area" name="land_area" id="land_area"   value="<?php echo $row['land_area']; ?>" autofocus>
                <span class="land_area_msg color-red"></span>
              </div>
            </div>
          </div>

        </div>
        <div class="row" >
         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.ii. Household Assets</label>
              <div class="col-sm-8">

				<?php $val=explode(",",$row['household_articles']);?>
                <input type="checkbox" name="household_articles[]"  value="TV" <?php if(in_array('TV',$val)) {echo "checked";}?>> <label>TV</label><br>
                <input type="checkbox" name="household_articles[]" value="Radio"  <?php if(in_array('Radio',$val)) {echo "checked";}?>> <label> Radio</label><br />
                <input type="checkbox" name="household_articles[]"
				value="Refrigerator" <?php if(in_array('Refrigerator',$val)) {echo "checked";}?>> <label> Refrigerator</label><br />
                <input type="checkbox" name="household_articles[]" value="Cows" <?php if(in_array('Cows',$val)) {echo "checked";}?>> <label> Cows</label><br />
                <input type="checkbox" name="household_articles[]"  value="Hen" <?php if(in_array('Hen',$val)) {echo "checked";}?>> <label>Hen</label><br />
                <input type="checkbox" name="household_articles[]" value="Buffallo"  <?php if(in_array('Buffallo',$val)) {echo "checked";}?>> <label>Buffallo</label><br />
                <input type="checkbox" name="household_articles[]" value="Pig" <?php if(in_array('Pig',$val)) {echo "checked";}?>> <label>Pig</label><br />
				<input type="checkbox" name="household_articles[]" value="Goat" <?php if(in_array('Goat',$val)) {echo "checked";}?>> <label>Goat</label><br />
				<input type="checkbox" name="household_articles[]" value="Ox" <?php if(in_array('Ox',$val)) {echo "checked";}?>> <label>Ox</label><br />
				<input type="checkbox" name="household_articles[]" value="Bull" <?php if(in_array('Bull',$val)) {echo "checked";}?>> <label>Bull</label><br />
              </div>
            </div>
          </div>





        </div>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.iii. Vehicles</label>
              <div class="col-sm-8">
                <select name="vehicles_type" class="form-control" id="vehicles_type">
				 <option value="">Select</option>
                  <option value="Two Wheeler" <?php if($row['vehicles_type']=='Two Wheeler') echo 'selected'; ?>> Two Wheeler </option>
                  <option value="Three Wheeler" <?php if($row['vehicles_type']=='Three Wheeler') echo 'selected'; ?>> Three Wheeler </option>
                  <option value="Four Wheeler" <?php if($row['vehicles_type']=='Four Wheeler') echo 'selected'; ?>> Four Wheeler </option>
                  <option value="Other" <?php if($row['vehicles_type']=='Other') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="vehchle_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.iii a. Please Specify</label>
              <div id="other_vehcle_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_vehcle" name="other_vehcle" id="landother"   value="<?php echo $row['other_vehcle']; ?>" autofocus>
                <span class="other_vehcle_msg color-red"></span>
              </div>

            </div>
          </div>
        </div>
        <div class="row top-margin">
          <div class="panel-title ptitle" ></div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.iv. BPL Card </label>
              <div class="col-sm-8">
                <select name="bpl_card" class="form-control" id="bpl_card">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['bpl_card']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['bpl_card']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="bpl_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.iv a.Provide the No.<span class="color-white">*</span></label>
              <div id="bpl_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control bpl_no" name="bpl_no" id="landother"   value="<?php echo $row['bpl_no']; ?>" data-validate="required">
                  <span class="bpl_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.v. Ration Card</label>
              <div class="col-sm-8">
                <select name="ration_card" class="form-control" id="ration_card">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['ration_card']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['ration_card']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
		   <div class="col-sm-6" id="rationcard_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.v a. Provide the No.<span class="color-white">*</span></label>
              <div id="ration_card_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control ration_card_no" name="ration_card_no" id="ration_card_no"  data-validate="required"  value="<?php echo $row['ration_card_no']; ?>" autofocus>
                  <span class="ration_card_no_msg color-red"></span>
              </div>
            </div>
          </div>
		  </div>
		  <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.vi. Indira Awaas</label>
              <div class="col-sm-8">
                <select name="indira_awas" class="form-control" id="indira_awas">
                  <option value=""> Select </option>
                  <option value="Yes" <?php if($row['indira_awas']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['indira_awas']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="Indira_Awaas_Other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.vi a. Provide the No.</label>
              <div id="indira_awas_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control indira_awas_other" name="indira_awas_other" id="indira_awas_other"   value="<?php echo $row['indira_awas_other']; ?>" autofocus>
                <span class="indira_awas_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.vii. Job Card available under MGNREGA </label>
              <div class="col-sm-8">
                <select name="job_card" class="form-control" id="job_card">
                  <option value="">Select </option>
                  <option value="Yes" <?php if($row['job_card']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['job_card']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
		  <div class="col-sm-6" id="jobcard_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.vii a. Provide the No.<span class="color-white">*</span></label>
              <div id="card_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control card_no" name="card_no" id="card_no"  data-validate="required"  value="<?php echo $row['card_no']; ?>" autofocus>
                <span class="card_no_msg color-red"></span>
              </div>
            </div>
          </div>
		  </div>
		  <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.viii. RSBY Card </label>
              <div class="col-sm-8">
                <select name="rsby_card" class="form-control" id="rsby_card">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['rsby_card']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['rsby_card']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
		   <div class="col-sm-6" id="rsbycard_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.viii a. Provide the No.<span class="color-white">*</span></label>
              <div id="rsby_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control rsby_no" name="rsby_no" id="rsby_no" value="<?php echo $row['rsby_no']; ?>" data-validate="required">
                <span class="rsby_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-margin" >
          <div class="panel-title ptitle">  </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.ix. Comes Under Food Security Scheme </label>
              <div class="col-sm-8">
                <select name="food_security" class="form-control" id="food_security">
                  <option value="">Select</option>
                  <option value="Yes"  <?php if($row['food_security']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No"  <?php if($row['food_security']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-4">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?>
        
         </div>
    </div>
    </div></div>
<!--------------------------------end of economy edit----------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

			$('button[type="submit"]').prop('disabled', true);
			$(':input', this).change(function() {
			 if($(this).val() != '') {
			$('button[type="submit"]').prop('disabled', false);
			  }
			});

			if($('#job_card').val() == 'Yes') {
            $('#jobcard_yes').show();

       		 } else {
            $('#jobcard_yes').hide();
       		 }



			 if($('#rsby_card').val() == 'Yes') {
            $('#rsbycard_yes').show();

       		 } else {
            $('#rsbycard_yes').hide();
       		 }

			if($('#indira_awas').val() == 'Yes') {
            $('#Indira_Awaas_Other').show();


       		 } else {
            $('#Indira_Awaas_Other').hide();

       		 }



        	if($('#structure_type').val() == 'Others') {
            $('#buildingOther').show();

       		 } else {
            $('#buildingOther').hide();
       		 }

        	if($('#roofing_quality').val() == 'Others') {
            $('#Roofingother').show();


       		 } else {
            $('#Roofingother').hide();

       		 }


        	if($('#land_available').val() == 'Yes') {
            $('#land_yes').show();


       		 } else {
            $('#land_yes').hide();
			}

        	if($('#ration_card').val() == 'Yes') {
            $('#rationcard_yes').show();



       		 } else {
            $('#rationcard_yes').hide();

       		 }

        	if($('#bpl_card').val() == 'Yes') {
            $('#bpl_yes').show();



       		 } else {
            $('#bpl_yes').hide();

       		 }

        	if($('#vehicles_type').val() == 'Other') {
            $('#vehchle_other').show();



       		 } else {
            $('#vehchle_other').hide();

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
      if(jqForm[0].structure_type.value =="Others")
      {
      if(jqForm[0].structure_type_other.value.length>120)
      {
        flag=1;
        $("#structure_type_other_fr_grp").addClass("validate-has-error");
        $(".structure_type_other").focus();
        $(".structure_type_other_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#structure_type_other_fr_grp").removeClass("validate-has-error");
       $(".structure_type_other_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].structure_type_other.value)){
        flag=1;

             $("#structure_type_other_fr_grp").addClass("validate-has-error");
             $(".structure_type_other").focus();
             $(".structure_type_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#structure_type_other_fr_grp").removeClass("validate-has-error");
        $(".structure_type_other_msg").html("");
      }
    }
    //Validation of roofing quality other3


    if(jqForm[0].roofing_quality.value =="Others")
    {
    if(jqForm[0].roofing_quality_other.value.length>120)
    {
      flag=1;
      $("#roofing_quality_other_fr_grp").addClass("validate-has-error");
      $(".roofing_quality_other").focus();
      $(".roofing_quality_other_msg").html("This field should be less than 120 characters");
     return false;

    }
    else{
      $("#roofing_quality_other_fr_grp").removeClass("validate-has-error");
     $(".roofing_quality_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].roofing_quality_other.value)){
      flag=1;

           $("#roofing_quality_other_fr_grp").addClass("validate-has-error");
           $(".roofing_quality_other").focus();
           $(".roofing_quality_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#roofing_quality_other_fr_grp").removeClass("validate-has-error");
      $(".roofing_quality_other_msg").html("");
    }
  }
  //validation water facility other
  ///land_area/other_vehcle/bpl_no/ration_card_no/indira_awas_other/card_no/rsby_no
  if(jqForm[0].water_facility.value =="Others")
  {
  if(jqForm[0].water_facility_other.value.length>40)
  {
    flag=1;
    $("#water_facility_other_fr_grp").addClass("validate-has-error");
    $(".water_facility_other").focus();
    $(".water_facility_other_msg").html("This field should be less than 40 characters");
   return false;

  }
  else{
    $("#water_facility_other_fr_grp").removeClass("validate-has-error");
   $(".water_facility_other_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].water_facility_other.value)){
    flag=1;

         $("#water_facility_other_fr_grp").addClass("validate-has-error");
         $(".water_facility_other").focus();
         $(".water_facility_other_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#water_facility_other_fr_grp").removeClass("validate-has-error");
    $(".water_facility_other_msg").html("");
  }
}
//validation of water facility other
if(jqForm[0].water_facility.value =="Others")
{
if(jqForm[0].water_facility_other.value.length>40)
{
  flag=1;
  $("#water_facility_other_fr_grp").addClass("validate-has-error");
  $(".water_facility_other").focus();
  $(".water_facility_other_msg").html("This field should be less than 40 characters");
 return false;

}
else{
  $("#water_facility_other_fr_grp").removeClass("validate-has-error");
 $(".water_facility_other_msg").html("");
}
if(/^\s+$/.test(jqForm[0].water_facility_other.value)){
  flag=1;

       $("#water_facility_other_fr_grp").addClass("validate-has-error");
       $(".water_facility_other").focus();
       $(".water_facility_other_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#water_facility_other_fr_grp").removeClass("validate-has-error");
  $(".water_facility_other_msg").html("");
}
}

//validation of land area available
if(jqForm[0].land_available.value =="Yes")
{
if(jqForm[0].land_area.value.length>20)
{
  flag=1;
  $("#land_area_fr_grp").addClass("validate-has-error");
  $(".land_area").focus();
  $(".land_area_msg").html("This field should be less than 20 characters");
 return false;

}
else{
  $("#land_area_fr_grp").removeClass("validate-has-error");
 $(".land_area_msg").html("");
}
if(/^\s+$/.test(jqForm[0].land_area.value)){
  flag=1;

       $("#land_area_fr_grp").addClass("validate-has-error");
       $(".land_area").focus();
       $(".land_area_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#land_area_fr_grp").removeClass("validate-has-error");
  $(".land_area_msg").html("");
}
}
//validation for other vehicles
/////bpl_no/ration_card_no/indira_awas_other/card_no/rsby_no
      if(jqForm[0].vehicles_type.value =="Other")
      {
      if(jqForm[0].other_vehcle.value.length>120)
      {
        flag=1;
        $("#other_vehcle_fr_grp").addClass("validate-has-error");
        $(".other_vehcle").focus();
        $(".other_vehcle_msg").html("This field should be less than 120 characters");
       return false;

      }
      else{
        $("#other_vehcle_fr_grp").removeClass("validate-has-error");
       $(".other_vehcle_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].other_vehcle.value)){
        flag=1;

             $("#other_vehcle_fr_grp").addClass("validate-has-error");
             $(".other_vehcle").focus();
             $(".other_vehcle_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#other_vehcle_fr_grp").removeClass("validate-has-error");
        $(".other_vehcle_msg").html("");
      }
      }
      //validation of Bpl card no
      //////ration_card_no/indira_awas_other/card_no/rsby_no
            if(jqForm[0].bpl_card.value =="Yes")
            {
            if(jqForm[0].bpl_no.value.length>20)
            {
              flag=1;
              $("#bpl_no_fr_grp").addClass("validate-has-error");
              $(".bpl_no").focus();
              $(".bpl_no_msg").html("This field should be less than 20 characters");
             return false;

            }
            else{
              $("#bpl_no_fr_grp").removeClass("validate-has-error");
             $(".bpl_no_msg").html("");
            }
            if(/^\s+$/.test(jqForm[0].bpl_no.value)){
              flag=1;

                   $("#bpl_no_fr_grp").addClass("validate-has-error");
                   $(".bpl_no").focus();
                   $(".bpl_no_msg").html("Initially No space allowed");
                  return false;
              }
              else{
               $("#bpl_no_fr_grp").removeClass("validate-has-error");
              $(".bpl_no_msg").html("");
            }
            }
            //validation of ration card
            ///////indira_awas_other/card_no/rsby_no
                  if(jqForm[0].ration_card.value =="Yes")
                  {
                  if(jqForm[0].ration_card_no.value.length>40)
                  {
                    flag=1;
                    $("#ration_card_no_fr_grp").addClass("validate-has-error");
                    $(".ration_card_no").focus();
                    $(".ration_card_no_msg").html("This field should be less than 40 characters");
                   return false;

                  }
                  else{
                    $("#ration_card_no_fr_grp").removeClass("validate-has-error");
                   $(".ration_card_no_msg").html("");
                  }
                  if(/^\s+$/.test(jqForm[0].ration_card_no.value)){
                    flag=1;

                         $("#ration_card_no_fr_grp").addClass("validate-has-error");
                         $(".ration_card_no").focus();
                         $(".ration_card_no_msg").html("Initially No space allowed");
                        return false;
                    }
                    else{
                     $("#ration_card_no_fr_grp").removeClass("validate-has-error");
                    $(".ration_card_no_msg").html("");
                  }
                  }
                  //validation indira_awas_other  no
                  ///////indira_awas_other/card_no/rsby_no
                        if(jqForm[0].indira_awas.value =="Yes")
                        {
                        if(jqForm[0].indira_awas_other.value.length>40)
                        {
                          flag=1;
                          $("#indira_awas_other_fr_grp").addClass("validate-has-error");
                          $(".indira_awas_other").focus();
                          $(".indira_awas_other_msg").html("This field should be less than 40 characters");
                         return false;

                        }
                        else{
                          $("#indira_awas_other_fr_grp").removeClass("validate-has-error");
                         $(".indira_awas_other_msg").html("");
                        }
                        if(/^\s+$/.test(jqForm[0].indira_awas_other.value)){
                          flag=1;

                               $("#indira_awas_other_fr_grp").addClass("validate-has-error");
                               $(".indira_awas_other").focus();
                               $(".indira_awas_other_msg").html("Initially No space allowed");
                              return false;
                          }
                          else{
                           $("#indira_awas_other_fr_grp").removeClass("validate-has-error");
                          $(".indira_awas_other_msg").html("");
                        }
                        }
                        //validation  job_card no
                        ///////card_no/rsby_no
                              if(jqForm[0].job_card.value =="Yes")
                              {
                              if(jqForm[0].card_no.value.length>40)
                              {
                                flag=1;
                                $("#card_no_fr_grp").addClass("validate-has-error");
                                $(".card_no").focus();
                                $(".card_no_msg").html("This field should be less than 40 characters");
                               return false;

                              }
                              else{
                                $("#card_no_fr_grp").removeClass("validate-has-error");
                               $(".card_no_msg").html("");
                              }
                              if(/^\s+$/.test(jqForm[0].card_no.value)){
                                flag=1;

                                     $("#card_no_fr_grp").addClass("validate-has-error");
                                     $(".card_no").focus();
                                     $(".card_no_msg").html("Initially No space allowed");
                                    return false;
                                }
                                else{
                                 $("#card_no_fr_grp").removeClass("validate-has-error");
                                $(".card_no_msg").html("");
                              }
                              }
                              //validation  RSBY Card no
                              ////////rsby_no
                                    if(jqForm[0].rsby_card.value =="Yes")
                                    {
                                    if(jqForm[0].rsby_no.value.length>20)
                                    {
                                      flag=1;
                                      $("#rsby_no_fr_grp").addClass("validate-has-error");
                                      $(".rsby_no").focus();
                                      $(".rsby_no_msg").html("This field should be less than 20 characters");
                                     return false;

                                    }
                                    else{
                                      $("#rsby_no_fr_grp").removeClass("validate-has-error");
                                     $(".rsby_no_msg").html("");
                                    }
                                    if(/^\s+$/.test(jqForm[0].rsby_no.value)){
                                      flag=1;

                                           $("#rsby_no_fr_grp").addClass("validate-has-error");
                                           $(".rsby_no").focus();
                                           $(".rsby_no_msg").html("Initially No space allowed");
                                          return false;
                                      }
                                      else{
                                       $("#rsby_nofr_grp").removeClass("validate-has-error");
                                      $(".rsby_no_msg").html("");
                                    }
                                    }
    var bpl_val =(jqForm[0].bpl_card.value);
		var ration_val=(jqForm[0].ration_card.value);
		var indira_val = (jqForm[0].indira_awas.value);
		var job_card = (jqForm[0].job_card.value);
		var rsby_val= (jqForm[0].rsby_card.value);

      //alert(jqForm[0].indira_awas_other.value);
		if(bpl_val == "Yes"){
			if (!jqForm[0].bpl_no.value)
			{
				return false;
			}
		}
		if(ration_val == "Yes"){
			if (!jqForm[0].ration_card_no.value)
			{
				return false;
			}
		}

		if(job_card == "Yes"){
			if (!jqForm[0].card_no.value)
			{
				return false;
			}
		}
		if(rsby_val == "Yes"){
			if (!jqForm[0].rsby_no.value)
			{
				return false;
			}
		}
    //alert(jqForm[0].indira_awas_other.value);
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

				if($('#water_facility').val() == 'Others') {
            $('#other_facility').show();


       		 } else {
            $('#other_facility').hide();

       		 }

				if($('#food_security').val() == 'Yes') {
            $('#food_security_yes').show();


       		 } else {
            $('#food_security_yes').hide();

       		 }
   		 $('#structure_type').change(function(){
        	if($('#structure_type').val() == 'Others') {
            $('#buildingOther').show();



       		 } else {
            $('#buildingOther').hide();
			 // document.getElementById('structure_type1').disabled;

       		 }
    	});
		});

		$(function() {

   		 $('#roofing_quality').change(function(){
        	if($('#roofing_quality').val() == 'Others') {
            $('#Roofingother').show();



       		 } else {
            $('#Roofingother').hide();
			 // document.getElementById('structure_type1').disabled;

       		 }
    	});
		});
		$(function() {

   		 $('#land_available').change(function(){
        	if($('#land_available').val() == 'Yes') {
            $('#land_yes').show();

       		 } else {
            $('#land_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#ration_card').change(function(){
        	if($('#ration_card').val() == 'Yes') {
            $('#rationcard_yes').show();

       		 } else {
            $('#rationcard_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#bpl_card').change(function(){
        	if($('#bpl_card').val() == 'Yes') {
            $('#bpl_yes').show();

       		 } else {
            $('#bpl_yes').hide();

       		 }
    	});
		});

		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

		$(function() {

   		 $('#vehicles_type').change(function(){
        	if($('#vehicles_type').val() == 'Other') {
            $('#vehchle_other').show();


       		 } else {
            $('#vehchle_other').hide();

       		 }
    	});
		});


		$(function() {

   		 $('#food_security').change(function(){
        	if($('#food_security').val() == 'Yes') {
            $('#food_security_yes').show();


       		 } else {
            $('#food_security_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#water_facility').change(function(){
        	if($('#water_facility').val() == 'Others') {
            $('#other_facility').show();


       		 } else {
            $('#other_facility').hide();

       		 }
    	});
		});




		$(function() {

   		 $('#rsby_card').change(function(){
        	if($('#rsby_card').val() == 'Yes') {
            $('#rsbycard_yes').show();


       		 } else {
            $('#rsbycard_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#job_card').change(function(){
        	if($('#job_card').val() == 'Yes') {
            $('#jobcard_yes').show();


       		 } else {
            $('#jobcard_yes').hide();

       		 }
    	});
		});




		$(function() {

   		 $('#indira_awas').change(function(){
        	if($('#indira_awas').val() == 'Yes') {
            $('#Indira_Awaas_Other').show();


       		 } else {
            $('#Indira_Awaas_Other').hide();

       		 }
    	});
		});
</script>
