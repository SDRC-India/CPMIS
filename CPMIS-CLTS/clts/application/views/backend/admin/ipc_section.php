<?php echo $add_button; ?>
<?php echo $form_filteripc; ?>
<div class="main_data">
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:50px;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
			<th><div><?php echo get_phrase('section_name');?></div></th>
			<th><div><?php echo get_phrase('description');?></div></th>
			<th><div><?php echo get_phrase('action');?></div></th>
		</tr>
	</thead>
	<tbody>
 
	<script type="text/javascript">
/*		
document.forms['project-add2'].elements['rng'].onchange = function(e) {
var base_url = "<?php echo base_url();?>";
var datas = new Object();
var rng = document.getElementById("rng").value;
var myarr = rng.split("-");
var myvarf = myarr[0];//alert(distid) ;
var myvars = myarr[1];//alert(distid) ;
		var relName = 'block';
		$.ajax({
		type: "POST",
		url: base_url+"/index.php?admin/getrng/"+myvarf+"/"+myvars,
		data: "",
		dataType: "text",
		cache:false,
		success: function(response){
		alert(response) ;
	  $("#randm").html(response);

		},
		error: function() {
		}
  });
  } */
	</script>
	<?php
$classes=explode("-",$rngname);
$rng1=$classes['0'] ;
$rng2=$classes['1'] ;
if($rngname==""){
$rng1=0 ;
$rng2=100 ;
}else{
$rng1=$classes['0'] ;
$rng2=$classes['1'] ;
}
$numberofvalue=count($number) ;

  				$counter=0;
	foreach (array_slice($data_list, $rng1, $rng2) as $row):
			$counter++;
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<td><?php echo $row['section_name'];?></td>
			<td><?php echo $row['descr'];?></td>
			<td>
            	<div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-default pull-right" role="menu">                   
                      <!-- EDITING LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal('<?php echo $editipc_url.$row['id'];?>');">
                              <i class="entypo-pencil"></i>
                                  <?php echo get_phrase('edit') ; ?>
                              </a>
                        </li>
                  </ul>
              </div>
			</td>
		</tr>
		<?php endforeach; ?>
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
	var title="";
				// convert the datatable
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



