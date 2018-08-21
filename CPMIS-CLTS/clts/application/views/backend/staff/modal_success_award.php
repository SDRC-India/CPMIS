
<div class="modal fade" id="msgModal-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content " >
      <div class="modal-header" style="background:#eee;">
        <h3 class="modal-title text-center">Success!</h3>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-info">Award added successfully.</h4>
        <br><br><br>
            <!--     <button onclick="window.location.href='<?php //echo base_url();?>index.php?award'" class="btn btn-info">OK</button>--->
        
        <button id="submit_model" class="btn btn-info" onclick="window.location.href='<?php echo base_url();?>index.php?award'">OK</button>
        <!-- <button onclick="window.location.href='<?php //echo base_url();?>index.php?award/file_data'" class="btn btn-info">Cancel</button>-->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
$(document).ready(function () {
	$("#submit_model").on("click",function(){
	      $('#msgModal-1').modal('hide');

			 });
	}); 
</script>