<!-----------------labour dept table started------------------------------>
 <!--  <a class="pull-right" href="<?php //echo base_url().'index.php?mis_reports'?>" /> Back To List </a>-->
 
 <button type="button" class="btn btn-info pull-right" id="back-button" style="margin-bottom:7px;">Back To List </button>
<input type="hidden" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php echo $from;?>"   >
<input type="hidden" class="form-control" id="to_dt" required="required" name="from_date"    value="<?php echo $to;?>"   >
<input type="hidden" class="form-control" id="from_dt22" required="required"     value="<?php echo date("d-m-Y", strtotime($from));?>"   >
    <input type="hidden" class="form-control" id="to_dt22" required="required"     value="<?php echo date("d-m-Y", strtotime($to));?>"   >
<input type="hidden" class="form-control" id="dist" required="required" name="from_date"    value="<?php echo $district_id;?>"   >
<input type="hidden" class="form-control" id="cond" required="required" name="from_date"    value="<?php echo $cond;?>"   >
<input type="hidden" class="form-control" id="cond_val" required="required" name="from_date"    value="<?php echo $cond_val;?>"   > 
<input type="hidden" class="form-control" id="type" required="required" name="from_date"    value="<?php echo $type;?>"   > 
 
<table class="table table-bordered datatable" id="table_export">

  <thead>
    <tr>
      <th class="table_td_width" style="text-align:center;color:#000;">Sl. No.</th>
      <th style="text-align:center;color:#000;"><div>Child ID</div></th>
	  <th style="text-align:center;color:#000;"><div>Child Name</div></th>
     
      <th style="text-align:center;color:#000;"><div>Rs.<?php if($type==0){echo "1800"; }else{echo "3000";}?> Package	</div></th>
     
       
    </tr>
  </thead>
  <tbody>
  <?php
  
  $counter=1;
  foreach($lrd_val as $row):?>
   <tr>
    <td class="table_td_width" style="text-align:center;"><?php echo $counter++;?> </td>
    <td style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'];?></a> </td>
	 <td style="text-align:center;"><?php echo $row['child_name'];?></td>
    
    </td>
    <td style="text-align:center;"><?php echo $row['package'];	?>
    
    </td>
  </tr>
  <?php

		endforeach;?>
  </tbody>

</table>
<!----------------------labour dept table end------------------------------------->
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		//convert all checkboxes before converting datatable
		/*replaceCheckboxes();

		// Highlighted rows
		$("#table_export tbody input[type=checkbox]").each(function(i, el)
		{
			var $this = $(el),
				$p = $this.closest('tr');

			$(el).on('change', function()
			{
				var is_checked = $this.is(':checked');

				$p[is_checked ? 'addClass' : 'removeClass']('highlight');
			});
		});
		// convert the datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
      
			"aoColumns": [
				{ "bSortable": true },
				{ "bVisible": true},
				{ "bVisible": true},
				{ "bVisible": true},
				
				
				
				
				null
			],
		});
		//customize the select menu
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
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
       var type1="rehabilation_lrd"; 
       var export_type=$(this).attr("data-type");
       var from=$("#from_dt").val();
       //alert(from);
       var to=$("#to_dt").val();
       // alert(to);
       var dist=$("#dist").val();
        //alert(dist);
       var cond=$("#cond").val();
      //alert(cond);
      var cond_val=$("#cond_val").val();
      //alert(cond_val);
      var type=$("#type").val();
      //alert(type);
      

//window.location.assign('<?php // echo base_url(); ?>index.php?mis_reports/view_details_outside/'+type+'/'+export_type);
window.location.assign('<?php echo base_url(); ?>index.php?dashboard/get_lrd_18k/'+from+'/'+to+'/'+dist+'/'+cond+'/'+cond_val+'/'+type+'/'+export_type);
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
	type="Labour Resource Department";
								
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
		$( "#back-button" ).click(function(){ window.history.back() });
		});
	
</script>
<script src="assets/js/neon-custom-ajax.js"></script>