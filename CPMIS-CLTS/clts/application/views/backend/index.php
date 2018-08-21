<?php
	$system_name		=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title		=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align			=	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;

	?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<title><?php if(!$page_title_not_found){echo $title;}else{echo $page_title_not_found;}?> - <?php echo $system_title;?></title>
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!--header-->
<!--loading dyamioc styles content Godti Satyanarayan-->
<?php echo $includes_top;?>

</head>
<body class="page-body"   >
<!----Loader -->
<div id="loading">
  <div class="loader_cust"></div>
</div>

	<div class="page-container"
		<?php if ($text_align == 'right-to-left') echo 'right-sidebar';?>>
		<!--loading dyamioc navigation content Godti Satyanarayan-->
		<?php echo $navigation; ?>
		<div class="main-content">
			<!--loading dyamioc header content Godti Satyanarayan-->
					<?php echo $header;?>
		           	<h3 class="head_logo">
		           		<i class="entypo-right-circled"></i>
											<?php  echo $title;?>

		           	</h3>
					<!--required main content view----->
					<?php echo $main_content_view ;  ?>

					<!-- Content not found messsage-->
					<?php echo  $content_not_found; ?>
					

		</div>

	</div>
	<!--loading  footer static content Godti Satyanarayan-->
					<?php  if(!$content_not_found){$this->load->view('backend/footer');} ?>
	<!--loading static content By Godti Satyanarayan-->
    <?php  if(!$content_not_found){$this->load->view('backend/modal');}?>
    <?php  if(!$content_not_found){$this->load->view('backend/modal_staff');}?>
    <?php  if(!$content_not_found){$this->load->view('backend/modal_account');}?>
    <?php echo $includes_bottom;?>
     <script type="text/javascript">
$(window).load(function() {
     $('#loading').hide();
  });

</script>

</body>
</html>
