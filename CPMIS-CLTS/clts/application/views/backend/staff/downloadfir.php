<?php  
foreach ($uploadFir_data as $row): 
?>


<h1 style="text-align:center">Proforma for Reporting the First Information (FIR)
of a Cognizable Offence
</h1>
<p  style="text-align:center">(Under Section 154 of the Criminal Procedure Code)</p>
<!--<p style="text-align:center"><i><u><b>An FIR must include the following Items</b></u></i></p>-->

<h5 style="text-align:left;">Police Station :</h5><h5 style="text-align:right;padding-top:-40px;">District :</h5>


<p>1. Personal details of the Complainant / Informant:</p>
	<ul style="list-style-type:none;">
	<li style="padding:10px;">(a) Name: </li>
	
	<li style="padding:10px;">(b) Father's / Husband's Name:</li>
	
	<li style="padding:10px;">(c) Address:</li>
	
	<li style="padding:10px;">(d) Phone number & Fax : </li>
	
	<li style="padding:10px;">(e) Email: </li>
	</ul>
<p>2. Place of Occurrence: <b><?php echo $row['area_name']; ?></b></p>
	<ul style="list-style-type:none;">
	<li style="padding:10px;">a) Distance from the police station:<li>
	

	<li style="padding:10px;">b) Direction from the police station:</li>
	
	</ul>
<p>3. Date and Hour of Occurrence: <b><?php echo $row['idate_of_rescue']; ?></b></p>
<p>4. Offence:</p>
	<ul style="list-style-type:none;">
	<li style="padding:10px;">a) Nature of the offence : <b>Engaged Child Labour in work place</b></li>
	<li style="padding:10px;">b) Section: </li>
	<li style="padding:10px;">c) Particulars of the property (in case one has got stolen):</li>
	</ul>
<p>5. Description of the accused:  <?php
$child_id=$row['child_id'] ;

if($row['basic_place_of_rescue']=='within'){
	$sql_within=mysql_fetch_assoc(mysql_query("select employer_name, wcontact_no, employer_detail_address from child_within_state where child_id='$child_id' ")) ;
	?>
 Name: <?php echo $sql_within['employer_name']; ?><br>
 Phno: <?php echo $sql_within['wcontact_no']; ?><br>
 Address: <?php echo $sql_within['employer_detail_address']; ?><br><?php }else{
 	$sql_outside=mysql_fetch_assoc(mysql_query("select * from child_outside_state where child_id='$child_id'")) ; ?>
 Name: <?php echo $sql_outside['employer_name']; ?><br>
 Phno: <?php echo $sql_outside['ocontact_no']; ?><br>
 Address: <?php echo $sql_outside['employer_address']; ?><br>		
<?php }?></p>
<p>6. Details of witnesses (if any):</p>
<p>7. Complaint: Briefly lay down the facts regarding the incident reported in an accurate
 way<br>
 <?php echo $row['child_name'].", ".$row['father_name'].", ".$row['postal_address'] ; ?>
 </p>
 
 
 <p style="text-align:right;margin-top:100px;">Signature or Thumb Impression</p>
 
<?php endforeach; ?>

