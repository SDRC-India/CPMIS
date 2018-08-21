// ajax form plugin calls at each modal loading,
$(document).ready(function() {
	$('button[type="submit"]').prop('disabled', true);
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
if(!jqForm[0].category.value)
{
	return false;
}
if(!jqForm[0].choices.value)
{
	return false;
}

	if (!jqForm[0].name.value || jqForm[0].name.value >50)
	{
		$("#name_fr_grp").addClass("validate-has-error");
		$(".name").focus();
		$(".name_msg").html("Name should not be empty and should be less tahn 50 chracters! ");

			return false;
	}
	else{
			$("#name_fr_grp").removeClass("validate-has-error");
		$(".name_msg").html("");
	}



	if (!jqForm[0].account_role_id.value || jqForm[0].account_role_id.value=="Select A Role")
	{

			flag=1;
		$("#account_role_id_fr_grp").addClass("validate-has-error");
		$(".account_role_id").focus();
		$(".account_role_id_msg").html("Please select the account role! ");
		//console.log("ok");
			return false;
	}
	else{
			$("#account_role_id_fr_grp").removeClass("validate-has-error");
		$(".account_role_id_msg").html("");
	}
	
	if (!jqForm[0].user_name.value || jqForm[0].user_name.value.length>50)
		{
						flag=1;
						$("#user_name_fr_grp").addClass("validate-has-error");
						$(".user_name").focus();
						$(".user_name_msg").html("User name  should be less than 50 characters or should not be left blank");
					 return false;
		}
		else{
				$("#user_name_fr_grp").removeClass("validate-has-error");
			$(".user_name_msg").html("");
		}
		//console.log(jqForm[0].password_field.value);
		if(jqForm[0].password_field.value=="ok")
		{
			if (!jqForm[0].password.value)
				{
						return false;
				}
		}

	if (jqForm[0].email.value.length>40)
		{
						flag=1;
						$("#email_fr_grp").addClass("validate-has-error");
						$(".email").focus();
						$(".email_msg").html("Email id should be less than 40 characters");
					 return false;
		}
		else{
				$("#email_fr_grp").removeClass("validate-has-error");
			$(".email_msg").html("");
		}
		if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(jqForm[0].email.value)){

			$("#email_fr_grp").removeClass("validate-has-error");
		 $(".email_msg").html("");
			}
			else{
				flag=1;
			$("#email_fr_grp").addClass("validate-has-error");
			$(".email").focus();
			$(".email_msg").html("");
		 return false;
		}
	if (jqForm[0].phone.value.length!=10)
		{
						flag=1;
						$("#phone_fr_grp").addClass("validate-has-error");
						$(".phone").focus();
						$(".phone_msg").html("");
					 return false;
		}
		else{
				$("#phone_fr_grp").removeClass("validate-has-error");
			$(".phone_msg").html("");
		}

		if (jqForm[0].skype_id.value.length>20)
			{
							flag=1;
							$("#skype_id_fr_grp").addClass("validate-has-error");
							$(".skype_id").focus();
							$(".skype_id_msg").html("Skype id should be less than 20  characters");
						 return false;
			}
			else{
					$("#skype_id_fr_grp").removeClass("validate-has-error");
				$(".skype_id_msg").html("");
			}
			if(/^\s+$/.test(jqForm[0].skype_id.value)){
				flag=1;
						 $("#skype_id_fr_grp").addClass("validate-has-error");
						 $(".skype_id").focus();
						 $(".skype_id_msg").html("Initially No space allowed");
						return false;
				}
				else{
				 $("#skype_id_fr_grp").removeClass("validate-has-error");
				$(".skype_id_msg").html("");
			}
			if (jqForm[0].facebook_profile_link.value.length>20)
				{
								flag=1;
								$("#facebook_profile_link_fr_grp").addClass("validate-has-error");
								$(".facebook_profile_link").focus();
								$(".facebook_profile_link_msg").html("Facebook profile link should be less than 20  characters");
							 return false;
				}
				else{
						$("#facebook_profile_link_fr_grp").removeClass("validate-has-error");
					$(".facebook_profile_link_msg").html("");
				}
				if(/^\s+$/.test(jqForm[0].facebook_profile_link.value)){
					flag=1;
							 $("#facebook_profile_link_fr_grp").addClass("validate-has-error");
							 $(".facebook_profile_link").focus();
							 $(".facebook_profile_link_msg").html("Initially No space allowed");
							return false;
					}
					else{
					 $("#facebook_profile_link_fr_grp").removeClass("validate-has-error");
					$(".facebook_profile_link_msg").html("");
				}
				if (jqForm[0].linkedin_profile_link.value.length>20)
					{
									flag=1;
									$("#linkedin_profile_link_fr_grp").addClass("validate-has-error");
									$(".linkedin_profile_link").focus();
									$(".linkedin_profile_link_msg").html("Linkedin profile link should be less than 20  characters");
								 return false;
					}
					else{
							$("#linkedin_profile_link_fr_grp").removeClass("validate-has-error");
						$(".linkedin_profile_link_msg").html("");
					}
					if(/^\s+$/.test(jqForm[0].linkedin_profile_link.value)){
						flag=1;
								 $("#linkedin_profile_link_fr_grp").addClass("validate-has-error");
								 $(".linkedin_profile_link").focus();
								 $(".linkedin_profile_link_msg").html("Initially No space allowed");
								return false;
						}
						else{
						 $("#linkedin_profile_link_fr_grp").removeClass("validate-has-error");
						$(".linkedin_profile_link_msg").html("");
					}
					if (jqForm[0].twitter_profile_link.value.length>20)
						{
										flag=1;
										$("#twitter_profile_link_fr_grp").addClass("validate-has-error");
										$(".twitter_profile_link").focus();
										$(".twitter_profile_link_msg").html("Twitter profile link should be less than 20  characters");
									 return false;
						}
						else{
								$("#twitter_profile_link_fr_grp").removeClass("validate-has-error");
							$(".twitter_profile_link_msg").html("");
						}
						if(/^\s+$/.test(jqForm[0].twitter_profile_link.value)){
							flag=1;
									 $("#twitter_profile_link_fr_grp").addClass("validate-has-error");
									 $(".twitter_profile_link_link").focus();
									 $(".twitter_profile_link_msg").html("Initially No space allowed");
									return false;
							}
							else{
							 $("#twitter_profile_link_fr_grp").removeClass("validate-has-error");
							$(".twitter_profile_link_msg").html("");
						}
						var re_text = /\.jpg|\.gif|\.jpeg|\.png/i;
									 var filename1 = jqForm[0].userfile.value;
									 if (filename1.search(re_text) == -1 && filename1 !='')
									 {
							$(".err_msg").html("File format error...Please provide a jpg/jpeg/png format");
											 return false;
									 }else{
							$(".err_msg").html("");
						}
	// sends ajax request after passing validation, showing a user-friendly preloader
	$('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');

	// disables intermediatory form submission
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
	$('#modal_ajax1').modal('hide');

	// reload table data after data update
	//reload_data(post_refresh_url);
				setTimeout(function(){ window.location.reload(); }, 1000);

}



