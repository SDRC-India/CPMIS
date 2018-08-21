<style>
#error_msg{
color:red;
}
.newClass{
border: 1px solid red;
}
</style>
<?php
include "modal_msg_aftr_rescue.php";
$vdob="";
$vyear="";
$vmonth="";
$vdtfinal="";
foreach ($edit_data as $row):
		
?>
<!-----------------------------start of after rescue edit------------------------------->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div style="float:right; margin-top:12px; margin-right:20px;"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?staff/after_rescued">List/Edit </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          </div>
      </div>
	  <?php $row12 = $this->db->select('*')->get_where('child_basic_detail',array('child_id' => $row['child_id']))->result_array();
								  
                           foreach($row12 as $dobs):
						   $dob=$dobs['dob'];
						   $date_rescued = $dobs['idate_of_rescue'];
							endforeach;
							?>
      <div class="panel-body">
			<?php 
			if($row['date_handing']!='' && $row['dist']!='' && $row['name_handed']!=''){
			$row['is_locked']=1;
			}
			?> <?php echo form_open('staff/afterrescued_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1: Name of CWC whom child was referred to<span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="cwc_name" id="cwc_name"data-validate="required" data-message-required="This field is required"
				 value=" <?php echo $row['cwc_name']; ?>"  >
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2: Districts<span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <select name="dist" id="dist" class="form-control" data-validate="required" data-message-required="This field is required">
                  <option value="">Select Districts</option>
                  <?php 
								  $child_dist2 = $this->db->select('*')->where('parent_id','IND010')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
                                  foreach($child_dist2 as $crow21):
                                  ?>
                  <option value="<?php echo $crow21['area_id'];?>" <?php if($row['dist']==$crow21['area_id']){ echo 'selected'; }  ?>><?php echo $crow21['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                  <!-- js populates -->
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Date & Time<span style="color:#F00;">*</span></label>
              <div class="col-sm-8">
                <div class='input-group date' id='datetimepicker'>
					<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  <input type="text" class="form-control " name="date_handing" id="date_handing" data-validate="required" data-message-required="This field is required"
				   value="<?php echo $row['date_handing']; ?>" readonly>
                </div>
				 <span id="error_msg"></span>
              </div>
            </div>
          </div>
		  <div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4 .Whether Child is residing at place where restored</label>
              <div class="col-sm-8">
               
                 <select name="place_restored" class="form-control" id="place_restored">
				 <option value="">Select</option>
                  <option value="Yes" <?php if($row['place_restored']=='Yes') echo 'selected'; ?> > Yes </option>
                  <option value="No" <?php if($row['place_restored']=='No') echo 'selected'; ?> > No </option>
                </select>
                
              </div>
            </div>
          </div>
	    </div>
		<!--new-->
		<div id="place_restored_no">
		<div class="row">
          <div class="panel-title" style="margin-left:20px; margin-bottom:10px;" > </div>
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4 i.Reason for missing</label>
              <div class="col-sm-8">
               
                <input type="text" class="form-control" name="reason_for_missing" id="reason_for_missing"  value="<?php echo $row['reason_for_missing']; ?>">
                
              </div>
            </div>
          </div>
		   <div class="col-sm-6" id="">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4 ii.Date of missing</label>
              <div class="col-sm-8">
               
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_missing" id="date_of_missing"  value="<?php echo $row['date_of_missing']; ?>"  readonly>
                </div>
                
              </div>
            </div>
          </div>
	    </div>
		</div>
		<!--end-->
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <?php if($row['is_locked']=='0') { ?>
            <button type="submit" class="btn btn-info" id="submit-button"> Update </button>
            <?php }?>
            <?php if($row['is_locked']=='1') { ?>
            <span style=" color:#090"> <strong>updated</strong> </span>
            <?php }?>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<!----------------------end of after rescue edit--------------------------------->
<?php endforeach;?>
<script>
    $(document).ready(function () {
	
	
	 	$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });
	
		if($('#place_restored').val() == 'No') {
            $('#place_restored_no').show(); 
			

       		 } else {
            $('#place_restored_no').hide(); 
			
       		 } 
	
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });
    });

    function validate_project_add(formData, jqForm, options) {
		if (!jqForm[0].cwc_name.value)
        {
            return false;
        }
		if (!jqForm[0].dist.value)
        {
            return false;
        }
		if (!jqForm[0].date_handing.value)
        {
            return false;
        }
		var date = document.getElementById('date_handing').value;
		var rescued_date = "<?php echo $date_rescued;?>"; 
		if(date!=""){
			if(  new Date(rescued_date) > new Date(date)  ){
			$("#error_msg").html("Date of rescue should be more than date of rescue");
			document.getElementById("date_handing").focus();
			$("#datetimepicker").addClass("newClass");
			return false;
			}
		}
		
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		 $('#msgModal_rescue').modal('show');
        document.getElementById("submit-button").disabled = false;
    }

$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
 
 
 $(function() {
	
   		 $('#place_restored').change(function(){
        	if($('#place_restored').val() == 'No') {
            $('#place_restored_no').show(); 
			

       		 } else {
            $('#place_restored_no').hide(); 
			
       		 } 
    	});
		});

</script>

<script type="text/javascript">
var FromEndDate = new Date();
$('#datetimepicker').datetimepicker({
endDate: FromEndDate,
autoclose: true
});
 var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});     
    </script>

