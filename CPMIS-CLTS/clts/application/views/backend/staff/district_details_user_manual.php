<?php //echo "<pre>";print_r($child_rescued_district); echo "</pre>";?>
<style>
.dataTables_wrapper{
border:none;
}




</style>


<div class="row" style=" margin:0px 0px 0px;">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">

      <div class="loader"></div>

    </div>
  </div>
  
  
  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" id="child_table" style="bottom:40px;">
		<div class="col-md-10"> </div>
         <div class="new-button-back" style="padding-bottom: 10px;"><button class="btn btn-info pull-right" id="backto">Back To List</button></div>
		 <br/>
		 <br/>
		<input type="hidden" class="form-control" id="from_dt" required="required" value="<?php echo $from;?>"   >
  <input type="hidden" class="form-control" id="to_dt" required="required" value="<?php echo $to;?>"   >
  <input type="hidden" class="form-control" id="from_dt22" required="required"     value="<?php echo date("d-m-Y", strtotime($from));?>"   >
    <input type="hidden" class="form-control" id="to_dt22" required="required"     value="<?php echo date("d-m-Y", strtotime($to));?>"   >
   <input type="hidden" class="form-control" id="type" required="required" value="<?php echo $type;?>"   >
  <input type="hidden" class="form-control" id="area" required="required" value="<?php echo $area;?>"   >  
		 
		 
		 
		 <div class="table-responsive" style="overflow-X:auto;overflow-Y:visible;border: 1px solid #ddd;height:385px;">
		 
		<table  class="display table table-bordered"  id="table_export">
		 
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Login District</th>
					<th style="text-align:center;color:#000;">Entered By</th>
					<th style="text-align:center;color:#000;">Child ID</th>
					<th style="text-align:center;color:#000;">Child Name</th>
					<th style="text-align:center;color:#000;">Father's Name</th>
					<th style="text-align:center;width:20%;color:#000;">Sex</th>
					<th style="text-align:center;color:#000;">Age/DOB</th>
					<th style="text-align:center;color:#000;">Postal Address</th>
					<th style="text-align:center;color:#000;">Child District</th>
					<th style="text-align:center;color:#000;">Child Block</th>
					<th style="text-align:center;width:20%;color:#000;">Date and Time Of Rescue</th>
					<th style="text-align:center;color:#000;">Bank Name And Branch</th>
					<th style="text-align:center;color:#000;">Account No And IFSC Code</th>
				</tr>
			</thead>
			<tbody>
			<?php  if($child_rescued_district_manual){ $i=1;foreach($child_rescued_district_manual as $row){
				$child_id=$row['child_id'] ;
				$cm_fund_eligibil=mysql_fetch_assoc(mysql_query("select bank_details_id from cm_fund_eligibility where child_id='$child_id' ")) ;
				$bank_id=$cm_fund_eligibil['bank_details_id'] ;

				if($bank_id!=0){ 
				$bank_query=mysql_fetch_assoc(mysql_query("select * from bank_account_details where id='$bank_id' ")) ;				
				if($bank_query['bank_name']){$bank_name=$bank_query['bank_name'].", ".$bank_query['bank_address']; }
				if($bank_query['acc_no']){$acc_no=$bank_query['acc_no'].", ".$bank_query['ifsc_code'] ; }
				}else{
					$bank_name = "Not Available" ;
					$acc_no =  "Not Available" ;
				}
				?>
				
				
				
				<tr>
				<td><?php echo $i;?></td>
				<td style="text-align:center;"><?php echo $row['login_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['entered_by'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_id'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['father_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['sex'];?></td>
				<td style="text-align:center;"><?php if($row['isdob']=='No'){ echo $row['year']; }else{ echo $row['dob'] ; } ?></td>
				<td style="text-align:center;"><?php echo $row['postal_address'];?></td>
				<td style="text-align:center;"><?php echo $row['child_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_block'] ;?></td>
				<td style="text-align:center;"><?php echo $row['date_of_rescue'] ;?></td>
				 <td style="text-align:center;"><?php echo $bank_name ; ?></td>
				<td style="text-align:center;"><?php echo $acc_no ; ?></td>								
				</tr>
				
				
			<?php $i++;}}else{echo "<tr><td colspan='5'>No data available</td><tr>";}?>

		</tbody>
		</table>
		</div>
	</div>


</div>
<!-----------------------------------------------end of Row-------------------------------------------->
<script>
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
		       var type1="cci-details"; 
		       var export_type=$(this).attr("data-type");
		       //alert(export_type);
		       var from=$("#from_dt").val();
		       //alert(from);
		       var to=$("#to_dt").val();
		       //alert(to);
		       var area=$("#area").val();
		       //alert(area);

		//window.location.assign('<?php // echo base_url(); ?>index.php?mis_reports/view_details_outside/'+type+'/'+export_type);
		window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/user_details_manual/'+from+'/'+to+'/'+area+'/'+export_type);

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
		type="District Wise Details List Of Children As On"+" "+frm_date+"";
									
		//code ended for excel heading	
	   //code ended for excel heading	
	//code changed for excel sheet link removal
    var tab_text="<center><div style='color:#0054a5;font-size:20px;'><b>"+type+"</b></div><div style='color:#0054a5;font-size:15px;'><b>From "+frm_date+" To "+to_date+"</b></div></center><table border='2px'>";
    var textRange; var j=0;
    tab = document.getElementById(id); // id of table
     var tabSelector = $("#"+id);
    var columnCount = $("#"+id).find("thead tr:first-child th").length;
//     for(j = 1; j<)
// 	tabSelector.find("a").parent().html(tabSelector.find("a").html())
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
//	         sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
	   //code add by poojashree 
	   //for naming excel sheet for mis report
	        var link = document.createElement("a");
	link.download = type+".xls";
	link.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tab_text);
	link.click();
	    
	}

	$(function() {
		  $( "#backto" ).click(function(){ window.history.back() });
		 });
</script>

