<?php

foreach ($edit_data as $row):


?>
<div class="row">
<?php include "tabmenu.php" ?>
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
            
             <div style="float:right; margin-top:12px; margin-right:20px;">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?staff/status_add">List of Child Status  Information</a>
                </div>
            
            
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>
                    
                 Type of work involved in - Child ID: <?php echo $row['child_id']; ?>
                    
                    
                </div>
               
            </div>
            <div class="panel-body">

                <?php echo form_open('staff/status/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
              <div class="row">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
                
              
              
                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">1. Duration of working hours 	
</label>

                    <div class="col-sm-8">
                      <select name="working_hours" class="selectboxit" id="working_hours">
                      
                      
                       
                       <option value="Less than six hours" <?php if($row['working_hours']=='Less than six hours') echo 'selected'; ?>>
                                Less than six hours
                        </option>
                                <option value="Between six and eight hours" <?php if($row['working_hours']=='Between six and eight hours') echo 'selected'; ?>>
                                Between six and eight hours
                                </option>
                                <option value="More than eight hours" <?php if($row['working_hours']=='More than eight hours') echo 'selected'; ?>>
                                More than eight hours
                                </option>
                      </select>
                 </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
                 <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">2. Reason due to which the child had to work
</label>

                    <div class="col-sm-8">
                    
                    <select name="income_utilization" class="selectboxit" id="income_utilization">
                   
                      <option value="To meet family need/ To take care of family" <?php if($row['income_utilization']=='To meet family need/ To take care of family') echo 'selected'; ?>>
                                    To meet family need/ To take care of family
                      </option>
                                    <option value="For dress materials" <?php if($row['income_utilization']=='For dress materials') echo 'selected'; ?>>
                                    For dress materials
                                    </option>
                                    <option value="For gambling" <?php if($row['income_utilization']=='For gambling') echo 'selected'; ?>>
                                    For gambling
                                    </option>
                                    <option value="For prostitution" <?php if($row['income_utilization']=='For prostitution') echo 'selected'; ?>>
                                    For prostitution
                                    </option>
                                    <option value="For alcohol" <?php if($row['income_utilization']=='For alcohol') echo 'selected'; ?>>
                                    For alcohol
                                    </option>
                                    <option value="For drug" <?php if($row['income_utilization']=='For drug') echo 'selected'; ?>>
                                    For drug
                                    </option>
                                    <option value="For smoking" <?php if($row['income_utilization']=='For smoking') echo 'selected'; ?>>
                                    For smoking
                                    </option>
                                    <option value="Savings" <?php if($row['income_utilization']=='Savings') echo 'selected'; ?>>
                                    Savings
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
                <label for="field-1" class="col-sm-3 control-label">3. Details of savings
</label>
               <div class="form-group">
                    

                    <div class="col-sm-8">
                    
                     <select name="savings" class="selectboxit" id="savings">
                     
                      <?php if($row['savings']!="") { ?>
                   
                   <option value="<?php echo $row['savings'];  ?>" selected="selected" > <?php echo $row['savings'];  ?> </option>
                   
                   
                   <?php }?>
                     
                  
                        <option value="With employers" >
                                With employers
                       </option>
                                <option value="With friends">
                                With friends
                                </option>
                                <option value="Bank/Post Office">
                                Bank/Post Office
                                </option>
                                <option value="Others">
                                Others
                                </option>
                      </select>
                    
                 </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6" id="savingOther">
                
                 <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Other</label>

                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="savings" disabled="disabled" id="savings_other"   value="" autofocus>
                    </div>
                </div>
                
                
             
                </div>
                
                </div>
                
                
                
                
                
                
                
         <div class="row" style="margin-top:20px;">
                <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
    </div>
              
            <div style="margin-left:10px; margin-right:10px;"></div>           
                
               
              
                
              </div>
         <div class="row" style="margin-top:10px;">
           <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >4. Type of child abuse if any </div>
           <div class="col-sm-6">
             <div class="form-group"><label for="field-1" class="col-sm-3 control-label">i. Verbal abuse</label>
               <div class="col-sm-8">
                 <select name="abuse_met" class="selectboxit" id="abuse_met">
                 
              
                    <?php if($row['abuse_met']!="") { ?>
                   
                   <option value="<?php echo $row['abuse_met'];  ?>" selected="selected" > <?php echo $row['abuse_met'];  ?> </option>
                   
                   
                   <?php }?>
                   
                  <option value="Parents">
                            Parents
                   </option>
                            <option value="Siblings" >
                            Siblings
                            </option>
                            <option value="Employers" >
                            Employers
                            </option>
                            <option value="Others" >
                            Others
                            </option>
                 </select>
               </div>
             </div>
           </div>
           <div class="col-sm-6" id ="abuse_metOther">
             <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Other</label>

                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="abuse_met" disabled="disabled" id="abuse_met_other"   value="" autofocus>
                    </div>
                </div>
           </div>
         </div>
         <div class="row" style="margin-top:10px;">
           <div class="col-sm-6">
             <div class="form-group">
          <label for="field-1" class="col-sm-3 control-label">ii. Physical abuse</label>   
             
             
<div class="col-sm-8">
  <input type="text" class="form-control" name="physical_abuse" id="hl6" value="<?php echo $row['physical_abuse']; ?>" autofocus="autofocus"  />
</div>
             </div>
           </div>
           <div class="col-sm-6">
           
             <label for="field-1" class="col-sm-3 control-label">iii. Sexual abuse</label> 
             <div class="form-group">
               <div class="col-sm-8">
                 <select name="sexual_abuse" class="selectboxit" id="sexual_abuse">
                 
                 
                 <?php if($row['sexual_abuse']!="") { ?>
                   
                   <option value="<?php echo $row['sexual_abuse'];  ?>" selected="selected" > <?php echo $row['sexual_abuse'];  ?> </option>
                   
                   
                   <?php }?>
                 
                 
                   <option value="Parents" > Parents </option>
                   <option value="Siblings" > Siblings </option>
                   <option value="Employers"> Employers </option>
                  
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="row" style="margin-top:10px;">
           <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >5. Difficulties faced</div>
           <div class="col-sm-6">
             <div class="form-group"><label for="field-1" class="col-sm-3 control-label">i. Denial of food</label> 
               <div class="col-sm-8">
                 <select name="denial_food" class="selectboxit" id="denial_food">
                 
                 <?php if($row['denial_food']!="") { ?>
                   
                   <option value="<?php echo $row['denial_food'];  ?>" selected="selected" > <?php echo $row['denial_food'];  ?> </option>
                   
                   
                   <?php }?>
                
                   <option value="Parents"> Parents </option>
                   <option value="Siblings"> Siblings </option>
                   <option value="Employers"> Employers </option>
                   <option value="Others"> Others </option>
                 </select>
               </div>
             </div>
           </div>
           <div class="col-sm-6" id="denial_foodOther">
             <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Other</label>

                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="denial_food"  disabled="disabled" id="denial_food_other"  value="" autofocus>
                    </div>
                </div>
           </div>
         </div>
         <div class="row" style="margin-top:10px;">
           <div class="col-sm-6">
             <div class="form-group">
          <label for="field-1" class="col-sm-3 control-label">ii. Beaten mercilessly</label>   
             
             
<div class="col-sm-8">
  <select name="beaten_mercilessly" class="selectboxit" id="beaten_mercilessly">
  
  <?php if($row['beaten_mercilessly']!="") { ?>
                   
                   <option value="<?php echo $row['beaten_mercilessly'];  ?>" selected="selected" > <?php echo $row['beaten_mercilessly'];  ?> </option>
                   
                   
                   <?php }?>
  
  
    <option value="Parents"> Parents </option>
    <option value="Siblings"> Siblings </option>
    <option value="Employers"> Employers </option>
    <option value="Others"> Others </option>
  </select>
</div>
             </div>
           </div>
           <div class="col-sm-6" id="beaten_mercilesslyOther">
             <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Other</label>

                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="beaten_mercilessly" disabled="disabled" id="beaten_mercilessly_other"   value="" autofocus>
                    </div>
                </div>
           </div>
         </div>
         <div class="row" style="margin-top:10px;">
           <div class="col-sm-6">
             <div class="form-group"> <label for="field-1" class="col-sm-3 control-label">iii. Causing Injury</label>
<div class="col-sm-8">
  <select name="causing_injury" class="selectboxit" id="causing_injury">
  
  
   <?php if($row['causing_injury']!="") { ?>
                   
                   <option value="<?php echo $row['causing_injury'];  ?>" selected="selected" > <?php echo $row['causing_injury'];  ?> </option>
                   
                   
                   <?php }?>
  
    <option value="Parents" > Parents </option>
    <option value="Siblings" > Siblings </option>
    <option value="Employers" > Employers </option>
    <option value="Others"> Others </option>
  </select>
</div>
             </div>
           </div>
           <div class="col-sm-6" id="causing_InjuryOther">
             <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Other</label>

                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="causing_injury" disabled="disabled" id="causing_injury_other"   value="" autofocus>
                    </div>
                </div>
           </div>
         </div>
         <div class="row" style="margin-top:10px;">
<div class="panel-title" style="margin-left:20px; margin-bottom:10px;" >
                
            6. Exploitation faced by the child
              
           </div>
           
          
     <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">i. Exploitation faced by the child</label>

                    <div class="col-sm-8">
                      <select name="exploitation_faced" class="selectboxit" id="exploitation_faced">
                      
                      
                       <?php if($row['exploitation_faced']!="") { ?>
                   
                   <option value="<?php echo $row['exploitation_faced'];  ?>" selected="selected" > <?php echo $row['exploitation_faced'];  ?> </option>
                   
                   
                   <?php }?>
                      
                      
                        <option value="Extracted work without payment" >
                                    Extracted work without payment
                        </option>
                                    <option value="Little wages with longer duration of work" >
                                    Little(Low) wages with longer duration of work
                                    </option>
                                    <option value="Others">
                                    Others
                                    </option>
                      </select>
                 </div>
            </div>
                
           </div>
                
                
                  
                <div class="col-sm-6">
                
                
                <div class="form-group" id="exploitation_facedOther">
                    <label for="field-1" class="col-sm-3 control-label">Other</label>

                    <div class="col-sm-8">
                          <input type="text" class="form-control" name="exploitation_faced" id="exploitation_faced_other" disabled="disabled"  value="" autofocus>
                    </div>
                </div>
                
               
                </div>
                
              </div>
         
  		<div class="form-group">
                    <div class="col-sm-offset-5 col-sm-7">
                        <button type="submit" class="btn btn-info" id="submit-button">
            				Update</button><button type="button" class="btn btn-info" id="cancel-button">
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
        toastr.success("Information Updated Successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }
$(function() {
	$('#savingOther').hide(); 
   		 $('#savings').change(function(){
        	if($('#savings').val() == 'Others') {
            $('#savingOther').show(); 
			document.getElementById('savings_other').disabled=false;
       		 } else {
            $('#savingOther').hide(); 
			
			document.getElementById('savings_other').disabled='disabled';
			
       		 } 
    	});
		});
		$(function() {
	$('#abuse_metOther').hide(); 
   		 $('#abuse_met').change(function(){
        	if($('#abuse_met').val() == 'Others') {
            $('#abuse_metOther').show(); 
			
			document.getElementById('abuse_met_other').disabled=false;
			
       		 } else {
            $('#abuse_metOther').hide(); 
			
			document.getElementById('abuse_met_other').disabled='disabled';
       		 } 
    	});
		});
	$(function() {
	$('#denial_foodOther').hide(); 
   		 $('#denial_food').change(function(){
        	if($('#denial_food').val() == 'Others') {
            $('#denial_foodOther').show(); 
			
			document.getElementById('denial_food_other').disabled=false;
			
       		 } else {
            $('#denial_foodOther').hide(); 
			
			document.getElementById('denial_food_other').disabled='disabled';
       		 } 
    	});
		});
	$(function() {
	$('#beaten_mercilesslyOther').hide(); 
   		 $('#beaten_mercilessly').change(function(){
        	if($('#beaten_mercilessly').val() == 'Others') {
            $('#beaten_mercilesslyOther').show(); 
			document.getElementById('beaten_mercilessly_other').disabled=false;
       		 } else {
            $('#beaten_mercilesslyOther').hide(); 
			document.getElementById('beaten_mercilessly_other').disabled='disabled';
       		 } 
    	});
		});
	$(function() {
	$('#causing_InjuryOther').hide(); 
   		 $('#causing_injury').change(function(){
        	if($('#causing_injury').val() == 'Others') {
            $('#causing_InjuryOther').show(); 
			document.getElementById('causing_injury_other').disabled=false;
       		 } else {
            $('#causing_InjuryOther').hide(); 
			document.getElementById('causing_injury_other').disabled='disabled';
       		 } 
    	});
		});
		$(function() {
		$('#exploitation_facedOther').hide(); 
   		 $('#exploitation_faced').change(function(){
        	if($('#exploitation_faced').val() == 'Others') {
            $('#exploitation_facedOther').show(); 
			document.getElementById('exploitation_faced_other').disabled=false;
       		 } else {
            $('#exploitation_facedOther').hide(); 
			document.getElementById('exploitation_faced_other').disabled='disabled';
       		 } 
    	});
		});
		
		$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

</script>