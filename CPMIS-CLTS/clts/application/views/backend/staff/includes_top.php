<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">


	<!-- RTL SETTINGS -->
    <?php if ($text_align == 'right-to-left') :?>
    	<link rel="stylesheet" href="assets/css/neon-rtl.css">
	<?php endif;?>


	<!-- THEME SETTINGS-->
    <?php if ($theme == 'light') :?>
		<link rel="stylesheet" href="assets/css/skins/white.css">
	<?php endif;?>

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css">
    
    
    
    
	<link rel="stylesheet" href="assets/js/vertical-timeline/css/component.css">
    <link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
    
    <style>
				
				.axis path,
				.axis line {
				  fill: none;
				  stroke: #000;
				  shape-rendering: crispEdges;
				}
				
				.bar {
				  fill: orange;
				}
				
				.bar:hover {
				  fill: orangered ;
				}
				
				.x.axis path {
				  display: block;
				}
				
				.d3-tip {
				  line-height: 1;
				  font-weight: bold;
				  padding: 12px;
				  background: rgba(0, 0, 0, 0.8);
				  color: #fff;
				  border-radius: 2px;
				}
				
				/* Creates a small triangle extender for the tooltip */
				.d3-tip:after {
				  box-sizing: border-box;
				  display: inline;
				  font-size: 10px;
				  width: 100%;
				  line-height: 1;
				  color: rgba(0, 0, 0, 0.8);
				  content: "\25BC";
				  position: absolute;
				  text-align: center;
				}
				
				/* Style northward tooltips differently */
				.d3-tip.n:after {
				  margin: -1px 0 0 0;
				  top: 100%;
				  left: 0;
				}
</style>




<script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea"
        });
    </script>


<!--<link href="<?php /*echo base_url();*/?>assets/css/c3.css" rel="stylesheet" type="text/css">-->

<!-- Load d3.js and c3.js -->
<script src="<?php echo base_url();?>assets/js/d3.v3.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/d3.tip.v0.6.3.js" type="text/javascript"></script>
<!--<script src="<?php /*echo base_url();*/?>assets/js/c3.js"></script>-->