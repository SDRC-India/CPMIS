<?php //echo"<pre>";print_r(end($cumlative_list));echo"</pre>";

//echo"<pre>";print_r (array(end($cumlative_list)));echo"</pre>";
$type='due_for_transfer' ;
include("dashboard_header.php") ;
$dlc_alc_transfer=array(end($transfer_breakup));
//echo $dlc_alc_cummulative[0][1];
?>

<!-- Styles -->
<style>

h3.head_logo {
    display: none;
}

</style>

<!-- Resources -->

<!-- Resources -->
<script src="assets/amchart/amcharts.js"></script>
<script src="assets/amchart/serial.js"></script>
<script src="assets/amchart/export.js"></script>
<link  type="text/css" href="assets/amchart/export.css" rel="stylesheet">
<script src="assets/amchart/light.js"></script>
<script src="assets/amchart/pie.js"></script>
<script src="assets/amchart/FileSaver.min.js"></script>
<script src="assets/amchart/fabric.min.js"></script>


<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "none",
  "titles": [{
	    "text": "Transfer Status of Rescued Child Labourer"
	  }],
  "marginRight": 70,
  <?php if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){?>
  "dataProvider": [{
    "country": "Need to transfer to other District",
    "visits": <?php echo $transfer_breakup[38][1]; ?>,
    "color": "#FF0F00"
  }, {
    "country": "Need to transfer from other District",
    "visits": <?php echo $transfer_breakup[38][2]; ?>,
    "color": "#FF6600"
  }, {
    "country": "Forward To CWC",
    "visits": <?php echo $transfer_breakup[38][3]; ?>,
    "color": "#FF9E01"
  }],
  <?php }?>
<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
  "dataProvider": [{
    "country": "Need to transfer to other District",
    "visits": <?php echo $transfer_breakup[0][1]; ?>,
    "color": "#FF0F00"
  }, {
    "country": "Need to transfer from other District",
    "visits": <?php echo $transfer_breakup[0][2]; ?>,
    "color": "#FF6600"
  }, {
    "country": "Forward To CWC",
    "visits": <?php echo $transfer_breakup[0][3]; ?>,
    "color": "#FF9E01"
  }],
  <?php }?>
  <?php if($roles_id==13 || $roles_id==20){?>
  "dataProvider": [{
    "country": "Need to transfer to other District",
    "visits": <?php echo $dlc_alc_transfer[0][1]; ?>,
    "color": "#FF0F00"
  }, {
    "country": "Need to transfer from other District",
    "visits": <?php echo $dlc_alc_transfer[0][2]; ?>,
    "color": "#FF6600"
  }, {
    "country": "Forward To CWC",
    "visits": <?php echo $dlc_alc_transfer[0][3]; ?>,
    "color": "#FF9E01"
  }],
  <?php }?>
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "No Of Children"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "fixedColumnWidth": 50,
    "labelText": "[[value]]"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridThickness":0,
    "labelRotation": 45
  },
  "valueAxes": [{
	  "gridThickness":0,
  }],
  "export": {
	    "enabled": true,
	    "menu": [
	        {
	          "format": "PDF",
	          "pageOrigin": false,
	  	      "fileName":"transfer_wise_chart",
	          "content": [
	            {
	                "image": "reference",
	                "fit": [ 500.28, 749.89 ] // fit image to A4
	            }        
	          ]
	        }
	       ]
	  }

});
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
 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){
 	if($transfer_breakup[38][1]==0 && $transfer_breakup[38][2]==0 && $transfer_breakup[38][3]==0 ){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if($transfer_breakup[0][1]==0 && $transfer_breakup[0][2]==0 && $transfer_breakup[0][3]==0 ){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}
if($roles_id==13 || $roles_id==20){
	if($dlc_alc_transfer[38][1]==0 && $dlc_alc_transfer[38][2]==0 && $dlc_alc_transfer[38][3]==0)
{
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
}
}

?>
<div id="chartdiv"></div>	
<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
            <tr class="report_head">
			<th style="text-align:center;color:#000;">SL No</th>
             <th style="text-align:center;color:#000;">District Name</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Transfer To Other District</th>
			<th style="text-align:center;color:#000;">No Of Children Need To Transfer From Other District</th>
			<th style="text-align:center;color:#000;">Forwarded To CWC</th>
            </tr>
			</thead>
            
            <tbody>
			
			<?php 
			$i=1;foreach($transfer_breakup as $row): ?>          
            <tr class="report_head">
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td><?php echo $row['0'];?> </td>
				 
				
				
				<?php if($row['1']==0)
				  {?>
				  
				   <td ><?php echo $row['1'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td ><?php echo $row['1'];?></td>	
				  
				<?php }	 ?>  	  
				  
				<?php if($row['2']==0)
				  {?>
				  
				   <td ><?php echo $row['2'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td ><?php echo $row['2'];?></td>	
				  
				<?php }	 ?>  	  
				    
				<?php if($row['3']==0)
				  {?>
				  
				   <td ><?php echo $row['3'];?></td>	
				  
				 <?php }else{?> 
				  
				  
				  <td ><?php echo $row['3'];?></td>	
				  
				<?php }	 ?>  	  
			
				</tr>			   				
			<?php $i++; endforeach; 
	
            ?>
            
            
            </tbody>
            
            
            
 </table>
</div>
