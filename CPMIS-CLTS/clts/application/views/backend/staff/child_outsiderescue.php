<?php
foreach ($view_child_data as $row):

?>
<!-- Start of code -->
<?php 
if($roll_id==30){
?>
<div style="text-align:right; height:10px;margin-right:18px;" ><a href="<?php echo base_url(); ?>index.php?outside_childdetail" ><b>Back To List</b></a></div>
<?php }else{ ?>
<div style="text-align:right; height:10px;margin-right:18px;" ><a href="<?php echo base_url(); ?>index.php?rescue_outside" ><b>Back To List</b></a></div>
<?php } ?>
<div class="row">
  <div class="col-md-12">
    <div class="panel-body">
      <div id="printable3">
        <div class="tarea">
          <div class="print_logo"> <img src="assets/images/bihar_logo_red.jpg" alt="Bihar Government" align="left" width="150"> <img src="assets/images/unicef_logo.jpg" alt="Unicef" align="right" width="120" > </div>
          <!-- Table for Basic Information Starts -->
          <table class="table table-bordered table-striped">
          <?php $child_dist=$row['child_district_name'] ;   
                $res_dist=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$child_dist'")) ;
                $district= $res_dist['area_name'] ;
                
                $child_block=$row['child_block_name'] ;
                $res_block=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$child_block'")) ;
                $block_name= $res_block['area_name'] ;
                
                
                $child_state=$row['child_state_name'] ;
                $res_state=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$child_state'")) ;
                $state= $res_state['area_name'] ;
                
                ?>
            <tbody>
           	 <tr>
                <th colspan="2" class="bg-navy" ><h3>Rescued Child Basic Information</h3>  </th>
              </tr>
             <tr>
                             <td class="t-title">1. Photo</td>
                <td><img src="<?php if(file_exists($upload_path.$row['id'].'.jpg')) { echo $upload_path.$row['id'].'.jpg'; }else{ echo $default;} ?>" alt="..." class="child_img" id="child_img" onclick="display_child_image();"></td>
              </tr>
              <tr>
                <td class="t-title">2. Name of the Child</td>
                <td class="t-description"><?php echo $row['child_name']; ?></td>
              </tr>
              <tr>
                <td class="t-title">3. Gender</td>
                <td class="t-description"><?php echo $row['gender']; ?></td> 
              </tr>
           
              <!-- ---------------end of dob show and hide---------------->
             
              
               <tr>
               
               
               <?php if($row['isdob']=="Yes"){?>
                    
                   <td class="t-title">4. Date of Birth</td> 
                   <td class="t-description"><?php echo $row['dob'];?></td> 
                    
               <?php }else{?>
                    <td class="t-title">4. Age</td> 
                    <td class="t-description"><?php echo $row['age'];?></td> 
               <?php }?>
                
              </tr>
              
              
              
              
              
              <tr>
                <td class="t-title">5. Mother's Name</td>
                <td class="t-description"><?php echo $row['mother_name']; ?></td>
              </tr>
              <tr>
                <td class="t-title">6. Father's Name</td>
                <td class="t-description"><?php echo $row['father_name']; ?></td>
              </tr>
               <tr>
                <td class="t-title">7. Village Name Of The Child</td>
                <td class="t-description"><?php echo $row['village_name']; ?></td>
              </tr>
               <tr>
                <td class="t-title">7.i District Name Of Child</td>
                <td class="t-description"><?php
              echo   $district;
                ?></td>
            
              </tr>
              <tr>
                <td class="t-title">7.ii Block Name Of Child</td>
                <td class="t-description"><?php
                echo $block_name ;
                ?></td>
              </tr>
              <tr>
                <td class="t-title">7.iii State Name</td>
                <td class="t-description"><?php
                echo $state ;
                ?></td>
              </tr>
              <tr>
                <td class="t-title">8. Rescued Date </td>
                <td class="t-description"><?php echo $row['rescue_date']; ?></td>
              </tr>
              <tr>
                <td class="t-title">8.i Rescued By</td>
                <td class="t-description"><?php echo $row['rescue_by']; ?></td>
              </tr>
               <tr>
                <td class="t-title">9. Nature Of Work Engaged In</td>
                <td class="t-description"><?php echo $row['nature_work']; ?></td>
              </tr>
              <tr>
                <td class="t-title">10. Child Rescued State</td>
                <td class="t-description"><?php
                $child_rstate=$row['rescued_state'] ;
                $res_rstate=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$child_rstate'")) ;
                echo $res_rstate['area_name'] ;
                
                ?></td>
              </tr>
              <tr>
                <td class="t-title">10.i Rescued District</td>
                <td class="t-description"><?php
                $child_rdstate=$row['rescued_dist'] ;
                $res_rdstate=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$child_rdstate'")) ;
                echo $res_rdstate['area_name'] ;
                ?></td>
              </tr>
              <tr>
                <td class="t-title">10.ii Rescued Block</td>
                <td class="t-description"><?php echo $row['rescued_block']; ?></td>
              </tr>
              <tr>
                <td class="t-title">11. Employer Name</td>
                <td class="t-description"><?php echo $row['employer_name']; ?></td>
              </tr>
              <tr>
                <td class="t-title">11.i Address Of The Employer's Workplace</td>
                <td class="t-description"><?php echo $row['address_of_employername']; ?></td>
              </tr>
              <tr>
                <td class="t-title">12. Type Of Certificate Issued</td>
                <td class="t-description"><?php echo $row['type_of_certificate']; ?></td>
              </tr>
              <?php if(file_exists($upload_path_bonded."/".$row['id'].'.jpg')) { ?>
               <tr>
               <td class="t-title">A. Child Bonded Labour</td>
              <td><img src="<?php if(file_exists($upload_path_bonded."/".$row['id'].'.jpg')) { echo $upload_path_bonded."/".$row['id'].'.jpg'; } ?>" alt="..." class="child_img"></td>
              </tr>
              <?php } ?>
                            <?php if(file_exists($upload_path_lbr."/".$row['id'].'.jpg')) { ?>
              <tr>
              <td class="t-title">B. Child Labour</td>
              <td><img src="<?php if(file_exists($upload_path_lbr."/".$row['id'].'.jpg')) { echo $upload_path_lbr."/".$row['id'].'.jpg'; } ?>" alt="..." class="child_img"></td>
              </tr>
                <?php } ?>
                            <?php if(file_exists($upload_path_age."/".$row['id'].'.jpg')) { ?>
              <tr>
              <td class="t-title">C. Age</td>
              <td><img src="<?php if(file_exists($upload_path_age."/".$row['id'].'.jpg')) { echo $upload_path_age."/".$row['id'].'.jpg'; } ?>" alt="..." class="child_img"></td>
              </tr>
                <?php } ?>
                            <?php if(file_exists($upload_path_othr."/".$row['id'].'.jpg')) { ?>
              <tr>
              <td class="t-title">D. Others</td>
              <td><img src="<?php if(file_exists($upload_path_othr."/".$row['id'].'.jpg')) { echo $upload_path_othr."/".$row['id'].'.jpg'; } ?>" alt="..." class="child_img">
              &nbsp;&nbsp;&nbsp;<?php echo $row['others_form']; ?></td>
              </tr>
                <?php } ?>
               </tr>
              </tbody>
              </table>
          <!-- Table for Rehabilitation Ends -->
          <?php endforeach;?>
        </div>
      </div>
      <div id="editor"></div>
      <div class="form-group print_button">
        <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
        <button type="submit" class="btn btn-info btn-login" id='prnt2'> <i class="entypo-print"></i> Print </button>
      </div>
      <div class="left_float"> </div>
      <div style="clear:both"></div>
    </div>
  </div>
</div>
<script>
function display_child_image()
{
	var largeImage = document.getElementById('child_img');
largeImage.style.display = 'block';
largeImage.style.width=200+"px";
largeImage.style.height=200+"px";
var url=largeImage.getAttribute('src');
window.open(url,'Image','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');  
}

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });


	 $('#prnt2').on('click', function() {
         $.print("#printable3");
			});

</script>
