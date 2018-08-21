

<?php
$parent=$ref;
include "modal_msg_labouract.php";?>

<div class="row">
  <?php
  
if($parent=='entitle'){
	include "entitled_child_detail.php";}
else{
foreach($edit_data as $x):
$row=$x;
endforeach;
include "rehilibitionTab.php";
}
foreach ($education_department_data as $row): ?>
  <div class="col-md-11 col-offset-6 centered">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?education_department">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Education Department - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <!------------------------------  start education department editpage---------------------------------------------->
      <div class="panel-body"> <?php echo form_open('education_department/edudepartment_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data', 'name'=>'edudeptform','staff/do_upload')); ?>
        <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Has Rescued Child been Enrolled in School ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="enrolled_school" class="form-control"  id="enrolled_school" data-validate="required">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['enrolled_school']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['enrolled_school']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['enrolled_school']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div id="show-edu">
          <div class="row">
            <div class="panel-title ptitle" > If Yes Please Provide Some Details </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">i. School Type </label>
                <div class="col-sm-6">
                  <select name="school_type" class="form-control" id="school_type">
                    <option value="">Select</option>
                    <option value="Govt"  <?php if($row['school_type']=='Govt') echo 'selected'; ?>> Govt</option>
                    <option value="Private"  <?php if($row['school_type']=='Private') echo 'selected'; ?>> Private </option>
					<option value="NCLP School (Govt.)"  <?php if($row['school_type']=='NCLP School (Govt.)') echo 'selected'; ?>> NCLP School (Govt.) </option>

                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">ii. In Which Class Rescued Child Enrolled</label>
                <div class="col-sm-6">
                  <select name="class_enrolled" class="form-control" id="class_enrolled">
                    <option value="">Select</option>
					<option value="Illiterate" <?php if($row['class_enrolled']=='Illiterate') echo 'selected'; ?>>Illiterate</option>
                    <option value="1st" <?php if($row['class_enrolled']=='1st') echo 'selected'; ?>>1st</option>
                    <option value="2nd" <?php if($row['class_enrolled']=='2nd') echo 'selected'; ?>>2nd</option>
                    <option value="3rd" <?php if($row['class_enrolled']=='3rd') echo 'selected'; ?>>3rd</option>
                    <option value="4th" <?php if($row['class_enrolled']=='4th') echo 'selected'; ?>>4th</option>
                    <option value="5th" <?php if($row['class_enrolled']=='5th') echo 'selected'; ?>>5th</option>
					<option value="6th" <?php if($row['class_enrolled']=='6th') echo 'selected'; ?>>6th</option>
                  <option value="7th" <?php if($row['class_enrolled']=='7th') echo 'selected'; ?>>7th</option>
                  <option value="8th" <?php if($row['class_enrolled']=='8th') echo 'selected'; ?>>8th</option>
                  <option value="9th" <?php if($row['class_enrolled']=='9th') echo 'selected'; ?>>9th</option>
                  <option value="10th" <?php if($row['class_enrolled']=='10th') echo 'selected'; ?>>10th</option>
				  <option value="11th" <?php if($row['class_enrolled']=='11th') echo 'selected'; ?>>11th</option>
				  <option value="12th" <?php if($row['class_enrolled']=='12th') echo 'selected'; ?>>12th</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel-title ptitle" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">iii. School Name </label>
                <div id="school_name_fr_grp" class="col-sm-6">
                  <input type="text" class="form-control school_name" name="school_name" id="school_name" value="<?php echo $row['school_name']; ?>" autofocus="autofocus"   />
                      <span class="school_name_msg color-red"></span>
                </div>
              </div>
            </div>
           <div class="panel-title ptitle" > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">iv. Contact No.</label>
                <div id="contact_no_fr_grp" class="col-sm-6">
                  <input type="text" class="form-control contact_no" name="contact_no" id="contact_no"
				   value="<?php echo $row['contact_no']; ?>"  onkeypress="return isNumberKey(event)" autofocus="autofocus" maxlength="10"   />
                    <span class="contact_no_msg color-red"></span>
                </div>
              </div>
            </div>
          </div>
		<!--  dist-->
		<div class="row">
		 <div class="col-sm-6">
              <label for="field-1" class="col-sm-6 control-label" style="padding-left:0px;">v. District <span class="color-red">*</span></label>
              <div class="form-group">
                <div class="col-sm-6">
                <select name="dist" id="dist" class="form-control" data-validate="required">
                  <option value="">Select Districts</option>
                  <?php
								  $child_dist2 = $this->db->select('*')->where('parent_id','IND010')
								  										->order_by('area_name', 'asc')
																		->group_by('area_name')
																		->get('child_area_detail')->result_array();
                                  foreach($child_dist2 as $crow21):
                                  ?>
                  <option value="<?php echo $crow21['area_id'];?>" <?php if($row['dist']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                </select>
                </div>
              </div>
            </div>
            <div class="panel-title ptitle"  > </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">vi. Block <span class="color-red">*</span></label>
                <div class="col-sm-6">
                 <select name="block" class="form-control" id="block" data-validate="required">
                  <option value="" >Select</option>
                  <?php

								  $child_block = $this->db->select('*')->where('parent_id',$row['dist'])->order_by('area_name', 'asc')
								  										->group_by('area_name')
																		->get('child_area_detail')->result_array();

                                  foreach($child_block as $crow3):
                                  ?>
                  <option value="<?php echo $crow3['area_id'];?>"  <?php if($row['block']==$crow3['area_id']){ echo 'selected'; }  ?> ><?php echo $crow3['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                </select>
                </div>
              </div>
            </div>

          </div>
		  <!--end-->
          <div class="row">
            <div class="panel-title ptitle" > </div>
			 <div class="col-sm-6">
              <label for="field-1" class="col-sm-6 control-label" style="padding-left:0px;">vii. Is Rescued Child Getting Free Uniforms? </label>
              <div class="form-group">
                <div class="col-sm-6">
                  <select name="free_cloths" class="form-control" id="free_cloths">
                    <option value="">Select </option>
                    <option value="Yes"  <?php if($row['free_cloths']=='Yes') echo 'selected'; ?>> Yes </option>
                    <option value="No"  <?php if($row['free_cloths']=='No') echo 'selected'; ?>> No </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">viii. Is Rescued Child Getting Free Bags &amp; Books</label>
                <div class="col-sm-6">
                  <select name="free_bag_books" class="form-control" id="free_bag_books">
                    <option value="">  Select</option>
                    <option value="Yes"  <?php if($row['free_bag_books']=='Yes') echo 'selected'; ?>> Yes </option>
                    <option value="No"  <?php if($row['free_bag_books']=='No') echo 'selected'; ?>> No </option>
                  </select>
                </div>
              </div>
            </div>
            <!--  prativa -->

            <!--end-->
          </div>
		  <div class="row">
		  <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">ix. Proof<span class="color-red">*</span></label>
                <div class="col-sm-6">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail thumb-img" >
					<?php if (file_exists('uploads/entitlement_proof/edu_image/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/edu_image/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/edu_image/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/edu_image/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/edu_image/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><spanclass="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/edu_image/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/edu_image/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/edu_image/'.$row['child_id'].'.png" width="150" height="100"/></a>';
						}else{
							echo '<img src="uploads/entitlement_proof/cm_relief/images.png" height="90px">';
						}
					?>
					</div>
                  <div class="fileinput-preview fileinput-exists thumbnail thumb-img1"  ></div>
                  <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach Proof</span> <span class="fileinput-exists">Change</span>
                      <!--<input type="file" name="image" accept="image/*" onchange="return ajaxFileUpload2(this)" id="image">-->
					  <input type="file" name="image" accept="image/*" onchange="return ajaxFileUpload2(this)" id="image">
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>

				  <div id="error_msg"></div>
				   <div id="attach-img"></div>
                </div>

              </div>
            </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"></label>
              <div class="col-sm-8"></div>
            </div>
          </div>
        </div>
		</div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-8">
            <button type="submit" class="btn btn-info" id="submit-button" value='upload'> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
		<!--file upload-->
		<!--end file upload-->
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!-----------------------------------end of education department edit------------------------------>
<?php endforeach;?>
<script>
    $(document).ready(function () {

	 	$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });


		if($('#enrolled_school').val() == 'Yes') {
            $('#show-edu').show();
       		 } else {
            $('#show-edu').hide();
       		 }
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          //$('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });


    });
    function validate_project_add(formData, jqForm, options) {



	if (!jqForm[0].enrolled_school.value)
        {
            return false;
        }


        if(jqForm[0].enrolled_school.value =="Yes")
          {
          if(jqForm[0].school_name.value.length>70)
          {
            flag=1;
            $("#school_name_fr_grp").addClass("validate-has-error");
            $(".school_name").focus();
            $(".school_name_msg").html("This field should be less than 70 characters");
           return false;

          }
          else{
            $("#school_name_fr_grp").removeClass("validate-has-error");
           $(".school_name_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].school_name.value)){
            flag=1;
                 $("#school_name_fr_grp").addClass("validate-has-error");
                 $(".school_name_other").focus();
                 $(".school_name_msg").html("Initially No space allowed");
                return false;
            }
            else{
             $("#school_name_fr_grp").removeClass("validate-has-error");
            $(".school_name_msg").html("");
          }
        }
        if(jqForm[0].enrolled_school.value =="Yes")
          {
          if(jqForm[0].contact_no.value.length>20)
          {
            flag=1;
            $("#contact_no_fr_grp").addClass("validate-has-error");
            $(".contact_no").focus();
            $(".contact_no_msg").html("This field should be less than 20 characters");
           return false;

          }
          else{
            $("#contact_no_fr_grp").removeClass("validate-has-error");
           $(".contact_no_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].contact_no.value)){
            flag=1;
                 $("#contact_no_fr_grp").addClass("validate-has-error");
                 $(".contact_no_other").focus();
                 $(".contact_no_msg").html("Initially No space allowed");
                return false;
            }
            else{
             $("#contact_no_fr_grp").removeClass("validate-has-error");
            $(".contact_no_msg").html("");
          }
        }
        if(jqForm[0].enrolled_school.value =="Yes")
          {
        if (!jqForm[0].dist.value)
              {
                  return false;
              }
        if (!jqForm[0].block.value)
              {
                  return false;
              }
              var re_text = /\.jpg|\.gif|\.png|\.jpeg|\.pdf/i;
                      var filename =  jqForm[0].image.value;
                      if (filename.search(re_text) == -1 && filename !='')
                      {
          				$("#error_msg").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                          return false;
                      }else{
          			$("#error_msg").html("");
            }

			}
	var mg_val = (jqForm[0].enrolled_school.value);
		if (mg_val == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/edu_image/' .$row['child_id'] . '.png')) ||
		(file_exists('uploads/entitlement_proof/edu_image/' .$row['child_id'] . '.pdf')) ||
		(file_exists('uploads/entitlement_proof/edu_image/' .$row['child_id'] . '.jpg'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image").files.length == 0 ){
   			 $("#attach-img").html("Attachment not available");
			return false;
			}else{
				$("#attach-img").html("");
			}
			<?php } ?>
		}



        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('html, body').animate({ scrollTop: 0 }, 0);
		
		$('#preloader-form').html('');
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
	$(function() {

   		 $('#enrolled_school').change(function(){
        	if($('#enrolled_school').val() == 'Yes') {
            $('#show-edu').show();
       		 } else {
            $('#show-edu').hide();
       		 }
    	});
		});
var Select_List_Data;
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
        o.appendChild( document.createTextNode( '--Select--' ) );
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

document.forms['edudeptform'].elements['dist'].onchange = function(e) {

						var datas = new Object();

						//detailstate();

						distid=document.getElementById('dist').value;

						 var relName = 'block';

	  document.getElementById('block').disabled=false;
	 // alert(distid);
							 $.ajax({

								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getblock/"+distid,
								data: "",
								dataType: "text",
         						cache:false,
								success: function(msg){

									datas= msg;
								var form = document.forms['edudeptform'];
								// reference to associated select box
								var relList = form.elements[ relName ];
/*								alert(relList)

								alert(datas);
*/
								Select_List_Data=eval( '(' + msg + ')' );
  							var obj=Select_List_Data[relName][distid]
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

$("#school_name").on("keydown", function (e) {
			var charcode = e.which;
			if ( /*(charcode === 8) ||*/ // Backspace
				(charcode >= 48 && charcode <= 57) ||(charcode >= 96 && charcode <= 105)) /*|| // 0 - 9
				(charcode >= 65 && charcode <= 90) || // a - z
				(charcode >= 97 && charcode <= 122))*/ { // A - Z

		//alert(charcode);
				return false;
			} else {
				//e.preventDefault()
				//alert(charcode);
				return true;
			}
		});
		function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


 function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.png|\.jpeg|\.pdf/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
                //alert("File must be an image");
				$("#error_msg").html("File format error...Please provide a jpg/jpeg/png or pdf format");
				document.getElementById("image").focus();
				 $("#image1").addClass("newClass");
               // upload_field.form.reset();
                return false;
            }else{
			$("#error_msg").html("");
			}

        }

</script>
