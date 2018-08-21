
<?php $this->load->view("backend/staff/modal_msg_cmrf_trn.php");?>


<!----------------------child rescued page started---------------------------------->
<div class="row child_rescued">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?cmrf_transaction_details">List/Edit CMRF Transaction Details </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Transaction Details</div>
      </div>
      <!-- district wise transaction  -->
      <div class="panel-body"> <?php echo form_open('cmrf_transaction_details/newRecord/create/', array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data','name'=> 'basicForm')); ?>
	 
       
	 <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
         District  Requirements 
         </div>
      </div>
      <div class="panel-body"> 
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1.Select District<span class="color-white">*</span></label>
              <div class="col-sm-8">
                <select name="districts" id="districts"  class="form-control dist"  data-validate="required">
                <option value="">Select</option>
                  <?php foreach($district_list as $crow2):  ?>
                  <option value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php endforeach;?>

                </select>
              </div>
          </div>
           </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Date of demand raised by DM <span class="color-white">*</span></label>
              <div class="col-sm-8">
                 <div class="input-group date" id="dr_datepcker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="dr_date" id="dr_date"  value=""  data-validate="required"  >
                </div>
				<span id="error_msg"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div  class="form-group dr_letter_no_fr_grp">
              <label for="field-1" class="col-sm-3 control-label">3. Demand raised letter no
              <span class="color-white">*</span>
              </label>
              <div  class="col-sm-8 ">
                <input type="text" class="form-control dr_letter_no" name="dr_letter_no" id="dr_letter_no" value="" maxlength="30"
                               data-validate="required" data-message-required="This field is required."
							   ondrop="return false;"
                             />
        <span class="dr_letter_no_msg color-red"></span>
    <span id="error" class="hide" >* Special Characters not allowed</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div  class="form-group ">
              <label for="field-1" class="col-sm-3 control-label">4. No. of CL for whom demand raised
              <span class="color-white">*</span>
              </label>
              <div  class="col-sm-8">
                <input type="text" class="form-control" name="dr_cl_no" id="dr_cl_no" value="" maxlength="30"
                               data-validate="required" onkeypress="return isNumberKey(event);"  data-message-required="This field is required"
							   ondrop="return false;"
                             />
        <span class="cname_msg color-red"></span>
    <span id="error" class="hide" >* Special Characters not allowed</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
	        <div class="col-sm-6">
	            <div  class="form-group ">
	              <label for="field-1" class="col-sm-3 control-label">5. Amount Raised
	            
	              </label>
	              <div  class="col-sm-8">
	                <input type="text" readonly class="form-control cname " readonly  name="dr_amount" id="dr_amount" 
	                              
	                             />
	        <span class="cname_msg color-red"></span>
	    <span id="error" class="hide" >* Special Characters not allowed</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-6">
	            
	          </div>
         </div>
         <!-- district wise transaction  -->
         </div>
         </div>
         
         <!-- LRD transaction -->
         <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
         <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          LRD Released</div>
      </div>
      <div class="panel-body"> 
         
         <div class="row">
        
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Date of demand released <span class="color-white">*</span></label>
              <div class="col-sm-8">
                 <div class="input-group date" id="drel_datepcker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="drel_date" id="drel_date"  value=""  data-validate="required"  >
                </div>
				<span id="error_msg_drel_date" class="color-red"></span>
              </div>
            </div>
          </div>
        
        <div class="col-sm-6">
            <div  class="form-group ">
              <label for="field-1" class="col-sm-3 control-label">7. Letter no. of demand released
              <span class="color-white">*</span>
              </label>
              <div  class="col-sm-8">
                <input type="text" class="form-control" name="drel_letter_no" id="drel_letter_no" value="" maxlength="30"
                               data-validate="required" data-message-required="This field is required."
							   ondrop="return false;"
                             />
        <span class="drel_letter_no_msg color-red"></span>
    <span id="error" class="hide" >* Special Characters not allowed</span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-sm-6">
            <div  class="form-group ">
              <label for="field-1" class="col-sm-3 control-label">8. No. of CL for whom demand released
              <span class="color-white">*</span>
              </label>
              <div  class="col-sm-8">
                <input type="text" class="form-control drel_cl_no" name="drel_cl_no" id="drel_cl_no" value="" maxlength="30"
                               data-validate="required" onkeypress="return isNumberKey(event);"  data-message-required="This field is required"
							   ondrop="return false;"
                             />
        <span class="drel_cl_no_msg color-red"></span>
    <span id="error" class="hide" >* Special Characters not allowed</span>
              </div>
            </div>
          </div>
        
	        <div class="col-sm-6">
	            <div  class="form-group">
	              <label for="field-1" class="col-sm-3 control-label">9. Amount Released 
	            
	              </label>
	              <div  class="col-sm-8">
	                <input type="text" readonly class="form-control" name="drel_amount" id="drel_amount" value=""
	                              
	                             />
	        <span class="cname_msg color-red"></span>
	    <span id="error" class="hide" >* Special Characters not allowed</span>
	              </div>
	            </div>
	          </div>
	         
         </div>
         <div class="row">
	        <div class="col-sm-6">
	            <div  class="form-group ">
	              <label for="field-1" class="col-sm-3 control-label">10. No. of CL due for whom demand not released
	             
	              </label>
	              <div  class="col-sm-8">
	                <input type="text" class="form-control" name="dr_amount_due" id="dr_amount_due" value=""
	                                readonly
	                             />
	        <span class="cname_msg color-red"></span>
	    <span id="error" class="hide" >* Special Characters not allowed</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-6">
	            
	          </div>
         </div>
         </div>
         </div>
         
  <div class="form-group top-margin">
    <div class="col-sm-offset-5 col-sm-7">
      <!-- <button type="button" class="btn btn-info" id="submit-save" onclick="return checkConfirm();"> Save</button> -->
      <button type="submit" id="submit-button" class="btn btn-info">Save</button>
      <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
      <span id="preloader-form"></span> </div>
     <?php $this->load->view("backend/staff/modal_msg_newCMRf.php");?>
   <?php $this->load->view("backend/staff/modal_msg_Cmrf_confirm.php");?>
   
  </div>
  </br></br>
  <?php echo form_close(); ?> </div>
  </div>
  </div>
 </div>
  
 <!------------------------------ end of form---------------------------------->
	<script>
		  $(function() {
		  $( "#cancel-button" ).click(function(){ window.location.assign("<?php echo base_url();?>index.php?cmrf_transaction_details") });
		 });
	</script>
	<script type="text/javascript">
		var FromEndDate = new Date();
		$('#dr_datepcker').datepicker({
		format: 'yyyy-mm-dd',
		endDate: FromEndDate,
		autoclose: true
		});
	</script>
	<script type="text/javascript">
		var FromEndDate = new Date();
		$('#drel_datepcker').datepicker({
		format: 'yyyy-mm-dd',
		endDate: FromEndDate,
		autoclose: true
		});
	</script>
	
    <!-- jquery validation and form submit -->
    <script>
    $(document).ready(function () {

		$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
   			 if($(this).val() != '') {
        $('button[type="submit"]').prop('disabled', false);
    		 }
		 });
	
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
    var flag=0;
    function validate_project_add(formData, jqForm, options) {
    	
        //district required check
	  	  if(!jqForm[0].districts.value)
	  	  {
	  		 flag=1; 
	  		return false;  
	  	  }
	  	  //dr_date required chk 
	  	 if(!jqForm[0].dr_date.value)
	  	  {
	  		 flag=1; 
	  		return false;  
	  	  }
	  	if(!jqForm[0].dr_letter_no.value)
	  	  {
	  		 flag=1; 
	  		
	  		return false;  
	  	  }
	  	  //letter_no length check
	  	if(jqForm[0].dr_letter_no.value.length>40 )
	  	  {
	  		 flag=1; 
	  		 console.log("more 40 chars");
	  		$(".dr_letter_no").addClass("validate-has-error");
          $(".dr_letter_no").focus();
          $(".dr_letter_no_msg").html("This field should be of 40 characters");
	  		return false;  
	  	  }
	  	else{
	  		$("#dr_letter_no_fr_grp").removeClass("validate-has-error");
          $(".dr_letter_no_msg").html("");
		  	}
	  	if(/^\s+$/.test(jqForm[0].dr_letter_no.value))
	  	  {
	  		 flag=1; 
	  		 
	  		$(".dr_letter_no").addClass("validate-has-error");
	        $(".dr_letter_no").focus();
	        $(".dr_letter_no_msg").html("Initially space not allowed ");
	  		return false;  
	  	  }
	  	else{
	  		$("#dr_letter_no_fr_grp").removeClass("validate-has-error");
        $(".dr_letter_no_msg").html("");
		  	}
	  	if(!jqForm[0].dr_cl_no.value)
	  	  {
	  		 flag=1; 
	  		return false;  
	  	  }
	  	if(!jqForm[0].drel_date.value)
	  	  {
	  		 flag=1; 
	  		return false;  
	  	  }
	  	if(!jqForm[0].drel_letter_no.value)
	  	  {
	  		 flag=1; 
	  		return false;  
	  	  }
	  	if(jqForm[0].drel_letter_no.value.length>40 )
	  	  {
	  		 flag=1; 
	  		$(".drel_letter_no").addClass("validate-has-error");
        $(".drel_letter_no").focus();
        $(".drel_letter_no_msg").html("This field should be of 40 characters");
	  		return false;  
	  	  }
	  	else{
	  		$("#drel_letter_no_fr_grp").removeClass("validate-has-error");
           $(".drel_letter_no_msg").html("");
		  	}
		if(/^\s+$/.test(jqForm[0].drel_letter_no.value))
	  	  {
	  		 flag=1; 
	  		$(".dr_letter_no").addClass("validate-has-error");
      $(".drel_letter_no").focus();
      $(".drel_letter_no_msg").html("This field should be of 40 characters");
	  		return false;  
	  	  }
	  	else{
	  		$("#drel_letter_no_fr_grp").removeClass("validate-has-error");
         $(".drel_letter_no_msg").html("");
		  	}
	  	if(!jqForm[0].drel_cl_no.value)
	  	  {
	  		 flag=1; 
	  		return false;  
	  	  }
	  	 
	  	if( parseInt(jqForm[0].drel_cl_no.value) > parseInt(jqForm[0].dr_cl_no.value))
        {
    	    flag=1; 
		    $(".drel_cl_no").addClass("validate-has-error");
	        $(".drel_cl_no").focus();
	        $(".drel_cl_no_msg").html("No. of CL for whom demand released should not be greater than No. of CL for whom demand raised");
	  		return false;  
	        
	    }
	  	else{
	  		$("#drel_cl_no_fr_grp").removeClass("validate-has-error");
	           $(".drel_cl_no_msg").html("");
		  	}
	  	 $("#dr_letter_no").val($("#dr_letter_no").val().trim());
	  	$("#drel_letter_no").val($("#drel_letter_no").val().trim());
	  	var dr_date =  (jqForm[0].dr_date.value);

		var drel_date = (jqForm[0].drel_date.value);
			var diffdrdate = copmareDrelDate(drel_date,dr_date);
			
			if(diffdrdate < 0){
			
			$("#error_msg_drel_date").html("Date of demand released should be greater than date of demand raised!");
			$("#drel_date").addClass("newClass");
			
			return false;
			}else{
				$("#error_msg_drel_date").html(" ");
				$("#drel_date").removeClass("newClass");
			}
		 
			if (flag==0 && document.getElementById('msgModal-cmrf_conf').style.display!='block')
			{	
			 window.scrollTo(0,0);
			 $('#msgModal-cmrf_conf').modal('show');
			 
			 
			
			return false;
			}
			if (flag==1 && document.getElementById('msgModal-cmrf_conf').style.display!='block')
			{	
			 window.scrollTo(0,0);
			 $('#msgModal-cmrf_conf').modal('show');
			 
			 
			
			return false;
			}
			
			
   $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
          document.getElementById("submit-buttonntedit").disabled = true;
          $(".submit_cmrf").prop("disabled");
      }
	     function Conf_Cmrf()
	     {
	    	 window.scrollTo(0,0);
	    	 $('#msgModal-cmrf_conf').modal('hide');
	    	 flag=2;
	    	 $('#msgModal-cmrf_conf1').modal('show');
	    	 
	    	 return false;
     	 }
		 
		 
		 
	     
	     function flagZero()
	     {
	    	
	    	 flag=0;
	    	  
	    	 return false;
     	 }
      function show_response_project_add(responseText, statusText, xhr, $form) {      		
            $('html, body').animate({ scrollTop: 0 }, 0);
  		
	  		$('#preloader-form').html('');
	  	    $('#msgModal-cmrf_conf1').modal('hide');
	  		$('#msgModal_cmrf').modal('show');

          document.getElementById("submit-button").disabled = false;
      }
      
      
      
      function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;
            
          return true;
       }

      
  	
    </script>
    <script>
    $(document).ready(function () {
    	
	    $("#dr_cl_no").on("keyup change", function(e) {
	        // do stuff!
	        var no=$(this).val();
		        if(no!=null && no.length > 0 && isNumberKey(e))
		        {
		        var tot_raised=parseInt(no)* 25000;//This could be dynamically loaded if cmrf Changed
		        $("#dr_amount").val(tot_raised);
		        }
	        else{
	        	$("#dr_amount").val(0);
		        }
		        var dr_cl_no=$("#dr_cl_no").val();
		        var drel_cl_no=$("#drel_cl_no").val();
		        if(drel_cl_no.length>0)
		        {
		        $("#dr_amount_due").val(dr_cl_no-drel_cl_no);
		        }
	    })
	    $("#drel_cl_no").on("keyup change", function(e) {
	        // do stuff!
	        var drel_no=$(this).val();
	         console.log(drel_no);
	         if(drel_no!=null &&  drel_no.length > 0 && isNumberKey(e))
		        {
			        console.log(drel_no);
		        var tot_raised1=parseInt(drel_no)* 25000;//This could be dynamically loaded if cmrf Changed
		        
		        $("#drel_amount").val(tot_raised1);
		        }
	        else{
	        	$("#drel_amount").val(0);
		        }
		        
	         if(!$("#dr_cl_no").val().length)
		  	  {
		  		 flag=1; 
			    $(".dr_cl_no").addClass("validate-has-error");
		        $(".dr_cl_no").focus();
		        $(".dr_cl_no_msg").html("This field required");
		  		return false;  
		  	  }
		  	else{
		  		$("#dr_letter_no_fr_grp").removeClass("validate-has-error");
	           $(".dr_letter_no_msg").html("");
	           var dr_cl_no=$("#dr_cl_no").val();
		        var drel_cl_no=$("#drel_cl_no").val();
		       
		        $("#dr_amount_due").val(dr_cl_no-drel_cl_no);
		  	}
	          
		       
	    })
    });
	var copmareDrelDate = function(d1,d2) {
		year1= new Date(d1);
		year2 = new Date(d2);
		console.log(year1);
		console.log(year2);
		onlyyear1 = year1.getFullYear();
		onlymonth1 = year1.getMonth();
		onlyday1 = year1.getDate();
		var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
		onlyyear2 = year2.getFullYear();
		onlymonth2 = year2.getMonth();
		onlyday2 = year2.getDate();
		var diff = onlyyear1 -onlyyear2;
		console.log(diff);
		var m = onlymonth1 - onlymonth2;
		var d = onlyday1 - onlyday2;
		console.log(d);
	   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
		{
			diff--;
		}
	   console.log(drel_date);
		console.log(dr_date);
		console.log(diff);
		return diff;

	};
    </script>

