<?php $this->load->view("backend/staff/modal_msg.php");?>


<!----------------------child rescued page started---------------------------------->
<div class="row child_rescued">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?child_rescued_list">List/Edit Rescued Child </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Rescued Child </div>
      </div>
      <div class="panel-body">
      
       <?php echo form_open('child_rescued_list/ChilldRescuedRecord/create/', array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data','name'=> 'basicForm')); ?>

			  <?php if($role_id == '5'){
			 $this->load->view("backend/staff/modal_msg_ls_only.php");

			  }
			  ?>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Child Photo</label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default;?>" alt="Child image"> </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image" id="myfile" accept="image/*" onchange="return ajaxFileUpload2(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput" onclick="clearbutton();">Remove</a> </div>
               <input type="hidden" name="hidename_child" id="hidename_child" >
                </div>
				<div id="img-error"></div> 
				<div id="size-error" class="color-red"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="col-sm-8"> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Date & Time of<br />
              Rescue<span class="color-white">*</span></label>
              <div class="col-sm-8">
			  
                <div class='input-group date form_datetime' id='datetimepicker' >
					<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  <input type="text"  id="idate_of_rescue" class="form-control" name="idate_of_rescue" data-validate="required" readonly>
                </div>
				<span id="error_msg1"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div  class="form-group ">
              <label for="field-1" class="col-sm-3 control-label">3. Name of the Child
              <span class="color-white">*</span>
              </label>
              <div id="cname_form_grp" class="col-sm-8">
                <input type="text" class="form-control cname " name="cname" id="cname" value=""
                               data-validate="required" data-message-required="This field is required"
							  onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" />
        <span class="cname_msg color-red"></span>
    <span id="error" class="hide" >* Special Characters not allowed</span>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4. Sex <span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="gender"  class="form-control"   data-validate="required">
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Third gender">Others</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Is Date of Birth Available</label>
              <div class="col-sm-8">
                <select name="isdob" class="form-control" id="isdob">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
		 <div class="col-sm-6" id="ispresent_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.a Date of Birth<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="dob" id="dob"  value=""  data-validate="required"  >
                </div>
				        <span id="error_msg"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="ispresent_no" >
		  <div class="col-sm-6">
              <div class="form-group" >
                <label for="field-1" class="col-sm-5 control-label">5.a.i. Year <span class="color-white">*</span></label>
                <div class="col-sm-5" >
                  <input type="number" class="form-control" name="year" id="year" min="5" max ="17" value=""
                                onblur="if(this.value>17){this.value='17';}else if(this.value<5){this.value='5';}"  data-validate="required" >
                </div>
              </div>
            </div>
            <div class="col-sm-6 left-margin1">
              <div class="form-group">
                <label for="field-1" class="col-sm-5 control-label">5.a.ii.Month<span class="color-white">*</span></label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" name="month" id="month" min="0" max ="11" value=""
				   onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}"   data-validate="required">
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Education</label>
              <div class="col-sm-8">
                <select name="education" class="form-control" id="education" >
                  <option value="">Select</option>
                  <option value="Illiterate">Illiterate</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                  <option value="5th">5th</option>
                  <option value="6th">6th</option>
                  <option value="7th">7th</option>
                  <option value="8th">8th</option>
                  <option value="9th">9th</option>
                  <option value="10th">10th</option>
        				  <option value="11th">11th</option>
        				  <option value="12th">12th</option>
                </select>
              </div>
            </div>
          </div>


        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. Marital Status</label>
              <div class="col-sm-8">
                <select name="material_status" class="form-control" id="">
                <option value="">Select</option>
                  <option value="Single">Single </option>
                  <option value="Married">Married </option>
                  <option value="Divorced">Divorced </option>
                  <option value="Widow">Widow </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8. Religion</label>
              <div class="col-sm-8">
                <select name="religion" id="religion" class="form-control" value="" >
                <option value="">Select</option>
                  <option value="Hindu">Hindu </option>
                  <option value="Muslim">Muslim </option>
                  <option value="Sikh">Sikh </option>
                  <option value="Isai/Christian">Isai/Christian </option>
                  <option value="other">Other </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"></label>
              <div class="col-sm-8"> </div>
            </div>
          </div>
          <div class="col-sm-6" id="religion_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8.i. Please Specify</label>
              <div id="other_religion_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_religion" name="other_religion" id="other_religion"  value="" >
                  <span class="other_religion_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.a. Category<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="category" class="form-control" id="category" data-validate="required" data-message-required="This field is required">
                <option value="">Select</option>
                  <option value="SC" >SC </option>
                  <option value="ST">ST </option>
                  <option value="OBC">OBC </option>
                  <option value="General">General </option>
				          <option value="EBC">EBC</option>
                  <option value="other">Other </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.b. Caste Name<span class="color-white">*</span></label>
              <div  class="col-sm-8 ">
                
			<select name="cast"  class="form-control" id="caste" data-validate="required" >
			    <option value="">Select</option>
                  <?php foreach($castes_list as $crow1):  ?>
                  <option value="<?php echo $crow1['id'];?>"><?php echo $crow1['caste_name']; ?></option>
                  <?php  endforeach;?>

                </select>
              </div>

            </div>
          </div>
        </div>
        <div class="row" >
          <div class="col-sm-6" id="catagory_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.a.i. Please Specify</label>
              <div  id="other_cast_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_cast" name="other_cast" id="other_cast"
                                value=""  autofocus>
                  <span class="other_cast_msg color-red"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6" id="other_cast_name" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.b.i. Please Specify</label>
              <div  id="other_cast_name_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_cast_name" name="other_cast_name" 
                                value=""  autofocus>
                  <span class="other_cast_name_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. Father's Name </label>
              <div id="fname_fr_grp" class="col-sm-8 ">
                <input type="text" class="form-control fname" name="father" id="father"
                                value="" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" />
    <span id="error" class="hide">* Special Characters not allowed</span>
      <span class="fname_msg  color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Mother's Name </label>
              <div id="mname_fr_grp" class="col-sm-8 ">
                <input type="text" class="form-control mname" name="mother_name" id="mother_name"
                                value="" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" />
    <span id="error" class="hide">* Special Characters not allowed</span>
      <span class="mname_msg  color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Address</label>
              <div id="postaladdress_fr_grp"  class="col-sm-8">
                <textarea name="postaladdress" class="form-control postaladdress"  class="resize-none"></textarea>
                <span class="postaladdress_msg  color-red"></span>
              </div>

            </div>

          </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Contact No.</label>
              <div id="contact_fr_grp" class="col-sm-8 ">
               <input type="text" class="form-control contact"  name="contact_no" id="contact_no" onkeypress="return isNumberKey(event)" 
                                value="" autofocus maxlength="10" />

                                  <span class="contact_msg  color-red"></span>
              </div>
            </div>
          </div>
		  
		   </div>
		 <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">14. State<span class="color-white">*</span></label>
              <div class="col-sm-8">

                <select name="state" class="form-control" id="state" data-validate="required">
                <option value="">Select</option>
                  <?php foreach($states_list as $crow1):  ?>
                  <option value="<?php echo $crow1['area_id'];?>" <?php if($state_id===$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>
                  <?php  endforeach;?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15. District <span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="choices" id="choices" class="form-control dist"  data-validate="required">
                  <?php foreach($district_list as $crow2):  ?>
                  <option value="<?php echo $crow2['area_id'];?>" <?php if($district_id==$crow2['area_id']){ echo 'selected'; }  ?>><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
              </div>
            </div>
          </div>
		  </div>
		  <div class="row">
          <div class="col-sm-6">
             <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">16. Block <span class="color-white" id="outstr">*</span></label>
              <div class="col-sm-8" id='inside'>
                <select name="block" class="form-control" id="block">
                  <option value="" >Select</option>
                  <?php foreach($blocks_list as $crow3):  ?>
                  <option value="<?php echo $crow3['area_id'];?>" ><?php echo $crow3['area_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
                <span class="block-err-msg  color-red"></span>
              </div>
                              
               <div class="col-sm-8" style="display:none;" id="outside">
                <input type="text" class="form-control block" maxlength="35"   name="blockout" id="blockout"   value="">
            </div>
            </div>
          </div>
		 <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">17. Police Station </label>
              <div class="col-sm-8">
                <select name="police_station" class="form-control" id="ps" >
                  <option value="" >Select</option>
                  <?php foreach($police_station_list as $crow3):  ?>
                  <option value="<?php echo $crow3['id'];?>" ><?php echo $crow3['police_station_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
              </div>
               <div class="col-sm-8" style="display:none;" id="outside_polic">
                <input type="text" class="form-control block" maxlength="35"   name="police_stationout" id="police_stationout"   value="">
            </div> 
            </div>
          </div>
		   </div>
		   <div class="row">
           <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">18. Panchayat Name</label>
              <div id="panchayat_name_fr_grp" class="col-sm-8 ">
               <!--<input type="text" class="form-control panchayat_name" name="panchayat_name" id="panchayat_name" 
                                value="" autofocus />

                                  <span class="panchayat_name_msg  color-red"></span>-->
				 <select name="panchayat_names" class="form-control" id="panchayat_names" >
                  <option value="" >Select</option>
                  
                </select>
              </div>
              <div class="col-sm-8" style="display:none;" id="outside_panchayat">
                <input type="text" class="form-control block" maxlength="35"   name="panchayat_namesout" id="panchayat_namesout"   value="">
            </div>
            </div>

          </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">19. Pin Code</label>
              <div id="pin_code_fr_grp" class="col-sm-8 ">
               <!--<input type="text" class="form-control pin_code" name="pin_code" id="pin_code" 
                                value="" autofocus />

                                  <span class="pin_code_msg  color-red"></span>-->
				<select name="pincode" class="form-control" id="pincode" >
                  <option value="" >Select</option>
                  <?php foreach($pincode_list as $crow3):  ?>
                  <option value="<?php echo $crow3['id'];?>" ><?php echo $crow3['pincode']."-".$crow3['post_office_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
								  
              </div>
               <div class="col-sm-8 pincode_from_grp" style="display:none;" id="outside_pincode">
                <input type="text" class="form-control "  name="pincode_out" id="pincode_form_grp" autofocus maxlength="6" onkeypress="return isNumberKey(event)"   value="">
                 <span class="pincode-err-msg  color-red"></span>
            </div>
            </div>

          </div>
		   
		  </div>

		  <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">20. Birth Registered</label>
              <div class="col-sm-8">
                <select name="is_birth_registered" class="form-control" id="is_birth_registered" >
				 <option value="">Select</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
              </div>

            </div>
          </div>
		 
		 
		 <!--dipti-->
		  <div class="col-md-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">21.a Availability of Aadhaar card ?<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="is_adhar_card" class="form-control" id="is_adhar_card"  data-validate="required">
				   <option value="">Select </option>
				  <option <?php if($row['is_adhar_card'] =="Yes") echo 'selected'?> value="Yes">Yes </option>
                  <option <?php if($row['is_adhar_card']=="No") echo 'selected'?> value="No">No </option>
                </select>
              </div>

            </div>
          </div>
          </div>
		  <div class="row" id="adhar_card_no">
          <div class="col-md-6">
            <div class="form-group">
               <label for="field-1" class="col-sm-3 control-label" id ="appli_no">21 b.i Enrollment Application No</label>
               <div id="adhar_card_enrollment_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control adhar_card_enrollment_no" maxlength="15"  onkeypress="return isNumberKey(event)" name="adhar_card_enrollment_no" id="adhar_card_enrollment_no"   value="<?php echo $row['adhar_apply_no'];?>" autofocus>
                  <span class="adhar_card_enrollment_no_msg  color-red"></span>
              </div>

            </div>
          </div>
		  <div class="col-md-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label" id = "date_ene">21.b.ii Date Of Enrollment?</label>
               <div id="adhar_card_enrollment_date_fr_grp" class="col-sm-8">
			   <div class="input-group date" id="datepicker_adhar"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control adhar_card_enrollment_date" value="<?php 
				   if($row['adhar_apply_date']!='0000-00-00' ) { echo  $row['adhar_apply_date'];} ?>"   id="adhar_card_enrollment_date" name="adhar_card_enrollment_date"    >
                </div>
                
                  <span class="adhar_card_enrollment_date_msg  color-red"></span>
              </div>
			 

            </div>
          </div>
		  </div>
		  <!--dipti--->
		  <div class="row">
          <div class="col-sm-6"  id="adhar_card_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">21 b. Aadhaar Card No <span class="color-white">*</span></label>
              <div id="adhar_card_fr_grp" class="col-sm-8">
                <input type="text" class="form-control adhar_card" maxlength="12" onkeypress="return isNumberKey(event)" name="adhar_card" id="adhar_card" data-validate="required" data-message-required="This field is required"  value="" autofocus>
                  <span class="adhar_card_msg  color-red"></span>
              </div>
            </div>
          </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">22. Rescued by</label>
              <div class="col-sm-8">
                <select name="rescue_by" class="form-control" id="rescue_by">
				<option value="">Select</option>
                  <option value="LEO/LS/LRD"> LEO/LS/LRD </option>
                  <option value="JCWO"> JCWO </option>
                  <option value="CHILDLINE"> CHILDLINE </option>
                  <option value="NGO/CBO">NGO/CBO</option>
                  <option value="PUBLIC SERVANT" >Public Servant</option>
                  <option value="PRIs">PRIs</option>
                  <option value="Others"> Others </option>
                </select>
              </div><br>
			  <div id="rescue_by_other_fr_grp" class="col-sm-8 specify-head Rescue_by_other"  >
               22.i  please specify
			   <input type="text" class="form-control rescue_by_other" name="rescue_by_other" id="rescue_by_other" value="" autofocus>
         <span class="rescue_by_other_msg color-red"></span>
			  </div>
            </div>
          </div>
         </div>
		 <div class="row">
		  <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">23. Place of Rescue<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="basic_place_of_rescue" class="form-control" data-validate="required" id="basic_place_of_rescue">
					<option value="">Select</option>
                  <option value="Within">Within State</option>
                  <option value="Outside State">Outside State </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">24. Remarks<br/>
              (Please Specify)</label>
              <div id="other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other" name="other" id="other" value="" autofocus>
                 <span class="other_msg color-red"></span>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">25. Attach Inspection Report </label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput" >
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default_inspect;?>" alt="Inspection Report"> </div>
                  <div class="pdf_view"></div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new" >Select Proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image3" id="image3" accept="image/*" onchange="return ajaxFileUpload3(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput" onclick="clearbutton(); ">Remove</a> </div>
                </div>
				<div id="img-error3"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="col-sm-8"> </div>
            </div>
          </div>
        </div>
		<!--<div class="row">
		 <div class="col-sm-6" id="ispresent_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">22. Date of production Before CWC <span class="color-white">*</span></label>
              <div class="col-sm-8">
                <div class="input-group date" id="production_date"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="production_date" id="production_date"  value=""  data-validate="required"  >
                </div>
				        <span id="error_msg_production_with_in"></span>
              </div>
            </div>
          </div>
		  <div class="col-md-6"></div>
        <!--end of row--
      </div>-->
    
  </div>
  <!--------------------------------within state starts------------------------>
  <div id='withinstate'>
    <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading color-grey">
          <div class="child_list_head"> <i class="entypo-plus-circled"></i> </div>
          <div class="panel-title" > <i class="entypo-plus-circled"></i> Within State </div>
        </div>
		<div class="panel-body">
        <div class="row">
          <div class="col-sm-6" id="ename">
           <div class="form-group">
             <label for="field-1"  class="col-sm-3 control-label">1. Employer Name <span class="color-white">*</span></label>
               <div id="iemployer_name_fr_grp" class="col-sm-8">
                <input type="text" class="form-control iemployer_name" name="iemployer_name" id="iemployer_name"
                                value="" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" />
    <span id="error" class="hide">* Special Characters not allowed</span>
     <span class="iemployer_name_msg color-red"></span>
              </div>
            </div>
			
			
			
          </div>
          <div class="panel-title" class="ptitle"></div>
          <div class="col-sm-6">
            <div id="iemployer_detail_address_fr_grp" class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Employer Address</label>
              <div class="col-sm-8">
                <textarea class="form-control iemployer_detail_address" name="iemployer_detail_address" id="iemployer_detail_address" class="resize-none" ></textarea>
                <span class="iemployer_detail_address_msg color-red"></span>
              </div>

            </div>
          </div>
            </div>
          <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Contact No.</label>
              <div id="wcontact_no_fr_grp" class="col-sm-8">
               <input type="text" class="form-control wcontact_no"  data-validate="required" name="wcontact_no" id="wcontact_no" onkeypress="return isNumberKey(event)"
                                value="" autofocus  maxlength="10"/>

                 <span class="wcontact_no_msg color-red"></span>
              </div>
            </div>
          </div><br/><br/>
        </div><br/>
        <!--start -->
        <div id="addresspresent_no">
          <div class="row">
            <div class="panel-title" class="ptitle" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 i.  Place of Rescue</label>
                <div id="place_of_rescue_no_fr_grp" class="col-sm-8">
                  <input type="text" class="form-control place_of_rescue" name="place_of_rescue" id="place_of_rescue"  value=""  >
                  <span class="place_of_rescue_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 ii. State <span class="color-white">*</span></label>
                <div class="col-sm-8" id="with_state">
                  <select name="within_state" class="form-control" id="within_state" data-validate="required">
                    <?php  foreach($states_list_inside as $crow9):  ?>
                    
              
                    <option value="<?php echo $crow9['area_id'];?>" <?php if($state_id==$crow9['area_id']){ echo 'selected'; }  ?>><?php echo $crow9['area_name']; ?></option>
                    <?php  endforeach;  ?>
                  </select>
				    <span class="within_state_msg color-red"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel-title"class="ptitle" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iii.  District <span class="color-white">*</span></label>
                <div class="col-sm-8" id="with_dist">
                  <select name="within_district" id="within_district" class="form-control" data-validate="required">
                    <?php  foreach($district_list as $crow10):?>
                    <option value="<?php echo $crow10['area_id'];?>" <?php if($district_id==$crow10['area_id']){ echo 'selected'; }  ?>><?php echo $crow10['area_name']; ?></option>
                    <?php  endforeach;  ?>
                    <!-- js populates -->
                  </select>
				  	  <span class="within_dist_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iv. Block</label>
                <div class="col-sm-8">
                  <select name="within_block" class="form-control" id="within_block">
                    <option value="" >Select</option>
                    <?php foreach($blocks_list as $crow11):  ?>
                    <option value="<?php echo $crow11['area_id'];?>" ><?php echo $crow11['area_name']; ?></option>
                    <?php  endforeach;    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row padd-top">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Work involved in</label>
               <div class="col-sm-8">
                  <select name="work_involved" class="form-control"  id="work_involved" data-validate="required" >
                  <option value="">Select</option>
				   <?php foreach($workinvoice_list as $workinvoice):  ?>
                  <option value="<?php echo $workinvoice['id'];?>"><?php echo $workinvoice['sector']; ?></option>
                  <?php  endforeach;?>
				  <option value="Other">Other</option>
                </select>
              </div>
              <div id="iperiod_work_fr_grp" class="col-sm-8 left-margin2 workinvolved_other"  class="">5.i.Please Specify
                <input type="text" class="form-control iperiod_work" name="iperiod_work" id="iperiod_work" value=""  autofocus="autofocus"  />
                  <span class="iperiod_work_msg color-red"></span>
              </div>

            </div>
          </div>

          <div class="col-sm-6">
            <div class="col-md-3">6. Duration of Work </div>
            <div class="col-md-3 right-margin"  >
              <label for="field-1" class="control-label">No. of years</label>
              <input type="number" class="form-control" name="wyears" min="0" max="11" autofocus="autofocus"  onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}" />
            </div>
            <div class="col-md-3 right-margin">
              <label for="field-1" class="control-label">No. of months</label>
              <input type="number" class="form-control" name="wmonths"  value="" min="0" max="11" autofocus="autofocus" onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}"  />
            </div>
            <div class="col-md-3">
              <label for="field-1" class="control-label">No. of days</label>
              <input type="number" class="form-control" name="wdays"  value=""  min="0"  max="31" autofocus="autofocus" onKeyUp="if(this.value>31){this.value='31';}else if(this.value<0){this.value='0';}"  />
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>

<!-- Code added by ripon -->


           <div class="row padd-top">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. By Whom Child was Deployed</label>
              <div class="col-sm-8">
                <select name="by_whom_deployed" class="form-control"  id="by_whom_deployed">
                <option value="">Select</option>
                <option value="Self">Self</option>
                <option value="Parent">Parent/ Guardian</option>
                <option value="Relative">Relative</option>
                <option value="Agent">Agent</option>
				<option value="Other">Other</option>
                </select>
              </div>
              <div   id="by_whom_deployed_other1_fr_grp" class="col-sm-8 top-margin child_deployed_block_in"  >7.i.Please Specify
                <input type="text" class="form-control by_whom_deployed_other1" name="by_whom_deployed_other1" id="by_whom_deployed_other1" value=""  autofocus="autofocus"  />
               <span class="by_whom_deployed_other1_msg color-red"></span>
                </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8. Working Environment</label>
              <div class="col-sm-8">
                <select name="environment_in" class="form-control"  id="environment_in">
                <option value="">Select</option>
                <option value="Healthy">Healthy</option>
                <option value="Satisfactory">Satisfactory</option>
                <option value="Unhealthy">Unhealthy</option>
                <option value="Other"> Other</option>
                </select>
              </div>

              <div id="environment_in_other_fr_grp" class="col-sm-8 top-margin environment_block_in"  >8.i Please Specify
                <input type="text" class="form-control environment_in_other" name="environment_in_other" id="environment_in_other" value=""  autofocus="autofocus"  />
                 <span class="environment_in_other_msg color-red"></span>
              </div>

            </div>
           </div>
          </div>



           <div class="row padd-top">

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9. Behaviour of Employer</label>
              <div class="col-sm-8">
                <select name="behaviour_of_employer" class="form-control"  id="behaviour_of_employer">
                <option value="">Select</option>
                <option value="Cordial">Cordial</option>
                <option value="Noncordial">Noncordial</option>
                <option value="Other">Other</option>
                </select>
              </div>
               <div id="behaviour_of_employer_other_fr_grp" class="col-sm-8 top-margin employer_behaviour_block_in"  >9.i.Please Specify
                <input type="text" class="form-control behaviour_of_employer_other" name="behaviour_of_employer_other" id="behaviour_of_employer_other" value=""  autofocus="autofocus"  />
                 <span class="behaviour_of_employer_other_msg color-red"></span>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. Any Complaint lodged at Police Station</label>
              <div class="col-sm-8">
                  <select name="complaint_lodge" class="form-control"  id="complaint_lodge">
				          <option value="">Select</option>
                  <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>

          </div>

     <!-- complain raised-->
	<div id="complaint_lodge_yes">
	 <div class="row top-margin">

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. i. FIR Number<span class="color-white">*</span></label>
              <div id="fir_no_fr_grp" class="col-sm-8">

               <input type="text" class="form-control fir_no" name="fir_no" id="fir_no" value="" autofocus />
                <span class="fir_no_msg color-red"></span>
              </div>
            </div>
          </div>

         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10.ii. Date of FIR</label>
              <div class="col-sm-8">
            	 <div class="input-group date" id="datepickerfir"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                 <input type="text"  class="form-control" name="fir_date" id="fir_date"  autofocus />

                </div>
			    <span id="error_msg2"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6 top-margin">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> 10.iii. Name of Police Station<span class="color-white">*</span></label>
              <div id="name_policestation" name="name_policestation" class="col-sm-8">
			        <select name="ps_within" class="form-control" id="ps" >

					<option value="" >Select</option>
                  <?php foreach($police_station_list as $crow3):  ?>
                  <option value="<?php echo $crow3['id'];?>" ><?php echo $crow3['police_station_name']; ?></option>
                  <?php  endforeach;  ?>
				  </select>
              <!-- <input   type="text" class="form-control name_policestation" name="name_policestation" id="name_policestation" value="" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"onpaste="return false;" />-->
                  <span id="error" class="resize-none hide">* Special Characters not allowed</span></br>
                  <span class="name_policestation_msg color-red"></span>
              </div>
            </div>
          </div>

          </div>
		  </div>
	 <!-- end-->

        <div class="row padd-top">

          <div class="col-sm-6">
            <div class="col-md-3">11. Total no. of Working Days in a week and Hour(s) per day</div>
            <div class="col-md-3 right-margin" >
              <label for="field-1" class="control-label">Days</label>
              <input type="number" class="form-control reste" name="working_days" id="working_days" min="0" max="7" autofocus="autofocus"  onKeyUp="if(this.value>7){this.value='7';}else if(this.value<0){this.value='0';}" />
            </div>
            <div class="col-md-4 right-margin">
              <label for="field-1" class="control-label">Hour(s) of Work</label>
              <input type="number" class="form-control reste" name="working_hours"  value="" id="working_hours"  min="0" max="24" autofocus="autofocus" onKeyUp="if(this.value>24){this.value='24';}else if(this.value<0){this.value='0';}"   />
            </div>
          </div>

         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Salary/ Honorarium (Per month)</label>
              <div id="salary_fr_grp"  class="col-sm-8">
              Amount (In Rs.)
               <input type="text" class="form-control salary" name="salary" id="salary" value="" onkeypress="return isNumberKey(event)" />
                <span class="salary_msg color-red"></span>
              </div>
            </div>
          </div>

          </div>

        <!--ripon -->


        <div class="row">
          <div class="panel-title ptitle" > </div>
        </div>
      </div>
    </div>
	</div>
  </div>
 <!-- ----------------------------end of within state -------------------------->
  <!--------------------------------- outside state start------------------------------->
  <div id='outsidestate' class="hideonly">
    <div class="col-md-12">
     <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading color-grey">
          <div class="child_list_head"> <i class="entypo-plus-circled"></i> </div>
          <div class="panel-title" > <i class="entypo-plus-circled"></i>
            <?php /*echo get_phrase('project_form');*/ ?>
            Outside State </div>
        </div>
		<div class="panel-body">
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.  Employer Name</label>
              <div id="employer_name_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control employer_name" name="employer_name" id="isemployer_name"  value="" >
                <span class="employer_name_msg color-red"></span>
              </div>
            </div>
          </div>
          <div id="employer_address_fr_grp"  class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Employer Address</label>
              <div class="col-sm-8">
                <textarea class="form-control employer_address" name="employer_address" id="otside_address" class="resize-none" ></textarea>
                  <span class="employer_address_msg color-red"></span>
              </div>

            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Contact No.</label>
              <div id="ocontact_no_fr_grp" class="col-sm-8">
               <input type="text"  class="form-control ocontact_no" name="ocontact_no" id="ocontact_no" onkeypress="return isNumberKey(event)"
                                value="" autofocus maxlength="10" />
                    <span class="ocontact_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <!--start-->
        <!--//end of condition div-->
        <div id="outsideaddress_no">
          <div class="row">
            <div class="panel-title ptitle"  > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 i.  Place of Rescue</label>
                <div id="place_of_rescue_out_fr_grp" class="col-sm-8">
                  <input type="text" class="form-control place_of_rescue_out" name="place_of_rescue_out" id="place_of_rescue_out"  value=""  >
                    <span class="place_of_rescue_out_msg color-red"></span>
                  </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 ii. State<span class="color-white">*</span></label>
                <div class="col-sm-8" id="out_state">
                  <select name="outside_state" class="form-control" id="outside_state" data-validate="required"  >
                    <option value="">Select State</option>
                    <?php  foreach($states_list_outside as $crow20):  ?>
                    <option value="<?php echo $crow20['area_id'];?>" <?php //if($state_id==$crow20['area_id']){ echo 'selected'; }  ?>><?php echo $crow20['area_name']; ?></option>
                    <?php  endforeach;?>
                  </select>
				   <span class="outsid color-red" id="outsid"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel-title ptitle"  > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iii.  District<span class="color-white">*</span></label>
                <div class="col-sm-8" id="out_dist">
                  <select name="outside_district" id="outside_district" class="form-control" data-validate="required">
                    <option value="">Select District</option>
                    <?php  foreach($district_list as $crow21):  ?>
                    <option value="<?php echo $crow21['area_id'];?>" <?php //if($district_id==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                    <?php  endforeach;?>
                    <!-- js populates -->
                  </select>
				    <span class="outsdistric color-red" id="outsdistric"></span>

                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iv. Block</label>
                <div class="col-sm-8">
                 <!--  <select name="outside_block" class="form-control" id="outside_block">
                    <option value="" >Select Block</option>
                    <?php //foreach($blocks_list as $crow22):  ?>
                    <option value="<?php //echo $crow22['area_id'];?>" ><?php //echo $crow22['area_name']; ?></option>
                    <?php  //endforeach;  ?>
                  </select>-->    
                      <input type="text" class="form-control work_involved_outside_other " name="outside_block" id="outside_block"   value=""  >                                             
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Work involved in</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="work_involved" id="hl3" value="" autofocus="autofocus"   />-->
                <select name="work_involved_outside" class="form-control"  id="work_involved_outside" data-validate="required">
                  <option value="">Select</option>
				   <?php foreach($workinvoice_list as $workinvoice):  ?>
                  <option value="<?php echo $workinvoice['id'];?>"><?php echo $workinvoice['sector']; ?></option>
                  <?php  endforeach;?>
					 <option value="Other">Other</option>
				</select>
              </div>
              <div id="work_involved_outside_other_fr_grp" class="col-sm-8 left-margin2 workinvolved_other2"  >5.i.Please Specify
                <input type="text" class="form-control work_involved_outside_other " name="work_involved_outside_other" id="work_involved_outside_other"   value=""  >
                  <span class="work_involved_outside_other_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Date of production before CWC</label>
              <div class="col-sm-8">
               <div class="input-group date" id="datepickerpr"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_production" id="date_of_production"   value=""  readonly>
                </div>
				              <span id="error_msg_production" ></span>
              </div>
            </div>
          </div>
        </div>


        <!--start-->
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <label for="field-1" class="col-sm-3 control-label">7. Name of CWC </label>
            <div class="form-group">
              <div id="name_of_cwc_fr_grp" class="col-sm-8">
                <input type="text" class="form-control name_of_cwc" name="name_of_cwc" id="name_of_cwc">
                <span class="name_of_cwc_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="field-2" class="col-sm-3 control-label"> 8. Location of concerned CWC</label>
            <div class="form-group">
              <div id="location_concern_fr_grp"  class="col-sm-8">

                <input type="text" class="form-control location_concern" name="location_concern" id="location" value="" autofocus="autofocus"   />
                <span class="location_concern_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <label for="field-2" class="col-sm-3 control-label">9. Details of Certificate, if any</label>
            <div class="form-group">
              <div class="col-sm-8">


                <input type="checkbox" name="details_of_certificate[]"
				value="AgeVerification" > <label>Age Verification</label><br>
                <input type="checkbox" name="details_of_certificate[]"
				 value="BondedLabour"  > <label> Bonded Labour</label><br />
                <input type="checkbox" name="details_of_certificate[]"
				value="MigrantLabour" > <label> Migrant Labour</label><br />
                <input type="checkbox" name="details_of_certificate[]" value="MedicalFitness" > <label> Medical Fitness</label><br />
                <input type="checkbox" name="details_of_certificate[]"  value="Art & Craft" > <label>Art & Craft</label><br />
                <input type="checkbox" name="details_of_certificate[]" value="none" class="cert_none"> <label>None</label><br />
                <input type="checkbox" name="details_of_certificate[]" value="Others" class="location" > <label>Others</label><br />
              </div>

              <div class="col-sm-8 location_other" id="location_other">9 i Please Specify
                <input type="text" class="form-control details_of_certificate_other" name="details_of_certificate_other" id="details_of_certificate_other" value=""  />
                <span class="details_of_certificate_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>




           <div class="row padd-top">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. By Whom Child was Deployed</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="oby_whom_deployed" class="form-control"  id="oby_whom_deployed">
                <option value="">Select</option>
                <option value="Self">Self</option>
                <option value="Parent">Parent/ Guardian</option>
                <option value="Relative">Relative</option>
                <option value="Agent">Agent</option>
				<option value="Other">Other</option>
                </select>
              </div>
              <div   id="by_whom_deployed_other_fr_grp"  class="col-sm-8 top-margin child_deployed_block_out" >10.i. Please Specify
                <input type="text" class="form-control by_whom_deployed_other" name="by_whom_deployed_other" id="by_whom_deployed_other" value=""  autofocus="autofocus"  />
                    <span class="by_whom_deployed_other_msg color-red"></span>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Working Environment</label>
              <div class="col-sm-8">
                <select name="oenvironment_in" class="form-control"  id="oenvironment_in">
                  <option value="">Select</option>
                  <option value="Healthy">Healthy</option>
                  <option value="Satisfactory">Satisfactory</option>
                  <option value="Unhealthy">Unhealthy</option>
                  <option value="Other">Other</option>
                </select>
              </div>

               <div id="oenvironment_in_other_fr_grp"   class="col-sm-8 top-margin environment_block_out"  >11.i.Please Specify
                <input type="text" class="form-control oenvironment_in_other" name="oenvironment_in_other" id="oenvironment_in_other" value=""  autofocus="autofocus"  />
                   <span class="oenvironment_in_other_msg color-red"></span>
              </div>

            </div>
          </div>
           </div>


           <div class="row padd-top">

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Behaviour of Employer </label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="obehaviour_of_employer" class="form-control"  id="obehaviour_of_employer">
                <option value="">Select</option>
                <option value="Cordial">Cordial</option>
                <option value="Noncordial">Noncordial</option>
                <option value="Other">Other</option>
                </select>
              </div>
              <div   id="obehaviour_of_employer_other_fr_grp"  class="col-sm-8 employer_behaviour_block_out margin-top" >12.i.Please Specify
                <input type="text" class="form-control obehaviour_of_employer_other" name="obehaviour_of_employer_other" id="obehaviour_of_employer_other" value=""  autofocus="autofocus"  />
                  <span class="obehaviour_of_employer_other_msg color-red"></span>

              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Any Complaint lodged at Police Station</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="ocomplaint_lodge" class="form-control"  id="ocomplaint_lodge">
				 <option value="">Select</option>
                  <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>
	    </div>
		<!--for 13 question-->
		<div id="complaint_yes">
		<div class="row padd-top">

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13 i. FIR Number<span class="color-white">*</span></label>
              <div id="ofir_no_fr_grp" class="col-sm-8">
                 <input type="text" class="form-control ofir_no" name="ofir_no" id="ofir_no" value=""  />
                  <span class="ofir_no_msg color-red"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13 ii. FIR Date</label>
              <div class="col-sm-8">
			  <div class="input-group date" id="datepickerfirout"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                 <input type="text" class="form-control" name="ofir_date" id="ofir_date" value="" readonly="readonly" />
                </div>
				 <span id="error_msg3"></span>
              </div>
            </div>
          </div>

          <div class="col-sm-6 top-margin">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. iii Name of Police Station<span class="color-white">*</span></label>
              <div id="policestation_name_fr_grp" class="col-sm-8">
	
                 <input type="text" class="form-control policestation_name" name="policestation_name" id="policestation_name" value="" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" />
                  <span id="error" class="resize-none">* Special Characters not allowed</span></br>
                  <span class="policestation_name_msg color-red"></span>
                </div>
            </div>
          </div>
	    </div>
		</div>

		<!--end-->

        <div class="row padd-top">

          <div class="col-sm-6">
            <div class="col-md-3">14. Total no. of Working Days in a week and Hour(s) per day</div>
            <div class="col-md-3" class="right-margin" >
              <label for="field-1" class="control-label">Days</label>
              <input type="number" class="form-control reste" name="oworking_days" id="oworking_days" min="0" max="7" onKeyUp="if(this.value>7){this.value='7';}else if(this.value<1){this.value='1';}"autofocus="autofocus"  />
            </div>
            <div class="col-md-4 right-margin">
              <label for="field-1" class="control-label">Hour(s) of Work</label>
              <input type="number" class="form-control reste"  name="oworking_hours" id="oworking_hours"  value="" min="0" max="24" onKeyUp="if(this.value>24){this.value='24';}else if(this.value<0){this.value='0';}"autofocus="autofocus"  />
            </div>
          </div>

         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15. Salary/ Honorarium (Per month)</label>
              <div id="osalary_fr_grp" class="col-sm-8">
              Amount (In Rs.)
               <input type="text" class="form-control osalary" name="osalary" id="osalary" value="" onkeypress="return isNumberKey(event)" />
               <span class="osalary_msg color-red"></span>

              </div>
            </div>
          </div>

          </div>

        <!--ripon -->

      </div>
    </div>
  </div>
  </div>
 <!-------------------------- end of outside state---------------------------->

  <div class="col-md-12"> </div>
  <div class="form-group top-margin">
    <div class="col-sm-offset-5 col-sm-7">
      <!-- <button type="button" class="btn btn-info" id="submit-save" onclick="return checkConfirm();"> Save</button> -->
      <button type="submit" id="submit-button" class="btn btn-info">Save</button>
      <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
      <span id="preloader-form"></span> </div>
      <?php $this->load->view("backend/staff/modal_msg_newReg.php");?>
  </div>
  </br></br>
  <?php echo form_close(); ?> </div>
  </div>
  </div>
 <!------------------------------ end of form---------------------------------->

<script src="assets/js/cust_validate.js"></script>
<script type="text/javascript">
var base_url="<?php echo base_url();?>";
</script>
<script src="assets/js/get_dist_block_list.js"></script>
<script>

  $(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
</script>

<script type="text/javascript">
var FromEndDate = new Date();
//console.log(FromEndDate);
$('#datetimepicker').datetimepicker({

        autoclose: true,
        todayBtn: true,
        endDate: FromEndDate,
        minuteStep: 10,
		

});


var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
</script>

	
<script>
	var FromEndDate = new Date();
$('#datepicker_adhar').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
</script>

<script>
var FromEndDate2 = new Date();
$('#datepickerfirout').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate2,
autoclose: true
});
</script>
	<script>
var FromEndDate1 = new Date();
$('#datepickerfir').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate1,
autoclose: true
});
</script>
	<script>
