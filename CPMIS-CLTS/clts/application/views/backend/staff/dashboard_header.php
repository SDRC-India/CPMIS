<style>

#table_export_wrapper{
display:none;

}
#rehabilitation_details{
display:none;
}

</style>
<!-- --------------------------------------------------------- -->

<div class="row">
         <div class="col-md-12" style="margin-bottom:5px;">
         <div class="row">
<form  action="<?php echo base_url(); ?>index.php?dashboard/" method="post" >
			<div class="form-group">
			<div class="col-md-2" style="width:128px ;">
			<label class="" for="">Select Reports :</label>
			</div>
			<div class="col-md-5" style="width:355px;">			
				<select name="type" id="type" class="form-control dist"   data-validate="required" >
				      <?php if($role==10){?>
					 <option  <?php if($type=="lc_action") echo "selected" ;?> value="lc_action">Action Suggested By LC</option>
					 <?php  }?>
				 <option  <?php if($type=="child_cumulative") echo "selected" ;?> value="cumulative">Cumulative Statistics</option>						          
				 <option <?php if($type=="get_age") echo "selected" ; ?> value="get_age">Age-wise Break-up</option>
				 <option <?php if($type=="caste") echo "selected" ; ?> value="caste">Category-wise Break-up</option>
				 <option  <?php if($type=="cci") echo "selected" ;?> value="cci">Children Sent to CCI</option>
				 <option <?php if($type=="due_for_transfer") echo "selected" ; ?> value="due_for_transfer">Transfer Status of Rescued Child Labourer</option>
				 <option <?php if($type=="education") echo "selected" ; ?> value="education">Education-wise Break-up</option>
				 <option  <?php if($type=="order_after_production") echo "selected" ;?> value="order_after_production">Order After Production</option>
				 <option  <?php if($type=="Rehabilitation") echo "selected" ; ?> value="Rehabilitation">Rehabilitation (Labour Resource Department)</option>
				 <option  <?php if($type=="Rehabilitation1") echo "selected" ; ?> value="Rehabilitation1">Rehabilitation (CM Relief Fund)</option>
				 <option  <?php if($type=="Rehabilitation2") echo "selected" ; ?> value="Rehabilitation2">Rehabilitation (Education Department)</option>
				 

					 <!-- <option  <?php //if($type=="cwc_not_filling") echo "selected" ;?> value="cwc_not_filling">Status Of Additional Details</option>-->
					
					<!--   <option  <?php //if($type=="ngo_dubbious") echo "selected" ; ?> value="ngo_dubbious">Dubious NGO </option>-->
					 
					 
                </select>
                </div>
				</div>
				<div class="col-md-2" style="width:71px;" >
		   	<label for="datepicker" >From <span style="color:red;">*</span></label>
				</div>
				<div class="col-md-2" >
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php echo $from?>" onchange="validate_fileupload(this.value);"  data-validate="required"  >               	
                	</div>
					<span id="error_from_dt" class="color-red"></span>
									 <span id="showmsg1" style="color:red;"></span>
					
				</div>
				
		   <div class="col-md-1" style="width:57px;">
           	<label for="datepicker">To <span style="color:red;">*</span></label>
				</div>
		 		 <div class="col-md-2">
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="to_dt" required="required" name="to_date"   value="<?php echo $to;?>" onchange="validate_fileupload(this.value);"  data-validate="required"  >	   
                 </div>
				 <span id="error_to_dt" class="color-red"></span>
				 <span id="error" class="color-red"></span>
				 <span id="showmsg" style="color:red;"></span>
				 </div>
				<div class="col-md-1" id="new-button1">
				<button type="button"  data-type="view" id="mis_submit" class="mis_submit btn btn-info">Submit</button>
			  </div>
			</div>
			</div>
</div>

