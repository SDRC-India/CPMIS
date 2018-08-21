<?php 
//print_r($cmrelief);
$dlc_alc_cm=array(end($cmrelief));
?>

<style>
.entypo-right-circled{
display:none;
}
.head_logo{

display:none;
}


</style>
<?php 
//echo $orderafter_breakup[38][1];
$type='Rehabilitation1' ;
include("dashboard_header.php") ;
?>



<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.js"></script>
<link  type="text/css" href="//cdn.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet">
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.6/plugins/export/libs/FileSaver.js/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.6/plugins/export/libs/fabric.js/fabric.min.js"></script>




<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "titles": [{
	    "text": "CM Relief Fund"
	  }],
    "startDuration": 2,
    <?php if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){?>
    "dataProvider": [{
        "country": "Physically verified",
        "visits": <?php echo strip_tags($cmrelief[38][1]);?>,
        "color": "#FF0F00"
    }, {
        "country": "CL eligible",
        "visits":<?php echo strip_tags($cmrelief[38][2]);?>,
        "color": "#FF6600"
    }, {
        "country": "CL not eligible",
        "visits": <?php echo strip_tags($cmrelief[38][3]);?>,
        "color": "#FF9E01"
    }, {
        "country": "Demand Raised ",
        "visits": <?php echo strip_tags($cmrelief[38][4]);?>,
        "color": "#FCD202"
    }, {
        "country": "Demand Received",
        "visits": <?php echo strip_tags($cmrelief[38][5]);?>,
        "color": "#F8FF01"
    }, {
        "country": "Bank details not available",
        "visits": <?php echo strip_tags($cmrelief[38][6]);?>,
        "color": "#B0DE09"
    }, {
        "country": "CMRF transferred to CL A/C",
        "visits": <?php echo strip_tags($cmrelief[38][7]);?>,
        "color": "#04D215"
    }],

<?php }?>
<?php if(($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
"dataProvider": [{
    "country": "Physically verified",
    "visits": <?php echo strip_tags($cmrelief[0][1]);?>,
    "color": "#FF0F00"
}, {
    "country": "CL eligible",
    "visits":<?php echo strip_tags($cmrelief[0][2]);?>,
    "color": "#FF6600"
}, {
    "country": "CL not eligible",
    "visits": <?php echo strip_tags($cmrelief[0][3]);?>,
    "color": "#FF9E01"
}, {
    "country": "Demand Raised ",
    "visits": <?php echo strip_tags($cmrelief[0][4]);?>,
    "color": "#FCD202"
}, {
    "country": "Demand Received",
    "visits": <?php echo strip_tags($cmrelief[0][5]);?>,
    "color": "#F8FF01"
}, {
    "country": "Bank details not available",
    "visits": <?php echo strip_tags($cmrelief[0][6]);?>,
    "color": "#B0DE09"
}, {
    "country": "CMRF transferred to CL A/C",
    "visits": <?php echo strip_tags($cmrelief[0][7]);?>,
    "color": "#04D215"
}],

<?php }?>
<?php if($roles_id==13 || $roles_id==20){?>
"dataProvider": [{
    "country": "Physically verified",
    "visits": <?php echo strip_tags($dlc_alc_cm[0][1]);?>,
    "color": "#FF0F00"
}, {
    "country": "CL eligible",
    "visits":<?php echo strip_tags($dlc_alc_cm[0][2]);?>,
    "color": "#FF6600"
}, {
    "country": "CL not eligible",
    "visits": <?php echo strip_tags($dlc_alc_cm[0][3]);?>,
    "color": "#FF9E01"
}, {
    "country": "Demand Raised ",
    "visits": <?php echo strip_tags($dlc_alc_cm[0][4]);?>,
    "color": "#FCD202"
}, {
    "country": "Demand Received",
    "visits": <?php echo strip_tags($dlc_alc_cm[0][5]);?>,
    "color": "#F8FF01"
}, {
    "country": "Bank details not available",
    "visits": <?php echo strip_tags($dlc_alc_cm[0][6]);?>,
    "color": "#B0DE09"
}, {
    "country": "CMRF transferred to CL A/C",
    "visits": <?php echo strip_tags($dlc_alc_cm[0][7]);?>,
    "color": "#04D215"
}],

<?php }?>
    
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "visits",
        "labelText": "[[value]]",
       
    }],
    "depth3D": 40,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0,
        "labelRotation": 45

    },
    "export": {
	    "enabled": true,
	    "menu": [
	        {
	          "format": "PDF",
	          "pageOrigin": false,
	  	      "fileName":"cm_relief_chart",
	          "content": [
	            {
	                "image": "reference",
	                "fit": [ 500.28, 749.89 ] // fit image to A4
	            }        
	          ]
	        }
	       ]
	  }

}, 0);
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
 <div class="education">
 <?php 
 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){
 	if($cmrelief[38][1]==0 && $cmrelief[38][2]==0 && $cmrelief[38][3]==0 && $cmrelief[38][4]==0 && $cmrelief[38][5]==0 && $cmrelief[38][6]==0 && $cmrelief[38][7]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if(strip_tags($cmrelief[0][1])==0 && strip_tags($cmrelief[0][2])==0 && strip_tags($cmrelief[0][3])==0 && strip_tags($cmrelief[0][4])==0 && strip_tags($cmrelief[0][5])==0 && strip_tags($cmrelief[0][6])==0 && strip_tags($cmrelief[0][7])==0){
		
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}
if($roles_id==13 || $roles_id==20){
	if($dlc_alc_cm[0][1]==0 && $dlc_alc_cm[0][2]==0 && $dlc_alc_cm[0][3]==0 && $dlc_alc_cm[0][4]==0 && $dlc_alc_cm[0][5]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
}
}

?>
<div id="chartdiv"></div></div>
<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
            
				  <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Physically verified</th>                
	            <th style="text-align:center;color:#000;">CL eligible for CMRF</th>
	            <th style="text-align:center;color:#000;">CL not eligible for CMRF</th>
	            <th style="text-align:center;color:#000;">Demand Raised </th>
	            <th style="text-align:center;color:#000;">Demand Received</th>
	            <th style="text-align:center;color:#000;">Bank details not available</th>
				<th style="text-align:center;color:#000;">CMRF transferred to CL A/C</th>			
            </tr>
				
			</thead>
            
            <tbody>
			
	<?php 	$i=1;foreach($cmrelief as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo strip_tags($row['0']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['1']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['2']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['3']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['4']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['5']);?> </td>
				   <td style="text-align:center;"><?php echo strip_tags($row['6']);?> </td>
				    <td style="text-align:center;"><?php echo strip_tags($row['7']);?> </td>
				 
				</tr>
	 <?php $i++; endforeach; ?>
            
            </tbody>
            
            
            
 </table>
  </div>