<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i></i>
					<?php echo get_phrase('pincode_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/pincode_list/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit10', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>

					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('pincode');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name"  maxlength="6"  onkeypress="return isNumberKey(event)" onblur="return removeerror(this.value);" onpaste="return false" value="" autofocus>
							 </div>
							<span class="name_msg7 color-red" id="name_msg7"></span>
						</div>
					</div>


                    <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('district');?><span class="color-white">*</span></label>

						<div id="name_fr_grp2" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
							<select name="district_id" id="district_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('District should not be empty');?>">
				            <!-- js populates -->
						   <option value="">Select Dist</option>

							<?php
								 //$child_dist		= $this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();

                                  $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => 'IND010'))->result_array();
                                  foreach($child_state as $crow1):
                                  ?>

                                   <option value="<?php echo $crow1['area_id'];?>"><?php echo $crow1['area_name']; ?></option>

                               <?php
                              endforeach;
							  ?>
				        </select>
                         </div>
						</div>
					</div>     
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_pincode');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_pincode';
	var post_message		=	'Data Created Successfully';
	
	function removeerror(value)
	{
	if(value!="")
document.getElementById("name_msg7").innerHTML= "" ; 

	}
</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-pincode-submission.js"></script>
