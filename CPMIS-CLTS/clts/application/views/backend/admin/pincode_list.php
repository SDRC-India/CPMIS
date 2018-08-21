<?php echo $add_button;?>
<?php echo $form_filter ;?>
<form role="form" class="form-horizontal form-groups-bordered validate project-add2" action="<?php echo base_url(); ?>index.php?admin/manage_profile/update_profile_info" method="post" enctype="multipart/form-data">

<div class="main_data">
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:50px;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
			<th><div><?php echo get_phrase('pincode');?></div></th>
			<th><div><?php echo get_phrase('district_id');?></div></th>
			<th><div><?php echo get_phrase('action');?></div></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$counter=1;
		foreach($datapn_list as $row):
		
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<td><?php echo $row['pincode'];?></td>
			<td><?php 
				$district_id=$row['district_id'];
				$district_name=mysql_fetch_assoc(mysql_query("select area_name from child_area_detail where area_id='$district_id'")) ;
				echo $district_name['area_name'] ;
			?></td>
			<td>
            	<div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                   
                      <!-- EDITING LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal('<?php echo $editpincode_url.$row['id'];?>');">
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
</div>



