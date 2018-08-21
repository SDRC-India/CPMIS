
<?php

foreach ($edit_data as $row):


?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
            
             <div style="float:right; margin-top:12px; margin-right:20px;">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?staff/within_state">List/Edit</a>
                </div>
            
            
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>
                    
                    Within State - Child ID: <?php echo $row['child_id']; ?>
                    
                    
                </div>
               
            </div>
            <div class="panel-body">

                <?php echo form_open('staff/withinstate_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
                
                
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
              <textarea class="form-control" name="employer_detail_address" id="hl2" ><?php echo $row['employer_detail_address']; ?></textarea>
            </div>
                </div>
                
                
             
                </div>
                
                </div>
                
                
                
                
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
                
              
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Work Involved In</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="work_involved" id="hl3" value="<?php echo $row['work_involved']; ?>" autofocus="autofocus"   />
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                <label for="field-1" class="col-sm-3 control-label">Duration of Work 	
</label>
                 <div class="form-group">
                    

                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="period_work" id="hl4" value="<?php echo $row['period_work']; ?>" autofocus="autofocus"  />
                    </div>
                </div>
                
                
             
                </div>
                
                </div>
                <div class="form-group">
      <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            Update Within State</button> <button type="button" class="btn btn-info" id="cancel-button">
                            Cancel</button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

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
	
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
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