// ajax form plugin calls at each modal loading,
$(document).ready(function() {
	// configuration for ajax form submission
	var options = {
		beforeSubmit		:	validate,
		success				:	showResponse1,
		resetForm			:	true
	};

	// binding the form for ajax submission
	$('.ajax-submit5').submit(function() {
		
		$(this).ajaxSubmit(options);

		// prevents normal form submission
		return false;
	});
	

});


// form validation
function validate(formData, jqForm, options) {
if(!jqForm[0].period.value)
{
	return false;
}
	if (!jqForm[0].dpname.value )
	{
		$("#dpname_fr_grp").addClass("validate-has-error");
		$(".dpname").focus();
		$(".dnname_msg").html("");

			return false;
	}
	if (!jqForm[0].snname.value )
	{
		$("#dpname_fr_grp").addClass("validate-has-error");
		$(".snname").focus();
		$(".snname_msg").html("");

			return false;
	}
	if (!jqForm[0].sbname.value )
	{
		$("#dpname_fr_grp").addClass("validate-has-error");
		$(".sbname").focus();
		$(".sbname_msg").html("");

			return false;
	}
	if (!jqForm[0].tpname.value )
	{
		$("#dpname_fr_grp").addClass("validate-has-error");
		$(".tpname").focus();
		$(".tpname_msg").html("");

			return false;
	}
	if (!jqForm[0].period.value )
	{
		$("#dpname_fr_grp").addClass("validate-has-error");
		$(".period").focus();
		$(".shename_msg").html("");

			return false;
	}
	else{
		$("#dpname_fr_grp").removeClass("validate-has-error");
		$(".shename_msg").html("");
	}



	// disables intermediatory form submission
	document.getElementById("submit-button").disabled=true;
}



// ajax success response after form submission, post_refresh_url is sent from modal body
function showResponse1(responseText, statusText, xhr, $form)  {

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