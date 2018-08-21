
<section>


<div class="row">
         <div class="col-md-12" style="margin-bottom:5px;">
         <div class="row">
<form  action="<?php echo base_url(); ?>index.php?mis_reports/" method="post" >
			<div class="form-group">
			<div class="col-md-2" style="width:128px ;">
			<label class="" for="">Select Reports :</label>
			</div>
			<div class="col-md-5" style="width:355px;">			
				<select name="type" id="type" class="form-control dist"   data-validate="required" >
				      <?php if($role==10){?>
					 <option  <?php if($type=="lc_action") echo "selected" ;?> value="lc_action">Action Suggested By LC</option>
					 <?php  }?>
						          <option <?php if($type=="age") echo "selected" ; ?> value="age">Age-wise Break-up</option>
						          <option <?php if($type=="caste") echo "selected" ; ?> value="caste">Category-wise Break-up</option>
						          <option  <?php if($type=="rescued_repeatedly") echo "selected" ;?> value="rescued_repeatedly">Child Rescued Repeatedly</option>
						          <option  <?php if($type=="outside_state") echo "selected" ;?> value="outside_state">Child Rescued Outside State</option>
						           <option  <?php if($type=="inside_state") echo "selected" ;?> value="inside_state">Child Rescued Within State</option>
						           <option  <?php if($type=="cci") echo "selected" ;?> value="cci">Children Sent to CCI</option>
						           <option <?php if($type=="cmrf_transaction") echo "selected" ; ?> value="cmrf_transaction">CMRF Transaction Details</option>
						           <option  <?php if($type=="emp_amt") echo "selected" ;?> value="emp_amt">Collected Wage Amount</option>
						            <option  <?php if($type=="child_cumulative") echo "selected" ;?> value="child_cumulative">Cumulative Statistics</option>
						           	 <option  <?php if($type=="cwc_delay") echo "selected" ;?> value="cwc_delay">Delay In CWC Order Passing</option>
						           	 <option <?php if($type=="due_for_transfer") echo "selected" ; ?> value="due_for_transfer">Transfer Status of Rescued Child Labourer</option>
						           	 <option <?php if($type=="education") echo "selected" ; ?> value="education">Education-wise Break-up</option>
						           	<option  <?php if($type=="entitlement_card_getnerated") echo "selected" ;?> value="entitlement_card_getnerated">Entitlement Card Generation Time Period</option> 
						      <option  <?php if($type=="last_login") echo "selected" ;?> value="last_login">Last Login Time Period</option>	
						      <?php if($role==2 || $role==5){?><option  <?php if($type=="middle_men") echo "selected" ;?> value="middle_men">Middlemen/Agents</option><?php } ?>
				       		   <option  <?php if($type=="order_after_production") echo "selected" ;?> value="order_after_production">Order After Production</option>
				 				 <option  <?php if($type=="Rehabilitation") echo "selected" ; ?> value="Rehabilitation">Rehabilitation</option>
							 	<option  <?php if($type=="rescued_child") echo "selected" ; ?> value="rescued_child">Rescued Child Labourer Registered By</option>
						 		 <option <?php if($type=="system_access") echo "selected" ;?> value="system_access">System Access</option>
								 <option  <?php if($type=="investigation") echo "selected" ;?> value="investigation">Time Taken For Investigation</option>
								<option  <?php if($type=="cwc_working_status") echo "selected" ;?>  value="cwc_working_status" >CWC Working Status</option>

					
					
					 <!-- <option  <?php //if($type=="cwc_not_filling") echo "selected" ;?> value="cwc_not_filling">Status Of Additional Details</option>-->
					
					<!--   <option  <?php //if($type=="ngo_dubbious") echo "selected" ; ?> value="ngo_dubbious">Dubious NGO </option>-->
					 
                </select>
                </div>
				</div>
				<div class="col-md-2" style="width:71px;" >
		   	<label for="datepicker" >From <span style="color:red;">*</span></label>
				</div>
				<div class="col-md-2" >
                <div class="input-group date" id="datepicker"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="from_dt" required="required" name="from_date"    value="<?php echo $from?>"  data-validate="required"  >               	
				<input type="hidden" class="form-control" id="from_dt22" required="required" name="from_date"    value="<?php echo date("d-m-Y", strtotime($from));?>"  data-validate="required"  >
                	</div>
					<span id="error_from_dt" class="color-red"></span>
				</div>
				
		   <div class="col-md-1" style="width:57px;">
           	<label for="datepicker">To <span style="color:red;">*</span></label>
				</div>
		 		 <div class="col-md-2">
                <div class="input-group date" id="datepickerTo"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input type="text" class="form-control" id="to_dt" required="required" name="to_date"   value="<?php echo $to;?>"  data-validate="required"  >	   
                 <input type="hidden" class="form-control" id="to_dt22" required="required" name="to_date"   value="<?php echo date("d-m-Y", strtotime($to));?>" data-validate="required"  >
                 </div>
				 <span id="error_to_dt" class="color-red"></span>
				 </div>
				<div class="col-md-1" id="new-button1">
				<button type="button"  data-type="view" id="mis_submit" class="mis_submit btn btn-info">Submit</button>
			  </div>
			</div>
			</div>
