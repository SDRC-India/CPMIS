<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i></i>
					<?php echo get_phrase('caste_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/caste/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit8', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>

					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('caste_category');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('caste_category should not be empty');?>"   maxlength="60" value="" autofocus>
												 </div>
												 	<span class="name_msg color-red"></span>
						</div>
					</div>


                    <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Caste_Name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp2" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
							<select name="caste" class="form-control" id="caste" data-validate="required" data-message-required="<?php echo get_phrase('Caste_Name should not be empty');?>">
                              <option value="">Select caste</option>
                                   <option value="SE">SE</option>
                                   <option value="ST">ST</option>
                                   <option value="OBC">OBC</option>
                                   <option value="EBC">EBC</option>
                                   <option value="General">General</option>

							</select>
                         </div>
						</div>
					</div>     
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_caste');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_caste';
	var post_message		=	'Data Created Successfully';
</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-caste-submission.js"></script>
<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>