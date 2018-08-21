   window.scrollTo = function( x,y ) 
    {
        return true;
    }

function ngoreg(newvalue) {
$(window).scrollTop(0) ;
var json_boardmember=[];
var json_trstees=[];
var trustdetails = document.getElementsByName("trustdetails[]");
var fndetails = document.getElementsByName("fndetails[]");
var name = document.getElementById("regusername").value;
var rgno = document.getElementById("rgno").value;
var dater = document.getElementById("datetimepicker_mask").value;
var gao = document.getElementById("gao").value;
var tao = document.getElementById("tao").value;
//var ie_statement = document.getElementById("ie_statement").value;
var taxtails = document.getElementById("taxtails").value;
var email = document.getElementById("email_id").value;
var contact = document.getElementById("contact").value;

var chairman = document.getElementById("chairman").value;
var msecretary = document.getElementById("msecretary").value;
if(newvalue==2){
var sessionid = document.getElementById("sessionid").value;
var urlnew="action_update_ngo.php" ;
}
else{
var urlnew="action_ngo.php" ;
}

for(i=0; i<fndetails.length;i++)
{
json_boardmember.push(fndetails[i].value);
//console.log(json_data) ;
}
//find trustees
for(j=0; j<trustdetails.length;j++)
{
json_trstees.push(trustdetails[j].value);
}
if (name == '') {
document.getElementById("name_msg1").innerHTML= "Please Enter Name" ; 
	return false;

} 
else if (email == "") 
{
	document.getElementById("name_msg4").innerHTML= "Please Enter Email" ;
	return false;
}
else if (contact == '') {
document.getElementById("name_msg5").innerHTML= "Please Enter Contact" ; 
	return false;

} 
else if (rgno == '') {
document.getElementById("name_msg2").innerHTML= "Please Enter registration number" ;
	return false;

} 
else if (dater == '') {
document.getElementById("name_msg3").innerHTML="Please Enter date of registration" ;
	return false;
 
}
/*
else if(trustdetails.length>1){
var ret = true;
for (var x = 0; x < trustdetails.length; x++) { 
    if(trustdetails[x].value == '' || trustdetails[x].value == '0'){
        ret = false;
        break;
        } else {ret = true;} 

     }
   if (ret == false)
   {
	document.getElementById("name_msg5").innerHTML="Please Enter trustees" ;
	 return ret;        
   }
 } */
else {

// AJAX code to submit form.
if(newvalue==2){
var json_data=JSON.stringify({name: name ,email: email,contact: contact,rgno: rgno ,dater: dater, gao: gao, tao: tao,trstees:json_trstees,fndetails: json_boardmember,chairman: chairman, msecretary: msecretary, sessionid:sessionid });
}else{
//console.log($("#ie_statement").prop("files")[0]);


var json_data=JSON.stringify({name: name ,email: email,contact: contact,rgno: rgno ,dater: dater, gao: gao, tao: tao,trstees:json_trstees,fndetails: json_boardmember,chairman: chairman, msecretary: msecretary });


}
 var formData = new FormData();   
 //console.log($("#ie_statement").prop("files")[0]);
 formData.append('file',$("#ie_statement").prop("files")[0]);
 formData.append('file1',$("#taxtails").prop("files")[0]);
 formData.append('json_data',json_data);
 /*(var dataArr = {
  json_data: json_data,
  file : formData.append('file',$("#ie_statement").prop("files")[0]) // put the file here
};*/
//console.log(form_data.file);
 //console.log(urlnew);
$.ajax({
	type: "POST",
	url: urlnew, 
	data: formData,
	processData: false,
	contentType: false,
	success     :   function(response) {
       
		//document.getElementById("regngoForm").reset();
		if(response==1){
		document.getElementById("elem").innerHTML = "<b>Unable Registration</b>";
		document.getElementById("regngoForm").reset();
		}
		if(response==3){
		document.getElementById("updatengo").innerHTML = "<b>Update Successfully</b>";		
		 setTimeout(function() {
		document.getElementById("updatengo").innerHTML = "";
		}, 8000); // <-- time in milliseconds 

		}
		else{
		
		document.getElementById("elem").innerHTML = "<b>Registration Successfully</b>";
		setTimeout(function() {
document.getElementById("elem").innerHTML = "";
        location.reload()
}, 5000);
		document.getElementById("regngoForm").reset();		
		}
		
    }
});
return false ;

}
} 

//check error
function checkerror(value,errormsg)
{
if(value!="")
{
//console.log(fieldname.value) ; 
document.getElementById(errormsg).innerHTML= "" ;
}
}

function checkexist(value,errormsg)
{
	var json_data=JSON.stringify({email: value });
$.ajax({
	type: "post",
	url: "duplicatmail.php" ,
	data: {json_data:json_data},
	dataType: "json",
	success     :   function(response) {
		if(response>0){
		document.getElementById("name_msg4").innerHTML = "<b>Email Already exist</b>";
		 $("#show").attr("disabled", true);
		return false ;
		}
	else{
		document.getElementById("name_msg4").innerHTML = "";
		$("#show").attr("disabled", false);
		//login error
		  setTimeout(function() {
		document.getElementById("name_msg4").innerHTML = "";
		}, 20000); // <-- time in milliseconds 
			}		
    }
});
}

function trustees(value)
{
if(value!="")
{
	//console.log(fieldname.value) ; 
	document.getElementById('name_msg5').innerHTML= "" ;
}
}
//add bottom

