<?php
function GetAge($dob="01/01/1970")
{
        $dob=explode("/",$dob);
        $curMonth = date("m");
        $curDay = date("j");
        $curYear = date("Y");
        $age = $curYear - $dob[2];
        if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[0]))
                $age--;
        return $age;
}
$session_ids=$this->session->userdata('login_user_id');

		$tstrole = $this->db->get_where('staff',array('staff_id'=>$session_ids))->result_array();

		foreach($tstrole as $strp):


		$role_id=$strp['account_role_id'];

		$district_id=$strp['district_id'];
		$state_id=$strp['state_id'];

		endforeach;


foreach ($child_data as $row):

if($row['district_id']==$district_id) {

?>
<!---------------------------------------child search view page started------------------------------------------>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div style="float:right; margin-top:12px; margin-right:20px;"> <i class="entypo-plus-circled"></i> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('project_form');*/ ?>
          (a) Child Basic Information - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body">
        <?php
				 if($row['pstatus']=='N') {

				echo form_open('staff/project/activate/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data'));

				 }


				 if($row['pstatus']=='Y') {

				echo form_open('admin/project/deactivate/'.$row['id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data'));

				 }


				?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1. Name of child</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left; width:200px"> <?php echo $row['child_name']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">2. Sex</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left" >
                <?php if($row['sex']=='Male') echo 'Male'; ?>
                <?php if($row['sex']=='Female') echo 'Female'; ?>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">3. Date Of Birth</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <label for="field-1" class="col-sm-3 control-label" style="text-align:left" > <?php echo $row['dob']; ?></label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">4. Age</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left"> <?php echo GetAge($row['dob']); ?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">5. Father's/Guardian's Name </label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left"><?php echo $row['father_name']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">6. Marital Status</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left">
                <?php if($row['material_status']=='Married') echo 'Married'; ?>
                <?php if($row['material_status']=='Unmarried') echo 'Unmarried'; ?>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">7. Mother's Name</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left;width:200px"><?php echo $row['mother_name']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">8. Religion</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left"> <?php echo $row['religion']; ?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">9. City/Vill Name</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left;width:200px"><?php echo $row['postal_address']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">10. Cast Category</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left;width:200px"> <?php echo $row['cast']; ?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">11. Post Office</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left;width:200px"><?php echo $row['postoffice']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label" style="text-align:right">12. Dist</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left; width:200px">
                <?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['district']))->result_array();

			  foreach($qry as $dss):

			  $dsts=$dss['area_name'];

			  endforeach;


			?>
                <?php echo $dsts;?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">13. Pin Code</label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left"> <?php echo $row['pincode']; ?></label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">14. State </label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left">
                <?php
			  $qry = $this->db->get_where('child_area_detail',array('area_id'=>$row['state']))->result_array();

			  foreach($qry as $dss):

			  $dsts=$dss['area_name'];

			  endforeach;


			?>
                <?php echo $dsts;?></label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">15. Is Child is Orphan </label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left">
                <?php if($row['is_child_orphan']=='Yes') echo 'Yes'; ?>
                <?php if($row['is_child_orphan']=='No') echo 'No'; ?>
                </label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">16. Birth Registered </label>
              <div class="col-sm-8">
                <label for="field-1" class="col-sm-3 control-label" style="text-align:left">
                <?php if($row['is_birth_registered']=='Yes') echo 'Yes'; ?>
                <?php if($row['is_birth_registered']=='No') echo 'No'; ?>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-8">
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span> </div>
        </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>

<!---------------------------------------end------------------------------------------------->
<?php

}
endforeach;?>
<script>
    $(document).ready(function () {

        var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
            $(this).ajaxSubmit(options);
            return false;
        });
    });
    function validate_project_add(formData, jqForm, options) {

        /*if (!jqForm[0].title.value)
        {
            return false;
        }*/
        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });

    function show_response_project_add(responseText, statusText, xhr, $form) {
        $('#preloader-form').html('');
		 window.location.reload();
        toastr.success("Project updated successfully", "Success");
        document.getElementById("submit-button").disabled = false;
    }


</script>
