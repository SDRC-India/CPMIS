<?php $this->load->view("backend/staff/modal_msg_chat.php");
//print_r($list);
//print_R($communicationrr);
if($communicationrr){
foreach ($communicationrr as $row):
?>
 
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"><a href="<?php echo base_url(); ?>index.php?comunication">Back To List</a>

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
      </div>
	  
      <div class="panel-body">
	    <?php echo form_open('/comunication/save/'.$row['com_id'],array('class' => 'form-horizontal form-groups-bordered validate ajax-submit12', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>

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
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.Select District <span class="color-red">*</span></label>
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
          <div class="col-sm-6" id="produced_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.Message <span class="color-red">*</span></label>
              <div id="produced_other_fr_grp" class="col-sm-8" style="padding-top:7px;">
                <?php echo $row['massage']; ?>
                <span class="claim_amount_msg color-red"></span>
              </div>
            </div>
            </div>
             </div>
             
        <?php echo form_close(); ?> </div>
    </div>
  </div>
  </div>
<?php endforeach;?>
<?php } ?>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">
$("#role_model").on('change', function (e) {
  //var optionSelected = $("option:selected", this);
    var valueSelected  = $(this).val();
    var roll_id  = $(hiddenvalue).val();
  
  if(valueSelected){
    
    $.ajax({
      url: "<?php echo base_url()?>index.php?comunication/order_ls/"+roll_id,
      type: "post",
      data: {valueSelected:valueSelected},
      //dataType :"JSON",
      success: function (response) {
        //alert(response);
        $("#department").html(response);
	
		 
      }
    });
  }
}); 
//child_id


$("#department").on('change', function (e) {
  //var optionSelected = $("option:selected", this);
    var department  = $(this).val();
  
    $.ajax({
      url: "<?php echo base_url()?>index.php?comunication/get_child_id",
      type: "post",
      data: {department:department},
      //dataType :"JSON",
      success: function (response) {
        //alert(response);
        $("#child_id").html(response);
	
		 
      }
    });
  
}); 







//masage
  
function communication(formData, jqForm, options) {
	
	if(jqForm[0].department.value.length==0)
	{
			return false;
		
	}
	if(jqForm[0].child_id.value.length==0)
	{
			return false;
		
	}
	
	 if(jqForm[0].message.value.length == '0')
   {
      flag=1;
      $("#produced_other_fr_grp").addClass("validate-has-error");
      $( ".claim_amount" ).focus();
      $(".claim_amount_msg").html("This field required");
     return false;

    }
    else{
      $("#poceeding_certificate_authority_other_fr_grp").removeClass("validate-has-error");
     $(".poceeding_certificate_authority_other_msg").html("");
    }



	$('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
    document.getElementById("submit-button").disabled = true;  
}

$(window).load(function () {

     var options = {
         beforeSubmit: communication,
           success: show_message1,
         resetForm: false
     };
     $('.ajax-submit12').submit(function () {
        $('body').scrollTop(0);
         $(this).ajaxSubmit(options);
          // location.reload();
         return false;
         
     });
 });
 
  function show_message1(responseText, statusText, xhr, $form) {
	  if(responseText)
	  {
		  console.log(responseText);
	  }
	  $('#preloader-form').html('');
  $('#msgModal_act').modal('show');
       document.getElementById("submit-button").disabled = false;
   }
 
 $(function() {
 $( "#cancel-button" ).click(function(){ window.history.back() });
});
  
</script>  
<script type="text/javascript">
  $('#datepicker2').datepicker({
    format: 'yyyy-mm-dd',
	
     autoclose: true
});
  
</script>
