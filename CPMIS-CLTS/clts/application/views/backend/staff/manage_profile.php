
<!------------------------manage profile starts------------------------------->

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('edit_profile');?>
                </div>
            </div>
            <div class="panel-body">
                <?php
                foreach($prof_data as $row):
                    ?>
                    <?php echo form_open('manage_profile/profile/update_profile_info' , array('class' => 'form-horizontal form-groups validate project-add2','target'=>'' ));?>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">1. <?php echo get_phrase('name');?><span class="color-white">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" disabled="disabled" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">2. <?php echo get_phrase('user_name');?><span class="color-white">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name'];?>" disabled="disabled" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">3. <?php echo get_phrase('email');?><span class="color-white">*</span></label>
                            <div id="email_fr_grp" class="col-sm-5">
                                <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" />
                                    <span class="email_msg color-red"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label">4. <?php echo get_phrase('phone'); ?><span class="color-white">*</span></label>

                            <div id="phone_fr_grp" class="col-sm-5">
                                <input type="text" class="form-control" name="phone" id="phone" maxlength="10"
								value="<?php echo $row['phone'];?>" onkeypress="return isNumberKey(event)">
                              <span class="phone_msg color-red"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label">5. <?php echo get_phrase('skype_id'); ?></label>

                            <div id="skype_id_fr_grp" class="col-sm-5">
                                <input type="text" class="form-control" name="skype_id" value="<?php echo $row['skype_id'];?>" >
                                <span class="skype_id_msg color-red"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label">6. <?php echo get_phrase('facebook_profile_link'); ?></label>

                            <div id="facebook_profile_link_fr_grp"  class="col-sm-5">
                                    <input  type="text" class="form-control facebook_profile_link" name="facebook_profile_link" value="<?php echo $row['facebook_profile_link'];?>" >
                                <span class="facebook_profile_link_msg color-red"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label">7. <?php echo get_phrase('linkedin_profile_link'); ?></label>

                            <div id="linkedin_profile_link_fr_grp" class="col-sm-5">
                                <input type="text" class="form-control linkedin_profile_link" name="linkedin_profile_link" value="<?php echo $row['linkedin_profile_link'];?>" >
                                <span class="linkedin_profile_link_msg color-red"></span>
                            </div>  
                        </div>

                        <div class="form-group">
                            <label for="field-2" class="col-sm-3 control-label">8. <?php echo get_phrase('twitter_profile_link'); ?></label>

                            <div id="twitter_profile_link_fr_grp" class="col-sm-5">
                                <input type="text" class="form-control twitter_profile_link" name="twitter_profile_link" value="<?php echo $row['twitter_profile_link'];?>" >
                                  <span class="twitter_profile_link_msg color-red"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">9. <?php echo get_phrase('image'); ?></label>

                            <div class="col-sm-5">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail"  data-trigger="fileinput">
                                        <img class="profile_thumb" src="<?php if(file_exists($upload_path.$row['staff_id'].'.jpg')) { echo $upload_path.$row['staff_id'].'.jpg'; }else{ echo $default;} ?>" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" id="image1" accept="image/*"  onchange="return ajaxFileUpload(this)">
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                    	<div id="error-img1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-5">
                              <button type="submit" class="btn btn-info" ><?php echo get_phrase('update_profile');?></button>
                          </div>
                            </div>
                    </form>

            </div>
        </div>
    </div>
</div>
<!--password-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('change_password');?>
                </div>
            </div>
            <div class="panel-body">
                        <?php echo form_open('manage_profile/profile/change_password' , array('class' => 'form-horizontal form-groups validate project-add','target'=>''));?>
                            <!--message for success-->
                            <div id="changepasswsucc" style="display:none;" class="bg-success succ1">
                            <h3 class="text-success">Password successfully updated !</h3>
                            <p class="text-success">Please logout and login to confirm.</p>
                        	</div>
                            <!--message for failure-->
                            <div id="changepasswfail" style="display:none;"  class="bg-danger dan1">
                            <h3 class="text-danger">Incorrect Password !</h3>
                            <p class="text-danger">Please try again.</p>
                        	</div>
								<span class="color-white">* <b>After updating profile you can change password</b> </span>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('current_password');?><span class="color-white">*</span></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="password" id="password" data-validate="required" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('new_password');?><span class="color-white">*</span></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="new_password" id="new_password" data-validate="required" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('confirm_new_password');?><span class="color-white">*</span></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="confirm_new_password" data-validate="required" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info" <?php if($row['email']==""){ ?> disabled <?php } ?>><?php echo get_phrase('update_password');?></button>
                              </div>
								</div>
                        </form>
                        <?php
                    endforeach;
                    ?>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------manage profile end------------------------------------->
<!--password-->

<!---Authored by Avinash---->
<script type="text/javascript">
$('#changepasswsucc').hide();
$('#changepasswfail').hide();
function validate_project_add(formData, jqForm, options) {
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
			$(".email_msg").html("Enter valid email id!");
		 return false;
		}
    if (jqForm[0].phone.value.length!=10)
      {
              flag=1;
              $("#phone_fr_grp").addClass("validate-has-error");
              $(".phone").focus();
              $(".phone_msg").html("This field should be equal to 10 numeric characters");
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
                $(".skype_id_msg").html("This field  should be less than 20  characters");
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
                  $(".facebook_profile_link_msg").html("This field should be less than 20  characters");
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
                    $(".linkedin_profile_link_msg").html("This field should be less than 20  characters");
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
                      $(".twitter_profile_link_msg").html("This field should be less than 20  characters");
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
                     var filename1 = jqForm[0].image1.value;
                     if (filename1.search(re_text) == -1 && filename1 !='')
                     {
         				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png format");
                         return false;
                     }else{
         				$("#error-img1").html("");
         			}
  }

  function ajaxFileUpload(upload_field)
    {
        var re_text = /\.jpg|\.gif|\.jpeg|\.png/i;
        var filename = upload_field.value;
        //var imagename = filename.replace("C:\\fakepath\\","");
        if (filename.search(re_text) == -1 && filename !='')
        {
            //alert("File must be an image");
    $("#error-img1").html("File format error...Please provide a jpg/jpeg/png format");
    document.getElementById("image1").focus();
           // upload_field.form.reset();
            return false;
        }else{
    $("#error-img1").html("");
  }
  }
  $(window).load(function () {

      var options = {
          beforeSubmit: validate_project_add,
            success: show_message1,
          resetForm: false
      };
      $('.project-add2').submit(function () {
         $('body').scrollTop(0);
          $(this).ajaxSubmit(options);

          return false;
          //window.reload();
      });
  });
    //password//new_password//confirm_new_password
  function validate_project(formData, jqForm, options) {
      if (!jqForm[0].password.value)
        {
                flag=1;

               return false;
        }

        if (!jqForm[0].new_password.value)
          {
                  flag=1;

                 return false;
          }
          if (!jqForm[0].confirm_new_password.value)
            {
                    flag=1;
                   return false;
            }

    }
    $(window).load(function () {

        var options = {
            success: show_message,
            beforeSubmit: validate_project,
            resetForm: true
        };
        $('.project-add').submit(function () {

            $(this).ajaxSubmit(options);
            return false;
        });
    });

    function show_message(responseText, statusText, xhr, $form) {
      console.log(responseText);
    		if(responseText==1){
    		$('#changepasswsucc').show();
    		$('#changepasswfail').hide();
    		}
    		else{
    		$('#changepasswfail').show();
    		$('#changepasswsucc').hide();

		    }}
        function show_message1(responseText, statusText, xhr, $form) {

            if(responseText==1){
                toastr.info("Account updated successfully!");
                setTimeout(function(){window.location.reload();},1000);

            }}


function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
$(function(){
$("#phone").bind("paste",function(e) {
                     e.preventDefault();
                });
				});
</script>
