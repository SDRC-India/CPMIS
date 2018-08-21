<!-----------------labour dept table started------------------------------>
 <a class="pull-right" href="<?php echo base_url().'index.php?dashboard'?>" /> Back To List </a>
<table class="table table-bordered datatable" id="table_export">

  <thead>
    <tr>
      <th class="table_td_width" style="text-align:center;color:#000;">Sl. No.</th>
      <th style="text-align:center;color:#000;"><div>Child ID</div></th>
	  <th style="text-align:center;color:#000;"><div>Child Name</div></th>
     
      <th style="text-align:center;color:#000;"><div>CMRF Transfered Rs. 25000 </div></th>
     
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($lrd_val as $row):?>
   <tr>
    <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
    <td style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
	 <td style="text-align:center;"><?php echo $row['child_name'];?></td>
    
    </td>
    <td style="text-align:center;"><?php echo $row['mtransfer_proof'];	?>
    
    </td>
  </tr>
  <?php

		endforeach;?>
  </tbody>

</table>
<!----------------------labour dept table end------------------------------------->
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
				{ "bSortable": true },
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