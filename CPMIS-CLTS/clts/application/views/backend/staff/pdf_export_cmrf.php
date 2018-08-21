<style> 
.pdf_export thead tr
{
background-color:#355675!important;
color:#fff !important;
}

</style>
<!----------------------start of education department list table--------------------------->
<table  class="display table table-bordered" style="border-collapse: collapse;" border="1" cellspacing="0"  width="100%" id="table_export">
		
	<thead>
		<tr>
			<th class="table_td_width">
				Sl. No.
           	</th>
			<th><div>Date of demand released</div></th>
			<th><div>Notification </div></th>
			
			<!--  <th><div>No. of CL due for whom demand not released</div></th>-->
			<!-- <th><div>Action</div></th>-->
			
	  
		</tr>
	</thead>
	<tbody>
		<?php
		$counter=1;
		foreach($cmrf_transaction as $row):

		?>
		<tr>
			<td class="table_td_width">
           		<?php echo $counter++;?>
           	</td>
			<td>

					<?php echo $row['drel_date'];?>

           </td>
		  
			<td><?php echo 'LRD has released the sum of Rupees"'.$row['drel_amount'].'" for "'.$row['drel_cl_no'].'"  no of rescued child labours vide letter no "'.$row['drel_letter_no'].'" dated against your demand letter no "'.$row['dr_letter_no'].'" dated "'.$row['dr_date'].'" '?>
                    </td>
			
	  
			
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
<!---------------------end----------------------------------->


