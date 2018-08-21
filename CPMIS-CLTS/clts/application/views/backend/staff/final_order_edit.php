
<?php include "modal_msg_ofinal_page.php";?>
<?php include "modal_msg_order_confirm.php";?>
 
<?php
  $dob="";
  $date_rescued="";
foreach ($final_order_data as $row):
  $dob=$row['dob'];
  $date_rescued=$row['date_rescued'];

  if($row['transfer_to']!='' && $row['type_order']=='Cases transferred to other Dist/State/Country'){
  	$row['final_ordered']="";
  	$row['final_order_date']="";
  	$row['type_order']="" ;
  	
  }
?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?final_order">List/Edit </a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('final_order/final_order_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data','name'=> 'finalorderForm')); ?>
        <div class="row">


        <!--start extra question-->
        <div class="col-md-12">
          <div class="panel panel-default" >
            <div class="panel-heading head">Final order</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"> 1. Final Order Passed</label>
                    <div class="col-sm-8">
                      <select name="final_ordered" class="form-control" id="final_ordered">
                        <option value=""> Select </option>
                        <option value="Yes" <?php if($row['final_ordered']=='Yes') echo 'selected'; ?>> Yes </option>
                        <option value="No" <?php if($row['final_ordered']=='No') echo 'selected'; ?>> No </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div id="final_value_yes">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label"> 1 i. Date of Final Order<span class="color-white">*</span></label>
                      <div class="col-sm-8">
                       <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                          <input type="text" class="form-control" name="final_order_date" id="final_order_date"
                               data-validate="required" value="<?php echo $row['final_order_date']; ?>"   readonly>
                        </div>
						
						 
						 				<?php
 foreach($order_after_edit_data as $fnorder):
 if($fnorder['parent_date']!=''){
 	$cwc_date=$fnorder['parent_date'] ;
 }
 else if($fnorder['cci_date']!=''){
 	$cwc_date=$fnorder['cci_date'] ;
 } 
 else if($fnorder['fitperson_date']!=''){
 	$cwc_date=$fnorder['fitperson_date'] ;
 }
 else if($fnorder['fitinstitution_date']!=''){
 	$cwc_date=$fnorder['fitinstitution_date'] ;
 }
 else if($fnorder['otherplace_date']!=''){
 	$cwc_date=$fnorder['otherplace_date'] ;
 }
 ?>
 <input type='hidden' name='cwc_date' id='cwc_date' value='<?php echo $cwc_date ?>'>
 <input type='hidden' name='order_date' id='order_date' value='<?php echo $fnorder['date_of_production'];  ?>'>
 <?php
 $fnorder['date_of_production'];
		
		endforeach;
		?>
                  <span id="error_msgfinal" class="error_msgfinal color-red"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label"> 1 ii.Type of Final Order<span class="color-white">*</span></label>
                      <div class="col-sm-8">
                      
                        <select name="type_order" class="form-control" id="type_order"  data-validate="required">
                          <option value="">Select</option>
                          <option value="Cases transferred to other Dist/State/Country" <?php if($row['type_order']=='Cases transferred to other Dist/State/Country') echo 'selected'; ?>> Cases transferred to other Dist/State/Country </option>
                          <option value="Restored to family" <?php if($row['type_order']=='Restored to family') echo 'selected'; ?>> Restored to family </option>
                          <option value="Kinship Care" <?php if($row['type_order']=='Kinship Care') echo 'selected'; ?>> Kinship Care </option>
                          <option value="Declared legally free for Adoption" <?php if($row['type_order']=='Declared legally free for Adoption') echo 'selected'; ?>> Declared legally free for Adoption </option>
                          <option value="Referred for Sponsorship" <?php if($row['type_order']=='Referred for Sponsorship') echo 'selected'; ?>> Referred for Sponsorship </option>
                          <option value="Referred for Foster Care" <?php if($row['type_order']=='Referred for Foster Care') echo 'selected'; ?>> Referred for Foster Care</option>
                          <option value="Referred for Institutional Care" <?php if($row['type_order']=='Referred for Institutional Care') echo 'selected'; ?>>Referred for Institutional Care</option>
                          <option value="Others" <?php if($row['type_order']=='Others') echo 'selected'; ?>> Others</option>
                        </select>
                      </div>
                    </div>
                  </div>
				 <!--/* otherfield*/-->


                  <div class="col-sm-6">
                  <div id="type_order_other1">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">1 ii a. Please specify</label>
                      <div id="type_order_other_fr_grp" class="col-sm-8">

                          <input type="text" class="form-control type_order_other" name="type_order_other" id="type_order_other" value="<?php echo $row['type_order_other']; ?>"  data-validate="required"  ondrop="return false;"
        onpaste="return false;" />
                      <span class="type_order_other_msg color-red"></span>
                    </div>
                  </div>
                </div>
				</div>
				 <!-- end other-->
              </div>
               <div id="type_order_dist">
				<div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">2. Country<span class="color-white">*</span></label>
                      <div class="col-sm-8">

                      <select name="country" class="form-control" id="country" data-validate="required">
                        <option value=""> Select </option>
                        <option value="India" <?php if($row['country']=='India') echo 'selected'; ?>> India </option>
                        <option value="Others" <?php if($row['country']=='Others') echo 'selected'; ?>> Others </option>
                      </select>

                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6" id="country_other">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">2 i. Please specify</label>
                      <div id="other_country_fr_grp"  class="col-sm-8">
		
                      <input type="text" class="form-control other_country" name="other_country" id="other_country"
                                value="" ondrop="return false;"onpaste="return false;" />
                          <span class="other_country_msg color-red"></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row" id="india_selected">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">3. State<span class="color-white">*</span></label>
                      <div class="col-sm-8">

                    <select name="state" class="form-control" id="state" data-validate="required">
					<option value="">Select</option>
                  <?php
								 $child_state = $this->db->select('*')->where('parent_id','IND')->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

                                  foreach($child_state as $crow1):
                                  ?>
                  <option value="<?php echo $crow1['area_id'];?>" <?php if($row['state']==$crow1['area_id']){ echo 'selected'; }  ?>><?php echo $crow1['area_name']; ?></option>
                  <?php
                              endforeach;
                              ?>
                </select>

                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="field-1" class="col-sm-3 control-label">4. District<span class="color-white">*</span></label>
                      <div class="col-sm-8">

                       <select name="dist" id="dist" class="form-control" data-validate="required">
					   <option value="">Select</option>
                  <?php $child_dist = $this->db->select('*')->where('parent_id',$row['state'])->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();

                                  foreach($child_dist as $crow2):
                                  ?>
                  <option value="<?php echo $crow2['area_id'];?>" <?php if($row['dist']==$crow2['area_id']){ echo 'selected'; }  ?>><?php echo $crow2['area_name']; ?></option>
                  <?php  endforeach;  ?>
                  <!-- js populates -->
                </select>

                      </div>
                    </div>
                  </div>
                </div>
               <!--end-->
            </div>
          </div>
        </div>
		</div>
		
        <!--end-->
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-info" id="submit-button"> Save </button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span>
			<?php include "modal_msg_forderConfirm.php";?>
			</div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
