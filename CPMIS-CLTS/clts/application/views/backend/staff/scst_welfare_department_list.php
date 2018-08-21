<!-----------------start of scst dept list ----------------------->
<table class="table table-bordered datatable" id="table_export">

  <thead>
    <tr>
      <th class="table_td_width">Sl. No.</th>
      <th><div>Child ID</div></th>
	  <th><div>Child Name</div></th>
      <th><div>Has rescued child been benefited by scholarships </div></th>

      <th><div><?php echo get_phrase('options');?></div></th>
	    <?php if($role_id=='8'){?>
	   <th><div>Status</div></th>
	   <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php foreach($scst_welfare_department_data as $row):

	?>
    <tr>
      <td class="table_td_width"><?php echo $counter++;?> </td>
      <td><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
	  <td><?php echo $row['child_name'];?></td>
      <td><?php echo $row['benefited_scholarships']; ?>
	   <td><?php if($role_id=='8'){?>
	   <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo $edit_url.$row['child_id'];?>"> <i class="entypo-pencil"></i> </a>
	  <?php } else {
	  if($row['pstatus']=='N'){?>
	  <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo $edit_url.$row['child_id'];?>"> <i class="entypo-pencil"></i> </a>
        <?php } else {
		if($row['pstatus']=='Y') {?>
		 <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
		href="<?php echo $details_url.$row['child_id'];?>"
		> <i class="entypo-lock"></i> </a>
		<?php }}}?>
      </td>

	   <?php if($role_id=='8'){ ?>
	  <td>
	  <?php if($row['pstatus']=='Y') echo "<span class='color-green'>Final order passed";?>

	  <?php if($row['pstatus']=='N') echo "<span class='color-red'>Ongoing";?>
	  </td>
	  <?php } ?>

    </tr>
    <?php
		endforeach;?>
  </tbody>
</table>
<!--------------------end of scst dept list-------------------------->
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
          { "orderable": false, "targets": 4 }
        ],
			"aoColumns": [
				{ "bSortable": true },
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				<?php if($role_id=='8'){?>
				{ "bVisible": true},
				<?php }?>
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
