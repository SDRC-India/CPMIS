<?php
 include "modal_msg_cwcmbr_edit.php";
 
foreach ($edit_cwc as $row):
//print_r($row);
?>
<style>
.fileinput-preview.fileinput-exists.thumbnail.img-thmb img {
    height: 94px;
}
</style>
<div id="printable">
<div class="row">

	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?new_cwc">List/Edit CWC Member </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
            
            
					<?php echo get_phrase('CWC_edit_form');?>
					
            	</div>
            </div>
			<div class="panel-body">
                <input type="hidden" name="desgn-id"  value="<?php echo $row['desg_id'];?>">
                <?php echo form_open('new_cwc/edit/'.$row['id_cwc_member'].'/'.$ses_ids, array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>
				<?php  //$hrefvalue="./uploads/middle_men/".$row['middlemen_id'].'.jpg' ; ?>
                <fieldset>					
					<div class="form-group" style="margin-bottom: 0px;">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
						<div id="name_fr_grp" class="col-sm-1">
						<div class="fileinput fileinput-new " data-provides="fileinput" style="margin-bottom:2px;">
							  <div class="fileinput-new thumbnail img-thmb" data-trigger="fileinput"> <img class="img-thmb" id="imgchild"  src="<?php if(file_exists($upload_path.$row['id_cwc_member'].'.jpg')) { echo $upload_path.$row['id_cwc_member'].'.jpg'; }else{ echo $default;} ?>" onclick="display_child_image();" style="height:94px;"> </div>
		                  <div class="fileinput-preview fileinput-exists thumbnail  img-dim" ></div>
		                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Change</span> <span class="fileinput-exists">Change</span>
		                    <input type="file" name="userfile" accept="image/*" id="cwc_photo" onchange="return validate_fileupload(this.value)">
		                    </span> <a href="#" class="btn btn-orange fileinput-exists" onclick="clearbutton();" data-dismiss="fileinput" style="margin-left: 72px;margin-top: -31px;">Remove</a> </div>
			        <p id="showmsg" style="color:red;"></p>
			         </div>
			               <div id="size-error" class="color-red" style="width: 200px;margin-bottom: 5px;"></div>
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
						
						</div>
					</div>
					
					
					
					

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Name');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="name" id="name" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?>  maxlength="40"  value="<?php echo $row['name'] ;  ?>" onkeypress='remove(this.value);'   autofocus data-validate="required" data-message-required="This field is required">
						</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('age');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="age" id="age" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> data-validate="required" data-message-required="<?php echo get_phrase('Age should not be empty');?>" maxlength="2" value="<?php echo $row['age'] ;  ?>"  onkeypress="return isNumberKey(event)" autofocus>
						</div>
						<span class="name_msg1 color-red"></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('professional qualification');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="professional_qualification" id="professional_qualification" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> placeholder="Address" data-validate="required" data-message-required="<?php echo get_phrase('Professional Address should not be empty');?>" maxlength="100"><?php echo $row['professional_qualification'] ;  ?></textarea>
						</div>
						<span class="name_msg2 color-red"></span>
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('personal address');?><span class="color-white">*</span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
					   <textarea class="form-control" name="address" id="address" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?> placeholder="Address" data-validate="required" data-message-required="<?php echo get_phrase('Personal address should not be empty');?>" maxlength="100"><?php echo $row['personal_address'] ;  ?></textarea>
						</div>
						<span class="name_msg3 color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('contact');?><span class="color-white"></span></label>
						<div id="name_fr_grp" class="col-sm-4">
						<div class="input-group">
						<span class="input-group-addon"><i></i></span>
						<input type="text" class="form-control name" name="contact" id="contact" <?php if($ses_ids==40){ ?> readonly="true" <?php } ?>  data-message-required="<?php echo get_phrase('Contact should not be empty');?>" data-validate="required" value="<?php echo $row['contact'] ;  ?>" maxlength="10" onkeypress="return isNumberKey(event)"  autofocus>
						</div>
						<span class="name_msg4 color-red"></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('joining date');?><span class="color-white">*</span></label>
						<div id="name_fr_grp5" class="col-sm-4">
						<div class="input-group date form_datetime"  > 
					
					   <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="form-control " name="doj" id='datepicker'  value="<?php echo $row['joining_date'] ;  ?>"  data-validate="required"  >
                      
						</div>
						<div class="name_msg5 color-red" id="name_msg5"></div>
						
						</div>
					</div> 
					
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Release date');?><span class="color-white"></span></label>
						<div id="name_fr_grp10" class="col-sm-4">
						<div class="input-group date form_datetime"  > 
					
					   <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      <input type="text" class="form-control " name="rdj" id='datepicker1'  value="<?php echo $row['release_date'] ;  ?>"   >
                      
						</div>
						<div class="name_msg5 color-red" id="name_msg6"></div>
						<span class="err_msg_rlse color-red" style="display:none;">Release Date Should be Less than  joining Date</span>
						</div>
					</div>       
					
					
					
					
					
					
					
					      
				          									
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
						<?php if($ses_ids==40 && $row['statusby_lc']==1){ ?>
							<?php }else if($ses_ids==40){ ?>
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('Verify');?></button>
							<?php }
							
							else{ ?>
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('Update_CWC_Member');?></button>
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
</div>


<?php endforeach;?>

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?new_cwc/reload_cwc_list';
	var post_message		=	'Data Update Successfully';
</script>
<!-- calling ajax form submission plugin for specific form -->


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
      window.scrollTo(0,0);
      $(this).ajaxSubmit(options);
      return false;
  });


});

