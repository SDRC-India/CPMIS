<?php //print_r($education_rehab);?>
<?php 
$education_rehab_part= $education_rehab[38][1];
$education_rehab_part_ls= $education_rehab[0][1];
$education_rehab_part_ls1=$education_rehab[0][2];
if($education_rehab[0][2]==0)
{
	$education_rehab_part_ls1=0;
	
}

$dlc_alc_edu_rehab=array(end($education_rehab));

//echo  $dlc_alc_edu_rehab[0][1];
?>

<style>
h3.head_logo {
    display: none;
}




</style>
<?php 

$type='Rehabilitation2' ;
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
	  type: "Rescued Child",
	  percent: <?php echo $education_rehab[38][1];?>,
	  color: "#4daa4b",
	}, {
	  type: "Enrolled In School",
	  percent: <?php echo $education_rehab[38][2];?>,
	  color: "#BB5151",
	}
	];
<?php }?>

<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
var types = [{
	  type: "Rescued Child",
	  percent: <?php echo $education_rehab[0][1];?>,
	  color: "#4daa4b",
	}, {
	  type: "Enrolled In School",
	  percent: <?php echo $education_rehab_part_ls1;?>,
	  color: "#BB5151",
	}
	];
<?php }?>
<?php if($roles_id==13 || $roles_id==20){?>
var types = [{
	  type: "Rescued Child",
	  percent: <?php echo $dlc_alc_edu_rehab[0][1];?>,
	  color: "#4daa4b",
	}, {
	  type: "Enrolled In School",
	  percent: <?php echo $dlc_alc_edu_rehab[0][2];?>,
	  color: "#BB5151",
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
    "text": "Education Department"
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
	  	      "fileName":"education_rehab_chart",
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
 	if($education_rehab_part==0 ){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if($education_rehab_part_ls==0 ){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}
if($roles_id==13 || $roles_id==20){
	if($dlc_alc_edu_rehab[0][1]==0)
{
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
}
}

?>
<div id="chartdiv" style="text-align: center;">
<?php 
if($education_rehab_part_ls==0)
{
	
	echo "NO DATA AVAILABLE";
}
?>
</div>
<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
            
				 
			    <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Enrolled in School</th>                
            </tr>	
            
				
			</thead>
            
            <tbody>
			
	<?php $i=1;foreach($education_rehab as $row):
		?>
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				</tr>
	 <?php $i++; endforeach; ?>
            
            </tbody>
            
            
            
 </table>
</div>
