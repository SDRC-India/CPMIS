

<br/>
<br/>
 <!--  <a class="pull-right btn btn-info" href="<?php //echo base_url().'index.php?dashboard'?>" /> Back To List </a>-->
 <button type="button" class="btn btn-info pull-right" id="bck">Back To List</button>
 <input type="hidden" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php echo $from;?>"   >
 <input type="hidden" class="form-control" id="from_dt22" required="required"     value="<?php echo date("d-m-Y", strtotime($from));?>"   >
    <input type="hidden" class="form-control" id="to_dt22" required="required"     value="<?php echo date("d-m-Y", strtotime($to));?>"   >
<input type="hidden" class="form-control" id="to_dt" required="required" name="from_date"    value="<?php echo $to;?>"   >
<input type="hidden" class="form-control" id="dist_id" required="required" name="from_date"    value="<?php echo $dist_id;?>"   >
 <br/>
  <br/>
<!----------------------start of education department list table--------------------------->
<table class="table table-bordered datatable" id="table_export">

	<thead>
		<tr>
			<th class="table_td_width" style="text-align:center;">
				Sl. No.
           	</th>
			<th style="text-align:center;color:#000;"><div>District Name</div></th>
			<th style="text-align:center;color:#000;"><div>Date of demand raised by DM </div></th>
			<th style="text-align:center;color:#000;"><div>Demand raised letter no</div></th>
			<th style="text-align:center;color:#000;"><div>No. of CL for whom demand raised</div></th>
			<th style="text-align:center;color:#000;"><div>Amount Raised</div></th>
			<th style="text-align:center;color:#000;"><div>Date of demand released</div></th>
			<th style="text-align:center;color:#000;"><div>Letter no. of demand released</div></th>
			<th style="text-align:center;color:#000;"><div>No. of CL for whom demand released</div></th>
			<th style="text-align:center;color:#000;"><div>Amount Released</div></th>
			<!--  <th><div>No. of CL due for whom demand not released</div></th>-->
			
			
	  
		</tr>
	</thead>
	<tbody>
		<?php
		$counter=1;
		foreach($cmrf_transaction_data as $row):

		?>
		<tr>
			<td class="table_td_width" style="text-align:center;">
           		<?php echo $counter++;?>
           	</td>
			<td style="text-align:center;">

					<?php echo $row['area_name'];?>

           </td>
		   <td style="text-align:center;"><?php echo $row['dr_date'];?></td>
			<td style="text-align:center;"><?php echo $row['dr_letter_no'];?>
                    </td>
			<td style="text-align:center;"><?php echo $row['dr_cl_no'];	?> </td>
			<td style="text-align:center;"><?php echo $row['dr_amount'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_date'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_letter_no'];	?> </td>
			<td style="text-align:center;"><?php echo $row['drel_cl_no'];	?> </td>
				
			<td style="text-align:center;"><?php echo $row['drel_amount'];	?> </td>
	      <!-- <td><?php //echo $row['dr_amount']-$row['drel_amount'];	?> </td>-->
			
			
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
<!---------------------end----------------------------------->

<script type="text/javascript">


var FromEndDate = new Date();
$('#datepicker').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate,
autoclose: true,
"setDate": new Date()
});
</script>
<script>
var FromEndDate1 = new Date();
$('#datepickerTo').datepicker({
format: 'yyyy-mm-dd',
endDate: FromEndDate1,
autoclose: true,
date:FromEndDate1
});
</script>
<script type="text/javascript">
jQuery(document).ready(function($)
{
	

	// convert the datatable
	/*var datatable = $("#table_export").dataTable({
		"sPaginationType": "bootstrap",
		//code add by poojashree
		//for displaying all data in list table
		 "lengthMenu": [[25, 50, 100, -1], [25, 50, 100,"All"]],
		"paging": true,
		"dom": 'Blftrip',
		 buttons: [ {
				
				text:'<i class="fa fa-file-excel-o button-excel"  ></i> Excel',
				
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				
			},{
            extend: '',
            text: '<a href="#" data-type="pdf" class="mis_submit"><i class="fa fa-file-pdf-o"></i> PDF </a>',
			
        } ],
  
		
	});*/


	var datatable = $("#table_export").dataTable({
		"sPaginationType": "bootstrap",
		//code add by poojashree
		//for displaying all data in list table
		 "lengthMenu": [[25, 50, 100, -1], [25, 50, 100,"All"]],
		"paging": true,
		"dom": 'Blftrip',
		buttons: [ {
			
			text:'<i class="fa fa-file-excel-o button-excel"  ></i> Excel'
		},{
			extend: 'print',
			autoPrint: true,
			header: true,
			text:'<i class="fa fa-print"></i> Print'
		},{
        extend: '',
        text: '<a href="#" data-type="pdf" class="mis_submit" style="color:#000;"><i class="fa fa-file-pdf-o"></i> PDF </a>',
		
    }],
	});
	$(".mis_submit").on("click",function(){
       var type="CMRF_transaction_details"; 
       var export_type=$(this).attr("data-type");
       var from=$("#from_dt").val();
      // alert(from);
       var to=$("#to_dt").val();
       //alert(to);
       var dist_id=$("#dist_id").val();
       //alert(dist_id);


window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_cmrf_trn_data/'+from+'/'+to+'/'+dist_id+'/'+export_type);
});

	
});
//code add by poojashree
//for excel option inside state

$(document).ready(function(){
	$(".button-excel").closest('.dt-button').on("click",function(e){
		var type=$("#type").val();
		 var to_date=$("#to_dt22").val();
		var frm_date=$("#from_dt22").val();
		fnExcelReport("table_export",type,to_date,frm_date);
	});
	
});

function fnExcelReport(id,type,to_date,frm_date)
{
	type= "CMRF Transaction Details";
								
	//code ended for excel heading	
   //code ended for excel heading	
//code changed for excel sheet link removal
var tab_text="<center><div style='color:#0054a5;font-size:20px;'><b>"+type+"</b></div><div style='color:#0054a5;font-size:15px;'><b>From "+frm_date+" To "+to_date+"</b></div></center><table border='2px'>";
var textRange; var j=0;
tab = document.getElementById(id); // id of table
 var tabSelector = $("#"+id);
var columnCount = $("#"+id).find("thead tr:first-child th").length;
// for(j = 1; j<)
//	tabSelector.find("a").parent().html(tabSelector.find("a").html())
 tab_text = tab_text + tabSelector.find("thead tr").html();
for(j = 1 ; j <= $("#"+id).find("tbody tr").length ; j++) 
{     
    tab_text = tab_text + "<tr>"
    for(k = 1; k <= columnCount; k++){
        if($("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").find("a").length){
        	tab_text = tab_text + '<td style="">' + $("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").find("a").html() + "</td>";
        }
        else{
        	tab_text=tab_text+$("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").get(0).outerHTML;
            }
    	
    }
    
    tab_text=tab_text+"</tr>";
}

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
   var msie = ua.indexOf("MSIE "); 

   if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
  {
       txtArea1.document.open("txt/html","replace");
       txtArea1.document.write(tab_text);
       txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"gridTableData.xls");
   }  
   else                 //other browser not tested on IE 11
//         sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
   //code add by poojashree 
   //for naming excel sheet for mis report
        var link = document.createElement("a");
link.download = type+".xls";
link.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tab_text);
link.click();
    
}

$(function() {
	  $( "#bck" ).click(function(){ window.history.back() });
	 });



	
</script>
<script src="assets/js/neon-custom-ajax.js"></script>
