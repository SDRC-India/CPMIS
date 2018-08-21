<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('account_creation_form');?>
            	</div>
            </div>
			<div class="panel-body">

                <?php echo form_open('admin/staff/create/' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit7', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm'));?>

                <fieldset>

					<div class="form-group">
						<label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('name');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-5">
                      	<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" class="form-control name" name="name" data-validate="required" data-message-required="<?php echo get_phrase('Name_should_not_be_blank');?>" value="" autofocus>
						</div>
						<span class="name_msg color-red"></span>
						</div>
						<label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('State');?><span class="color-white">*</span></label>

						<div id="name_fr_grp" class="col-sm-5">
                      <div class="input-group">
								<span class="input-group-addon"><i class="entypo-globe"></i></span>
							<select name="category" class="form-control" id="category" data-validate="required" data-message-required="<?php echo get_phrase('State_should_not_be_blank');?>">

                              <option value="">Select State</option>

                             <?php
                                  $child_state		=	$this->db->get_where('child_area_detail',array('parent_id' => 'IND'))->result_array();
                                  foreach($child_state as $crow1):
                                  ?>

                                   <option value="<?php echo $crow1['area_id'];?>"><?php echo $crow1['area_name']; ?></option>

                               <?php
                              endforeach;
                              ?>


          <!--  <option value="js">JavaScripts</option>
            <option value="php">PHP Scripts</option>
            <option value="tuts">Tutorials</option> -->


        </select>
                         </div>
						</div>
					</div>


                     <div class="form-group">
						<label for="field-2" class="col-sm-1 control-label">District<span class="color-white">*</span></label>
							<div id="name_fr_grp" class="col-sm-5">
                      <div class="input-group">
								<span class="input-group-addon"><i class="entypo-network"></i></span>


											<select name="choices" id="choices" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('District_should_not_be_blank');?>">
				            <!-- js populates -->
				        </select>

						 </div>
						</div>
						
						
						
						<label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('username');?><span class="color-white">*</span></label>
						<div id="user_name_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" class="form-control user_name" data-validate="required" data-message-required="<?php echo get_phrase('Username_should_not_be_blank');?>"  name="user_name" value="">

                         </div>
						</div>
					</div>

                    <script>

var Select_List_Data;




// removes all option elements in select box
// removeGrp (optional) boolean to remove optgroups
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

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;

    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;

		o = document.createElement('option');
        o.appendChild( document.createTextNode( 'Select District' ) );
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



