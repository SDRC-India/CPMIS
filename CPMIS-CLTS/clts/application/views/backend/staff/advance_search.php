

<?php echo form_open('track_the_child', array('class' => 'form-horizontal form-groups-bordered ', 'enctype' => 'multipart/form-data')); ?>
<!----------------------------start of adv search date table-------------------------->

<table width="70%" class="padd">
 <tr>
    <td class="padd1">Search by Child ID:</td>
    <td class="padd1"><input type="text" class="form-control" name="child_id" id="child_id"  value="<?php echo $_POST["child_id"]; ?>" autofocus ></td>
	<td>OR</td>
  </tr>
  <tr>
    <td class="padd1">Search by Child Name:</td>
    <td class="padd1"><input type="text" class="form-control" name="child_name" id="child_name"  value="<?php echo $_POST["child_name"]; ?>" autofocus ></td>
	<td>OR</td>
  </tr>
   <?php if($roles_id == 9 || $roles_id == 10 || $roles_id == 11){?>
    <tr>
		<td class="padd1">Search by District:</td>
		<td class="padd1">
	<select name="dist_name" id="dist_name"  class="form-control" data-validate="required">
	<option value="" >Select</option>
	<?php
		$child_block = $this->db->select('*')->where('parent_id',$state_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
		foreach($child_block as $crow3):
	?>
	<option value="<?php echo $crow3['area_id'];?>" <?php if($_POST['dist_name']==$crow3['area_id']){ echo 'selected'; }  ?>><?php echo $crow3['area_name']; ?></option>
	<?php
		endforeach;
	?>
	</select></td>
	<td>AND</td>
  	</tr>
<?php } ?>
 <?php if($roles_id == 13 || $roles_id == 20){?>
    <tr>
		<td class="padd1">Search by Districts:</td>
		<td class="padd1">
	<select name="dist_name" id="dist_name"  class="form-control" data-validate="required">
	<option value="" >Select</option>
	<?php
	$child_block = $this->db->select('*')->where('division_id',$district_id)->order_by('district_name', 'asc')->group_by('district_name')->get('division_details')->result_array();
		foreach($child_block as $crow3):
	?>
	<option value="<?php echo $crow3['district_id'];?>" <?php if($_POST['dist_name']==$crow3['district_id']){ echo 'selected'; }  ?>><?php echo $crow3['district_name']; ?></option>
	<?php
		endforeach;
	?>
	</select></td>
	<td>AND</td>
  	</tr>
<?php } ?>
<?php 
if($roles_id != 9 && $roles_id != 10 && $roles_id !=11 && $roles_id!=13 && $roles_id!=20){  ?>
    <tr>
    <td class="padd1">Search by Block:</td>
	<td class="padd1">
	<select name="block_name" id="block_name"  class="form-control" data-validate="required">
	<option value="" >Select</option>
	<?php
		$child_block = $this->db->select('*')->where('parent_id',$district_id)->order_by('area_name', 'asc')->group_by('area_name')->get('child_area_detail')->result_array();
		foreach($child_block as $crow3):
	?>
	<option value="<?php echo $crow3['area_id'];?>" <?php if($_POST['block_name']==$crow3['area_id']){ echo 'selected'; }  ?>><?php echo $crow3['area_name']; ?></option>
	<?php
		endforeach;
	?>
	</select></td>  
	<td>AND</td>
  </tr>
  <?php } ?>

  <tr>
    <td class="padd1">Registration From Date</td>
    <td class="padd1">
      
	 <div class="input-group date" id="from_datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
        <input type="text" class="form-control" required name="from_dt" id="from_dt"  value="<?php echo $from_dt; ?>"  >
      </div></td>
    <td class="padd1">To Date</td>
    <td class="padd1">

	<div class="input-group date" id="to_datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
        <input type="text" class="form-control" name="to_dt" required id="to_dt"  value="<?php echo $to_dt; ?>"   onfocus="todt_focus();">
      </div> </td>
    <td class="padd1"><button type="submit" class="btn btn-info" id="submit-button" >GO</button></td>
	<td class="padd1"><a href="<?php echo base_url(); ?>index.php?/track_the_child"> <input type="button" class="btn btn-info" value="Show All"></a></td>
  </tr>

</table>
 <p class="left-margin5"><small>Note: Fill up any of the above field to track the child</small></p>
<!------------------end of date----------------------------->
<?php echo form_close(); ?> <br />
<!----------------start of result table-------------------------->
<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th width="5%">Sl No.</th>
      <th width="14%">Child ID</th>
      <th width="40%">Child Name</th>
      <th width="20%">Block Name</th>
      <th width="20%">District</th>
     <!-- <th><?php //echo get_phrase('options');?></th>-->
    </tr>
  </thead>
  <tbody>
    <?php
		$counter=1;
		foreach ($search_data as $row):
			//if($row['district_id']==$dist_id) {
    ?>
    <tr>
      <td width="5%"><?php echo $counter++;?> </td>
      <td width="14%"><a href="<?php echo base_url();?>index.php?child_rescued_list/view_track/<?php echo $row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
      <td width="40%"><?php echo $row['child_name'];?> </td>
      <td width="20%"><?php
			  $qry3 = $this->db->get_where('child_area_detail',array('area_id'=>$row['block']))->result_array();

			  foreach($qry3 as $blk):

			  $block=$blk['area_name'];

			  endforeach;


			?>
                  <?php echo $block;?></td>
      <td width="20%"><?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['district']))->result_array();

			  foreach($qry as $dss):

			  $dsts=$dss['area_name'];

			  endforeach;
			?>
        <?php echo $dsts;?>
        </td>

    </tr>
    <?php
//	}
	endforeach;
	?>
  </tbody>
</table>
<!---------------------------end of result table--------------------------->
<script type="text/javascript">
	jQuery(document).ready(function($)
	{

		 //CompareDate();
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

			"aoColumns": [
				{ "bSortable": true },
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


$(function() {
  $("#from_dt").on("change",function(){
    var today=new Date();
  $('#to_dt').datepicker('setDate', today);

});
	var FromEndDate = new Date();
	$("#from_dt" ).datepicker({
	format: 'yyyy-mm-dd',
	endDate: FromEndDate,
	autoclose: true

});

$("#to_dt" ).datepicker({

format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true

});
});

function todt_focus()
{
	var dateMin = $('#from_dt').datepicker("getDate");
	var rMin = new Date(dateMin.getFullYear(), dateMin.getMonth(),dateMin.getDate());
	$('#to_dt').datepicker('setStartDate', rMin);
  
}

</script>

<script src="assets/js/neon-custom-ajax.js"></script>
