<?php
$this->load->view("backend/staff/modal_msg_labouract.php");
foreach ($family_add_data as $row):
?>
<!-----------------------family edit start---------------------------->
<div class="row">
<?php $this->load->view("backend/staff/tabmenu.php");?>
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">

             <div class="child_list_head">
               <i class="entypo-plus-circled"></i>   <a href="<?php echo base_url(); ?>index.php?family_add">List of Family Information</a>
                </div>


                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php /*echo get_phrase('project_form');*/ ?>
                    Family Details- Child ID: <?php echo $row['child_id']; 
					$child_id = $row['child_id'];
					?>
					
                </div>

            </div>
            <div class="panel-body">

                <?php echo form_open('family_add/family/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>


                <div class="row">
                <div class="panel-title ptitle" >

                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">1. Type of Family</label>

                    <div class="col-sm-8">

                    <select name="type_of_family" class="form-control" id="type_of_family">
                                   <option value="">
                                        Select
                                        </option>
                                        <option value="Nuclear Family" <?php if($row['type_of_family']=='Nuclear Family') echo 'selected'; ?>>
                                        Nuclear Family
                                        </option>
                                        <option value="Joint Family" <?php if($row['type_of_family']=='Joint Family') echo 'selected'; ?>>
                                        Joint Family
                                        </option>
                                        <option value="Broken Family" <?php if($row['type_of_family']=='Broken Family') echo 'selected'; ?>>
                                        Broken Family
                                        </option>
										<option value="Extended Family" <?php if($row['type_of_family']=='Extended Family') echo 'selected'; ?>>
                                      Extended Family
                                        </option>
										<option value="Others" <?php if($row['type_of_family']=='Others') echo 'selected'; ?>>
                                     Others
                                        </option>

                        </select>

                    </div>
                </div>
				</div>
                 <div class="col-sm-6" id="type_familyother">
            		<div class="form-group">
              		<label for="field-1" class="col-sm-3 control-label">1.i. Others</label>
             		 <div id="type_of_family_other_fr_grp" class="col-sm-8">
               			 <input type="text" class="form-control type_of_family_other" name="type_of_family_other" id="type_of_family_other"
						  value="<?php echo $row['type_of_family_other']; ?>" autofocus>
              <span class="type_of_family_other_msg color-red"></span>
              		</div>
            		</div>
          			</div>
                </div>


				<div class="row">
                <div class="col-sm-6">

                 <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">2. Has Family Migrated? </label>

                    <div class="col-sm-8">

                    <select name="is_family_migrate" class="form-control" id="is_family_migrate">
                            <option value="">
                            Select
                            </option>
                            <option value="Yes" <?php if($row['is_family_migrate']=='Yes') echo 'selected'; ?>>
                            Yes
                            </option>
                            <option value="No" <?php if($row['is_family_migrate']=='No') echo 'selected'; ?>>
                            No
                            </option>
                       </select>
                    </div>
                </div>
                </div>


				<div class="col-sm-6" id="yes_migrated">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">2.i. Type of Migration</label>

                    <div class="col-sm-8">
                        <select name="type_migration" class="form-control" >
						 <option value="">
                                        Select
                                        </option>
                            <option value="Temporary Migration" <?php if($row['type_migration']=='Temporary Migration') echo 'selected'; ?>>
                           Temporary Migration
                            </option>
                            <option value="Sesonal Migration"  <?php if($row['type_migration']=='Sesonal Migration') echo 'selected'; ?>>
                            Sesonal Migration
                            </option>
                            <option value="Permanent Migration" <?php if($row['type_migration']=='Permanent Migration') echo 'selected'; ?> >
                           Permanent Migration
                            </option>
                       </select>
                    </div>
                </div>

                </div>
				</div>
				<!--3rd question-->
					<div class="row">
					<div class="col-sm-6">
					<h5 class="header">3. Total no. of Family Members</h5>
				<div class="col-sm-6 left-margin" >
              <div  class="form-group" >
                <label for="field-1" class="col-sm-4 control-label">Male</label>
                <div id="total_no_family_male_fr_grp" class="col-sm-6" >
                  <input type="number" class="form-control total_no_family_male" name="total_no_family_male" id="total_no_family_male" min="0" max="1000" onkeyup="if(this.value>1000){this.value='1000';}else if(this.value<1){this.value='0';}"  value="<?php echo $row['total_no_family_male']; ?>"  >
                  <span class="total_no_family_male_msg color-red"></span>
                  </div>
              </div>
            </div>

            <div class="col-sm-6 left-margin3" >
              <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Female</label>
                <div id="total_no_family_female_fr_grp" class="col-sm-6"  >
                  <input type="number" class="form-control total_no_family_female" name="total_no_family_female" id="total_no_family_female" min="0" max="1000" onkeyup="if(this.value>1000){this.value='1000';}else if(this.value<1){this.value='0';}"  value="<?php echo $row['total_no_family_female']; ?>" >
                  <span class="total_no_family_female_msg color-red"></span>

                </div>
              </div>
            </div>

          </div>
				<div class="col-sm-6">
				<h5 class="header">4. No of Persons who have not completed 18 years of age</h5>
            <div class="col-sm-6 left-margin" >
              <div class="form-group" >
                <label for="field-1" class="col-sm-4 control-label">Male</label>
                <div id="not_completed_18yrs_male_fr_grp" class="col-sm-6" >
                  <input type="number" class="form-control not_completed_18yrs_male" name="not_completed_18yrs_male" id="not_completed_18yrs_male" min="0" max="1000" onkeyup="if(this.value>1000){this.value='1000';}else if(this.value<1){this.value='0';}"
				  value="<?php echo $row['not_completed_18yrs_male']; ?>"  >
          <span class="not_completed_18yrs_male_msg color-red"></span>

                </div>
              </div>
            </div>

            <div class="col-sm-6 left-margin3" >
              <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Female</label>
                <div id="not_completed_18yrs_female_fr_grp" class="col-sm-6"  >
                  <input type="number" class="form-control not_completed_18yrs_female" name="not_completed_18yrs_female" id="not_completed_18yrs_female" min="0" max="1000" onkeyup="if(this.value>1000){this.value='1000';}else if(this.value<1){this.value='0';}"
				  value="<?php echo $row['not_completed_18yrs_female']; ?>"  >
          <span class="not_completed_18yrs_female_msg color-red"></span>

                </div>
              </div>
            </div>

                </div>
				</div>

				<!--end-->

				  <div class="row top-margin" >
      <div class="panel-title ptitle" >5. Relationship Among the Family Members</div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">5.i. Father &amp; Mother
</label>

                    <div class="col-sm-8">
                        <select name="father_mother" class="form-control">
                                   <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['father_mother']=='Cordial') echo 'selected'; ?>>
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['father_mother']=='Non Cordial') echo 'selected'; ?>>
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['father_mother']=='Not Known') echo 'selected'; ?>>
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['father_mother']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>

                </div>
                 <div class="col-sm-6">
                <div class="form-group"><label for="field-1" class="col-sm-3 control-label">5.ii. Father &amp; Child</label>
                  <div class="col-sm-8">
                       <select name="father_child" class="form-control">
                            <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['father_child']=='Cordial') echo 'selected'; ?>>
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['father_child']=='Non Cordial') echo 'selected'; ?>>
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['father_child']=='Not Known') echo 'selected'; ?>>
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['father_child']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>


                </div>

                </div>
                <div class="row top-margin" >
                <div class="panel-title ptitle" >

                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">5.iii. Mother &amp; Child</label>

                    <div class="col-sm-8">
                        <select name="mother_child" class="form-control">
                                    <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['mother_child']=='Cordial') echo 'selected'; ?>>
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['mother_child']=='Non Cordial') echo 'selected'; ?>>
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['mother_child']=='Not Known') echo 'selected'; ?>>
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['mother_child']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>

                </div>
               <div class="col-sm-6">
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">5.iv. Father &amp; Siblings</label>

                    <div class="col-sm-8">
                        <select name="father_sibling" class="form-control">
                            <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['father_sibling']=='Cordial') echo 'selected'; ?>>
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['father_sibling']=='Non Cordial') echo 'selected'; ?>>
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['father_sibling']=='Not Known') echo 'selected'; ?>>
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['father_sibling']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>


                </div>

                </div>

          <div class="row top-margin" >
                <div class="panel-title ptitle"  >

                </div>
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">5.v. Mother &amp; Siblings </label>

                    <div class="col-sm-8">
                        <select name="mother_sibling" class="form-control">
                                     <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['mother_sibling']=='Cordial') echo 'selected'; ?>>
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['mother_sibling']=='Non Cordial') echo 'selected'; ?>>
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['mother_sibling']=='Not Known') echo 'selected'; ?>>
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['mother_sibling']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>

                </div>
				
				
                <div class="col-sm-6">


                
                    <label for="field-1" class="col-sm-3 control-label">5.vi. Rescued Child and Siblings</label>

                    <div class="col-sm-8">
                        <select name="rescue_child_siblings" class="form-control" >
                            <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['rescue_child_siblings']=='Cordial') echo 'selected'; ?>>
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['rescue_child_siblings']=='Non Cordial') echo 'selected'; ?> >
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['rescue_child_siblings']=='Not Known') echo 'selected'; ?> >
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['rescue_child_siblings']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>
				</div>
	<div class="row top-margin" >
		<div class="col-sm-6">
      <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">5.vii. Overal relationship among the family members</label>

                    <div class="col-sm-8">
                        <select name="overal_relationship" class="form-control" >
                            <option value="">
                                        Select
                                        </option>
                                        <option value="Cordial" <?php if($row['overal_relationship']=='Cordial') echo 'selected'; ?> >
                                        Cordial
                                        </option>
                                        <option value="Non Cordial" <?php if($row['overal_relationship']=='Non Cordial') echo 'selected'; ?>  >
                                        Non Cordial
                                        </option>
                                        <option value="Not Known" <?php if($row['overal_relationship']=='Not Known') echo 'selected'; ?> >
                                        Not Known
                                        </option>
										<option value="None" <?php if($row['overal_relationship']=='None') echo 'selected'; ?>>
                                      	None
                                        </option>

                        </select>
                    </div>
                </div>
                   
		</div>
				<div class="col-sm-6">
				 <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">6.Bank Details</label>
              <div class="col-sm-6">
               <select name="bank_account" class="form-control" id="bank_account">
				
            <option value="">-- Select --</option>
			<option value="00">New Select</option>
			
      <?php  foreach($bank_account as $rowwws) {?>
           <option  <?php if($row['bank_id']==$rowwws[id]){ echo "selected"; }?>  value="<?php echo $rowwws[id]; ?>"><?php echo $rowwws[acc_no]; ?></option>
        <?php }?>
       </select>
       
                               
              </div>
            </div>
			</div>
			</div>
			<div id="account_details" >
			<div class="row top-margin" >
				  <div class="col-sm-6">
				    <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label" id = "row_dim" >6.1.Bank Name </label>
              <div class="col-sm-6">
                
                 <input type="text" class="form-control bank_name" name="bank_name" id="bank_name" placeholder ="Bank Name/Branch" style="display:none"> 
                   <input type="text" class="form-control bank_name_fetch" name="bank_name_fetch" id="bank_name_fetch" value="<?php echo $rowwws[bank_name] ; ?>" >                          
              </div>
            </div>
			</div>
				<div class="col-sm-6">  
			 <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label" id = "row_val" >6.2.IFSC Code </label>
              <div class="col-sm-6">
                  <input type="text" class="form-control ifsc_code_fetch" name="ifsc_code_fetch" id="ifsc_code_fetch"  maxlength="18" value="<?php echo $rowwws[ifsc_code] ; ?>"> 
                   <input type="text" class="form-control ifsc_code" name="ifsc_code" id="ifsc_code" placeholder ="IFSC Code"  maxlength="18" style="display:none;"  />            
              </div>
                </div>	
                </div>
              </div>	
             <div class="row top-margin" >
				  <div class="col-sm-6">			  
				 <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label" id = "row_bank" >6.3.Account No </label>
              <div class="col-sm-6">
                  <input type="text" class="form-control accont_no" name="accont_no" id="accont_no" placeholder ="Account No" style="display:none" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="18">
				  <input type="text" class="form-control accont_no_fetch" name="accont_no_fetch" id="accont_no_fetch" value="<?php echo $rowwws[acc_no] ; ?>" >
              </div>
                </div>
              </div>				
				 <div class="col-sm-6"> 
				 <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label" id="row_address" >6.4.Bank Address </label>
              <div class="col-sm-6">
                
                 <input type="text" class="form-control bank_address" name="bank_address" id="bank_address" placeholder ="Bank Address" style="display:none"> 
				 <input type="text" class="form-control bank_address_fetch" name="bank_address_fetch" id="bank_address_fetch" value="<?php echo $rowwws[bank_address] ; ?>"> 
                                            
                 </div>
               </div>
            </div>
	    </div>
		</div>

                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">
                            Update</button> <button type="button" class="btn btn-info" id="cancel-button" onClick="UpdateRecord('<?php echo $child_id;?>');">
                            Cancel</button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!------------------------end of family edit------------------------------->