</div>
</div>
<?php endforeach;?>

<script>
    $(document).ready(function () {

	$('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
		  }
		});
		if($('#country').val() == 'Others') {

            $('#country_other').show();
			$('#india_selected').hide();
       		 } else if($('#country').val() == 'India'){
			 $('#india_selected').show();
            $('#country_other').hide();

       		 } else{
			 $('#india_selected').hide();
			  $('#country_other').hide();
			 }

		if($('#final_ordered').val() == 'Yes') {
            $('#final_value_yes').show();

       		 } else {
            $('#final_value_yes').hide();

       		 }

		if($('#type_order').val() == 'Others') {
            $('#type_order_other1').show();

       		 } else {
            $('#type_order_other1').hide();

       		 }

	if($('#type_order').val() == 'Cases transferred to other Dist/State/Country') {
            $('#type_order_dist').show();

       		 } else {
            $('#type_order_dist').hide();

       		 }


        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: false
        };
        $('.project-add').submit(function () {
          $('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });
	//prativa
		var copmareAge = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
		//end
    function validate_project_add(formData, jqForm, options) {
        
      if(jqForm[0].type_order.value =="Others")
        {
        if(!jqForm[0].type_order_other.value || jqForm[0].type_order_other.value.length>40)
        {
          flag=1;
          $("#type_order_other_fr_grp").addClass("validate-has-error");
          $(".type_order_other").focus();
          $(".type_order_other_msg").html("This field should be less than 40 characters or should not be left blank");
         return false;

        }
        else{
          $("#type_order_other_fr_grp").removeClass("validate-has-error");
         $(".type_order_other_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].type_order_other.value)){
          flag=1;
               $("#type_order_other_fr_grp").addClass("validate-has-error");
               $(".type_order_other").focus();
               $(".type_order_other_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#type_order_other_fr_grp").removeClass("validate-has-error");
          $(".type_order_other_msg").html("");
        }
      }
      //
      if(jqForm[0].country.value =="Others")
        {
        if(jqForm[0].other_country.value.length>40)
        {
          flag=1;
          $("#other_country_fr_grp").addClass("validate-has-error");
          $(".other_country").focus();
          $(".other_country_msg").html("This field should be less than 40 characters");
         return false;

        }
        else{
          $("#other_country_fr_grp").removeClass("validate-has-error");
         $(".other_country_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].other_country.value)){
          flag=1;
               $("#other_country_fr_grp").addClass("validate-has-error");
               $(".other_country").focus();
               $(".other_country_msg").html("Initially No space allowed");
              return false;
          }
          else{
           $("#other_country_fr_grp").removeClass("validate-has-error");
          $(".other_country_msg").html("");
        }
      }
	var flag = 0;
	var flag1 = 0;
	var date_of_birth = "<?php echo $dob;?>";
		var rescued_date = "<?php echo $date_rescued;?>";
		var final_order=(jqForm[0].final_ordered.value);
		var final_date = (jqForm[0].final_order_date.value);
		if(final_order == 'Yes'){
		//alert(rescued_date);
		if(final_date!=""){

		var diffDays = copmareAge(final_date,rescued_date);

				if(diffDays <0){
					$("#error_msg").html("Final date provided should be after date of rescue");
					document.getElementById("final_ordered").focus();
					$("#datepicker").addClass("newClass");
					flag = 1;
					return false;
					}else{
						$("#error_msg").html(" ");
						$("#datepicker").removeClass("newClass");
					}
			}
		}
		//alert(jqForm[0].final_order_date.value) ;
		//alert(jqForm[0].order_date.value) ;
		if(final_order =="Yes"){
			if (!jqForm[0].final_order_date.value)
			{
				flag = 1;
				return false;
			}
			else if (jqForm[0].final_order_date.value < jqForm[0].order_date.value || jqForm[0].final_order_date.value < jqForm[0].cwc_date.value)
			{				
				$("#error_msgfinalorder").addClass("validate-has-error");
	               $(".final_order_date").focus();
	               $(".error_msgfinal").html("Final date should be after date of production or handed over date");
					$("#datepicker").addClass("newClass");
		               
				flag = 1;
				return false;
			}else{
				  $(".error_msgfinal").html("");
					$("#datepicker").addClass("newClass");
					$("#datepicker").removeClass("newClass");
						
				}
			
			if (!jqForm[0].type_order.value)
			{
				flag = 1;
				return false;
			}
			var order_type = (jqForm[0].type_order.value);
			if(order_type =="Cases transferred to other Dist/State/Country"){
				if (!jqForm[0].country.value)
				{
					flag = 1;
					return false;
				}else{
					var country_name = (jqForm[0].country.value);
					if(country_name =="India"){
						if (!jqForm[0].state.value)
						{
							flag = 1;
							return false;
						}
						if (!jqForm[0].dist.value)
						{
							flag = 1;
							return false;
						}
					}
				}

			}

		}else{
		flag1 = 1;
		}

		//var country_val=(jqForm[0].country.value);
		//var state_val=(jqForm[0].state.value);
		//var dist_val=(jqForm[0].dist.value);

		//alert("date_final"+date_final);
		var date_of_birth = "<?php echo $dob;?>";
		var rescued_date = "<?php echo $date_rescued;?>";
		if (flag==0 && document.getElementById('msgModal-fOrderconf').style.display!='block' && flag1==0)
		{
		$('#msgModal-fOrderconf').modal('show');
		return false;
		}

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
		$('html, body').animate({ scrollTop: 0 }, 0);
        $('#preloader-form').html('');
		$('#msgModal-fOrderconf').modal('hide');
		 $('#msgModal-21').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
$(function() {
   		 $('#type_order').change(function(){
        	if($('#type_order').val() == 'Others') {
            $('#type_order_other1').show();

       		 } else {
            $('#type_order_other1').hide();

       		 }
    	});
		});

	$(function() {
   		 $('#type_order').change(function(){
        	if($('#type_order').val() == 'Cases transferred to other Dist/State/Country') {
            $('#type_order_dist').show();

       		 } else {
            $('#type_order_dist').hide();

       		 }
    	});
		});


	$(function() {
   		 $('#final_ordered').change(function(){
        	if($('#final_ordered').val() == 'Yes') {

            $('#final_value_yes').show();

       		 } else {
            $('#final_value_yes').hide();

       		 }
    	});
		});

	$(function() {
   		 $('#country').change(function(){
        	if($('#country').val() == 'Others') {

            $('#country_other').show();
			$('#india_selected').hide();
       		 } else if($('#country').val() == 'India'){
			 $('#india_selected').show();
            $('#country_other').hide();

       		 } else{
			 $('#india_selected').hide();
			  $('#country_other').hide();
			 }
    	});
		});

var FromEndDate = new Date();
$('#datepicker4').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
</script>
<script>
	var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
</script>
<script>
var Select_List_Data;
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }

    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}
	function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;

    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;

		o = document.createElement('option');
        o.appendChild( document.createTextNode( 'Select' ) );
		o.value ='';
		f.appendChild(o);

        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );

            if ( obj.value ) {
                o.value = obj.value[i];
            }

            f.appendChild(o);
        }



        return f;
    }

    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }

        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}



				document.forms['finalorderForm'].elements['state'].onchange = function(e) {

						var datas = new Object();
						stateid1=document.getElementById('state').value;
						 var relName = 'dist';
							 $.ajax({
								type: "POST",
								url: "<?php echo base_url();?>index.php?admin/getdist_finalorder/"+stateid1,
								data: "",
								dataType: "text",
         						cache:false,
								success: function(msg){
									datas= msg;
								var form = document.forms['finalorderForm'];
    							var relList = form.elements[ relName ];
								Select_List_Data=eval( '(' + msg + ')' );
  								var obj=Select_List_Data[relName][stateid1]
								removeAllOptions(relList, true);
								// call function to add optgroup/option elements
								// pass reference to associated select box and data for new options
								appendDataToSelect(relList, obj);


									//obj = msg;
								},
								error: function() {

									//alert('<?php echo base_url();?>');
								}
            					});

};

var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ( (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            //document.getElementById("error").style.display = ret ? "none" : "inline";
           return ret;
        }
	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
				</script>