// anonymous function assigned to onchange event of controlling select box
document.forms['demoForm'].elements['category'].onchange = function(e) {

						var datas = new Object();

						stateid=document.getElementById('category').value;

	 var relName = 'choices';

							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getdist/"+stateid,
								data: "",
								dataType: "text",
         						cache:false,
								success: function(msg){

									datas= msg;


								var form = document.forms['demoForm'];

								// reference to associated select box
								var relList = form.elements[ relName ];

								Select_List_Data=eval( '(' + msg + ')' );


  							var obj=Select_List_Data[relName][stateid]

								// remove current option elements
								removeAllOptions(relList, true);

								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);


									//obj = msg;
								},
								error: function() {

									//alert('<?php echo base_url();?>');
								}


            					});


};

					</script>



					<div class="form-group">
						<label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('account_role');?><span class="color-white">*</span></label>
						<div id="account_role_id_fr_grp" class="col-sm-5">
                        <div class="input-group">
								<span class="input-group-addon"><i class="entypo-list"></i></span>
                          <select class="selectboxit account_role_id"  name="account_role_id" data-validate="required" data-message-required="<?php echo get_phrase('Account_roll_should_not_be_blank');?>" >
                              <option><?php echo get_phrase('select_a_role');?></option>
                              <?php
                                  $account_roles		=	$this->db->get('account_role')->result_array();
                                  foreach($account_roles as $row2):
                                  ?>
                                      <option value="<?php echo $row2['account_role_id'];?>"><?php echo $row2['name'];?></option>
                               <?php
                              endforeach;
                              ?>
                       	</select>

                        </div>
													<span class="account_role_id_msg color-red"></span>
						</div>
						<label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('password');?><span class="color-white">*</span></label>
						<input type="hidden" class="form-control"    value="ok" name="password_field" value="" >

						<div class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-key"></i></span>
								<input type="text" class="form-control"  data-validate="required" data-message-required="<?php echo get_phrase('Password_should_not_be_blank');?>" name="password" value="" >
                         </div>
						</div>
					</div>
					<div class="form-group">

						
						<label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('email');?><span class="color-white">*</span></label>
						<div id="email_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-mail"></i></span>
								<input type="text" class="form-control email"  name="email" value="" data-validate="required" data-message-required="<?php echo get_phrase('Email_should_not_be_blank');?>">

                         </div>
												 <span class="email_msg color-red"></span>
						</div>
							<label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('phone');?><span class="color-white">*</span></label>

						<div  id="phone_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-phone"></i></span>
								<input type="text" class="form-control phone" onkeypress="return isNumberKey(event)" maxlength="10" name="phone" value="" data-validate="required" data-message-required="<?php echo get_phrase('Phone_no._should_not_be_blank');?>"  >

							</div>
							<span class="phone_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						
					
						<label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('skype');?></label>

						<div id="skype_id_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-skype"></i></span>
								<input type="text" class="form-control skype_id" name="skype_id" value=""  >

                         </div>
												 <span class="skype_id_msg color-red"></span>
						</div>
						<label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('facebook');?></label>

						<div id="facebook_profile_link_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-facebook-squared"></i></span>
								<input type="text" class="form-control facebook_profile_link" name="facebook_profile_link" value="" >

                         </div>
												 	<span class="facebook_profile_link_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						
						
						<label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('linkedin');?></label>

						<div id="linkedin_profile_link_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-linkedin"></i></span>
								<input type="text" class="form-control linkedin_profile_link" name="linkedin_profile_link" value="" >

                         </div>
												 	<span class="linkedin_profile_link_msg color-red"></span>
						</div>
						<label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('twitter');?></label>

						<div id="twitter_profile_link_fr_grp" class="col-sm-5">
                      	<div class="input-group ">
								<span class="input-group-addon"><i class="entypo-twitter"></i></span>
								<input type="text" class="form-control twitter_profile_link" name="twitter_profile_link" value="" >

                         </div>
												 <span class="twitter_profile_link_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						
						
						<label for="field-1" class="col-sm-1 control-label"><?php echo get_phrase('photo');?></label>

						<div class="col-sm-1">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						  <div class="fileinput-new thumbnail img-thmb"  data-trigger="fileinput"> 
						  <img class="img-thmb" src="<?php echo $default;?>" alt="Staff Image"> </div>
						  <div class="fileinput-preview fileinput-exists thumbnail img-dim" ></div>
						  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Select photo</span> <span class="fileinput-exists">Change</span>
							<input type="file" name="userfile" accept="image/*" onchange="return ajaxFileUpload2(this)">
							</span><br><br> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
						</div>
								<span class="err_msg color-red"></span>
													<div class="col-sm-8 paddingnl" style="padding-left:10px;" id="img-error"></div>
	
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-1 control-label"></label>
						<div class="col-sm-4">
                        	<div class="checkbox checkbox-replace color-blue pull-right">
								<input type="checkbox" name="notify_check" id="notify" value="yes" checked>
								<label> <?php echo get_phrase('notify_staff');?></label>
							</div>
						</div>
						<div class="col-sm-7">
							<button type="submit" class="btn btn-info" id="submit-button"><?php echo get_phrase('add_staff');?></button>
						<span id="preloader-form"></span>
						</div>
					</div>

					

                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script>
	// url for refresh data after ajax form submission
	var post_refresh_url	=	'<?php echo base_url();?>index.php?admin/reload_staff_list';
	var post_message		=	'Data Created Successfully';
</script>
<script>
	 function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.png|\.jpeg/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#img-error").html("File format error...Please provide a jpg/jpeg or pdf format");
				document.getElementById("image").focus();
				 $("#image1").addClass("newClass");
                upload_field.form.reset();
                return false;
            }
			}
			</script>
<!-- calling ajax form submission plugin for specific form -->
<script src="assets/js/ajax-form-submission.js"></script>
