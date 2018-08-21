<?php

//$this->load->view("backend/staff/modal_add.php");
//print_r($list);
//print_R($communicationrr);
if($communicationrr){
	foreach ($communicationrr as $row):
	?>
 
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head">
        
        <button type="button" class="btn btn-info" id="backto">Back To List</button>
       </div>

<ul>

        <ul class="dropdown-menu">
          <li class="top">

            <h4>Headning</h4>
           
		   </li>
          <li>
            <ul class="dropdown-menu-list scroller">
            </ul>
          </li>
        </ul>
      </li>
</ul>

         </div>
        <!--<div class="panel-title" > <i class="entypo-plus-circled"></i>
          Message From <span class="text-primary"><?php echo $role_name; ?></span>
           </div>--->
	  
      <div class="panel-body">
	    <?php echo form_open('/comunication/comm_reply/'.$row['com_id'].'/update',array('class' => 'form-horizontal form-groups-bordered validate commu_reply', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>

      <?php //echo form_open('/comunication/save', array('class' => 'form-horizontal ajax-submit12')); ?>
      <?php
        echo form_input(array(
                'type' => 'hidden',
                'value' => $user_id,
                'name' => 'user_id',
				
              ));
        echo form_input(array(
                'type' => 'hidden',
                'value' => $role_name,
                'name' => 'role_name',
              ));
        ?>
        <div class="row">
          <div class="panel-title ptitle"> </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Designation <span class="color-red">*</span></label>
              <div class="col-sm-8" style="padding-top:7px;">
                 <?php if($row['role_name']=='LS') echo 'LS' ; 
                 if($row['role_name']=='LEO') echo 'LEO';
                 ?> 
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="padding-top:7px;">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. District <span class="color-red">*</span></label>
              <div class="col-sm-8 district" style="padding-top:7px;">		 
               <?php foreach ($to_dept_list as $c): ?>
      			<?php if($c['area_id'] == $row['to_dept']){  echo $c['area_name']; } ?></option>
           <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
 <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3.Child Id <span class="color-red">*</span></label>
              <div class="col-sm-8" style="padding-top:7px;">
				<?php echo $row['child_id'];?>
              </div>
            </div>
          </div>
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6" id="produced_other" style="padding-top:7px;">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.Message <span class="color-red">*</span></label>
              <div id="produced_other_fr_grp" class="col-sm-8" style="padding-top:7px;">
                <?php echo $row['massage']; ?>
              </div>
            </div>
            </div>
             </div>
              <div class="row">
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6" id="produced_other" style="padding-top:7px;">
            <div class="form-group">
              <label for="field-1" class="col-sm-4 control-label">5.Reply Message <span class="color-red">*</span></label>
              <div id="produced_other_fr_grp" class="col-sm-8" style="padding-top:7px;">
              
               
               
                <textarea name="remessage" id="remessage" data-validate="required" class="form-control claim_amount" <?php   if($row['reply_message']!=""){?> readonly <?php } ?>  > <?php echo $row['reply_message']; ?></textarea>
                <span class="claim_amount_msg color-red" id="claim_amount_msg"></span>
              </div>
            </div>
            </div>
             </div>
           <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <?php   if($row['reply_message']==""){?>
            <button type="submit" class="btn btn-info" id="btn"> Send </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
             <?php }?>
            <span id="preloader-form"></span>
               <?php $this->load->view("backend/staff/modal_msg_communication.php");?>
               
            
             </div>
    
        </div>
        <?php echo form_close(); ?> 
		</div>
		</div>
    </div>
  </div>
<?php endforeach;?>
<?php } ?>
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->
<script type="text/javascript">

$(document).ready(function () {

		$('button[type="submit"]').prop('disabled', false);
		$(':input', this).change(function() {
  			 if($(this).val() != '') {
       $('button[type="submit"]').prop('disabled', false);
   		 }
		 });
		 
	
	    var options = {
	        beforeSubmit: communication,
	        success: show_communication_rply,
	        resetForm: false
	    };
	    $('.commu_reply').submit(function () {
	        //$('body').scrollTop(0);
	        $(this).ajaxSubmit(options);
	        return false;
	    });

	    
	});
	function hideModal(){
		$('#msgcofrm_modal').modal('hide')
		}
	function submit_conf(){

		var options = {
		        success: hideModal,
		        resetForm: true
		    };
		 $('.commu_reply').ajaxSubmit(options);
	setTimeout(function(){window.location.reload();},500)
		 return false; 
		}
//masage
 var flag=0; 
function communication(formData, jqForm, options) {
	 if(jqForm[0].remessage.value.length == '0')
	   {
	      //flag=1;
	      $("#produced_other_fr_grp").addClass("validate-has-error");
	      $( ".claim_amount" ).focus();
	      $(".claim_amount_msg").html("Reply message should not be blank.");
	     return false;

	    }else{
		   
	        $('#msgcofrm_modal').modal('show');          
			return false;
		    }
	
    
}

 
  function show_communication_rply(responseText, statusText, xhr, $form) {
	  $('html, body').animate({ scrollTop: 0 }, 0);
	  $('#preloader-form').html('');
      $('#msgModal-cmrf_conf1').modal('show');
      
       document.getElementById("submit-button").disabled = false;
      
   }
 
$(function() {
 $( "#cancel-button" ).click(function(){ window.history.back() });
});

$(function() {
	 $( "#view-msg" ).click(function(){ window.history.back() });
	});
  
</script>  
<script type="text/javascript">
  $('#datepicker2').datepicker({
    format: 'yyyy-mm-dd',
	
     autoclose: true
});
  
</script>
<script>
$(document).ready(function(){
    $("#remessage").keypress(function(){
        $('.claim_amount_msg').html('');
    });
});

$(function() {
		  $( "#backto" ).click(function(){ window.history.back() });
		 });
</script>
