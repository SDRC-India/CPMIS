<!------------------------reason list table start-------------------------->

<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th class="table_td_width"> Sl. No.</th>
      <th><div>Child ID</div></th>
	  <th><div>Child Name</div></th>
      <th><div>Reason for Leaving Family</div></th>
      <th><div>With Whom the Child was Staying Prior to Rescue</div></th>
      <th><div>Parental Care Towards Child Before Rescue</div></th>
      <th><div><?php echo get_phrase('options');?></div></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($reasons_add_data as $row):	?>
    <tr>
      <td class="table_td_width"><?php echo $counter++;?> </td>
      <td><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
	    <td><?php echo $row['child_name'];?></td>
      <td><?php	echo $row['reason_for_leaving'];?>
      </td>
      <td><?php	echo $row['staying_prior_rescue'];  ?>
      </td>
      <td><?php echo $row['care_before_rescue'];	?>
      </td>
      <td><?php if($row['pstatus']=='N') { ?>
        <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo $edit_url.$row['child_id'];?>" > <i class="entypo-pencil"></i> </a>
        <?php

				}
				else {
		?>
        <a class="btn btn-info tooltip-primary btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
		href="<?php echo $details_url.$row['child_id'];?>"
	> <i class="entypo-lock"></i> </a>
        <?php
				}
		?>
      </td>
    </tr>
    <?php

		endforeach;?>
  </tbody>
</table>
<!------------------------end------------------------------>
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
          { "orderable": false, "targets": 6 }
        ],
			"aoColumns": [
				{ "bSortable": true },
				{ "bVisible": true},
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
