
<?php
$parent=$ref;
$this->load->view("backend/staff/modal_msg_labouract.php");?>

<div class="row">
  <?php
  
  //why it is required
if($parent=='entitle'){
$this->load->view("backend/staff/entitled_child_detail.php");}
  //ends
else{
  if($role_id !='2' && $role_id!='5'){
$this->load->view("backend/staff/rehilibitionTab.php");
  }
}
	$dob="";
  $date_rescued ="";
foreach ($labour_resource_department_data as $row): ?>
<!----------------------labour dept form statred-------------------------------->
 <!--for getting the dob -->
		<?php
						   	$dob=$row['dob'];
						    $date_rescued =$row['date_rescued'];
							?>
		<!--end-->

  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?labour_resource_department">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i> Labour Resource Department - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('labour_resource_department/labourdepartment_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1. Has Package of Rs.<?php echo $label_price;?> been Provided ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="package" class="form-control" data-validate="required" id="package">
                <option value="">Select</option>
                  <option value="Yes" <?php if($row['package']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['package']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['package']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div  id="package_yes">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 i. If yes, Date of Package Provided <span class="color-red">*</span> </label>
                <div class="col-sm-6">
                 <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                    <input type="text" class="form-control" data-validate="required" name="package_yes" id="package_yes"
					value="<?php echo $row['package_yes']; ?>"  readonly="readonly">
                  </div>
				  <span id="error_msg1"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii. Mode of Payment <span class="color-red">*</span> </label>
                <div class="col-sm-6">
                  <select name="mode_of_payment" data-validate="required" class="form-control" id="mode_of_payment">
				  <option value="cheque" <?php if($row['mode_of_payment']=='cheque') echo 'selected'; ?>> Cheque </option>
                    <option value="cash" <?php if($row['mode_of_payment']=='cash') echo 'selected'; ?>> Cash </option>
                    <option value="Account" <?php if($row['mode_of_payment']=='Account') echo 'selected'; ?> > Account</option>
                    <option value="Draft" <?php if($row['mode_of_payment']=='Draft') echo 'selected'; ?>> Draft </option>
                    <option value="Others" <?php if($row['mode_of_payment']=='Others') echo 'selected'; ?>> Others </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="option1">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii a. Cheque(Cheque No) <span class="color-red">*</span> </label>
                <div id="mode_payment_cheque_fr_grp" class="col-sm-6">
                  <input onkeypress="return isNumberKey(event)" type="text" class="form-control mode_payment_cheque" name="mode_payment_cheque" id="mode_payment_cheque"
					value="<?php echo $row['mode_payment_cheque']; ?>" >
          <span class="mode_payment_cheque_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="option2" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii a. Cash <span class="color-red">*</span> </label>
                <div id="mode_payment_cash_fr_grp" class="col-sm-6">
                  <input onkeypress="return isNumberKey(event)" type="text" class="form-control mode_payment_cash" name="mode_payment_cash" id="mode_payment_cash"
					value="<?php echo $row['mode_payment_cash']; ?>" >
          <span class="mode_payment_cash_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="option3">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii a. Account Transfer(Account no)<span class="color-red">*</span> </label>
                <div id="mode_payment_account_fr_grp" class="col-sm-6">
                  <input onkeypress="return isNumberKey(event)" maxlength="18" type="text" class="form-control mode_payment_account" name="mode_payment_account" id="mode_payment_account"
					value="<?php echo $row['mode_payment_account']; ?>" >
          <span class="mode_payment_account_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="option4">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii a. Draft(Draft no) <span class="color-red">*</span></label>
                <div id="mode_payment_draft_fr_grp" class="col-sm-6">
                  <input type="text" class="form-control mode_payment_draft" name="mode_payment_draft" id="mode_payment_draft"
					value="<?php echo $row['mode_payment_draft']; ?>" >
          <span class="mode_payment_draft_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="option5">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 ii a. Other (Please specify) <?php if($row['mode_of_payment']!='cash'){?><span class="color-red">* </span><?php }?> </label>
                <div id="mode_payment_other_fr_grp" class="col-sm-6">
                  <input type="text" class="form-control mode_payment_other" name="mode_payment_other" id="mode_payment_other"
					value="<?php echo $row['mode_payment_other']; ?>" >
            <span class="mode_payment_other_msg color-red"></span>
          </div>
              </div>
            </div>
            <!--prativa edit-->
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">1 iii. Proof <span class="color-red" id="star">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput" id="labproof1" data-validate="required">
                    <div class="fileinput-new thumbnail thumb-img" >
						<?php if (file_exists('uploads/entitlement_proof/labour/q1/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/labour/q1/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/labour/q1/'.$row['child_id'].'.jpg" width="150px" height="100px" /></a>';
						}else if (file_exists('uploads/entitlement_proof/labour/q1/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/labour/q1/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/labour/q1/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/labour/q1/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/labour/q1/'.$row['child_id'].'.png" width="150"  /></a>';
						}
						else{
						echo '<img src="uploads/entitlement_proof/cm_relief/images.png" height="90px">';
						}
					?>
					</div>
					<div class="pdf_view"></div>
                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image1" accept="image/*"  onchange="return ajaxFileUpload1(this)" id="image1">
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>
				  <div id="error_img1"></div>
				   <div id="attach-img1"></div>
                </div>
              </div>
            </div>
            <!--	end-->
          </div>
          <div class="col-sm-6" id ="package_no">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">1 i. If No, Specify the Reason <span class="color-red">*</span> </label>
              <div  id="package_no_fr_grp" class="col-sm-6">
                <input type="text" class="form-control" name="package_no" id="package_no" value="<?php echo $row['package_no']; ?>" autofocus="autofocus"  />
                  <span class="package_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">2. Has Rs.5000/- been Deposited in the District Child Welfare-Cum-Rehabilitation Account ? <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="deposited" class="form-control" data-validate="required" id="deposited">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['deposited']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['deposited']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['deposited']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>
          <div id="deposited_yes_val">
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 i. If Yes, Date of Deposit <span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="input-group date" id="datepicker1"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                    <input type="text" class="form-control" data-validate="required" name="deposited_yes" id="deposited_yes"
					   value="<?php echo $row['deposited_yes']; ?>" autofocus readonly="readonly">
                  </div>
				  <span id="error_msg2"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 ii. Details of Mode of Deposit in Account <span class="color-red">*</span> </label>
                <div class="col-sm-6">
                  <select name="mode_of_deposit" data-validate="required" class="form-control" id="mode_of_deposit">
                    <option value="account_no" <?php if($row['mode_of_deposit']=='account_no') echo 'selected'; ?>> Account Transfer</option>
                    <option value="sanction_no" <?php if($row['mode_of_deposit']=='sanction_no') echo 'selected'; ?>> Sanction order </option>
                    <option value="other_sanction" <?php if($row['mode_of_deposit']=='other_sanction') echo 'selected'; ?>> Others </option>
                  </select>
                </div>
              </div>
            </div>
			 <div class="col-sm-6" id="account_no">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 ii a. Account Transfer(Account No.) <span class="color-red">*</span> </label>
                <div id="mode_deposit_account_fr_grp" class="col-sm-6">
                  <input onkeypress="return isNumberKey(event)" type="text" maxlength="18" class="form-control mode_deposit_account" name="mode_deposit_account" id="mode_deposit_account"
					   value="<?php echo $row['mode_deposit_account']; ?>">
              <span class="mode_deposit_account_msg color-red"></span>
            </div>
              </div>
            </div>
            <div class="col-sm-6" id="sanction_no">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 ii a. Sanction Order No. <span class="color-red">*</span></label>
                <div id="mode_deposit_sanction_fr_grp" class="col-sm-6">
                  <input type="text" class="form-control mode_deposit_sanction " name="mode_deposit_sanction" id="mode_deposit_sanction"
					   value="<?php echo $row['mode_deposit_sanction']; ?>">
             <span class="mode_deposit_sanction_msg color-red"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6" id="other_sanction">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 ii a. Other (Please specify) <span class="color-red">*</span></label>
                <div id="mode_deposit_other_fr_grp" class="col-sm-6">
                  <input type="text" class="form-control mode_deposit_other" name="mode_deposit_other" id="mode_deposit_other"
					   value="<?php echo $row['mode_deposit_other']; ?>">
              <span class="mode_deposit_other_msg color-red"></span>
                </div>
              </div>
            </div>
            <!--prativa edit-->
            <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">2 iii. Proof <span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="thumb-img fileinput-new thumbnail ">

					<?php if (file_exists('uploads/entitlement_proof/labour/q2/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/labour/q2/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/labour/q2/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if (file_exists('uploads/entitlement_proof/labour/q2/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/labour/q2/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						}else if (file_exists('uploads/entitlement_proof/labour/q2/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/labour/q2/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/labour/q2/'.$row['child_id'].'.png" width="150" /></a>';
						}
						else{
							echo '<img src="uploads/entitlement_proof/cm_relief/images.png" height="90px">';
							
						}
					?>
					</div>
					<div class="pdf_viewq2"></div>
                    <div class="thumb-img1 fileinput-preview fileinput-exists thumbnail " ></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image2" id="image2" accept="image/*"  onchange="return ajaxFileUpload2(this)">
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>
				  <div id="error_img2"></div>
				   <div id="attach-img2"></div>
                </div>
              </div>
            </div>
            <!--end-->
          </div>
          <div class="col-sm-6" id="deposited_no">
           <div class="form-group">
            <label for="field-1" class="col-sm-6 control-label">2 i. If No, Specify the Reason <span class="color-red">*</span> </label>
            
              <div id="deposited_no_fr_grp" class="col-sm-6">
                <input type="text"  class="form-control  deposited_no" name="deposited_no" id="hl3" value="<?php echo $row['deposited_no']; ?>" autofocus="autofocus"  />
                <span class="deposited_no_msg color-red"></span>
              </div>
            </div>
          </div>
        </div>
		<!-----------------------3rd question---------------->
		 <div class="row">
          <div class="panel-title ptitle"  > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3 a. Whether the Rescued Child benefited from the Rehabilitation Fund of Rs.20,000 from employer?
			  <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="interest_of_rehabilitation" class="form-control" data-validate="required" id="interest_of_rehabilitation">
                  <option value="">Select</option>
                  <option value="Yes" <?php if($row['interest_of_rehabilitation']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php if($row['interest_of_rehabilitation']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php if($row['interest_of_rehabilitation']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>

            <div id="interest_yes" >
             <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">3 a.i. Proof<span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail thumb-img"  >
					<?php if (file_exists('uploads/entitlement_proof/labour/q3/' .$row['child_id'] . '.jpg')) {
						echo '<a href="uploads/entitlement_proof/labour/q3/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/labour/q3/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						}else if(file_exists('uploads/entitlement_proof/labour/q3/' .$row['child_id'] . '.pdf')){
						echo '<a href="uploads/entitlement_proof/labour/q3/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span clas="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						} else if(file_exists('uploads/entitlement_proof/labour/q3/' .$row['child_id'] . '.png')){
						echo '<a href="uploads/entitlement_proof/labour/q3/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/labour/q3/'.$row['child_id'].'.png" width="150"/></a>';
						}
						else{
							echo '<img src="uploads/entitlement_proof/cm_relief/images.png" height="90px">';
							
						}
					?>
					</div>
					<div class="pdf_viewq3"></div>
                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img1"></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image3" id="image3" accept="image/*" onchange="return ajaxFileUpload3(this)" >
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>
				  <div id="error_img3"></div>
				  <div id="attach-img3"></div>

                </div>
              </div>
            </div>
            </div>

            <div class="col-sm-6" id="interest_no">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">3 a.i. If No, Specify the Reason <span class="color-red">*</span> </label>
                <div id="interest_of_rehabilitation_no_fr_grp"  class="col-sm-6">

                    <input type="text" class="form-control interest_of_rehabilitation_no" name="interest_of_rehabilitation_no" id="interest_of_rehabilitation_no"
					   value="<?php echo $row['interest_of_rehabilitation_no']; ?>" >
                  <span class="interest_of_rehabilitation_no_msg color-red"></span>
                </div>
              </div>
            </div>
			</div>

		<!-------------------end----------------------------->
		<!-------------------3b ------------------------------>
		<!--   <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-6 control-label">3 b. Whether the Rescued Child benefited from the Rehabilitation Fund of Rs.5,000?
			  <span class="color-red">*</span></label>
              <div class="col-sm-6">
                <select name="interest_of_rehabilitation_5k" class="form-control" data-validate="required" id="interest_of_rehabilitation_5k">
                  <option value="">Select</option>
                  <option value="Yes" <?php //if($row['interest_of_rehabilitation_5k']=='Yes') echo 'selected'; ?>>Yes</option>
                  <option value="No" <?php //if($row['interest_of_rehabilitation_5k']=='No') echo 'selected'; ?>>No</option>
                  <option value="Not Applicable" <?php //if($row['interest_of_rehabilitation_5k']=='Not Applicable') echo 'selected'; ?>>Not Applicable</option>
                </select>
              </div>
            </div>
          </div>

            <div id="interest_of_rehabilitation_5k_yes" >
             <div class="col-sm-6" >
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">3 b.i. Proof<span class="color-red">*</span></label>
                <div class="col-sm-6">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail thumb-img"  >
					<?php //if (file_exists('uploads/entitlement_proof/labour/q3_b/' .$row['child_id'] . '.jpg')) {
						//echo '<a href="uploads/entitlement_proof/labour/q3_b/'.$row['child_id'].'.jpg"><img src="uploads/entitlement_proof/labour/q3_b/'.$row['child_id'].'.jpg" width="150" height="100" /></a>';
						//}else if(file_exists('uploads/entitlement_proof/labour/q3_b/' .$row['child_id'] . '.pdf')){
						//echo '<a href="uploads/entitlement_proof/labour/q3_b/'.$row['child_id'].'.pdf"><img src="assets/images/pdf.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						//} else if(file_exists('uploads/entitlement_proof/labour/q3_b/' .$row['child_id'] . '.png')){
						//echo '<a href="uploads/entitlement_proof/labour/q3_b/'.$row['child_id'].'.png"><img src="uploads/entitlement_proof/labour/q3_b/'.$row['child_id'].'.png"/><span class="color-red">&nbsp;&nbsp;&nbsp;PDF File</span></a>';
						//}
						//else{
							//-echo '';
						//}
					?>
					</div>
                    <div class="fileinput-preview fileinput-exists thumbnail thumb-img1" ></div>
                    <div> <span class="btn btn-white btn-file"> <span class="fileinput-new">Attach proof</span> <span class="fileinput-exists">Change</span>
                      <input type="file" name="image4" id="image4" accept="image/*" onchange="return ajaxFileUpload4(this)" >
                      </span> <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                  </div>
				  <div id="error_img4"></div>
				  <div id="attach-img4"></div>

                </div>
              </div>
            </div>
            </div>

            <div class="col-sm-6" id="interest_of_rehabilitation_5k_no">
              <div class="form-group">
                <label for="field-1" class="col-sm-6 control-label">3 b.i. If No, Specify the Reason </label>
                <div id="rehabilitation_5k_no_fr_grp" class="col-sm-6">

                    <input type="text" class="form-control rehabilitation_5k_no" name="rehabilitation_5k_no" id="rehabilitation_5k_no"
					   value="<?php// echo $row['rehabilitation_5k_no']; ?>" >
                <span class="rehabilitation_5k_no_msg color-red"></span>
                </div>
              </div>
            </div>
			</div>-->

		<!-------------------end----------------------------->
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
           <?php if($roles_id==2){?> <button type="submit" class="btn btn-info" id="submit-button"> Update </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <?php }?>
            <span id="preloader-form"></span> </div>
        </div>
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

			if($('#interest_of_rehabilitation').val() == 'Yes') {
            $('#interest_yes').show();
			$('#interest_no').hide();

       		 } else if ($('#interest_of_rehabilitation').val() == 'No'){

			$('#interest_no').show();
			 $('#interest_yes').hide();

       		 }

			 else {

			$('#interest_no').hide();
			 $('#interest_yes').hide();

       		 }

			/*if($('#interest_of_rehabilitation_5k').val() == 'Yes') {
            $('#interest_of_rehabilitation_5k_yes').show();
			$('#interest_of_rehabilitation_5k_no').hide();

       		 } else if ($('#interest_of_rehabilitation_5k').val() == 'No'){

			$('#interest_of_rehabilitation_5k_no').show();
			 $('#interest_of_rehabilitation_5k_yes').hide();

       		 }

			 else {

			$('#interest_of_rehabilitation_5k_no').hide();
			 $('#interest_of_rehabilitation_5k_yes').hide();

       		 }*/

			

			if($('#mode_of_payment').val() == 'cheque'){
				showhideoption();
				$('#option1').show();
				$('#star').show();
				
       		 } else if($('#mode_of_payment').val() == 'cash'){
				showhideoption();
				$('#option2').show();
				$('#star').hide();
       		 } else if($('#mode_of_payment').val() == 'Account'){
				showhideoption();
				$('#option3').show();
				$('#star').show();
       		 } else if($('#mode_of_payment').val() == 'Draft'){
				showhideoption();
				$('#star').show();
				$('#option4').show();
       		 } else if($('#mode_of_payment').val() == 'Others'){
				showhideoption();
				$('#option5').show();
				$('#star').show();
       		 }

			  if($('#mode_of_deposit ').val() == 'account_no'){
				showhide();
				$('#account_no').show();
       		 } else if($('#mode_of_deposit ').val() == 'sanction_no'){
				showhide();
				$('#sanction_no').show();
       		 } else if($('#mode_of_deposit ').val() == 'other_sanction'){
				showhide();
				$('#other_sanction').show();
       		 }

			if($('#package').val() == 'Yes') {
            $('#package_yes').show();
			$('#package_no').hide();

       		 }
			 else if ($('#package').val() == 'No'){
            $('#package_yes').hide();
			$('#package_no').show();

       		 }

			  else {
            $('#package_yes').hide();
			$('#package_no').hide();

       		 }

			if($('#deposited').val() == 'Yes') {
            $('#deposited_yes_val').show();
			$('#deposited_no').hide();

       		 } else if ($('#deposited').val() == 'No'){
            $('#deposited_yes_val').hide();
			$('#deposited_no').show();

       		 }
			 else {

			$('#deposited_yes_val').hide();
			 $('#deposited_no').hide();

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

	//prativa package date
		var copmarePkgDate = function(dor,dob) {
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
		//end
		//prativa des date
		var copmareDesDate = function(dor,dob) {
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
		//end
    function validate_project_add(formData, jqForm, options) {

        if(jqForm[0].package.value =="Yes")
        {
        	if(jqForm[0].package_yes.value.length==0)
        	{
				return false;
            }
            if(jqForm[0].mode_of_payment.value.length==0)
            {
               return false;}
      //mode_payment_cheque
      if(jqForm[0].mode_of_payment.value =="cheque")
        {
        if(jqForm[0].mode_payment_cheque.value.length==0 || jqForm[0].mode_payment_cheque.value.length>40)
        {
          flag=1;
          $("#mode_payment_cheque_fr_grp").addClass("validate-has-error");
          $(".mode_payment_cheque").focus();
          $(".mode_payment_cheque_msg").html("This field should be less than 40 characters and should not be empty");
         return false;

        }
        else{
          $("#mode_payment_cheque_fr_grp").removeClass("validate-has-error");
         $(".mode_payment_cheque_msg").html("");
        }

      }
      //mode_payment_cash
      if(jqForm[0].mode_of_payment.value =="cash")
        {
        if(jqForm[0].mode_payment_cash.value.length==0 || jqForm[0].mode_payment_cash.value.length>40)
        {
          flag=1;
          $("#mode_payment_cash_fr_grp").addClass("validate-has-error");
          $(".mode_payment_cash").focus();
          $(".mode_payment_cash_msg").html("This field should be less than 40 characters and should not be empty");
         return false;

        }
        else{
          $("#mode_payment_cash_fr_grp").removeClass("validate-has-error");
         $(".mode_payment_cash_msg").html("");
        }

      }
      //mode_payment_account/
      if(jqForm[0].mode_of_payment.value =="Account")
        {
        if(jqForm[0].mode_payment_account.value.length==0 || jqForm[0].mode_payment_account.value.length>18 )
        {
          flag=1;
          $("#mode_payment_account_fr_grp").addClass("validate-has-error");
          $(".mode_payment_account").focus();
          $(".mode_payment_account_msg").html("This field should be less than or equal to 18 numeric digits and should not be empty");
         return false;

        }
        else{
          $("#mode_payment_account_fr_grp").removeClass("validate-has-error");
         $(".mode_payment_account_msg").html("");
        }

      }
      //mode_payment_draft
      if(jqForm[0].mode_of_payment.value =="Draft")
        {
        if(jqForm[0].mode_payment_draft.value.length==0 || jqForm[0].mode_payment_draft.value.length>40)
        {
          flag=1;
          $("#mode_payment_draft_fr_grp").addClass("validate-has-error");
          $(".mode_payment_draft").focus();
          $(".mode_payment_draft_msg").html("This field should be less than 40 characters and should not be empty");
         return false;

        }
        else{
          $("#mode_payment_draft_fr_grp").removeClass("validate-has-error");
         $(".mode_payment_draft_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].mode_payment_draft.value)){
          flag=1;
               $("#mode_payment_draft_fr_grp").addClass("validate-has-error");
               $(".mode_payment_draft_other").focus();
               $(".mode_payment_draft_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#mode_payment_draft_fr_grp").removeClass("validate-has-error");
          $(".mode_payment_draft_msg").html("");
        }
      }
      ///mode_payment_other
      if(jqForm[0].mode_of_payment.value =="Others")
        {
        if(jqForm[0].mode_payment_other.value.length==0 || jqForm[0].mode_payment_other.value.length>40)
        {
          flag=1;
          $("#mode_payment_other_fr_grp").addClass("validate-has-error");
          $(".mode_payment_other").focus();
          $(".mode_payment_other_msg").html("This field should be less than 40 characters and should not be empty");
         return false;

        }
        else{
          $("#mode_payment_other_fr_grp").removeClass("validate-has-error");
         $(".mode_payment_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].mode_payment_other.value)){
          flag=1;
               $("#mode_payment_other_fr_grp").addClass("validate-has-error");
               $(".mode_payment_other").focus();
               $(".mode_payment_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#mode_payment_other_fr_grp").removeClass("validate-has-error");
          $(".mode_payment_other_msg").html("");
        }
      }
        }
      //package_no//
      if(jqForm[0].package.value =="No")
        {
        if(jqForm[0].package_no.value.length==0 || jqForm[0].package_no.value.length>40)
        {
          flag=1;
          $("#package_no_fr_grp").addClass("validate-has-error");
          $(".package_no").focus();
          $(".package_no_msg").html("This field should be less than 40 characters and should not be empty");
         return false;

        }
        else{
          $("#package_no_fr_grp").removeClass("validate-has-error");
         $(".package_no_msg").html("");
        }
        
        if(/^\s+$/.test(jqForm[0].package_no.value)){
          flag=1;
               $("#package_no_fr_grp").addClass("validate-has-error");
               $(".package_no").focus();
               $(".package_no_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#package_no_fr_grp").removeClass("validate-has-error");
          $(".package_no_msg").html("");
        }
      }

	if (!jqForm[0].package.value)
        {
            return false;
        }else{
			var packg = (jqForm[0].package.value);
			if (packg == 'Yes'){
			<?php if ((file_exists('uploads/entitlement_proof/labour/q1/' .$row['child_id'] . '.jpg')) ||
			(file_exists('uploads/entitlement_proof/labour/q1/' .$row['child_id'] . '.png')) ||
			(file_exists('uploads/entitlement_proof/labour/q1/' .$row['child_id'] . '.pdf'))) {  ?>
				//return true;
			<?php } else {?>
				if( document.getElementById("image1").files.length == 0 ){
					if(jqForm[0].mode_of_payment.value !="cash")
					{
				     $("#attach-img1").html("Attachment not available");
				     return false;
					}
					else{
						 $("#attach-img1").html("");
						 
						 
						}
				
				}else{
					$("#attach-img1").html("");
				}
				<?php } ?>

			}
		}

		var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = jqForm[0].image1.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error_img1").html("File format error...Please provide a jpg/jpeg/png or pdf format");
               // upload_field.form.reset();
                return false;
            }else{
					$("#error_img1").html("");
				}
			//2nd
			var filename2 = jqForm[0].image2.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename2.search(re_text) == -1 && filename2 !='')
            {
				$("#error_img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
               // upload_field.form.reset();
                return false;
            }else{
					$("#error_img2").html("");
				}
			//3rd
			var filename3 = jqForm[0].image3.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename3.search(re_text) == -1 && filename3 !='')
            {
				$("#error_img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
               // upload_field.form.reset();
                return false;
            }else{
					$("#error_img3").html("");
				}

			//3rd
			/*var filename4 = jqForm[0].image4.value;
            //var imagename = filename.replace("C:\\fakepath\\","");
            if (filename4.search(re_text) == -1 && filename4 !='')
            {
				$("#error_img4").html("File format error...Please provide a jpg/jpeg/png or pdf format");
               // upload_field.form.reset();
                return false;
            }else{
					$("#error_img4").html("");
				}*/
     if(jqForm[0].deposited.value=="Yes")
     {
    	 if(jqForm[0].deposited_yes.value.length ==0)
    	 {
        	 return false;
          }
    	 if(jqForm[0].mode_of_deposit.value.length==0)
         {
            return false;

          }
        //mode_deposit_account
        if(jqForm[0].mode_of_deposit.value =="account_no")
          {
          if(jqForm[0].mode_deposit_account.value.length==0 || jqForm[0].mode_deposit_account.value.length>20)
          {
            flag=1;
            $("#mode_deposit_account_fr_grp").addClass("validate-has-error");
            $(".mode_deposit_account").focus();
            $(".mode_deposit_account_msg").html("Account no should be less than or equal to 18 numeric digits and should not be empty");
           return false;

          }
          else{
            $("#mode_deposit_account_fr_grp").removeClass("validate-has-error");
           $(".mode_deposit_account_msg").html("");
          }

        }
        //mode_deposit_sanction
        if(jqForm[0].mode_of_deposit.value =="sanction_no")
          {
          if(jqForm[0].mode_deposit_sanction.value.length==0 || jqForm[0].mode_deposit_sanction.value.length>20)
          {
            flag=1;
            $("#mode_deposit_sanction_fr_grp").addClass("validate-has-error");
            $(".mode_deposit_sanction").focus();
            $(".mode_deposit_sanction_msg").html("Sanction no should be less than 20 characters and should be empty");
           return false;

          }
          else{
            $("#mode_deposit_sanction_fr_grp").removeClass("validate-has-error");
           $(".mode_deposit_sanction_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].mode_deposit_sanction.value)){
            flag=1;
                 $("#mode_deposit_sanction_fr_grp").addClass("validate-has-error");
                 $(".mode_deposit_sanction").focus();
                 $(".mode_deposit_sanction_msg").html("No space allowed");
                return false;
            }
            else{
             $("#mode_deposit_sanction_fr_grp").removeClass("validate-has-error");
            $(".mode_deposit_sanction_msg").html("");
          }
        }
        ///mode_deposit_other
        if(jqForm[0].mode_of_deposit.value =="other_sanction")
          {
          if(jqForm[0].mode_deposit_other.value.length==0 || jqForm[0].mode_deposit_other.value.length>40)
          {
            flag=1;
            $("#mode_deposit_other_fr_grp").addClass("validate-has-error");
            $(".mode_deposit_other").focus();
            $(".mode_deposit_other_msg").html("Other mode of deposite  should be less than 40 characters  and should not be empty");
           return false;

          }
          else{
            $("#mode_deposit_other_fr_grp").removeClass("validate-has-error");
           $(".mode_deposit_other_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].mode_deposit_other.value)){
            flag=1;
                 $("#mode_deposit_other_fr_grp").addClass("validate-has-error");
                 $(".mode_deposit_other").focus();
                 $(".mode_deposit_other_msg").html("Initially No space allowed");
                return false;
            }
            else{
             $("#mode_deposit_other_fr_grp").removeClass("validate-has-error");
            $(".mode_deposit_other_msg").html("");
          }
        }
     }
      //deposited_no
        if(jqForm[0].deposited.value =="No")
          {
          if(jqForm[0].deposited_no.value.length==0 || jqForm[0].deposited_no.value.length>40)
          {
            flag=1;
            $("#deposited_no_fr_grp").addClass("validate-has-error");
            $(".deposited_no").focus();
            $(".deposited_no_msg").html("Reason to not depositing amount should be less than 40 characters and should not be empty");
           return false;

          }
          else{
            $("#deposited_no_fr_grp").removeClass("validate-has-error");
           $(".deposited_no_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].deposited_no.value)){
            flag=1;
                 $("#deposited_no_fr_grp").addClass("validate-has-error");
                 $(".deposited_no").focus();
                 $(".deposited_no_msg").html("No space allowed");
                return false;
            }
            else{
             $("#deposited_no_fr_grp").removeClass("validate-has-error");
            $(".deposited_no_msg").html("");
          }
        }
		if (!jqForm[0].deposited.value)
        {
            return false;
        }
		//attach ment
		var des = (jqForm[0].deposited.value);
		if (des == 'Yes'){
		<?php if ((file_exists('uploads/entitlement_proof/labour/q2/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/labour/q2/' .$row['child_id'] . '.png')) ||
		(file_exists('uploads/entitlement_proof/labour/q2/' .$row['child_id'] . '.pdf'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image2").files.length == 0 ){
   			 $("#attach-img2").html("Attachment not available");
			return false;
			}else{
				$("#attach-img2").html("");
			}
			<?php } ?>
		}
		if (!jqForm[0].interest_of_rehabilitation.value)
        {
			return false;
        }
        
        if(jqForm[0].interest_of_rehabilitation.value =="No")
          {
          if(jqForm[0].interest_of_rehabilitation_no.value.length==0 || jqForm[0].interest_of_rehabilitation_no.value.length>40)
          {
            flag=1;
            $("#interest_of_rehabilitation_no_fr_grp").addClass("validate-has-error");
            $(".interest_of_rehabilitation_no").focus();
            $(".interest_of_rehabilitation_no_msg").html("This field should be less than 40 characters and should not be empty");
           return false;

          }
          else{
            $("#interest_of_rehabilitation_no_fr_grp").removeClass("validate-has-error");
           $(".interest_of_rehabilitation_no_msg").html("");
          }
          if(/^\s+$/.test(jqForm[0].interest_of_rehabilitation_no.value)){
            flag=1;
                 $("#interest_of_rehabilitation_no_fr_grp").addClass("validate-has-error");
                 $(".interest_of_rehabilitation_no").focus();
                 $(".interest_of_rehabilitation_no_msg").html("No space allowed");
                return false;
            }
            else{
             $("#interest_of_rehabilitation_no_fr_grp").removeClass("validate-has-error");
            $(".interest_of_rehabilitation_no_msg").html("");
          }
        }
		var intr = (jqForm[0].interest_of_rehabilitation.value);
	if (intr == 'Yes'){
	<?php if ((file_exists('uploads/entitlement_proof/labour/q3/' .$row['child_id'] . '.jpg')) ||
		(file_exists('uploads/entitlement_proof/labour/q3/' .$row['child_id'] . '.png')) ||
		(file_exists('uploads/entitlement_proof/labour/q3/' .$row['child_id'] . '.pdf'))) {  ?>
			//return true;
		<?php } else {?>
			if( document.getElementById("image3").files.length == 0 ){
   			 $("#attach-img3").html("Attachment not available");
			return false;
			}else{
				$("#attach-img3").html("");
			}
			<?php } ?>
		}

	/*var intr5k = (jqForm[0].interest_of_rehabilitation_5k.value);
	if (intr5k == 'Yes'){
	
		}*/
    //rehabilitation_5k_no
   /* if(jqForm[0].interest_of_rehabilitation_5k.value =="No")
      {
      if(jqForm[0].rehabilitation_5k_no.value.length>40)
      {
        flag=1;
        $("#rehabilitation_5k_no_fr_grp").addClass("validate-has-error");
        $(".rehabilitation_5k_no").focus();
        $(".rehabilitation_5k_no_msg").html("Reason to not benefitted from fund of Rs 5,000 should be less than 40 characters");
       return false;

      }
      else{
        $("#rehabilitation_5k_nofr_grp").removeClass("validate-has-error");
       $(".rehabilitation_5k_no_msg").html("");
      }
      if(/^\s+$/.test(jqForm[0].rehabilitation_5k_no.value)){
        flag=1;
             $("#rehabilitation_5k_nofr_grp").addClass("validate-has-error");
             $(".rehabilitation_5k_no").focus();
             $(".rehabilitation_5k_no_msg").html("No space allowed");
            return false;
        }
        else{
         $("#rehabilitation_5k_no_fr_grp").removeClass("validate-has-error");
        $(".rehabilitation_5k_no_msg").html("");
      }
    }*/
		var package_date =  (jqForm[0].package_yes.value);

		var deposite_date = (jqForm[0].deposited_yes.value);
		var date_of_birth = "<?php echo $dob;?>";
		var rescued_date = "<?php echo $date_rescued;?>";

		if(package_date != ''){
			var diffPackageDate = copmarePkgDate(package_date,rescued_date);
			if(diffPackageDate < 0){
			//alert("date of package provided should be after date of birth");
			$("#error_msg1").html("Package provided date should be after date of rescue");
			document.getElementById("package_yes").focus();
			$("#datepicker").addClass("newClass");
			return false;
			}else{
				$("#error_msg1").html(" ");
				$("#datepicker").removeClass("newClass");
			}
		}

		if(deposite_date != ''){
		var diffDesDate = copmareDesDate(deposite_date,rescued_date);
			if(diffDesDate < 0 ){
			$("#error_msg2").html("Deposite date should be after date of rescue");
			document.getElementById("deposited_yes").focus();
			$("#datepicker1").addClass("newClass");
			return false;
			}else{
				$("#error_msg2").html(" ");
				$("#datepicker1").removeClass("newClass");
			}
		}

 $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('html, body').animate({ scrollTop: 0 }, 0);
		$('#preloader-form').html('');

		$('#msgModal_act').modal('show');

        document.getElementById("submit-button").disabled = false;
    }
	$(function() {

   		 $('#package').change(function(){
        	if($('#package').val() == 'Yes') {
            $('#package_yes').show();
			$('#package_no').hide();

       		 }  else if ($('#package').val() == 'No'){
            $('#package_yes').hide();
			$('#package_no').show();

       		 }

			  else {
            $('#package_yes').hide();
			$('#package_no').hide();

       		 }
    	});
		});
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

		$(function() {

   		 $('#deposited').change(function(){
        	if($('#deposited').val() == 'Yes') {
            $('#deposited_yes_val').show();
			$('#deposited_no').hide();

       		 } else if ($('#deposited').val() == 'No'){
            $('#deposited_yes_val').hide();
			$('#deposited_no').show();

       		 }
			 else {

			$('#deposited_yes_val').hide();
			 $('#deposited_no').hide();

       		 }
    	});
		});

		$(function() {

   		 $('#interest_of_rehabilitation').change(function(){
        	if($('#interest_of_rehabilitation').val() == 'Yes') {
            $('#interest_yes').show();
			$('#interest_no').hide();

       		 } else if ($('#interest_of_rehabilitation').val() == 'No'){

			$('#interest_no').show();
			 $('#interest_yes').hide();

       		 }

			 else {

			$('#interest_no').hide();
			 $('#interest_yes').hide();

       		 }
    	});
		});

		/*$(function() {

   		 $('#interest_of_rehabilitation_5k').change(function(){
        	if($('#interest_of_rehabilitation_5k').val() == 'Yes') {
            $('#interest_of_rehabilitation_5k_yes').show();
			$('#interest_of_rehabilitation_5k_no').hide();

       		 } else if ($('#interest_of_rehabilitation_5k').val() == 'No'){

			$('#interest_of_rehabilitation_5k_no').show();
			 $('#interest_of_rehabilitation_5k_yes').hide();

       		 }

			 else {

			$('#interest_of_rehabilitation_5k_no').hide();
			 $('#interest_of_rehabilitation_5k_yes').hide();

       		 }
    	});
		});*/


		$(function() {

   		 $('#mode_of_payment').change(function(){

       		 if($('#mode_of_payment').val() == 'cheque'){
				showhideoption();
				$('#option1').show();
				$('#star').show();
				
       		 } else if($('#mode_of_payment').val() == 'cash'){
				showhideoption();
				$('#option2').show();
				$('#star').hide();
       		 } else if($('#mode_of_payment').val() == 'Account'){
				showhideoption();
				$('#option3').show();
				$('#star').show();
       		 } else if($('#mode_of_payment').val() == 'Draft'){
				showhideoption();
				$('#star').show();
				$('#option4').show();
       		 } else if($('#mode_of_payment').val() == 'Others'){
				showhideoption();
				$('#option5').show();
				$('#star').show();
       		 }
    	});
		});

function showhideoption(){

		<!--	if (ordertype=='Parents') {-->

		$('#option1').hide();
		$('#option2').hide();
		$('#option3').hide();
		$('#option4').hide();
		$('#option5').hide();

		}

		$(function() {

   		 $('#mode_of_deposit ').change(function(){

       		 if($('#mode_of_deposit ').val() == 'account_no'){
				showhide();
				$('#account_no').show();
       		 } else if($('#mode_of_deposit ').val() == 'sanction_no'){
				showhide();
				$('#sanction_no').show();
       		 } else if($('#mode_of_deposit ').val() == 'other_sanction'){
				showhide();
				$('#other_sanction').show();
       		 }
    	});
		});
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

function showhide(){

		<!--	if (ordertype=='Parents') {-->

		$('#account_no').hide();
		$('#sanction_no').hide();
		$('#other_sanction').hide();

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
            var filename = upload_field.value;
            var pdf_text=/\.pdf/i;
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
			function ajaxFileUpload2(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            var pdf_text=/\.pdf/i;
				if (filename.search(re_text) == -1 && filename !='')
				{
					$("#error_img2").html("File format error...Please provide a jpg/jpeg/png or pdf format");
					//upload_field.form.reset();
					return false;
				}else{
					if(filename.search(pdf_text)!= -1)
	            	{
	                	
	            		$(".pdf_viewq2").html('<img src="assets/images/pdf.png"/>');
	            		
	                }
	            	else{
	            		$(".pdf_viewq2").html("");
	                	}
					$("#error_img2").html("");
				}
			}
			function ajaxFileUpload3(upload_field)
        {
            var re_text = /\.jpg|\.gif|\.jpeg|\.pdf|\.png/i;
            var filename = upload_field.value;
            var pdf_text=/\.pdf/i;
            if (filename.search(re_text) == -1 && filename !='')
            {
				$("#error_img3").html("File format error...Please provide a jpg/jpeg/png or pdf format");
                //upload_field.reset();
                return false;
            }else{
            	if(filename.search(pdf_text)!= -1)
            	{
                	
            		$(".pdf_viewq3").html('<img src="assets/images/pdf.png"/>');
            		
                }
            	else{
            		$(".pdf_viewq3").html("");
            	}
					$("#error_img3").html("");
				}
			}

			
</script>
