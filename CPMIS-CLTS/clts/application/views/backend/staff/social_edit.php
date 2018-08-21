<?php
include "modal_msg_labouract.php";
foreach ($social_add_data as $row):


?>
<!-----------------social edit start--------------------->

<div class="row">
  <?php include "tabmenu.php" ?>
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?social_add">List of Social Information</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Social History - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('social_add/social/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Details of Friendship Prior to Rescue</label>
              <div class="col-sm-8">
                <select name="details_friendship" class="form-control" id="details_friendship">
				<option value="">Select</option>
                  <option value="Co-workers" <?php if($row['details_friendship']=='Co-workers') echo 'selected'; ?>> Co-workers </option>
                  <option value="School/Classmate" <?php if($row['details_friendship']=='School/Classmate') echo 'selected'; ?>> School/Classmate </option>
                  <option value="Arrack selling" <?php if($row['details_friendship']=='Arrack selling') echo 'selected'; ?>> Neighbours </option>
                  <option value="Others" <?php if($row['details_friendship']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="friendshipOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1 i. Please specify</label>
              <div id="details_friendship_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control details_friendship_other" name="details_friendship_other" id="details_friendship_other"
				 value="<?php echo $row['details_friendship_other'];  ?>" autofocus  >
           <span class="details_friendship_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Details of Membership in Group </label>
              <div class="col-sm-8">
                <select name="details_membership" class="form-control" id="details_membership">
				<option value="">Select</option>
                  <option value="Associated with Cine Fans Association"
				  <?php if($row['details_membership']=='Associated with Cine Fans Association') echo 'selected'; ?>> Associated with Cine Fans Association </option>
                  <option value="Associated with Religious Group"
				  <?php if($row['details_membership']=='Associated with Religious Group') echo 'selected'; ?>> Associated with Religious Group </option>
                  <option value="Associated with Arts and Sports Club"
				   <?php if($row['details_membership']=='Associated with Arts and Sports Club') echo 'selected'; ?>> Associated with Arts and Sports Club </option>
                  <option value="Associated with gangs" <?php if($row['details_membership']=='Associated with gangs') echo 'selected'; ?>>
				  Associated with gangs </option>
                  <option value="Associated with Voluntary Social Service League" <?php if($row['details_membership']=='Associated with Voluntary Social Service League') echo 'selected'; ?>>
				  Associated with Voluntary Social Service League </option>
                  <option value="Others" <?php if($row['details_membership']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="DetailsmembershipOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2 i. Please specify</label>
              <div id="details_membership_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control details_membership_other" name="details_membership_other" id="details_membership_other"
				value="<?php echo $row['details_membership_other'];  ?>" autofocus="autofocus"   />
              <span class="details_membership_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Majority of the Friends are</label>
              <div class="col-sm-8">
				<?php $val=explode(",",$row['majority_friends']);?>
                <input type="checkbox" name="majority_friends[]"  value="Educated" <?php if(in_array('Educated',$val)) {echo "checked";}?>> <label>Educated</label><br>
                <input type="checkbox" name="majority_friends[]" value="Illiterate"  <?php if(in_array('Illiterate',$val)) {echo "checked";}?>> <label>Illiterate</label><br />
                <input type="checkbox" name="majority_friends[]" value="The Same Age Group" <?php if(in_array('The Same Age Group',$val)) {echo "checked";}?>> <label> The Same Age Group</label><br />
                <input type="checkbox" name="majority_friends[]" value="Older in Age" <?php if(in_array('Older in Age',$val)) {echo "checked";}?>> <label> Older in Age</label><br />
                <input type="checkbox" name="majority_friends[]"  value="Younger in Age" <?php if(in_array('Younger in Age',$val)) {echo "checked";}?>> <label>Younger in Age</label><br />
                <input type="checkbox" name="majority_friends[]" value="Same Sex"  <?php if(in_array('Same Sex',$val)) {echo "checked";}?>> <label>Same Sex </label><br />
                <input type="checkbox" name="majority_friends[]" value="Opposite Sex" <?php if(in_array('Opposite Sex',$val)) {echo "checked";}?>> <label>Opposite Sex</label><br />
              </div>
            </div>
          </div>
          <div class="col-sm-6">

          </div>
        </div>
		<div class="row">
          <div class="col-sm-6">

            <div class="form-group">
			 <label for="field-1" class="col-sm-3 control-label">4. The Position of the Child in the Groups/League </label>
              <div class="col-sm-8">
                <select name="position_child" class="form-control" id="position_child">
				<option>Select</option>
         			<option value="Leader" <?php if($row['position_child']=='Leader') echo 'selected'; ?>> Leader </option>
                  <option value="Second Level Leader" <?php if($row['position_child']=='Second Level Leader') echo 'selected'; ?>> Second Level Leader </option>
                  <option value="Middle Level Functionary" <?php if($row['position_child']=='Middle Level Functionary') echo 'selected'; ?>> Middle Level Functionary </option>
                  <option value="Ordinary Member" <?php if($row['position_child']=='Ordinary Member') echo 'selected'; ?>> Ordinary Member </option>
                </select>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Purpose of Being a Member of the Group </label>
              <div class="col-sm-8">
                <select name="purpose_membership" class="form-control" id="purpose_membership">
				<option>Select</option>
               	<option value="For Social Service Activities"
				  <?php if($row['purpose_membership']=='For Social Service Activities') echo 'selected'; ?>> For social service activities </option>
                  <option value="For Leisure Time Spending "
				   <?php if($row['purpose_membership']=='For Leisure Time Spending ') echo 'selected'; ?>> For leisure time spending </option>
                  <option value="For Pleasure Seeking Activities"
				  <?php if($row['purpose_membership']=='For Pleasure Seeking Activities') echo 'selected'; ?>> For pleasure seeking activities </option>
                  <option value="For Deviant Activities"
				  <?php if($row['purpose_membership']=='For Deviant Activities') echo 'selected'; ?>> For deviant activities </option>
                  <option value="Others" <?php if($row['purpose_membership']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="membershipOther">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5 i. Please specify</label>
              <div id="purpose_member_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control purpose_member_other" name="purpose_member_other" id="purpose_member_other"
				 value="<?php echo $row['purpose_member_other'];  ?>" autofocus="autofocus"   />
         <span class="purpose_member_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Attitude of the Group/League</label>
              <div class="col-sm-8">
                <select name="attitude_group" class="form-control" id="attitude_group">
				<option>Select</option>
        		  <option value="Respect the Social Norms and Follow the Rules"
				   <?php if($row['attitude_group']=='Respect the Social Norms and Follow the Rules') echo 'selected'; ?>> Respect the Social Norms and Follow the Rules </option>
                  <option value="Interested in Violating the Norms"
				   <?php if($row['attitude_group']=='Interested in Violating the Norms') echo 'selected'; ?>> Interested in Violating the Norms </option>
                  <option value="Impulsive in Violating the Rules"
				   <?php if($row['attitude_group']=='Impulsive in Violating the Rules') echo 'selected'; ?>> Impulsive in Violating the Rules </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">

          </div>
        </div>
		<div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">

            <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">7. Venue of Group Meetings </label>
              <div class="col-sm-8">
                <select name="location_meeting" class="form-control" id="location_meeting">
				<option>Select</option>
                <option value="Usually at Fixed Place"
				  <?php if($row['location_meeting']=='Usually at Fixed Place') echo 'selected'; ?>> Usually at Fixed Place </option>
                  <option value="Place are Changed Frequently"
				  <?php if($row['location_meeting']=='Place are Changed Frequently') echo 'selected'; ?>> Place are Changed Frequently </option>
                  <option value="No Specific Places"
				  <?php if($row['location_meeting']=='No Specific Places') echo 'selected'; ?>> No Specific Places </option>
                  <option value="Meeting Point is Fixed Conveniently"
				  <?php if($row['location_meeting']=='Meeting Point is Fixed Conveniently') echo 'selected'; ?>> Meeting Point is Fixed Conveniently </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">

          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8. The Reaction of the Society When the Child First Left the Family </label>
              <div class="col-sm-8">
                <select name="reaction_society" class="form-control" id="reaction_society">
				<option>Select</option>
                 <option value="Supportive" <?php if($row['reaction_society']=='Supportive') echo 'selected'; ?>> Supportive </option>
                  <option value="Rejective" <?php if($row['reaction_society']=='Rejective') echo 'selected'; ?>> Rejective </option>
                  <option value="Abusive" <?php if($row['reaction_society']=='Abusive') echo 'selected'; ?>> Abusive </option>
                  <option value="Ill-treatment" <?php if($row['reaction_society']=='Ill-treatment') echo 'selected'; ?>> Ill-treatment </option>
                  <option value="Exploitation" <?php if($row['reaction_society']=='Exploitation') echo 'selected'; ?>> Exploitation </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">

            </div>
          </div>
        </div>
		<div class="row">
          <div class="panel-title ptile" > </div>
          <div class="col-sm-6">

            <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">9. The Reaction of the Police Towards the Rescued Child </label>
              <div class="col-sm-8">
                <select name="reaction_police" class="form-control" id="reaction_police">
				<option>Select</option>
                  <option value="Passionate" <?php if($row['reaction_police']=='Passionate') echo 'selected'; ?>> Passionate </option>
                  <option value="Cruel" <?php if($row['reaction_police']=='Cruel') echo 'selected'; ?>> Cruel </option>
                  <option value="Abuse" <?php if($row['reaction_police']=='Abuse') echo 'selected'; ?>> Abuse </option>
                  <option value="Exploitation" <?php if($row['reaction_police']=='Exploitation') echo 'selected'; ?>> Exploitation </option>
                  <option value="Ill-treatment" <?php if($row['reaction_police']=='Ill-treatment') echo 'selected'; ?>> Ill-treatment </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">

          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">

            <div class="form-group">
			<label for="field-1" class="col-sm-3 control-label">10. Social Acceptance of Family in their Community </label>
              <div class="col-sm-8">
                <select name="social_acceptance" class="form-control" id="social_acceptance">
				 <option value="" > Select </option>

                  <option value="Yes" <?php if($row['social_acceptance']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['social_acceptance']=='No') echo 'selected'; ?>> No </option>
                </select>
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
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!---------------------------end of social edit--------------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});

			if($('#purpose_membership').val() == 'Others') {
            $('#membershipOther').show();




      		 } else {
           $('#membershipOther').hide();


      		 }
		if($('#details_membership').val() == 'Others') {
            $('#DetailsmembershipOther').show();

       		 } else {
            $('#DetailsmembershipOther').hide();

       		 }

		if($('#details_friendship').val() == 'Others') {
            $('#friendshipOther').show();

       		 } else {
            $('#friendshipOther').hide();

       		 }
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
         // window.scrollTo(0,0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {

      if(jqForm[0].details_friendship.value =="Others")
        {
        if(jqForm[0].details_friendship_other.value.length>120)
        {
          flag=1;
          $("#details_friendship_other_fr_grp").addClass("validate-has-error");
          $(".details_friendship_other").focus();
          $(".details_friendship_other_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#details_friendship_other_fr_grp").removeClass("validate-has-error");
         $(".details_friendship_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].details_friendship_other.value)){
          flag=1;
               $("#details_friendship_other_fr_grp").addClass("validate-has-error");
               $(".details_friendship_other").focus();
               $(".details_friendship_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#details_friendship_other_fr_grp").removeClass("validate-has-error");
          $(".details_friendship_other_msg").html("");
        }
      }
      if(jqForm[0].details_membership.value =="Others")
        {
        if(jqForm[0].details_membership_other.value.length>120)
        {
          flag=1;
          $("#details_membership_other_fr_grp").addClass("validate-has-error");
          $(".details_membership_other").focus();
          $(".details_membership_other_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#details_membership_other_fr_grp").removeClass("validate-has-error");
         $(".details_membership_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].details_membership_other.value)){
          flag=1;
               $("#details_membership_other_fr_grp").addClass("validate-has-error");
               $(".details_membership_other").focus();
               $(".details_membership_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#details_membership_other_fr_grp").removeClass("validate-has-error");
          $(".details_membership_other_msg").html("");
        }
      }
      if(jqForm[0].purpose_membership.value =="Others")
        {
        if(jqForm[0].purpose_member_other.value.length>40)
        {
          flag=1;
          $("#purpose_member_other_fr_grp").addClass("validate-has-error");
          $("purpose_member_other").focus();
          $(".purpose_member_other_msg").html("This field should be less than 40 characters");
         return false;

        }
        else{
          $("#purpose_member_other_fr_grp").removeClass("validate-has-error");
         $(".purpose_member_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].purpose_member_other.value)){
          flag=1;
               $("#purpose_member_other_fr_grp").addClass("validate-has-error");
               $(".purpose_member_other").focus();
               $(".purpose_member_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#purpose_member_other_fr_grp").removeClass("validate-has-error");
           $(".purpose_member_other_msg").html("");
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

   		 $('#details_friendship').change(function(){
        	if($('#details_friendship').val() == 'Others') {
            $('#friendshipOther').show();

       		 } else {
            $('#friendshipOther').hide();

       		 }
    	});
		});
	$(function() {

   		 $('#details_membership').change(function(){
        	if($('#details_membership').val() == 'Others') {
            $('#DetailsmembershipOther').show();

       		 } else {
            $('#DetailsmembershipOther').hide();

       		 }
    	});
		});

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

$(function() {

	 $('#purpose_membership').change(function(){
       	if($('#purpose_membership').val() == 'Others') {
            $('#membershipOther').show();




      		 } else {
           $('#membershipOther').hide();


      		 }
    	});
	});


</script>