</div>
<script>
$(document).ready(function () {
$("#mis_submit").on("click",function(){
			 $('#loading').show();
		 });
});
 </script>

<div class="row">

<div class="modal fade" id="loaderId" role="dialog">
    <div class="modal-dialog">
      <div class="loader"></div>
    </div>
 </div>


  <!-------------------------------start of the table-------------------------------------------------->
	<div class="col-md-12 chat_area" id="child_table">
	</br>
	<!--	<h2>Report Details </h2>-->

		<table  class="display table table-bordered" cellspacing="0" width="100%" id="table_export">
			<thead>
				<tr>
				    <th style="text-align:center;color:#000;">Serial No</th>
					<th style="text-align:center;color:#000;">Child Id</th>
					<th style="text-align:center;color:#000;">Child Name</th>
					<th style="text-align:center;color:#000;">Child District</th>
					<th style="width:20%;text-align:center;color:#000;">Rescued Date</th>
					<th style="text-align:center;color:#000;">Entitlement Card Generation Date</th>
					<th style="text-align:center;color:#000;">No Of Days</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1; if($monthly_report_details){foreach($monthly_report_details as $row){?>

				<tr>
				<td style="text-align:center;"><?php echo $i;?></td>
				<td  style="text-align:center;"><a href="<?php echo $details_url.$row['child_id'];?>"><?php echo $row['child_id'] ;?></a></td>
				<td style="text-align:center;"><?php echo $row['child_name'] ;?></td>
				<td style="text-align:center;"><?php echo $row['child_dist'] ;?></td>
				<td style="text-align:center;"><?php echo $row['idate_of_rescue'] ;?></td>
				<td style="text-align:center;"><?php echo $row['final_order_date'] ;?></td>
				<td style="text-align:center;"><?php
				   if($row['idate_of_rescue']!="")
				   {
                   $your_date = strtotime($row['idate_of_rescue']);
				   $now = strtotime($row['final_order_date']);
				    
                   $datediff = $now - $your_date;
				   echo floor($datediff / (60 * 60 * 24));
				   }
				   else{
					   
					  echo $datediff='NA'; 
				   }
                    ?></td>
				</tr>


			<?php $i++;}}?>			 
            </tbody>
		</table>
		
	</div>

</div>

<!-----------------------------------------------end of Row-------------------------------------------->
</section>

<script type="text/javascript">
var title=$( "#type option:selected" ).text();
var type=$( "#rehabilitation_section option:selected" ).text();
	  var from=$("#from_dt").val();
	  var to=$("#to_dt").val();
     title=title+'\n'+'FROM-'+from+' '+'TO-'+to;
	jQuery(document).ready(function($)
	{
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) {
				dd='0'+dd
			} 

			if(mm<10) {
				mm='0'+mm
			} 

			today = dd+'-'+mm+'-'+yyyy;

     
		// convert the datatable
		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			//code add by poojashree
			//for displaying all data in list table
			 "lengthMenu": [[50, 100, -1], [50, 100,"All"]],
			"paging": true,
			"dom": 'Blftrip',
			buttons: [ {
				
				text:'<i class="fa fa-file-excel-o button-excel"  ></i> Excel',
				title: "MIS Report-"+title
			},{
				extend: 'print',
				autoPrint: true,
				header: true,
				text:'<i class="fa fa-print"></i> Print',
				title: "MIS Report-"+title
			},{
            extend: '',
            text: '<a href="#" data-type="pdf" class="mis_submit" style="color:#000;"><i class="fa fa-file-pdf-o"></i> PDF </a>',
			
        } ],
		
	
	
		});
		//by default all hidden
		        
			    var ex_type='<?php echo $type;?>';
				//console.log(ex_type);
				
		if(ex_type=='entitlement_card_getnerated' || ex_type=='investigation')
			{
				$("#user_grp_div").hide();
				$("#inside_div").hide();
				$("#outside_div").hide();
				$("#cci_dist_div").hide();
				$("#from_to_div").show();
				// $("#new-button1").show();
				
			}
		
			//ended by poojashree

			
});	
// Based on the filter URL chnage
		$(".mis_submit").on("click",function(){
			var export_type=$(this).attr("data-type");
		
			var type=$("#type").val(); 
			var user_grp=$("#user_grp").val();
			var rehabilitation_section=$("#rehabilitation_section").val();
			var from=$("#from_dt").val();
			var to=$("#to_dt").val();
			if(type =='middle_men')
			{
			if(!from)
			{
				$("#error_from_dt").html("From date should be required!");
				//console.log("asasd");
				return false;
			}
			if(!to)
			{
				$("#error_to_dt").html("To date should be required!");
				//console.log("asasd");
				return false;
			}
			}
			var dist="";
			var block="";
			var state="";

			
			//Main functionality
			if(type=='entitlement_card_getnerated')
			{
				
				window.location.assign('<?php echo base_url(); ?>index.php?mis_reports/index/'+type+'/'+from+'/'+to+'/'+export_type);
				
			}
			
		});	

	});
	
	

