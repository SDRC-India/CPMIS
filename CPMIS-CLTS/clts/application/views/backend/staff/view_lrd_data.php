 <?php
		 		foreach($lrd_data as $lrdeptrow):
		 		
		  		?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="panel-title left_float" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
           
          Child Basic Information - <b>Child ID:</b> <?php echo $lrdeptrow['child_id']; ?> (<?php echo $lrdeptrow['child_name']; ?>) </div>
       
        <div class="right_float">
          <div class="print_button">
            <button type="submit" class="btn btn-info" id='prnt1'> <i class="entypo-print"></i>Print</button>&nbsp;
            <button type="button" class="btn btn-info pull-right" id="cancel-button"> Back to List</button>
          </div>
        </div>
        <div style="clear:both;"></div>
      </div>
    
    <div class="panel-body">
      <div id="printable">
        
          <div class="print_logo"> <img src="assets/images/bihar_logo_red.jpg" alt="Bihar Government" align="left" width="150"> <img src="assets/images/unicef_logo.jpg" alt="Unicef" align="right" width="120" > </div>
          <!-- Table for Basic Information Starts -->
          <!-- Table for Rehabilitation Starts -->
          <table class="table table-bordered table-striped">
          
            <tbody>
             <tr>
                <td colspan="4"><img src="<?php if(file_exists($upload_path.$lrdeptrow['child_id'].'.jpg')) { echo $upload_path.$lrdeptrow['child_id'].'.jpg'; }else{ echo $default;} ?>" alt="..." class="child_img"></td>
              </tr>
              <tr>
                <th colspan="4" class="bg-navy"><h5 style="float:left;font-weight:bold;color: #f3f3f3;font-size: 16px;">Labour Resource Department</h5></span></th>
              </tr>
              <tr>
                <td class="t-title">1. Has Package of Rs.<?php if($lrdeptrow['package_type']==0){ echo '1800'; } else if($lrdeptrow['package_type']==1){echo '3000';} ?> been Provided ?</td>
                <td class="t-description"><?php echo $lrdeptrow['package'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if ($lrdeptrow['package'] == "No"){?>
              <tr>
                <td class="t-title">1. i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['package_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php } ?>
			  <?php if ($lrdeptrow['package'] == "Yes"){?>
              <tr>
                <td class="t-title">1. i. If yes, date of Package provided</td>
                <td class="t-description"><?php echo $lrdeptrow['package_yes'];?></td>
                <td class="t-title">ii. Details of Mode of Payment</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_of_payment'];?></td>
              </tr>
              <tr>
                <?php if($lrdeptrow['mode_of_payment']=='cheque'){?>
                <td class="t-title">ii. a. Cheque (Cheque No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_cheque'];?></td>
                <td class="t-title">iii.Proof</td>
               	
					<?php } ?>
					<?php if($lrdeptrow['mode_of_payment']=='cash'){?>
                <td class="t-title">ii. a. Cash </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_cash'];?></td>
                <td class="t-title">iii.Proof</td>
                
				 
					<?php } ?>
						<?php if($lrdeptrow['mode_of_payment']=='Account'){?>
                <td class="t-title">ii. a. Account Transfer(Account no) </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_account'];?></td>
                <td class="t-title">iii.Proof</td>
               
					
					<?php } ?>
					<?php if($lrdeptrow['mode_of_payment']=='Draft'){?>
                <td class="t-title">ii. a.Draft(Draft no) </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_draft'];?></td>
                <td class="t-title">iii.Proof</td>
                
					
					<?php } ?>
					<?php if($lrdeptrow['mode_of_payment']=='Others'){?>
                <td class="t-title">ii. a. Other (Please specify) </td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_other'];?></td>
                <td class="t-title">iii.Proof</td>
                
					
					<?php } ?>
					<td class="t-description">
				 <?php if (file_exists('uploads/entitlement_proof/labour/q1/'.$lrdeptrow['child_id'].'.jpg')) {
						echo "<a href='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".jpg' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".jpg'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q1/'.$lrdeptrow['child_id'].'.pdf')){
							echo  "<a href='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".pdf' target='_blank'><img width='100px' src='assets/images/pdf.png'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q1/'.$lrdeptrow['child_id'].'.png')){
							echo  "<a href='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".png' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q1/".$lrdeptrow['child_id'].".png'  /></a>";
						}else{
						echo 'No Proof Attached';
						}

					?></td>
              </tr>
			  <?php } ?>

              <tr>
                <td class="t-title">2. Has Rs.5000/- been Deposited in the District Child Welfare-Cum-Rehabilitation Account ?</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if ($lrdeptrow['deposited'] == "No"){ ?>
              <tr>
                <td class="t-title">2. i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php } ?>
			  <?php if ($lrdeptrow['deposited'] == "Yes"){ ?>
              <tr>
                <td class="t-title">2 i. If Yes, Date of Deposit</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited_yes'];?></td>
                <td class="t-title">ii. Detail of mode of deposit in account</td>
                <td class="t-description"><?php 
                if($lrdeptrow['mode_of_deposit']=='account_no')
                {
                echo "Account Transfer";
                }
                else if($lrdeptrow['mode_of_deposit']=='sanction_no')
                {
                	echo "Sanction order";
                }
                else{
                	echo "Others";
                }
                ?></td>
              </tr>
              <tr>
			  <?php if ( $lrdeptrow['mode_of_deposit'] == 'account_no'){ ?>
                <td class="t-title">ii. a. Account Transfer (Account No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_account'];?></td>
				<?php  }  ?>
				 <?php if ( $lrdeptrow['mode_of_deposit'] == 'sanction_no'){ ?>
                <td class="t-title">ii. a.  Sanction Order No.</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_sanction'];?></td>
				<?php  }  ?>
				 <?php if ( $lrdeptrow['mode_of_deposit'] == 'other_sanction'){ ?>
                <td class="t-title">ii. a.Other  (Account No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_other'];?></td>
				<?php  }  ?>
                <td class="t-title">iii. Attach Proof</td>
                <td class="t-description">
				<?php if (file_exists('uploads/entitlement_proof/labour/q2/'.$lrdeptrow['child_id'].'.jpg')) {
						echo "<a href='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".jpg' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".jpg'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q2/'.$lrdeptrow['child_id'].'.pdf')){
							echo  "<a href='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".pdf' target='_blank'><img width='100px' src='assets/images/pdf.png'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q2/'.$lrdeptrow['child_id'].'.png')){
							echo  "<a href='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".png' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q2/".$lrdeptrow['child_id'].".png'  /></a>";
						}else{
						echo 'No Proof Attached';
						}

					?>
				</td>
              </tr>
			   <?php } ?>
              <tr>
                <td class="t-title">3 a. Whether the Rescued Child benefited from the Rehabilitation Fund of Rs.20,000 from employer?</td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <?php if ($lrdeptrow['interest_of_rehabilitation'] == "No"){ ?>
              <tr>
                <td class="t-title">3.a.i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			   <?php } ?>
			    <?php if ($lrdeptrow['interest_of_rehabilitation'] == "Yes"){ ?>
              <tr>
                <td class="t-title">3.a.i. Attach Proof</td>
                <td class="t-description">
				<?php if (file_exists('uploads/entitlement_proof/labour/q3/'.$lrdeptrow['child_id'].'.jpg')) {
						echo "<a href='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".jpg' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".jpg'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q3/'.$lrdeptrow['child_id'].'.pdf')){
							echo  "<a href='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".pdf' target='_blank'><img width='100px' src='assets/images/pdf.png'  /></a>";
						}else if (file_exists('uploads/entitlement_proof/labour/q3/'.$lrdeptrow['child_id'].'.png')){
							echo  "<a href='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".png' target='_blank'><img width='100px' src='uploads/entitlement_proof/labour/q3/".$lrdeptrow['child_id'].".png'  /></a>";
						}else{
						echo 'No Proof Attached';
						}

					?>
				</td>
                <td class="t-title" colspan="2"></td>
              </tr>

			   <?php } ?>
			   
			   
			   
			   </tbody>
			   </table>
			 
         
        </div>
      </div>
      <div id="editor"></div>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <div class="form-group print_button">
            <button type="button" class="btn btn-info" id="cancel-button1"> Cancel</button>
        <button type="submit" class="btn btn-info btn-login" id='prnt'> <i class="entypo-print"></i> Print </button>
      </div>
      </div>
       <div class="col-md-4"></div>
      </div>
      <div class="left_float"> </div>
      <div style="clear:both"></div>
    
  </div>
  </div>
</div>
 <?php endforeach;?>
              <!-- Labour Resource Department Section Starts -->
<script>
    $(document).ready(function () {

        

		 $('#prnt').on('click', function() {



	           $.print("#printable");

				});

		  $('#prnt1').on('click', function() {



	           $.print("#printable");

				});
    });
	
    

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

	$(function() {
		  $( "#cancel-button1" ).click(function(){ window.history.back() });
		 });



</script>
