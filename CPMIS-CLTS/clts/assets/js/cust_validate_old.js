//function submitChild(){}
   $(document).ready(function () {
         if($('#basic_place_of_rescue').val() == 'Within') {
           $('#withinstate').show();
     $('#outsidestate').hide();
          } else if($('#basic_place_of_rescue').val() == 'Outside State') {
           $('#outsidestate').show();
     $('#withinstate').hide();
          } else{
      $('#withinstate').hide();
      $('#outsidestate').hide();
      }


 if($('#rescue_by').val() == 'Others') {
           $('.Rescue_by_other').show();

          } else {

     $('.Rescue_by_other').hide();
          }

 if($('#complaint_lodge').val() == 'Yes') {
           $('#complaint_lodge_yes').show();

          } else {

     $('#complaint_lodge_yes').hide();
          }

 if($('#ocomplaint_lodge').val() == 'Yes') {
           $('#complaint_yes').show();

          } else {

     $('#complaint_yes').hide();
          }

   if($('.by_whom_deployed').val() == 'Other') {
           $('.child_deployed_block_in').show();

          } else {

     $('.child_deployed_block_in').hide();
          }

   if($('#environment_in').val() == 'Other') {
           $('.environment_block_in').show();

          } else {

     $('.environment_block_in').hide();
          }

   if($('#behaviour_of_employer').val() == 'Other') {
           $('.employer_behaviour_block_in').show();

          } else {

     $('.employer_behaviour_block_in').hide();
       $('.employer_behaviour_block_in input').val("");
          }
    if($('#oby_whom_deployed').val() == 'Other') {
           $('.child_deployed_block_out').show();

          } else {

     $('.child_deployed_block_out').hide();
          }

   if($('#oenvironment_in').val() == 'Other') {
           $('.environment_block_out').show();

          } else {

     $('.environment_block_out').hide();
          }

   if($('#obehaviour_of_employer').val() == 'Other') {
           $('.employer_behaviour_block_out').show();

          } else {

     $('.employer_behaviour_block_out').hide();
          }
 //Code added by Ripon ends
 if($('#work_involved_outside').val() == 'Other') {
           $('.workinvolved_other2').show();

          } else {

     $('.workinvolved_other2').hide();
          }

          if($('.location').is(":checked")) {
                   $('#location_other').show();

                  } else {

             $('#location_other').hide();
                  }
 if($('#work_involved').val() == 'Other') {
           $('.workinvolved_other').show();

          } else {

     $('.workinvolved_other').hide();
          }
 if($('#religion').val() == 'other') {
           $('#religion_other').show();
           

          } else {

     $('#religion_other').hide();
	

          }
     if($('#category').val() == 'other') {
           $('#catagory_other').show();


          } else {

     $('#catagory_other').hide();
	  $('#other_cast_name').hide();
	  $('#caste').val('');

	  
          }


 if($('#isdob').val() == 'Yes') {
	  
     $('#ispresent_yes').show();
     $('#ispresent_no').hide();
          } else {
           $('#ispresent_no').show();
     $('#ispresent_yes').hide();
          }
	
if($('#is_adhar_card').val() == 'Yes') {
	  $('#adhar_card_yes').hide();
     $('#adhar_card_no').hide();
          } else {
           $('#adhar_card_yes').hide();
     $('#adhar_card_no').hide();
          }
     sortDropDownListByText();
     ///to submit the form
     $('#msgModal-conf').modal('hide');
     
       var options = {
           beforeSubmit: validate_project_add,
           success: show_response_project_add,
           resetForm: true
       };
       $('.project-add').submit(function () { 
           window.scrollTo(0,0);
           $(this).ajaxSubmit(options);
           return false;
       });


 });

   function show_response_project_add(responseText, statusText, xhr, $form) { 
   var role_id = "<?php echo $role_id;?>";
		$('html, body').animate({ scrollTop: 0 }, 0);
       $('#preloader-form').html('');
   $('#msgModal-conf').modal('hide');
   $('#msgModal-1').modal('show');

       document.getElementById("submit-button").disabled = false;
   }
 function sortDropDownListByText() {

   $("#state").each(function() {


       var selectedValue = $(this).val();


       $(this).html($("option", $(this)).sort(function(a, b) {
           return a.text == b.text ? 0 : a.text < b.text ? -1 : 1
       }));

       $(this).val(selectedValue);
   });
}

function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
       return false;
   return true;
}

$(function(){
$("#contact_no").bind("paste",function(e) {
                    e.preventDefault();
               });
$("#wcontact_no").bind("paste",function(e) {
                    e.preventDefault();
               });
$("#ocontact_no").bind("paste",function(e) {
                    e.preventDefault();
               });


});
$(function() {

      $('#isdob').change(function(){
         if($('#isdob').val() == 'Yes') {
           $('#ispresent_yes').show();
     $('#ispresent_no').hide();
          } else {
           $('#ispresent_no').show();
     $('#ispresent_yes').hide();
          }
     });
   });
