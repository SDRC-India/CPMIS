<!-----------------------------ls activation start---------------------------->

<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th class="table_td_width"> Sl No </th>
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

		foreach($cwc_forwarded_data as $row):

		?>
    <tr>
      <td clsss="table_td_width"><?php echo $counter++;?> </td>
      <td><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
      <td><?php echo $row['child_name'];?> </td>
      <td><?php echo $row['postal_address'];?> </td>
      <td><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['district']))->result_array();

			  foreach($qry as $dss):

			  $dsts=$dss['area_name'];

			  endforeach;


			?>
        <?php echo $dsts;?> </td>
      <td><?php if($row['ls_activate']=='N'){?>
        <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Forward"	href="<?php echo $forward_url.$row['child_id'];?>"> <i class="entypo-right"></i> </a>
        <?php }
				else{

				?>
        <a class="btn btn-info tooltip-primary btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"	href="<?php echo $details_url.$row['child_id'];?>" > <i class="entypo-eye"></i> </a>
        <?php }?>
      </td>
    </tr>
    <?php

		endforeach;?>
  </tbody>
</table>
<!-------------------------ls actvation list ends-------------------------------------------->
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
      "columnDefs": [
          { "orderable": false, "targets": 5 }
        ],
			"aoColumns": [
				{ "bSortable": true },
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
