    <script type="text/javascript">
	function showAjaxModal1(url)
	{
			$(document).load( function() { $('body').fadeIn(); });

	
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#modal_ajax1 .modal-body').html('<div style="text-align:center;margin-top:100px;"><img src="assets/images/preloader.gif" style="height:25px;" /></div>');
		 window.scrollTo(0,0);
		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax1').modal('show', {backdrop: 'true'});
		
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{

				jQuery('#modal_ajax1 .modal-body').html(response);
			}
		});
		

	}
	</script>
    
    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax1" >
        <div class="modal-dialog" style="margin-left: 280px;" >
            <div class="modal-content" style="width:800px; margin-top:0px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php echo $system_name;?></h4>
                </div>
                
                <div class="modal-body" style="height:500px; overflow:auto;" >
                
                    
                    
                </div>
                
              <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>-->
            </div>
        </div>
    </div>
    
    
    
    
    <script type="text/javascript">
	function confirm_modal(delete_url , post_refresh_url)
	{
		$('#preloader-delete').html('');
		jQuery('#modal_delete').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute("onClick" , "delete_data('" + delete_url + "' , '" + post_refresh_url + "')" );
		document.getElementById('delete_link').focus();
	}
	</script>
    
    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal_delete">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;width:655px; ">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
                </div>
                
                
                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                	<span id="preloader-delete"></span>
                    </br>
                	  <button type="button" class="btn btn-danger" id="delete_link" onClick=""><?php echo get_phrase('delete');?></button>
                    <button type="button" class="btn btn-info" data-dismiss="modal" id="delete_cancel_link"><?php echo get_phrase('cancel');?></button>
                    
                </div>
            </div>
        </div>
    </div>