
<?php

$this->load->view("backend/staff/modal_msg_labouract.php");?>

<div class="row">
  <?php

  
$this->load->view("backend/staff/rehilibitionTab.php");

foreach ($cm_relief_cl_data as $row): 
//echo "<pre>";print_r($row);echo "</pre>";
?>
<!-------------------------- labour dept form statred ----------------------------------->
 <!--for getting the dob -->
	
		<!--end-->

  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?cm_relief_cl">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>CM Relief(CL) - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('cm_relief_cl/cm_relief_cl_update/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Has Child physically Verified? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="physically_verified" class="form-control" data-validate="required" id="physically_verified">
                <option value="">Select</option>
                  <option value="Yes" <?php if($row['physically_verified']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['physically_verified']=='No') echo 'selected'; ?>>No</option>
                      </select>
              </div>
            </div>
          </div>
          <div  id="verified_yes">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 i. If yes, Date of verification <span class="color-red">*</span> </label>
                <div class="col-sm-6">
                 <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                    <input type="text" class="form-control" name="verification_date" id="verification_date" onchange="return validateerror();"
					value="<?php if($row['verification_date']!='0000-00-00'){echo $row['verification_date']; }?>"  readonly="readonly">
                  </div>
				  <span class="verification_date_msg color-red"></span>
                </div>
              </div>
            </div>
            
            <!--	end-->
          </div>
          
        </div>
		<!--present addresss-->
		<div class="row" id="cur_address">
          <div class="panel-title ptitle" > </div>
          
          <div >
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 ">Current Address :</label>
                <div class="col-sm-6">
                 <?php echo $row['postal_address']?>
                </div>
              </div>
            </div>
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 ">Panchayat Name :</label>
               <div  class="col-sm-6">
                 <?php echo $row['panchayat_name'];?>
              </div>
              </div>
            </div>
			<div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 ">Pin Code :</label>
                <div  class="col-sm-6">
                 <?php echo $row['pincode'];?>
                </div>
              </div>
            </div>
			<div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 ">Police Station :</label>
                <div  class="col-sm-6">
                 <?php echo $row['police_station_name'];?>
                </div>
              </div>
            </div>
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 ">Block : </label>
                <div id="mode_deposit_sanction_fr_grp" class="col-sm-6">
                  <?php echo $row['block'];?>
                </div>
              </div>
            </div>
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 ">District : </label>
                <div id="mode_deposit_other_fr_grp" class="col-sm-6">
                <?php echo $row['district'];?>
                </div>
              </div>
            </div>
            <div class="col-sm-6" >
              <div class="form-group ">
                <label for="field-1" class="col-sm-6 "> State :</label>
				<div id="mode_deposit_other_fr_grp" class="col-sm-6">
                
                <?php echo $row['state'];?>
                </div>
              </div>
            </div>
          </div>
          
        </div>
		
		
		<!--- Present Addess ends--->
        <div class="row" id="present_address">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Child  Address (If Differs) :</label>
              <div id="new_postaladdress_fr_grp"  class="col-sm-8">
                <textarea name="new_postaladdress" class="form-control new_postaladdress" id="new_postaladdress" maxlength="200"  class="resize-none"><?php echo $row['child_address']?></textarea>
                <span class="new_postaladdress_msg  color-red"></span>
              </div>

            </div>

          </div>
          
          
        </div>
		<!-----------------------3rd question---------------->
		 <div class="row" id="eligible_cm_fund_show">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3. Eligible for CM Relief ?
			  <span class="color-red">*</span></label>
              <div class="col-sm-6" id="relief_fund">
                <select name="eligible_cm_fund" class="form-control" data-validate="required" id="eligible_cm_fund">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['eligible_cm_fund']=='Yes') echo 'selected'; ?> >Yes</option>
                  <option value="No" <?php if($row['eligible_cm_fund']=='No') echo 'selected'; ?> >No</option>
                </select>
               <span class="cm_relief_eligible color-red"></span>
                
              </div>
            </div>
          </div>
		  <!-----------------------4th question---------------->
		  <div <?php if($row['eligible_cm_fund']!='Yes'){ ?> style="display:none;" <?php } ?> id="demand_rised" >
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">4. Demand Raised ?
			 </label>
              <div class="col-sm-6">
                <select name="demand_raised" class="form-control" data-validate="required" id="demand_raised">
				  <option value="0" <?php if($row['demand_raised']=='0') echo 'selected'; ?>>No</option>
                  <option value="1" <?php if($row['demand_raised']=='1') echo 'selected'; ?>>Yes</option>
                    </select>
              </div>
            </div>
          </div>
		  <!-----------------------5th question---------------->
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">5. Demand Received ?
			 </label>
              <div class="col-sm-6">
                <select name="demand_received" class="form-control" data-validate="required" id="demand_received">
				  <option value="0" <?php if($row['demand_received']=='0') echo 'selected'; ?>>No</option>
                  <option value="1" <?php if($row['demand_received']=='1') echo 'selected'; ?>>Yes</option>
                    </select>
              </div>
            </div>
          </div>
		  <div class="col-sm-6" id="letter_amount">
            <div class="form-group" id="enroll">
              <label for="field-1" class="col-sm-6 control-label">5.1. Letter No With amount ? <span class="color-red">*</span>
			  </label>
              <div class="col-sm-6">
                 <input type="text" class="form-control lettterno_amount" name="lettterno_amount" id="lettterno_amount" value="<?php echo $row['lettterno_amount'] ?>" maxlength="20">
             		<span class="enroollmsg color-red"></span>
              </div>
            </div>
          </div>
		 <!-----------------------6th question---------------->
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">6. Availability Of Bank Details ?
			  </label>
              <div class="col-sm-6">
					<select name="availabil_bankdetails" class="form-control" data-validate="required" id="availabil_bankdetails">
						<option value="0" <?php if($row['availabil_bankdetails']=='0') echo 'selected'; ?>>No</option>
						<option value="1" <?php if($row['availabil_bankdetails']=='1') echo 'selected'; ?>>Yes</option>
					</select>          
				</div>
            </div>
          </div>
			<div id="eligible_yes" >
			<div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">6 .1. Select Bank account ? 
			  <span class="color-red">*</span></label>
              <div class="col-sm-6" id="form_bankdetails ">
                <select name="bank_details" class="form-control" data-validate="required"  id="bank_details" >
                 <option value="">Select</option>
				 <option value="new">Other</option>
                  <?php foreach($bank_details as $crow1):  ?>
                  <option value="<?php echo $crow1['id'];?>" <?php if($row['bank_details_id']===$crow1['id']){ echo 'selected'; }  ?>><?php echo $crow1['acc_no']; ?></option>
                  <?php  endforeach;?>				   
                    </select>
                    	             <span class="bandetails_msg color-red"></span>
                    
              </div>
            </div>
          </div>
		
		  <div id="bank_add_new">
		  <div class="row">
		 <div class="col-sm-6" >
		  <div class="form-group">
			<label for="field-1" class="col-sm-6 control-label">6 1.a. Bank Account No:  <span class="color-red">*</span></label>
			<div id="acc_no_fr_grp" class="col-sm-6">
			  <input type="text"  maxlength="18" oninput="this.value=this.value.replace(/[^0-9]/g,'');" data-validate="required"   disabled class="form-control acc_no" value="<?php echo $bank_details_one[0]['acc_no'];?>" name="acc_no" id="acc_no"
				>
			</div>
					  <span class="acc_no_msg color-red" style="padding-left:233px;"></span>
			
		  </div>
		</div>
		
		<div class="col-sm-6" >
		  <div class="form-group">
			<label for="field-1" class="col-sm-6 control-label">6 1.b. IFSC Code :<span class="color-red">*</span></label>
			<div id="ifsc_code_fr_grp" class="col-sm-6">
			  <input  type="text" class="form-control ifsc_code" oninput="this.value=this.value.replace(/[^a-zA-Z0-9]/g,'');" data-validate="required"   disabled value="<?php echo  $bank_details_one[0]['ifsc_code'];?>" name="ifsc_code" id="ifsc_code" maxlength="11" 
				value="" >
				
			</div>
						 <span class="ifsc_code_msg color-red" style="padding-left:180px;"></span>
			
		  </div>
		</div>
		
		<div class="col-sm-6" >
		  <div class="form-group">
			<label for="field-1" class="col-sm-6 control-label">6 1.c. Bank Name :  <span class="color-red">*</span></label>
			<div id="bank_name_fr_grp" class="col-sm-6">
			  <input  type="text" class="form-control bank_name"   disabled name="bank_name" id="bank_name" data-validate="required" value="<?php echo  $bank_details_one[0]['bank_name'];?>"  maxlength="40" >
							<span class="bank_name_msg color-red"></span>			
			</div>
		  <span class="" style="padding-left:233px;"></span>			
		  </div>
		</div>
		
		<div class="col-sm-6" >
		  <div class="form-group">
			<label for="field-1" class="col-sm-6 control-label">6 1.d. Bank Address :  <span class="color-red">*</span></label>
			<div id="bank_address_fr_grp" class="col-sm-6">
			 <textarea name="bank_address" class="form-control bank_address"   disabled id="bank_address" data-validate="required" maxlength="200" > <?php echo  $bank_details_one[0]['bank_address'];?></textarea>
				<span class="bank_address_msg color-red"></span>
			</div>
		  </div>
		</div>
		<div class="col-sm-6" >
		  <div class="form-group">
			<label for="field-1" class="col-sm-6 control-label">6.1.i Has Money Trasferred ?  <span class="color-red">*</span></label>
			<div id="money_fr_grp " class="col-sm-6">
			   <select name="mtransfer_proof" class="form-control" data-validate="required"  id="mtransfer_proof">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['mtransfer_proof']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['mtransfer_proof']=='No') echo 'selected'; ?>>No</option>
                  
                </select>
	  <span class="has_money_trasferr color-red"></span>
			</div>
		  </div>
		</div>
		
		<div class="col-sm-6" id="mtransfer_proof_yes" >
              <div class="form-group" >
                <label for="field-1" class="col-sm-6 control-label">6.1.ii. Proof <span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput" data-validate="required">
                    <div class="fileinput-new thumbnail thumb-img">
						<?php if (file_exists('uploads/entitlement_proof/cm_relief/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/cm_relief/'.$row['child_id'].'.jpg" target="_bank"><img src="uploads/entitlement_proof/cm_relief/'.$row['child_id'].'.jpg" width="150" height="90px" /></a>';
						}else if (file_exists('uploads/entitlement_proof/cm_relief/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/cm_relief/'.$row['child_id'].'.pdf" target="_bank"><img src="assets/images/pdf.png" width="150" height="90px" /><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/cm_relief/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/cm_relief/'.$row['child_id'].'.png" target="_bank"><img src="uploads/entitlement_proof/cm_relief/'.$row['child_id'].'.png" width="150" height="90px" /></a>';
						}
						else{
						echo '<img src="uploads/entitlement_proof/cm_relief/images.png" height="90px"  />';
						}
					?>
					</div>
					<div class="pdf_view"></div>
                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" id="file_img" ></div>
                    
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image1" accept="image/*"  onchange="return ajaxFileUpload1(this); return validateerror1(); "   id="image1" >
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                      <span class="imagefield  color-red"></span>
                  </div>
				  <div id="error_img1"></div>
				   <div id="attach-img1"></div>
                </div>
              </div>
            </div>
		 </div>
			</div>
			</div>
          
						</div>
			<div class="col-sm-6" id="eligible_no">
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">3.1 Specify the reason: <span class="color-red">*</span> </label>
                 <div id="reason_fr_grp"  class="col-sm-8">
						
						<select name="reason" class="form-control" data-validate="required"  id="reason">
                  <option value="">Select</option>
                  <option value="Over Age" <?php if($row['reason_no']=='Over Age') echo 'selected'; ?>>Over Age</option>
                  <option value="Outside State" <?php if($row['reason_no']=='Outside State') echo 'selected'; ?>>Outside State</option>
                  <option value="Traceless address not found" <?php if($row['reason_no']=='Traceless address not found') echo 'selected'; ?>>Traceless address not found</option>
                  <option value="Dead" <?php if($row['reason_no']=='Dead') echo 'selected'; ?>>Dead</option>
                  <option value="Others" <?php if($row['reason_no']=='Others') echo 'selected'; ?>>Others</option>
                  
                </select>
						
						<span class="reason_msg   color-red"></span>
					  </div>
              </div>
            </div>
			</div>
			

		<!-------------------end----------------------------->
		<div class="col-sm-6" <?php if($row['reason_no']!='Others'){ ?> style="display:none;" <?php } ?>  id="other_reasontext" >
              <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label">3.1.a Please specify<span class="color-red">*</span> </label>
                 <div id="reason_fr_grp_other"  class="col-sm-8">
						<textarea name="reason_other" class="form-control reason"   id="reason_other"  class="resize-none" data-validate="required"><?php echo $row['other_reason'] ; ?></textarea>
						<span class="reason_msg_other   color-red"></span>
					  </div>
              </div>
            </div>

		<!-------------------end----------------------------->
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <?php if($roles_id==2){?><button type="submit" class="btn btn-info" id="submit-button"> Update </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <?php }?>
            <span id="preloader-form"></span> </div>
        </div>
		 
<input type="hidden" name="date_rescued" value="<?php echo $row['rescued_date'];?>">
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>

<!--------------------------labour dept edit end------------------------->



<?php endforeach;?>
<script>
    $(document).ready(function () {

			$('button[type="submit"]').prop('disabled', true);
    		$(':input', this).change(function() {
       			 if($(this).val() != '') {
            $('button[type="submit"]').prop('disabled', false);
        		 }
    		 });
			
    		if($('#eligible_cm_fund').val() == 'Yes') {
                $('#eligible_yes').show();
    			$('#eligible_no').hide();
    			if($("#demand_received").val() == 'Yes')
    			{
    				$("#letter_amount").show();
        		}
    			else{
    				$("#letter_amount").hide();
        			}
    			if($('#availabil_bankdetails').val() == 1)
    			{
    				$('#bank_add_new').show();
    		

    				}
    			else{
    				
    				 $('#bank_add_new').hide();
    				 $('#eligible_yes').hide();
    				}

           		 } 
    			 else if ($('#eligible_cm_fund').val() == 'No'){

    			 $('#eligible_no').show();
    			 $('#eligible_yes').hide();

           		 }

    			 else {

    			$('#eligible_no').hide();
    			 $('#eligible_yes').hide();

           		 }

			if($('#physically_verified').val() == 'Yes') {
            $('#verified_yes').show();
            $('#cur_address').show();
            $('#present_address').show();
            $('#eligible_cm_fund_show').show();
			
			//$('#interest_no').hide();

       		 }
			 else{
				  $('#verified_yes').hide(); 
				  $('#cur_address').hide();
            $('#present_address').hide();
            $('#eligible_cm_fund_show').hide();
			 }
			 if($('#mtransfer_proof').val() == 'Yes') {
            $('#mtransfer_proof_yes').show();
			

       		 } 
			  else {
            $('#mtransfer_proof_yes').hide();
			

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

	var verificationDateDiff = function(dor,dop) {
			year1= new Date(dor);
			year2 = new Date(dop);
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
			console.log(diff);
			return diff;

		};
		
    function validate_project_add(formData, jqForm, options) {

      //mode_payment_cheque
	  if(!jqForm[0].physically_verified.value)
	  {
		 flag=1; 
		return false;  
	  }
	  
	  	  
      if(jqForm[0].physically_verified.value =="Yes")
        {         
          
        if(!jqForm[0].verification_date.value)
        {
          flag=1;
          $("#verification_date_fr_grp").addClass("validate-has-error");
          $(".verification_date").focus();
          $(".verification_date_msg").html("This field required");
         return false;

        }
        else{
          $("#verification_date_fr_grp").removeClass("validate-has-error");
         $(".verification_date_msg").html("");
        }

          

     if(!jqForm[0].eligible_cm_fund.value)
  	  {
    	  flag=1;
          $("#relief_fund").addClass("validate-has-error");
          $(".eligible_cm_fund").focus();
          $(".cm_relief_eligible").html("");
         return false; 
  	  }
     else if(jqForm[0].eligible_cm_fund.value=="No")
 	  {
    	 if(jqForm[0].reason.value=="")
    	  {
    	  flag=1;
          $("#reason_fr_grp").addClass("validate-has-error");
          $(".reason").focus();
          $(".reason_msg").html("");
         return false; 
    	  }else if(jqForm[0].reason.value=="Others")
    	  {
			if(jqForm[0].reason_other.value==""){
				 flag=1;
	              $("#reason_fr_grp_other").addClass("validate-has-error");
	              $(".reason_msg_other").focus();
	              $(".reason_msg_other").html("");
	             return false; 
				}
          	 
        	  }
   	 
 	  }
     else if(jqForm[0].eligible_cm_fund.value!="No"){     
    if(jqForm[0].demand_received.value == '1')
	   {
  	   		//alert(jqForm[0].lettterno_amount.value) ;
  	   		   
    	 if(!jqForm[0].lettterno_amount.value)
		   {
			 flag=1;
	          $("#enroll").addClass("validate-has-error");
	          $(".lettterno_amount").focus();
	          $(".enroollmsg").html("This field required");
	         return false; 			   
		   }
		   else
			   {
			   $(".enroollmsg").html("");
			   }
	   }

	     
	   

	   if(jqForm[0].availabil_bankdetails.value == '1')
	   {
			   		   
		 if(!jqForm[0].bank_details.value)
		   {
			 flag=1;
	          $("#form_bankdetails").addClass("validate-has-error");
	          $(".bank_details").focus();
	          $(".bandetails_msg").html("");
	         return false; 			   
		   }
		   else
			   {
			   $(".bandetails_msg").html("");
			   
				   
		   if(jqForm[0].bank_details.value != '')
		   {
				   //account no validation 
			  if(!jqForm[0].acc_no.value.length || jqForm[0].acc_no.value.length > 18)
				{
				//alert("ee");
					 
				  flag=1;
				  $("#acc_no_fr_grp").addClass("validate-has-error");
				  $(".acc_no").focus();
				  $(".acc_no_msg").html("This field should be less than 18 numeric digits");
				 return false;

				}
			else{
			  $("#acc_no_fr_grp").removeClass("validate-has-error");
			 $(".acc_no_msg").html("");
			} 
			
			 //ifsc code validation
			if(jqForm[0].ifsc_code.value.length !=11)
			{
			  flag=1;
			  $("#ifsc_code_fr_grp").addClass("validate-has-error");
			  $(".ifsc_code").focus();
			  $(".ifsc_code_msg").html("This field should be equal to 11 Alphanumeric");
			 return false;

			}
			else{
			  $("#ifsc_code_fr_grp").removeClass("validate-has-error");
			 $(".ifsc_code_msg").html("");
			}  

			
			//bank name validation
			if(!jqForm[0].bank_name.value.length)
			{
			  flag=1;
			  $("#bank_name_fr_grp").addClass("validate-has-error");
			  $(".bank_name").focus();
			  $(".bank_name_msg").html("This field should be less than 50 characters");
			 return false;
			}
			else{
			  $("#bank_name_fr_grp").removeClass("validate-has-error");
			 $(".bank_name_msg").html("");
			} 
			 
			//bank address validation 
			if(!jqForm[0].bank_address.value)
			{				
			  flag=1;
			  $("#bank_address_fr_grp").addClass("validate-has-error");
			  $(".bank_address").focus();
			  $(".bank_address_msg").html("This field should be less than 200 characters");
			 return false;

			}
			else{
			  $("#bank_address_fr_grp").removeClass("validate-has-error");
			 $(".bank_address_msg").html("");
			} 

		
			
			if(jqForm[0].mtransfer_proof.value=="")
			{				
			  flag=1;
			  $("#money_fr_grp").addClass("validate-has-error");
			  $(".mtransfer_proof").focus();
			  $(".has_money_trasferr").html("");
			 return false;
						
			}

			//money Trasferred
			if(jqForm[0].mtransfer_proof.value=="Yes")
			{
				
				<?php if ((file_exists('uploads/entitlement_proof/cm_relief/' .$row['child_id'] . '.jpg')) || (file_exists('uploads/entitlement_proof/cm_relief/' .$row['child_id'] . '.png')) || (file_exists('uploads/entitlement_proof/cm_relief/' .$row['child_id'] . '.pdf'))) { ?>
				var image=1;
				<?php }else{ ?>
				var image=0;
				<?php }?>


				if((jqForm[0].image1.value.length=='0') && (image=='0'))
				{
					  flag=1;
					  $("#file_img").addClass("validate-has-error");
					  $(".image1").focus();
					  $(".imagefield").html("This Field is Required");
					 return false;
				}
				else{
					  $("#file_img").removeClass("validate-has-error");
					 $(".imagefield").html("");
					} 			

			}
			
			   
		   }
		   }
	   }
     }
		}
	 //*********************************//
	  //pyhsical date verification
	 
       var verification_date=jqForm[0].verification_date.value;
	   var rescued_date=jqForm[0].date_rescued.value;
	   
	  
       var  verifyDiff = verificationDateDiff(verification_date,rescued_date);
				if(verifyDiff < 0){
					//console.log(habdj);
					$(".verification_date_msg").html("Verification date provided should be after date of rescue").show();
					
					$("#datepicker").addClass("newClass");
					return false;
					}
    
             
	  //*********************************//
 $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
		//console.log(responseText);
        $('html, body').animate({ scrollTop: 0 }, 0);
		
		$('#preloader-form').html('');

		$('#msgModal_act').modal('show');

        document.getElementById("submit-button").disabled = false;
    }
	$(function() {

   		 $('#physically_verified').change(function(){
        	if($('#physically_verified').val() == 'Yes') {
            $('#verified_yes').show();
			$('#cur_address').show();
            $('#present_address').show();
            $('#eligible_cm_fund_show').show();

       		 }  
			  else {
            $('#verified_yes').hide();
			$('#cur_address').hide();
            $('#present_address').hide();
            $('#eligible_cm_fund_show').hide();
       		 }
    	});
		});
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

		$(function() {
          
   		 $('#eligible_cm_fund').change(function(){
        	if($('#eligible_cm_fund').val() == 'Yes') {
        		 $('#other_reasontext').hide();
            $('#demand_rised').show(); 
            $('#eligible_no').hide();
			
			   if($('#demand_received').val()=='1')
			   {
			   $('#letter_amount').show();
			   }
			   else{
			   $('#letter_amount').hide();
			   }
			   
			   if($('#availabil_bankdetails').val()=='1')
			   {
			   $('#eligible_yes').show();
			   }
			   
			   
			   if($('#bank_details').val()=='new')
					{
						$('#bank_add_new').show();
						$('#acc_no').val('');
						$('#ifsc_code').val('');
						$('#bank_name').val('');
						$('#bank_address').val('');
						$('#acc_no').prop("disabled", false);
						
					}
					else if($('#bank_details').val()=='')
					{
						$('#bank_add_new').hide();
					}
					else
					{
						get_bank_details($('#bank_details').val());
						$('#bank_add_new').show();
					}

       		 } 
			 else if ($('#eligible_cm_fund').val() == 'No'){
        		 $('#other_reasontext').hide();
        		 $('#reason').val('');	 
			 $('#eligible_no').show();
			 $('#eligible_yes').hide();			 
			 $('#letter_amount').hide();
			 $('#demand_rised').hide();
			 
       		 }
			 else{
        		 $('#other_reasontext').hide();
				 
			  $('#demand_rised').hide();
				$('#eligible_no').hide();
				$('#eligible_yes').hide();
				$('#letter_amount').hide();			 
			 }
    	});
		});
		
	$(function() { 
   		 $('#bank_details').change(function(){
			 console.log($('#bank_details').val());
        	if($('#bank_details').val()=='new')
					{
						$('#bank_add_new').show();
						$('#acc_no').val('');
						$('#ifsc_code').val('');
						$('#bank_name').val('');
						$('#bank_address').val('');
						$('#ifsc_code').prop("disabled", false);
						$('#acc_no').prop("disabled", false);
						$('#bank_name').prop("disabled", false);
						$('#bank_address').prop("disabled", false);
					}
					else if($('#bank_details').val()=='')
					{
						$('#bank_add_new').hide();
					}
					else
					{
						get_bank_details($('#bank_details').val());
						$('#bank_add_new').show();
					}
    	    });
		});
	$(function() {
   		 $('#mtransfer_proof').change(function(){
        	if($('#mtransfer_proof').val() == 'Yes') {
            $('#mtransfer_proof_yes').show();
			

       		 } 
			  else {
            $('#mtransfer_proof_yes').hide();
			

       		 }
    	});
		});
		
		//new pabitra
		$(function() {

   		 $('#demand_received').change(function(){
        	if($('#demand_received').val() == '1') {
              $('#letter_amount').show();			
       		 } 
			  else {
              $('#letter_amount').hide();						
       		 }
    	});
		});
		
		$(function() {
   		 $('#availabil_bankdetails').change(function(){
        	if($('#availabil_bankdetails').val() == '1') {
              $('#eligible_yes').show();			
       		 } 
			  else {
              $('#eligible_yes').hide();						
       		 }
    	});
		});

		$(function() {
	   		 $('#reason').change(function(){ 

		   		 
	        	if($('#reason').val() == 'Others') {
	        		 $('#reason_other').val('');
	              $('#other_reasontext').show();			
	       		 } 
				  else {
	              $('#other_reasontext').hide();						
	       		 }
	    	});
			});
		

    function isNumberKey(evt){
       var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
           return false;
       return true;
    }




	var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
var FromEndDate = new Date();
$('#datepicker1').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});