<div class="col-md-12" id="new-buttone" style="">
				
    <button type="button"  data-type="view" id="chart-format" class="mis_submit2 btn btn-info" style="float: right;
    width: 65px; margin-right: -15px;height: 40px;
    border-radius: 5px;display:none;margin-bottom: 8px;background-color:#21a9e1;border: none;">Chart</button>
   <!--   <button type="button"  data-type="view" id="cmd" class="btn btn-info" style="float: left;
    width: 100px;
    margin-right: 5px;
    background-color: darkred;
    color: #fff;
    height: 40px;
    border-radius: 5px;
    border: none;display:none;">PDF</button>-->
    <button type="button"  data-type="view" id="table-format" class="mis_submit2 btn btn-info" style="   float: right;
    width: 65px;
    display: block;
    border-radius: 5px;
    height: 40px;
    margin-bottom: -44px;
    mrgin-right: 0px;
    margin-right: -15px;
    background-color:#21a9e1;
    border: none;
    ">Tabular</button>
			  </div>
   
<!-- -------------------------------------------------------------------------------------------- -->

	<div class="row">
	      <?php //if($type=='system_access' || $type=="last_login"){?>
     <?php if($role!=2 && $role!=7 && $role!=8 && $role!=14 && $role!=19 && $role!=5 && $role!=6 && $role!=16 && $role!=18 && $role!=13 && $role!=20){ ?>
     <div class="col-md-12" id="user_grp_div" style="display:none;margin-bottom:5px;" >
     <div class="row">
			<div class="form-group">
			<div class="col-md-2" style="width:128px;">
			<label >User Groups</label>
			</div>
			<div class="col-md-5" style="width:355px;">
				<select name="user_grp" id="user_grp" class="form-control dist"  data-validate="required">
		<!--       <option value="">Select User Groups</option> --> 

                  <?php foreach($user_grps as $crow2):  ?>
			
                  <option <?php if($selected_user_grp==$crow2['name']){echo "selected";}?> value="<?php echo $crow2['name'];?>" ><?php echo $crow2['name']; ?></option>
                  <?php    endforeach;?>

                </select>
                </div>
			</div>
			</div>
		</div>
		 
		<div class="col-md-12" id="cci_dist_div" style="display:none;margin-bottom:5px;">
		<div class="row">
			<div class="form-group">
			<div class="col-md-2" style="width:128px;"><label >District</label></div>
   			<div class="col-md-5" style="width:355px;">
				<select name="district" id="cci_district" class="form-control dist"  data-validate="required">
				<option value="">Select District</option>

                  <?php foreach($district_list as $crow2):  ?>

                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
                </div>
			</div>
			</div>
		</div>
	<?php } //else if($type=='inside_state') {?>
	
	 <div id="inside_div" style="display:none;">
	 <?php if($dist_show){?>
		<div class="col-md-2" >
			<div class="form-group">
			<label >District</label>
			
				<select name="district" id="district" class="form-control dist"  data-validate="required">
				<option value="">Select District</option>

                  <?php foreach($district_list as $crow2):  ?>
                  

                  <option <?php if($selected_dist==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>" ><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<?php }?>
		 <?php if($role!=2 && $role!=7 && $role!=8 && $role!=14 && $role!=19 && $role!=5 && $role!=6 && $role!=16 && $role!=18){ ?>
		<div class="col-md-2">
			<div class="form-group">
			<label >Block</label>

				<select name="block" id="block" class="form-control dist"  data-validate="required">
				<option value="">Select Block</option>

                  <?php foreach($blocks_list as $crow2):  ?>

                  <option <?php if($selected_block==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>"><?php echo $crow2['area_name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<?php } ?>
		</div>

	<?php ///} else if($type=='outside_state' ) {?>
		<div class="col-md-12" id="outside_div" style="display:none;margin-bottom:5px;">
		<div class="row">
			<div class="form-group">
			<div class="col-md-2" style="width:128px;"><label >State</label></div>
				<div class="col-md-5" style="width:355px;">
				<select name="state" id="state" class="form-control dist"  data-validate="required">
				<option value="">Select State</option>
                  
                  <?php foreach($states_list as $crow2):   ?>
                   <?php if($crow2['area_id']!='IND010'){?>
                  <option <?php if($selected_state==$crow2['area_id']){echo "selected";}?> value="<?php echo $crow2['area_id'];?>"><?php echo $crow2['area_name']; ?></option>
				   <?php }   endforeach;  
				  
				  ?>

                </select>
                </div>
			</div>
			</div>
		</div>
		<!-- rehabilitaion type-->
		<div id="rehabilitation_details" class="col-md-12" <?php if($type!="Rehabilitation"){ ?>style="display:none;"<?php } ?>>
			<div class="row" style="margin-bottom:5px;">
			<div class="col-md-5" style="width:355px;">		
			
			</div>
			
			</div>			
	</div>
	</form>
 
</div>

<script>
var FromEndDate = new Date();
$("#from_dt" ).datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true

});

$("#to_dt" ).datepicker({
format: 'yyyy-mm-dd',
autoclose: true

});
$(function() {
	
	//console.log("sdfsdfsdf");
  $("#to_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
  
			});
  
    $("#from_dt").on("change",function(){
        //alert("sds");
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
  
			});

});


$(".mis_submit").on("click",function(){

	//alert('dc');
	var type=$("#type").val(); 
	//alert(type);
	var from=$("#from_dt").val();
	//alert(from);
	var to=$("#to_dt").val();
	//alert(to);
	if(to<from)
	{
		$("#error").html("To date should be greater than from date!");
	}
	if(!from)
	{
	$("#error_from_dt").html("From date should be required!");
	("#loaderId").hide();
    return false;
	}
	if(!to)
	{
	$("#error_to_dt").html("To date should be required!");
	("#loaderId").hide();
	return false;
	}
	
	//Main functionality
	if(type=='cumulative')
	{
		
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_cumulative/'+from+'/'+to);
		
	}
	
	if(type=='get_age')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_age/'+from+'/'+to);
		
	}

	if(type=='education')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_education/'+from+'/'+to);
		
	}
	if(type=='caste')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_categorye/'+from+'/'+to);
		
	}

	if(type=='order_after_production')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_orderafter_production/'+from+'/'+to);
		
	}

	if(type=='due_for_transfer')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_transfer_status/'+from+'/'+to);
		
	}

	if(type=='rescued_child')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/rescued_child_labourer_registered/'+from+'/'+to);
		
	}
	if(type=='Rehabilitation')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/lrd_chart_details/'+from+'/'+to);
		
	}  
	if(type=='Rehabilitation1')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/cmrelief_chart_details/'+from+'/'+to);
		
	} 
	if(type=='Rehabilitation2')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/edu_rehabilation_part/'+from+'/'+to);
		
	} 
	if(type=='cci')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/children_cci_chart/'+from+'/'+to);
		
	} 
	  

	
});





		 
$("#type").on('change',function(){
	
	var type=$(this).val();
	
$(".mis_submit").on("click",function(){

	var type=$("#type").val(); 
	//alert(type);
	var from=$("#from_dt").val();
	//alert(from);
	var to=$("#to_dt").val();
	//alert(to);
	if(from=="")
			{
				$("#error_from_dt").html("From date should be required!");
				//console.log("asasd");
				return false;
			}
			if(to=="")
			{
				$("#error_to_dt").html("To date should be required!");
				//console.log("asasd");
				return false;
			}
			
	//Main functionality
	if(type=='cumulative')
	{
		
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_cumulative/'+from+'/'+to);
		
	}
	
	if(type=='get_age')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_age/'+from+'/'+to);
		
	}

	if(type=='education')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_education/'+from+'/'+to);
		
	}

	if(type=='caste')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_categorye/'+from+'/'+to);
		
	}

	if(type=='order_after_production')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_orderafter_production/'+from+'/'+to);
		
	}


	if(type=='due_for_transfer')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_transfer_status/'+from+'/'+to);
		
	}
  

	if(type=='rescued_child')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/rescued_child_labourer_registered/'+from+'/'+to);
		
	}

	if(type=='Rehabilitation')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/lrd_chart_details/'+from+'/'+to);
		
	}  

		

	if(type=='Rehabilitation1')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/cmrelief_chart_details/'+from+'/'+to);
		
	} 
	if(type=='Rehabilitation2')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/edu_rehabilation_part/'+from+'/'+to);
		
	} 

	if(type=='cci')
	{
		
		window.location.assign('<?php echo base_url(); ?>index.php?dashboard/children_cci_chart/'+from+'/'+to);
		
	} 

	  
	 
	
});

});

