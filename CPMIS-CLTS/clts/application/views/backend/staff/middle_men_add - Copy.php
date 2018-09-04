<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i></i>
					<?php echo get_phrase('middlemen_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('middle_men/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>

					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Photo');?></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> 
						  <img class="img-thmb" src="<?php echo $default;?>" alt="Staff Image"> </div>
						  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
						  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span>
						   <span class="fileinput-exists">Change</span>
							<input type="file" name="userfile" accept="image/*" onchange="return ajaxFileUpload2(this)">
							</span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
						</div>
								<span class="err_msg color-red"></span>
													<div class="col-sm-8 paddingnl" style="padding-left:10px;" id="img-error"></div>
	
								</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Name');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="name" id="name" onblur="checkerror(this.value,'name_msg');" data-validate="required" data-message-required="<?php echo get_phrase('Name should not be empty ');?>" maxlength="60" placeholder="Name"  value="" autofocus>
						</div>
						<div class="name_msg color-red" id="name_msg"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('alias');?><span class="color-white">*</span></label>
						<div id="name_fr_grp2" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="alias" id="alias" onblur="return checkerror(this.value,'name_msg1');" placeholder="Alias" data-validate="required" data-message-required="<?php echo get_phrase('Alias should not be empty');?>" maxlength="100"   value="" autofocus>
						</div>
						<div class="name_msg1 color-red" id="name_msg1"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('address');?><span class="color-white">*</span></label>
						<div id="name_fr_grp3" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="addressmiddle" id="addressmiddle" placeholder="Address" onblur="checkerror(this.value,'name_msg2');" data-validate="required" data-message-required="<?php echo get_phrase('address should not be empty');?>" maxlength="100" ></textarea>
						</div>
						<div class="name_msg2 color-red" id="name_msg2"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('contact');?><span class="color-white"></span></label>
						<div id="name_fr_grp4" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="contact" id="contact" onkeypress="return isNumberKey(event)"    placeholder="Contact" maxlength="10"  value="" autofocus>
						</div>
						<div class="name_msg3 color-red" id="name_msg3"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('other_details');?></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="otherdetails" id="otherdetails" placeholder="Other details"></textarea>
						</div>
						<div class="name_msg4 color-red"></div>
						</div>
					</div>                   									
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_New_middlemen');?></button>
							<span id="preloader-form"></span>
						</div>
					</div>

                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?middle_men/reload_middle_list';
	var post_message		=	'Data Created Successfully';
	
	
	
	$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
	
	$('textarea').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
	
	
function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
       return false;
   return true;
}
</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-middlemen-submission.js"></script>
