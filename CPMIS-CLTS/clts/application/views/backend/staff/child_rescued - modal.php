<style>
#error_msg{
color:red;
}
#error_msg1{
color:red;
}
#error_msg2{
color:red;
}
#error_msg3{
color:red;
}
.newClass{
border: 1px solid red;
}
#error_msg_production{
color:red;
}
</style>
<?php include "modal_msg.php";?>
<!----------------------child rescued page started---------------------------------->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div style="float:right; margin-top:12px; margin-right:20px;"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?staff/child_rescued_list">List/Edit Rescued Child </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Rescued Child </div>
      </div>
      <div class="panel-body"> <?php echo form_open('staff/project/create/', array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data','name'=> 'basicForm')); ?>
        <?php 
			   $session_ids=$this->session->userdata('login_user_id');
					$tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();
					foreach($tstrole as $strp):
					$role_id=$strp['account_role_id'];
					$district_id=$strp['district_id'];
					$state_id=$strp['state_id'];
					endforeach;

              ?>
			  <?php if($role_id == '5'){
			  include "modal_msg_ls_only.php";
			  }
			  ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Child photo</label>
              <div class="col-sm-5">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput"> <img src="<?php echo $this->crud_model->get_image_url('child' , $row['staff_id']);?>" alt="..."> </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image" accept="image/*">
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
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
              Rescue<span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <div class='input-group date' id='datetimepicker'>
					<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  <input type="text"  id="idate_of_rescue" class="form-control" name="idate_of_rescue" data-validate="required" value=""   readonly>
                </div>
				<span id="error_msg1"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Name of the Child
             
              <span style="color:#F00;">*</span>
             
              </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="cname" id="cname" value="" 
                               data-validate="required" data-message-required="This field is required"
							   autofocus>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4. Sex <span style="color:#F00;">*</span></label>
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
              <label for="field-1" class="col-sm-3 control-label">5. Is Date of Birth Present ?</label>
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
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Education</label>
              <div class="col-sm-8">
                <select name="education" class="form-control" id="education">
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
          <div class="col-sm-6" id="ispresent_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">i. Date of Birth <span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control " name="dob" id="dob"  value=""  autofocus data-validate="required" >
                </div>
				<span id="error_msg"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="ispresent_no" >
		  <div class="col-sm-6" style="margin-left:36px;">
              <div class="form-group" >
                <label for="field-1" class="col-sm-4 control-label">i. Year<span style="color:#F00;">*</span></label>
                <div class="col-sm-6" >
                  <input type="number" class="form-control" name="year" id="year" min="5" max ="17" value=""  
                                onblur="if(this.value>17){this.value='17';}else if(this.value<5){this.value='5';}"  data-validate="required" >
                </div>
              </div>
            </div>
            <div class="col-sm-6" style="margin-left:-42px;">
              <div class="form-group">
                <label for="field-1" class="col-sm-5 control-label">ii. Month<span style="color:#F00;">*</span></label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" name="month" id="month" min="0" max ="11" value=""
				   onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}"   data-validate="required">
                </div>
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
                  <option value="Widowed">Widowed </option>
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
                  <option value="Isai">Christian </option>
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
              <div class="col-sm-8">
                <input type="text" class="form-control" name="other_religion" id="other_religion"  value="" >
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9. a.Category</label>
              <div class="col-sm-8">
                <select name="category" class="form-control" id="category">
                <option value="">Select</option>
                  <option value="SC">SC </option>
                  <option value="ST">ST </option>
                  <option value="OBC">OBC </option>
                  <option value="General">General </option>
                  <option value="other">Other </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">b. Caste Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="cast" id="cast" 
                               value="" autofocus>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="catagory_other">
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9.i. Please Specify</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="other_cast" id="other_cast"  
                                value=""  autofocus>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. Father's Name </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="father" id="father" 
                                value="" autofocus>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Mother's Name </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="mother_name" id="mother_name" 
                                value="" autofocus />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Address</label>
              <div class="col-sm-8">
                <textarea name="postaladdress" class="form-control"  style="resize: none;"></textarea>
              </div>
            </div>
          </div>
		   <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Contact no</label>
              <div class="col-sm-8">
               <input type="text" class="form-control" name="contact_no" id="contact_no" onkeypress="return isNumberKey(event)"
                                value="" autofocus />
              </div>
            </div>
          </div>
		  </div>
		  <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">14. State</label>
              <div class="col-sm-8">
                <select name="state" class="form-control" id="state" data-validate="required">
                  <?php 
								 $child_state = $this->db->select('*')->where('parent_id','IND')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
		
                                  foreach($child_state as $crow1):
                                  ?>
                  <option value="<?php echo $crow1['area_id'];?>" <?php if($state_id==$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                </select>
              </div>
            </div>
          </div>
      
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15. District</label>
              <div class="col-sm-8">
                <select name="choices" id="choices" class="form-control" data-validate="required">
                  <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_dist = $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_dist as $crow2):
                                  ?>
                  <option value="<?php echo $crow2['area_id'];?>" <?php if($district_id==$crow2['area_id']){ echo 'selected'; }  ?>><?php echo $crow2['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                  <!-- js populates -->
                </select>
              </div>
            </div>
          </div>
		  </div>
		  <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">16. Block <span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <select name="block" class="form-control" id="block" data-validate="required">
                  <option value="" >Select</option>
                  <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_block as $crow3):
                                  ?>
                  <option value="<?php echo $crow3['area_id'];?>" ><?php echo $crow3['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                </select>
              </div>
            </div>
          </div>
       
          <div class="col-md-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">17. Birth Registered</label>
              <div class="col-sm-8">
                <select name="is_birth_registered" class="form-control" id="is_birth_registered">
				 <option value="">Select</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
              </div>
              
            </div>
          </div>
		  </div>
		  <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">18. Adhar Card ID</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="adhar_card" id="adhar_card" maxlength="12" value="" autofocus>
              </div>
            </div>
          </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">19. Rescued by</label>
              <div class="col-sm-8">
                <select name="rescue_by" class="form-control" id="rescue_by">
				<option value="">Select</option>
                  <option value="LEO/LS/LRD"> LEO/LS/LRD </option>
                  <option value="JCWO"> JCWO </option>
                  <option value="CHILD LINE"> CHILD LINE </option>
                  <option value="NGO/CBO">NGO/CBO</option>
                  <option value="PUBLIC SERVANT" >PUBLIC SERVANT</option>
                  <option value="PRIs">PRIs</option>
                  <option value="Others"> Others </option>
                </select>
              </div><br>
			  <div class="col-sm-8" id="Rescue_by_other" style="margin-left:129px;margin-top:10px;">
              please specify
			   <input type="text" class="form-control" name="rescue_by_other" id="rescue_by_other" value="" autofocus>
			  </div>
            </div>
          </div>
         </div>
		 <div class="row">
		  <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">20. Place of Rescue<span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <select name="basic_place_of_rescue" class="form-control" data-validate="required" id="basic_place_of_rescue">
					<option value="">Select</option>
                  <option value="Within">Within</option>
                  <option value="Outside State">Outside State </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">21. Remarks<br/>
              (Please Specify)</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="other" id="other" value="" autofocus>
              </div>
            </div>
          </div>

        </div>
        <!--end of row-->
      </div>
    </div>
  </div>
  <!--------------------------------within state starts------------------------>
  <div id='withinstate'>
    <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading" style="background:#ebebeb;">
          <div style="float:right; margin-top:12px; margin-right:20px;"> <i class="entypo-plus-circled"></i> </div>
          <div class="panel-title" > <i class="entypo-plus-circled"></i> Within State </div>
        </div>
		<div class="panel-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Employer Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="iemployer_name" id="iemployer_name" value="" autofocus   >
              </div>
            </div>
          </div>
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" ></div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Employer Address</label>
              <div class="col-sm-8">
                <textarea class="form-control" name="iemployer_detail_address" id="iemployer_detail_address" style="resize: none;" ></textarea>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Contact no</label>
              <div class="col-sm-8">
               <input type="text" class="form-control" name="wcontact_no" id="wcontact_no" onkeypress="return isNumberKey(event)"
                                value="" autofocus />
              </div>
            </div>
          </div>
        </div>
        <!--start -->
        <div id="addresspresent_no">
          <div class="row">
            <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 i.  Place of Rescue</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="place_of_rescue" id="place_of_rescue"  value=""  >
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">ii. State</label>
                <div class="col-sm-8">
                  <select name="within_state" class="form-control" id="within_state" data-validate="required">
                    <?php 
                                 // $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();
								 
								 
								 $child_state1 = $this->db->select('*')->where('parent_id','IND')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
		
							
                                  foreach($child_state1 as $crow9):
                                  ?>
                    <option value="<?php echo $crow9['area_id'];?>" <?php if($state_id==$crow9['area_id']){ echo 'selected'; }  ?>><?php echo $crow9['area_name']; ?></option>
                    <?php
                              endforeach;
                              ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">iii.  District</label>
                <div class="col-sm-8">
                  <select name="within_district" id="within_district" class="form-control" data-validate="required">
                    <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_dist1 = $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_dist1 as $crow10):
                                  ?>
                    <option value="<?php echo $crow10['area_id'];?>" <?php if($district_id==$crow10['area_id']){ echo 'selected'; }  ?>><?php echo $crow10['area_name']; ?></option>
                    <?php
                              endforeach;
                              ?>
                    <!-- js populates -->
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">iv. Block</label>
                <div class="col-sm-8">
                  <select name="within_block" class="form-control" id="within_block">
                    <option value="" >Select</option>
                    <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_block1 = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_block1 as $crow11):
                                  ?>
                    <option value="<?php echo $crow11['area_id'];?>" ><?php echo $crow11['area_name']; ?></option>
                    <?php
                              endforeach;
                              ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
				
				
				
				document.forms['basicForm'].elements['within_state'].onchange = function(e) {
	
						var datas = new Object();
						
						
						//detailstate();
						
						stateid1=document.getElementById('within_state').value;
						
						
						
	
						 var relName = 'within_district';
						 
						  var relName1 = 'within_block';
	 
	 
	 document.getElementById('within_block').disabled=true;
	
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getdist_within/"+stateid1,
								data: "",
								dataType: "text",  
         						cache:false,
								success: function(msg){
								
									datas= msg;
                        
								//alert(datas)	
								var form = document.forms['basicForm'];
									
    
								// reference to associated select box 
								var relList = form.elements[ relName ];
								
								var relList1 = form.elements[ relName1 ];
	
								Select_List_Data=eval( '(' + msg + ')' );
   
  							var obj=Select_List_Data[relName][stateid1]
  
								// remove current option elements
								removeAllOptions(relList, true);
								
								removeAllOptions(relList1, true);
								
								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);
									
									
									//obj = msg;
								},
								error: function() {
									
									//alert('<?php echo base_url();?>');
								}
								

            					});
   
};


		document.forms['basicForm'].elements['within_district'].onchange = function(e) {
	
						var datas = new Object();
						
						
						//detailstate();
						
						distid1=document.getElementById('within_district').value;
	
						 var relName = 'within_block';
						 
	  document.getElementById('within_block').disabled=false;
	 
	 // alert(distid);
	
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getblock_within/"+distid1,
								data: "",
								dataType: "text",  
         						cache:false,
								success: function(msg){
								
									datas= msg;
                        
									
								var form = document.forms['basicForm'];
									
    
								// reference to associated select box 
								var relList = form.elements[ relName ];
								
/*								alert(relList)
								
								alert(datas);
*/								
								Select_List_Data=eval( '(' + msg + ')' );
								
               
   
  							var obj=Select_List_Data[relName][distid1]
  
							  // alert(obj);
								
								// remove current option elements
								removeAllOptions(relList, true);
								
								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);
									
									//obj = msg;
								},
								error: function() {
									
									//alert('<?php echo base_url();?>');
								}
								

            					});
	
						};

				</script>
        <!--end-->
        <div class="row" style="padding-top:10px;">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Work Involved In</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="work_involved" class="form-control"  id="work_involved">
                  <option value="">Select</option>
                  <option value="Brick-kiln">Brick-kiln</option>
                  <option value="Industries">Industries</option>
                  <option value="Hotel">Hotel/Dhaba</option>
                  <option value="Flat">Flat</option>
                  <option value="Street">Street</option>
                  <option value="Garage">Garage</option>
                  <option value="Vendor">Vendor</option>
                  <option value="Factory/Small Scale Industry">Factory/Small Scale Industry</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-sm-8" id="workinvolved_other" style="margin-left:145px;">Please Specify
                <input type="text" class="form-control" name="iperiod_work" id="iperiod_work" value=""  autofocus="autofocus"  />
              </div>

            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="col-md-3">6. Duration of work </div>
            <div class="col-md-3" style="margin-right:-22px;" >
              <label for="field-1" class="control-label">no of years</label>
              <input type="number" class="form-control" name="wyears" min="0" max="11" autofocus="autofocus"  onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}" />
            </div>
            <div class="col-md-3" style="margin-right:-23px;">
              <label for="field-1" class="control-label">no of months</label>
              <input type="number" class="form-control" name="wmonths"  value="" min="0" max="11" autofocus="autofocus" onKeyUp="if(this.value>11){this.value='11';}else if(this.value<0){this.value='0';}"  />
            </div>
            <div class="col-md-3">
              <label for="field-1" class="control-label">no of days</label>
              <input type="number" class="form-control" name="wdays"  value=""  min="1"  max="31" autofocus="autofocus" onKeyUp="if(this.value>31){this.value='31';}else if(this.value<0){this.value='1';}"  />
            </div>
          </div> 
          <div class="clearfix"> </div>
        </div>
     