$(function() {
	//added by poojashree
	$('#adhar_card_no').show();
	  $('#adhar_card_enrollment_date').show();
    $('#adhar_card_enrollment_no').show();
	  $('#appli_no').show();
	   $('#date_ene').show();
	  $('#datepicker_adhar').show();
	  $('#adhar_card_yes').hide();
				  $('#is_adhar_card').change(function(){
					 if($('#is_adhar_card').val() == 'Yes') {
					   $('#adhar_card_yes').show();
				       // $('#adhar_card_no').show();
					  } else if($('#is_adhar_card').val() == 'No') {
					  // $('#adhar_card_no').show();
				          $('#adhar_card_yes').hide();
					  }else{
						  //changed by poojashree
						 // $('#adhar_card_no').show();
						 // $('#adhar_card_enrollment_date').show();
				        //  $('#adhar_card_enrollment_no').show();
						//  $('#appli_no').show();
						//   $('#date_ene').show();
						//  $('#datepicker_adhar').show();
						//  $('#adhar_card_yes').hide();
					  }
				 });
			   });
   $(function() {

      $('#religion').change(function(){
         if($('#religion').val() == 'other') {
           $('#religion_other').show();

     /*document.getElementById('other1').focus();*/
          } else {

     $('#religion_other').hide();


          }
     });
   });
   $(function() {

      $('#category').change(function(){
         if($('#category').val() == 'other') {
     
           $('#catagory_other').show();
		   

          } else {

     $('#catagory_other').hide();
	
          }
     });
   });
   $(function() {

      $('#caste').change(function(){
         if($('#caste').val() == 'Other') {
     
           $('#other_cast_name').show();
		   

          } else {

     $('#other_cast_name').hide();
	
          }
     });
   });
   $(function() {

      $('#work_involved').change(function(){
         if($('#work_involved').val() == 'Other') {
           $('.workinvolved_other').show();

          } else {

     $('.workinvolved_other').hide();
          }
     });
   });

   $(function() {

      $('.location').change(function(){

          if($('.location').is(":checked"))  {
           $('#location_other').show();

          } else {

     $('#location_other').hide();
          }
     });
   });
   $(function() {

      $('#work_involved_outside').change(function(){
         if($('#work_involved_outside').val() == 'Other') {
           $('.workinvolved_other2').show();

          } else {

     $('.workinvolved_other2').hide();
          }
     });
   });

   //Code Added by Ripon
   $(function() {

      $('#by_whom_deployed').change(function(){
         if($('#by_whom_deployed').val() == 'Other') {
           $('.child_deployed_block_in').show();

          } else {

     $('.child_deployed_block_in').hide();
          }
     });
   });

   $(function() {

      $('#environment_in').change(function(){
         if($('#environment_in').val() == 'Other') {
           $('.environment_block_in').show();

          } else {

     $('.environment_block_in').hide();
          }
     });
   });

   $(function() {

      $('#behaviour_of_employer').change(function(){
         if($('#behaviour_of_employer').val() == 'Other') {
           $('.employer_behaviour_block_in').show();

          } else {

     $('.employer_behaviour_block_in').hide();
          }
     });
   });

   $(function() {

   $('#oby_whom_deployed').change(function(){
         if($('#oby_whom_deployed').val() == 'Other') {
           $('.child_deployed_block_out').show();

          } else {

     $('.child_deployed_block_out').hide();
          }
     });
   });

   $(function() {

      $('#oenvironment_in').change(function(){
         if($('#oenvironment_in').val() == 'Other') {
           $('.environment_block_out').show();

          } else {

     $('.environment_block_out').hide();
          }
     });
   });

   $(function() {

      $('#obehaviour_of_employer').change(function(){
         if($('#obehaviour_of_employer').val() == 'Other') {
           $('.employer_behaviour_block_out').show();

          } else {

     $('.employer_behaviour_block_out').hide();
          }
     });
   });

   $(function() {

      $('#ocomplaint_lodge').change(function(){
         if($('#ocomplaint_lodge').val() == 'Yes') {
           $('#complaint_yes').show();

          } else {

     $('#complaint_yes').hide();
          }
     });
   });
 <!--	within strate-->
   $(function() {

      $('#complaint_lodge').change(function(){
         if($('#complaint_lodge').val() == 'Yes') {
           $('#complaint_lodge_yes').show();

          } else {

     $('#complaint_lodge_yes').hide();
          }
     });
   });

 <!--rescued by-->
 $(function() {

      $('#rescue_by').change(function(){
         if($('#rescue_by').val() == 'Others') {
           $('.Rescue_by_other').show();

          } else {

     $('.Rescue_by_other').hide();
          }
     });
   });
$(function() {
   $('#basic_place_of_rescue').change(function(){
         if($('#basic_place_of_rescue').val() == 'Within') {
           $('#withinstate').show();
     $('#outsidestate').hide();
          } else if($('#basic_place_of_rescue').val() == 'Outside State') {
           $('#outsidestate').show();
     $('#withinstate').hide();
          } else{
      $('#withinstate').hide();
      $('#outsidestate').hide();
      }
     });
   });


var calculateAge = function(dateString)
{
	//alert(dateString);
    var today = new Date();
    var birthDate = new Date(dateString);
	//alert(birthDate);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate()))
    {
        age--;
    }
    return age;
};

  var copmareAge = function(dor,dob) {
	year1= new Date(dor);
	year2 = new Date(dob);
	onlyyear1 = year1.getFullYear();
	onlymonth1 = year1.getMonth();
	onlyday1 = year1.getDate();
	var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
	onlyyear2 = year2.getFullYear();
	onlymonth2 = year2.getMonth();
	onlyday2 = year2.getDate();
   	var diff = onlyyear1 -onlyyear2;
	var m = onlymonth1 - onlymonth2;
	var d = onlyday1 - onlyday2;
   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
    {
        diff--;
    }
	return diff;

};
 var copmareProdDate = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
	onlyyear1 = year1.getFullYear();
	onlymonth1 = year1.getMonth();
	onlyday1 = year1.getDate();
	var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
	onlyyear2 = year2.getFullYear();
	onlymonth2 = year2.getMonth();
	onlyday2 = year2.getDate();
   	var diff = onlyyear1 -onlyyear2;
	var m = onlymonth1 - onlymonth2;
	var d = onlyday1 - onlyday2;
   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
    {
        diff--;
    }
	return diff;

};
//within fir
 var copmareWithnFirDate = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
	onlyyear1 = year1.getFullYear();
	onlymonth1 = year1.getMonth();
	onlyday1 = year1.getDate();
	var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
	onlyyear2 = year2.getFullYear();
	onlymonth2 = year2.getMonth();
	onlyday2 = year2.getDate();
   	var diff = onlyyear1 -onlyyear2;
	var m = onlymonth1 - onlymonth2;
	var d = onlyday1 - onlyday2;
   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
    {
        diff--;
    }
	return diff;

};
//outside fir
 var copmareOutFirDate = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
	onlyyear1 = year1.getFullYear();
	onlymonth1 = year1.getMonth();
	onlyday1 = year1.getDate();
	var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
	onlyyear2 = year2.getFullYear();
	onlymonth2 = year2.getMonth();
	onlyday2 = year2.getDate();
   	var diff = onlyyear1 -onlyyear2;
	var m = onlymonth1 - onlymonth2;
	var d = onlyday1 - onlyday2;
   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
    {
        diff--;
    }
	return diff;

};
<!--when is dob value no-->
var copmareAge_year = function(dor,dob) {
	 var today = new Date();
	year1= new Date(dor);
	onlyyear1 = today.getFullYear();
	onlyyear2 = year1.getFullYear();
	//var valid_year = parseInt(onlyyear2)+parseInt(dob);
	var sub1 = onlyyear1 - onlyyear2;
	//alert("copmareAge_year"+sub1);
	return sub1;

};
$(function(){
  $('.cert_none').change(function(){

      if($('.cert_none').is(":checked")) {
      $(":checkbox[name='details_of_certificate[]']").not($(this)).prop('disabled', true);
      $(":checkbox[name='details_of_certificate[]']").not($(this)).prop('checked', false);
        $('#location_other').hide();

          } else {
                  $(":checkbox[name='details_of_certificate[]']").prop('disabled', false);

          }

     });

   });