function GetDynamicTextBox(value){
    return '<div style="height:10px"></div><input name = "trustdetails[]" type="text" class="form-control" required="" onblur="return trustees(this.value,"name_msg5");" placeholder="new trustees" maxlength="100" value = "' + value + '" />' +
            '<button type="button" class="btn" onclick = "RemoveTextBox(this)"><span class="glyphicon glyphicon-minus"></span></button>'
}
function AddTextBox() {
    var div = document.createElement('DIV');
    div.innerHTML = GetDynamicTextBox("");
    document.getElementById("TextBoxContainer").appendChild(div);
}
 
function RemoveTextBox(div) {
	document.getElementById("name_msg5").innerHTML="" ;
    document.getElementById("TextBoxContainer").removeChild(div.parentNode);
}
<!--board box-->
/*window.onload = RecreateboardTextboxes;*/
function GetDynamicboardBox(value){
    return '<div style="height:10px"></div><input name = "fndetails[]" required="" type="text" class="form-control" maxlength="100" placeholder="Board member" ,"name_msg6" value = "' + value + '" />' +
            '<button type="button" class="btn" onclick = "RemoveboardBox(this)" ><span class="glyphicon glyphicon-minus"></span></button>'
}
function AddboardBox() {
    var div = document.createElement('DIV');
    div.innerHTML = GetDynamicboardBox("");
    document.getElementById("TextboradContainer").appendChild(div);
}
 
function RemoveboardBox(div) {
	document.getElementById("name_msg6").innerHTML="" ;

    document.getElementById("TextboradContainer").removeChild(div.parentNode);
}

//mukhia module

function mukhia()
{
var mukhianame = document.getElementById("mukhianame").value;
var mukhiacontact = document.getElementById("mukhiacontact").value;
var addressmukhia = document.getElementById("addressmukhia").value;
var NameOfdist = document.getElementById("NameOfdist").value;
var nameofblock = document.getElementById("nameofblock").value;
var panchayatname = document.getElementById("panchayatname").value;

	var lettr_name = /^([a-zA-Z]+\s)*[a-zA-Z]+$/;
    isValid = lettr_name.test(mukhianame);
if (mukhianame == "") {
document.getElementById("name_mukmsg1").innerHTML= "Please Enter Name" ; 
return false;
}
else if(isValid==false){
document.getElementById("name_mukmsg1").innerHTML = "Name only allowed character and space";
return false ;
} 
else if (mukhiacontact.length != 10) 
{
	document.getElementById("name_mukmsg2").innerHTML= "Please Enter valid Contact" ;
	return false;
}
else if (addressmukhia == '') {
document.getElementById("name_mukmsg3").innerHTML= "Please Enter Address" ; 
return false ;
}
else if (NameOfdist == 0) {
document.getElementById("name_mukmsg4").innerHTML= "Please Enter District Name" ; 
return false ;
}
else if (nameofblock == '') {
document.getElementById("name_mukmsg5").innerHTML= "Please Enter Block Name" ; 
return false ;
}
else if (panchayatname == '') {
document.getElementById("name_mukmsg6").innerHTML= "Please Enter Panchayat Name" ; 
return false ;
}
else{
//document.getElementById("name_msg3").innerHTML="" ;
// AJAX code to submit form.

var json_data=JSON.stringify({mukhianame: mukhianame ,mukhiacontact: mukhiacontact,addressmukhia: addressmukhia,NameOfdist: NameOfdist,panchayatid: panchayatname });
$.ajax({
	type: "post",
	url: "action_mukhia.php" ,
	data: {json_data:json_data},
	dataType: "json",
	success     :   function(response) {
		if(response==2){
		document.getElementById("mukhia").innerHTML = "<b>Mukhia Registration Successfully</b>";
			//mukhia
 setTimeout(function() {
  document.getElementById("mukhia").innerHTML = "";
},  5000); // <-- time in milliseconds

		document.getElementById("mukhiareg").reset();	
		}
else{
		document.getElementById("mukhia").innerHTML = "<b>Unable Registration</b>";
		document.getElementById("mukhiareg").reset();
}		
    }
});
return false ;
//document.getElementById("regngoForm").reset();
} 
}

//Login details

function ngologin() {
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if((username=="")||(password==""))
{
document.getElementById("errorlogin_msg").innerHTML= "Username and password should not be blank" ; 
setTimeout(function() {
document.getElementById("errorlogin_msg").innerHTML = "";
}, 3000);
return false ;
}
else {
//document.getElementById("name_msg3").innerHTML="" ;
// AJAX code to submit form.

var json_data=JSON.stringify({username: username ,password: password });
$.ajax({
	type: "post",
	url: "action_login.php" ,
	data: {json_data:json_data},
	dataType: "json",
	success     :   function(response) {
	    //window.location = 'index.php';
   //$( '#name_status' ).html(response);
   if(response==0)
   {
   	document.getElementById("name_status").innerHTML = "<b>Invalid Username or password</b>";
	 setTimeout(function() {
	document.getElementById("name_status").innerHTML = "";
	}, 100000); // <-- time in milliseconds 
   }
   else{
      	//document.getElementById("ngo_id").innerHTML = response;
	   window.location = "ngo_updated.php"; 
	   //location.replace('ngo_updated.php/id=' + response);
	  
   }
 //document.getElementById("regngoForm").reset();
		//document.getElementById("elem").innerHTML = "<b>Registration Successfully</b>";
		//document.getElementById("regngoForm").reset();
    }
});
return false ;

}
}

function checkloginerror(username,password)
{
var username_name = document.getElementById("username").value;
var password_new = document.getElementById("password").value;

if((username_name!="")&&(password_new!=""))
{
document.getElementById("errorlogin_msg").innerHTML="" ;
}

}

function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

 
 
 //login menubar
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});



    