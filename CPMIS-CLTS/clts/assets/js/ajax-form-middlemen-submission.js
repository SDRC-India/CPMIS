// ajax form plugin calls at each modal loading,
$(document).ready(function() {
 $('button[type="submit"]').prop('enabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });

	// configuration for ajax form submission
	var options = {
		beforeSubmit		:	validate,
		success				:	showResponse,
		resetForm			:	true
	};

	// binding the form for ajax submission
	$('.ajax-submit7').submit(function() {
      $('#submit-button').prop('disabled', true);

		$(this).ajaxSubmit(options);
        $('#submit-button').prop('enabled', true);
		// prevents normal form submission
		return false;
	});



});
// form validation
function validate(formData, jqForm, options) {


var contact1=jqForm[0].contact.value ;
if (!jqForm[0].name.value )
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".name").focus();
		$(".name_msg").html(" ");

			return false;
	}
 if (!jqForm[0].alias.value )
	{
		$("#name_fr_grp2").addClass("validate-has-error");
		$(".alias").focus();
		$(".name_msg1").html("");

			return false;
	}
	if (!jqForm[0].addressmiddle.value )
	{
		$("#name_fr_grp3").addClass("validate-has-error");
		$(".addressmiddle").focus();
		$(".name_msg2").html("");

			return false;
	}
	if(contact1!=""){
		if (contact1.length!=10 )
		{
			$("#name_fr_grp4").addClass("validate-has-error");
			$(".contact").focus();
			$(".name_msg3").html("Enter valid phone number");

				return false;
		}
		else{
				$("#name_fr_grp").removeClass("validate-has-error");
			$(".name_msg3").html("");
		}
	}
	 $('#submit-button').prop('enabled', true);
}


// ajax success response after form submission, post_refresh_url is sent from modal body
function showResponse(responseText, statusText, xhr, $form)  {

	// hides the preloader
	//$('#preloader-form').html('');

	// showing success message
	toastr.success(post_message, "Success");

	// hides modal that holds the form
	$('#modal_ajax').modal('hide');

	// reload table data after data update
	//reload_data(post_refresh_url);
			setTimeout(function(){ window.location.reload(); }, 1000);
}

function checkerror(value,errormsg)
{
if(value!="")
{
//console.log(fieldname.value) ; 
document.getElementById(errormsg).innerHTML= "" ;
}
}



function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}



	 function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.png|\.jpeg/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#img-error").html("File format error...Please provide a jpg/jpeg format")							 
				setTimeout(function(){ $('#submit-button').prop('disabled', true); }, 300);
				document.getElementById("name").disabled = true;
				document.getElementById("alias").disabled = true;
				document.getElementById("addressmiddle").disabled = true;
				document.getElementById("contact").disabled = true;
				document.getElementById("otherdetails").disabled = true;
				document.getElementById("image").focus();
				 $("#image1").addClass("newClass");
                upload_field.form.reset();
                return false;
            }else{
			      $('#submit-button').prop('enabled', true);
				  document.getElementById("name").disabled = false;
				document.getElementById("alias").disabled = false;
				document.getElementById("addressmiddle").disabled = false;
				document.getElementById("contact").disabled = false;
				document.getElementById("otherdetails").disabled = false;

			}
			}