<!-- Code added by ripon -->
     
          
           <div class="row" style="padding-top:10px;">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. By Whom Child was deployed</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="by_whom_deployed" class="form-control"  id="by_whom_deployed">
                <option value="">Select</option>
                <option value="Self">Self</option>
                <option value="Parent">Parent/ Guardian</option>
                <option value="Relative">Relative</option>
                <option value="Agent">Agent</option>
				<option value="Other">Other</option>
                </select>
              </div>
              <div class="col-sm-8" id="child_deployed_block_in">Please Specify
                <input type="text" class="form-control" name="by_whom_deployed_other1" id="by_whom_deployed_other1" value=""  autofocus="autofocus"  />
              </div>
            </div>
          </div>
      
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8. Working Environment</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="environment_in" class="form-control"  id="environment_in">
                <option value="">Select</option>
                <option value="Healthy">Healthy</option>
                <option value="Satisfactory">Satisfactory</option>
                <option value="Unhealthy">Unhealthy</option>
                <option value="Other"> Other</option>
                </select>
              </div>
              
                        <div class="col-sm-8" id="environment_block_in">Please Specify
                <input type="text" class="form-control" name="environment_in_other" id="environment_in_other" value=""  autofocus="autofocus"  />
              </div>
              
            </div>   
           </div>  
          </div>
           
     
          
           <div class="row" style="padding-top:10px;">
           
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9. Behaviour of Employer</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="behaviour_of_employer" class="form-control"  id="behaviour_of_employer">
                <option value="">Select</option>
                <option value="Cordial">Cordial</option>
                <option value="Un cordial">Un cordial</option>
                <option value="Other">Other</option>
                </select>
              </div>
               <div class="col-sm-8" id="employer_behaviour_block_in">Please Specify
                <input type="text" class="form-control" name="behaviour_of_employer_other" id="behaviour_of_employer_other" value=""  autofocus="autofocus"  />
              </div>
            </div>
          </div>
      
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. Any complaint lodge at Police Station</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
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
	 <div class="row">
           
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. i. FIR Number</label>
              <div class="col-sm-8">
             
               <input type="text" class="form-control" name="fir_no" id="fir_no" value="" autofocus />
              </div>
            </div>
          </div>
      
         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">ii. Date of FIR</label>
              <div class="col-sm-8">
            	 <div class="input-group date" id="datepickerfir"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
               <input type="text" class="form-control" name="fir_date" id="fir_date"  autofocus />
			   </div>
			    <span id="error_msg2"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6" style="margin-top:10px;">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> iii. Name of Police Station</label>
              <div class="col-sm-8">
              
               <input type="text" class="form-control " name="name_policestation" id="name_policestation" value="" autofocus />
              </div>
            </div>
          </div>
          
          </div> 
		  </div>
	 <!-- end-->
          
        <div class="row" style="padding-top:10px;">
           
          <div class="col-sm-6">
            <div class="col-md-3">11. Total no. of Working Days in a week and Hour</div>
            <div class="col-md-3" style="margin-right:-22px;" >
              <label for="field-1" class="control-label">Days</label>
              <input type="number" class="form-control" name="working_days" id="working_days" min="1" max="7" autofocus="autofocus"  onKeyUp="if(this.value>7){this.value='7';}else if(this.value<0){this.value='0';}" />
            </div>
            <div class="col-md-3" style="margin-right:-23px;">
              <label for="field-1" class="control-label">Hour of Work</label>
              <input type="number" class="form-control" name="working_hours"  value="" id="working_hours"  min="1" max="24" autofocus="autofocus" onKeyUp="if(this.value>24){this.value='24';}else if(this.value<0){this.value='0';}"   />
            </div>
          </div>  
      
         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Salary/ Honorarium (Per month)</label>
              <div class="col-sm-8">
              Amount (In Rs)
               <input type="text" class="form-control" name="salary" id="salary" value="" autofocus />
              </div>
            </div>
          </div>
          
          </div> 
        
        <!--ripon -->       
        
        
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
        </div>
      </div>
    </div>
	</div>
  </div>
 <!-- ----------------------------end of within state -------------------------->
  <!--------------------------------- outside state start------------------------------->
  <div id='outsidestate' style="display:none;">
    <div class="col-md-12">
     <div class="panel panel-primary" data-collapsed="0">
        <div class="panel-heading" style="background:#ebebeb;">
          <div style="float:right; margin-top:12px; margin-right:20px;"> <i class="entypo-plus-circled"></i> </div>
          <div class="panel-title" > <i class="entypo-plus-circled"></i>
            <?php /*echo get_phrase('project_form');*/ ?>
            Outside State </div>
        </div>
		<div class="panel-body">
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.  Employer Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="employer_name" id="isemployer_name"  value=""  >
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Employer Address</label>
              <div class="col-sm-8">
                <textarea class="form-control" name="employer_address" id="otside_address" style="resize: none;" ></textarea>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Contact no</label>
              <div class="col-sm-8">
               <input type="text" class="form-control" name="ocontact_no" id="ocontact_no" onkeypress="return isNumberKey(event)"
                                value="" autofocus />
              </div>
            </div>
          </div>
        </div>
        <!--start-->
        <!--//end of condition div-->
        <div id="outsideaddress_no">
          <div class="row">
            <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">4 i.  Place of Rescue</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="place_of_rescue_out" id="place_of_rescue_out"  value=""  >
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">ii. State</label>
                <div class="col-sm-8">
                  <select name="outside_state" class="form-control" id="outside_state" data-validate="required">
                    <?php 
                                 // $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();
								 
								 
								 $child_state2 = $this->db->select('*')->where('parent_id','IND')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
		
							
                                  foreach($child_state2 as $crow20):
                                  ?>
                    <option value="<?php echo $crow20['area_id'];?>" <?php if($state_id==$crow20['area_id']){ echo 'selected'; }  ?>><?php echo $crow20['area_name']; ?></option>
                    <?php
                              endforeach;
                              ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">iii.  District</label>
                <div class="col-sm-8">
                  <select name="outside_district" id="outside_district" class="form-control" data-validate="required">
                    <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_dist2 = $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_dist2 as $crow21):
                                  ?>
                    <option value="<?php echo $crow21['area_id'];?>" <?php if($district_id==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                    <?php
                              endforeach;
                              ?>
                    <!-- js populates -->
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">iv. Block</label>
                <div class="col-sm-8">
                  <select name="outside_block" class="form-control" id="outside_block">
                    <option value="" >Select</option>
                    <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_block2 = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_block2 as $crow22):
                                  ?>
                    <option value="<?php echo $crow22['area_id'];?>" ><?php echo $crow22['area_name']; ?></option>
                    <?php
                              endforeach;
                              ?>
                  </select>
                </div>
              </div>
            </div>
    
          </div>
        </div>
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Work Involved in</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="work_involved" id="hl3" value="" autofocus="autofocus"   />-->
                <select name="work_involved_outside" class="form-control"  id="work_involved_outside">
                  <option value="">Select</option>
                  <option value="Brick-kiln">Brick-kiln</option>
               	  <option value="Industries">Industries</option>
                  <option value="Hotel">Hotel/Dhaba</option>
                  <option value="Flat">Flat</option>                  
                  <option value="Street">Street</option>
                  <option value="Garage">Garage</option>
                  <option value="Vendor">Vendor</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-sm-8" id="workinvolved_other2" style="margin-left:145px;">Please Specify
                <input type="text" class="form-control " name="work_involved_outside_other" id="work_involved_outside_other"   value=""  >
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Date of Production before CWC</label>
              <div class="col-sm-8">
               <div class="input-group date" id="datepickerpr"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_production" id="date_of_production"   value=""  readonly>
                </div>
				<span id="error_msg_production"></span>
              </div>
            </div>
          </div>
        </div>
        
        
        <!--start-->
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <label for="field-1" class="col-sm-3 control-label">7. Name of CWC </label>
            <div class="form-group">
              <div class="col-sm-8">
                <input type="text" class="form-control " name="name_of_cwc" id="name_of_cwc"   value=""  >
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="field-2" class="col-sm-3 control-label"> 8. District</label>
            <div class="form-group">
              <div class="col-sm-8">
                <select name="location_concern" id="location_concern" class="form-control" data-validate="required">
                  <?php 
                                 // $child_dist		=	$this->db->get_where('child_area_detail',array('parent_id' => $state_id))->result_array();
								 
								  $child_dist1 = $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
								  
                                  foreach($child_dist1 as $crow10):
                                  ?>
                  <option value="<?php echo $crow10['area_id'];?>" <?php if($district_id==$crow10['area_id']){ echo 'selected'; }  ?>><?php echo $crow10['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                  <!-- js populates -->
                </select>
                <!--<input type="text" class="form-control" name="location_concern" id="location" value="" autofocus="autofocus"   />-->
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <label for="field-2" class="col-sm-3 control-label">9.Details of certificate issued </label>
            <div class="form-group">
              <div class="col-sm-8">
            
				<?php $val=explode(",",$row['details_of_certificate']);?>
                <input type="checkbox" name="details_of_certificate[]"  
				value="AgeVerification" <?php if(in_array('AgeVerification',$val)) {echo "checked";}?>><label>Age Verification</label><br>
                <input type="checkbox" name="details_of_certificate[]"
				 value="BondedLabour"  <?php if(in_array('BondedLabour',$val)) {echo "checked";}?>><label> Bonded Labour</label><br />
                <input type="checkbox" name="details_of_certificate[]" 
				value="MigrantLabour" <?php if(in_array('MigrantLabour',$val)) {echo "checked";}?>><label> Migrant Labour</label><br />
                <input type="checkbox" name="details_of_certificate[]" value="MedicalFitness" <?php if(in_array('MedicalFitness',$val)) {echo "checked";}?>> <label> Medical Fitness</label><br />
                <input type="checkbox" name="details_of_certificate[]"  value="Art & Craft" <?php if(in_array('Art & Craft',$val)) {echo "checked";}?>> <label>Art & Craft</label><br />
                <input type="checkbox" name="details_of_certificate[]" value="none"  <?php if(in_array('none',$val)) {echo "checked";}?>><label>None</label><br />
                <input type="checkbox" name="details_of_certificate[]" value="Others" <?php if(in_array('Others',$val)) {echo "checked";}?>><label>Others</label><br />
              </div>
              <div class="col-sm-8" id="location_other">Please Specify
                <input type="text" class="form-control" name="details_of_certificate_other" id="details_of_certificate_other" value=""  />
              </div>
            </div>
          </div>
        </div>
       
        
   
          
           <div class="row" style="padding-top:10px;">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. By Whom Child was deployed</label>
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
              <div class="col-sm-8" id="child_deployed_block_out">Please Specify
                <input type="text" class="form-control" name="by_whom_deployed_other" id="by_whom_deployed_other" value=""  autofocus="autofocus"  />
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
              
               <div class="col-sm-8" id="environment_block_out">Please Specify
                <input type="text" class="form-control" name="oenvironment_in_other" id="oenvironment_in_other" value=""  autofocus="autofocus"  />
              </div>
              
            </div>
          </div>
           </div>     
        
          
           <div class="row" style="padding-top:10px;">
           
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">12. Behaviour of Employer</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
                <select name="obehaviour_of_employer" class="form-control"  id="obehaviour_of_employer">
                <option value="">Select</option>
                <option value="Cordial">Cordial</option>
                <option value="Un cordial">Un cordial</option>
                <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-sm-8" id="employer_behaviour_block_out">Please Specify
                <input type="text" class="form-control" name="obehaviour_of_employer_other" id="obehaviour_of_employer_other" value=""  autofocus="autofocus"  />
              </div>
            </div>
          </div>
      
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Any complaint lodge at Police Station</label>
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
		<div class="row" style="padding-top:10px;">
           
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13 i. FIR Number</label>
              <div class="col-sm-8">
                 <input type="text" class="form-control" name="ofir_no" id="ofir_no" value=""  />
                
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
      
          <div class="col-sm-6" style="margin-top:15px;">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. iii Name of Police Station</label>
              <div class="col-sm-8">
                <!-- <input type="text" class="form-control" name="iwork_involved" id="iwork_involved" value="" autofocus="autofocus"   />-->
               
                 <input type="text" class="form-control" name="policestation_name" id="policestation_name" value=""  />
              </div>
            </div>
          </div>
	    </div>     
		</div>
		
		<!--end-->
          
        <div class="row" style="padding-top:10px;">
           
          <div class="col-sm-6">
            <div class="col-md-3">14. Total no. of Working Days in a week and Hour</div>
            <div class="col-md-3" style="margin-right:-22px;" >
              <label for="field-1" class="control-label">Days</label>
              <input type="number" class="form-control" name="oworking_days" id="oworking_days" min="1" max="7" onKeyUp="if(this.value>7){this.value='7';}else if(this.value<1){this.value='1';}"autofocus="autofocus"  />
            </div>
            <div class="col-md-3" style="margin-right:-23px;">
              <label for="field-1" class="control-label">Hour of Work</label>
              <input type="number" class="form-control"  name="oworking_hours" id="oworking_hours"  value="" min="1" max="24" onKeyUp="if(this.value>24){this.value='24';}else if(this.value<1){this.value='1';}"autofocus="autofocus"  />
            </div>
          </div>  
      
         <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15. Salary/ Honorarium (Per month)</label>
              <div class="col-sm-8">
              Amount (In Rs)
               <input type="text" class="form-control" name="osalary" id="osalary" value="" autofocus />
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
  <div class="form-group" style="margin-top:10px;">
    <div class="col-sm-offset-5 col-sm-7">
      <button type="submit" class="btn btn-info" id="submit-button"> Save</button>
      <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
      <span id="preloader-form"></span> </div>
  </div>
  <?php echo form_close(); ?> </div>
 <!------------------------------ end of form---------------------------------->
  
          <script>
				
				document.forms['basicForm'].elements['outside_state'].onchange = function(e) {
	
						var datas = new Object();
						//detailstate();
						stateid2=document.getElementById('outside_state').value;
						 var relName = 'outside_district';
						  var relName1 = 'outside_block';
	 document.getElementById('outside_block').disabled=true;
							 $.ajax({
								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getdist_outside/"+stateid2,
								data: "",
								dataType: "text",  
         						cache:false,
								success: function(msg){
								
									datas= msg;
								//alert(datas)	
								var form = document.forms['basicForm'];
								// reference to associated select box 
								var relList = form.elements[ relName ];
								var relList1 = form.elements[ relName1 ];
								Select_List_Data=eval( '(' + msg + ')' );
					var obj=Select_List_Data[relName][stateid2]

								removeAllOptions(relList, true);
								removeAllOptions(relList1, true);
								appendDataToSelect(relList, obj);
									//obj = msg;
								},
								error: function() {
									//alert('<?php echo base_url();?>');
								}
            					});

};
document.forms['basicForm'].elements['outside_district'].onchange = function(e) {
	
						var datas = new Object();
						//detailstate();
						distid2=document.getElementById('outside_district').value;
	
						 var relName = 'outside_block';
						 
	  document.getElementById('outside_block').disabled=false;
	 
	 // alert(distid);
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getblock_outside/"+distid2,
								data: "",
								dataType: "text",  
         						cache:false,
								success: function(msg){
								
									datas= msg;
								var form = document.forms['basicForm'];
								// reference to associated select box 
								var relList = form.elements[ relName ];

								Select_List_Data=eval( '(' + msg + ')' );
  							var obj=Select_List_Data[relName][distid2]
								// remove current option elements
								removeAllOptions(relList, true);
								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);
									//obj = msg;
								},
								error: function() {
									
									//alert('<?php echo base_url();?>');
								}
            					});
};


				</script>
