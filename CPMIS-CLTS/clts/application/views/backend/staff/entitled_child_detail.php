<style>
.chdetail .col-md-2 {
		text-align:right;
		font-weight:600;
	}

</style>
<?php
foreach($ent_data as $row):
$childid=$row['child_id'];
endforeach;
$quer="Select * from child_basic_detail where child_id='".$childid."'";
$project=$this->db->query($quer)->result_array();
foreach($project as $row):
?>
<!-------------------------entitiled child details start---------------------->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
     <div class="panel-heading">
        <!--<div class="containt">
          <i class="entypo-plus-circled"></i> <a href="<?php /*echo base_url();*/ ?>index.php?staff/report_child">Child List</a>
        </div>-->
        <div class="panel-title left_float" >
          <i class="entypo-plus-circled"></i>
            <?php /*echo get_phrase('project_form');*/ ?>
            Child Basic Information - Child ID: <?php echo $row['child_id']; ?> </div>
          <div class="right_float">
            <div class="print_button">
              <button type="submit" class="btn btn-info" id='prnt1' onclick="window.location.href='<?php echo base_url(); ?>index.php?staff/child_detail/<?php echo $row['child_id'];?>'">more details<i class="entypo-right-open-big"></i></button>
            </div>
          </div>

          <div style="clear:both;"></div>
        </div>
      </div>

     <div class="panel panel-default">
  <div class="panel-body chdetail">
  <div class="row">
  <div class="col-md-2">Name of the Child:</div>
  <div class="col-md-4"><?php echo $row['child_name']; ?></div>
  <div class="col-md-2">Sex:</div>
  <div class="col-md-4"><?php echo $row['sex'] ?></div>
</div>
<br />
<div class="row">
  <div class="col-md-2">Date of Birth:</div>
  <div class="col-md-4"><?php echo $row['dob'];?></div>
  <div class="col-md-2">District:</div>
  <div class="col-md-4"><?php
  $str="Select area_name from child_area_detail where area_id='".$row['district']."'";
  $dist=$this->db->query($str)->result_array();
  foreach($dist as $d):
  echo $d['area_name'];
  endforeach;
  ?>
  </div>
</div>
  </div>
        <div style="clear:both"></div>
      </div>
    </div>
  </div>
</div>
<br>
<!-------------------------end------------------------------------>
<?php endforeach; ?>
