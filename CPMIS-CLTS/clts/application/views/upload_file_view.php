<!------------------------print entitlement cardlist started----------------------------------------->
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:30px;">
           	
           	</th>
			<th><div>Child ID</div></th>
			<th><div>Child Name</div></th>
			<th><div>Address</div></th>
			<th><div>District</div></th>
             
            
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
		if ($role_id==7 || $role_id==8) {
/*				$quer="select * from clts_app.child_basic_detail where (ls_activate='Y' and district_id='" . $district_id ."' and child_id in(select child_id from clts_app.child_after_rescued where dist='" .$district_id . "' and is_locked='1')) or (account_role_id='7' and district_id='" . $district_id ."' and district='" . $district_id ."') or child_id in(select child_id from clts_app.child_after_rescued where dist='" .$district_id . "' and is_locked='1') or (account_role_id in(2,5) and district='" . $district_id ."' and ls_activate='Y' and district_id='" . $district_id ."')";
*/	
$quer="select * from clts_app.child_basic_detail where (ls_activate='Y' and district_id='" . $district_id ."' and child_id in(select child_id from clts_app.final_order where dist='' or dist IS NULL)) or child_id in(select child_id from clts_app.final_order where dist='" .$district_id . "') ";		 }
	
		else {
				if($role_id==9 || $role_id==10){
					$quer="select * from clts_app.child_basic_detail where state_id='".$state_id."'";
		 		}
				else{
				if ($role_id==6) { 
		   /* $quer="Select * from clts_app.child_basic_detail where child_id in(Select child_id from clts_app.order_after_production where order_type='cci' and child_id in(select child_id from clts_app.child_basic_detail where ls_activate='Y' or (account_role_id='7' and district_id='" . $district_id ."') or child_id in(select child_id from clts_app.child_after_rescued where dist='" .$district_id . "' and is_locked='1')))";*/
		    $quer="Select * from clts_app.child_basic_detail where child_id in(Select child_id from clts_app.order_after_production where order_type='cci' and cci_dist=(Select area_id from clts_app.child_area_detail where area_id='" .$district_id. "'))";
		 		}				
				else
				{
					/*$quer="select * from clts_app.child_basic_detail where (district_id='" . $district_id ."' and district='" . $district_id ."') or child_id in(select child_id from clts_app.child_after_rescued where dist='" .$district_id . "' and is_locked='1')";*/
								$quer="select * from clts_app.child_basic_detail where (district_id='" . $district_id ."' and child_id in(select child_id from clts_app.final_order where dist='' or dist IS NULL)) or child_id in(select child_id from clts_app.final_order where dist='" .$district_id . "')";

				}
			}
		}
		 
		$projects = $this->db->query($quer)->result_array(); 		
		
		foreach($projects as $row):
		if($row['pstatus']=='Y'){

		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<td>
				
					<a href="<?php echo base_url();?>index.php?staff/child_detail/<?php echo $row['child_id'];?>"><?php echo $row['child_id'];?></a>
             
           </td>
			<td><?php echo $row['child_name'];?>
                    </td>
			<td><?php echo $row['postal_address'];?>
                    </td>
			<td>
            	 <?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['district']))->result_array();
			  
			  foreach($qry as $dss):
			  
			  $dsts=$dss['area_name'];
			  
			  endforeach;
			
			
			?>
            	<?php echo $dsts;?>
           </td>
           
           
			<td>
         
               
               
                <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Card Print"	href="<?php echo base_url();?>index.php?staff/cardprint/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036">
                	<i class="entypo-vcard"></i>
               </a>
            
            	
                  
                  
                
                
                
            	
			</td>
		</tr>
		<?php } endforeach;?>
	</tbody>
</table>
<!-----------------------------------------print entitlemet card end------------------------------------->



                     
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