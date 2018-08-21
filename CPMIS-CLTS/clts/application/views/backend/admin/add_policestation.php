<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0" >
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add_police_station');?>
            	</div>
            </div>
			<div class="panel-body" >

                <?php echo form_open('admin/policestation_list/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit4', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>

															
					<div class="form-group"><span id="name_status" class="color-red"></span><br><br>
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" id="name" data-validate="required" data-message-required="<?php echo get_phrase('Name should not be blank');?>"  maxlength="60"  value="" autofocus>
						</div>
						<span class="name_msg color-red" id="name_msg"></span>
						</div>
					</div>
          <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('District');?><span class="color-white">*</span></label>

						<div id="name_fr_grp2" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<select name="choices" id="choices" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('District should not be blank');?>">
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
												<span class="name_msg color-red" id="name_msg2"></span>

						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button" onclick="return pscheck();"><?php echo get_phrase('add_police_station');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_policestation_list/<?php echo $selected_dist ; ?>';
	var post_message		=	'Data Created Successfully';
</script>

<!-- calling ajax form submission plugin for specific form -->
</script>

<script>

document.forms['demoForm1'].elements['choices'].onchange = function(e) { 
 var base_url = "<?php echo base_url();?>";
//alert(base_url) ;

var datas = new Object();
var name = document.getElementById("name").value;
var choices = document.getElementById("choices").value;
//alert(distid) ;
var relName = 'block';
$.ajax({
type: "POST",
url: base_url+"/index.php?admin/getduplicat/"+name+"/"+choices,
data: "",
dataType: "text",
cache:false,
success: function(response){
if(response>0)
{
	document.getElementById("name_status").innerHTML = "<b>Duplicate Police station not inserted</b>";
	 $("#submit-button").attr("disabled", true);
	return false ;
	
}
else{
document.getElementById("name_status").innerHTML ="" ;
 $("#submit-button").attr("disabled", false);
return true ;
}


// remove current option elements

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
//obj = msg;
},
error: function() {

}
  }); 
}

//onblur


document.forms['demoForm1'].elements['name'].onblur = function(e) { 
 var base_url = "<?php echo base_url();?>";
//alert(base_url) ;

var datas = new Object();
var name = document.getElementById("name").value;
var choices = document.getElementById("choices").value;
//alert(distid) ;
var relName = 'block';
$.ajax({
type: "POST",
url: base_url+"/index.php?admin/getduplicat/"+name+"/"+choices,
data: "",
dataType: "text",
cache:false,
success: function(response){
if(response>0)
{
	document.getElementById("name_status").innerHTML = "<b>Duplicate Police station not inserted</b>";
	 $("#submit-button").attr("disabled", true);
	return false ;
	
}
else{
document.getElementById("name_status").innerHTML ="" ;
 $("#submit-button").attr("disabled", false);
return true ;
}


// remove current option elements

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
//obj = msg;
},
error: function() {

}
  });

 
 
}


</script>
<script src="assets/js/ajax-form-ps-submission.js"></script>

<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>