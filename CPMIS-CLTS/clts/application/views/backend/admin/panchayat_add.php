<?php 
//echo $_GET
	$district_list=$this->model_policestation->get_psdistricts_list("IND010");
	//$blocks_list=$this->model_policestation->get_psblock_lists("IND010");
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i></i>
					<?php echo get_phrase('panchayat_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/panchayat_name/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit9', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>
					 <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Districts');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
								<select name="choices" id="choices" class="form-control dist"  data-validate="required" data-message-required="<?php echo get_phrase('District should not be empty');?>">
								<option value="">Select District</option>              
								  <?php foreach($district_list as $crow2):  ?>                  
								  <option <?php //if($selected_dist==$crow2["area_id"]){echo "selected";}?> value="<?php echo $crow2["area_id"];?>" ><?php echo $crow2["area_name"] ; ?></option>
								  <?php    endforeach ; ?>
								</select>
						</div>
					</div>  
					
					
					 <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('bolck_Name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp2" class="col-sm-7">
                      	 <select name="block" class="form-control" id="block" data-validate="required" data-message-required="<?php echo get_phrase('Block should not be empty');?>">
							  <option value="" >Select</option>
							  <?php foreach($block_id as $crow3):  ?>
							  <option value="<?php echo $crow3['area_id'];?>" ><?php echo $crow3['area_name']; ?></option>
							  <?php  endforeach;  ?>
							</select>
						</div>
					</div>  
					<div id="name_fr_grp" class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Panchayat_name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp3" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('caste_category should not be empty');?>" maxlength="60"  value="" autofocus>
								</div>
						</div>
					</div>  
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_panchayat');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_panchayat';
	var post_message		=	'Data Created Successfully';




function removeAllOptions(sel, removeGrp) {
var len, groups, par;
if (removeGrp) {
groups = sel.getElementsByTagName('optgroup');
len = groups.length;
for (var i=len; i; i--) {
sel.removeChild( groups[i-1] );
}
}

len = sel.options.length;
for (var i=len; i; i--) {
par = sel.options[i-1].parentNode;
par.removeChild( sel.options[i-1] );
}
}

function appendDataToSelect(sel, obj,type) {
var f = document.createDocumentFragment();
var labels = [], group, opts;

function addOptions(obj) {
var f = document.createDocumentFragment();
var o;

o = document.createElement('option');
if(type=="block")
{
o.appendChild( document.createTextNode( 'Select Block' ) );
}
o.value ='';
f.appendChild(o);

for (var i=0, len=obj.text.length; i<len; i++) {
o = document.createElement('option');
o.appendChild( document.createTextNode( obj.text[i] ) );

if ( obj.value ) {
o.value = obj.value[i];
}

f.appendChild(o);
}
return f;
}

if ( obj.text ) {
opts = addOptions(obj);
f.appendChild(opts);
} else {
for ( var prop in obj ) {
if ( obj.hasOwnProperty(prop) ) {
labels.push(prop);
}
}

for (var i=0, len=labels.length; i<len; i++) {
group = document.createElement('optgroup');
group.label = labels[i];
f.appendChild(group);
opts = addOptions(obj[ labels[i] ] );
group.appendChild(opts);
}
}
sel.appendChild(f);
}

	
	
	

document.forms['demoForm'].elements['choices'].onchange = function(e) { 
 var base_url = "<?php echo base_url();?>";
//alert(base_url) ;

var datas = new Object();
var distid=document.getElementById('choices').value;
//alert(distid) ;
var relName = 'block';
$.ajax({
type: "POST",
url: base_url+"/index.php?admin/getblock/"+distid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
console.log(msg);
var form = document.forms['demoForm'];
// reference to associated select box
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );
//console.log(Select_List_Data);
//console.log(Select_List_Data[relName]);
var obj=Select_List_Data[relName][distid];
var type="block";
//alert(obj);

// remove current option elements
removeAllOptions(relList, true);

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList, obj,type);
//obj = msg;
},
error: function() {

}
  });

 
 
}
	
	
	
	</script>

<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-panchayat-submission.js"></script>
<script>
$('input').blur(function() {
   	   var value = $.trim( $(this).val() );
   	   $(this).val( value );
   	});
</script>