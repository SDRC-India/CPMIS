    <?php
	$area=$ent_data['block'];
	$dept=$ent_data['dept'];
	$qno=$ent_data['qno'];

		$counter = 1;
		$session_ids=$this->session->userdata('login_user_id');
		$tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

		foreach($tstrole as $strp):
			$role_id=$strp['account_role_id'];
			$district_id=$strp['district_id'];
			$state_id=$strp['state_id'];
		endforeach;
?>
<!---------------------------entitled child list start----------------------------->
<table class="table table-bordered datatable" id="table_export">
  <thead>
    <tr>
      <th style="width:30px;"></th>
      <th><div>Child ID</div></th>
	  <th><div>Options</div></th>
    </tr>
  </thead>
  <tbody>

<?php
		if($dept=='labour'){
		if($qno=='1'){
		$quer="SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_labour_resource_department where package='No') And block='" .$area."'";}
		else{
		if($qno=='2'){
		$quer="SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_labour_resource_department where deposited='No') And block='" .$area."'";}else{
	if($qno=='3'){
	$quer="SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_labour_resource_department where interest_of_rehabilitation='No') And block='" .$area."'";
		}else{
		$quer="SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_labour_resource_department where interest_of_rehabilitation_5k='No') And block='" .$area."'";
		}
		}
		}//ist else


		}//labour

		else {
		if($dept=='education' && $qno==1){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_education_department where enrolled_school='No') And block='" .$area."'";}

		else {
		if($dept=='rural'){
		if($qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_rural_development_department where is_mgnrega='No') And block='" .$area."'";}
		 else {
		 if($qno=='2') {
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_rural_development_department where is_sgsy='No') And block='" .$area."'";}
		else {
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_rural_development_department where is_iay='No') And block='" .$area."'";}}}

		 else {
		 if($dept=='urban'){
		 if($qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_urban_development_deoartment where is_sjsry='No') And block='" .$area."'";}
		 else {
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_urban_development_deoartment where is_jnrum='No') And block='" .$area."'";}}
		 else {
		 if($dept=='revenue' && $qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_revenue_department where is_benefited_landsettlement='No')
		  And block='" .$area."'";}

		 else {
		 if($dept=='health' && $qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_health_department where is_health_cards='No')
		  And block='" .$area."'";}

		 else {
		 if($dept=='scst' && $qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_scst_department where benefited_scholarships='No')
		 And block='" .$area."'";}

		 else {
		 if($dept=='food'){
		 if($qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_food_department where is_ration_card='No') And block='" .$area."'";}
		 else{
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_food_department where id_pds='No') And block='" .$area."'";}}
		 else {
		 if($dept=='minority'){
		 if($qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_minority_welfare_department where is_housing_scheme='No') And block='" .$area."'";}
		 else {
		$quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_minority_welfare_department where is_loan='No')  And block='" .$area."'";}}
		 else {
		 if($dept=='social'){
		 if($qno=='1'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_social_welfare_department where social_pension_eligible='Yes' and social_pension_availed='No') And block='" .$area."'";}
		 else {
		 if($qno=='2'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_social_welfare_department where parvarish_scheme_eligible='Yes' and parvarish_scheme_availed='No') And block='" .$area."'";}
		else {
		if($qno=='3'){
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_social_welfare_department where family_availed_sponsorship='No') And block='" .$area."'";}
		else{
		 $quer= "SELECT * FROM child_basic_detail WHERE child_id in(SELECT child_id FROM child_social_welfare_department where is_child_sponsorship='No') And block='" .$area."'";}}}}

		}}}}}}}}}
		$projects = $this->db->query($quer)->result_array();

		foreach($projects as $row):
		?>
    <tr>
      <td style="width:30px;"><?php echo $counter++;?> </td>
      <td><a href="<?php echo base_url();?>index.php?child_rescued_list/view/<?php echo $row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
	  <td>
	  <?php
		if($dept=='labour'){?>
	  <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url();?>index.php?labour_resource_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
	<?php }
	if($dept=='education'){ ?>
	  <a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" 	href="<?php echo base_url();?>index.php?education_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
	<?php }  if($dept=='rural'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url();?>index.php?rural_development_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php if($dept=='urban'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url();?>index.php?urban_development_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php if($dept=='revenue'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" 	href="<?php echo base_url();?>index.php?revenue_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php if($dept=='health'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url();?>index.php?health_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php if($dept=='scst'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit"	href="<?php echo base_url();?>index.php?scst_welfare_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php if($dept=='food'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit"  href="<?php echo base_url();?>index.php?foodcivil_supplied_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php  if($dept=='minority'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url();?>index.php?staff/minority_welfare_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
<?php if($dept=='social'){ ?>
	<a class="btn btn-info tooltip-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url();?>index.php?staff/social_welfare_department/edit/<?php echo $row['child_id'];?>">
                	<i class="entypo-pencil"></i>
               </a>
<?php } ?>
            	</td>
    </tr>
    <?php
		endforeach;?>
  </tbody>
</table>
<!-----------------------------------end---------------------------------->
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
				{ "bSortable": false },
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
