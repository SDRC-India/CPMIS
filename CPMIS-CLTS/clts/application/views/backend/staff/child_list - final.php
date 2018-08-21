    <?php
		$counter = 1;
		$session_ids=$this->session->userdata('login_user_id');
		$tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

		foreach($tstrole as $strp):
			$role_id=$strp['account_role_id'];
			$district_id=$strp['district_id'];
			$state_id=$strp['state_id'];
		endforeach;
?>
<!------------------------------child list table start----------------------------------------->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
	<?php
	if($role_id!=8 && $role_id!=9 && $role_id!=10){
	?>
    <td style="font-size:12px; font-weight:600; color:#000; text-align:right;"><button onclick="window.location.href='<?php echo base_url();?>index.php?staff/child_rescued'" class="btn btn-info">New Child Registration</button></td>
	<?php } ?>
  </tr>
</table>
<br />
<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th style="width:30px;"> </th>
      <th><div>Child ID</div></th>
      <th><div>Child Name</div></th>
      <th><div>Address</div></th>
      <th><div>Photo</div></th>
      <th style="width:93px;"> <div><?php echo get_phrase('options');?></div></th>
    </tr>
  </thead>
  <tbody>
<?php
		if ($role_id==7 || $role_id==8) {
				$quer="select * from clts_app.child_basic_detail where (ls_activate='Y' and district_id='" . $district_id ."' and child_id in(select child_id from clts_app.final_order where dist='" .$district_id . "')) or (account_role_id='7' and district_id='" . $district_id ."' and district='" . $district_id ."') or child_id in(select child_id from clts_app.final_order where dist='" .$district_id . "') or (account_role_id in(2,5) and district='" . $district_id ."' and ls_activate='Y' and district_id='" . $district_id ."')";
		}
		else {
				if($role_id==9 || $role_id==10){
					$quer="select * from clts_app.child_basic_detail where state_id='".$state_id."'";
		 		}
				else
				{
					$quer="select * from clts_app.child_basic_detail where (district_id='" . $district_id ."' and district='" . $district_id ."') or child_id in(select child_id from clts_app.final_order where dist='" .$district_id . "')";
				}
		}

		$projects = $this->db->query($quer)->result_array();

		foreach($projects as $row):
		?>
    <tr>
      <td style="width:30px;"><?php echo $counter++;?> </td>
      <td><a href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
      <td><?php echo $row['child_name'];?> </td>
      <td><?php echo $row['postal_address'];?> </td>
      <td><?php  if (file_exists('uploads/child_image/' .$row['child_id'] . '.jpg')) {
				echo '<img src="uploads/child_image/'.$row['child_id'].'.jpg" width="150" height="100" />';
			}?>
      </td>
      <td><?php
			if($role_id==7 ) {
			if($row['pstatus']=='N' ){
			?>
        <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo base_url();?>index.php?staff/child_rescued_edit/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036"> <i class="entypo-pencil"></i> </a>
		<?php }else{?>
		 <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"		href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>"  style="background-color: #777; border:#777"> <i class="entypo-eye"></i> </a>
        <?php
		}
				 } else {
				 if($role_id==2 && $row['ls_activate'] =='N' && $row['account_role_id'] !=7){
		?>
        <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo base_url();?>index.php?staff/child_rescued_edit/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036"> <i class="entypo-pencil"></i> </a>
        <?php }
				else{
		?>
        <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"		href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>"  style="background-color: #777; border:#777"> <i class="entypo-eye"></i> </a>
        <?php }
		}?>
      </td>

    </tr>
    <?php
		endforeach;?>
  </tbody>
</table>
<!-----------------------child list table end----------------------------->
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
      
			"aoColumns": [
				{ "bSortable": false },
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
