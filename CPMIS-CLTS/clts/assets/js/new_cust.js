
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
if(/^\s+$/.test(jqForm[0].other_cast.value)){
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

//other religion name validation ends
//caste name validation
if(jqForm[0].cast.value.length>35)
{
  flag=1;
  flag=1;
  $("#cast_fr_grp").addClass("validate-has-error");
  $(".cast").focus();
  $(".cast_msg").html("This field should be less than 50 characters");
 return false;

}
else{
  $("#cast_fr_grp").removeClass("validate-has-error");
 $(".cast_msg").html("");
}
if(/^\s+$/.test(jqForm[0].cast.value)){
  flag=1;

       $("#cast_fr_grp").addClass("validate-has-error");
       $(".cast").focus();
       $(".cast_msg").html("Initially No space allowed");
      return false;
  }
  else{
   $("#cast_fr_grp").removeClass("validate-has-error");
  $(".cast_msg").html("");
}
//cast name validation ends

//panchayat name validation
if(jqForm[0].panchayat_name.value.length>50)
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
  }
  //pincode validation ends
  
  if (!jqForm[0].ps.value)
    {
        flag=1;
        return false;
    }