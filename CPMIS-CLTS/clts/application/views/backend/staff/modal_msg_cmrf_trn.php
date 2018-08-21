

<div class="modal fade" id="msgModal_cmrf" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm">
    <div class="modal-content " >
      <div class="modal-header" style="background:#eee;">
        <h3 class="modal-title text-center">Success!</h3>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-info">Transaction details saved successfully.</h4>
        <br><br><br>
        <button onclick="window.location.href='<?php echo base_url();?>index.php?cmrf_transaction_details/addnew'" class="btn btn-info">Add New  </button>
        <button onclick="window.location.href='<?php echo base_url();?>index.php?cmrf_transaction_details'" class="btn btn-info">Back to list</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