$("#table-format").on("click",function(){
	//alert("hii");
	var type=$("#type").val(); 

	if(type=='cumulative')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}

	if(type=='get_age')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}

	if(type=='caste')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}

	if(type=='cci')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}
	if(type=='due_for_transfer')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}

	if(type=='education')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}


	if(type=='order_after_production')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}
    
	if(type=='Rehabilitation')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}
    
	if(type=='Rehabilitation1')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
	}

	if(type=='Rehabilitation2')
	{
		$("#chartdiv").hide();
		$('.list-structure').hide();
		$('#table-format').hide();
		$("#chart-format").show();
		$('.table-structure').show();
		$('#cmd').show();
		$('#table_export_wrapper').show();
		
	}
	
	  
		
});

$("#chart-format").on("click",function(){
	//alert("hii");
	var type=$("#type").val(); 
	if(type=='cumulative')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();		
	}
	if(type=='get_age')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();		
		
			
	}
	if(type=='caste')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();			
	}
	if(type=='cci')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();	
		$('#table_export_wrapper').hide();			
	}

	if(type=='due_for_transfer')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();			
	}
	if(type=='education')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();			
	}

	if(type=='order_after_production')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();				
	}
	if(type=='Rehabilitation')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();	
		$('#table_export_wrapper').hide();			
	}
	if(type=='Rehabilitation1')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();
		$('#table_export_wrapper').hide();				
	}
	if(type=='Rehabilitation2')
	{
		$("#chartdiv").show();
		$('.list-structure').show();
		$('#chart-format').hide();
		$('.table-structure').hide();
		$('#table-format').show();
		$('#cmd').hide();	
		$('#table_export_wrapper').hide();			
	}
    
	
});


