<?php
 //include "modal_msg_cwcmbr_edit.php";
 
foreach ($edit_cwc as $row):
?>
<div id="printable">
<div class="row">

	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?new_cwc_order">List/Edit CWC Member </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
            
            
					<?php echo get_phrase('CWC_view_form');?>
					
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('new_cwc/edit/'.$row['id_cwc_member'].'/'.$ses_ids, array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>
				<?php  //$hrefvalue="./uploads/middle_men/".$row['middlemen_id'].'.jpg' ; ?>
                <fieldset>					
					<div class="form-group" style="margin-bottom: 0px;">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
						<div id="name_fr_grp" class="col-sm-1">
						<div class="fileinput fileinput-new" data-provides="fileinput" style="margin-bottom:2px;">
							  <div class="fileinput-new thumbnail img-thmb" data-trigger="fileinput"> <img class="img-thmb" id="imgchild"  src="<?php if(file_exists($upload_path.$row['id_cwc_member'].'.jpg')) { echo $upload_path.$row['id_cwc_member'].'.jpg'; }else{ echo $default;} ?>" onclick="display_child_image();" style="height:94px;"> </div>
		                  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
		                  
			         </div>
							<span class="err_msg color-red"></span>
								<div class="col-sm-8 paddingnl" style="padding-left:10px;" id="img-error"></div>	
						</div>
					</div>

<?php $degn_id=$row['desg_id'];?>
		
			
			<?php
			  $qry2 = $this->db->get_where('designation_of_cwc',array('id'=>$row['desg_id']))->result_array();
			  foreach($qry2 as $dst):
			  $stat=$dst['name_of_designation'];
			  endforeach;
			?>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Designation');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="desg" id="desg" <?php if($ses_ids==40){ ?>  <?php } ?>  maxlength="60"  value="<?php echo $stat;  ?>" onkeypress='remove(this.value);' autofocus readonly>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					






					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Name');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="name" id="name" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> data-validate="required" data-message-required="<?php echo get_phrase('Name should not be empty ');?>" maxlength="60"  value="<?php echo $row['name'] ;  ?>" autofocus readonly>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('age');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="age" id="age" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> data-validate="required" data-message-required="<?php echo get_phrase('Alias should not be empty');?>" maxlength="100" value="<?php echo $row['age'] ;  ?>" autofocus readonly>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('professional qualification');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="professional_qualification" id="professional_qualification" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> placeholder="Address" data-validate="required" data-message-required="<?php echo get_phrase('address should not be empty');?>" maxlength="100" readonly><?php echo $row['professional_qualification'] ;  ?></textarea>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('personal address');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="address" id="address" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> placeholder="Address" data-validate="required" data-message-required="<?php echo get_phrase('address should not be empty');?>" maxlength="100" readonly><?php echo $row['personal_address'] ;  ?></textarea>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('contact');?><span class="color-white"></span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="contact" id="contact" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?>  data-message-required="<?php echo get_phrase('Contact should not be empty');?>"  value="<?php echo $row['contact'] ;  ?>" maxlength="10"  autofocus readonly>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('joining_date');?></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control"  readonly name="otherdetails" id="otherdetails" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?>  placeholder="Address"><?php echo $row['joining_date'] ;  ?></textarea>
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					 
					 <div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Release date');?><span class="color-white">*</span></label>
						<div id="name_fr_grp10" class="col-sm-4">
						<div class="input-group date form_datetime"  > 
					
					   <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="form-control " name="rdj" id='datepicker1' readonly="true"  value="<?php echo $row['release_date'] ;  ?>"   >
                      
						</div>
						<div class="name_msg5 color-red" id="name_msg6"></div>
						<span class="err_msg_rlse color-red" style="display:none;">Release Date Should be Less than  joining Date</span>
						</div>
					</div>       
					
					             									
					

                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
</div>


<?php endforeach;?>

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?new_cwc/reload_cwc_list';
	var post_message		=	'Data Update Successfully';
</script>
<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-own-cwc-submission.js"></script>

<script>
//code added by pooja 08.08.17
$(document).ready(function () {
		  $('#prnt1').on('click', function() {
	           $.print("#printable");

				});
    });



function display_child_image()
{
var largeImage = document.getElementById('imgchild');
largeImage.style.display = 'block';
largeImage.style.width=200+"px";
largeImage.style.height=200+"px";
var url=largeImage.getAttribute('src');
window.open(url,'Image','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');  
}

// validation for edit and model page 

$(document).ready(function () {
	        var options = {
	            beforeSubmit: validate_project_add,
	            success: show_response_project_add,
	            resetForm: true
	        };
	        $('.ajax-submit7').submit(function () {
	          //window.scrollTo(0,0);
	            $(this).ajaxSubmit(options);
	            return false;
	        });
	    });

function validate_project_add(formData, jqForm, options) {}

function show_response_project_add(responseText, statusText, xhr, $form) {
	$('html, body').animate({ scrollTop: 0 }, 0);
	 $('#msgModal-cwc').modal('show');
	 
    document.getElementById("submit-button").disabled = false;
}
</script>