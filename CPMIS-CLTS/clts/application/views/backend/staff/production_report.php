<h4></h4>
<?php //print_r($first_title)?>


<div class="row">
<div class="col-md-6">
			<div class="form-group">
			<a href = "<?php echo base_url(); ?>index.php?order_after_production/production_report"><label class="" for="">All Reports View</label>
</a>

	<form class="form-inline"  id="myform" name="" method="post" action="<?php echo base_url(); ?>index.php?order_after_production/production_report">
			  
				<!--<select name="type" id="" class="form-control dist"  data-validate="required" >
                 <option <?php if($type=="entitlement_card_getnerated") echo "selected" ;?> value="entitlement_card_getnerated">Entitlement Card Generated Time Period</option>
				 <option  <?php if($type=="investigation") echo "selected" ;?> value="investigation">Investigation Time Period</option>
				 <option  <?php if($type=="inside_state") echo "selected" ;?> value="inside_state">Child Rescued Inside State</option>
				 <option  <?php if($type=="outside_state") echo "selected" ;?> value="outside_state">Child Rescued Outside State</option>
				 

                </select>--->
			
			
			</div>
			</div>
			<div class="col-md-6"></div>
</div>
	
    <div class="row">
	<?php 
	
	 $past_date=date('Y-m-d', strtotime(date('Y-m')." -1 month"));
	$currentDate = date("Y-m-d");
	
	?>
		<div class="col-md-4 " >
		
           	<label for="datepicker" >From</label>
           	 
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control " name="from_date" id="dob"  value="<?php echo $past_date;?>"  data-validate="required"  >
                	</div>
            
            </div>
		   <div class="col-md-4">
        		
           	<label for="datepicker"> To</label>
           	
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" name="to_date" id="dob"  value="<?php echo $currentDate ;?>"  data-validate="required"  >
                </div>
                
		  </div>
		   
  			<div class="col-md-2" >
           
  			<input style="margin-top:20px;" type="submit" class="btn btn-info" />
  			</div>


	</form>

</div>
</br>
<div></div>
<div class="row">
<div class="col-md-12">
 <table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th style="width:30px;"> </th>
      <th><div>Child ID</div></th>
      <th><div>Area Name</div></th>
      <th><div>Address</div></th>
      <th><div>District</div></th>
      <th style="width:90px;"><div>CCI Date</div></th>
    </tr>
  </thead>
  <tbody>
  <?php
		foreach($report as $row):
		?>
    <tr>
     <td class="table_td_width"><?php echo $counter++;?> </td>
      <td><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
      <td><?php echo $row['ccis_name'];?></td>
      <td><?php echo $row['cci_address'];?> </td>
	  <td><?php echo $row['cci_address'];?> </td>
      <td><?php echo $row['cci_date'];?> 
         </td>
     <!-- <td><a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top"  data-original-title="View/Approve"	href="<?php echo base_url();?>index.php?staff/child_detail_view/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036"> <i class="entypo-print"></i> </a>
        
      </td>-->
    </tr>
    <?php
		endforeach;?>
  </tbody>
</table>       
   
</div>


<!--<form action="<?php echo base_url(); ?>index.php?monthly_report/report_details" method="post"> 
	<input type="hidden" name="from_date" value="<?php echo $from?>">
	<input type="hidden" name="to_date" value="<?php echo $to?>">
	<input type="hidden" name="type" value="<?php echo $type?>">
	<input type="submit" value="View All" class="btn btn-info col-md-offset-5" />
	
	</form>-->

<script>
	var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
"setDate": new Date()
});
</script>
	<script>
var FromEndDate1 = new Date();
$('#datepickerTo').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate1,
autoclose: true,
date:FromEndDate1
});
</script>
