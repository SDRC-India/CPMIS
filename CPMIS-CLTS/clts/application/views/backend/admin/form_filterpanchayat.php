<form  action="<?php echo base_url(); ?>index.php?admin/panchayat_name" method="post" name="panchayat_name" class="panchayat_name" >
				<div class="col-md-2">
					<div class="form-group" id="form-group">
					<label ><b>Districts:</b></label>		  
						<select name="district" id="district" class="form-control dist"  data-validate="required">
						<option value="">Select Districts</option>              
						  <?php foreach($districtpn_list as $crow2):  ?>                  
						  <option <?php if($selected_dist==$crow2["area_id"]){echo "selected";}?> value="<?php echo $crow2["area_id"];?>" ><?php echo $crow2["area_name"] ; ?></option>
						  <?php    endforeach ; ?>
						</select>

					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					<label ><b>Block Name:</b></label>		  
						<select name="block" class="form-control" id="block" data-validate="required" onchange="errormsg(this.value);">
						  <option value="" >Select</option>
						  <?php foreach($block_id as $crow3):  ?>
						  <option <?php if($blocknew_id==$crow3["area_id"]){echo "selected";}?> value="<?php echo $crow3['area_id'];?>" ><?php echo $crow3['area_name']; ?></option>
						  <?php  endforeach;  ?>
						</select>
						<span class="nameblock_msg color-red" id="nameblock_msg"></span>
					</div>
				</div>
		<div class="col-md-2">      
				<button type="submit" style="margin-top:20px;" class="btn btn-info" id="submit-button1" onclick="return validdist();">Submit</button>
		</div>
</form>
<script>
//get block
function validdist()
{
	var block = document.getElementById("block").value ;
	if (block == '') 
	{
	document.getElementById("nameblock_msg").innerHTML= "Please choose block" ; 
		return false;
	} 
}

//error message remove
function errormsg(value)
{
if(value!="")
	{
	document.getElementById("name_msg").innerHTML="" ;
	return false ;
	}
	else{
		document.getElementById("name_msg").innerHTML= "Please choose block" ; 

	}
}



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
			

document.forms['panchayat_name'].elements['district'].onchange = function(e) { 
 var base_url = "<?php echo base_url();?>";
//alert(base_url) ;

var datas = new Object();
var distid=document.getElementById('district').value;
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
var form = document.forms['panchayat_name'];
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
</script><br><br><br><br><br>