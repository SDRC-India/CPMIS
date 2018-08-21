<?php 
//echo "<pre>";print_r($labour_resource_department[0][1]);echo "</pre>";
//echo $roles_id;
// echo $ls= array($labour_resource_department);
$dlc_alc_lbr=array(end($labour_resource_department));
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
//print_r($labour_resource_department[38]);
//echo $orderafter_breakup[38][1];
$type='Rehabilitation' ;
include("dashboard_header.php") ;
?>

<!-- Styles -->
<style>
	
</style>

<!-- Resources -->

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.js"></script>
<link  type="text/css" href="//cdn.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet">
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/funnel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.6/plugins/export/libs/FileSaver.js/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.6/plugins/export/libs/fabric.js/fabric.min.js"></script>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "funnel",
  "theme": "light",
  "titles": [{
	    "text": "Rehabilitation Of Labour Resource Department"
	  }],
  <?php if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){?>

  "dataProvider": [ {
    "title": "Rs 1800 Package",
    "value": <?php echo strip_tags($labour_resource_department[38][1]);?>
  }, {
    "title": "Rs 3000 Package",
    "value": <?php echo strip_tags($labour_resource_department[38][2]);?>
  }, {
    "title": "Rs 5000 Deposited DCWRA",
    "value": <?php echo strip_tags($labour_resource_department[38][3]);?>
  }, {
    "title": "Compensation fund Rs. 20,000",
    "value": <?php echo strip_tags($labour_resource_department[38][4]);?>
  }, {
    "title": "CMRF Transferred Rs. 25000",
    "value": <?php echo strip_tags($labour_resource_department[38][5]);?>
  } ],

<?php }?>
<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
"dataProvider": [ {
    "title": "Rs 1800 Package",
    "value": <?php echo strip_tags($labour_resource_department[0][1]);?>
  }, {
    "title": "Rs 3000 Package",
    "value": <?php echo strip_tags($labour_resource_department[0][2]);?>
  }, {
    "title": "Rs 5000 Deposited DCWRA",
    "value": <?php echo strip_tags($labour_resource_department[0][3]);?>
  }, {
    "title": "Compensation fund Rs. 20,000",
    "value": <?php echo strip_tags($labour_resource_department[0][4]);?>
  }, {
    "title": "CMRF Transferred Rs. 25000",
    "value": <?php echo strip_tags($labour_resource_department[0][5]);?>
  } ],
<?php }?>
<?php if($roles_id==13 || $roles_id==20){?>
"dataProvider": [ {
  "title": "Rs 1800 Package",
  "value": <?php echo strip_tags($dlc_alc_lbr[0][1]);?>
}, {
  "title": "Rs 3000 Package",
  "value": <?php echo strip_tags($dlc_alc_lbr[0][2]);?>
}, {
  "title": "Rs 5000 Deposited DCWRA",
  "value": <?php echo strip_tags($dlc_alc_lbr[0][3]);?>
}, {
  "title": "Compensation fund Rs. 20,000",
  "value": <?php echo strip_tags($dlc_alc_lbr[0][4]);?>
}, {
  "title": "CMRF Transferred Rs. 25000",
  "value": <?php echo strip_tags($dlc_alc_lbr[0][5]);?>
} ],

<?php }?>



  
  "balloon": {
    "fixedPosition": true
  },
  "valueField": "value",
  "titleField": "title",
  "marginRight": 240,
  "marginLeft": 50,
  "startX": -500,
  "depth3D": 100,
  "angle": 40,
  "outlineAlpha": 1,
  "outlineColor": "#FFFFFF",
  "outlineThickness": 2,
  "labelPosition": "right",
  "balloonText": "[[title]]: [[value]] no of children[[description]]",
  "export": {
	    "enabled": true,
	    "pageOrigin": false,
	    "fileName":"lrd_chart",
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
 <div class="conical">
 <?php 
 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){
 	if($labour_resource_department[38][1]==0 && $labour_resource_department[38][2]==0 && $labour_resource_department[38][3]==0 && $labour_resource_department[38][4]==0 && $labour_resource_department[38][5]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if(strip_tags($labour_resource_department[0][1])==0 && strip_tags($labour_resource_department[0][2])==0 && strip_tags($labour_resource_department[0][3])==0 && strip_tags($labour_resource_department[0][4])==0 && strip_tags($labour_resource_department[0][5])==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
	
}
}
if($roles_id==13 || $roles_id==20){
	if($dlc_alc_lbr[0][1]==0 && $dlc_alc_lbr[0][2]==0 && $dlc_alc_lbr[0][3]==0 && $dlc_alc_lbr[0][4]==0 && $dlc_alc_lbr[0][5]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h2>";
}
}

?>
<div id="chartdiv"></div></div>
 <table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
            
				   <tr class="report_head">
			    <th style="text-align:center;color:#000;">Serial No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Rs 1800 Package</th>
                <th style="text-align:center;color:#000;">Rs 3000 Package</th>
	            <th style="text-align:center;color:#000;">Rs 5000 Deposited DCWRA</th>
                <th style="text-align:center;color:#000;">Compensation fund Rs. 20,000</th>
				<th style="text-align:center;color:#000;">CMRF Transferred Rs. 25000</th>
				
            </tr>
				
			</thead>
            
            <tbody>
			
		<?php 	$i=1;	foreach($labour_resource_department as $row):?>
		
				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo strip_tags($row['0']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['1']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['2']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['3']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['4']);?> </td>
				  <td style="text-align:center;"><?php echo strip_tags($row['5']);?> </td>	 
				</tr>
	 <?php $i++; endforeach;?>
            
            
            </tbody>
            
            
            
 </table>
 </div>