<?php endforeach;?>


<script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});


		if($('#type_of_family').val() == 'Others') {
            $('#type_familyother').show();

       		 } else {
            $('#type_familyother').hide();

       		 }
		if($('#is_family_migrate').val() == 'Yes') {
            $('#yes_migrated').show();

       		 } else {
            $('#yes_migrated').hide();

       		 }
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: false
        };
        $('.project-add').submit(function () {
          //$('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {


        //total_no_family_female
        //not_completed_18yrs_male
        //not_completed_18yrs_female
        if(!/^[0-9]*$/.test(jqForm[0].total_no_family_male.value)){
          flag=1;

               $("#total_no_family_male_fr_grp").addClass("validate-has-error");
               $(".total_no_family_male").focus();
               $(".total_no_family_male_msg").html("Only integer numbers allowed!");
              return false;
          }
          else{
           $("#total_no_family_male_fr_grp").removeClass("validate-has-error");
          $(".total_no_family_male_msg").html("");
        }
        if(!/^[0-9]*$/.test(jqForm[0].total_no_family_female.value)){
          flag=1;

               $("#total_no_family_female_fr_grp").addClass("validate-has-error");
               $(".total_no_family_female").focus();
               $(".total_no_family_female_msg").html("Only integer numbers allowed!");
              return false;
          }
          else{
           $("#total_no_family_female_fr_grp").removeClass("validate-has-error");
          $(".total_no_family_female_msg").html("");
        }
        if(!/^[0-9]*$/.test(jqForm[0].not_completed_18yrs_male.value)){
          flag=1;

               $("#not_completed_18yrs_male_fr_grp").addClass("validate-has-error");
               $(".not_completed_18yrs_male").focus();
               $(".not_completed_18yrs_male_msg").html("Only integer numbers allowed!");
              return false;
          }
          else{
           $("#not_completed_18yrs_male_fr_grp").removeClass("validate-has-error");
          $(".not_completed_18yrs_male_msg").html("");
        }
        if(!/^[0-9]*$/.test(jqForm[0].not_completed_18yrs_female.value)){
          flag=1;

               $("#not_completed_18yrs_female_fr_grp").addClass("validate-has-error");
               $(".not_completed_18yrs_female").focus();
               $(".not_completed_18yrs_female_msg").html("Only integer numbers allowed!");
              return false;
          }
          else{
           $("#not_completed_18yrs_female_fr_grp").removeClass("validate-has-error");
          $(".not_completed_18yrs_female_msg").html("");
        }
        if(jqForm[0].type_of_family_other.value.length>70)
        {
          flag=1;
          $("#type_of_family_other_fr_grp").addClass("validate-has-error");
          $(".type_of_family_other_other").focus();
          $(".type_of_family_other_msg").html("This field should be less than 70 characters");
         return false;

        }
        else{
          $("#type_of_family_other_fr_grp").removeClass("validate-has-error");
         $(".type_of_family_other_msg").html("");
        }

      //validation for details handicaped/Disability
      if(jqForm[0].type_of_family.value =="Others")
      {
      if(jqForm[0].type_of_family_other.value.length>70)
      {
        flag=1;
        $("#type_of_family_other_fr_grp").addClass("validate-has-error");
        $(".type_of_family_other_other").focus();
        $(".type_of_family_other_msg").html("This field should be less than 70 characters");
       return false;

      }
      else{
        $("#type_of_family_other_fr_grp").removeClass("validate-has-error");
       $(".type_of_family_other_msg").html("");
      }


      if(/^\s+$/.test(jqForm[0].type_of_family_other.value)){
        flag=1;

             $("#type_of_family_other_fr_grp").addClass("validate-has-error");
             $(".type_of_family_other").focus();
             $(".type_of_family_other_msg").html("Initially No space allowed");
            return false;
        }
        else{
         $("#type_of_family_other_fr_grp").removeClass("validate-has-error");
        $(".type_of_family_other_msg").html("");
      }
    }
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
	/*prativa edited*/
	$('html, body').animate({ scrollTop: 0 }, 0);

        $('#preloader-form').html('');
      
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


$(function() {

   		 $('#is_family_migrate').change(function(){
        	if($('#is_family_migrate').val() == 'Yes') {
            $('#yes_migrated').show();

       		 } else {
            $('#yes_migrated').hide();

       		 }
    	});
		});

		$(function() {

   		 $('#type_of_family').change(function(){
        	if($('#type_of_family').val() == 'Others') {
            $('#type_familyother').show();

       		 } else {
            $('#type_familyother').hide();

       		 }
    	});
		});

</script>
<script type="text/javascript">
$("#bank_account").on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected  = $(this).val();
	//alert(valueSelected);
	if(valueSelected == '00'){
		 $("#bank_name").show();
		 $("#bank_address").show();
		 $("#ifsc_code").show();
		 $("#accont_no").show();
		 $("#accont_no_fetch").hide();
		 $("#bank_name_fetch").hide();
		 $("#bank_address_fetch").hide();
		 $("#ifsc_code_fetch").hide();
		 $('#row_dim').show(); 
		 $('#row_val').show();
		 $('#row_bank').show();
		 $('#row_address').show();
	}else{
		$("#bank_name").hide();
		 $("#bank_address").hide();
		 $("#ifsc_code").hide();
		 $("#accont_no").hide();
		 $("#bank_name_fetch").show();
		 $("#bank_address_fetch").show();
		 $("#accont_no_fetch").show();
		 $("#ifsc_code_fetch").show();
		  $('#row_bank').hide();
		   $('#row_dim').show(); 
		 $('#row_val').show();
		 $('#row_bank').show();
		 $('#row_address').show();
		 $.ajax({
        url: "<?php echo base_url()?>index.php?family_add/fetch_bank_account",
        type: "post",
		
       data: {valueSelected:valueSelected},
	   dataType :"JSON",
        success: function (response) {
			 //console.log(response); 
			 //alert(response);
	$('.ifsc_code_fetch').val(response.ifsc_code);
	$('#bank_name_fetch').val(response.bank_name);
	$('#bank_address_fetch').val(response.bank_address);
	$('#accont_no_fetch').val(response.acc_no);
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }


    });
	}
    
});
</script>
<script>
  function UpdateRecord(id)
  { 
           var bank_name  = $('.bank_name').val();
		  // alert(bank_name);
		 var bank_address  = $('.bank_address').val();
		 var ifsc_code  = $('.ifsc_code').val();
      jQuery.ajax({
       type: "POST",
       url: "<?php echo base_url()?>index.php?family_add/bank_details_update",
       data: {bank_name:bank_name,bank_address:bank_address,ifsc_code:ifsc_code,id:id},
       cache: false,
       success: function(response)
       {
         alert("Record successfully updated");
       }
     });
 }
</script>