<?php echo $add_button;?>
<?php echo $form_filter;?>

<form role="form" class="form-horizontal form-groups-bordered validate project-add2" action="<?php echo base_url(); ?>index.php?admin/manage_profile/update_profile_info" method="post" enctype="multipart/form-data">

<div class="main_data margin-top">
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:50px;">
			<?php echo get_phrase('Sl. no.') ?>
           	</th>
			<th><div><?php echo get_phrase('police_station_name');?></div></th>
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
			<td><?php echo $row['police_station_name'];?></td>
			<td>
            	<div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                   
                      <!-- EDITING LINK -->
                      <li>
                          <a href="#" onclick="showAjaxModal('<?php echo $edit_url.$row['id'];?>');">
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

				{ "bSortable": false},		//2,role

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
							datatable.fnSetColumnVis(2, false);
							
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
<script>

function removeAllOptions(sel, removeGrp) {
var len, groups, par;
if (removeGrp) {
groups = sel.getElementsByTagName('optgroup');
len = groups.length;
for (var i=len; i; i--) {
sel.removeChild( groups[i-1] );
}
}

len = sel.options.length;
for (var i=len; i; i--) {
par = sel.options[i-1].parentNode;
par.removeChild( sel.options[i-1] );
}
}

function appendDataToSelect(sel, obj,type) {
var f = document.createDocumentFragment();
var labels = [], group, opts;

function addOptions(obj) {
var f = document.createDocumentFragment();
var o;

o = document.createElement('option');
if(type=="block")
{
o.appendChild( document.createTextNode( 'Select Block' ) );
}
o.value ='';
f.appendChild(o);

for (var i=0, len=obj.text.length; i<len; i++) {
o = document.createElement('option');
o.appendChild( document.createTextNode( obj.text[i] ) );

if ( obj.value ) {
o.value = obj.value[i];
}

f.appendChild(o);
}
return f;
}

if ( obj.text ) {
opts = addOptions(obj);
f.appendChild(opts);
} else {
for ( var prop in obj ) {
if ( obj.hasOwnProperty(prop) ) {
labels.push(prop);
}
}

for (var i=0, len=labels.length; i<len; i++) {
group = document.createElement('optgroup');
group.label = labels[i];
f.appendChild(group);
opts = addOptions(obj[ labels[i] ] );
group.appendChild(opts);
}
}
sel.appendChild(f);
}

	
	
	

document.forms['demoForm'].elements['choices'].onchange = function(e) { 
 var base_url = "<?php echo base_url();?>";
//alert(base_url) ;

var datas = new Object();
var distid=document.getElementById('choices').value;
//alert(distid) ;
var relName = 'block';
$.ajax({
type: "POST",
url: base_url+"/index.php?admin/getblock/"+distid,
data: "",
dataType: "text",
cache:false,
success: function(msg){
datas= msg;
console.log(msg);
var form = document.forms['demoForm'];
// reference to associated select box
var relList = form.elements[ relName ];

Select_List_Data=eval( '(' + msg + ')' );
//console.log(Select_List_Data);
//console.log(Select_List_Data[relName]);
var obj=Select_List_Data[relName][distid];
var type="block";
//alert(obj);

// remove current option elements
removeAllOptions(relList, true);

// call function to add optgroup/option elements
// pass reference to associated select box and data for new options
appendDataToSelect(relList, obj,type);
//obj = msg;
},
error: function() {

}
  });

 
 
}
</script>
</div>
</form>



