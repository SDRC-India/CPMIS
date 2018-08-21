<?php
foreach ($editscmh_data as $row):

?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Edit_scheme');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/scheme_list/edit/'.$row['id']  , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit5', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>

	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Department_Name');?><span class="color-white">*</span></label>

						<div id="dpname_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="dpname" data-validate="required" data-message-required="<?php echo get_phrase('Department_Name should not be empty');?>" maxlength="100" value="<?php echo $row['dept_name']  ?>" autofocus>
						</div>
						<span class="dnname_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Scheme_Name');?><span class="color-white">*</span></label>
						<div id="snname_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="snname" data-validate="required" data-message-required="<?php echo get_phrase('Scheme name should not be empty');?>" maxlength="100"  value="<?php echo $row['scheme_name']  ?>" autofocus>
						</div>
						<span class="snname_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Scheme_Benefits ');?><span class="color-white">*</span></label>
						<div id="sbname_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<textarea class="form-control" rows="5" name="sbname" id="sbname" data-validate="required" maxlength="200" data-message-required="<?php echo get_phrase('Scheme Benefits should not be empty');?>"><?php echo $row['scheme_benifits']  ?></textarea>
						</div>
						<span class="sbname_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Tenure_Period');?><span class="color-white">*</span></label>
						<div id="snname_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="tpname" data-validate="required" data-message-required="<?php echo get_phrase('Tenure Period should not be empty');?>" maxlength="100"  value="<?php echo $row['tenure_period']  ?>" autofocus>
						</div>
						<span class="tpname_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Scheme_benefit_period');?><span class="color-white">*</span></label>
						<div id="snname_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<select name="period" id="period" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('Scheme period should not be empty');?>">
				            <!-- js populates -->
						   <option value="">Select Period</option>
                                   <option <?php if($row['benefit_period']=="Quaterly") { echo 'selected'; } ?> value="Quaterly">Quarterly</option>
                                   <option <?php if($row['benefit_period']=="Halfyearly") { echo 'selected'; } ?> value="Halfyearly">Half yearly</option>
                                   <option <?php if($row['benefit_period']=="yearly") { echo 'selected'; } ?> value="yearly">yearly</option>
				        </select>
						</div>
						<span class="tpname_msg color-red"></span>
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('update_scheme');?></button>
							<span id="preloader-form"></span>
						</div>
					</div>

					</form>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>


<script src="assets/js/bootstrap-switch.min.js"></script>

<!-- calling ajax form submission plugin for specific form -->
  

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_scheme_list';
	var post_message		=	'Data Update Successfully';
</script>
<script src="assets/js/ajax-form-sl-submission.js"></script>

<!-- calling ajax form submission plugin for specific form -->
</script>
