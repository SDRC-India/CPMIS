// ajax form plugin calls at each modal loading,
$(document).ready(function() {
	// configuration for ajax form submission
	var options = {
		beforeSubmit		:	validate,
		success				:	showResponse1,
		resetForm			:	true
	};

	// binding the form for ajax submission
	$('.ajax-submit8').submit(function() {
	
		$(this).ajaxSubmit(options);

		// prevents normal form submission
		return false;
	});
	

});


// form validation
function validate(formData, jqForm, options) {
		if(!jqForm[0].caste.value)
		{
			return false;
		}
	if (!jqForm[0].name.value )
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".name").focus();
		$(".name_msg").html("");

			return false;
	}
	else if (!jqForm[0].caste.value )
	{
		$("#name_fr_grp2").addClass("validate-has-error");
		$(".name").focus();
		$(".name_msg").html("");

			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
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
	reload_data(post_refresh_url);
}