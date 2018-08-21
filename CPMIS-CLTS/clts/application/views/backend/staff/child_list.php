<!--pabitra strat-->

<div class="row">
  <div class="col-md-12">
     <!-- <div class="panel-heading">
        <div class="left_float">
          <div class="print_button">
            <button type="submit" class="btn btn-info" id='prntblank_details'> <i class="entypo-print"></i>Print Child Registration Form</button>
          </div>
        </div>
      </div>-->
    <div class="panel-body" style="display:none;"  ><!--style="display:none;"--> 
      <div id="printable">
        <div class="tarea">
          <div class="print_logo" style="margin-bottom:12px;height:130px;"> <img src="assets/images/bihar_logo_red_new.jpg" alt="Bihar Government" align="left" width="150"> <img src="assets/images/unicef_logo.jpg" alt="Unicef" align="right" width="100" height="100" > </div>
          <!-- Table for Basic Information Starts -->
          <table class="table table-bordered table-striped" >
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Rescued Child Basic Information</h3></th>
              </tr>
              <tr>
                <td colspan="4"><img src="<?php if(file_exists($upload_path.$row['child_id'].'.jpg')) { echo $upload_path.$row['child_id'].'.jpg'; }else{ echo $default;} ?>" alt="..." class="child_img"></td>
              </tr>
              <tr>
                <td class="t-title">2. Date &amp; Time of Rescue</td>
                <td class="t-description">	</td>
                <td class="t-title">3. Name of the Child</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">4. Sex</td>
                <td class="t-description">	</td>
                <td class="t-title">5. Is Date of Birth Available ? (Yes/No)</td>
                <td class="t-description">	</td>
              </tr>
              <!-------- start of dob show and hide------------------->
              <tr>
                <td class="t-title">5.b. Date of Birth (If Yes)</td>
                <td class="t-description"></td>
				 <td class="t-title">5.b.i. Years and Months (If No)</td>
                <td class="t-description"></td>
           
              </tr>
              <!-- ---------------end of dob show and hide---------------->
              <tr>
                <td class="t-title">6. Education</td>
                <td class="t-description">	</td>
                <td class="t-title">7. Marital Status</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">8. Religion</td>
                <td class="t-description">	</td>
                <td class="t-title">9. a.Category</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <!--catagory other-->
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
                <!--cend catagory other-->
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">9. b. Caste Name</td>
                <td class="t-description"></td>
                <td class="t-title">10. Father's Name</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">11. Mother's Name</td>
                <td class="t-description">	</td>
                <td class="t-title">12. Address</td>
                <td class="t-description"></td>
              </tr>
			  
			  <tr>
			    <td class="t-title">13. Police sation</td>
                <td class="t-description">	</td>
                <td class="t-title">14. Pincode</td>
                <td class="t-description">	</td>
			  </tr>
              <tr>
                <td class="t-title">15. Contact No.</td>
                <td class="t-description">	</td>
                <td class="t-title">16. State</td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">17. District</td>
                <td class="t-description">
                  <?php echo $dsts;?> </td>
                <td class="t-title">18. Block</td>
                <td class="t-description"> </td>
              </tr>
              <tr>
                <td class="t-title">19. Birth Registered</td>
                <td class="t-description">	</td>
                <td class="t-title">20. Aadhaar Card ID</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">21. Rescue by</td>
                <td class="t-description">	</td>
                <td class="t-title">22. Place of Rescue</td>
                <td class="t-description">	</td>
              </tr>
              <!-- place of rescue other-->
              <tr>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
				<td class="t-title">23. Remarks</td>
                <td class="t-description">	</td>
              </tr>
              <!-- end-->
              <!-- Row for Within State Block Starts -->
             
              <tr>
                <th colspan="4" class="bg-navy" colspan="4">
                <h5>Within State</h5>
                </th>
              </tr>
              <tr>
            <tbody>
              <tr>
                <td class="t-title">1. Employer Name</td>
                <td class="t-description">	</td>
                <td class="t-title">2. Employer Address</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">3. Contact No</td>
                <td class="t-description">	</td>
                <td class="t-title">4 i. Place of Rescue</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">4 ii. State</td>
                <td class="t-description">
                  <?php echo $stat3;?></td>
                <td class="t-title">4 iii. District</td>
                <td class="t-description">
                  <?php echo $dsts3;?></td>
              </tr>
              <tr>
                <td class="t-title">4 iv. Block</td>
                <td class="t-description">
                  <?php echo $block3;?></td>
                <td class="t-title">5. Work involved in</td>
                <td class="t-description">
					</td>				
              </tr>
              <!--work involed other-->
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
              <!--end work involed other-->
              <tr>
                <td class="t-title">6. Duration of Work</td>
                <td class="t-description"></td>
                <td class="t-title">7. By Whom Child was Deployed</td>
                <td class="t-description">	</td>
              </tr>
			 <!-- By Whom Child was deployed other starts-->
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
			  <!-- By Whom Child was deployed other ends-->
              <tr>
                <td class="t-title">8. Working Environment</td>
                <td class="t-description">	</td>
                <td class="t-title">9. Behaviour of Employer</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
			   <!--Working Environment other starts-->
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
				<!--Working Environment other ends-->
				<!--Behaviour other starts-->
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
				<!--Behaviour other end-->
              </tr>
              <tr>
                <td class="t-title">10. Any Complaint lodged at Police Station (Yes/No)</td>
                <td class="t-description" colspan="3"></td>
              </tr>
              <!-- if FIR value = Yes Code Starts-->
              <tr>
                <td class="t-title">10. i. FIR Number (If Yes)</td>
                <td class="t-description"></td>
                <td class="t-title">10. ii. Date of FIR (If Yes)</td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">10. iii. Name of Police Station <br>(If Yes)</td>
                <td class="t-description" colspan="3"></td>
              </tr>
              <!-- if FIR value = Yes Code Ends-->
              <tr>
                <td class="t-title">11. Total no. of Working Days in a week and Hour(s) per day</td>
                <td class="t-description"> </td>
                <td class="t-title">12. Salary/ Honorarium (Per month)</td>
                <td class="t-description"></td>
              </tr>

            </tbody>
            </td>

            </tr>

           
            <tr>
              <th colspan="4" class="bg-navy" colspan="4">
              <h5>Outside State</h5>
              </th>
            </tr>
            <tr>
            <tbody>
              <tr>
                <td class="t-title">1. Employer Name</td>
                <td class="t-description">	</td>
                <td class="t-title">2. Employer Address</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">3. Contact No.</td>
                <td class="t-description">	</td>
                <td class="t-title">4 i. Place of Rescue</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">4 ii. State</td>
                <td class="t-description">
                  <?php echo $stat1;?></td>
                <td class="t-title">4 iii. District</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">4 iv. Block</td>
                <td class="t-description">
                  <?php echo $block1;?></td>
                <td class="t-title">5. Work involved in</td>
                <td class="t-description">
				</td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">6. Date of production before CWC</td>
                <td class="t-description">	</td>
                <td class="t-title">7. Name of CWC</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">8. Location of concerned CWC</td>
                <td class="t-description">
				
			</td>
                <td class="t-title">9. Details of Certificate, if any</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">10. By Whom Child was Deployed</td>
                <td class="t-description">	</td>
                <td class="t-title">11. Working Environment</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
				
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">12. Behaviour of Employer</td>
                <td class="t-description">	</td>
                <td class="t-title">13. Any complaint lodge at Police Station</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
				<!-- if FIR value = Yes Code Starts-->
                <td class="t-title">13. i. FIR Number</td>
                <td class="t-description">	</td>
              </tr>

              <tr>
                <td class="t-title">13. ii. Date of FIR</td>
                <td class="t-description"></td>
                <td class="t-title">13. iii. Name of Police Station</td>
                <td class="t-description" colspan="3"></td>
              </tr>
			  <!-- if FIR value = Yes Code end-->
              <tr>
                <td class="t-title">14. Total no. of Working Days in a Week and Hour</td>
                <td class="t-description"> </td>
                <td class="t-title">15. Salary/ Honorarium (Per month)</td>
                <td class="t-description"></td>
              </tr>

              <!-- if FIR value = Yes Code Ends-->
            </tbody>
            </td>

            </tr>

            
            <!-- Row for Outside State Block Ends -->
            </tbody>

          </table>
          <!-- Table for Basic Information Ends -->
          <!-- Table for Order After Production Starts -->
		  
          <table class="table table-bordered table-striped">
            <tbody>
           
              <tr>
                <th colspan="4" class="bg-navy"><h3>Order After Production</h3></th>
              </tr>
              <tr>
                <td class="t-title">1. Produced by</td>
                <td class="t-description">	</td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">2. Type of Order issued after production</td>
                <td class="t-description"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description">	</td>
              </tr>

			  <tr>
                <td class="t-title">3. Produced Date Before CWC</td>
                <td class="t-description"></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			<!-- -------- order type parents---------------------->
			
			 <tr><td colspan="4">
			 <table class="table table-bordered table-striped" >
              <tr>
                <th colspan="4"><h4>Handed over to Parents/Guardian&nbsp<input type="checkbox"> </h4></th>
              </tr>
              <tr>
			  <td class="t-title">i. District</td>
                <td class="t-description"></td>
                <td class="t-title">ii. Name of Parents/Gaurdian</td>
                <td class="t-description">	</td>

              </tr>

              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description">	</td>
                <td class="t-title">iv. Date</td>
                <td class="t-description">	</td>
              </tr>
			  <!-- -------- end order type parents---------------------->
			  <!-- -------- order type cci---------------------->
              <tr>
                <th colspan="4"><h4>Handed over to CCI&nbsp<input type="checkbox"></h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. District</td>
                <td class="t-description"></td>
                <td class="t-title">ii. Name of CCIs</td>
                <td class="t-description"></td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No</td>
                <td class="t-description">	</td>
                <td class="t-title">iv. Date</td>
                <td class="t-description">	</td>
              </tr>
			  <!-- -------- order type cci---------------------->
			  <!-- -------- order type parents---------------------->
              <tr>
                <th colspan="4"><h4>Handed over to Fit Person&nbsp<input type="checkbox"></h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. District</td>
                <td class="t-description">
					</td>
                <td class="t-title">ii. Name of the Fit Person</td>
                <td class="t-description">	</td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description">	</td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"></td>
              </tr>
                <!-- -------- Handed over to Fit Facility---------------------->
              <tr>
                <th colspan="4"><h4>Handed over to Fit Facility&nbsp<input type="checkbox"></h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. District</td>
                <td class="t-description">
					</td>
                <td class="t-title">ii. Name Fit Facility</td>
                <td class="t-description"></td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description"></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"></td>
              </tr>
                 <!-- -------- Handed over to Fit Facility---------------------->
               <tr>
                <th colspan="4"><h4>Handed over to Other Place&nbsp<input type="checkbox"></h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. District</td>
                <td class="t-description">
					</td>
                <td class="t-title">ii. Name of Other Place</td>
                <td class="t-description"></td>

              </tr>
              <tr>
                <td class="t-title">iii. Address with Contact No.</td>
                <td class="t-description"></td>
                <td class="t-title">iv. Date</td>
                <td class="t-description"></td>
              </tr>
                  <!-- -------- others---------------------->
               <tr>
                <th colspan="4"><h4>Others&nbsp<input type="checkbox"></h4></th>
              </tr>
              <tr>
			  	<td class="t-title">i. Others</td>
                <td class="t-description" colspan="2">
					</td>
              </tr>
              </table>
              </td></tr>
                <tr>
                <td class="t-title">4. Whether registered to Track Child Portal (Yes/No)</td>
                <td class="t-description"><?php echo $orderrow['fitperson_address']; ?></td>
                <td class="t-title">4 i. Profile ID Number* (If Yes)</td>
                <td class="t-description"><?php echo $orderrow['fitperson_date']; ?></td>
              </tr>
			  <tr>
                <td class="t-title">5. Upload CWC Order ?</td>
                <td class="t-description" colspan="3"><?php echo $orderrow['fitperson_address']; ?></td>
                
              </tr>
              </td>
              </tr>
			
			  <!-- -------- order type fit_person---------------------->
			  <!-- -------- order type fit_institution---------------------->
            </tbody>
          </table>
          <!-- Table for Order After Production Ends -->
          <!-- Table for Additional Detail Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Additional Detail</h3></th>
              </tr>
              <!-- Education Section Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>1. Educational History</h5></th>
              </tr>
              <tr>
                <td class="t-title">1 a. School Attended</td>
                <td class="t-description"><?php echo $edurow['school_attended']; ?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <tr>
                <td class="t-title">1 b. Select Education Level</td>
                <td class="t-description"><?php echo $edurow['education_level']; ?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">i. School Details</td>
                <td class="t-description"><?php echo $edurow['details_of_school']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $edurow['school_detail_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Medium of Study</td>
                <td class="t-description"><?php echo $edurow['medium_of_study']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $edurow['medium_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Reason for Leaving School</td>
                <td class="t-description"><?php echo $edurow['reason_for_leaving']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $edurow['reason_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">2.i. Vocational Training</td>
                <td class="t-description"></td>
                <td class="t-title" >ii. Types Vocational Training</td>
                <td class="t-description"></td>
              </tr>
			 <!-- vocational training yes value-->
              <tr>
                <td class="t-title">iii. Name of Vocational Trade</td>
                <td class="t-description"><?php echo $edurow['vocational_trade_name']; ?></td>
                <td class="t-title">iv. No. of Years</td>
                <td class="t-description"><?php echo $edurow['no_of_years']; ?></td>
              </tr>
			
			  <!-- vocational training yes value end-->
              <tr>
                <td class="t-title">3. Others (If Any)</td>
                <td class="t-description" colspan="3"><?php echo $edurow['other']; ?></td>
              </tr>
			 
              <!-- Education Section Ends -->
              <!-- Health Section Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>2. Health Status</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Height(in cm)</td>
                <td class="t-description"><?php echo $healthrow['height']; ?></td>
                <td class="t-title">2. Weight(in kg)</td>
                <td class="t-description"><?php echo $healthrow['weight']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Details of Handicap/Disability </td>
                <td class="t-description"><?php echo $healthrow['details_of_handicap']; ?></td>
                <td class="t-title">3 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $healthrow['details_of_handicap_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">4. Blood Group</td>
                <td class="t-description"><?php echo $healthrow['blood_group']; ?></td>
                <td class="t-title">5. Health Card Issued</td>
                <td class="t-description"><?php echo $healthrow['health_card_issued']; ?></td>
              </tr>
			  <!--Health Card issued yes-->
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">Please Specify</td>
                <td class="t-description"><?php echo $healthrow['health_card_issued_yes']; ?></td>
              </tr>
			   <!--Health Card issued yes end-->
              <tr>
                <td colspan="4" ><h4>6. Details Of Health Condition of the Child</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Respiratory Disorders</td>
                <td class="t-description">	</td>
                <td class="t-title">ii. Hearing Impairment</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">iii. Eye Diseases</td>
                <td class="t-description">	</td>
                <td class="t-title">iv. Dental Diseases</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">v. Cardiac Diseases</td>
                <td class="t-description">	</td>
                <td class="t-title">vi. Skin Diseases</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">vii. Sexually Transmitted Diseases</td>
                <td class="t-description"><?php echo $healthrow['sexually_transmitted_diseases']; ?></td>
                <td class="t-title">viii. Neurological Disorders</td>
                <td class="t-description"><?php echo $healthrow['neurological_disorders']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ix. Mentally Challenged</td>
                <td class="t-description"><?php echo $healthrow['mental_handicap']; ?></td>
                <td class="t-title">x. Physically Challenged</td>
                <td class="t-description"><?php echo $healthrow['physical_handicap']; ?></td>
              </tr>
              <tr>
                <td class="t-title">7. Others (If Any)</td>
                <td class="t-description" colspan="3"><?php echo $healthrow['other_specify']; ?></td>
              </tr>
              <!-- Health Section Ends -->
              <!-- Family Section Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>3. Family Details</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Type of Family</td>
                <td class="t-description"><?php echo $familyrow['type_of_family']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $familyrow['type_of_family_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">2. Has Family Migrated?</td>
                <td class="t-description"><?php echo $familyrow['is_family_migrate']; ?></td>
                <td class="t-title">2. i. Type of Migration</td>
                <td class="t-description"><?php echo $familyrow['type_migration']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Total no. of Family Members</td>
                <td class="t-description">Male: <br> Female: </td>
                <td class="t-title">4. No of Persons who have not completed 18 years of age</td>
                <td class="t-description">Male: <br> Female: </td>
              </tr>
              <tr>
                <td colspan="4" ><h4>5. Relationship Among the Family Members</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Father &amp; Mother</td>
                <td class="t-description"><?php echo $familyrow['father_mother']; ?></td>
                <td class="t-title">ii. Father &amp; Child</td>
                <td class="t-description"><?php echo $familyrow['father_child']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Mother &amp; Child</td>
                <td class="t-description"><?php echo $familyrow['mother_child']; ?></td>
                <td class="t-title">iv. Father &amp; Siblings</td>
                <td class="t-description"><?php echo $familyrow['father_sibling']; ?></td>
              </tr>
              <tr>
                <td class="t-title">v. Mother &amp; Siblings</td>
                <td class="t-description"><?php echo $familyrow['mother_sibling']; ?></td>
                <td class="t-title">vi. Rescued Child and Siblings</td>
                <td class="t-description"><?php echo $familyrow['rescue_child_siblings']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vii. Overal relationship among the family members</td>
                <td class="t-description"><?php echo $familyrow['overal_relationship']; ?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- Family Section Ends -->
              <!-- Economic condition Section Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>4. Economic Condition of the Family</h5></th>
              </tr>
              <tr>
                <td colspan="4" ><h4>1. Description of Dwelling</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Type of Structure</td>
                <td class="t-description"><?php echo $ecorow['structure_type']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['structure_type_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Roofing Quality</td>
                <td class="t-description"><?php echo $ecorow['roofing_quality']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['roofing_quality_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Toilet Facilities in/ outside the Home</td>
                <td class="t-description"><?php echo $ecorow['toilet_facilities']; ?></td>
                <td class="t-title">iv. Electricity Facility </td>
                <td class="t-description"><?php echo $ecorow['electricity_facilities']; ?></td>
              </tr>
              <tr>
                <td class="t-title">v. Water Facility in/ outside Home</td>
                <td class="t-description"><?php echo $ecorow['water_facility']; ?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['water_facility_other']; ?></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>2. Properties Owned by the Family</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Land Available</td>
                <td class="t-description"><?php echo $ecorow['land_available']; ?></td>
                <td class="t-title">i a.Specify Area with Unit</td>
                <td class="t-description"><?php echo $ecorow['land_area']; ?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Household Assets</td>
                <td class="t-description"><?php echo $ecorow['household_articles']; ?></td>
                <td class="t-title">iii. Vehicles</td>
                <td class="t-description"><?php echo $ecorow['vehicles_type']; ?></td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">iii a. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $ecorow['other_vehcle']; ?></td>
              </tr>
              <tr>
                <td class="t-title">iv. BPL Card</td>
                <td class="t-description"><?php echo $ecorow['bpl_card']; ?></td>
                <td class="t-title">iv a. Provide the No.</td>
                <td class="t-description"><?php echo $ecorow['bpl_no']; ?></td>
              </tr>
			  <tr>
                <td class="t-title">v.  Ration Card</td>
                <td class="t-description"><?php echo $ecorow['ration_card']; ?></td>
                <td class="t-title">v a. Provide the No.</td>
                <td class="t-description"><?php echo $ecorow['ration_card_no']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vi. Indira Awaas</td>
                <td class="t-description"><?php echo $ecorow['indira_awas']; ?></td>
                <td class="t-title">vi a. Provide the no.</td>
                <td class="t-description"><?php echo $ecorow['indira_awas_other']; ?></td>
              </tr>
              <tr>
                <td class="t-title">vii. Job Card available under MGNREGA</td>
                <td class="t-description"><?php echo $ecorow['job_card']; ?></td>
                <td class="t-title">vii a. Provide the no.</td>
                <td class="t-description"><?php echo $ecorow['card_no']; ?></td>
              </tr>
              <tr>
                <td class="t-title">viii. RSBY Card</td>
                <td class="t-description"><?php echo $ecorow['rsby_card']; ?></td>
                <td class="t-title">viii a. Provide the no.</td>
                <td class="t-description"><?php echo $ecorow['rsby_no']; ?></td>
              </tr>
              <tr>

                <td class="t-title">ix. Comes under Food Security Scheme</td>
                <td class="t-description"><?php echo $ecorow['food_security']; ?></td>
				 <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <!-- Economic condition Section Ends -->
              <!-- Reasons for involved in child labour Section Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>5. Reasons for Involved in Child Labour</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Reason for Leaving family</td>
                <td class="t-description"><?php echo $resrow['reason_for_leaving'];?> </td>
                <td class="t-title">2. With whom was the child staying prior to rescue </td>
                <td class="t-description"><?php echo $resrow['staying_prior_rescue'];?></td>
              </tr>
              <tr>
                <td class="t-title" >Guardian relation </td>
                <td class="t-description"> <?php echo $resrow['guardian_rel']?> </td>
                  <td class="t-title">Friend Name</td>
                  <td class="t-description" > <?php echo $resrow['friends_rel']?> </td>
              </tr>
			  <tr>
			    <td class="t-title">3. Parental care towards the child before rescue</td>
                <td class="t-description" colspan="3"><?php echo $resrow['care_before_rescue'];?></td>
			  </tr>
              <tr>
                <td colspan="4" ><h4>Frequency of visit of parent(s)</h4></td>
              </tr>
              <tr>
                <td class="t-title">4. i. Prior to Institutionalization</td>
                <td class="t-description"><?php echo $resrow['parent_prior_institute'];?></td>
                <td class="t-title">4. ii. After Institutionalization</td>
                <td class="t-description"><?php echo $resrow['parent_after_institute'];?></td>
              </tr>
              <!-- Reasons for involved in child labour Section Ends -->
              <!-- Status Section Starts -->
			  
              <tr>
                <th colspan="4" class="bg-navy"><h5>6. Status During the Employment of the Child and Nature of the Employer </h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Duration of Working Hours</td>
                <td class="t-description"><?php echo $starow['working_hours'];?></td>
                <td class="t-title">2. Reason Due to which the child had to work</td>
                <td class="t-description"><?php echo $starow['income_utilization'];?></td>
              </tr>
              <tr>
                <td class="t-title">3. Details of Savings </td>
                <td class="t-description"><?php echo $starow['savings'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['savings_other'];?></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>4. Type of Child Abuse (if any)</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Verbal Abuse</td>
                <td class="t-description"><?php echo $starow['abuse_met'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['verbal_abuse_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Physical Abuse</td>
                <td class="t-description"><?php echo $starow['physical_abuse'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['physical_abuse_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Sexual Abuse</td>
                <td class="t-description"><?php echo $starow['sexual_abuse'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['sexual_abuse_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">iv. Any other Abuse (Please Specify)</td>
                <td class="t-description"><?php echo $starow['other_plz_specify'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td colspan="4" ><h4>5. Difficulties Faced</h4></td>
              </tr>
              <tr>
                <td class="t-title">i. Denial of Food</td>
                <td class="t-description"><?php echo $starow['denial_food'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['denial_food_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">ii. Beaten Mercilessly</td>
                <td class="t-description"><?php echo $starow['beaten_mercilessly'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['beaten_mercilessly_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">iii. Causing Injury</td>
                <td class="t-description"><?php echo $starow['causing_injury'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['causing_injury_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">6. Exploitation Faced by the Child</td>
                <td class="t-description"><?php echo $starow['exploitation_faced'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $starow['exploitation_other'];?></td>
              </tr>
              <!-- Status Section Starts -->
              <!-- Habit Section Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>7. Habit of the Child</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Details of Delinquent Behaviour, if any</td>
                <td class="t-description"><?php echo $habrow['detail_delinquent'];?></td>
                <td class="t-title">1 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['detail_delinquent_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">2. Reason for Delinquent Behaviour</td>
                <td class="t-description"><?php echo $habrow['reason_delinquent'];?></td>
                <td class="t-title">2 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['reason_delinquent_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">3. Nature</td>
                <td class="t-description"><?php echo $habrow['nature'];?></td>
                <td class="t-title">3 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['nature_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">4. Habit of Child</td>
                <td class="t-description"><?php echo $habrow['habit'];?></td>
                <td class="t-title">4 i. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $habrow['habit_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">5. Hobbies</td>
                <td class="t-description"><?php echo $habrow['hobbies'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- Habit Section Ends -->
              <!-- Social History Section Starts -->
			  
              <tr>
                <th colspan="4" class="bg-navy"><h5>8. Social History</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Details of Friendship Prior to Rescue</td>
                <td class="t-description"><?php echo $sorow['details_friendship'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $sorow['details_friendship_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">2. Details of Membership in Group</td>
                <td class="t-description"><?php echo $sorow['details_membership'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $sorow['details_membership_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">3. Majority of the Friends are</td>
                <td class="t-description"><?php echo $sorow['majority_friends'];?></td>
                <td class="t-title">4. The Position of the Child in the Groups/League</td>
                <td class="t-description"><?php echo $sorow['position_child'];?></td>
              </tr>
              <tr>
                <td class="t-title">5. Purpose of Being a Member of the Group</td>
                <td class="t-description"><?php echo $sorow['purpose_membership'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $sorow['purpose_member_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">6. Attitude of the Group/League</td>
                <td class="t-description"><?php echo $sorow['attitude_group'];?></td>
                <td class="t-title">7. Venue of Group Meetings</td>
                <td class="t-description"><?php echo $sorow['location_meeting'];?></td>
              </tr>
              <tr>
                <td class="t-title">8. The Reaction of the Society When the Child First Left the Family</td>
                <td class="t-description"><?php echo $sorow['reaction_society'];?></td>
                <td class="t-title">9. The Reaction of the Police Towards the Rescued Child</td>
                <td class="t-description"><?php echo $sorow['reaction_police'];?></td>
              </tr>
              <tr>
                <td class="t-title">10. Social Acceptance of Family in their Community</td>
                <td class="t-description"><?php echo $sorow['social_acceptance'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- Social History Section Ends -->
            </tbody>
          </table>
          <!-- Table for Additional Detail Ends -->
          <!-- Table for Rescue Starts -->
		  
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Final Order</h3></th>
              </tr>
              <tr>
                <td class="t-title">1. Final Order Passed</td>
                <td class="t-description"><?php echo $aftrow['final_ordered'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			  <tr>
                <td class="t-title">1 i. Date of Final Order</td>
                <td class="t-description"><?php echo $aftrow['final_order_date'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">1 ii. Type of Final Order</td>
                <td class="t-description"><?php echo $aftrow['type_order'];?></td>
                <td class="t-title">1 ii a. Please Specify</td>
                <td class="t-description"><?php echo $aftrow['type_order_other'];?></td>
              </tr>
			 <!-- final order state value-->
			 	<tr>
					<td class="t-title">2.Country</td>
					<td class="t-description"><?php echo $aftrow['country'];?></td>
					<td class="t-title">2 i. Please Specify</td>
					<td class="t-description"><?php echo $aftrow['other_country'];?></td>
              	</tr>
					<!--if counrty india-->
					
					<tr>
					<td class="t-title">3.State</td>
					<!--<td class="t-description"><?php echo $aftrow['state'];?>-->
					<td class="t-description">
					</td>
					<td class="t-title">4.District</td>
					<td class="t-description">
              		</tr>
					<!--end-->
			  <!--end-->
			 
            </tbody>
          </table>
          <!-- Table for Rescue Ends -->
          <!-- Table for Act/Compliance Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Act/Compliance</h3></th>
              </tr>
              <!-- Labour Act Detail Section Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>Compliance by LRD under CLPRA/Apex Court</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has Notice been Issued for Compensation of Rs.20,000</td>
                <td class="t-description"><?php echo $labactrow['compensation_notice_issued'];?></td>
                <td class="t-title">1 i. Date of issue</td>
                <td class="t-description"><?php echo $labactrow['date_of_issue'];?></td>
              </tr>
              <tr>
                <td class="t-title">2. Has Compensation of Rs.20,000 been Deposited</td>
                <td class="t-description"><?php echo $labactrow['compensation_deposited'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <tr>
                <td class="t-title">2 i. Was Poceeding of Certificate initiated</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_initiated'];?></td>
				 <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">2.i.a. Name and place of authority to whom the Certificate was filed</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_authority'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_authority_other'];?></td>
              </tr>
              <tr>
                <td class="t-title">2.i.b. Place</td>
                <td class="t-description">
			 </td>
                <td class="t-title">2.i.c. Date on which Certificate was Issued </td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_date'];?></td>
              </tr>
              <tr>
                <td class="t-title">2.i.d. Order Number</td>
                <td class="t-description"><?php echo $labactrow['poceeding_certificate_orderno'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  
              <tr>
                <td class="t-title">3. Has prosecution been filed(under Child Labour Act)</td>
                <td class="t-description"><?php echo $labactrow['has_prosecution_file'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">3 i. Name of authority to whom prosecution was filed</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_authority'];?></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_other'];?></td>
              </tr>
              <tr>

                <td class="t-title">3 ii. Place</td>
                <td class="t-description">
				</td>
				 <td class="t-title">3 iii. Date on which prosecution was filed</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_date'];?></td>
              </tr>

              <tr>
                <td class="t-title">4. Status of Case</td>
                <td class="t-description"><?php echo $labactrow['status_of_cases'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if disposed -->
              <tr>
                <td class="t-title">4 i. Date of Disposal</td>
                <td class="t-description"><?php echo $labactrow['date_of_disposed'];?></td>
                <td class="t-title">4 ii. Type of Disposal</td>
                <td class="t-description"><?php echo $labactrow['type_of_disposed'];?></td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">If Other (Please Specify)</td>
                <td class="t-description"><?php echo $labactrow['type_of_disposed_other'];?></td>
              </tr>
			  <tr>

                <td class="t-title">iii. Order Number</td>
                <td class="t-description"><?php echo $labactrow['prosecution_file_orderno'];?></td>
				<td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
			
              <!-- if pending -->
              <tr>
                <td class="t-title">4 i. Reason for Pendency (If pending)</td>
                <td class="t-description" colspan="3"><?php echo $labactrow['reason_pendency'];?></td>
              </tr>
			 
              <!-- Labour Act Detail Section Ends -->
              <!-- Wages Act Detail Section Starts -->
			  
              <tr>
                <th colspan="4" class="bg-navy"><h5>Compliance by LRD on Minimum Wages Act</h5></th>
              </tr>
              <tr>
			  
				
				
			

                <td class="t-title">1. Total no. of Working Days in a Week and Hours per day</td>
                <td class="t-description"></td>
				<td class="t-title">2.Types of Sectors/Indurstries </td>
                <td class="t-description"><?php echo $wages_row['sector'] ;?></td>
              </tr>
              <tr>
			    <td class="t-title">3. Wages Amount</td>
                <td class="t-description"><?php echo $wages_amount ;?></td>
				<td class="t-title">4.No of days Work</td>
                <td class="t-description"><?php echo $no_of_days ; ?></td>
              </tr>
			   <tr>
			    <td class="t-title">5. Total work amount </td>
                <td class="t-description"><?php echo $total_work ;?></td>
				 <td class="t-title">6. Salary/Honorarium (Per month)</td>
                <td class="t-description"></td>     
              </tr>
			  <tr>
                <td class="t-title">7. Minimum Wages paid by the employer?</td>
                <td class="t-description"><?php echo $wactrow['mnimum_wages'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">7 i. Has claim been filed?</td>
                <td class="t-description"><?php echo $wactrow['has_claim'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">7 ii. Date on which the claim was filed</td>
                <td class="t-description"><?php echo $wactrow['date_claim'];?></td>
                <td class="t-title">7 iii. Date on which the claim was disposed off</td>
                <td class="t-description"><?php echo $wactrow['date_disposed'];?></td>
              </tr>
              <tr>
                <td class="t-title">7 iv.  Has the claim amount been deposited by the employer?</td>
                <td class="t-description"><?php echo $wactrow['has_claim_amount'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if Yes -->
              <tr>
                <td class="t-title">7 v. Amount of claim received in Rupees</td>
                <td class="t-description"><?php echo $wactrow['claim_amount'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if No -->
              <tr>
                <td class="t-title">7 v. Has prosecution been filed?</td>
                <td class="t-description"><?php echo $wactrow['prosecution_field'];?></td>
                <td class="t-description" colspan="2"></td>
              </tr>
				  <tr>
					<td class="t-title">7.v.a. Name and Place of authority to whom prosecution was filed</td>
					<td class="t-description"><?php echo $wactrow['place_authority'];?></td>
					<td class="t-title">7.v.b. Date on which prosecution was filed</td>
					<td class="t-description"><?php echo $wactrow['prosecution_date'];?></td>
				  </tr>
				  <tr>
					<td class="t-title">7.v.c. Date on which prosecution was disposed off</td>
					<td class="t-description"><?php echo $wactrow['date_prosecution_disposed'];?></td>
					<td class="t-title">7.v.d. Order Number</td>
					<td class="t-description"><?php echo $wactrow['order_number'];?></td>
				  </tr>
				
              <tr>
                <td class="t-title">8. Status of Case</td>
                <td class="t-description"><?php echo $wactrow['status_of_cases'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if disposed -->
              <tr>
                <td class="t-title">4 i. Date of Disposal</td>
                <td class="t-description"><?php echo $wactrow['date_of_disposed'];?></td>
                <td class="t-title">4 ii. Type of Disposal</td>
                <td class="t-description"><?php echo $wactrow['type_disposed'];?></td>
              </tr>
              <tr>
                <td class="t-title" colspan="2"></td>
                <td class="t-title">4.ii.a. If Other (Please Specify)</td>
                <td class="t-description"><?php echo $wactrow['type_disposed_other'];?></td>
              </tr>
              <!-- if pending -->
              <tr>
                <td class="t-title">Reason for Pendency (If Pending)</td>
                <td class="t-description" colspan="3"><?php echo $wactrow['reason_pendency'];?></td>
              </tr>
			  
              <!-- Wages Act Detail Section Ends -->
              <!-- IPC Act Detail Section Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>IPC Act</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Name of Section/Subsection</td>
			
				
                <td class="t-description">
                <td class="t-title">2. Remarks</td>
                <td class="t-description">	</td>
              </tr>
              <!-- IPC Act Detail Section Ends -->
              <!-- Other Act Detail Section Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>Other Laws Act</h5></th>
              </tr>
              <tr>
                <td class="t-title">1 i. Name of Act</td>
                <td class="t-description">	</td>
                <td class="t-title">1 ii. Section/Subsection</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">2 i. Name of Act</td>
                <td class="t-description">	</td>
                <td class="t-title">2 ii. Section/Subsection</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">3 i. Name of Act</td>
                <td class="t-description">	</td>
                <td class="t-title">3 ii. Section/Subsection</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                <th colspan="4" class="bg-navy"><h5>Upload FIR</h5></th>
              </tr>
              <tr>
                <td class="t-title">1 i. Do you want to upload the original FIR copy ?</td>
                <td class="t-description" colspan="3">	</td>
               
              </tr>
              <!-- Other Act Detail Section Ends -->
            </tbody>
          </table>
          <!-- Table for Act/Compliance Ends -->
          <!-- Table for Rehabilitation Starts -->
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th colspan="4" class="bg-navy"><h3>Rehabilitation</h3></th>
              </tr>
              <!-- Labour Resource Department Section Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>Labour Resource Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has Package of Rs.1800/3000 been Provided ?</td>
                <td class="t-description"><?php echo $lrdeptrow['package'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">1. i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['package_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">1. i. If yes, date of Package provided</td>
                <td class="t-description"><?php echo $lrdeptrow['package_yes'];?></td>
                <td class="t-title">ii. Details of Mode of Payment</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_of_payment'];?></td>
              </tr>
              <tr>

                <td class="t-title">ii. a. Cheque (Cheque No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_payment_cheque'];?></td>
                <td class="t-title">iii. Attach Proof</td>
                <td class="t-description">
				</td>
              </tr>

              <tr>
                <td class="t-title">2. Has Rs.5000/- been Deposited in the District Child Welfare-Cum-Rehabilitation Account ?</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">2. i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">2 i. If Yes, Date of Deposit</td>
                <td class="t-description"><?php echo $lrdeptrow['deposited_yes'];?></td>
                <td class="t-title">ii. Detail of mode of deposit in account</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_of_deposit'];?></td>
              </tr>
              <tr>
                <td class="t-title">ii. a. Account Transfer (Account No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_account'];?></td>
				
                <td class="t-title">ii. a.  Sanction Order No.</td>
                <td class="t-description"></td>
				</td>
              </tr>
			  <tr>
			  <td class="t-title">ii. a.Other  (Account No)</td>
                <td class="t-description"><?php echo $lrdeptrow['mode_deposit_other'];?></td>
                <td class="t-title">iii. Attach Proof</td>
                <td class="t-description">
			  </tr>
		
              <tr>
                <td class="t-title">3 a. Whether the Rescued Child benefited from the Rehabilitation Fund of Rs.20,000 from employer?</td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">3.a.i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			   
              <tr>
                <td class="t-title">3.a.i. Attach Proof</td>
                <td class="t-description">
			
				</td>
                <td class="t-title" colspan="2"></td>
              </tr>

			   <tr>
                <td class="t-title">3 b. Whether the Rescued Child benefited from the Rehabilitation Fund of Rs.5,000? </td>
                <td class="t-description"><?php echo $lrdeptrow['interest_of_rehabilitation_5k'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <tr>
                <td class="t-title">3.b.i. If not, Specify the Reason</td>
                <td class="t-description"><?php echo $lrdeptrow['rehabilitation_5k_no'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  
              <tr>
                <td class="t-title">3.b.i. Attach Proof</td>
                <td class="t-description">
				
				</td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  
              <tr>
                <th colspan="4" class="bg-navy"><h5>Education Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has rescued child been enrolled in school ?</td>
                <td class="t-description"><?php echo $edudeptrow['enrolled_school'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>

              <tr>
                <td colspan="4" ><h4>If yes please provide some details</h4></td>
              </tr>
              <tr>
                <td class="t-title">School Type</td>
                <td class="t-description"><?php echo $edudeptrow['school_type'];?></td>
                <td class="t-title">In which class rescued child enrolled</td>
                <td class="t-description"><?php echo $edudeptrow['class_enrolled'];?></td>
              </tr>
			  <tr>
                <td class="t-title">Contact No.</td>
                <td class="t-description"><?php echo $edudeptrow['contact_no'];?></td>
                <td class="t-title"></td>
                <td class="t-description"></td>
              </tr>
              <tr>
                <td class="t-title">School Name</td>
                <td class="t-description"><?php echo $edudeptrow['school_name'];?></td>
                <td class="t-title">District</td>
                <td class="t-description">
                  </td>
              </tr>
              <tr>
                <td class="t-title">Block</td>
                <td class="t-description">
                  <?php echo $blk;?></td>
                <td class="t-title">Is rescued child getting free uniforms?</td>
                <td class="t-description"><?php echo $edudeptrow['free_cloths'];?></td>
              </tr>
              <tr>
                <td class="t-title">Is rescued Child getting free bag &amp; Books</td>
                <td class="t-description"><?php echo $edudeptrow['free_bag_books'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				

				</td>
              </tr>
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>Rural Development Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child's family benefiting under MGNREGA ?</td>
                <td class="t-description"><?php echo $ruraldeptrow['is_mgnrega'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Is rescued child's family benefiting under SGSY ?</td>
                <td class="t-description"><?php echo $ruraldeptrow['is_sgsy'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				</td>
              </tr>
              <tr>
                <td class="t-title">3. Is rescued child's family benefiting under IAY ?</td>
                <td class="t-description"><?php echo $ruraldeptrow['is_iay'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
				</td>
              </tr>
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>Urban Development Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child family benefited under SJSRY ?</td>
                <td class="t-description"><?php echo $urdeptrow['is_sjsry'];?></td>
                <td class="t-title">Attach Proof</td>

                <td class="t-description">
				
				</td>

              </tr>
              <tr>
                <td class="t-title">2. Is rescued child's family benefiting under JNURM (Urban area only) ?</td>
                <td class="t-description"><?php echo $urdeptrow['is_jnrum'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
					</td>
              </tr>
              <!--  Urban Development Department Ends -->
              <!--  Revenue and Land Reform Department Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>Revenue and Land Reform Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child family benefiting under Land settlement / distribution ?</td>
                <td class="t-description"><?php echo $revdeptrow['is_benefited_landsettlement'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
			
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Basgriha Parcha ?</td>
                <td class="t-description"><?php echo $revdeptrow['is_benefited_landsettlement'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
				</td>
              </tr>
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>Health Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child family getting Health Cards ?</td>
                <td class="t-description"><?php echo $hdeptrow['is_health_cards'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
					</td>
              </tr>
              <!-- Health Department Ends -->
              <!--  SC & ST Welfare, Backward and Extremely Backward classes Welfare Departments Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>SC &amp; ST Welfare, Backward and Extremely Backward classes Welfare Departments</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has rescued child been benefited by scholarships ?</td>
                <td class="t-description"><?php echo $scdeptrow['benefited_scholarships'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
				</td>
              </tr>
			  
              <tr>
                <th colspan="4" class="bg-navy"><h5>Food &amp; Civil Supply Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has rescued child's family been provided with Ration Card ?</td>
                <td class="t-description"><?php echo $fdeptrow['is_ration_card'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Is rescued child's family benefiting under PDS ?</td>
                <td class="t-description"><?php echo $fdeptrow['id_pds'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				
				</td>
              </tr>
              <!-- Food & Civil Supply Department Ends -->
              <!-- Minority Welfare Department Starts -->
			 
              <tr>
                <th colspan="4" class="bg-navy"><h5>Minority Welfare Department</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Is rescued child's family benefiting under special housing scheme ?</td>
                <td class="t-description"><?php echo $mdeptrow['is_housing_scheme'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
				
				</td>
              </tr>
              <tr>
                <td class="t-title">2. Is the rescued child's family getting loans if they are willing to take it ?</td>
                <td class="t-description"><?php echo $mdeptrow['is_loan'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				
				</td>
              </tr>
              <!-- Minority Welfare Department Ends -->
              <!-- Social Welfare Departments Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>Social Welfare Departments</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Are the family members of the rescued child eligible for getting benefit under social pension scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['social_pension_eligible'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
              <!-- if Yes -->
              <tr>
                <td class="t-title">1 i. Is the family of the rescued child benefitting under any pension scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['social_pension_availed'];?></td>
                <td class="t-title">Attach Proof</td>
                <td class="t-description">
			
				</td>
              </tr>
              <!-- if Yes -->
              <tr>
                <td class="t-title">2. Is the rescued child eligible for getting benefit under Pravarish Scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['parvarish_scheme_eligible'];?></td>
                <td class="t-title" colspan="2"></td>
              </tr>
			  <!-- if Yes -->
              <tr>
                <td class="t-title">2 i. Is the rescued child getting benefit under Pravarish Scheme ?</td>
                <td class="t-description"><?php echo $sdeptrow['parvarish_scheme_availed'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				</td>
              </tr>
              <tr>
                <td class="t-title">3. Is the family of the rescued child benefitting under Sponsorship ?</td>
                <td class="t-description"><?php echo $sdeptrow['family_availed_sponsorship'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				</td>
              </tr>
              <tr>
                <td class="t-title">4. Is the rescued child getting benefit under Sponsorship ?</td>
                <td class="t-description"><?php echo $sdeptrow['is_child_sponsorship'];?></td>
                <td class="t-title">Attach Proof </td>
                <td class="t-description">
				</td>
              </tr>
              <!-- Social Welfare Departments Ends -->
			    <!-- Restoration Status Starts -->
			
              <tr>
                <th colspan="4" class="bg-navy"><h5>Restoration Status </h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Whether Child is residing at place where restored</td>
                <td class="t-description"><?php echo $restorrow['place_restored'];?></td>
                <td class="t-title">2. Last Date of Verification </td>
				<td class="t-description"><?php echo $restorrow['date_of_varifiaction'];?></td>
              </tr>
              <!-- if Yes -->
              <tr>
                <td class="t-title">1 i. Reason for missing</td>
                <td class="t-description"><?php echo $restorrow['reason_for_missing'];?></td>
                <td class="t-title">1 ii. Date of missing</td>
                <td class="t-description"><?php echo $restorrow['date_of_missing'];?></td>
              </tr>

              <!-- Restoration Status Ends -->
              <!-- CM Relief  -->
			   
              <tr>
                <th colspan="4" class="bg-navy"><h5>CM Relief Fund</h5></th>
              </tr>
              <tr>
                <td class="t-title">1. Has Child physically Verified ? (Yes/No) </td>
                <td class="t-description">	</td>			
                <td class="t-title">1 i. If yes, Date of verification</td>
				<td class="t-description"></td>
              </tr>
             
              <tr>
                <td class="t-title">Current Address</td>
                <td class="t-description">	</td>
                <td class="t-title">Panchayat Name</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">Pin Code</td>
                <td class="t-description">	</td>
                <td class="t-title">Police Station</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                <td class="t-title">Block</td>
                <td class="t-description">	</td>
                <td class="t-title">District</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                <td class="t-title">State</td>
                <td class="t-description">	</td>
                <td class="t-title">Child Address (If Differs)</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                <td class="t-title">Eligible for CM Relief (Yes/No)</td>
                <td class="t-description">	</td>
                <td class="t-title">If No, Specify the Reason</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                <td class="t-title">Demand Raised (Yes/No)</td>
                <td class="t-description">	</td>
                <td class="t-title">Demand Received (Yes/No)</td>
                <td class="t-description">	</td>
              </tr>
              <tr>
                 <td class="t-title">Availability Of Bank Details (Yes/No)</td>
                <td class="t-description">	</td>
                <td class="t-title">If Yes, Select Bank account</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                 <td class="t-title">Bank Account No</td>
                <td class="t-description">	</td>
                <td class="t-title">IFSC Code</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                 <td class="t-title">Bank Name</td>
                <td class="t-description">	</td>
                <td class="t-title">Bank Address</td>
                <td class="t-description">	</td>
              </tr>
               <tr>
                 <td class="t-title">Has Money Trasferred </td>
                <td class="t-description" colspan="3">	</td>
              </tr>
              

            </tbody>
          </table>
          <!-- Table for Rehabilitation Ends -->
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function () {

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });


		  $('#prntblank_details').on('click', function() {



	           $.print("#printable");

				});
    });
    function validate_project_add(formData, jqForm, options) {

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		 window.location.reload();
        toastr.success("Project updated successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }


	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });



</script>


<!--pabitra end-->
<!------------------------------child list table start----------------------------------------->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="panel-heading">
        <div class="left_float">
          <div class="print_button">
            <button type="submit" class="btn btn-info" id='prntblank_details'> <i class="entypo-print"></i>Print Child Registration Form</button>
           <a href="index.php?child_rescued_list/download_fir" type="button" class="btn btn-info"> <i class="entypo-download"></i>Download FIR Copy</a>
     
          </div>
        </div>
      </div> </td>
      <td>
      
     </td>
   
	<?php
	if($btn_show){
	?>
    <td class="btn-show"><a href="<?php echo $url ?>" class="btn btn-info"><?php echo $info;?></a></td>
<?php } ?>
  </tr>
</table>
<br />
<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th class="table_td_width">Sl. No.</th>
      <th><div>Child ID</div></th>
      <th><div>Child Name</div></th>
      <th><div>Address</div></th>
      <th><div>Photo</div></th>
      <th class="table_td_width1"> <div>Options</div></th>
    </tr>
  </thead>
  <tbody>
<?php

		foreach($data_list as $row):
		?>
    <tr>

      <td class="table_td_width"><?php echo $counter++;?> </td>
      <td><a href="<?php  echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
      <td><?php echo strtoupper($row['child_name']);?> </td>
      <td><?php echo strtoupper($row['postal_address']);?> </td>
      <td><?php  if (file_exists($path.$row['child_id'] .'.jpg')) {
				echo '<img src="'.$path.$row['child_id'].'.jpg" width="150" height="100" />';
			}else{
				echo '<img src="'.$default.'" width="150" height="100" />';
			}?>
      </td>
      <td><?php
			if($role_id==7 ) {
			if($row['pstatus']=='N' ){
			?>
        <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo $edit_url.$row['child_id'];?>" > <i class="entypo-pencil"></i> </a>
		<?php }else{?>
		 <a class="btn btn-info tooltip-primary btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"		href="<?php echo $details_url.$row['child_id'];?>" > <i class="entypo-eye"></i> </a>
        <?php
		}
				 } else {
				 if($role_id==2 && $row['ls_activate'] =='N' && $row['account_role_id'] !=7){
		?>
        <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo $edit_url.$row['child_id'];?>" > <i class="entypo-pencil"></i> </a>
        <?php }
				else{
		?>
        <a class="btn btn-info tooltip-primary btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"		href="<?php echo $details_url.$row['child_id'];?>"  > <i class="entypo-eye"></i> </a>
        <?php }
		}?>
      </td>

    </tr>
    <?php
		endforeach;?>
  </tbody>
</table>
<!-----------------------child list table end----------------------------->
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		//convert all checkboxes before converting datatable
		replaceCheckboxes();

		// Highlighted rows
		$("#table_export tbody input[type=checkbox]").each(function(i, el)
		{
			var $this = $(el),
				$p = $this.closest('tr');

			$(el).on('change', function()
			{
				var is_checked = $this.is(':checked');

				$p[is_checked ? 'addClass' : 'removeClass']('highlight');
			});
		});

		// convert the datatable
		var datatable = $("#table_export").dataTable({

			//"sPaginationType": "bootstrap",
      "columnDefs": [
          { "orderable": false, "targets": 5 }
        ],
			"aoColumns": [
				{ "bSortable": true },
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				null
			],
		});

		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>
<script src="assets/js/neon-custom-ajax.js"></script>
<!--pabitra new-->

<!-- Start of code -->