var FromEndDate2 = new Date();
$('#datepickerfirout').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate2,
autoclose: true
});
</script>
	<script>
var FromEndDate3 = new Date();
$('#datepickerpr').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate3,
autoclose: true
});


	</script>
	<script>

	</script>

<script>
	function getConfirmation(){
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ){
                  document.write ("User wants to continue!");
                  return true;
               }
               else{
                  document.write ("User does not want to continue!");
                  return false;
               }

            }
	 function ajaxFileUpload2(upload_field)
        {
		 var re_text = /\.jpg|\.png|\.jpeg/i;
         var filename = upload_field.value;
         //var imagename = filename.replace("C:\\fakepath\\","");
	         if (filename.search(re_text) == -1 && filename !='')
	         {
	             //alert("File must be an image");
					$("#img-error").html("File format error...Please provide a jpg/jpeg/png format");
					//document.getElementById("image").focus();
					// $("#image1").addClass("newClass");
	                //upload_field.form.reset();
	                document.getElementById("hidename_child").value = 2;
	             document.getElementById("submit-button").disabled = true;
	             return false;
	         }

	         else{
	        	 $("#img-error").html("");
	 			$("#image1").html("");
	 			 document.getElementById("hidename_child").value = "";
	 	         document.getElementById("submit-button").disabled = false;

	          }
			}
	 function ajaxFileUpload3(upload_field)
	 {
		 
	     var re_text = /\.jpg|\.pdf|\.png|\.jpeg/i;
	     var filename = upload_field.value;
	     var pdf_text=/\.pdf/i;
	     //var imagename = filename.replace("C:\\fakepath\\","");
	     if (filename.search(re_text) == -1 && filename !='')
	     {
	         //alert("File must be an image");
				$("#img-error3").html("File format error...Please provide a jpg/jpeg or pdf or png format");
				document.getElementById("image3").focus();
				 $("#image3").addClass("newClass");
	             upload_field.form.reset();
	         
	         return false;
	     }
	     else{
	    	 if(filename.search(pdf_text)!= -1)
		     	{
		         	console.log("pdf");
		     		$(".pdf_view").html('<img src="assets/images/pdf.png"/>');
		     		
		         }
		     	else{
		     		$(".pdf_view").html("");
		     	}
					$("#img-error3").html("");
				}
	 }