function show_response_project_add(responseText, statusText, xhr, $form) {
	$('html, body').animate({ scrollTop: 0 }, 0);
	 $('#msgModal-cwc').modal('hide');
		
	 $('#msgModal-cwc').modal('show');
	 
    document.getElementById("submit-button").disabled = false;
}




function validate_project_add(formData, jqForm, options) {
	 $('#msgModal-cwc').modal('hide');
	 var flag=0 ;
	if (!jqForm[0].name.value)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".name").focus();
		$(".name_msg").html(" ");
		var flag=0 ; 

			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
	}
	
	if (!jqForm[0].age.value)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".age").focus();
		$(".name_msg").html(" ");
		var flag=0 ; 

			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
	}

	if (!jqForm[0].professional_qualification.value)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".professional_qualification").focus();
		$(".name_msg").html(" ");
		var flag=0 ; 

			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
	}
	contact
	if (!jqForm[0].address.value)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".address").focus();
		$(".name_msg").html(" ");
		var flag=0 ; 

			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
	}

	if (!jqForm[0].contact.value)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".contact").focus();
		$(".name_msg").html(" ");
		var flag=0 ; 

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

function remove(value){
	if(value){
		$(".name_msg").html("");
		}	
}



$(document).ready(function () {
	$('#datepicker1').on('change', function() {
	var joining_date=  $('#datepicker').val(); 	
    var release_date=  $('#datepicker1').val(); 
		 if(release_date < joining_date)
		 {
				$(".err_msg_rlse").show();
		 }else{
			 $(".err_msg_rlse").hide();
		
		 }

	});


	$('#cwc_photo').bind('change', function() {

		//$("img-id").css("display", "none")

		
		 //this.files[0].size gets the size of your file.
		 if(this.files[0].size > 2092318){
			 //alert(this.files[0].size);
		$("#size-error").html("File size should be less than 2MB");
		document.getElementById("submit-button").disabled = true;
		 }else{
		$("#size-error").html(" ");
		document.getElementById("submit-button").disabled = false;
		 }
		 
		 
		});
 
});


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
</script>

<script>
function clearbutton(){ 
$("#size-error").html(" ");
document.getElementById("submit-button").disabled = false;

}
</script>