/*-----------------custom functions for ajax post data handling--------------------*/



// custom function for reloading table data
function reload_data(url)
{
	$('div.main_data').block({ message: '<img src="assets/images/preloader.gif" style="height:25px;" />' });
	$.ajax({
		url: url,
		success: function(response)
		{
			jQuery('.main_data').html(response);
			$('div.main_data').unblock();
		}
	});
}

function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

// custom function for data deletion by ajax and post refreshing call
function delete_data(delete_url , post_refresh_url)
{
	// showing user-friendly pre-loader image
	$('#preloader-delete').html('<img src="assets/images/preloader.gif" style="height:15px;margin-top:-10px;" />');

	// disables the delete and cancel button during deletion ajax request
	document.getElementById("delete_link").disabled=true;
	document.getElementById("delete_cancel_link").disabled=true;

	$.ajax({
		url: delete_url,
		success: function(response)
		{
			// remove the preloader
			$('#preloader-delete').html('');

			// show deletion success msg.
			toastr.info("Data deleted successfully.", "Success");

			// hide the delete dialog box
			$('#modal_delete').modal('hide');

			// enables the delete and cancel button after deletion ajax request success
			document.getElementById("delete_link").disabled=false;
			document.getElementById("delete_cancel_link").disabled=false;

			// reload the table
			reload_data(post_refresh_url);
		}
	});
}
