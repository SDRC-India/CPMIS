<?php include 'header_top.php'; ?>

      <?php include 'other_top.php'; ?>
       
        <?php include 'other_header.php'; ?>
 
    <!-- jQuery -->
   
    <!-- FlexSlider -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
    
    <body class="page">
    <section class="recent-causes section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcroumb">
                        <p><a href="index.php">Home</a> / Awards</p>
                    </div>
                    <div class="inner-page-title">
                        <h2>Awards</h2>
                        <p class="page-subtitle">- Awards CPMIS </p>
                    </div>
                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-page-content">
                    <?php 
	$query = "SELECT * FROM pictures"; //You don't need a ; like you do in SQL
	$result = mysql_query($query);
	$count=mysql_num_rows($result) ;
	if($count>0){
	?>
                       <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	      <?php 
while($ans_new=mysql_fetch_assoc($result)){
	$dirname = "clts/assets/uploads/";
	
	$path_img=$dirname.$ans_new['pic_file'];
?>
	    	<li>
	    		<a href="<?php echo $path_img ; ?>" target="_blank"><img src="<?php echo $path_img ; ?>" alt=""  title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line" ><h2><?php echo $ans_new['pic_title'] ; ?></h2><p><?php echo $ans_new['pic_desc'] ; ?></p></div>
                </div>
	    	</li>
	    <?php } ?>
	    </ul>
	  </div>
   </div><?php }else{?>
		<div style="height:200px;font-size:30px;font-weight:bold;text-align:center;">Not Available </div>
		<?php } ?>
<div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    

    
   <link rel="stylesheet" type="text/css" href="award_slider/styles_fashion.css" media="all" /> 
   <!--  <link rel="stylesheet" type="text/css" href="award_slider/demo_flash.css" media="all" /> -->  
    
    
    
  <?php include 'footer.php'; ?>
    
  