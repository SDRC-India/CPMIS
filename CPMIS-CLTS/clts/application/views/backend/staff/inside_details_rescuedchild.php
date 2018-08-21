
<?php //print_r($inside_state_detils);?>

<div class="row" style=" margin:80px 0px 200px;">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">

      <div class="loader"></div>

    </div>
  </div>
  
  
  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" id="child_table">
		<div class="col-md-10"> </div>
         <div class="col-md-2"><a class="btn btn-info"href="<?php echo base_url().'index.php?/mis_reports/index/rescued_child/2014-04-01/2017-06-19/view/2'?>">Back To List</a></div>
		 <br/>
		 <br/>
		 
		<table  class="display table table-bordered" cellspacing="0" width="100%" id="table_export">
		
			<thead>
				<tr>
					<th style="text-align:center;">Child Id</th>
					<th style="text-align:center;">Child Name</th>
					<th style="text-align:center;">Father Name</th>
					<th style="text-align:center;">Rescued Date</th>
					<th style="text-align:center;">Postal Address</th>
				</tr>
			</thead>
			<tbody>
			<?php if($inside_state_detils){foreach($inside_state_detils as $row){?>
				
				<tr>
				<td style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['idate_of_rescue'] ;?></td>
				
			
				
				<?php if($row['postal_address']!='')
				{?>
				
			<td style="text-align:center;"><?php echo $row['postal_address'].','.$row['panchyat_name'].$row['police_station'].$row['block'].$row['district'].$row['pincode'] ;?></td>		
                   <?php }else if($row['panchyat_name']!=''){?>
                   	
                   	<td style="text-align:center;"><?php echo $row['postal_address'].$row['panchyat_name'].','.$row['police_station'].$row['block'].$row['district'].$row['pincode'] ;?></td>		
                   	
                   	
                 <?php }else if($row['police_station']!='')  {?>
				
			     	<td style="text-align:center;"><?php echo $row['postal_address'].$row['panchyat_name'].$row['police_station'].','.$row['block'].$row['district'].$row['pincode'] ;?></td>		
			     <?php }else if($row['block']!=''){?>
				<td style="text-align:center;"><?php echo $row['postal_address'].$row['panchyat_name'].$row['police_station'].$row['block'].','.$row['district'].$row['pincode'] ;?></td>		
			      <?php }else if($row['district']!=''){?>
			    <td style="text-align:center;"><?php echo $row['postal_address'].$row['panchyat_name'].$row['police_station'].$row['block'].$row['district'].','.$row['pincode'] ;?></td>	  
			    <?php }else if($row['pincode']!=''){?>
			    <td style="text-align:center;"><?php echo $row['postal_address'].$row['panchyat_name'].$row['police_station'].$row['block'].$row['district'].','.$row['pincode'] ;?></td>	  
			      <?php }else{?>
			 <td style="text-align:center;"><?php echo $row['postal_address'].$row['panchyat_name'].$row['police_station'].$row['block'].$row['district'].$row['pincode'] ;?></td>		     
			      <?php }?>
				
			<?php }}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>

			</tbody>
		
			</tbody>
		
		</table>
	</div>
<!--

</div>
<!-----------------------------------------------end of Row-------------------------------------------->
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
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		

		// convert the datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"paging": false,
			 "dom": 'Bfrtip',
        "buttons": [
             'excel', 'pdf', 'print'
        ]
      
			
		});

		
	});

</script>
