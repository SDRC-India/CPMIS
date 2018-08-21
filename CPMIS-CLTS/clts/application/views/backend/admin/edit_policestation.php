<?php
foreach ($editps_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Edit_police_station');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/policestation_list/edit/'.$row['id'] , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit4', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm2'));?>

	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" maxlength="100" data-message-required="<?php echo get_phrase('Name should not be blank');?>" onblur="checkerror();"  value="<?php echo $row['police_station_name'];?>" maxlength="60" autofocus>
						</div>
						<span class="name_msg color-red" id="name_msg"></span>
						</div>
					</div>
          <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">District<span class="color-white">*</span></label>

						<div class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<select name="choices" id="choices" class="form-control" data-validate="required"  data-message-required="<?php echo get_phrase('District should not be blank');?>">
				            <!-- js populates -->
						   <option value="">Select Dist</option>

							<?php
								 //$child_dist		= $this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();

                                  $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => 'IND010'))->result_array();
                                  foreach($child_state as $crow1):
                                  ?>

                                   <option value="<?php echo $crow1['area_id'];?>" <?php if($row['district_id']==$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>

                               <?php
                              endforeach;
							  ?>
				        </select>							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('update_police_station');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_policestation_list';
	var post_message		=	'Data Update Successfully';
</script>
<script src="assets/js/ajax-form-ps-submission.js"></script>

<!-- calling ajax form submission plugin for specific form -->
</script>

<script>
function checkerror(value,errormsg)
{
if(value!="")
{
//console.log(fieldname.value) ; 
document.getElementById(errormsg).innerHTML= "" ;
}
}
</script>
<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>
