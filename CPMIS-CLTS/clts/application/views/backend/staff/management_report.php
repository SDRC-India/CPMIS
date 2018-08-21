<?php //echo $type;?>
<form  action="<?php echo base_url(); ?>index.php?management_report" method="post" >

<div class="row">
		
<div class="col-md-6">
			<div class="form-group">
			<label class="" for="">Select Reports</label>
		  
				<select name="type" id="" class="form-control dist"  data-validate="required" >
                 <option <?php if($type=="system_access") echo "selected" ;?> value="system_access">System Access</option>
				 <option  <?php if($type=="last_login") echo "selected" ;?> value="last_login">Last Login Time Period</option>
				 <option  <?php if($type=="emp_amt") echo "selected" ;?> value="emp_amt">Amount Collected From Employeer For Outside Rescued Children</option>
				 <option  <?php if($type=="cwc_not_filling") echo "selected" ;?> value="cwc_not_filling">CWC Not Filling Required Details</option>
				 <option  <?php if($type=="cwc_delay") echo "selected" ;?> value="cwc_delay">Delay In CWC Order Passing</option>

                </select>
			</div>
			</div>
			<div class="col-md-6"></div>
</div>
	
	<div class="row">
	
		<div class="col-md-2">
			<div class="form-group">
			<label >User Groups</label>
		  
				<select name="user_grp" id="" class="form-control dist"  data-validate="required">
				<option value="">Select User Groups</option>
               
                  <?php foreach($user_grps as $crow2):  ?>
                   
                  <option <?php if($selected_user_grp==$crow2['account_role_id']){echo "selected";}?> value="<?php echo $crow2['account_role_id'];?>" ><?php echo $crow2['name']; ?></option>
                  <?php    endforeach;?>

                </select>
			</div>
		</div>
		<div class="col-md-4 " >
		   	<label for="datepicker" >From</label>
           	 
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" name="from_date" id="datepicker"   value="<?php echo $from?>"  data-validate="required"  >
                	</div>
           
            </div>
		   <div class="col-md-4">
        		
           	<label for="datepicker">To</label>
           	
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" name="to_date" id="datepickerTo"  value="<?php echo $to;?>"  data-validate="required"  >
                
                 </div>
		  </div>
		   
  			<div class="col-md-2">
        
  			<button type="submit" style="margin-top:20px;" class="btn btn-info">Submit</button>
  			</div>


	</form>

</div>
	
<div class="row" style=" margin:80px 0px 200px;">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">

      <div class="loader"></div>

    </div>
  </div>
  
  
  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" id="child_table">
		<h2>Report Details</h2>
		
		<table  class="display table table-bordered" cellspacing="0" width="100%" id="table_export">
		<?php if($type=="system_access"){?>
			<thead>
				<tr>
					<th style="text-align:center;">User Name</th>
					<th style="text-align:center;">District</th>
					<th style="text-align:center;">No of times accessed</th>
					<th style="text-align:center;">Last accessed Date</th>
				</tr>
			</thead>
			<tbody>
			
			<?php

		foreach($sys_access_report as $row):
		?>
				<tr>

				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['district'];?> </td>
				  <td><?php echo $row['count'];?> </td>
				  <td><?php echo $row['last_access'];?> </td>
				  
				</tr>
	 <?php endforeach;?>
		<?php }else if($type=="last_login"){?>
		<thead>
				<tr>
					<th style="text-align:center;">User Name</th>
					<th style="text-align:center;">District</th>
					<th style="text-align:center;">No of Login Into System</th>
					<th style="text-align:center;">Last Login Date</th>
					<th style="text-align:center;">No Of Days From Last Login</th>
				</tr>
			</thead>
			<tbody>
			
			<?php

		foreach($last_login_report as $row):
		?>
				<tr>

				  <td ><?php echo $row['name'];?> </td>
				  <td><?php echo $row['district'];?> </td>
				  <td><?php echo $row['count'];?> </td>
				  <td><?php echo $row['login_date'];?> </td>
				  <td><?php
				  $your_date = strtotime($row['login_date']);
				   
				   $now = strtotime(date("Y-m-d"));
                   $datediff =  $your_date-$now ;

                    echo floor($datediff / (60 * 60 * 24));?> </td>
				  
				</tr>
	 <?php  endforeach;?>
		<?php }  ?>
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
		//convert all checkboxes before converting datatable
		replaceCheckboxes();

		// Highlighted rows
		$("#table_export tbody input[type=checkbox]").each(function(i, el)
		{
			var $this = $(el),
				$p = $this.closest('tr');

			$(el).on('change', function()
			{
				var is_checked = $this.is(':checked');

				$p[is_checked ? 'addClass' : 'removeClass']('highlight');
			});
		});

		// convert the datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"paging": false,
			 "dom": 'Bfrtip',
        "buttons": [
             'excel', 'pdf', 'print'
        ],
      "columnDefs": [
          { "className": "dt-center", "targets": "_all"}
        ],
			
		});

		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>
