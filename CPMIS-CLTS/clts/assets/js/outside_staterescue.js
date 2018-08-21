
//object literal holding data for option elements
var Select_List_Data;

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


document.forms['basicForm'].elements['district_child'].onchange = function(e) { 
var datas = new Object();
var distid=document.getElementById('district_child').value;
		
var relName = 'child_block';
$.ajax({
type: "POST",
url: base_url+"index.php?admin/getblock/"+distid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
var form = document.forms['basicForm'];
//reference to associated select box
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );

var obj=Select_List_Data['block'][distid];
var type="block";

//remove current option elements
removeAllOptions(relList, true);
appendDataToSelect(relList, obj,type);

},
error: function() {

}
});
};
document.forms['basicForm'].elements['outside_state'].onchange = function(e) { 
	var datas = new Object();
	var stateid=document.getElementById('outside_state').value;

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


  $(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
	
	 function ajaxFileUpload2(upload_field)
        {
		 var re_text = /\.jpg|\.png|\.jpeg/i;
         var filename = upload_field.value;
	         if (filename.search(re_text) == -1 && filename !='')
	         {
					$("#img-error").html("File format error...Please provide a jpg/jpeg/png format");
					document.getElementById("image").focus();
					//document.getElementById("image1").focus();
					//document.getElementById("image2").focus();
					//document.getElementById("image3").focus();
					 $("#image1").addClass("newClass");
	             upload_field.form.reset();
	             return false;
	         }

			}
	


        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ( (keyCode== 32) ||(keyCode >= 65 && keyCode <= 90) ||(keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            //document.getElementById("error").style.display = ret ? "none" : "inline";
           return ret;
		  // return false;
        }

var FromEndDate3 = new Date();
$('#datepickerpr').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate3,
autoclose: true
});


var FromEndDate3 = new Date();
$('#datepickerrescue').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate3,
autoclose: true
});

<!-- new validation-->
$(document).ready(function () {

	var options = {
      beforeSubmit: validate_project_add,
      success: show_response_project_add,
      resetForm: true
  };
  $('.project-addoutside').submit(function () { 
      window.scrollTo(0,0);
      $(this).ajaxSubmit(options);
      return false;
  });


});

function show_response_project_add(responseText, statusText, xhr, $form) { 
	
var role_id = "<?php echo $role_id;?>";
	$('html, body').animate({ scrollTop: 0 }, 0);
  $('#preloader-form').html('');
	$('#msgModal-outsideconf').modal('hide');
///$('#msgModal-conf').modal('show');
$('#msgModal-outside').modal('show');

  document.getElementById("submit-button").disabled = false;
}


