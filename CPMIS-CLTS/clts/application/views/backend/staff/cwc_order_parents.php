
<h5 style="text-align:center;">ORDER FOR PLACEMENT OF CHILD UNDER THE CARE OF A PARENT, GUARDIAN OR FIT PERSON  </h5>
<p style="text-align:left">Case No. …….of ……………….20……………………… </p>
<p style="text-align:left">In Re................ </p>
<?php foreach($cwc_data as $row): ?>
<p style="text-align:justify;">
 Whereas (name of the child) <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['child_name'];?></span> has on .(date)  <span style="text-transform:uppercase;font-weight:bold"><?php echo date('m-d-Y', strtotime($row['date_rescued']));?></span> been found to be in need of care and protection, and is placed under the care and supervision of (name) <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['person_name'];?></span> (address)   <span style="text-transform:uppercase;"><?php echo $row['person_address'].','.$row['person_district']?></span> on executing a bond by the said ………………….. and the Committee is satisfied that it is expedient to deal with the said child by making an order placing him/her under supervision. 
Reason for the child being produced before the CWC <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['cwc_name'];?></span></p>
<p style="text-align:justify;">
 It  is  hereby  ordered  that  the  said  child  be  placed  under  the  supervision  of  (name)   <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['person_name'];?></span> (address)  <span style="text-transform:uppercase;font-weight:bold"><?php echo $row['person_address'].','.$row['person_district']?></span> for a period of .......................
</p>
 <?php endforeach;?>
 <p> This shall be subject to the following conditions that: </p>
 <p style="text-align:justify;">
1. the child along with the copies of the order and the bond, if any, executed by the said…………………………. shall be produced before the Committee as and when required by the person executing the bond  
<p style="text-align:justify;">
2. the child shall reside at ……………………….. for a period of ………………….</p>
 
<p style="text-align:justify;">
3. the child shall not be allowed to quit the district jurisdiction of …………………without the permission of the Committee.  </p>
<p style="text-align:justify;">
4. the child shall go to school/ vocational training centre regularly. The child shall attend ……………….(name of) school/ vocational training centre (if already identified) at ………………….(address of school/ vocational training centre). <p>
<p style="text-align:justify;">
5. the person under whose care the child is placed shall arrange for the proper care, education and welfare of the child. 
</p> 
<p style="text-align:justify;">
6. the child shall not be allowed to associate with undesirable characters and shall be prevented from coming in conflict with law.  </p>
</p>
<p style="text-align:justify;">
7. the child shall be prevented from taking narcotic drugs or psychotropic substances or any other intoxicants.  
</p>
<p style="text-align:justify;">
8. the directions given by the Committee from time to time, for the due observance of the conditions mentioned above, shall be carried out. 
</p>
 <p style="text-align:teat-align:left;">
 <?php $time  = strtotime($row['order_date']);//cwc order date

 ?>
Dated this     <?php  echo date('jS',$time); ?>    day of <?php echo date('F',$time); ?>  <?php echo date('Y',$time);
 ?>
   </p>                                                                                         
<p style="text-align:right;">   (Signature) </p>
<p style="text-align:right;">

Chairperson/ Member </p>
<p style="text-align:right;">
 Child Welfare Committee 
 </p>