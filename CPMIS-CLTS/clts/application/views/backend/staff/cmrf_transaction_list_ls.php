
<!----------------------start of education department list table--------------------------->
<table class="table table-bordered datatable responsive" id="table_export">

	<thead>
		<tr>
			<th class="table_td_width">
				Sl. No.
           	</th>
			<th><div>Date of demand released</div></th>
			<th><div>Notification </div></th>
			
			<!--  <th><div>No. of CL due for whom demand not released</div></th>-->
			<!-- <th><div>Action</div></th>-->
			
	  
		</tr>
	</thead>
	<tbody>
		<?php
		$counter=1;
		foreach($cmrf_transaction as $row):

		?>
		<tr>
			<td class="table_td_width">
           		<?php echo $counter++;?>
           	</td>
			<td>

					<?php echo $row['drel_date'];?>

           </td>
		  
			<td><?php echo 'LRD has released the sum of Rupees"'.$row['drel_amount'].'" for "'.$row['drel_cl_no'].'"  no of rescued child labours vide letter no "'.$row['drel_letter_no'].'" dated "'.$row['drel_date'].'"against your demand letter no "'.$row['dr_letter_no'].'" dated "'.$row['dr_date'].'" '?>
                    </td>
			
	  
			
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
<!---------------------end----------------------------------->

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
			 responsive: true,
			 "dom": 'Blftrip',
			"sPaginationType": "bootstrap",
			buttons: [ {extend: 'excelHtml5',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-file-excel-o"></i> Excel',
				title: "CMRF Transaction Details"
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: "CMRF Transaction Details"
			},{
            extend: '',
            text: '<a href="#" id="pdf_submit" ><i class="fa fa-file-pdf-o"></i> PDF </a>',
			
        } ],
		

		});

		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});


		$("#pdf_submit").on("click",function(){
			console.log("sasd");
			window.location.assign('<?php echo base_url(); ?>index.php?cmrf_trn_details_ls/index/pdf');
			
			});

	});

</script>
<script src="assets/js/neon-custom-ajax.js"></script>