function validate_project_add(formData, jqForm, options) {

	
	
	var flag=0 ;
	
	$('#msgModal-outsideconf').modal('hide');
	
	
	if($('#image').val() == '') {
        $('.img-error').show();
    	var flag=1 ;
       return false;        
       } else {
 		 $('.img-error').hide();
 		var flag=0 ; 		 
       }

	
	 if($('#cname').val() == '') {
         $('.error_msg1').show();
     	var flag=1 ;
        return false;        
        } else {
  		 $('.error_msg1').hide();
  		var flag=0 ; 		 
        }

	 if($('#gender').val() == '') {
         $('.error_msg2').show();
     	var flag=1 ;
        return false;        
        } else {
  		 $('.error_msg2').hide();
  		var flag=0 ; 		 
        }

	
	 if($('#isdob').val()=='Yes'){
	 if($('#date_of_birth').val() == '') {
         $('.error_msg_birthw').show();
     	var flag=1 ;
        return false;        
        } else {
  		 $('.error_msg_birthw').hide();
  		var flag=0 ; 		 
        }
	 }else{		 
		 if($('#age').val() == '') {			 
	         $('.error_msg_year').show();
	     	var flag=1 ;
	        return false;        
	        } else {
	  		 $('.error_msg_year').hide();
	  		var flag=0 ; 		 
	        } 
		//added by poojashree end
		 //on 17-04-2018
		 
		 if($('#age').val() != '') {
			 if($('#age').val()>=18)
				 {
				 //alert($('#age').val());
				 $('#error_msg_year').hide();
				var flag=1 ;
			        return false;    
				 document.getElementById("submit-button").disabled = true;
				 
				 }else
					 {
					 $('#error_msg_year').hide();
				  		var flag=0 ; 	
					 document.getElementById("submit-button").disabled = false;
					 }
		        }
		 
		 //added by poojashree end on 17-04-18
		 
		 if($('#month').val()>11)
		 {
		 //alert($('#age').val());
		 $('#error_msg_month').hide();
		var flag=1 ;
	        return false;    
		 document.getElementById("submit-button").disabled = true;
		 
		 }else
			 {
			 $('#error_msg_month').hide();
		  		var flag=0 ; 	
			 document.getElementById("submit-button").disabled = false;
			 }
		 
		 
		 
		 
		 
	 }
	 
	
	 if($('#mothname').val() == '') {
         $('.error_msg3').show();
     	var flag=1 ;
        return false;        
        } else {
  		 $('.error_msg3').hide();
  		var flag=0 ; 		 
        }

	 if($('#fname').val() == '') {
         $('.error_msg4').show();
     	var flag=1 ;
        return false;        
        } else {
  		 $('.error_msg4').hide();
  		var flag=0 ; 		 
        }

	 if($('#rescue_date').val() == '') {
         $('.error_msg5').show();
     	var flag=1 ;
        return false;        
        } else {
  		 $('.error_msg5').hide();
  		var flag=0 ; 		 
        }  

        if($('#emp_name').val() == '') {
            $('.error_msg_birth').show();
        	var flag=1 ;
           return false;        
           } else {
     		 $('.error_msg_birth').hide();
     		var flag=0 ; 		 
           } 
        
       /* if($('#age').val() == '') {
            $('.error_msg_age').show();
        	var flag=1 ;
           return false;        
           } else {
     		 $('.error_msg_age').hide();
     		var flag=0 ; 		 
           } */

           if($('#eworkplace').val() == '') {
               $('.postaladdress_msg').show();
           	var flag=1 ;
              return false;        
              } else {
        		 $('.postaladdress_msg').hide();
        		var flag=0 ; 		 
              } 
           
         //added by pooja 
           //on 13.04.18
           //for other specify

        if($('#type_certificatee').val() == '') {
               $('.err_specify-select').show();
           	var flag=1 ;
              return false;        
              } else {
        		 $('.err_specify-select').hide();
        		var flag=0 ; 		 
              } 
         
         
       /* if($('#type_certificatee').val() == 'No') {
        	//alert("hiii");
        	$('#msgModal-outsideconf').modal('show'); 
        	 //$('#msgModal-outside').modal('show');
        	var flag=0 ;
           return true;        
           } */
        
        if($('#type_certificatee').val() == 'Yes') {   
       	if(test[3].checked==true) {
           if($('#others_form').val() == '') {
        	   document.getElementById("others_form").focus();
               $('.err_specify').show();
           	var flag=1 ;
              return false;        
              } else {
           		 $('.err_specify').hide();
           		var flag=0 ; 		 
              }
       	
       	}
        } 	
       
           //ended by pooja 
           //on 13.04.18
           //for other specify
           
           if($('#eworkplace').val() == '') {
               $('.postaladdress_msg').show();
           	var flag=1 ;
              return false;        
              } else {
        		 $('.postaladdress_msg').hide();
        		var flag=0 ; 		 
              }

          /* if($('#type_certificatee').val() == '') {
               $('.contact_msg').show();
               var flag=1 ;
              return false;        
              }
              else {
         		 $('.contact_msg').hide();
         		var flag=0 ;		 
              }  */
     
      
           
     
	if(flag==0 && document.getElementById('msgModal-outsideconf').style.display!='block')
	{
	window.scrollTo(0,0);
	$('#msgModal-outsideconf').modal('show');
	return false;
	}

    $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
    document.getElementById("submit-button").disabled = true;
	
}

$(function() {

		 $('#type_certificatee').change(function(){
   	if($('#type_certificatee').val() == 'Yes') {
       	$('#show_certificate').show();
       	$('#show_attach').show();
  		 } 
		 else {
		       $('#show_certificate').hide();
		       $('#show_attach').hide();
  		 }
	});
	});




