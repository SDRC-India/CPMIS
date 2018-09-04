
<?php include "modal_msg_edit.php";?>
<?php
foreach ($edit_child_data as $row):

if($role_id==8) {
$datapx['is_dcpo']='Y';
$this->db->where('child_id', $row['child_id']);
$this->db->update('child_basic_detail', $datapx);

}

?>
<?php //echo 	$inspect_path.$row['child_id'] ;
$this->load->view("backend/staff/modal_msg.php");?>
<!-----------------------start of basic detail-------------------------------->

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?child_rescued_list">List/Edit Rescued Child </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>

          Rescued Child - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('child_rescued_list/ChilldRescuedRecord/update/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data', 'name'=> 'basicForm')); ?>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Child Photo</label>

              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-thmb" data-trigger="fileinput"> <img class="img-thmb" id="imgchild"  src="<?php if(file_exists($upload_path.$row['child_id'].'.jpg')) { echo $upload_path.$row['child_id'].'.jpg'; }else{ echo $default;} ?>" onclick="display_child_image();" alt="..."> </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Change</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image" id="myfile" accept="image/*" onchange="return ajaxFileUpload2(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" onclick="clearbutton();" data-dismiss="fileinput">Remove</a> </div>
                </div>
                <div id="size-error" class="color-red"></div>
				<div id="img-error"></div>
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
              Rescue</label>
			   <div class="col-sm-8">
             	<div class='input-group date' id='datetimepicker'>
					<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                   <input type="text" class="form-control" name="idate_of_rescue" id="idate_of_rescue"
				   value="<?php echo $row['idate_of_rescue']; ?>" readonly="readonly" disabled="disabled">

                </div>
				<span id="error_msg1"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Name of the Child

              <span class="color-white">*</span>

              </label>
              <div class="col-sm-8">
                <input id="cname_form_grp" type="text" class="form-control cname" name="cname" id="cname" data-validate="required"
                 value="<?php echo $row['child_name']; ?>" data-message-required="This field is required"  onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" />
          <span class="cname_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4. Sex <span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="gender" class="form-control appe-none"   required>
                  <option value="">Select</option>
                  <option value="Male" <?php if($row['sex']=='Male') echo 'selected'; ?>>Male</option>
                  <option value="Female" <?php if($row['sex']=='Female') echo 'selected'; ?>>Female</option>
                  <option value="Third gender" <?php if($row['sex']=='Third gender') echo 'selected'; ?>>Others</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.a. Is Date of Birth Available </label>
              <div class="col-sm-8">
                <select name="isdob" class="form-control"    id="isdob">
                  <option value="Yes" <?php if($row['isdob']=='Yes') echo 'selected'; ?>> Yes</option>
                  <option value="No" <?php if($row['isdob']=='No') echo 'selected'; ?>> No</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
	<!--  	    <div class="col-sm-6" id="ispresent_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.b Date of Birth<span class="color-white">*</span></label>
              <div class="col-sm-8">
               <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" name="dob" id="dob" data-validate="required"
                               data-message-required="<?php //echo get_phrase('value_required'); ?>" value="<?php //echo $row['dob']; ?>"
							    readonly  >
                </div>
				<span id="error_msg"></span>
              </div>
            </div>
          </div>-->

     <div class="col-sm-6" id="ispresent_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5.b Date of Birth<span class="color-white">*</span></label>
              <div class="col-sm-8">
               <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" name="dob" id="dob" data-validate="required"
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php if($row['isdob']=='Yes') {echo $row['dob'];}else{echo "";} ?>"
							      >
                </div>
				<span id="error_msg"></span>
              </div>
            </div>
          </div>








          <div class="col-sm-6" id="ispresent_no">
		   <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">5.b.i. Year<span class="color-white">*</span></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" name="year" id="year" data-validate="required" min="5" max ="17"
				   onblur="if(this.value>17){this.value='17';}else if(this.value<5){this.value='5';}" data-message-required="<?php echo get_phrase('value_required'); ?>"
                                value="<?php echo $row['year']; ?>"   >
                </div>
              </div>
            </div>
            <div class="col-sm-6 left-margin1">
              <div class="form-group">
                <label for="field-1" class="col-sm-5 control-label">5.b.ii. Month<span class="color-white">*</span></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" name="month" id="month"   data-validate="required" min="0" max ="11"
				  onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}" value="<?php echo $row['month']; ?>"  >
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
                  <option value="Illiterate" <?php if($row['education']=='Illiterate') echo 'selected'; ?>>Illiterate</option>
                  <option value="1st" <?php if($row['education']=='1st') echo 'selected'; ?>>1st</option>
                  <option value="2nd" <?php if($row['education']=='2nd') echo 'selected'; ?>>2nd</option>
                  <option value="3rd" <?php if($row['education']=='3rd') echo 'selected'; ?>>3rd</option>
                  <option value="4th" <?php if($row['education']=='4th') echo 'selected'; ?>>4th</option>
                  <option value="5th" <?php if($row['education']=='5th') echo 'selected'; ?>>5th</option>
                  <option value="6th" <?php if($row['education']=='6th') echo 'selected'; ?>>6th</option>
                  <option value="7th" <?php if($row['education']=='7th') echo 'selected'; ?>>7th</option>
                  <option value="8th" <?php if($row['education']=='8th') echo 'selected'; ?>>8th</option>
                  <option value="9th" <?php if($row['education']=='9th') echo 'selected'; ?>>9th</option>
                  <option value="10th" <?php if($row['education']=='10th') echo 'selected'; ?>>10th</option>
				  <option value="11th" <?php if($row['education']=='11th') echo 'selected'; ?>>11th</option>
				  <option value="12th" <?php if($row['education']=='12th') echo 'selected'; ?>>12th</option>
                </select>
              </div>
            </div>
          </div>

        </div>
        <div class="row" >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. Marital Status</label>
              <div class="col-sm-8">
                <select name="material_status" class="form-control" id="">
                  <option value="">Select</option>
                  <option value="Single"  <?php if($row['material_status']=='Single') echo 'selected'; ?>>Single </option>
                  <option value="Married"  <?php if($row['material_status']=='Married') echo 'selected'; ?>>Married </option>
                  <option value="Divorced"  <?php if($row['material_status']=='Divorced') echo 'selected'; ?>>Divorced </option>
                  <option value="Widow"  <?php if($row['material_status']=='Widow') echo 'selected'; ?>>Widow </option>
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
                  <option value="Hindu" <?php if($row['religion']=='Hindu') echo 'selected'; ?>>Hindu</option>
                  <option value="Muslim" <?php if($row['religion']=='Muslim') echo 'selected'; ?>>Muslim</option>
                  <option value="Sikh" <?php if($row['religion']=='Sikh') echo 'selected'; ?>>Sikh</option>
                  <option value="Isai/Christian" <?php if($row['religion']=='Isai/Christian') echo 'selected'; ?>>Isai/Christian</option>
                  <option value="other" <?php if($row['religion']=='other') echo 'selected'; ?>>Other</option>
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
                <input type="text" class="form-control other_religion" name="other_religion" id="other_religion" value="<?php echo $row['other_religion']; ?>" >
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
                <select name="category" data-validate="required" class="form-control" id="category" data-validate="required" data-message-required="This field is required">
                  <option value="">Select</option>
                  <option value="SC" <?php if($row['category']=='SC') echo 'selected'; ?>>SC</option>
                  <option value="ST" <?php if($row['category']=='ST') echo 'selected'; ?>>ST</option>
                  <option value="OBC" <?php if($row['category']=='OBC') echo 'selected'; ?>>OBC</option>
                  <option value="General" <?php if($row['category']=='General') echo 'selected'; ?>>General</option>
				   <option value="EBC" <?php if($row['category']=='EBC') echo 'selected'; ?>>EBC</option>
                  <option value="other" <?php if($row['category']=='other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.b. Caste Name</label>
			  <div  class="col-sm-8 ">
              <select name="cast"  class="form-control" id="caste" >
			    <option value="">Select</option>
                  <?php foreach($castes_list as $crow1):  ?>
                  <option <?php if($row['cast']==$crow1['id']) echo "selected"?>  value="<?php echo $crow1['id'];?>"><?php echo $crow1['caste_name']; ?></option>
                  <?php  endforeach;?>
                </select>
				</div>
            </div>
          </div>
        </div>
        <div class="row" >
          <div class="col-sm-6" id="catagory_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.i. Please Specify</label>
              <div  id="other_cast_fr_grp" class="col-sm-8">
                <input type="text" class="form-control" name="other_cast" id="other_cast"
                               value="<?php echo $row['other_cast']; ?>" autofocus>
                               <span class="other_cast_msg color-red"></span>

              </div>
            </div>
          </div>
		  <div class="col-sm-6" id="other_cast_name" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.b.i. Please Specify</label>
              <div  id="other_cast_name_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other_cast_name" value="<?php echo $row['caste_name_other'];?>" name="other_cast_name" 
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
              <div id="fname_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control fname" name="father" id="father"
                 value="<?php echo $row['father_name']; ?>" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" />
                 <span class="fname_msg  color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Mother's Name </label>
              <div id="mname_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control mname" name="mother_name" id="mother_name" value="<?php echo $row['mother_name']; ?>"
				onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" />
          <span class="mname_msg  color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="postaladdress_fr_grp"  class="col-sm-6">
            <div  class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Address</label>
              <div class="col-sm-8">
                <textarea name="postaladdress" class="form-control postaladdress"  class="resize-none"><?php echo $row['postal_address']; ?></textarea>
                  <span class="postaladdress_msg  color-red"></span>
              </div>
            </div>
          </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Contact No.</label>
              <div id="contact_fr_grp" class="col-sm-8">
                <input type="text" class="form-control contact_no" name="contact_no" id="contact_no" 
                                value="<?php echo $row['contact_no']; ?>" onkeypress="return isNumberKey(event)"  maxlength="10" />
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
                    <option value="" >Select</option>
                  <?php  foreach($states_list as $crow1):  ?>
                  <option value="<?php echo $crow1['area_id'];?>" <?php if($row['state']==$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
              </div>
            </div>
          </div>
        
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15.District<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="choices" id="choices" class="form-control" data-validate="required">
                  <?php $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $row['state']))->result_array();
                       foreach($child_dist as $crow2): ?>
                       <option value="<?php echo $crow2['area_id'];?>" <?php if($row['district']==$crow2['area_id']){ echo 'selected'; }  ?>><?php echo $crow2['area_name']; ?></option>

                    <?php endforeach; ?>

                </select>
              </div>
            </div>
          </div>
		  </div>
        <!--end of state div-->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">16. Block<span class="color-white" id="outstr">*</span></label>
              <div class="col-sm-8" <?php if($row['state']!='IND010'){ ?> style="display:none;" <?php } ?> id='inside' >
                <select name="block" class="form-control" id="block"  data-message-required="<?php echo get_phrase('value_required'); ?>" >
                  <option value="" >Select</option>
                  <?php $child_block = $this->db->select('*')->where('parent_id',$row['district'])->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

                      foreach($child_block as $crow3):
                                 ?>
                 <option value="<?php echo $crow3['area_id'];?>"  <?php if($row['block']==$crow3['area_id']){ echo 'selected'; }  ?> ><?php echo $crow3['area_name']; ?></option>
                 <?php endforeach; ?>
                </select>
                <span class="block-err-msg  color-red"></span>
              </div>
               <div class="col-sm-8" <?php if($row['state']=='IND010'){ ?> style="display:none;" <?php } ?> id="outside">
                <input type="text" class="form-control block" maxlength="35"   name="blockout" id="blockout"   value="<?php echo $row['block'] ; ?>">
            </div>
            </div>
          </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">17. Police Station</label>
              <div class="col-sm-8">
                <select name="police_station" class="form-control" <?php if($row['state']!='IND010'){ ?> style="display:none;" <?php } ?> id="ps" >
                  <option value="" >Select</option>
                  <?php foreach($police_station_list as $crow3):  ?>
                  <option value="<?php echo $crow3['id'];?>" <?php if($crow3['id']==$row['police_station']) echo 'selected';?> > <?php echo $crow3['police_station_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
              </div>
              <div class="col-sm-8" <?php if($row['state']=='IND010'){ ?> style="display:none;" <?php } ?> id="outside_polic">
                <input type="text" class="form-control block" maxlength="35"   name="police_stationout" id="police_stationout"   value="<?php echo $row['police_station'] ; ?>">
            </div> 
            </div>
          </div>
        </div>
		<div class="row">
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">18. Panchayat Name</label>
              <div class="col-sm-8 " <?php if($row['state']!='IND010'){ ?> style="display:none;" <?php } ?> id="panchayat_name_fr_grp" >
				 <select name="panchayat_names" class="form-control" >
                  <option value="" >Select</option>
				   <?php foreach($panchayat_lists as $crow3):  ?>
                  <option value="<?php echo $crow3['id'];?>" <?php if($row['panchayat_name']==$crow3['id']) echo 'selected';?> ><?php echo $crow3['name']; ?></option>
                  <?php  endforeach;  ?>
                  
                </select>
              </div>
                <div class="col-sm-8" <?php if($row['state']=='IND010'){ ?> style="display:none;" <?php } ?> id="outside_panchayat">
                <input type="text" class="form-control block" maxlength="35"   name="panchayat_namesout" id="panchayat_namesout"   value="<?php echo $row['panchayat_name'] ; ?>">
            </div>
            </div>

          </div>

           <div class="col-sm-6">
           
            <div class="form-group" >
              <label for="field-1" class="col-sm-3 control-label">19. Pin Code</label>              
              <div  id="pin_code_fr_grp"  class="col-sm-8 ">
               <!--<input type="text" class="form-control pin_code" value="<?php echo $row['pincode']?>" name="pin_code" id="pin_code" 
                                value="" autofocus />

                                  <span class="pin_code_msg  color-red"></span>-->
				<select name="pincode" class="form-control" <?php if($row['state']!='IND010'){ ?> style="display:none;" <?php } ?> id="pincode">
                  <option value="" >Select</option>
                  <?php foreach($pincode_list as $crow3):  ?>
                  <option value="<?php echo $crow3['id']; ?>" <?php if($row['pincode']==$crow3['id']) echo 'selected';?> ><?php echo $crow3['pincode'].'-'.$crow3['post_office_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
              </div>
               <div class="col-sm-8" <?php if($row['state']=='IND010'){ ?> style="display:none;" <?php } ?> id="outside_pincode">
                <input type="text" class="form-control block" maxlength="6"   name="pincode_out" id="pincode_form_grp" autofocus maxlength="6" onkeypress="return isNumberKey(event)"  value="<?php echo $row['pincode'] ; ?>">
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
                  <option value="Yes" <?php if($row['is_birth_registered']=='Yes') echo 'selected'; ?>>Yes </option>
                  <option value="No" <?php if($row['is_birth_registered']=='No') echo 'selected'; ?>>No </option>
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
               <label for="field-1" class="col-sm-3 control-label" id ="appli_no">21 b.i Enrollment Application No </label>
               <div id="adhar_card_enrollment_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control adhar_card_enrollment_no"  onkeypress="return isNumberKey(event)" name="adhar_card_enrollment_no" id="adhar_card_enrollment_no"  value="<?php echo $row['adhar_apply_no'];?>"  autofocus>
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
				   if($row['adhar_apply_date']!='0000-00-00' ) { echo  $row['adhar_apply_date'];} ?>"   id="adhar_card_enrollment_date" name="adhar_card_enrollment_date"  >
                </div>
                
                  <span class="adhar_card_enrollment_date_msg  color-red"></span>
              </div>
			 

            </div>
          </div>
		  </div>
		  <!--dipti--->
		    <div class="row">
          <div class="col-sm-6" id="adhar_card_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">21.a Aadhaar Card No <span class="color-white">*</span></label>
              <div id="adhar_card_fr_grp" class="col-sm-8">
                <input type="text" class="form-control adhar_card"  onkeypress="return isNumberKey(event); removeerrormesg()" name="adhar_card" id="adhar_card"  value="<?php echo $row['adhar_card']; ?>" data-validate="required" maxlength="12" minlength="12" data-message-required="This field is required" autofocus>
              </div>
            </div>
          </div>
        
		
		
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">22. Rescued by</label>
              <div class="col-sm-8">
              
                <select name="rescue_by" class="form-control" id="rescue_by">
				 
				  <option value="">Select </option>
                  <option value="LEO/LS/LRD" <?php if($row['rescue_by']=='LEO/LS/LRD') echo 'selected'; ?>> LEO/LS/LRD </option>
                  <option value="JCWO" <?php if($row['rescue_by']=='JCWO') echo 'selected'; ?>> JCWO </option>
                  <option value="CHILD LINE"  <?php if($row['rescue_by']=='CHILDLINE') echo 'selected'; ?>> CHILD LINE </option>
                  <option value="CHILD LINE" hidden <?php if($row['rescue_by']=='CHILD LINE') echo 'selected'; ?>> CHILD LINE </option>
                  <option value="NGO/CBO" <?php if($row['rescue_by']=='NGO/CBO') echo 'selected'; ?>>NGO/CBO</option>
                  <option value="Public Servant" <?php if($row['rescue_by']=='PUBLIC SERVANT') echo 'selected'; ?>>Public Servant</option>
                  <option value="Public Servant" hidden <?php if($row['rescue_by']=='Public Servant') echo 'selected'; ?>>Public Servant</option>
                  <option value="PRIs" <?php if($row['rescue_by']=='PRIs') echo 'selected'; ?>>PRIs</option>
                  <option value="Others" <?php if($row['rescue_by']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="rescue_by_othervalue">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">22 i:Please Specify</label>
              <div id="rescue_by_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control rescue_by_other" name="rescue_by_other" id="rescue_by_other" value="<?php echo $row['rescue_by_other']; ?>"  >
                 <span class="rescue_by_other_msg color-red"></span>
                </div>
            </div>
          </div>
        </div>
		<!--end-->
        <div class="row">
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">23.Place of Rescue<span class="color-white">*</span></label>

              <div class="col-sm-8">
                <select name="basic_place_of_rescue" class="form-control"  data-validate="required" id="basic_place_of_rescue" >
					<option value="">Select</option>
                  <option value="Within" <?php if($row['basic_place_of_rescue']=='Within') echo 'selected'; ?>>Within State</option>
                  <option value="Outside State" <?php if($row['basic_place_of_rescue']=='Outside State') echo 'selected'; ?>>Outside State </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">24. Remarks</label>
              <div id="other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control other" name="other" id="other_field" value="<?php echo $row['other']; ?>" autofocus>
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
                <div class="fileinput fileinput-new" data-provides="fileinput">
                 <!--  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput">
                  <?php /* if (file_exists($inspect_path.$row['child_id'].'.jpg')) {
						echo '<a id="largeImage" onclick="display_image();" href="'.$inspect_path.$row['child_id'].'.jpg" target="_blank" ><img src="'.$inspect_path.$row['child_id'].'.jpg" width="150" height="100"></a>';
						}else if (file_exists($inspect_path.$row['child_id'] . '.pdf')){
						echo '<a id="largeImage" onclick="display_image();" href="'.$inspect_path.$row['child_id'].'.pdf" target="_blank" ><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists($inspect_path.$row['child_id'].'.png')) {
							echo '<a id="largeImage" onclick="display_image();" href="'.$inspect_path.$row['child_id'].'.png" target="_blank" ><img src="'.$inspect_path.$row['child_id'].'.png" width="150" height="100" /></a>';
						}
						else{
							echo '<img id="largeImage" onclick="display_image();" src="uploads/images.png" height="90px">';
							
						} */
					?>
					</div>-->
					
                  
                  <?php if(file_exists($inspect_path.$row['child_id'].'.pdf')) {                 	
                  	echo '<div class="fileinput-new img-thmb" ><a id="largeImage" onclick="display_image();" href="'.$inspect_path.$row['child_id'].'.pdf" target="_blank" ><img src="assets/images/pdf.png"/ ><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a></div>';                  	
                  }else{ ?>
                  <div class="fileinput-new thumbnail img-thmb" data-trigger="fileinput"> <img class="img-thmb" id="imginspct"  src="<?php if(file_exists($inspect_path.$row['child_id'].'.jpg')) { echo $inspect_path.$row['child_id'].'.jpg'; }else if(file_exists($inspect_path.$row['child_id'].'.pdf')) { echo "assets/images/pdf.png" ; }else if(file_exists($inspect_path.$row['child_id'].'.png')) { echo $inspect_path.$row['child_id'].'.png'; }else{ echo $default;} ?>" onclick="display_inspect_image();" alt="..." style="height:500px;"></div>
                   <?php } ?>
                   					 <div class="fileinput fileinput-new" data-provides="fileinput" style='display:block;'>
                   
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file">  <span class="fileinput-exists">Change</span> <span class="fileinput-new" >Change</span>
                    <input type="file" name="image3" id="image3" accept="image/*" onchange="return ajaxFileUpload3(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				
					
                <!--  <div class="pdf_view"></div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select Proof</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image3" id="image3" accept="image/*" onchange="return ajaxFileUpload3(this)">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>-->
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
                  <input type="text" class="form-control " name="production_date" id="production_date"  value="<?php echo $row['date_of_production_cwc']; ?>"  data-validate="required"  >
                </div>
				        <span id="error_msg_production_with_in"></span>
              </div>
            </div>
          </div>
		  <div class="col-md-6"></div>
        <!--end of row
      </div>-->
      </div>
    </div>
  </div>
  <!-- -------------------- end of basic detail--------------------->
  <!----------------------------- start within state----------------------------------->
  <div id='withinstate' <?php if($row['state']==$state_id)  { echo 'class="block"' ;} else { echo 'class="none"'; } ?>>
    <div class="col-md-12">
      <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading  color-grey bottom-margin">
          <div class="child_list_head"> <i class="entypo-plus-circled"></i> </div>
          <div class="panel-title" > <i class="entypo-plus-circled"></i> Within State </div>
        </div>
        <?php

			$within_data=$this->db->get_where('child_within_state' , array('child_id' => $row['child_id']))->result_array();

foreach ($within_data as $row2):
?>
		<div class="panel-body">
        <div class="row">
          <div class="col-sm-6" id="ename">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Employer Name <span class="color-white">*</span></label>
              <div id="iemployer_name_fr_grp" class="col-sm-8 controls">
                <input type="text" class="form-control iemployer_name" name="iemployer_name" id="iemployer_name" value="<?php echo $row2['employer_name']; ?>" data-validate="required" data-validation-required-message="This field is required"/>
                <span class="iemployer_name_msg color-red"></span>
              </div>
            </div>

          </div>
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Employer Address</label>
              <div id="iemployer_detail_address_fr_grp"  class="col-sm-8">
                <textarea class="form-control iemployer_detail_address" name="iemployer_detail_address" id="iemployer_detail_address"class="resize-none"><?php echo $row2['employer_detail_address']; ?></textarea>
                <span class="iemployer_detail_address_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Contact No.</label>
              <div  id="wcontact_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control wcontact_no" name="wcontact_no" id="wcontact_no" maxlength="10"
                                value="<?php echo $row2['wcontact_no']; ?>"  onkeypress="return isNumberKey(event)"   />
                                 <span class="wcontact_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div id="addresspresent_no">
          <div class="row">
            <div class="panel-title ptitle"  > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 i.  Place of Rescue</label>
                <div  id="place_of_rescue_no_fr_grp" class="col-sm-8">
                  <input type="text" class="form-control place_of_rescue" name="place_of_rescue" id="place_of_rescue"  value="<?php echo $row2['place_of_rescue']; ?>"  >
                    <span class="place_of_rescue_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 ii. State<span class="color-white">*</span></label>
                <div class="col-sm-8" id="statewithin">
                  <select name="within_state" class="form-control" id="within_state" data-validate="required">
                      <option value="" >Select</option>
                    <?php  foreach($states_list_inside as $crow9):  ?>
                    <option value="<?php echo $crow9['area_id'];?>" <?php if($row2['within_state']==$crow9['area_id']){ echo 'selected'; }  ?>><?php echo $crow9['area_name']; ?></option>
                    <?php  endforeach;  ?>
                  </select>
				          <span class="state_msg color-red"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel-title ptitle"  > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iii.  District<span class="color-white">*</span></label>
                <div class="col-sm-8" id="distwithin">
                  <select name="within_district" id="within_district" class="form-control" data-validate="required">
                      <option value="" >Select</option>
                      <?php $child_dist1 = $this->db->select('*')->where('parent_id',$row2['within_state'])->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
							
							
                                    foreach($child_dist1 as $crow10):
                                    ?>
                      <option value="<?php echo $crow10['area_id'];?>" <?php if($row2['within_district']==$crow10['area_id']){ echo 'selected'; }  ?>><?php echo $crow10['area_name'] ; ?></option>
                      <?php
                                endforeach;
                                ?>

                  </select>
				  				          <span class="dist_msg color-red"></span>

                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iv. Block</label>
                <div class="col-sm-8">
                  <select name="within_block" class="form-control" id="within_block">
                    <option value="" >Select</option>
                    <?php $child_block1 = $this->db->select('*')->where('parent_id',$row2['within_district'])->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
                                 foreach($child_block1 as $crow11):?>
                   <option value="<?php echo $crow11['area_id'];?>"  <?php if($row2['within_block']==$crow11['area_id']){ echo 'selected'; }  ?> ><?php echo $crow11['area_name']; ?></option>
                 <?php endforeach;?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" class="padd-top">
          <div class="col-sm-6">
            <div class="form-group top-margin">
              <label for="field-1" class="col-sm-3 control-label">5. Work involved in</label>
             <div class="col-sm-8">
             
                <select name="work_involved" class="form-control"  id="work_involved">
				       <option value="">Select</option>
				<?php
				if($row2['work_involved']=="Other"){
				?>
				 <option value="Other" selected >Other</option>
				 <?php foreach($workinvoice_list as $workinvoice):  ?>
				 <option value="<?php echo $workinvoice['id'];?>"   ><?php echo $workinvoice['sector']; ?></option>
				 <?php endforeach; }else{ ?>
				 				 <option value="Other"  >Other</option>

				 <?php  foreach($workinvoice_list as $workinvoice): ?>
					 <option value="<?php echo $workinvoice['id'];?>"  <?php if($row2['work_involved']==$workinvoice['id']){ echo 'selected'; }  ?> ><?php echo $workinvoice['sector']; ?></option>
				<?php
				endforeach;
				}
					
				?>
              
				  <!--
                  <option value="Brick-kiln" <?php //if($row2['work_involved']=='Brick-kiln') echo 'selected'; ?>>Brick-kiln</option>
                  <option value="Industries" <?php //if($row2['work_involved']=='Industries') echo 'selected'; ?>>Industries</option>
                  <option value="Hotel" <?php //if($row2['work_involved']=='Hotel') echo 'selected'; ?>>Hotel/Dhaba</option>
                  <option value="Flat/Houses" <?php //if($row2['work_involved']=='Flat/Houses') echo 'selected'; ?>>Flat/Houses</option>
                  <option value="Street Vendor" <?php //if($row2['work_involved']=='Street Vendor') echo 'selected'; ?>>Street Vendor</option>
                  <option value="Garage" <?php //if($row2['work_involved']=='Garage') echo 'selected'; ?>>Garage</option>
                  <option value="Other" <?php //if($row2['work_involved']=='Other') echo 'selected'; ?>>Other</option>-->
                </select>
              </div>

              <div id="iperiod_work_fr_grp" class="col-sm-8 left-margin2 workinvolved_other "> 5.i. Please Specify<span class="color-white">*</span>
                <input type="text" class="form-control iperiod_work" name="iperiod_work" id="iperiod_work" value="<?php echo $row2['period_work']?>"  autofocus="autofocus"  />
                <span class="iperiod_work_msg color-red"></span>
              </div>

            </div>
          </div>
          <div class="col-sm-6">
            <div class="col-md-3"> 6. Duration of Work </div>
            <div class="col-md-3" class="right-margin" >
              <label for="field-1" class="control-label">No. of years</label>
              <input type="number" class="form-control" name="wyears"  value="<?php echo $row2['wyears']; ?>"
			  min ="0" max="11" onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}" autofocus="autofocus"  />
            </div>
            <div class="col-md-3" class="right-margin">
              <label for="field-1" class="control-label">No. of months</label>
              <input type="number" class="form-control" name="wmonths"  value="<?php echo $row2['wmonths']; ?>"
			  min ="0" max="11" onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}"autofocus="autofocus"  />
            </div>
            <div class="col-md-3">
              <label for="field-1" class="control-label">No. of days</label>
              <input type="number" class="form-control" name="wdays"  value="<?php echo $row2['wdays']; ?>"  min="0" max="31"
			  onKeyUp="if(this.value>31){this.value='31';}else if(this.value<0){this.value='0';}" autofocus="autofocus"  />
            </div>
          </div>
        </div>

        <!-- Code added by Ripon Starts -->
        <div class="row padd-top" >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. By Whom Child was Deployed</label>
              <div class="col-sm-8">
                <select name="by_whom_deployed" class="form-control"  id="by_whom_deployed">
                  <option value="">Select</option>
                  <option value="Self" <?php if($row2['by_whom_deployed']=='Self') echo 'selected'; ?>>Self</option>
                  <option value="Parent" <?php if($row2['by_whom_deployed']=='Parent') echo 'selected'; ?>>Parent/Guardian</option>
                  <option value="Relative" <?php if($row2['by_whom_deployed']=='Relative') echo 'selected'; ?>>Relative</option>
                  <option value="Agent" <?php if($row2['by_whom_deployed']=='Agent') echo 'selected'; ?>>Agent</option>
                  <option value="Other" <?php if($row2['by_whom_deployed']=='Other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
              <div id="by_whom_deployed_other1_fr_grp" class="col-sm-8 margin-top child_deployed_block_in">7.i.Please Specify
                <input type="text" class="form-control by_whom_deployed_other1" name="by_whom_deployed_other1" id="by_whom_deployed_other1"
				value="<?php echo $row2['by_whom_deployed_other']; ?>"  autofocus="autofocus"  />
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
                  <option value="Healthy" <?php if($row2['environment_in']=='Healthy') echo 'selected'; ?>>Healthy</option>
                  <option value="Satisfactory" <?php if($row2['environment_in']=='Satisfactory') echo 'selected'; ?>>Satisfactory</option>
                  <option value="Unhealthy" <?php if($row2['environment_in']=='Unhealthy') echo 'selected'; ?>>Unhealthy</option>
                  <option value="Other" <?php if($row2['environment_in']=='Other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
              <div id="environment_in_other_fr_grp" class="col-sm-8 top-margin environment_block_in" >8.i.Please Specify
                <input type="text" class="form-control environment_in_other" name="environment_in_other" id="environment_in_other"
				value="<?php echo $row2['environment_in_other']; ?>"  autofocus="autofocus"  />
        <span class="environment_in_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row padd-top" >
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9. Behaviour of Employer</label>
              <div class="col-sm-8">
                <select name="behaviour_of_employer" class="form-control"  id="behaviour_of_employer">
                  <option value="">Select</option>
                  <option value="Cordial" <?php if($row2['behaviour_of_employer']=='Cordial') echo 'selected'; ?>>Cordial</option>
                  <option value="Noncordial" <?php if($row2['behaviour_of_employer']=='Noncordial') echo 'selected'; ?>>Noncordial</option>
                  <option value="Other" <?php if($row2['behaviour_of_employer']=='Other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
              <div id="behaviour_of_employer_other_fr_grp" class="col-sm-8 top-margin employer_behaviour_block_in" >9.i.Please Specify
                <input type="text" class="form-control behaviour_of_employer_other" name="behaviour_of_employer_other" id="behaviour_of_employer_other" value="<?php echo $row2['behaviour_of_employer_other']; ?>"  autofocus="autofocus"  />
                 <span class="behaviour_of_employer_other_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. Any Complaint lodged at Police Station</label>
              <div class="col-sm-8">
                <select name="complaint_lodge" class="form-control"  id="complaint_lodge">
				<option  value="">Select</option>
                  <option value="Yes" <?php if($row2['complaint_lodge']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row2['complaint_lodge']=='No') echo 'selected'; ?>>No</option>
                </select>
              </div>
            </div>
          </div>
        </div>
         <!-- complain raised-->
	<div id="complaint_lodge_yes" class="top-margin" >
	 <div class="row">

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10 i. FIR Number</label>
              <div id="fir_no_fr_grp"  class="col-sm-8">

               <input type="text" class="form-control fir_no" name="fir_no" id="fir_no" value="<?php echo $row2['fir_no']; ?>" autofocus />
                 <span class="fir_no_msg color-red"></span>
              </div>
            </div>
          </div>

         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10 ii. Date of FIR</label>
              <div class="col-sm-8">
            	<div class="input-group date" id="datepickerfir"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
               <input type="text" class="form-control" name="fir_date" id="fir_date" value="<?php echo $row2['fir_date']; ?>" autofocus readonly="readonly"/>
			   </div>
			   <span id="error_msg2"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6 top-margin">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10 iii. Name of Police Station</label>
              <div id="name_policestation_fr_grp" class="col-sm-8">
				
				 <select name="ps_within" class="form-control" id="name_policestation" >
                  <option value="" >Select</option>
                  <?php foreach($police_station_list1 as $crow3):  ?>
                  
                  <option value="<?php echo $crow3['id'];?>" <?php if($crow3['id']==$row2['name_policestation']) echo 'selected';?> > <?php echo $crow3['police_station_name']; ?></option>
                  <?php  endforeach;  ?>
                </select>
                 <span class="name_policestation_msg color-red"></span>
              </div>
            </div>
          </div>

          </div>
		  </div>
	 <!-- end-->
        <div class="row padd-top" >
          <div class="col-sm-6">
            <div class="col-md-3">11. Total no. of Working Days in a week and Hour(s) per day</div>
            <div class="col-md-3 right-margin" >
              <label for="field-1" class="control-label">Days</label>
              <input type="number" class="form-control" name="working_days"  id="working_days" min="0" max="7"
			   onKeyUp="if(this.value>7){this.value='7';}else if(this.value<0){this.value='0';}" autofocus="autofocus" value="<?php echo $row2['working_days']; ?>" />
            </div>
            <div class="col-md-4 right-margin" >
              <label for="field-1" class="control-label">Hour(s) of Work</label>
              <input type="number" class="form-control" name="working_hours"   id="working_hours" min="0" max="24"
			  onKeyUp="if(this.value>24){this.value='24';}else if(this.value<0){this.value='0';}" value="<?php echo $row2['working_hours']; ?>" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Salary/ Honorarium (Per month)</label>
              <div id="salary_fr_grp"  class="col-sm-8"> Amount (In Rs.)
                <input type="text" class="form-control salary" name="salary" max="7" id="salary" value="<?php echo $row2['salary']; ?>" onkeypress="return isNumberKey(event)" />
                <span class="salary_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <!--ripon -->
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6"> </div>
        </div>
      </div>
    </div>
	</div>
    <?php endforeach; ?>
  </div>
  <!-- ------------------------------ end of within state ------------------------------------------------->
  <!--------------------------- start of out side------------------------------------------------->
  <div id='outsidestate' <?php if($row['state']!=$state_id)  { echo 'class="block"'; } else { echo 'class="none"'; } ?>>
    <div class="col-md-12">
     <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading color-grey">
          <div class="child_list_head"> <i class="entypo-plus-circled"></i> </div>
          <div class="panel-title" > <i class="entypo-plus-circled"></i>
            <?php /*echo get_phrase('project_form');*/ ?>
            Outside State </div>
        </div>
        <?php

			$outside_data=$this->db->get_where('child_outside_state' , array('child_id' => $row['child_id']))->result_array();

foreach ($outside_data as $row3):
?>
		<div class="panel-body">
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.  Employer Name</label>
              <div  id="employer_name_fr_grp"  class="col-sm-8">
                <input type="text" class="form-control employer_name" name="employer_name" id="isemployer_name"  value="<?php echo $row3['employer_name']; ?>"  >
                <span class="employer_name_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Employer Address</label>
              <div  id="employer_address_fr_grp" class="col-sm-8">
                <textarea class="form-control employer_address" name="employer_address" id="otside_address" class="resize-none"><?php echo $row3['employer_address']; ?></textarea>
                <span class="employer_address_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Contact No </label>
              <div id="ocontact_no_fr_grp" class="col-sm-8">
                <input type="text" class="form-control ocontact_no" name="ocontact_no" id="ocontact_no" 

                              value="<?php echo $row3['ocontact_no']; ?>" onkeypress="return isNumberKey(event)" autofocus maxlength="10" />
                    <span class="ocontact_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div id="outsideaddress_no">
          <div class="row">
            <div class="panel-title ptitle"  > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 i.  Place of Rescue</label>
                <div id="place_of_rescue_out_fr_grp" class="col-sm-8">
                  <input type="text" class="form-control place_of_rescue_out" name="place_of_rescue_out" id="place_of_rescue_out"  value="<?php echo $row3['place_of_rescue_out']; ?>"  >
                  <span class="place_of_rescue_out_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 ii. State<span class="color-white">*</span></label>
                <div class="col-sm-8" id="out_state">
                  <select name="outside_state" class="form-control" id="outside_state" data-validate="required">
                    <option value="" >Select</option>
                    <?php foreach($states_list_outside as $crow20):  ?>
                    <option value="<?php echo $crow20['area_id'];?>" <?php if($row3['outside_state']==$crow20['area_id']){ echo 'selected'; }  ?>><?php echo $crow20['area_name']; ?></option>
                    <?php endforeach; ?>
                  </select>
				  	  <span class="outsid color-red" id="outsid"></span>

                </div>
              </div>
            </div>
          </div>
          <div class="row padd-top">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iii.  District<span class="color-white">*</span></label>
                <div class="col-sm-8" id="out_dist">
                  <select name="outside_district" id="outside_district" class="form-control" data-validate="required">
                    <?php $child_dist2 = $this->db->select('*')->where('parent_id',$row3['outside_state'])->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
                    ?><option>Select</option><?php 
                                  foreach($child_dist2 as $crow21): ?>
                                  
                    <option value="<?php echo $crow21['area_id'];?>" <?php if($row3['outside_district']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                    <?php  endforeach;    ?>

                  </select>
				  <span class="outsdistric color-red" id="outsdistric"></span>

                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 iv. Block</label>
                <div class="col-sm-8">
                      <input type="text" class="form-control" name="outside_block" id="outside_block"  value="<?php echo $row3['outside_block'] ; ?>" autofocus >
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
                <select name="work_involved_outside" class="form-control"  id="work_involved_outside">
				   <option value="">Select</option>
				<?php				
				if($row3['work_involved_outside']=="Other"){
				?>
				 <option value="Other" selected >Other</option>
				 <?php foreach($workinvoice_list as $workinvoice):  ?>
				 <option value="<?php echo $workinvoice['id'];?>"   ><?php echo $workinvoice['sector']; ?></option>
				 <?php endforeach; }else{ ?>
				 <option value="Other"  >Other</option>
				 <?php foreach($workinvoice_list as $workinvoice): ?>
					 <option value="<?php echo $workinvoice['id'];?>"  <?php if($row3['work_involved_outside']==$workinvoice['id']){ echo 'selected'; }  ?> ><?php echo $workinvoice['sector']; ?></option>
				<?php
				endforeach;
				}
					
				?>
				
				
				  <!--
                  <option value="Brick-kiln" <?php //if($row2['work_involved']=='Brick-kiln') echo 'selected'; ?>>Brick-kiln</option>
                  <option value="Industries" <?php //if($row2['work_involved']=='Industries') echo 'selected'; ?>>Industries</option>
                  <option value="Hotel" <?php //if($row2['work_involved']=='Hotel') echo 'selected'; ?>>Hotel/Dhaba</option>
                  <option value="Flat/Houses" <?php //if($row2['work_involved']=='Flat/Houses') echo 'selected'; ?>>Flat/Houses</option>
                  <option value="Street Vendor" <?php //if($row2['work_involved']=='Street Vendor') echo 'selected'; ?>>Street Vendor</option>
                  <option value="Garage" <?php //if($row2['work_involved']=='Garage') echo 'selected'; ?>>Garage</option>
                  <option value="Other" <?php //if($row2['work_involved']=='Other') echo 'selected'; ?>>Other</option>-->
                </select>
              </div>
                    <div id="work_involved_outside_other_fr_grp" class="col-sm-8 left-margin2 workinvolved_other2"  >5.i.Please Specify
                <input type="text" class="form-control work_involved_outside_other " name="work_involved_outside_other" id="work_involved_outside_other"
				 value="<?php echo $row3['work_involved_outside_other']; ?>"  >
           <span class="work_involved_outside_other_msg color-red"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="field-1" class="col-sm-3 control-label">6. Date of production before CWC </label>
            <div class="form-group">
              <div class="col-sm-8">
               <div class="input-group date" id="datepickerpr"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_production" id="date_of_production"  value="<?php echo $row3['date_of_production']; ?>" autofocus >
                </div>
				                <span id="error_msg_production"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row padd-top">

          <div class="col-sm-6">
            <label for="field-1" class="col-sm-3 control-label">7. Name of CWC </label>
            <div class="form-group">
              <div  id="name_of_cwc_fr_grp" class="col-sm-8">
                <input type="text" class="form-control name_of_cwc " name="name_of_cwc" id="name_of_cwc"    value="<?php echo $row3['name_of_cwc']; ?>"  >
                <span class="name_of_cwc_msg color-red"></span>
                </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="field-2" class="col-sm-3 control-label">8. Location of concerned CWC </label>
            <div class="form-group">
              <div id="location_concern_fr_grp" class="col-sm-8">

				 <input type="text" name="location_concern" id="location_concern" class="form-control location_concern" value="<?php echo $row3['location_concern']; ?>"   />
                <span class="location_concern_msg color-red"></span>
              </div>
            </div>
          </div>

        </div>

        <!-- ripon -->

        <div class="row padd-top">
        <div class="col-sm-6">
            <label for="field-2" class="col-sm-3 control-label">9. Details of Certificate, if any</label>
            <div class="form-group">
              <div class="col-sm-8">

				<?php $val=explode(",",$row3['details_of_certificate']);?>
                <input type="checkbox" name="details_of_certificate[]"
				value="Age Verification" <?php if(in_array('Age Verification',$val)) {echo "checked";}?>> <label> Age Verification</label><br>
                <input type="checkbox" name="details_of_certificate[]"
				 value="Bonded Labour"  <?php if(in_array('Bonded Labour',$val)) {echo "checked";}?>> <label> Bonded Labour</label><br />
                <input type="checkbox" name="details_of_certificate[]"
				value="Migrant Labour" <?php if(in_array('Migrant Labour',$val)) {echo "checked";}?>> <label> Migrant Labour</label><br />
                <input type="checkbox" name="details_of_certificate[]"
				value="MedicalFitness" <?php if(in_array('MedicalFitness',$val)) {echo "checked";}?>> <label> Medical Fitness</label><br />
                <input type="checkbox" name="details_of_certificate[]"
				 value="Art & Craft" <?php if(in_array('Art & Craft',$val)) {echo "checked";}?>> <label> Art &amp; Craft</label><br />
                <input type="checkbox" name="details_of_certificate[]"
				value="none"  class="cert_none" <?php if(in_array('none',$val)) {echo "checked";}?>> <label> None</label><br />
                <input type="checkbox" class="location" name="details_of_certificate[]" id="location"
				value="Others" <?php if(in_array('Others',$val)) {echo "checked";}?>> <label> Others</label><br />
              </div>
              <div class="col-sm-8 location_other" id="location_other">Please Specify
                <input type="text" class="form-control details_of_certificate_other" name="details_of_certificate_other" id="details_of_certificate_other"
				value="<?php echo $row3['details_of_certificate_other']; ?>"  />
          <span class="details_of_certificate_other_msg color-red"></span>
              </div>
            </div>
          </div>
          
        
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. By Whom Child was Deployed</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="oby_whom_deployed" class="form-control"  id="oby_whom_deployed">
                  <option value="">Select</option>
                  <option value="Self" <?php if($row3['oby_whom_deployed']=='Self') echo 'selected'; ?>>Self</option>
                  <option value="Parent/Guardian" <?php if($row3['oby_whom_deployed']=='Parent/Guardian') echo 'selected'; ?>>Parent/Guardian</option>
                  <option value="Parent/Guardian" hidden <?php if($row3['oby_whom_deployed']=='Parent') echo 'selected'; ?>>Parent/Guardian</option>
                  <option value="Relative" <?php if($row3['oby_whom_deployed']=='Relative') echo 'selected'; ?>>Relative</option>
                  <option value="Agent" <?php if($row3['oby_whom_deployed']=='Agent') echo 'selected'; ?>>Agent</option>
                  <option value="Other" <?php if($row3['oby_whom_deployed']=='Other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
              <div id="by_whom_deployed_other_fr_grp"  class="col-sm-8 child_deployed_block_out top-margin"  >10.i.Please Specify
                <input type="text" class="form-control by_whom_deployed_other" name="by_whom_deployed_other" id="by_whom_deployed_other"
				value="<?php echo $row3['by_whom_deployed_other']; ?>"  autofocus="autofocus"  />
        <span class="by_whom_deployed_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row padd-top" >

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Working Environment</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="oenvironment_in" class="form-control"  id="oenvironment_in">
                  <option value="">Select</option>
                  <option value="Healthy" <?php if($row3['oenvironment_in']=='Healthy') echo 'selected'; ?>>Healthy</option>
                  <option value="Satisfactory" <?php if($row3['oenvironment_in']=='Satisfactory') echo 'selected'; ?>>Satisfactory</option>
                  <option value="Unhealthy" <?php if($row3['oenvironment_in']=='Unhealthy') echo 'selected'; ?>>Unhealthy</option>
                  <option value="Other" <?php if($row3['oenvironment_in']=='Other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
               <div id="oenvironment_in_other_fr_grp" class="col-sm-8 top-margin environment_block_out" >11.i.Please Specify
                <input type="text" class="form-control oenvironment_in_other" name="oenvironment_in_other" id="oenvironment_in_other"
				value="<?php echo $row3['oenvironment_in_other']; ?>"  autofocus="autofocus"  />
        <span class="oenvironment_in_other_msg color-red"></span>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Behaviour of Employer</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="obehaviour_of_employer" class="form-control"  id="obehaviour_of_employer">
                  <option value="">Select</option>
                  <option value="Cordial" <?php if($row3['obehaviour_of_employer']=='Cordial') echo 'selected'; ?>>Cordial</option>
                  <option value="Noncordial" <?php if($row3['obehaviour_of_employer']=='Noncordial') echo 'selected'; ?>>Noncordial</option>
                  <option value="Other" <?php if($row3['obehaviour_of_employer']=='Other') echo 'selected'; ?>>Other</option>
                </select>
              </div>
              <div id="obehaviour_of_employer_other_fr_grp" class="col-sm-8 top-margin employer_behaviour_block_out" >12.i.Please Specify
                <input type="text" class="form-control obehaviour_of_employer_other" name="obehaviour_of_employer_other" id="obehaviour_of_employer_other"
				 value="<?php echo $row3['obehaviour_of_employer_other']; ?>"  autofocus="autofocus"  />
         <span class="obehaviour_of_employer_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row padd-top" >

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Any Complaint lodged at Police Station</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="ocomplaint_lodge" class="form-control"  id="ocomplaint_lodge">
				<option  value="">Select</option>
                  <option value="Yes" <?php if($row3['ocomplaint_lodge']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row3['ocomplaint_lodge']=='No') echo 'selected'; ?>>No</option>
                </select>
              </div>
            </div>
          </div>
           
        </div>
       <!--for 13 question-->
		<div id="complaint_yes">
		<div class="row padd-top" >

          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13 i. FIR Number</label>
              <div  id="ofir_no_fr_grp"  class="col-sm-8">
                 <input type="text" class="form-control ofir_no" name="ofir_no" id="ofir_no" value="<?php echo $row3['ofir_no']; ?>"  />
                    <span class="ofir_no_msg color-red"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13 ii. FIR Date</label>
              <div class="col-sm-8">
			   <div class="input-group date" id="datepickerfirout"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                 <input type="text" class="form-control " name="ofir_date" id="ofir_date" value="<?php echo $row3['ofir_date']; ?>"  readonly/>

                </div>
				<span id="error_msg"></span>
              </div>
            </div>
          </div>

          <div class="col-sm-6 top-margin" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. iii Name of Police Station</label>
              <div  id="policestation_name_fr_grp" class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->

                 <input type="text" class="form-control policestation_name" name="policestation_name" id="policestation_name" value="<?php echo $row3['policestation_name']; ?>"
				 onkeypress="return  IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" />
           <span class="policestation_name_msg color-red"></span>
              </div>
            </div>
          </div>
          
          
          
	    </div>
	    
		</div>
		
         <div class="row padd-top" >
         <div class="col-sm-6">
            <div class="col-md-3">14. Total no. of Working Days in a week and Hour(s) per day</div>
            <div class="col-md-3 right-margin"  >
              <label for="field-1" class="control-label">Days</label>
              <input type="number" class="form-control" name="oworking_days"  id="oworking_days"
			  value="<?php echo $row3['oworking_days']; ?>" min="0" max="7" onKeyUp="if(this.value>7){this.value='7';}else if(this.value<0){this.value='0';}" autofocus="autofocus"  />
            </div>
            <div class="col-md-4 right-margin" >
              <label for="field-1" class="control-label">Hour(s) of Work</label>

			  <input type="number" class="form-control" name="oworking_hours" id="oworking_hours" value="<?php echo $row3['oworking_hours']; ?>"
			    min="0" max="24" onKeyUp="if(this.value>24){this.value='24';}else if(this.value<0){this.value='0';}"  autofocus="autofocus"  />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15. Salary/ Honorarium (Per month)</label>
              <div  id="osalary_fr_grp"  class="col-sm-8"> Amount (In Rs.)
                <input type="text" class="form-control osalary" name="osalary" id="osalary" value="<?php echo $row3['osalary']; ?>" onkeypress="return isNumberKey(event)" />
                   <span class="osalary_msg color-red"></span>
              </div>
            </div>
          </div>
           
        </div>  
     
		<!--end-->
        <div class="row padd-top">
          
        </div>
        <!--ripon -->
      </div>
    </div>
  </div>
  </div>
  
  <!-------------------------end of outside state--------------------->
  <div class="form-group top-margin" >
    <div class="col-sm-offset-5 col-sm-7">
      <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
      <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
       <span id="preloader-form"></span> </div>
  </div>
  <?php endforeach; ?>
  <?php echo form_close(); ?> </div>
<?php endforeach;?>
<!--<script src="assets/js/cust_validate.js"></script>-->
<script type="text/javascript">
var base_url="<?php echo base_url();?>";
</script>
<script src="assets/js/get_dist_block_list.js"></script>
<script>

    $(document).ready(function () {






        
$("#flickr_badge_wrapper a").attr("target", "_blank");
	if($('#basic_place_of_rescue').val() == 'Within') {
            $('#withinstate').show();
			$('#outsidestate').hide();
       		 } else if($('#basic_place_of_rescue').val() == 'Outside State') {
            $('#outsidestate').show();
			$('#withinstate').hide();
       		 } else{
			 $('#withinstate').hide();
			 $('#outsidestate').hide();
			 }

	if($('#rescue_by').val() == 'Others') {
            $('#rescue_by_othervalue').show();

       		 } else {

			$('#rescue_by_othervalue').hide();
       		 }
           if($('#by_whom_deployed').val() == 'Other') {

                   $('.child_deployed_block_in').show();

                  } else {

             $('.child_deployed_block_in').hide();
                  }

           if($('#environment_in').val() == 'Other') {
                   $('.environment_block_in').show();

                  } else {

             $('.environment_block_in').hide();
                  }

           if($('#behaviour_of_employer').val() == 'Other') {
                   $('.employer_behaviour_block_in').show();

                  } else {

             $('.employer_behaviour_block_in').hide();
                  }
            if($('#oby_whom_deployed').val() == 'Other') {
                   $('.child_deployed_block_out').show();

                  } else {

             $('.child_deployed_block_out').hide();
                  }

           if($('#oenvironment_in').val() == 'Other') {
                   $('.environment_block_out').show();

                  } else {

             $('.environment_block_out').hide();
                  }

           if($('#obehaviour_of_employer').val() == 'Other') {
                   $('.employer_behaviour_block_out').show();

                  } else {

             $('.employer_behaviour_block_out').hide();
                  }


           if($('#work_involved_outside').val() == 'Other') {
                   $('.workinvolved_other2').show();

                  } else {

             $('.workinvolved_other2').hide();
                  }

           if($('#location').is(":checked")) {
                   $('#location_other').show();

                  } else {

             $('#location_other').hide();
                  }

                  if($('.cert_none').is(":checked")) {
                  $(":checkbox[name='details_of_certificate[]']").not($(".cert_none")).prop('disabled', true);

                      } else {
                              $(":checkbox[name='details_of_certificate[]']").prop('disabled', false);
                      }
           if($('#work_involved').val() == 'Other') {
	
                   $('.workinvolved_other').show();

                  } else {

             $('.workinvolved_other').hide();
                  }
           if($('#religion').val() == 'other') {
                   $('#religion_other').show();

                  } else {

             $('#religion_other').hide();
                  }
             if($('#category').val() == 'other') {
                   $('#catagory_other').show();

                  } else {

             $('#catagory_other').hide();
                  }
				  //console.log($('#caste').val());
				  if($('#caste').val() == 'Other') {
					  
                   $('#other_cast_name').show();

                  } else {

             $('#other_cast_name').hide();
                  }
				  //console.log($('#is_adhar_card').val());
				  
				
				  
				  
				  
				  
				  if($('#is_adhar_card').val() == 'Yes') {
					   $('#adhar_card_yes').show();
					   // $('#adhar_card_no').show();
				 //$('#adhar_card_no').hide();
					  } else if($('#is_adhar_card').val() == 'No') {
					   //$('#adhar_card_no').show();
				 $('#adhar_card_yes').hide();
					  }else{
						   //$('#adhar_card_enrollment_date').hide();
				           //$('#adhar_card_enrollment_no').hide();
						  // $('#appli_no').hide();
						   //$('#date_ene').hide();
						   //$('#datepicker_adhar').hide();
						  
					  }
	if($('#ocomplaint_lodge').val() == 'Yes') {
            $('#complaint_yes').show();

       		 } else {



           $('#complaint_yes').hide();
            		 }

                console.log($('#complaint_lodge').val());
     if($('#complaint_lodge').val() == 'Yes') {
                 $('#complaint_lodge_yes').show();

            		 } else {
     			$('#complaint_lodge_yes').hide();
            		 }

		if($('#isdob').val() == 'Yes') {
            $('#ispresent_yes').show();
			      $('#ispresent_no').hide();
       		 } else {
            $('#ispresent_no').show();
			         $('#ispresent_yes').hide();
       		 }
			sortDropDownListByText();
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          //window.scrollTo(0,0);
            $(this).ajaxSubmit(options);
            return false;
        });
//code added for size checking
    	
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
        	


    });
var calculateAge = function(dateString)
{
	//alert(dateString);
    var today = new Date();
    var birthDate = new Date(dateString);
	//alert(birthDate);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate()))
    {
        age--;
    }
    return age;
};

  var copmareAge = function(dor,dob) {
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
 var copmareProdDate = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
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
//within fir
 var copmareWithnFirDate = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
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
//outside fir
 var copmareOutFirDate = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
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
<!--when is dob value no-->
var copmareAge_year = function(dor,dob) {
	 var today = new Date();
	year1= new Date(dor);
	onlyyear1 = today.getFullYear();
	onlyyear2 = year1.getFullYear();
	//var valid_year = parseInt(onlyyear2)+parseInt(dob);
	var sub1 = onlyyear1 - onlyyear2;
	//alert("copmareAge_year"+sub1);
	return sub1;

};

    function validate_project_add(formData, jqForm, options) {

		var is_dob_r = (jqForm[0].isdob.value);
    //validation for child name
    if (!jqForm[0].cname.value)
        {
                flag=1;
               return false;
        }
      if(/^\s+$/.test(jqForm[0].cname.value)){
        flag=1;
       return false;
      }
if (jqForm[0].cname.value.length>50)
    {
            flag=1;
            $("#cname_form_grp").addClass("validate-has-error");
            $(".cname").focus();
            $(".cname_msg").html("This field should be less than 50 characters");
           return false;
    }
    else{
        $("#cname_form_grp").removeClass("validate-has-error");
      $(".cname_msg").html("");
    }

		if(is_dob_r == "Yes"){
			if (!jqForm[0].dob.value)
			{
				return false;
			}
		}else{
			if (!jqForm[0].year.value)
			{
				return false;
			}
			if (!jqForm[0].month.value)
			{
				return false;
			}
		}


		if (!jqForm[0].gender.value)
        {
            return false;
        }

		/*if(!jqForm[0].basic_place_of_rescue.value)
        {
            return false;
        }*/
        //other_religion validation starts

        if(jqForm[0].religion.value=='other')
        {
          if(!jqForm[0].other_religion.value || jqForm[0].other_religion.value.length>20)
          {
            flag=1;

            $("#other_religion_fr_grp").addClass("validate-has-error");
            $(".other_religion").focus();
            $(".other_religion_msg").html("This field should  be less  than 20 characters or should not be left blank ");
           return false;

          }
          else{
            $("#other_religion_fr_grp").removeClass("validate-has-error");
           $(".other_religion_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].other_religion.value)){
            flag=1;

                 $("#other_religion_fr_grp").addClass("validate-has-error");
                 $(".other_religion").focus();
                 $(".other_religion_msg").html("Initially No space allowed");
                return false;
            }
            else{
             $("#other_religion_fr_grp").removeClass("validate-has-error");
            $(".other_religion_msg").html("");
          }
        }
            if($('#category').val().length == 0) {
	   return false;
            flag=1;
	  } 

        //other_category validation starts
        if(jqForm[0].category.value=='other')
        {
        if(!jqForm[0].other_cast.value || jqForm[0].other_cast.value.length>35)
        {
          flag=1;
          flag=1;
          $("#other_cast_fr_grp").addClass("validate-has-error");
          $(".other_cast").focus();
          $(".other_cast_msg").html("This field should be less than 20 characters or should not be left blank");
         return false;

        }
        else{
          $("#other_cast_fr_grp").removeClass("validate-has-error");
         $(".other_cast_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].other_cast.value)){
          flag=1;

               $("#other_cast_fr_grp").addClass("validate-has-error");
               $( ".other_cast" ).focus();
               $(".other_cast_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#other_cast_fr_grp").removeClass("validate-has-error");
          $(".other_cast_msg").html("");
        }
        }
        //other religion name validation ends
        //OTHER CASTE NAME
			if(jqForm[0].caste.value=='Other')
			{
			if(!jqForm[0].other_cast_name.value || jqForm[0].other_cast_name.value.length>20)
			{
			  flag=1;
			  flag=1;
			  $("#other_cast_name_fr_grp").addClass("validate-has-error");
			  $(".other_cast_name").focus();
			  $(".other_cast_name_msg").html("This field should be less than 20 characters or should not be left blank");
			 return false;

			}
			else{
			  $("#other_cast_fr_grp").removeClass("validate-has-error");
			 $(".other_cast_name_msg").html("");
			}
			if(/^\s+$/.test(jqForm[0].other_cast_name.value)){
			  flag=1;

				   $("#other_cast_name_fr_grp").addClass("validate-has-error");
				   $(".other_cast_name").focus();
				   $(".other_cast_name_msg").html("Initially No space allowed");
				  return false;
			  }
			  else{
			   $("#other_cast_name_fr_grp").removeClass("validate-has-error");
			  $(".other_cast_name_msg").html("");
			}
			}

			//other cast name validation ends
        //Father name validation
        if(jqForm[0].father.value.length>70)
        {
          flag=1;

          $("#fname_fr_grp").addClass("validate-has-error");
          $(".fname").focus();
          $(".fname_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#fname_fr_grp").removeClass("validate-has-error");
         $(".fname_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].father.value)){
          flag=1;

               $("#fname_fr_grp").addClass("validate-has-error");
               $(".fname").focus();
               $(".fname_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#fname_fr_grp").removeClass("validate-has-error");
          $(".fname_msg").html("");
        }
        //fname name validation ends
        //MOther name validation
        if(jqForm[0].mother_name.value.length>70)
        {

          flag=1;
          $("#mname_fr_grp").addClass("validate-has-error");
          $(".mname").focus();
          $(".mname_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#mname_fr_grp").removeClass("validate-has-error");
         $(".mname_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].mother_name.value)){
          flag=1;

               $("#mname_fr_grp").addClass("validate-has-error");
               $(".mname").focus();
               $(".mname_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#mname_fr_grp").removeClass("validate-has-error");
          $(".mname_msg").html("");
        }
        //mother name validation ends
        //postaladdress/
        if(jqForm[0].postaladdress.value.length>120)
        {

          flag=1;
          $("#postaladdress_fr_grp").addClass("validate-has-error");
          $(".postaladdress").focus();
          $(".postaladdress_msg").html("This field should be less than 120 characters");
         return false;

        }
        else{
          $("#postaladdress_fr_grp").removeClass("validate-has-error");
         $(".postaladdress_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].postaladdress.value)){
          flag=1;

               $("#postaladdress_fr_grp").addClass("validate-has-error");
               $(".postaladdress").focus();
               $(".postaladdress_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#postaladdress_fr_grp").removeClass("validate-has-error");
          $(".postaladdress_msg").html("");
        }
		//panchayat name validation
/*if(jqForm[0].panchayat_name.value.length>50)
{
  flag=1;
 
  $("#panchayat_name_fr_grp").addClass("validate-has-error");
  $(".panchayat_name").focus();
  $(".panchayat_name_msg").html("This field should be less than 50 characters");
 return false;

}
else{
  $("#panchayat_name_fr_grp").removeClass("validate-has-error");
 $(".panchayat_name_msg").html("");
}
if(/^\s+$/.test(jqForm[0].panchayat_name.value)){
  flag=1;

       $("#panchayat_name_fr_grp").addClass("validate-has-error");
       $(".panchayat_name").focus();
       $(".panchayat_name_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#panchayat_name_fr_grp").removeClass("validate-has-error");
  $(".panchayat_name_msg").html("");
  }
//panchayat name validation ends
//pincode validation
if(!/^[1-9][0-9]{5}$/.test(jqForm[0].pin_code.value)){
  flag=1;

       $("#pin_code_fr_grp").addClass("validate-has-error");
       $(".pin_code").focus();
       $(".pin_code_msg").html("Enter Valid Pincode");
      return false;
  }
  else{
   $("#pin_code_fr_grp").removeClass("validate-has-error");
  $(".pin_code_msg").html("");
  }*/
  //pincode validation ends
  
        //contact validation
		if(jqForm[0].contact_no.value)
        {
        if(jqForm[0].contact_no.value.length!=10)
        {
          flag=1;
          flag=1;
          $("#contact_fr_grp").addClass("validate-has-error");
          $(".contact").focus();
          $(".contact_msg").html("This field  should be  10 digits");
         return false;

        }
        else{
          $("#contact_fr_grp").removeClass("validate-has-error");
         $(".contact_msg").html("");
        }
		}
		else{
          $("#contact_fr_grp").removeClass("validate-has-error");
         $(".contact_msg").html("");
        }
		//Adhar card validation
	//if(jqForm[0].is_adhar_card.value=='Yes')
   //{
	// if (!jqForm[0].adhar_card_enrollment_no.value)
      //  {
                //flag=1;
				//$("#adhar_card_enrollment_no_fr_grp").addClass("validate-has-error");
               //return false;
        //}
		// if (!jqForm[0].adhar_card.value)
        //{
              //  flag=1;
             //  return false;
       // }
		
	// }
        //contact validation ends
        if (!jqForm[0].is_adhar_card.value)
        {
            flag=1;
            return false;
        }
		if(jqForm[0].is_adhar_card.value =="Yes")
		{
			
			if(jqForm[0].adhar_card.value.length!=12)
			{
			  flag=1;
			  $("#adhar_card_fr_grp").addClass("validate-has-error");
			  $(".adhar_card").focus();
			  $(".adhar_card_msg").html("This field should be  12 numeric digits");
			 return false;

			}
			else{
			  $("#adhar_card_fr_grp").removeClass("validate-has-error");
			 $(".adhar_card_msg").html("");
			}
			//Adhar card validation ends
		}

		if(($("#state").val())=="IND010"){
			if(jqForm[0].block.value=="")
			{

			flag=1;

			$("#block").addClass("validate-has-error");
			//$(".contact2").focus();
			$(".block-err-msg").html("This field should not be blank!!");
			return false;
			}
			else{
				
				  $("#block").removeClass("validate-has-error");
				 $(".block-err-msg").html("");
				
			}
			} 













		
   
            //Adhar card validation ends

            //rescue_by_other carde validation

            if( jqForm[0].rescue_by.value=='Others')
            {

              if(!jqForm[0].rescue_by_other.value || jqForm[0].rescue_by_other.value.length>30)
              {
                flag=1;
                $("#rescue_by_other_fr_grp").addClass("validate-has-error");
                $(".rescue_by_other").focus();
                $(".rescue_by_other_msg").html("This field  should be  30  characters or should not be left blank");
               return false;

              }
              else{
                $("#rescue_by_other_fr_grp").removeClass("validate-has-error");
               $(".rescue_by_other_card_msg").html("");
              }

              if(/^\s+$/.test(jqForm[0].rescue_by_other.value)){
                flag=1;
                     $("#rescue_by_other_fr_grp").addClass("validate-has-error");
                     $(".rescue_by_other").focus();
                     $(".rescue_by_other_msg").html("Initially No space allowed");
                    return false;
                }
                else{
                 $("#rescue_by_other_fr_grp").removeClass("validate-has-error");
                $(".rescue_by_other_msg").html("");
              }
            }
              ////adhar carde validation ends

    if(jqForm[0].other.value.length>30)
    {
      flag=1;
      $("#other_fr_grp").addClass("validate-has-error");
      $(".other").focus();
      $(".other_msg").html("This field  should be  200  characters");
     return false;

    }
    else{
      $("#other_fr_grp").removeClass("validate-has-error");
     $(".other_card_msg").html("");
    }

    if(/^\s+$/.test(jqForm[0].other.value)){
      flag=1;
           $("#other_fr_grp").addClass("validate-has-error");
           $(".other").focus();
           $(".other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#other_fr_grp").removeClass("validate-has-error");
      $(".other_msg").html("");
    }
//production date before CWC
		/*if (!jqForm[0].production_date.value)
			{
					flag=1;
				   return false;
				   
			}*/

    if(!jqForm[0].basic_place_of_rescue.value)
    {
        return false;
    }
    var daterescue=(jqForm[0].idate_of_rescue.value);
    var is_dob_r = (jqForm[0].isdob.value);
    var year_value = (jqForm[0].year.value);
    var newDate=(jqForm[0].dob.value);
    var within_fir_date = (jqForm[0].fir_date.value);
    var out_fir_date = (jqForm[0].ofir_date.value);
    var place = (jqForm[0].basic_place_of_rescue.value);
    var date_f_prod = (jqForm[0].date_of_production.value);
    //with in state feilds validtion starts
    if(place == "Within"){
      if (!jqForm[0].iemployer_name.value)
           {
          flag=1;
          $("#iemployer_name_fr_grp").addClass("validate-has-error");
          $(".iemployer_name").focus();
          $(".iemployer_name_msg").html("This field is required");
          return false;
          }else{
        $("#iemployer_name_fr_grp").removeClass( "validate-has-error" );
        $(".iemployer_name_msg").html("");
      }
      if(jqForm[0].iemployer_name.value.length>35)
      {
        flag=1;
        $("#iemployer_name_fr_grp").addClass("validate-has-error");
        $(".iemployer_name").focus();
        $(".iemployer_name_msg").html("This field  name  should be less than  35 characters");
       return false;
      }
      else{
        $("#iemployer_name_fr_grp").removeClass("validate-has-error");
       $(".iemployer_name_msg").html("");
      }

      if(/^\s+$/.test(jqForm[0].iemployer_name.value)){
        flag=1;
             $("#iemployer_name_fr_grp").addClass("validate-has-error");
             $( ".iemployer_name" ).focus();
             $(".iemployer_name_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#iemployer_name_fr_grp").removeClass("validate-has-error");
        $(".iemployer_name_msg").html("");
      }
      if(jqForm[0].iemployer_detail_address.value.length>120)
      {
        flag=1;
        $("#iemployer_detail_address_fr_grp").addClass("validate-has-error");
        $(".iemployer_detail_address").focus();
        $(".iemployer_detail_address_msg").html("This field should be less than  120 characters");
       return false;
      }
      else{
        $("#iemployer_detail_address_fr_grp").removeClass("validate-has-error");
       $(".iemployer_detail_address_msg").html("");
      }

      if(/^\s+$/.test(jqForm[0].iemployer_detail_address.value)){
        flag=1;
             $("#iemployer_detail_address_fr_grp").addClass("validate-has-error");
             $(".iemployer_detail_address").focus();
             $(".iemployer_detail_address_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#iemployer_detail_address_fr_grp").removeClass("validate-has-error");
        $(".iemployer_detail_address_msg").html("");
      }

      ///wcontact_no/place_of_rescue/iperiod_work/by_whom_deployed_other1/environment_in_other/behaviour_of_employer_other/salary

      //contact number of employer
	  if(jqForm[0].wcontact_no.value)
      {
		  if(jqForm[0].wcontact_no.value.length!=10)
		  {
			flag=1;
			$("#wcontact_no_fr_grp").addClass("validate-has-error");
			$(".wcontact_no").focus();
			$(".wcontact_no_msg").html("This field   should be  10 numeric digits");
		   return false;
		  }
		  else{
			$("#wcontact_no_fr_grp").removeClass("validate-has-error");
		   $(".wcontact_no_msg").html("");
		  }
	  }
	  else{
        $("#wcontact_no_fr_grp").removeClass("validate-has-error");
       $(".wcontact_no_msg").html("");
      }
	  
	   //within state
  if(!jqForm[0].within_state.value)
  {
    flag=1;
    $("#statewithin").addClass("validate-has-error");
    $(".within_state").focus();
    $(".state_msg").html("This field should not be blank");
   return false;
  }
  else{
    $("#statewithin").removeClass("validate-has-error");
   $(".state_msg").html("");
  }
  //within district
  if(!jqForm[0].within_district.value)
  {
    flag=1;
    $("#distwithin").addClass("validate-has-error");
    $(".within_district").focus();
    $(".dist_msg").html("This field should not be blank");
   return false;
  }
  else{
    $("#distwithin").removeClass("validate-has-error");
   $(".dist_msg").html("");
  }
      //place of rescue in with in state
      if(jqForm[0].place_of_rescue.value.length>35)
      {
        flag=1;
        $("#wplace_of_rescue_fr_grp").addClass("validate-has-error");
        $(".place_of_rescue").focus();
        $(".place_of_rescue_msg").html("Place rescue should be less than  35  characters");
       return false;
      }
      else{
        $("#place_of_rescue_fr_grp").removeClass("validate-has-error");
       $(".place_of_rescue_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].place_of_rescue.value)){
        flag=1;
             $("#place_of_rescue_fr_grp").addClass("validate-has-error");
             $(".place_of_rescue").focus();
             $(".place_of_rescue_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#place_of_rescue_fr_grp").removeClass("validate-has-error");
        $(".place_of_rescue_msg").html("");
      }
      //Work involved in
      
      if(jqForm[0].work_involved.value=='Other')
      {
        if(!jqForm[0].iperiod_work.value || jqForm[0].iperiod_work.value.length>35)
        {
          flag=1;
          $("#iperiod_work_fr_grp").addClass("validate-has-error");
          $(".iperiod_work").focus();
          $(".iperiod_work_msg").html("This field should be less than  35  characters or should not be left blank");
         return false;
        }
        else{
          $("#iperiod_work_fr_grp").removeClass("validate-has-error");
         $(".iperiod_work_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].iperiod_work.value)){
          flag=1;
               $("#iperiod_work_fr_grp").addClass("validate-has-error");
               $(".iperiod_work").focus();
               $(".iperiod_work_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#iperiod_work_fr_grp").removeClass("validate-has-error");
          $(".iperiod_work_msg").html("");
        }

      }
      //By Whom Child was Deployed
    if(jqForm[0].by_whom_deployed.value=='Other')
    {

      if(!jqForm[0].by_whom_deployed_other1.value || jqForm[0].by_whom_deployed_other1.value.length>35)
      {
        flag=1;
        $("#by_whom_deployed_other1_fr_grp").addClass("validate-has-error");
        $(".by_whom_deployed_other1").focus();
        $(".by_whom_deployed_other1_msg").html("This field  was deployed in should be less than  35  characters or should not be left blank");
       return false;
      }
      else{
        $("#by_whom_deployed_other1_fr_grp").removeClass("validate-has-error");
       $(".by_whom_deployed_other1_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].by_whom_deployed_other1.value)){
        flag=1;
             $("#by_whom_deployed_other1_fr_grp").addClass("validate-has-error");
             $(".by_whom_deployed_other1").focus();
             $(".by_whom_deployed_other1_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#iby_whom_deployed_other1_fr_grp").removeClass("validate-has-error");
        $(".by_whom_deployed_other1_msg").html("");
      }
    }

      // Working Environment
      if(jqForm[0].environment_in.value=='Other')
      {
        if(!jqForm[0].environment_in_other.value || jqForm[0].environment_in_other.value.length>35)
        {
          flag=1;
          $("#environment_in_other_fr_grp").addClass("validate-has-error");
          $(".environment_in_other").focus();
          $(".environment_in_other_msg").html("This field  should be less than  35  characters or should not be left blank");
         return false;
        }
        else{
          $("#environment_in_other_fr_grp").removeClass("validate-has-error");
         $(".environment_in_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].environment_in_other.value)){
          flag=1;
               $("#environment_in_other_fr_grp").addClass("validate-has-error");
               $(".environment_in_other").focus();
               $(".environment_in_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#environment_in_other_fr_grp").removeClass("validate-has-error");
          $(".environment_in_other_msg").html("");
        }
      }
      //Behaviour of the employee

    if(jqForm[0].behaviour_of_employer.value=='Other' )
    {
      if(!jqForm[0].behaviour_of_employer_other.value || jqForm[0].behaviour_of_employer_other.value.length>35)
      {
        flag=1;
        $("#behaviour_of_employer_other_fr_grp").addClass("validate-has-error");
        $(".behaviour_of_employer_other").focus();
        $(".behaviour_of_employer_other_msg").html("This field   should be less than  35  characters or should not be left blank");
       return false;
      }
      else{
        $("#behaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
       $(".behaviour_of_employer_other_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].behaviour_of_employer_other.value)){
        flag=1;
             $("#behaviour_of_employer_other_fr_grp").addClass("validate-has-error");
             $(".behaviour_of_employer_other").focus();
             $(".behaviour_of_employer_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#behaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
        $(".behaviour_of_employer_other_msg").html("");
      }
    }
    //fir_no/name_policestation/ofir_no/policestation_name/ocomplaint_lodge
    if(jqForm[0].complaint_lodge.value=="Yes")
    {
      if(!jqForm[0].fir_no.value || jqForm[0].fir_no.value.length>35)
      {
        flag=1;
        $("#fir_no_fr_grp").addClass("validate-has-error");
        $(".fir_no").focus();
        $(".fir_no_msg").html("This field  should be less than  35  characters or should not be left blank");
       return false;
      }
      else{
        $("#fir_no_fr_grp").removeClass("validate-has-error");
       $(".fir_no_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].fir_no.value)){
        flag=1;
             $("#fir_no_fr_grp").addClass("validate-has-error");
             $(".fir_no").focus();
             $(".fir_no_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#fir_no_fr_grp").removeClass("validate-has-error");
        $(".fir_no_msg").html("");
      }
      //police station name
      if(!jqForm[0].name_policestation.value || jqForm[0].name_policestation.value.length>35)
      {
        flag=1;
        $("#name_policestation_grp").addClass("validate-has-error");
        $(".name_policestation").focus();
        $(".name_policestation_msg").html("This field  name should be less than  35  characters or should not be left blank");
       return false;
      }
      else{
        $("#name_policestation_fr_grp").removeClass("validate-has-error");
       $(".name_policestation_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].name_policestation.value)){
        flag=1;
             $("#name_policestation_fr_grp").addClass("validate-has-error");
             $(".name_policestation_other").focus();
             $(".name_policestation_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#name_policestation_fr_grp").removeClass("validate-has-error");
        $(".name_policestation_msg").html("");
      }
    }

      //salary
      if(jqForm[0].salary.value.length>10)
      {
        flag=1;
        $("#salary_fr_grp").addClass("validate-has-error");
        $(".salary_other").focus();
        $(".salary_msg").html("This field  should be less than  10  numeric characters");
       return false;
      }
      else{
        $("#salary_fr_grp").removeClass("validate-has-error");
       $(".salary_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].salary.value)){
        flag=1;
             $("#bsalary_fr_grp").addClass("validate-has-error");
             $(".salary").focus();
             $(".salary_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#salary_fr_grp").removeClass("validate-has-error");
        $(".salary_msg").html("");
      }
      }
    if(place == "Outside State"){
        //employer_name/ocontact_no/
      //  place_of_rescue_out/
      //  work_involved_outside_other/name_of_cwc/
      //location_concern/by_whom_deployed_other/oenvironment_in_other/obehaviour_of_employer_other/osalary
    //////////////////////////////////////////////////////////////////

      //employer_name
      if(jqForm[0].employer_name.value.length>35)
      {
        flag=1;
        $("#employer_name_fr_grp").addClass("validate-has-error");
        $(".employer_name_other").focus();
        $(".employer_name_msg").html("This field  should be less than 35 characters");
       return false;
      }
      else{
        $("#employer_name_fr_grp").removeClass("validate-has-error");
       $(".employer_name_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].employer_name.value)){
        flag=1;
             $("#employer_name_grp").addClass("validate-has-error");
             $(".employer_name").focus();
             $(".employer_name_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#employer_name_grp").removeClass("validate-has-error");
        $(".employer_name_msg").html("");
      }
      //employer_address
      if(jqForm[0].employer_address.value.length>120)
      {
        flag=1;
        $("#employer_address_fr_grp").addClass("validate-has-error");
        $(".employer_address").focus();
        $(".employer_address_msg").html("This field  should be less than 120 characters");
       return false;
      }
      else{
        $("#employer_address_fr_grp").removeClass("validate-has-error");
       $(".employer_address_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].employer_address.value)){
        flag=1;
             $("#employer_address_grp").addClass("validate-has-error");
             $(".employer_address").focus();
             $(".employer_address_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#employer_address_grp").removeClass("validate-has-error");
        $(".employer_address_msg").html("");
      }
      //contact number
	  if(jqForm[0].ocontact_no.value)
      {
      if(jqForm[0].ocontact_no.value.length!=10)
      {
        flag=1;
        $("#ocontact_no_fr_grp").addClass("validate-has-error");
        $(".ocontact_no").focus();
        $(".ocontact_no_msg").html("This field  should be  10 numeric  digits");
       return false;
      }
      else{
        $("#ocontact_no_fr_grp").removeClass("validate-has-error");
       $(".ocontact_no_msg").html("");
      }
	  }
	   else{
        $("#ocontact_no_fr_grp").removeClass("validate-has-error");
       $(".ocontact_no_msg").html("");
      }
      //place_of_rescue_out
	  if(jqForm[0].outside_state.value.length=="")
{
  flag=1;
  flag=1;
  $("#out_state").addClass("validate-has-error");
  $(".outsid").focus();
  $(".outsid").html("This field should not be blank");
 return false;

}
else{
  $("#out_state").removeClass("validate-has-error");
 $(".outsid").html("");
}

if(jqForm[0].outside_district.value.length=="")
{
  flag=1;
  flag=1;
  $("#out_dist").addClass("validate-has-error");
  $(".outsdistric").focus();
  $(".outsdistric").html("This field should not be blank");
 return false;

}
else{
  $("#out_dist").removeClass("validate-has-error");
 $(".outsdistric").html("");
}

      if(jqForm[0].place_of_rescue_out.value.length>35)
      {
        flag=1;
        $("#place_of_rescue_out_fr_grp").addClass("validate-has-error");
        $(".place_of_rescue_out").focus();
        $(".place_of_rescue_out_msg").html("This field should be less than 35 characters");
       return false;
      }
      else{
        $("#place_of_rescue_out_fr_grp").removeClass("validate-has-error");
       $(".place_of_rescue_out_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].place_of_rescue_out.value)){
        flag=1;
             $("#place_of_rescue_out_fr_grp").addClass("validate-has-error");
             $(".place_of_rescue_out").focus();
             $(".place_of_rescue_out_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#place_of_rescue_out_grp").removeClass("validate-has-error");
        $(".place_of_rescue_out_msg").html("");
      }

      //
      if(jqForm[0].work_involved_outside.value=='Other')
      {
        if(!jqForm[0].work_involved_outside_other.value || jqForm[0].work_involved_outside_other.value.length>35)
        {
          flag=1;
          $("#work_involved_outside_other_fr_grp").addClass("validate-has-error");
          $(".work_involved_outside_other").focus();
          $(".work_involved_outside_other_msg").html("This field should be less than 35 characters or should not be left blank ");
         return false;
        }
        else{
          $("#work_involved_outside_other_fr_grp").removeClass("validate-has-error");
         $(".work_involved_outside_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].work_involved_outside_other.value)){
          flag=1;
               $("#work_involved_outside_other_fr_grp").addClass("validate-has-error");
               $(".work_involved_outside_other" ).focus();
               $(".work_involved_outside_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#work_involved_outside_other_fr_grp").removeClass("validate-has-error");
          $(".work_involved_outside_other_msg").html("");
        }
      }

      //name_of_cwc
      if(jqForm[0].name_of_cwc.value.length>35)
      {
        flag=1;
        $("#name_of_cwc_fr_grp").addClass("validate-has-error");
        $(".name_of_cwc").focus();
        $(".name_of_cwc_msg").html("This field  should be less than 35 characters");
       return false;
      }
      else{
        $("#name_of_cwc_fr_grp").removeClass("validate-has-error");
       $(".name_of_cwc_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].name_of_cwc.value)){
        flag=1;
             $("#name_of_cwc_fr_grp").addClass("validate-has-error");
             $(".name_of_cwc" ).focus();
             $(".name_of_cwc_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#name_of_cwc_fr_grp").removeClass("validate-has-error");
        $(".name_of_cwc_msg").html("");
      }
      //location_concern
      if(jqForm[0].location_concern.value.length>35)
      {
        flag=1;
        $("#location_concern_fr_grp").addClass("validate-has-error");
        $(".location_concern").focus();
        $(".location_concern_msg").html("This field  should be less than 35 characters ");
       return false;
      }
      else{
        $("#location_concern_fr_grp").removeClass("validate-has-error");
       $(".location_concern_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].location_concern.value)){
        flag=1;
             $("#location_concern_fr_grp").addClass("validate-has-error");
             $(".location_concern").focus();
             $(".location_concern_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#location_concern_fr_grp").removeClass("validate-has-error");
        $(".location_concern_msg").html("");
      }
      if($('.location').is(":checked")) {

        if(!jqForm[0].details_of_certificate_other.value || jqForm[0].details_of_certificate_other.value.length>35)
            {
              flag=1;
              $(".location_other").addClass("validate-has-error");
              $( ".details_of_certificate_other" ).focus();
              $(".details_of_certificate_other_msg").html("This field  should be less than  35  characters or should not be left blank");
             return false;
            }
            else{
              $(".location_other").removeClass("validate-has-error");

              $(".details_of_certificate_other_msg").html("");

            }
            if(/^\s+$/.test(jqForm[0].details_of_certificate_other.value)){
              flag=1;
                   $(".location_other").addClass("validate-has-error");
                   $(".details_of_certificate_other").focus();
                   $(".details_of_certificate_other_msg").html("Initially No space allowed");
                  return false;
              }
              else{
               $(".location_other").removeClass("validate-has-error");
              $(".by_whom_deployed_other1_msg").html("");
            }
              }
      //by_whom_deployed_other
      if(jqForm[0].oby_whom_deployed.value=='Other')
      {
        if(!jqForm[0].by_whom_deployed_other.value || jqForm[0].by_whom_deployed_other.value.length>35)
        {
          flag=1;
          $("#by_whom_deployed_other_fr_grp").addClass("validate-has-error");
          $(".by_whom_deployed_other").focus();
          $(".by_whom_deployed_other_msg").html("This field should be less than 35 characters or should not be left blnak");
         return false;
        }
        else{
          $("#by_whom_deployed_other_fr_grp").removeClass("validate-has-error");
         $(".by_whom_deployed_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].by_whom_deployed_other.value)){
          flag=1;
               $("#by_whom_deployed_other_fr_grp").addClass("validate-has-error");
               $(".by_whom_deployed_other").focus();
               $(".by_whom_deployed_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#by_whom_deployed_other_fr_grp").removeClass("validate-has-error");
          $(".by_whom_deployed_other_msg").html("");
        }
      }

      //oenvironment_in_other
      if(jqForm[0].oenvironment_in.value =='Other')
      {
        if(!jqForm[0].oenvironment_in_other.value || jqForm[0].oenvironment_in_other.value.length>35)
        {
          flag=1;
          $("#oenvironment_in_other_fr_grp").addClass("validate-has-error");
          $(".oenvironment_in_other").focus();
          $(".oenvironment_in_other_msg").html("This field should be less than 35 characters or should not be left blnak");
         return false;
        }
        else{
          $("#oenvironment_in_other_fr_grp").removeClass("validate-has-error");
         $(".oenvironment_in_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].oenvironment_in_other.value)){
          flag=1;
               $("#oenvironment_in_other_fr_grp").addClass("validate-has-error");
               $(".oenvironment_in_other_other").focus();
               $(".oenvironment_in_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#oenvironment_in_other_fr_grp").removeClass("validate-has-error");
          $(".oenvironment_in_other_msg").html("");
        }
      }

      //obehaviour_of_employer_other
      if(jqForm[0].obehaviour_of_employer.value=='Other')
      {
        if(!jqForm[0].obehaviour_of_employer_other.value || jqForm[0].obehaviour_of_employer_other.value.length>35)
        {
          flag=1;
          $("#obehaviour_of_employer_other_fr_grp").addClass("validate-has-error");
          $(".obehaviour_of_employer_other").focus();
          $(".obehaviour_of_employer_other_msg").html("This field  should be less than 35 characters or should not be left blnak");
         return false;
        }
        else{
          $("#obehaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
         $(".obehaviour_of_employer_other_msg").html("");
       }
        if(/^\s+$/.test(jqForm[0].obehaviour_of_employer_other.value)){
          flag=1;
               $("#obehaviour_of_employer_other_fr_grp").addClass("validate-has-error");
               $(".obehaviour_of_employer_other").focus();
               $(".obehaviour_of_employer_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#obehaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
          $(".obehaviour_of_employer_other_msg").html("");
        }
      }
      if(jqForm[0].ocomplaint_lodge.value=="Yes")
      {
        if(!jqForm[0].ofir_no.value || jqForm[0].ofir_no.value.length>35)
        {
          flag=1;
          $("#ofir_no_fr_grp").addClass("validate-has-error");
          $(".ofir_no").focus();
          $(".ofir_no_msg").html("This field should be less than  35  characters or should not be left blank");
         return false;
        }
        else{
          $("#ofir_no_fr_grp").removeClass("validate-has-error");
         $(".ofir_no_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].ofir_no.value)){
          flag=1;
               $("#ofir_no_fr_grp").addClass("validate-has-error");
               $(".ofir_no_other").focus();
               $(".ofir_no_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#ofir_no_fr_grp").removeClass("validate-has-error");
          $(".ofir_no_msg").html("");
        }
        //police station name
        if(!jqForm[0].policestation_name.value || jqForm[0].policestation_name.value.length>35)
        {
          flag=1;
          $("#policestation_name_grp").addClass("validate-has-error");
          $(".policestation_name").focus();
          $(".policestation_name_msg").html("This field  should be less than  35  characters or should not be left blank");
         return false;
        }
        else{
          $("#policestation_name_fr_grp").removeClass("validate-has-error");
         $(".policestation_name_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].policestation_name.value)){
          flag=1;
               $("#policestation_name_fr_grp").addClass("validate-has-error");
               $(".policestation_nameother").focus();
               $(".policestation_name_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#policestation_name_fr_grp").removeClass("validate-has-error");
          $(".policestation_name_msg").html("");
        }
      }
      ///osalary
      if(jqForm[0].osalary.value.length>10)
      {
        flag=1;
        $("#osalary_fr_grp").addClass("validate-has-error");
        $(".osalary").focus();
        $(".osalary_msg").html("This field should be less than  10  numeric characters or should not be left blnak");
       return false;
      }
      else{
        $("#osalary_fr_grp").removeClass("validate-has-error");
       $(".osalary_msg").html("");
      }
    }

		var date_f_prod = (jqForm[0].date_of_production.value);

		if(is_dob_r == "Yes"){
		var newAge=calculateAge(newDate);
		}
		if(is_dob_r == "No"){
		var newAge= year_value;
		}
		if(is_dob_r == "Yes"){
			if (newAge>18)
			{
				$("#error_msg").html("Child age must less than 18 year");
				document.getElementById("dob").focus();
				return false;
			}
			if (newAge<5)
			{
				$("#error_msg").html("Child age must more than 5 year");
					document.getElementById("dob").focus();
					 $("#datepicker").addClass("newClass");
				return false;
			}
		}
		if(is_dob_r == "Yes"){
		var value = copmareAge(daterescue,newDate);
		}
		if(is_dob_r == "No"){
		var value = copmareAge_year(daterescue,year_value);
			if(year_value <=  value){
			$("#error_msg1").html("Child rescue date must must greater than date of birth");
			document.getElementById("idate_of_rescue").focus();
			$("#datetimepicker").addClass("newClass");
				return false;
			}
		}
		if(is_dob_r == "Yes"){
			if(value < 5){
			$("#error_msg").html(" ");
			$("#datepicker").removeClass("newClass");
			$("#error_msg1").html("Child rescue date must must greater than date of birth");
			document.getElementById("idate_of_rescue").focus();
			$("#datetimepicker").addClass("newClass");
				return false;
			}
		}

		if(place == "Within"){

      if(jqForm[0].complaint_lodge.value=="Yes")
      {
			if(within_fir_date !=""){

			var diffIn_firDate = copmareOutFirDate(within_fir_date,daterescue);
				if(diffIn_firDate < 0){
					$("#error_msg").html(" ");
					 $("#datepicker").removeClass("newClass");
					$("#error_msg2").html("FIR date should be later or equal to date of rescue");
					document.getElementById("fir_date").focus();
					$("#datepickerfir").addClass("newClass");
						return false;
				}else{
				$("#error_msg2").html("");
				$("#datepickerfir").removeClass("newClass");
				}
			}
    }

		}else{
      if(jqForm[0].ocomplaint_lodge.value=="Yes")
      {
			if(out_fir_date !=""){
			var diffout_firDate = copmareWithnFirDate(out_fir_date,daterescue);
				if(diffout_firDate < 0){
					$("#error_msg").html(" ");
					$("#datepicker").removeClass("newClass");
					$("#error_msg3").html("FIR date should be later or equal to date of rescue");
					document.getElementById("ofir_date").focus();
					$("#datepickerfirout").addClass("newClass");
						return false;
				}else{
					$("#error_msg3").html("");
					$("#datepickerfirout").removeClass("newClass");
				}
			}

			if(date_f_prod !=""){

			var diffDaysof = copmareProdDate(date_f_prod,daterescue);
				if(diffDaysof < 0){
					$("#error_msg_production").html("Date of production should be later or equal to date of rescue");
					document.getElementById("date_of_production").focus();
					$("#datepickerpr").addClass("newClass");
						return false;
				}
			}
    }
		}

		
		
		
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }
	

    function show_response_project_add(responseText, statusText, xhr, $form) {
		$('html, body').animate({ scrollTop: 0 }, 0);
		 $('#msgModal-111').modal('show');
		 
        document.getElementById("submit-button").disabled = false;
    }
	function sortDropDownListByText() {

    $("#state").each(function() {


        var selectedValue = $(this).val();


        $(this).html($("option", $(this)).sort(function(a, b) {
            return a.text == b.text ? 0 : a.text < b.text ? -1 : 1
        }));


        $(this).val(selectedValue);
    });
}
$(function() {

 		 $('#isdob').change(function(){
        	if($('#isdob').val() == 'Yes') {
            $('#ispresent_yes').show();
			         $('#ispresent_no').hide();
       		 } else {
            $('#ispresent_no').show();
			         $('#ispresent_yes').hide();
       		 }
    	});
		});
		$(function() {

   		 $('#religion').change(function(){
        	if($('#religion').val() == 'other') {
            $('#religion_other').show();

			/*document.getElementById('other1').focus();*/
       		 } else {

			$('#religion_other').hide();
       		 }
    	});
		});
		$(function() {

      $('#caste').change(function(){
         if($('#caste').val() == 'Other') {
     
           $('#other_cast_name').show();
		   

          } else {

     $('#other_cast_name').hide();
	
          }
     });
   });
   //code by dipti 24-02-2017
		$(function() {

			 $('#adhar_card_enrollment_date').show();
	           $('#adhar_card_enrollment_no').show();
			   $('#appli_no').show();
			   $('#date_ene').show();
			   $('#datepicker_adhar').show();
			
				  $('#is_adhar_card').change(function(){
					 if($('#is_adhar_card').val() == 'Yes') {
					   $('#adhar_card_yes').show();
					    $('#adhar_card_no').show();
				 //$('#adhar_card_no').hide();
					  } else if($('#is_adhar_card').val() == 'No') {
					   $('#adhar_card_no').show();
				 $('#adhar_card_yes').hide();
					  }else{
						   //$('#adhar_card_enrollment_date').hide();
				           //$('#adhar_card_enrollment_no').hide();
						   //$('#appli_no').hide();
						   //$('#date_ene').hide();
						  // $('#datepicker_adhar').hide();
						  
					  }
				 });
			   });
			   /////end //////
		$(function() {

   		 $('#category').change(function(){
        	if($('#category').val() == 'other') {
            $('#catagory_other').show();

       		 } else {

			$('#catagory_other').hide();
       		 }
    	});
		});
		
		$(function() {

   		 $('#work_involved').change(function(){
        	if($('#work_involved').val() == 'Other') {
            $('.workinvolved_other').show();

       		 } else {

			$('.workinvolved_other').hide();
       		 }
    	});
		});
		
		$(function() {

   		 $('#location').change(function(){
        	 if($('#location').is(":checked"))  {
            $('#location_other').show();

       		 } else {

			$('#location_other').hide();
       		 }
    	});
		});

		//Code Added by Ripon
		$(function() {

   		 $('#by_whom_deployed').change(function(){
        	if($('#by_whom_deployed').val() == 'Other') {
            $('.child_deployed_block_in').show();

       		 } else {

			$('.child_deployed_block_in').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#environment_in').change(function(){
        	if($('#environment_in').val() == 'Other') {
            $('.environment_block_in').show();

       		 } else {

			$('.environment_block_in').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#behaviour_of_employer').change(function(){
        	if($('#behaviour_of_employer').val() == 'Other') {
            $('.employer_behaviour_block_in').show();

       		 } else {

			$('.employer_behaviour_block_in').hide();
       		 }
    	});
		});

		$(function() {

		$('#oby_whom_deployed').change(function(){
        	if($('#oby_whom_deployed').val() == 'Other') {
            $('.child_deployed_block_out').show();

       		 } else {

			$('.child_deployed_block_out').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#oenvironment_in').change(function(){
        	if($('#oenvironment_in').val() == 'Other') {
            $('.environment_block_out').show();

       		 } else {

			$('.environment_block_out').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#obehaviour_of_employer').change(function(){
        	if($('#obehaviour_of_employer').val() == 'Other') {
            $('.employer_behaviour_block_out').show();

       		 } else {

			$('.employer_behaviour_block_out').hide();
       		 }
    	});
		});
		<!--within-->
		$(function() {

   		 $('#complaint_lodge').change(function(){

        	if($('#complaint_lodge').val() == 'Yes') {
             console.log("skjdnsajd");
            $('#complaint_lodge_yes').show();


       		 } else {
             console.log("asdjbahsdjhasbd");

			          $('#complaint_lodge_yes').hide();
       		 }
    	});
		});
	<!--	outside-->
  $(function(){
    $('.cert_none').change(function(){

        if($('.cert_none').is(":checked")) {
        $(":checkbox[name='details_of_certificate[]']").not($(this)).prop('disabled', true);
        $(":checkbox[name='details_of_certificate[]']").not($(this)).prop('checked', false);
          $('#location_other').hide();

            } else {
                    $(":checkbox[name='details_of_certificate[]']").prop('disabled', false);

            }

       });

     });
	$(function() {

   		 $('#ocomplaint_lodge').change(function(){
        	if($('#ocomplaint_lodge').val() == 'Yes') {
            $('#complaint_yes').show();

       		 } else {
			$('#complaint_yes').hide();
       		 }
    	});
		});


		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


		$(function() {

   		 $('#work_involved_outside').change(function(){
        	if($('#work_involved_outside').val() == 'Other') {
            $('.workinvolved_other2').show();

       		 } else {

			$('.workinvolved_other2').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#rescue_by').change(function(){
        	if($('#rescue_by').val() == 'Others') {
            $('#rescue_by_othervalue').show();

       		 } else {

			$('#rescue_by_othervalue').hide();
       		 }
    	});
		});
		$(function() {
		$('#basic_place_of_rescue').change(function(){
        	if($('#basic_place_of_rescue').val() == 'Within') {
            $('#withinstate').show();
			$('#outsidestate').hide();
       		 } else if($('#basic_place_of_rescue').val() == 'Outside State') {
            $('#outsidestate').show();
			$('#withinstate').hide();
       		 } else{
			 $('#withinstate').hide();
			 $('#outsidestate').hide();
			 }
    	});
		});
		
</script>
<script type="text/javascript">
 var FromEndDate = new Date();
$('#idate_of_rescue').datetimepicker({
endDate: FromEndDate,
autoclose: true
});

    </script>
	<script>
	var FromEndDate = new Date();
$('#production_date').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
</script>
	<script>
	var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepickerfir').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
setDate:FromEndDate,
autoclose: true
});

	var FromEndDate = new Date();
$('#datepicker_adhar').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});


var FromEndDate = new Date();
$('#datepickerfirout').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
var FromEndDate = new Date();
$('#datepicker-prod').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepickerpr').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});


function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
$(function(){
$("#contact_no").bind("paste",function(e) {
                     e.preventDefault();
                });
$("#wcontact_no").bind("paste",function(e) {
                     e.preventDefault();
                });
$("#ocontact_no").bind("paste",function(e) {
                     e.preventDefault();
                });


});
	</script>
<script>

 function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.png|\.jpeg/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#img-error").html("File format error...Please provide a jpg/jpeg/png format");
				document.getElementById("image").focus();
				 $("#image1").addClass("newClass");
                upload_field.form.reset();
                return false;
            }
			}
 function ajaxFileUpload3(upload_field)
 {
	 console.log("pdf");
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
//for number field character entry
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
	
   //for displaying image in new window	
		function display_image()
		{
	var largeImage = document.getElementById('largeImage');
   largeImage.style.display = 'block';
   largeImage.style.width=200+"px";
   largeImage.style.height=200+"px";
   var url=largeImage.getAttribute('src');
   window.open(largeImage,'Image','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');
		}
   function display_child_image()
   {
	 var largeImage = document.getElementById('imgchild');
   largeImage.style.display = 'block';
   largeImage.style.width=200+"px";
   largeImage.style.height=200+"px";
   var url=largeImage.getAttribute('src');
   window.open(url,'Image','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');  
   }
   function display_inspect_image()
   {
	 var largeImage = document.getElementById('imginspct');
   largeImage.style.display = 'block';
   largeImage.style.width=200+"px";
   largeImage.style.height=200+"px";
   var url=largeImage.getAttribute('src');
   window.open(url,'Image','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');  
   }

   function removeerrormesg(){
	   $('.adhar_card_msg').remove();

	   }



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
	</script>

<script>


function clearbutton(){ 
$("#size-error").html(" ");
document.getElementById("submit-button").disabled = false;

}
</script>	
	
	
	
	