function ajaxFileUpload1(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var pdf_text=/\.pdf/i;
            var filename = upload_field.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error_img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
               // upload_field.form.reset();
                return false;
            }else{
            	if(filename.search(pdf_text)!= -1)
            	{
                	
            		$(".pdf_view").html('<img src="assets/images/pdf.png"/>');
            		
                }
            	else{
            		$(".pdf_view").html("");
                	}
					$("#error_img1").html("");
					
				}
			}

			
	//custum function by godti satyanarayan
	
		function get_bank_details(bank_id)
			{
			   
			$.ajax({
					url: "<?php echo base_url();?>index.php?cm_relief_cl/get_bank_detail/"+bank_id,
					dataType: "JSON",
					success: function(data){
					
						
						$('#acc_no').val(data[0].acc_no);
						$('#acc_no').prop("disabled", true);
						$('#ifsc_code').val(data[0].ifsc_code);
						$('#ifsc_code').prop("disabled", true);
						$('#bank_name').val(data[0].bank_name);
						$('#bank_name').prop("disabled", true);
						$('#bank_address').val(data[0].bank_address);
						$('#bank_address').prop("disabled", true);
						
					}
					
			});	
				
			}

		function validateerror()
		{
			 $(".verification_date_msg").html("");
			}

		function validateerror1()
		{
			 $(".imagefield").html("");
			}

        function blockSpecialChar(e) {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
        }


        $('input').blur(function() {
        	   var value = $.trim( $(this).val() );
        	   $(this).val( value );
        	});

        $('textarea').blur(function() {
     	   var value = $.trim( $(this).val() );
     	   $(this).val( value );
     	});
     	
      
</script>
