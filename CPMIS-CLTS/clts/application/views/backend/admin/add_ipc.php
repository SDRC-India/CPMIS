<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add_ipc_section');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/ipc_section/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit6', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm4'));?>

	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('section_name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('Section_name_should_not_be_blank');?>" maxlength="60"   value="" autofocus>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
          <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('description'); ?><span class="color-white">*</span></label>

						<div id="name_fr_grp2" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<textarea class="form-control" rows="5" name="ipcdes" id="ipcdes" data-validate="required" data-message-required="<?php echo get_phrase('description_should_not_be_blank');?>" maxlength="200"></textarea>
						</div>
						<div class="name_msg2 color-red"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_ipc_section');?></button>
							<span id="preloader-form"></span>
						</div>
					</div>

					</form>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/bootstrap-switch.min.js"></script>

<!-- calling ajax form submission plugin for specific form -->
  

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_ipc_section';
	var post_message		=	'Data Created Successfully';
</script>
<script src="assets/js/ajax-form-ipcsection-submission.js"></script>

<!-- calling ajax form submission plugin for specific form -->
<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
	
$('textarea').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>