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
                foreach($edit_data as $row): ?>
                    <form role="form" class="form-horizontal form-groups-bordered validate project-add2" action="<?php echo base_url(); ?>index.php?admin/manage_profile/update_profile_info" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo get_phrase('image'); ?></label>

                            <div class="col-sm-5">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail"  data-trigger="fileinput">


                                        <img class="profile_thumb" src="<?php if(file_exists($admin_path.$row['child_id'].'.jpg')) { echo $admin_path.$row['child_id'].'.jpg'; }else{ echo $default;} ?>" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*"  onchange="return ajaxFileUpload(this)">
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                    <div id="error-img1"></div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-5">
                              <button type="submit" class="btn btn-info"><?php echo get_phrase('update_profile');?></button>
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
                        <?php echo form_open('admin/manage_profile/change_password' , array('class' => 'form-horizontal form-groups validate project-add','target'=>''));?>

                            <!--message for success-->
                            <div id="changepasswsucc" style="border:1px solid #aaa; text-align:center; margin-bottom:20px; display:none;" class="bg-success">
                            <h3 class="text-success">Password successfully updated !</h3>
                            <p class="text-success">Please logout and login to confirm.</p>
                        	</div>
                            <!--message for failure-->
                            <div id="changepasswfail" style="border:1px solid #aaa; text-align:center; margin-bottom:20px; display:none;" class="bg-danger">
                            <h3 class="text-danger">Incorrect Password !</h3>
                            <p class="text-danger">Please try again.</p>
                        	</div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('current_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="password" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('new_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="new_password" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('confirm_new_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="confirm_new_password" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo get_phrase('update_password');?></button>
                              </div>
								</div>
                        </form>
            </div>
        </div>
    </div>
</div>
<!---Authored by Avinash---->
<script type="text/javascript">
function validate_project_add(formData, jqForm, options) {

              var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
                     var filename1 = jqForm[0].image1.value;
                     if (filename1.search(re_text) == -1 && filename1 !='')
                     {
         				$("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                         return false;
                     }else{
         				$("#error-img1").html("");
         			}
              //return false;
  }
function ajaxFileUpload(upload_field)
  {
      var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
      var filename = upload_field.value;
      //var imagename = filename.replace("C:\\fakepath\\","");
      if (filename.search(re_text) == -1 && filename !='')
      {
          //alert("File must be an image");
  $("#error-img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
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
    });
});
    $(window).load(function () {
	$('#changepasswsucc').hide();
	$('#changepasswfail').hide();
        var options = {
            success: show_message,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function show_message1(responseText, statusText, xhr, $form) {

        if(responseText==1){
            toastr.info("Account updated successfully!");
        }}
    function show_message(responseText, statusText, xhr, $form) {
      if(responseText==1){
  		$('#changepasswsucc').show();
  		$('#changepasswfail').hide();
  		}
  		else{
  		$('#changepasswfail').show();
  		$('#changepasswsucc').hide();
  		    }}

</script>
