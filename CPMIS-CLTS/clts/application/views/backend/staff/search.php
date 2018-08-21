<!-------------------start of search page------------------------>

<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th style="width:30px;"> </th>
      <th><div>Child ID</div></th>
      <th><div>Child Name</div></th>
      <th><div>Address</div></th>
      <th><div>District</div></th>
      <th><div><?php echo get_phrase('options');?></div></th>
    </tr>
  </thead>
  <tbody>
    <?php
		
		$session_ids=$this->session->userdata('login_user_id');
		
		$tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();
		
		foreach($tstrole as $strp):
		
		$role_id=$strp['account_role_id'];
		
		$district_id=$strp['district_id'];
		$state_id=$strp['state_id'];
		
		endforeach;

		foreach ($edit_data as $row):
		
		if($row['district_id']==$district_id) {


         ?>
    <tr>
      <td style="width:30px;"><?php echo $counter++;?> </td>
      <td><a href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
      <td><?php echo $row['child_name'];?> </td>
      <td><?php echo $row['postal_address'];?> </td>
      <td><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['district']))->result_array();
			  
			  foreach($qry as $dss):
			  
			  $dsts=$dss['area_name'];
			  
			  endforeach;
			
			?>
        <?php echo $dsts;?> </td>
      <td><?php if($row['pstatus']=='Y') echo "<span style='color:green'>Approved</span>"; ?>
        <?php if($row['pstatus']=='N') echo "<span style='color:red'>Pending</span>"; ?>
      </td>
    </tr>
    <?php
		
		}
		
		endforeach;?>
  </tbody>
</table>
<!----------------------------end of search page---------------------->
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
			"aoColumns": [
				{ "bSortable": false },
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				null
			],
			
		});
		
		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});

	});
		
</script>
<script src="assets/js/neon-custom-ajax.js"></script>
