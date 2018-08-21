
 <h5 style="text-align:center"> ORDER OF PLACEMENT OF A CHILD IN AN INSTITUTION </h5>
<p  style="text-align:center">(CCI/Fit Facility)</p>
<!--<p style="text-align:center"><i><u><b>An FIR must include the following Items</b></u></i></p>-->

<p style="text-align:left;"> Case No……………………………… <p>
<p >To,  <p>
<p >The Officer-in-Charge, <p>


 <?php foreach($cwc_data as $row): ?>
 
 <?php
 if($dob){
 $days=strtotime($row['dob'])- strtotime($row['date_rescued']);
 };
 $age=round($days/365); 
 $time  = strtotime($row['order_date']);//cwc order date

 
  //echo date('jS  F Y ',strtotime($row['order_date']));
 ?>
<p style="text-align:justify;"> Whereas on the <?php  echo date('jS',$time); ?>    day of <?php echo date('F',$time); ?>  <?php echo date('Y',$time);
 ?> (name of the child) <span style="text-transform:uppercase; font-weight:bold"><?php echo $row['child_name'];?></span>, son/daughter of <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['father_name']; ?></span>  aged <?php if($age) {echo $age;}else{echo $row['age'];} ?> residing at <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['postal_address'].','.$row['panchayat_name'].','.$row['police_station_name'].','.$row['block'].','.$row['district'];?> </span>being in care and protection under the Juvenile Justice (Care and Protection) Act 2015 is ordered by the Child Welfare Committee <?php echo $row['cwc_name'];?>, to be kept in the Children’s Home/SAA/Fit Facility <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['cci_name']; ?></span> for a period of ....................
 This is to authorize and require you to receive the said child in your charge, and to keep him/her in the Children’s Home/ Fit Facility /SAA   <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['cci_name']; ?></span> for the aforesaid order to be carried into execution according to law. The concerned official shall upload the details in case of an orphan or abandoned child in the TrackChild/ relevant Web Portal.  
Given under my hand and the seal of Child Welfare Committee. </p>

<?php endforeach;?>
<p>This ............ day of........... </p>


<p style="text-align:right">(Signature) </p>
<p style="text-align:right">Chairperson/ Member </p>
<p style="text-align:right">Child Welfare Committee </p>