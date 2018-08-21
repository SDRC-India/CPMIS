<script type="text/javascript">
	function showAjaxModal3(url)
	{
		// SHOWING AJAX PRELOADER IMAGE
		
		 window.scrollTo(0,0);
		// LOADING THE AJAX MODAL
		jQuery('#msgModal_act').modal('show');
		
		
	}
	</script>
<div class="modal fade" id="msgModal_act" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content " >
      <div class="modal-header" style="background:#eee;">
        <h3 class="modal-title text-center">Success!</h3>
      </div>
      <div class="modal-body text-center">
	  		<?php if($roles_id==2){ ?>
				<h4 class="text-info">NGO profile has been updated</h4>
				<?php }  if($roles_id==10){ ?>
				<h4 class="text-info">NGO profile has been approved</h4>
				<?php } ?>
        <br><br><br>
		  <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close" onclick="window.location.reload(true);">OK</button>
		  
        <!--<button onclick="window.location.href='<?php echo base_url();?>index.php?staff/child_rescued'" class="btn btn-info">Add New Child </button>
        <button onclick="window.location.href='<?php echo base_url();?>index.php?staff/child_rescued_list'" class="btn btn-info">Back to list</button>-->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->