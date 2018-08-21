<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
            
             <div style="float:right; margin-top:12px; margin-right:20px;">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?admin/child_rescued_list">List/Edit Child Rescued</a>
                </div>
            
            
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>
                    
                    Child Basic Information
                    
                    
                </div>
               
            </div>
            <div class="panel-body">

                <?php echo form_open('staff/project/create/', array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
                
                
                <div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Name of child</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="cname" id="cname" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Sex</label>

                    <div class="col-sm-8">
                        <select name="gender" class="selectboxit">
                            <option>-Select Sex-</option>
                           
                                <option value="Male">
                                    Male</option>
                                     <option value="Female">
                                    Female</option>
                            
                        </select>
                    </div>
                </div>
                </div>
                
                </div>
                
                
                
                <div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Date Of Birth</label>

                    <div class="col-sm-8">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                        <input type="text" class="form-control datepicker" name="dob" id="dob" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus >
                               
                               </div>
                    </div>
                    
                    
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Age</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="age" id="age" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                </div>
                
                </div><div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Father's/Guardian's Name </label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="father" id="father" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Marital Status</label>

                    <div class="col-sm-8">
                        <select name="marital" class="selectboxit">
                            <option>-Marital Status-</option>
                           
                                <option value="Married">
                                    Married</option>
                                     <option value="Unmarried">
                                    Unmarried</option>
                            
                        </select>
                    </div>
                </div>
                </div>
                
                </div><div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Mother's Name</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="mother" id="title1" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Religion</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="religion" id="title2" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                </div>
                
                </div><div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">City/Vill Name</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="city" id="title1" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Cast Category</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="cast" id="cast" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                </div>
                
                </div>
                
                <div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Post Office</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="postoffice" id="postoffice" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Dist</label>

                    <div class="col-sm-8">
                    
                    
                    
                    

                    
                     <select name="dist" class="selectboxit" id="dist">
                       
<option>
 -Select Dist- 
</option>
<option value="Araria">Araria</option>
<option value="Arwal">Arwal</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Banka">Banka</option>
<option value="Begusarai">Begusarai</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Buxar">Buxar</option>
<option value="Darbhanga">Darbhanga</option>
<option value="EastChamparan">EastChamparan</option>
<option value="Gaya">Gaya</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Jamui">Jamui</option>
<option value="Jehanabad">Jehanabad</option>
<option value="Khagaria">Khagaria</option>
<option value="Kishanganj">Kishanganj</option>
<option value="Kaimur">Kaimur</option>
<option value="Katihar">Katihar</option>
<option value="Lakhisarai">Lakhisarai</option>
<option value="Madhubani">Madhubani</option>
<option value="Munger">Munger</option>
<option value="Madhepura">Madhepura</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Nalanda">Nalanda</option>
<option value="Nawada">Nawada</option>
<option value="Patna">Patna</option>
<option value="Purnia">Purnia</option>
<option value="Rohtas">Rohtas</option>
<option value="Saharsa">Saharsa</option>
<option value="Samastipur">Samastipur</option>
<option value="Sheohar">Sheohar</option>
<option value="Sheikhpura">Sheikhpura</option>
<option value="Saran">Saran</option>
<option value="Sitamarhi">Sitamarhi</option>
<option value="Supaul">Supaul</option>
<option value="Siwan">Siwan</option>
<option value="Vaishali">Vaishali</option>
<option value="WestChamparan">WestChamparan</option>

</select>
                    
                    
                    
                       
                 </div>
                </div>
                </div>
                
                </div>
                
                <div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Pin Code</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="pincode" id="pincode" data-validate="required" 
                               data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                    </div>
                </div>
                
                </div>
                
                
                  
                <div class="col-sm-6">
                
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">State </label>

                    <div class="col-sm-8">
                    
                     <select name="state" class="selectboxit" id="state">
                       <option>
 -Select State- 
</option>
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
                
                </div>
                
                <div class="row">
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Is Child is Orphan 	
</label>

                    <div class="col-sm-8">
                    
                     <select name="is_orphan" class="selectboxit" id="is_orphan">
                      <option>
 -Select Yes/No- 
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
                    <label for="field-1" class="col-sm-3 control-label">Birth Registered </label>

                    <div class="col-sm-8">
                    
                     <select name="is_birth" class="selectboxit" id="is_birth">
                       <option>
 -Select Yes/No- 
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
                
                </div>
                
  
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            <?php echo get_phrase('add_new_project'); ?></button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>




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
        toastr.success("Basic information added successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }


</script>