var i=1;



	 $('#isdob').change(function(){
         if($('#isdob').val() == 'Yes') {
           $('#ispresent_yes').show();
     $('#ispresent_no').hide();
          } else {
           $('#ispresent_no').show();
     $('#ispresent_yes').hide();
          }
     });

	
 if($('#isdob').val() == 'Yes')
	  {		  
     $('#ispresent_yes').show();
     $('#ispresent_no').hide();
          } else {
        	   $('#ispresent_no').show();
    		 $('#ispresent_yes').hide();
          }

     
	
    $('input[type="checkbox"]').click(function(){
    	if ($(this).prop('checked')) {
        var inputValue = $(this).attr("value");
        //alert(inputValue);
        if(inputValue=="Child Bonded Labour"){
            
         $('#child_bonded_lbr_id').show();
        }
        if(inputValue=="Child Labour"){
            
            $('#child_lbr_id').show();
           }
        if(inputValue=="Age"){
            
            $('#child_lbr_age').show();
           }
        if(inputValue=="Others"){        	
            $('#child_lbr_other').show();
           }
        
        
        $("." + inputValue).toggle();
    	}else{

    		var inputValue = $(this).attr("value");
            //alert(inputValue);
            if(inputValue=="Child Bonded Labour"){
       
             var inputBoxSelector = $('#child_bonded_lbr_id')

            }
            if(inputValue=="Child Labour"){
            	
                var inputBoxSelector = $('#child_lbr_id')

               }
            if(inputValue=="Age"){
            	
                var inputBoxSelector = $('#child_lbr_age')
               }
            if(inputValue=="Others"){
            	var inputBoxSelector = $('#child_lbr_other')
               }
            //inputBoxSelector.find('.fileinput-preview img').attr('src', '');
            //inputBoxSelector.find('.fileinput.fileinput-exists').removeClass("fileinput-exists")
        	//inputBoxSelector.find('.attachment').val('');
            inputBoxSelector.find('.fileinput .btn.btn-orange.fileinput-exists').click()
            inputBoxSelector.hide();
            
    	}
    	$("#text_tag_input").val($('.show_text:checked').length);
    	//$("#text_tag_attach").val($('.show_text:checked').length);  
		 validateAttachment();
         fileuploadnew();

    	//document.getElementById("image1").files.length
});



function isNumberKey(evt){
	   var charCode = (evt.which) ? evt.which : event.keyCode
	   if (charCode > 31 && (charCode < 48 || charCode > 57))
	       return false;
	  
	   return true;
	}



$(document).ready(function () {
	$('#datepickerrescue').on('change', function() { 
	var dateof_birth=  $('#date_of_birth').val(); 	
    var rescue_date=  $('#rescue_date').val(); 
    if(dateof_birth!="" && rescue_date!=""){
		 if(rescue_date < dateof_birth)
		 {
				$(".err_msg_rlse").show();
			    document.getElementById("submit-button").disabled = true;
				
		 }else{
			 $(".err_msg_rlse").hide();
			    document.getElementById("submit-button").disabled = false;
				 
		
		 }
    }

	});
 
});

$(document).ready(function () {
	$('#datepickerpr').on('change', function() { 
	var dateof_birth=  $('#date_of_birth').val(); 	
    var rescue_date=  $('#rescue_date').val(); 
    if(dateof_birth!="" && rescue_date!=""){
		 if(rescue_date < dateof_birth)
		 {
				$(".err_msg_birth").show();
			    document.getElementById("submit-button").disabled = true;
				
		 }else{
			 $(".err_msg_birth").hide();
			    document.getElementById("submit-button").disabled = false;
				 
		
		 }
    }

	});

	$('#image').bind('change', function() {

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




function validate_fileupload(upload_field)
{
 var re_text = /\.jpg|\.png|\.jpeg/i;
 var filename = upload_field.value;
 //var imagename = filename.replace("C:\\fakepath\\","");
     if (filename.search(re_text) == -1 && filename !='')
     {
         //alert("File must be an image");
			$("#showmsg").html("File format error...Please provide a jpg/jpeg/png format");
			document.getElementById("image").focus();
			 $("#image1").addClass("newClass");
         upload_field.form.reset();
         document.getElementById("submit-button").disabled = true;
         
         return false;
     }
     else{
			$("#showmsg").html("");
	         document.getElementById("submit-button").disabled = false;

         }
	}


/*
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
*/

function validcheck(){
	
	var type_certificate=document.getElementById("type_certificatee").value;
	
	if(type_certificate=='Yes'){
		
		test = document.getElementsByName('colorCheckbox[]');
		  if(test[0].checked==false && test[1].checked==false && test[2].checked==false && test[3].checked==false)
          {
	        	document.getElementById("checkbox").innerHTML="<br>* Please select any one Certificate Issued" ; 
	        	return false;
				
          }else{
        	  document.getElementById("checkbox").innerHTML="" ; 
	        	return true;
              }
			
		}
	
	
	
}



function leftTrim(element)
{
	
	if(element)
		element.value=element.value.replace(/^\s+/,"");
}


function validateAttachment(){ 
	if($("#text_tag_input").val() != $("#text_tag_attach").val() ){
		$("#submit-button").attr("disabled", "disabled");
	}
	else{
		$("#submit-button").removeAttr("disabled");
	}
}

 function fileuploadnew(){
	 
	 var count = 0;
	 $('.attachment').each(function(){
	 	if($(this).val() != ""){
	 		count++;
	 	}
	 })
	 $("#text_tag_attach").val(count); 
	 validateAttachment();	 
	 
 }




/*
$('.attachment').on('change', function() {
	$("#text_tag_attach").val($('.attachment').length);  
	})
*/
