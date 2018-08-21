<?php //print_r($agewise_brakeup);?>
<?php 
$dlc_alc_caste=array(end($category_breakup));?>

<style>
h3.head_logo {
    display: none;
}

</style>
<?php 
$type='caste' ;
include("dashboard_header.php") ;
?>


<!-- Styles -->

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
var chart;
var legend;
var selected;
<?php if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){?>
var types = [{
  type: "SC",
  percent: <?php echo $category_breakup[38][1];?>,
  color: "#2484c1",
}, {
  type: "ST",
  percent: <?php echo $category_breakup[38][2];?>,
  color: "#BB5151",
},
{
	type: "OBC",
	percent: <?php echo $category_breakup[38][3];?>,
	color: "#4daa4b",
	},
{
		type: "GENERAL",
		percent: <?php echo $category_breakup[38][4];?>,
		color: "#00F500",
    },
    {
		type: "EBC",
		percent: <?php echo $category_breakup[38][5];?>,
		color: "#ffff00",
    },
    {
		type: "OTHER",
		percent: <?php echo $category_breakup[38][6];?>,
		color: "#431738",
    }

];
<?php }?>

<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
var types = [{
	  type: "SC",
	  percent: <?php echo $category_breakup[0][1];?>,
	  color: "#2484c1",
	}, {
	  type: "ST",
	  percent: <?php echo $category_breakup[0][2];?>,
	  color: "#BB5151",
	},
	{
		type: "OBC",
		percent: <?php echo $category_breakup[0][3];?>,
		color: "#4daa4b",
		},
	{
			type: "GENERAL",
			percent: <?php echo $category_breakup[0][4];?>,
			color: "#00F500",
	    },
	    {
			type: "EBC",
			percent: <?php echo $category_breakup[0][5];?>,
			color: "#ffff00",
	    },
	    {
			type: "OTHER",
			percent: <?php echo $category_breakup[0][6];?>,
			color: "#431738",
	    }

	];
<?php }?>
<?php if($roles_id==13 || $roles_id==20){?>
var types = [{
	  type: "SC",
	  percent: <?php echo $dlc_alc_caste[0][1];?>,
	  color: "#2484c1",
	}, {
	  type: "ST",
	  percent: <?php echo $dlc_alc_caste[0][2];?>,
	  color: "#BB5151",
	},
	{
		type: "OBC",
		percent: <?php echo $dlc_alc_caste[0][3];?>,
		color: "#4daa4b",
		},
	{
			type: "GENERAL",
			percent: <?php echo $dlc_alc_caste[0][4];?>,
			color: "#00F500",
	    },
	    {
			type: "EBC",
			percent: <?php echo $dlc_alc_caste[0][5];?>,
			color: "#ffff00",
	    },
	    {
			type: "OTHER",
			percent: <?php echo $dlc_alc_caste[0][6];?>,
			color: "#431738",
	    }

	];
<?php }?>
function generateChartData() {
  var chartData = [];
  for (var i = 0; i < types.length; i++) {
    if (i == selected) {
      for (var x = 0; x < types[i].subs.length; x++) {
        chartData.push({
          type: types[i].subs[x].type,
          percent: types[i].subs[x].percent,
          color: types[i].color,
          pulled: true
        });
      }
    } else {
      chartData.push({
        type: types[i].type,
        percent: types[i].percent,
        color: types[i].color,
        id: i
      });
    }
  }
  return chartData;
}

AmCharts.makeChart("chartdiv", {
  "type": "pie",
"theme": "light",
"titles": [{
    "text": "Category-Wise Break-Up"
  }],

  "dataProvider": generateChartData(),
  "labelText": "[[title]]: [[value]]",
  "balloonText": "[[title]]: [[value]]",
  "titleField": "type",
  "valueField": "percent",
  "outlineColor": "#FFFFFF",
  "outlineAlpha": 0.8,
  "outlineThickness": 2,
  "colorField": "color",
  "pulledField": "pulled",
  "listeners": [{
    "event": "clickSlice",
    "method": function(event) {
      var chart = event.chart;
      if (event.dataItem.dataContext.id != undefined) {
        selected = event.dataItem.dataContext.id;
      } else {
        selected = undefined;
      }
      chart.dataProvider = generateChartData();
      chart.validateData();
    }
  }],
  "export": {
	    "enabled": true,
	    "menu": [
	        {
	          "format": "PDF",
	          "pageOrigin": false,
	  	      "fileName":"cast_wise_break_up_chart",
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
 	if($category_breakup[38][1]==0 && $category_breakup[38][2]==0 && $category_breakup[38][3]==0 && $category_breakup[38][4]==0 && $category_breakup[38][5]==0 && $category_breakup[38][6]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if($category_breakup[0][1]==0 && $category_breakup[0][2]==0 && $category_breakup[0][3]==0 && $category_breakup[0][4]==0 && $category_breakup[0][5]==0 && $category_breakup[0][6]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}
if($roles_id==13 || $roles_id==20){
	if($dlc_alc_caste[0][1]==0 && $dlc_alc_caste[0][2]==0 && $dlc_alc_caste[0][3]==0 && $dlc_alc_caste[0][4]==0 && $dlc_alc_caste[0][5]==0 && $dlc_alc_caste[0][6]==0)
{
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
}
}

?>
<div id="chartdiv"></div>
<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
				<tr class="report_head">
					<th style="text-align:center;color:#000;">Sl No.</th>
					<th style="text-align:center;color:#000;">District Name</th>
					<th style="text-align:center;color:#000;">SC</th>
					<th style="text-align:center;color:#000;">ST</th>
					<th style="text-align:center;color:#000;">OBC</th>
					<th style="text-align:center;color:#000;">General</th>
					<th style="text-align:center;color:#000;">EBC</th>
					<th style="text-align:center;color:#000;">Other</th>
				</tr>
			</thead>
			<tbody>
<?php 
$i=1;	foreach($category_breakup as $row): ?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['1'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['2'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['3'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['4'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['5'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['6'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach; ?>
</tr>
        
            
            
            
            
            </tbody>
            
            
            
 </table>
</div>