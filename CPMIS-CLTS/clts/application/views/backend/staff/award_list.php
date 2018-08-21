<style>

.btn-primary
{
color: #ffffff;
    background-color: #0054A5;
    border-color: #0054A5;
    margin-left: 131px;

}
.glyphicon.glyphicon-trash
{
    font-size: 19px;
    margin-left: 52px;
    color: red;
    margin-top: 18px;

}
.modal-footer {
    margin-top: 15px;
    padding: 19px 20px 20px;
    text-align: center !important;
    border-top: 1px solid #e5e5e5;
}
.new-award-list{
text-align: center;
    color: #000;
    border: solid 1px #000;


}
.new-award-list th{
text-align: center;
    color: #000;
    border: solid 1px #eee;


}
.new-award-list td{
text-align: center;
    color: #000;
    border: solid 1px #eee;


}
</style>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body text-center">
                    <p style="text-align:center;">Are you sure you want to delete this award ?</p>
                    
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-ok" >Delete</a>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    /*var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }*/


    
</script>
<script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
        	 $("html, body").animate({ scrollTop: 0 }, 600);
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>









  <?php if(count($picture_list)){?>
	  <table class="new-award-list" cellspacing="0" width="100%" id="table_export3" >
		<thead>
		  <tr class="report_head">
		    <td style="text-align:center;color:#000;">Sl No</td>
			<td style="text-align:center;color:#000;">Title</td>
			<td style="text-align:center;color:#000;width:30%;">Description</td>
			<td style="text-align:center;color:#000;">Image</td>
			 <td style="text-align:center;color:#000;">Delete</td>
		  </tr>
		</thead>
		<tbody>
		<?php $i=1;foreach ($picture_list as $pic): ?>
		  <tr>
		   <td style="text-align:center;color:#000;""><?php echo $i;?></td>
			<td style="text-align:center;color:#000;"><?=$pic->pic_title;?></td>
			<td style="text-align:center;color:#000;"><?=$pic->pic_desc;?></td>
			<td style="text-align:center;color:#000;"><a href="<?=base_url().'assets/uploads/'.$pic->pic_file;?>" target="_blank"><img src="<?=base_url().'assets/uploads/'.$pic->pic_file;?>" width="100"></a></td>
		
		<td ><span class='glyphicon glyphicon-trash' data-href="<?php echo $details_url.$pic->pic_id;?>" data-toggle="modal" data-target="#confirm-delete">
        </span></td>
		 
		
    </button>
		  </tr>
		
		<?php $i++; endforeach; ?>
		</tbody>
	  </table>
	  <br />
	   <a href="<?php echo base_url(); ?>index.php?award/file_data" class="btn btn-primary">Upload More</a>
  <?php } else { ?>
    <h4>No picture has been uploaded. Please click on the upload button for uploading <a href="<?php echo base_url(); ?>index.php?award/file_data" class="btn btn-primary">upload</a></h4>            
  <?php } ?>
  
<script>
 $(document).ready(function() {
	    $('#table_export3').DataTable( {
	        dom: 'Bfrtip',
	        "pageLength": 50,
	        buttons: [
	            
	        ]
	    } );
	} );
 </script>

