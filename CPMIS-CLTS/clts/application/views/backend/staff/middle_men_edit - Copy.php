<?php
$ses_ids=$this->session->userdata('login_user_id');
foreach ($editmiddle_url as $row):

?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i></i>
            		<?php
            
            		if($ses_ids==40){ ?>
					<?php echo get_phrase('Middlemen_verify_form');?>
					<?php } else{ echo get_phrase('Middlemen_edit_form');}?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('middle_men/edit/'.$row['middlemen_id'].'/'.$ses_ids, array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>					
					<div class="form-group" style="margin-bottom: 0px;">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('photo');?></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="fileinput fileinput-new" data-provides="fileinput" style="margin-bottom:2px;">
					  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> 
						<img class="img-thmb" src="<?php if(file_exists("./uploads/middle_men/".$row['middlemen_id'].'.jpg')) { echo "./uploads/middle_men/".$row['middlemen_id'].'.jpg' ; }else{ echo $default;} ?>" alt="Middle Image" style="height:100%;" >		 
						</div>
						 <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
						  <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span> <span class="fileinput-exists">Change</span>
							<input type="file" name="userfile" accept="image/*" onchange="return ajaxFileUpload2(this)">
							</span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
							<span class="err_msg color-red"></span>
								<div class="col-sm-8 paddingnl" style="padding-left:10px;" id="img-error"></div>						
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Name');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="name" id="name" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> data-validate="required" data-message-required="<?php echo get_phrase('Name should not be empty ');?>" maxlength="60"  value="<?php echo $row['name'] ;  ?>" autofocus>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('alias');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="alias" id="alias" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> data-validate="required" data-message-required="<?php echo get_phrase('Alias should not be empty');?>" maxlength="100" value="<?php echo $row['alias'] ;  ?>" autofocus>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('address');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="addressmiddle" id="addressmiddle" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> placeholder="Address" data-validate="required" data-message-required="<?php echo get_phrase('address should not be empty');?>" maxlength="100"><?php echo $row['address'] ;  ?></textarea>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('contact');?><span class="color-white"></span></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="contact" id="contact" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?>  data-message-required="<?php echo get_phrase('Contact should not be empty');?>"  value="<?php echo $row['contact'] ;  ?>" maxlength="10"  autofocus>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('other_details');?></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="otherdetails" id="otherdetails" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?>  placeholder="Address"><?php echo $row['other_details'] ;  ?></textarea>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('User_name');?></label>
						<div id="name_fr_grp" class="col-sm-7">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<?php $staff_user=mysql_fetch_assoc(mysql_query("select user_name from staff where staff_id='".$row['staff_id']."'"));
						?>
						<input type="text" class="form-control name" name="username"  readonly="true"     value="<?php echo $staff_user['user_name'] ;  ?>"  autofocus>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>                     									
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
						<?php if($ses_ids==40 && $row['statusby_lc']==1){ ?>
							<?php }else if($ses_ids==40){ ?>
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('Verify');?></button>
							<?php }
							
							else{ ?>
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('Update_middlemen');?></button>
							<?php } ?>
							<span id="preloader-form"></span>
						</div>
					</div>

                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<?php if($ses_ids==40){ ?>
<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?middle_men/reload_middle_list';
	var post_message		=	'Data verified Successfully';
</script>
<?php }else{ ?>
<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?middle_men/reload_middle_list';
	var post_message		=	'Data Update Successfully';
</script>
<?php } ?>
<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-middlemen-submission.js"></script>
