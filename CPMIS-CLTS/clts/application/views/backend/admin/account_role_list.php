<?php echo $add_role_button;?>

<br><br>
<div class="main_data">
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:30px;">
           	</th>
			<th><div><?php echo get_phrase('name');?></div></th>
			<th><div><?php echo get_phrase('permissions');?></div></th>
			<th><div><?php echo get_phrase('number_of_staff');?></div></th>
			<th><div><?php echo get_phrase('options');?></div></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$counter	=	1;

		foreach($account_roles as $row):
		?>
		<tr>
			<td style="width:30px;" align="center">
				<?php echo $counter++;?>
           	</td>
			<td><?php echo $row['name'];?></td>
			<td>
				<?php
				$permission_array	=	( explode(',' , $row['account_permissions']));
				for($i = 0 ; $i<count($permission_array)-1; $i++)
				{
					echo '<span class="badge "> ';
					echo $this->db->get_where('account_permission',
							array('account_permission_id'=>$permission_array[$i]))->row()->name;
					echo "</span><br>";
				}
				?>
           </td>
			<td><?php echo $this->db->get_where('staff',array('account_role_id'=>$row['account_role_id']))->num_rows();?></td>
			<td>
            	<div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                      <!-- EDITING LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal2('<?php echo $edit_url.$row['account_role_id'];?>');">
                              <i class="entypo-pencil"></i>
                                  <?php echo get_phrase('edit');?>
                              </a>
                                      </li>
                      <li class="divider"></li>

                      <!-- DELETION LINK -->
                      <li>
                          <a href="#" onclick="confirm_modal('<?php echo $delete_url.$row['account_role_id'];?>' , '<?php echo base_url();?>index.php?admin/reload_account_role_list');" >
                              <i class="entypo-trash"></i>
                                  <?php echo get_phrase('delete');?>
                              </a>
                                      </li>
                  </ul>
              </div>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
</div>




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
var title="";
		// convert datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"paging": true,
			"dom": 'Blftrip',
			buttons: [ {extend: 'excelHtml5',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-file-excel-o"></i> Excel',
				title: ""
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: ""
			},{
            extend: 'pdfHtml5',
            text: '<i class="fa fa-file-pdf-o"></i> PDF ',
			title:title,
    
        } ],
			

		});

		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});





	});


</script>
