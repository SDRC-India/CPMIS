<?php
$this->load->view("backend/staff/modal_msg_labouract.php");
foreach ($reasons_add_data as $row):

?>
<!--------------------------------reason  edit start---------------------------------------->
<div class="row">
<?php $this->load->view("backend/staff/tabmenu.php"); ?>
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">

             <div class="child_list_head">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?reasons_add">List of Reason Information</a>
                </div>
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>

                    Reasons for Involving as Child Labour - Child ID: <?php echo $row['child_id']; ?>
                </div>

            </div>
            <div class="panel-body">

                <?php echo form_open('reasons_add/reason/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>


                <div class="row">
                <div class="panel-title ptitle"  >

                </div>
                <div class="col-sm-6">
               <div class="form-group"> <label for="field-1" class="col-sm-3 control-label">1. Reason for leaving family </label>
                 <div class="col-sm-8">
		 <?php $val=explode(",",$row['reason_for_leaving']);?>
			  <input name="reason_for_leaving[]" type="checkbox" value="Abused by Parent(s)/Guardian(s)/Step Parent(s)"
			  <?php if(in_array('Abused by Parent(s)/Guardian(s)/Step Parent(s)',$val)) {echo "checked";}?>> <label> Abused by Parent(s)/Guardian(s)/Step Parent(s)</label><br />
			  <input name="reason_for_leaving[]" type="checkbox" value="In search of employment" <?php if(in_array('In search of employment',$val)) {echo "checked";}?>> <label> In Search of Employment</label><br />
			  <input name="reason_for_leaving[]" type="checkbox" value="Peer group influence" <?php if(in_array('Peer group influence',$val)) {echo "checked";}?>>  <label> Peer Group Influence</label><br />
			  <input name="reason_for_leaving[]" type="checkbox" value="Incapacitation of parents" <?php if(in_array('Incapacitation of parents',$val)) {echo "checked";}?>> <label>Incapacitation of Parents</label><br />
			   <input name="reason_for_leaving[]" type="checkbox" value="Criminal behaviour of parents" <?php if(in_array('Criminal behaviour of parents',$val)) {echo "checked";}?>> <label> Criminal Behaviour of Parents</label><br />
			  <input name="reason_for_leaving[]" type="checkbox" value="Separation of parents" <?php if(in_array('Separation of parents',$val)) {echo "checked";}?>> <label>Separation of Parents</label><br />
			  <input name="reason_for_leaving[]" type="checkbox" value="Demise of parents" <?php if(in_array('Demise of parents',$val)) {echo "checked";}?>>  <label> Demise of Parents</label><br />
			  <input name="reason_for_leaving[]" type="checkbox" value="Poverty" <?php if(in_array('Poverty',$val)) {echo "checked";}?>> <label> Poverty</label><br />

                 </div>
                </div>
                </div>
                <div class="col-sm-6">

                 <div class="form-group">


                    <div class="col-sm-8"></div>
                </div>
                </div>

                </div>


                <div class="row">
                <div class="panel-title ptitle"  >

                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">2. With whom was the child staying prior to rescue
</label>

                    <div class="col-sm-8">

                    <select name="staying_prior_rescue" class="form-control" id="staying_prior_rescue">
					<option value="">Select</option>
                                   <option value="Parents" <?php if($row['staying_prior_rescue']=='Parents') echo 'selected'; ?>>
                                        Parent(s)
                                        </option>
                                        <option value="Guardian" <?php if($row['staying_prior_rescue']=='Guardian') echo 'selected'; ?>>
                                        Guardian(s)
                                        </option>
                                        <option value="Friends" <?php if($row['staying_prior_rescue']=='Friends') echo 'selected'; ?>>
                                        Friend(s)
                                        </option>
                                        <option value="On the Street" <?php if($row['staying_prior_rescue']=='On the Street') echo 'selected'; ?>>
                                        On the Street
                                        </option>
                                        <option value="Night Shelter" <?php if($row['staying_prior_rescue']=='Night Shelter') echo 'selected'; ?>>
                                        Night Shelter
                                        </option>
                                        <option value="Orphanages/Hostels/Similar Homes" <?php if($row['staying_prior_rescue']=='Orphanages/Hostels/Similar Homes') echo 'selected'; ?>>
                                        Orphanages/Hostels/Similar Homes
                                        </option>

                        </select>

                    </div>
                </div>

                </div>



                <div class="col-sm-6" id="parents">

                 <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">2.i.Specify relationship</label>
                      <div id="guardian_rel_fr_grp" class="col-sm-8">
                      <input type="text" class="form-control guardian_rel" name="guardian_rel" id="guardian_rel"   value="<?php echo $row['guardian_rel']; ?>" />
                        <span class="guardian_rel_msg color-red"></span>

                      </div>
                    </div>
                </div>

				<div class="col-sm-6" id="friends">

                 <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">2.i.Specify name</label>
                      <div id="friends_rel_fr_grp" class="col-sm-8">

                      <input type="text" class="form-control friends_rel" name="friends_rel" id="friends_rel"   value="<?php echo $row['friends_rel']; ?>"
                                  />
                          <span class="friends_rel_msg color-red"></span>

                      </div>
                    </div>
                </div>

                </div>
                <div class="row">
                <div class="panel-title ptitle" >



                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3. Parental care towards the child before rescue</label>

                    <div class="col-sm-8">
                      <select name="care_before_rescue" class="form-control" id="care_before_rescue">
					  <option value="">Select</option>
                        <option value="Over protection" <?php if($row['care_before_rescue']=='Over protection') echo 'selected'; ?>>
                                    Over protective
                                    </option>
                                    <option value="Affectionate" <?php if($row['care_before_rescue']=='Affectionate') echo 'selected'; ?>>
                                    Affectionate
                                    </option>
                                    <option value="Attentive" <?php if($row['care_before_rescue']=='Attentive') echo 'selected'; ?>>
                                    Attentive
                                    </option>
                                    <option value="Not Affectionate" <?php if($row['care_before_rescue']=='Not Affectionate') echo 'selected'; ?>>
                                    Not Affectionate
                                    </option>
                                    <option value="Not Attentive" <?php if($row['care_before_rescue']=='Not Attentive') echo 'selected'; ?>>
                                    Not Attentive
                                    </option>
                                    <option value="Rejection" <?php if($row['care_before_rescue']=='Rejection') echo 'selected'; ?>>
                                    Rejective
                                    </option>
                      </select>
                    </div>
                </div>

                </div>



                <div class="col-sm-6">

                 <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"></label>

                    <div class="col-sm-8"></div>
                </div>



                </div>

                </div>

                <div class="row">
                <div class="panel-title ptitle"  >

                </div>
                <div class="col-sm-6">
               <div class="form-group">


                    <div class="col-sm-8"></div>
                </div>

                </div>



                <div class="col-sm-6">

                 <div class="form-group">


                    <div class="col-sm-8"></div>
                </div>



                </div>

                </div>







         <div class="row top-margin1" >
                <div class="panel-title ptitle"  >
           4. Frequency of visit of parent(s) </div>

            <div class="ptitle"></div>


              </div>


              <div class="row top-margin">
                <div class="panel-title ptitle"  >

                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">4.i. Prior to Institutionalization
</label>

                    <div class="col-sm-8">
                      <select name="parent_prior_institute" class="form-control" id="parent_prior_institute">
					  <option value="">Select</option>
                        <option value="Frequently" <?php if($row['parent_prior_institute']=='Frequently') echo 'selected'; ?>> Frequently </option>
                        <option value="Occasionally" <?php if($row['parent_prior_institute']=='Occasionally') echo 'selected'; ?>> Occasionally </option>
                        <option value="Rarely" <?php if($row['parent_prior_institute']=='Rarely') echo 'selected'; ?>> Rarely </option>
                        <option value="During Festival Times" <?php if($row['parent_prior_institute']=='During Festival Times') echo 'selected'; ?>> During Festival Times </option>
                        <option value="During Summer Holidays" <?php if($row['parent_prior_institute']=='During Summer Holidays') echo 'selected'; ?>>During Summer Holidays</option>
                        <option value="Whenever Fallen Sick" <?php if($row['parent_prior_institute']=='Whenever Fallen Sick') echo 'selected'; ?>> Whenever Fallen Sick</option>
                        <option value="Never" <?php if($row['parent_prior_institute']=='Never') echo 'selected'; ?>> Never </option>
                      </select>
                    </div>
                </div>

                </div>



                <div class="col-sm-6">


                <div class="form-group"><label for="field-1" class="col-sm-3 control-label">4.ii. After Institutionalization</label>
                  <div class="col-sm-8">
                    <select name="parent_after_institute" class="form-control" id="parent_after_institute">
					<option value="">Select</option>
                      <option value="Frequently" <?php if($row['parent_after_institute']=='Frequently') echo 'selected'; ?>> Frequently </option>
                      <option value="Occasionally" <?php if($row['parent_after_institute']=='Occasionally') echo 'selected'; ?>> Occasionally </option>
                      <option value="Rarely" <?php if($row['parent_after_institute']=='Rarely') echo 'selected'; ?>> Rarely </option>
                      <option value="During Festival Times" <?php if($row['parent_after_institute']=='During Festival Times') echo 'selected'; ?>> During Festival Times </option>
                      <option value="During Summer Holidays" <?php if($row['parent_after_institute']=='During Summer Holidays') echo 'selected'; ?>> During Summer Holidays </option>
                      <option value="Whenever Fallen Sick" <?php if($row['parent_after_institute']=='Whenever Fallen Sick') echo 'selected'; ?>> Whenever Fallen Sick </option>
                      <option value="Never" <?php if($row['parent_after_institute']=='Never') echo 'selected'; ?>> Never </option>
                    </select>
                  </div>
                </div>


                </div>

                </div>

                 <div class="row top-margin">
                <div class="panel-title ptitle" >

                </div>
                <div class="col-sm-6">
               <div class="form-group">
                 <div class="col-sm-8"></div>
                </div>

                </div>



                <div class="col-sm-6">


                <div class="form-group">


                    <div class="col-sm-8"></div>
                </div>


                </div>

                </div>

                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-7">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            Update </button> <button type="button" class="btn btn-info" id="cancel-button">
                            Cancel</button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-------------------------reason edit page end--------------------------------->
<?php endforeach;?>


<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});
        	if($('#staying_prior_rescue').val() == 'Guardian') {
            $('#parents').show();
			      $('#friends').hide();
       		 } else if ($('#staying_prior_rescue').val() == 'Friends') {
            $('#friends').show();
		      	$('#parents').hide();
       		 } else {
            $('#friends').hide();
			      $('#parents').hide();
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

      //guardian_rel/
      if(jqForm[0].staying_prior_rescue.value =="Guardian")
      {
      if(jqForm[0].guardian_rel.value.length>40)
      {
        flag=1;
        $("#guardian_rel_fr_grp").addClass("validate-has-error");
        $(".guardian_rel").focus();
        $(".guardian_rel_msg").html("This field  be less than 40 characters");
       return false;

      }
      else{
        $("#guardian_rel_fr_grp").removeClass("validate-has-error");
       $(".guardian_rel_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].guardian_rel.value)){
        flag=1;

             $("#guardian_rel_fr_grp").addClass("validate-has-error");
             $(".guardian_rel_other").focus();
             $(".guardian_rel_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#guardian_rel_fr_grp").removeClass("validate-has-error");
        $(".guardian_rel_msg").html("");
      }
    }

    //validation friends relation
    if(jqForm[0].staying_prior_rescue.value =="Friends")
    {
    if(jqForm[0].friends_rel.value.length>40)
    {
      flag=1;
      $("#friends_rel_fr_grp").addClass("validate-has-error");
      $(".friends_rel").focus();
      $(".friends_rel_msg").html("This field should be less than 40 characters");
     return false;

    }
    else{
      $("#friends_rel_fr_grp").removeClass("validate-has-error");
     $(".friends_rel_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].friends_rel.value)){
      flag=1;

           $("#friends_rel_fr_grp").addClass("validate-has-error");
           $(".friends_rel_other").focus();
           $(".friends_rel_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#friends_rel_fr_grp").removeClass("validate-has-error");
      $(".friends_rel_msg").html("");
    }
  }
      $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
      document.getElementById("submit-button").disabled = true;
  }
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('html, body').animate({ scrollTop: 0 }, 0);

		$('#preloader-form').html('');

		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
	$(function() {
   		 $('#staying_prior_rescue').change(function(){
        	if($('#staying_prior_rescue').val() == 'Guardian') {
            $('#parents').show();
			      $('#friends').hide();
       		 } else if ($('#staying_prior_rescue').val() == 'Friends') {
            $('#friends').show();
			$('#parents').hide();
       		 } else {
            $('#friends').hide();
			$('#parents').hide();
       		 }
    	});
		});
</script>