var FromEndDate = new Date();
$("#from_dt" ).datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true

});

$("#to_dt" ).datepicker({
format: 'yyyy-mm-dd',
autoclose: true

});

$(function() {
	
	//console.log("sdfsdfsdf");
  $("#to_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
   var diffdate = copmareDates(to_date,frm_date);
   //console.log(diffdate);
				if(diffdate <0 ){
					$("#error_to_dt").html("To date should be greater than From date");
					document.getElementById("to_dt").focus();
					$("#to_dt").addClass("newClass");
					$("#mis_submit").attr("disabled","disabled");
					return false;
					}
					else{
						
						$("#mis_submit").removeAttr('disabled');
						$("#error_to_dt").html("");
						$("#to_dt").removeClass("newClass");
					}
			});
  
    $("#from_dt").on("change",function(){
	  var to_date=$("#to_dt").val();
	var frm_date=$("#from_dt").val();
	  //console.log("sdgfsdf");
   var diffdate = copmareDates(to_date,frm_date);
   //console.log(diffdate);
				if(diffdate <0 ){
                    //console.log("dytafd a");
					$("#error_from_dt").html("From date should be less than To date");
					document.getElementById("from_dt").focus();
					$("#from_dt").addClass("newClass");
					$("#mis_submit").attr("disabled","disabled");
					return false;
					}
					else{
						$("#mis_submit").removeAttr('disabled');
						$("#error_from_dt").html("");
						$("#from_dt").removeClass("newClass");
					}
			});

});
var copmareDates = function(dot,dof) {
			year1= new Date(dot);
			year2 = new Date(dof);
			//console.log(year1);
			//console.log(year2);
			onlyyear1 = year1.getFullYear();
			onlymonth1 = year1.getMonth();
			onlyday1 = year1.getDate();
			var dor_new = onlyyear1+"-"+onlymonth1+"-"+onlyday1;
			onlyyear2 = year2.getFullYear();
			onlymonth2 = year2.getMonth();
			onlyday2 = year2.getDate();
			var diff = onlyyear1 -onlyyear2;
			var m = onlymonth1 - onlymonth2;
			var d = onlyday1 - onlyday2;
		   if (m < 0 || (m === 0 && onlyday1 < onlyday2))
			{
				diff--;
			}
			return diff;

		};
	
		  window.onhashchange = function() {
				 alert('back is clicked');
				}
		  
</script>
<script>
//=============================================Export table as excel =============================//

function fnExcelReport(id,type,to_date,frm_date,rehabilitation_section)
{
	if(type=='entitlement_card_getnerated')
	{
var type1='Entitlement Card Generation Time Period' ;
	}
	//code added by poojashree

    var tab_text="<center><div style='color:#0054a5;font-size:20px;'><b>"+type1+"</b></div><div style='color:#0054a5;font-size:15px;'><b>From "+frm_date+" To "+to_date+"</b></div></center><table border='2px'>";
    var textRange; var j=0;
    tab = document.getElementById(id); // id of table
     var tabSelector = $("#"+id);
    var columnCount = $("#"+id).find("thead tr:first-child th").length;
    for(var i=1; i<=$("#"+id).find("thead tr:first-child th").length; i++){
    	if(!$("#"+id).find("thead tr:first-child th:nth-child(" + i +")").hasClass("view-button")){
    	 tab_text = tab_text + tabSelector.find("thead tr:first-child th:nth-child(" + i +")").get(0).outerHTML;
    	}
        }
//     for(j = 1; j<)
// 	tabSelector.find("a").parent().html(tabSelector.find("a").html())
     
    for(j = 1 ; j <= $("#"+id).find("tbody tr").length ; j++) 
    {     
        tab_text = tab_text + "<tr>"
        for(k = 1; k <= columnCount; k++){
            if(!$("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").hasClass("view-button")){
            	 if($("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").find("a").length){
                 	tab_text = tab_text + '<td style="">' + $("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").find("a").html() + "</td>";
                 }
                 else{
                 	tab_text=tab_text+$("#"+id).find( "tbody tr:nth-child(" +j +")").find("td:nth-child(" + k + ")").get(0).outerHTML;
                     }
                }
           
        	
        }
        
        tab_text=tab_text+"</tr>";
    }
   
    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
	console.log(tab_text);    
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
link.download = type1+".xls";
link.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tab_text);
link.click();
    
}
$(document).ready(function(){
	$(".button-excel").closest('.dt-button').on("click",function(e){
		var type=$("#type").val();
		var rehabilitation_section=$("#rehabilitation_section").val();
		//alert(rehabilitation_section);
		 var to_date=$("#to_dt22").val();
		var frm_date=$("#from_dt22").val();
		fnExcelReport("table_export",type,to_date,frm_date,rehabilitation_section);
	});
	
});
</script>