var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
		// specialKeys.push(32); //Right
        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ( (keyCode== 32) ||(keyCode >= 65 && keyCode <= 90) ||(keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            //document.getElementById("error").style.display = ret ? "none" : "inline";
           return ret;
		  // return false;
        }

		
		
		   $(document).ready(function () {
		      		 $('#work_involved_outside').change(function(){

				if($('#work_involved_outside').val() == "Other") {
					$('#work_involved_outside_other_fr_grp').show();
					
					 } else {
					
					$('#work_involved_outside_other_fr_grp').hide(); 
					 }
					 });
		    });
			
			
			$(document).ready(function () {
		      		 $('#work_involved').change(function(){

				if($('#work_involved').val() == "Other") {
					$('#iperiod_work_fr_grp ').show();
					
					 } else {
					
					$('#iperiod_work_fr_grp ').hide(); 
					 }
					 });
		    });
			
			
			//new police station
			
			
			$(document).ready(function(){
   $('#adhar_card').bind("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(document).ready(function(){
	   $('#working_days').bind("cut copy paste",function(e) {
	      e.preventDefault(); 
	   });
	});
$(document).ready(function(){
	   $('#working_hours').bind("cut copy paste",function(e) {
	      e.preventDefault(); 
	   });
	});
$(document).ready(function(){
	   $('#salary').bind("cut copy paste",function(e) {
	      e.preventDefault(); 
	   });
	});
$(document).ready(function(){
	   $('#osalary').bind("cut copy paste",function(e) {
	      e.preventDefault(); 
	   });
	}); 
$(document).ready(function(){
	   $('#oworking_days').bind("cut copy paste",function(e) {
	      e.preventDefault(); 
	   });
	}); 
$(document).ready(function(){
	   $('#oworking_hours').bind("cut copy paste",function(e) {
	      e.preventDefault(); 
	   });
	});

$(".reste").keypress(function(event) {
//	if (event.which == 101 || event.which == 69)
       if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
           return false;
       }
   });

// Image size

/*
$('#myfile').bind('change', function() {
  //this.files[0].size gets the size of your file.
  if(this.files[0].size > 200000){
		$("#size-error").html("File size should be less than 200KB");
		document.getElementById("submit-button").disabled = true;
	  }else{
			$("#size-error").html(" ");
			document.getElementById("submit-button").disabled = false;
		  }

});

function clearbutton(){ 
	$("#size-error").html(" ");
	document.getElementById("submit-button").disabled = false;
	
} */
$('#myfile').bind('change', function() {

	//$("img-id").css("display", "none")

	
	 //this.files[0].size gets the size of your file.
	 if(this.files[0].size > 2092318){
		 //alert(this.files[0].size);
	$("#size-error").html("File size should be less than 2MB");
	document.getElementById("submit-button").disabled = true;
	 }else{
	$("#size-error").html(" ");
	document.getElementById("submit-button").disabled = false;
	 }
	 
	 
	});


	</script>
	<script>
function clearbutton(){ 
$("#size-error").html(" ");
document.getElementById("hidename_child").value = "";

document.getElementById("submit-button").disabled = false;

}




</script>
	
