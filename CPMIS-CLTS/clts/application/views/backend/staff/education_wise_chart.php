<?php //print_r($education_breakup);?>
<?php 
$dlc_alc_edu=array(end($education_breakup));
?>

<style>
h3.head_logo {
    display: none;
}
.amcharts-chart-div,.amcharts-chart-div svg {
height: 450px !important;
}

</style>
<?php 

$type='education' ;
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
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "titles": [{
	    "text": "Education wise break up"
	  }],
	  "legend":{
		   	"position":"right",
		    "marginRight":100,
		    "autoMargins":false
		  },
  <?php if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){?>
  "dataProvider": [ {
        "title": "Illiterate",
        "value": <?php echo $education_breakup[38][1];?>
  }, 
  {
       "title": "Upto primary ( I - V)",
       "value": <?php echo $education_breakup[38][2];?>
  },
  {
	    "title": "Middle Level (VI - VII)",
	    "value": <?php echo $education_breakup[38][3];?>
  },
  {
	    "title": "Upper Primary (VIII - X)",
	    "value": <?php echo $education_breakup[38][4];?>
  },

  {
	    "title": "Higher Secondary",
	    "value": <?php echo $education_breakup[38][5];?>
  },
  {
	    "title": "Not Specified",
	    "value": <?php echo $education_breakup[38][6];?>,
  }
   
  ],
  <?php }?>
<?php if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){?>
  "dataProvider": [ {
        "title": "Illiterate",
        "value": <?php echo $education_breakup[0][1];?>
  }, 
  {
       "title": "Upto primary ( I - V)",
       "value": <?php echo $education_breakup[0][2];?>
  },
  {
	    "title": "Middle Level (VI - VII)",
	    "value": <?php echo $education_breakup[0][3];?>
  },
  {
	    "title": "Upper Primary (VIII - X)",
	    "value": <?php echo $education_breakup[0][4];?>
  },

  {
	    "title": "Higher Secondary",
	    "value": <?php echo $education_breakup[0][5];?>
  },
  {
	    "title": "Not Specified",
	    "value": <?php echo $education_breakup[0][6];?>,
  }
   
  ],
  <?php }?>
<?php if($roles_id==13 || $roles_id==20){?>
  "dataProvider": [ {
        "title": "Illiterate",
        "value": <?php echo $dlc_alc_edu[0][1];?>
  }, 
  {
       "title": "Upto primary ( I - V)",
       "value": <?php echo $dlc_alc_edu[0][2];?>
  },
  {
	    "title": "Middle Level (VI - VII)",
	    "value": <?php echo $dlc_alc_edu[0][3];?>
  },
  {
	    "title": "Upper Primary (VIII - X)",
	    "value": <?php echo $dlc_alc_edu[0][4];?>
  },

  {
	    "title": "Higher Secondary",
	    "value": <?php echo $dlc_alc_edu[0][5];?>
  },
  {
	    "title": "Not Specified",
	    "value": <?php echo $dlc_alc_edu[0][6];?>,
  }
   
  ],
  <?php }?>
  
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[]]",
  
  "export": {
	    "enabled": true,
	    "menu": [
	        {
	          "format": "PDF",
	          "pageOrigin": false,
	  	      "fileName":"education_wise_chart",
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
<div class="education">
<?php 
 if( $roles_id==10 || $roles_id==11 || $roles_id==21 || $roles_id==12){
 	if($education_breakup[38][1]==0 && $education_breakup[38][2]==0 && $education_breakup[38][3]==0 && $education_breakup[38][4]==0 && $education_breakup[38][5]==0 && $education_breakup[38][6]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}

if( ($roles_id==2)||($roles_id==5)||($roles_id==6)||($roles_id==7)||($roles_id==8)||($roles_id==14)||($roles_id==16)||($roles_id==18)||($roles_id==19)){
	if($education_breakup[0][1]==0 && $education_breakup[0][2]==0 && $education_breakup[0][3]==0 && $education_breakup[0][4]==0 && $education_breakup[0][5]==0 && $education_breakup[0][6]==0){
	
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
	
}
}
if($roles_id==13 || $roles_id==20){
	
	if($dlc_alc_edu[0][1]==0 && $dlc_alc_edu[0][2]==0 && $dlc_alc_edu[0][3]==0 && $dlc_alc_edu[0][4]==0 && $dlc_alc_edu[0][5]==0 && $dlc_alc_edu[0][6]==0){
	echo "<h2 style='text-align:center;'>NO DATA AVAILABLE</h1>";
}
}

?>
<div id="chartdiv">

</div>
</div>
<table class="table-structure" cellspacing="0" width="100%" id="table_export" style="display:none;margin-top:10px;">

<thead>
            <tr class="report_head">
			    <th style="text-align:center;color:#000;">SL No</th>
                <th style="text-align:center;color:#000;">District Name</th>
                <th style="text-align:center;color:#000;">Illiterate</th>
	             <th style="text-align:center;color:#000;">Upto primary ( I - V)</th>
                <th style="text-align:center;color:#000;">Middle Level (VI - VII)</th>
				<th style="text-align:center;color:#000;">Upper Primary (VIII - X)</th>
				<th style="text-align:center;color:#000;">Higher Secondary </th>
				<th style="text-align:center;color:#000;">Not Specified </th>
				<th style="text-align:center;color:#000;">Total </th>
				
            </tr>
			</thead>
            
            <tbody>
			
			<?php 
			$i=1;	foreach($education_breakup as $row): ?>

				<tr>
				  <td style="text-align:center;"><?php echo $i;?></td>
				  <td style="text-align:center;"><?php echo $row['0'];?> </td>
				  <td style="text-align:center;" ><?php echo $row['1'];?> </td>
				  <td style="text-align:center;"><?php echo $row['2'];?> </td>
				  <td style="text-align:center;"><?php echo $row['3'];?> </td>
				  <td style="text-align:center;"><?php echo $row['4'];?> </td>
				  <td style="text-align:center;"><?php echo $row['5'];?> </td>
				  <td style="text-align:center;"><?php echo $row['6'];?> </td>
				  <td style="text-align:center;"><?php echo $row['7'];?> </td>
				</tr>
	
				
			<?php $i++; endforeach;?>
            
            
            </tbody>
            
            
            
 </table>
 </div>