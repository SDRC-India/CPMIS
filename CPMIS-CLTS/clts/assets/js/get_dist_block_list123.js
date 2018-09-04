
// object literal holding data for option elements
var Select_List_Data;

// removes all option elements in select box
// removeGrp (optional) boolean to remove optgroups
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
if(type=="dist")
{
o.appendChild( document.createTextNode( 'Select District' ) );
}
if(type=="block")
{
o.appendChild( document.createTextNode( 'Select Block' ) );
}
if(type=="category")
{
o.appendChild( document.createTextNode( 'Select Caste Name' ) );
}
if(type=="police_list")
{
o.appendChild( document.createTextNode( 'Select Police stations' ) );
}
if(type=="pincode")
{
o.appendChild( document.createTextNode( 'Select Pincode' ) );
}
if(type=="Panchayat")
{
o.appendChild( document.createTextNode( 'Select Panchayat Names' ) );
}
if(type=="police_lisinside")
{
o.appendChild( document.createTextNode( 'Select police station Name' ) );
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
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['state'].onchange = function(e) {
var datas = new Object();
stateid=document.getElementById('state').value;

var relName = 'choices';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getdist/"+stateid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;

var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][stateid]
var type="dist";

// remove current option elements
removeAllOptions(relList, true);
// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList, obj,type);
//obj = msg;
},
error: function() {
//alert('<?php echo base_url();?>');
}
  });

//alert(obj);
// name of associated select box

};
///load blocks
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['choices'].onchange = function(e) {
var datas = new Object();
var distid=document.getElementById('choices').value;
var stateid=document.getElementById('state').value;

if(stateid=='IND010'){
	$("#outside").hide();  
	$("#inside").show(); 
	$("#outside_polic").hide();  
	$("#ps").show();   
	$("#outside_panchayat").hide();
	$("#panchayat_name_fr_grp").show();
	$("#outside_pincode").hide();
	$("#pincode").show();
	
	
var relName = 'block';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getblock/"+distid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][distid];
var type="block";

// remove current option elements
removeAllOptions(relList, true);
appendDataToSelect(relList, obj,type);

},
error: function() {

}
  });


var distid1=document.getElementById('choices').value;
var relName1 = 'police_station';
$.ajax({
type: "POST",
url: base_url+"index.php?child_rescued_list/get_police_station_list/"+distid1,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList1 = form.elements[relName1 ];

Select_List_Data=eval( '(' + msg + ')' );
//console.log(obj);
var obj1=Select_List_Data[relName1][distid1];
//console.log(obj1);
var type1="police_list";
//alert(obj);
// remove current option elements
removeAllOptions(relList1, true);

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList1, obj1,type1);
//obj = msg;
}
,
error: function() {

}
 });

 //get pincode of the district
var distid2=document.getElementById('choices').value;
var relName2 = 'pincode';
$.ajax({
type: "POST",
url: base_url+"index.php?child_rescued_list/get_pincode_list/"+distid2,
data: "",
dataType: "text",
cache:false,
success: function(msg){
	//console.log(msg);
datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList2 = form.elements[relName2];

Select_List_Data=eval( '(' + msg + ')' );
//console.log(obj);
var obj2=Select_List_Data[relName2][distid2];
//console.log(obj1);
var type2="pincode";
//alert(obj);

// remove current option elements
removeAllOptions(relList2, true);

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList2, obj2,type2);	
//obj = msg;
}
,
error: function() {

}
 });
}else{	
	$("#outside").show();  
	$("#inside").hide(); 
	$("#outside_polic").show();  
	$("#ps").hide();   
	$("#outside_panchayat").show();
	$("#panchayat_name_fr_grp").hide();
	$("#blockout").val('');

	$("#outside_pincode").show();
	$("#pincode").hide();

	/*	 $("#pin_code_fr_grp").hide();
	$("#outside_pincode").show();
	$("#outside_panchayat").show();
	$("#panchayat_name_fr_grp").hide(); */
}


};
//  get districts and blocks in with in the state sectioin

// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['within_state'].onchange = function(e) {
var datas = new Object();
var stateid=document.getElementById('within_state').value;

var relName = 'within_district';
var relName1 = 'within_block';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getdist_within/"+stateid,
data: "",
dataType: "text",
cache:false,
success: function(msg){

datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[ relName ];
var relList1 = form.elements[ relName1 ];
Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][stateid]
var type="dist";

// remove current option elements
removeAllOptions(relList, true);
removeAllOptions(relList1, true);
// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList, obj,type);
//obj = msg;
},
error: function() {
//alert('<?php echo base_url();?>');
}
  });

//alert(obj);
// name of associated select box

};
//load blocks
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['within_district'].onchange = function(e) {
	
var datas = new Object();
var distid=document.getElementById('within_district').value;
var relName = 'within_block';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getblock_within/"+distid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][distid]
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
  
 var distid4=document.getElementById('within_district').value;
var relName4 ='ps_within';
$.ajax({
type: "POST",
url: base_url+"index.php?child_rescued_list/get_police_station_inside/"+distid4,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList4= form.elements[ relName4 ];
Select_List_Data=eval( '(' + msg + ')' );
//console.log(obj);
var obj4=Select_List_Data[relName4][distid4];
var type4="police_lisinside";

// remove current option elements
removeAllOptions(relList4, true);

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList4, obj4,type4);
//obj = msg;
}
,
error: function() {

}
 }); 
  
  


};
//get the districts and blocks for outside state
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['outside_state'].onchange = function(e) {
var datas = new Object();
stateid=document.getElementById('outside_state').value;

var relName = 'outside_district';
//var relName1 = 'outside_block';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getdist_outside/"+stateid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
//console.log(msg);
datas= msg;
var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[ relName ];
//var relList1 = form.elements[relName1 ];
Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][stateid]
var type="dist";
//console.log(obj);

// remove current option elements
removeAllOptions(relList, true);
//removeAllOptions(relList1, true);
// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList, obj,type);
//obj = msg;
},
error: function() {
//alert('<?php echo base_url();?>');
}
  });

//alert(obj);
// name of associated select box

};
///load blocks
// anonymous function assigned to onchange event of controlling select box
/* document.forms['basicForm'].elements['outside_district'].onchange = function(e) {
var datas = new Object();
var distid=document.getElementById('outside_district').value;
var relName = 'outside_block';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getblock_outside/"+distid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
var form = document.forms['basicForm'];
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );
var obj=Select_List_Data[relName][distid]
var type="block";

removeAllOptions(relList, true);
appendDataToSelect(relList, obj,type);
},
error: function() {

}
  });


}; */
///load caste lists
// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['category'].onchange = function(e) {
	//console.log("ssd");
var datas = new Object();
var category=document.getElementById('category').value;
var relName = 'caste';
$.ajax({
type: "POST",
url: base_url+"index.php?child_rescued_list/get_castes_list/"+category,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;

var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[relName ];

Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][category];
var type="category";
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


};
/////lload the panchayat names 

// anonymous function assigned to onchange event of controlling select box
document.forms['basicForm'].elements['block'].onchange = function(e) {
	//console.log("ssd");
var datas = new Object();
var block=document.getElementById('block').value;
//console.log(block);
var relName = 'panchayat_names';
$.ajax({
type: "POST",
url: base_url+"index.php?child_rescued_list/get_panchayat_name_list/"+block,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
//console.log(datas);
var form = document.forms['basicForm'];
// reference to associated select box
var relList = form.elements[relName ];

Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data[relName][block];
var type="Panchayat";
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


};


