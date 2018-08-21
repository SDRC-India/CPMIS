
<?php
$parent=$ref;
include "modal_msg_labouract.php";?>

<div class="row">
  <?php
$dob="";
$date_rescued="";

include "rehilibitionTab.php";
foreach ($restoration_status_data as $row): ?>
  <!----------------------start of revenue---------------------------->
  <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-heading">
        <div class="child_list_head"> <i class="entypo-plus-circled"></i> <a href="<?php echo base_url(); ?>index.php?restoration_status">Back to List</a> </div>
        <div class="panel-title" > <i class="entypo-plus-circled"></i>
          <?php /*echo get_phrase('addform');*/ ?>
         Restoration Status - Child ID: <?php echo $row['child_id']; ?> </div>
      </div>
      <div class="panel-body"> <?php echo form_open('restoration_status/restoration_status_update/create/'.$row['child_id'], array('class' => 'form-horizontal form-groups-bordered validate project-add', 'enctype' => 'multipart/form-data')); ?>
 <div class="row">
 <!--for getting the dob -->
		<?php
						   $dob=$row['dob'];
						   $date_rescued =$row['date_rescued'];

							?>
		  <div class="col-sm-6">
            <div class="form-group" >
              <label for="field-1" class="col-sm-3 control-label">1. Whether Child is Residing at Place Where Restored</label>
              <div class="col-sm-8">

                 <select name="place_restored" class="form-control" id="place_restored">
				 <option value="">Select</option>
                  <option value="Yes" <?php if($row['place_restored']=='Yes') echo 'selected'; ?> > Yes </option>
                  <option value="No" <?php if($row['place_restored']=='No') echo 'selected'; ?> > No </option>
                </select>

              </div>
            </div>
          </div>
		  <div class="col-sm-6">

            </div>
          </div>
		  <div class="row" id="place_restored_no">
		  <div class="col-sm-6">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1 i. Reason of Missing</label>
              <div  id="reason_for_missing_fr_grp" class="col-sm-8">
                <input type="text" class="form-control reason_for_missing" name="reason_for_missing" id="reason_for_missing"  value="<?php echo $row['reason_for_missing']; ?>">
                <span class="reason_for_missing_msg color-red"></span>
              </div>
            </div>
          </div>
		   <div class="col-sm-6" >
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">1 ii. Date of Missing</label>
              <div class="col-sm-8">
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_missing" id="date_of_missing"  value="<?php echo $row['date_of_missing']; ?>"  readonly>
                </div>
                 <span id="error"></span>
              </div>
            </div>
          </div>
		</div>
		<div class="row">

		  <div class="col-sm-6">
            <div class="form-group" >
              <label for="field-1" class="col-sm-3 control-label">2. Last Date of Verification </label>
              <div class="col-sm-8">
               <div class="input-group date" id="datepicker1"> <span class="input-group-addon"><i class="entypo-calendar"></i></span>
                  <input type="text" class="form-control" name="date_of_varifiaction" id="date_of_varifiaction"  value="<?php echo $row['date_of_varifiaction']; ?>"  readonly>
                </div>
                 <span id="error2"></span>
              </div>
              </div>
            </div>
          </div>
        <h3 style="font-size:14px">&nbsp;</h3>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-8">
            <button type="submit" class="btn btn-info" id="submit-button"> Update</button>
            <button type="button" class="btn btn-info" id="cancel-button"> Cancel</button>
            <span id="preloader-form"></span>
			 </div>
        </div>
        <?php echo form_close(); ?>
    </div>
  </div>
