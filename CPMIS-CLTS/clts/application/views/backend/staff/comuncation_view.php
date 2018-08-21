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
        <div class="child_list_head"><a href="<?php echo base_url(); ?>index.php?comunication">View Messages</a>

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
              <label for="field-1" class="col-sm-3 control-label">1.Select Designation <span class="color-red">*</span></label>
              <div class="col-sm-8">
                <select name="role_model" class="form-control" id="role_model" data-validate="required" >
               <option value="">
                            Select
                            </option>
                      
                            <option value="LS" <?php if($row['role_name']=='LS') echo 'selected'; ?>>
                            LS
                            </option>
							  </option>
                            <option value="LEO" <?php if($row['role_name']=='LEO') echo 'selected'; ?>>
                            LEO
                            </option>
                          
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2.Select District <span class="color-red">*</span></label>
              <div class="col-sm-8 district">
		 <select class="form-control" name="department" id ="department" data-validate="required">
		
		  <option value="">-- Select --</option>
               <?php foreach ($to_dept_list as $c): ?>
       <option value="<?php echo $c['area_id'];?>" <?= ($c['area_id'] == $row['to_dept'] ? "selected" : "")?>><?php echo $c['area_name']; ?></option>
           <?php endforeach; ?>
		 </select>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
 <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3.Child Id <span class="color-red">*</span></label>
              <div class="col-sm-8">
		<input type ="text" value ="<?php echo $row['child_id'];?>" class="form-control" name="child_id" readonly />
              </div>
            </div>
          </div>
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6" id="produced_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4.Type Message <span class="color-red">*</span></label>
              <div id="produced_other_fr_grp" class="col-sm-8">
                <textarea name="message" id="message" class="form-control claim_amount" rows="3"  ><?php echo $row['massage']; ?></textarea>

                <span class="claim_amount_msg color-red"></span>
              </div>
            </div>
            </div>
             </div>
           <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button"> Update </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
  </div>
<?php endforeach;?>
<?php }else{?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?comunication">View Messages</a>

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
           </div>-->
      </div>
	  
      <div class="panel-body">
	    <?php echo form_open('/comunication/save' , array('class' => 'form-horizontal form-groups-bordered validate ajax-submit12', 'enctype' => 'multipart/form-data' , 'name'=> 'demoForm1'));?>

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
              <label for="field-1" class="col-sm-3 control-label"> Select Designation  <span class="color-red">*</span></label>
              <div class="col-sm-8">
                <select name="role_model" class="form-control" id="role_model" data-validate="required">
               <option value="">
                            Select
                            </option>
                      
                            <option value="LS" <?php if($rows['role_name']=='LS') echo 'selected'; ?>>
                            LS
                            </option>
							  </option>
                            <option value="LEO" <?php if($rows['role_name']=='LEO') echo 'selected'; ?>>
                            LEO
                            </option>
                       <input type="hidden" name="hiddenvalue" id="hiddenvalue" value="<?php echo $role_id ; ?>" > 
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> Select District  <span class="color-red">*</span></label>
              <div class="col-sm-8 District">
		 <select class="form-control" name="department" id ="department" data-validate="required">
		 <option value="">-- Select --</option>
		 
		 </select>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
 <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label"> Select Child Id  <span class="color-red">*</span></label>
              <div class="col-sm-8 child_id_sel" >
		 <select class="form-control" name="child_id" id="child_id" data-validate="required">
		 <option value="">-- Select --</option>
		 
		 </select>
              </div>
            </div>
			 <span class="child color-red"></span>
          </div>
          <div class="panel-title ptitle" > </div>
          <div class="col-sm-6" id="produced_other">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Type Message  <span class="color-red">*</span></label>
              <div id="produced_other_fr_grp" class="col-sm-8"><?php 
			  
			 
			  
			  ?>
                <textarea name="message" id="message" class="form-control claim_amount" rows="3" data-validate="required"  ><?php echo  $massage; ?></textarea>

                <span class="claim_amount_msg color-red"></span>
              </div>
            </div>
            </div>
             </div>
           
          
        


        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button"> Send </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
<?php }?>

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
