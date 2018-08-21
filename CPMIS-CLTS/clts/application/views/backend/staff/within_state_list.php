
<table class="table table-bordered datatable" id="table_export">
	<thead>
		<tr>
			<th style="width:30px;">
           Sl. No.
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
		
		//echo $role_id;
		
		
		if (($role_id==6) || ($role_id==7)) {
			 
			 
			 
			 
			        /*$tst=$this->db->where('uid','6')
					          ->where('state_id','IND') 
							 
					          ->or_where('ls_activate','Y')
							 
					          ->order_by('id' , 'desc');
			        $query = $this->db->get_where('child_basic_detail',$tst);
				    $projects = $query->result_array();*/
					
					
					
					
					
					 $tst=$this->db->where('account_role_id','6')
					           ->or_where('ls_activate','Y')
				               ->order_by('id' , 'desc');
			                   $query = $this->db->get_where('child_basic_detail',$tst);
						       $projects = $query->result_array();
					
					
					
														
															
		 }
		 
		 else {
			 
			 $this->db->order_by('id' , 'desc');
		
		     //$projects=$this->db->get_where('child_basic_detail' , array('pstatus' => 'N'))->result_array();
			 
			  $tst=$this->db->where('account_role_id !=','6')	
			            ->where('pstatus','N')  
				        ->order_by('id' , 'desc');
			            $query = $this->db->get_where('child_basic_detail',$tst);
					    $projects = $query->result_array();
		
		 }
		
		foreach($projects as $row):
		
		if($row['district_id']==$district_id) {
		?>
		<tr>
			<td style="width:30px;">
           		<?php echo $counter++;?>
           	</td>
			<td>
				
					<?php echo $row['child_id'];?>
             
           </td>
			<td><?php echo $row['child_name'];?>
                    </td>
			<td><?php echo $row['postal_address'];?>
                    </td>
			<td>
            	<?php echo $row['district'];?>
           </td>
			<td>
            <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add"	href="<?php echo base_url();?>index.php?staff/withinstate_edit/<?php echo $row['child_id'];?>" style="background-color: #036; border:#036">
                	<i class="entypo-plus"></i>
               </a>
            
            	
                  
              	<?php
				
				 if ($this->session->userdata('login_user_id')==6 ) {
					 
					 ?>
                     
                     <?php if($row['pstatus']=='Y') echo "<span style='color:green'>Approved</span>"; ?>
               
                <?php if($row['pstatus']=='N') echo "<span style='color:red'>Pending</span>"; ?>
                     
                     <?php
					 
					 
				 } else {
				?>
                  
                  <?php if($row['ls_activate']=='Y') echo "<span style='color:green'>Approved</span>"; ?>
               
                <?php if($row['ls_activate']=='N') echo "<span style='color:red'>Pending</span>"; ?>
                
                <?php
				 }
				?>
            	
			</td>
		</tr>
		<?php 
		
		}
		
		endforeach;?>
	</tbody>
</table>




                     
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