$("#from_dt").on('change',function(){

	var fromfld=$("#from_dt").val(); 
	var fromfld_to=$("#to_dt").val(); 
	if(fromfld!="")
	{
      $("#error_from_dt").hide();

	} 

	
	

	
});

$("#to_dt").on('change',function(){
	var fromfld_to=$("#to_dt").val();
	//alert(fromfld_to);
	var fromfld=$("#from_dt").val();
	//alert(fromfld_to);  
	if(fromfld!="")
	{
      $("#error_to_dt").hide();

	} 
	if(fromfld_to < fromfld )
	{
    	document.getElementById("showmsg").innerHTML="* From Date should be less than To date" ; 

	        document.getElementById("mis_submit").disabled = true;
		
		$("#error").hide();
	}else{
    	document.getElementById("showmsg").innerHTML="" ; 
        document.getElementById("mis_submit").disabled = false;
    	
		}

	
});

$("#from_dt").on('change',function(){
	var fromfld_to=$("#to_dt").val();
	//alert(fromfld_to);
	var fromfld=$("#from_dt").val();
	//alert(fromfld_to);  
	if(fromfld!="")
	{
      $("#error_to_dt").hide();

	} 
	if(fromfld_to < fromfld )
	{
    	document.getElementById("showmsg1").innerHTML="* From Date should be less than To date" ; 

	        document.getElementById("mis_submit").disabled = true;
		
		$("#error").hide();
	}else{
    	document.getElementById("showmsg1").innerHTML="" ; 
        document.getElementById("mis_submit").disabled = false;
    	
		}

	
});



</script>
<script>
 $(document).ready(function() {
	    $('#table_export').DataTable( {
	        dom: 'Bfrtip',
	        "pageLength": 50,
	        buttons: [
	            'pdfHtml5'
	        ]
	    } );
	} );
 </script>
 