function validate_project_add(formData, jqForm, options) {
$('#msgModal-conf').modal('hide');
var role_id = "<?php echo $role_id;?>";
var is_dob_r = (jqForm[0].isdob.value);
var flag=0;
//idate of rescue
if (!jqForm[0].idate_of_rescue.value)
    {
            flag=1;
           return false;
    }
	
	//Adhar card validation
	if(jqForm[0].is_adhar_card.value=='Yes')
   {
	   
	
		 if (!jqForm[0].adhar_card.value)
        {
                flag=1;
               return false;
        }
		 else{
		 $("#adhar_card_enrollment_no_fr_grp").removeClass("validate-has-error");
	 }
		
	 }

		
		
    //validation for child name
    if (!jqForm[0].cname.value)
        {
                flag=1;
               return false;
        }
      if(/^\s+$/.test(jqForm[0].cname.value)){
        flag=1;
       return false;
      }
if (jqForm[0].cname.value.length>50)
    {
            flag=1;
            $("#cname_form_grp").addClass("validate-has-error");
            $(".cname").focus();
            $(".cname_msg").html("This field should be less than 50 characters");
           return false;
    }
    else{
        $("#cname_form_grp").removeClass("validate-has-error");
      $(".cname_msg").html("");
    }
    //child name validation ends
    if (!jqForm[0].gender.value)
        {
            flag=1;
            return false;
        }

if(is_dob_r == "Yes"){
    if (!jqForm[0].dob.value)
    {
      flag=1;
      return false;
    }
}else{
  if (!jqForm[0].year.value)
  {
    flag=1;
    return false;
  }
  if (!jqForm[0].month.value)
  {
    flag=1;
    return false;
  }
}

//other_religion validation starts

if(jqForm[0].religion.value=='other')
{
  if(!jqForm[0].other_religion.value || jqForm[0].other_religion.value.length>20)
  {
    flag=1;

    $("#other_religion_fr_grp").addClass("validate-has-error");
    $(".other_religion").focus();
    $(".other_religion_msg").html("This field should  be less  than 20 characters or should not be left blank ");
   return false;

  }
  else{
    $("#other_religion_fr_grp").removeClass("validate-has-error");
   $(".other_religion_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].other_religion.value)){
    flag=1;

         $("#other_religion_fr_grp").addClass("validate-has-error");
         $(".other_religion").focus();
         $(".other_religion_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#other_religion_fr_grp").removeClass("validate-has-error");
    $(".other_religion_msg").html("");
  }
}

if($('#category').val().length == 0) {
	   return false;
            flag=1;
	  } 
if($('#caste').val().length == 0) {
	   return false;
         flag=1;
	  } 
//other religion name validation ends
//other_category validation starts
if(jqForm[0].category.value=='other')
{
	if(!jqForm[0].other_cast.value || jqForm[0].other_cast.value.length>20)
	{
	  flag=1;
	  flag=1;
	  $("#other_cast_fr_grp").addClass("validate-has-error");
	  $(".other_cast").focus();
	  $(".other_cast_msg").html("This field should be less than 20 characters or should not be left blank");
	 return false;
	
	}
	else{
	  $("#other_cast_fr_grp").removeClass("validate-has-error");
	 $(".other_cast_msg").html("");
	}
	if(/^\s+$/.test(jqForm[0].other_cast.value)){
	  flag=1;
	
	       $("#other_cast_fr_grp").addClass("validate-has-error");
	       $(".other_cast").focus();
	       $(".other_cast_msg").html("Initially No space allowed");
	      return false;
	  }
	  else{
	   $("#other_cast_fr_grp").removeClass("validate-has-error");
	  $(".other_cast_msg").html("");
	}
}
//other category name validation ends
//OTHER CASTE NAME
if(jqForm[0].caste.value=='Other')
{
if(!jqForm[0].other_cast_name.value || jqForm[0].other_cast_name.value.length>20)
{
  flag=1;
  flag=1;
  $("#other_cast_name_fr_grp").addClass("validate-has-error");
  $(".other_cast_name").focus();
  $(".other_cast_name_msg").html("This field should be less than 20 characters or should not be left blank");
 return false;

}
else{
  $("#other_cast_fr_grp").removeClass("validate-has-error");
 $(".other_cast_name_msg").html("");
}
if(/^\s+$/.test(jqForm[0].other_cast_name.value)){
  flag=1;

       $("#other_cast_name_fr_grp").addClass("validate-has-error");
       $(".other_cast_name").focus();
       $(".other_cast_name_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#other_cast_name_fr_grp").removeClass("validate-has-error");
  $(".other_cast_name_msg").html("");
}
}

//other cast name validation ends
//Father name validation
if(jqForm[0].father.value.length>70)
{
  flag=1;

  $("#fname_fr_grp").addClass("validate-has-error");
  $(".fname").focus();
  $(".fname_msg").html("This field should be less than 70 characters");
 return false;

}
else{
  $("#fname_fr_grp").removeClass("validate-has-error");
 $(".fname_msg").html("");
}
//employee validation

if(jqForm[0].iemployer_name.value.length>70)
{
  flag=1;

  $("#iemployer_name_fr_grp").addClass("validate-has-error");
  $(".iemployer_name").focus();
  $(".iemployer_name_msg").html("This field should be less than 70 characters");
 return false;

}
else{
  $("#fname_fr_grp").removeClass("validate-has-error");
 $(".fname_msg").html("");
}

if(/^\s+$/.test(jqForm[0].father.value)){
  flag=1;

       $("#fname_fr_grp").addClass("validate-has-error");
       $(".fname").focus();
       $(".fname_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#fname_fr_grp").removeClass("validate-has-error");
  $(".fname_msg").html("");
}
//fname name validation ends
//MOther name validation
if(jqForm[0].mother_name.value.length>70)
{

  flag=1;
  $("#mname_fr_grp").addClass("validate-has-error");
  $(".mname").focus();
  $(".mname_msg").html("This field hould be less than 70 characters");
 return false;

}
else{
  $("#mname_fr_grp").removeClass("validate-has-error");
 $(".mname_msg").html("");
}
if(/^\s+$/.test(jqForm[0].mother_name.value)){
  flag=1;

       $("#mname_fr_grp").addClass("validate-has-error");
       $(".mname").focus();
       $(".mname_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#mname_fr_grp").removeClass("validate-has-error");
  $(".mname_msg").html("");
}
//mother name validation ends
//postaladdress/
if(jqForm[0].postaladdress.value.length>120)
{

  flag=1;
  $("#postaladdress_fr_grp").addClass("validate-has-error");
  $(".postaladdress").focus();
  $(".postaladdress_msg").html("This field should be less than 120 characters");
 return false;

}
else{
  $("#postaladdress_fr_grp").removeClass("validate-has-error");
 $(".postaladdress_msg").html("");
}
if(/^\s+$/.test(jqForm[0].postaladdress.value)){
  flag=1;

       $("#postaladdress_fr_grp").addClass("validate-has-error");
       $(".postaladdress").focus();
       $(".postaladdress_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#postaladdress_fr_grp").removeClass("validate-has-error");
  $(".postaladdress_msg").html("");
}
//postal address validation ends
//panchayat name validation
/*if(jqForm[0].panchayat_name.value.length>50)
{
  flag=1;
 
  $("#panchayat_name_fr_grp").addClass("validate-has-error");
  $(".panchayat_name").focus();
  $(".panchayat_name_msg").html("This field should be less than 50 characters");
 return false;

}
else{
  $("#panchayat_name_fr_grp").removeClass("validate-has-error");
 $(".panchayat_name_msg").html("");
}
if(/^\s+$/.test(jqForm[0].panchayat_name.value)){
  flag=1;

       $("#panchayat_name_fr_grp").addClass("validate-has-error");
       $(".panchayat_name").focus();
       $(".panchayat_name_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#panchayat_name_fr_grp").removeClass("validate-has-error");
  $(".panchayat_name_msg").html("");
  }
//panchayat name validation ends
//pincode validation
if(!/^[1-9][0-9]{5}$/.test(jqForm[0].pin_code.value)){
  flag=1;

       $("#pin_code_fr_grp").addClass("validate-has-error");
       $(".pin_code").focus();
       $(".pin_code_msg").html("Enter Valid Pincode");
      return false;
  }
  else{
   $("#pin_code_fr_grp").removeClass("validate-has-error");
  $(".pin_code_msg").html("");
  }*/
  //pincode validation ends
  
  
//contact validation
if(jqForm[0].contact_no.value)
{
	if(jqForm[0].contact_no.value.length!=10)
	{
	
  flag=1;
 
  $("#contact_fr_grp").addClass("validate-has-error");
  $(".contact").focus();
  $(".contact_msg").html("This field should be 10 numeric digits");
 return false;
	}
	else{
		
		  $("#contact_fr_grp").removeClass("validate-has-error");
		 $(".contact_msg").html("");
		
	}
}
else{
  $("#contact_fr_grp").removeClass("validate-has-error");
 $(".contact_msg").html("");
}
//contact validation ends

    if (!jqForm[0].choices.value)
        {
            flag=1;
            return false;
        }
		/*if (!jqForm[0].ps.value)
		{
			flag=1;
			return false;
		}*/
    // card validation
	if (!jqForm[0].is_adhar_card.value)
        {
            flag=1;
            return false;
        }
    if(jqForm[0].is_adhar_card.value =="Yes")
	{
		
		if(jqForm[0].adhar_card.value.length!=12)
		{
		  flag=1;
		  $("#adhar_card_fr_grp").addClass("validate-has-error");
		  $(".adhar_card").focus();
		  $(".adhar_card_msg").html("This field should be  12 numeric digits");
		 return false;

		}
		else{
		  $("#adhar_card_fr_grp").removeClass("validate-has-error");
		 $(".adhar_card_msg").html("");
		}
		//Adhar card validation ends
	}
	
	
    
   

    //rescue_by_other carde validation

    if( jqForm[0].rescue_by.value=='Others')
    {

      if(!jqForm[0].rescue_by_other.value || jqForm[0].rescue_by_other.value.length>30)
      {
        flag=1;
        $("#rescue_by_other_fr_grp").addClass("validate-has-error");
        $(".rescue_by_other").focus();
        $(".rescue_by_other_msg").html("This field should be  30  characters or should not be left blank");
       return false;

      }
      else{
        $("#rescue_by_other_fr_grp").removeClass("validate-has-error");
       $(".rescue_by_other_card_msg").html("");
      }

      if(/^\s+$/.test(jqForm[0].rescue_by_other.value)){
        flag=1;
             $("#rescue_by_other_fr_grp").addClass("validate-has-error");
             $(".rescue_by_other").focus();
             $(".rescue_by_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#rescue_by_other_fr_grp").removeClass("validate-has-error");
        $(".rescue_by_other_msg").html("");
      }
    }
      ////adhar carde validation ends
    if (!jqForm[0].basic_place_of_rescue.value)
        {
            flag=1;
            return false;
        }
        if(jqForm[0].other.value.length>30)
        {
          flag=1;
          $("#other_fr_grp").addClass("validate-has-error");
          $(".other").focus();
          $(".other_msg").html("This field should be  200  characters");
         return false;

        }
        else{
          $("#other_fr_grp").removeClass("validate-has-error");
         $(".other_card_msg").html("");
        }

        if(/^\s+$/.test(jqForm[0].other.value)){
          flag=1;
               $("#other_fr_grp").addClass("validate-has-error");
               $(".other").focus();
               $(".other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#other_fr_grp").removeClass("validate-has-error");
          $(".other_msg").html("");
        }
		
		

//production date before CWC
		/*if (!jqForm[0].production_date.value)
			{
					flag=1;
				   return false;
				   
			}*/

var daterescue=(jqForm[0].idate_of_rescue.value);
var is_dob_r = (jqForm[0].isdob.value);
var year_value = (jqForm[0].year.value);
var newDate=(jqForm[0].dob.value);
//var production_date=(jqForm[0].production_date.value);
var within_fir_date = (jqForm[0].fir_date.value);
var out_fir_date = (jqForm[0].ofir_date.value);
var place = (jqForm[0].basic_place_of_rescue.value);
var date_f_prod = (jqForm[0].date_of_production.value);
//with in state fields validtion starts
if(place == "Within"){
  if (!jqForm[0].iemployer_name.value)
       {
      flag=1;
      $("#iemployer_name_fr_grp").addClass("validate-has-error");
      $(".iemployer_name").focus();
      $(".iemployer_name_msg").html("This field is required");
      return false;
      }else{
    $("#iemployer_name_fr_grp").removeClass( "validate-has-error" );
    $(".iemployer_name_msg").html("");
  }
  if(jqForm[0].iemployer_name.value.length>35)
  {
    flag=1;
    $("#iemployer_name_fr_grp").addClass("validate-has-error");
    $(".iemployer_name").focus();
    $(".iemployer_name_msg").html("This field should be less than  35 characters");
   return false;
  }
  else{
    $("#iemployer_name_fr_grp").removeClass("validate-has-error");
   $(".iemployer_name_msg").html("");
  }

  if(/^\s+$/.test(jqForm[0].iemployer_name.value)){
    flag=1;
         $("#iemployer_name_fr_grp").addClass("validate-has-error");
         $(".iemployer_name").focus();
         $(".iemployer_name_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#iemployer_name_fr_grp").removeClass("validate-has-error");
    $(".iemployer_name_msg").html("");
  }

  ///wcontact_no/place_of_rescue/iperiod_work/by_whom_deployed_other1/environment_in_other/behaviour_of_employer_other/salary
//iemployer_detail_address/

if(jqForm[0].iemployer_detail_address.value.length>120)
{
  flag=1;
  $("#iemployer_detail_address_fr_grp").addClass("validate-has-error");
  $(".iemployer_detail_address").focus();
  $(".iemployer_detail_address_msg").html("This field should be less than  120 characters");
 return false;
}
else{
  $("#iemployer_detail_address_fr_grp").removeClass("validate-has-error");
 $(".iemployer_detail_address_msg").html("");
}

if(/^\s+$/.test(jqForm[0].iemployer_detail_address.value)){
  flag=1;
       $("#iemployer_detail_address_fr_grp").addClass("validate-has-error");
       $(".iemployer_detail_address").focus();
       $(".iemployer_detail_address_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#iemployer_detail_address_fr_grp").removeClass("validate-has-error");
  $(".iemployer_detail_address_msg").html("");
}
  //contact number of employer
  if(jqForm[0].wcontact_no.value)
  {
  if(jqForm[0].wcontact_no.value.length!=10)
  {
    flag=1;
    $("#wcontact_no_fr_grp").addClass("validate-has-error");
    $(".wcontact_no").focus();
    $(".wcontact_no_msg").html("This field should be   10 numeric digits");
   return false;
  }
  else{
    $("#wcontact_no_fr_grp").removeClass("validate-has-error");
   $(".wcontact_no_msg").html("");
  }
  }
  else{
    $("#wcontact_no_fr_grp").removeClass("validate-has-error");
   $(".wcontact_no_msg").html("");
  }
  
  //within state
  if(!jqForm[0].within_state.value)
  {
    flag=1;
    $("#with_state").addClass("validate-has-error");
    $(".within_state").focus();
    $(".within_state_msg").html("This field should not be blank");
   return false;
  }
  else{
    $("#with_state").removeClass("validate-has-error");
   $(".within_state_msg").html("");
  }
  //within district
  if(!jqForm[0].within_district.value)
  {
    flag=1;
    $("#with_dist").addClass("validate-has-error");
    $(".within_district").focus();
    $(".within_dist_msg").html("This field should not be blank");
   return false;
  }
  else{
    $("#with_dist").removeClass("validate-has-error");
   $(".within_dist_msg").html("");
  }
  //place of rescue in with in state
  if(jqForm[0].place_of_rescue.value.length>35)
  {
    flag=1;
    $("#wplace_of_rescue_fr_grp").addClass("validate-has-error");
    $(".place_of_rescue").focus();
    $(".place_of_rescue_msg").html("This field should be less than  35  characters");
   return false;
  }
  else{
    $("#place_of_rescue_fr_grp").removeClass("validate-has-error");
   $(".place_of_rescue_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].place_of_rescue.value)){
    flag=1;
         $("#place_of_rescue_fr_grp").addClass("validate-has-error");
         $(".place_of_rescue").focus();
         $(".place_of_rescue_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#place_of_rescue_fr_grp").removeClass("validate-has-error");
    $(".place_of_rescue_msg").html("");
  }
  //Work involved in
  if(jqForm[0].work_involved.value=='Other')
  {
    if(!jqForm[0].iperiod_work.value || jqForm[0].iperiod_work.value.length>35)
    {
      flag=1;
      $("#iperiod_work_fr_grp").addClass("validate-has-error");
      $(".iperiod_work").focus();
      $(".iperiod_work_msg").html("This field should be less than  35  characters or should not be left blank");
     return false;
    }
    else{
      $("#iperiod_work_fr_grp").removeClass("validate-has-error");
     $(".iperiod_work_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].iperiod_work.value)){
      flag=1;
           $("#iperiod_work_fr_grp").addClass("validate-has-error");
           $(".iperiod_work").focus();
           $(".iperiod_work_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#iperiod_work_fr_grp").removeClass("validate-has-error");
      $(".iperiod_work_msg").html("");
    }

  }

  //By Whom Child was Deployed
if(jqForm[0].by_whom_deployed.value=='Other')
{

  if(!jqForm[0].by_whom_deployed_other1.value || jqForm[0].by_whom_deployed_other1.value.length>35)
  {
    flag=1;
    $("#by_whom_deployed_other1_fr_grp").addClass("validate-has-error");
    $(".by_whom_deployed_other1").focus();
    $(".by_whom_deployed_other1_msg").html("This field deployed in should be less than  35  characters or should not be left blank");
   return false;
  }
  else{
    $("#by_whom_deployed_other1_fr_grp").removeClass("validate-has-error");
   $(".by_whom_deployed_other1_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].by_whom_deployed_other1.value)){
    flag=1;
         $("#by_whom_deployed_other1_fr_grp").addClass("validate-has-error");
         $(".by_whom_deployed_other1").focus();
         $(".by_whom_deployed_other1_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#iby_whom_deployed_other1fr_grp").removeClass("validate-has-error");
    $(".by_whom_deployed_other1_msg").html("");
  }
}

  // Working Environment
  if(jqForm[0].environment_in.value=='Other')
  {
    if(!jqForm[0].environment_in_other.value || jqForm[0].environment_in_other.value.length>35)
    {
      flag=1;
      $("#environment_in_other_fr_grp").addClass("validate-has-error");
      $(".environment_in_other").focus();
      $(".environment_in_other_msg").html("This field should be less than  35  characters or should not be left blank");
     return false;
    }
    else{
      $("#environment_in_other_fr_grp").removeClass("validate-has-error");
     $(".environment_in_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].environment_in_other.value)){
      flag=1;
           $("#environment_in_other_fr_grp").addClass("validate-has-error");
           $(".environment_in_other").focus();
           $(".environment_in_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#environment_in_other_fr_grp").removeClass("validate-has-error");
      $(".environment_in_other_msg").html("");
    }
  }
  //Behaviour of the employee

if(jqForm[0].behaviour_of_employer.value=='Other' )
{
  if(!jqForm[0].behaviour_of_employer_other.value || jqForm[0].behaviour_of_employer_other.value.length>35)
  {
    flag=1;
    $("#behaviour_of_employer_other_fr_grp").addClass("validate-has-error");
    $(".behaviour_of_employer_other").focus();
    $(".behaviour_of_employer_other_msg").html("Working Envirnment  should be less than  35  characters or should not be left blank");
   return false;
  }
  else{
    $("#behaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
   $(".behaviour_of_employer_other_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].behaviour_of_employer_other.value)){
    flag=1;
         $("#behaviour_of_employer_other_fr_grp").addClass("validate-has-error");
         $(".behaviour_of_employer_other").focus();
         $(".behaviour_of_employer_other_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#behaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
    $(".behaviour_of_employer_other_msg").html("");
  }
}
//fir_no/name_policestation/ofir_no/policestation_name/ocomplaint_lodge
if(jqForm[0].complaint_lodge.value=="Yes")
{
  if(!jqForm[0].fir_no.value || jqForm[0].fir_no.value.length>35)
  {
    flag=1;
    $("#fir_no_fr_grp").addClass("validate-has-error");
    $(".fir_no").focus();
    $(".fir_no_msg").html("Fir number should be less than  35  characters or should not be left blank");
   return false;
  }
  else{
    $("#fir_no_fr_grp").removeClass("validate-has-error");
   $(".fir_no_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].fir_no.value)){
    flag=1;
         $("#fir_no_fr_grp").addClass("validate-has-error");
         $(".fir_no").focus();
         $(".fir_no_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#fir_no_fr_grp").removeClass("validate-has-error");
    $(".fir_no_msg").html("");
  }
  //police station name
  if(!jqForm[0].name_policestation.value || jqForm[0].name_policestation.value.length>35)
  {
    flag=1;
    $("#name_policestation_grp").addClass("validate-has-error");
    $(".name_policestation").focus();
    $(".name_policestation_msg").html("Police station name should be less than  35  characters or should not be left blank");
   return false;
  }
  else{
    $("#name_policestation_fr_grp").removeClass("validate-has-error");
   $(".name_policestation_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].name_policestation.value)){
    flag=1;
         $("#name_policestation_fr_grp").addClass("validate-has-error");
         $(".name_policestation").focus();
         $(".name_policestation_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#name_policestation_fr_grp").removeClass("validate-has-error");
    $(".name_policestation_msg").html("");
  }
}

  //salary
  if(jqForm[0].salary.value.length>10)
  {
    flag=1;
    $("#salary_fr_grp").addClass("validate-has-error");
    $(".salary").focus();
    $(".salary_msg").html("This field should be less than  10  numeric characters");
   return false;
  }
  else{
    $("#salary_fr_grp").removeClass("validate-has-error");
   $(".salary_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].salary.value)){
    flag=1;
         $("#bsalary_fr_grp").addClass("validate-has-error");
         $(".salary").focus();
         $(".salary_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#salary_fr_grp").removeClass("validate-has-error");
    $(".salary_msg").html("");
  }
  }
if(place == "Outside State"){
    //employer_name/ocontact_no/
  //  place_of_rescue_out/
  //  work_involved_outside_other/name_of_cwc/
  //location_concern/by_whom_deployed_other/oenvironment_in_other/obehaviour_of_employer_other/osalary
//////////////////////////////////////////////////////////////////

  //employer_name
  if(jqForm[0].employer_name.value.length>35)
  {
    flag=1;
    $("#employer_name_fr_grp").addClass("validate-has-error");
    $(".employer_name_other").focus();
    $(".employer_name_msg").html("This field should be less than 35 characters");
   return false;
  }
  else{
    $("#employer_name_fr_grp").removeClass("validate-has-error");
   $(".employer_name_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].employer_name.value)){
    flag=1;
         $("#employer_name_grp").addClass("validate-has-error");
         $(".employer_name").focus();
         $(".employer_name_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#employer_name_grp").removeClass("validate-has-error");
    $(".employer_name_msg").html("");
  }
  //employer_address
  if(jqForm[0].employer_address.value.length>120)
  {
    flag=1;
    $("#employer_address_fr_grp").addClass("validate-has-error");
    $(".employer_address").focus();
    $(".employer_address_msg").html("This field should be less than 120 characters");
   return false;
  }
  else{
    $("#employer_address_fr_grp").removeClass("validate-has-error");
   $(".employer_address_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].employer_address.value)){
    flag=1;
         $("#employer_address_grp").addClass("validate-has-error");
         $(".employer_address").focus();
         $(".employer_address_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#employer_address_grp").removeClass("validate-has-error");
    $(".employer_address_msg").html("");
  }
  //contact number
  if(jqForm[0].ocontact_no.value)
  {
  if(jqForm[0].ocontact_no.value.length!=10)
  {
    flag=1;
    $("#ocontact_no_fr_grp").addClass("validate-has-error");
    $(".ocontact_no").focus();
    $(".ocontact_no_msg").html("This field should be  10 numeric  digits");
   return false;
  }
  else{
    $("#ocontact_no_fr_grp").removeClass("validate-has-error");
   $(".ocontact_no_msg").html("");
  }
  }
   else{
    $("#ocontact_no_fr_grp").removeClass("validate-has-error");
   $(".ocontact_no_msg").html("");
  }
  //place_of_rescue_out
//new pabitra
  
if(jqForm[0].outside_state.value.length=="")
{
  flag=1;
  flag=1;
  $("#out_state").addClass("validate-has-error");
  $(".outsid").focus();
  $(".outsid").html("This field should not be blank");
 return false;

}
else{
  $("#out_state").removeClass("validate-has-error");
 $(".outsid").html("");
}

if(jqForm[0].outside_district.value.length=="")
{
  flag=1;
  flag=1;
  $("#out_dist").addClass("validate-has-error");
  $(".outsdistric").focus();
  $(".outsdistric").html("This field should not be blank");
 return false;

}
else{
  $("#out_dist").removeClass("validate-has-error");
 $(".outsdistric").html("");
}
//end pabitra

  if(jqForm[0].place_of_rescue_out.value.length>35)
  {
    flag=1;
    $("#place_of_rescue_out_fr_grp").addClass("validate-has-error");
    $(".place_of_rescue_out").focus();
    $(".place_of_rescue_out_msg").html("This field should be less than 35 characters");
   return false;
  }
  else{
    $("#place_of_rescue_out_fr_grp").removeClass("validate-has-error");
   $(".place_of_rescue_out_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].place_of_rescue_out.value)){
    flag=1;
         $("#place_of_rescue_out_fr_grp").addClass("validate-has-error");
         $(".place_of_rescue_out").focus();
         $(".place_of_rescue_out_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#place_of_rescue_out_grp").removeClass("validate-has-error");
    $(".place_of_rescue_out_msg").html("");
  }

  //work_involved_outside_other
  if(jqForm[0].work_involved_outside.value=='Other')
  {
    if(!jqForm[0].work_involved_outside_other.value || jqForm[0].work_involved_outside_other.value.length>35)
    {
      flag=1;
      $("#work_involved_outside_other_fr_grp").addClass("validate-has-error");
      $(".work_involved_outside_other").focus();
      $(".work_involved_outside_other_msg").html("This field should be less than 35 characters or should not be left blnak ");
     return false;
    }
    else{
      $("#work_involved_outside_other_fr_grp").removeClass("validate-has-error");
     $(".work_involved_outside_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].work_involved_outside_other.value)){
      flag=1;
           $("#work_involved_outside_other_fr_grp").addClass("validate-has-error");
           $(".work_involved_outside_other").focus();
           $(".work_involved_outside_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#work_involved_outside_other_fr_grp").removeClass("validate-has-error");
      $(".work_involved_outside_other_msg").html("");
    }
  }

  //name_of_cwc
  if(jqForm[0].name_of_cwc.value.length>35)
  {
    flag=1;
    $("#name_of_cwc_fr_grp").addClass("validate-has-error");
    $(".name_of_cwc").focus();
    $(".name_of_cwc_msg").html("This field should be less than 35 characters");
   return false;
  }
  else{
    $("#name_of_cwc_fr_grp").removeClass("validate-has-error");
   $(".name_of_cwc_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].name_of_cwc.value)){
    flag=1;
         $("#name_of_cwc_fr_grp").addClass("validate-has-error");
         $(".name_of_cwc" ).focus();
         $(".name_of_cwc_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#name_of_cwc_fr_grp").removeClass("validate-has-error");
    $(".name_of_cwc_msg").html("");
  }
  //location_concern
  if(jqForm[0].location_concern.value.length>35)
  {
    flag=1;
    $("#location_concern_fr_grp").addClass("validate-has-error");
    $(".location_concern").focus();
    $(".location_concern_msg").html("This field should be less than 35 characters ");
   return false;
  }
  else{
    $("#location_concern_fr_grp").removeClass("validate-has-error");
   $(".location_concern_msg").html("");
  }
  if(/^\s+$/.test(jqForm[0].location_concern.value)){
    flag=1;
         $("#location_concern_fr_grp").addClass("validate-has-error");
         $(".location_concern").focus();
         $(".location_concern_msg").html("Initially No space allowed");
        return false;
    }
    else{
     $("#location_concern_fr_grp").removeClass("validate-has-error");
    $(".location_concern_msg").html("");
  }
  if($('.location').is(":checked")) {

    if(!jqForm[0].details_of_certificate_other.value || jqForm[0].details_of_certificate_other.value.length>35)
        {
          flag=1;
          $(".location_other").addClass("validate-has-error");
          $(".details_of_certificate_other").focus();
          $(".details_of_certificate_other_msg").html("This field should be less than  35  characters or should not be left blank");
         return false;
        }
        else{
          $(".location_other").removeClass("validate-has-error");

          $(".details_of_certificate_other_msg").html("");

        }
        if(/^\s+$/.test(jqForm[0].details_of_certificate_other.value)){
          flag=1;
               $(".location_other").addClass("validate-has-error");
               $(".details_of_certificate_other").focus();
               $(".details_of_certificate_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $(".location_other").removeClass("validate-has-error");
          $(".by_whom_deployed_other1_msg").html("");
        }
          }
  //by_whom_deployed_other
  if(jqForm[0].oby_whom_deployed.value=='Other')
  {
    if(!jqForm[0].by_whom_deployed_other.value || jqForm[0].by_whom_deployed_other.value.length>35)
    {
      flag=1;
      $("#by_whom_deployed_other_fr_grp").addClass("validate-has-error");
      $(".by_whom_deployed_other").focus();
      $(".by_whom_deployed_other_msg").html("This field should be less than 35 characters or should not be left blnak");
     return false;
    }
    else{
      $("#by_whom_deployed_other_fr_grp").removeClass("validate-has-error");
     $(".by_whom_deployed_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].by_whom_deployed_other.value)){
      flag=1;
           $("#by_whom_deployed_other_fr_grp").addClass("validate-has-error");
           $(".by_whom_deployed_other").focus();
           $(".by_whom_deployed_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#by_whom_deployed_other_fr_grp").removeClass("validate-has-error");
      $(".by_whom_deployed_other_msg").html("");
    }
  }

  //oenvironment_in_other
  if(jqForm[0].oenvironment_in.value =='Other')
  {
    if(!jqForm[0].oenvironment_in_other.value || jqForm[0].oenvironment_in_other.value.length>35)
    {
      flag=1;
      $("#oenvironment_in_other_fr_grp").addClass("validate-has-error");
      $(".oenvironment_in_other").focus();
      $(".oenvironment_in_other_msg").html("This field should be less than 35 characters or should not be left blnak");
     return false;
    }
    else{
      $("#oenvironment_in_other_fr_grp").removeClass("validate-has-error");
     $(".oenvironment_in_other_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].oenvironment_in_other.value)){
      flag=1;
           $("#oenvironment_in_other_fr_grp").addClass("validate-has-error");
           $(".oenvironment_in_other").focus();
           $(".oenvironment_in_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#oenvironment_in_other_fr_grp").removeClass("validate-has-error");
      $(".oenvironment_in_other_msg").html("");
    }
  }

  //obehaviour_of_employer_other
  if(jqForm[0].obehaviour_of_employer.value=='Other')
  {
    if(!jqForm[0].obehaviour_of_employer_other.value || jqForm[0].obehaviour_of_employer_other.value.length>35)
    {
      flag=1;
      $("#obehaviour_of_employer_other_fr_grp").addClass("validate-has-error");
      $(".obehaviour_of_employer_other").focus();
      $(".obehaviour_of_employer_other_msg").html("This field should be less than 35 characters or should not be left blnak");
     return false;
    }
    else{
      $("#obehaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
     $(".obehaviour_of_employer_other_msg").html("");
   }
    if(/^\s+$/.test(jqForm[0].obehaviour_of_employer_other.value)){
      flag=1;
           $("#obehaviour_of_employer_other_fr_grp").addClass("validate-has-error");
           $(".obehaviour_of_employer_other").focus();
           $(".obehaviour_of_employer_other_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#obehaviour_of_employer_other_fr_grp").removeClass("validate-has-error");
      $(".obehaviour_of_employer_other_msg").html("");
    }
  }
  if(jqForm[0].ocomplaint_lodge.value=="Yes")
  {
    if(!jqForm[0].ofir_no.value || jqForm[0].ofir_no.value.length>35)
    {
      flag=1;
      $("#ofir_no_fr_grp").addClass("validate-has-error");
      $(".ofir_no").focus();
      $(".ofir_no_msg").html("This field should be less than  35  characters or should not be left blank");
     return false;
    }
    else{
      $("#ofir_no_fr_grp").removeClass("validate-has-error");
     $(".ofir_no_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].ofir_no.value)){
      flag=1;
           $("#ofir_no_fr_grp").addClass("validate-has-error");
           $(".ofir_no").focus();
           $(".ofir_no_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#ofir_no_fr_grp").removeClass("validate-has-error");
      $(".ofir_no_msg").html("");
    }
    //police station name
    if(!jqForm[0].policestation_name.value || jqForm[0].policestation_name.value.length>35)
    {
      flag=1;
      $("#policestation_name_grp").addClass("validate-has-error");
      $(".policestation_name").focus();
      $(".policestation_name_msg").html("This field should be less than  35  characters or should not be left blank");
     return false;
    }
    else{
      $("#policestation_name_fr_grp").removeClass("validate-has-error");
     $(".policestation_name_msg").html("");
    }
    if(/^\s+$/.test(jqForm[0].policestation_name.value)){
      flag=1;
           $("#policestation_name_fr_grp").addClass("validate-has-error");
           $( ".policestation_name" ).focus();
           $(".policestation_name_msg").html("Initially No space allowed");
          return false;
      }
      else{
       $("#policestation_name_fr_grp").removeClass("validate-has-error");
      $(".policestation_name_msg").html("");
    }
  }
  ///osalary
  if(jqForm[0].osalary.value.length>10)
  {
    flag=1;
    $("#osalary_fr_grp").addClass("validate-has-error");
    $(".osalary").focus();
    $(".osalary_msg").html("This field should be less than  10  numeric characters or should not be left blnak");
   return false;
  }
  else{
    $("#osalary_fr_grp").removeClass("validate-has-error");
   $(".osalary_msg").html("");
  }

  }
if(is_dob_r == "Yes"){
var newAge=calculateAge(newDate);
}

if(is_dob_r == "Yes"){
  if (newAge>18)
  {
    flag=1;
    $("#error_msg").html("Child age must less than 18 year");
    //document.getElementById("dob").focus();

    return false;
  }
  else{
    $("#error_msg").html("");
  }
  if (newAge<5)
  {
      flag=1;
    $("#error_msg").html("Child age must more than 5 year");
      //document.getElementById("dob").focus();
       $("#datepicker").addClass("newClass");

    return false;
  }
  else{
    $("#error_msg").html("");
  }
}
if(is_dob_r == "Yes"){
var value = copmareAge(daterescue,newDate);
}
if(is_dob_r == "No"){
var value_sub = copmareAge_year(daterescue,year_value);
}
if(is_dob_r == "Yes"){
  if(value < 5){
    flag=1;
  $("#error_msg").html(" ");
  $("#datepicker").removeClass("newClass");
  $("#error_msg1").html("Child rescue date must greater than date of birth");
  //document.getElementById("idate_of_rescue").focus();
  $("#datetimepicker").addClass("newClass");

    return false;
  }
  else{
      $("#error_msg1").html("");
      $("#datepicker").removeClass("newClass");
  }
}

else{
  if(year_value < value_sub ){	flag=1;
    $("#error_msg1").html("Child rescue date must greater than date of birth");
    document.getElementById("idate_of_rescue").focus();
    $("#datetimepicker").addClass("newClass");

      return false;
  }
}


//Enrolemnet date validation

 var enrolement = function(dor1,dob1) {
	year1= new Date(dor1);
	year2 = new Date(dob1);
	onlyyear1 = year1.getFullYear();
	onlymonth1 = year1.getMonth();
	onlyday1 = year1.getDate();
	var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
	onlyyear2 = year2.getFullYear();
	onlymonth2 = year2.getMonth();
	onlyday2 = year2.getDate();
   	var diff = onlyyear1 -onlyyear2;
	var m = onlymonth1 - onlymonth2;
	var d = onlyday1 - onlyday2;
   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
    {
        diff--;
    }
	return diff;

};
if(jqForm[0].is_adhar_card.value=='No')
{
var adhar_card_enrollment_date = jqForm[0].adhar_card_enrollment_date.value;
  if(adhar_card_enrollment_date !=""){
    //console.log(date_f_prod);
    var diffDaysof = enrolement(adhar_card_enrollment_date,daterescue);
	//console.log(diffDaysof);	
    if(diffDaysof < 0){
      $(".adhar_card_enrollment_date_msg").html("Date of enrolment should be later or equal to date of rescue");
      document.getElementById("adhar_card_enrollment_date").focus();
      $("#datepicker_adhar").addClass("newClass");
        flag=1;
        return false;
    }
	else{
		
		$(".adhar_card_enrollment_date_msg").html("");
		$("#datepicker_adhar").removeClass("newClass");
	}
  }
}

/*console.log(production_date);
if(production_date!="")
{
	 console.log(production_date);
	var diffDaysof = copmareProdDate(production_date,daterescue);
	console.log(diffDaysof);
    if(diffDaysof < 0){
      $("#error_msg_production_with_in").html("Date of production should be later or equal to date of rescue");
      document.getElementById("production_date").focus();
      $("#production_date").addClass("newClass");
        flag=1;
        return false;
    }
	
}*/
if(place == "Within"){
  /*if (!jqForm[0].iemployer_name.value)
       {
    flag=1;
    alert('sbd')
    return false;
      }*/
      if(jqForm[0].complaint_lodge.value=="Yes")
      {
        if(within_fir_date !=""){

          var diffOut_firDate = copmareOutFirDate(within_fir_date,daterescue);
          if(diffOut_firDate < 0){
            $("#error_msg2").html("FIR date should be later or equal to date of rescue");
            document.getElementById("fir_date").focus();
            $("#datepickerfir").addClass("newClass");
              flag=1;
              return false;
          }else{
          $("#error_msg2").html("");
          $("#datepickerfir").removeClass("newClass");
          }
        }
      }


}else{
  if(jqForm[0].ocomplaint_lodge.value=="Yes")
  {
  if(out_fir_date !=""){

    var diffWithin_firDate = copmareWithnFirDate(out_fir_date,daterescue);
    if(diffWithin_firDate < 0){
      $("#error_msg3").html("FIR date should be later or equal to date of rescue");
      document.getElementById("ofir_date").focus();
      $("#datepickerfirout").addClass("newClass");
        flag=1;
        return false;
    }else{
      $("#error_msg3").html("");
      $("#datepickerfirout").removeClass("newClass");
    }

  }
  if(date_f_prod !=""){
    //console.log(date_f_prod);
    var diffDaysof = copmareProdDate(date_f_prod,daterescue);
	//console.log(diffDaysof);	
    if(diffDaysof < 0){
      $("#error_msg_production").html("Date of production should be later or equal to date of rescue");
      document.getElementById("date_of_production").focus();
      $("#datepickerpr").addClass("newClass");
        flag=1;
        return false;
    }
  }
  
  
  /////////
  

}
}
	//console.log()
	if (flag==0 && document.getElementById('msgModal-conf').style.display!='block')
	{
	window.scrollTo(0,0);
	$('#msgModal-conf').modal('show');
	return false;
	}

    $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
    document.getElementById("submit-button").disabled = true;


}
