<!---------------------after rescued table started------------------------------------------------>
<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th style="width:30px;"> Sl. No.</th>
      <th><div>Child ID</div></th>
	  <th><div>Child Name</div></th>
      <th><div>Name of CWC whom child was referred to</div></th>
      <th><div>Districts</div></th>
      <th><div>Date & Time</div></th>
      <th><div><?php echo get_phrase('options');?></div></th>
    </tr>
  </thead>
  <tbody>
    <?php 
		$counter = 1;
		$session_ids=$this->session->userdata('login_user_id');
		$tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();
		
		foreach($tstrole as $strp):
			$role_id=$strp['account_role_id'];
			$district_id=$strp['district_id'];
			$state_id=$strp['state_id'];
		endforeach;

		if($role_id==7){
		$quer = "Select * from child_basic_detail where (ls_activate='Y' and district!='".$district_id."' and district_id='".$district_id."') or (account_role_id='7' and district!='".$district_id."' and district_id='".$district_id."') order by id desc";
		}
		else{
		$quer = "Select * from child_basic_detail where district!='".$district_id."' and district_id='".$district_id."' order by id desc";
		}
		$projects = $this->db->query($quer)->result_array();
		foreach($projects as $row):
		$row25	=	$this->db->get_where('child_after_rescued' , array('child_id' => $row['child_id']))->result_array();
		foreach($row25 as $rw):
		?>
    <tr>
      <td style="width:30px;"><?php echo $counter++;?> </td>
      <td><a href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
	  <td><?php
			echo $row['child_name']; 
			?>
      </td>
      <td><?php
			echo $rw['cwc_name']; 
			?>
      </td>
      <td><?php
			$sql= "Select area_name from clts_app.child_area_detail where area_id='".$rw['dist']."'";
			$res1 = $this->db->query($sql);
  			$rw1 = $res1->row();
			echo $rw1->area_name; 
			?>
      </td>
      <td><?php
			echo $rw['date_handing']; 
			?>
      </td>
      <td>
        <?php
				if($role_id=='5'){ ?>
        <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"	href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036"> <i class="entypo-lock"></i> </a>

		<?php		}else{
					if( $rw['is_locked']=='1'){
			 ?>
        <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"	href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036"> <i class="entypo-lock"></i> </a>
        <?php
					}
				 	else {
			?>
        <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"	href="<?php echo base_url();?>index.php?staff/afterrescued_edit/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036"> <i class="entypo-pencil"></i> </a>
        <?php }}?>
      </td>
    </tr>
    <?php
		endforeach;
		endforeach;?>
  </tbody>
</table>
<!---------------after rescued table end------------------------------->
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
