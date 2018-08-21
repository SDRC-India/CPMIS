
<?php $this->load->view("backend/staff/modal_msg_outsidechild.php");?>


<!----------------------child rescued page started---------------------------------->
<div class="row child_rescued">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?outside_childdetail">Back to list </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Rescued Child </div>
      </div>
      <div class="panel-body">
      
       <?php echo form_open('outside_childdetail/create_outside_rescued/', array('class' => 'form-horizontal form-groups-bordered validate project-addoutside', 'enctype' => 'multipart/form-data','name'=> 'basicForm')); 

			  ?>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
             <label for="field-1" class="col-sm-3 control-label">1.Child Photo <span class="color-white">*</span></label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default;?>" alt="Child image"> </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image" id="image" accept="image/*" onchange="return validate_fileupload(this);"  data-validate="required" data-message-required="This field is required">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput" onclick="clearbutton();">Remove</a> <br><p id="showmsg" style="color:red;"></p></div>
                </div>
                <div id="size-error" class="color-red"></div>
				<div id="img-error"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">2. Name Of The Child <span class="color-white">*</span></label>			  
                <div id="cname_form_grp" class="col-sm-8">
                <input type="text" class="form-control cname " name="cname" id="cname" value=""
                               data-validate="required" data-message-required="This field is required"
							  onkeypress="return IsAlphaNumeric(event);"  maxlength="60" onkeyup="leftTrim(this)"   />
   					 <span id="error" class="hide" >* Special Characters not allowed</span>
              </div>
				<span id="error_msg1"></span>
            </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">3. Gender <span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="gender" id="gender"  class="form-control"   data-validate="required">
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Third gender">Others</option>
                </select>
              </div>
              	<span id="error_msg2"></span>
            </div>
          </div>
        </div>
        <div class="row">         
           <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Is Date of Birth Available <span class="color-white">*</span></label>
              <div class="col-sm-8">
                 <select name="isdob" class="form-control" id="isdob">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              	<span id="error_msg2"></span>
            </div>
          </div>
           <div class="col-sm-6" id="ispresent_yes" >
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">4. Date of Birth<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <div class="input-group date" id="datepickerpr"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_birth" id="date_of_birth"   value=""  readonly  >
                </div>
              <span class="err_msg_birth color-red" style="display:none;"> Date Of Birth Should be Less than  Rescued Date</span>
              </br>                
				<span  class="error_msg_birthw color-red"  style="display:none;" id="">Date Of Birth Should be required</span>
              </div>
              
            </div>
          </div>
           <div class="col-sm-6" id="ispresent_no" >
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">4. Year <span class="color-white">*</span></label>
                <div class="col-sm-3">
                <!--  <label for="field-1" class="control-label">Age<span class="color-white">*</span></label>-->
              		 <div id="cname_form_grp" >
            		    <input type="text" class="form-control cname " name="age" id="age" value="" onkeypress="return isNumberKey(event)" maxlength="2" min="5" max="18" onkeyup="leftTrim(this)"    />
   						 <span id="error" class="hide" >* Special Characters not allowed</span>
   						 	<span style="display:none;" id="error_msg_year"  class="error_msg_year color-red" >Age Should be required</span>				 
              </div>
              </div> 
               <div class="col-sm-5">
            		  <div id="cname_form_grp" class="col-sm-4"><label for="field-1" class="control-label">Month:</label></div>
              			 <div id="cname_form_grp" class="col-sm-8">
            		 	   <input type="text" class="form-control" name="month" id="month" value="" onkeypress="return isNumberKey(event)" maxlength="2" min="1" max="11" onkeyup="leftTrim(this)"    />  									 
              				<span style="display:none;" id="error_msg_month"  class="error_msg_month color-red" ></span>
              				</div>
              </div>                 
            </div>
          </div>
          
        </div>
          <div class="row">        
		  <div class="col-sm-6">
               <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Mother's Name <span class="color-white">*</span></label>
                <div class="col-sm-8">			  
                <div id="cname_form_grp">
                <input type="text" class="form-control cname " name="mothname" id="mothname" value=""
                               data-validate="required" data-message-required="This field is required" onkeyup="leftTrim(this)" maxlength="60" />
   					 <span id="error" class="hide" >* Special Characters not allowed</span>
            	  </div>
				<span id="error_msg3"></span>
              </div>
            </div>
         </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">6. Father's Name<span class="color-white">*</span></label>
                <div class="col-sm-8">			  
                <div id="cname_form_grp">
                <input type="text" class="form-control cname " name="fname" id="fname" value=""
                               data-validate="required" data-message-required="This field is required" onkeyup="leftTrim(this)" maxlength="60" />
   					 <span id="error" class="hide" >* Special Characters not allowed</span>
            	  </div>
				<span id="error_msg4"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7.State Name</label>
              <div class="col-sm-8">
                <select name="state" class="form-control" id="state" >
                  <?php foreach($states_list_inside as $crow1):  ?>
                  <option value="<?php echo $crow1['area_id'];?>" <?php if($state_id===$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>
                  <?php  endforeach;?>
                </select>
              </div>
            </div>
            </div>
         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">7.i District Name Of Child</label>
              <div class="col-sm-8">
                  <select name="district_child" id="district_child" class="form-control dist"  >
                  <option>Select</option>
                  <?php foreach($district_bihar as $crow2):  ?>
                  <option value="<?php echo $crow2['area_id'];?>" <?php if($district_id==$crow2['area_id']){ echo 'selected'; }  ?>><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach; ?>
                </select>
                  
                  <span class="other_religion_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
           <div class="col-sm-6">
        	 <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7.ii Block Name Of Child </label>
              <div class="col-sm-8">
               <select name="child_block" class="form-control" id="child_block" >
                  <option value="" >Select</option>
                  <?php foreach($blocks_list as $crow3):  ?>
                  <option value="<?php echo $crow3['area_id'];?>" ><?php echo $crow3['area_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
                  <span class="other_religion_msg color-red"></span>
              </div>
            </div>
            </div>
            <div class="col-sm-6">
			   
            
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">7.iii Village Name Of The Child</label>
                <div class="col-sm-8">			  
                <div id="cname_form_grp" >
                <input type="text" class="form-control cname " name="village_name" id="village_name" maxlength="150" value="" 
                                />
   					 <span id="error" class="hide" >* Special Characters not allowed</span>
            	  </div>
				<span id="error_msg1"></span>
              </div>
            </div>
            
            
            
            
            
            </div>
        </div>
        <div class="row">
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8. Rescued Date<span class="color-white">*</span></label>
              <!-- <div class="input-group date" id="datepickerrescu"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="rescue_date" id="rescue_date"   value=""  readonly>
                </div>
                   <span class="other_religion_msg color-red"></span>-->
                    <div class="col-sm-8">
                <div class="input-group date" id="datepickerrescue"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="rescue_date" id="rescue_date"  value=""  data-validate="required" readonly  >
                </div>	
                <span class="err_msg_rlse color-red" style="display:none;">Rescued Date Should be Greater than  Date Of Birth</span>                
				        <span id="error_msg5"></span>
              </div>

            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">8.i Rescued By</label>
              <div id="other_religion_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_religion" name="rescu_by" id="rescu_by" maxlength="60"   value="" >
                  <span class="other_religion_msg color-red" id="error_msg6"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">         
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9. Nature Of Work Engaged In</label>
              <div id="other_religion_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_religion" maxlength="60" name="nuture_of_work" id="nuture_of_work"  value="" >
                  <span class="other_religion_msg color-red"></span>
             	 </div>
            </div>
          </div>
           <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">10 Child Rescued State</label>
              <div class="col-sm-8">
                <select name="outside_state" class="form-control" id="outside_state" data-validate="required"  >
                    <?php  foreach($states_list_outside as $crow20):  ?>
                    <option value="<?php echo $crow20['area_id'];?>" <?php //if($state_id==$crow20['area_id']){ echo 'selected'; }  ?>><?php echo $crow20['area_name']; ?></option>
                    <?php  endforeach;?>
                  </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row" >         
		   <div class="col-sm-6" >
             <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10.i Rescued District</label>
              <div  id="other_cast_fr_grp" class="col-sm-8">
               <select name="outside_district" id="outside_district" class="form-control" >
                    <option value="">Select District</option>
                    <?php  foreach($district_list as $crow21):  ?>
                    <option value="<?php echo $crow21['area_id'];?>" <?php //if($district_id==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                    <?php  endforeach;?>
                    <!-- js populates -->
                  </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">10.ii Rescued Block </label>
              <div id="fname_fr_grp" class="col-sm-8 ">
               
                                 <input type="text" class="form-control other_religion" name="rblock" id="rblock" maxlength="60"  value="" >
                
              </div>
            </div>
          </div>
        </div>
        <div class="row">         
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Employer Name <span class="color-white">*</span>  </label>
              <div id="mname_fr_grp" class="col-sm-8 ">
	 <input type="text" class="form-control mname" name="emp_name" maxlength="60" id="emp_name" data-validate="required"
                                value="" />
      <span class="mname_msg  color-red" id="error_msg7"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">11.i Address Of The Employer's Workplace <span class="color-white">*</span></label>
              <div id="postaladdress_fr_grp"  class="col-sm-8">
                <textarea name="eworkplace" id="eworkplace" class="form-control eworkplace" maxlength="260" onkeyup="leftTrim(this)" data-validate="required"   class="resize-none"></textarea>
                <span class="postaladdress_msg  color-red" id="postaladdress_msg"></span>
              </div>

            </div>

          </div>
        </div>
        <div class="row">         
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Type Of Certificate Issued <span class="color-white">*</span></label>
              <div id="contact_fr_grp" class="col-sm-8 ">
             		<select name="type_certificatee" class="form-control" onkeyup="leftTrim(this)" id="type_certificatee" data-validate="required">
		                <option value="">Select</option> 
		                <option value="Yes">Yes</option> 
		                 <option value="No">No</option> 
		              </select>
		              
		            
		                
                 <span class="contact_msg  color-red" id="contact_msg"></span>
              </div>
            </div>
          </div>
     <!--   <input id="text_tag_input" type="text" name="tags" />
          <input id="text_tag_attach" type="text" name="attach" />-->
          <input id="text_tag_input" type="hidden" name="tags" />
          <input id="text_tag_attach" type="hidden" name="attach" />
          
          <div class="col-sm-6" style="display:none;" id="show_certificate" >
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">12.i If Yes<span class="color-white">*</span></label>
                <div id="contact_fr_grp" class="col-sm-8 ">
                	 
		              <div>
        <label><input type="checkbox" class="show_text" name="colorCheckbox[]" onclick="validateAttachment();" value="Child Bonded Labour">Child Bonded Labour</label>
        <label><input type="checkbox" class="show_text" name="colorCheckbox[]" onclick="validateAttachment();" value="Child Labour">Child Labour</label>
        <label><input type="checkbox" class="show_text" name="colorCheckbox[]" onclick="validateAttachment();" value="Age">Age</label>
        <label><input type="checkbox" class="show_text" name="colorCheckbox[]" onclick="validateAttachment();" value="Others">Others</label>
        <span id="checkbox" style="color:red;"></span>
    </div> 
		              
		              
                <span class="certificate_msg  color-red"></span>
				<span class="color-red">* Selected Certificate Issued Same as Attachment File .</span>
              </div>
            </div>
          </div>
          
  <div id="show_attach">
  <div class="col-sm-8">
  <div class="form-group" id="child_bonded_lbr_id" style="display:none;">
              <label for="field-1" class="col-sm-3 control-label">A. Child Bonded Labour</label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput" >
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default_inspect;?>" alt="Inspection Report"> </div>
                  <div class="pdf_view"></div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new" >Select Proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file"  name="image1" id="image1" accept="image1/*" class="attachment" data-validate="required" data-message-required="This field is required" onchange="fileuploadnew()"  >
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a><p id="showmsg" style="color:red;"></p> </div>
                </div>
				<div id="img-error3"></div>
              </div>
            </div>
 </div> 
 <div class="col-sm-8">
  <div class="form-group" id="child_lbr_id" style="display:none;">
              <label for="field-1" class="col-sm-3 control-label">B. Child Labour</label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput" >
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default_inspect;?>" alt="Inspection Report"> </div>
                  <div class="pdf_view"></div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new" >Select Proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" class="attachment"  name="image2" id="image2" accept="image/*" onchange="fileuploadnew()"   >
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a><p id="showmsg" style="color:red;"></p> </div>
                </div>
				<div id="img-error3"></div>
              </div>
            </div>
  </div>
  <div class="col-sm-8">
  <div class="form-group" id="child_lbr_age" style="display:none;">
              <label for="field-1" class="col-sm-3 control-label">C. Age</label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput" >
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default_inspect;?>" alt="Inspection Report"> </div>
                  <div class="pdf_view"></div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new" >Select Proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" class="attachment"  name="image3" id="image3" accept="image/*" onchange="fileuploadnew()"  >
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a><p id="showmsg" style="color:red;"></p> </div>
                </div>
				<div id="img-error3"></div>
              </div>
            </div>
  </div>
  <div class="col-sm-8">
  <div class="form-group" id="child_lbr_other" style="display:none;">
              <label for="field-1" class="col-sm-3 control-label">D.Other</label>
              <div class="col-sm-5">
                
                   <input type="text" class="form-control cname " name="others_form" id="others_form" value=""
                                placeholder="Please Specify" /> 
                    <span class="err_specify color-red" style="display:none;"> Please Specify the name</span>            
                                
                     </br>          
                   <div class="fileinput fileinput-new" data-provides="fileinput" >
                  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> <img class="img-thmb" src="<?php echo $default_inspect;?>" alt="Inspection Report"> </div>
                  <div class="pdf_view"></div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new" >Select Proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" class="attachment"  name="image4" id="image4" accept="image/*" onchange="fileuploadnew()" >
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a><p id="showmsg" style="color:red;"></p> </div>
                </div>            
                               
                                
                </div>
				<div id="img-error3"></div>
              </div>
            </div>
            </div>
  </div>  		  
 </div>
  </div>

  <div class="col-md-12"> </div>
  <div class="form-group top-margin">
    <div class="col-sm-offset-5 col-sm-7">
      <!-- <button type="button" class="btn btn-info" id="submit-save" onclick="return checkConfirm();"> Save</button> -->
      <button type="submit" id="submit-button" class="btn btn-info" onclick="return validcheck();">Save</button>
      <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
      <span id="preloader-form"></span> </div>
      <?php $this->load->view("backend/staff/modal_msg_outsideconf.php");?>
  </div>
  </br></br>
  <?php echo form_close(); ?> </div>
  </div>
  </div>
 <!------------------------------ end of form---------------------------------->

<script src="assets/js/outside_staterescue.js"></script>
<script type="text/javascript">
var base_url="<?php echo base_url();?>";
</script>


<style>
span.validate-has-error {
    color: red;
}
</style>
<script>
function clearbutton(){ 
$("#size-error").html(" ");
document.getElementById("submit-button").disabled = false;

}
</script>