<?php
$type='cumulative';
include("dashboard_header.php") ;
$dlc_alc_cummulative=array(end($cumlative_list));

?>

<!-- Styles -->
<style>

h3.head_logo {
    display: none;
}

</style>

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
	    "text": "Cumulative Statistics"
	  }],
  "marginRight": 70,
  <?php if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){?>
  "dataProvider": [{
    "country": "Child rescued",
    "visits": <?php echo $cumlative_list[38][1]; ?>,
    "color": "#FF0F00"
  }, {
    "country": "Transferred to others",
    "visits": <?php echo $cumlative_list[38][5]; ?>,
    "color": "#FF6600"
  }, {
    "country": "Transferred from others",
    "visits": <?php echo $cumlative_list[38][6]; ?>,
    "color": "#FF9E01"
  }, {
    "country": "Child Investigation (Ongoing)",
    "visits": <?php echo $cumlative_list[38][2]; ?>,
    "color": "#FCD202"
  }, {
    "country": "Entitlement Card Generated",
    "visits": <?php echo $cumlative_list[38][4]; ?>,
    "color": "#F8FF01"
  }, {
    "country": "Cl For Own District",
    "visits": <?php echo $cumlative_list[38][8]; ?>,
    "color": "#B0DE09"
  }, {
    "country": "Final Order Passed",
    "visits": <?php echo $cumlative_list[38][3]; ?>,
    "color": "#04D215"
  
  }],
  <?php }?>
<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
  "dataProvider": [{
    "country": "Child rescued",
    "visits": <?php echo $cumlative_list[0][1]; ?>,
    "color": "#FF0F00"
  }, {
    "country": "Transferred to others",
    "visits": <?php echo $cumlative_list[0][5]; ?>,
    "color": "#FF6600"
  }, {
    "country": "Transferred from others",
    "visits": <?php echo $cumlative_list[0][6]; ?>,
    "color": "#FF9E01"
  }, {
    "country": "Child Investigation (Ongoing)",
    "visits": <?php echo (($cumlative_list[0][1]-$cumlative_list[0][5])+$cumlative_list[0][6])-$cumlative_list[0][3]; ?>,
    "color": "#FCD202"
  }, {
    "country": "Entitlement Card Generated",
    "visits": <?php echo $cumlative_list[0][4]; ?>,
    "color": "#F8FF01"
  }, {
    "country": "Cl For Own District",
    "visits": <?php echo ($cumlative_list[0][1]-$cumlative_list[0][5])+$cumlative_list[0][6]; ?>,
    "color": "#B0DE09"
  }, {
    "country": "Final Order Passed",
    "visits": <?php echo $cumlative_list[0][3]; ?>,
    "color": "#04D215"
  
  }],
  <?php }?>
  <?php if($roles_id==13 || $roles_id==20){?>
  "dataProvider": [{
    "country": "Child rescued",
    "visits": <?php echo $dlc_alc_cummulative[0][1]; ?>,
    "color": "#FF0F00"
  }, {
    "country": "Transferred to others",
    "visits": <?php echo $dlc_alc_cummulative[0][5]; ?>,
    "color": "#FF6600"
  }, {
    "country": "Transferred from others",
    "visits": <?php echo $dlc_alc_cummulative[0][6]; ?>,
    "color": "#FF9E01"
  }, {
    "country": "Child Investigation (Ongoing)",
    "visits": <?php echo ($dlc_alc_cummulative[0][8]-$dlc_alc_cummulative[0][3]); ?>,
    "color": "#FCD202"
  }, {
    "country": "Entitlement Card Generated",
    "visits": <?php echo $dlc_alc_cummulative[0][4]; ?>,
    "color": "#F8FF01"
  }, {
    "country": "Cl For Own District",
    "visits": <?php echo $dlc_alc_cummulative[0][8]; ?>,
    "color": "#B0DE09"
  }, {
    "country": "Final Order Passed",
    "visits": <?php echo $dlc_alc_cummulative[0][3]; ?>,
    "color": "#04D215"
  
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
	  	      "fileName":"cumulative_statics_chart",
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
 	if($cumlative_list[38][1]==0 && $cumlative_list[38][5]==0 && $cumlative_list[38][6]==0 && $cumlative_list[38][4]==0 && $cumlative_list[38][3]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if($cumlative_list[0][1]==0 && $cumlative_list[0][5]==0 && $cumlative_list[0][6]==0 && $cumlative_list[0][4]==0 && $cumlative_list[0][3]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
	
}
}
if($roles_id==13 || $roles_id==20){
	if($dlc_alc_cummulative[0][1]==0 && $dlc_alc_cummulative[0][5]==0 && $dlc_alc_cummulative[0][6]==0 && $dlc_alc_cummulative[0][4]==0 && $dlc_alc_cummulative[0][8]==0 && $dlc_alc_cummulative[0][3]==0)
{
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
}
}

?>
<div id="chartdiv"></div>	

<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">SL No</th>
              		 <th style="text-align:center;color:#000;">District</th>
					<th style="text-align:center;color:#000;">Child Rescued</th>
					<th style="text-align:center;color:#000;"> Child Transferred To Other District</th>
					<th style="text-align:center;color:#000;"> Child Transferred From Other District</th>
					<th style="text-align:center;color:#000;">CL For Own District</th>
					<th style="text-align:center;color:#000;">Investigation on Going</th>
					<th style="text-align:center;color:#000;">Final Order Passed</th>
					<th style="text-align:center;color:#000;">Entitlement Card Generated</th>
					
				
            </tr>
            </thead>
            <tbody>
            <?php 
			$i=1;	
			
			foreach($cumlative_list as $row):
						
			
			
			?>
<tr>
 <td style="text-align:center;"><?php echo $i;?></td>
 <td style="text-align:center;" ><?php echo $row['0'];?> </td>
 <td style="text-align:center;"><?php echo $row['1'];?> </td>
 <td style="text-align:center;"><?php echo $row['5'];?> </td>
  <td style="text-align:center;"><?php echo $row['6'];?> </td>
  <?php if($row['0']=="<strong>Total</strong>"){?>
  

  <td style="text-align:center;"><?php echo $row['8'];?></td>
 
  <?php }else{
  	$total_noCL=($row['1']-$row['5'])+$row['6']  ;
  	
  	?>
   <td style="text-align:center;"><?php echo $total_noCL ; ?> </td>
  <?php } ?>
 
  
 <td style="text-align:center;"><?php echo $total_noCL- $row['3'] ; ?> </td>
 <td style="text-align:center;"><?php echo $row['3'];?> </td>
 <td style="text-align:center;"><?php echo $row['4'];?> </td>
  
</tr>
 <?php $i++; endforeach;?>            

            </tbody>    
 </table>
 
</div>
<script>
$(document).ready(function () {

});
</script>
 