

<div class="modal fade" id="msgModal-outside" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content " >
      <div class="modal-header" style="background:#eee;">
        <h3 class="modal-title text-center">Success!</h3>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-info">Child record created successfully.</h4>
        <br><br><br>
        <button onclick="window.location.href='<?php echo base_url();?>index.php?outside_childdetail/addnew'" class="btn btn-info">Add New Child </button>
        <button onclick="window.location.href='<?php echo base_url();?>index.php?outside_childdetail'" class="btn btn-info">Back to list</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
