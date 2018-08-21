
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:30px;">
           	
           	</th>
			<th><div>Child ID</div></th>
			<th><div>Child Name</div></th>
			<th><div>Address</div></th>
			<th><div>District</div></th>
			<th><div><?php echo get_phrase('options');?></div></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$counter = 1;
		$this->db->order_by('id' , 'desc');
		$projects	=	$this->db->get('child_basic_detail' )->result_array();
		foreach($projects as $row):
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<td>
				<a href="<?php echo base_url();?>index.php?admin/basic_info_edit/<?php echo $row['id'];?>">
					<?php echo $row['child_id'];?>
               </a>
           </td>
			<td><?php echo $row['child_name'];?>
                    </td>
			<td><?php echo $row['postal_address'];?>
                    </td>
			<td>
            	<?php echo $row['district'];?>
           </td>
			<td>
            <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top"  data-original-title="Detail Report"	href="<?php echo base_url();?>index.php?staff/reportdetail/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036">
                	<i class="entypo-print"></i>
               </a>
               
               
                <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Card Print"	href="<?php echo base_url();?>index.php?staff/cardprint/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036">
                	<i class="entypo-vcard"></i>
               </a>
            
            	
                  
                  <?php if($row['pstatus']=='Y') echo "<span style='color:green'>Active</span>"; ?>
               
                <?php if($row['pstatus']=='N') echo "<span style='color:red'>Pending</span>"; ?>
                
                
                
            	
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>




                     
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