<script>

    $(document).ready(function () {
	/*$('#memberModal').modal('show');*/
	
	
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
            $('#Rescue_by_other').show();
			
       		 } else {
            
			$('#Rescue_by_other').hide(); 
       		 } 
	
	if($('#complaint_lodge').val() == 'Yes') {
            $('#complaint_lodge_yes').show();
			
       		 } else {
            
			$('#complaint_lodge_yes').hide(); 
       		 } 
	
	if($('#ocomplaint_lodge').val() == 'Yes') {
            $('#complaint_yes').show();
			
       		 } else {
            
			$('#complaint_yes').hide(); 
       		 } 
	
		if($('#by_whom_deployed').val() == 'Other') {
            $('#child_deployed_block_in').show();
			
       		 } else {
            
			$('#child_deployed_block_in').hide(); 
       		 } 
			 
		if($('#environment_in').val() == 'Other') {
            $('#environment_block_in').show();
			
       		 } else {
            
			$('#environment_block_in').hide(); 
       		 }
			 
		if($('#behaviour_of_employer').val() == 'Other') {
            $('#employer_behaviour_block_in').show();
			
       		 } else {
            
			$('#employer_behaviour_block_in').hide(); 
       		 }
			 
			 
			 
			 
		 if($('#oby_whom_deployed').val() == 'Other') {
            $('#child_deployed_block_out').show();
			
       		 } else {
            
			$('#child_deployed_block_out').hide(); 
       		 } 
			 
		if($('#oenvironment_in').val() == 'Other') {
            $('#environment_block_out').show();
			
       		 } else {
            
			$('#environment_block_out').hide(); 
       		 }
			 
		if($('#obehaviour_of_employer').val() == 'Other') {
            $('#employer_behaviour_block_out').show();
			
       		 } else {
            
			$('#employer_behaviour_block_out').hide(); 
       		 }	 
	
	
	//Code added by Ripon ends
	
	
	
	
	if($('#work_involved_outside').val() == 'Other') {
            $('#workinvolved_other2').show();
			
       		 } else {
            
			$('#workinvolved_other2').hide(); 
       		 } 
	
	if($('#location').val() == 'Other') {
            $('#location_other').show();
			
       		 } else {
            
			$('#location_other').hide(); 
       		 } 
	if($('#work_involved').val() == 'Other') {
            $('#workinvolved_other').show();
			
       		 } else {
            
			$('#workinvolved_other').hide(); 
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
            $(this).ajaxSubmit(options);
            return false;
        });
		
		$("#cname").on("keydown", function (e) {
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
				return
			}
		});
		$("#cast").on("keydown", function (e) {
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
				return
			}
		});
	
	$("#name_policestation").on("keydown", function (e) {
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
		$("#policestation_name").on("keydown", function (e) {
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
	$("#father").on("keydown", function (e) {
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
				return
			}
		});
		$("#mother_name").on("keydown", function (e) {
			var charcode = e.which;
			if ( /*(charcode === 8) ||*/ // Backspace
				(charcode >= 33 && charcode <= 57) ||(charcode >= 96 && charcode <= 105)) /*|| // 0 - 9
				(charcode >= 65 && charcode <= 90) || // a - z
				(charcode >= 97 && charcode <= 122))*/ { // A - Z
		
		//alert(charcode);
				return false;
			} else {
				//e.preventDefault()
				//alert(charcode);
				return
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
		var role_id = "<?php echo $role_id;?>";
		var is_dob_r = (jqForm[0].isdob.value);
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
		if (!jqForm[0].cname.value)
        {
            return false;
        }
		if (!jqForm[0].block.value)
        {
            return false;
        }
		if (!jqForm[0].gender.value)
        {
            return false;
        }
		if (!jqForm[0].basic_place_of_rescue.value)
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
		
		if(is_dob_r == "Yes"){
		var newAge=calculateAge(newDate);
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
		var value_sub = copmareAge_year(daterescue,year_value);
		}
		if(is_dob_r == "Yes"){
			if(value < 5){
			$("#error_msg").html(" ");
			$("#datepicker").removeClass("newClass");
			$("#error_msg1").html("Child rescue date must greater than date of birth");
			document.getElementById("idate_of_rescue").focus();
			$("#datetimepicker").addClass("newClass");
				return false;
			}
		}
		else{
			
			if(year_value < value_sub ){
				$("#error_msg1").html("Child rescue date must greater than date of birth");
				document.getElementById("idate_of_rescue").focus();
				$("#datetimepicker").addClass("newClass");
					return false;
			}
		}
		if(place == "Within"){
			if(within_fir_date !=""){
				if(new Date(daterescue)>new Date(within_fir_date)){
					$("#error_msg2").html("FIR date should be later or equal to date of rescue");
					document.getElementById("fir_date").focus();
					$("#datepickerfir").addClass("newClass");
						return false;
				}
			}
		
		}else{
			if(out_fir_date !=""){
				if(new Date(daterescue)>new Date(out_fir_date)){
					$("#error_msg3").html("FIR date should be later or equal to date of rescue");
					document.getElementById("ofir_date").focus();
					$("#datepickerfirout").addClass("newClass");
						return false;
				}
			}
			if(date_f_prod !=""){
				if(daterescue>date_f_prod){
					$("#error_msg_production").html("Date of production should be later or equal to date of rescue");
					document.getElementById("date_of_production").focus();
					$("#datepickerpr").addClass("newClass");
						return false;
				}
			}
		}
		
		//getConfirmation();
		$('#msgModal-11').modal('show');
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
		
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
		var role_id = "<?php echo $role_id;?>";
		
		
        $('#preloader-form').html('');
		/*if(role_id == '5'){
		 $('#msgModal-11').modal('show');
		}*/
		 $('#msgModal-1').modal('show');
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
		
   		 $('#category').change(function(){
        	if($('#category').val() == 'other') {
			/*document.getElementById("other2").focus();*/
            $('#catagory_other').show();
			
       		 } else {
            
			$('#catagory_other').hide(); 
       		 } 
    	});
		});
		$(function() {
		
   		 $('#work_involved').change(function(){
        	if($('#work_involved').val() == 'Other') {
            $('#workinvolved_other').show();
			
       		 } else {
            
			$('#workinvolved_other').hide(); 
       		 } 
    	});
		});
		$(function() {
		
   		 $('#location').change(function(){
        	if($('#location').val() == 'Other') {
            $('#location_other').show();
			
       		 } else {
            
			$('#location_other').hide(); 
       		 } 
    	});
		});
		
		$(function() {
		
   		 $('#work_involved_outside').change(function(){
        	if($('#work_involved_outside').val() == 'Other') {
            $('#workinvolved_other2').show();
			
       		 } else {
            
			$('#workinvolved_other2').hide(); 
       		 } 
    	});
		});
		
		//Code Added by Ripon
		$(function() {
		
   		 $('#by_whom_deployed').change(function(){
        	if($('#by_whom_deployed').val() == 'Other') {
            $('#child_deployed_block_in').show();
			
       		 } else {
            
			$('#child_deployed_block_in').hide(); 
       		 } 
    	});
		});
		
		$(function() {
		
   		 $('#environment_in').change(function(){
        	if($('#environment_in').val() == 'Other') {
            $('#environment_block_in').show();
			
       		 } else {
            
			$('#environment_block_in').hide(); 
       		 } 
    	});
		});
		
		$(function() {
		
   		 $('#behaviour_of_employer').change(function(){
        	if($('#behaviour_of_employer').val() == 'Other') {
            $('#employer_behaviour_block_in').show();
			
       		 } else {
            
			$('#employer_behaviour_block_in').hide(); 
       		 } 
    	});
		});
		
		$(function() {
		
		$('#oby_whom_deployed').change(function(){
        	if($('#oby_whom_deployed').val() == 'Other') {
            $('#child_deployed_block_out').show();
			
       		 } else {
            
			$('#child_deployed_block_out').hide(); 
       		 } 
    	});
		});
		
		$(function() {
		
   		 $('#oenvironment_in').change(function(){
        	if($('#oenvironment_in').val() == 'Other') {
            $('#environment_block_out').show();
			
       		 } else {
            
			$('#environment_block_out').hide(); 
       		 } 
    	});
		});
		
		$(function() {
		
   		 $('#obehaviour_of_employer').change(function(){
        	if($('#obehaviour_of_employer').val() == 'Other') {
            $('#employer_behaviour_block_out').show();
			
       		 } else {
            
			$('#employer_behaviour_block_out').hide(); 
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
	<!--	within strate-->
		$(function() {
		
   		 $('#complaint_lodge').change(function(){
        	if($('#complaint_lodge').val() == 'Yes') {
            $('#complaint_lodge_yes').show();
			
       		 } else {
            
			$('#complaint_lodge_yes').hide(); 
       		 } 
    	});
		});
		
	<!--rescued by-->
	$(function() {
		
   		 $('#rescue_by').change(function(){
        	if($('#rescue_by').val() == 'Others') {
            $('#Rescue_by_other').show();
			
       		 } else {
            
			$('#Rescue_by_other').hide(); 
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
		
	
		
 $(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
</script>
<script type="text/javascript">
 var FromEndDate = new Date();
$('#datetimepicker').datetimepicker({
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
	$('#datepicker').blur(function () {
    alert("jiii");
});
	</script>
<script>
	
// object literal holding data for option elements
var Select_List_Data;
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
		
		o = document.createElement('option');
        o.appendChild( document.createTextNode( '--Select--' ) );
		o.value ='';
		f.appendChild(o);
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
		 
		
		
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['state'].onchange = function(e) {
	
						var datas = new Object();
						
						
						//detailstate();
						
						stateid=document.getElementById('state').value;
	
						 var relName = 'choices';
						 
						  var relName1 = 'block';
	 
	 
	 document.getElementById('block').disabled=true;
	
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getdist/"+stateid,
								data: "",
								dataType: "text",  
         						cache:false,
								success: function(msg){
								
									datas= msg;
                        
									
								var form = document.forms['basicForm'];
									
    
								// reference to associated select box 
								var relList = form.elements[ relName ];
								
								var relList1 = form.elements[ relName1 ];
								
/*								alert(relList)
								
								alert(datas);
*/								
								Select_List_Data=eval( '(' + msg + ')' );
								

   
  							var obj=Select_List_Data[relName][stateid]
							   //alert(obj);
								// remove current option elements
								removeAllOptions(relList, true);
								
								removeAllOptions(relList1, true);
								
								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);
									//obj = msg;
								},
								error: function() {
									
									//alert('<?php echo base_url();?>');
								}
            					});
   
};
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['choices'].onchange = function(e) {
	
						var datas = new Object();
		
						//detailstate();
						
						distid=document.getElementById('choices').value;
	
						 var relName = 'block';
						 
	  document.getElementById('block').disabled=false;
	 // alert(distid);
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getblock/"+distid,
								data: "",
								dataType: "text",  
         						cache:false,
								success: function(msg){
								
									datas= msg;
								var form = document.forms['basicForm'];
								// reference to associated select box 
								var relList = form.elements[ relName ];
/*								alert(relList)
								
								alert(datas);
*/								
								Select_List_Data=eval( '(' + msg + ')' );
  							var obj=Select_List_Data[relName][distid]
								// remove current option elements
								removeAllOptions(relList, true);
								
								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);
									//obj = msg;
								},
								error: function() {
									
									//alert('<?php echo base_url();?>');
								}
            					});
   
};

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
	</script>				
					
					