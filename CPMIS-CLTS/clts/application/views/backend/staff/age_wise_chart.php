<?php //print_r($agewise_brakeup);?>
<?php 
$below10year_lc= $agewise_brakeup[38][1];
$between10to14_lc= $agewise_brakeup[38][2];
$greaterthan18_lc= $agewise_brakeup[38][3];

$below10year_ls= $agewise_brakeup[0][1];
$between10to14_ls= $agewise_brakeup[0][2];
$greaterthan18_ls= $agewise_brakeup[0][3];


$dlc_alc_age=array(end($agewise_brakeup));
?>


<style>
h3.head_logo {
    display: none;
}

</style>
<?php 

$type='get_age' ;
include("dashboard_header.php") ;
?>


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
  type: "<10 Age",
  percent: <?php echo $below10year_lc;?>,
  color: "#2484c1",
}, {
  type: "10-14 to Age",
  percent: <?php echo $between10to14_lc;?>,
  color: "#BB5151",
},
{
	  type: "15-18 Age",
	  percent: <?php echo $greaterthan18_lc;?>,
	  color: "#4daa4b",
	}

];
<?php }?>

<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
var types = [{
  type: "<10 Age",
  percent: <?php echo $below10year_ls;?>,
  color: "#2484c1",
}, {
  type: "10-14 Age",
  percent: <?php echo $between10to14_ls;?>,
  color: "#BB5151",
},
{
	  type: "15-18 Age",
	  percent: <?php echo $greaterthan18_ls;?>,
	  color: "#4daa4b",
	}

];
<?php }?>
<?php if($roles_id==13 || $roles_id==20){?>
var types = [{
  type: "<10 Age",
  percent: <?php echo $dlc_alc_age[0][1];?>,
  color: "#2484c1",
}, {
  type: "10-14 Age",
  percent: <?php echo $dlc_alc_age[0][2];?>,
  color: "#BB5151",
},
{
	  type: "15-18 Age",
	  percent: <?php echo $dlc_alc_age[0][3];?>,
	  color: "#4daa4b",
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
    "text": "Age Wise Break Up"
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
    "labelText": "[[value]]",
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
	  	      "fileName":"age_wise_breakup_chart",
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
if($below10year_lc==0 && $between10to14_lc==0 && $greaterthan18_lc==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
if($below10year_ls==0 && $between10to14_ls==0 && $greaterthan18_ls==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}
if($roles_id==13 || $roles_id==20){
if($dlc_alc_age[0][1]==0 && $dlc_alc_age[0][2]==0 && $dlc_alc_age[0][3]==0)
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
                <th style="text-align:center;color:#000;">Below 10 Years </th>
	             <th style="text-align:center;color:#000;">10 to 14 years</th>
                <th style="text-align:center;color:#000;">15 to 18 years</th>
				 </tr>
        </thead>
            <tbody>
            <?php 
            $i=1;	foreach($agewise_brakeup as $row): ?>

				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;" ><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
  
</tr>
 <?php $i++; endforeach;?>            
            
            
            
            
            </tbody>
            
            
            
 </table>
</div>