</div>
</div>
<!-------------end of revenue------------------>
<?php endforeach;?>
<script>
    $(document).ready(function () {

	    $('button[type="submit"]').prop('disabled', true);
		$(':input', this).change(function() {
    		 if($(this).val() != '') {
		$('button[type="submit"]').prop('disabled', false);
     		 }
 		 });
		 if($('#place_restored').val() == 'No') {
            $('#place_restored_no').show();


       		 } else {
            $('#place_restored_no').hide();
			//document.getElementById("date_of_missing").value ='';
       		 }

       var options = {
            beforeSubmit: validate_project_add,
            success: show_response_project_add,
            resetForm: true
        };
        $('.project-add').submit(function () {
          //$('body').scrollTop(0);
            $(this).ajaxSubmit(options);
            return false;
        });
    });

	$(function() {
  $( "#cancel-button" ).click(function(){ window.history.back() });
 });
	//prativa
		var copmareAge = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
		//end
		var copmareDate = function(dor,dob) {
			year1= new Date(dor);
			year2 = new Date(dob);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};

    function validate_project_add(formData, jqForm, options) {
      if(jqForm[0].place_restored.value =="No")
        {
        if(jqForm[0].reason_for_missing.value.length>120)
        {
          flag=1;
          $("#reason_for_missing_fr_grp").addClass("validate-has-error");
          $(".reason_for_missing").focus();
          $(".reason_for_missing_msg").html("Reason of missing should be less than 120 characters");
         return false;

        }
        else{
          $("#reason_for_missing_fr_grp").removeClass("validate-has-error");
         $(".reason_for_missing_msg").html("");
        }
        if(/^\s+$/.test(jqForm[0].reason_for_missing.value)){
          flag=1;
               $("#reason_for_missing_fr_grp").addClass("validate-has-error");
               $(".reason_for_missing").focus();
               $(".reason_for_missing_msg").html("No space allowed");
              return false;
          }
          else{
           $("#reason_for_missing_fr_grp").removeClass("validate-has-error");
          $(".reason_for_missing_msg").html("");
        }
      }
		var rescued_date = "<?php echo $date_rescued;?>";
		var place_restored_val=(jqForm[0].place_restored.value);
		var missing_date=(jqForm[0].date_of_missing.value);
		var verification_date = (jqForm[0].date_of_varifiaction.value);
		if(verification_date!=""){
			var diffDays_vardate = copmareDate(verification_date,rescued_date);
				if(diffDays_vardate < 0){
					$("#error2").html("Last date of verification should be after date of rescue");
					document.getElementById("date_of_varifiaction").focus();
					$("#datepicker1").addClass("newClass");
					return false;
					}else{
						$("#error2").html("");
						$("#datepicker1").removeClass("newClass");
					}
			}
		if(place_restored_val == 'No'){
			if(missing_date!=""){
			var diffDays = copmareAge(missing_date,rescued_date);
				if(diffDays < 0){
					$("#error").html("Date of missing provided should be after date of rescue");
					document.getElementById("date_of_missing").focus();
					$("#datepicker").addClass("newClass");
					return false;
					}else{
						$("#error").html("");
						$("#datepicker").removeClass("newClass");
					}
			}
		}

        $('#preloader-form').html('<img src="assets/images/preloader.gif" style="height:15px;margin-left:20px;" />');
        document.getElementById("submit-button").disabled = true;
    }

    function show_response_project_add(responseText, statusText, xhr, $form) {
		 $('html, body').animate({ scrollTop: 0 }, 0);
	  
	   $('#preloader-form').html('');
		$('#msgModal_act').modal('show');
        document.getElementById("submit-button").disabled = false;
    }
$(function() {

   		 $('#place_restored').change(function(){
        	if($('#place_restored').val() == 'No') {
            $('#place_restored_no').show();


       		 } else {
            $('#place_restored_no').hide();

       		 }
    	});
		});

</script>
<script>
	var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
var FromEndDate = new Date();
$('#datepicker1').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true
});
$("#reason_for_missing").on("keydown ", function (e) {
			var charcode = e.which;
			if ( /*(charcode === 8) ||*/ // Backspace
				(charcode >= 48 && charcode <= 57) ||(charcode >= 96 && charcode <= 105))
				/*|| // 0 - 9
				(charcode >= 65 && charcode <= 90) || // a - z
				(charcode >= 97 && charcode <= 122))*/ { // A - Z

		//alert(charcode);
				return false;
			} else {
				//e.preventDefault()
				//alert(charcode);
				return
			}

		});
		$(function(){
$("#reason_for_missing").bind("paste",function(e) {
                     e.preventDefault();
                });
			});
</script>
