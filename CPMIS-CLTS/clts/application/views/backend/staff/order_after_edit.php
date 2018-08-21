

<?php //$date_resuced=$order_after_edit_data[0]['date_rescued']; ?>
<?php $this->load->view("backend/staff/modal_msg_order_after_page.php");?>

<?php
//print_r($order_after_edit_data);
foreach ($order_after_edit_data as $row):

?>

<div class="row">
  <div class="col-md-11" style="padding-left:100px;">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?order_after_production">List/Edit </a> </div>
        
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
         
          Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('order_after_production/order_after_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data','name'=> 'cciform')); ?>
        <div class="row">

          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Produced by</label>
              <div class="col-sm-8">
                <select name="produced" class="form-control" id="produced">
				<option value="">Select</option>
                  <option value="LEO/LS/LRD" <?php if($row['produced']=='LEO/LS/LRD') echo 'selected'; ?>> LEO/LS/LRD </option>
                  <option value="JCWO" <?php if($row['produced']=='JCWO') echo 'selected'; ?>> JCWO </option>
				  <option value="CHILDLINE" <?php if($row['produced']=='CHILDLINE') echo 'selected'; ?>> CHILDLINE </option>
                  <option value="NGO/CBO" <?php if($row['produced']=='NGO/CBO') echo 'selected'; ?>>NGO/CBO</option>
                  <option value="Public Servant" <?php if($row['produced']=='Public Servant') echo 'selected'; ?>>Public Servant</option>
                  <option value="PRIs" <?php if($row['produced']=='PRIs') echo 'selected'; ?>>PRIs</option>
                  <option value="Others" <?php if($row['produced']=='Others') echo 'selected'; ?>> Others </option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="produced_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1 i. Others (Please Specify)</label>
              <div id="produced_other_fr_grp" class="col-sm-8">
                <input type="text" class="form-control produced_other" name="produced_other" id="produced_other" value="<?php echo $row['produced_other']; ?>"  >

                <span class="produced_other_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
		<div class="row">
		<div class="col-sm-6">
        <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">2 Produced Date Before CWC</label>
                    <div class="col-sm-8">
	<div class="input-group date" id="datepicker6"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_production" id="date_of_production"  value="<?php if($row['date_of_production']!='0000-00-00'){echo $row['date_of_production'];}?>"  readonly>
                </div>
					   <span id="error_date_of_production" class="color-red"></span>
                    </div>
                  </div>
          </div>
          </div>
        <div class="row">
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> 3. Type of Order issued after production</label>
              <div class="col-sm-8">
                <select name="order_type" class="form-control" id="order_type">
                  <option value="">Select</option>
                  <option value="Parents" <?php if($row['order_type']=='Parents') echo 'selected'; ?>>Handed over to Parents/Gaurdian</option>
                  <option value="cci" <?php if($row['order_type']=='cci') echo 'selected'; ?>>Handed over to CCI </option>
                  <option value="fit_person" <?php if($row['order_type']=='fit_person') echo 'selected'; ?>>Handed over to Fit Person</option>
                  <option value="fit_institution" <?php if($row['order_type']=='fit_institution') echo 'selected'; ?>>Handed over to Fit Facility</option>
                  <option value="other_place" <?php if($row['order_type']=='other_place') echo 'selected'; ?>>Handed over to Other Place</option>
                  <option value="Others" <?php if($row['order_type']=='Others') echo 'selected'; ?>>Other Orders </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
        <!-- panel-->
        <div class="col-md-12">
          <div class="panel panel-default" id="option1" >
            <div class="panel-heading head">Handed over to Parents/Gaurdian</div>
            <div class="panel-body">
              <div class="row">

                <!--end of column-->
                <div class="col-sm-6">
                  <div class="form-group" style="margin-right:-17px;">
                    <label for="field-1" class="col-sm-3 control-label">3 i. District<span class="color-red">*</span></label>
                    <div class="col-sm-8">
                      <select name="parent_dist" id="parent_dist" class="form-control" data-validate="required">
                        <option value="">Select</option>
                        <?php foreach($district_list as $crow21):  ?>
                        <option value="<?php echo $crow21['area_id'];?>" <?php if($row['parent_dist']==$crow21['area_id']){ echo 'selected'; }  ?> ><?php echo $crow21['area_name']; ?></option>
                        <?php   endforeach;   ?>
                        <!-- js populates -->
                      </select>
                      <!--<input type="text" class="form-control" name="parent_dist" id="" value="" autofocus="autofocus"  />-->
                    </div>
                  </div>
                </div>
				        <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 ii. Name of Parents/Guardian</label>
                    <div id="parents_name_fr_grp" class="col-sm-8">
                      <input type="text" class="form-control parents_name" name="parents_name" id="parents_name" value="<?php echo $row['parents_name']; ?>" autofocus="autofocus"
      					   onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
                    onpaste="return false;" />
                    <span class="parents_name_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label" >3 iii. Address with Contact No.</label>
                    <div id="parent_address_fr_grp" class="col-sm-8">
                      <textarea name="parent_address" class="form-control resize-none parent_address"><?php echo $row['parent_address']; ?></textarea>
                          <span class="parent_address_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 iv. Date</label>
                    <div class="col-sm-8">
					<div class="input-group date" id="datepicker1"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                      <input type="text" class="form-control" name="parent_date" id="parent_date" value="<?php echo $row['parent_date']; ?>" 
					  readonly />
					  </div>
					  <span id="error_parent" class="color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <!--emnd of column-->
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <!-- panel-->
        <div class="col-md-12">
          <div class="panel panel-default" id="option2" >
            <div class="panel-heading head">Handed Over to  CCI</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                <div class="form-group" style="margin-right:-17px;">
                    <label for="field-1" class="col-sm-3 control-label">3 i. District  <span class="color-red">*</span></label>
                    <div class="col-sm-8">
                    <!--  <input type="text" class="form-control" name="cci_dist" id="cci_dist"  value="<?php echo $dsts ?>" autofocus="autofocus" readonly/>-->
                      <select name="cci_dist" id="cci_dist" class="form-control" data-validate="required" onchange="myFunction()">
                        <option value="">Select</option>
                        <?php foreach($district_list as $crow21):
                                  ?>
                        <option value="<?php echo $crow21['area_id'];?>"
						<?php if($row['cci_dist']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                        <?php  endforeach;  ?>
                        <!-- js populates -->
                      </select>
                    </div>
                  </div>


                </div>
                <!--end of column-->
                <div class="col-sm-6">
                  <div class="form-group" style="margin-right:-17px;">
                    <label for="field-1" class="col-sm-3 control-label">3 ii. Name of CCI <span class="color-red">*</span> </label>
                    <div class="col-sm-8">
  					   <select name="ccis_name" id="ccis_name" class="form-control"  data-validate="required">
					   <option value="">Select</option>
                        <?php
								  $child_dist2 = $this->db->select('*')->where('area_id',$row['cci_dist'])->get('cci_area')->result_array();
                                  foreach($child_dist2 as $crow21):
                                  ?>
                        <option value="<?php echo $crow21['id'];?>" <?php if($row['ccis_name']==$crow21['id']){ echo 'selected'; }  ?>>
						<?php echo $crow21['area_name']; ?></option>
                        <?php
                              endforeach;
                         ?>
                      </select>
                    </div>
                  </div>

                </div>
                <!--emnd of column-->
                <div class="col-sm-6" >
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label" >3 iii. Address with Contact No.</label>
                    <div id="cci_address_fr_grp" class="col-sm-8">
                      <textarea name="cci_address" id="cci_address" class="form-control resize-none"  ><?php echo $row['cci_address']; ?></textarea>

                        <span class="cci_address_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6" >
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 iv. Date</label>
                    <div class="col-sm-8">
					 <div class="input-group date" id="datepicker2"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="cci_date" id="cci_date"  value="<?php echo $row['cci_date']; ?>"  readonly>
                </div>
			
					  <span id="error_cci" class="color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <!--emnd of column-->
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <!-- panel-->
        <div class="col-md-12">
          <div class="panel panel-default" id="option3"  >
            <div class="panel-heading head">Handed Over to Fit Person </div>
            <div class="panel-body">
              <div class="row">

                <!--end of column-->
                <div class="col-sm-6" >
                  <div class="form-group" style="margin-right:-17px;">
                    <label for="field-1" class="col-sm-3 control-label">3 i. District  <span class="color-red">*</span></label>
                    <div class="col-sm-8">
                      <select name="fitperson_dist" id="fitperson_dist" class="form-control" data-validate="required">
                        <option value="">Select</option>
                        <?php  foreach($district_list as $crow21):  ?>
                        <option value="<?php echo $crow21['area_id'];?>" <?php if($row['fitperson_dist']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                        <?php  endforeach;  ?>
                        <!-- js populates -->
                      </select>
                      <!--<input type="text" class="form-control" name="dist3" id="" value="" autofocus="autofocus"  />-->
                    </div>
                  </div>
                </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 ii. Name of Fit Person</label>
                    <div id="fitperson_name_fr_grp"  class="col-sm-8">
                      <input type="text" class="form-control fitperson_name" name="fitperson_name" id="fitperson_name" value="<?php echo $row['fitperson_name']; ?>"
					   autofocus="autofocus"  onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"onpaste="return false;" />
                      <span class="fitperson_name_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label" >3 iii. Address with Contact No.</label>
                    <div id="fitperson_address_fr_grp"  class="col-sm-8">
                      <textarea name="fitperson_address" id="fitperson_address" class="form-control resize-none fitperson_address"  ><?php echo $row['fitperson_address']; ?></textarea>
                      <span class="fitperson_address_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6" >
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 iv. Date</label>
                    <div class="col-sm-8">
					<div class="input-group date" id="datepicker3"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                      <input type="text" class="form-control" name="fitperson_date" id="fitperson_date" value="<?php echo $row['fitperson_date']; ?>" autofocus="autofocus"
					  readonly />
					  </div>
					  <span id="error_fitperson" class="color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <!--emnd of column-->
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <!-- panel-->
        <div class="col-md-12">
          <div class="panel panel-default" id="option4"  >
            <div class="panel-heading head">Handed over to Fit Facility</div>
            <div class="panel-body">
              <div class="row">

                <!--end of column-->
                <div class="col-sm-6">
                  <div class="form-group" style="margin-right:-17px;">
                    <label for="field-1" class="col-sm-3 control-label">3 i. District  <span class="color-red">*</span> </label>
                    <div class="col-sm-8">
                      <!--<input type="text" class="form-control" name="dist4" id="" value="" autofocus="autofocus"  />-->
                      <select name="fitinstitution_dist" id="fitinstitution_dist" class="form-control" data-validate="required">
                        <option value="">Select</option>
                        <?php   foreach($district_list as $crow21):
                                  ?>
                        <option value="<?php echo $crow21['area_id'];?>" <?php if($row['fitinstitution_dist']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                        <?php endforeach; ?>
                        <!-- js populates -->
                      </select>
                    </div>
                  </div>
                </div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 ii. Name Fit Facility</label>
                    <div id="fitinstitution_name_fr_grp"  class="col-sm-8">
                      <input type="text" class="form-control fitinstitution_name" name="fitinstitution_name" id="" value="<?php echo $row['fitinstitution_name']; ?>"
					  autofocus="autofocus"  onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" />
                      <span class="fitinstitution_name_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <div class="col-sm-6" >
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label" >3 iii. Address with Contact No.</label>
                    <div id="fitinstitution_address_fr_grp" class="col-sm-8">
                      <textarea name="fitinstitution_address" id="fitinstitution_address"
					  class="form-control resize-none fitinstitution_address"  ><?php echo $row['fitinstitution_address']; ?></textarea>
            <span class="fitinstitution_address_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 iv. Date</label>
                    <div class="col-sm-8">
					<div class="input-group date" id="datepicker4"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                      <input type="text" class="form-control"
					  name="fitinstitution_date" id="fitinstitution_date" value="<?php echo $row['fitinstitution_date']; ?>" autofocus="autofocus"  readonly/>

					  </div>
					  <span id="error_fitinstitution" class="color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <!--emnd of column-->
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <!-- panel-->
        <div class="col-md-12">
          <div class="panel panel-default" id="option5">
            <div class="panel-heading head">Handed over to Other Place</div>
            <div class="panel-body">
              <div class="row">

                <!--end of column-->
                <div class="col-sm-6">
                  <div class="form-group" style="margin-right:-17px;">
                    <label for="field-1" class="col-sm-3 control-label">3 i. District  <span class="color-red">*</span></label>
                    <div class="col-sm-8">
                      <!-- <input type="text" class="form-control" name="dist5" id="" value="" autofocus="autofocus"  />-->
                      <select name="otherplace_dist" id="otherplace_dist" class="form-control" data-validate="required">
                        <option value="">Select</option>
                        <?php
                                foreach($district_list  as $crow21):
                                  ?>
                        <option value="<?php echo $crow21['area_id'];?>" <?php if($row['otherplace_dist']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                        <?php endforeach;   ?>
                        <!-- js populates -->
                      </select>
                    </div>
                  </div>
                </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 ii. Name of Other Place</label>
                    <div id="otherplace_name_fr_grp" class="col-sm-8">
                      <input type="text" class="form-control otherplace_name" name="otherplace_name" id="" value="<?php echo $row['otherplace_name']; ?>" autofocus="autofocus"
					   onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"onpaste="return false;" />
                <span class="otherplace_name_msg color-red"></span>
              </div>
                  </div>
                </div>
                <!--emnd of column-->
                <div class="col-sm-6" >
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label" >3 iii. Address with Contact No.</label>
                    <div id="otherplace_address_fr_grp" class="col-sm-8">
                      <textarea name="otherplace_address" id="otherplace_address" class="form-control resize-none otherplace_address"  ><?php echo $row['otherplace_address']; ?></textarea>
                      <span class="otherplace_address_msg color-red"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6" >
                   <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 iv. Date</label>
                    <div class="col-sm-8">
					<div class="input-group date" id="datepicker5"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                      <input type="text" class="form-control" name="otherplace_date" id="otherplace_date" value="<?php echo $row['otherplace_date']; ?>"  readonly />
					  </div>
					   <span id="error_otherplace" class="color-red"></span>
                    </div>
                  </div>
                </div>
                <!--emnd of column-->
                <!--emnd of column-->
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <!-- panel-->
        <div class="col-md-12">
          <div class="panel panel-default" id="option6" <?php if($row['order_type']=='Others')  { echo 'class="block"'; } else {echo 'class="none"' ; } ?>>
            <div class="panel-heading head">Others</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">3 i. Others</label>
                    <div id="other_fr_grp" class="col-sm-8">
                      <input type="text" class="form-control other" name="other" id="" value="<?php echo $row['other']; ?>" autofocus="autofocus"  />
                      <span class="other_msg color-red"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end-->
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> 4. Whether registered to Track Child Portal</label>
              <div class="col-sm-8">
                <select name="wheather_linked" class="form-control" id="wheather_linked">
                  <option value=""> Select </option>
                  <option value="Yes" <?php if($row['wheather_linked']=='Yes') echo 'selected'; ?>> Yes </option>
                  <option value="No" <?php if($row['wheather_linked']=='No') echo 'selected'; ?>> No </option>
                </select>
              </div>
            </div>
          </div>
		   <div class="col-sm-6" id="registered_yes">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> 4 i. Profile ID Number<span class="color-white">*</span></label>
              <div id="profile_id_fr_grp" class="col-sm-8">
                <input type="text" class="form-control profile_id" name="profile_id" id="profile_id" value="<?php echo $row['profile_id']; ?>" autofocus="autofocus" data-validate="required" onkeypress="return IsAlphaNumeric_char(event);" ondrop="return false;"
        onpaste="return false;" />
        <span class="profile_id_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="row">
          <div class="col-sm-6">
            <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">4 Produced Date Before CWC</label>
                    <div class="col-sm-8">
					<div class="input-group date" id="datepicker6"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                      <input type="text" class="form-control" name="date_of_production" id="date_of_production" value="" autofocus="autofocus"  />
					  </div>
					   <span id="error_date_of_production" class="color-red"></span>
                    </div>
                  </div>
          </div>-->
		   
        </div>
		<div class="row">
         <div class="col-sm-6">
               <div class="form-group"> <label for="field-1" class="col-sm-3 control-label">5. Upload CWC Order ? </label>
                 <div class="col-sm-8">
                   <select name="is_housing_scheme" class="form-control" data-validate="required" id="is_housing_scheme">
                   <option value="">Select</option>
                   <option value="Yes" <?php if($row['cwc_upload']=='Yes') echo 'selected'; ?>>Yes</option>
                   <option value="No" <?php if($row['cwc_upload']=='No') echo 'selected'; ?>>No</option>
                     </select>
                 </div>
                </div>

                </div>
             <div class="row">
           <div class="col-sm-6" id="is_housing_scheme_yes">

                 <div class="form-group">
                  <label for="field-1" class="control-label col-sm-3">5 i. Attach CWC Order<span class="color-red">*</span></label>

                    <div class="col-sm-8">


                   <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
						 <?php if (file_exists('uploads/entitlement_proof/cwc_order/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/cwc_order/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/cwc_order/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/cwc_order/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/cwc_order/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/cwc_order/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/cwc_order/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/cwc_order/'.$row['child_id'].'.png" width="150" height="100" /></a>';
						}else{
						echo '<div class="fileinput-new thumbnail thumb-img" ><img src="uploads/images.png" alt=""></div>';
						}
					?>
				  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach CWC Order</span> <span class="fileinput-exists">Change</span>
                    <input type="file" name="image1" id="image1" accept="image/*" onchange="return ajaxFileUpload1(this)">
                    
                   
                    </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
				<div id="error-img1"></div>
				<div id="attach-img1"></div>
                    </div>
                </div>
                </div>



                </div>
                
        <!--end-->
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7" style="padding-bottom:5px;">
            <button type="submit" class="btn btn-info" id="submit-button"> Update </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
			
			<?php if(sizeof($row['order_type'])!=0)
				
				{if($row['order_type']!='Others' ){?>
			   
            <a href="<?php echo base_url().'index.php?order_after_production/download_cwc_order/'.$row['child_id'].'/'.$row['order_type'];?>"  class="btn btn-info" > Download CWC Order</a>
				<?php }}?>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<?php
endforeach;?>
<script>

    $(document).ready(function () {

	$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});
    if($('#produced').val() == 'Others') {
            $('#produced_other').show();

       		 } else {

			$('#produced_other').hide();
       		 }

		if($('#wheather_linked').val() == 'Yes') {
            $('#registered_yes').show();

       		 } else {

			$('#registered_yes').hide();
       		 }

		if($('#order_type').val() == 'Parents') {

            showhideoption();
			$('#option1').show();
       		 } else if($('#order_type').val() == 'cci'){
				showhideoption();
				$('#option2').show();
       		 } else if($('#order_type').val() == 'fit_person'){
				showhideoption();
				$('#option3').show();
       		 } else if($('#order_type').val() == 'fit_institution'){
				showhideoption();
				$('#option4').show();
       		 } else if($('#order_type').val() == 'other_place'){
				showhideoption();
				$('#option5').show();
       		 } else if($('#order_type').val() == 'Others'){
				showhideoption();
				$('#option6').show();
       		 } else {

				showhideoption();
			 }
       if($('#is_housing_scheme').val() == 'Yes') {
            $('#is_housing_scheme_yes').show();
       		 } else {
            $('#is_housing_scheme_yes').hide();
       		 }
			 $(function() {

   		 $('#is_housing_scheme').change(function(){
        	if($('#is_housing_scheme').val() == 'Yes') {
            $('#is_housing_scheme_yes').show();
       		 } else {
            $('#is_housing_scheme_yes').hide();
       		 }
    	});
		});




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

	//prativa  for parent date copmaring
		var copmareParentDate = function(dor,dob) {
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
		//prativa cci date
		var copmareCciDate = function(dor,dob) {
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
		//prativa fit person
		var copmareFitPersnDate = function(dor,dob) {
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
		//prativa fit institution
		var copmareFitInstnDate = function(dor,dob) {
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
		//prativa copmareOtherDate
		var copmareOtherDate = function(dor,dob) {
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

var productionDateDiff = function(dor,dob) {
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
			console.log(diff);
			return diff;

		};
    function validate_project_add(formData, jqForm, options) {
	var wheather_linked_val = (jqForm[0].wheather_linked.value);
		if(wheather_linked_val =="Yes"){
			if (!jqForm[0].profile_id.value)
			{
				return false;
			}
		}

    if(jqForm[0].produced.value=='Others')
    {
      if(jqForm[0].produced_other.value.length>35)
      {
        flag=1;
        $("#produced_other_fr_grp").addClass("validate-has-error");
        $(".produced_other").focus();
        $(".produced_other_msg").html("This filed should be less than 35 characters");
       return false;
      }
      else{
        $("#produced_other_fr_grp").removeClass("validate-has-error");
       $(".produced_other_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].produced_other.value)){
        flag=1;
             $("#produced_other_fr_grp").addClass("validate-has-error");
             $(".produced_other").focus();
             $(".produced_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#produced_other_fr_grp").removeClass("validate-has-error");
        $(".produced_other_msg").html("");
      }
	  
	  
	  
    }
    //order_type validation
    if(jqForm[0].order_type.value=='Parents')
    {
      if(jqForm[0].parents_name.value.length>40)
      {
        flag=1;
        $("#parents_name_fr_grp").addClass("validate-has-error");
        $(".parents_name").focus();
        $(".parents_name_msg").html("This filed should be less than 40 characters");
       return false;
      }
      else{
        $("#parents_name_fr_grp").removeClass("validate-has-error");
       $(".parents_name_msg").html("");
      }
      if(!jqForm[0].parent_dist.value)
      {
        return false;
      }
      if(/^\s+$/.test(jqForm[0].parents_name.value)){
        flag=1;
             $("#parents_name_fr_grp").addClass("validate-has-error");
             $(".parents_name").focus();
             $(".parents_name_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#parents_name_fr_grp").removeClass("validate-has-error");
        $(".parents_name_msg").html("");
      }
      if(jqForm[0].parent_address.value.length>120)
      {
        flag=1;
        $("#parent_address_fr_grp").addClass("validate-has-error");
        $(".parent_address").focus();
        $(".parent_address_msg").html("This filed should be less than 120 characters");
       return false;
      }
      else{
        $("#parent_address_fr_grp").removeClass("validate-has-error");
       $(".parent_address_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].parent_address.value)){
        flag=1;
             $("#parent_address_fr_grp").addClass("validate-has-error");
             $(".parent_address").focus();
             $(".parent_address_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#parent_address_fr_grp").removeClass("validate-has-error");
        $(".parent_address_msg").html("");
      }
    }
    //cci validation
    if(jqForm[0].order_type.value=='cci')
    {
        if(!jqForm[0].ccis_name.value)
		{
			 flag=1;
			 return false;
		}
      if(jqForm[0].cci_address.value.length>120)
      {
        flag=1;
        $("#cci_address_fr_grp").addClass("validate-has-error");
        $(".cci_address").focus();
        $(".cci_address_msg").html("This filed should be less than 120 characters");
       return false;
      }
      else{
        $("#cci_address_fr_grp").removeClass("validate-has-error");
       $(".cci_address_msg").html("");
      }
      if(!jqForm[0].cci_dist.value)
      {
        return false;
      }
      if(/^\s+$/.test(jqForm[0].cci_address.value)){
        flag=1;
             $("#cci_address_fr_grp").addClass("validate-has-error");
             $(".cci_address").focus();
             $(".cci_address_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#cci_address_fr_grp").removeClass("validate-has-error");
        $(".cci_address_msg").html("");
      }
    }
    if(jqForm[0].order_type.value=='fit_person')
    {
      if(jqForm[0].fitperson_name.value.length>40)
      {
        flag=1;
        $("#fitperson_name_fr_grp").addClass("validate-has-error");
        $(".fitperson_name").focus();
        $(".fitperson_name_msg").html("This filed should be less than 40 characters");
       return false;
      }
      else{
        $("#fitperson_name_fr_grp").removeClass("validate-has-error");
       $(".fitperson_name_msg").html("");
      }
      if(!jqForm[0].fitperson_dist.value)
      {
        return false;
      }
      if(/^\s+$/.test(jqForm[0].fitperson_name.value)){
        flag=1;
             $("#fitperson_name_fr_grp").addClass("validate-has-error");
             $(".fitperson_name").focus();
             $(".fitperson_name_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#fitperson_name_fr_grp").removeClass("validate-has-error");
        $(".fitperson_name_msg").html("");
      }
      //address validation
      if(jqForm[0].fitperson_address.value.length>120)
      {
        flag=1;
        $("#fitperson_address_fr_grp").addClass("validate-has-error");
        $( ".fitperson_address" ).focus();
        $(".fitperson_address_msg").html("This filed should be less than 120 characters");
       return false;
      }
      else{
        $("#fitperson_address_fr_grp").removeClass("validate-has-error");
        $(".fitperson_address_msg").html("");
      }


    }

  if(jqForm[0].order_type.value=='fit_institution')
  {
    if(jqForm[0].fitinstitution_name.value.length>40)
    {
      flag=1;
      $("#fitinstitution_name_fr_grp").addClass("validate-has-error");
      $( ".fitinstitution_name" ).focus();
      $(".fitinstitution_name_msg").html("This filed should be less than 40 characters");
     return false;
    }
    else{
      $("#fitinstitution_name_fr_grp").removeClass("validate-has-error");
     $(".fitinstitution_name_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].fitinstitution_name.value)){
      flag=1;
           $("#fitinstitution_name_fr_grp").addClass("validate-has-error");
           $(".fitinstitution_name").focus();
           $(".fitinstitution_name_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#fitinstitution_name_fr_grp").removeClass("validate-has-error");
      $(".fitinstitution_name_msg").html("");
    }
    if(!jqForm[0].fitinstitution_dist.value)
    {
      return false;
    }
    //address validation
    if(jqForm[0].fitinstitution_address.value.length>120)
    {
      flag=1;
      $("#fitinstitution_address_fr_grp").addClass("validate-has-error");
      $( ".fitinstitution_address" ).focus();
      $(".fitinstitution_address_msg").html("This filed should be less than 120 characters");
     return false;
    }
    else{
      $("#fitinstitution_address_fr_grp").removeClass("validate-has-error");
     $(".fitinstitution_address_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].fitinstitution_address.value)){
      flag=1;
           $("#fitinstitution_address_fr_grp").addClass("validate-has-error");
           $(".fitinstitution_address").focus();
           $(".fitinstitution_address_msg").html("No space allowed");
          return false;
      }
      else{
       $("#fitinstitution_address_fr_grp").removeClass("validate-has-error");
      $(".fitinstitution_address_msg").html("");
    }
  }
  if(jqForm[0].order_type.value=='other_place')
  {
	  if(!jqForm[0].otherplace_dist.value)
    {
      return false;
    }
    if(jqForm[0].otherplace_name.value.length>40)
    {
      flag=1;
      $("#otherplace_name_fr_grp").addClass("validate-has-error");
      $(".otherplace_name" ).focus();
      $(".otherplace_name_msg").html("This filed should be less than 40 characters");
     return false;
    }
    else{
      $("#otherplace_name_fr_grp").removeClass("validate-has-error");
     $(".otherplace_name_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].otherplace_name.value)){
      flag=1;
           $("#otherplace_name_fr_grp").addClass("validate-has-error");
           $(".otherplace_name").focus();
           $(".otherplace_name_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#otherplace_name_fr_grp").removeClass("validate-has-error");
      $(".otherplace_name_msg").html("");
    }
    //Address validation
    if(jqForm[0].otherplace_address.value.length>120)
    {
      flag=1;
      $("#otherplace_address_fr_grp").addClass("validate-has-error");
      $(".otherplace_address" ).focus();
      $(".otherplace_address_msg").html("This filed should be less than 120 characters");
     return false;
    }
    else{
      $("#otherplace_address_fr_grp").removeClass("validate-has-error");
     $(".otherplace_address_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].otherplace_address.value)){
      flag=1;
           $("#otherplace_address_fr_grp").addClass("validate-has-error");
           $(".otherplace_address").focus();
           $(".otherplace_address_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#otherplace_address_fr_grp").removeClass("validate-has-error");
      $(".otherplace_address_msg").html("");
    }
  }
  //other
  if(jqForm[0].order_type.value=='Others')
  {
    if(jqForm[0].other.value.length>40)
    {
      flag=1;
      $("#other_fr_grp").addClass("validate-has-error");
      $( ".other" ).focus();
      $(".other_msg").html("This filed should be less than 40 characters");
     return false;
    }
    else{
      $("#other_fr_grp").removeClass("validate-has-error");
     $(".other_msg").html("");
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
  }
  //profile id
  if(jqForm[0].wheather_linked.value=='Yes')
  {
    if(jqForm[0].profile_id.value.length>20)
    {
      flag=1;
      $("#profile_id_fr_grp").addClass("validate-has-error");
      $( ".profile_id" ).focus();
      $(".profile_id_msg").html("This filed should be less than 20 characters");
     return false;
    }
    else{
      $("#profile_id_fr_grp").removeClass("validate-has-error");
     $(".profile_id_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].profile_id.value)){
      flag=1;
           $("#profile_id_fr_grp").addClass("validate-has-error");
           $(".profile_id").focus();
           $(".profile_id_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#profile_id_fr_grp").removeClass("validate-has-error");
      $(".profile_id_msg").html("");
    }
  }

		//image
			/*var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = jqForm[0].image1.value;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                return false;
            }else{
				$("#error-img1").html("");
			}
*/

		
		
  //produced_other/parents_name/fitperson_name/fitinstitution_name/otherplace_name/other/profile_id
		//var date_final=(jqForm[0].final_order_date.value);
		
		var date_parent=(jqForm[0].parent_date.value);
		var date_cci=(jqForm[0].cci_date.value);
		var date_fitperson=(jqForm[0].fitperson_date.value);
		var date_fitinstitution=(jqForm[0].fitinstitution_date.value);
		var date_other=(jqForm[0].otherplace_date.value);
		var order=(jqForm[0].order_type.value);
		var date_of_birth = "<?php echo $dob;?>";
		var rescued_date = "<?php echo $order_after_edit_data[0]['date_rescued'];?>";
		//console.log(date_parent);
		var production_date=(jqForm[0].date_of_production.value);
       var  producedDiff = productionDateDiff(production_date,rescued_date);
	     //console.log(producedDiff);
				if(producedDiff < 0){
					//console.log(habdj);
					$("#error_date_of_production").html("Produced date provided should be after date of rescue");
					document.getElementById("date_of_production").focus();
					$("#datepicker6").addClass("newClass");
					return false;
					}


               //return false;
		if(order == 'Parents'){
		if(date_parent!=""){
		var diffParentdate = copmareParentDate(date_parent,rescued_date);
		var newdiff = copmareParentDate(date_parent,producedDiff);
				if(diffParentdate <0 ){

					$("#error_parent").html("Final date provided should be after date of rescue");
					document.getElementById("parent_date").focus();
					$("#datepicker1").addClass("newClass");
					return false;
					}
				//code added by pooja
				//handed over date should be greater
                 if(production_date > date_parent)
                 {
                	 $("#error_parent").html("Handed over date should be greater than or equal to produce date ");
 					document.getElementById("parent_date").focus();
 					$("#datepicker1").addClass("newClass");
 					return false;  
                  
                	 
                 }
				
			}
		}
	if(order == 'cci'){
			if(date_cci!=""){
			var diffCcidate = copmareCciDate(date_cci,rescued_date);
				if(diffCcidate < 0){
					$("#error_cci").html("Final date provided should be after date of rescue");
					document.getElementById("cci_date").focus();
					$("#datepicker2").addClass("newClass");
					return false;
					}
				//code added by pooja
				//handed over date should be greater
                 if(production_date > date_cci)
                 {
                	 $("#error_cci").html("Handed over date should be greater than or equal to produce date ");
 					document.getElementById("cci_date").focus();
 					$("#datepicker2").addClass("newClass");
 					return false;  
                  
                	 
                 }
	
			}
		}
		if(order == 'fit_person'){
			if(date_fitperson!=""){
			var diffFitPersndate = copmareFitPersnDate(date_fitperson,rescued_date);
				if(diffFitPersndate < 0){
					$("#error_fitperson").html("Final date provided should be after date of rescue");
					document.getElementById("fitperson_date").focus();
					$("#datepicker3").addClass("newClass");
					return false;
					}
				//code added by pooja
				//handed over date should be greater
                 if(production_date > date_fitperson)
                 {
                	 $("#error_fitperson").html("Handed over date should be greater than or equal to produce date ");
 					document.getElementById("fitperson_date").focus();
 					$("#datepicker3").addClass("newClass");
 					return false;  

                	 
                 }
              	
			}
		}
		if(order == 'fit_institution'){
			if(date_fitinstitution!=""){
			var diffFitInstndate = copmareFitInstnDate(date_fitinstitution,rescued_date);
				if(diffFitInstndate < 0){
					$("#error_fitinstitution").html("Final date provided should be after date of rescue");
					document.getElementById("fitinstitution_date").focus();
					$("#datepicker4").addClass("newClass");
					return false;
					}
				//code added by pooja
				//handed over date should be greater
                 if(production_date > diffFitInstndate)
                 {
                	 $("#error_fitinstitution").html("Handed over date should be greater than or equal to produce date ");
 					document.getElementById("fitinstitution_date").focus();
 					$("#datepicker4").addClass("newClass");
 					return false;  

                	 
                 }
	
			}
		}
		if(order == 'other_place'){
			if(date_other!=""){
			var diffOtherdate = copmareOtherDate(date_other,rescued_date);
				if(diffOtherdate < 0){
					$("#error_otherplace").html("Final date provided should be after date of rescue");
					document.getElementById("otherplace_date").focus();
					$("#datepicker5").addClass("newClass");
					return false;
					}
				//code added by pooja
				//handed over date should be greater
                 if(production_date > diffFitInstndate)
                 {
                	 $("#error_otherplace").html("Handed over date should be greater than or equal to produce date ");
 					document.getElementById("otherplace_date").focus();
 					$("#datepicker5").addClass("newClass");
 					return false;  

                	 
                 }



				
			}
		}

		
		 var house = (jqForm[0].is_housing_scheme.value);
		if (house == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/cwc_order/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/cwc_order/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/cwc_order/' .$row['child_id'] . '.png'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image1").files.length == 0 ){
   			 $("#attach-img1").html("Attachment not available");
			return false;
			}else{
			 $("#attach-img1").html("");
				}
			<?php } ?>
		}

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        //added by poojashree
        //for removing error message in date field
    	$("#error_date_of_production").hide();
    	$("#error_parent").hide();
    	$("#error_cci").hide();
    	$("#error_fitperson").hide();
    	$("#error_fitinstitution").hide();
    	$("#error_otherplace").hide();
    	$("#datepicker6").removeClass("newClass");
    	$("#datepicker5").removeClass("newClass");
    	$("#datepicker4").removeClass("newClass");
    	$("#datepicker3").removeClass("newClass");
    	$("#datepicker2").removeClass("newClass");
    	$("#datepicker1").removeClass("newClass");
    	//ended
        $('#preloader-form').html('');
		 $('#msgModal-2').modal('show');
		 
        document.getElementById("submit-button").disabled = false;
    }
$(function() {

   		 $('#produced').change(function(){
        	if($('#produced').val() == 'Others') {
            $('#produced_other').show();

       		 } else {
            $('#produced_other').hide();

       		 }
    	});
		});
		$(function() {

   		 $('#order_type').change(function(){

        	if($('#order_type').val() == 'Parents') {

            showhideoption();

			$('#option1').show();
       		 } else if($('#order_type').val() == 'cci'){
				showhideoption();
				$('#option2').show();
       		 } else if($('#order_type').val() == 'fit_person'){
				showhideoption();
				$('#option3').show();
       		 } else if($('#order_type').val() == 'fit_institution'){
				showhideoption();
				$('#option4').show();
       		 } else if($('#order_type').val() == 'other_place'){
				showhideoption();
				$('#option5').show();
       		 } else if($('#order_type').val() == 'Others'){
				showhideoption();
				$('#option6').show();
       		 } else{
			 showhideoption();
			 }
    	});
		});

		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

		function showhideoption(){

		$('#option1').hide();
		$('#option2').hide();
		$('#option3').hide();
		$('#option4').hide();
		$('#option5').hide();
		$('#option6').hide();


		}
		$(function() {

   		 $('#final_ordered').change(function(){
        	if($('#final_ordered').val() == 'Yes') {
            $('#final_value_yes').show();

       		 } else {

			$('#final_value_yes').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#type_order').change(function(){ //for different order type
        	if($('#type_order').val() == 'Others') {
            $('#type_order_other1').show();

       		 } else {

			$('#type_order_other1').hide();
       		 }
    	});
		});

		$(function() {

   		 $('#wheather_linked').change(function(){ //for different order type
        	if($('#wheather_linked').val() == 'Yes') {
            $('#registered_yes').show();

       		 } else {

			$('#registered_yes').hide();
       		 }
    	});
		});
		//added need to test
		//TO HIDE ERROR MESSAGE AFTER CORRECT DATE
		//added by pooja ON 05.08.17
		$(function() {

		   		 $('#date_of_production').change(function(){ //for different order type
		   	   		// alert("date!!!!!!!!");
		   	   	var rescued_date = "<?php echo $order_after_edit_data[0]['date_rescued'];?>";
				//alert(rescued_date);
				var production_date=$('#date_of_production').val();
				//alert(production_date);
				
				if(production_date >= rescued_date )
				{
					$("#error_date_of_production").hide();
					$("#datepicker6").removeClass("newClass");
				}
		        
		    	});
				});


		$(function() {


			 $('#parent_date').change(function(){ 
				 var date_parent=$("#parent_date").val();
				 var production_date=$('#date_of_production').val();
				 if(date_parent > production_date)
				    {
				    	$("#error_parent").hide();
				    	$("#datepicker1").removeClass("newClass");
				    }	
				       
			 });

			 $('#cci_date').change(function(){ 
				 var date_cci=$("#cci_date").val();	
				 //alert(date_cci);
				 var production_date=$('#date_of_production').val();
				// alert(production_date);
				 if(date_cci >= production_date)
				    {
					 $("#error_cci").hide();
				     $("#datepicker2").removeClass("newClass");
				    }	
				       
			 });

			 $('#fitperson_date').change(function(){ 
				 var date_fitperson=$("#fitperson_date").val();	
				 var production_date=$('#date_of_production').val();
				 if(date_fitperson >= production_date)
				    {
					 $("#error_fitperson").hide();
				     $("#datepicker3").removeClass("newClass");
				    }	
				       
			 });

			 $('#fitinstitution_date').change(function(){ 
				 var date_fitinstitution=$("#fitinstitution_date").val();
				 var production_date=$('#date_of_production').val();	
				 if(date_fitinstitution >= production_date)
				    {
					 $("#error_fitinstitution").hide();
				     $("#datepicker4").removeClass("newClass");
				    }	
				       
			 });

			 $('#otherplace_date').change(function(){ 
				 var date_other=$("#otherplace_date").val();	
				 var production_date=$('#date_of_production').val();
				 if(date_other >= production_date)
				    {
					 $("#error_otherplace").hide();
				     $("#datepicker5").removeClass("newClass");
				    }	
				       
			 });
			 

		});

			
		//finished date by poojashree 05-08-17

		var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
//autoclose: true
});

var FromEndDate = new Date();
$('#datepicker1').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
var FromEndDate = new Date();
$('#datepicker2').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
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
var specialKey = new Array();
        specialKey.push(8); //Backspace
        specialKey.push(9); //Tab
        specialKey.push(46); //Delete
        specialKey.push(36); //Home
        specialKey.push(35); //End
        specialKey.push(37); //Left
        specialKey.push(39); //Right
        function IsAlphaNumeric_char(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ( (keyCode >= 47 && keyCode <= 98) ||(keyCode >= 97 && keyCode <= 122) || (specialKey.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
           return ret;
        }

	//javascript code select option

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
        o.appendChild( document.createTextNode( 'Select' ) );

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
document.forms['cciform'].elements['cci_dist'].onchange = function(e) {
						var datas = new Object();
						ccidst=document.getElementById('cci_dist').value;
						 var relName = 'ccis_name';
	  					document.getElementById('ccis_name').disabled=false;
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getcci/"+ccidst,
								data: "",
								dataType: "text",
         						cache:false,
								success: function(msg){
									datas= msg;
								var form = document.forms['cciform'];
								var relList = form.elements[ relName ];
								Select_List_Data=eval( '(' + msg + ')' );
  								var obj=Select_List_Data[relName][ccidst]
								removeAllOptions(relList, true);
								appendDataToSelect(relList, obj);
									//obj = msg;
								},
								error: function() {

									//alert('<?php echo base_url();?>');
								}
            					});

};





</script>
