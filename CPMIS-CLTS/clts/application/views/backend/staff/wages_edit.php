<?php

$this->load->view("backend/staff/modal_msg_labouract.php");
foreach ($wages_act_data as $row):


?>
<!---------------------------start of wages edit--------------------------------->

<div class="row">
  <?php $this->load->view("backend/staff/acttab.php"); ?>
  <div class="col-md-12 wages">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?wages_act">List/Edit</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>

          Wages Act - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body "> <?php echo form_open('wages_act/wages_act_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>


        <div class="row">
          <!--<div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Total no. of Working Days and Hours in a Week </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="work_hour" id="work_hour"
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['working_days']; ?> Days   <?php echo $row['working_hours']; ?> Hours" readonly="readonly">
              </div>
            </div>
          </div>-->
		    
		<div class="col-sm-12">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.Types of Sectors/Indurstries </label>
              <div class="col-sm-9">
			 <select name="wages" class="form-control wages_type col-sm-6 col-xs-10 col-md-12">
			 <option value="">-- Select --</option>
               <?php foreach ($wages as $c): ?>
       <option value="<?php echo $c['id'];?>" <?= ($c['id'] == $row['wages_type'] ? "selected" : "")?>><?php echo $c['sector']; ?></option>
           <?php endforeach; ?>
               </select>
                               
              </div>
            </div>
			</div>
			</div>
			 <div class="row">
		   <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">2.Wages Amount <span class="color-white">*</span></label>
              <div class="col-sm-6">
                <!-- ADDED MAX LENGTH 02-04-2018 STARTED-->
				<!-- code by poojaend-->
                 <input type="text"  data-validate="required" class="form-control work_hour" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="9" name="work_hour" id="work_hour" value="<?php echo $row['wages_amount']; ?>"> 
                 <!-- ENDED MAX LENGTH -->                            
              </div>
            </div>
          </div>
		     <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3.No of days Work <span class="color-white">*</span> </label>
              <div class="col-sm-6">
              <!-- ADDED MAX LENGTH 02-04-2018 STARTED-->
			  <!-- code by poojaend-->
			  <input type="text" data-validate="required" class="form-control no_of_days" name="no_of_days" id="no_of_days" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $row['no_of_days']; ?>">
                <!-- ENDED MAX LENGTH -->           
                             
              </div>
            </div>
          </div>
		  <input type ="hidden" name="bal_amount" class ="bal_amount" id="bal_amount" />
		  </div>
		   <div class="row">
		   <div class="col-sm-6">
			<div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">4.Total work amount </label>
              <div class="col-sm-6">
			  <input type="text" readonly class="form-control total_work_amount" onkeypress="return isNumberKey(event)" name="total_work_amount" id="total_work_amount" value="<?php echo $row['total_work']; ?>">
                
              </div>
            </div>
          </div>
		  
		   <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">5. Salary/Honorarium (Per month) </label>
             <div class="col-sm-6">
                <input type="text" class="form-control" name="employer_money" id="do_claim_disposal" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['salary']; ?>" readonly="readonly">
              </div>
            </div>
          </div>
      </div>
			
			
		 <div class="row">	
	   <div class="panel-title ptitle"  > </div>
		    <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">6.Minimum Wages paid by employer ? </label>
              <div class="col-sm-6">
                <select name="mnimum_wages" class="form-control"  id="mnimum_wages">
                  <option value=""> Select</option>
                  <option value="Yes"  <?php if($row['mnimum_wages']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No"  <?php if($row['mnimum_wages']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
             <label for="field-1" class="col-sm-6 control-label">7.Amount collected from employer <span class="color-white">*</span></label>
              <div class="col-sm-6">
                <input type="text"  data-validate="required" maxlength="10" class="form-control amount_collected" name="amount_collected" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="amount_collected" value="<?php echo $row['amount_wages_collected']; ?>" />
              </div>
            </div>
          </div>
		  </div>
		 
            <div class="">
        <div  id="wages_no">	
			<div class="col-sm-6">
            <div class="form-group">
             <label for="field-1" class="col-sm-6 control-label">8.Remaining Claim amount </label>
              <div class="col-sm-6">
                <input type="text" readonly="true"  class="form-control remaning_collected" name="remaning_collected" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="remaning_collected" value="<?php echo $row['remaining_amount']; ?>" />
              </div>
            </div>
          </div>		
			  <div class="col-sm-6 paddingleft_nul">
				<label for="field-1" class="col-sm-6 control-label">8 i. Has claim been filed ?</label>
				<div class="form-group">
				  <div class="col-sm-6 paddingleft_right">
					<select name="has_claim" class="form-control"  id="claim">
					  <option value=""> Select </option>
					  <option value="Yes" <?php if($row['has_claim']=='Yes') echo 'selected'; ?>> Yes </option>
					  <option value="No" <?php if($row['has_claim']=='No') echo 'selected'; ?>> No </option>
					</select>
				  </div>
				</div>
			  </div>
			  <div  id="claim_no">
					<div class="col-sm-6 ">
					  <label for="field-1" class="col-sm-6 control-label paddingleft_nul ">8 ii. Date on Which the claim was filed</label>
					  <div class="form-group">
						<div class="col-sm-6">
						 <div class="input-group date " id="datepicker3"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
							<input type="text" class="form-control " name="date_claim" id="date_claim"
									   data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['date_claim']; ?>"  readonly >
						  </div>
						  <span id="error_msg1"></span>
						</div>
					  </div>
					</div>
					</div>
					 <div  id="clame_date" >
					 <div class="col-sm-6">
					  <label for="field-1" class="col-sm-6 control-label paddingleft_nul"  >8 iii. Has the claim amount been paid by the employer ? </label>
					  <div class="form-group">
						<div class="col-sm-6 ">
						  <select name="has_claim_amount" class="form-control"  id="amount">
							<option value=""> Select </option>
							<option value="Yes" <?php if($row['has_claim_amount']=='Yes') echo 'selected'; ?>> Yes </option>
							<option value="No" <?php if($row['has_claim_amount']=='No') echo 'selected'; ?>> No </option>
						  </select>
						</div>
					  </div>
					</div>
					<div  id="date_claim_amount" style="display:none;" >
					<div class="col-sm-6 ">
					  <label for="field-1" class="col-sm-6 control-label paddingleft_nul " >8 iv. Date on which the claim was disposed off</label>
					  <div class="form-group">
						<div class="col-sm-6">
						  <div class="input-group date " id="datepicker4"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
							<input type="text" class="form-control" name="date_disposed" id="date_disposed"
									   data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['date_disposed']; ?>" readonly >
						  </div>
						  <span id="error_msg2"></span>
						</div>
					  </div>
					</div>
					</div>
					
					</div>
					 <div class="row">
            	<div  id="claim_amount_no" >
				  <div class="col-sm-6">
					<label for="field-1" class="col-sm-6 control-label paddingleft_nul">8 v. Has prosecution been filed ?</label>
					<div class="form-group" >
					  <div class="col-sm-6 ">
						<select name="prosecution_field" class="form-control"  id="prosecutionfield">
						  <option value=""> Select </option>
						  <option value="Yes" <?php if($row['prosecution_field']=='Yes') echo 'selected'; ?>> Yes </option>
						  <option value="No" <?php if($row['prosecution_field']=='No') echo 'selected'; ?>> No </option>
						</select>
					  </div>
					</div>
				  </div>
				  </div>
              <div  id="prosecutionfield_yes" >
                <div class="">
                  <div class="col-sm-6" >
                    <label for="field-1" class="col-sm-6 control-label paddingleft_nul" >8.v.a. Name and Place of authority to whom prosecution was filed</label>
                    <div class="form-group">
                      <div id="place_authority_fr_grp" class="col-sm-6"  >
                        <input type="text" class="form-control place_authority " name="place_authority" id="do_claim"   value="<?php echo $row['place_authority']; ?>"/>
                        <span class="place_authority_msg color-red"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label for="field-1" class="col-sm-6 control-label paddingleft_nul">8.v.b. Date on which prosecution was filed</label>
                    <div class="form-group">
                      <div class="col-sm-6 " >
                        <div class="input-group date" id="datepicker5"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                          <input type="text" class="form-control" name="date_prosecution" id="date_prosecution"
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['date_prosecution']; ?>"  readonly >
                        </div>
						<span id="error_msg3"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="col-sm-6">
                    <label for="field-1" class="col-sm-6 control-label paddingleft_nul" >8.v.c. Date on which prosecution was disposed off </label>
                    <div class="form-group">
                      <div class="col-sm-6 ">
                        <div class="input-group date" id="datepicker6"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                          <input type="text" class="form-control" name="date_prosecution_disposed" id="prosecution_date_disposal"
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['date_prosecution_disposed']; ?>"  readonly >
                        </div>
						<span id="error_msg4"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label for="field-1" class="col-sm-6 control-label paddingleft_nul">8.v.d. Order Number</label>
                    <div class="form-group">
                      <div id="order_number_fr_grp" class="col-sm-6 " >
                        <input type="text" class="form-control order_number" name="order_number" id="order_number"
                                value="<?php echo $row['order_number']; ?>"   />
                            <span class="order_number_msg color-red"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
		</div>
        <!--start-->
        <div class="">
          <div class="col-sm-6 ">
            <label for="field-1" class="col-sm-6 control-label paddingleft_nul">9. Status of Case </label>
            <div class="form-group">
              <div class="col-sm-6 " >
                <select name="status_of_cases" class="form-control"  id="status_of_cases">
                  <option value="">Select</option>
                  <option value="disposed" <?php if($row['status_of_cases']=='disposed') echo 'selected'; ?>> Disposed </option>
                  <option value="pending"  <?php if($row['status_of_cases']=='pending') echo 'selected'; ?>> Pending </option>
                </select>
              </div>
            </div>
          </div>
          <div class="" id="disposed">
            <div class="col-sm-6 " >
              <label for="field-1" class="col-sm-6 control-label paddingleft_nul"> 9.i. Date of Disposal</label>
              <div class="form-group">
                <div class="col-sm-6 " >
                   <div class="input-group date" id="datepicker7"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                    <input type="text" class="form-control" name="date_of_disposed" id="date_of_disposed"
                          value="<?php echo $row['date_of_disposed']; ?>"  readonly >
                  </div>
				  <span id="error_msg7"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 " >
              <label for="field-1" class="col-sm-6 control-label paddingleft_nul">9.ii. Type of Disposal</label>
              <div class="form-group">
                <div class="col-sm-6  " >
                  <select name="type_disposed" class="form-control"  id="type_disposed">
                    <option value=""> Select</option>
                    <option value="Acquittals" <?php if($row['type_disposed']=='Acquittals') echo 'selected'; ?>> Acquittals </option>
                    <option value="Imprisonment" <?php if($row['type_disposed']=='Imprisonment') echo 'selected'; ?>> Imprisonment </option>
                    <option value="Fine" <?php if($row['type_disposed']=='Fine') echo 'selected'; ?>> Fine </option>
                    <option value="both" <?php if($row['type_disposed']=='Both(Imprisonment and Fine)') echo 'selected'; ?>> Both(Imprisonment and Fine) </option>
                    <option value="Others" <?php if($row['type_disposed']=='Others') echo 'selected'; ?>> Others </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="type_other">
              <label for="field-1" class="col-sm-6 control-label">9.ii.a. Please Specify</label>
              <div class="form-group">
                <div  id="type_disposed_other_fr_grp"  class="col-sm-6 new1_padd" >
                  <input type="text" class="form-control type_disposed_other" name="type_disposed_other" id="type_disposed_other"
                                value="<?php echo $row['type_disposed_other']; ?>"   >
                                  <span class="type_disposed_other_msg color-red"></span>
                </div>
              </div>
            </div>
          </div>
          <div id="pending">
            <div class="col-sm-6 " >
              <label for="field-1" class="col-sm-6 control-label">9 i. Reason for Pendency</label>
              <div class="form-group">
                <div id="reason_pendency_fr_grp" class="col-sm-6 new1_padd " >
                  <input type="text" class="form-control reason_pendency" name="reason_pendency" id="reason_pendency"
                                value="<?php echo $row['reason_pendency']; ?>" ondrop="return false;"
        onpaste="return false;" />
        <span class="reason_pendency_msg color-red"></span>
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
		
        </div>
        </div>
      </div>
      <!-- end-->
      
      <div class="height"></div>

      <?php echo form_close(); ?> </div>

  </div>

<!------------------------end of wages edit------------------------------->
<?php endforeach;?>
<script>

  function noNaN( n ) { return isNaN( n ) ? 0 : n; }
  function isNAN(val){
	  if(typeof val === NaN){
		    return '0';  
	  }else{
			return val;  
	  }
  }

    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});


			if($('#type_disposed').val() == 'Others') {
            $('#type_other').show();
			$
       		 } else {
			  $('#type_other').hide();



       		 }
		if($('#status_of_cases').val() == 'disposed') {
            $('#disposed').show();
			$('#pending').hide();
       		 } else if($('#status_of_cases').val() == 'pending'){
			  $('#disposed').hide();
			 $('#pending').show();
       		 }else{
			  $('#disposed').hide();
			  $('#pending').hide();
			 }


			if($('#cash_deposite').val() == 'NO') {
            $('#cashdeposite_no').show();

       		 } else {
            $('#cashdeposite_no').hide();

       		 }
		if($('#mnimum_wages').val() == 'No') {
            $('#wages_no').show();

       		 } else {
            $('#wages_no').hide();

       		 }

			 if($('#claim').val() == 'Yes') {
            $('#claim_no').show();

       		 } else {
            $('#claim_no').hide();

       		 }
			if($('#amount').val() == 'Yes') {
            $('#claim_amount_yes').show();
			$('#claim_amount_no').show();

       		 } else {
			 $('#claim_amount_no').show();
            $('#claim_amount_yes').hide();
       		 }

			 if($('#prosecutionfield').val() == 'Yes') {
            $('#prosecutionfield_yes').show();

       		 } else {
            $('#prosecutionfield_yes').hide();

       		 }
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
	//prativa claim field date
		var copmareClaimField = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
		//end
			//prativa claim proc field
		var copmareProcField = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
		//end
		//prativa disposedfield
		var copmareDisposedDate = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
		//end
    function validate_project_add(formData, jqForm, options) {

		var claim_filed_date=(jqForm[0].date_claim.value);
       	var claim_disposed_date=(jqForm[0].date_disposed.value);
		var date_of_birth = "<?php echo $row['dob'];?>";

		var prosecution_filed = (jqForm[0].date_prosecution.value);
		var prosecution_disposed = (jqForm[0].prosecution_date_disposal.value);

		var disposed_date = (jqForm[0].date_of_disposed.value);
		var rescued_date = "<?php echo $row['date_rescued'];?>";
		
		//work_hour    no_of_days
		if(jqForm[0].work_hour.value.length==0)
		{
		  flag=1;
		  
		 return false;

		}
		if(jqForm[0].no_of_days.value.length==0)
		{
		  flag=1;
		  
		 return false;

		}
		if(jqForm[0].amount_collected.value.length==0)
		{
		  flag=1;
		  
		 return false;

		}
    if(jqForm[0].has_claim_amount.value=='Yes')
    {
    if(jqForm[0].has_claim_amount.value.length>10)
		{
		  flag=1;
		  $("#claim_amount_fr_grp").addClass("validate-has-error");
		  $( ".has_claim_amount" ).focus();
		  $(".claim_amount_msg").html("This field should be less than 10 characters");
		 return false;

		}
		else{
		  $("#poceeding_certificate_authority_other_fr_grp").removeClass("validate-has-error");
		 $(".poceeding_certificate_authority_other_msg").html("");
		}
    if(/^\s+$/.test(jqForm[0].has_claim_amount.value)){
      flag=1;

           $("#poceeding_certificate_authority_other_fr_grp").addClass("validate-has-error");
           $( ".poceeding_certificate_authority_other" ).focus();
           $(".poceeding_certificate_authority_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#poceeding_certificate_authority_other_fr_grp").removeClass("validate-has-error");
      $(".poceeding_certificate_authority_other_msg").html("");
    }
  }
  //prosecution_field/place_authority/order_number
    if(jqForm[0].prosecution_field.value=='Yes')
    {
    if(jqForm[0].place_authority.value.length>100)
    {
      flag=1;
      $("#place_authority_fr_grp").addClass("validate-has-error");
      $( ".place_authority" ).focus();
      $(".place_authority_msg").html("This field should be less than 100 characters");
     return false;

    }
    else{
      $("#place_authority_fr_grp").removeClass("validate-has-error");
     $(".place_authority_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].place_authority.value)){
      flag=1;

           $("#place_authority_fr_grp").addClass("validate-has-error");
           $( ".place_authority" ).focus();
           $(".place_authority_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#place_authority_fr_grp").removeClass("validate-has-error");
      $(".place_authority_msg").html("");
    }
    }
    if(jqForm[0].prosecution_field.value=='Yes')
    {
    if(jqForm[0].order_number.value.length>50)
    {
      flag=1;
      $("#order_number_fr_grp").addClass("validate-has-error");
      $( ".order_number" ).focus();
      $(".order_number_msg").html("This field should be less than 50 characters");
     return false;

    }
    else{
      $("#order_number_fr_grp").removeClass("validate-has-error");
     $(".order_number_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].order_number.value)){
      flag=1;

           $("#order_number_fr_grp").addClass("validate-has-error");
           $( ".order_number_other" ).focus();
           $(".order_number_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#order_number_fr_grp").removeClass("validate-has-error");
      $(".order_number_msg").html("");
    }
    }

    if(jqForm[0].status_of_cases.value=='pending')
    {
    if(jqForm[0].reason_pendency.value.length>50)
    {
      flag=1;
      $("#reason_pendency_fr_grp").addClass("validate-has-error");
      $( ".reason_pendency" ).focus();
      $(".reason_pendency_msg").html("This field should be less than 50 characters");
     return false;

    }
    else{
      $("#reason_pendency_fr_grp").removeClass("validate-has-error");
     $(".reason_pendency_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].reason_pendency.value)){
      flag=1;

           $("#reason_pendency_fr_grp").addClass("validate-has-error");
           $( ".reason_pendency" ).focus();
           $(".reason_pendency_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#reason_pendency_fr_grp").removeClass("validate-has-error");
      $(".reason_pendency_msg").html("");
    }
    }
    if(jqForm[0].status_of_cases.value=='disposed')
    {
    if(jqForm[0].type_disposed.value=='Others')
    {
    if(jqForm[0].type_disposed_other.value.length>50)
    {
      flag=1;
      $("#type_disposed_other_fr_grp").addClass("validate-has-error");
      $( "type_disposed_other" ).focus();
      $(".type_disposed_other_msg").html("This field should be less than 50 characters");
     return false;

    }
    else{
      $("#type_disposed_other_fr_grp").removeClass("validate-has-error");
     $(".ttype_disposed_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].type_disposed_other.value)){
      flag=1;

           $("#type_disposed_other_fr_grp").addClass("validate-has-error");
           $( ".type_disposed_other" ).focus();
           $(".type_disposed_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#type_disposed_other_fr_grp").removeClass("validate-has-error");
      $(".type_of_disposed_other_msg").html("");
    }
    }
  }
		if(claim_filed_date != ""){
			var diffClaim_fieldDate = copmareClaimField(claim_filed_date,rescued_date);
			if(diffClaim_fieldDate < 0 ){
			$("#error_msg1").html("Claim filed provided should be after date of rescue");
				document.getElementById("date_claim").focus();
				$("#datepicker3").addClass("newClass");
				return false;
			}
		}
		if(claim_disposed_date!= "" && $("#amount").val()=='Yes' ){
			if(claim_filed_date > claim_disposed_date ){
			$("#error_msg2").html("Disposed date provided should be after claim filed ");
				document.getElementById("date_disposed").focus();
				$("#datepicker4").addClass("newClass");
				return false;
			}
		}

		if(prosecution_filed != ""){
			var diffProc_field = copmareProcField(prosecution_filed,rescued_date);
			if(diffProc_field < 0 ){
			$("#error_msg3").html("Prosecution filed provided should be after date of rescue");
				document.getElementById("date_prosecution").focus();
				$("#datepicker5").addClass("newClass");
				return false;
			}
		}
		if(prosecution_filed != "" || prosecution_disposed!= ""){
			if(prosecution_filed > prosecution_disposed ){
			$("#error_msg4").html("Prosecution filed should be later or equal to prosecution disposed date");
				document.getElementById("prosecution_date_disposal").focus();
				$("#datepicker6").addClass("newClass");
				return false;
			}
		}
		if(disposed_date != "" ){
		var diffDisdate = copmareDisposedDate(disposed_date,rescued_date);
			if(diffDisdate < 0 ){
			$("#error_msg7").html("Date of disposed should be later or equal to date of rescue");
				document.getElementById("date_of_disposed").focus();
				$("#datepicker7").addClass("newClass");
				return false;
			}
		}

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		/* window.location.reload();
        toastr.success("Information Updated Successfully", "Success");*/

		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
$(function() {

   		 $('#mnimum_wages').change(function(){
        	if($('#mnimum_wages').val() == 'No') {
			document.getElementById("amount_collected").disabled = false; 
			document.getElementById("amount_collected").value = "";
            $('#wages_no').show();
			$('#clame_date').hide();
			$('#claim_amount_no').hide();

       		 }
			else if($('#mnimum_wages').val() == 'Yes') {
				document.getElementById("amount_collected").value = document.getElementById("total_work_amount").value;    	document.getElementById("amount_collected").disabled = true;     				
				document.getElementById("remaning_collected").value = 0 ;     				
		       $('#wages_no').hide();
		       $('#claim_no').hide();
		       $('#clame_date').hide();
		       $('#claim_amount_no').hide();
				}
			 else {
            $('#wages_no').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#claim').change(function(){
        	if($('#claim').val() == 'Yes') {
			$('#claim_no').show();
			$('#clame_date').show();
			$('#claim_amount_no').show();
			$('#prosecutionfield_yes').show();
			$('#date_claim_amount').hide();

       		 } else {
            $('#claim_no').hide();
            $('#clame_date').hide();
            $('#claim_amount_no').hide();
            $('#prosecutionfield_yes').hide();
            $('#date_claim_amount').hide();

       		 }
    	});
		});
		$(function() {


   		 $('#amount').change(function(){
        	if($('#amount').val() == 'Yes') {		
            $('#claim_amount_yes').show();
			$('#prosecutionfield_yes').hide();
			$('#date_claim_amount').show();

       		 } else if($('#amount').val() == 'No') {
            $('#claim_amount_yes').hide();
			$('#claim_amount_no').show();
			$('#prosecutionfield_yes').show();
			$('#date_claim_amount').hide();

       		 }
			 else{
				$('#claim_amount_yes').hide();
			$('#prosecutionfield_yes').hide();
			$('#date_claim_amount').hide(); 
			 }
    	});
		});

		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


		$(function() {

   		 $('#prosecutionfield').change(function(){
        	if($('#prosecutionfield').val() == 'Yes') {
            $('#prosecutionfield_yes').show();

       		 } else {
            $('#prosecutionfield_yes').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#cash_deposite').change(function(){
        	if($('#cash_deposite').val() == 'No') {
            $('#cashdeposite_no').show();

       		 } else {
            $('#cashdeposite_no').hide();

       		 }
    	});
		});

		$(function() {

   		 $('#status_of_cases').change(function(){
        	if($('#status_of_cases').val() == 'disposed') {
            $('#disposed').show();
			$('#pending').hide();
       		 } else if($('#status_of_cases').val() == 'pending'){
			  $('#disposed').hide();
			 $('#pending').show();
       		 }else{
			  $('#disposed').hide();
			  $('#pending').hide();
			 }
    	});
		});

		$(function() {

   		 $('#type_disposed').change(function(){
        	if($('#type_disposed').val() == 'Others') {
            $('#type_other').show();
			$
       		 } else {
			  $('#type_other').hide();

       		 }
    	});
		});

		var FromEndDate = new Date();
$('#datepicker3').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker4').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker5').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker6').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker7').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});


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
        function isNumberKey(evt){
           var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
               return false;
           return true;
        }

</script>
<!---dipti-->
<script type="text/javascript">
/*$(document).on('change', '.wages_type', function(e) {

var values = $(this).val();
 $.ajax({
        url: "<?php echo base_url()?>index.php?wages_act/wages_amount",
        type: "post",
		
       data: { values: values},
	   dataType :"JSON",
        success: function (response) {

	$('.work_hour').val(response.wage_amount);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }


    });
});*/
</script>
<script type="text/javascript">
$(document).on('keyup', '.no_of_days', function(e) {
var no_of_days = $('.no_of_days').val();
var work_hour  = $('.work_hour ').val();
var total = no_of_days * work_hour;
//alert(total);
$('.total_work_amount').val(total);
$('.remaning_collected').val(total);
});

$(document).on('keyup', '.amount_collected', function(e) {
var amount_collected = $('.amount_collected').val();
var total_work_amount  = $('.total_work_amount ').val();
var totalbalance = total_work_amount - amount_collected;
//alert(total);
$('.remaning_collected').val(totalbalance);
});

$(document).on('keyup', '.amount_collected', function(e) {
var amount_collected  = $('.amount_collected').val();
//alert(amount_collected);
var total_work_amount = $('#total_work_amount').val();
//alert(total_work_amount);

var balance = noNaN(parseFloat (amount_collected) - parseFloat(total_work_amount));
//alert(balance);
if(balance>0)
{
	
var amount  = $('.bal_amount').val(balance);
$('.amount_collected').val('0');
}
else{
	var amount =0;
}
});
</script>
<style>
#error_msg{
color:red;
}
</style>
