

<form role="form" class="form-horizontal form-groups-bordered validate project-add2"  method="post" enctype="multipart/form-data">
<div class="main_data">
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			 <th class="table_td_width"> SL No</th>
			  <th><div>Name Of NGO</div></th>
			  <th><div>Reg No.</div></th>
			  <th><div>Registration Date</div></th>
			  <th><div>Geographic area</div></th>
			  <th><div>Thematic area</div></th>
			<!--<th><div>I / E statements</div></th>
			  <th><div>Tax returns</div></th>-->
			  <th class="table_td_width1"> <div>Options</div></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$counter=1;
		foreach($data_list as $row):
		
		?>
		<tr>
	<td class="table_td_width"><?php echo $counter++;?> </td>
      <td><?php echo $row['name'] ;  ?> </td>
      <td><?php echo $row['regno'] ;  ?></td>
      <td><?php echo $row['date_reg'] ;  ?></td>
      <td><?php echo $row['geo_operation'] ;  ?></td>
      <td><?php echo $row['thematic_operation'] ;  ?></td>
     <!-- <td><?php //echo $row['incom_expend'] ;  ?></td>
      <td><?php //echo $row['text_return'] ;  ?></td>-->
      <td> <a class="btn btn-info tooltip-primary btn-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="<?php echo $details_url.$row['id'];?>"  ><?php  if($roles_id!=10){ ?> <i class="entypo-eye"></i><?php }else{ if($row['approve_status']==1){ ?><i class="entypo-eye"></i><?php }else{ ?><i class="entypo-pencil"></i><?php }} ?></a></td>

		</tr>
		<?php endforeach;?>
	</tbody>
</table>
<script src="assets/js/neon-custom-ajax.js"></script>
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
	var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) {
				dd='0'+dd
			} 

			if(mm<10) {
				mm='0'+mm
			} 

			today = dd+'-'+mm+'-'+yyyy;
			var title="List of Registered NGO";
     
		// convert the datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"paging": true,
			"dom": 'Blftrip',
			
			buttons: [ {extend: 'excelHtml5',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-file-excel-o"></i> Excel',
				title: "MIS Report-"+title,
				exportOptions: {
                    		columns: [ 0, 1, 2, 3, 4, 5]         

                },
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: "MIS Report-"+title,
				exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5]         
                }
            
			},{
            extend: 'pdfHtml5',
            text: '<i class="fa fa-file-pdf-o"></i> PDF ',
			title:title,
			pageSize: 'LEGAL',
			exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5]         
					},
           customize: function ( doc ) {
			   
			   	doc.styles.tableBodyEven={
				   alignment: 'center'
				  };
				doc.styles.tableBodyOdd={

				alignment: 'center'
				};
			   var cols = [];
			   
			   cols[0] = {image: 'data:image/png;base64,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', alignment: 'left', margin:[10,0,20] };
			   
			   cols[1] = {text: 'Mis Report', alignment: 'right', margin:[10,10,20] };
			   var objHeader = {};
			   objHeader['columns'] = cols;
			   doc['header']=objHeader;
			   var cols = [];
			   cols[0] = {text: 'Supported By Unicef', alignment: 'left', margin:[20] };
			   cols[1] = {text: 'Printed ON:'+today+'from http://www.cpmis.org/clts ', alignment: 'center',};
			   cols[2] = {text: 'Powered By SDRC', alignment: 'right', margin:[0,0,20] };
			   var objFooter = {};
			   objFooter['columns'] = cols;
			   doc['footer']=objFooter;
               
               
                // Data URL generated by http://dataurl.net/#dataurlmaker
            }
        } 
			],
		
	
	
		});
	});
	
</script>
</div>
</form>