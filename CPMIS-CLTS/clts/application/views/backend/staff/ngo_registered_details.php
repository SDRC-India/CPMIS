<?php
include "modal_msg_ngo.php";

foreach ($view_ngo_data as $row):
?>
<script>
  setTimeout(function() {
  $('#ngoupdate').fadeOut('fast');
}, 10000); // <-- time in milliseconds
  </script>
<div class="row">
	<div class="col-md-12">
			        <div class=" col-md-offset-10" style="padding-left:80px;padding-bottom:6px;"><button type="button" class="btn btn-info" id="backto">Back To List</button></div>	
		<div class="panel panel-primary" data-collapsed="0">		
			<div class="panel-body">
                <?php echo form_open('ngo_registered_list/approve/'.$row['id'].'/'.$roles_id , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit12', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">1.<?php echo get_phrase('name');?></label>

						<div id="name_fr_grp" class="col-sm-7">
                      	<div class="input-group">
							<?php echo $row['name'] ; ?>
							</div>
						<span class="name_msg color-red"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">2.Email</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php echo $row['email'] ; ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">3.Contact</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php echo $row['contact'] ; ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">4.Registration Number</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php echo $row['regno'] ; ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">5.Date of Registration</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php echo $row['date_reg'] ; ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">6.Geographic area of operation</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php if($row['geo_operation']!=""){ echo $row['geo_operation'] ;} else{ echo "Not Available" ; } ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">7.Thematic areas of operation</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php if($row['thematic_operation']!=""){ echo $row['thematic_operation'] ; }else{ echo "Not Available" ; } ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">8.Income and expenditure statements</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php if($row['incom_expend']!=""){ 
							?>
							<a download="<?php echo  $row['incom_expend'] ; ?>" href="<?php echo $row['incom_expend'] ; ?>" class="btn btn-lg" >
      <span class="glyphicon glyphicon-download"></span> Download 
</a>
							<?php
							}else{ echo "Not Available" ; } ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">9.Tax returns</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php if($row['text_return']!=""){ 
								?>
								<a download="<?php echo  $row['text_return'] ; ?>" href="<?php echo $row['text_return'] ; ?>" class="btn btn-lg" >
      <span class="glyphicon glyphicon-download"></span> Download 
							</a>
								<?php
								}else{ echo "Not Available" ; } ?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">10.Trustees (if applicable)</label>
						<div class="col-sm-7">
                      	<div class="input-group">
					<?php   $role_board_trust = $this->db->get_where('board_trust_name',array('reg_id'=>$row['id'],'type'=>2))->result_array();
				
				if($role_board_trust[0]!=""){

					foreach ($role_board_trust as $board_trust):
					
							echo $board_trust['name']."<br><hr>" ;
					?>
										 <?php endforeach;
										 }
										 else{
										 echo "Not available" ;
										 ?>
										 <?php } ?>

						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">11.Board Members</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php   $role_board_trust1 = $this->db->get_where('board_trust_name',array('reg_id'=>$row['id'],'type'=>1))->result_array();
				if($role_board_trust1[0]!=""){
					foreach ($role_board_trust1 as $board_trust):
					
							echo $board_trust['name']."<br><hr>" ;
					?>
										 <?php endforeach; }
										 else{
										 echo "Not Available" ;
										 ?>
										 <?php } ?>					
										 </div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">12.Chief of organization</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php if($row['chairman']){ echo $row['chairman'] ; }else{ echo "Not Available" ; } ?>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label">13.Member secretary</label>
						<div class="col-sm-7">
                      	<div class="input-group">
							<?php if($row['member_secretary']!=""){ echo $row['member_secretary'] ; }else{ echo "Not Available" ;} ?>
						</div>
						</div>
					</div>
					
					<div class="form-group">
					  <label for="field-2" class="col-sm-4 control-label">14.<?php echo get_phrase('duplicate_NGO');?></label>
					   <div class="col-sm-4">						
						<div class="input-group ">
						<?php if($roles_id==2){ ?>
						<span class="input-group-addon"></span>
						<select class="form-control" name="duplicat_ngo" id="duplicat_ngo" <?php if($row['approve_status']==1){ ?> disabled <?php } ?>>
							  <option value="0">Select</option>
							  <option <?php if($row['duplicate_ngo']=="Yes"){ echo "selected"; } ?> value="Yes">Yes</option>
							  <option <?php if($row['duplicate_ngo']=="No"){ echo "selected"; } ?> value="No">No</option> 
						</select>
						<?php } if($roles_id==10){
						if($row['duplicate_ngo']!=""){ echo $row['duplicate_ngo'] ; }else{ echo "Not available" ; } 
						} ?>
					  </div>
					</div>
					</div>
					<div class="form-group">
					  <label for="field-2" class="col-sm-4 control-label">15.<?php echo get_phrase('Description');?></label>
					   <div class="col-sm-4">						
						<div class="input-group ">
						<?php if($roles_id==2){ ?>
						<span class="input-group-addon"></span>
						 <textarea class="form-control" name="descreg" id="descreg" placeholder="Address" <?php if($row['approve_status']==1){ ?> disabled <?php } ?> ><?php echo $row['duplicate_desc'] ;?></textarea>
						<?php } if($roles_id==10){
						if($row['duplicate_desc']!=""){ echo $row['duplicate_desc'] ; }else{ echo "Not available" ; } 
						} ?>
					  </div>
					</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-7">
							<?php if($roles_id==2){ 
							if($row['approve_status']==1){ echo "<br><button type='submit' class='btn btn-info' id='alreadyapprove' disabled  >Already approved</button>" ;}else{
							?>
							<br><div><a href="index.php?ngo_registered_list" class="btn btn-info"><?php echo get_phrase('Cancel');?></a>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-info" id="submit-button" onclick="showAjaxModal3();"  ><?php echo get_phrase('Update');?></button></div>
							<?php } }  if($roles_id==10){ 
							if($row['approve_status']==1){ echo "<br><button type='submit' class='btn btn-info' id='approv' disabled  >Approved</button>" ;}else{
							?>
							<br><a href="index.php?ngo_registered_list" class="btn btn-info"><?php echo get_phrase('Cancel');?></a>&nbsp;&nbsp;
							<button type="submit" class="btn btn-info" id="submit-button" onclick="showAjaxModal3();"  ><?php echo get_phrase('Approve');?></button>
							<?php } } ?>
							</div>
							<span id="preloader-form"></span>
					</div>

					</form>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
 <?php endforeach;?>


<script src="assets/js/bootstrap-switch.min.js"></script>

<!-- calling ajax form submission plugin for specific form -->
  

<!-- calling ajax form submission plugin for specific form -->

<script src="assets/js/neon-custom-ajax.js"></script>
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
			"sPaginationType": "bootstrap",
			"aoColumns": [
				{ "bSortable": false },
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
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
<script>
function validate_project_ngo(formData, jqForm, options) {
}

	$(window).load(function () {

      var options = {
          beforeSubmit: validate_project_ngo,
            success: show_message1,
          resetForm: false
      };
      $('.ajax-submit12').submit(function () {
         $('body').scrollTop(0);
          $(this).ajaxSubmit(options);

          return false;
          //window.reload();
      });
  });
  
   function show_message1(responseText, statusText, xhr, $form) {
		/* window.location.reload();
        toastr.success("Information Updated Successfully", "Success");*/

		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
  
  $(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
  
  $(function() {
	  $( "#backto" ).click(function(){ window.history.back() });
	 });

  
</script>
