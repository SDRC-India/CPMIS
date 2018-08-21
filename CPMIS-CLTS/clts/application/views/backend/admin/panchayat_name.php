<?php echo $add_button;?>
<?php echo $filter_panchayat;?>
<form role="form" class="form-horizontal form-groups-bordered validate project-add2" name="panchayat" method="post" enctype="multipart/form-data">

<div class="main_data">
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:50px;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
			<th><div><?php echo get_phrase('panchayat_name');?></div></th>
			<th><div><?php echo get_phrase('block_Name');?></div></th>
			<th><div><?php echo get_phrase('action');?></div></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$counter=1;
		foreach($data_list as $row):
		
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<td><?php echo $row['name'];?></td>
			<td><?php
			 $block_id=$row['block_id'];
			 $blockname=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$block_id'")) ;
				echo $blockname['area_name'] ;
			?></td>
			<td>
            	<div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                   
                      <!-- EDITING LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal('<?php echo $editpanchayat_url.$row['id'];?>');">
                              <i class="entypo-pencil"></i>
                                  <?php echo get_phrase('edit') ; ?>
                              </a>
                                      </li>

                    
                  </ul>
              </div>
			</td>
		</tr>
		<?php endforeach;?>

	</tbody>
</table>
<script src="assets/js/neon-custom-ajax.js"></script>
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

		// convert datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"aoColumns": [
				{ "bSortable": false}, 	//0,checkbox
				{ "bVisible": true},		//1,name

				{ "bVisible": true},		//2,role

				{ "bSortable": false},		//3,State
				
					//6,option
			],
			"oTableTools": {
				"aButtons": [

					{
						"sExtends": "xls",
						"mColumns": [1, 2, ]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",

						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);
							this.fnPrint( true, oConfig );

							window.print();
								window.location.reload();
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
									  datatable.fnSetColumnVis(4, true);
								  }
							});
						},

					},
				]
			},

		});

		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});





	});
	
</script>
</div>



