<?php
include 'db.php';
$parent_blockid = $_GET['parent_blockid']; 
$result=mysql_query("select id,name from panchayat_names where block_id='$parent_blockid'");
?>
<option value="">Select</option>
<?php
while($fetch_area=mysql_fetch_assoc($result))
{
?>
<option value="<?php echo $fetch_area['id'] ;  ?>"><?php echo $fetch_area['name'] ;  ?></option>
<?php } ?>
