<?php

foreach ($edit_data as $row):


?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
            
             <div style="float:right; margin-top:12px; margin-right:20px;">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?staff/economy_add">List of Economy Information</a>
                </div>
            
            
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>
                    
                    Economy Condition Family - Child ID: <?php echo $row['child_id']; ?>
                    
                    
                </div>
               
            </div>
            <div class="panel-body">

                <?php echo form_open('staff/economye/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
                
                
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Description of the Housing</label>

                    <div class="col-sm-8">
                    
                    <select name="building_type" class="selectboxit" id="building_type">
                    
                      <?php if($row['building_type']!="") { ?>
                   
                   <option value="<?php echo $row['building_type'];  ?>" selected="selected" > <?php echo $row['building_type'];  ?> </option>
                   
                   
                   <?php }?>
                                   <option value="Concrete building">
                                            Concrete building
                                            </option>
                                            <option value="Tiled House">
                                            Tiled House
                                            </option>
                                            <option value="Hut">
                                            Hut
                                            </option>
                                            <option value="On the street">
                                            On the street
                                            </option>
                                            <option value="Others">
                                            Others(please specify)
                                            </option>
                            
                        </select>
                       
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
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
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
                
                
                
                
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
                
                Properties owned by the family 
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Landed properties(please specify the area)</label>

                    <div class="col-sm-8">
                    
                    <input type="text" class="form-control" name="property_area" id="property_area" value="<?php echo $row['property_area']; ?>" autofocus  placeholder="Land properties" >
                       
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                 <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Household articles</label>

                    <div class="col-sm-8">
                    
                    <select name="household_articles" class="selectboxit" id="household_articles">
                      <?php if($row['household_articles']!="") { ?>
                   
                   <option value="<?php echo $row['household_articles'];  ?>" selected="selected" > <?php echo $row['household_articles'];  ?> </option>
                   
                   
                   <?php }?>
                            <option value="Cows">
                                        Cows
                                        </option>
                                        <option value="Cattle">
                                        Cattle
                                        </option>
                                        <option value="Bull">
                                        Bull
                                        </option>
                       </select>
                    </div>
                </div>
                
                
             
                </div>
                
                </div>
                
                <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Vehicles</label>

                    <div class="col-sm-8">
                    
                    <select name="vehicles_type" class="selectboxit" id="vehicles_type">
                                   <option value="Two wheeler">
                                            Two wheeler
                                            </option>
                                            <option value="Three wheeler">
                                            Three wheeler
                                            </option>
                                            <option value="Four wheeler">
                                            Four wheeler
                                            </option>
                            
                        </select>
                       
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                 <div class="form-group">
                   

                    <div class="col-sm-8"></div>
                </div>
                
                
             
                </div>
                
                </div>
              <div class="row" style="margin-top:10px;">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" ></div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">BPL Card 	
</label>

                    <div class="col-sm-8">
                        <select name="bpl_card" class="selectboxit" id="bpl_card">
                                  <option>
                                    Please select Yes/No
                                    </option>
                                    <option value="Yes">
                                    Yes
                                    </option>
                                    <option value="No">
                                    No
                                    </option>
                            
                        </select>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                
                <div class="form-group">
                  <div class="col-sm-8"></div>
                </div>
                
               
                </div>
                
                </div>
                
                
                
                
                
                
                
                 <div class="row" style="margin-top:10px;">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Ration Card</label>

                    <div class="col-sm-8">
                      <select name="ration_card" class="selectboxit" id="ration_card">
                        <option> Please select Yes/No </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                      </select>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Indira Awas</label>

                    <div class="col-sm-8">
                      <select name="indira_awas" class="selectboxit" id="indira_awas">
                        <option> Please select Yes/No </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                      </select>
                    </div>
                </div>
                
               
                </div>
                
                </div>
                
         
         
         
          <div class="row" style="margin-top:10px;">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Job Card Available Under MGNREGA 	
</label>

                    <div class="col-sm-8">
                      <select name="job_card" class="selectboxit" id="job_card">
                        <option> Please select Yes/No </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                      </select>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">RSBY Card </label>

                    <div class="col-sm-8">
                      <select name="rsby_card" class="selectboxit" id="rsby_card">
                        <option> Please select Yes/No </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                      </select>
                    </div>
                </div>
                
               
                </div>
                
                </div>
                
                
                
                
                 <div class="row" style="margin-top:10px;">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Any other govt. scheme card</label>

                    <div class="col-sm-8">
                      <select name="anyscheme_card" class="selectboxit" id="anyscheme_card">
                        <option> Please select Yes/No </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                      </select>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                
                <div class="form-group">
                    

                    <div class="col-sm-8"></div>
                </div>
                
               
                </div>
                
                </div>
                
                
                
                
                
         
         
         
         
         
               
                
  
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            Add Economy Detail</button>
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