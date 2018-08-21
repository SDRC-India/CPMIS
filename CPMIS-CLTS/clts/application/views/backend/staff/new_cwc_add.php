<?php
 include "modal_msg_cwcmbr_add.php";
?>
<style>
.fileinput-preview.fileinput-exists.thumbnail.img-thmb img {
    height: 94px;
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	 <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?new_cwc">List/Edit CWC Member </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
					<?php echo get_phrase('new_CWC_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('new_cwc/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Photo');?></label>
						<div id="name_fr_grp" class="col-sm-1">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> 
						  <img class="img-thmb" src="<?php echo $default;?>" alt="Staff Image"> </div>
						  <div class="fileinput-preview fileinput-exists thumbnail img-thmb" ></div>
						  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span>
						   <span class="fileinput-exists">Change</span>
							<input type="file" name="userfile" accept="image/*" onchange="return validate_fileupload(this.value)">
							</span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput" style="margin-left: 72px;margin-top: -31px;">Remove</a> </div>
						<span id="showmsg" style="color:red;"></span>
						</div>
								<span class="err_msg color-red"></span>
													<div class="col-sm-8 paddingnl" style="padding-left:10px;" id="img-error"></div>
	
								</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Designation');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group" id='name_fr_grp'>
						<span class="input-group-addon"><i></i></span>
						<select name="desg" class="form-control" id="desg" data-validate="required">
                <option value="">Select</option>
                  <?php foreach($designation_list as $crow1):  ?>
                  <option value="<?php echo $crow1['id'];?>" <?php if($degn_id===$crow1['id']){ echo 'selected'; }  ?>><?php echo $crow1['name_of_designation']; ?></option>
                  <?php  endforeach;?>
                </select>
						</div>
						<div class="name_msg color-red" id="name_msg"></div>
						</div>
					</div>
					
		
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Name');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group" id='name_fr_grp'>
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="name" id="name" onblur="checkerror(this.value,'name_msg');" onkeypress='remove(this.value);' maxlength="60" placeholder="Name"  value="" autofocus data-validate="required">
						</div>
						<div class="name_msg color-red" id="name_msg"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('age');?><span class="color-white">*</span></label>
						<div id="name_fr_grp1" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="age" id="age" onkeypress="return isNumberKey(event)" placeholder="Age" data-validate="required" data-message-required="<?php echo get_phrase('Age should not be empty');?>" maxlength="2"   value="" autofocus>
						</div>
						<div class="name_msg1 color-red" id="name_msg1"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('professional qualification');?><span class="color-white">*</span></label>
						<div id="name_fr_grp2" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="professional_qualification" id="professional_qualification" placeholder="Professional Qualification" onblur="checkerror(this.value,'name_msg2');" data-validate="required" data-message-required="<?php echo get_phrase('Professional Qualification should not be empty');?>" maxlength="60" ></textarea>
						</div>
						<div class="name_msg2 color-red" id="name_msg2"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('personal address');?><span class="color-white">*</span></label>
						<div id="name_fr_grp3" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="address" id="address" placeholder="Address" onblur="checkerror(this.value,'name_msg2');" data-validate="required" data-message-required="<?php echo get_phrase('Personal Address should not be empty');?>" maxlength="100" ></textarea>
						</div>
						<div class="name_msg2 color-red" id="name_msg3"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('contact');?><span class="color-white"></span></label>
						<div id="name_fr_grp4" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="contact" id="contact" onkeypress="return isNumberKey(event)"    placeholder="Contact" maxlength="10"  value="" autofocus>
						</div>
						<div class="name_msg3 color-red" id="name_msg4"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('joining date');?><span class="color-white">*</span></label>
						<div id="name_fr_grp5" class="col-sm-4">
						<div class="input-group date form_datetime"  > 
					
					   <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="form-control " name="doj" id='datepicker'  value=""  data-validate="required"  >
                      
						</div>
						<div class="name_msg4 color-red" id="name_msg5"></div>
						</div>
					</div>  
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Releasing Date');?></label>
						<div id="name_fr_grp123" class="col-sm-4">
						<div class="input-group"  > 
					
					   <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="form-control " name="rdj" id=''  value="" readonly  >
                      
						</div>
						
						</div>
					</div>          
			              									
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_New_Cwc');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?new_cwc/reload_cwc_list';
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


function remove(value){
	if(value){
		$(".name_msg").html("");
		}

	
}
</script>
<script>
var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

var FromEndDate = new Date();
$('#datepicker1').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
</script>
<script>
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

function validate_project_add(formData, jqForm, options) {

	if (!jqForm[0].name.value)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".name").focus();
		$(".name_msg").html("");
			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
	}
	
}

function show_response_project_add(responseText, statusText, xhr, $form) {
	$('html, body').animate({ scrollTop: 0 }, 0);
	 $('#msgModal-cwc').modal('show');
	 
    document.getElementById("submit-button").disabled = false;
}


function validate_fileupload(fileName)
{
    var allowed_extensions = new Array("jpg","png","gif");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    for(var i = 0; i <= allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
        	document.getElementById("showmsg").innerHTML="" ; 
            
            document.getElementById("submit-button").disabled = false;
            return true; // valid file extension
        }else{
        	document.getElementById("showmsg").innerHTML="Please upload jpg,png and gif" ; 
            document.getElementById("submit-button").disabled = true;
            return false;

            }
    }

}
</script>

<!-- calling ajax form submission plugin for specific form -->

