<?php
foreach ($editpanchayat_url as $row):

$blockid=$row['block_id'] ;
$district_list=mysql_fetch_assoc(mysql_query("select parent_id from child_area_detail where area_id='$blockid' ")) ;
$dist=$district_list['parent_id'] ;
$district=mysql_fetch_assoc(mysql_query("select parent_id from child_area_detail where area_id='$dist' ")) ;
$district=$district['parent_id'] ;
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_panchayat');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/panchayat_name/edit/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate ajax-submit9', 'enctype' => 'multipart/form-data','name'=> 'demoForm'));?>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('panchayat_name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('Name should not be empty');?>"  maxlength="60" value="<?php echo $row['name'];?>" >
                         </div>
							<span class="name_msg color-red"></span>
						</div>

					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('District');?><span class="color-white">*</span></label>

						<div class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
							<select name="choices" id="choices" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('District should not be empty');?>">
								<option value="">Select District</option>
							<?php
								 //$child_dist		= $this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();
                                  $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => $district))->result_array();
                                  foreach($child_state as $crow1):
                                  ?>

                                   <option value="<?php echo $crow1['area_id'];?>" <?php if($dist==$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>

                               <?php
                              endforeach;
							  ?>                       
								</select>
							  </div>
						</div>
					</div>
					

					 <div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('block_Name');?><span class="color-white">*</span></label>

						<div class="col-sm-7">
                      	<div class="input-group">
								<span class="input-group-addon"><i></i></span>
							<select name="block" id="block" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('District should not be empty');?>">
								<option value="">Select block</option>
							<?php
								 //$child_dist		= $this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();				
                                  $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => $dist))->result_array();
                                  foreach($child_state as $crow1):
                                  ?>

                                   <option value="<?php echo $crow1['area_id'];?>" <?php if($blockid==$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>

                               <?php
                              endforeach;
							  ?>                       
								</select>
							  </div>
						</div>
					</div>
					
					
                    <div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('update_panchayat');?></button>
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
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_panchayat';
	var post_message		=	'Data Updated Successfully';
	
	
	
	

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
