
<?php 
//echo"<pre>";print_r($cci_chart_list_tabular);echo"</pre>";


//echo json_encode($cci_chart_list);
$type='cci' ;
include("dashboard_header.php") ;
?>

<!-- Styles -->
<style>

.entypo-right-circled{
display:none;

}
h3.head_logo {
    display: none;
}
.amcharts-axis-line{

    stroke: #000 !important;
    stroke-width: 2px;
}   			
</style>

<!-- Resources -->


<!-- Resources -->
<script src="assets/amchart/amcharts.js"></script>
<script src="assets/amchart/serial.js"></script>
<script src="assets/amchart/export.js"></script>
<link  type="text/css" href="assets/amchart/export.css" rel="stylesheet">
<script src="assets/amchart/light.js"></script>
<script src="assets/amchart/radar.js"></script>
<script src="assets/amchart/FileSaver.min.js"></script>
<script src="assets/amchart/fabric.min.js"></script>



<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "radar",
  "theme": "light",
  "titles": [{
	    "text": "Children Sent to CCI"
	  }],
  "dataProvider": <?php echo json_encode($cci_chart_list);?>,
  "valueAxes": [ {
    "axisTitleOffset": 20,
    "minimum": 0,
    "axisAlpha": 0.15
  } ],
  "startDuration": 2,
  "graphs": [ {
    "balloonText": "[[value]] no of children",
    "bullet": "round",
    "lineThickness": 2,
    "valueField": "no_of_children",
    "labelText": "[[value]]",
  } ],
  "categoryField": "cci_list",
  "export": {
	    "enabled": true,
	    "pageOrigin": false,
	     "fileName":"cci_list_chart",
	    "menu": [
	        {
	          "format": "PDF",
	          "content": [
	            {
	                "image": "reference",
	                "fit": [ 500.28, 749.89 ] // fit image to A4
	            }        
	          ]
	        }
	       ]
	  }
} );
</script>

<!-- HTML -->

<script>
$(document).ready(function () {
$("#mis_submit").on("click",function(){
			 $('#loading').show();
		 });
setTimeout(function(){
	$(".amcharts-export-menu ul li a").on("click",function(){
	$(".amcharts-chart-div a").remove();
	});
}, 1000);
});
 </script>

<div class="row">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">
      <div class="loader"></div>
    </div>
 </div>
 <?php
 if(empty($cci_chart_list_tabular))
{
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
}
?>
<div id="chartdiv"></div>
<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">
<thead>
				<tr>
					<th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">CCI Name</th>
					<th style="text-align:center;color:#000;">CCI Disrtict</th>
					<th style="text-align:center;color:#000;">No of Children Sent</th>
					
				</tr>
			</thead>
			<tbody>
			<?php $i=1;if($cci_chart_list_tabular){foreach($cci_chart_list_tabular as $row){?>
       
             
				<tr>
				<td style="text-align:center;"> <?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['0'];?></td>
				<?php  if($row['0']=='<strong>Total</strong>'){?>
				<td style="text-align:center;"></td>
				<?php } else {?>
								<td style="text-align:center;"><?php echo $row['1'];?></td>
				<?php } ?>
				<td style="text-align:center;"><?php echo $row['2'];?></td>
				<?php  if($row['0']=='<strong>Total</strong>'){?>
				<td></td>	
						<?php }else{?>
				
						
						
						<?php }?>		
			</tr>

           
			<?php $i++;}}?>


</table>
</div>
