<?php
foreach ($editcaste_url as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_caste');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/caste/edit/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate ajax-submit8', 'enctype' => 'multipart/form-data','name'=> 'areaForm'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('caste_category');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('caste_category should not be empty');?>" maxlength="60" value="<?php echo $row['caste_category'];?>" >
                         </div>
							<span class="name_msg color-red"></span>
						</div>

					</div>


                       <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Caste_Name');?><span class="color-white">*</span></label>

						<div class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
							<select name="caste" class="form-control" id="caste" data-validate="required" data-message-required="<?php echo get_phrase('Caste_Name should not be empty');?>">
                              <option value="">Select caste</option>
                                   <option <?php if($row['caste_name']=="SE"){ echo "selected" ; } ?> value="SE">SE</option>
                                   <option <?php if($row['caste_name']=="ST"){ echo "selected" ; } ?> value="ST">ST</option>
                                   <option <?php if($row['caste_name']=="OBC"){ echo "selected" ; } ?> value="OBC">OBC</option>
                                   <option <?php if($row['caste_name']=="EBC"){ echo "selected" ; } ?> value="EBC">EBC</option>
                                   <option <?php if($row['caste_name']=="General"){ echo "selected" ; } ?> value="General">General</option>

							</select>
                         </div>
						</div>
					</div>
                    <div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('update_caste');?></button>
                         <span id="preloader-form"></span>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_caste';
	var post_message		=	'Data Updated Successfully';
</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-caste-submission.js"></script>
<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>