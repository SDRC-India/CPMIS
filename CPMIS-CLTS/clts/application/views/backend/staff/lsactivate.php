<?php $this->load->view("backend/staff/modal_msg_forwardcwc.php");?>
<?php $this->load->view("backend/staff/modal_final_orderpass_confirm.php"); ?>			
<?php


function GetAge($dob="01/01/1970")
{
        $dob=explode("/",$dob);
        $curMonth = date("m");
        $curDay = date("j");
        $curYear = date("Y");
        $age = $curYear - $dob[2];
        if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[0]))
                $age--;
        return $age;
}
//echo GetAge('01/01/1972');
//print_r($child_forwarded_data);

foreach ($child_forwarded_data as $row):
?>
<!-------------------start of lsactivate---------------------------->

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?ls_activation">Child List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Child Basic Information - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body">
        <?php
				 /*if($row['ls_activate']=='N') {

				echo form_open('ls_activation/forward_to_cwc/lsactivate/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data'));

				 }


				 if($row['ls_activate']=='Y') {

				echo form_open('admin/project/lsdeactivate/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data'));

				 }*/

                 
				?>
			<?php //form_open('ls_activation/final_order_passed_by_ls/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-passOrder', 'enctype' => 'multipart/form-data'));
                             ?>	
        <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label">Date of Rescue:</label>
            <div class="col-sm-8">
              <label for="field-1" class="col-sm-3 control-label text-left-width" > <?php echo $row['idate_of_rescue']; ?></label>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group">
        <label for="field-1" class="col-sm-3 control-label">Name:</label>
        <div class="col-sm-8">
        <label for="field-1" class="col-sm-3 control-label text-left"  >
        <?php echo $row['child_name']; ?></label>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Sex:</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <label for="field-1" class="col-sm-3 control-label text-left" >
                  <?php if($row['sex']=='Male') echo 'Male'; ?>
                  <?php if($row['sex']=='Female') echo 'Female'; ?>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Date of Birth/Years:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left"  >
                <?php if($row['dob']=="") { echo $row['year']."  Years<br/>".$row['month']."  Months"; } else  { echo $row['dob']; } ?>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Father's Name:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left" ><?php echo $row['father_name']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Marital Status:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left"> <?php echo $row['material_status']; ?> </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Mother's Name:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left-width"><?php echo $row['mother_name']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Religion:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left" > <?php echo $row['religion']; ?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Address:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left-width" ><?php echo $row['postal_address']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Category:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left-width" > <?php echo $row['category']; ?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Cast Category:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left-width"><?php echo $row['cast']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label " >State:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-4 control-label text-left">

                <?php echo $row['state_name'];?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">District:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label text-left-width">
                <?php echo $row['district_name'];?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Block:</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label text-left" >
                <?php echo $row['block_name'];?></label>
                </label>
              </div>
            </div>
          </div>
        </div>
		
		<br/>
		<br/>
		<br/>
		   <div class="row">
		   
		   <div class="col-md-3"></div>
           <div class="col-md-2">
            <?php if($row['ls_activate']=='N') { ?>
			
			<form action="<?php echo base_url(); ?>index.php?ls_activation/forward_to_cwc/lsactivate/<?php echo $row['id'];?>" method="post" class="form-horizontal form-groups-bordered validate project-add" enctype='multipart/form-data'  >
            <button type="submit" value="ls_activate" class="btn btn-info" id="submit-button"> Forward to CWC </button>
			<?php $this->load->view("backend/staff/modal_msg_lsforward_confirm.php");?>


			
            <?php  }	?>
           
		     </form>
			</div >
           <div class="col-md-2"> <button type="button" class="btn btn-info" id="cancel-button"> Back to List</button></div>
			
			<?php 
		  //don't remove this 
		    $date_of_rescue_time=strtotime($row['idate_of_rescue']);
		    $rescued_before_june_2016_time=strtotime($rescued_before_june_2016);
		  //don't remove above
			  if($date_of_rescue_time < $rescued_before_june_2016_time)
			  {
				  if($row['pstatus']=='N'){
				 echo '<form action="'.base_url().'index.php?ls_activation/final_order_passed_by_ls/'.$row['child_id'].'" method="post" class="form-horizontal form-groups-bordered validate project-passOrder" enctype="multipart/form-data"  ><div class="col-md-4"><button type="submit" value="pass_order" class="btn btn-info" id="final_order_button">Disposed By LS</button></div>';
				  $this->load->view("backend/staff/ls_final_order_confirm.php");
				 echo '</form>';
				  }
				  else{
					echo '<div class="col-md-2"><button class="btn btn-info" disabled >Disposed By LS</button></div>';  
				  }
				 
			   }
				else{
					
					echo '<div class="col-md-2"><button class="btn btn-info" disabled >Disposed By LS</button></div>';
				}			   ?>
				<div class="col-md-3"></div>
            <span id="preloader-form"></span>
			 	</div>
          
       
    
  </div>
</div>
</div>
</div>

<?php $child_id=$row['child_id']; ?>
<?php endforeach;?>
<!-----------------------end of ls activate---------------------->
<script>
    $(document).ready(function () {
		//$('#msgModal_ls_farward').modal('hide');
		
		
		
        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
		/*var options_pass = {
            beforeSubmit: validate_pass_order,
            success: show_response_pass_order,
            resetForm: true
        };*/
        $('.project-add').submit(function () {
			$("body").scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
		
		var options_pass = {
            beforeSubmit: validate_pass_order,
            success: show_response_pass_order,
            resetForm: true
        };
       $('.project-passOrder').submit(function () {
				console.log("asdbsad");
            $("body").scrollTop(0);
            $(this).ajaxSubmit(options_pass);

            return false;
        });
    });

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

    function validate_project_add(formData, jqForm, options) {
	
		//$('#msgModal_ls_farward').modal('show');
		if (document.getElementById('msgModal_ls_farward').style.display!='block')
		{
         $("body").scrollTop(0);
		 $('#msgModal_ls_farward').modal('show');
		return false;
		}
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }
    function validate_pass_order(formData, jqForm, options) {
		//$('#msgModal_ls_farward').modal('show');
		if (document.getElementById('ls_final_order_pass').style.display!='block')
		{
         $("body").scrollTop(0);
		$('#ls_final_order_pass').modal('show');
		return false;
		}
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("final_order_button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
             //console.log(responseText);
		$('#msgModal_ls_farward').modal('hide');
        $('#preloader-form').html('');
 
		 $('#farward_cwc').modal('show');

        document.getElementById("submit-button").disabled = false;
    }
	function show_response_pass_order(responseText, statusText, xhr, $form) {

		$('#ls_final_order_pass').modal('hide');
        $('#preloader-form').html('');

		 $('#passed_order').modal('show');

        document.getElementById("submit-button").disabled = false;
    }


</script>
