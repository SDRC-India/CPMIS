<style>
@media only screen and ( max-width: 1200px )
        {
        .chat_area {
        float:left;
        width:100%;
}

}
.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
    background: #fff;
     border: none;
    border-bottom: 0;
    padding: 15px 12px;
    height: 58px;
	width:0%;
}
.dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_paginate {
    padding: 10px 12px;
    border: none;
    border-top: 0;
    background: transparent;
    height: 47px;
	width: 44%;
}
.dataTables_wrapper {
    position: relative;
    clear: both;
    zoom: 1;
    border: 1px solid #ddd;
}

</style>

 <div class="col-md-12 chat_area" style="text-align:center;" id="child_table">
<h2>Cumulative Statistics</h2>

<table id="example1" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th style="text-align:center;">District Name</th>
<th style="text-align:center;">Child Rescued</th>
<th style="text-align:center;">Investigation on Going</th>
<th style="text-align:center;">Entitlement Card Generated</th>
</tr>
</thead>

<tbody>

	<?php
  $child_dist =$this->db->query("select area_name from child_area_detail where parent_id='IND010' group by area_name order by area_name")->result_array();

  $child_resc = $this->db->query("select count(*) as num_child,area_name  from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id where y.parent_id ='IND010' order by y.area_name) Z group by area_name order by area_name")->result_array();

  $child_inv = $this->db->query("select count(*) as num_child  from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='N' where y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();

  $child_fin = $this->db->query("select sum(pstatus='Y') as num_child,area_name from (select y.area_id, y.area_name, x.pstatus from child_area_detail as y left join child_basic_detail as x on x.district_id = y.area_id and x.pstatus='Y' where y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();

  $child_ent = $this->db->query("select sum(is_card_print=1) as num_child,area_name from (select y.area_id, y.area_name, x.pstatus, x.is_card_print from child_area_detail as y left join child_basic_detail as x on x.district_id =y.area_id and x.pstatus='Y' and x.is_card_print=1 where y.parent_id ='IND010') Z group by area_name order by area_name")->result_array();

for($i=0; $i<38; $i++){ ?>
<tr>
<td><?php echo $child_dist[$i]['area_id']; ?></td>
<td><?php echo $chid_resc[$i]['cnt']; ?></td>
<td><?php echo $chid_inv[$i]['cnt']; ?></td>
<td><?php echo $chid_fin[$i]['cnt'];?></td>
</tr>
<?php } ?>


</tbody>
</table>
</div>
<script>
$(document).ready(function() {
    $('#example1').DataTable();
	}
	</script>
