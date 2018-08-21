
<?php

foreach ($edit_data as $row):


?>
<!----------------------------out side edit page start---------------------------------------->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
            
             <div style="float:right; margin-top:12px; margin-right:20px;">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?staff/outside_state">Back to list page</a>
                </div>
            
            
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>
                    
                    Outside State - Child ID: <?php echo $row['child_id']; ?>
                    
                </div>
               
            </div>
            <div class="panel-body">

                <?php echo form_open('staff/outsidestate_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
                
                
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group"> <label for="field-1" class="col-sm-3 control-label">Date of Rescue</label>
                 <div class="col-sm-8">
                    <input type="text" class="form-control datepicker" name="date_of_rescue" id="date_of_rescue" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['date_of_rescue']; ?>" autofocus >
      
                       
                 </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                 <div class="form-group">
                     <label for="field-1" class="col-sm-3 control-label">Employer Name</label>

                    <div class="col-sm-8">
                    
                    <input type="text" class="form-control" name="employer_name" id="employer_name" value="<?php echo $row['employer_name']; ?>" autofocus   >
                    </div>
                </div>
                
                
             
                </div>
                
                </div>
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Place of Rescue   	
</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="place_of_rescue" id="place_of_rescue" value="<?php echo $row['place_of_rescue']; ?>" autofocus="autofocus"   />
                    </div>
                </div>
                
                </div>
                <div class="col-sm-6">
                
                 <div class="form-group">
                 
<label for="field-1" class="col-sm-3 control-label">Employer Address</label>
            <div class="col-sm-8">
        <textarea class="form-control" name="employer_address" id="hl2" ><?php echo $row['employer_address']; ?></textarea>
            
                      
                    </div>
                </div>
                </div>
                
                </div>
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Work Involved in</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="work_involved" id="hl3" value="<?php echo $row['work_involved']; ?>" autofocus="autofocus"   />
                    </div>
                </div>
                
                </div>
       
                <div class="col-sm-6">
                <label for="field-1" class="col-sm-3 control-label">Handed Over to CWE Bihar on Dated  	
</label>
                 <div class="form-group">
                    

                    <div class="col-sm-8">
                     <input type="text" class="form-control datepicker" name="date_of_hamded" id="date_of_hamded" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="<?php echo $row['date_of_hamded']; ?>" autofocus >
                    </div>
                </div>
                </div>
                
                </div>
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">State</label>

                    <div class="col-sm-8">
                      <select name="state" class="form-control">
                        <option> -Select State- </option>
                        <?php if($row['state']!='') { ?>
                        <option value="<?php echo $row['state']; ?>" selected><?php echo $row['state']; ?></option>
                        
                        <?php
						}
						?>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                      </select>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                <label for="field-1" class="col-sm-3 control-label">Location of Concerned CWE</label>
                 <div class="form-group">
                    

                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="place_concerned" id="hl5" value="<?php echo $row['place_concerned']; ?>" autofocus="autofocus"   />
                    </div>
                </div>
                
                
             
                </div>
                
                </div>
                
                
                
                
              <div class="row">
                  <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" ></div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-2" class="col-sm-3 control-label">
If any certificate issued by rescued state (if yes) please write the name of certificate issued </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="any_certificate" id="hl4" value="<?php echo $row['any_certificate']; ?>" autofocus="autofocus"   />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label for="field-2" class="col-sm-3 control-label"></label>
                    <div class="form-group">
                      <div class="col-sm-8"></div>
                    </div>
                  </div>
              </div>
<div class="form-group">
  <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            Update Outside State</button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!--o-------------------------utside edit list en---------------------------d-->
<?php endforeach;?>


<script>
    $(document).ready(function () {

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {

        /*if (!jqForm[0].title.value)
        {
            return false;
        }*/
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
        toastr.success("Project added successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }


</script>