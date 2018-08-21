<?php
foreach ($editwages_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_wages');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/wages/edit/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data','name'=> 'areaForm'));?>

					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('sector_name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('Sector_Name should not be empty');?>"  maxlength="60" value="<?php echo $row['sector'];?>" >
                         </div>
							<span class="name_msg color-red"></span>
						</div>

					</div>



                       <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">Type<span class="color-white">*</span></label>

						<div class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
							<select name="category" class="form-control" id="category" data-validate="required" data-message-required="Type Should Not Be Blank">

                              <option value="">Select type</option>
								<option <?php if($row['type']=="Monthly"){ echo "selected" ; } ?> value="Monthly">Monthly</option>
                                <option  <?php if($row['type']=="Daily"){ echo "selected" ; } ?> value="Daily">Daily</option>
							</select>
                         </div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Amount');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control amount" name="amount" data-validate="required" data-message-required="Valid Amount" onkeypress="return isNumberKey(event)" onblur="checkerror(this.value,'name_msg1');" value="<?php echo $row['wage_amount'];?>" autofocus>

							 </div>
								<span class="name_msg7 color-red"></span>
						</div>
					</div>		
                    <div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('update_wages');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_wages';
	var post_message		=	'Data Updated Successfully';
</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-wages-submission.js"></script>
<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>